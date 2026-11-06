<?php
/**
 * Lists wiki articles that are due for re-verification, per the review_days
 * interval of their section (see usmlewise_wiki_sections), oldest first.
 *
 *     php tools/wiki-stale.php            published articles past their interval
 *     php tools/wiki-stale.php --drafts   also list drafts awaiting first review
 */

require_once __DIR__ . '/../data/wiki.php';

$withDrafts = in_array('--drafts', $argv ?? [], true);
$rows = [];
foreach (usmlewise_wiki_all() as $key => $a) {
    if ($a['status'] === 'draft') {
        if ($withDrafts) {
            $rows[] = [0, $key, 'draft, never reviewed'];
        }
        continue;
    }
    if (usmlewise_wiki_is_stale($a)) {
        $on = strtotime($a['reviewed_on'] ?? '') ?: 0;
        $days = $on ? (int) floor((time() - $on) / 86400) : null;
        $rows[] = [$on, $key, $days === null ? 'no review date' : "reviewed $days days ago (section interval " . usmlewise_wiki_section($a['section'])['review_days'] . ')'];
    }
}
usort($rows, fn($x, $y) => $x[0] <=> $y[0]);

if (!$rows) {
    echo "Nothing is due for review.\n";
    exit(0);
}
foreach ($rows as [, $key, $why]) {
    echo str_pad($key, 50) . $why . "\n";
}
echo "\n" . count($rows) . " article(s) due.\n";
