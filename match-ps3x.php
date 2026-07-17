<?php
$pageTitle = "Personal Statement | USMLE Wise";
$pageDescription = "Strategic timing and editing of Letters of Interest and Letters of Intent for IMG residency applicants in the post-interview phase.";
$canonical = "https://usmlewise.com/match-ps3x";
$bodyClass = "msp";
$stylesheets = [
    "/styles/match.css"
];
$scripts = [
    "/js/match.js"
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
      /* numbered steps */
      .ps-steps { display: flex; flex-direction: column; gap: clamp(20px, 2.5vw, 28px); margin-top: clamp(44px,5vw,64px); }
      .ps-step {
        display: grid;
        grid-template-columns: 52px 1fr;
        gap: 20px;
        align-items: start;
      }
      .ps-step__num {
        width: 52px; height: 52px; border-radius: 50%;
        background: var(--uw-blue-50); border: 1px solid var(--uw-blue-100);
        display: grid; place-items: center; flex-shrink: 0;
        font-family: var(--font-mono); font-size: 14px; font-weight: 600;
        color: var(--uw-blue-600);
      }
      .ps-step__body { padding-top: 12px; }
      .ps-step__title { font-size: 17px; font-weight: 600; color: var(--uw-ink-900); margin: 0 0 6px; }
      .ps-step__desc { font-size: 15px; color: var(--uw-ink-600); line-height: 1.7; margin: 0; }
      /* CTA card */
      .pg-cta-wrap { padding-block: clamp(72px, 9vw, 120px); }
      .pg-cta-card {
        background: #08111f;
        border: 1px solid rgba(255,255,255,.08);
        border-radius: clamp(20px, 2.4vw, 28px);
        box-shadow: var(--shadow-lg);
        padding: clamp(48px, 6vw, 80px) clamp(32px, 5vw, 72px);
        text-align: center;
      }
      .pg-cta-card .msp-eyebrow { display: block; text-align: center; }
      .pg-cta-card .msp-h2 { color: #fff; text-align: center; max-width: 22ch; margin-inline: auto; margin-bottom: 0; }
      .pg-cta-card .msp-sub { color: rgba(255,255,255,.65); max-width: 54ch; margin-inline: auto; margin-top: clamp(14px,2vw,20px); text-align: center; }
      .pg-cta-card .msp-cta-row { justify-content: center; margin-inline: auto; margin-top: clamp(28px,4vw,44px); }
      .pg-cta-card .btn--outline {
        border-color: rgba(255,255,255,.4) !important; color: #fff !important; background: transparent !important;
        transition: background 0.18s ease, border-color 0.18s ease, color 0.18s ease, box-shadow 0.18s ease;
      }
      .pg-cta-card .btn--outline:hover {
        background: #fff !important; border-color: #fff !important; color: #08111f !important;
        box-shadow: 0 8px 24px rgba(255,255,255,0.12) !important;
      }
      @media (max-width: 640px) { .pg-feat-grid { grid-template-columns: 1fr 1fr; } }
      @media (max-width: 400px) { .pg-feat-grid { grid-template-columns: 1fr; } .ps-step { grid-template-columns: 1fr; } .ps-step__num { display: none; } }
    </style>

<main>

    <!-- HERO -->
    <section class="msp-hero" aria-labelledby="heroTitle">
      <div class="msp-wrap msp-hero__grid">
        <div class="msp-hero__copy reveal">
                    <h1 id="heroTitle" class="msp-h1">Before they look at your scores, they look at your&nbsp;story.</h1>
          <p class="msp-lede">The ERAS personal statement is your first and most critical interaction with the Program Director. We transform your raw experiences into a compelling narrative that leaves a lasting impression — in your voice, not ours.</p>
          <div class="msp-cta-row">
            <a class="btn btn--primary btn--xl" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Free Guidance Call</a>
            <a class="btn btn--outline btn--xl" href="/match">Back to Match</a>
          </div>
        </div>
      </div>
      <div class="msp-bar msp-wrap" aria-label="Track record">
        <div class="msp-bar__inner">
          <div class="msp-stat reveal"><b data-count="300" data-suffix="+">300+</b><span>Graduates matched</span></div>
          <div class="msp-divider" aria-hidden="true"></div>
          <div class="msp-stat reveal"><b data-count="10" data-suffix="+">10+</b><span>Specialties successfully matched</span></div>
          <div class="msp-divider" aria-hidden="true"></div>
          <div class="msp-stat reveal"><b data-count="4.9" data-decimal="1">4.9</b><span>Average mentor rating</span></div>
          <div class="msp-divider" aria-hidden="true"></div>
          <div class="msp-stat reveal"><b data-count="16" data-suffix="+">16+</b><span>Countries represented</span></div>
        </div>
      </div>
    </section>

    <!-- PROBLEM FRAMING -->
    <section class="msp-section pg-about" aria-labelledby="problemTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">The problem</span>
          <h2 id="problemTitle" class="msp-h2">A great story can easily get lost in the wrong hands.</h2>
          <p class="msp-sub">Most personal statements fail not because the applicant lacks a compelling story — but because that story gets buried in purple prose, over-complicated language, or rigid templates that strip out the applicant's voice entirely. To stand out, your statement needs to be authentic, engaging, and palatable to busy Program Directors who read hundreds of applications a day.</p>
        </div>
        <div class="pg-feat-grid">
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="user-check" width="20" height="20"></i></div>
            <p class="pg-feat__title">Collaborative partnership</p>
            <p class="pg-feat__body">You work directly with an experienced mentor who understands the nuances of the residency match process and knows how to align your goals with program expectations.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="zap" width="20" height="20"></i></div>
            <p class="pg-feat__title">A structured, efficient process</p>
            <p class="pg-feat__body">We respect your time. Our framework bypasses the trial-and-error phase, moving efficiently from your raw ideas to a polished, submission-ready final draft.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="fingerprint" width="20" height="20"></i></div>
            <p class="pg-feat__title">Preserved authenticity</p>
            <p class="pg-feat__body">We don't rewrite your history or use generic templates. Our focus is strictly on refining and elevating your genuine voice — your clinical passion remains completely yours.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- 4-PRONG STRATEGY -->
    <section class="msp-section" aria-labelledby="strategyTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Our approach</span>
          <h2 id="strategyTitle" class="msp-h2">The Four-Step, Four-Prong Strategy.</h2>
          <p class="msp-sub">We don't believe in cookie-cutter templates. Our proven framework is designed to put your best foot forward while keeping your unique voice entirely intact.</p>
        </div>
        <div class="ps-steps">
          <div class="ps-step reveal">
            <div class="ps-step__num">01</div>
            <div class="ps-step__body">
              <p class="ps-step__title">The Narrative Breakdown</p>
              <p class="ps-step__desc">Our mentors dive deep into your background to extract the core experiences that define your medical journey — finding the thread that connects everything you've done into a coherent, compelling story.</p>
            </div>
          </div>
          <div class="ps-step reveal">
            <div class="ps-step__num">02</div>
            <div class="ps-step__body">
              <p class="ps-step__title">Structural Optimisation</p>
              <p class="ps-step__desc">We organise your story into a succinct, focused, high-impact flow that matches exactly what Program Directors look for — strong opening, clear arc, purposeful close.</p>
            </div>
          </div>
          <div class="ps-step reveal">
            <div class="ps-step__num">03</div>
            <div class="ps-step__body">
              <p class="ps-step__title">Precision Polish</p>
              <p class="ps-step__desc">We strip away the fluff and over-complicated language, ensuring your clinical competence and passion shine through clearly. Every sentence earns its place.</p>
            </div>
          </div>
          <div class="ps-step reveal">
            <div class="ps-step__num">04</div>
            <div class="ps-step__body">
              <p class="ps-step__title">The Final Review</p>
              <p class="ps-step__desc">A rigorous quality check to guarantee your statement is flawless, professional, and ready to submit. Nothing leaves our hands unless we're confident it will land.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FINAL CTA -->
    <section class="pg-cta-wrap">
      <div class="msp-wrap">
        <div class="pg-cta-card reveal" aria-labelledby="ctaTitle">
          <span class="msp-eyebrow msp-eyebrow--light">Get started</span>
          <h2 id="ctaTitle" class="msp-h2">Your story is worth telling well. Let's make sure it is.</h2>
          <p class="msp-sub">Book a free guidance call and we'll look at your background, your target specialty, and what your personal statement needs to accomplish.</p>
          <div class="msp-cta-row">
            <a class="btn btn--primary btn--xl" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Free Guidance Call</a>
            <a class="btn btn--outline btn--xl" href="https://web.whatsapp.com/send?phone=19192015700&amp;text=Hey%2C%20I%20have%20questions%20for%20USMLEWise" target="_blank" rel="noopener noreferrer">Text Us on WhatsApp</a>
          </div>
        </div>
      </div>
    </section>

    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
