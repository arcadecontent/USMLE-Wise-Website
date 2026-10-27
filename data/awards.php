<?php
/**
 * Research Award posts — the CRM is the single source of truth.
 *
 * The write-ups on /research-awards, in the research-page awards carousel and
 * at /research-awards/<slug> come from the CRM's public read-only feed. Each
 * award is shaped like a $blogPosts entry (category 'awards'). The feed is
 * fetched on every render and cached on disk; when the CRM cannot be reached
 * the last good copy is served, and data/awards-fallback.json (a committed
 * snapshot) is the final fallback, so the pages can never break because of
 * the CRM. An empty list is valid and means nothing is published.
 *
 * Manage awards at https://team.manikmadaan.com/admin/research-awards.
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
        usort($out, static function (array $x, array $y): int {
            return strcmp((string) $y['date'], (string) $x['date']);
        });
        return $out;
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
            return $memo = $normalise($decoded);
        }
    }

    // 2. CRM unreachable/invalid: serve the last good copy.
    if (is_readable($cacheFile)) {
        $raw = @file_get_contents($cacheFile);
        $decoded = is_string($raw) ? json_decode($raw, true) : null;
        if ($isValid($decoded)) {
            return $memo = $normalise($decoded);
        }
    }

    // 3. Committed snapshot.
    $raw = @file_get_contents($fallbackFile);
    $decoded = is_string($raw) ? json_decode($raw, true) : null;
    if ($isValid($decoded)) {
        return $memo = $normalise($decoded);
    }
    return $memo = [];
}
