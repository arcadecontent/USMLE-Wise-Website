<?php
$pageTitle = "Student Stories | USMLE Wise";
$pageDescription = "Real results from real IMGs. Read how USMLE Wise students matched into U.S. residency programs across specialties.";
$canonical = "https://usmlewise.com/testimonials";
$bodyClass = "msp";
$stylesheets = [
    "/assets/css/testimonials.css"
];
$scripts = [
    "/assets/js/testimonials.js"
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
              Every story here is a person we worked with individually,
              through the full arc from profile review to Match Day. No
              aggregated averages, no cherry-picked outliers.
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
                href="https://web.whatsapp.com/send?phone=&text=Hey%2C%20I%20have%20questions%20regarding%20USMLE%20Wise"
                target="_blank"
                rel="noopener noreferrer"
              >
                Text Us on WhatsApp
              </a>
            </div>
          </div>

          <div class="msp-hero__frame-wrap">
            <div class="msp-hero__frame reveal">
              <img
                src="/assets/photos/fotos-ccdmi3dfnio-unsplash.jpg"
                alt="IMG physicians celebrating Match Day"
              />
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

            <a class="tsm-case-card reveal" href="/case-studies/ahmed">
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
            <span class="msp-eyebrow">Video Stories</span>
            <h2 id="videosTitle" class="msp-h2">Hear it directly</h2>
            <p class="msp-sub">Short conversations with matched IMGs on what the process was actually like.</p>
          </div>

          <div class="tsm-videos__grid">

            <div class="tsm-video-card reveal">
              <button class="tsm-video-card__thumb msp-video-trigger" data-ytid="LKF0UYfXyE0" aria-label="Play testimonial video: Dr. Ayra">
                <div class="tsm-video-card__poster">
                  <img class="msp-video-trigger__thumb" src="https://img.youtube.com/vi/LKF0UYfXyE0/maxresdefault.jpg" alt="" loading="lazy" />
                  <div class="tsm-video-card__play">
                    <i data-lucide="play" width="18" height="18"></i>
                  </div>
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
                  <div class="tsm-video-card__play">
                    <i data-lucide="play" width="18" height="18"></i>
                  </div>
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
                  <div class="tsm-video-card__play">
                    <i data-lucide="play" width="18" height="18"></i>
                  </div>
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
                  <div class="tsm-video-card__play">
                    <i data-lucide="play" width="18" height="18"></i>
                  </div>
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
                  <div class="tsm-video-card__play">
                    <i data-lucide="play" width="18" height="18"></i>
                  </div>
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
                  <div class="tsm-video-card__play">
                    <i data-lucide="play" width="18" height="18"></i>
                  </div>
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
                  <div class="tsm-video-card__play">
                    <i data-lucide="play" width="18" height="18"></i>
                  </div>
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
                  <div class="tsm-video-card__play">
                    <i data-lucide="play" width="18" height="18"></i>
                  </div>
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
                  <div class="tsm-video-card__play">
                    <i data-lucide="play" width="18" height="18"></i>
                  </div>
                </div>
              </button>
              <div class="tsm-video-card__info">
                <span class="tsm-video-card__name">Dr. Srishti Shankar</span>
                <span class="tsm-video-card__spec">Matched at St. Vincent, MA</span>
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
            <p class="msp-sub">Messages from students on Match Day and after results came in.</p>
          </div>

          <div class="tsm-screenshots__grid">

            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/match/anjali.jpeg" alt="Match Day message from Anjali" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/match/ayra.jpeg" alt="Match Day message from Ayra" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/match/bardia.jpeg" alt="Match Day message from Bardia" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/match/hamna.jpeg" alt="Match Day message from Hamna" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/match/nancy.jpeg" alt="Match Day message from Nancy" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/match/okkes.jpeg" alt="Match Day message from Okkes" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/match/praneet.jpeg" alt="Match Day message from Praneet" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/match/rasmitha.jpeg" alt="Match Day message from Rasmitha" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/match/ravindra.jpeg" alt="Match Day message from Ravindra" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/match/shiv.jpeg" alt="Match Day message from Shiv" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/match/sidnath.jpeg" alt="Match Day message from SidNath" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/match/sinmmer.jpeg" alt="Match Day message from Sinmmer" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/match/swathi.jpeg" alt="Match Day message from Swathi" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/match/babitha.jpeg" alt="Match Day message from Babitha" loading="lazy" />
            </div>

            <!-- Coaching testimonials -->
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/ishaan-singh.png" alt="Coaching testimonial from Ishaan Singh" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/mail-from-manik-madaan-1.png" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/mail-from-manik-madaan-2.png" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/mail-from-manik-madaan-3.png" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/mail-from-manik-madaan-4.png" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/mail-from-manik-madaan-5.png" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/screenshot-2026-02-20-at-11-39-28-pm.png" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/screenshot-2026-02-20-at-11-39-59-pm.png" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/screenshot-2026-02-20-at-11-40-14-pm.png" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/screenshot-2026-02-20-at-11-40-20-pm.png" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/screenshot-2026-02-20-at-11-40-25-pm.png" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/screenshot-2026-02-20-at-11-40-36-pm.png" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/screenshot-2026-02-20-at-11-40-47-pm.png" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/screenshot-2026-02-20-at-11-41-02-pm.png" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/screenshot-2026-02-20-at-11-41-13-pm.png" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/screenshot-2026-02-20-at-11-41-25-pm.png" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/screenshot-2026-02-20-at-11-41-37-pm.png" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/screenshot-2026-02-20-at-11-41-47-pm.png" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/screenshot-2026-03-09-at-12-49-26-am.png" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/screenshot-2026-05-11-at-6-35-12-pm.png" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/screenshot-2026-05-13-at-10-30-35-pm.png" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/screenshot-apr-14-2026-from-whatsapp.jpg" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/whatsapp-image-nov-19-2025.jpeg" alt="Coaching testimonial" loading="lazy" />
            </div>
            <div class="tsm-screenshot reveal">
              <img src="/assets/testimonials/photos/coaching/whatsapp-image.jpeg" alt="Coaching testimonial" loading="lazy" />
            </div>

          </div>
        </div>
      </section>

      <!-- ============== FINAL CTA ============== -->
      <section class="msp-section msp-cta-wrap" id="book" aria-labelledby="ctaTitle">
        <div class="msp-wrap">
          <div class="msp-cta-a reveal">
            <div class="msp-cta-a__stat">
              <div class="msp-cta-a__num">88<span>%</span></div>
              <p class="msp-cta-a__stat-line">
                Match rate across 300+ graduates
              </p>
              <p class="msp-cta-a__stat-sub">
                10+ specialties &middot; 4.9 avg mentor rating
              </p>
            </div>
            <div class="msp-cta-a__content">
              <span class="msp-eyebrow msp-eyebrow--light">Ready to start</span>
              <h2 id="ctaTitle" class="msp-h2 msp-h2--invert">
                The Match is not a lottery.<br /><em>It is a strategy.</em>
              </h2>
              <p class="msp-cta__sub">
                Book a free 30-minute guidance call. We will review your
                profile, answer your questions, and tell you exactly what the
                next step is.
              </p>
              <a
                class="btn btn--primary btn--xl"
                href="https://team.manikmadaan.com/guidance-call/book"
                target="_blank"
                rel="noopener noreferrer"
              >
                Book Your Free Guidance Call
              </a>
              <p class="msp-cta__trust">
                No commitment. No sales pitch. Just a clear plan.
              </p>
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
