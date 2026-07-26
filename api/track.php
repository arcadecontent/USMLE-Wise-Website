<?php
/**
 * Analytics beacon endpoint. Receives small JSON POSTs from
 * /js/uw-track.js and appends them to the events table.
 * POST requests bypass Varnish, so every hit reaches PHP.
 */

header('Cache-Control: private, no-store');

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    http_response_code(405);
    exit;
}

$raw = file_get_contents('php://input', false, null, 0, 4096);
$data = json_decode($raw, true);
if (!is_array($data)) {
    http_response_code(400);
    exit;
}

$allowed = ['pageview', 'enroll_click', 'checkout_click', 'time'];
$event = $data['e'] ?? '';
if (!in_array($event, $allowed, true)) {
    http_response_code(400);
    exit;
}

$ua = substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 250);
if ($ua === '' || preg_match('/bot|crawl|spider|headless|curl|wget|python|monitor/i', $ua)) {
    http_response_code(204);
    exit;
}

$clean = static function ($v, int $max) {
    return substr(preg_replace('/[^\P{C}]+/u', '', (string) $v), 0, $max);
};

$page = $clean($data['p'] ?? '', 200);
$vid  = $clean($data['v'] ?? '', 40);
$sid  = $clean($data['s'] ?? '', 40);
if ($page === '' || $vid === '' || $sid === '') {
    http_response_code(400);
    exit;
}

$dur = 0;
if ($event === 'time') {
    $dur = (int) ($data['d'] ?? 0);
    if ($dur < 1 || $dur > 7200) {
        http_response_code(204);
        exit;
    }
}

require __DIR__ . '/analytics-common.php';

try {
    $pdo = uw_analytics_db();
    $stmt = $pdo->prepare(
        'INSERT INTO events (ts, event, page, vid, sid, dur, ref, meta, ua)
         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)'
    );
    $stmt->execute([
        time(),
        $event,
        $page,
        $vid,
        $sid,
        $dur,
        $clean($data['r'] ?? '', 300),
        $clean($data['m'] ?? '', 80),
        $ua,
    ]);
} catch (Throwable $e) {
    error_log('uw-track: ' . $e->getMessage());
}

http_response_code(204);
