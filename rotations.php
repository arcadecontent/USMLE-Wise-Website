<?php
$pageTitle = "Clinical Rotations | USMLE Wise";
$pageDescription = "U.S. clinical rotation placements for IMGs: gain hands-on experience, build strong LORs, and strengthen your residency application with mentored rotations across key specialties.";
$canonical = "https://usmlewise.com/rotations";
$bodyClass = "msp";
$stylesheets = [
    "/styles/rotations.css"
];
$scripts = [
    "/js/rotations.js"
];

// Rotation cards + sidebar filters render from CRM data (data/rotations.php).
require_once $_SERVER['DOCUMENT_ROOT'] . '/data/rotations.php';
$rotationsData    = usmlewise_rotations_payload();
$rotationsList    = $rotationsData['rotations'];
$rotationsFilters = $rotationsData['filters'];

function usmlewise_render_filter_options(string $filter, array $options): string
{
    $attr = static function ($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); };
    $esc  = static function ($v) { return htmlspecialchars((string) $v, ENT_NOQUOTES, 'UTF-8'); };
    $lines = [];
    foreach ($options as $opt) {
        $lines[] = '                  <li><button class="rot-sidebar__opt" type="button" data-filter="'
            . $attr($filter) . '" data-value="' . $attr($opt['value'] ?? '') . '">'
            . $esc($opt['label'] ?? '') . '</button></li>';
    }
    return implode("\n", $lines);
}

function usmlewise_render_rotation_card(array $r): string
{
    $esc  = static function ($v) { return htmlspecialchars((string) $v, ENT_NOQUOTES, 'UTF-8'); };
    $attr = static function ($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); };
    $sep  = ' &nbsp;&middot;&nbsp; ';

    $badges = ['<span class="rot-pg-badge rot-pg-badge--specialty">' . $esc($r['specialty'] ?? '') . '</span>'];
    if (!empty($r['lor_included'])) {
        $badges[] = '<span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>';
    }
    if (!empty($r['housing_included'])) {
        $badges[] = '<span class="rot-pg-badge rot-pg-badge--housing">Housing Included</span>';
    }
    $badgesHtml = implode("\n                  ", $badges);

    $metaParts = array_filter(array_map('trim', explode('·', (string) ($r['meta_text'] ?? ''))), 'strlen');
    $metaHtml  = implode($sep, array_map($esc, $metaParts));

    $settingHtml = $esc($r['setting_text'] ?? '');
    if (!empty($r['duration_text'])) {
        $settingHtml .= $sep . $esc($r['duration_text']);
    }

    $price = '$' . number_format((float) ($r['price'] ?? 0));

    return
        '            <article class="rot-pg-card reveal"' . "\n" .
        '                     data-specialty="' . $attr($r['specialty_value'] ?? '') . '"' . "\n" .
        '                     data-state="' . $attr($r['state_value'] ?? '') . '"' . "\n" .
        '                     data-price="' . $attr($r['price_bucket'] ?? '') . '"' . "\n" .
        '                     data-setting="' . $attr($r['setting_filter'] ?? '') . '">' . "\n" .
        '              <div class="rot-pg-card__top">' . "\n" .
        '                <div class="rot-pg-card__badges">' . "\n" .
        '                  ' . $badgesHtml . "\n" .
        '                </div>' . "\n" .
        '                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>' . $esc(($r['city'] ?? '') . ', ' . ($r['state'] ?? '')) . '</span>' . "\n" .
        '              </div>' . "\n" .
        '              <div class="rot-pg-card__mid">' . "\n" .
        '                <h3 class="rot-pg-card__title">' . $esc($r['title'] ?? '') . '</h3>' . "\n" .
        '                <p class="rot-pg-card__hospital">' . $esc($r['hospital'] ?? '') . '</p>' . "\n" .
        '                <span class="rot-pg-card__setting">' . $settingHtml . '</span>' . "\n" .
        '              </div>' . "\n" .
        '              <div class="rot-pg-card__price-row">' . "\n" .
        '                <span class="rot-pg-card__price">' . $price . '</span>' . "\n" .
        '                <span class="rot-pg-card__meta">' . $metaHtml . '</span>' . "\n" .
        '              </div>' . "\n" .
        '              <a href="' . $attr($r['detail_url'] ?? '#') . '" class="btn btn--outline rot-pg-card__cta">' . "\n" .
        '                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>' . "\n" .
        '              </a>' . "\n" .
        '            </article>';
}

include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>
      <!-- ============== 1. HERO ============== -->
      <section class="msp-hero" aria-labelledby="heroTitle">
        <div class="msp-wrap msp-hero__grid">
          <div class="msp-hero__copy reveal">
            <h1 id="heroTitle" class="msp-h1">
              Build the U.S. Clinical Record
              <span class="msp-h1__accent">Your Application</span> Needs
            </h1>
            <p class="msp-lede">
              Rotation placements across key specialties, matched to your stage
              and goals. We handle placement, LOR strategy, and ERAS integration
              so every week moves your application forward.
            </p>
            <div class="msp-cta-row">
              <a
                class="btn btn--primary btn--xl"
                href="https://team.manikmadaan.com/guidance-call/book"
                target="_blank"
                rel="noopener noreferrer"
                >Book A Free Guidance Call</a
              >
              <a
                class="btn btn--outline btn--xl"
                href="https://wa.me/19192015700"
                target="_blank"
                rel="noopener noreferrer"
              >
                Text Us on WhatsApp
              </a>
            </div>
          </div>

          <div class="msp-hero__frame-wrap">
            <div class="msp-hero__frame reveal">
              <picture>
                <source srcset="/assets/Photos/team-young-specialist-doctors-vertical-crop.webp" type="image/webp">
                <img src="/assets/Photos/team-young-specialist-doctors-vertical-crop.jpg" alt="IMG physician gaining U.S. clinical experience during a rotation" fetchpriority="high" decoding="async" />
              </picture>
            </div>
            <div class="msp-float-note" aria-hidden="true">
              <span class="msp-float-note__num">88<small>%</small></span>
              <span class="msp-float-note__label">Match rate</span>
              <span class="msp-float-note__sub"
                >300+ students &middot; 4.9 rating</span
              >
            </div>
          </div>
        </div>

        <div class="msp-bar msp-wrap" aria-label="Track record">
          <div class="msp-bar__inner">
            <div class="msp-stat reveal">
              <b data-count="300" data-suffix="+">300+</b>
              <span>Graduates matched</span>
            </div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal">
              <b data-count="10" data-suffix="+">10+</b>
              <span>Specialties successfully matched</span>
            </div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal">
              <b data-count="4.9" data-decimal="1">4.9</b>
              <span>Average mentor rating</span>
            </div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal">
              <b data-count="16" data-suffix="+">16+</b>
              <span>Countries represented</span>
            </div>
          </div>
        </div>
      </section>

      <!-- ============== 2. ROTATIONS BROWSE ============== -->
      <section class="msp-section rot-browse" id="rotations" aria-labelledby="rotTitle">
        <div class="msp-wrap">

          <div class="msp-head reveal">
            <span class="msp-eyebrow">Available placements</span>
            <h2 id="rotTitle" class="msp-h2">Rotations that open doors. Not just fill weeks.</h2>
            <p class="msp-sub">Four IMG-friendly placements with hospital letterhead LORs, monthly starts, and full clinical exposure.</p>
          </div>

          <!-- Mobile filter toggle -->
          <button class="rot-filter-toggle" id="rotFilterToggle" aria-expanded="false" aria-controls="rotSidebar">
            <i data-lucide="sliders-horizontal" width="14" height="14"></i>
            Filters
            <span class="rot-filter-toggle__count" id="rotFilterCount" aria-live="polite" hidden></span>
          </button>

          <!-- Browse layout: sidebar + grid -->
          <div class="rot-browse-layout">

            <!-- Sidebar -->
            <aside class="rot-sidebar" id="rotSidebar" aria-label="Filter rotations">
              <div class="rot-sidebar__hd">
                <span class="rot-sidebar__title">Filter</span>
                <button class="rot-sidebar__reset" id="rotReset" type="button">Clear all</button>
              </div>

              <div class="rot-sidebar__group is-open">
                <button class="rot-sidebar__gh" type="button" aria-expanded="true">
                  <span>Specialty</span>
                  <i data-lucide="chevron-down" width="14" height="14"></i>
                </button>
                <ul class="rot-sidebar__opts">
<?php echo usmlewise_render_filter_options('specialty', $rotationsFilters['specialties'] ?? []) . "\n"; ?>
                </ul>
              </div>

              <div class="rot-sidebar__group is-open">
                <button class="rot-sidebar__gh" type="button" aria-expanded="true">
                  <span>State</span>
                  <i data-lucide="chevron-down" width="14" height="14"></i>
                </button>
                <ul class="rot-sidebar__opts">
<?php echo usmlewise_render_filter_options('state', $rotationsFilters['states'] ?? []) . "\n"; ?>
                </ul>
              </div>

              <div class="rot-sidebar__group is-open">
                <button class="rot-sidebar__gh" type="button" aria-expanded="true">
                  <span>Price</span>
                  <i data-lucide="chevron-down" width="14" height="14"></i>
                </button>
                <div class="rot-price-slider">
                  <div class="rot-price-slider__labels">
                    <span id="priceMinLabel">$1,000</span>
                    <span id="priceMaxLabel">$5,000+</span>
                  </div>
                  <div class="rot-price-slider__track-wrap">
                    <div class="rot-price-slider__track"></div>
                    <div class="rot-price-slider__fill" id="priceFill"></div>
                    <input type="range" id="priceSliderMin" class="rot-price-slider__thumb"
                           min="1000" max="5000" step="50" value="1000" aria-label="Minimum price">
                    <input type="range" id="priceSliderMax" class="rot-price-slider__thumb"
                           min="1000" max="5000" step="50" value="5000" aria-label="Maximum price">
                  </div>
                </div>
              </div>

              <div class="rot-sidebar__group is-open">
                <button class="rot-sidebar__gh" type="button" aria-expanded="true">
                  <span>Setting</span>
                  <i data-lucide="chevron-down" width="14" height="14"></i>
                </button>
                <ul class="rot-sidebar__opts">
<?php echo usmlewise_render_filter_options('setting', $rotationsFilters['settings'] ?? []) . "\n"; ?>
                </ul>
              </div>
            </aside>

            <!-- Main: card grid -->
            <div class="rot-browse-main">
              <div class="rot-pg-grid" id="rotGrid">

<?php foreach ($rotationsList as $rotationCard): ?>
<?php echo usmlewise_render_rotation_card($rotationCard) . "\n"; ?>

<?php endforeach; ?>
              </div><!-- /.rot-pg-grid -->

              <p class="rot-pg-empty" id="rotEmpty" hidden>
                No rotations match your filters.
                <button class="rot-pg-reset" id="rotResetInline" type="button">Reset filters</button>
              </p>

            </div><!-- /.rot-browse-main -->
          </div><!-- /.rot-browse-layout -->

        </div>
      </section>


      <!-- ============== 3. WHAT'S INCLUDED ============== -->
      <section
        class="msp-section msp-services"
        id="services"
        aria-labelledby="servicesTitle"
      >
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">What's included</span>
            <h2 id="servicesTitle" class="msp-h2">
              Every rotation type, matched to what your application actually needs
            </h2>
            <p class="msp-sub">
              From electives to sub-internships to research rotations. The type
              determines the LOR you earn and the USCE you document.
            </p>
          </div>

          <div class="msp-services__grid">
            <div class="msp-svc reveal">
              <span class="msp-svc__no">01</span>
              <div>
                <h3>Rotation Type Matching</h3>
                <p>
                  Elective, sub-internship, externship, research elective, or
                  observership. We identify which type closes the gap in your
                  application and place you with accredited U.S. sites.
                </p>
              </div>
            </div>
            <div class="msp-svc reveal">
              <span class="msp-svc__no">02</span>
              <div>
                <h3>LOR Strategy</h3>
                <p>
                  Strong letters don't happen by default. We coach you on
                  building the attending relationship from week one so your LOR
                  reflects specific clinical skills, not just attendance.
                </p>
              </div>
            </div>
            <div class="msp-svc reveal">
              <span class="msp-svc__no">03</span>
              <div>
                <h3>USCE Documentation</h3>
                <p>
                  Every rotation produces verifiable U.S. clinical experience.
                  We frame it correctly in your ERAS CV so it reads as
                  practice-ready to the programs reviewing your file.
                </p>
              </div>
            </div>
            <div class="msp-svc reveal">
              <span class="msp-svc__no">04</span>
              <div>
                <h3>On-Rotation Coaching</h3>
                <p>
                  EMR navigation, team rounding, concise presentations: the
                  habits attendings notice and program directors ask about. We
                  prepare you before you arrive and coach you through.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============== 6. PROCESS ============== -->
      <section
        class="msp-section msp-process"
        id="process"
        aria-labelledby="processTitle"
      >
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">How it works</span>
            <h2 id="processTitle" class="msp-h2">
              From consultation to LOR in four clear steps
            </h2>
          </div>
          <ol class="msp-steps" aria-label="Process steps">
            <li class="msp-step reveal">
              <div class="msp-step__marker" aria-hidden="true"></div>
              <div class="msp-step__content">
                <span class="msp-step__label" aria-hidden="true">Step 01</span>
                <span class="msp-step__ghost" aria-hidden="true">01</span>
                <h3>Match to the right rotation type</h3>
                <p>
                  We review your specialty goals, stage, and application gaps.
                  Then we identify whether you need hands-on USCE, a research
                  elective, or an observership, and find the right site.
                </p>
              </div>
            </li>
            <li class="msp-step reveal">
              <div class="msp-step__marker" aria-hidden="true"></div>
              <div class="msp-step__content">
                <span class="msp-step__label" aria-hidden="true">Step 02</span>
                <span class="msp-step__ghost" aria-hidden="true">02</span>
                <h3>Placement and site preparation</h3>
                <p>
                  We secure your placement at an accredited U.S. clinical site
                  and prepare you for the environment: team structure, EMR
                  basics, and what to focus on from your first day.
                </p>
              </div>
            </li>
            <li class="msp-step reveal">
              <div class="msp-step__marker" aria-hidden="true"></div>
              <div class="msp-step__content">
                <span class="msp-step__label" aria-hidden="true">Step 03</span>
                <span class="msp-step__ghost" aria-hidden="true">03</span>
                <h3>On-rotation coaching</h3>
                <p>
                  Check-ins throughout the rotation to navigate clinical
                  situations, attending relationships, and the documentation
                  habits that build toward a strong letter and credible USCE.
                </p>
              </div>
            </li>
            <li class="msp-step reveal">
              <div class="msp-step__marker" aria-hidden="true"></div>
              <div class="msp-step__content">
                <span class="msp-step__label" aria-hidden="true">Step 04</span>
                <span class="msp-step__ghost" aria-hidden="true">04</span>
                <h3>LOR and application integration</h3>
                <p>
                  After the rotation: secure your letter, document your USCE
                  correctly, and update your CV and ERAS application so the
                  experience adds maximum weight to your file.
                </p>
              </div>
            </li>
          </ol>
        </div>
      </section>

      <!-- Video lightbox -->
      <div
        class="msp-lightbox"
        id="mspLightbox"
        role="dialog"
        aria-modal="true"
        aria-label="Student testimonial video"
        hidden
      >
        <button class="msp-lightbox__close" aria-label="Close video">
          &times;
        </button>
        <div class="msp-lightbox__frame">
          <iframe
            id="mspLightboxIframe"
            src=""
            allow="autoplay; fullscreen"
            allowfullscreen
            frameborder="0"
            title="Student testimonial video"
          ></iframe>
        </div>
      </div>

      <!-- ============== 10. FAQ ============== -->
      <section class="msp-section msp-faq" id="faq" aria-labelledby="faqTitle">
        <div class="msp-wrap msp-faq__grid">
          <div class="reveal">
            <span class="msp-eyebrow">Common questions</span>
            <h2 id="faqTitle" class="msp-h2">
              Questions IMGs ask before booking a rotation
            </h2>
            <p class="msp-sub">
              Still unsure? The guidance call is free and covers all of these
              directly.
            </p>
            <a
              class="btn btn--outline msp-faq__cta"
              href="https://team.manikmadaan.com/guidance-call/book"
              target="_blank"
              rel="noopener noreferrer"
              >Book a Free Guidance Call</a
            >
          </div>
          <div class="accordion reveal">
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Why is U.S. clinical experience important?
              </button>
              <div class="accordion__body">
                It demonstrates familiarity with the U.S. healthcare system and strengthens residency applications.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                How do I choose the right rotation?
              </button>
              <div class="accordion__body">
                We help students select opportunities based on specialty interests and residency goals.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Are rotations IMG-friendly?
              </button>
              <div class="accordion__body">
                Yes. Our opportunities are specifically selected with IMGs in mind.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Do rotations provide Letters of Recommendation?
              </button>
              <div class="accordion__body">
                Requirements vary by site and physician. We discuss expectations before placement.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                What documents are required?
              </button>
              <div class="accordion__body">
                Requirements vary by institution but commonly include transcripts, immunizations, and identification documents.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Can graduates participate?
              </button>
              <div class="accordion__body">
                Yes. Many opportunities are available for both students and graduates.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                How early should I apply?
              </button>
              <div class="accordion__body">
                We recommend applying several months in advance to secure preferred dates.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Which specialties are available?
              </button>
              <div class="accordion__body">
                Availability varies throughout the year and depends on site capacity.
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============== 9. FINAL CTA ============== -->
      <section
        class="msp-section msp-cta-wrap"
        id="book"
        aria-labelledby="ctaTitle"
      >
        <div class="msp-wrap">
          <div class="msp-cta-a reveal">
            <div class="msp-cta-a__stat">
              <div class="msp-cta-a__num">88<span>%</span></div>
              <p class="msp-cta-a__stat-line">
                Match rate across 300+ students
              </p>
              <p class="msp-cta-a__stat-sub">
                10+ specialties &middot; 4.9 avg mentor rating
              </p>
            </div>
            <div class="msp-cta-a__content">
              <span class="msp-eyebrow msp-eyebrow--light">Enrollment open</span>
              <h2 id="ctaTitle" class="msp-h2 msp-h2--invert">
                Rotations are currently<br /><em>open for enrollment.</em>
              </h2>
              <p class="msp-cta__sub">
                Book a free guidance call. We will match you to the right
                rotation type, site, and timeline for your application and
                reserve your spot.
              </p>
              <a
                class="btn btn--primary btn--xl"
                href="mailto:arcadecontentsolutions@gmail.com?subject=Clinical%20Rotation%20Inquiry"
              >
                Reserve Your Spot
              </a>
              <p class="msp-cta__trust">
                No commitment. No sales pitch. Just a clear plan.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
