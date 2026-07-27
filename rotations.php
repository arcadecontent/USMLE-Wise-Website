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
                  <li><button class="rot-sidebar__opt" type="button" data-filter="specialty" data-value="internal-medicine">Internal Medicine</button></li>
                  <li><button class="rot-sidebar__opt" type="button" data-filter="specialty" data-value="hospitalist">Hospitalist</button></li>
                  <li><button class="rot-sidebar__opt" type="button" data-filter="specialty" data-value="general-surgery">General Surgery</button></li>
                  <li><button class="rot-sidebar__opt" type="button" data-filter="specialty" data-value="psychiatry">Psychiatry</button></li>
                  <li><button class="rot-sidebar__opt" type="button" data-filter="specialty" data-value="pediatrics">Pediatrics</button></li>
                  <li><button class="rot-sidebar__opt" type="button" data-filter="specialty" data-value="family-medicine">Family Medicine</button></li>
                </ul>
              </div>

              <div class="rot-sidebar__group is-open">
                <button class="rot-sidebar__gh" type="button" aria-expanded="true">
                  <span>State</span>
                  <i data-lucide="chevron-down" width="14" height="14"></i>
                </button>
                <ul class="rot-sidebar__opts">
                  <li><button class="rot-sidebar__opt" type="button" data-filter="state" data-value="texas">Texas</button></li>
                  <li><button class="rot-sidebar__opt" type="button" data-filter="state" data-value="new-york">New York</button></li>
                  <li><button class="rot-sidebar__opt" type="button" data-filter="state" data-value="tennessee">Tennessee</button></li>
                  <li><button class="rot-sidebar__opt" type="button" data-filter="state" data-value="florida">Florida</button></li>
                  <li><button class="rot-sidebar__opt" type="button" data-filter="state" data-value="maryland">Maryland</button></li>
                  <li><button class="rot-sidebar__opt" type="button" data-filter="state" data-value="arkansas">Arkansas</button></li>
                  <li><button class="rot-sidebar__opt" type="button" data-filter="state" data-value="new-jersey">New Jersey</button></li>
                  <li><button class="rot-sidebar__opt" type="button" data-filter="state" data-value="north-carolina">North Carolina</button></li>
                  <li><button class="rot-sidebar__opt" type="button" data-filter="state" data-value="virginia">Virginia</button></li>
                  <li><button class="rot-sidebar__opt" type="button" data-filter="state" data-value="wisconsin">Wisconsin</button></li>
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
                  <li><button class="rot-sidebar__opt" type="button" data-filter="setting" data-value="inpatient">Inpatient</button></li>
                  <li><button class="rot-sidebar__opt" type="button" data-filter="setting" data-value="inpatient-outpatient">Inpatient + Outpatient</button></li>
                  <li><button class="rot-sidebar__opt" type="button" data-filter="setting" data-value="outpatient">Outpatient / Clinic</button></li>
                </ul>
              </div>
            </aside>

            <!-- Main: card grid -->
            <div class="rot-browse-main">
              <div class="rot-pg-grid" id="rotGrid">

            <!-- South Texas -->
            <article class="rot-pg-card reveal"
                     data-specialty="internal-medicine"
                     data-state="texas"
                     data-price="3k-4k"
                     data-setting="inpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">Internal Medicine</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>McAllen, Texas</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">Internal Medicine Sub-Internship</h3>
                <p class="rot-pg-card__hospital">South Texas Health System</p>
                <span class="rot-pg-card__setting">Inpatient &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$3,500</span>
                <span class="rot-pg-card__meta">Monthly starts &nbsp;&middot;&nbsp; Max 3 students</span>
              </div>
              <a href="/rotation-south-texas" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- New York -->
            <article class="rot-pg-card reveal"
                     data-specialty="internal-medicine"
                     data-state="new-york"
                     data-price="over-4k"
                     data-setting="inpatient-outpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">Internal Medicine</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                  <span class="rot-pg-badge rot-pg-badge--housing">Housing Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Newburgh, New York</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">Elective in New York</h3>
                <p class="rot-pg-card__hospital">St. Luke's Cornwall Hospital</p>
                <span class="rot-pg-card__setting">Inpatient + Outpatient &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$4,150</span>
                <span class="rot-pg-card__meta">Housing included &nbsp;&middot;&nbsp; Max 2 students</span>
              </div>
              <a href="/rotation-new-york" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- Tennessee -->
            <article class="rot-pg-card reveal"
                     data-specialty="internal-medicine"
                     data-state="tennessee"
                     data-price="under-3k"
                     data-setting="inpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">Internal Medicine</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Winchester, Tennessee</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">IM with the Chair of Medicine</h3>
                <p class="rot-pg-card__hospital">Highpoint Health St. Thomas Hospital</p>
                <span class="rot-pg-card__setting">Inpatient &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$2,700</span>
                <span class="rot-pg-card__meta">Monthly starts &nbsp;&middot;&nbsp; Max 4 students</span>
              </div>
              <a href="/rotation-tennessee" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- Florida -->
            <article class="rot-pg-card reveal"
                     data-specialty="hospitalist"
                     data-state="florida"
                     data-price="under-3k"
                     data-setting="inpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">Hospitalist</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Kissimmee, Florida</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">AdventHealth Kissimmee Campus</h3>
                <p class="rot-pg-card__hospital">Affiliated with AdventHealth Orlando</p>
                <span class="rot-pg-card__setting">Inpatient &nbsp;&middot;&nbsp; 7-on / 7-off</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$2,425</span>
                <span class="rot-pg-card__meta">Monthly starts &nbsp;&middot;&nbsp; Max 4 students</span>
              </div>
              <a href="/rotation-florida" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- Miami — General Surgery -->
            <article class="rot-pg-card reveal"
                     data-specialty="general-surgery"
                     data-state="florida"
                     data-price="3k-4k"
                     data-setting="inpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">General Surgery</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Miami, Florida</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">General Surgery at Larkin Community Hospital</h3>
                <p class="rot-pg-card__hospital">Larkin Community Hospital + Hialeah Hospital</p>
                <span class="rot-pg-card__setting">Inpatient + Surgical Centers &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$3,400</span>
                <span class="rot-pg-card__meta">Max 2 students</span>
              </div>
              <a href="/rotation-miami-surgery" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- Maryland — General Surgery -->
            <article class="rot-pg-card reveal"
                     data-specialty="general-surgery"
                     data-state="maryland"
                     data-price="under-3k"
                     data-setting="outpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">General Surgery</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Silver Spring, Maryland</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">General Surgery — Wright Center Faculty</h3>
                <p class="rot-pg-card__hospital">Wright Center for Graduate Medical Education</p>
                <span class="rot-pg-card__setting">Clinic + OR Observation &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$2,500</span>
                <span class="rot-pg-card__meta">Max 2 students</span>
              </div>
              <a href="/rotation-maryland-surgery" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- Kissimmee — General Surgery -->
            <article class="rot-pg-card reveal"
                     data-specialty="general-surgery"
                     data-state="florida"
                     data-price="3k-4k"
                     data-setting="outpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">General Surgery</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Kissimmee, Florida</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">General Surgery — Kissimmee</h3>
                <p class="rot-pg-card__hospital">Clinic-Based, Kissimmee, Florida</p>
                <span class="rot-pg-card__setting">Clinic + Surgical Procedures &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$3,200</span>
                <span class="rot-pg-card__meta">Max 2 students</span>
              </div>
              <a href="/rotation-kissimmee-surgery" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- Arkansas — General Surgery -->
            <article class="rot-pg-card reveal"
                     data-specialty="general-surgery"
                     data-state="arkansas"
                     data-price="under-3k"
                     data-setting="inpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">General Surgery</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Fort Smith, Arkansas</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">General Surgery at Baptist Health</h3>
                <p class="rot-pg-card__hospital">Baptist Health — Fort Smith</p>
                <span class="rot-pg-card__setting">Inpatient + OR Observation &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$2,500</span>
                <span class="rot-pg-card__meta">Max 2 students</span>
              </div>
              <a href="/rotation-arkansas-surgery" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- New Jersey — General Surgery -->
            <article class="rot-pg-card reveal"
                     data-specialty="general-surgery"
                     data-state="new-jersey"
                     data-price="under-3k"
                     data-setting="outpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">General Surgery</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Englewood, New Jersey</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">General Surgery — Former Program Director</h3>
                <p class="rot-pg-card__hospital">Bergen New Bridge Medical Center + Hudson Regional Hospital</p>
                <span class="rot-pg-card__setting">Clinic + Outpatient Surgical Center &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$1,996</span>
                <span class="rot-pg-card__meta">Hackensack faculty &nbsp;&middot;&nbsp; 20+ yrs experience</span>
              </div>
              <a href="/rotation-new-jersey-surgery" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>


            <!-- Houston — Flourish Mental Health (Psychiatry) -->
            <article class="rot-pg-card reveal"
                     data-specialty="psychiatry"
                     data-state="texas"
                     data-price="under-3k"
                     data-setting="outpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">Psychiatry</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Houston, Texas</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">Psychiatry — Child &amp; Adolescent Focus</h3>
                <p class="rot-pg-card__hospital">Physician with Flourish Mental Health</p>
                <span class="rot-pg-card__setting">Outpatient Clinic &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$2,800</span>
                <span class="rot-pg-card__meta">Max 1 student</span>
              </div>
              <a href="/rotation-flourish-psychiatry" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- Wayne, NJ — Ramapo Ridge (Psychiatry) -->
            <article class="rot-pg-card reveal"
                     data-specialty="psychiatry"
                     data-state="new-jersey"
                     data-price="3k-4k"
                     data-setting="outpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">Psychiatry</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Wayne, New Jersey</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">Psychiatry — Department Head</h3>
                <p class="rot-pg-card__hospital">Ramapo Ridge Psychiatric Hospital</p>
                <span class="rot-pg-card__setting">Outpatient Clinic &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$3,400</span>
                <span class="rot-pg-card__meta">Max 1 student &nbsp;&middot;&nbsp; Adult &amp; Geriatric Psych</span>
              </div>
              <a href="/rotation-ramapo-ridge-psychiatry" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- Chapel Hill, NC — UNC (Psychiatry) -->
            <article class="rot-pg-card reveal"
                     data-specialty="psychiatry"
                     data-state="north-carolina"
                     data-price="under-3k"
                     data-setting="outpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">Psychiatry</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Chapel Hill, North Carolina</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">Psychiatry — UNC Associate Professor</h3>
                <p class="rot-pg-card__hospital">University of North Carolina, Dept. of Psychiatry</p>
                <span class="rot-pg-card__setting">Outpatient Clinic &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$1,800</span>
                <span class="rot-pg-card__meta">Max 3 students &nbsp;&middot;&nbsp; 20+ yrs Clinical Director</span>
              </div>
              <a href="/rotation-unc-psychiatry" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- Mequon, WI — Medical Director (Psychiatry) -->
            <article class="rot-pg-card reveal"
                     data-specialty="psychiatry"
                     data-state="wisconsin"
                     data-price="under-3k"
                     data-setting="outpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">Psychiatry</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Mequon, Wisconsin</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">Psychiatry — Medical Director</h3>
                <p class="rot-pg-card__hospital">Private Clinic, Mequon, Wisconsin</p>
                <span class="rot-pg-card__setting">Telehealth + Clinic &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$1,800</span>
                <span class="rot-pg-card__meta">Max 2 students &nbsp;&middot;&nbsp; Fmr. UW-Madison Prof.</span>
              </div>
              <a href="/rotation-wisconsin-psychiatry" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- Houston — Medical Director (Psychiatry) -->
            <article class="rot-pg-card reveal"
                     data-specialty="psychiatry"
                     data-state="texas"
                     data-price="under-3k"
                     data-setting="outpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">Psychiatry</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Houston, Texas</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">Psychiatry — 30 Years Experience</h3>
                <p class="rot-pg-card__hospital">Psychiatry Medical Director, Houston</p>
                <span class="rot-pg-card__setting">Outpatient Clinic &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$2,000</span>
                <span class="rot-pg-card__meta">Max 2 students &nbsp;&middot;&nbsp; All ages</span>
              </div>
              <a href="/rotation-houston-psychiatry" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>


            <!-- Clifton, NJ — St. Joseph UMC (Pediatrics) -->
            <article class="rot-pg-card reveal"
                     data-specialty="pediatrics"
                     data-state="new-jersey"
                     data-price="3k-4k"
                     data-setting="outpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">Pediatrics</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Clifton, New Jersey</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">Pediatrics — Residency Faculty</h3>
                <p class="rot-pg-card__hospital">St. Joseph University Medical Center</p>
                <span class="rot-pg-card__setting">Outpatient &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$3,500</span>
                <span class="rot-pg-card__meta">Max 1 student &nbsp;&middot;&nbsp; 30 hrs/wk</span>
              </div>
              <a href="/rotation-st-joseph-pediatrics" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- Jersey City, NJ — Medical Director (Pediatrics) -->
            <article class="rot-pg-card reveal"
                     data-specialty="pediatrics"
                     data-state="new-jersey"
                     data-price="under-3k"
                     data-setting="outpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">Pediatrics</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Jersey City, New Jersey</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">Pediatrics — Medical Director</h3>
                <p class="rot-pg-card__hospital">Board-Certified Pediatrician, Jersey City</p>
                <span class="rot-pg-card__setting">Outpatient Clinic &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$2,000</span>
                <span class="rot-pg-card__meta">Mon–Fri &nbsp;&middot;&nbsp; Extended Wednesdays</span>
              </div>
              <a href="/rotation-jersey-city-pediatrics" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- Arlington, VA — Medical Director (Pediatrics) -->
            <article class="rot-pg-card reveal"
                     data-specialty="pediatrics"
                     data-state="virginia"
                     data-price="under-3k"
                     data-setting="outpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">Pediatrics</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Arlington, Virginia</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">Pediatrics — Medical Director</h3>
                <p class="rot-pg-card__hospital">Private Clinic, Arlington, Virginia</p>
                <span class="rot-pg-card__setting">Outpatient Clinic &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$2,000</span>
                <span class="rot-pg-card__meta">Independent patient encounters &nbsp;&middot;&nbsp; EMR</span>
              </div>
              <a href="/rotation-arlington-pediatrics" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- Miami, FL — Mercy Hospital (Pediatrics) -->
            <article class="rot-pg-card reveal"
                     data-specialty="pediatrics"
                     data-state="florida"
                     data-price="3k-4k"
                     data-setting="inpatient-outpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">Pediatrics</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Miami, Florida</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">Pediatrics — Mercy Hospital Faculty</h3>
                <p class="rot-pg-card__hospital">Mercy Hospital, Miami</p>
                <span class="rot-pg-card__setting">Clinic + Hospital &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$3,200</span>
                <span class="rot-pg-card__meta">EMR access &nbsp;&middot;&nbsp; Starts 1st Monday</span>
              </div>
              <a href="/rotation-mercy-pediatrics" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- Baltimore, MD — Pediatrics Externship -->
            <article class="rot-pg-card reveal"
                     data-specialty="pediatrics"
                     data-state="maryland"
                     data-price="under-3k"
                     data-setting="outpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">Pediatrics</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Baltimore, Maryland</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">Pediatrics — 20+ Years Experience</h3>
                <p class="rot-pg-card__hospital">Outpatient Clinic, Baltimore, Maryland</p>
                <span class="rot-pg-card__setting">Outpatient Clinic &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$1,600</span>
                <span class="rot-pg-card__meta">Max 1 student &nbsp;&middot;&nbsp; Full EMR access</span>
              </div>
              <a href="/rotation-baltimore-pediatrics" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- Englewood, NJ — Englewood Hospital (Family Medicine) -->
            <article class="rot-pg-card reveal"
                     data-specialty="family-medicine"
                     data-state="new-jersey"
                     data-price="under-3k"
                     data-setting="outpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">Family Medicine</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Englewood, New Jersey</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">Family Medicine — Chief of Family Practice</h3>
                <p class="rot-pg-card__hospital">Englewood Hospital and Medical Center</p>
                <span class="rot-pg-card__setting">Clinic + Living Facilities + Nursing Homes &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$1,996</span>
                <span class="rot-pg-card__meta">Max 2 students &nbsp;&middot;&nbsp; FM, Geriatrics &amp; Palliative</span>
              </div>
              <a href="/rotation-englewood-family-medicine" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- Richmond, TX — Oakbend Medical Center (Family Medicine) -->
            <article class="rot-pg-card reveal"
                     data-specialty="family-medicine"
                     data-state="texas"
                     data-price="under-3k"
                     data-setting="outpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">Family Medicine</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Richmond, Texas</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">Family Medicine — IMG Physician Mentor</h3>
                <p class="rot-pg-card__hospital">Oakbend Medical Center</p>
                <span class="rot-pg-card__setting">Outpatient Clinic &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$1,675</span>
                <span class="rot-pg-card__meta">Max 2 students &nbsp;&middot;&nbsp; Up to 20 patients/day</span>
              </div>
              <a href="/rotation-richmond-family-medicine" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- Alexandria, VA — Georgetown/Inova (Family Medicine) -->
            <article class="rot-pg-card reveal"
                     data-specialty="family-medicine"
                     data-state="virginia"
                     data-price="under-3k"
                     data-setting="outpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">Family Medicine</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Alexandria, Virginia</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">Family Medicine — Georgetown Associate Prof.</h3>
                <p class="rot-pg-card__hospital">Inova Alexandria Hospital</p>
                <span class="rot-pg-card__setting">Outpatient Clinic &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$2,500</span>
                <span class="rot-pg-card__meta">Max 4 students &nbsp;&middot;&nbsp; 39 yrs experience</span>
              </div>
              <a href="/rotation-alexandria-family-medicine" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- New York, NY — Mount Sinai (Family Medicine) -->
            <article class="rot-pg-card reveal"
                     data-specialty="family-medicine"
                     data-state="new-york"
                     data-price="under-3k"
                     data-setting="outpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">Family Medicine</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>New York, New York</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">Family Medicine — Mount Sinai Affiliated</h3>
                <p class="rot-pg-card__hospital">Two Clinics, New York City</p>
                <span class="rot-pg-card__setting">Outpatient Clinic &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$2,900</span>
                <span class="rot-pg-card__meta">Max 2 students &nbsp;&middot;&nbsp; Mon–Fri 9am–5pm</span>
              </div>
              <a href="/rotation-new-york-family-medicine" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- Hialeah, FL — Larkin Hospital (Family Medicine) -->
            <article class="rot-pg-card reveal"
                     data-specialty="family-medicine"
                     data-state="florida"
                     data-price="over-4k"
                     data-setting="inpatient-outpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">Family Medicine</span>
                  <span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Hialeah, Florida</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">Family Medicine — Larkin Program Director</h3>
                <p class="rot-pg-card__hospital">Larkin Community Hospital</p>
                <span class="rot-pg-card__setting">Inpatient + Outpatient + Telemedicine &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$4,196</span>
                <span class="rot-pg-card__meta">Max 6 students &nbsp;&middot;&nbsp; Didactics included</span>
              </div>
              <a href="/rotation-larkin-family-medicine" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

            <!-- Miami, FL — Keralty Hospital (Family Medicine) -->
            <article class="rot-pg-card reveal"
                     data-specialty="family-medicine"
                     data-state="florida"
                     data-price="3k-4k"
                     data-setting="inpatient-outpatient">
              <div class="rot-pg-card__top">
                <div class="rot-pg-card__badges">
                  <span class="rot-pg-badge rot-pg-badge--specialty">Family Medicine</span>
                </div>
                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>Miami, Florida</span>
              </div>
              <div class="rot-pg-card__mid">
                <h3 class="rot-pg-card__title">Family Medicine — Keralty Hospital Faculty</h3>
                <p class="rot-pg-card__hospital">Keralty Hospital, Miami</p>
                <span class="rot-pg-card__setting">Inpatient + Outpatient &nbsp;&middot;&nbsp; 4 Weeks</span>
              </div>
              <div class="rot-pg-card__price-row">
                <span class="rot-pg-card__price">$3,800</span>
                <span class="rot-pg-card__meta">Max 2 students &nbsp;&middot;&nbsp; Step 1 required</span>
              </div>
              <a href="/rotation-keralty-family-medicine" class="btn btn--outline rot-pg-card__cta">
                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>
              </a>
            </article>

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
