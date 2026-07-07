<?php
$pageTitle = "Pediatrics Rotation — St. Joseph University Medical Center, Clifton NJ | USMLE Wise";
$pageDescription = "4-week pediatrics rotation with Residency Program Faculty at St. Joseph University Medical Center in Clifton, New Jersey. 30 hrs/week outpatient, max 1 student, LOR on hospital letterhead.";
$canonical = "https://usmlewise.com/rotations/st-joseph-pediatrics";
$bodyClass = "msp";
$stylesheets = [
    "/assets/css/rotations.css"
];
$scripts = [
    "/assets/js/rotations.js"
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

      <section class="rot-feature" id="rotation-detail">
        <div class="msp-wrap">

          <div class="rot-feature__top reveal">
            <span class="rot-feature__num-badge">Rotation 15</span>
            <span class="rot-feature__top-loc">
              <i data-lucide="map-pin" width="11" height="11"></i>
              Clifton, New Jersey
            </span>
            <span class="rot-feature__top-sep" aria-hidden="true">·</span>
            <span class="rot-feature__top-specialty">Pediatrics</span>
          </div>

          <div class="rot-feature__header reveal">
            <div class="rot-feature__header-copy">
              <h1 class="rot-feature__heading">St. Joseph University<br>Medical Center</h1>
              <p class="rot-feature__hospital">Faculty of Residency Program — St. Joseph University Medical Center</p>
              <span class="rot-feature__setting-badge">Pediatrics Rotation &nbsp;&middot;&nbsp; Outpatient &amp; Limited Inpatient</span>
            </div>
            <div class="rot-feature__price-card">
              <div class="rot-feature__price">$3,500</div>
              <p class="rot-feature__deposit">$500 deposit applied toward total &middot; Balance due before start</p>
              <a class="btn btn--primary" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Call</a>
            </div>
          </div>

          <div class="rot-feature__stats-bar reveal">
            <div class="rot-feature__stat-col">
              <strong>Monthly</strong>
              <span>Starts</span>
            </div>
            <div class="rot-feature__stat-col">
              <strong>1</strong>
              <span>Max students</span>
            </div>
            <div class="rot-feature__stat-col">
              <strong>30 hrs/wk</strong>
              <span>Min 3 days/week</span>
            </div>
          </div>

          <div class="rot-feature__body reveal">
            <div class="rot-feature__content">
              <div class="rot-feature__section">
                <span class="rot-feature__section-label">About the rotation</span>
                <ul class="rot-feature__list">
                  <li><strong>Rotation with:</strong> Faculty of Residency Program affiliated with St. Joseph University Medical Center.</li>
                  <li>Hands-on experience seeing a <strong>variety of pediatric cases</strong> in an outpatient setting.</li>
                  <li>Minimum of <strong>3 days per week</strong> with at least <strong>30 hours per week</strong> of outpatient exposure.</li>
                  <li>Limited inpatient experience is possible but not guaranteed.</li>
                  <li><strong>Max students:</strong> 1 (one-on-one mentorship).</li>
                </ul>
              </div>
              <div class="rot-feature__section">
                <span class="rot-feature__section-label">Schedule breakdown</span>
                <ul class="rot-feature__list">
                  <li>Primarily outpatient clinic; inpatient exposure at preceptor's discretion.</li>
                  <li>Exposure to a wide variety of general pediatric presentations.</li>
                </ul>
              </div>
            </div>
            <div class="rot-feature__lor-panel">
              <span class="rot-feature__section-label">Letter of recommendation</span>
              <p class="rot-feature__text">Personalized LoR on hospital letterhead upon successful completion, based on your performance throughout the rotation.</p>
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
            <span class="rot-dtag">Outpatient</span>
            <span class="rot-dtag">Pediatrics</span>
            <span class="rot-dtag">Residency Faculty</span>
            <span class="rot-dtag">Limited Inpatient Possible</span>
            <span class="rot-dtag">LoR Included</span>
            <span class="rot-dtag">Max 1 Student</span>
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
              <a class="btn btn--primary btn--xl" href="mailto:arcadecontentsolutions@gmail.com?subject=Clinical%20Rotation%20Inquiry">
                Reserve Your Spot
              </a>
              <p class="msp-cta__trust">No commitment. No sales pitch. Just a clear plan.</p>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
