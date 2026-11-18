<?php
/**
 * Student story carousel: one dark band with a video carousel in it.
 *
 * The home page includes this twice, each time right after the matching
 * service block (the same way the awards carousel follows Research):
 *
 *   $storyGroup = 'exam';  include .../partials/story-carousel.php;  // after Exam Prep
 *   $storyGroup = 'match'; include .../partials/story-carousel.php;  // after Residency Match
 *
 * Slides and wording live in data/story-videos.php. The page must load
 * /styles/match.css (or coaching.css) and the carousel behavior: /js/match.js,
 * /js/coaching.js, or /js/story-carousel.js for pages that run neither. Every
 * video poster opens the one #mspLightbox on the page. A page that does not
 * already have it sets $storyLightbox = true before the include and this
 * prints it after the band (once per page).
 * Renders nothing when the group has no slides.
 *
 * The body runs inside a closure so its variables do not leak into the page.
 */
(static function (string $groupKey, bool $withLightbox): void {
    $data = require $_SERVER['DOCUMENT_ROOT'] . '/data/story-videos.php';
    $g = $data['groups'][$groupKey] ?? null;
    $slides = array_values(array_filter($data['slides'], static fn($s) => $s['group'] === $groupKey));
    $total = count($slides);
    if (!$g || !$total) return;

    $h = static fn($s) => htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
    $titleId = 'stories-' . $groupKey . '-title';
    ?>
  <section class="msp-stories" id="stories-<?= $h($groupKey) ?>" aria-labelledby="<?= $h($titleId) ?>">
    <div class="msp-wrap">
      <div class="msp-stories__head reveal">
        <span class="msp-eyebrow msp-eyebrow--light"><?= $h($g['eyebrow']) ?></span>
        <h2 id="<?= $h($titleId) ?>" class="msp-h2 msp-h2--invert"><?= $h($g['title']) ?></h2>
        <p class="msp-stories__sub"><?= $h($g['sub']) ?></p>
      </div>

      <div class="msp-carousel" role="group" aria-label="<?= $h($g['eyebrow']) ?>">
        <?php foreach ($slides as $i => $s):
          $thumb = 'https://img.youtube.com/vi/' . $s['ytid'] . '/' . ($s['thumb'] ?? 'maxresdefault') . '.jpg';
          // Only the first slide's poster is in src. The rest wait in data-src
          // until js/match.js loads them, one slide ahead of the visitor.
          $srcAttr = $i === 0 ? 'src' : 'data-src';
        ?>
        <div class="msp-slide<?= $i === 0 ? ' is-active' : '' ?>" role="group" aria-label="Story <?= $i + 1 ?> of <?= $total ?>"<?= $i === 0 ? '' : ' aria-hidden="true"' ?>>
          <button class="msp-video-trigger" data-ytid="<?= $h($s['ytid']) ?>" aria-label="Play testimonial video: <?= $h($s['name']) ?>">
            <img <?= $srcAttr ?>="<?= $h($thumb) ?>" alt="<?= $h($s['alt']) ?>" class="msp-video-trigger__thumb" loading="lazy" decoding="async" />
            <span class="yt-play">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
            </span>
          </button>
          <div class="msp-slide__content">
            <p class="msp-story-feature__outcome"><?= $h($s['outcome']) ?></p>
            <blockquote class="msp-story-feature__quote">
              <p><?= $h($s['quote']) ?></p>
              <footer class="msp-story-feature__attr">
                <cite class="msp-story-feature__cite">
                  <span><?= $h($s['name']) ?></span>
                  <span><?= $h($s['place']) ?></span>
                </cite>
              </footer>
            </blockquote>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <div class="msp-carousel__nav">
        <button class="msp-carousel__btn" aria-label="Previous <?= $h($g['noun']) ?>">
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M11 3.5L6 9l5 5.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <span class="msp-carousel__count" aria-live="polite">1 / <?= $total ?></span>
        <button class="msp-carousel__btn" aria-label="Next <?= $h($g['noun']) ?>">
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M7 3.5L12 9l-5 5.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
      </div>
    </div>
  </section>
    <?php if ($withLightbox): ?>
  <!-- Video lightbox: opened by every poster in the story band above -->
  <div class="msp-lightbox" id="mspLightbox" role="dialog" aria-modal="true" aria-label="Student testimonial video" hidden>
    <button class="msp-lightbox__close" aria-label="Close video">&times;</button>
    <div class="msp-lightbox__frame">
      <iframe id="mspLightboxIframe" src="" allow="autoplay; fullscreen" allowfullscreen frameborder="0" title="Student testimonial video"></iframe>
    </div>
  </div>
    <?php endif; ?>
    <?php
})((string) ($storyGroup ?? ''), !empty($storyLightbox));
