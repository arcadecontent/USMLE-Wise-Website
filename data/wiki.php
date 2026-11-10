<?php
/**
 * Wiki data layer: sections, article loading, Markdown rendering.
 *
 * Articles are Markdown files at wiki-content/<section>/<slug>.md with a small
 * frontmatter block. See wiki-content/STYLE.md for the authoring rules and
 * tools/wiki-check.php for the validator that guards the build.
 *
 * Publishing model:
 *   status: draft      Visible only on localhost (or when the env var
 *                      USMLEWISE_WIKI_PREVIEW=1 is set). On the live site a
 *                      draft 404s, is left out of listings, the search index
 *                      and the sitemap.
 *   status: published  Live. Requires reviewed_by + reviewed_on, at least one
 *                      source, and only verified facts (enforced by the checker).
 *
 * NOTE: declares functions and a constant, so every include must be require_once.
 */

require_once __DIR__ . '/wiki-facts.php';

const USMLEWISE_WIKI_DIR = __DIR__ . '/../wiki-content';

/**
 * Launch switch for the site-wide "Wiki" links in the nav and footer. Leave
 * false until the first articles are reviewed and published; flip to true in the
 * same commit that publishes them. (On localhost the links always show, so the
 * team can preview.) The wiki URLs themselves need no flag: with nothing
 * published, /wiki and every section 404 on the live site.
 */
const USMLEWISE_WIKI_NAV_LIVE = true;

/**
 * Publishing without review. An article may carry `status: published` and
 * `review: pending` (no reviewed_by). It is live, but shows a visible notice
 * that it has not been reviewed by a USMLE Wise expert, and never claims a
 * reviewer. Set this to true to also keep such pages out of search engines
 * (noindex) until they are reviewed.
 */
const USMLEWISE_WIKI_NOINDEX_UNREVIEWED = false;

/* ------------------------------------------------------------------ */
/* Sections                                                            */
/* ------------------------------------------------------------------ */

/**
 * Section registry. Order here is the order on the hub page.
 * review_days = how often articles in the section must be re-verified
 * (tools/wiki-stale.php reports anything older).
 */
function usmlewise_wiki_sections(): array
{
    return [
        'start-here' => [
            'title' => 'Start Here',
            'icon'  => 'compass',
            'blurb' => 'The big picture for IMGs: the roadmap from medical school to US residency, what it costs, and how long it takes.',
            'intro' => 'If you are an international medical graduate (IMG) thinking about training in the United States, begin here. These guides lay out the whole journey in order, so you know what comes next and what to ignore for now.',
            'review_days' => 180,
        ],
        'tools' => [
            'title' => 'Tools',
            'icon'  => 'calendar-range',
            'blurb' => 'Interactive planners that turn the guides into a plan for your own situation.',
            'intro' => 'Planning tools built on the guides in this wiki. They run in your browser, store nothing, and link back to the guide behind every step.',
            'review_days' => 180,
        ],
        'exams' => [
            'title' => 'USMLE Exams',
            'icon'  => 'file-check-2',
            'blurb' => 'Step 1, Step 2 CK and Step 3: eligibility, scheduling, scoring, retakes, and how to study.',
            'intro' => 'Everything about the three USMLE Steps: who can sit them, how to register, what the scores mean, what happens if you fail, and how to prepare.',
            'review_days' => 180,
        ],
        'ecfmg' => [
            'title' => 'ECFMG Certification',
            'icon'  => 'badge-check',
            'blurb' => 'Intealth accounts, credential verification, medical school eligibility and the certificate itself.',
            'intro' => 'ECFMG certification is the gate between passing the exams and applying to residency. These guides cover the requirements, the paperwork and the common reasons applications stall.',
            'review_days' => 180,
        ],
        'application' => [
            'title' => 'The Residency Application',
            'icon'  => 'clipboard-list',
            'blurb' => 'ERAS, the CV, personal statement, letters, signaling and building your program list.',
            'intro' => 'How to put together a competitive ERAS application as an IMG, step by step, and how to avoid the mistakes that quietly cost interviews.',
            'review_days' => 180,
        ],
        'specialties' => [
            'title' => 'Specialties',
            'icon'  => 'stethoscope',
            'blurb' => 'How competitive each specialty is for IMGs and what a realistic application looks like.',
            'intro' => 'One guide per specialty: how IMGs fare, what programs look for, and how to decide where to aim.',
            'review_days' => 365,
        ],
        'interviews-match' => [
            'title' => 'Interviews and the Match',
            'icon'  => 'messages-square',
            'blurb' => 'Interview season, rank lists, how the Match algorithm works, SOAP and what to do if you do not match.',
            'intro' => 'From the first interview invitation to Match Day and beyond: how to prepare, how to rank, and how to recover if the Match does not go your way.',
            'review_days' => 180,
        ],
        'clinical-experience' => [
            'title' => 'US Clinical Experience',
            'icon'  => 'hospital',
            'blurb' => 'Observerships, externships and hands-on rotations: what counts, what it costs, how to turn it into a letter.',
            'intro' => 'US clinical experience (USCE) is one of the most misunderstood parts of the IMG path. These guides explain the types, how to get them, and how to make them count.',
            'review_days' => 180,
        ],
        'research' => [
            'title' => 'Research',
            'icon'  => 'microscope',
            'blurb' => 'Why research matters for IMGs, how to find a position, publish, and present.',
            'intro' => 'Research can strengthen an IMG application, but only when it is done well. These guides cover how to find opportunities, build a track record and avoid low-value shortcuts.',
            'review_days' => 365,
        ],
        'visas' => [
            'title' => 'Visas',
            'icon'  => 'plane',
            'blurb' => 'J-1, H-1B, B1/B2 and the rest: which visa fits your plan and how each step works.',
            'intro' => 'Visa rules decide where and when you can train, and they change often. These guides explain the main options and how to choose between them. They are information, not legal advice.',
            'review_days' => 90,
        ],
        'licensure-career' => [
            'title' => 'Licensure and Career',
            'icon'  => 'briefcase-medical',
            'blurb' => 'State licensure, fellowship, contracts and life after residency.',
            'intro' => 'What happens after you match: getting licensed, planning fellowship, and understanding your first contract.',
            'review_days' => 365,
        ],
        'life-in-us' => [
            'title' => 'Life in the US',
            'icon'  => 'house',
            'blurb' => 'Arriving, housing, banking, taxes and settling in as a new resident.',
            'intro' => 'The practical side of moving to the United States for residency, from your first week to your first tax return.',
            'review_days' => 365,
        ],
        'countries' => [
            'title' => 'Country Guides',
            'icon'  => 'globe',
            'blurb' => 'Guides for graduates from the countries that send the most IMGs.',
            'intro' => 'Country-specific notes on school eligibility, test centers, visa interviews and local communities.',
            'review_days' => 365,
        ],
        'glossary' => [
            'title' => 'Glossary',
            'icon'  => 'book-open-text',
            'blurb' => 'Short definitions of the acronyms and terms you will meet along the way.',
            'intro' => 'ERAS, MSPE, SOAP, USCE, YOG: plain-English definitions with links to the full guides.',
            'review_days' => 365,
        ],
    ];
}

function usmlewise_wiki_section(string $slug): ?array
{
    $all = usmlewise_wiki_sections();
    return isset($all[$slug]) ? ['slug' => $slug] + $all[$slug] : null;
}

/* ------------------------------------------------------------------ */
/* Services (contextual call to action)                                */
/* ------------------------------------------------------------------ */

/**
 * Service catalogue: frontmatter `service:` key => [label, url, one-line pitch].
 *
 * Used by the call to action at the foot of an article and by the self-evaluation
 * tool (partials/wiki-tool-evaluation.php prints this map as JSON for the script).
 * Rules for entries:
 *   - Link only to pages that are live. The /coaching-step1-mastery, /coaching-step23-mastery,
 *     /coaching-tutoring and /coaching-step1-review pages are "Coming soon" placeholders,
 *     so they are deliberately not listed here. Add them once they sell something.
 *   - Take the pitch from that page's own description. Do not state prices (they differ
 *     between pages and change) and do not repeat outcome or guarantee claims.
 */
function usmlewise_wiki_services(): array
{
    return [
        'coaching'           => ['USMLE Coaching', '/coaching', 'Live and recorded USMLE coaching for Step 1, Step 2 CK and Step 3.'],
        'step-1-crash-course'=> ['Step 1 High Yield Crash Course', '/step-1-high-yield-crash-course', 'A recorded 10-day, 60-hour course covering the high-yield Step 1 subjects.'],
        'step-2-crash-course'=> ['Step 2 High Yield Crash Course', '/step-2-live-crash-course', 'A recorded 7-module, 70-hour course covering the high-yield Step 2 CK subjects.'],
        'step-3-crash-course'=> ['Step 3 High Yield Crash Course', '/step-3-live-crash-course', 'A recorded 8-module, 80-hour course covering Step 3, with a full module on CCS.'],
        'match'              => ['Match Support', '/match', 'Done-for-you Match support that ties your CV, personal statement, letters, signaling and interview prep into one story.'],
        'match-mentorship'   => ['Match Mentorship', '/match-mentorship', 'Recorded masterclasses on the personal statement, ERAS CV, signaling, interviews and SOAP.'],
        'match-maker'        => ['Match Maker', '/match-maker', 'A self-serve tool that scores residency programs against your profile and plans your signals.'],
        'match-eras-cv'      => ['ERAS CV Rebuild', '/match-eras-cv', 'A live, line-by-line ERAS CV rebuild with a physician who has sat on selection committees.'],
        'match-lor'          => ['Letter of Recommendation Editing', '/match-lor', 'Strategic editing and review of your letters before they are submitted.'],
        'match-ps3x'         => ['Personal Statement Mentorship', '/match-ps3x', 'Physician-guided strategy, story development and editing across three sessions.'],
        'match-interview'    => ['Interview Preparation', '/match-interview', 'Mock interviews, peer buddy sessions and a large interview question bank.'],
        'match-signaling'    => ['Program Signaling Strategy', '/match-signaling', 'Personalized program selection and a strategy session for placing your signals.'],
        'match-soap'         => ['SOAP Match Support', '/match-soap', 'Real-time SOAP application strategy and scramble support.'],
        'clinical-rotations' => ['US Clinical Rotations', '/clinical-rotations', 'Browse US clinical rotation placements for IMGs by specialty, state, price and setting.'],
        'research'           => ['Research Guidance', '/research', 'Research opportunity matching, publication strategy and help building your academic profile.'],
        'research-wise'      => ['Research Wise', '/research-wise', 'A 9-hour live workshop for beginners starting research from scratch.'],
        'research-cohort'    => ['Research Cohort Access', '/research-cohort', 'Nine recorded, self-paced sessions on study design, writing, publishing and conferences.'],
        'research-coauthor'  => ['Co-Author to Lead Author', '/research-coauthor', 'Get published on a mentor-run project, or as first author on your own case report.'],
        'research-original'  => ['Original Research Mentorship', '/research-original', 'Mentor guidance through a single case report or original study.'],
        'research-catalyst'  => ['Research Catalyst', '/research-catalyst', 'A 12-month publication mentorship.'],
    ];
}

/* ------------------------------------------------------------------ */
/* Frontmatter                                                         */
/* ------------------------------------------------------------------ */

function usmlewise_wiki_unquote(string $v): string
{
    $v = trim($v);
    if (strlen($v) >= 2 && ($v[0] === '"' || $v[0] === "'") && substr($v, -1) === $v[0]) {
        $v = substr($v, 1, -1);
    }
    return $v;
}

/**
 * Parse a Markdown file into [meta, body]. Supported frontmatter shapes:
 *   key: value
 *   key: [a, b, c]
 *   key:
 *     - scalar item
 *     - map_key: value        (a list of maps; continuation lines indented)
 *       other_key: value
 */
function usmlewise_wiki_parse(string $raw): array
{
    $raw = preg_replace('/^\xEF\xBB\xBF/', '', $raw);
    $raw = str_replace("\r\n", "\n", $raw);
    if (!preg_match('/\A---\n(.*?)\n---[ \t]*\n?(.*)\z/s', $raw, $m)) {
        return [[], $raw];
    }
    $meta = [];
    $key = null;
    $item = null; // index of current list item being built as a map
    foreach (explode("\n", $m[1]) as $line) {
        if (trim($line) === '' || ltrim($line)[0] === '#') {
            continue;
        }
        // Top-level key.
        if (preg_match('/^([a-z_]+):[ \t]*(.*)$/', $line, $kv)) {
            $key = $kv[1];
            $val = trim($kv[2]);
            $item = null;
            if ($val === '') {
                $meta[$key] = [];
            } elseif ($val[0] === '[' && substr($val, -1) === ']') {
                $inner = trim(substr($val, 1, -1));
                $meta[$key] = $inner === '' ? [] : array_map('usmlewise_wiki_unquote', explode(',', $inner));
            } else {
                $meta[$key] = usmlewise_wiki_unquote($val);
            }
            continue;
        }
        if ($key === null || !is_array($meta[$key] ?? null)) {
            continue;
        }
        // List item.
        if (preg_match('/^\s+-\s+(.*)$/', $line, $li)) {
            $val = trim($li[1]);
            if (preg_match('/^([a-z_]+):[ \t]+(.*)$/', $val, $mk)) {
                $meta[$key][] = [$mk[1] => usmlewise_wiki_unquote($mk[2])];
                $item = count($meta[$key]) - 1;
            } else {
                $meta[$key][] = usmlewise_wiki_unquote($val);
                $item = null;
            }
            continue;
        }
        // Continuation of a map item.
        if ($item !== null && preg_match('/^\s+([a-z_]+):[ \t]+(.*)$/', $line, $mk)) {
            $meta[$key][$item][$mk[1]] = usmlewise_wiki_unquote($mk[2]);
        }
    }
    return [$meta, $m[2]];
}

/* ------------------------------------------------------------------ */
/* Loading                                                             */
/* ------------------------------------------------------------------ */

/** True when drafts may be shown (localhost, or an explicit env override). */
function usmlewise_wiki_show_drafts(): bool
{
    if (getenv('USMLEWISE_WIKI_PREVIEW') === '1') {
        return true;
    }
    $host = strtolower(preg_replace('/:\d+$/', '', $_SERVER['HTTP_HOST'] ?? ($_SERVER['SERVER_NAME'] ?? '')));
    return in_array($host, ['localhost', '127.0.0.1', '[::1]'], true) || substr($host, -10) === '.localhost';
}

/** Every article on disk, drafts included. Keyed "section/slug". */
function usmlewise_wiki_all(): array
{
    static $all = null;
    if ($all !== null) {
        return $all;
    }
    $all = [];
    foreach (glob(USMLEWISE_WIKI_DIR . '/*/*.md') ?: [] as $file) {
        $section = basename(dirname($file));
        $slug    = basename($file, '.md');
        [$meta, $body] = usmlewise_wiki_parse((string) file_get_contents($file));
        $meta['declared_section'] = $meta['section'] ?? '';
        $meta['section'] = $section;
        $meta['slug']    = $slug;
        $meta['body']    = $body;
        $meta['file']    = $file;
        $meta['status']  = ($meta['status'] ?? 'draft') === 'published' ? 'published' : 'draft';
        $meta['title']   = $meta['title'] ?? $slug;
        $all["$section/$slug"] = $meta;
    }
    ksort($all);
    return $all;
}

/** True when a named team member has signed off on the article. */
function usmlewise_wiki_is_reviewed(array $a): bool
{
    return !empty($a['reviewed_by']);
}

function usmlewise_wiki_visible(array $a): bool
{
    return $a['status'] === 'published' || usmlewise_wiki_show_drafts();
}

/** Articles the current visitor may see, optionally for one section. */
function usmlewise_wiki_listed(?string $section = null): array
{
    $out = [];
    foreach (usmlewise_wiki_all() as $key => $a) {
        if (usmlewise_wiki_visible($a) && ($section === null || $a['section'] === $section)) {
            $out[$key] = $a;
        }
    }
    return $out;
}

/** Sort by the optional numeric `order:` key, then title. Returns a list. */
function usmlewise_wiki_sorted(array $articles): array
{
    $list = array_values($articles);
    usort($list, function ($x, $y) {
        $ox = (int) ($x['order'] ?? 999);
        $oy = (int) ($y['order'] ?? 999);
        return $ox <=> $oy ?: strcasecmp($x['title'], $y['title']);
    });
    return $list;
}

function usmlewise_wiki_article(string $section, string $slug): ?array
{
    $a = usmlewise_wiki_all()["$section/$slug"] ?? null;
    return ($a !== null && usmlewise_wiki_visible($a)) ? $a : null;
}

function usmlewise_wiki_url(array $a): string
{
    return '/wiki/' . $a['section'] . '/' . $a['slug'];
}

/** Resolve a `related:` entry: "slug" (same section) or "section/slug". */
function usmlewise_wiki_resolve(string $ref, string $fromSection): ?array
{
    $key = strpos($ref, '/') !== false ? $ref : "$fromSection/$ref";
    $a = usmlewise_wiki_all()[$key] ?? null;
    return ($a !== null && usmlewise_wiki_visible($a)) ? $a : null;
}

function usmlewise_wiki_reading_minutes(string $body): int
{
    return max(1, (int) ceil(str_word_count(strip_tags($body)) / 220));
}

/* ------------------------------------------------------------------ */
/* Rendering                                                           */
/* ------------------------------------------------------------------ */

function usmlewise_wiki_slugify(string $text): string
{
    $t = strtolower(trim(strip_tags(html_entity_decode($text, ENT_QUOTES, 'UTF-8'))));
    $t = preg_replace('/[^a-z0-9]+/', '-', $t);
    return trim($t, '-') ?: 'section';
}

/** term slug => ['def' => short definition, 'title' => display name], from the glossary articles. */
function usmlewise_wiki_glossary(): array
{
    static $g = null;
    if ($g === null) {
        $g = [];
        foreach (usmlewise_wiki_all() as $a) {
            if ($a['section'] === 'glossary') {
                $g[$a['slug']] = ['def' => (string) ($a['description'] ?? ''), 'title' => $a['title']];
            }
        }
    }
    return $g;
}

/** Replace {{fact:id}} tokens. Returns [text, usedIds]. */
function usmlewise_wiki_apply_facts(string $md): array
{
    $facts = usmlewise_wiki_facts();
    $used = [];
    $out = preg_replace_callback('/\{\{fact:([a-z0-9_]+)\}\}/', function ($m) use ($facts, &$used) {
        $id = $m[1];
        $used[] = $id;
        if (!isset($facts[$id])) {
            return '<span class="wk-fact wk-fact--missing">[unknown fact: ' . htmlspecialchars($id) . ']</span>';
        }
        $f = $facts[$id];
        $src = htmlspecialchars($f['source']);
        $url = htmlspecialchars($f['url']);
        // Unverified figures are never printed on the live site: readers get a
        // link to the primary source instead of a number nobody has confirmed.
        if ($f['value'] === '' || (!$f['verified'] && !usmlewise_wiki_show_drafts())) {
            return '<a class="wk-fact wk-fact--check" href="' . $url . '" target="_blank" rel="noopener noreferrer" title="Source: ' . $src . '">check the current figure</a>';
        }
        $cls = 'wk-fact' . ($f['verified'] ? '' : ' wk-fact--unverified');
        $tip = 'Source: ' . $src . ($f['checked_on'] !== '' ? ' (checked ' . htmlspecialchars($f['checked_on']) . ')' : ' (not yet verified)');
        return '<span class="' . $cls . '" title="' . $tip . '">' . htmlspecialchars($f['value']) . '</span>';
    }, $md);
    return [$out, $used];
}

/**
 * Plain-text version of the fact replacer, for frontmatter fields (key_facts,
 * faq answers, JSON-LD) that are escaped rather than rendered as HTML.
 */
function usmlewise_wiki_facts_text(string $text): string
{
    $facts = usmlewise_wiki_facts();
    return preg_replace_callback('/\{\{fact:([a-z0-9_]+)\}\}/', function ($m) use ($facts) {
        $f = $facts[$m[1]] ?? null;
        $show = $f !== null && $f['value'] !== '' && ($f['verified'] || usmlewise_wiki_show_drafts());
        return $show ? $f['value'] : 'see the current official figure';
    }, $text);
}

/** Replace [[term]] / [[term|label]] with glossary links. */
function usmlewise_wiki_apply_glossary(string $md): string
{
    $g = usmlewise_wiki_glossary();
    return preg_replace_callback('/\[\[([a-z0-9-]+)(?:\|([^\]]+))?\]\]/', function ($m) use ($g) {
        $term  = $m[1];
        $label = $m[2] ?? ($g[$term]['title'] ?? ucwords(str_replace('-', ' ', $term)));
        if (!isset($g[$term])) {
            return htmlspecialchars($label);
        }
        return '<a class="wk-term" href="/wiki/glossary/' . $term . '" data-def="' . htmlspecialchars($g[$term]['def'], ENT_QUOTES) . '">' . htmlspecialchars($label) . '</a>';
    }, $md);
}

/**
 * Render an article body to HTML.
 * Returns ['html' => string, 'toc' => [[level, id, text], ...], 'facts' => [ids]].
 */
function usmlewise_wiki_render(array $article): array
{
    [$md, $facts] = usmlewise_wiki_apply_facts($article['body']);
    $md = usmlewise_wiki_apply_glossary($md);

    // Parsedown 1.7 predates PHP 8.4's "implicit nullable" deprecation, which is
    // raised while the class files compile, so the requires must sit inside
    // the suppressed region too.
    $prev = error_reporting(error_reporting() & ~E_DEPRECATED);
    require_once __DIR__ . '/../lib/Parsedown.php';
    require_once __DIR__ . '/../lib/ParsedownExtra.php';
    $pd = new ParsedownExtra();
    $pd->setSafeMode(false);
    $html = $pd->text($md);
    error_reporting($prev);

    // Callouts: > [!WARNING] text  ->  <aside class="wk-callout wk-callout--warning">
    $labels = [
        'NOTE'    => ['note', 'Note'],
        'TIP'     => ['tip', 'Tip'],
        'IMG TIP' => ['tip', 'IMG tip'],
        'WARNING' => ['warning', 'Warning'],
        'CHANGED' => ['changed', 'Recently changed'],
        'KEY'     => ['key', 'Key point'],
    ];
    $html = preg_replace_callback('#<blockquote>\s*<p>\[!([A-Z ]+)\]\s*(.*?)</blockquote>#s', function ($m) use ($labels) {
        [$cls, $label] = $labels[$m[1]] ?? ['note', ucfirst(strtolower($m[1]))];
        return '<aside class="wk-callout wk-callout--' . $cls . '"><span class="wk-callout__label">' . $label . '</span><p>' . $m[2] . '</aside>';
    }, $html);

    // Heading ids + anchors + table of contents (h2/h3).
    $toc = [];
    $seen = [];
    $html = preg_replace_callback('#<h([23])((?:\s[^>]*)?)>(.*?)</h\1>#s', function ($m) use (&$toc, &$seen) {
        $text = trim(strip_tags($m[3]));
        if (preg_match('/\sid="([^"]+)"/', $m[2], $idm)) {
            $id = $idm[1];
        } else {
            $id = usmlewise_wiki_slugify($text);
            $n = $seen[$id] ?? 0;
            $seen[$id] = $n + 1;
            if ($n > 0) {
                $id .= '-' . ($n + 1);
            }
        }
        $toc[] = [(int) $m[1], $id, $text];
        return '<h' . $m[1] . ' id="' . $id . '">' . $m[3] . ' <a class="wk-anchor" href="#' . $id . '" aria-label="Link to this section">#</a></h' . $m[1] . '>';
    }, $html);

    // Tables scroll sideways on narrow screens instead of breaking the layout.
    $html = preg_replace('#<table>#', '<div class="wk-table"><table>', $html);
    $html = preg_replace('#</table>#', '</table></div>', $html);

    // External links open safely in a new tab.
    $html = preg_replace_callback('#<a href="(https?://[^"]+)"#', function ($m) {
        return '<a href="' . $m[1] . '" target="_blank" rel="noopener noreferrer"';
    }, $html);

    return ['html' => $html, 'toc' => $toc, 'facts' => array_values(array_unique($facts))];
}

/** Split a `sources:` line "Title | URL" into [title, url]. */
function usmlewise_wiki_source(string $line): array
{
    $pos = strrpos($line, ' | ');
    if ($pos === false) {
        return [$line, ''];
    }
    return [trim(substr($line, 0, $pos)), trim(substr($line, $pos + 3))];
}

/** Stale = reviewed_on older than the section's review interval. */
function usmlewise_wiki_is_stale(array $a): bool
{
    $sec = usmlewise_wiki_section($a['section']);
    $days = $sec['review_days'] ?? 365;
    $on = strtotime($a['reviewed_on'] ?? '');
    return !$on || (time() - $on) > $days * 86400;
}

function usmlewise_wiki_fmt_date(string $iso): string
{
    $ts = strtotime($iso);
    return $ts ? date('j M Y', $ts) : $iso;
}
