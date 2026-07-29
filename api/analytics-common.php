<?php
/**
 * Shared helpers for the first-party analytics system.
 *
 * The SQLite database and the admin config live OUTSIDE the release
 * directory (deploys swap releases/<ts> under current/), in
 * /home/usmlewise/htdocs/usmlewise.com/shared/analytics/. A local
 * fallback under the project keeps dev working.
 */

function uw_analytics_dir(): string
{
    $shared = '/home/usmlewise/htdocs/usmlewise.com/shared/analytics';
    if (is_dir($shared) && is_writable($shared)) {
        return $shared;
    }
    $local = __DIR__ . '/../.analytics-data';
    if (!is_dir($local)) {
        @mkdir($local, 0770, true);
    }
    return $local;
}

function uw_analytics_db(): PDO
{
    $path = uw_analytics_dir() . '/analytics.sqlite';
    $pdo = new PDO('sqlite:' . $path);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('PRAGMA journal_mode=WAL');
    $pdo->exec('PRAGMA busy_timeout=3000');
    $pdo->exec('CREATE TABLE IF NOT EXISTS events (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        ts INTEGER NOT NULL,
        event TEXT NOT NULL,
        page TEXT NOT NULL,
        vid TEXT NOT NULL,
        sid TEXT NOT NULL,
        dur INTEGER NOT NULL DEFAULT 0,
        ref TEXT NOT NULL DEFAULT "",
        meta TEXT NOT NULL DEFAULT "",
        ua TEXT NOT NULL DEFAULT ""
    )');
    $pdo->exec('CREATE INDEX IF NOT EXISTS idx_events_ts ON events (ts)');
    $pdo->exec('CREATE INDEX IF NOT EXISTS idx_events_event_ts ON events (event, ts)');
    $pdo->exec('CREATE INDEX IF NOT EXISTS idx_events_page_ts ON events (page, ts)');

    // Migrate older databases: add UTM columns if absent.
    $cols = $pdo->query('PRAGMA table_info(events)')->fetchAll(PDO::FETCH_COLUMN, 1);
    foreach (['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term'] as $c) {
        if (!in_array($c, $cols, true)) {
            $pdo->exec("ALTER TABLE events ADD COLUMN $c TEXT NOT NULL DEFAULT ''");
        }
    }
    return $pdo;
}

/** Admin config: ['password_hash' => string]. Lives in the shared dir, not in git. */
function uw_analytics_config(): array
{
    $file = uw_analytics_dir() . '/config.php';
    if (is_file($file)) {
        $cfg = include $file;
        if (is_array($cfg)) {
            return $cfg;
        }
    }
    $envPw = getenv('UW_ADMIN_PASSWORD');
    if ($envPw !== false && $envPw !== '') {
        return ['password_hash' => password_hash($envPw, PASSWORD_DEFAULT)];
    }
    return [];
}
