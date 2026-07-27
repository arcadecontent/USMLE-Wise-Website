<?php
$pageTitle = "Step 1 Mastery | USMLE Wise";
$pageDescription = "USMLE Step 1 Mastery. Coming soon.";
$canonical = "https://usmlewise.com/coaching-step1-mastery";
$bodyClass = "msp";
$stylesheets = [
    "/styles/coaching.css"
];
$scripts = [
    "/js/coaching.js"
];
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<style>
      /* ---- page sections ---- */
      .pg-about { background: var(--uw-surface-sunk); border-block: 1px solid var(--uw-border); }
      .pg-feat-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: clamp(20px, 3vw, 36px);
        margin-top: clamp(40px, 5vw, 60px);
      }
      .pg-feat { display: flex; flex-direction: column; gap: 10px; }
      .pg-feat__icon {
        width: 40px; height: 40px; border-radius: 10px;
        background: var(--uw-blue-50); display: grid; place-items: center;
        color: var(--uw-blue-600); flex-shrink: 0;
      }
      .pg-feat__title { font-size: 16px; font-weight: 600; color: var(--uw-ink-900); margin: 0; }
      .pg-feat__body { font-size: 15px; color: var(--uw-ink-600); line-height: 1.65; margin: 0; }
      .pg-cta-wrap { padding-block: clamp(72px, 9vw, 120px); }
      .pg-cta-card {
        background: #08111f;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: clamp(20px, 2.4vw, 28px);
        box-shadow: var(--shadow-lg);
        padding: clamp(48px, 6vw, 80px) clamp(32px, 5vw, 72px);
        text-align: center;
      }
      .pg-cta-card .msp-eyebrow { display: block; text-align: center; }
      .pg-cta-card .msp-h2 { color: #fff; text-align: center; max-width: 20ch; margin-inline: auto; margin-bottom: 0; }
      .pg-cta-card .msp-sub { color: rgba(255,255,255,.65); max-width: 54ch; margin-inline: auto; margin-top: clamp(14px,2vw,20px); text-align: center; }
      .pg-cta-card .msp-cta-row { justify-content: center; margin-inline: auto; margin-top: clamp(28px, 4vw, 44px); }
      .pg-cta-card .btn--outline {
        border-color: rgba(255,255,255,.4) !important;
        color: #fff !important;
        background: transparent !important;
        transition: background 0.18s ease, border-color 0.18s ease, color 0.18s ease, box-shadow 0.18s ease;
      }
      .pg-cta-card .btn--outline:hover {
        background: #fff !important;
        border-color: #fff !important;
        color: #08111f !important;
        box-shadow: 0 8px 24px rgba(255,255,255,0.12) !important;
      }
      @media (max-width: 640px) { .pg-feat-grid { grid-template-columns: 1fr 1fr; } }
      @media (max-width: 400px) { .pg-feat-grid { grid-template-columns: 1fr; } }
    </style>

<main>
    <section class="msp-hero" aria-labelledby="heroTitle">
      <div class="msp-wrap msp-hero__grid">
        <div class="msp-hero__copy reveal">
                    <h1 id="heroTitle" class="msp-h1">Master Step 1 from the ground up, in 6&nbsp;months.</h1>
          <p class="msp-lede">A structured, live-mentored program for IMGs who want to go beyond memorisation and develop real, lasting clinical understanding — from biochemistry to neurology.</p>
          <div class="msp-cta-row">
            <a class="btn btn--primary btn--xl" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Free Guidance Call</a>
            <a class="btn btn--outline btn--xl" href="/coaching">Back to Coaching</a>
          </div>
        </div>
      </div>

        <div class="msp-bar msp-wrap" aria-label="Track record">
          <div class="msp-bar__inner">
            <div class="msp-stat reveal"><b data-count="500" data-suffix="+">500+</b><span>Students coached</span></div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal"><b data-count="260" data-suffix="+">260+</b><span>Avg. mentor score</span></div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal"><b>Step 1 &ndash; 3</b><span>All USMLE steps covered</span></div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal"><b>IMG-focused</b><span>Built for international graduates</span></div>
          </div>
        </div>
    </section>
    <section class="msp-section pg-about" aria-labelledby="aboutTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">The program</span>
          <h2 id="aboutTitle" class="msp-h2">Six months. Every subject. A mentor beside you the whole way.</h2>
          <p class="msp-sub">Step 1 Mastery is a guided 6-month program that takes you through every high-yield subject in a deliberate, building sequence. Each week you cover new content in live sessions, receive feedback on practice, and get direct mentor access to clear blockers before they compound.</p>
        </div>
        <div class="pg-feat-grid">
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="calendar" width="20" height="20"></i></div>
              <p class="pg-feat__title">Weekly live sessions</p>
              <p class="pg-feat__body">Structured lectures covering one subject at a time, in the sequence that builds understanding fastest.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="user-check" width="20" height="20"></i></div>
              <p class="pg-feat__title">Personal mentor</p>
              <p class="pg-feat__body">A 260+ scorer assigned to your journey — available for questions, feedback, and accountability throughout.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="layers" width="20" height="20"></i></div>
              <p class="pg-feat__title">Full curriculum coverage</p>
              <p class="pg-feat__body">Every Step 1 subject from biochemistry and genetics through neurology, in a logical order that reinforces retention.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="message-circle" width="20" height="20"></i></div>
              <p class="pg-feat__title">Live Q&amp;A</p>
              <p class="pg-feat__body">Dedicated Q&amp;A time in every session. No question too basic, no concept glossed over.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="bar-chart-2" width="20" height="20"></i></div>
              <p class="pg-feat__title">Progress tracking</p>
              <p class="pg-feat__body">Regular check-ins and assessments so you always know where you stand and what to prioritise.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="users" width="20" height="20"></i></div>
              <p class="pg-feat__title">Small cohorts</p>
              <p class="pg-feat__body">Intentionally small groups so every student gets real attention — not a lecture hall experience.</p>
            </div>
        </div>
      </div>
    </section>
    <section class="msp-section" aria-labelledby="whyTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Why USMLE Wise</span>
          <h2 id="whyTitle" class="msp-h2">Mentors who have been through it. A system that actually works.</h2>
        </div>
        <div class="pg-feat-grid">
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="award" width="20" height="20"></i></div>
              <p class="pg-feat__title">260+ scoring mentors</p>
              <p class="pg-feat__body">Every mentor on our team is a physician who scored 260+ on the same exam you're preparing for. Their strategies are battle-tested.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="compass" width="20" height="20"></i></div>
              <p class="pg-feat__title">Built for IMGs</p>
              <p class="pg-feat__body">Everything — the curriculum sequence, the pacing, the advice — is designed specifically for international medical graduates.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="target" width="20" height="20"></i></div>
              <p class="pg-feat__title">Structure, not randomness</p>
              <p class="pg-feat__body">Most Step 1 failures come from inefficient, scattered prep. Our program gives you a clear path and holds you to it.</p>
            </div>
        </div>
      </div>
    </section>
    <section class="pg-cta-wrap">
      <div class="msp-wrap">
        <div class="pg-cta-card reveal" aria-labelledby="ctaTitle">
          <span class="msp-eyebrow msp-eyebrow--light">Get started</span>
          <h2 id="ctaTitle" class="msp-h2">Ready to build a score you're proud of?</h2>
          <p class="msp-sub">Book a free guidance call and we'll map out your Step 1 timeline, identify your gaps, and walk you through exactly how the Mastery program works.</p>
          <div class="msp-cta-row">
            <a class="btn btn--primary btn--xl" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Free Guidance Call</a>
            <a class="btn btn--outline btn--xl" href="https://wa.me/19192015700" target="_blank" rel="noopener noreferrer">Text Us on WhatsApp</a>
          </div>
        </div>
      </div>
    </section>
    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
