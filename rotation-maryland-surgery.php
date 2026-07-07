<?php
$pageTitle = "General Surgery — Wright Center Faculty, Silver Spring MD | USMLE Wise";
$pageDescription = "4-week General Surgery rotation with a board-certified surgeon at the Wright Center in Silver Spring, MD. Clinic, lab skills, OR observation, and didactic sessions.";
$canonical = "https://usmlewise.com/rotation-maryland-surgery";
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
          <i data-lucide="arrow-left" width="12" height="12"></i>
          All Rotations
        </a>
      </div>

      <section class="rot-feature" id="rotation-detail">
        <div class="msp-wrap">

          <div class="rot-feature__top reveal">
            <span class="rot-feature__num-badge">General Surgery</span>
            <span class="rot-feature__top-loc">
              <i data-lucide="map-pin" width="11" height="11"></i>
              Silver Spring, Maryland
            </span>
            <span class="rot-feature__top-sep" aria-hidden="true">·</span>
            <span class="rot-feature__top-specialty">Wright Center Faculty</span>
          </div>

          <div class="rot-feature__header reveal">
            <div class="rot-feature__header-copy">
              <h1 class="rot-feature__heading">General Surgery<br>with Wright Center Faculty</h1>
              <p class="rot-feature__hospital">Wright Center for Graduate Medical Education &mdash; Washington DC Area</p>
              <span class="rot-feature__setting-badge">Clinic + Lab Skills + OR Observation &nbsp;&middot;&nbsp; 4 Weeks</span>
            </div>
            <div class="rot-feature__price-card">
              <div class="rot-feature__price">$2,500</div>
              <p class="rot-feature__deposit">$500 deposit applied toward total &middot; Balance due before start</p>
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
              <strong>20+</strong>
              <span>Years experience</span>
            </div>
          </div>

          <div class="rot-feature__body reveal">
            <div class="rot-feature__content">
              <div class="rot-feature__section">
                <span class="rot-feature__section-label">About the rotation</span>
                <ul class="rot-feature__list">
                  <li>A clinically enriching rotation under the tutelage of a board-certified General Surgeon with over 20 years of experience, currently serving at the Wright Center.</li>
                  <li>Designed to offer comprehensive hands-on experience across the full breadth of General Surgery — from initial patient consultations to execution of surgical procedures.</li>
                  <li><strong>Max students:</strong> 2.</li>
                </ul>
              </div>
              <div class="rot-feature__section">
                <span class="rot-feature__section-label">What you will experience</span>
                <ul class="rot-feature__list">
                  <li>Direct patient care within the office setting: interviews, physical examinations, and minor procedures.</li>
                  <li>Laboratory sessions focusing on essential surgical skills — basic suturing, knot tying, and in-office ultrasound (USG) techniques.</li>
                  <li>Observation of a variety of general surgical operations, gaining insight into operative techniques and patient management.</li>
                  <li>Didactic sessions covering a comprehensive range of general surgical principles.</li>
                </ul>
              </div>
            </div>
            <div class="rot-feature__lor-panel">
              <span class="rot-feature__section-label">Letter of recommendation</span>
              <p class="rot-feature__text">Upon successful completion, you will receive a personalized LoR on clinic letterhead, highlighting the faculty designation of the surgeon. The substantive content of the letter and the reputation of the author substantially outweigh the letterhead itself.</p>
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
            <span class="rot-dtag">General Surgery</span>
            <span class="rot-dtag">Clinic Setting</span>
            <span class="rot-dtag">Lab Skills</span>
            <span class="rot-dtag">OR Observation</span>
            <span class="rot-dtag">Didactic Sessions</span>
            <span class="rot-dtag">LoR Included</span>
            <span class="rot-dtag">Max 2 Students</span>
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
              <a class="btn btn--primary btn--xl" href="mailto:arcadecontentsolutions@gmail.com?subject=Clinical%20Rotation%20Inquiry">Reserve Your Spot</a>
              <p class="msp-cta__trust">No commitment. No sales pitch. Just a clear plan.</p>
            </div>
          </div>
        </div>
      </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
