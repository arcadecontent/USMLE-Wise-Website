<?php
// Dates, countdown and enroll buttons come from data/crash-course-cohorts.php.
require_once $_SERVER['DOCUMENT_ROOT'] . '/data/crash-course-cohorts.php';
$cohort = uwcc_live_cohort('step1');
$isOpen = $cohort['state'] === 'open';
$h = static fn($s) => htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
$pageTitle = "Step 1 Live Crash Course | USMLE Wise";
$pageDescription = "A {$cohort['days']}-day, {$cohort['hours']}-hour live Step 1 crash course on Zoom" . ($isOpen ? ", {$cohort['range']}" : "") . ", taught by a team of 270+ Step 2 scorers. Finish the course, and if you don't pass, get your money back.";
$canonical = "https://usmlewise.com/step-1-live-high-yield-crash-course";
$bodyClass = "msp";
$preloadImage = "/assets/step1-crash-course/step1-live-crash-course-image.jpg";
$stylesheets = [
    "/styles/match.css",
    "/styles/crash-course-brochure.css"
];
$scripts = [
    "/js/research-catalyst.js",
    "/js/cohort-countdown.js",
    "/js/story-carousel.js"
];
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>

<!-- ============== HERO ============== -->
<section class="msp-hero" aria-labelledby="heroTitle">
  <div class="msp-wrap msp-hero__grid">
    <div class="msp-hero__copy reveal">
      <h1 id="heroTitle" class="msp-h1">Pass Step&nbsp;1 in just <em><?= (int) $cohort['days'] ?> live days</em>.</h1>
      <p class="msp-lede"><?= (int) $cohort['hours'] ?> hours of live, high-yield instruction on Zoom<?= $isOpen ? ', ' . $h($cohort['range']) : '' ?>, from a team of 270+ Step&nbsp;2 scorers. Ask questions in real time. Finish the course, and if you don't pass, you get your money back.</p>
      <?php $ccCohort = $cohort; $ccVariant = 'hero'; include $_SERVER['DOCUMENT_ROOT'] . '/partials/cohort-countdown.php'; ?>
      <div class="msp-cta-row">
        <?php if ($isOpen): ?>
        <form action="https://mastery.usmlewise.com/api/checkout/single-course" method="post" target="_blank">
          <input type="hidden" name="courseId" value="cdbu1brx0peuyo75xzpwjcota">
          <button type="submit" class="cc-checkout-btn"><span class="btn btn--primary btn--xl">Enroll Now</span></button>
        </form>
        <a class="btn btn--outline btn--xl" href="#curriculum">See the Curriculum</a>
        <?php else: $ccVariant = 'row'; include $_SERVER['DOCUMENT_ROOT'] . '/partials/cohort-cta.php'; endif; ?>
      </div>
    </div>
    <div class="msp-hero__frame" style="aspect-ratio:16/9">
      <img src="/assets/step1-crash-course/step1-live-crash-course-image.jpg" alt="USMLE Step 1 Live Ultra High-Yield Crash Course" />
    </div>
  </div>

  <div class="msp-bar msp-wrap" aria-label="Track record">
    <div class="msp-bar__inner">
      <div class="msp-stat reveal"><b>99.3%</b><span>Pass rate</span></div>
      <div class="msp-divider" aria-hidden="true"></div>
      <div class="msp-stat reveal"><b data-count="17000" data-comma="1" data-suffix="+">17,000+</b><span>Students trained</span></div>
      <div class="msp-divider" aria-hidden="true"></div>
      <div class="msp-stat reveal"><b data-count="270" data-suffix="+">270+</b><span>Instructor Step 2 score</span></div>
      <div class="msp-divider" aria-hidden="true"></div>
      <div class="msp-stat reveal"><b>100%</b><span>Pass guarantee</span></div>
    </div>
  </div>
</section>

<?php $ccStep = 'step1'; $ccFrom = 'live'; include $_SERVER['DOCUMENT_ROOT'] . '/partials/cohort-switch.php'; ?>

<!-- ============== THE PROBLEM ============== -->
<section class="msp-section s1-problem" aria-labelledby="problemTitle">
  <div class="msp-wrap">
    <div class="msp-head reveal" style="max-width:68ch;margin-inline:auto;text-align:center">
      <span class="msp-eyebrow" style="justify-content:center">The real problem</span>
      <h2 id="problemTitle" class="msp-h2" style="margin-inline:auto;max-width:28ch">Every year, brilliant students fail Step&nbsp;1, and it's usually not for lack of effort.</h2>
      <p class="msp-sub" style="margin-inline:auto">They grind through UWorld, memorize First Aid cover to cover, and drown in Anki decks and random PDFs. Then test day comes: the facts they crammed don't surface fast enough, the look-alike answer choices blur together, and biostats and ethics quietly cost points they couldn't afford to lose.</p>
    </div>

    <div class="s1-problem__grid">
      <div class="s1-problem__card reveal">
        <p>They've poured hundreds of hours into low-yield material while missing what the USMLE actually tests.</p>
      </div>
      <div class="s1-problem__card reveal">
        <p>They've memorized everything but never learned the test-taking skills that help them rule out wrong answers in time.</p>
      </div>
      <div class="s1-problem__card reveal">
        <p>And the resources they're studying from were built for the old Step&nbsp;1, before the post-2022 surge in ethics, nutrition, and biostatistics.</p>
      </div>
    </div>

    <p class="s1-problem__turn reveal">Scores don't rise with hours logged. They rise with <em>precision</em>, and with a mentor pushing you in real time.</p>
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
        <p class="pg-feat__body">Every session targets exactly what the USMLE tests most. If it's not high-yield, it's not in.</p>
      </div>
      <div class="pg-feat reveal">
        <div class="pg-feat__icon"><i data-lucide="refresh-cw" width="20" height="20"></i></div>
        <p class="pg-feat__title">Rebuilt for the 2026 syllabus.</p>
        <p class="pg-feat__body">Rebuilt line by line for the current blueprint, including the surge in ethics, nutrition, and biostatistics.</p>
      </div>
      <div class="pg-feat reveal">
        <div class="pg-feat__icon"><i data-lucide="message-circle" width="20" height="20"></i></div>
        <p class="pg-feat__title">Question-powered teaching.</p>
        <p class="pg-feat__body">USMLE-style vignettes from minute one, so you train your knowledge and your test-taking at the same time.</p>
      </div>
      <div class="pg-feat reveal">
        <div class="pg-feat__icon"><i data-lucide="link" width="20" height="20"></i></div>
        <p class="pg-feat__title">The N+1 method.</p>
        <p class="pg-feat__body">Each lesson stacks on the last so recall becomes automatic, and it carries straight into Step&nbsp;2.</p>
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
      <h2 id="curriculumTitle" class="msp-h2" style="margin-inline:auto;max-width:26ch"><?= (int) $cohort['days'] ?> days, <?= (int) $cohort['hours'] ?> live hours, all 21 Step&nbsp;1 subjects.</h2>
      <p class="msp-sub" style="margin-inline:auto"><?= $cohort['start'] ? $h($cohort['start']->format('l, M j')) . ' through ' . $h($cohort['lastDay']->format('l, M j, Y')) . '. ' : '' ?>Every session is recorded, with lifetime access.</p>
    </div>
    <?php
    // Hours and topics per day. The dates come from data/crash-course-cohorts.php.
    $s1_days = [
      ['9.5', ['General Pathology', 'General Pharmacology', 'Cardiovascular']],
      ['10',  ['Biostatistics & Epidemiology', 'Respiratory', 'Renal']],
      ['8',   ['Endocrine', 'Neurology']],
      ['9',   ['Immunology', 'Genetics, Cell & Molecular Biology', 'Hematology & Oncology']],
      ['9.5', ['Biochemistry & Nutrition', 'Bacteriology', 'Virology, Mycology & Parasitology', 'Infectious Disease Pharmacology']],
      ['9.5', ['Reproductive', 'Psychiatry', 'Ethics & Communication']],
      ['9',   ['Dermatology', 'Gastrointestinal', 'Musculoskeletal']],
    ];
    ?>
    <div class="msp-services__grid s1-curric s1-curric--list">
      <?php foreach ($s1_days as $i => [$hrs, $topics]): ?>
      <div class="msp-svc reveal">
        <span class="msp-svc__no"><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
        <div><h3><?= $h(uwcc_day_label($cohort, $i)) ?></h3><p style="margin-bottom:8px"><?= $h($hrs) ?> hours of live instruction.</p><div><?php foreach ($topics as $t): ?><span class="crs-tag"><?= $h($t) ?></span><?php endforeach; ?></div></div>
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
          <img src="/assets/step1-crash-course/step1-crash-course-picture.jpg" alt="Dr. Manik Madaan" />
        </div>
        <div class="s1-founder__name">Dr. Manik Madaan</div>
        <div class="s1-founder__meta">260 on Step 1 &middot; 271 on Step 2<br>800,000+ followers &middot; 17,000+ students taught</div>
      </div>
      <div class="s1-founder__copy">
        <p>I'm Dr. Manik Madaan, and I built this course because I had to learn Step&nbsp;1 the hard way first.</p>
        <p>When I was preparing, the content was completely overwhelming: resource stacked on resource, every one labeled &ldquo;high-yield,&rdquo; and not one of them telling me what actually mattered.</p>
        <p class="s1-founder__pull">Only about 20% of what's in the traditional resources actually moves the needle.</p>
        <p>The other 80% is outdated fluff that just slows you down, and Step&nbsp;1 gives you very little time to dig for a fact that isn't worth the minute it costs you.</p>
        <p>So I built the course I wish someone had handed me, live this time: seven days, only what the USMLE actually tests, with a mentor in the room to clear every doubt as it comes up. Students who were sure seven days couldn't be enough passed. Students who'd already failed once, and were terrified to sit again, passed too.</p>
        <p>Since Step&nbsp;1 is pass/fail, a clean pass is the whole win, and every week you save here goes straight into Step&nbsp;2, the exam that actually ranks you.</p>
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
      $s1_live_compare_rows = [
        ['New Step 1 syllabus alignment', 'Rebuilt line by line for the 2026 syllabus, including the ethics and nutrition surge', 'Often reuses older decks with partial updates'],
        ['Focus', '70 live hours, zero fluff, only what the USMLE repeatedly tests', 'Broad sweep, mixed yield, time dilution'],
        ['Teaching engine', 'Question-powered: USMLE-style vignettes train knowledge and test-taking together', 'Lecture-heavy, QBank left for homework'],
        ['Instructors', '270+ Step 2 scorers who reverse-engineered the patterns', 'Limited experience and credentials'],
        ['Accountability', 'Live daily sessions with real-time Q&amp;A and built-in question drills', 'Passive watching, little pressure to execute'],
        ['Pass guarantee', 'Finish the course and drills, don’t pass, full refund', 'No guarantee, or store credit only'],
        ['Reported outcomes', '20&ndash;40 point jumps on practice NBMEs', 'Modest gains over months'],
        ['Step 2 bridge', 'N+1 consolidation leaves you with a ready Step 2 launchpad', 'No structured bridge beyond Step 1'],
      ];
      foreach ($s1_live_compare_rows as $row): ?>
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
<section class="msp-section" id="offer-summary" aria-labelledby="offerTitle">
  <div class="msp-wrap">
    <div class="msp-head reveal" style="max-width:68ch;margin-inline:auto;text-align:center">
      <span class="msp-eyebrow" style="justify-content:center">What you get</span>
      <h2 id="offerTitle" class="msp-h2" style="margin-inline:auto;max-width:26ch">Everything you need to pass, in one live cohort.</h2>
    </div>

    <div class="s1-offer reveal">
      <div class="s1-offer__list">
        <div class="s1-offer__item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
          <span class="s1-offer__item-name">The <?= (int) $cohort['days'] ?>-day, <?= (int) $cohort['hours'] ?>-hour live Step 1 crash course on Zoom</span>
        </div>
        <div class="s1-offer__item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
          <span class="s1-offer__item-name">Lifetime access to every session recording</span>
        </div>
        <div class="s1-offer__item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
          <span class="s1-offer__item-name">1,400-question Ultra High-Yield Step 1 2026 QBank, free for 90 days</span>
        </div>
        <div class="s1-offer__item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
          <span class="s1-offer__item-name">Step 1 2026 Rapid Review + Comprehensive Notes, yours to keep</span>
        </div>
        <div class="s1-offer__item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
          <span class="s1-offer__item-name">Private WhatsApp community with your cohort and mentors</span>
        </div>
      </div>
      <div class="s1-offer__pay">
        <div class="s1-offer__price">$499</div>
        <p class="s1-offer__price-note">Today's price &middot; $1,397 of value included</p>
        <?php if ($isOpen): ?>
        <?php $ccVariant = 'line'; include $_SERVER['DOCUMENT_ROOT'] . '/partials/cohort-countdown.php'; ?>
        <form action="https://mastery.usmlewise.com/api/checkout/single-course" method="post" target="_blank">
          <input type="hidden" name="courseId" value="cdbu1brx0peuyo75xzpwjcota">
          <button type="submit" class="cc-checkout-btn"><span class="btn btn--primary btn--xl" style="width:100%">Enroll Now</span></button>
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
      $s1_marquee = ['t06','t14','t03','t04','t05','t15','t27','t28','t31','t32','t60','t82','t83','t16','t76','t52','t89','t11','t12','t38','t95','t17','t20','t90','t96'];
      foreach (array_merge($s1_marquee, $s1_marquee) as $img):
      ?><img src="/assets/step1-crash-course/testimonials/<?php echo htmlspecialchars($img); ?>.webp" alt="Student testimonial screenshot" loading="lazy"><?php endforeach; ?>
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
        <button class="msp-video-trigger" data-ytid="pcQuFkFmnAE" aria-label="Watch a student video review">
          <img src="https://i.ytimg.com/vi/pcQuFkFmnAE/oardefault.jpg" alt="Student video review" class="msp-video-trigger__thumb" loading="lazy" decoding="async" />
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
  var VERTICAL_IDS = ['pcQuFkFmnAE'];
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
        <div class="accordion__body"><?php if ($cohort['start']): ?>It's live on Zoom, <?= $h($cohort['start']->format('l, F j')) ?> to <?= $h($cohort['lastDay']->format('l, F j, Y')) ?>. Sessions start at <?= $h($cohort['startTime']) ?> every day, and you can ask questions in real time as we teach.<?php else: ?>It's live on Zoom, in cohorts we run periodically. The next dates will be announced soon, and sessions usually start at 7:00 AM Eastern every day. You can ask questions in real time as we teach.<?php endif; ?> Every session is also recorded, with lifetime access.</div>
      </div>
      <div class="accordion__item">
        <button class="accordion__head" type="button">What if I can't make every session live?</button>
        <div class="accordion__body">That's fine. Every session is recorded the moment it ends, so you can catch up or rewatch anytime, and you keep that access for good.</div>
      </div>
      <div class="accordion__item">
        <button class="accordion__head" type="button">Is this for a first attempt or a retake?</button>
        <div class="accordion__body">Honestly, both. If it's your first attempt, you get a clean high-yield map. If you're retaking, it resets the usual leak points: timing, reasoning, and ethics.</div>
      </div>
      <div class="accordion__item">
        <button class="accordion__head" type="button">What changed for the 2026 exam, and how do you handle it?</button>
        <div class="accordion__body">Longer chart and SOAP-style stems with distracting detail, more ethics and communication, immunology and microbiology up while pure biochemistry is down, and pathophysiology over trivia. Every lesson is rebuilt against these patterns.</div>
      </div>
      <div class="accordion__item">
        <button class="accordion__head" type="button">How is the teaching different from a normal lecture course?</button>
        <div class="accordion__body">We teach through USMLE-style vignettes from minute one. You learn the idea, solve a question, then break down the logic and drill the variations until it sticks, live, with a mentor clearing every doubt as it comes up.</div>
      </div>
      <div class="accordion__item">
        <button class="accordion__head" type="button">Who actually teaches it?</button>
        <div class="accordion__body">Instructors who scored 270+ on Step 2, coordinated by Dr. Manik Madaan (271 on Step 2). The team reverse-engineered USMLE patterns across thousands of real items.</div>
      </div>
      <div class="accordion__item">
        <button class="accordion__head" type="button">Do I need any other resources?</button>
        <div class="accordion__body">Just a notebook. Your enrollment includes 90 days of free access to our 1,400-question Step 1 QBank, and you can keep any QBank you already like alongside it.</div>
      </div>
      <div class="accordion__item">
        <button class="accordion__head" type="button">What happens if I finish the course and still don't pass?</button>
        <div class="accordion__body">Finish the sessions and the required drills, sit your exam, and if you don't pass, you get a full refund within 14 days of your score report.</div>
      </div>
    </div>
  </div>
</section>

<!-- ============== FINAL CTA ============== -->
<section class="s1-cta-wrap">
  <div class="msp-wrap">
    <div class="s1-cta-card reveal" aria-labelledby="ctaTitle">
      <h2 id="ctaTitle" class="msp-h2">Ready to build the score you're proud of?</h2>
      <p class="msp-sub"><?= $isOpen ? 'Save your seat for the ' . $h($cohort['range']) . ' live cohort' : 'Be first in line for the next live cohort' ?> and get the QBank, the Rapid Review notes, and the N+1 framework that carries straight into Step&nbsp;2.</p>
      <?php if ($isOpen): $ccVariant = 'line'; include $_SERVER['DOCUMENT_ROOT'] . '/partials/cohort-countdown.php'; endif; ?>
      <div class="msp-cta-row">
        <?php if ($isOpen): ?>
        <form action="https://mastery.usmlewise.com/api/checkout/single-course" method="post" target="_blank">
          <input type="hidden" name="courseId" value="cdbu1brx0peuyo75xzpwjcota">
          <button type="submit" class="cc-checkout-btn"><span class="btn btn--primary btn--xl">Enroll Now</span></button>
        </form>
        <a class="btn btn--outline btn--xl" href="https://wa.me/19192015700?text=I%20am%20interested%20in%20the%20step%201%20live%20crash%20course" target="_blank" rel="noopener noreferrer">Text Us on WhatsApp</a>
        <?php else: $ccVariant = 'row'; include $_SERVER['DOCUMENT_ROOT'] . '/partials/cohort-cta.php'; endif; ?>
      </div>
    </div>
  </div>
</section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
