<?php
$pageTitle = "Research Guidance | USMLE Wise";
$pageDescription = "Build the academic profile your residency application needs. Research opportunity matching, publication strategy, and application integration for IMGs.";
$canonical = "https://usmlewise.com/research";
$bodyClass = "msp";
$stylesheets = [
    "/styles/research.css"
];
$scripts = [
    "/js/research.js"
];
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>
      <!-- ============== 1. HERO ============== -->
      <section class="msp-hero" aria-labelledby="heroTitle">
        <div class="msp-wrap msp-hero__grid">
          <div class="msp-hero__copy reveal">
            <h1 id="heroTitle" class="msp-h1">
              Build the research profile
              <span class="msp-h1__accent">that gets you noticed.</span>
            </h1>
            <p class="msp-lede">
              Research is one of the most misunderstood parts of the IMG
              application. We help you find the right opportunities, get
              published, and translate your work into application strength.
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
                href="https://web.whatsapp.com/send?phone=19192015700&text=Hey%2C%20I%20have%20questions%20about%20Research%20Guidance%20%2F%20USMLE%20Wise"
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
                <source srcset="/assets/Photos/doctors-day-cute-young-handsome-man-lab-coat-glasses-writing-notebook.webp" type="image/webp">
                <img src="/assets/Photos/doctors-day-cute-young-handsome-man-lab-coat-glasses-writing-notebook.jpg" alt="Physician in lab coat writing in a notebook" fetchpriority="high" decoding="async" />
              </picture>
            </div>
            <div class="msp-float-note" aria-hidden="true">
              <span class="msp-float-note__num">95<small>%</small></span>
              <span class="msp-float-note__label">Match rate</span>
              <span class="msp-float-note__sub"
                >340+ students &middot; 4.9 rating</span
              >
            </div>
          </div>
        </div>

        <div class="msp-bar msp-wrap" aria-label="Track record">
          <div class="msp-bar__inner">
            <div class="msp-stat reveal">
              <b data-count="250" data-suffix="+">250+</b>
              <span>Students &amp; professionals guided</span>
            </div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal">
              <b data-count="75" data-suffix="+">75+</b>
              <span>Publications &amp; presentations</span>
            </div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal">
              <b data-count="150" data-suffix="+">150+</b>
              <span>Research projects mentored</span>
            </div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal">
              <b data-count="16" data-suffix="+">16+</b>
              <span>Countries represented</span>
            </div>
          </div>
        </div>
      </section>

      <!-- ============== 1B. WHY RESEARCH ============== -->
      <section class="msp-section msp-why-r" aria-labelledby="whyRTitle">
        <div class="msp-wrap">
          <div class="msp-why-r__inner">
            <div class="msp-why-r__copy reveal">
              <span class="msp-eyebrow">Why research</span>
              <h2 id="whyRTitle" class="msp-h2">Scores get you in the pile. Research gets you out of it.</h2>
              <p class="msp-why-r__body">Program directors spend 90 seconds on most applications. Scores confirm you belong. Research tells them who you are.</p>
            </div>
            <div class="msp-why-r__grid">
              <div class="msp-why-r__card reveal">
                <div class="msp-why-r__icon"><i data-lucide="brain" width="20" height="20"></i></div>
                <h3>How you think</h3>
                <p>Research shows reasoning. Scores show knowledge. Programs want both.</p>
              </div>
              <div class="msp-why-r__card reveal">
                <div class="msp-why-r__icon"><i data-lucide="file-check-2" width="20" height="20"></i></div>
                <h3>Initiative, documented</h3>
                <p>Starting and finishing a paper is evidence. Not a claim.</p>
              </div>
              <div class="msp-why-r__card reveal">
                <div class="msp-why-r__icon"><i data-lucide="message-circle" width="20" height="20"></i></div>
                <h3>Built-in interview material</h3>
                <p>Every publication becomes a conversation you're prepared for.</p>
              </div>
              <div class="msp-why-r__card reveal">
                <div class="msp-why-r__icon"><i data-lucide="trending-up" width="20" height="20"></i></div>
                <h3>A credential that compounds</h3>
                <p>The first paper is the hardest. After that, you have a track record.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============== 2. PRODUCTS ============== -->
      <section
        class="msp-section msp-products"
        id="services"
        aria-labelledby="servicesTitle"
      >
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">What We Offer</span>
            <h2 id="servicesTitle" class="msp-h2">
              Our four research programs
            </h2>
            <p class="msp-sub">
              From a $19 recorded foundation to a full 12-month publication
              pathway. Choose the level that fits your timeline and goals.
            </p>
          </div>

          <!--
          <div class="msp-bento reveal">

            <article
              class="msp-bento__card msp-bento__card--hero"
              style="background-image: url('assets/Photos/fotos-CCDMI3dfnIo-unsplash.webp');"
            >
              <div class="msp-bento__inner">
                <span class="msp-bento__format">Live &middot; 12-month program</span>
                <h3 class="msp-bento__name">Research Catalyst</h3>
                <div class="msp-bento__price">$3,500</div>
                <p class="msp-bento__desc">
                  A fully guided 12-month pathway from zero to publication.
                  Topic selection, study design, writing, and journal
                  submission, all with your mentor.
                </p>
                <a class="btn btn--primary btn--sm" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Call</a>
              </div>
            </article>

            <article class="msp-bento__card" style="background-image: url('assets/Photos/surface-XHSYzoIC_SM-unsplash.webp');">
              <div class="msp-bento__inner">
                <span class="msp-bento__format">Live</span>
                <h3 class="msp-bento__name">Original Research</h3>
                <div class="msp-bento__price">$499</div>
                <p class="msp-bento__desc">Case report or original study with full mentor guidance through publication.</p>
                <a class="btn btn--outline btn--sm" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Call</a>
              </div>
            </article>

            <article class="msp-bento__card" style="background-image: url('assets/Photos/doctors-day-cute-young-handsome-man-lab-coat-glasses-writing-notebook.webp');">
              <div class="msp-bento__inner">
                <span class="msp-bento__format">Live</span>
                <h3 class="msp-bento__name">Systematic Review / Meta-Analysis</h3>
                <div class="msp-bento__price">$199</div>
                <p class="msp-bento__desc">Mentor-guided systematic review or meta-analysis. A credible, rigorous first publication for your CV.</p>
                <a class="btn btn--outline btn--sm" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Call</a>
              </div>
            </article>

            <article class="msp-bento__card" style="background-image: url('assets/Photos/team-young-specialist-doctors-standing-corridor-hospital.webp');">
              <div class="msp-bento__inner">
                <span class="msp-bento__format">Recorded &middot; Self-paced</span>
                <h3 class="msp-bento__name">Research Masterclass</h3>
                <div class="msp-bento__price">$19</div>
                <p class="msp-bento__desc">Research fundamentals for medical graduates. The right starting point before working with a mentor.</p>
                <a class="btn btn--outline btn--sm" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Call</a>
              </div>
            </article>

          </div>

          <div class="msp-bento msp-bento--plain reveal">

            <article class="msp-bento__card msp-bento__card--hero">
              <div class="msp-bento__inner">
                <span class="msp-bento__format">Live &middot; 12-month program</span>
                <h3 class="msp-bento__name">Research Catalyst</h3>
                <div class="msp-bento__price">$3,500</div>
                <p class="msp-bento__desc">A fully guided 12-month pathway from zero to publication. Topic selection, study design, writing, and journal submission, all with your mentor.</p>
                <a class="btn btn--primary btn--sm" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Call</a>
              </div>
            </article>

            <article class="msp-bento__card">
              <div class="msp-bento__inner">
                <span class="msp-bento__format">Live</span>
                <h3 class="msp-bento__name">Original Research</h3>
                <div class="msp-bento__price">$499</div>
                <p class="msp-bento__desc">Case report or original study with full mentor guidance through publication.</p>
                <a class="btn btn--outline btn--sm" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Call</a>
              </div>
            </article>

            <article class="msp-bento__card">
              <div class="msp-bento__inner">
                <span class="msp-bento__format">Live</span>
                <h3 class="msp-bento__name">Systematic Review / Meta-Analysis</h3>
                <div class="msp-bento__price">$199</div>
                <p class="msp-bento__desc">Mentor-guided systematic review or meta-analysis. A credible, rigorous first publication for your CV.</p>
                <a class="btn btn--outline btn--sm" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Call</a>
              </div>
            </article>

            <article class="msp-bento__card">
              <div class="msp-bento__inner">
                <span class="msp-bento__format">Recorded &middot; Self-paced</span>
                <h3 class="msp-bento__name">Research Masterclass</h3>
                <div class="msp-bento__price">$19</div>
                <p class="msp-bento__desc">Research fundamentals for medical graduates. The right starting point before working with a mentor.</p>
                <a class="btn btn--outline btn--sm" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Call</a>
              </div>
            </article>

          </div>
          -->

          <!-- Option C: Alternating editorial rows -->
          <div class="msp-sva-list">

            <article class="msp-sva-row reveal">
              <div class="msp-sva-img" style="background-image: url('assets/Photos/dan-dimmock-3mt71MKGjQ0-unsplash-(1).webp');"></div>
              <div class="msp-sva-body">
                <span class="msp-sva-eyebrow">01 &middot; Live &middot; 12-month program</span>
                <h3 class="msp-sva-title">Research Catalyst</h3>
                <div class="msp-sva-price">$3,500</div>
                <p class="msp-sva-desc">A fully guided 12-month pathway from zero to publication. Topic selection, study design, writing, and journal submission, all with your mentor.</p>
                <div class="msp-sva-ctas">
                  <a href="https://team.manikmadaan.com/guidance-call/book" class="btn btn--primary btn--sm" target="_blank" rel="noopener noreferrer">Book a Call</a>
                  <a href="/research-catalyst" class="btn btn--ghost btn--sm">Learn More <i data-lucide="arrow-right" width="14" height="14"></i></a>
                </div>
              </div>
            </article>

            <article class="msp-sva-row msp-sva-row--flip reveal">
              <div class="msp-sva-img" style="background-image: url('assets/Photos/surface-XHSYzoIC_SM-unsplash.webp');"></div>
              <div class="msp-sva-body">
                <span class="msp-sva-eyebrow">02 &middot; Live</span>
                <h3 class="msp-sva-title">Original Research</h3>
                <div class="msp-sva-price">$499</div>
                <p class="msp-sva-desc">Case report or original study with full mentor guidance through publication. Ideal for adding a first-author credit to your CV.</p>
                <div class="msp-sva-ctas">
                  <a href="https://team.manikmadaan.com/guidance-call/book" class="btn btn--primary btn--sm" target="_blank" rel="noopener noreferrer">Book a Call</a>
                  <a href="/research-original" class="btn btn--ghost btn--sm">Learn More <i data-lucide="arrow-right" width="14" height="14"></i></a>
                </div>
              </div>
            </article>

            <article class="msp-sva-row reveal">
              <div class="msp-sva-img" style="background-image: url('assets/Photos/pexels-tara-winstead-7722791.webp');"></div>
              <div class="msp-sva-body">
                <span class="msp-sva-eyebrow">03 &middot; Live</span>
                <h3 class="msp-sva-title">Systematic Review / Meta-Analysis</h3>
                <div class="msp-sva-price">$199</div>
                <p class="msp-sva-desc">A mentor-guided systematic review or meta-analysis: a rigorous, credible first publication for your CV.</p>
                <div class="msp-sva-ctas">
                  <a href="https://team.manikmadaan.com/guidance-call/book" class="btn btn--primary btn--sm" target="_blank" rel="noopener noreferrer">Book a Call</a>
                  <a href="/research-review" class="btn btn--ghost btn--sm">Learn More <i data-lucide="arrow-right" width="14" height="14"></i></a>
                </div>
              </div>
            </article>

            <article class="msp-sva-row msp-sva-row--flip reveal">
              <div class="msp-sva-img" style="background-image: url('assets/Photos/researcher-in-lab-computer.webp'); background-position: right center;"></div>
              <div class="msp-sva-body">
                <span class="msp-sva-eyebrow">04 &middot; Recorded &middot; Self-paced</span>
                <h3 class="msp-sva-title">Research Masterclass</h3>
                <div class="msp-sva-price">$19</div>
                <p class="msp-sva-desc">Research fundamentals for medical graduates. The right starting point before working with a mentor.</p>
                <div class="msp-sva-ctas">
                  <a href="https://team.manikmadaan.com/guidance-call/book" class="btn btn--primary btn--sm" target="_blank" rel="noopener noreferrer">Book a Call</a>
                  <a href="/research-masterclass" class="btn btn--ghost btn--sm">Learn More <i data-lucide="arrow-right" width="14" height="14"></i></a>
                </div>
              </div>
            </article>

          </div>
        </div>
      </section>

      <!-- ============== 3. PROCESS ============== -->
      <section
        class="msp-section msp-process"
        id="process"
        aria-labelledby="processTitle"
      >
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">How it works</span>
            <h2 id="processTitle" class="msp-h2">
              Six stages from assessment to publication
            </h2>
          </div>

          <div class="msp-steps-b">

            <div class="msp-step-b">
              <div class="msp-step-b__content msp-step-b__content--l">
                <span class="msp-step-b__label">Stage 01</span>
                <h3>Research Assessment</h3>
                <p>Evaluate your academic background, specialty interests, and residency goals to create a personalized research roadmap.</p>
              </div>
              <div class="msp-step-b__node"><span class="msp-step-b__dot"></span></div>
              <div class="msp-step-b__content msp-step-b__content--r"></div>
            </div>

            <div class="msp-step-b">
              <div class="msp-step-b__content msp-step-b__content--l"></div>
              <div class="msp-step-b__node"><span class="msp-step-b__dot"></span></div>
              <div class="msp-step-b__content msp-step-b__content--r">
                <span class="msp-step-b__label">Stage 02</span>
                <h3>Topic Selection</h3>
                <p>Identify impactful and feasible research projects aligned with your target specialty and career objectives.</p>
              </div>
            </div>

            <div class="msp-step-b">
              <div class="msp-step-b__content msp-step-b__content--l">
                <span class="msp-step-b__label">Stage 03</span>
                <h3>Project Execution</h3>
                <p>Work alongside mentors to conduct research, analyze data, and contribute meaningfully to the project.</p>
              </div>
              <div class="msp-step-b__node"><span class="msp-step-b__dot"></span></div>
              <div class="msp-step-b__content msp-step-b__content--r"></div>
            </div>

            <div class="msp-step-b">
              <div class="msp-step-b__content msp-step-b__content--l"></div>
              <div class="msp-step-b__node"><span class="msp-step-b__dot"></span></div>
              <div class="msp-step-b__content msp-step-b__content--r">
                <span class="msp-step-b__label">Stage 04</span>
                <h3>Manuscript Preparation</h3>
                <p>Develop a publication-ready manuscript with structured writing, revisions, and mentor feedback.</p>
              </div>
            </div>

            <div class="msp-step-b">
              <div class="msp-step-b__content msp-step-b__content--l">
                <span class="msp-step-b__label">Stage 05</span>
                <h3>Submission &amp; Publication</h3>
                <p>Receive guidance through journal selection, submission, reviewer responses, and the publication process.</p>
              </div>
              <div class="msp-step-b__node"><span class="msp-step-b__dot"></span></div>
              <div class="msp-step-b__content msp-step-b__content--r"></div>
            </div>

          </div>

        </div>
      </section>

      <!-- ============== 4. MENTORS ============== -->
      <section
        class="msp-section msp-mentors"
        id="mentors"
        aria-labelledby="mentorsTitle"
      >
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Our experts</span>
            <h2 id="mentorsTitle" class="msp-h2">
              Physicians who publish. Now helping you do the same.
            </h2>
          </div>
          <div class="msp-mtr-list-e">

            <article class="msp-mtr-e reveal">
              <div class="msp-mtr-e__photo">
                <img src="/assets/Photos/Team-Members/Kaushik-Sreeram.webp" alt="Kaushik Sreeram" loading="lazy" decoding="async" />
              </div>
              <div class="msp-mtr-e__body">
                <div class="msp-mtr-e__header">
                  <span class="msp-mtr-e__role">Research Head</span>
                  <h3 class="msp-mtr-e__name">Dr. Kaushik Sreerama Reddy, MBBS</h3>
                  <span class="msp-mtr-e__prog">Chief Scientific Officer &amp; CRIST Project Lead · USMLE Wise Research</span>
                </div>
                <ul class="msp-mtr-e__creds">
                  <li>Chief Scientific Officer &amp; CRIST Project Lead, USMLE Wise Research</li>
                  <li>Lead Investigator, Myositis Clinical Trials Consortium</li>
                  <li>Study Lead, MyPACER Study</li>
                </ul>
              </div>
            </article>

            <article class="msp-mtr-e reveal">
              <div class="msp-mtr-e__photo">
                <img src="/assets/Photos/Team-Members/Barakat-Photo.jpeg" alt="Muhammad Ahmad Barakat" loading="lazy" decoding="async" />
              </div>
              <div class="msp-mtr-e__body">
                <div class="msp-mtr-e__header">
                  <span class="msp-mtr-e__role">Research Mentor</span>
                  <h3 class="msp-mtr-e__name">Muhammad Ahmad Barakat</h3>
                  <span class="msp-mtr-e__prog">Medical Student, Caucasus International University</span>
                </div>
                <ul class="msp-mtr-e__creds">
                  <li>6 published papers &middot; 2 conference papers &middot; 7 co-author posters</li>
                  <li>160+ students guided to publication across SRA &amp; MEDMARK programs</li>
                  <li>APA PsychSIGN International Student Liaison Research Chair 2026&ndash;2027</li>
                </ul>
              </div>
            </article>

            <?php /* Meghana card — commented out until ready
            <article class="msp-mtr-e reveal">
              <div class="msp-mtr-e__photo">
                <img src="/assets/Photos/Team-Members/Meghana.jpeg" alt="Meghana" loading="lazy" decoding="async" />
              </div>
              <div class="msp-mtr-e__body">
                <div class="msp-mtr-e__header">
                  <span class="msp-mtr-e__role">Research Mentor</span>
                  <h3 class="msp-mtr-e__name">Meghana</h3>
                  <span class="msp-mtr-e__prog">Research &amp; Publications Mentor</span>
                </div>
                <ul class="msp-mtr-e__creds">
                  <li>Placeholder credential — please update</li>
                  <li>Placeholder credential — please update</li>
                  <li>Placeholder credential — please update</li>
                </ul>
              </div>
            </article>
            */ ?>

            <article class="msp-mtr-e reveal">
              <div class="msp-mtr-e__photo">
                <img src="/assets/Photos/Team-Members/shivani.jpeg" alt="Shivani Ravipati" loading="lazy" decoding="async" />
              </div>
              <div class="msp-mtr-e__body">
                <div class="msp-mtr-e__header">
                  <span class="msp-mtr-e__role">Research Mentor</span>
                  <h3 class="msp-mtr-e__name">Shivani Ravipati</h3>
                  <span class="msp-mtr-e__prog">Research &amp; Publications Mentor</span>
                </div>
                <ul class="msp-mtr-e__creds">
                  <li>5 first-author publications &middot; 1 AHA poster presentation &middot; 8+ co-authored papers</li>
                  <li>IRB-approved clinical trial lead for PRP research</li>
                  <li>Actively guiding IMGs through research, steps and ERAS applications</li>
                </ul>
              </div>
            </article>

          </div>


        </div>
      </section>

      <!-- ============== 5. PUBLISHED RESEARCH ============== -->
      <?php /* Published work section — commented out until ready */ ?>
      <?php if (false): ?>
      <section class="msp-section msp-pub-section" id="publications" aria-labelledby="pubTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Published work</span>
            <h2 id="pubTitle" class="msp-h2">Research we've helped bring to print.</h2>
            <p class="msp-sub">A sample of publications from students in our programs.</p>
          </div>

          <div class="msp-pub-stack">

            <article class="msp-pub-feat reveal">
              <div class="msp-pub-feat__top">
                <span class="msp-pub-chip msp-pub-chip--blue">Original Research</span>
                <span class="msp-pub-feat__year">2024</span>
              </div>
              <h3 class="msp-pub-feat__title">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.
              </h3>
              <p class="msp-pub-feat__abstract">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
              <div class="msp-pub-feat__byline">
                <div class="msp-pub-feat__journal">Journal of General Internal Medicine</div>
                <div class="msp-pub-feat__authors">
                  Lorem I. Ipsum, Dolor S. Amet, Consectetur A.
                  <span class="msp-pub-credit">USMLE Wise student · First author</span>
                </div>
              </div>
            </article>

            <article class="msp-pub-feat reveal">
              <div class="msp-pub-feat__top">
                <span class="msp-pub-chip msp-pub-chip--blue">Case Report</span>
                <span class="msp-pub-feat__year">2024</span>
              </div>
              <h3 class="msp-pub-feat__title">
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
              </h3>
              <p class="msp-pub-feat__abstract">
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <div class="msp-pub-feat__byline">
                <div class="msp-pub-feat__journal">Cureus</div>
                <div class="msp-pub-feat__authors">
                  Duis A. Irure, Dolor R. Voluptate
                  <span class="msp-pub-credit">USMLE Wise student · First author</span>
                </div>
              </div>
            </article>

            <article class="msp-pub-feat reveal">
              <div class="msp-pub-feat__top">
                <span class="msp-pub-chip msp-pub-chip--blue">Review Article</span>
                <span class="msp-pub-feat__year">2023</span>
              </div>
              <h3 class="msp-pub-feat__title">
                Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia.
              </h3>
              <p class="msp-pub-feat__abstract">
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam.
              </p>
              <div class="msp-pub-feat__byline">
                <div class="msp-pub-feat__journal">BMJ Open</div>
                <div class="msp-pub-feat__authors">
                  Excepteur S. Occaecat, Cupidatat N. Proident
                  <span class="msp-pub-credit">USMLE Wise student · First author</span>
                </div>
              </div>
            </article>

            <article class="msp-pub-feat reveal">
              <div class="msp-pub-feat__top">
                <span class="msp-pub-chip msp-pub-chip--blue">Original Research</span>
                <span class="msp-pub-feat__year">2023</span>
              </div>
              <h3 class="msp-pub-feat__title">
                At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis praesentium.
              </h3>
              <p class="msp-pub-feat__abstract">
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.
              </p>
              <div class="msp-pub-feat__byline">
                <div class="msp-pub-feat__journal">American Journal of Medicine</div>
                <div class="msp-pub-feat__authors">
                  Vero E. Accusamus, Iusto O. Dignissimos
                  <span class="msp-pub-credit">USMLE Wise student · First author</span>
                </div>
              </div>
            </article>

          </div>
        </div>
      </section>
      <?php endif; ?>

      <!-- ============== 6. SOCIAL PROOF ============== -->
      <!-- TODO: add 2–3 student testimonial quotes once copy is ready -->



      <!-- ============== 6. FAQ ============== -->
      <section class="msp-section msp-faq" id="faq" aria-labelledby="faqTitle">
        <div class="msp-wrap msp-faq__grid">
          <div class="reveal">
            <span class="msp-eyebrow">F.A.Q</span>
            <h2 id="faqTitle" class="msp-h2">
              Your questions, answered.
            </h2>
          </div>
          <div class="accordion reveal">
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                What is the difference between a systematic review and original research?
              </button>
              <div class="accordion__body">
                A systematic review or meta-analysis synthesizes existing literature using a rigorous, pre-defined methodology, while original research involves generating or analyzing new data. Both are peer-reviewed and valued by residency programs.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Which option is best for beginners?
              </button>
              <div class="accordion__body">
                Systematic reviews and meta-analyses are often the best starting point for first-time researchers — they don't require you to collect new data, but they carry strong academic credibility when done rigorously.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                How long does a project usually take?
              </button>
              <div class="accordion__body">
                Timelines vary based on project complexity and publication goals.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Will I receive writing support?
              </button>
              <div class="accordion__body">
                Yes. Mentors assist throughout manuscript development.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Can medical students participate?
              </button>
              <div class="accordion__body">
                Yes. Students from all years are welcome.
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============== 7. FINAL CTA ============== -->
      <section
        class="msp-section msp-cta-wrap"
        id="book"
        aria-labelledby="ctaTitle"
      >
        <div class="msp-wrap">
          <div class="msp-cta-a reveal">
            <div class="msp-cta-a__stat">
              <div class="msp-cta-a__num">150<span>+</span></div>
              <p class="msp-cta-a__stat-line">
                Research projects mentored
              </p>
              <p class="msp-cta-a__stat-sub">
                75+ publications &middot; 250+ students guided
              </p>
            </div>
            <div class="msp-cta-a__content">
              <span class="msp-eyebrow msp-eyebrow--light">Start publishing</span>
              <h2 id="ctaTitle" class="msp-h2 msp-h2--invert">
                Your first publication<br /><em>starts here.</em>
              </h2>
              <p class="msp-cta__sub">
                Book a free guidance call. We'll match you with the right project for your specialty, timeline, and goals.
              </p>
              <a
                class="btn btn--primary btn--xl"
                href="https://team.manikmadaan.com/guidance-call/book"
                target="_blank"
                rel="noopener noreferrer"
              >
                Book a Free Guidance Call
              </a>
              <p class="msp-cta__trust">
                Free 30-minute call. No commitment.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
