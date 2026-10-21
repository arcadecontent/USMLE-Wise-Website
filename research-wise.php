<?php
$pageTitle = "Research Wise — Free Webinars for First-Time Researchers | USMLE Wise";
$pageDescription = "Your first step into research. Two free live webinars with Dr. Kaushik for medical students and graduates who have never done research, then a $50 mentored beginner series.";
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
            <span class="rc-hero__badge">Free &middot; Two Live Webinars</span>
            <h1 id="heroTitle" class="msp-h1">Never done research?<br>This is <span class="msp-h1__accent">where you start.</span></h1>
            <p class="msp-lede">
              Two free live webinars with Dr. Kaushik, built for medical students and
              graduates who have never done research and don't know where to begin.
              Turn a vague topic into a real question, learn the difference between
              research and quality improvement, then continue into a mentored
              beginner series.
            </p>
            <div class="msp-cta-row">
              <a
                class="btn btn--primary btn--xl"
                href="https://team.manikmadaan.com/guidance-call/book"
                target="_blank"
                rel="noopener noreferrer"
                >Reserve Your Free Seat</a
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

      <!-- ============== WHY IT'S HARD TO START ============== -->
      <section class="msp-section rc-problems" aria-labelledby="problemsTitle">
        <div class="msp-wrap">
          <div class="rc-problems__head reveal">
            <span class="msp-eyebrow">Why research stays undone</span>
            <h2 id="problemsTitle" class="msp-h2">The questions that stop people before they start.</h2>
          </div>
          <div class="rc-problems__grid">
            <div class="rc-problem rc-problem--blue reveal">
              <div class="rc-problem__icon-wrap">
                <i data-lucide="search" width="22" height="22"></i>
              </div>
              <span class="rc-problem__num">01</span>
              <h3 class="rc-problem__head">"I don't know what to study"</h3>
              <p>Weeks go by on a vague topic, or one that's already been done. We'll show you how to turn a topic into a real, checkable question.</p>
            </div>
            <div class="rc-problem rc-problem--amber reveal">
              <div class="rc-problem__icon-wrap">
                <i data-lucide="flask-conical" width="22" height="22"></i>
              </div>
              <span class="rc-problem__num">02</span>
              <h3 class="rc-problem__head">"I have no lab and no mentor"</h3>
              <p>Case reports, case series, and quality improvement projects need only what you already have access to as a student.</p>
            </div>
            <div class="rc-problem rc-problem--slate reveal">
              <div class="rc-problem__icon-wrap">
                <i data-lucide="scale" width="22" height="22"></i>
              </div>
              <span class="rc-problem__num">03</span>
              <h3 class="rc-problem__head">"Is this research or quality improvement?"</h3>
              <p>They look similar and they are not the same. Picking the wrong one means the wrong approval route, or a project nobody can publish.</p>
            </div>
            <div class="rc-problem rc-problem--teal reveal">
              <div class="rc-problem__icon-wrap">
                <i data-lucide="waypoints" width="22" height="22"></i>
              </div>
              <span class="rc-problem__num">04</span>
              <h3 class="rc-problem__head">"There's too much free advice and no order"</h3>
              <p>Scattered videos, no sequence, nobody to ask. We give you one path, start to finish, with a live person to ask.</p>
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
                <span class="rc-whom-item">You want to try it live and free before committing to anything paid</span>
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

      <!-- ============== CURRICULUM: FREE WEBINARS ============== -->
      <section class="msp-section rc-curriculum" id="curriculum" aria-labelledby="curriculumTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Free live webinars</span>
            <h2 id="curriculumTitle" class="msp-h2">Two sessions. Everything beginner.</h2>
            <p class="msp-sub">Both are taught live by Dr. Kaushik, about 60 minutes each, built to leave you with one useful thing and a clear next step.</p>
          </div>

          <div class="rc-learn reveal">
            <div class="rc-learn-cards rc-learn-cards--wise">
              <div class="rc-learn-card">
                <div class="rc-learn-card__body">
                  <div class="rc-learn-card__icon"><i data-lucide="lightbulb" width="18" height="18"></i></div>
                  <span class="rw-session-meta">Webinar 1 &middot; Free &middot; Live</span>
                  <h3 class="rc-learn-card__head">How to Generate a Research Idea</h3>
                  <ul class="rc-learn-card__list">
                    <li>Turn a vague topic into a question you can study, with PICO</li>
                    <li>Check in minutes whether it's already been done &mdash; PubMed, Cochrane, PROSPERO, ClinicalTrials.gov</li>
                    <li>Stress-test an idea with the FINER criteria before you commit weeks to it</li>
                    <li>Match your idea to the right starting study design</li>
                  </ul>
                </div>
              </div>
              <div class="rc-learn-card">
                <div class="rc-learn-card__body">
                  <div class="rc-learn-card__icon"><i data-lucide="refresh-cw" width="18" height="18"></i></div>
                  <span class="rw-session-meta">Webinar 2 &middot; Free &middot; Live</span>
                  <h3 class="rc-learn-card__head">Quality Improvement Studies</h3>
                  <ul class="rc-learn-card__list">
                    <li>Quality improvement vs. research, and why it matters for ethics review</li>
                    <li>The Model for Improvement and PDSA cycles</li>
                    <li>Outcome, process, and balancing measures; reading a run chart</li>
                    <li>Reporting your project with SQUIRE 2.0</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- What You Leave With -->
          <div class="rc-receive reveal">
            <span class="rc-sec-label">What You Leave With</span>
            <div class="rc-receive__inner">
              <ul class="rc-receive__list">
                <li>A specific, checkable research question of your own</li>
                <li>A clear answer on whether your idea is research or quality improvement</li>
                <li>One concrete next step toward your first study</li>
                <li>Direct access to ask Dr. Kaushik live, in both sessions</li>
              </ul>
              <div class="rc-receive__stat">
                <span class="rc-receive__num">2</span>
                <div>
                  <span class="rc-receive__stat-label">Free live sessions</span>
                  <span class="rc-receive__stat-sub">No experience needed. Come with a question, leave with a plan.</span>
                </div>
              </div>
            </div>
          </div>

          <!-- What's Next: the beginner series -->
          <div class="rc-pub-types reveal">
            <span class="rc-sec-label">After the Webinars</span>
            <h3 class="msp-h3" style="margin:4px 0 4px;font-family:var(--font-display);font-weight:400;font-size:clamp(20px,2.2vw,26px);color:var(--uw-ink-900);">Continue into your first full study.</h3>
            <p style="margin:0 0 4px;font-size:var(--fs-14);color:var(--uw-ink-600);max-width:62ch;">Three live Sunday sessions take you from the free webinars into an actual project, each led by a mentor who has done it.</p>
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
            <p class="rw-next-note">Dates are shared with webinar attendees first.</p>
          </div>

          <!-- Beginner Series Price -->
          <div class="rc-payment reveal">
            <div class="rc-payment__inner">
              <div>
                <span class="rc-sec-label">Beginner Series Investment</span>
                <div class="rc-payment__price">$50</div>
                <p class="rc-payment__note">One-time payment for all three live Sunday sessions, after you've attended the free webinars. See our <a href="/refund-policy">Refund &amp; Guarantee Policy</a> for how refunds are handled.</p>
              </div>
              <a
                class="btn btn--primary"
                href="https://team.manikmadaan.com/guidance-call/book"
                target="_blank"
                rel="noopener noreferrer"
                >Reserve Your Free Seat</a
              >
            </div>
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
                  <span class="rc-mtr__role">Webinar Host &amp; Research Head</span>
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
                Is the webinar really free?
              </button>
              <div class="accordion__body">
                Yes. Both webinars are free, live, and open to anyone. There's no price or commitment attached to attending.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                What if I can't attend live?
              </button>
              <div class="accordion__body">
                Reserve your seat anyway. We send the replay and slide notes to everyone who registers, whether or not they attend live.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                What happens after the two webinars?
              </button>
              <div class="accordion__body">
                Research Wise continues into a beginner series: three live Sunday sessions covering case reports and case series, then original studies, systematic reviews, and meta-analyses. It's $50 one-time for all three sessions. Exact dates are shared with webinar attendees first.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                How is this different from Research Cohort Access?
              </button>
              <div class="accordion__body">
                Research Wise is the free starting point for people who haven't done research before. <a href="/research-cohort">Research Cohort Access</a> is a self-paced library for once you already understand the basics and are working on a real project.
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
            <h2 class="rc-cta__head">Your first step into research<br>starts with one free session.</h2>
            <p class="rc-cta__sub">
              Reserve a free seat in the next live webinar with Dr. Kaushik. No
              experience, no cost, no commitment.
            </p>
            <div class="rc-cta__actions">
              <a
                class="btn btn--primary btn--xl"
                href="https://team.manikmadaan.com/guidance-call/book"
                target="_blank"
                rel="noopener noreferrer"
                >Reserve Your Free Seat</a
              >
              <a class="btn btn--outline btn--xl rc-cta__outline" href="https://wa.me/19192015700" target="_blank" rel="noopener noreferrer">Text Us on WhatsApp</a>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
