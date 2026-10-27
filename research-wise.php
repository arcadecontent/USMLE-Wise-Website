<?php
$pageTitle = "Research Wise — Live Sessions for First-Time Researchers | USMLE Wise";
$pageDescription = "Your first step into research. Three live Sunday sessions covering case reports and case series, original studies, and systematic reviews and meta-analyses, for $49, one-time.";
$canonical = "https://usmlewise.com/research-wise";
$bodyClass = "msp";
$stylesheets = [
    "/styles/research-catalyst.css",
    "/styles/research-wise.css",
    "/styles/blog.css",
    "/styles/awards-carousel.css"
];
$scripts = [
    "/js/research-catalyst.js",
    "/js/awards-carousel.js"
];
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>

      <!-- ============== HERO ============== -->
      <section class="msp-hero" aria-labelledby="heroTitle">
        <div class="msp-wrap msp-hero__grid">
          <div class="msp-hero__copy reveal">
            <span class="rc-hero__badge">Live &middot; 3 Sunday Sessions</span>
            <h1 id="heroTitle" class="msp-h1">Never done research?<br>This is <span class="msp-h1__accent">where you start.</span></h1>
            <p class="msp-lede">
              Three live Sunday sessions for medical students and graduates who
              have never done research and don't know where to begin: case
              reports and case series, original studies, and systematic reviews
              and meta-analyses. $49, one-time, for all three.
            </p>
            <div class="msp-cta-row">
              <a
                class="btn btn--primary btn--xl"
                href="https://team.manikmadaan.com/guidance-call/book"
                target="_blank"
                rel="noopener noreferrer"
                >Reserve Your Spot</a
              >
              <a class="btn btn--outline btn--xl" href="#curriculum">
                See what's covered
                <i data-lucide="arrow-down" class="ic-arrow" width="16" height="16"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="msp-bar msp-wrap" aria-label="Track record">
          <div class="msp-bar__inner">
            <div class="msp-stat reveal">
              <b data-count="90" data-suffix="+">90+</b>
              <span>Students &amp; professionals guided</span>
            </div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal">
              <b data-count="30" data-suffix="+">30+</b>
              <span>Publications &amp; presentations</span>
            </div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal">
              <b data-count="10" data-suffix="+">10+</b>
              <span>Active projects running</span>
            </div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal">
              <b data-count="65" data-suffix="+">65+</b>
              <span>Projects mentored</span>
            </div>
          </div>
        </div>
      </section>

      <!-- ============== CURRICULUM: THREE LIVE SESSIONS ============== -->
      <section class="msp-section rc-curriculum" id="curriculum" aria-labelledby="curriculumTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Live &middot; 3 Sunday sessions</span>
            <h2 id="curriculumTitle" class="msp-h2">Everything you need to start, in three sessions.</h2>
            <p class="msp-sub">Each session is taught live by a mentor who has done it, built to leave you with a concrete next step toward your first publication.</p>
          </div>

          <!-- The three sessions -->
          <div class="rc-pub-types reveal">
            <div class="rc-pub-types__grid">
              <div class="rc-pub-type rc-pub-type--blue">
                <div class="rc-pub-type__icon-wrap">
                  <i data-lucide="file-text" width="18" height="18"></i>
                </div>
                <h3 class="rc-pub-type__head">Case Reports &amp; Case Series</h3>
                <p>With Shivani Ravipati. Learn to spot a publishable case, build it from what you already have access to, and get it ready to submit.</p>
              </div>
              <div class="rc-pub-type rc-pub-type--emerald">
                <div class="rc-pub-type__icon-wrap">
                  <i data-lucide="flask-conical" width="18" height="18"></i>
                </div>
                <h3 class="rc-pub-type__head">Original Studies</h3>
                <p>With Muhammad Ahmad Barakat. Design and run a first original study, including how to work with the data you can realistically access as a student.</p>
              </div>
              <div class="rc-pub-type rc-pub-type--violet">
                <div class="rc-pub-type__icon-wrap">
                  <i data-lucide="list-checks" width="18" height="18"></i>
                </div>
                <h3 class="rc-pub-type__head">Systematic Reviews &amp; Meta-Analyses</h3>
                <p>With Muhammad Ahmad Barakat. Pool existing evidence into a rigorous review, a strong first publication that needs no new data collection.</p>
              </div>
            </div>
            <p class="rw-next-note">Sunday, November 8, 15, and 22. Enrollment is open to everyone.</p>
          </div>

          <!-- Price -->
          <div class="rc-payment reveal">
            <div class="rc-payment__inner">
              <div>
                <span class="rc-sec-label">Investment</span>
                <div class="rc-payment__price">$49</div>
                <p class="rc-payment__note">One-time payment for all three live Sunday sessions. See our <a href="/refund-policy">Refund &amp; Guarantee Policy</a> for how refunds are handled.</p>
              </div>
              <a
                class="btn btn--primary"
                href="https://team.manikmadaan.com/guidance-call/book"
                target="_blank"
                rel="noopener noreferrer"
                >Reserve Your Spot</a
              >
            </div>
          </div>

        </div>
      </section>

      <!-- ============== WHO IT'S FOR ============== -->
      <section class="msp-section rc-for-whom" aria-labelledby="forWhomTitle">
        <div class="msp-wrap">
          <div class="rc-for-whom__inner">
            <div class="rc-for-whom__copy reveal">
              <span class="msp-eyebrow">Built for</span>
              <h2 id="forWhomTitle" class="msp-h2">Your very first step into research, not your tenth.</h2>
              <p class="msp-lede">
                Research Wise is for people who haven't started yet. If you already
                have a project running, our mentored programs like
                <a href="/research-original">Original Research</a> or
                <a href="/research-catalyst">Research Catalyst</a> are built for that stage.
              </p>
            </div>
            <ol class="rc-for-whom__list">
              <li class="reveal">
                <span class="rc-whom-num">01</span>
                <span class="rc-whom-item">You've never done research and don't know where to begin</span>
              </li>
              <li class="reveal">
                <span class="rc-whom-num">02</span>
                <span class="rc-whom-item">You want live teaching from someone who's done it, not a recorded course</span>
              </li>
              <li class="reveal">
                <span class="rc-whom-num">03</span>
                <span class="rc-whom-item">You don't have a lab, a mentor, or a dataset, and that's fine</span>
              </li>
              <li class="reveal">
                <span class="rc-whom-num">04</span>
                <span class="rc-whom-item">You want one clear next step, not a pile of unconnected videos</span>
              </li>
            </ol>
          </div>
        </div>
      </section>

      <!-- ============== MENTORS ============== -->
      <section class="msp-section rc-mentors" id="mentors" aria-labelledby="mentorsTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Who's teaching</span>
            <h2 id="mentorsTitle" class="msp-h2">Researchers who've published. Now helping you do the same.</h2>
          </div>
          <div class="rc-mtr-list">

            <article class="rc-mtr reveal">
              <div class="rc-mtr__photo">
                <img src="/assets/Photos/Team-Members/Kaushik-Sreeram.webp" alt="Kaushik Sreeram" loading="lazy" decoding="async" />
              </div>
              <div class="rc-mtr__body">
                <div class="rc-mtr__header">
                  <span class="rc-mtr__role">Research Head</span>
                  <h3 class="rc-mtr__name">Dr. Kaushik Sreerama Reddy, MBBS</h3>
                  <span class="rc-mtr__prog">Chief Scientific Officer &amp; CRIST Project Lead &middot; USMLE Wise Research</span>
                </div>
                <ul class="rc-mtr__creds">
                  <li>Chief Scientific Officer &amp; CRIST Project Lead, USMLE Wise Research</li>
                  <li>Lead Investigator, Myositis Clinical Trials Consortium</li>
                  <li>Study Lead, MyPACER Study</li>
                </ul>
              </div>
            </article>

            <article class="rc-mtr reveal">
              <div class="rc-mtr__photo">
                <img src="/assets/Photos/Team-Members/shivani.jpeg" alt="Shivani Ravipati" loading="lazy" decoding="async" />
              </div>
              <div class="rc-mtr__body">
                <div class="rc-mtr__header">
                  <span class="rc-mtr__role">Beginner Series &middot; Case Reports &amp; Case Series</span>
                  <h3 class="rc-mtr__name">Shivani Ravipati</h3>
                  <span class="rc-mtr__prog">Research &amp; Publications Mentor</span>
                </div>
                <ul class="rc-mtr__creds">
                  <li>5 first-author publications &middot; 1 AHA poster presentation &middot; 8+ co-authored papers</li>
                  <li>IRB-approved clinical trial lead for PRP research</li>
                  <li>Actively guiding IMGs through research, steps and ERAS applications</li>
                </ul>
              </div>
            </article>

            <article class="rc-mtr reveal">
              <div class="rc-mtr__photo">
                <img src="/assets/Photos/Team-Members/Barakat-Photo.jpeg" alt="Muhammad Ahmad Barakat" loading="lazy" decoding="async" />
              </div>
              <div class="rc-mtr__body">
                <div class="rc-mtr__header">
                  <span class="rc-mtr__role">Beginner Series &middot; Original Studies, Reviews &amp; Meta-Analyses</span>
                  <h3 class="rc-mtr__name">Muhammad Ahmad Barakat</h3>
                  <span class="rc-mtr__prog">Medical Student, Caucasus International University</span>
                </div>
                <ul class="rc-mtr__creds">
                  <li>7 published papers &middot; 2 conference papers &middot; 7 co-author posters</li>
                  <li>200+ students guided to publication across MEDICA SRA &amp; MEDMARK MRMS programs</li>
                  <li>APA PsychSIGN International Student Liaison Research Chair 2026&ndash;2027</li>
                </ul>
              </div>
            </article>

          </div>
        </div>
      </section>

      <!-- ============== FAQ ============== -->
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/awards-carousel.php'; ?>

      <section class="msp-section rc-faq" id="faq" aria-labelledby="faqTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">F.A.Q</span>
            <h2 id="faqTitle" class="msp-h2">Your questions, answered.</h2>
          </div>
          <div class="accordion accordion--faq rc-faq__accordion reveal">
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Do I need any research experience to join?
              </button>
              <div class="accordion__body">
                No. Research Wise is built specifically for medical students and graduates who have never done research and don't know where to start. Come with a topic you're curious about; you don't need a plan yet.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                What does it cost?
              </button>
              <div class="accordion__body">
                $49, one-time, for all three live Sunday sessions. See our <a href="/refund-policy">Refund &amp; Guarantee Policy</a> for how refunds are handled.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                How is this different from Research Cohort Access?
              </button>
              <div class="accordion__body">
                Research Wise is the live starting point for people who haven't done research before. <a href="/research-cohort">Research Cohort Access</a> is a self-paced library for once you already understand the basics and are working on a real project.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Can I join if I already have a research project running?
              </button>
              <div class="accordion__body">
                Research Wise is built for people who haven't started yet. If you already have a project running, <a href="/research-original">Original Research</a> or <a href="/research-catalyst">Research Catalyst</a> put a mentor directly on that work.
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============== FINAL CTA ============== -->
      <section class="rc-cta-wrap">
        <div class="msp-wrap">
          <div class="rc-cta rc-cta-card reveal">
            <h2 class="rc-cta__head">Your first step into research<br>starts this November.</h2>
            <p class="rc-cta__sub">
              Reserve your spot in three live Sunday sessions starting November
              8. No research experience needed, just a willingness to start.
            </p>
            <div class="rc-cta__actions">
              <a
                class="btn btn--primary btn--xl"
                href="https://team.manikmadaan.com/guidance-call/book"
                target="_blank"
                rel="noopener noreferrer"
                >Reserve Your Spot</a
              >
              <a class="btn btn--outline btn--xl rc-cta__outline" href="https://wa.me/19192015700" target="_blank" rel="noopener noreferrer">Text Us on WhatsApp</a>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
