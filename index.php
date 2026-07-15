<?php
require __DIR__ . '/routes.php';

$pageTitle = "USMLE Wise — Match Into a U.S. Residency";
$pageDescription = "From USMLE prep to ERAS applications and interview coaching, USMLE Wise helps international medical graduates navigate the entire Match process with expert mentorship and step-by-step support.";
$canonical = "https://usmlewise.com/";
$bodyClass = "lpx";
$stylesheets = [
    "/styles/landing.css",
    "/styles/match.css"
];
$scripts = [
    "/js/landing.js",
    "/js/match.js"
];
$preloadImage = "/assets/Photos/fotos-CCDMI3dfnIo-unsplash.webp";
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<!-- ============== 1 · HERO ============== -->
  <section class="msp-hero" aria-labelledby="heroTitle">
    <div class="msp-wrap msp-hero__grid">
      <div class="msp-hero__copy reveal">
        <h1 id="heroTitle" class="msp-h1">
          Your Complete
          <span class="msp-h1__accent">IMG Roadmap</span> to U.S. Residency
        </h1>
        <p class="msp-lede">
          USMLE coaching, ERAS applications, research experience, and residency
          matching, led by mentors who have been through it.
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
          <picture>
            <source srcset="/assets/Photos/fotos-CCDMI3dfnIo-unsplash.webp" type="image/webp">
            <img
              src="/assets/Photos/fotos-CCDMI3dfnIo-unsplash.jpg"
              alt="IMG physician preparing for U.S. residency"
              width="1920"
              height="1446"
              fetchpriority="high"
              decoding="async"
            />
          </picture>
        </div>
        <div class="msp-float-note" aria-hidden="true">
          <span class="msp-float-note__num">300<small>+</small></span>
          <span class="msp-float-note__label">IMGs mentored</span>
          <span class="msp-float-note__sub"
            >4.9 rating &middot; 88% match rate</span
          >
        </div>
      </div>
    </div>

    <div class="msp-bar msp-wrap" aria-label="Track record">
      <div class="msp-bar__inner">
        <div class="msp-stat reveal">
          <b data-count="300" data-suffix="+">300+</b>
          <span>IMGs mentored</span>
        </div>
        <div class="msp-divider" aria-hidden="true"></div>
        <div class="msp-stat reveal">
          <b data-count="88" data-suffix="%">88%</b>
          <span>Match rate</span>
        </div>
        <div class="msp-divider" aria-hidden="true"></div>
        <div class="msp-stat reveal">
          <b data-count="260" data-suffix="+">260+</b>
          <span>Avg. mentor Step score</span>
        </div>
        <div class="msp-divider" aria-hidden="true"></div>
        <div class="msp-stat reveal">
          <b data-count="4.9" data-decimal="1">4.9</b>
          <span>Average mentor rating</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== 3 · THE PROBLEM ============== -->
  <section class="lpx-section lpx-problem" id="problem" aria-labelledby="problemTitle">
    <div class="lpx-wrap">
      <div class="lpx-problem__hd reveal">
        <h2 id="problemTitle" class="lpx-h2">
          Hard enough with help. Brutal without it.
        </h2>
        <p class="lpx-prose">
          Most IMGs face USMLE exams, ERAS deadlines, rotations, and interviews
          with no real guidance. The cost of getting it wrong is another year lost.
        </p>
        <p class="lpx-prose lpx-prose--strong">
          The problem isn't your effort. It's having no roadmap.
        </p>
      </div>
      <ol class="lpx-pain-grid reveal">
        <li class="lpx-pain-card" style="background-image: url('assets/Photos/surface-XHSYzoIC_SM-unsplash.webp')">
          <div class="lpx-pain-card__inner">
            <p class="lpx-pain-card__txt">Unsure how to build a strong residency application</p>
          </div>
        </li>
        <li class="lpx-pain-card" style="background-image: url('assets/Photos/calendar.webp')">
          <div class="lpx-pain-card__inner">
            <p class="lpx-pain-card__txt">Confused about ERAS timelines and requirements</p>
          </div>
        </li>
        <li class="lpx-pain-card" style="background-image: url('assets/Photos/frustrated.webp')">
          <div class="lpx-pain-card__inner">
            <p class="lpx-pain-card__txt">Struggling to improve USMLE scores</p>
          </div>
        </li>
        <li class="lpx-pain-card" style="background-image: url('assets/Photos/mentorship.webp')">
          <div class="lpx-pain-card__inner">
            <p class="lpx-pain-card__txt">No mentorship or accountability</p>
          </div>
        </li>
        <li class="lpx-pain-card" style="background-image: url('assets/Photos/money.webp')">
          <div class="lpx-pain-card__inner">
            <p class="lpx-pain-card__txt">Wasting money on the wrong resources</p>
          </div>
        </li>
        <li class="lpx-pain-card" style="background-image: url('assets/Photos/fotos-CCDMI3dfnIo-unsplash.webp')">
          <div class="lpx-pain-card__inner">
            <p class="lpx-pain-card__txt">Fear of not matching after years of effort</p>
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- ============== 4 · THE SOLUTION ============== -->
  <section class="lpx-section lpx-solution" id="solution" aria-labelledby="solTitle">
    <div class="lpx-wrap">
      <div class="lpx-head reveal">
        <h2 id="solTitle" class="lpx-h2">Everything you need to go from IMG to matched resident</h2>
        <p class="lpx-sub">
          USMLE Wise combines mentorship, exam prep, residency strategy, and
          application support into one complete system.
        </p>
      </div>
      <div class="lpx-services">
        <article class="lpx-svc reveal">
          <span class="lpx-svc__no">01</span>
          <i data-lucide="book-open-check"></i>
          <h3>USMLE Exam Prep</h3>
          <p>Learn proven strategies from high-scoring mentors who understand exactly what it takes to succeed.</p>
        </article>
        <article class="lpx-svc reveal">
          <span class="lpx-svc__no">02</span>
          <i data-lucide="route"></i>
          <h3>Residency Match Mentorship</h3>
          <p>Get a personalized roadmap based on your profile, goals, and specialty.</p>
        </article>

        <article class="lpx-svc reveal">
          <span class="lpx-svc__no">03</span>
          <i data-lucide="file-text"></i>
          <h3>ERAS Application Support</h3>
          <p>Build a stronger CV, personal statement, and residency application that stands out.</p>
        </article>
        <article class="lpx-svc reveal">
          <span class="lpx-svc__no">04</span>
          <i data-lucide="messages-square"></i>
          <h3>Interview Preparation</h3>
          <p>Practice real residency interview questions with direct feedback and coaching.</p>
        </article>
        <article class="lpx-svc reveal">
          <span class="lpx-svc__no">05</span>
          <i data-lucide="stethoscope"></i>
          <h3>Clinical Rotations</h3>
          <p>Gain U.S. clinical experience and strengthen your residency application.</p>
        </article>
        <article class="lpx-svc reveal">
          <span class="lpx-svc__no">06</span>
          <i data-lucide="microscope"></i>
          <h3>Research Guidance</h3>
          <p>Improve your profile with research mentorship and publication support.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ============== 5 · SERVICES ============== -->

  <!-- Shared section header -->
  <div class="lpx-section lpx-svc-header" id="services">
    <div class="lpx-wrap">
      <div class="lpx-head lpx-head--center reveal">
        <span class="lpx-eyebrow">What We Offer</span>
        <h2 class="lpx-h2">Every service an IMG needs, in one place</h2>
        <p class="lpx-sub">From your first USMLE exam to Match Day, we cover every step of the journey.</p>
      </div>
    </div>
  </div>

  <section class="lpx-svc-a" aria-label="Services">
    <div class="lpx-wrap">
    <article class="lpx-sva-row reveal">
      <div class="lpx-sva-img" style="background-image: url('assets/Photos/national-cancer-institute-NFvdKIhxYlU-unsplash.webp')"></div>
      <div class="lpx-sva-body">
        <span class="lpx-sva-eyebrow">01 &middot; Exam Prep</span>
        <h3 class="lpx-sva-title">USMLE Exam Preparation</h3>
        <p class="lpx-sva-desc">Structured strategies from high-scoring mentors who have been through the process. Build the score your application needs.</p>
        <div class="lpx-sva-ctas">
          <a href="https://team.manikmadaan.com/guidance-call/book" class="btn btn--primary btn--sm" target="_blank" rel="noopener noreferrer">Book a Guidance Call</a>
          <a href="/coaching" class="btn btn--ghost btn--sm">Learn More <i data-lucide="arrow-right" width="14" height="14"></i></a>
        </div>
      </div>
    </article>
    <article class="lpx-sva-row lpx-sva-row--flip reveal">
      <div class="lpx-sva-img" style="background-image: url('assets/Photos/fotos-CCDMI3dfnIo-unsplash.webp')"></div>
      <div class="lpx-sva-body">
        <span class="lpx-sva-eyebrow">02 &middot; Residency Match</span>
        <h3 class="lpx-sva-title">Residency Match Mentorship</h3>
        <p class="lpx-sva-desc">A personalized roadmap built around your profile, scores, specialty, and timeline. Weekly guidance every step of the way.</p>
        <div class="lpx-sva-ctas">
          <a href="https://team.manikmadaan.com/guidance-call/book" class="btn btn--primary btn--sm" target="_blank" rel="noopener noreferrer">Book a Guidance Call</a>
          <a href="/match" class="btn btn--ghost btn--sm">Learn More <i data-lucide="arrow-right" width="14" height="14"></i></a>
        </div>
      </div>
    </article>

    <article class="lpx-sva-row reveal">
      <div class="lpx-sva-img" style="background-image: url('assets/Photos/team-young-specialist-doctors-standing-corridor-hospital.webp')"></div>
      <div class="lpx-sva-body">
        <span class="lpx-sva-eyebrow">05 &middot; Clinical</span>
        <h3 class="lpx-sva-title">Clinical Rotations</h3>
        <p class="lpx-sva-desc">Gain real U.S. clinical experience and the LORs that strengthen your residency application meaningfully.</p>
        <div class="lpx-sva-ctas">
          <a href="https://team.manikmadaan.com/guidance-call/book" class="btn btn--primary btn--sm" target="_blank" rel="noopener noreferrer">Book a Guidance Call</a>
          <a href="/rotations" class="btn btn--ghost btn--sm">Learn More <i data-lucide="arrow-right" width="14" height="14"></i></a>
        </div>
      </div>
    </article>
    <article class="lpx-sva-row lpx-sva-row--flip reveal">
      <div class="lpx-sva-img" style="background-image: url('assets/Photos/researcher-in-lab-computer.webp')"></div>
      <div class="lpx-sva-body">
        <span class="lpx-sva-eyebrow">06 &middot; Research</span>
        <h3 class="lpx-sva-title">Research Guidance</h3>
        <p class="lpx-sva-desc">Build your academic profile with mentored research and publication support tailored to your target specialty.</p>
        <div class="lpx-sva-ctas">
          <a href="https://team.manikmadaan.com/guidance-call/book" class="btn btn--primary btn--sm" target="_blank" rel="noopener noreferrer">Book a Guidance Call</a>
          <a href="/research" class="btn btn--ghost btn--sm">Learn More <i data-lucide="arrow-right" width="14" height="14"></i></a>
        </div>
      </div>
    </article>
    </div>
  </section>

  <!--
  ··· Option B: Bento grid (commented out) ···
  <div class="svc-opt-divider"><span>Option B</span></div>
  <section class="lpx-svc-b" aria-label="Services — Option B">
    <div class="lpx-wrap">
      <div class="lpx-svb-grid">

        <article class="lpx-svb-card lpx-svb-card--hero reveal" style="background-image: url('assets/Photos/fotos-CCDMI3dfnIo-unsplash.webp');">
          <div class="lpx-svb-card__inner">
            <span class="lpx-svb-eyebrow">02 &middot; Residency Match</span>
            <h3 class="lpx-svb-title">Residency Match Mentorship</h3>
            <p class="lpx-svb-desc">A personalized roadmap built around your profile, scores, specialty, and timeline. Weekly guidance every step of the way.</p>
            <div class="lpx-svb-ctas">
              <a href="https://team.manikmadaan.com/guidance-call/book" class="btn btn--primary btn--sm" target="_blank" rel="noopener noreferrer">Book a Guidance Call</a>
              <a href="/match" class="btn btn--ghost btn--sm" style="color:#fff;">Learn More <i data-lucide="arrow-right" width="14" height="14"></i></a>
            </div>
          </div>
        </article>

        <article class="lpx-svb-card reveal" style="background-image: url('assets/Photos/national-cancer-institute-NFvdKIhxYlU-unsplash.webp')">
          <div class="lpx-svb-card__inner">
            <span class="lpx-svb-eyebrow">01 &middot; Exam Prep</span>
            <h3 class="lpx-svb-title">USMLE Exam Preparation</h3>
            <div class="lpx-svb-ctas">
              <a href="https://team.manikmadaan.com/guidance-call/book" class="btn btn--primary btn--sm" target="_blank" rel="noopener noreferrer">Book a Call</a>
            </div>
          </div>
        </article>


        <article class="lpx-svb-card reveal">
          <div class="lpx-svb-card__inner">
            <span class="lpx-svb-eyebrow">03 &middot; Application</span>
            <h3 class="lpx-svb-title">ERAS Application Support</h3>
            <div class="lpx-svb-ctas">
              <a href="https://team.manikmadaan.com/guidance-call/book" class="btn btn--primary btn--sm" target="_blank" rel="noopener noreferrer">Book a Call</a>
            </div>
          </div>
        </article>

        <article class="lpx-svb-card reveal">
          <div class="lpx-svb-card__inner">
            <span class="lpx-svb-eyebrow">04 &middot; Interview Prep</span>
            <h3 class="lpx-svb-title">Interview Preparation</h3>
            <div class="lpx-svb-ctas">
              <a href="https://team.manikmadaan.com/guidance-call/book" class="btn btn--primary btn--sm" target="_blank" rel="noopener noreferrer">Book a Call</a>
            </div>
          </div>
        </article>

        <article class="lpx-svb-card reveal">
          <div class="lpx-svb-card__inner">
            <span class="lpx-svb-eyebrow">05 &middot; Clinical</span>
            <h3 class="lpx-svb-title">Clinical Rotations</h3>
            <div class="lpx-svb-ctas">
              <a href="https://team.manikmadaan.com/guidance-call/book" class="btn btn--primary btn--sm" target="_blank" rel="noopener noreferrer">Book a Call</a>
            </div>
          </div>
        </article>

        <article class="lpx-svb-card reveal">
          <div class="lpx-svb-card__inner">
            <span class="lpx-svb-eyebrow">06 &middot; Research</span>
            <h3 class="lpx-svb-title">Research Guidance</h3>
            <div class="lpx-svb-ctas">
              <a href="https://team.manikmadaan.com/guidance-call/book" class="btn btn--primary btn--sm" target="_blank" rel="noopener noreferrer">Book a Call</a>
            </div>
          </div>
        </article>

      </div>
    </div>
  </section>
  <div class="svc-opt-divider svc-opt-divider--end"><span>End of options</span></div>
  -->

  <!-- ============== 6b · VIDEO TESTIMONIALS ============== -->
  <section class="msp-stories" id="stories" aria-labelledby="storiesTitle">
    <div class="msp-wrap">
      <div class="msp-stories__head reveal">
        <span class="msp-eyebrow msp-eyebrow--light">Success stories</span>
        <h2 id="storiesTitle" class="msp-h2 msp-h2--invert">
          Real journeys from IMG to residency
        </h2>
      </div>

      <div class="msp-carousel" aria-label="Student testimonials">
        <div class="msp-slide is-active" role="group" aria-label="Story 1 of 5">
          <button class="msp-video-trigger" data-ytid="F8E7lTvGKRU" aria-label="Watch Rana's match story video">
            <img src="https://img.youtube.com/vi/F8E7lTvGKRU/maxresdefault.jpg" alt="Rana shares how she matched Internal Medicine at a top-20 program" class="msp-video-trigger__thumb" loading="lazy" decoding="async" />
            <span class="msp-video-trigger__play" aria-hidden="true">
              <svg width="72" height="72" viewBox="0 0 72 72" fill="none"><circle cx="36" cy="36" r="36" fill="rgba(255,255,255,0.12)"/><circle cx="36" cy="36" r="30" fill="rgba(255,255,255,0.92)"/><path d="M31 26l20 10-20 10V26z" fill="#1a3a7a"/></svg>
            </span>
          </button>
          <div class="msp-slide__content">
            <p class="msp-story-feature__outcome">Matched University of Illinois, Peoria</p>
            <blockquote class="msp-story-feature__quote">
              <p>I knew I wasn't a natural speaker and needed help making my answers stand out. Dr. Madan's course and our one-on-one sessions gave me the tools to personalize my responses for each interviewer. I walked into every interview with a confidence I simply didn't have before.</p>
              <footer class="msp-story-feature__attr">
                <cite class="msp-story-feature__cite">
                  <span>Dr. Lakshitha</span>
                  <span>University of Illinois, Peoria</span>
                </cite>
              </footer>
            </blockquote>
          </div>
        </div>

        <div class="msp-slide" role="group" aria-label="Story 2 of 5" aria-hidden="true">
          <button class="msp-video-trigger" data-ytid="O4Gns55Brh0" aria-label="Watch Dr. Shreya Sriram's match story video">
            <img src="https://img.youtube.com/vi/O4Gns55Brh0/maxresdefault.jpg" alt="Dr. Shreya Sriram shares how she matched Family Medicine at SIU Carbondale" class="msp-video-trigger__thumb" loading="lazy" decoding="async" />
            <span class="msp-video-trigger__play" aria-hidden="true">
              <svg width="72" height="72" viewBox="0 0 72 72" fill="none"><circle cx="36" cy="36" r="36" fill="rgba(255,255,255,0.12)"/><circle cx="36" cy="36" r="30" fill="rgba(255,255,255,0.92)"/><path d="M31 26l20 10-20 10V26z" fill="#1a3a7a"/></svg>
            </span>
          </button>
          <div class="msp-slide__content">
            <p class="msp-story-feature__outcome">Matched SIU Carbondale · Family Medicine</p>
            <blockquote class="msp-story-feature__quote">
              <p>I didn't match in the main cycle, didn't match in SOAP, and was financially stretched. But I kept applying every day on Dr. Madan's advice. I flew across the country for an in-person interview at a remote program just to show my commitment. That persistence, and having the right guidance, is what got me here.</p>
              <footer class="msp-story-feature__attr">
                <cite class="msp-story-feature__cite">
                  <span>Dr. Shreya Sriram</span>
                  <span>SIU Carbondale · Family Medicine</span>
                </cite>
              </footer>
            </blockquote>
          </div>
        </div>

        <div class="msp-slide" role="group" aria-label="Story 3 of 5" aria-hidden="true">
          <button class="msp-video-trigger" data-ytid="ZynxmljOZDA" aria-label="Watch Dr. Hamit C.'s match story video">
            <img src="https://img.youtube.com/vi/ZynxmljOZDA/maxresdefault.jpg" alt="Dr. Hamit C. shares how he matched at UPMC, PA" class="msp-video-trigger__thumb" loading="lazy" decoding="async" />
            <span class="msp-video-trigger__play" aria-hidden="true">
              <svg width="72" height="72" viewBox="0 0 72 72" fill="none"><circle cx="36" cy="36" r="36" fill="rgba(255,255,255,0.12)"/><circle cx="36" cy="36" r="30" fill="rgba(255,255,255,0.92)"/><path d="M31 26l20 10-20 10V26z" fill="#1a3a7a"/></svg>
            </span>
          </button>
          <div class="msp-slide__content">
            <p class="msp-story-feature__outcome">Matched UPMC · Pennsylvania</p>
            <blockquote class="msp-story-feature__quote">
              <p>I had everything ready: personal statement, LORs, a solid program list. But I knew those only get you the interview. I've seen applicants with 11 interviews who still didn't match. Dr. Madan's course prepares you for the dynamic, unexpected side of residency interviews, not just the rehearsed answers.</p>
              <footer class="msp-story-feature__attr">
                <cite class="msp-story-feature__cite">
                  <span>Dr. Hamit C.</span>
                  <span>UPMC · Pennsylvania</span>
                </cite>
              </footer>
            </blockquote>
          </div>
        </div>

        <div class="msp-slide" role="group" aria-label="Story 4 of 5" aria-hidden="true">
          <button class="msp-video-trigger" data-ytid="IEphKQwawzA" aria-label="Watch Dr. Yash's match story video">
            <img src="https://img.youtube.com/vi/IEphKQwawzA/maxresdefault.jpg" alt="Dr. Yash shares how he matched in Los Angeles" class="msp-video-trigger__thumb" loading="lazy" decoding="async" />
            <span class="msp-video-trigger__play" aria-hidden="true">
              <svg width="72" height="72" viewBox="0 0 72 72" fill="none"><circle cx="36" cy="36" r="36" fill="rgba(255,255,255,0.12)"/><circle cx="36" cy="36" r="30" fill="rgba(255,255,255,0.92)"/><path d="M31 26l20 10-20 10V26z" fill="#1a3a7a"/></svg>
            </span>
          </button>
          <div class="msp-slide__content">
            <p class="msp-story-feature__outcome">Matched Los Angeles · California</p>
            <blockquote class="msp-story-feature__quote">
              <p>This was my first time applying and I had no idea what to expect from the interview process. I came to Dr. Madan with so many questions, and he answered every single one with patience. That guidance made all the difference when it mattered most.</p>
              <footer class="msp-story-feature__attr">
                <cite class="msp-story-feature__cite">
                  <span>Dr. Yash</span>
                  <span>Los Angeles · California</span>
                </cite>
              </footer>
            </blockquote>
          </div>
        </div>

        <div class="msp-slide" role="group" aria-label="Story 5 of 5" aria-hidden="true">
          <button class="msp-video-trigger" data-ytid="2pGb5xiKzdw" aria-label="Watch Dr. Srishti Shankar's match story video">
            <img src="https://img.youtube.com/vi/2pGb5xiKzdw/maxresdefault.jpg" alt="Dr. Srishti Shankar shares how she matched at St. Vincent, MA" class="msp-video-trigger__thumb" loading="lazy" decoding="async" />
            <span class="msp-video-trigger__play" aria-hidden="true">
              <svg width="72" height="72" viewBox="0 0 72 72" fill="none"><circle cx="36" cy="36" r="36" fill="rgba(255,255,255,0.12)"/><circle cx="36" cy="36" r="30" fill="rgba(255,255,255,0.92)"/><path d="M31 26l20 10-20 10V26z" fill="#1a3a7a"/></svg>
            </span>
          </button>
          <div class="msp-slide__content">
            <p class="msp-story-feature__outcome">Matched St. Vincent · Massachusetts</p>
            <blockquote class="msp-story-feature__quote">
              <p></p>
              <footer class="msp-story-feature__attr">
                <cite class="msp-story-feature__cite">
                  <span>Dr. Srishti Shankar</span>
                  <span>St. Vincent · Massachusetts</span>
                </cite>
              </footer>
            </blockquote>
          </div>
        </div>
      </div>

      <div class="msp-carousel__nav">
        <button class="msp-carousel__btn" id="prevSlide" aria-label="Previous story">
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M11 3.5L6 9l5 5.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <span class="msp-carousel__count" id="slideCount" aria-live="polite">1 / 5</span>
        <button class="msp-carousel__btn" id="nextSlide" aria-label="Next story">
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M7 3.5L12 9l-5 5.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
      </div>
    </div>
  </section>

  <!-- Video lightbox -->
  <div class="msp-lightbox" id="mspLightbox" role="dialog" aria-modal="true" aria-label="Student testimonial video" hidden>
    <button class="msp-lightbox__close" aria-label="Close video">&times;</button>
    <div class="msp-lightbox__frame">
      <iframe id="mspLightboxIframe" src="" allow="autoplay; fullscreen" allowfullscreen frameborder="0" title="Student testimonial video"></iframe>
    </div>
  </div>

  <!-- ============== 6c · MATCH DAY MESSAGES ============== -->
  <section class="msp-section msp-shots" id="match-messages" aria-labelledby="shotsTitle">
    <div class="msp-wrap">
      <div class="msp-head reveal">
        <span class="msp-eyebrow">Match Day messages</span>
        <h2 id="shotsTitle" class="msp-h2">What students send us on Match Day</h2>
      </div>
      <div class="msp-shots__grid">
        <div class="msp-shot-card reveal"><img src="/assets/Testimonials/Photos/Match/Anjali.jpeg" alt="Match Day message from Anjali" loading="lazy" /></div>
        <div class="msp-shot-card reveal"><img src="/assets/Testimonials/Photos/Match/Ayra.jpeg" alt="Match Day message from Ayra" loading="lazy" /></div>
        <div class="msp-shot-card reveal"><img src="/assets/Testimonials/Photos/Match/Bardia.jpeg" alt="Match Day message from Bardia" loading="lazy" /></div>
        <div class="msp-shot-card reveal"><img src="/assets/Testimonials/Photos/Match/Hamna.jpeg" alt="Match Day message from Hamna" loading="lazy" /></div>
        <div class="msp-shot-card reveal"><img src="/assets/Testimonials/Photos/Match/Nancy.jpeg" alt="Match Day message from Nancy" loading="lazy" /></div>
        <div class="msp-shot-card reveal"><img src="/assets/Testimonials/Photos/Match/Okkes.jpeg" alt="Match Day message from Okkes" loading="lazy" /></div>
        <div class="msp-shot-card reveal"><img src="/assets/Testimonials/Photos/Match/Praneet.jpeg" alt="Match Day message from Praneet" loading="lazy" /></div>
        <div class="msp-shot-card reveal"><img src="/assets/Testimonials/Photos/Match/Rasmitha.jpeg" alt="Match Day message from Rasmitha" loading="lazy" /></div>
        <div class="msp-shot-card reveal"><img src="/assets/Testimonials/Photos/Match/Ravindra.jpeg" alt="Match Day message from Ravindra" loading="lazy" /></div>
        <div class="msp-shot-card reveal"><img src="/assets/Testimonials/Photos/Match/Shiv.jpeg" alt="Match Day message from Shiv" loading="lazy" /></div>
        <div class="msp-shot-card reveal"><img src="/assets/Testimonials/Photos/Match/SidNath.jpeg" alt="Match Day message from SidNath" loading="lazy" /></div>
        <div class="msp-shot-card reveal"><img src="/assets/Testimonials/Photos/Match/Sinmmer.jpeg" alt="Match Day message from Sinmmer" loading="lazy" /></div>
        <div class="msp-shot-card reveal"><img src="/assets/Testimonials/Photos/Match/Swathi.jpeg" alt="Match Day message from Swathi" loading="lazy" /></div>
        <div class="msp-shot-card reveal"><img src="/assets/Testimonials/Photos/Match/babitha.jpeg" alt="Match Day message from Babitha" loading="lazy" /></div>
      </div>
    </div>
  </section>

  <!-- ============== 7 · WHY USMLE WISE ============== -->
  <section class="lpx-section lpx-why" aria-labelledby="whyTitle">
    <div class="lpx-wrap">
      <div class="lpx-head reveal">
        <h2 id="whyTitle" class="lpx-h2">Why IMGs choose USMLE Wise</h2>
      </div>
      <div class="lpx-compare">
        <div class="lpx-comp lpx-comp--generic reveal">
          <h3>Generic prep companies</h3>
          <ul>
            <li><i data-lucide="x" width="17" height="17"></i> One-size-fits-all programs</li>
            <li><i data-lucide="x" width="17" height="17"></i> Limited mentorship</li>
            <li><i data-lucide="x" width="17" height="17"></i> Focus only on exams</li>
            <li><i data-lucide="x" width="17" height="17"></i> No long-term roadmap</li>
            <li><i data-lucide="x" width="17" height="17"></i> Generic advice</li>
          </ul>
        </div>
        <div class="lpx-comp lpx-comp--us reveal">
          <h3><img src="/assets/usmle-design-system/assets/emblem.svg" alt="" width="22" height="22" loading="lazy" decoding="async" /> USMLE Wise</h3>
          <ul>
            <li><i data-lucide="check" width="17" height="17"></i> Personalized IMG strategy</li>
            <li><i data-lucide="check" width="17" height="17"></i> Dedicated mentorship</li>
            <li><i data-lucide="check" width="17" height="17"></i> End-to-end Match support</li>
            <li><i data-lucide="check" width="17" height="17"></i> Application + interview guidance</li>
            <li><i data-lucide="check" width="17" height="17"></i> Real physician insights</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== 8 · FAQ ============== -->
  <section class="lpx-section lpx-faq" id="faq" aria-labelledby="faqTitle">
    <div class="lpx-wrap lpx-faq__grid">
      <div class="reveal">
        <h2 id="faqTitle" class="lpx-h2">Questions IMGs ask us first</h2>
        <p class="lpx-sub">Still unsure where you stand? The strategy call exists to answer exactly that.</p>
        <a class="btn btn--outline btn--lg lpx-faq__cta" href="#book">Book a Free Strategy Call</a>
      </div>
      <div class="accordion reveal">
        <div class="accordion__item">
          <button class="accordion__head" type="button">Can USMLE Wise help if I already failed an exam?</button>
          <div class="accordion__body">Yes. Many students come to us after setbacks. We help you rebuild a smarter strategy and improve your profile moving forward.</div>
        </div>
        <div class="accordion__item">
          <button class="accordion__head" type="button">Do you only help top-scoring students?</button>
          <div class="accordion__body">No. We work with IMGs at different stages and create a plan based on your current profile and goals.</div>
        </div>
        <div class="accordion__item">
          <button class="accordion__head" type="button">Can you help with interview preparation?</button>
          <div class="accordion__body">Yes. We provide mock interviews, feedback, and communication coaching to help you feel prepared.</div>
        </div>
        <div class="accordion__item">
          <button class="accordion__head" type="button">How do I know which services I need?</button>
          <div class="accordion__body">That's what the strategy call is for. We assess your situation and recommend the best next steps.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== 9 · FINAL CTA ============== -->
  <section class="lpx-section lpx-final" id="book">
    <div class="lpx-wrap">
      <div class="lpx-final__card reveal" aria-labelledby="finalTitle">
        <span class="msp-eyebrow msp-eyebrow--light">Get started</span>
        <h2 id="finalTitle" class="lpx-final__title">Your residency journey gets easier when you stop doing it alone.</h2>
        <p class="lpx-final__sub">Get expert guidance, a clear roadmap, and support from mentors who understand the IMG journey from the inside.</p>
        <div class="lpx-final__actions">
          <a class="btn btn--primary btn--xl" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Free Guidance Call</a>
          <a class="btn btn--outline btn--xl lpx-final__outline" href="https://web.whatsapp.com/send?phone=&amp;text=Hey%2C%20I%20have%20questions%20for%20USMLEWise" target="_blank" rel="noopener noreferrer">Text Us on WhatsApp</a>
        </div>
      </div>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
