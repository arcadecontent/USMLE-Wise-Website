<?php
/**
 * Sitemap, served at /sitemap.xml (routed in routes.php; it replaced the
 * static sitemap.xml, which is why the URL now falls through to index.php).
 *
 * Curated pages are listed by hand below. Rotation detail pages come from the
 * CRM feed (data/rotations.php), so a placement added at
 * team.manikmadaan.com/admin/rotations gets submitted to search engines with
 * no code change, and a retired one drops out on its own.
 *
 * Rotation entries carry no <lastmod>: the CRM feed exposes no per-rotation
 * timestamp, and stamping all of them with today's date every time the file is
 * requested would make the signal worthless across the whole sitemap. Add real
 * values here if the feed ever grows an updated_at.
 */

require_once __DIR__ . '/data/rotations.php';

$base = 'https://usmlewise.com';

// [path, lastmod, changefreq, priority]
$curatedPages = [
    ['/',                             '2026-07-07', 'weekly',  '1.0'],
    ['/case-study-ahmed',             '2026-07-07', 'monthly', '0.7'],
    ['/clinical-rotations',           '2026-07-07', 'monthly', '0.9'],
    ['/coaching',                     '2026-07-07', 'monthly', '0.9'],
    ['/step-1-high-yield-crash-course', '2026-07-07', 'monthly', '0.8'],
    ['/step-2-live-crash-course',     '2026-08-31', 'monthly', '0.8'],
    ['/step-3-live-crash-course',     '2026-08-31', 'monthly', '0.8'],
    ['/coaching-step1-mastery',       '2026-07-07', 'monthly', '0.8'],
    ['/coaching-step1-review',        '2026-07-07', 'monthly', '0.8'],
    ['/coaching-step23-mastery',      '2026-07-07', 'monthly', '0.8'],
    ['/coaching-tutoring',            '2026-07-07', 'monthly', '0.8'],
    ['/match-eras-cv',                '2026-07-07', 'monthly', '0.8'],
    ['/match-interview',              '2026-07-07', 'monthly', '0.8'],
    ['/match-lor',                    '2026-07-07', 'monthly', '0.8'],
    ['/match',                        '2026-07-07', 'monthly', '0.9'],
    ['/match-ps3x',                   '2026-07-07', 'monthly', '0.8'],
    ['/match-soap',                   '2026-08-12', 'monthly', '0.8'],
    ['/match-signaling',              '2026-08-12', 'monthly', '0.8'],
    ['/match-maker',                  '2026-10-02', 'monthly', '0.8'],
    ['/policy',                       '2026-07-07', 'monthly', '0.3'],
    ['/qa',                           '2026-07-07', 'monthly', '0.7'],
    ['/research-catalyst',            '2026-07-07', 'monthly', '0.8'],
    ['/research-junior-scientist',    '2026-07-07', 'monthly', '0.8'],
    ['/research-original',            '2026-07-07', 'monthly', '0.8'],
    ['/research-networking',          '2026-08-12', 'monthly', '0.8'],
    ['/research-wise',                '2026-10-21', 'monthly', '0.8'],
    ['/research-cohort',              '2026-08-12', 'monthly', '0.8'],
    ['/research',                     '2026-07-07', 'monthly', '0.9'],
    ['/research-awards',              '2026-10-21', 'monthly', '0.7'],
    ['/research-coauthor',            '2026-09-12', 'monthly', '0.8'],
    ['/rotations',                    '2026-07-07', 'monthly', '0.9'],
    ['/testimonials',                 '2026-07-07', 'monthly', '0.7'],
];

// Rotation detail pages, in catalogue order. Only slugs the router can
// actually resolve are listed, so the sitemap never advertises a 404.
$rotationPaths = [];
foreach (usmlewise_rotations_payload()['rotations'] as $rotation) {
    if (!is_array($rotation) || empty($rotation['slug']) || empty($rotation['detail'])) {
        continue;
    }
    $rotationPaths[] = '/rotation-' . $rotation['slug'];
}

// Wiki: published articles only (never drafts, even when previewing locally),
// with the article's real `updated` date as <lastmod>. The hub and a section
// page are listed once they have at least one published article behind them.
require_once __DIR__ . '/data/wiki.php';
$wikiEntries = []; // [path, lastmod, priority]
$wikiSectionDates = [];
foreach (usmlewise_wiki_all() as $wikiArticle) {
    if ($wikiArticle['status'] !== 'published') {
        continue;
    }
    $d = (string) ($wikiArticle['updated'] ?? '');
    $wikiEntries[] = [usmlewise_wiki_url($wikiArticle), $d, $wikiArticle['section'] === 'glossary' ? '0.4' : '0.7'];
    $s = $wikiArticle['section'];
    $wikiSectionDates[$s] = max($wikiSectionDates[$s] ?? '', $d);
}
if ($wikiEntries) {
    foreach ($wikiSectionDates as $s => $d) {
        $wikiEntries[] = ['/wiki/' . $s, $d, '0.8'];
    }
    $wikiEntries[] = ['/wiki', max($wikiSectionDates), '0.9'];
}

header('Content-Type: application/xml; charset=UTF-8');

$esc = static function (string $v): string {
    return htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
};

echo '<?xml version="1.0" encoding="UTF-8"?>', "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">', "\n";

foreach ($curatedPages as [$path, $lastmod, $changefreq, $priority]) {
    echo '  <url>', "\n";
    echo '    <loc>', $esc($base . $path), '</loc>', "\n";
    echo '    <lastmod>', $esc($lastmod), '</lastmod>', "\n";
    echo '    <changefreq>', $esc($changefreq), '</changefreq>', "\n";
    echo '    <priority>', $esc($priority), '</priority>', "\n";
    echo '  </url>', "\n";
}

foreach ($wikiEntries as [$path, $lastmod, $priority]) {
    echo '  <url>', "\n";
    echo '    <loc>', $esc($base . $path), '</loc>', "\n";
    if ($lastmod !== '') {
        echo '    <lastmod>', $esc($lastmod), '</lastmod>', "\n";
    }
    echo '    <changefreq>monthly</changefreq>', "\n";
    echo '    <priority>', $esc($priority), '</priority>', "\n";
    echo '  </url>', "\n";
}

foreach ($rotationPaths as $path) {
    echo '  <url>', "\n";
    echo '    <loc>', $esc($base . $path), '</loc>', "\n";
    echo '    <changefreq>monthly</changefreq>', "\n";
    echo '    <priority>0.6</priority>', "\n";
    echo '  </url>', "\n";
}

echo '</urlset>', "\n";
