<?php
$pageTitle = "USMLE Exam Coaching | USMLE Wise";
$pageDescription = "Live and recorded USMLE coaching for Step 1, Step 2 CK, and Step 3. Work one-on-one with mentors who scored 260-plus and know exactly what it takes to pass.";
$canonical = "https://usmlewise.com/coaching";
$bodyClass = "msp";
$stylesheets = [
    "/styles/coaching.css"
];
$scripts = [
    "/js/coaching.js"
];
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>
      <!-- ============== 1. HERO ============== -->
      <section class="msp-hero" aria-labelledby="heroTitle">
        <div class="msp-wrap msp-hero__grid">
          <div class="msp-hero__copy reveal">
            <h1 id="heroTitle" class="msp-h1">
              USMLE coaching from mentors who
              <em>scored 260+</em>
            </h1>
            <p class="msp-lede">
              Live and recorded coaching for Step 1, Step 2 CK, and Step 3,
              led by mentors who have been through it.
            </p>
            <div class="msp-cta-row">
              <a
                class="btn btn--primary btn--xl"
                href="https://team.manikmadaan.com/guidance-call/book"
                target="_blank"
                rel="noopener noreferrer"
                >Book A Free Guidance Call</a
              >
              <!-- Replace phone= with your WhatsApp number (country code, no + or spaces) -->
              <a
                class="btn btn--outline btn--xl"
                href="https://web.whatsapp.com/send?phone=19192015700&text=Hey%2C%20I%20have%20questions%20regarding%20Match%20Package%20%2F%20USMLE%20Wise"
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
                <img src="/assets/Photos/fotos-CCDMI3dfnIo-unsplash.jpg" alt="IMG physician working with a residency mentor" fetchpriority="high" decoding="async" />
              </picture>
            </div>
            <div class="msp-float-note" aria-hidden="true">
              <span class="msp-float-note__num">260<small>+</small></span>
              <span class="msp-float-note__label">Avg. mentor score</span>
              <span class="msp-float-note__sub"
                >Step 1 &middot; Step 2 CK &middot; Step 3</span
              >
            </div>
          </div>
        </div>

        <div class="msp-bar msp-wrap" aria-label="Track record">
          <div class="msp-bar__inner">
            <div class="msp-stat reveal">
              <b data-count="99.3" data-suffix="%" data-decimal="1">99.3%</b>
              <span>Pass rate</span>
            </div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal">
              <b data-count="17000" data-suffix="+" data-comma>17,000+</b>
              <span>Students trained</span>
            </div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal">
              <b data-count="100" data-suffix="%">100%</b>
              <span>Pass guarantee</span>
            </div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal">
              <b>20–40</b>
              <span>Point jumps on practice NBMEs</span>
            </div>
          </div>
        </div>
      </section>

      <!-- ============== 3. PROGRAMS ============== -->
      <section class="msp-section" id="services" aria-labelledby="servicesTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Programs</span>
            <h2 id="servicesTitle" class="msp-h2">
              Three programs, every stage of preparation
            </h2>
            <p class="msp-sub">
              Self-paced crash courses to live intensive coaching. Each program
              is built around a specific exam and learning style.
            </p>
          </div>

          <div class="msp-sva-list">

            <article class="msp-sva-row reveal">
              <div class="msp-sva-img" style="background-image: url('assets/Photos/national-cancer-institute-NFvdKIhxYlU-unsplash.webp');"></div>
              <div class="msp-sva-body">
                <span class="msp-sva-eyebrow">01 &middot; Recorded</span>
                <h3 class="msp-sva-title">Crash Course</h3>
                <div class="msp-sva-price">$200</div>
                <p class="msp-sva-desc">60 hours of recorded content per exam. A complete foundational overview of Step 1, Step 2 CK, or Step 3, self-paced and built to refresh before your exam date.</p>
                <div class="msp-sva-ctas">
                  <a href="https://team.manikmadaan.com/guidance-call/book" class="btn btn--primary btn--sm" target="_blank" rel="noopener noreferrer">Book a Call</a>
                  <a href="/step-1-high-yield-crash-course" class="btn btn--ghost btn--sm">Learn More <i data-lucide="arrow-right" width="14" height="14"></i></a>
                </div>
              </div>
            </article>

            <article class="msp-sva-row msp-sva-row--flip reveal">
              <div class="msp-sva-img" style="background-image: url('assets/Photos/fotos-CCDMI3dfnIo-unsplash.webp');"></div>
              <div class="msp-sva-body">
                <span class="msp-sva-eyebrow">02 &middot; Live</span>
                <h3 class="msp-sva-title">Mastery with First Aid</h3>
                <div class="msp-sva-price">$899</div>
                <p class="msp-sva-desc">Live, subject-by-subject Step 1 coaching built around First Aid. Your mentor shows you how to use the resource, not just read it, building retention that holds on exam day.</p>
                <div class="msp-sva-ctas">
                  <a href="https://team.manikmadaan.com/guidance-call/book" class="btn btn--primary btn--sm" target="_blank" rel="noopener noreferrer">Book a Call</a>
                  <a href="/coaching-step1-mastery" class="btn btn--ghost btn--sm">Learn More <i data-lucide="arrow-right" width="14" height="14"></i></a>
                </div>
              </div>
            </article>

            <article class="msp-sva-row reveal">
              <div class="msp-sva-img" style="background-image: url('assets/Photos/kaitlyn-baker-vZJdYl5JVXY-unsplash.webp');"></div>
              <div class="msp-sva-body">
                <span class="msp-sva-eyebrow">03 &middot; Live</span>
                <h3 class="msp-sva-title">NBME Live Coaching</h3>
                <div class="msp-sva-price">$2,500 &ndash; $3,000</div>
                <p class="msp-sva-desc">Full-syllabus live coaching with 260-plus-scoring mentors. Intensive and personalized, built for students who want the highest possible outcome on any USMLE exam.</p>
                <div class="msp-sva-ctas">
                  <a href="https://team.manikmadaan.com/guidance-call/book" class="btn btn--primary btn--sm" target="_blank" rel="noopener noreferrer">Book a Call</a>
                  <a href="/coaching-step23-mastery" class="btn btn--ghost btn--sm">Learn More <i data-lucide="arrow-right" width="14" height="14"></i></a>
                </div>
              </div>
            </article>

          </div>
        </div>
      </section>

      <!-- ============== 4. COMPARISON TABLE ============== -->
      <section class="msp-section cch-compare" aria-label="Program comparison">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Compare</span>
            <h2 class="msp-h2">Program comparison at a glance</h2>
          </div>
          <div class="msp-compare reveal">
            <table class="msp-compare__table" role="table">
              <thead>
                <tr>
                  <th class="msp-compare__feat-col" scope="col">Feature</th>
                  <th scope="col">
                    <span class="msp-compare__tier-name">Crash Course</span>
                    <span class="msp-compare__tier-price">$200</span>
                  </th>
                  <th scope="col">
                    <span class="msp-compare__tier-name">Mastery w/ First Aid</span>
                    <span class="msp-compare__tier-price">$899</span>
                  </th>
                  <th scope="col">
                    <span class="msp-compare__tier-name">NBME Classes</span>
                    <span class="msp-compare__tier-price">$2,500–$3,000</span>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Format</td>
                  <td>Recorded</td>
                  <td>Live</td>
                  <td>Live</td>
                </tr>
                <tr>
                  <td>Hours</td>
                  <td>60 hours</td>
                  <td>Full syllabus</td>
                  <td>Full syllabus</td>
                </tr>
                <tr>
                  <td>Exam</td>
                  <td>Step 1 / 2 CK / 3</td>
                  <td>Step 1</td>
                  <td>All Steps</td>
                </tr>
                <tr>
                  <td>Mentor score</td>
                  <td>Expert faculty</td>
                  <td>Expert faculty</td>
                  <td>260+ scorers</td>
                </tr>
                <tr>
                  <td>Flexibility</td>
                  <td>Self-paced</td>
                  <td>Scheduled</td>
                  <td>Scheduled</td>
                </tr>
                <tr>
                  <td>Ideal for</td>
                  <td>Foundation prep</td>
                  <td>FA-based deep dive</td>
                  <td>Elite score target</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>

      <!-- ============== 5. WHY IT WORKS ============== -->
      <section class="msp-why-a" aria-labelledby="whyATitle">
        <div class="msp-wrap">
          <div class="msp-why-a__head reveal">
            <span class="msp-eyebrow">Why it works</span>
            <h2 id="whyATitle" class="msp-h2">
              Most IMG services stop at exam prep. We start where they stop.
            </h2>
          </div>
          <div class="msp-why-a__img reveal">
            <picture>
              <source srcset="/assets/Photos/national-cancer-institute-NFvdKIhxYlU-unsplash.webp" type="image/webp">
              <img src="/assets/Photos/national-cancer-institute-NFvdKIhxYlU-unsplash.jpg" alt="Physician mentors guiding IMG students through the U.S. residency match process" loading="lazy" decoding="async" />
            </picture>
          </div>
          <div class="msp-why-a__cols">
            <div class="msp-wi reveal">
              <h3>Mentors who lived the IMG match</h3>
              <p>
                Our mentors matched as IMGs into competitive U.S. programs. They
                know which program directors value research, which overlook
                clinical gaps, and how to frame a timeline that looks
                unconventional on paper.
              </p>
            </div>
            <div class="msp-wi reveal">
              <h3>100% human, no AI</h3>
              <p>
                Every personal statement, CV edit, and strategy decision is made
                by a physician who knows your file. No templates, no generated
                text, no shortcuts.
              </p>
            </div>
            <div class="msp-wi reveal">
              <h3>One mentor, one plan, start to finish</h3>
              <p>
                No handoffs between services. Your mentor builds the strategy
                and sees it through: ERAS, interviews, ROL, and beyond Match
                Day.
              </p>
            </div>
            <div class="msp-wi reveal">
              <h3>Built for IMG profiles specifically</h3>
              <p>
                ECFMG, J-1 vs H-1B, clinical gaps, international transcripts: we
                address what AMG-focused services ignore entirely.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!--
      <div class="msp-opt-divider" aria-hidden="true"><span>Option B</span></div>

      <section class="msp-why-b" aria-labelledby="whyBTitle">
        <div class="msp-opt-tag" aria-hidden="true">Option B</div>
        <div class="msp-wrap">
          <div class="msp-why-b__top">
            <div class="msp-why-b__text reveal">
              <span class="msp-eyebrow">Why it works</span>
              <h2 id="whyBTitle" class="msp-h2">Most IMG services stop at exam prep. We start where they stop.</h2>
            </div>
            <div class="msp-why-b__img reveal">
              <picture>
                <source srcset="/assets/Photos/national-cancer-institute-NFvdKIhxYlU-unsplash.webp" type="image/webp">
                <img src="/assets/Photos/national-cancer-institute-NFvdKIhxYlU-unsplash.jpg" alt="Physician mentors guiding IMG students through the U.S. residency match process" loading="lazy" decoding="async" />
              </picture>
            </div>
          </div>
          <div class="msp-why-b__cols">
            <div class="msp-wi reveal">
              <h3>Mentors who lived the IMG match</h3>
              <p>Our mentors matched as IMGs into competitive U.S. programs. They know which program directors value research, which overlook clinical gaps, and how to frame a timeline that looks unconventional on paper.</p>
            </div>
            <div class="msp-wi reveal">
              <h3>100% human, no AI</h3>
              <p>Every personal statement, CV edit, and strategy decision is made by a physician who knows your file. No templates, no generated text, no shortcuts.</p>
            </div>
            <div class="msp-wi reveal">
              <h3>One mentor, one plan, start to finish</h3>
              <p>No handoffs between services. Your mentor builds the strategy and sees it through: ERAS, interviews, ROL, and beyond Match Day.</p>
            </div>
            <div class="msp-wi reveal">
              <h3>Built for IMG profiles specifically</h3>
              <p>ECFMG, J-1 vs H-1B, clinical gaps, international transcripts: we address what AMG-focused services ignore entirely.</p>
            </div>
          </div>
        </div>
      </section>

      <div class="msp-opt-divider" aria-hidden="true"><span>Option C</span></div>

      <section class="msp-why-c" aria-labelledby="whyCTitle">
        <div class="msp-opt-tag" aria-hidden="true">Option C</div>
        <div class="msp-wrap">
          <div class="msp-why-c__head reveal">
            <span class="msp-eyebrow">Why it works</span>
            <h2 id="whyCTitle" class="msp-h2">Most IMG services stop at exam prep. We start where they stop.</h2>
          </div>
          <div class="msp-why-c__img reveal">
            <picture>
              <source srcset="/assets/Photos/national-cancer-institute-NFvdKIhxYlU-unsplash.webp" type="image/webp">
              <img src="/assets/Photos/national-cancer-institute-NFvdKIhxYlU-unsplash.jpg" alt="Physician mentors guiding IMG students through the U.S. residency match process" loading="lazy" decoding="async" />
            </picture>
          </div>
          <div class="msp-why-c__cols">
            <div class="msp-wib reveal">
              <h3>Mentors who lived the IMG match</h3>
              <p>Our mentors matched as IMGs into competitive U.S. programs. They know which program directors value research, which overlook clinical gaps, and how to frame a timeline that looks unconventional on paper.</p>
            </div>
            <div class="msp-wib reveal">
              <h3>100% human, no AI</h3>
              <p>Every personal statement, CV edit, and strategy decision is made by a physician who knows your file. No templates, no generated text, no shortcuts.</p>
            </div>
            <div class="msp-wib reveal">
              <h3>One mentor, one plan, start to finish</h3>
              <p>No handoffs between services. Your mentor builds the strategy and sees it through: ERAS, interviews, ROL, and beyond Match Day.</p>
            </div>
            <div class="msp-wib reveal">
              <h3>Built for IMG profiles specifically</h3>
              <p>ECFMG, J-1 vs H-1B, clinical gaps, international transcripts: we address what AMG-focused services ignore entirely.</p>
            </div>
          </div>
        </div>
      </section>
      -->

      <!-- ============== 5. MENTORS ============== -->
      <!--
      <section
        class="msp-section msp-mentors"
        id="mentors"
        aria-labelledby="mentorsTitle"
      >
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Your mentors</span>
            <h2 id="mentorsTitle" class="msp-h2">
              Physicians who matched. Now helping you do the same.
            </h2>
          </div>
          <div class="msp-mentors__strip">
            <article class="msp-mentor reveal">
              <div class="msp-mentor__ava msp-mentor__ava--blue">DR</div>
              <div class="msp-mentor__info">
                <h3>Dr. David Reyes</h3>
                <span class="msp-mentor__spec">Internal Medicine</span>
                <span class="msp-mentor__prog">Johns Hopkins · PGY-3</span>
                <ul class="msp-mentor__creds">
                  <li>
                    <i data-lucide="trending-up" width="13" height="13"></i>
                    Step 2 CK: 261
                  </li>
                  <li>
                    <i data-lucide="file-text" width="13" height="13"></i> 4
                    peer-reviewed publications
                  </li>
                  <li>
                    <i data-lucide="users" width="13" height="13"></i> 60+ IMGs
                    mentored
                  </li>
                </ul>
              </div>
            </article>

            <article class="msp-mentor reveal">
              <div class="msp-mentor__ava msp-mentor__ava--red">AP</div>
              <div class="msp-mentor__info">
                <h3>Dr. Anaya Patel</h3>
                <span class="msp-mentor__spec">Psychiatry</span>
                <span class="msp-mentor__prog">NYU Langone · PGY-2</span>
                <ul class="msp-mentor__creds">
                  <li>
                    <i data-lucide="trending-up" width="13" height="13"></i>
                    Step 2 CK: 254
                  </li>
                  <li>
                    <i data-lucide="star" width="13" height="13"></i> ERAS
                    personal statement specialist
                  </li>
                  <li>
                    <i data-lucide="users" width="13" height="13"></i> 80+ IMGs
                    mentored
                  </li>
                </ul>
              </div>
            </article>

            <article class="msp-mentor reveal">
              <div class="msp-mentor__ava msp-mentor__ava--green">MC</div>
              <div class="msp-mentor__info">
                <h3>Dr. Marco Cruz</h3>
                <span class="msp-mentor__spec">Family Medicine</span>
                <span class="msp-mentor__prog">UCSF · PGY-2</span>
                <ul class="msp-mentor__creds">
                  <li>
                    <i data-lucide="trending-up" width="13" height="13"></i>
                    Step 2 CK: 249
                  </li>
                  <li>
                    <i data-lucide="map-pin" width="13" height="13"></i> IMG
                    match specialist, West Coast programs
                  </li>
                  <li>
                    <i data-lucide="users" width="13" height="13"></i> 45+ IMGs
                    mentored
                  </li>
                </ul>
              </div>
            </article>
          </div>
          <div class="msp-mentors__foot reveal">
            <a href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer" class="btn btn--outline"
              >Work with a mentor
              <i data-lucide="arrow-right" class="ic-arrow"></i
            ></a>
          </div>
        </div>
      </section>
      -->

      <!-- ============== 7. TESTIMONIALS ============== -->
      <section class="msp-stories" id="stories" aria-labelledby="storiesTitle">
        <div class="msp-wrap">
          <div class="msp-stories__head reveal">
            <span class="msp-eyebrow msp-eyebrow--light">Success stories</span>
            <h2 id="storiesTitle" class="msp-h2 msp-h2--invert">
              Real journeys from IMG to residency
            </h2>
          </div>

          <!-- Carousel -->
          <div class="msp-carousel" aria-label="Student testimonials">
            <!-- Slide 1: Rana A. -->
            <div
              class="msp-slide is-active"
              role="group"
              aria-label="Story 1 of 5"
            >
              <button
                class="msp-video-trigger"
                data-ytid="F8E7lTvGKRU"
                aria-label="Watch Rana's match story video"
              >
                <img
                  src="https://img.youtube.com/vi/F8E7lTvGKRU/maxresdefault.jpg"
                  alt="Rana shares how she matched Internal Medicine at a top-20 program without U.S. clinical experience"
                  class="msp-video-trigger__thumb" loading="lazy" decoding="async" />
                <span class="msp-video-trigger__play" aria-hidden="true">
                  <svg
                    width="72"
                    height="72"
                    viewBox="0 0 72 72"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="36"
                      cy="36"
                      r="36"
                      fill="rgba(255,255,255,0.12)"
                    />
                    <circle
                      cx="36"
                      cy="36"
                      r="30"
                      fill="rgba(255,255,255,0.92)"
                    />
                    <path d="M31 26l20 10-20 10V26z" fill="#1a3a7a" />
                  </svg>
                </span>
              </button>
              <div class="msp-slide__content">
                <p class="msp-story-feature__outcome">
                  Matched University of Illinois, Peoria
                </p>
                <blockquote class="msp-story-feature__quote">
                  <p>
                    I knew I wasn't a natural speaker and needed help making my
                    answers stand out. Dr. Madan's course and our one-on-one
                    sessions gave me the tools to personalize my responses for
                    each interviewer. I walked into every interview with a
                    confidence I simply didn't have before.
                  </p>
                  <footer class="msp-story-feature__attr">
                    <cite class="msp-story-feature__cite">
                      <span>Dr. Lakshitha</span>
                      <span>University of Illinois, Peoria</span>
                    </cite>
                  </footer>
                </blockquote>
              </div>
            </div>

            <!-- Slide 2: Dr. Shreya Sriram -->
            <div
              class="msp-slide"
              role="group"
              aria-label="Story 2 of 5"
              aria-hidden="true"
            >
              <button
                class="msp-video-trigger"
                data-ytid="O4Gns55Brh0"
                aria-label="Watch Dr. Shreya Sriram's match story video"
              >
                <img
                  src="https://img.youtube.com/vi/O4Gns55Brh0/maxresdefault.jpg"
                  alt="Dr. Shreya Sriram shares how she matched Family Medicine at SIU Carbondale"
                  class="msp-video-trigger__thumb" loading="lazy" decoding="async" />
                <span class="msp-video-trigger__play" aria-hidden="true">
                  <svg
                    width="72"
                    height="72"
                    viewBox="0 0 72 72"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="36"
                      cy="36"
                      r="36"
                      fill="rgba(255,255,255,0.12)"
                    />
                    <circle
                      cx="36"
                      cy="36"
                      r="30"
                      fill="rgba(255,255,255,0.92)"
                    />
                    <path d="M31 26l20 10-20 10V26z" fill="#1a3a7a" />
                  </svg>
                </span>
              </button>
              <div class="msp-slide__content">
                <p class="msp-story-feature__outcome">
                  Matched SIU Carbondale &middot; Family Medicine
                </p>
                <blockquote class="msp-story-feature__quote">
                  <p>
                    I didn't match in the main cycle, didn't match in SOAP, and
                    was financially stretched. But I kept applying every day on
                    Dr. Madan's advice. I flew across the country for an
                    in-person interview at a remote program just to show my
                    commitment. That persistence, and having the right guidance,
                    is what got me here.
                  </p>
                  <footer class="msp-story-feature__attr">
                    <cite class="msp-story-feature__cite">
                      <span>Dr. Shreya Sriram</span>
                      <span>SIU Carbondale &middot; Family Medicine</span>
                    </cite>
                  </footer>
                </blockquote>
              </div>
            </div>

            <!-- Slide 3: Dr. Hamit C. -->
            <div
              class="msp-slide"
              role="group"
              aria-label="Story 3 of 5"
              aria-hidden="true"
            >
              <button
                class="msp-video-trigger"
                data-ytid="ZynxmljOZDA"
                aria-label="Watch Dr. Hamit C.'s match story video"
              >
                <img
                  src="https://img.youtube.com/vi/ZynxmljOZDA/maxresdefault.jpg"
                  alt="Dr. Hamit C. shares how he matched at UPMC, PA"
                  class="msp-video-trigger__thumb" loading="lazy" decoding="async" />
                <span class="msp-video-trigger__play" aria-hidden="true">
                  <svg
                    width="72"
                    height="72"
                    viewBox="0 0 72 72"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="36"
                      cy="36"
                      r="36"
                      fill="rgba(255,255,255,0.12)"
                    />
                    <circle
                      cx="36"
                      cy="36"
                      r="30"
                      fill="rgba(255,255,255,0.92)"
                    />
                    <path d="M31 26l20 10-20 10V26z" fill="#1a3a7a" />
                  </svg>
                </span>
              </button>
              <div class="msp-slide__content">
                <p class="msp-story-feature__outcome">
                  Matched UPMC &middot; Pennsylvania
                </p>
                <blockquote class="msp-story-feature__quote">
                  <p>
                    I had everything ready: personal statement, LORs, a solid
                    program list. But I knew those only get you the interview.
                    I've seen applicants with 11 interviews who still didn't
                    match. Dr. Madan's course prepares you for the dynamic,
                    unexpected side of residency interviews, not just the
                    rehearsed answers.
                  </p>
                  <footer class="msp-story-feature__attr">
                    <cite class="msp-story-feature__cite">
                      <span>Dr. Hamit C.</span>
                      <span>UPMC &middot; Pennsylvania</span>
                    </cite>
                  </footer>
                </blockquote>
              </div>
            </div>

            <!-- Slide 4: Dr. Yash -->
            <div
              class="msp-slide"
              role="group"
              aria-label="Story 4 of 5"
              aria-hidden="true"
            >
              <button
                class="msp-video-trigger"
                data-ytid="IEphKQwawzA"
                aria-label="Watch Dr. Yash's match story video"
              >
                <img
                  src="https://img.youtube.com/vi/IEphKQwawzA/maxresdefault.jpg"
                  alt="Dr. Yash shares how he matched in Los Angeles"
                  class="msp-video-trigger__thumb" loading="lazy" decoding="async" />
                <span class="msp-video-trigger__play" aria-hidden="true">
                  <svg
                    width="72"
                    height="72"
                    viewBox="0 0 72 72"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="36"
                      cy="36"
                      r="36"
                      fill="rgba(255,255,255,0.12)"
                    />
                    <circle
                      cx="36"
                      cy="36"
                      r="30"
                      fill="rgba(255,255,255,0.92)"
                    />
                    <path d="M31 26l20 10-20 10V26z" fill="#1a3a7a" />
                  </svg>
                </span>
              </button>
              <div class="msp-slide__content">
                <p class="msp-story-feature__outcome">
                  Matched Los Angeles &middot; California
                </p>
                <blockquote class="msp-story-feature__quote">
                  <p>
                    This was my first time applying and I had no idea what to
                    expect from the interview process. I came to Dr. Madan with
                    so many questions, and he answered every single one with
                    patience. That guidance made all the difference when it
                    mattered most.
                  </p>
                  <footer class="msp-story-feature__attr">
                    <cite class="msp-story-feature__cite">
                      <span>Dr. Yash</span>
                      <span>Los Angeles &middot; California</span>
                    </cite>
                  </footer>
                </blockquote>
              </div>
            </div>

            <!-- Slide 5: Dr. Srishti Shankar -->
            <div
              class="msp-slide"
              role="group"
              aria-label="Story 5 of 5"
              aria-hidden="true"
            >
              <button
                class="msp-video-trigger"
                data-ytid="2pGb5xiKzdw"
                aria-label="Watch Dr. Srishti Shankar's match story video"
              >
                <img
                  src="https://img.youtube.com/vi/2pGb5xiKzdw/maxresdefault.jpg"
                  alt="Dr. Srishti Shankar shares how she matched at St. Vincent, MA"
                  class="msp-video-trigger__thumb" loading="lazy" decoding="async" />
                <span class="msp-video-trigger__play" aria-hidden="true">
                  <svg
                    width="72"
                    height="72"
                    viewBox="0 0 72 72"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="36"
                      cy="36"
                      r="36"
                      fill="rgba(255,255,255,0.12)"
                    />
                    <circle
                      cx="36"
                      cy="36"
                      r="30"
                      fill="rgba(255,255,255,0.92)"
                    />
                    <path d="M31 26l20 10-20 10V26z" fill="#1a3a7a" />
                  </svg>
                </span>
              </button>
              <div class="msp-slide__content">
                <p class="msp-story-feature__outcome">
                  Matched St. Vincent &middot; Massachusetts
                </p>
                <blockquote class="msp-story-feature__quote">
                  <p></p>
                  <footer class="msp-story-feature__attr">
                    <cite class="msp-story-feature__cite">
                      <span>Dr. Srishti Shankar</span>
                      <span>St. Vincent &middot; Massachusetts</span>
                    </cite>
                  </footer>
                </blockquote>
              </div>
            </div>
          </div>

          <!-- Carousel nav -->
          <div class="msp-carousel__nav">
            <button
              class="msp-carousel__btn"
              id="prevSlide"
              aria-label="Previous story"
            >
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path
                  d="M11 3.5L6 9l5 5.5"
                  stroke="currentColor"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </button>
            <span class="msp-carousel__count" id="slideCount" aria-live="polite"
              >1 / 5</span
            >
            <button
              class="msp-carousel__btn"
              id="nextSlide"
              aria-label="Next story"
            >
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path
                  d="M7 3.5L12 9l-5 5.5"
                  stroke="currentColor"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </button>
          </div>
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
              Questions IMGs ask before starting
            </h2>
            <p class="msp-sub">
              Still unsure? The guidance call is free and addresses these
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
                When should I start working with a match mentor?
              </button>
              <div class="accordion__body">
                Ideally 6 to 12 months before ERAS opens in September. That
                gives time to address gaps, strengthen your application, and
                prepare for interviews without rushing. If you are closer to the
                cycle, we can still build an effective plan; the strategy just
                looks different.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Can you help if my Step scores are below average?
              </button>
              <div class="accordion__body">
                Yes. A below-average score is one data point in a complete
                profile. We help you identify programs where your overall
                application is competitive, strengthen the parts you can
                control, and write a personal statement that addresses your
                timeline honestly and confidently.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Do you help with specialty selection, or only applications?
              </button>
              <div class="accordion__body">
                Both. Specialty selection is often where the Match is won or
                lost. We assess your competitiveness across the specialties you
                are considering and help you make a realistic decision before
                committing to a program list.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                What if I do not match in the main cycle?
              </button>
              <div class="accordion__body">
                We walk through SOAP with you in real time. If you do not match,
                we immediately pivot to scramble strategy: identifying open
                positions in your specialty and helping you submit supplemental
                applications quickly and correctly.
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
                href="mailto:arcadecontentsolutions@gmail.com?subject=Match%20Discovery%20Call"
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

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
