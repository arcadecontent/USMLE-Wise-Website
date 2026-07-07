<?php
$pageTitle = "Psychiatry Rotation — UNC Chapel Hill, North Carolina | USMLE Wise";
$pageDescription = "4-week psychiatry rotation with Associate Professor at UNC Chapel Hill Dept of Psychiatry. Emergency psychiatry, addiction, precision medicine. Max 3 students, LOR on clinic letterhead.";
$canonical = "https://usmlewise.com/rotation-unc-psychiatry";
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
            <span class="rot-feature__num-badge">Rotation 12</span>
            <span class="rot-feature__top-loc">
              <i data-lucide="map-pin" width="11" height="11"></i>
              Chapel Hill, North Carolina
            </span>
            <span class="rot-feature__top-sep" aria-hidden="true">·</span>
            <span class="rot-feature__top-specialty">Psychiatry</span>
          </div>

          <div class="rot-feature__header reveal">
            <div class="rot-feature__header-copy">
              <h1 class="rot-feature__heading">University of North Carolina<br>Dept. of Psychiatry</h1>
              <p class="rot-feature__hospital">Medical School Associate Professor, UNC Chapel Hill</p>
              <span class="rot-feature__setting-badge">Psychiatry Rotation &nbsp;&middot;&nbsp; Emergency, Addiction &amp; Precision Medicine</span>
            </div>
            <div class="rot-feature__price-card">
              <div class="rot-feature__price">$1,800</div>
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
              <strong>3</strong>
              <span>Max students</span>
            </div>
            <div class="rot-feature__stat-col">
              <strong>Mon–Fri</strong>
              <span>9:00 am – 4:30 pm</span>
            </div>
          </div>

          <div class="rot-feature__body reveal">
            <div class="rot-feature__content">
              <div class="rot-feature__section">
                <span class="rot-feature__section-label">About the rotation</span>
                <ul class="rot-feature__list">
                  <li><strong>Rotation with:</strong> Medical School Associate Professor, UNC Chapel Hill Dept. of Psychiatry.</li>
                  <li>Valuable clinical experience among a <strong>diverse patient population</strong>, including emergency psychiatry, addiction, precision medicine, and ecopsychology.</li>
                  <li>Preceptor spent over <strong>20 years as Clinical Director</strong> of UNC's counseling and psychological services.</li>
                  <li><strong>Max students:</strong> 3.</li>
                </ul>
              </div>
              <div class="rot-feature__section">
                <span class="rot-feature__section-label">Schedule breakdown</span>
                <ul class="rot-feature__list">
                  <li>Clinic hours Monday through Friday, <strong>9:00 am to 4:30 pm</strong>.</li>
                  <li>Exposure across multiple psychiatry subspecialties within a single rotation.</li>
                </ul>
              </div>
            </div>
            <div class="rot-feature__lor-panel">
              <span class="rot-feature__section-label">Letter of recommendation</span>
              <p class="rot-feature__text">Personalized LoR on clinic letterhead upon successful completion, based on your performance throughout the rotation.</p>
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
            <span class="rot-dtag">Psychiatry</span>
            <span class="rot-dtag">Emergency Psychiatry</span>
            <span class="rot-dtag">Addiction</span>
            <span class="rot-dtag">Precision Medicine</span>
            <span class="rot-dtag">LoR Included</span>
            <span class="rot-dtag">Max 3 Students</span>
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
