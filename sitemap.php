<?php
/**
 * Sitemap, served at /sitemap.xml (routed in routes.php; it replaced the
 * static sitemap.xml, which is why the URL now falls through to index.php).
 *
 * Curated pages are listed by hand below. Everything else is generated from
 * the same data the site renders from, so a new entry shows up here with no
 * code change and a removed one drops out on its own:
 *   - rotation detail pages from the CRM feed (data/rotations.php)
 *   - wiki articles (published only) from wiki-content/
 *   - blog posts from data/posts.php, award write-ups from data/awards.php
 *   - team profiles from data/team.php (a member commented out of that file,
 *     such as a hidden team member, is not listed)
 *
 * Curated <lastmod> values are the date each page file last changed in git.
 * They are hard-coded because file mtimes are reset on every deploy, which
 * would stamp every page with the deploy date and make the signal worthless.
 * Bump the date when you change a page's content:
 *   git log -1 --format=%cs -- <file>.php
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
    ['/',                             '2026-11-17', 'weekly',  '1.0'],
    ['/case-study-ahmed',             '2026-11-10', 'monthly', '0.7'],
    ['/clinical-rotations',           '2026-11-04', 'monthly', '0.9'],
    ['/coaching',                     '2026-11-18', 'monthly', '0.9'],
    ['/step-1-high-yield-crash-course', '2026-11-18', 'monthly', '0.8'],
    ['/step-1-live-high-yield-crash-course', '2026-11-18', 'weekly', '0.8'],
    ['/step-2-high-yield-crash-course', '2026-11-18', 'monthly', '0.8'],
    ['/step-2-live-crash-course',     '2026-11-18', 'weekly', '0.8'],
    ['/step-3-high-yield-crash-course', '2026-11-18', 'monthly', '0.8'],
    ['/step-3-live-crash-course',     '2026-11-18', 'weekly', '0.8'],
    ['/coaching-step1-mastery',       '2026-11-18', 'monthly', '0.8'],
    ['/coaching-step1-review',        '2026-11-05', 'monthly', '0.8'],
    ['/coaching-step23-mastery',      '2026-11-18', 'monthly', '0.8'],
    ['/coaching-tutoring',            '2026-11-18', 'monthly', '0.8'],
    ['/match-eras-cv',                '2026-11-10', 'monthly', '0.8'],
    ['/match-interview',              '2026-11-21', 'monthly', '0.8'],
    ['/match-advanced-interviewing',  '2026-11-05', 'monthly', '0.8'],
    ['/match-lor',                    '2026-11-05', 'monthly', '0.8'],
    ['/match',                        '2026-11-21', 'monthly', '0.9'],
    ['/match-ps3x',                   '2026-11-05', 'monthly', '0.8'],
    ['/match-soap',                   '2026-11-05', 'monthly', '0.8'],
    ['/match-signaling',              '2026-11-05', 'monthly', '0.8'],
    ['/match-maker',                  '2026-11-05', 'monthly', '0.8'],
    ['/qbank',                        '2026-11-25', 'monthly', '0.8'],
    ['/match-mentorship',             '2026-11-05', 'monthly', '0.8'],
    ['/mastery',                      '2026-11-05', 'monthly', '0.8'],
    ['/policy',                       '2026-11-10', 'monthly', '0.3'],
    ['/qa',                           '2026-11-25', 'monthly', '0.7'],
    ['/contact',                      '2026-10-20', 'yearly',  '0.4'],
    ['/events',                       '2026-11-25', 'weekly',  '0.6'],
    ['/research-catalyst',            '2026-11-17', 'monthly', '0.8'],
    ['/research-junior-scientist',    '2026-11-15', 'monthly', '0.8'],
    ['/research-original',            '2026-11-03', 'monthly', '0.8'],
    ['/research-networking',          '2026-10-21', 'monthly', '0.8'],
    ['/research-wise',                '2026-11-17', 'monthly', '0.8'],
    ['/research-cohort',              '2026-10-21', 'monthly', '0.8'],
    ['/research-j1-fellowship',       '2026-11-05', 'monthly', '0.8'],
    ['/research',                     '2026-11-17', 'monthly', '0.9'],
    ['/research-awards',              '2026-10-27', 'monthly', '0.7'],
    ['/research-coauthor',            '2026-11-03', 'monthly', '0.8'],
    ['/conference-finder',            '2026-10-24', 'monthly', '0.7'],
    ['/rotations',                    '2026-11-05', 'monthly', '0.9'],
    ['/testimonials',                 '2026-11-10', 'monthly', '0.7'],
    ['/team',                         '2026-11-10', 'monthly', '0.6'],
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

// Blog: every post in data/posts.php (award write-ups are listed separately
// below), dated by its `updated` field when it has one, else its publish date.
// The /blog index takes the newest of those dates.
require_once __DIR__ . '/data/posts.php';
$blogEntries = []; // [path, lastmod, priority]
$blogNewest  = '';
foreach (usmlewise_blog_feed_posts($blogPosts) as $blogPost) {
    if (empty($blogPost['slug'])) {
        continue;
    }
    $d = (string) (($blogPost['updated'] ?? '') !== '' ? $blogPost['updated'] : ($blogPost['date'] ?? ''));
    $blogEntries[] = [usmlewise_post_url($blogPost), $d, '0.6'];
    $blogNewest = max($blogNewest, $d);
}
if ($blogEntries) {
    array_unshift($blogEntries, ['/blog', $blogNewest, '0.8']);
}

// Research-award write-ups, from the CRM feed (falls back to the committed
// copy when the CRM cannot be reached, so this never breaks the sitemap).
$awardEntries = [];
foreach (usmlewise_crm_award_posts() as $award) {
    if (empty($award['slug'])) {
        continue;
    }
    $awardEntries[] = [usmlewise_post_url($award), (string) ($award['date'] ?? ''), '0.5'];
}

// Team profiles, from the roster. Hidden members are commented out of
// data/team.php, so they never appear here.
require_once __DIR__ . '/data/team.php';
$teamEntries = [];
foreach (array_keys(usmlewise_team_members()) as $teamSlug) {
    $teamEntries[] = ['/team/' . $teamSlug, '', '0.4'];
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

// Generated groups share one shape: [path, lastmod (may be empty), priority].
foreach ([$wikiEntries, $blogEntries, $awardEntries, $teamEntries] as $group) {
    foreach ($group as [$path, $lastmod, $priority]) {
        echo '  <url>', "\n";
        echo '    <loc>', $esc($base . $path), '</loc>', "\n";
        if ($lastmod !== '') {
            echo '    <lastmod>', $esc($lastmod), '</lastmod>', "\n";
        }
        echo '    <changefreq>monthly</changefreq>', "\n";
        echo '    <priority>', $esc($priority), '</priority>', "\n";
        echo '  </url>', "\n";
    }
}

foreach ($rotationPaths as $path) {
    echo '  <url>', "\n";
    echo '    <loc>', $esc($base . $path), '</loc>', "\n";
    echo '    <changefreq>monthly</changefreq>', "\n";
    echo '    <priority>0.6</priority>', "\n";
    echo '  </url>', "\n";
}

echo '</urlset>', "\n";
