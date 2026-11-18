<?php
// Dates, countdown and enroll buttons come from data/crash-course-cohorts.php.
require_once $_SERVER['DOCUMENT_ROOT'] . '/data/crash-course-cohorts.php';
$cohort = uwcc_live_cohort('step2');
$isOpen = $cohort['state'] === 'open';
$h = static fn($s) => htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
$pageTitle = "Step 2 Live Crash Course | USMLE Wise";
$pageDescription = "A {$cohort['days']}-day, {$cohort['hours']}-hour live Step 2 crash course on Zoom" . ($isOpen ? ", {$cohort['range']}" : "") . ", taught by a team of 270+ Step 2 scorers. Finish the course, and if you don't pass, get your money back.";
$canonical = "https://usmlewise.com/step-2-live-crash-course";
$bodyClass = "msp";
$preloadImage = "/assets/step-2-crash-course-enrollment/step-2-live-crash-course-hero.jpg";
$stylesheets = [
    "/styles/match.css",
    "/styles/crash-course-brochure.css"
];
$scripts = [
    "/js/research-catalyst.js",
    "/js/step2-checkout.js",
    "/js/cohort-countdown.js",
    "/js/promo-hint.js",
    "/js/story-carousel.js"
];
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>

<!-- ============== HERO ============== -->
<section class="msp-hero" aria-labelledby="heroTitle">
  <div class="msp-wrap msp-hero__grid">
    <div class="msp-hero__copy reveal">
      <h1 id="heroTitle" class="msp-h1">Pass Step&nbsp;2 in just <em><?= (int) $cohort['days'] ?> live days</em>.</h1>
      <p class="msp-lede"><?= (int) $cohort['hours'] ?> hours of live, high-yield instruction on Zoom<?= $isOpen ? ', ' . $h($cohort['range']) : '' ?>, from a team of 270+ Step&nbsp;2 scorers. Ask questions in real time. Finish the course, and if you don't pass, you get your money back.</p>
      <?php $ccCohort = $cohort; $ccVariant = 'hero'; include $_SERVER['DOCUMENT_ROOT'] . '/partials/cohort-countdown.php'; ?>
      <div class="msp-cta-row">
        <?php if ($isOpen): ?>
        <form action="https://mastery.usmlewise.com/api/checkout/single-course" method="post" target="_blank" style="display:inline-block">
          <input type="hidden" name="courseId" value="cmtb3d8b90n2oqyu2t9a69zlc">
          <button type="submit" class="cc-checkout-btn" data-cta="checkout"><span class="btn btn--primary btn--xl">Enroll Now</span></button>
        </form>
        <a class="btn btn--outline btn--xl" href="#curriculum">See the Curriculum</a>
        <?php else: $ccVariant = 'row'; include $_SERVER['DOCUMENT_ROOT'] . '/partials/cohort-cta.php'; endif; ?>
      </div>
    </div>
    <div class="msp-hero__frame" style="aspect-ratio:16/9">
      <img src="/assets/step-2-crash-course-enrollment/step-2-live-crash-course-hero.jpg" alt="USMLE Step 2 Ultra High-Yield Crash Course" />
    </div>
  </div>

  <div class="msp-bar msp-wrap" aria-label="Track record">
    <div class="msp-bar__inner">
      <div class="msp-stat reveal"><b data-count="253">253</b><span>Average student Step 2 score</span></div>
      <div class="msp-divider" aria-hidden="true"></div>
      <div class="msp-stat reveal"><b data-count="12000" data-comma="1" data-suffix="+">12,000+</b><span>Students trained</span></div>
      <div class="msp-divider" aria-hidden="true"></div>
      <div class="msp-stat reveal"><b data-count="270" data-suffix="+">270+</b><span>Instructor Step 2 score</span></div>
      <div class="msp-divider" aria-hidden="true"></div>
      <div class="msp-stat reveal"><b>100%</b><span>Pass guarantee</span></div>
    </div>
  </div>
</section>

<?php $ccStep = 'step2'; $ccFrom = 'live'; include $_SERVER['DOCUMENT_ROOT'] . '/partials/cohort-switch.php'; ?>

<!-- ============== THE PROBLEM ============== -->
<section class="msp-section s1-problem" aria-labelledby="problemTitle">
  <div class="msp-wrap">
    <div class="msp-head reveal" style="max-width:68ch;margin-inline:auto;text-align:center">
      <span class="msp-eyebrow" style="justify-content:center">The real problem</span>
      <h2 id="problemTitle" class="msp-h2" style="margin-inline:auto;max-width:28ch">Every year, strong students fail Step&nbsp;2, and it's rarely for lack of effort.</h2>
      <p class="msp-sub" style="margin-inline:auto">They grind through UWorld, memorize First Aid cover to cover, and drown in Anki decks and random PDFs. Then exam day comes: the facts they crammed don't surface fast enough, the look-alike answer choices blur together, and the "next best step" questions quietly cost points they couldn't afford to lose.</p>
    </div>

    <div class="s1-problem__grid">
      <div class="s1-problem__card reveal">
        <p>They've poured hundreds of hours into low-yield material while missing what the NBME actually tests.</p>
      </div>
      <div class="s1-problem__card reveal">
        <p>They've memorized everything but never learned the test-taking tactics, the elimination skills, or the pacing that gets them through a block on time.</p>
      </div>
      <div class="s1-problem__card reveal">
        <p>And the resources they're studying from are outdated, built before the 2026 shift toward longer chart-style stems and ethics and communication items.</p>
      </div>
    </div>

    <p class="s1-problem__turn reveal">Scores don't rise with hours logged. They rise with <em>precision</em>.</p>
  </div>
</section>

<!-- ============== WHY IT WORKS ============== -->
<section class="msp-section" aria-labelledby="whyTitle">
  <div class="msp-wrap">
    <div class="msp-head reveal" style="max-width:68ch;margin-inline:auto;text-align:center">
      <span class="msp-eyebrow" style="justify-content:center">Why this course works</span>
      <h2 id="whyTitle" class="msp-h2" style="margin-inline:auto;max-width:26ch">Built around what actually moves your score.</h2>
    </div>
    <div class="pg-feat-grid">
      <div class="pg-feat reveal">
        <div class="pg-feat__icon"><i data-lucide="clock" width="20" height="20"></i></div>
        <p class="pg-feat__title"><?= (int) $cohort['days'] ?> live days. <?= (int) $cohort['hours'] ?> hours. Zero fluff.</p>
        <p class="pg-feat__body">Every session targets exactly what the NBME tests most. If it's not high-yield, it's not in.</p>
      </div>
      <div class="pg-feat reveal">
        <div class="pg-feat__icon"><i data-lucide="refresh-cw" width="20" height="20"></i></div>
        <p class="pg-feat__title">Rebuilt for the 2026 syllabus.</p>
        <p class="pg-feat__body">Rebuilt line by line for the current blueprint: longer chart-style stems, ethics and communication, and patient safety and quality.</p>
      </div>
      <div class="pg-feat reveal">
        <div class="pg-feat__icon"><i data-lucide="message-circle" width="20" height="20"></i></div>
        <p class="pg-feat__title">Question-powered teaching.</p>
        <p class="pg-feat__body">NBME-style vignettes from minute one, so you train your knowledge and your test-taking at the same time.</p>
      </div>
      <div class="pg-feat reveal">
        <div class="pg-feat__icon"><i data-lucide="link" width="20" height="20"></i></div>
        <p class="pg-feat__title">The N+1 method.</p>
        <p class="pg-feat__body">Each lesson stacks on the last so recall becomes automatic, and it carries straight into Step&nbsp;3.</p>
      </div>
      <div class="pg-feat reveal">
        <div class="pg-feat__icon"><i data-lucide="award" width="20" height="20"></i></div>
        <p class="pg-feat__title">Taught by 270+ Step 2 scorers.</p>
        <p class="pg-feat__body">You'll learn from doctors who beat this exam and reverse-engineered exactly how it's built.</p>
      </div>
      <div class="pg-feat reveal">
        <div class="pg-feat__icon"><i data-lucide="video" width="20" height="20"></i></div>
        <p class="pg-feat__title">Live. Interactive. No black boxes.</p>
        <p class="pg-feat__body">Every doubt cleared, live, every day. You stay accountable and coached, with lifetime access to every recording after.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============== CURRICULUM ============== -->
<section class="msp-section" id="curriculum" aria-labelledby="curriculumTitle" style="background:var(--uw-surface-sunk);border-block:1px solid var(--uw-border)">
  <div class="msp-wrap">
    <div class="msp-head reveal" style="max-width:68ch;margin-inline:auto;text-align:center">
      <span class="msp-eyebrow" style="justify-content:center">Curriculum</span>
      <h2 id="curriculumTitle" class="msp-h2" style="margin-inline:auto;max-width:26ch"><?= (int) $cohort['days'] ?> days, <?= (int) $cohort['session_hours'] ?> hours daily. All 17 Step&nbsp;2 subjects covered.</h2>
      <p class="msp-sub" style="margin-inline:auto"><?= $cohort['start'] ? $h($cohort['start']->format('l, M j')) . ' through ' . $h($cohort['lastDay']->format('l, M j, Y')) . '. ' : '' ?>Every session is recorded, with lifetime access.</p>
    </div>
    <?php
    // Topics and hours per day. The dates come from data/crash-course-cohorts.php.
    $s2_days = [
      [['Pediatrics', '6.5'], ['Dermatology', '1.5']],
      [['General Surgery', '6.5'], ['Screening & Vaccination', '1.5']],
      [['Obstetrics & Gynecology', '5.5'], ['Gastrointestinal', '2.5']],
      [['Neurology', '5'], ['Musculoskeletal', '3']],
      [['Cardiovascular', '4.5'], ['Hematology & Oncology', '3.5']],
      [['Renal', '4.5'], ['Endocrine', '3.5']],
      [['Respiratory', '4'], ['Psychiatry', '4']],
      [['Ethics', '3.5'], ['Biostatistics', '2.5'], ['Nutrition', '2']],
    ];
    ?>
    <div class="msp-services__grid s1-curric s1-curric--list">
      <?php foreach ($s2_days as $i => $topics): $dayHours = array_sum(array_column($topics, 1)); ?>
      <div class="msp-svc reveal">
        <span class="msp-svc__no"><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
        <div><h3><?= $h(uwcc_day_label($cohort, $i)) ?></h3><p style="margin-bottom:8px"><?= $h($dayHours) ?> hours of live instruction.</p><div><?php foreach ($topics as [$name, $hrs]): ?><span class="crs-tag"><?= $h($name) ?> &middot; <?= $h($hrs) ?>h</span><?php endforeach; ?></div></div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="s1-sched reveal">
      <?php if ($cohort['start']): ?>
      <div class="s1-sched__head">Sessions start at <?= $h($cohort['startTime']) ?>, every day</div>
      <div class="s1-sched__table">
        <div class="s1-sched__row s1-sched__row--head"><span></span><span>Starts</span><span>Ends</span></div>
        <?php foreach (uwcc_schedule_rows($cohort) as [$place, $starts, $ends]): ?>
        <div class="s1-sched__row"><span><?= $h($place) ?></span><span><?= $h($starts) ?></span><span><?= $h($ends) ?></span></div>
        <?php endforeach; ?>
      </div>
      <?php else: ?>
      <div class="s1-sched__head">Sessions usually start at 7:00 AM Eastern, every day</div>
      <p class="msp-sub" style="margin-inline:auto">Start and end times for your city are listed here as soon as the next cohort has a date.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ============== INSTRUCTOR ============== -->
<section class="msp-section" id="instructor" aria-labelledby="instructorTitle">
  <div class="msp-wrap">
    <div class="msp-head reveal" style="max-width:68ch;margin-inline:auto;text-align:center">
      <span class="msp-eyebrow" style="justify-content:center">Your instructor</span>
      <h2 id="instructorTitle" class="msp-h2" style="margin-inline:auto;max-width:26ch">Built by the world's most-followed USMLE expert.</h2>
    </div>
    <div class="s1-founder reveal">
      <div>
        <div class="s1-founder__photo">
          <img src="/assets/step-2-crash-course-enrollment/step-1-crash-course-picture.jpg" alt="Dr. Manik Madaan" />
        </div>
        <div class="s1-founder__name">Dr. Manik Madaan</div>
        <div class="s1-founder__meta">260 on Step 1 &middot; 271 on Step 2<br>700,000+ followers &middot; 17,000+ students taught</div>
      </div>
      <div class="s1-founder__copy">
        <p>I'm Dr. Manik Madaan, and this course is built from the same experience that got me a 271 on Step&nbsp;2 myself.</p>
        <p>When I was preparing, I found the same problem every IMG runs into: endless resources, all labeled &ldquo;high-yield,&rdquo; and no clear signal on what the exam actually rewards.</p>
        <p class="s1-founder__pull">Only about 20% of what's in the traditional resources actually moves the needle.</p>
        <p>The other 80% is outdated fluff that just slows you down, and Step&nbsp;2's longer, chart-heavy vignettes punish anyone who hesitates.</p>
        <p>So I built the course I wish I'd had, live this time: only what the NBME actually tests, taught by instructors who scored 270+ themselves, with a mentor in the room to clear every doubt as it comes up.</p>
        <p>I designed every hour of this curriculum and teach it live with my mentor team. Every session is recorded, so a missed hour is never a lost hour.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============== HOW WE COMPARE ============== -->
<section class="msp-section" id="compare" aria-labelledby="compareTitle" style="background:var(--uw-surface-sunk);border-block:1px solid var(--uw-border)">
  <div class="msp-wrap">
    <div class="msp-head reveal" style="max-width:68ch;margin-inline:auto;text-align:center">
      <span class="msp-eyebrow" style="justify-content:center">How we compare</span>
      <h2 id="compareTitle" class="msp-h2" style="margin-inline:auto;max-width:26ch">Side by side, here's what actually sets this apart.</h2>
    </div>

    <div class="s1-compare reveal">
      <div class="s1-compare__head"><span></span><span>USMLE Wise</span><span>Other crash courses</span></div>

      <?php
      $s2_compare_rows = [
        ['2026 alignment', 'Rebuilt line by line for the 2026 syllabus, including the shift toward longer chart-style stems and ethics items', 'Often reuses older decks with partial updates'],
        ['Focus', (int) $cohort['hours'] . ' live hours, zero fluff, only what the NBME repeatedly tests', 'Broad sweep, mixed yield, time dilution'],
        ['Teaching engine', 'Question-powered: NBME-style vignettes train knowledge and test-taking together', 'Lecture-heavy, QBank left for homework'],
        ['Instructors', '270+ Step 2 scorers who reverse-engineered the patterns', 'Limited experience and credentials'],
        ['Accountability', 'Live daily sessions with real-time Q&amp;A and daily quizzes that make you apply each lesson', 'Passive watching, little pressure to execute'],
        ['Pass guarantee', 'Finish the course, don’t pass, full refund', 'No guarantee, or store credit only'],
        ['Reported outcomes', '20&ndash;40 point jumps on practice NBMEs', 'Modest gains over months'],
        ['Step 3 bridge', 'N+1 consolidation leaves you with a ready Step 3 launchpad', 'No structured bridge beyond Step 2'],
      ];
      foreach ($s2_compare_rows as $row): ?>
      <div class="s1-compare__row">
        <div class="s1-compare__feat"><?php echo $row[0]; ?></div>
        <div class="s1-compare__col s1-compare__col--us">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
          <span><?php echo $row[1]; ?></span>
        </div>
        <div class="s1-compare__col s1-compare__col--others">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          <span><?php echo $row[2]; ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============== OFFER ============== -->
<section class="msp-section" id="offer" aria-labelledby="offerTitle">
  <div class="msp-wrap">
    <div class="msp-head reveal" style="max-width:68ch;margin-inline:auto;text-align:center">
      <span class="msp-eyebrow" style="justify-content:center">What you get</span>
      <h2 id="offerTitle" class="msp-h2" style="margin-inline:auto;max-width:26ch">Everything you need to pass, in one live cohort.</h2>
    </div>

    <div class="s1-offer reveal">
      <div class="s1-offer__list">
        <div class="s1-offer__item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
          <span class="s1-offer__item-name"><?= (int) $cohort['days'] ?> days of live teaching, <?= (int) $cohort['hours'] ?> hours, covering every high-yield topic on the 2026 Step 2 syllabus</span>
        </div>
        <div class="s1-offer__item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
          <span class="s1-offer__item-name">Lifetime access to every session recording</span>
        </div>
        <div class="s1-offer__item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
          <span class="s1-offer__item-name">Live Q&amp;A after every topic, with mentors who stay until the questions stop</span>
        </div>
        <div class="s1-offer__item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
          <span class="s1-offer__item-name">USMLE-style vignettes worked live from hour one, with daily quizzes</span>
        </div>
        <div class="s1-offer__item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
          <span class="s1-offer__item-name">Bonus: the 2026 Step 2 Rapid Review notes</span>
        </div>
        <div class="s1-offer__item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
          <span class="s1-offer__item-name">Bonus: the test-taking strategy course</span>
        </div>
        <div class="s1-offer__item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
          <span class="s1-offer__item-name">Private WhatsApp community with your cohort and mentors</span>
        </div>
      </div>
      <div class="s1-offer__pay">
        <div class="s1-offer__price" id="s2-price">$499</div>
        <p class="s1-offer__price-note">One time &middot; Lifetime access</p>
        <?php if ($isOpen): ?>
        <p class="s1-offer__promo">Get $100 off with code <button type="button" class="s1-offer__code" data-promo-code="STEP100" aria-label="Apply promo code STEP100">STEP100</button></p>
        <?php $ccVariant = 'line'; include $_SERVER['DOCUMENT_ROOT'] . '/partials/cohort-countdown.php'; ?>
        <form id="s2-checkout" action="https://mastery.usmlewise.com/api/checkout/single-course" method="post" target="_blank" style="width:100%">
          <input type="hidden" name="courseId" value="cmtb3d8b90n2oqyu2t9a69zlc">
          <button type="submit" class="cc-checkout-btn" data-cta="checkout"><span class="btn btn--primary btn--xl" style="width:100%">Enroll Now</span></button>
          <div class="s1-promo">
            <input id="s2-promo" class="s1-promo__input" name="promo" type="text" maxlength="80" autocomplete="off" spellcheck="false" placeholder="Promo code" aria-label="Promo code" aria-describedby="s2-promo-result">
            <button type="button" id="s2-promo-apply" class="s1-promo__apply">Apply</button>
          </div>
          <p id="s2-promo-result" class="s1-promo__result" aria-live="polite">One-time payment. Any promo code is verified at checkout.</p>
        </form>
        <?php else: $ccVariant = 'block'; include $_SERVER['DOCUMENT_ROOT'] . '/partials/cohort-cta.php'; endif; ?>
        <div class="s1-offer__guarantee">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
          <span>Sit day 1. Not satisfied? Full refund. Finish the course and don't pass? Full refund.</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============== STUDENT RESULTS ============== -->
<section class="msp-section" aria-labelledby="resultsTitle" style="background:var(--uw-surface-sunk);border-block:1px solid var(--uw-border);padding-inline:0">
  <div class="msp-wrap">
    <div class="msp-head reveal" style="max-width:68ch;margin-inline:auto;text-align:center;margin-bottom:0">
      <span class="msp-eyebrow" style="justify-content:center">From our students</span>
      <h2 id="resultsTitle" class="msp-h2" style="margin-inline:auto;max-width:24ch;margin-bottom:0">Hear what our students are saying.</h2>
    </div>
  </div>

  <div class="s1-marquee-mask">
    <div class="s1-marquee-track">
      <?php
      $s2_marquee = ['drishiti-280-step-2.png','step-2-272.png','vamsi-step-2.jpg','jasmine-step-2-scored.png','umar-step-2-scored.jpg','vucha-jyothika-step-2-scored.jpg','step-2-scored-2.jpg','step-1-and-step-2-scored.jpg','step-2-scored-3.jpg','step-2-scored-5.png','step-2-scored.jpg','vyshnavi-step-2-scored.jpg','ali-step-2.jpg','rishab-step-1-scored.jpg','step-1-scored-11.png','shriya-step-1-scored.jpg','step-1-scored-baban.jpg','gehna-step-1-scored.jpg','sweta-step-1-scored.jpg','carmen-step-1-scored.png','pukhraj-step-1-scored.png','ruchika-step-1-scored-xponential.jpg','step-1-scored-12.png','step-1-scored-p.png'];
      foreach (array_merge($s2_marquee, $s2_marquee) as $img):
      ?><img src="/assets/step-2-crash-course-enrollment/<?php echo htmlspecialchars($img); ?>" alt="Student testimonial screenshot" loading="lazy"><?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============== VIDEO REVIEWS ============== -->
<section class="msp-section" aria-labelledby="videosTitle">
  <div class="msp-wrap">
    <div class="msp-head reveal" style="max-width:68ch;margin-inline:auto;text-align:center">
      <span class="msp-eyebrow" style="justify-content:center">Watch their stories</span>
      <h2 id="videosTitle" class="msp-h2" style="margin-inline:auto;max-width:24ch">Hear it from students who passed.</h2>
    </div>
    <div class="s1-video-bento reveal">
      <div class="s1-video-bento__vertical">
        <button class="msp-video-trigger" data-ytid="SmDKOptBIV4" aria-label="Watch a student video review">
          <img src="https://i.ytimg.com/vi/SmDKOptBIV4/oardefault.jpg" alt="Student video review" class="msp-video-trigger__thumb" loading="lazy" decoding="async" />
          <span class="yt-play">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
          </span>
        </button>
      </div>
      <div class="s1-video-bento__col">
        <button class="msp-video-trigger" data-ytid="5qnypeUipdE" aria-label="Watch a student video review">
          <img src="https://i.ytimg.com/vi/5qnypeUipdE/hqdefault.jpg" alt="Student video review" class="msp-video-trigger__thumb" loading="lazy" decoding="async" />
          <span class="yt-play">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
          </span>
        </button>
        <button class="msp-video-trigger" data-ytid="yljBSeYYx6s" aria-label="Watch a student video review">
          <img src="https://i.ytimg.com/vi/yljBSeYYx6s/hqdefault.jpg" alt="Student video review" class="msp-video-trigger__thumb" loading="lazy" decoding="async" />
          <span class="yt-play">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
          </span>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Video lightbox: orientation-aware, so a vertical Short plays tall
     instead of being letterboxed into a 16:9 frame. -->
<div class="msp-lightbox" id="s1Lightbox" role="dialog" aria-modal="true" aria-label="Student video review" hidden>
  <button class="msp-lightbox__close" aria-label="Close video">&times;</button>
  <div class="msp-lightbox__frame" id="s1LightboxFrame">
    <iframe id="s1LightboxIframe" src="" allow="autoplay; fullscreen" allowfullscreen frameborder="0" title="Student video review"></iframe>
  </div>
</div>
<script>
(function () {
  var VERTICAL_IDS = ['SmDKOptBIV4'];
  document.addEventListener('DOMContentLoaded', function () {
    var lightbox = document.getElementById('s1Lightbox');
    var frame = document.getElementById('s1LightboxFrame');
    var iframe = document.getElementById('s1LightboxIframe');
    if (!lightbox || !frame || !iframe) return;

    function open(ytid) {
      frame.classList.toggle('is-vertical', VERTICAL_IDS.indexOf(ytid) !== -1);
      iframe.src = 'https://www.youtube.com/embed/' + ytid + '?autoplay=1&rel=0';
      lightbox.removeAttribute('hidden');
      lightbox.focus();
    }
    function close() {
      iframe.src = '';
      lightbox.setAttribute('hidden', '');
    }
    document.querySelectorAll('.s1-video-bento .msp-video-trigger').forEach(function (btn) {
      btn.addEventListener('click', function () { open(btn.dataset.ytid); });
    });
    lightbox.querySelector('.msp-lightbox__close').addEventListener('click', close);
    lightbox.addEventListener('click', function (e) { if (e.target === lightbox) close(); });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && !lightbox.hasAttribute('hidden')) close();
    });
  });
})();
</script>

<!-- ============== EXAM STORIES ============== -->
<?php $storyGroup = 'exam'; $storyLightbox = true; include $_SERVER['DOCUMENT_ROOT'] . '/partials/story-carousel.php'; ?>

<!-- ============== FAQ ============== -->
<section class="msp-section" id="faq" aria-labelledby="faqTitle" style="background:var(--uw-surface-sunk);border-block:1px solid var(--uw-border)">
  <div class="msp-wrap">
    <div class="msp-head reveal" style="max-width:68ch;margin-inline:auto;text-align:center">
      <span class="msp-eyebrow" style="justify-content:center">Questions, answered</span>
      <h2 id="faqTitle" class="msp-h2" style="margin-inline:auto;max-width:22ch">Frequently asked questions</h2>
    </div>

    <div class="accordion accordion--faq s1-faq reveal">
      <div class="accordion__item">
        <button class="accordion__head" type="button">Is this live or self-paced?</button>
        <div class="accordion__body"><?php if ($cohort['start']): ?>It's live on Zoom, <?= $h($cohort['start']->format('l, F j')) ?> to <?= $h($cohort['lastDay']->format('l, F j, Y')) ?>, with Q&amp;A after every topic. Sessions start at <?= $h($cohort['startTime']) ?> every day.<?php else: ?>It's live on Zoom, in cohorts we run periodically, with Q&amp;A after every topic. The next dates will be announced soon, and sessions usually start at 7:00 AM Eastern every day.<?php endif; ?> Every session is also recorded and added to your library the same day, with lifetime access. Prefer to go at your own pace? The <a href="/step-2-high-yield-crash-course">recorded course</a> is always available.</div>
      </div>
      <div class="accordion__item">
        <button class="accordion__head" type="button">What if I can't make every session live?</button>
        <div class="accordion__body">That's fine. Every session is recorded and added to your library the same day, so you can catch up or rewatch anytime, and you keep that access for good.</div>
      </div>
      <div class="accordion__item">
        <button class="accordion__head" type="button">The timing is tough from my time zone. Can I still do this?</button>
        <div class="accordion__body">Yes. Plenty of students join part of each day live and watch the rest on recording. You keep the WhatsApp community either way, so your questions still get answered.</div>
      </div>
      <div class="accordion__item">
        <button class="accordion__head" type="button">Is this better for first-timers or retakers?</button>
        <div class="accordion__body">Both. First-timers get a clean high-yield map. Retakers get the usual leak points fixed: pacing, elimination under pressure, and ethics items.</div>
      </div>
      <div class="accordion__item">
        <button class="accordion__head" type="button">What actually changed on Step 2 in 2026?</button>
        <div class="accordion__body">The blueprint shifted weight toward longer chart-style stems, ethics and communication items, patient safety and quality, and pattern recognition over isolated fact recall. We rebuilt the curriculum line by line for the current weighting.</div>
      </div>
      <div class="accordion__item">
        <button class="accordion__head" type="button">How does question-powered teaching work?</button>
        <div class="accordion__body">We teach through USMLE-style vignettes from minute one. You learn the idea, solve a question, then take apart the logic and drill the variations until it sticks, live, with a mentor clearing every doubt as it comes up.</div>
      </div>
      <div class="accordion__item">
        <button class="accordion__head" type="button">Who teaches this, and what are their scores?</button>
        <div class="accordion__body">Instructors who scored 270+ on Step 2, coordinated by Dr. Manik Madaan (271 on Step 2). The team reverse-engineered the exam patterns across thousands of real items.</div>
      </div>
      <div class="accordion__item">
        <button class="accordion__head" type="button">Do I need UWorld or Amboss alongside this course?</button>
        <div class="accordion__body">UWorld is still the gold-standard QBank for Step 2, and we recommend it. The crash course is the high-yield spine, UWorld is your application practice.</div>
      </div>
      <div class="accordion__item">
        <button class="accordion__head" type="button">What's the guarantee?</button>
        <div class="accordion__body">Two guarantees. Sit the first day, and if you're not satisfied, email us for your money back. Or finish the course, sit your exam, and if you don't pass, send us your score report for a full refund.</div>
      </div>
      <div class="accordion__item">
        <button class="accordion__head" type="button">Will this carry over to Step 3?</button>
        <div class="accordion__body">Yes. The N+1 method and the decision frameworks are built to carry forward, so your Step 2 base gives your Step 3 prep a head start.</div>
      </div>
    </div>
  </div>
</section>

<!-- ============== FINAL CTA ============== -->
<section class="s1-cta-wrap">
  <div class="msp-wrap">
    <div class="s1-cta-card reveal" aria-labelledby="ctaTitle">
      <h2 id="ctaTitle" class="msp-h2">Ready to build the score you're proud of?</h2>
      <p class="msp-sub"><?= $isOpen ? 'Save your seat for the ' . $h($cohort['range']) . ' live cohort' : 'Be first in line for the next live cohort' ?> and get the Rapid Review notes, the test-taking strategy course, and the N+1 framework that carries straight into Step&nbsp;3.</p>
      <?php if ($isOpen): $ccVariant = 'line'; include $_SERVER['DOCUMENT_ROOT'] . '/partials/cohort-countdown.php'; endif; ?>
      <div class="msp-cta-row">
        <?php if ($isOpen): ?>
        <form action="https://mastery.usmlewise.com/api/checkout/single-course" method="post" target="_blank" style="display:inline-block">
          <input type="hidden" name="courseId" value="cmtb3d8b90n2oqyu2t9a69zlc">
          <button type="submit" class="cc-checkout-btn" data-cta="checkout"><span class="btn btn--primary btn--xl">Enroll Now</span></button>
        </form>
        <a class="btn btn--outline btn--xl" href="https://wa.me/19192015700" target="_blank" rel="noopener noreferrer">Text Us on WhatsApp</a>
        <?php else: $ccVariant = 'row'; include $_SERVER['DOCUMENT_ROOT'] . '/partials/cohort-cta.php'; endif; ?>
      </div>
    </div>
  </div>
</section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/course-pay.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
