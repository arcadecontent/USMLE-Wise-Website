<?php
$pageTitle = "Research Guidance | USMLE Wise";
$pageDescription = "Build the academic profile your residency application needs. Research opportunity matching, publication strategy, and application integration for IMGs.";
$canonical = "https://usmlewise.com/research/junior-scientist";
$bodyClass = "msp";
$stylesheets = [
    "/research.css"
];
$scripts = [
    "/research.js"
];
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<style>
      /* ---- JSP: single-column, centered, spacious FAQ ---- */
      .msp-faq .msp-faq__grid {
        display: block;
        max-width: 860px;
        margin-inline: auto;
        text-align: center;
      }
      .msp-faq .accordion {
        margin-top: 2.75rem;
        border: none;
        background: none;
        display: flex;
        flex-direction: column;
        gap: 14px;
      }
      .msp-faq .accordion__item {
        border: 1px solid var(--uw-border);
        border-radius: var(--r-md);
        background: #fff;
      }
      .msp-faq .accordion__head {
        position: relative;
        justify-content: center;
        text-align: center;
        padding: 24px 56px;
        font-size: 16px;
        line-height: 1.45;
      }
      .msp-faq .accordion__head::after {
        position: absolute;
        right: 24px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 22px;
      }
      .msp-faq .accordion__body {
        padding: 0 56px 24px;
        font-size: 15px;
        line-height: 1.65;
        text-align: center;
      }
      .js-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: clamp(24px, 4vw, 48px) var(--space-4);
      }
      @media (max-width: 760px) {
        .js-stats { grid-template-columns: repeat(2, 1fr); }
      }
      @media (max-width: 440px) {
        .js-stats { grid-template-columns: 1fr; }
      }
      .msp-faq .msp-eyebrow {
        display: block;
        margin-top: 2.25rem;
      }
      .msp-faq .accordion .msp-eyebrow:first-child { margin-top: 0; }
      .msp-faq .msp-h2 { margin-inline: auto; }
      @media (max-width: 640px) {
        .msp-faq .accordion__head { padding: 18px 44px; font-size: 15px; }
        .msp-faq .accordion__body { padding: 0 24px 20px; }
      }

      /* ---- JSP: the real problem ---- */
      .jsp-prob__grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: clamp(16px, 2vw, 24px);
        margin-top: clamp(40px, 5vw, 64px);
      }
      .jsp-prob__card {
        border: 1px solid var(--uw-border);
        border-radius: var(--r-xl);
        padding: clamp(24px, 3vw, 36px);
        background: #fff;
        display: flex;
        flex-direction: column;
        gap: 14px;
      }
      .jsp-prob__num {
        font-family: var(--font-display);
        font-size: clamp(40px, 5vw, 56px);
        line-height: 1;
        letter-spacing: -0.02em;
        color: var(--uw-blue-200);
      }
      .jsp-prob__card h3 {
        font-size: 17px;
        font-weight: 600;
        color: var(--uw-ink-900);
        margin: 0;
        line-height: 1.35;
      }
      .jsp-prob__card p {
        font-size: 14px;
        color: var(--uw-ink-600);
        line-height: 1.65;
        margin: 0;
      }
      @media (max-width: 860px) {
        .jsp-prob__grid { grid-template-columns: 1fr; }
      }

      /* ---- JSP: founder story ---- */
      .jsp-story__inner {
        display: grid;
        grid-template-columns: .82fr 1.18fr;
        gap: clamp(32px, 5vw, 64px);
        align-items: start;
      }
      .jsp-story__aside { position: sticky; top: 100px; }
      .jsp-story__ava {
        position: relative;
        border-radius: var(--r-xl);
        overflow: hidden;
        box-shadow: var(--shadow-lg);
        border: 1px solid var(--uw-border);
        aspect-ratio: 1/1;
        display: grid;
        place-items: center;
      }
      .jsp-story__ava img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
      }
      .jsp-story__name {
        font-family: var(--font-display);
        font-size: 19px;
        font-weight: 600;
        color: var(--uw-ink-900);
        margin: 16px 0 0;
      }
      .jsp-story__role { font-size: 13px; color: var(--uw-ink-500); margin: 4px 0 0; line-height: 1.5; }
      .jsp-story__badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin-top: 14px;
        font-size: 11.5px;
        font-family: var(--font-mono);
        letter-spacing: .04em;
        background: var(--uw-blue-50);
        color: var(--uw-blue-600);
        padding: 5px 11px;
        border-radius: 999px;
      }
      .jsp-story__lede {
        font-family: var(--font-display);
        font-size: clamp(20px, 2.2vw, 26px);
        line-height: 1.4;
        color: var(--uw-ink-900);
        margin: 0 0 22px;
        letter-spacing: -0.01em;
      }
      .jsp-story__copy { font-size: 16.5px; line-height: 1.6; color: var(--uw-ink-700); max-width: 56ch; }
      .jsp-story__copy p { margin: 0 0 20px; }
      .jsp-story__copy strong { color: var(--uw-ink-900); font-weight: 600; }
      .jsp-story__cta { margin-top: 28px; }
      @media (max-width: 880px) {
        .jsp-story__inner { grid-template-columns: 1fr; }
        .jsp-story__aside { position: static; max-width: 420px; }
      }

      /* ---- JSP: final CTA — compact, centered ---- */
      .msp-cta-a {
        grid-template-columns: 1fr;
        min-height: 0;
        text-align: center;
      }
      .msp-cta-a__content {
        align-items: center;
        padding: clamp(36px, 4.5vw, 56px) clamp(32px, 4vw, 56px);
      }
      .msp-cta-a .msp-cta__sub {
        max-width: 60ch;
        margin-inline: auto;
      }
      .msp-cta-a__btns {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        align-items: center;
        justify-content: center;
        margin-top: var(--space-5);
      }
      .msp-cta-a .msp-cta__trust { margin-top: var(--space-6); }
      .msp-cta-a .btn--wa {
        background: transparent;
        border: 1px solid rgba(255, 255, 255, 0.25);
        color: #fff;
        display: inline-flex;
        align-items: center;
        gap: 8px;
      }
      .msp-cta-a .btn--wa:hover {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 255, 255, 0.45);
      }
      .msp-cta__trust a {
        color: rgba(255, 255, 255, 0.62);
        text-decoration: underline;
        text-underline-offset: 2px;
      }
      .msp-cta__trust a:hover { color: #fff; }

      /* ---- JSP: comparison table ---- */
      .jsp-cmp__table {
        border: 1px solid var(--uw-border);
        border-radius: var(--r-xl);
        overflow: hidden;
        background: #fff;
        margin-top: clamp(40px, 5vw, 64px);
      }
      .jsp-cmp__row {
        display: grid;
        grid-template-columns: 1.05fr 1.5fr 1.5fr;
        border-bottom: 1px solid var(--uw-border);
      }
      .jsp-cmp__row:last-child { border-bottom: none; }
      .jsp-cmp__cell {
        padding: clamp(15px, 1.8vw, 22px) clamp(16px, 2vw, 26px);
        font-size: 14px;
        line-height: 1.55;
        color: var(--uw-ink-600);
        display: flex;
        gap: 10px;
        align-items: flex-start;
      }
      .jsp-cmp__cell i { flex-shrink: 0; margin-top: 1px; }
      .jsp-cmp__cell--feat {
        font-weight: 600;
        color: var(--uw-ink-900);
        align-items: center;
      }
      .jsp-cmp__cell--us {
        background: var(--uw-blue-50);
        color: var(--uw-ink-900);
      }
      .jsp-cmp__cell--us i { color: var(--uw-blue-500); }
      .jsp-cmp__cell--them i { color: var(--uw-ink-400); }
      .jsp-cmp__row--head .jsp-cmp__cell {
        font-family: var(--font-mono);
        font-size: 11px;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        align-items: center;
      }
      .jsp-cmp__row--head .jsp-cmp__cell--feat { color: var(--uw-ink-500); }
      .jsp-cmp__row--head .jsp-cmp__cell--us {
        color: var(--uw-blue-700);
        font-weight: 600;
      }
      .jsp-cmp__row--head .jsp-cmp__cell--them { color: var(--uw-ink-500); }
      @media (max-width: 720px) {
        .jsp-cmp__row { grid-template-columns: 1fr; }
        .jsp-cmp__row--head { display: none; }
        .jsp-cmp__cell { border-bottom: 1px solid var(--uw-border); }
        .jsp-cmp__row:last-child .jsp-cmp__cell:last-child { border-bottom: none; }
        .jsp-cmp__cell--feat {
          background: var(--uw-ink-75);
          font-family: var(--font-mono);
          font-size: 11px;
          letter-spacing: 0.08em;
          text-transform: uppercase;
        }
        .jsp-cmp__cell--us::before,
        .jsp-cmp__cell--them::before {
          content: attr(data-label) ": ";
          font-weight: 600;
          color: var(--uw-ink-500);
        }
      }

      /* ---- JSP: proof / real studies ---- */
      .jsp-proof__grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: clamp(16px, 2vw, 24px);
        margin-top: clamp(40px, 5vw, 64px);
      }
      .jsp-proof__card {
        border: 1px solid var(--uw-border);
        border-radius: var(--r-xl);
        padding: clamp(26px, 3vw, 40px);
        background: #fff;
        display: flex;
        flex-direction: column;
        gap: 14px;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
      }
      .jsp-proof__card:hover {
        border-color: var(--uw-blue-200);
        box-shadow: var(--shadow-md);
      }
      .jsp-proof__tag {
        align-self: flex-start;
        font-family: var(--font-mono);
        font-size: 11px;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--uw-blue-600);
        background: var(--uw-blue-50);
        padding: 5px 11px;
        border-radius: 999px;
      }
      .jsp-proof__q {
        font-family: var(--font-display);
        font-weight: 400;
        font-size: clamp(20px, 2.2vw, 25px);
        line-height: 1.3;
        letter-spacing: -0.01em;
        color: var(--uw-ink-900);
        margin: 0;
      }
      .jsp-proof__card p {
        font-size: 15px;
        line-height: 1.65;
        color: var(--uw-ink-600);
        margin: 0;
      }
      .jsp-proof__head {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 14px;
      }
      .jsp-proof__card--feat { grid-column: 1 / -1; }
      @media (min-width: 861px) {
        .jsp-proof__card--feat {
          flex-direction: row;
          align-items: center;
          gap: clamp(36px, 5vw, 80px);
        }
        .jsp-proof__card--feat .jsp-proof__head { flex: 1; }
        .jsp-proof__card--feat p { flex: 1; font-size: 16px; }
        .jsp-proof__card--feat .jsp-proof__q {
          font-size: clamp(24px, 2.8vw, 33px);
        }
      }
      @media (max-width: 860px) {
        .jsp-proof__grid { grid-template-columns: 1fr; }
      }

      /* ---- JSP: a year from now — two paths ---- */
      .jsp-year .msp-head { text-align: center; margin-inline: auto; }
      .jsp-year .msp-h2 { margin-inline: auto; }
      .jsp-year__grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: clamp(16px, 2vw, 24px);
        margin-top: clamp(40px, 5vw, 64px);
        align-items: stretch;
      }
      .jsp-year__col {
        border: 1px solid var(--uw-border);
        border-radius: var(--r-xl);
        padding: clamp(28px, 3.2vw, 44px);
      }
      .jsp-year__col--without { background: var(--uw-ink-75); }
      .jsp-year__col--with {
        background: var(--uw-blue-50);
        border-color: var(--uw-blue-200);
        box-shadow: var(--shadow-md);
      }
      .jsp-year__label {
        font-family: var(--font-mono);
        font-size: 11px;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        margin: 0 0 clamp(20px, 2.4vw, 28px);
        padding-bottom: 16px;
        border-bottom: 1px solid var(--uw-border);
      }
      .jsp-year__col--without .jsp-year__label { color: var(--uw-ink-500); }
      .jsp-year__col--with .jsp-year__label {
        color: var(--uw-blue-600);
        border-bottom-color: var(--uw-blue-200);
      }
      .jsp-year__list {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: clamp(16px, 2vw, 22px);
      }
      .jsp-year__list li {
        display: grid;
        grid-template-columns: auto 1fr;
        gap: 14px;
        align-items: start;
        font-size: 15.5px;
        line-height: 1.5;
      }
      .jsp-year__list i {
        flex-shrink: 0;
        margin-top: 1px;
        border-radius: 999px;
        padding: 3px;
      }
      .jsp-year__col--without .jsp-year__list li { color: var(--uw-ink-500); }
      .jsp-year__col--without .jsp-year__list i {
        color: var(--uw-ink-400);
        background: #fff;
      }
      .jsp-year__col--with .jsp-year__list li { color: var(--uw-ink-900); }
      .jsp-year__col--with .jsp-year__list i {
        color: #fff;
        background: var(--uw-blue-500);
      }
      .jsp-year__cta { margin-top: clamp(36px, 4.5vw, 52px); }
      @media (max-width: 760px) {
        .jsp-year__grid { grid-template-columns: 1fr; }
      }

      /* ---- JSP: fellowship / pricing ---- */
      .jsp-fellowship .msp-head { text-align: center; }
      .jsp-fellowship .msp-h2 { margin-inline: auto; }
      .jsp-fellowship .msp-sub { max-width: 62ch; margin-inline: auto; }

      .jsp-fellow__pricing {
        display: flex;
        justify-content: center;
        margin-top: clamp(40px, 5vw, 64px);
      }
      .jsp-fellow__card {
        border: 1px solid var(--uw-border);
        border-radius: var(--r-xl);
        padding: clamp(32px, 4vw, 52px);
        background: #fff;
        max-width: 540px;
        width: 100%;
        box-shadow: var(--shadow-md);
      }
      .jsp-fellow__card-head {
        margin-bottom: clamp(24px, 3vw, 36px);
        padding-bottom: clamp(24px, 3vw, 36px);
        border-bottom: 1px solid var(--uw-border);
      }
      .jsp-fellow__badge {
        display: inline-block;
        font-family: var(--font-mono);
        font-size: 11px;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--uw-blue-600);
        background: var(--uw-blue-50);
        padding: 5px 11px;
        border-radius: 999px;
        margin-bottom: 20px;
      }
      .jsp-fellow__price {
        display: flex;
        align-items: baseline;
        gap: 12px;
        margin-bottom: 12px;
      }
      .jsp-fellow__amount {
        font-family: var(--font-display);
        font-size: clamp(44px, 6vw, 64px);
        font-weight: 700;
        color: var(--uw-ink-900);
        letter-spacing: -0.03em;
        line-height: 1;
      }
      .jsp-fellow__currency {
        font-size: 14px;
        color: var(--uw-ink-500);
        font-family: var(--font-mono);
      }
      .jsp-fellow__tagline {
        font-size: 16px;
        color: var(--uw-ink-700);
        margin: 0;
        line-height: 1.45;
      }
      .jsp-fellow__features {
        list-style: none;
        margin: 0 0 clamp(24px, 3vw, 36px);
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 14px;
      }
      .jsp-fellow__features li {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-size: 15px;
        color: var(--uw-ink-700);
        line-height: 1.5;
      }
      .jsp-fellow__features li i {
        flex-shrink: 0;
        margin-top: 2px;
        color: var(--uw-blue-500);
      }
      .jsp-fellow__cta {
        display: block;
        width: 100%;
        text-align: center;
      }
      .jsp-fellow__note {
        font-size: 13px;
        color: var(--uw-ink-500);
        text-align: center;
        margin: 14px 0 0;
        line-height: 1.55;
      }
      .jsp-fellow__panels {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: clamp(16px, 2vw, 24px);
        margin-top: clamp(40px, 5vw, 64px);
      }
      .jsp-fellow__panel {
        border: 1px solid var(--uw-border);
        border-radius: var(--r-xl);
        padding: clamp(24px, 3vw, 36px);
        background: #fff;
      }
      .jsp-fellow__panel--caution {
        background: #fef9f0;
        border-color: #f0d9a0;
      }
      .jsp-fellow__panel h3 {
        font-size: 16px;
        font-weight: 600;
        color: var(--uw-ink-900);
        margin: 0 0 12px;
        line-height: 1.35;
      }
      .jsp-fellow__panel p {
        font-size: 14.5px;
        color: var(--uw-ink-600);
        line-height: 1.65;
        margin: 0;
      }
      .jsp-fellow__trial {
        max-width: 58ch;
        margin: clamp(36px, 4.5vw, 52px) auto 0;
        text-align: center;
      }
      .jsp-fellow__trial p {
        font-size: 16px;
        color: var(--uw-ink-600);
        line-height: 1.65;
        font-style: italic;
        margin: 0;
      }
      @media (max-width: 860px) {
        .jsp-fellow__panels { grid-template-columns: 1fr; }
      }
    </style>

<main>
      <!-- ============== 1. HERO ============== -->
      <section class="msp-hero" aria-labelledby="heroTitle">
        <div class="msp-wrap msp-hero__grid">
          <div class="msp-hero__copy reveal">
                        <h1 id="heroTitle" class="msp-h1">
              Your child does real medical research that
              <span class="msp-h1__accent">gets published.</span>
            </h1>
            <p class="msp-lede">
              Not a class about science. Not a resume filler. A doctor and
              research scientist mentors your child through one real study,
              every week, from reading their first paper to publishing one of
              their own. Start with a one-month trial, and get your deposit back
              if it isn't the right fit.
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
                href="https://web.whatsapp.com/send?phone=&text=Hey%2C%20I%20have%20questions%20about%20Research%20Guidance%20%2F%20USMLE%20Wise"
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
                src="/assets/photos/high-school-student.jpg"
                alt="High school student doing research"
              />
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
          <div class="js-stats">
            <div class="msp-stat reveal">
              <b data-count="32" data-suffix="+">32+</b>
              <span>Weekly sessions run</span>
            </div>
            <div class="msp-stat reveal">
              <b data-count="5">5</b>
              <span>Live research projects</span>
            </div>
            <div class="msp-stat reveal">
              <b>2 hrs</b>
              <span>Per week, that's the ask</span>
            </div>
            <div class="msp-stat reveal">
              <b>6&ndash;8</b>
              <span>Months to a publication</span>
            </div>
            <div class="msp-stat reveal">
              <b data-count="100" data-suffix="%">100%</b>
              <span>Led personally by Kaushik</span>
            </div>
            <div class="msp-stat reveal">
              <b>9&ndash;12</b>
              <span>Grades it's built for</span>
            </div>
          </div>
        </div>
      </section>

      <!-- ============== 1A. THE REAL PROBLEM ============== -->
      <section class="msp-section msp-problem" aria-labelledby="probTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">The real problem</span>
            <h2 id="probTitle" class="msp-h2">
              Most "research" for high schoolers looks good on paper and teaches nothing.
            </h2>
            <p class="msp-sub">
              Admissions officers have read thousands of applications. They can
              tell the difference between a student who did real work and one who
              paid to have their name added to something. The sad part is that
              most ambitious students never get the real thing, and it usually
              comes down to three traps.
            </p>
          </div>

          <div class="jsp-prob__grid">
            <div class="jsp-prob__card reveal">
              <span class="jsp-prob__num">01</span>
              <h3>The mentorship gap</h3>
              <p>Real researchers are too busy to teach a teenager. So kids get handed busywork with no one actually guiding them.</p>
            </div>
            <div class="jsp-prob__card reveal">
              <span class="jsp-prob__num">02</span>
              <h3>The resume-padding trap</h3>
              <p>Pay-to-publish journals and a week of shadowing look impressive to a parent and transparent to a reviewer.</p>
            </div>
            <div class="jsp-prob__card reveal">
              <span class="jsp-prob__num">03</span>
              <h3>No real skills</h3>
              <p>They never learn to read a paper, design a study, or write one. So nothing carries into college or the rest of their career.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ============== 1B. WHY RESEARCH ============== -->
      <section class="msp-section msp-why-r" aria-labelledby="whyRTitle">
        <div class="msp-wrap">
          <div class="msp-why-r__inner">
            <div class="msp-why-r__copy reveal">
              <span class="msp-eyebrow">Why it works</span>
              <h2 id="whyRTitle" class="msp-h2">Real research, taught the way scientists actually learn it.</h2>
            </div>
            <div class="msp-why-r__grid">
              <div class="msp-why-r__card reveal">
                <div class="msp-why-r__icon"><i data-lucide="microscope" width="20" height="20"></i></div>
                <h3>One real project, owned by your child</h3>
                <p>They join an actual medical study and carry it for months. Real stakes, real roadblocks, real learning.</p>
              </div>
              <div class="msp-why-r__card reveal">
                <div class="msp-why-r__icon"><i data-lucide="calendar-check" width="20" height="20"></i></div>
                <h3>Weekly live mentorship</h3>
                <p>A doctor and research scientist guides them on a call every week and critiques the work the way a real lab does.</p>
              </div>
              <div class="msp-why-r__card reveal">
                <div class="msp-why-r__icon"><i data-lucide="list-ordered" width="20" height="20"></i></div>
                <h3>The whole arc, in order</h3>
                <p>From reading a paper to judging evidence, designing a study, handling data, and writing it up.</p>
              </div>
              <div class="msp-why-r__card reveal">
                <div class="msp-why-r__icon"><i data-lucide="presentation" width="20" height="20"></i></div>
                <h3>Present and defend every week</h3>
                <p>They stand up, explain their work, and answer hard questions. Confidence is a side effect.</p>
              </div>
              <div class="msp-why-r__card reveal">
                <div class="msp-why-r__icon"><i data-lucide="sparkles" width="20" height="20"></i></div>
                <h3>AI used the right way</h3>
                <p>They learn to draft and critique with AI, then check it against the evidence. Never blind trust.</p>
              </div>
              <div class="msp-why-r__card reveal">
                <div class="msp-why-r__icon"><i data-lucide="award" width="20" height="20"></i></div>
                <h3>A publication to show</h3>
                <p>The goal is a peer-reviewed paper and real conference abstracts, with your child's name on them.</p>
              </div>
              <div class="msp-why-r__card reveal">
                <div class="msp-why-r__icon"><i data-lucide="video" width="20" height="20"></i></div>
                <h3>Sessions are recorded</h3>
                <p>If a week gets busy with school, nothing is lost. Every session is saved to rewatch.</p>
              </div>
            </div>
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
            <span class="msp-eyebrow">The curriculum</span>
            <h2 id="processTitle" class="msp-h2">
              Eight skills, in the order that builds.
            </h2>
          </div>

          <div class="msp-steps-b">

            <div class="msp-step-b">
              <div class="msp-step-b__content msp-step-b__content--l">
                <span class="msp-step-b__label">01 &middot; Weeks 1&ndash;6</span>
                <h3>Read a paper without fear</h3>
              </div>
              <div class="msp-step-b__node"><span class="msp-step-b__dot"></span></div>
              <div class="msp-step-b__content msp-step-b__content--r"></div>
            </div>

            <div class="msp-step-b">
              <div class="msp-step-b__content msp-step-b__content--l"></div>
              <div class="msp-step-b__node"><span class="msp-step-b__dot"></span></div>
              <div class="msp-step-b__content msp-step-b__content--r">
                <span class="msp-step-b__label">02 &middot; Weeks 1&ndash;6</span>
                <h3>Judge good evidence from weak</h3>
              </div>
            </div>

            <div class="msp-step-b">
              <div class="msp-step-b__content msp-step-b__content--l">
                <span class="msp-step-b__label">03 &middot; Weeks 6&ndash;14</span>
                <h3>Design a study</h3>
              </div>
              <div class="msp-step-b__node"><span class="msp-step-b__dot"></span></div>
              <div class="msp-step-b__content msp-step-b__content--r"></div>
            </div>

            <div class="msp-step-b">
              <div class="msp-step-b__content msp-step-b__content--l"></div>
              <div class="msp-step-b__node"><span class="msp-step-b__dot"></span></div>
              <div class="msp-step-b__content msp-step-b__content--r">
                <span class="msp-step-b__label">04 &middot; Weeks 14&ndash;22</span>
                <h3>Handle data and statistics</h3>
              </div>
            </div>

            <div class="msp-step-b">
              <div class="msp-step-b__content msp-step-b__content--l">
                <span class="msp-step-b__label">05 &middot; Ongoing</span>
                <h3>Do research ethically</h3>
              </div>
              <div class="msp-step-b__node"><span class="msp-step-b__dot"></span></div>
              <div class="msp-step-b__content msp-step-b__content--r"></div>
            </div>

            <div class="msp-step-b">
              <div class="msp-step-b__content msp-step-b__content--l"></div>
              <div class="msp-step-b__node"><span class="msp-step-b__dot"></span></div>
              <div class="msp-step-b__content msp-step-b__content--r">
                <span class="msp-step-b__label">06 &middot; Ongoing</span>
                <h3>Use AI like a scientist</h3>
              </div>
            </div>

            <div class="msp-step-b">
              <div class="msp-step-b__content msp-step-b__content--l">
                <span class="msp-step-b__label">07 &middot; Weeks 22&ndash;28</span>
                <h3>Write for publication</h3>
              </div>
              <div class="msp-step-b__node"><span class="msp-step-b__dot"></span></div>
              <div class="msp-step-b__content msp-step-b__content--r"></div>
            </div>

            <div class="msp-step-b">
              <div class="msp-step-b__content msp-step-b__content--l"></div>
              <div class="msp-step-b__node"><span class="msp-step-b__dot"></span></div>
              <div class="msp-step-b__content msp-step-b__content--r">
                <span class="msp-step-b__label">08 &middot; Weeks 28+</span>
                <h3>Present, submit, and apply</h3>
              </div>
            </div>

          </div>

        </div>
      </section>

      <!-- ============== 4. STORY ============== -->
      <section
        class="msp-section msp-mentors"
        id="mentors"
        aria-labelledby="storyTitle"
      >
        <div class="msp-wrap">
          <div class="jsp-story__inner">
            <div class="jsp-story__aside reveal">
              <div class="jsp-story__ava">
                <img src="/assets/photos/team-members/kaushik-sreeram.png" alt="Kaushik Sreerama Reddy" />
              </div>
              <p class="jsp-story__name">Kaushik Sreerama Reddy, MBBS</p>
              <p class="jsp-story__role">Chief Scientific Officer, USMLE Wise &amp; CRIST &middot; Director of Operations &amp; Lead Investigator, MCTC &middot; Published author</p>
            </div>
            <div class="reveal">
              <span class="msp-eyebrow">My story</span>
              <h2 id="storyTitle" class="jsp-story__lede">Dear parent,</h2>
              <div class="jsp-story__copy">
                <p>I'm Kaushik. I came from India and built a career in US medicine, and I teach research this way because <strong>I had to learn it the hard way first.</strong></p>
                <p>When I started, research felt like a closed door. The mentors were busy. The papers were impossible to read. Nobody explained how any of it actually worked.</p>
                <p><strong>A young scientist doesn't need more tasks. They need someone to show them the real process.</strong></p>
                <p>So I built the program I wish I'd had. Today I'm the chief scientific officer at USMLE Wise, and the director of operations and lead investigator with the Myositis Clinical Trials Consortium, an international research group centered at the University of Pittsburgh. I also lead the science on the CRIST team, with peer-reviewed papers of my own.</p>
                <p>Every week, your child meets me and a small group on a live call. They own one real study. They present what they did, I push on it the way scientists push on each other, and they leave with a clear next step.</p>
                <p>Then I watch it click. <strong>A student who couldn't get past the title of a paper in week one is writing one of their own by the end.</strong></p>
                <p>The research they learn to do is the same kind I do myself. That's the part that carries, long after the application is filed.</p>
                <p>I run this personally. Not a team, not an assistant. <strong>If your child wants this, I'll get them there.</strong></p>
              </div>
              <div class="jsp-story__cta">
                <a
                  class="btn btn--primary btn--lg"
                  href="https://team.manikmadaan.com/guidance-call/book"
                  target="_blank"
                  rel="noopener noreferrer"
                  >Book a free call with me</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============== 5. PROOF ============== -->
      <section class="msp-section msp-pub-section" id="proof" aria-labelledby="proofTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Proof</span>
            <h2 id="proofTitle" class="msp-h2">Real studies, not science-fair posters.</h2>
            <p class="msp-sub">
              These are live projects that practicing doctors care about. Your child contributes to one of them or models their own on it.
            </p>
          </div>

          <div class="jsp-proof__grid">

            <article class="jsp-proof__card jsp-proof__card--feat reveal">
              <div class="jsp-proof__head">
                <span class="jsp-proof__tag">Dermatology · AI</span>
                <h3 class="jsp-proof__q">Can a phone photo measure a rare skin disease?</h3>
              </div>
              <p>
                Building a global image database and testing whether a smartphone picture can score disease severity as well as a dermatologist, across every skin tone.
              </p>
            </article>

            <article class="jsp-proof__card reveal">
              <span class="jsp-proof__tag">Public health · vaccine safety</span>
              <h3 class="jsp-proof__q">Which children shouldn't get the oral polio vaccine?</h3>
              <p>
                A three-question screening tool for India's mass vaccination drives, tested on whether a parent or health worker actually understands it.
              </p>
            </article>

            <article class="jsp-proof__card reveal">
              <span class="jsp-proof__tag">Engineering · muscle disease</span>
              <h3 class="jsp-proof__q">Can a video measure muscle strength?</h3>
              <p>
                A phone-camera app that reads a simple sit-to-stand movement to track strength in patients with inflammatory muscle disease.
              </p>
            </article>

            <article class="jsp-proof__card reveal">
              <span class="jsp-proof__tag">Clinical trial design</span>
              <h3 class="jsp-proof__q">Does a health drink really beat weight-loss meds?</h3>
              <p>
                Designing a fair trial to find the honest answer, including how to run an experiment without fooling yourself.
              </p>
            </article>

            <article class="jsp-proof__card reveal">
              <span class="jsp-proof__tag">Medical writing · peer review</span>
              <h3 class="jsp-proof__q">Real patient cases, written to journal standard.</h3>
              <p>
                Students take unusual cases and write them up to the same guidelines a journal like BMJ requires. It is one of the fastest routes to a first publication.
              </p>
            </article>

          </div>
        </div>
      </section>

      <!-- ============== HOW WE COMPARE ============== -->
      <section class="msp-section jsp-compare" aria-labelledby="cmpTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">How we compare</span>
            <h2 id="cmpTitle" class="msp-h2">
              Side by side, here's what sets this apart.
            </h2>
          </div>

          <div class="jsp-cmp__table reveal">
            <div class="jsp-cmp__row jsp-cmp__row--head">
              <div class="jsp-cmp__cell jsp-cmp__cell--feat">Feature</div>
              <div class="jsp-cmp__cell jsp-cmp__cell--us">The Junior Scientist Program</div>
              <div class="jsp-cmp__cell jsp-cmp__cell--them">Typical research "programs"</div>
            </div>

            <div class="jsp-cmp__row">
              <div class="jsp-cmp__cell jsp-cmp__cell--feat">Who teaches</div>
              <div class="jsp-cmp__cell jsp-cmp__cell--us" data-label="This program">
                <i data-lucide="check" width="16" height="16"></i>
                A doctor and lead researcher, working with your child directly
              </div>
              <div class="jsp-cmp__cell jsp-cmp__cell--them" data-label="Typical">
                <i data-lucide="x" width="16" height="16"></i>
                A coordinator, a grad student, or no one
              </div>
            </div>

            <div class="jsp-cmp__row">
              <div class="jsp-cmp__cell jsp-cmp__cell--feat">The work</div>
              <div class="jsp-cmp__cell jsp-cmp__cell--us" data-label="This program">
                <i data-lucide="check" width="16" height="16"></i>
                One real study your child owns for months
              </div>
              <div class="jsp-cmp__cell jsp-cmp__cell--them" data-label="Typical">
                <i data-lucide="x" width="16" height="16"></i>
                Busywork, or a name added to someone else's project
              </div>
            </div>

            <div class="jsp-cmp__row">
              <div class="jsp-cmp__cell jsp-cmp__cell--feat">Skills learned</div>
              <div class="jsp-cmp__cell jsp-cmp__cell--us" data-label="This program">
                <i data-lucide="check" width="16" height="16"></i>
                Read, design, analyze, write, present
              </div>
              <div class="jsp-cmp__cell jsp-cmp__cell--them" data-label="Typical">
                <i data-lucide="x" width="16" height="16"></i>
                Few that transfer past the program
              </div>
            </div>

            <div class="jsp-cmp__row">
              <div class="jsp-cmp__cell jsp-cmp__cell--feat">The result</div>
              <div class="jsp-cmp__cell jsp-cmp__cell--us" data-label="This program">
                <i data-lucide="check" width="16" height="16"></i>
                A peer-reviewed paper and real abstracts
              </div>
              <div class="jsp-cmp__cell jsp-cmp__cell--them" data-label="Typical">
                <i data-lucide="x" width="16" height="16"></i>
                A certificate, or a pay-to-publish listing
              </div>
            </div>

            <div class="jsp-cmp__row">
              <div class="jsp-cmp__cell jsp-cmp__cell--feat">Built for high schoolers</div>
              <div class="jsp-cmp__cell jsp-cmp__cell--us" data-label="This program">
                <i data-lucide="check" width="16" height="16"></i>
                Yes. Designed for grades 9&ndash;12
              </div>
              <div class="jsp-cmp__cell jsp-cmp__cell--them" data-label="Typical">
                <i data-lucide="x" width="16" height="16"></i>
                Rarely. Mostly aimed at med students
              </div>
            </div>

            <div class="jsp-cmp__row">
              <div class="jsp-cmp__cell jsp-cmp__cell--feat">Risk to start</div>
              <div class="jsp-cmp__cell jsp-cmp__cell--us" data-label="This program">
                <i data-lucide="check" width="16" height="16"></i>
                One-month trial, deposit back if it isn't a fit
              </div>
              <div class="jsp-cmp__cell jsp-cmp__cell--them" data-label="Typical">
                <i data-lucide="x" width="16" height="16"></i>
                Paid up front, no guarantee
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============== A YEAR FROM NOW ============== -->
      <section class="msp-section jsp-year" aria-labelledby="yearTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">A year from now</span>
            <h2 id="yearTitle" class="msp-h2">Your child spends the year either way.</h2>
          </div>

          <div class="jsp-year__grid">
            <div class="jsp-year__col jsp-year__col--without reveal">
              <h3 class="jsp-year__label">Without the program</h3>
              <ul class="jsp-year__list">
                <li>
                  <i data-lucide="x" width="16" height="16"></i>
                  <span>Another activity that fills a line and teaches nothing.</span>
                </li>
                <li>
                  <i data-lucide="x" width="16" height="16"></i>
                  <span>An application that blends in with thousands of others.</span>
                </li>
                <li>
                  <i data-lucide="x" width="16" height="16"></i>
                  <span>Still no idea how real research actually works.</span>
                </li>
                <li>
                  <i data-lucide="x" width="16" height="16"></i>
                  <span>Nothing they can point to and call their own.</span>
                </li>
              </ul>
            </div>

            <div class="jsp-year__col jsp-year__col--with reveal">
              <h3 class="jsp-year__label">With the program</h3>
              <ul class="jsp-year__list">
                <li>
                  <i data-lucide="check" width="16" height="16"></i>
                  <span>A real study, carried from first question to finished paper.</span>
                </li>
                <li>
                  <i data-lucide="check" width="16" height="16"></i>
                  <span>A published paper and abstracts with their name on them.</span>
                </li>
                <li>
                  <i data-lucide="check" width="16" height="16"></i>
                  <span>Skills they keep for college and a career in medicine.</span>
                </li>
                <li>
                  <i data-lucide="check" width="16" height="16"></i>
                  <span>An application built on proof, and a doctor's letter behind it.</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

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
                How much time does it take each week?
              </button>
              <div class="accordion__body">
                About two hours. One live call of roughly ninety minutes, plus a small piece of work between sessions. It works because of consistency, not long hours.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                My child is already busy with school and activities. Can they manage it?
              </button>
              <div class="accordion__body">Usually yes, because the weekly load is light. My most common advice to families is to cut activities that cause burnout, not add more. A child who is over-scheduled can't do deep work. Help them stay consistent and protect this time.</div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                What grade is this for?
              </button>
              <div class="accordion__body">It's built for high schoolers, grades 9 through 12, including students aiming at BS/MD and premed. Motivated undergraduates fit too.</div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Will my child actually get published?
              </button>
              <div class="accordion__body">That's the goal, and it usually takes six to eight months of consistent work. I won't fast-track it, because rushing doesn't teach anything. Results depend on your child's own effort, but the path is real and students have walked it.</div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Who teaches it?
              </button>
              <div class="accordion__body">I do, personally. I'm Kaushik. I'm the chief scientific officer at USMLE Wise, the director of operations and lead investigator with the Myositis Clinical Trials Consortium, and I lead the science on the CRIST team. Your child works with me directly, not a team or an assistant.</div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Is it online?
              </button>
              <div class="accordion__body">Yes. Weekly live calls your child joins from home, and every session is recorded so nothing is lost on a busy week.</div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                What does it cost?
              </button>
              <div class="accordion__body">We talk through it on a short call so I can recommend the right fit. You start with a one-month trial and a deposit, and the deposit comes back if it isn't right.</div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                How do we begin?
              </button>
              <div class="accordion__body">Book a free call. I'll talk with you and your child about their goals and whether real research is the right use of their time right now. There's no pressure to enroll.</div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============== THE FELLOWSHIP ============== -->
      <section class="msp-section jsp-fellowship" aria-labelledby="fellowshipTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">The fellowship</span>
            <h2 id="fellowshipTitle" class="msp-h2">One fee for a full year of mentored research.</h2>
            <p class="msp-sub">The fee covers your child's place, training, and mentorship for the program year. It does not, and cannot, buy a publication or a byline, because those are earned and reviewed independently. You start with a one-month trial and a deposit that comes back if it is not the right fit.</p>
          </div>

          <div class="jsp-fellow__pricing reveal">
            <div class="jsp-fellow__card">
              <div class="jsp-fellow__card-head">
                <span class="jsp-fellow__badge">CRIST Research Fellowship &middot; high school</span>
                <div class="jsp-fellow__price">
                  <span class="jsp-fellow__amount">$4,000</span>
                  <span class="jsp-fellow__currency">USD &middot; full program</span>
                </div>
                <p class="jsp-fellow__tagline">A year-long, mentored place on a live study.</p>
              </div>
              <ul class="jsp-fellow__features">
                <li><i data-lucide="check" width="16" height="16"></i> A real role on a physician-led global-health study</li>
                <li><i data-lucide="check" width="16" height="16"></i> Weekly one-on-one and small-group mentorship</li>
                <li><i data-lucide="check" width="16" height="16"></i> Training in interviewing, reading, writing, and presenting</li>
                <li><i data-lucide="check" width="16" height="16"></i> A transparent, ICMJE-based path to authorship if earned</li>
                <li><i data-lucide="check" width="16" height="16"></i> A signed Certificate of Contribution on completion</li>
              </ul>
              <a
                class="btn btn--primary btn--lg jsp-fellow__cta"
                href="https://team.manikmadaan.com/guidance-call/book"
                target="_blank"
                rel="noopener noreferrer"
              >Book a fit call</a>
              <p class="jsp-fellow__note">Places are limited and offered after a fit conversation. Payment plans available on request.</p>
            </div>
          </div>

          <div class="jsp-fellow__panels">
            <div class="jsp-fellow__panel reveal">
              <h3>What the fee buys</h3>
              <p>A year of structured mentorship, training, and a genuine role on the study. It is tuition for the program, the way a serious research mentorship carries a fee.</p>
            </div>
            <div class="jsp-fellow__panel jsp-fellow__panel--caution reveal">
              <h3>What it does not buy</h3>
              <p>It does not buy a publication, a conference acceptance, or authorship. Those depend on your child's work meeting the ICMJE standard and on peer review. Anyone guaranteeing a byline for a fee is selling something that would harm your child, not help them.</p>
            </div>
            <div class="jsp-fellow__panel reveal">
              <h3>Possible separate costs</h3>
              <p>If your child presents at a meeting like IDWeek, registration and travel are separate and set by the organiser. Journal supplements such as OFID are open access. All are disclosed in advance and never a condition of authorship.</p>
            </div>
          </div>

          <div class="jsp-fellow__trial reveal">
            <p>Start with a one-month trial. If it is not the right fit for your child, your deposit comes back. We would rather your family choose the right thing than regret the wrong one.</p>
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
            <div class="msp-cta-a__content">
              <span class="msp-eyebrow msp-eyebrow--light">Applications open late summer</span>
              <h2 id="ctaTitle" class="msp-h2 msp-h2--invert">
                Time is the<br /><em>real advantage.</em>
              </h2>
              <p class="msp-cta__sub">
                A real publication takes months. The students who start now walk
                in with that work already behind them. Talk to Kaushik directly:
                he'll be honest about your child's goals, their schedule, and
                whether real research is the right use of their time right now.
              </p>
              <div class="msp-cta-a__btns">
                <a
                  class="btn btn--primary btn--xl"
                  href="https://team.manikmadaan.com/guidance-call/book"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  Book a Free Call
                </a>
                <a
                  class="btn btn--xl btn--wa"
                  href="https://web.whatsapp.com/send?phone=&text=Hi%2C%20I%20have%20questions%20about%20the%20Junior%20Scientist%20Program"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <i data-lucide="message-circle" width="18" height="18"></i>
                  Chat on WhatsApp
                </a>
              </div>
              <p class="msp-cta__trust">
                No pressure to enroll. Prefer email?
                <a href="mailto:admin@usmlewise.com">admin@usmlewise.com</a>
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
