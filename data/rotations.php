<?php
/**
 * Rotations data source — the CRM is the single source of truth.
 *
 * The card grid and sidebar filters on /rotations render from this data.
 * It is fetched from the CRM's public read-only feed and cached on disk for
 * a minute; when the CRM cannot be reached the last good copy is served, and
 * data/rotations-fallback.json (a committed snapshot) is the final fallback,
 * so the page can never break because of the CRM.
 *
 * Manage rotations at https://team.manikmadaan.com/admin/rotations — edits
 * there purge this page's Varnish cache and appear on the site right away.
 */

function usmlewise_rotations_payload(): array
{
    static $memo = null;
    if ($memo !== null) {
        return $memo;
    }

    $apiUrl       = 'https://team.manikmadaan.com/api/public/rotations';
    $cacheFile    = sys_get_temp_dir() . '/usmlewise_rotations_cache.json';
    $maxBytes     = 1048576;     // 1 MB safety cap
    $fallbackFile = __DIR__ . '/rotations-fallback.json';

    $isValid = static function ($decoded): bool {
        return is_array($decoded)
            && isset($decoded['rotations'], $decoded['filters'])
            && is_array($decoded['rotations'])
            && count($decoded['rotations']) > 0
            && is_array($decoded['filters']);
    };

    // 1. Fetch fresh from the CRM. Varnish caches the rendered page for days
    //    and the CRM purges it on every edit, so a render must never reuse a
    //    possibly-stale disk copy — the disk cache exists only as a fallback
    //    for when the CRM is unreachable.
    $context = stream_context_create([
        'http' => [
            'method'        => 'GET',
            'timeout'       => 4,
            'ignore_errors' => true,
            'header'        => "Accept: application/json\r\nUser-Agent: usmlewise-rotations-page\r\n",
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
    return $memo = ['rotations' => [], 'filters' => ['specialties' => [], 'states' => [], 'settings' => []]];
}

/**
 * Find one rotation (with its position-derived number) by detail-page slug.
 */
function usmlewise_find_rotation_by_slug(string $slug): ?array
{
    $payload = usmlewise_rotations_payload();
    $position = 0;
    foreach ($payload['rotations'] as $entry) {
        $position++;
        if (($entry['slug'] ?? '') === $slug) {
            $entry['position'] = $position;
            return $entry;
        }
    }
    return null;
}
