<?php
$pageTitle = "1:1 Tutoring | USMLE Wise";
$pageDescription = "USMLE 1:1 Tutoring. Coming soon.";
$canonical = "https://usmlewise.com/coaching-tutoring";
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

    <!-- HERO -->
    <section class="msp-hero" aria-labelledby="heroTitle">
      <div class="msp-wrap msp-hero__grid">
        <div class="msp-hero__copy reveal">
                    <h1 id="heroTitle" class="msp-h1">Personalised guidance every step of the&nbsp;way.</h1>
          <p class="msp-lede">For students who want individualised support, our One-on-One Mentoring program offers tailored coaching throughout your entire preparation journey — so you never have to navigate it alone.</p>
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

    <!-- WHAT IT IS -->
    <section class="msp-section pg-about" aria-labelledby="aboutTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">How it works</span>
          <h2 id="aboutTitle" class="msp-h2">One mentor. One student. A plan built entirely around you.</h2>
          <p class="msp-sub">Your mentor works closely with you to design study timetables, track your progress, and provide the motivation you need when it matters most. With structured planning and continuous feedback, you stay on track and build confidence that compounds — all the way to exam day.</p>
        </div>
        <div class="pg-feat-grid">
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="map" width="20" height="20"></i></div>
            <p class="pg-feat__title">Personalised roadmap</p>
            <p class="pg-feat__body">Your mentor designs a study plan tailored to your schedule, your strengths, and your weaknesses — not a generic template handed to every student.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="bar-chart-2" width="20" height="20"></i></div>
            <p class="pg-feat__title">Accountability that sticks</p>
            <p class="pg-feat__body">Weekly check-ins and progress tracking keep you on course, even when motivation dips. Your mentor notices before a bad week becomes a bad month.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="hand-helping" width="20" height="20"></i></div>
            <p class="pg-feat__title">Guidance at every stage</p>
            <p class="pg-feat__body">From building your timetable to refining test strategies, your mentor is there to guide every step — not just the hard ones.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="refresh-cw" width="20" height="20"></i></div>
            <p class="pg-feat__title">Adaptive support</p>
            <p class="pg-feat__body">Plans evolve as you do. Whether you need more practice questions, deeper theory, or help managing exam anxiety — your mentor adjusts.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="award" width="20" height="20"></i></div>
            <p class="pg-feat__title">Mentors who've done it themselves</p>
            <p class="pg-feat__body">You're coached by doctors who have sat the same exams, scored high, and know exactly what separates a good prep from a great one.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="shield-check" width="20" height="20"></i></div>
            <p class="pg-feat__title">Confidence built daily</p>
            <p class="pg-feat__body">With personalised guidance, you don't just prepare — you prepare with certainty, knowing you're never alone in the journey.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- WHY IT WORKS -->
    <section class="msp-section" aria-labelledby="whyTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Why 1:1 mentoring works</span>
          <h2 id="whyTitle" class="msp-h2">Generic prep plans fail most students. Yours won't.</h2>
          <p class="msp-sub">The reason most IMGs struggle isn't lack of effort — it's lack of direction. A personalised mentor changes that by keeping your preparation deliberate, adaptive, and continuously pointed at the right goals.</p>
        </div>
        <div class="pg-feat-grid">
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="user-check" width="20" height="20"></i></div>
            <p class="pg-feat__title">Someone in your corner</p>
            <p class="pg-feat__body">USMLE preparation is long and often isolating. Having a mentor who knows your case and checks in regularly makes a measurable difference in consistency and outcomes.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="compass" width="20" height="20"></i></div>
            <p class="pg-feat__title">IMG-specific understanding</p>
            <p class="pg-feat__body">We understand the pressures IMGs face — time gaps, visa constraints, family responsibilities — and we build prep plans that work within your real life.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="zap" width="20" height="20"></i></div>
            <p class="pg-feat__title">No wasted weeks</p>
            <p class="pg-feat__body">Every session ends with a clear next step. You'll never leave a call wondering what to do — your mentor makes sure your prep is always moving forward.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- FINAL CTA -->
    <section class="pg-cta-wrap">
      <div class="msp-wrap">
        <div class="pg-cta-card reveal" aria-labelledby="ctaTitle">
          <span class="msp-eyebrow msp-eyebrow--light">Get started</span>
          <h2 id="ctaTitle" class="msp-h2">You don't have to figure this out alone.</h2>
          <p class="msp-sub">Book a free guidance call and we'll match you with the right mentor for your exam, your timeline, and your goals.</p>
          <div class="msp-cta-row">
            <a class="btn btn--primary btn--xl" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Free Guidance Call</a>
            <a class="btn btn--outline btn--xl" href="https://web.whatsapp.com/send?phone=&amp;text=Hey%2C%20I%20have%20questions%20for%20USMLEWise" target="_blank" rel="noopener noreferrer">Text Us on WhatsApp</a>
          </div>
        </div>
      </div>
    </section>

    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
