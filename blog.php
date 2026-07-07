<?php
$pageTitle = "Blog | USMLE Wise";
$pageDescription = "Guides, timelines, and hard-won advice for international medical graduates — USMLE prep, the residency match, research, and US clinical experience.";
$canonical = "https://usmlewise.com/blog";
$bodyClass = "msp";
$stylesheets = [
    "/styles/blog.css"
];
$scripts = [
    "/js/blog.js"
];

require $_SERVER['DOCUMENT_ROOT'] . '/data/posts.php';
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';

// Split out the featured post (falls back to the newest if none flagged).
$featured = null;
foreach ($blogPosts as $p) {
    if (!empty($p['featured'])) { $featured = $p; break; }
}
if ($featured === null && !empty($blogPosts)) {
    $featured = $blogPosts[0];
}
$featuredSlug = $featured ? $featured['slug'] : null;

// Helper: format an ISO date as e.g. "24 Jun 2026".
$fmtDate = function ($iso) {
    $ts = strtotime($iso);
    return $ts ? date('j M Y', $ts) : $iso;
};
?>
<main>

  <!-- ============== HERO ============== -->
  <section class="blog-hero">
    <div class="msp-wrap">
      <div class="blog-hero__inner reveal">
        <h1 class="blog-hero__title">
          Straight talk for <em>international medical graduates.</em>
        </h1>
        <p class="blog-hero__sub">
          The strategies, timelines, and mistakes-to-avoid we share with our own
          students — on USMLE prep, the residency match, research, and US clinical experience.
        </p>
      </div>
    </div>
  </section>

  <!-- ============== FILTER + FEATURED ============== -->
  <section class="blog-body">
    <div class="msp-wrap">

      <!-- Category filter -->
      <nav class="blog-filter reveal" aria-label="Filter posts by topic">
        <button class="blog-filter__chip is-active" type="button" data-filter="all">All</button>
        <?php foreach ($blogCategories as $key => $label): ?>
          <button class="blog-filter__chip" type="button" data-filter="<?php echo htmlspecialchars($key); ?>">
            <?php echo htmlspecialchars($label); ?>
          </button>
        <?php endforeach; ?>
      </nav>

      <?php if ($featured): ?>
      <!-- Featured post -->
      <a class="blog-featured reveal" href="/blog/<?php echo htmlspecialchars($featured['slug']); ?>"
         data-category="<?php echo htmlspecialchars($featured['category']); ?>">
        <div class="blog-featured__cover blog-cover--<?php echo htmlspecialchars($featured['category']); ?>"
             <?php if (!empty($featured['image'])): ?>style="background-image:url('<?php echo htmlspecialchars($featured['image']); ?>')"<?php endif; ?>>
          <span class="blog-cover__tag">Featured</span>
        </div>
        <div class="blog-featured__body">
          <div class="blog-card__meta">
            <span class="blog-card__cat"><?php echo htmlspecialchars($blogCategories[$featured['category']] ?? ''); ?></span>
            <span class="blog-card__dot" aria-hidden="true">&middot;</span>
            <span><?php echo $fmtDate($featured['date']); ?></span>
            <span class="blog-card__dot" aria-hidden="true">&middot;</span>
            <span><?php echo (int) $featured['read']; ?> min read</span>
          </div>
          <h2 class="blog-featured__title"><?php echo htmlspecialchars($featured['title']); ?></h2>
          <p class="blog-featured__excerpt"><?php echo htmlspecialchars($featured['excerpt']); ?></p>
          <span class="blog-card__more">Read the article <i data-lucide="arrow-right" width="16" height="16"></i></span>
        </div>
      </a>
      <?php endif; ?>

      <!-- Post grid -->
      <div class="blog-grid" id="blogGrid">
        <?php foreach ($blogPosts as $post): ?>
          <?php if ($post['slug'] === $featuredSlug) continue; ?>
          <article class="blog-card reveal" data-category="<?php echo htmlspecialchars($post['category']); ?>">
            <a class="blog-card__link" href="/blog/<?php echo htmlspecialchars($post['slug']); ?>">
              <div class="blog-card__cover blog-cover--<?php echo htmlspecialchars($post['category']); ?>"
                   <?php if (!empty($post['image'])): ?>style="background-image:url('<?php echo htmlspecialchars($post['image']); ?>')"<?php endif; ?>>
                <span class="blog-cover__tag"><?php echo htmlspecialchars($blogCategories[$post['category']] ?? ''); ?></span>
              </div>
              <div class="blog-card__body">
                <div class="blog-card__meta">
                  <span><?php echo $fmtDate($post['date']); ?></span>
                  <span class="blog-card__dot" aria-hidden="true">&middot;</span>
                  <span><?php echo (int) $post['read']; ?> min read</span>
                </div>
                <h3 class="blog-card__title"><?php echo htmlspecialchars($post['title']); ?></h3>
                <p class="blog-card__excerpt"><?php echo htmlspecialchars($post['excerpt']); ?></p>
                <span class="blog-card__more">Read more <i data-lucide="arrow-right" width="15" height="15"></i></span>
              </div>
            </a>
          </article>
        <?php endforeach; ?>
      </div>

      <!-- Empty state (shown by JS when a filter matches nothing) -->
      <p class="blog-empty" id="blogEmpty" hidden>No posts in this topic yet — check back soon.</p>

    </div>
  </section>

  <!-- ============== CTA ============== -->
  <section class="blog-cta">
    <div class="msp-wrap">
      <div class="blog-cta__panel reveal">
        <h2 class="blog-cta__title">Ready to stop reading and start matching?</h2>
        <p class="blog-cta__sub">
          Book a free guidance call and we’ll map your path to the residency match — Step scores, research, rotations, and application.
        </p>
        <a class="btn btn--primary btn--lg" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">
          Book a Guidance Call
        </a>
      </div>
    </div>
  </section>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
