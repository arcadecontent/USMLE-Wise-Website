<?php
/**
 * Wiki section landing, served by routes.php at /wiki/<section>.
 * $wikiSection is set by the router. 404s when the section does not exist or
 * has nothing visible to this visitor.
 */

require_once __DIR__ . '/data/wiki.php';

$section = usmlewise_wiki_section($wikiSection ?? '');
$articles = $section ? usmlewise_wiki_sorted(usmlewise_wiki_listed($section['slug'])) : [];
if ($section === null || !$articles) {
    http_response_code(404);
    require __DIR__ . '/404.php';
    exit;
}

$isGlossary = $section['slug'] === 'glossary';

// Group by the optional `group:` frontmatter key, keeping first-seen order.
$groups = [];
foreach ($articles as $a) {
    $groups[$a['group'] ?? ''][] = $a;
}

$pageTitle       = htmlspecialchars($section['title']) . ' | USMLE Wise Wiki';
$pageDescription = htmlspecialchars($section['blurb']);
$canonical       = 'https://usmlewise.com/wiki/' . $section['slug'];
$bodyClass       = 'msp wk';
$stylesheets     = ['/styles/wiki.css'];
$scripts         = ['/js/wiki.js'];

include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>

  <?php if (usmlewise_wiki_show_drafts()): ?>
  <div class="wk-draftbar">Preview mode: draft articles are visible. They are hidden on the live site until reviewed and published.</div>
  <?php endif; ?>

  <section class="wk-hero wk-hero--section">
    <div class="msp-wrap">
      <nav class="wk-crumbs" aria-label="Breadcrumb">
        <a href="/wiki">Wiki</a><span aria-hidden="true">/</span><span><?php echo htmlspecialchars($section['title']); ?></span>
      </nav>
      <h1 class="wk-hero__title"><?php echo htmlspecialchars($section['title']); ?></h1>
      <p class="wk-hero__sub"><?php echo htmlspecialchars($section['intro']); ?></p>
      <?php include __DIR__ . '/partials/wiki-search.php'; ?>
    </div>
  </section>

  <section class="wk-sections">
    <div class="msp-wrap">
      <?php foreach ($groups as $groupName => $items): ?>
        <?php if ($groupName !== ''): ?><h2 class="wk-h2"><?php echo htmlspecialchars($groupName); ?></h2><?php endif; ?>
        <?php if ($isGlossary): ?>
        <ul class="wk-glossary">
          <?php foreach ($items as $a): ?>
          <li><a href="<?php echo usmlewise_wiki_url($a); ?>"><strong><?php echo htmlspecialchars($a['title']); ?></strong><span><?php echo htmlspecialchars((string) ($a['description'] ?? '')); ?></span></a></li>
          <?php endforeach; ?>
        </ul>
        <?php else: ?>
        <div class="wk-grid wk-grid--articles">
          <?php foreach ($items as $a): ?>
          <a class="wk-card" href="<?php echo usmlewise_wiki_url($a); ?>">
            <h3 class="wk-card__title"><?php echo htmlspecialchars($a['title']); ?></h3>
            <p class="wk-card__blurb"><?php echo htmlspecialchars((string) ($a['description'] ?? '')); ?></p>
            <span class="wk-card__count">
              <?php echo usmlewise_wiki_reading_minutes($a['body']); ?> min read
              <?php if ($a['status'] === 'draft'): ?> &middot; <span class="wk-badge">Draft</span><?php endif; ?>
            </span>
          </a>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </section>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
