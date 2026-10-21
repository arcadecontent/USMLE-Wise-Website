<?php
/**
 * Awards carousel — shown on every research-program page.
 * Pulls the award write-ups from data/posts.php and renders them as a
 * horizontally-scrolling row of plain blog cards, each linking to the full
 * write-up under /research-awards/<slug>. Renders nothing if there are none
 * yet. The full set lives on the /research-awards page.
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/data/posts.php';

$awardPosts = usmlewise_award_posts($blogPosts);

if (empty($awardPosts)) return;

$fmtDate = function ($iso) {
    $ts = strtotime($iso);
    return $ts ? date('j M Y', $ts) : $iso;
};
?>
<section class="msp-section awd-carousel" id="awards" aria-labelledby="awardsTitle">
  <div class="msp-wrap">
    <div class="msp-head reveal">
      <span class="msp-eyebrow">Recognition</span>
      <h2 id="awardsTitle" class="msp-h2">Awards that back our results.</h2>
      <p class="msp-sub">
        Conference recognition earned by students in our research programs.
        <a href="/research-awards">See all research awards</a>
      </p>
    </div>

    <div class="awd-carousel__wrap reveal">
      <button class="awd-carousel__btn awd-carousel__btn--prev" type="button" aria-label="Previous award" aria-controls="awardsTrack" disabled>
        <i data-lucide="chevron-left" width="18" height="18"></i>
      </button>

      <ul class="awd-carousel__track" id="awardsTrack">
        <?php foreach ($awardPosts as $post): ?>
        <li class="awd-carousel__card">
          <article class="blog-card" data-category="<?php echo htmlspecialchars($post['category']); ?>">
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
        </li>
        <?php endforeach; ?>
      </ul>

      <button class="awd-carousel__btn awd-carousel__btn--next" type="button" aria-label="Next award" aria-controls="awardsTrack">
        <i data-lucide="chevron-right" width="18" height="18"></i>
      </button>
    </div>
  </div>
</section>
