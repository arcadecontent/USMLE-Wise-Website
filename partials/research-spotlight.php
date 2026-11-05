<?php
/**
 * Research Spotlight — accepted-abstract testimonial carousel.
 *
 * Web version of the "Research Spotlight" social cards. One student per slide:
 * a pale record rail (headshot, name, acceptance chip, abstract title, meeting)
 * next to the quote. Renders nothing when there are no testimonials.
 *
 * Every entry is run through usmlewise_research_testimonial_normalize(), so a
 * feed straight from the CRM renders without any per-entry tidying here. The
 * field contract is documented in data/research-testimonials.php.
 *
 * Quotes render in full, however long they are. Slides are equal height, so
 * the longest quote in the set sets the height of all of them: keep entries
 * near the length the contract recommends.
 *
 * Any page including this must also register, in $stylesheets / $scripts:
 *   /styles/research-spotlight.css
 *   /js/research-spotlight.js
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/data/research-testimonials.php';

// A page may set $rspOverride before including this to render its own set.
// research-spotlight-preview.php uses it to show placeholder slides.
$rspItems = (isset($rspOverride) && is_array($rspOverride))
    ? array_values(array_filter(array_map('usmlewise_research_testimonial_normalize', $rspOverride)))
    : usmlewise_research_testimonials();
if (empty($rspItems)) return;

$rspCount = count($rspItems);
$rspId    = 'rspTrack';
?>
<section class="msp-section rsp" id="research-spotlight" aria-labelledby="rspTitle">
  <div class="msp-wrap">

    <div class="msp-head reveal">
      <span class="msp-eyebrow">Research Spotlight</span>
      <h2 id="rspTitle" class="msp-h2">In their words.</h2>
      <p class="msp-sub">
        Students whose abstracts were accepted at national meetings, on what
        working with their mentor was actually like.
      </p>
    </div>

    <div class="rsp-carousel reveal"
         data-rsp
         role="region"
         aria-roledescription="carousel"
         aria-label="Research testimonials">

      <ul class="rsp-track" id="<?php echo $rspId; ?>" data-rsp-track tabindex="0">
        <?php foreach ($rspItems as $i => $t): ?>
        <?php
          // A site-absolute path must resolve to a real file, so a headshot
          // that has not been uploaded yet falls back to the initials monogram
          // instead of rendering a broken image. Inline and remote sources are
          // taken as given.
          $photo    = $t['photo'];
          $hasPhoto = $photo !== '' && (
              strncmp($photo, 'data:', 5) === 0
              || strncmp($photo, 'http', 4) === 0
              || is_file($_SERVER['DOCUMENT_ROOT'] . $photo)
          );
        ?>
        <li class="rsp-slide"
            role="group"
            aria-roledescription="slide"
            aria-label="<?php echo ($i + 1) . ' of ' . $rspCount . ': ' . htmlspecialchars($t['name']); ?>">

          <article class="rsp-record">

            <div class="rsp-record__rail">
              <div class="rsp-person">
                <div class="rsp-person__photo<?php echo $hasPhoto ? '' : ' rsp-person__photo--mono'; ?>">
                  <?php if ($hasPhoto): ?>
                  <img src="<?php echo htmlspecialchars($photo); ?>"
                       alt="<?php echo htmlspecialchars($t['name']); ?>"
                       width="128" height="128" loading="lazy" decoding="async" />
                  <?php else: ?>
                  <span aria-hidden="true"><?php echo htmlspecialchars($t['initials']); ?></span>
                  <?php endif; ?>
                </div>
                <?php /* Name and acceptance travel together: the status is read
                          as a fact about this person, not about the card. */ ?>
                <div class="rsp-person__id">
                  <h3 class="rsp-person__name"><?php echo htmlspecialchars($t['name']); ?></h3>
                  <?php if ($t['status'] !== ''): ?>
                  <span class="rsp-chip"><?php echo htmlspecialchars($t['status']); ?></span>
                  <?php endif; ?>
                </div>
              </div>

              <?php if ($t['paper'] !== ''): ?>
              <p class="rsp-paper"><?php echo htmlspecialchars($t['paper']); ?></p>
              <?php endif; ?>

              <?php if ($t['event'] !== ''): ?>
              <p class="rsp-event">
                <span class="rsp-event__name"><?php echo htmlspecialchars($t['event']); ?></span>
                <?php if ($t['eventMeta'] !== ''): ?>
                <span class="rsp-event__meta"><?php echo htmlspecialchars($t['eventMeta']); ?></span>
                <?php endif; ?>
              </p>
              <?php endif; ?>
            </div>

            <div class="rsp-record__quote">
              <span class="rsp-mark" aria-hidden="true">&ldquo;</span>

              <blockquote class="rsp-quote">
                <?php foreach ($t['quote'] as $para): ?>
                <p><?php echo htmlspecialchars($para); ?></p>
                <?php endforeach; ?>
              </blockquote>

              <?php if ($t['mentor'] !== ''): ?>
              <footer class="rsp-attr">
                <span class="rsp-attr__rule" aria-hidden="true"></span>
                Mentored by <b><?php echo htmlspecialchars($t['mentor']); ?></b>
              </footer>
              <?php endif; ?>
            </div>

          </article>
        </li>
        <?php endforeach; ?>
      </ul>

      <?php if ($rspCount > 1): ?>
      <div class="rsp-nav">
        <div class="rsp-nav__arrows">
          <button class="rsp-nav__btn" type="button" data-rsp-prev
                  aria-controls="<?php echo $rspId; ?>" aria-label="Previous testimonial">
            <svg width="17" height="17" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M11 3.5 6 9l5 5.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
          <button class="rsp-nav__btn" type="button" data-rsp-next
                  aria-controls="<?php echo $rspId; ?>" aria-label="Next testimonial">
            <svg width="17" height="17" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M7 3.5 12 9l-5 5.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
        </div>

        <p class="rsp-nav__hint" aria-hidden="true">Swipe for more</p>

        <div class="rsp-nav__dots" role="group" aria-label="Choose a testimonial">
          <?php foreach ($rspItems as $i => $t): ?>
          <button class="rsp-dot" type="button"
                  data-rsp-dot="<?php echo $i; ?>"
                  aria-controls="<?php echo $rspId; ?>"
                  <?php echo $i === 0 ? 'aria-current="true"' : ''; ?>
                  aria-label="Go to <?php echo htmlspecialchars($t['name']); ?>"><span aria-hidden="true"></span></button>
          <?php endforeach; ?>
        </div>
      </div>

      <p class="rsp-live" aria-live="polite" data-rsp-live>Testimonial 1 of <?php echo $rspCount; ?></p>
      <?php endif; ?>

    </div>
  </div>
</section>
