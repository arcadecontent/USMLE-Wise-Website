<?php
/*
 * Our Events (/events). Nothing on this page is typed in by hand:
 *
 *   Conferences  the CRM conference feed behind /conference-finder
 *                (data/conferences.php), filtered to the ones marked
 *                "USMLE Wise attending" whose dates haven't passed yet.
 *                Mark a conference as attending in the CRM and it appears.
 *   Live courses the cohort dates in data/crash-course-cohorts.php, the same
 *                source the live course pages and the nav use.
 *   Past events  events we organized ourselves, from data/past-events.php.
 *                Each one is a card here that links to its own page at
 *                /events/<slug> (event-detail.php: write-up, program, speakers
 *                and photo gallery). Add an entry there and both appear.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/data/conferences.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/data/crash-course-cohorts.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/data/past-events.php';

$evTz    = new DateTimeZone(UWCC_TZ);
$evToday = (new DateTimeImmutable('now', $evTz))->format('Y-m-d');
$evEsc   = static function ($v): string { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); };

// Conferences we're attending that haven't ended yet, soonest first.
$evPayload     = usmlewise_conferences_payload();
$evConferences = array_values(array_filter($evPayload['conferences'], static function (array $c) use ($evToday): bool {
    if (($c['usmlewise_participating'] ?? null) !== true) return false;
    $last = $c['end_date'] ?? ($c['start_date'] ?? null);
    return !$last || $last >= $evToday;
}));
usort($evConferences, static function (array $a, array $b): int {
    return strcmp($a['start_date'] ?? '9999', $b['start_date'] ?? '9999');
});
$evConfTotal = count($evPayload['conferences']);

// Events we've hosted, newest first.
$evPast = array_values(usmlewise_past_events());
usort($evPast, static function (array $a, array $b): int {
    return strcmp($b['date'], $a['date']);
});

$pageTitle = "Our Events: Conferences, Live Courses & Past Events | USMLE Wise";
$pageDescription = "Upcoming medical conferences the USMLE Wise team is attending, our live Step 1, Step 2 CK and Step 3 crash course dates, and events we've hosted, like our residency and research workshop in Tbilisi.";
$canonical = "https://usmlewise.com/events";
$bodyClass = "msp";
$stylesheets = [
    "/styles/match.css",
    "/styles/events.css"
];
$scripts = [
    "/js/match.js"
];
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<style>
      .pg-about { background: var(--uw-surface-sunk); border-block: 1px solid var(--uw-border); }
      .ev-hero { padding-block-end: clamp(8px, 2vw, 16px); }
      .ev-hero .msp-lede { margin-bottom: clamp(20px, 3vw, 28px); }
      .ev-jump { display: flex; flex-wrap: wrap; gap: 10px; }

      /* event list: date block, details, action */
      .ev-list {
        border: 1px solid var(--uw-border);
        border-radius: var(--r-xl);
        overflow: hidden;
        background: var(--uw-surface);
      }
      .ev-row {
        display: grid;
        grid-template-columns: 76px 1fr auto;
        gap: clamp(16px, 2.6vw, 32px);
        align-items: center;
        padding: clamp(20px, 2.4vw, 28px) clamp(18px, 3vw, 36px);
        border-bottom: 1px solid var(--uw-border);
      }
      .ev-row:last-child { border-bottom: none; }
      .ev-date {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 4px;
        aspect-ratio: 1;
        border-radius: var(--r-lg);
        background: var(--uw-blue-50);
        color: var(--uw-blue-600);
      }
      .ev-date__mon {
        font-family: var(--font-mono);
        font-size: 10.5px;
        letter-spacing: 0.14em;
        text-transform: uppercase;
      }
      .ev-date__day {
        font-family: var(--font-display);
        font-size: 30px;
        font-weight: 600;
        line-height: 1;
        letter-spacing: -0.02em;
        color: var(--uw-blue-500);
      }
      .ev-date--tba .ev-date__day { font-size: 17px; letter-spacing: 0.02em; }
      .ev-row h3 {
        font-family: var(--font-sans);
        font-size: var(--fs-16-5);
        font-weight: 600;
        letter-spacing: -0.01em;
        line-height: 1.35;
        color: var(--uw-ink-900);
        margin: 0 0 6px;
      }
      /* .ev-meta and .ev-pill live in styles/events.css (the event pages use them too) */
      .ev-row .btn { white-space: nowrap; }

      .ev-empty {
        padding: clamp(28px, 3vw, 40px);
        text-align: center;
        font-size: var(--fs-md);
        color: var(--uw-ink-600);
      }
      .ev-note {
        font-size: var(--fs-14);
        line-height: 1.6;
        color: var(--uw-ink-500);
        text-align: center;
        max-width: 64ch;
        margin: clamp(20px, 3vw, 26px) auto 0;
      }

      /* the closing CTA card (.pg-cta-*) is in styles/events.css */

      @media (max-width: 640px) {
        .ev-row { grid-template-columns: 60px 1fr; align-items: start; }
        .ev-row > :last-child { grid-column: 2; justify-self: start; }
        .ev-date__day { font-size: 24px; }
        .ev-date--tba .ev-date__day { font-size: 14px; }
      }
    </style>

<main>

    <!-- HERO -->
    <section class="msp-hero ev-hero" aria-labelledby="heroTitle">
      <div class="msp-wrap">
        <div class="reveal">
          <h1 id="heroTitle" class="msp-h1">Our <span class="msp-h1__accent">events.</span></h1>
          <p class="msp-lede">The medical conferences our team is attending, the dates of our live courses, and the events we've hosted for students, updated as plans are confirmed.</p>
          <div class="ev-jump">
            <a class="btn btn--outline btn--sm" href="#conferences">Conferences</a>
            <a class="btn btn--outline btn--sm" href="#live-courses">Live courses</a>
            <?php if ($evPast): ?><a class="btn btn--outline btn--sm" href="#past-events">Past events</a><?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- CONFERENCES -->
    <section class="msp-section" id="conferences" aria-labelledby="confTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Conferences</span>
          <h2 id="confTitle" class="msp-h2">Conferences we're attending.</h2>
          <p class="msp-sub">Upcoming U.S. specialty meetings where USMLE Wise will be.</p>
        </div>
        <div class="ev-list reveal">
          <?php if (!$evConferences): ?>
          <p class="ev-empty">No conferences are confirmed right now. Check back soon.</p>
          <?php endif; ?>
          <?php foreach ($evConferences as $c):
              $start = !empty($c['start_date']) ? new DateTimeImmutable($c['start_date'], $evTz) : null;
              $place = trim(($c['city'] ?? '') . (!empty($c['state']) ? ', ' . $c['state'] : ''), ', ');
          ?>
          <article class="ev-row">
            <?php if ($start): ?>
            <div class="ev-date" aria-hidden="true"><span class="ev-date__mon"><?= $start->format('M') ?></span><span class="ev-date__day"><?= $start->format('j') ?></span></div>
            <?php else: ?>
            <div class="ev-date ev-date--tba" aria-hidden="true"><span class="ev-date__day">TBA</span></div>
            <?php endif; ?>
            <div>
              <h3><?= $evEsc(str_replace([' — ', '—'], [': ', ', '], $c['name'] ?? '')) ?></h3>
              <p class="ev-meta">
                <span><i data-lucide="calendar" width="13" height="13"></i><?= $evEsc(($c['date_range'] ?? '') !== '' ? $c['date_range'] : 'Dates to be announced') ?></span>
                <?php if ($place !== ''): ?><span><i data-lucide="map-pin" width="13" height="13"></i><?= $evEsc($place) ?></span><?php endif; ?>
                <?php if (!empty($c['specialty'])): ?><span class="ev-pill"><?= $evEsc($c['specialty']) ?></span><?php endif; ?>
              </p>
            </div>
            <?php if (!empty($c['link'])): ?>
            <a class="btn btn--outline btn--sm" href="<?= $evEsc($c['link']) ?>" target="_blank" rel="noopener noreferrer">Conference site</a>
            <?php else: ?>
            <span></span>
            <?php endif; ?>
          </article>
          <?php endforeach; ?>
        </div>
        <p class="ev-note reveal">Looking for a conference to submit your own research to? The <a href="/conference-finder">Conference Finder</a> lists <?= (int) $evConfTotal ?> U.S. conferences with their abstract deadlines.</p>
      </div>
    </section>

    <!-- LIVE COURSES -->
    <section class="msp-section pg-about" id="live-courses" aria-labelledby="liveTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Live courses</span>
          <h2 id="liveTitle" class="msp-h2">Our live crash courses.</h2>
          <p class="msp-sub">Intensive live cohorts for Step 1, Step 2 CK and Step 3, taught on Zoom.</p>
        </div>
        <div class="ev-list reveal">
          <?php foreach (array_keys(uwcc_courses()) as $step):
              $co   = uwcc_live_cohort($step);
              $name = $co['label'] . ' Live Crash Course';
              $url  = uwcc_page_url($step, 'live');
          ?>
          <article class="ev-row">
            <?php if ($co['start']): ?>
            <div class="ev-date" aria-hidden="true"><span class="ev-date__mon"><?= $co['start']->format('M') ?></span><span class="ev-date__day"><?= $co['start']->format('j') ?></span></div>
            <?php else: ?>
            <div class="ev-date ev-date--tba" aria-hidden="true"><span class="ev-date__day">TBA</span></div>
            <?php endif; ?>
            <div>
              <h3><?= $evEsc($name) ?></h3>
              <p class="ev-meta">
                <?php if ($co['state'] === 'open' && !$co['started']): ?>
                <span class="ev-pill ev-pill--open">Enrolling now</span>
                <span><i data-lucide="calendar" width="13" height="13"></i><?= $evEsc($co['range']) ?></span>
                <?php elseif ($co['state'] === 'open'): ?>
                <span class="ev-pill ev-pill--open">In session, still enrolling</span>
                <span><i data-lucide="calendar" width="13" height="13"></i><?= $evEsc($co['range']) ?></span>
                <?php elseif ($co['state'] === 'underway'): ?>
                <span class="ev-pill ev-pill--live">In session now</span>
                <span><i data-lucide="calendar" width="13" height="13"></i><?= $evEsc($co['range']) ?></span>
                <?php else: ?>
                <span class="ev-pill">Next dates coming soon</span>
                <?php endif; ?>
                <span><i data-lucide="clock" width="13" height="13"></i><?= (int) $co['days'] ?> live days &middot; <?= (int) $co['hours'] ?> hours</span>
              </p>
            </div>
            <?php if ($co['state'] === 'none'): ?>
            <a class="btn btn--outline btn--sm" href="<?= $evEsc(uwcc_notify_url($co['label'])) ?>" target="_blank" rel="noopener noreferrer">Get notified</a>
            <?php elseif ($co['state'] === 'open'): ?>
            <a class="btn btn--primary btn--sm" href="<?= $evEsc($url) ?>">Enroll</a>
            <?php else: ?>
            <a class="btn btn--outline btn--sm" href="<?= $evEsc($url) ?>">View course</a>
            <?php endif; ?>
          </article>
          <?php endforeach; ?>
        </div>
        <p class="ev-note reveal">Can't make a live date? Every course also comes as a recorded version you can start any time. See <a href="/coaching">all exam coaching</a>.</p>
      </div>
    </section>

    <?php if ($evPast): ?>
    <!-- PAST EVENTS -->
    <section class="msp-section" id="past-events" aria-labelledby="pastTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Past events</span>
          <h2 id="pastTitle" class="msp-h2">Events we've hosted.</h2>
          <p class="msp-sub">Workshops and meetups our team has planned and run for students, with photos from the day.</p>
        </div>

        <?php foreach ($evPast as $p):
            $pd     = new DateTimeImmutable($p['date'], $evTz);
            $url    = '/events/' . $p['slug'];
            $cover  = '/assets/events/' . $p['slug'] . '/' . $p['cover']['file'];
            $place  = $p['city'] . ', ' . $p['country'];
            $photos = count($p['photos']);
        ?>
        <article class="evc reveal" aria-labelledby="evc-<?= $evEsc($p['slug']) ?>">
          <div class="evc__media">
            <img src="<?= $evEsc($cover) ?>" width="<?= (int) $p['cover']['w'] ?>" height="<?= (int) $p['cover']['h'] ?>" alt="<?= $evEsc($p['cover']['alt']) ?>" loading="lazy" decoding="async" />
            <span class="evc__count"><i data-lucide="images" width="14" height="14"></i><?= $photos ?> photos</span>
          </div>
          <div class="evc__body">
            <p class="ev-meta evc__meta">
              <span class="ev-pill ev-pill--live"><?= $evEsc($p['format']) ?></span>
              <span><i data-lucide="calendar" width="13" height="13"></i><?= $evEsc($pd->format('F j, Y')) ?></span>
              <span><i data-lucide="map-pin" width="13" height="13"></i><?= $evEsc($place) ?></span>
            </p>
            <h3 class="evc__title" id="evc-<?= $evEsc($p['slug']) ?>"><?= $evEsc($p['title']) ?></h3>
            <p class="evc__blurb"><?= $evEsc($p['blurb']) ?></p>
            <a class="btn btn--primary evc__link" href="<?= $evEsc($url) ?>">View event recap <i data-lucide="arrow-right" width="15" height="15"></i></a>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </section>
    <?php endif; ?>

    <!-- CTA -->
    <section class="pg-cta-wrap">
      <div class="msp-wrap">
        <div class="pg-cta-card reveal" aria-labelledby="ctaTitle">
          <h2 id="ctaTitle" class="msp-h2">Questions about an event?</h2>
          <p class="msp-sub">Book a free guidance call or reach our team directly, and we'll help you pick the right next step.</p>
          <div class="msp-cta-row">
            <a class="btn btn--primary btn--xl" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Free Guidance Call</a>
            <a class="btn btn--outline btn--xl" href="/contact">Contact Us</a>
          </div>
        </div>
      </div>
    </section>

    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
