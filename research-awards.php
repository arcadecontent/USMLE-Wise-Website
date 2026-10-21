<?php
/**
 * Research Awards listing (/research-awards), reachable from Resources in the
 * nav. Shows the category: 'awards' write-ups from data/posts.php, which are
 * deliberately excluded from the general blog listing at /blog. Individual
 * write-ups render at /research-awards/<slug> via blog-post.php.
 *
 * Reuses blog.css (hero, cards, grid, CTA) and blog.js (nav state and
 * scroll-reveal; its category-filter code no-ops with no filter chips here).
 */
$pageTitle = "Research Awards | USMLE Wise";
$pageDescription = "National conference awards won by students in the USMLE Wise research programs, with the project, the venue, and what each award recognized.";
$canonical = "https://usmlewise.com/research-awards";
$bodyClass = "msp";
$stylesheets = [
    "/styles/blog.css"
];
$scripts = [
    "/js/blog.js"
];

require_once $_SERVER['DOCUMENT_ROOT'] . '/data/posts.php';
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';

$awardPosts = usmlewise_award_posts($blogPosts);

// Lead with the newest award, then grid the rest. With a single award that
// leaves just the wide featured card, which reads better than one lone
// 300px card in an auto-fill grid.
$lead = $awardPosts[0] ?? null;
$rest = array_slice($awardPosts, 1);

if (!empty($lead['image'])) {
    $preloadImage = $lead['image'];
}

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
          Research awards our <em>students have won.</em>
        </h1>
        <p class="blog-hero__sub">
          Recognition earned at national conferences by students in our research
          programs. Each write-up covers the project, where it was presented,
          and what the award was for.
        </p>
      </div>
    </div>
  </section>

  <!-- ============== AWARDS ============== -->
  <section class="blog-body">
    <div class="msp-wrap">

      <?php if ($lead): ?>
      <a class="blog-featured reveal" href="<?php echo htmlspecialchars(usmlewise_post_url($lead)); ?>"
         data-category="<?php echo htmlspecialchars($lead['category']); ?>">
        <div class="blog-featured__cover blog-cover--<?php echo htmlspecialchars($lead['category']); ?>"
             <?php if (!empty($lead['image'])): ?>style="background-image:url('<?php echo htmlspecialchars($lead['image']); ?>')"<?php endif; ?>>
          <span class="blog-cover__tag">Latest award</span>
        </div>
        <div class="blog-featured__body">
          <div class="blog-card__meta">
            <span class="blog-card__cat"><?php echo htmlspecialchars($blogCategories[$lead['category']] ?? ''); ?></span>
            <span class="blog-card__dot" aria-hidden="true">&middot;</span>
            <span><?php echo $fmtDate($lead['date']); ?></span>
            <span class="blog-card__dot" aria-hidden="true">&middot;</span>
            <span><?php echo (int) $lead['read']; ?> min read</span>
          </div>
          <h2 class="blog-featured__title"><?php echo htmlspecialchars($lead['title']); ?></h2>
          <p class="blog-featured__excerpt"><?php echo htmlspecialchars($lead['excerpt']); ?></p>
          <span class="blog-card__more">Read the write-up <i data-lucide="arrow-right" width="16" height="16"></i></span>
        </div>
      </a>
      <?php endif; ?>

      <?php if (!empty($rest)): ?>
      <div class="blog-grid">
        <?php foreach ($rest as $post): ?>
          <article class="blog-card reveal" data-category="<?php echo htmlspecialchars($post['category']); ?>">
            <a class="blog-card__link" href="<?php echo htmlspecialchars(usmlewise_post_url($post)); ?>">
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
      <?php endif; ?>

      <?php if (empty($awardPosts)): ?>
      <p class="blog-empty">No awards published yet. Check back soon.</p>
      <?php endif; ?>

    </div>
  </section>

  <!-- ============== CTA ============== -->
  <section class="blog-cta">
    <div class="msp-wrap">
      <div class="blog-cta__panel reveal">
        <h2 class="blog-cta__title">Want research worth presenting?</h2>
        <p class="blog-cta__sub">
          Book a free guidance call and we'll map the project, the conference, and
          the timeline that fit your application.
        </p>
        <a class="btn btn--primary btn--lg" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">
          Book a Guidance Call
        </a>
      </div>
    </div>
  </section>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
