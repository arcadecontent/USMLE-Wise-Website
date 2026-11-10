<?php
$pageTitle = "Testimonials | USMLE Wise";
$pageDescription = "Real results from real IMGs. Videos and messages from USMLE Wise students who matched into U.S. residency programs, passed Step 1 and Step 2, and had research accepted at national meetings.";
$canonical = "https://usmlewise.com/testimonials";
$bodyClass = "msp";
$stylesheets = [
    "/styles/testimonials.css",
    "/styles/research-spotlight.css"
];
$scripts = [
    "/js/testimonials.js",
    "/js/research-spotlight.js"
];
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>
      <!-- ============== HERO ============== -->
      <section class="msp-hero" aria-labelledby="heroTitle">
        <div class="msp-wrap msp-hero__grid">
          <div class="msp-hero__copy reveal">
            <h1 id="heroTitle" class="msp-h1">
              Real IMGs.<br /><em>Real matches.</em>
            </h1>
            <p class="msp-lede">
              Match Day messages, Step score reports and accepted abstracts,
              in our students' own words. No aggregated averages, no
              cherry-picked outliers.
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
                <source srcset="/assets/Photos/fotos-CCDMI3dfnIo-unsplash.webp" type="image/webp">
                <img src="/assets/Photos/fotos-CCDMI3dfnIo-unsplash.jpg" alt="IMG physicians celebrating Match Day" fetchpriority="high" decoding="async" />
              </picture>
            </div>
            <div class="msp-float-note" aria-hidden="true">
              <span class="msp-float-note__num">300<small>+</small></span>
              <span class="msp-float-note__label">IMGs mentored</span>
              <span class="msp-float-note__sub">88% match rate &middot; 4.9 rating</span>
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

      <!-- ============== CASE STUDIES (commented out until stories are written) ==============
      <section class="msp-section tsm-cases" id="case-studies" aria-labelledby="caseStudiesTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Case Studies</span>
            <h2 id="caseStudiesTitle" class="msp-h2">The full arc, from first call to Match Day</h2>
            <p class="msp-sub">Every student's path was different. Each story covers what we found, what we changed, and what happened on Match Day.</p>
          </div>

          <div class="tsm-cases__grid">

            <a class="tsm-case-card reveal" href="/case-study-ahmed">
              <div class="tsm-case-card__photo">
                <span class="tsm-case-card__photo-init" aria-hidden="true">AA</span>
              </div>
              <div class="tsm-case-card__content">
                <span class="tsm-case-card__tag">Internal Medicine</span>
                <h3 class="tsm-case-card__name">Dr. Ahmed A.</h3>
                <span class="tsm-case-card__meta">Pakistan IMG · 2024 Cycle</span>
                <p class="tsm-case-card__excerpt">Competitive scores, zero USCE, and one failed cycle. We restructured the application strategy and secured 14 interview invitations on the next attempt.</p>
                <span class="tsm-case-card__link">Read the full story</span>
              </div>
            </a>

            <a class="tsm-case-card reveal" href="#">
              <div class="tsm-case-card__photo">
                <span class="tsm-case-card__photo-init" aria-hidden="true">PS</span>
              </div>
              <div class="tsm-case-card__content">
                <span class="tsm-case-card__tag">Pediatrics</span>
                <h3 class="tsm-case-card__name">Dr. Priya S.</h3>
                <span class="tsm-case-card__meta">India IMG · 2024 Cycle</span>
                <p class="tsm-case-card__excerpt">Strong research record but a personal statement that read like a CV. Six structured mock interviews and a repositioned narrative led to 11 invitations.</p>
                <span class="tsm-case-card__link">Read the full story</span>
              </div>
            </a>

            <a class="tsm-case-card reveal" href="#">
              <div class="tsm-case-card__photo">
                <span class="tsm-case-card__photo-init" aria-hidden="true">MK</span>
              </div>
              <div class="tsm-case-card__content">
                <span class="tsm-case-card__tag">Family Medicine</span>
                <h3 class="tsm-case-card__name">Dr. Mohammed K.</h3>
                <span class="tsm-case-card__meta">Egypt IMG · 2025 Cycle</span>
                <p class="tsm-case-card__excerpt">Below-average scores, a five-year graduation gap, and no interviews in the prior cycle. A focused geographic strategy changed the outcome entirely.</p>
                <span class="tsm-case-card__link">Read the full story</span>
              </div>
            </a>

          </div>
        </div>
      </section>
      ============================================================ -->

      <!-- ============== VIDEO TESTIMONIALS ============== -->
      <section class="msp-section tsm-videos" id="video-testimonials" aria-labelledby="videosTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Video Testimonials</span>
            <h2 id="videosTitle" class="msp-h2">Hear it directly</h2>
            <p class="msp-sub">Short conversations with IMGs on what the process was actually like, from Step prep to Match Day.</p>
          </div>

          <div class="tsm-videos__grid">

            <div class="tsm-video-card reveal">
              <button class="tsm-video-card__thumb msp-video-trigger" data-ytid="LKF0UYfXyE0" aria-label="Play testimonial video: Dr. Ayra">
                <div class="tsm-video-card__poster">
                  <img class="msp-video-trigger__thumb" src="https://img.youtube.com/vi/LKF0UYfXyE0/maxresdefault.jpg" alt="" loading="lazy" />
                  <span class="yt-play">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
                  </span>
                </div>
              </button>
              <div class="tsm-video-card__info">
                <span class="tsm-video-card__name">Dr. Ayra</span>
                <span class="tsm-video-card__spec">Match Case Study · USMLE Wise</span>
              </div>
            </div>

            <div class="tsm-video-card reveal">
              <button class="tsm-video-card__thumb msp-video-trigger" data-ytid="Ea1pD2xY0_s" aria-label="Play testimonial video: Dr. Peracha">
                <div class="tsm-video-card__poster">
                  <img class="msp-video-trigger__thumb" src="https://img.youtube.com/vi/Ea1pD2xY0_s/maxresdefault.jpg" alt="" loading="lazy" />
                  <span class="yt-play">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
                  </span>
                </div>
              </button>
              <div class="tsm-video-card__info">
                <span class="tsm-video-card__name">Dr. Peracha</span>
                <span class="tsm-video-card__spec">Match Case Study · USMLE Wise</span>
              </div>
            </div>

            <div class="tsm-video-card reveal">
              <button class="tsm-video-card__thumb msp-video-trigger" data-ytid="HSsrZERcvbI" aria-label="Play testimonial video: Dr. Patel">
                <div class="tsm-video-card__poster">
                  <img class="msp-video-trigger__thumb" src="https://img.youtube.com/vi/HSsrZERcvbI/maxresdefault.jpg" alt="" loading="lazy" />
                  <span class="yt-play">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
                  </span>
                </div>
              </button>
              <div class="tsm-video-card__info">
                <span class="tsm-video-card__name">Dr. Patel</span>
                <span class="tsm-video-card__spec">Internal Medicine Resident · USMLE Wise</span>
              </div>
            </div>

            <div class="tsm-video-card reveal">
              <button class="tsm-video-card__thumb msp-video-trigger" data-ytid="WDrpqKmLwLs" aria-label="Play testimonial video: Dr. Ali">
                <div class="tsm-video-card__poster">
                  <img class="msp-video-trigger__thumb" src="https://img.youtube.com/vi/WDrpqKmLwLs/maxresdefault.jpg" alt="" loading="lazy" />
                  <span class="yt-play">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
                  </span>
                </div>
              </button>
              <div class="tsm-video-card__info">
                <span class="tsm-video-card__name">Dr. Ali</span>
                <span class="tsm-video-card__spec">Match Case Study · USMLE Wise</span>
              </div>
            </div>

            <div class="tsm-video-card reveal">
              <button class="tsm-video-card__thumb msp-video-trigger" data-ytid="F8E7lTvGKRU" aria-label="Play testimonial video: Rana">
                <div class="tsm-video-card__poster">
                  <img class="msp-video-trigger__thumb" src="https://img.youtube.com/vi/F8E7lTvGKRU/maxresdefault.jpg" alt="" loading="lazy" />
                  <span class="yt-play">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
                  </span>
                </div>
              </button>
              <div class="tsm-video-card__info">
                <span class="tsm-video-card__name">Rana</span>
                <span class="tsm-video-card__spec">Internal Medicine · Top-20 Program</span>
              </div>
            </div>

            <div class="tsm-video-card reveal">
              <button class="tsm-video-card__thumb msp-video-trigger" data-ytid="O4Gns55Brh0" aria-label="Play testimonial video: Dr. Shreya Sriram">
                <div class="tsm-video-card__poster">
                  <img class="msp-video-trigger__thumb" src="https://img.youtube.com/vi/O4Gns55Brh0/maxresdefault.jpg" alt="" loading="lazy" />
                  <span class="yt-play">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
                  </span>
                </div>
              </button>
              <div class="tsm-video-card__info">
                <span class="tsm-video-card__name">Dr. Shreya Sriram</span>
                <span class="tsm-video-card__spec">Family Medicine · SIU Carbondale</span>
              </div>
            </div>

            <div class="tsm-video-card reveal">
              <button class="tsm-video-card__thumb msp-video-trigger" data-ytid="ZynxmljOZDA" aria-label="Play testimonial video: Dr. Hamit C.">
                <div class="tsm-video-card__poster">
                  <img class="msp-video-trigger__thumb" src="https://img.youtube.com/vi/ZynxmljOZDA/maxresdefault.jpg" alt="" loading="lazy" />
                  <span class="yt-play">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
                  </span>
                </div>
              </button>
              <div class="tsm-video-card__info">
                <span class="tsm-video-card__name">Dr. Hamit C.</span>
                <span class="tsm-video-card__spec">Matched at UPMC, PA</span>
              </div>
            </div>

            <div class="tsm-video-card reveal">
              <button class="tsm-video-card__thumb msp-video-trigger" data-ytid="IEphKQwawzA" aria-label="Play testimonial video: Dr. Yash">
                <div class="tsm-video-card__poster">
                  <img class="msp-video-trigger__thumb" src="https://img.youtube.com/vi/IEphKQwawzA/maxresdefault.jpg" alt="" loading="lazy" />
                  <span class="yt-play">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
                  </span>
                </div>
              </button>
              <div class="tsm-video-card__info">
                <span class="tsm-video-card__name">Dr. Yash</span>
                <span class="tsm-video-card__spec">Matched in Los Angeles</span>
              </div>
            </div>

            <div class="tsm-video-card reveal">
              <button class="tsm-video-card__thumb msp-video-trigger" data-ytid="2pGb5xiKzdw" aria-label="Play testimonial video: Dr. Srishti Shankar">
                <div class="tsm-video-card__poster">
                  <img class="msp-video-trigger__thumb" src="https://img.youtube.com/vi/2pGb5xiKzdw/maxresdefault.jpg" alt="" loading="lazy" />
                  <span class="yt-play">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
                  </span>
                </div>
              </button>
              <div class="tsm-video-card__info">
                <span class="tsm-video-card__name">Dr. Srishti Shankar</span>
                <span class="tsm-video-card__spec">Matched at St. Vincent, MA</span>
              </div>
            </div>

            <div class="tsm-video-card reveal">
              <button class="tsm-video-card__thumb msp-video-trigger" data-ytid="64yfSkj4M_8" aria-label="Play testimonial video: Nathan">
                <div class="tsm-video-card__poster">
                  <img class="msp-video-trigger__thumb" src="https://img.youtube.com/vi/64yfSkj4M_8/hqdefault.jpg" alt="" loading="lazy" />
                  <span class="yt-play">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
                  </span>
                </div>
              </button>
              <div class="tsm-video-card__info">
                <span class="tsm-video-card__name">Nathan</span>
                <span class="tsm-video-card__spec">Internal Medicine · Graduated 5+ years ago</span>
              </div>
            </div>

            <div class="tsm-video-card reveal">
              <button class="tsm-video-card__thumb msp-video-trigger" data-ytid="8S2q-5Pb87k" aria-label="Play testimonial video: Pavani">
                <div class="tsm-video-card__poster">
                  <img class="msp-video-trigger__thumb" src="https://img.youtube.com/vi/8S2q-5Pb87k/hqdefault.jpg" alt="" loading="lazy" />
                  <span class="yt-play">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
                  </span>
                </div>
              </button>
              <div class="tsm-video-card__info">
                <span class="tsm-video-card__name">Pavani</span>
                <span class="tsm-video-card__spec">Family Medicine · Matched with a Step 2 attempt</span>
              </div>
            </div>

            <div class="tsm-video-card reveal">
              <button class="tsm-video-card__thumb msp-video-trigger" data-ytid="izwBvdQgVc8" aria-label="Play testimonial video: Dyan">
                <div class="tsm-video-card__poster">
                  <img class="msp-video-trigger__thumb" src="https://img.youtube.com/vi/izwBvdQgVc8/hqdefault.jpg" alt="" loading="lazy" />
                  <span class="yt-play">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
                  </span>
                </div>
              </button>
              <div class="tsm-video-card__info">
                <span class="tsm-video-card__name">Dyan</span>
                <span class="tsm-video-card__spec">Internal Medicine · Albert Einstein</span>
              </div>
            </div>

            <div class="tsm-video-card reveal">
              <button class="tsm-video-card__thumb msp-video-trigger" data-ytid="lmjpF2nrXOU" aria-label="Play testimonial video: SOAP Match Story">
                <div class="tsm-video-card__poster">
                  <img class="msp-video-trigger__thumb" src="https://img.youtube.com/vi/lmjpF2nrXOU/hqdefault.jpg" alt="" loading="lazy" />
                  <span class="yt-play">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
                  </span>
                </div>
              </button>
              <div class="tsm-video-card__info">
                <span class="tsm-video-card__name">SOAP Match Story</span>
                <span class="tsm-video-card__spec">SOAP · USMLE Wise</span>
              </div>
            </div>

            <div class="tsm-video-card reveal">
              <button class="tsm-video-card__thumb msp-video-trigger" data-ytid="SmDKOptBIV4" aria-label="Play testimonial video: Dr. Vamsi">
                <div class="tsm-video-card__poster">
                  <img class="msp-video-trigger__thumb" src="https://img.youtube.com/vi/SmDKOptBIV4/hqdefault.jpg" alt="" loading="lazy" />
                  <span class="yt-play">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
                  </span>
                </div>
              </button>
              <div class="tsm-video-card__info">
                <span class="tsm-video-card__name">Dr. Vamsi</span>
                <span class="tsm-video-card__spec">Scored 272 on Step 2</span>
              </div>
            </div>

            <div class="tsm-video-card reveal">
              <button class="tsm-video-card__thumb msp-video-trigger" data-ytid="5qnypeUipdE" aria-label="Play testimonial video: Carmen">
                <div class="tsm-video-card__poster">
                  <img class="msp-video-trigger__thumb" src="https://img.youtube.com/vi/5qnypeUipdE/hqdefault.jpg" alt="" loading="lazy" />
                  <span class="yt-play">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
                  </span>
                </div>
              </button>
              <div class="tsm-video-card__info">
                <span class="tsm-video-card__name">Carmen</span>
                <span class="tsm-video-card__spec">Step 1 Crash Course review</span>
              </div>
            </div>

            <div class="tsm-video-card reveal">
              <button class="tsm-video-card__thumb msp-video-trigger" data-ytid="yljBSeYYx6s" aria-label="Play testimonial video: Divya">
                <div class="tsm-video-card__poster">
                  <img class="msp-video-trigger__thumb" src="https://img.youtube.com/vi/yljBSeYYx6s/hqdefault.jpg" alt="" loading="lazy" />
                  <span class="yt-play">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
                  </span>
                </div>
              </button>
              <div class="tsm-video-card__info">
                <span class="tsm-video-card__name">Divya</span>
                <span class="tsm-video-card__spec">Step 1 Crash Course review</span>
              </div>
            </div>

            <div class="tsm-video-card reveal">
              <button class="tsm-video-card__thumb msp-video-trigger" data-ytid="pcQuFkFmnAE" aria-label="Play testimonial video: Ruchika">
                <div class="tsm-video-card__poster">
                  <img class="msp-video-trigger__thumb" src="https://img.youtube.com/vi/pcQuFkFmnAE/hqdefault.jpg" alt="" loading="lazy" />
                  <span class="yt-play">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
                  </span>
                </div>
              </button>
              <div class="tsm-video-card__info">
                <span class="tsm-video-card__name">Ruchika</span>
                <span class="tsm-video-card__spec">Step 1 Crash Course review</span>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- ============== SCREENSHOT TESTIMONIALS ============== -->
      <section class="msp-section tsm-screenshots" id="screenshots" aria-labelledby="screenshotsTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">What students say</span>
            <h2 id="screenshotsTitle" class="msp-h2">Straight from the source</h2>
            <p class="msp-sub">Messages from students on Match Day, on score release day, and after results came in.</p>
          </div>

          <?php
          // One list for the whole wall. The first field drives the filter
          // chips. Width and height are each image's real pixel size, so the
          // browser can reserve its space before it lazy-loads.
$tsmShots = [
    ['match', '/assets/Testimonials/Photos/Match/Anjali.jpeg', 'Match Day message from Anjali', 996, 1600],
    ['match', '/assets/Testimonials/Photos/Match/Ayra.jpeg', 'Match Day message from Ayra', 720, 1246],
    ['match', '/assets/Testimonials/Photos/Match/Bardia.jpeg', 'Match Day message from Bardia', 720, 691],
    ['match', '/assets/Testimonials/Photos/Match/Hamna.jpeg', 'Match Day message from Hamna', 720, 1200],
    ['match', '/assets/Testimonials/Photos/Match/Nancy.jpeg', 'Match Day message from Nancy', 720, 489],
    ['match', '/assets/Testimonials/Photos/Match/Okkes.jpeg', 'Match Day message from Okkes', 720, 1238],
    ['match', '/assets/Testimonials/Photos/Match/Praneet.jpeg', 'Match Day message from Praneet', 720, 1163],
    ['match', '/assets/Testimonials/Photos/Match/Rasmitha.jpeg', 'Match Day message from Rasmitha', 720, 1285],
    ['match', '/assets/Testimonials/Photos/Match/Ravindra.jpeg', 'Match Day message from Ravindra', 720, 921],
    ['match', '/assets/Testimonials/Photos/Match/Shiv.jpeg', 'Match Day message from Shiv', 720, 1213],
    ['match', '/assets/Testimonials/Photos/Match/SidNath.jpeg', 'Match Day message from SidNath', 877, 994],
    ['match', '/assets/Testimonials/Photos/Match/Sinmmer.jpeg', 'Match Day message from Sinmmer', 720, 755],
    ['match', '/assets/Testimonials/Photos/Match/Swathi.jpeg', 'Match Day message from Swathi', 720, 470],
    ['match', '/assets/Testimonials/Photos/Match/babitha.jpeg', 'Match Day message from Babitha', 720, 444],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Ishaan-Singh.webp', 'Coaching testimonial from Ishaan Singh', 1058, 1431],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Mail-from-Manik-Madaan-(1).webp', 'Coaching testimonial', 810, 583],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Mail-from-Manik-Madaan-(2).webp', 'Coaching testimonial', 938, 1329],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Mail-from-Manik-Madaan-(3).webp', 'Coaching testimonial', 1004, 1064],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Mail-from-Manik-Madaan-(4).webp', 'Coaching testimonial', 712, 1342],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Mail-from-Manik-Madaan-(5).webp', 'Coaching testimonial', 884, 1364],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Screenshot-2026-02-20-at-11.39.28-PM.webp', 'Coaching testimonial', 1018, 1494],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Screenshot-2026-02-20-at-11.39.59-PM.webp', 'Coaching testimonial', 1062, 606],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Screenshot-2026-02-20-at-11.40.14-PM.webp', 'Coaching testimonial', 1064, 1205],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Screenshot-2026-02-20-at-11.40.20-PM.webp', 'Coaching testimonial', 1098, 941],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Screenshot-2026-02-20-at-11.40.25-PM.webp', 'Coaching testimonial', 1060, 1120],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Screenshot-2026-02-20-at-11.40.36-PM.webp', 'Coaching testimonial', 1058, 936],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Screenshot-2026-02-20-at-11.40.47-PM.webp', 'Coaching testimonial', 1066, 794],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Screenshot-2026-02-20-at-11.41.02-PM.webp', 'Coaching testimonial', 1010, 1048],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Screenshot-2026-02-20-at-11.41.13-PM.webp', 'Coaching testimonial', 1068, 668],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Screenshot-2026-02-20-at-11.41.25-PM.png', 'Coaching testimonial', 627, 529],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Screenshot-2026-02-20-at-11.41.37-PM.webp', 'Coaching testimonial', 1064, 1216],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Screenshot-2026-02-20-at-11.41.47-PM.webp', 'Coaching testimonial', 1080, 642],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Screenshot-2026-03-09-at-12.49.26-AM.webp', 'Coaching testimonial', 778, 849],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Screenshot-2026-05-11-at-6.35.12-PM.png', 'Coaching testimonial', 1054, 345],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Screenshot-2026-05-13-at-10.30.35-PM.webp', 'Coaching testimonial', 893, 1485],
    ['coaching', '/assets/Testimonials/Photos/Coaching/Screenshot-Apr-14-2026-from-WhatsApp.jpg', 'Coaching testimonial', 1063, 1920],
    ['coaching', '/assets/Testimonials/Photos/Coaching/WhatsApp-Image-Nov-19-2025.jpeg', 'Coaching testimonial', 1290, 1546],
    ['coaching', '/assets/Testimonials/Photos/Coaching/WhatsApp-Image.jpeg', 'Coaching testimonial', 1440, 521],
    ['match', '/assets/advanced-interviewing/testimonial-shot-matched.jpg', 'Match message from a student who used our advanced interview prep', 720, 962],
    ['step', '/assets/step1-crash-course/testimonials/t01.webp', 'Step exam testimonial from a student', 868, 900],
    ['step', '/assets/step1-crash-course/testimonials/t03.webp', 'Step exam testimonial from a student', 475, 900],
    ['step', '/assets/step1-crash-course/testimonials/t04.webp', 'Step exam testimonial from a student', 605, 900],
    ['step', '/assets/step1-crash-course/testimonials/t05.webp', 'Step exam testimonial from a student', 736, 900],
    ['step', '/assets/step1-crash-course/testimonials/t08.webp', 'Step exam testimonial from a student', 879, 900],
    ['step', '/assets/step1-crash-course/testimonials/t09.webp', 'Step exam testimonial from a student', 673, 900],
    ['step', '/assets/step1-crash-course/testimonials/t12.webp', 'Step exam testimonial from a student', 413, 900],
    ['step', '/assets/step1-crash-course/testimonials/t13.webp', 'Step exam testimonial from a student', 748, 900],
    ['step', '/assets/step1-crash-course/testimonials/t17.webp', 'Step exam testimonial from a student', 679, 900],
    ['step', '/assets/step1-crash-course/testimonials/t18.webp', 'Step exam testimonial from a student', 900, 741],
    ['step', '/assets/step1-crash-course/testimonials/t19.webp', 'Step exam testimonial from a student', 900, 387],
    ['step', '/assets/step1-crash-course/testimonials/t20.webp', 'Step exam testimonial from a student', 616, 900],
    ['step', '/assets/step1-crash-course/testimonials/t21.webp', 'Step exam testimonial from a student', 801, 900],
    ['step', '/assets/step1-crash-course/testimonials/t22.webp', 'Step exam testimonial from a student', 900, 782],
    ['step', '/assets/step1-crash-course/testimonials/t26.webp', 'Step exam testimonial from a student', 660, 900],
    ['step', '/assets/step1-crash-course/testimonials/t27.webp', 'Step exam testimonial from a student', 900, 684],
    ['step', '/assets/step1-crash-course/testimonials/t28.webp', 'Step exam testimonial from a student', 386, 900],
    ['step', '/assets/step1-crash-course/testimonials/t29.webp', 'Step exam testimonial from a student', 386, 900],
    ['step', '/assets/step1-crash-course/testimonials/t30.webp', 'Step exam testimonial from a student', 458, 900],
    ['step', '/assets/step1-crash-course/testimonials/t31.webp', 'Step exam testimonial from a student', 440, 900],
    ['step', '/assets/step1-crash-course/testimonials/t32.webp', 'Step exam testimonial from a student', 790, 900],
    ['step', '/assets/step1-crash-course/testimonials/t33.webp', 'Step exam testimonial from a student', 675, 900],
    ['step', '/assets/step1-crash-course/testimonials/t34.webp', 'Step exam testimonial from a student', 437, 900],
    ['step', '/assets/step1-crash-course/testimonials/t35.webp', 'Step exam testimonial from a student', 426, 900],
    ['step', '/assets/step1-crash-course/testimonials/t36.webp', 'Step exam testimonial from a student', 465, 900],
    ['step', '/assets/step1-crash-course/testimonials/t37.webp', 'Step exam testimonial from a student', 799, 900],
    ['step', '/assets/step1-crash-course/testimonials/t38.webp', 'Step exam testimonial from a student', 752, 900],
    ['step', '/assets/step1-crash-course/testimonials/t39.webp', 'Step exam testimonial from a student', 720, 900],
    ['step', '/assets/step1-crash-course/testimonials/t40.webp', 'Step exam testimonial from a student', 646, 900],
    ['step', '/assets/step1-crash-course/testimonials/t41.webp', 'Step exam testimonial from a student', 386, 900],
    ['step', '/assets/step1-crash-course/testimonials/t42.webp', 'Step exam testimonial from a student', 900, 769],
    ['step', '/assets/step1-crash-course/testimonials/t43.webp', 'Step exam testimonial from a student', 900, 501],
    ['step', '/assets/step1-crash-course/testimonials/t44.webp', 'Step exam testimonial from a student', 900, 789],
    ['step', '/assets/step1-crash-course/testimonials/t45.webp', 'Step exam testimonial from a student', 720, 900],
    ['step', '/assets/step1-crash-course/testimonials/t52.webp', 'Step exam testimonial from a student', 900, 609],
    ['step', '/assets/step1-crash-course/testimonials/t56.webp', 'Step exam testimonial from a student', 706, 544],
    ['step', '/assets/step1-crash-course/testimonials/t63.webp', 'Step exam testimonial from a student', 706, 553],
    ['step', '/assets/step1-crash-course/testimonials/t64.webp', 'Step exam testimonial from a student', 460, 900],
    ['step', '/assets/step1-crash-course/testimonials/t66.webp', 'Step exam testimonial from a student', 611, 900],
    ['step', '/assets/step1-crash-course/testimonials/t69.webp', 'Step exam testimonial from a student', 675, 900],
    ['step', '/assets/step1-crash-course/testimonials/t81.webp', 'Step exam testimonial from a student', 706, 431],
    ['step', '/assets/step1-crash-course/testimonials/t82.webp', 'Step exam testimonial from a student', 706, 766],
    ['step', '/assets/step1-crash-course/testimonials/t87.webp', 'Step exam testimonial from a student', 808, 722],
    ['step', '/assets/step1-crash-course/testimonials/t99.webp', 'Step exam testimonial from a student', 556, 900],
    ['step', '/assets/step1-crash-course/testimonials/t107.webp', 'Step exam testimonial from a student', 706, 480],
    ['step', '/assets/step1-mastery/testimonials/t60.webp', 'Step exam testimonial from a student', 911, 1000],
    ['step', '/assets/step1-mastery/testimonials/t88.webp', 'Step exam testimonial from a student', 706, 950],
    ['step', '/assets/step1-mastery/testimonials/t90.webp', 'Step exam testimonial from a student', 706, 548],
    ['step', '/assets/step1-mastery/testimonials/t98.webp', 'Step exam testimonial from a student', 657, 1000],
];

          $tsmByCat = ['match' => [], 'step' => [], 'coaching' => []];
          foreach ($tsmShots as $shot) { $tsmByCat[$shot[0]][] = $shot; }
          // Interleave the categories so the first screen of "All" is a mix
          // rather than 15 Match Day messages in a row.
          $tsmOrdered = [];
          while ($tsmByCat['match'] || $tsmByCat['step'] || $tsmByCat['coaching']) {
              foreach ($tsmByCat as $cat => $list) {
                  if ($list) { $tsmOrdered[] = array_shift($tsmByCat[$cat]); }
              }
          }
          $tsmCounts = ['all' => count($tsmShots), 'match' => 0, 'step' => 0, 'coaching' => 0];
          foreach ($tsmShots as $shot) { $tsmCounts[$shot[0]]++; }
          ?>

          <div class="tsm-filter reveal" role="group" aria-label="Filter testimonials">
            <button type="button" class="tsm-filter__btn is-active" data-tsm-filter="all" aria-pressed="true">All <span><?php echo $tsmCounts['all']; ?></span></button>
            <button type="button" class="tsm-filter__btn" data-tsm-filter="match" aria-pressed="false">Match <span><?php echo $tsmCounts['match']; ?></span></button>
            <button type="button" class="tsm-filter__btn" data-tsm-filter="step" aria-pressed="false">Step exams <span><?php echo $tsmCounts['step']; ?></span></button>
            <button type="button" class="tsm-filter__btn" data-tsm-filter="coaching" aria-pressed="false">Coaching <span><?php echo $tsmCounts['coaching']; ?></span></button>
          </div>

          <div class="tsm-screenshots__grid" id="tsmWall">
            <?php foreach ($tsmOrdered as $shot): ?>
            <div class="tsm-screenshot" data-cat="<?php echo htmlspecialchars($shot[0]); ?>">
              <img src="<?php echo htmlspecialchars($shot[1]); ?>" alt="<?php echo htmlspecialchars($shot[2]); ?>" width="<?php echo (int) $shot[3]; ?>" height="<?php echo (int) $shot[4]; ?>" loading="lazy" decoding="async" />
            </div>
            <?php endforeach; ?>
          </div>

          <div class="tsm-more" id="tsmMoreWrap" hidden>
            <button type="button" class="btn btn--outline btn--lg" id="tsmMore">Show more</button>
          </div>
        </div>
      </section>

      <!-- ============== RESEARCH TESTIMONIALS ============== -->
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/research-spotlight.php'; ?>

      <!-- ============== FINAL CTA ============== -->
      <section class="tsm-cta-wrap">
        <div class="msp-wrap">
          <div class="tsm-cta-card reveal" aria-labelledby="ctaTitle">
            <h2 id="ctaTitle" class="msp-h2">The Match is not a lottery. It is a strategy.</h2>
            <p class="msp-sub">Book a free guidance call and we'll review your profile, answer your questions, and tell you exactly what the next step is.</p>
            <div class="msp-cta-row">
              <a class="btn btn--primary btn--xl" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Free Guidance Call</a>
              <a class="btn btn--outline btn--xl" href="https://wa.me/19192015700" target="_blank" rel="noopener noreferrer">Text Us on WhatsApp</a>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!-- ============== VIDEO LIGHTBOX ============== -->
    <div id="mspLightbox" class="msp-lightbox" hidden tabindex="-1" role="dialog" aria-modal="true" aria-label="Video player">
      <button class="msp-lightbox__close" aria-label="Close video">
        <i data-lucide="x" width="20" height="20"></i>
      </button>
      <div class="msp-lightbox__frame">
        <iframe id="mspLightboxIframe" src="" allow="autoplay; fullscreen" allowfullscreen title="Testimonial video"></iframe>
      </div>
    </div>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
