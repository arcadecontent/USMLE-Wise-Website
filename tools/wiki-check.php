<?php
/**
 * Wiki validator. Run before every deploy (CI does) and before committing:
 *
 *     php tools/wiki-check.php
 *
 * Exits 1 when any ERROR is found, so a bad article cannot ship. Drafts are
 * held to the structural rules only; PUBLISHED articles must also carry a
 * named reviewer, sources, and only verified facts.
 */

require_once __DIR__ . '/../data/wiki.php';

$errors = [];
$warns  = [];
$err  = function (string $key, string $msg) use (&$errors) { $errors[] = "ERROR  $key: $msg"; };
$warn = function (string $key, string $msg) use (&$warns)  { $warns[]  = "warn   $key: $msg"; };

$sections = usmlewise_wiki_sections();
$facts    = usmlewise_wiki_facts();
$services = usmlewise_wiki_services();
$all      = usmlewise_wiki_all();
$glossary = usmlewise_wiki_glossary();

require_once __DIR__ . '/../data/team.php';

// Folders with no matching section.
foreach (glob(USMLEWISE_WIKI_DIR . '/*', GLOB_ONLYDIR) ?: [] as $dir) {
    if (!isset($sections[basename($dir)])) {
        $err(basename($dir) . '/', 'folder is not a registered section in data/wiki.php');
    }
}

$published = 0;
$drafts = 0;

foreach ($all as $key => $a) {
    $isPub = $a['status'] === 'published';
    $isPub ? $published++ : $drafts++;

    if (!preg_match('/\A[a-z0-9-]+\z/', $a['slug'])) {
        $err($key, 'slug must be lowercase letters, digits and hyphens');
    }
    if (!isset($sections[$a['section']])) {
        continue; // already reported as an unknown folder
    }
    if ($a['declared_section'] !== '' && $a['declared_section'] !== $a['section']) {
        $err($key, "frontmatter section '{$a['declared_section']}' does not match its folder");
    }
    if (($a['title'] ?? '') === '' || $a['title'] === $a['slug']) {
        $err($key, 'missing title');
    }
    $desc = (string) ($a['description'] ?? '');
    if ($desc === '') {
        $err($key, 'missing description');
    } elseif ($a['section'] !== 'glossary' && (strlen($desc) < 70 || strlen($desc) > 175)) {
        $warn($key, 'description is ' . strlen($desc) . ' chars (aim for 70-160 for search snippets)');
    }
    if (!preg_match('/\A\d{4}-\d{2}-\d{2}\z/', (string) ($a['updated'] ?? ''))) {
        $err($key, "'updated' must be an ISO date (YYYY-MM-DD)");
    }
    if (($a['declared_status'] ?? null) === null && !isset($a['status'])) {
        $err($key, 'missing status');
    }

    // Publish gate.
    if ($isPub) {
        if (empty($a['reviewed_by']) || usmlewise_find_team_member((string) $a['reviewed_by']) === null) {
            $err($key, "published articles need 'reviewed_by' set to a slug from data/team.php");
        }
        if (!preg_match('/\A\d{4}-\d{2}-\d{2}\z/', (string) ($a['reviewed_on'] ?? ''))) {
            $err($key, "published articles need 'reviewed_on' (YYYY-MM-DD)");
        }
        if ($a['section'] !== 'glossary' && empty($a['sources'])) {
            $err($key, 'published articles need at least one entry under sources:');
        }
    }

    // Sources shape.
    foreach ((array) ($a['sources'] ?? []) as $line) {
        if (!is_string($line)) {
            $err($key, 'each source must be a "Title | https://url" line');
            continue;
        }
        [$st, $su] = usmlewise_wiki_source($line);
        if ($su === '' || !preg_match('#\Ahttps://#', $su)) {
            $err($key, "source '$line' needs the form: Title | https://url");
        }
    }

    // Service CTA.
    if (!empty($a['service']) && !isset($services[$a['service']])) {
        $err($key, "unknown service '{$a['service']}' (see usmlewise_wiki_services)");
    }

    // Related.
    foreach ((array) ($a['related'] ?? []) as $ref) {
        $k = strpos($ref, '/') !== false ? $ref : $a['section'] . '/' . $ref;
        if (!isset($all[$k])) {
            $err($key, "related '$ref' does not exist");
        }
    }

    // FAQ shape.
    foreach ((array) ($a['faq'] ?? []) as $f) {
        if (!is_array($f) || empty($f['q']) || empty($f['a'])) {
            $err($key, 'each faq entry needs q: and a:');
        }
    }

    // Body checks.
    $body = $a['body'];
    $raw  = (string) file_get_contents($a['file']);
    if (strpos($raw, "\u{2014}") !== false) {
        $err($key, 'contains an em dash; use a colon, comma or parentheses');
    }
    if (preg_match_all('/\{\{fact:([a-z0-9_]+)\}\}/', $body, $m)) {
        foreach (array_unique($m[1]) as $id) {
            if (!isset($facts[$id])) {
                $err($key, "unknown fact '$id'");
            } elseif ($isPub && (!$facts[$id]['verified'] || $facts[$id]['value'] === '')) {
                $err($key, "published article uses unverified or empty fact '$id' (confirm it in data/wiki-facts.php first)");
            }
        }
    }
    if (preg_match_all('/\[\[([a-z0-9-]+)(?:\|[^\]]+)?\]\]/', $body, $m)) {
        foreach (array_unique($m[1]) as $term) {
            if (!isset($glossary[$term])) {
                $err($key, "glossary term [[$term]] has no page in wiki-content/glossary/");
            }
        }
    }
    // Internal wiki links must land somewhere.
    if (preg_match_all('#\]\((/wiki(?:/[a-z0-9-]+){0,2})(?:\#[^)]*)?\)#', $body, $m)) {
        foreach (array_unique($m[1]) as $href) {
            $parts = array_values(array_filter(explode('/', $href)));
            array_shift($parts); // 'wiki'
            if (count($parts) === 1 && !isset($sections[$parts[0]])) {
                $err($key, "link $href points at an unknown section");
            } elseif (count($parts) === 2 && !isset($all[$parts[0] . '/' . $parts[1]])) {
                $err($key, "link $href points at a page that does not exist");
            }
        }
    }
    // Thin pages hurt more than they help.
    $words = str_word_count(strip_tags($body));
    if ($a['section'] === 'glossary') {
        if ($words < 40) { $warn($key, "only $words words (glossary entries should be ~100-300)"); }
    } elseif ($words < 600) {
        $warn($key, "only $words words (reference guides should be substantive, ~900+)");
    }
}

echo "Wiki check: " . count($all) . " articles ($published published, $drafts draft)\n";
foreach ($warns as $w)  { echo $w . "\n"; }
foreach ($errors as $e) { echo $e . "\n"; }
if ($errors) {
    echo "\n" . count($errors) . " error(s). Fix them before deploying.\n";
    exit(1);
}
echo "OK: no errors" . ($warns ? " (" . count($warns) . " warnings)" : '') . ".\n";
