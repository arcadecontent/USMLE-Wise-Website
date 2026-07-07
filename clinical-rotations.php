<?php
$pageTitle = "Clinical Rotations | USMLE Wise";
$pageDescription = "Browse all U.S. clinical rotation placements for IMGs. Filter by specialty, state, price, and setting to find hands-on experience with hospital letterhead LORs.";
$canonical = "https://usmlewise.com/clinical-rotations";
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
      <!-- ============== ROTATIONS BROWSE ============== -->
      <section class="msp-section rot-browse" id="rotations" aria-labelledby="rotTitle">
        <div class="msp-wrap">

          <div class="msp-head reveal">
            <span class="msp-eyebrow">Available placements</span>
            <h2 id="rotTitle" class="msp-h2">Clinical Rotations</h2>
            <p class="msp-sub">Browse all our IMG-friendly placements with hospital letterhead LORs, monthly starts, and full clinical exposure. Filter by specialty, state, price, and setting.</p>
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
    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
