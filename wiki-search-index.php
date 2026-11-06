<?php
/**
 * JSON search index for the wiki, served at /wiki/search-index.json by
 * routes.php. Contains only articles the current visitor may see (drafts are
 * excluded on the live site), so nothing unpublished leaks through search.
 */

require_once __DIR__ . '/data/wiki.php';

$sections = usmlewise_wiki_sections();
$out = [];
foreach (usmlewise_wiki_listed() as $a) {
    $out[] = [
        't' => $a['title'],
        'd' => (string) ($a['description'] ?? ''),
        's' => $sections[$a['section']]['title'] ?? $a['section'],
        'u' => usmlewise_wiki_url($a),
        'k' => implode(' ', (array) ($a['keywords'] ?? [])),
    ];
}

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: public, max-age=300');
echo json_encode($out, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
