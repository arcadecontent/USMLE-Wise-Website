<?php
/**
 * Conference Finder data source — the CRM is the single source of truth.
 *
 * The conference list, specialty filters, status filters and "last updated"
 * date on /conference-finder render from this data. It is fetched from the
 * CRM's public read-only feed and cached on disk; when the CRM cannot be
 * reached the last good copy is served, and data/conferences-fallback.json
 * (a committed snapshot) is the final fallback, so the page can never break
 * because of the CRM.
 *
 * Manage conferences at https://team.manikmadaan.com/admin/conferences.
 */

function usmlewise_conferences_payload(): array
{
    static $memo = null;
    if ($memo !== null) {
        return $memo;
    }

    $apiUrl       = 'https://team.manikmadaan.com/api/public/conferences';
    $cacheFile    = sys_get_temp_dir() . '/usmlewise_conferences_cache.json';
    $maxBytes     = 1048576;     // 1 MB safety cap
    $fallbackFile = __DIR__ . '/conferences-fallback.json';

    $isValid = static function ($decoded): bool {
        return is_array($decoded)
            && isset($decoded['conferences'], $decoded['specialties'], $decoded['groups'], $decoded['statuses'], $decoded['last_updated'])
            && is_array($decoded['conferences'])
            && count($decoded['conferences']) > 0
            && is_array($decoded['specialties'])
            && is_array($decoded['groups'])
            && is_array($decoded['statuses'])
            && is_string($decoded['last_updated']);
    };

    // 1. Fetch fresh from the CRM. The disk cache exists only as a fallback
    //    for when the CRM is unreachable.
    $context = stream_context_create([
        'http' => [
            'method'        => 'GET',
            'timeout'       => 4,
            'ignore_errors' => true,
            'header'        => "Accept: application/json\r\nUser-Agent: usmlewise-conferences-page\r\n",
        ],
    ]);
    $body = @file_get_contents($apiUrl, false, $context, 0, $maxBytes);
    if (is_string($body) && $body !== '') {
        $decoded = json_decode($body, true);
        if ($isValid($decoded)) {
            @file_put_contents($cacheFile . '.tmp', $body, LOCK_EX);
            @rename($cacheFile . '.tmp', $cacheFile);
            return $memo = $decoded;
        }
    }

    // 2. CRM unreachable/invalid: serve the last good copy.
    if (is_readable($cacheFile)) {
        $raw = @file_get_contents($cacheFile);
        $decoded = is_string($raw) ? json_decode($raw, true) : null;
        if ($isValid($decoded)) {
            return $memo = $decoded;
        }
    }

    // 3. Committed snapshot.
    $raw = @file_get_contents($fallbackFile);
    $decoded = is_string($raw) ? json_decode($raw, true) : null;
    if ($isValid($decoded)) {
        return $memo = $decoded;
    }
    return $memo = [
        'last_updated' => date('F j, Y'),
        'specialties'  => [],
        'groups'       => [],
        'statuses'     => [],
        'conferences'  => [],
    ];
}

/**
 * Parent specialty groups for the sidebar filter, in display order
 * (parent value => ['label' => ..., 'children' => [...]]).
 */
function usmlewise_conference_specialty_groups(): array
{
    return usmlewise_conferences_payload()['groups'];
}
