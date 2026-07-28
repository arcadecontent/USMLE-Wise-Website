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
    $apiUrl       = 'https://team.manikmadaan.com/api/public/rotations';
    $cacheFile    = sys_get_temp_dir() . '/usmlewise_rotations_cache.json';
    $cacheTtl     = 60;          // seconds; Varnish is the real page cache
    $maxBytes     = 524288;      // 512 KB safety cap
    $fallbackFile = __DIR__ . '/rotations-fallback.json';

    $isValid = static function ($decoded): bool {
        return is_array($decoded)
            && isset($decoded['rotations'], $decoded['filters'])
            && is_array($decoded['rotations'])
            && count($decoded['rotations']) > 0
            && is_array($decoded['filters']);
    };

    // 1. Disk cache (fresh → done; stale → keep as fallback for step 2).
    $cached = null;
    if (is_readable($cacheFile)) {
        $raw = @file_get_contents($cacheFile);
        $decoded = is_string($raw) ? json_decode($raw, true) : null;
        if ($isValid($decoded)) {
            $cached = $decoded;
            if (time() - (int) @filemtime($cacheFile) < $cacheTtl) {
                return $cached;
            }
        }
    }

    // 2. Fetch from the CRM with tight timeouts.
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
            return $decoded;
        }
    }

    // 3. CRM unreachable/invalid: serve the stale copy (and back off retries).
    if ($cached !== null) {
        @touch($cacheFile);
        return $cached;
    }

    // 4. Committed snapshot.
    $raw = @file_get_contents($fallbackFile);
    $decoded = is_string($raw) ? json_decode($raw, true) : null;
    if ($isValid($decoded)) {
        return $decoded;
    }
    return ['rotations' => [], 'filters' => ['specialties' => [], 'states' => [], 'settings' => []]];
}
