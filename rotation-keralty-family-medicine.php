<?php
$pageTitle = "Family Medicine Rotation — Keralty Hospital Faculty, Miami FL | USMLE Wise";
$pageDescription = "4-week family medicine rotation with faculty at Keralty Hospital, Miami Florida. Inpatient + outpatient, EMR access, Step 1 required. Max 2 students. Conditional LOR on hospital letterhead.";
$canonical = "https://usmlewise.com/rotation-keralty-family-medicine";
$bodyClass = "msp";
$stylesheets = [
    "/styles/rotations.css"
];
$scripts = [
    "/js/rotations.js"
];
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<div class="msp-wrap" style="padding-top: clamp(24px, 3vw, 36px); padding-bottom: 0;">
        <a href="/rotations" style="display: inline-flex; align-items: center; gap: 6px; font-family: var(--font-mono); font-size: 11px; letter-spacing: 0.1em; text-transform: uppercase; color: var(--uw-ink-500); text-decoration: none;">
          <i data-lucide="arrow-left" width="12" height="12"></i> All Rotations
        </a>
      </div>

      <section class="rot-feature" id="rotation-detail">
        <div class="msp-wrap">
          <div class="rot-feature__top reveal">
            <span class="rot-feature__num-badge">Rotation 25</span>
            <span class="rot-feature__top-loc"><i data-lucide="map-pin" width="11" height="11"></i> Miami, Florida</span>
            <span class="rot-feature__top-sep" aria-hidden="true">·</span>
            <span class="rot-feature__top-specialty">Family Medicine</span>
          </div>

          <div class="rot-feature__header reveal">
            <div class="rot-feature__header-copy">
              <h1 class="rot-feature__heading">Keralty Hospital<br>Miami, Florida</h1>
              <p class="rot-feature__hospital">Family Medicine Faculty — Keralty Hospital</p>
              <span class="rot-feature__setting-badge">Family Medicine &nbsp;&middot;&nbsp; Inpatient + Outpatient</span>
            </div>
            <div class="rot-feature__price-card">
              <div class="rot-feature__price">$3,800</div>
              <p class="rot-feature__deposit">$500 deposit applied toward total &middot; Balance due before start</p>
              <a class="btn btn--primary" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Call</a>
            </div>
          </div>

          <div class="rot-feature__stats-bar reveal">
            <div class="rot-feature__stat-col"><strong>1st Monday</strong><span>Monthly start</span></div>
            <div class="rot-feature__stat-col"><strong>2</strong><span>Max students</span></div>
            <div class="rot-feature__stat-col"><strong>Inpatient</strong><span>+ Outpatient</span></div>
          </div>

          <div class="rot-feature__body reveal">
            <div class="rot-feature__content">
              <div class="rot-feature__section">
                <span class="rot-feature__section-label">Clinical experience</span>
                <ul class="rot-feature__list">
                  <li>Hands-on inpatient experience working directly alongside residents and faculty at Keralty Hospital.</li>
                  <li>Outpatient clinic exposure complementing the hospital-based component.</li>
                  <li>Full <strong>EMR access</strong> throughout the rotation.</li>
                  <li>Documents must be submitted <strong>28 days prior</strong> to your start date.</li>
                </ul>
              </div>
              <div class="rot-feature__section">
                <span class="rot-feature__section-label">Eligibility</span>
                <ul class="rot-feature__list">
                  <li><strong>USMLE Step 1</strong> required before enrolling.</li>
                  <li>Rotation starts on the <strong>first Monday of each month</strong>.</li>
                  <li>Maximum of <strong>2 students</strong> per rotation cycle.</li>
                </ul>
              </div>
            </div>
            <div class="rot-feature__lor-panel">
              <span class="rot-feature__section-label">Letter of recommendation</span>
              <p class="rot-feature__text">If you perform well throughout the rotation, you have a chance to earn a LOR on hospital letterhead — and potentially an interview opportunity.</p>
              <div class="rot-feature__section">
                <span class="rot-feature__section-label">Required documents</span>
                <ul class="rot-feature__list">
                  <li>Updated CV</li>
                  <li>AAMC Standardized Immunization Records</li>
                  <li>Medical School Transcript or ID</li>
                  <li>USMLE Step 1 score report</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="rot-feature__footer reveal">
            <span class="rot-dtag">Inpatient + Outpatient</span>
            <span class="rot-dtag">Family Medicine</span>
            <span class="rot-dtag">EMR Access</span>
            <span class="rot-dtag">Step 1 Required</span>
            <span class="rot-dtag">Max 2 Students</span>
            <span class="rot-dtag">Conditional LOR</span>
          </div>
        </div>
      </section>

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
              <h2 id="ctaTitle" class="msp-h2 msp-h2--invert">Rotations are currently<br /><em>open for enrollment.</em></h2>
              <p class="msp-cta__sub">Book a free guidance call. We will match you to the right rotation type, site, and timeline for your application and reserve your spot.</p>
              <!--email_off--><a class="btn btn--primary btn--xl" href="mailto:support@usmlewise.com?subject=Clinical%20Rotation%20Inquiry">Reserve Your Spot</a><!--/email_off-->
              <p class="msp-cta__trust">No commitment. No sales pitch. Just a clear plan.</p>
            </div>
          </div>
        </div>
      </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
