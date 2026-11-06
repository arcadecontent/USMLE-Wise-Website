<?php
/**
 * Wiki article, served by routes.php at /wiki/<section>/<slug>.
 * $wikiSection and $wikiSlug are set by the router. 404s when the article
 * does not exist or is a draft being requested on the live site.
 */

require_once __DIR__ . '/data/wiki.php';
require_once __DIR__ . '/data/team.php';

$article = usmlewise_wiki_article($wikiSection ?? '', $wikiSlug ?? '');
if ($article === null) {
    http_response_code(404);
    require __DIR__ . '/404.php';
    exit;
}

$section  = usmlewise_wiki_section($article['section']);
$rendered = usmlewise_wiki_render($article);
$isDraft  = $article['status'] === 'draft';
$url      = usmlewise_wiki_url($article);
$abs      = 'https://usmlewise.com' . $url;
$minutes  = usmlewise_wiki_reading_minutes($article['body']);

$reviewer = !empty($article['reviewed_by']) ? usmlewise_find_team_member($article['reviewed_by']) : null;
$services = usmlewise_wiki_services();
$cta      = isset($article['service'], $services[$article['service']]) ? $services[$article['service']] : null;

$related = [];
foreach ((array) ($article['related'] ?? []) as $ref) {
    $r = usmlewise_wiki_resolve($ref, $article['section']);
    if ($r !== null) {
        $related[] = $r;
    }
}

// Previous / next within the section.
$siblings = usmlewise_wiki_sorted(usmlewise_wiki_listed($article['section']));
$prev = $next = null;
foreach ($siblings as $i => $s) {
    if ($s['slug'] === $article['slug']) {
        $prev = $siblings[$i - 1] ?? null;
        $next = $siblings[$i + 1] ?? null;
        break;
    }
}

$faq = array_values(array_filter((array) ($article['faq'] ?? []), fn($f) => is_array($f) && !empty($f['q']) && !empty($f['a'])));

// ---- Page chrome ----
$pageTitle       = htmlspecialchars($article['title']) . ' | USMLE Wise Wiki';
$pageDescription = htmlspecialchars((string) ($article['description'] ?? ''), ENT_QUOTES, 'UTF-8', false);
$canonical       = $abs;
$bodyClass       = 'msp wk';
$stylesheets     = ['/styles/wiki.css'];
$scripts         = ['/js/wiki.js'];
if ($isDraft) {
    $metaRobots = 'noindex, nofollow';
}

// ---- Structured data ----
$ld = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'            => 'Article',
            'headline'         => $article['title'],
            'description'      => (string) ($article['description'] ?? ''),
            'mainEntityOfPage' => $abs,
            'dateModified'     => $article['updated'] ?? null,
            'author'           => ['@type' => 'Organization', 'name' => 'USMLE Wise Editorial Team', 'url' => 'https://usmlewise.com'],
            'publisher'        => ['@type' => 'Organization', 'name' => 'USMLE Wise', 'url' => 'https://usmlewise.com'],
        ],
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Wiki', 'item' => 'https://usmlewise.com/wiki'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => $section['title'], 'item' => 'https://usmlewise.com/wiki/' . $section['slug']],
                ['@type' => 'ListItem', 'position' => 3, 'name' => $article['title'], 'item' => $abs],
            ],
        ],
    ],
];
if ($reviewer) {
    $ld['@graph'][0]['reviewedBy'] = ['@type' => 'Person', 'name' => strip_tags(html_entity_decode($reviewer['name']))];
    if (!empty($article['reviewed_on'])) {
        $ld['@graph'][0]['lastReviewed'] = $article['reviewed_on'];
    }
}
if ($faq) {
    $ld['@graph'][] = [
        '@type' => 'FAQPage',
        'mainEntity' => array_map(fn($f) => [
            '@type' => 'Question',
            'name'  => $f['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
        ], $faq),
    ];
}

include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>
  <script type="application/ld+json"><?php echo json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG); ?></script>

  <?php if ($isDraft): ?>
  <div class="wk-draftbar">Draft: not yet reviewed or published. Hidden from search engines and from the live site.</div>
  <?php endif; ?>

  <header class="wk-hero wk-hero--article">
    <div class="msp-wrap">
      <nav class="wk-crumbs" aria-label="Breadcrumb">
        <a href="/wiki">Wiki</a><span aria-hidden="true">/</span><a href="/wiki/<?php echo $section['slug']; ?>"><?php echo htmlspecialchars($section['title']); ?></a>
      </nav>
      <h1 class="wk-hero__title"><?php echo htmlspecialchars($article['title']); ?></h1>
      <?php if (!empty($article['description'])): ?>
      <p class="wk-hero__sub"><?php echo htmlspecialchars($article['description']); ?></p>
      <?php endif; ?>

      <ul class="wk-byline">
        <?php if ($reviewer): ?>
        <li>
          <i data-lucide="shield-check" width="16" height="16" aria-hidden="true"></i>
          Reviewed by <a href="/team/<?php echo htmlspecialchars($article['reviewed_by']); ?>"><?php echo $reviewer['name']; ?></a><?php if (!empty($article['reviewed_on'])): ?> on <?php echo htmlspecialchars(usmlewise_wiki_fmt_date($article['reviewed_on'])); ?><?php endif; ?>
        </li>
        <?php else: ?>
        <li><i data-lucide="hourglass" width="16" height="16" aria-hidden="true"></i> Awaiting expert review</li>
        <?php endif; ?>
        <?php if (!empty($article['updated'])): ?>
        <li><i data-lucide="refresh-cw" width="16" height="16" aria-hidden="true"></i> Updated <?php echo htmlspecialchars(usmlewise_wiki_fmt_date($article['updated'])); ?></li>
        <?php endif; ?>
        <li><i data-lucide="clock" width="16" height="16" aria-hidden="true"></i> <?php echo $minutes; ?> min read</li>
      </ul>
    </div>
  </header>

  <div class="msp-wrap wk-layout">

    <aside class="wk-side" aria-label="On this page">
      <?php include __DIR__ . '/partials/wiki-search.php'; ?>
      <?php if (count($rendered['toc']) > 1): ?>
      <details class="wk-toc" open>
        <summary>On this page</summary>
        <ol>
          <?php foreach ($rendered['toc'] as [$lvl, $id, $text]): ?>
          <li class="wk-toc__l<?php echo $lvl; ?>"><a href="#<?php echo $id; ?>"><?php echo htmlspecialchars($text); ?></a></li>
          <?php endforeach; ?>
        </ol>
      </details>
      <?php endif; ?>
    </aside>

    <article class="wk-article">

      <?php if (!empty($article['key_facts'])): ?>
      <section class="wk-keyfacts" aria-label="Key facts">
        <h2 class="wk-keyfacts__h">Key facts</h2>
        <ul>
          <?php foreach ((array) $article['key_facts'] as $kf): ?>
          <li><?php echo htmlspecialchars($kf); ?></li>
          <?php endforeach; ?>
        </ul>
      </section>
      <?php endif; ?>

      <div class="wk-prose">
        <?php echo $rendered['html']; ?>
      </div>

      <?php if ($section['slug'] === 'visas' || !empty($article['legal'])): ?>
      <p class="wk-legal">This page is general information, not legal advice. Immigration rules change often and individual circumstances differ. Confirm your situation with your sponsor, the relevant government agency, or a qualified immigration attorney before acting. See our <a href="/disclaimer">disclaimer</a>.</p>
      <?php endif; ?>

      <?php if ($faq): ?>
      <section class="wk-faq" aria-labelledby="wk-faq-h">
        <h2 id="wk-faq-h" class="wk-h2">Frequently asked questions</h2>
        <?php foreach ($faq as $f): ?>
        <details>
          <summary><?php echo htmlspecialchars($f['q']); ?></summary>
          <p><?php echo htmlspecialchars($f['a']); ?></p>
        </details>
        <?php endforeach; ?>
      </section>
      <?php endif; ?>

      <?php if (!empty($article['sources'])): ?>
      <section class="wk-sources" aria-labelledby="wk-sources-h">
        <h2 id="wk-sources-h" class="wk-h2">Sources</h2>
        <ol>
          <?php foreach ((array) $article['sources'] as $line): [$st, $su] = usmlewise_wiki_source($line); ?>
          <li><?php if ($su !== ''): ?><a href="<?php echo htmlspecialchars($su); ?>" target="_blank" rel="noopener noreferrer"><?php echo htmlspecialchars($st); ?></a><?php else: echo htmlspecialchars($st); endif; ?></li>
          <?php endforeach; ?>
        </ol>
        <p class="wk-sources__note">Found something out of date? <a href="/contact">Tell us</a> and we will check it against the source.</p>
      </section>
      <?php endif; ?>

      <?php if ($cta): ?>
      <aside class="wk-cta">
        <div>
          <p class="wk-cta__eyebrow">Want help with this?</p>
          <h2 class="wk-cta__title"><?php echo htmlspecialchars($cta[0]); ?></h2>
          <p class="wk-cta__sub"><?php echo htmlspecialchars($cta[2]); ?></p>
        </div>
        <a class="btn btn--primary" href="<?php echo htmlspecialchars($cta[1]); ?>">Learn more</a>
      </aside>
      <?php endif; ?>

      <?php if ($related): ?>
      <section class="wk-related" aria-labelledby="wk-related-h">
        <h2 id="wk-related-h" class="wk-h2">Related guides</h2>
        <div class="wk-grid wk-grid--articles">
          <?php foreach ($related as $r): ?>
          <a class="wk-card" href="<?php echo usmlewise_wiki_url($r); ?>">
            <h3 class="wk-card__title"><?php echo htmlspecialchars($r['title']); ?></h3>
            <p class="wk-card__blurb"><?php echo htmlspecialchars((string) ($r['description'] ?? '')); ?></p>
          </a>
          <?php endforeach; ?>
        </div>
      </section>
      <?php endif; ?>

      <?php if ($prev || $next): ?>
      <nav class="wk-pager" aria-label="More in this section">
        <?php if ($prev): ?><a class="wk-pager__prev" href="<?php echo usmlewise_wiki_url($prev); ?>"><span>Previous</span><?php echo htmlspecialchars($prev['title']); ?></a><?php else: ?><span></span><?php endif; ?>
        <?php if ($next): ?><a class="wk-pager__next" href="<?php echo usmlewise_wiki_url($next); ?>"><span>Next</span><?php echo htmlspecialchars($next['title']); ?></a><?php endif; ?>
      </nav>
      <?php endif; ?>

    </article>
  </div>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
