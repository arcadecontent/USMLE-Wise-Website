<?php
/**
 * Detail template for /events/<slug>. Not reachable directly: routes.php
 * resolves the slug against data/past-events.php and requires this file with
 * $pastEvent already populated.
 */
if (!isset($pastEvent) || !is_array($pastEvent)) {
    header('Location: /events', true, 302);
    exit;
}
require_once $_SERVER['DOCUMENT_ROOT'] . '/data/team.php';

$e          = $pastEvent;
$esc        = static function ($v): string { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); };
$date       = new DateTimeImmutable($e['date']);
$base       = '/assets/events/' . $e['slug'] . '/';
$place      = $e['city'] . ', ' . $e['country'];
$team       = usmlewise_team_members();
$photoCount = count($e['photos']);

$pageTitle       = $esc($e['title'] . ' | USMLE Wise Events');
$pageDescription = $esc($e['blurb']);
$canonical       = 'https://usmlewise.com/events/' . $e['slug'];
$bodyClass       = 'msp';
$preloadImage    = $base . $e['cover']['file'];
$ogImage         = $base . $e['og'];
$stylesheets = [
    '/styles/match.css',
    '/styles/events.css'
];
$scripts = [
    '/js/match.js',
    '/js/events.js'
];

// Search engines read this to show the event in results.
$ld = [
    '@context'            => 'https://schema.org',
    '@type'               => 'Event',
    'name'                => $e['title'],
    'description'         => $e['summary'],
    'url'                 => $canonical,
    'startDate'           => $e['date'],
    'eventStatus'         => 'https://schema.org/EventScheduled',
    'eventAttendanceMode' => 'https://schema.org/OfflineEventAttendanceMode',
    'location'            => [
        '@type'   => 'Place',
        'name'    => $e['venue'],
        'address' => ['@type' => 'PostalAddress', 'addressLocality' => $e['city'], 'addressCountry' => 'GE'],
    ],
    'image'               => 'https://usmlewise.com' . $base . $e['og'],
    'organizer'           => [
        ['@type' => 'Organization', 'name' => 'USMLE Wise', 'url' => 'https://usmlewise.com'],
        ['@type' => 'Organization', 'name' => $e['partner']],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<script type="application/ld+json"><?= json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP) ?></script>

<main>

    <!-- HERO -->
    <section class="msp-hero ed-hero" aria-labelledby="edTitle">
      <div class="msp-wrap">
        <div class="reveal">
          <a class="ed-back" href="/events#past-events"><i data-lucide="arrow-left" width="14" height="14"></i> All events</a>
          <p class="ev-meta">
            <span class="ev-pill ev-pill--live"><?= $esc($e['format']) ?></span>
            <span><i data-lucide="calendar" width="13" height="13"></i><?= $esc($date->format('F j, Y')) ?></span>
            <span><i data-lucide="map-pin" width="13" height="13"></i><?= $esc($place) ?></span>
          </p>
          <h1 id="edTitle" class="ed-title"><?= $esc($e['title']) ?></h1>
          <p class="msp-lede"><?= $esc($e['summary']) ?></p>
        </div>
      </div>
    </section>

    <!-- PROGRAM -->
    <section class="ed-body" aria-labelledby="edProgramTitle">
      <div class="msp-wrap">
        <figure class="ed-cover reveal">
          <img src="<?= $esc($base . $e['cover']['file']) ?>" width="<?= (int) $e['cover']['w'] ?>" height="<?= (int) $e['cover']['h'] ?>" alt="<?= $esc($e['cover']['alt']) ?>" decoding="async" fetchpriority="high" />
        </figure>

        <div class="ed-layout">
          <div class="ed-main">
            <div class="msp-head reveal">
              <span class="msp-eyebrow">Program</span>
              <h2 id="edProgramTitle" class="msp-h2">How the day ran.</h2>
            </div>
            <ol class="ed-steps reveal">
              <?php foreach ($e['program'] as $step): ?>
              <li class="ed-step">
                <div>
                  <h3><?= $esc($step['title']) ?></h3>
                  <?php if (!empty($step['session'])): ?><p class="ed-step__session"><?= $esc($step['session']) ?></p><?php endif; ?>
                  <p class="ed-step__text"><?= $esc($step['text']) ?></p>
                </div>
              </li>
              <?php endforeach; ?>
            </ol>
            <p class="ed-closing reveal"><?= $esc($e['closing']) ?></p>
          </div>

          <aside class="ed-aside" aria-label="Event details">
            <div class="ed-card">
              <h2 class="ed-card__title">Event details</h2>
              <dl class="ed-facts">
                <div><dt>Date</dt><dd><?= $esc($date->format('F j, Y')) ?></dd></div>
                <div><dt>Venue</dt><dd><?= $esc($e['venue']) ?>, <?= $esc($place) ?></dd></div>
                <div><dt>Format</dt><dd><?= $esc($e['format']) ?>, in person with a live online Q&amp;A</dd></div>
                <div><dt>In partnership with</dt><dd><?= $esc($e['partner']) ?></dd></div>
              </dl>
            </div>
            <div class="ed-card">
              <h2 class="ed-card__title">Speakers</h2>
              <ul class="ed-people">
                <?php foreach ($e['speakers'] as $s):
                    $m = $team[$s['team']] ?? null;
                    if (!$m) continue;
                    $mName = html_entity_decode(strip_tags((string) $m['name']), ENT_QUOTES, 'UTF-8');
                ?>
                <li>
                  <a class="ed-person" href="/team/<?= $esc($s['team']) ?>">
                    <img src="<?= $esc($base . $s['photo']) ?>" width="44" height="44" alt="" loading="lazy" decoding="async" />
                    <span>
                      <span class="ed-person__name"><?= $esc($mName) ?></span>
                      <span class="ed-person__topic"><?= $esc($s['topic']) ?></span>
                    </span>
                  </a>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </aside>
        </div>
      </div>
    </section>

    <!-- GALLERY -->
    <section class="msp-section ed-gallery" id="gallery" aria-labelledby="edGalleryTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow"><?= $photoCount ?> photos</span>
          <h2 id="edGalleryTitle" class="msp-h2">Photo gallery.</h2>
          <p class="msp-sub">Moments from the day. Select any photo to view it full size.</p>
        </div>
        <ul class="ed-photos">
          <?php foreach ($e['photos'] as $ph): ?>
          <li class="ed-photo">
            <button type="button" class="ed-photo__btn" data-full="<?= $esc($base . $ph['file'] . '.webp') ?>" data-caption="<?= $esc($ph['caption']) ?>">
              <img src="<?= $esc($base . $ph['file'] . '-sm.webp') ?>" width="<?= (int) $ph['w'] ?>" height="<?= (int) $ph['h'] ?>" alt="<?= $esc($ph['alt']) ?>" loading="lazy" decoding="async" />
              <span class="ed-photo__cap" aria-hidden="true"><?= $esc($ph['caption']) ?></span>
            </button>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>

    <!-- Photo lightbox -->
    <div class="ev-lb" id="evLightbox" role="dialog" aria-modal="true" aria-label="Event photos" hidden>
      <figure class="ev-lb__fig">
        <img class="ev-lb__img" id="evLightboxImg" alt="" />
        <figcaption class="ev-lb__cap"><span id="evLightboxCap"></span><span class="ev-lb__count" id="evLightboxCount"></span></figcaption>
      </figure>
      <button type="button" class="ev-lb__btn ev-lb__close" aria-label="Close photo viewer">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12"/></svg>
      </button>
      <button type="button" class="ev-lb__btn ev-lb__prev" aria-label="Previous photo">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m15 18-6-6 6-6"/></svg>
      </button>
      <button type="button" class="ev-lb__btn ev-lb__next" aria-label="Next photo">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg>
      </button>
    </div>

    <!-- CTA -->
    <section class="pg-cta-wrap">
      <div class="msp-wrap">
        <div class="pg-cta-card reveal" aria-labelledby="ctaTitle">
          <h2 id="ctaTitle" class="msp-h2">Questions about an event?</h2>
          <p class="msp-sub">Book a free guidance call or reach our team directly, and we'll help you pick the right next step.</p>
          <div class="msp-cta-row">
            <a class="btn btn--primary btn--xl" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Free Guidance Call</a>
            <a class="btn btn--outline btn--xl" href="/events">See All Events</a>
          </div>
        </div>
      </div>
    </section>

    </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
