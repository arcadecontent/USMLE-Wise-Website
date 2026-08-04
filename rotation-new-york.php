<?php
$pageTitle = "Internal Medicine Elective — New York | USMLE Wise";
$pageDescription = "4-week inpatient and outpatient Internal Medicine elective at St. Luke's Cornwall Hospital in Newburgh, NY. Housing included, max 2 students, LOR on hospital letterhead.";
$canonical = "https://usmlewise.com/rotation-new-york";
$bodyClass = "msp";
$stylesheets = [
    "/styles/rotations.css"
];
$scripts = [
    "/js/rotations.js"
];
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>

      <!-- Breadcrumb -->
      <div class="msp-wrap" style="padding-top: clamp(24px, 3vw, 36px); padding-bottom: 0;">
        <a href="/rotations" style="display: inline-flex; align-items: center; gap: 6px; font-family: var(--font-mono); font-size: 11px; letter-spacing: 0.1em; text-transform: uppercase; color: var(--uw-ink-500); text-decoration: none;">
          <i data-lucide="arrow-left" width="12" height="12"></i>
          All Rotations
        </a>
      </div>

      <!-- Rotation detail -->
      <section class="rot-feature" id="rotation-detail">
        <div class="msp-wrap">

          <div class="rot-feature__top reveal">
            <span class="rot-feature__num-badge">Rotation 02</span>
            <span class="rot-feature__top-loc">
              <i data-lucide="map-pin" width="11" height="11"></i>
              Newburgh, New York
            </span>
            <span class="rot-feature__top-sep" aria-hidden="true">·</span>
            <span class="rot-feature__top-specialty">Internal Medicine</span>
          </div>

          <div class="rot-feature__header reveal">
            <div class="rot-feature__header-copy">
              <h1 class="rot-feature__heading">Elective<br>in New York</h1>
              <p class="rot-feature__hospital">St. Luke's Cornwall Hospital Affiliated Campus</p>
              <span class="rot-feature__setting-badge">4-Week Inpatient + Outpatient Experience</span>
            </div>
            <div class="rot-feature__price-card">
              <div class="rot-feature__price">$4,150</div>
              <p class="rot-feature__deposit">Rotation + Housing &middot; $500 deposit applied toward total &middot; Balance due before start</p>
              <a class="btn btn--primary" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Call</a>
            </div>
          </div>

          <div class="rot-feature__stats-bar reveal">
            <div class="rot-feature__stat-col">
              <strong>4</strong>
              <span>Weeks</span>
            </div>
            <div class="rot-feature__stat-col">
              <strong>2</strong>
              <span>Max students</span>
            </div>
            <div class="rot-feature__stat-col">
              <strong>Housing</strong>
              <span>Included</span>
            </div>
          </div>

          <div class="rot-feature__body reveal">
            <div class="rot-feature__content">
              <div class="rot-feature__section">
                <span class="rot-feature__section-label">About the rotation</span>
                <ul class="rot-feature__list">
                  <li><strong>Rotation with:</strong> Experienced internist affiliated with St. Luke's Cornwall Hospital.</li>
                  <li>IMG-friendly hospital with a residency program; mentor has prior rotators who matched.</li>
                  <li><strong>Setting:</strong> 4 weeks of combined inpatient + outpatient exposure.</li>
                  <li>Supportive learning environment committed to resident-level readiness.</li>
                  <li><strong>Max students:</strong> 2.</li>
                </ul>
              </div>
              <div class="rot-feature__section">
                <span class="rot-feature__section-label">What's included</span>
                <ul class="rot-feature__list">
                  <li><strong>Housing included</strong> &mdash; dorm accommodation close to the hospital.</li>
                  <li>Occasional lunch provided by mentor.</li>
                  <li>Occasional pick-up &amp; drop-off support.</li>
                </ul>
              </div>
            </div>
            <div class="rot-feature__lor-panel">
              <span class="rot-feature__section-label">Letter of recommendation</span>
              <p class="rot-feature__text">Highly customized LoR on hospital letterhead upon successful completion, reflecting performance and contributions.</p>
              <div class="rot-feature__section">
                <span class="rot-feature__section-label">Required documents</span>
                <ul class="rot-feature__list">
                  <li>Updated CV</li>
                  <li>AAMC Standardized Immunization Records</li>
                  <li>Medical School Transcript or ID</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="rot-feature__footer reveal">
            <span class="rot-dtag">Inpatient + Outpatient</span>
            <span class="rot-dtag">Housing Included</span>
            <span class="rot-dtag">LoR Included</span>
            <span class="rot-dtag">IMG-Friendly</span>
            <span class="rot-dtag">Max 2 Students</span>
            <span class="rot-dtag">4 Weeks</span>
          </div>

        </div>
      </section>

      <!-- CTA -->
      <section class="msp-section msp-cta-wrap" id="book" aria-labelledby="ctaTitle">
        <div class="msp-wrap">
          <div class="msp-cta-a reveal">
            <div class="msp-cta-a__stat">
              <div class="msp-cta-a__num">88<span>%</span></div>
              <p class="msp-cta-a__stat-line">Match rate across 300+ students</p>
              <p class="msp-cta-a__stat-sub">10+ specialties &middot; 4.9 avg mentor rating</p>
            </div>
            <div class="msp-cta-a__content">
              <span class="msp-eyebrow msp-eyebrow--light">Enrollment open</span>
              <h2 id="ctaTitle" class="msp-h2 msp-h2--invert">
                Rotations are currently<br /><em>open for enrollment.</em>
              </h2>
              <p class="msp-cta__sub">
                Book a free guidance call. We will match you to the right rotation type, site, and timeline for your application and reserve your spot.
              </p>
              <!--email_off--><a class="btn btn--primary btn--xl" href="mailto:support@usmlewise.com?subject=Clinical%20Rotation%20Inquiry">
                Reserve Your Spot
              </a><!--/email_off-->
              <p class="msp-cta__trust">No commitment. No sales pitch. Just a clear plan.</p>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
