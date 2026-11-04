<?php
/**
 * Research Award posts — the CRM feed plus any awards committed to the repo.
 *
 * The write-ups on /research-awards, in the research-page awards carousel and
 * at /research-awards/<slug> come from the CRM's public read-only feed. Each
 * award is shaped like a $blogPosts entry (category 'awards'). The feed is
 * fetched on every render and cached on disk; when the CRM cannot be reached
 * the last good copy is served, so the pages can never break because of the
 * CRM. An empty feed is valid and means nothing is published there.
 *
 * data/awards-fallback.json does double duty. Awards in it that the CRM does
 * NOT publish are appended to the feed, so an award can be added by committing
 * it here without waiting on the CRM. On a slug the CRM does publish, the CRM
 * wins, so editing an award there always beats the committed copy. When the
 * CRM is unreachable and the disk cache is cold, the file is the whole list.
 *
 * Manage awards at https://team.manikmadaan.com/admin/research-awards, or add
 * one to data/awards-fallback.json. Do not define the same slug in both.
 */

function usmlewise_crm_award_posts(): array
{
    static $memo = null;
    if ($memo !== null) {
        return $memo;
    }

    $apiUrl       = 'https://team.manikmadaan.com/api/public/research-awards';
    $cacheFile    = sys_get_temp_dir() . '/usmlewise_awards_cache.json';
    $maxBytes     = 1048576;     // 1 MB safety cap
    $fallbackFile = __DIR__ . '/awards-fallback.json';

    // An empty "awards" list is valid (everything hidden). Any bad element
    // makes the whole payload invalid.
    $isValid = static function ($decoded): bool {
        if (!is_array($decoded) || !isset($decoded['awards']) || !is_array($decoded['awards'])) {
            return false;
        }
        foreach ($decoded['awards'] as $a) {
            if (!is_array($a)
                || !isset($a['slug'], $a['title'], $a['body'])
                || !is_string($a['slug']) || !is_string($a['title']) || !is_string($a['body'])
                || preg_match('/\A[a-z0-9-]+\z/', $a['slug']) !== 1) {
                return false;
            }
        }
        return true;
    };

    // Give every award the fields the templates expect.
    $normalise = static function (array $decoded): array {
        $out = [];
        foreach ($decoded['awards'] as $a) {
            $out[] = $a + [
                'excerpt'  => '',
                'date'     => '',
                'read'     => 3,
                'author'   => 'USMLE Wise Team',
                'featured' => false,
                'image'    => '',
            ];
        }
        foreach ($out as &$a) {
            $a['category'] = USMLEWISE_AWARDS_CATEGORY;
        }
        unset($a);
        return $out;
    };

    // Newest first. Awards with no date sort last.
    $sorted = static function (array $awards): array {
        usort($awards, static function (array $x, array $y): int {
            return strcmp((string) $y['date'], (string) $x['date']);
        });
        return $awards;
    };

    // The awards committed to the repo, already normalised.
    $local = static function () use ($fallbackFile, $isValid, $normalise): array {
        $raw     = @file_get_contents($fallbackFile);
        $decoded = is_string($raw) ? json_decode($raw, true) : null;
        return $isValid($decoded) ? $normalise($decoded) : [];
    };

    // Append the committed awards the CRM does not publish. A slug the CRM
    // does publish is left alone, so the CRM always wins where the two overlap.
    $withLocal = static function (array $fromCrm) use ($local): array {
        $seen = [];
        foreach ($fromCrm as $a) {
            $seen[$a['slug']] = true;
        }
        foreach ($local() as $a) {
            if (!isset($seen[$a['slug']])) {
                $fromCrm[] = $a;
            }
        }
        return $fromCrm;
    };

    // 1. Fetch fresh from the CRM. The disk cache exists only as a fallback
    //    for when the CRM is unreachable.
    $context = stream_context_create([
        'http' => [
            'method'        => 'GET',
            'timeout'       => 4,
            'ignore_errors' => true,
            'header'        => "Accept: application/json\r\nUser-Agent: usmlewise-awards-page\r\n",
        ],
    ]);
    $body = @file_get_contents($apiUrl, false, $context, 0, $maxBytes);
    if (is_string($body) && $body !== '') {
        $decoded = json_decode($body, true);
        if ($isValid($decoded)) {
            @file_put_contents($cacheFile . '.tmp', $body, LOCK_EX);
            @rename($cacheFile . '.tmp', $cacheFile);
            return $memo = $sorted($withLocal($normalise($decoded)));
        }
    }

    // 2. CRM unreachable/invalid: serve the last good copy, still topped up
    //    with anything committed to the repo since that copy was taken.
    if (is_readable($cacheFile)) {
        $raw = @file_get_contents($cacheFile);
        $decoded = is_string($raw) ? json_decode($raw, true) : null;
        if ($isValid($decoded)) {
            return $memo = $sorted($withLocal($normalise($decoded)));
        }
    }

    // 3. No CRM and no cache: the committed awards are the whole list.
    return $memo = $sorted($local());
}
