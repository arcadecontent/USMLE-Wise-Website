<?php
/**
 * USMLE Wise — analytics admin panel.
 * Password-protected dashboard over the first-party events database.
 * Varnish passes /admin/ URLs, so responses are never cached.
 */

header('Cache-Control: private, no-store');
header('X-Robots-Tag: noindex, nofollow');

require __DIR__ . '/../api/analytics-common.php';

session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/admin/',
    'secure' => !empty($_SERVER['HTTPS']),
    'httponly' => true,
    'samesite' => 'Lax',
]);
session_name('uwadmin');
session_start();

$config = uw_analytics_config();
$loginError = '';

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: /admin/');
    exit;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST' && isset($_POST['password'])) {
    $hash = $config['password_hash'] ?? '';
    if ($hash !== '' && password_verify((string) $_POST['password'], $hash)) {
        session_regenerate_id(true);
        $_SESSION['uw_admin'] = true;
        header('Location: /admin/');
        exit;
    }
    sleep(1); // slow down guessing
    $loginError = 'Wrong password.';
}

$authed = !empty($_SESSION['uw_admin']);

if ($authed) {
    $days = (int) ($_GET['days'] ?? 30);
    if (!in_array($days, [7, 30, 90], true)) {
        $days = 30;
    }
    $since = time() - $days * 86400;

    $pdo = uw_analytics_db();

    $pages = $pdo->query("SELECT DISTINCT page FROM events ORDER BY page")->fetchAll(PDO::FETCH_COLUMN);
    $page = $_GET['page'] ?? '/step-1-high-yield-crash-course';
    if ($page !== 'all' && !in_array($page, $pages, true)) {
        $page = count($pages) ? $pages[0] : 'all';
    }

    $where = 'ts >= ?';
    $args = [$since];
    if ($page !== 'all') {
        $where .= ' AND page = ?';
        $args[] = $page;
    }

    $q = function (string $sql) use ($pdo, $args) {
        $stmt = $pdo->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    };

    $totals = $q("SELECT
        SUM(event = 'pageview') AS views,
        COUNT(DISTINCT CASE WHEN event = 'pageview' THEN vid END) AS uniques,
        COUNT(DISTINCT CASE WHEN event = 'pageview' THEN sid END) AS sessions,
        SUM(event = 'enroll_click') AS enroll,
        SUM(event = 'checkout_click') AS checkout,
        SUM(event = 'guidance_click') AS guidance,
        SUM(CASE WHEN event = 'time' THEN dur ELSE 0 END) AS secs,
        COUNT(DISTINCT CASE WHEN event = 'time' THEN sid END) AS timed_sessions
        FROM events WHERE $where")->fetch(PDO::FETCH_ASSOC);

    $daily = $q("SELECT date(ts, 'unixepoch') AS day,
        SUM(event = 'pageview') AS views,
        COUNT(DISTINCT CASE WHEN event = 'pageview' THEN vid END) AS uniques,
        SUM(event = 'enroll_click') AS enroll,
        SUM(event = 'checkout_click') AS checkout,
        SUM(event = 'guidance_click') AS guidance,
        SUM(CASE WHEN event = 'time' THEN dur ELSE 0 END) AS secs,
        COUNT(DISTINCT CASE WHEN event = 'time' THEN sid END) AS timed_sessions
        FROM events WHERE $where
        GROUP BY day ORDER BY day")->fetchAll(PDO::FETCH_ASSOC);

    $referrers = $q("SELECT ref, COUNT(*) AS n FROM events
        WHERE $where AND event = 'pageview' AND ref != ''
        GROUP BY ref ORDER BY n DESC LIMIT 10")->fetchAll(PDO::FETCH_ASSOC);

    // Cross-page tables use only the time filter, so "which page" is
    // answerable even while a single page is selected above.
    $byPage = $pdo->prepare("SELECT page,
        SUM(event = 'pageview') AS views,
        SUM(event = 'guidance_click') AS guidance,
        SUM(event = 'enroll_click') AS enroll,
        SUM(event = 'checkout_click') AS checkout
        FROM events WHERE ts >= ?
        GROUP BY page ORDER BY views DESC LIMIT 25");
    $byPage->execute([$since]);
    $byPage = $byPage->fetchAll(PDO::FETCH_ASSOC);

    $guidanceSpots = $pdo->prepare("SELECT page, meta, COUNT(*) AS n
        FROM events WHERE ts >= ? AND event = 'guidance_click'
        GROUP BY page, meta ORDER BY n DESC LIMIT 25");
    $guidanceSpots->execute([$since]);
    $guidanceSpots = $guidanceSpots->fetchAll(PDO::FETCH_ASSOC);

    $views = (int) ($totals['views'] ?? 0);
    $enroll = (int) ($totals['enroll'] ?? 0);
    $checkout = (int) ($totals['checkout'] ?? 0);
    $timedSessions = (int) ($totals['timed_sessions'] ?? 0);
    $avgTime = $timedSessions ? (int) round($totals['secs'] / $timedSessions) : 0;
    $ctr = $views ? round($enroll / $views * 100, 1) : 0;
    $checkoutCtr = $views ? round($checkout / $views * 100, 1) : 0;

    $fmtTime = function (int $s): string {
        if ($s < 60) return $s . 's';
        return floor($s / 60) . 'm ' . ($s % 60) . 's';
    };
    $maxViews = max(1, ...array_merge([1], array_map(fn($d) => (int) $d['views'], $daily)));
}

function h(?string $s): string
{
    return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
}
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow">
<title>USMLE Wise — Admin</title>
<link rel="icon" type="image/svg+xml" href="/assets/usmle-design-system/assets/emblem.svg" />
<style>
:root { --ink:#12233d; --ink2:#5a6b82; --line:#e3e8ef; --bg:#f6f8fb; --accent:#1d4ed8; --card:#fff; }
* { box-sizing:border-box; margin:0; }
body { font:15px/1.55 -apple-system,"Segoe UI",Roboto,Helvetica,Arial,sans-serif; background:var(--bg); color:var(--ink); }
.wrap { max-width:1080px; margin:0 auto; padding:32px 20px 64px; }
header.bar { display:flex; align-items:center; justify-content:space-between; gap:16px; margin-bottom:28px; flex-wrap:wrap; }
header.bar h1 { font-size:20px; font-weight:650; }
header.bar .sub { color:var(--ink2); font-size:13px; }
.controls { display:flex; gap:10px; align-items:center; flex-wrap:wrap; }
.controls a.range { padding:6px 12px; border:1px solid var(--line); border-radius:8px; text-decoration:none; color:var(--ink2); font-size:13px; background:var(--card); }
.controls a.range.on { background:var(--accent); border-color:var(--accent); color:#fff; }
select { padding:6px 10px; border:1px solid var(--line); border-radius:8px; font-size:13px; background:var(--card); color:var(--ink); }
.cards { display:grid; grid-template-columns:repeat(auto-fit,minmax(150px,1fr)); gap:14px; margin-bottom:28px; }
.card { background:var(--card); border:1px solid var(--line); border-radius:12px; padding:16px 18px; }
.card .k { font-size:12px; letter-spacing:.04em; text-transform:uppercase; color:var(--ink2); margin-bottom:6px; }
.card .v { font-size:26px; font-weight:650; }
.card .s { font-size:12px; color:var(--ink2); margin-top:2px; }
.panel { background:var(--card); border:1px solid var(--line); border-radius:12px; padding:20px 22px; margin-bottom:24px; }
.panel h2 { font-size:15px; font-weight:650; margin-bottom:14px; }
.chart { display:flex; align-items:flex-end; gap:3px; height:160px; }
.chart .col { flex:1; display:flex; flex-direction:column; justify-content:flex-end; align-items:center; gap:4px; min-width:0; }
.chart .bar { width:100%; max-width:34px; background:var(--accent); border-radius:4px 4px 0 0; min-height:2px; opacity:.85; }
.chart .lbl { font-size:10px; color:var(--ink2); white-space:nowrap; overflow:hidden; max-width:100%; }
table { width:100%; border-collapse:collapse; font-size:13.5px; }
th, td { text-align:right; padding:8px 10px; border-bottom:1px solid var(--line); }
th:first-child, td:first-child { text-align:left; }
th { color:var(--ink2); font-weight:600; font-size:12px; text-transform:uppercase; letter-spacing:.03em; }
tr:last-child td { border-bottom:none; }
.muted { color:var(--ink2); }
.login { max-width:360px; margin:12vh auto 0; }
.login input[type=password] { width:100%; padding:11px 14px; border:1px solid var(--line); border-radius:10px; font-size:15px; margin:14px 0; }
.login button { width:100%; padding:11px; background:var(--accent); color:#fff; border:none; border-radius:10px; font-size:15px; font-weight:600; cursor:pointer; }
.err { color:#b91c1c; font-size:13.5px; }
a.logout { color:var(--ink2); font-size:13px; }
.notice { background:#fef9c3; border:1px solid #fde047; border-radius:10px; padding:12px 16px; font-size:13.5px; margin-bottom:20px; }
</style>
</head>
<body>
<?php if (!$authed): ?>
<div class="wrap login">
  <div class="panel">
    <h2 style="font-size:18px">USMLE Wise Admin</h2>
    <?php if (!($config['password_hash'] ?? '')): ?>
      <p class="notice">No admin password is configured yet. Create
      <code>shared/analytics/config.php</code> on the server.</p>
    <?php endif; ?>
    <form method="post" action="/admin/">
      <input type="password" name="password" placeholder="Password" autofocus autocomplete="current-password">
      <?php if ($loginError): ?><p class="err"><?= h($loginError) ?></p><?php endif; ?>
      <button type="submit">Sign in</button>
    </form>
  </div>
</div>
<?php else: ?>
<div class="wrap">
  <header class="bar">
    <div>
      <h1>Analytics</h1>
      <div class="sub">Page: <strong><?= h($page === 'all' ? 'All pages' : $page) ?></strong>
        · last <?= $days ?> days · dates in UTC</div>
    </div>
    <div class="controls">
      <?php foreach ([7, 30, 90] as $d): ?>
        <a class="range <?= $d === $days ? 'on' : '' ?>"
           href="/admin/?days=<?= $d ?>&amp;page=<?= urlencode($page) ?>"><?= $d ?>d</a>
      <?php endforeach; ?>
      <form method="get" action="/admin/">
        <input type="hidden" name="days" value="<?= $days ?>">
        <select name="page" onchange="this.form.submit()">
          <option value="all" <?= $page === 'all' ? 'selected' : '' ?>>All pages</option>
          <?php foreach ($pages as $p): ?>
            <option value="<?= h($p) ?>" <?= $p === $page ? 'selected' : '' ?>><?= h($p) ?></option>
          <?php endforeach; ?>
        </select>
      </form>
      <a class="logout" href="/admin/?logout=1">Log out</a>
    </div>
  </header>

  <div class="cards">
    <div class="card"><div class="k">Page views</div><div class="v"><?= number_format($views) ?></div></div>
    <div class="card"><div class="k">Unique visitors</div><div class="v"><?= number_format((int) $totals['uniques']) ?></div></div>
    <div class="card"><div class="k">Sessions</div><div class="v"><?= number_format((int) $totals['sessions']) ?></div></div>
    <div class="card"><div class="k">Enroll clicks</div><div class="v"><?= number_format($enroll) ?></div>
      <div class="s"><?= $ctr ?>% of views</div></div>
    <div class="card"><div class="k">Checkout clicks</div><div class="v"><?= number_format($checkout) ?></div>
      <div class="s"><?= $checkoutCtr ?>% of views</div></div>
    <div class="card"><div class="k">Guidance call clicks</div><div class="v"><?= number_format((int) $totals['guidance']) ?></div>
      <div class="s"><?= $views ? round((int) $totals['guidance'] / $views * 100, 1) : 0 ?>% of views</div></div>
    <div class="card"><div class="k">Avg time on page</div><div class="v"><?= $fmtTime($avgTime) ?></div>
      <div class="s">per session</div></div>
  </div>

  <div class="panel">
    <h2>Daily page views</h2>
    <?php if (!$daily): ?>
      <p class="muted">No data yet. Events appear here as soon as visitors hit the tracked pages.</p>
    <?php else: ?>
    <div class="chart">
      <?php foreach ($daily as $d): ?>
        <div class="col">
          <div class="bar" style="height:<?= max(2, round($d['views'] / $maxViews * 140)) ?>px"
               title="<?= h($d['day']) ?>: <?= (int) $d['views'] ?> views"></div>
          <div class="lbl"><?= h(substr($d['day'], 5)) ?></div>
        </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>

  <div class="panel">
    <h2>Daily breakdown</h2>
    <table>
      <tr><th>Date</th><th>Views</th><th>Uniques</th><th>Enroll clicks</th><th>Checkout clicks</th><th>Guidance clicks</th><th>Avg time</th></tr>
      <?php foreach (array_reverse($daily) as $d):
          $dAvg = $d['timed_sessions'] ? (int) round($d['secs'] / $d['timed_sessions']) : 0; ?>
      <tr>
        <td><?= h($d['day']) ?></td>
        <td><?= (int) $d['views'] ?></td>
        <td><?= (int) $d['uniques'] ?></td>
        <td><?= (int) $d['enroll'] ?></td>
        <td><?= (int) $d['checkout'] ?></td>
        <td><?= (int) $d['guidance'] ?></td>
        <td><?= $fmtTime($dAvg) ?></td>
      </tr>
      <?php endforeach; ?>
      <?php if (!$daily): ?><tr><td colspan="7" class="muted">No data yet</td></tr><?php endif; ?>
    </table>
  </div>

  <div class="panel">
    <h2>Activity by page <span class="muted" style="font-weight:400;font-size:12px">(all pages, last <?= $days ?> days)</span></h2>
    <table>
      <tr><th>Page</th><th>Views</th><th>Guidance clicks</th><th>Enroll clicks</th><th>Checkout clicks</th></tr>
      <?php foreach ($byPage as $r): ?>
      <tr>
        <td style="max-width:420px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap"><?= h($r['page']) ?></td>
        <td><?= (int) $r['views'] ?></td>
        <td><?= (int) $r['guidance'] ?></td>
        <td><?= (int) $r['enroll'] ?></td>
        <td><?= (int) $r['checkout'] ?></td>
      </tr>
      <?php endforeach; ?>
      <?php if (!$byPage): ?><tr><td colspan="5" class="muted">No data yet</td></tr><?php endif; ?>
    </table>
  </div>

  <div class="panel">
    <h2>Guidance call clicks by placement <span class="muted" style="font-weight:400;font-size:12px">(all pages, last <?= $days ?> days)</span></h2>
    <table>
      <tr><th>Page</th><th>Button (header / footer / body)</th><th>Clicks</th></tr>
      <?php foreach ($guidanceSpots as $r): ?>
      <tr>
        <td style="max-width:340px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap"><?= h($r['page']) ?></td>
        <td><?= h($r['meta']) ?></td>
        <td><?= (int) $r['n'] ?></td>
      </tr>
      <?php endforeach; ?>
      <?php if (!$guidanceSpots): ?><tr><td colspan="3" class="muted">No guidance call clicks yet</td></tr><?php endif; ?>
    </table>
  </div>

  <div class="panel">
    <h2>Top referrers</h2>
    <table>
      <tr><th>Referrer</th><th>Views</th></tr>
      <?php foreach ($referrers as $r): ?>
      <tr><td style="max-width:520px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap"><?= h($r['ref']) ?></td>
          <td><?= (int) $r['n'] ?></td></tr>
      <?php endforeach; ?>
      <?php if (!$referrers): ?><tr><td colspan="2" class="muted">Direct traffic only so far</td></tr><?php endif; ?>
    </table>
  </div>
</div>
<?php endif; ?>
</body>
</html>
