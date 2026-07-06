<?php
$pageTitle = "Step 1 Review Course | USMLE Wise";
$pageDescription = "USMLE Step 1 Review Course. Coming soon.";
$canonical = "https://usmlewise.com/coaching/step-1-review";
$bodyClass = "msp";
$stylesheets = [
    "/coaching.css"
];
$scripts = [
    "/coaching.js"
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
      .pg-cta-dark { background: var(--uw-ink-900); padding-block: clamp(72px, 9vw, 120px); text-align: center; }
      .pg-cta-dark .msp-h2 { color: #fff; }
      .pg-cta-dark .msp-sub { color: rgba(255,255,255,.65); max-width: 54ch; margin-inline: auto; margin-top: clamp(14px,2vw,20px); }
      .pg-cta-dark .msp-cta-row { justify-content: center; margin-top: clamp(28px, 4vw, 44px); }
      @media (max-width: 640px) { .pg-feat-grid { grid-template-columns: 1fr 1fr; } }
      @media (max-width: 400px) { .pg-feat-grid { grid-template-columns: 1fr; } }
    </style>

<main>
    <section class="msp-hero" aria-labelledby="heroTitle">
      <div class="msp-wrap msp-hero__grid">
        <div class="msp-hero__copy reveal">
                    <h1 id="heroTitle" class="msp-h1">A focused 10-day review before your Step 1 date.</h1>
          <p class="msp-lede">A recorded, high-yield review course covering every Step 1 subject in a systematic order — built for IMGs who have done their first pass and are ready to sharpen.</p>
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
          <span class="msp-eyebrow">The course</span>
          <h2 id="aboutTitle" class="msp-h2">Ten subjects. Ten days. Everything that matters on test day.</h2>
          <p class="msp-sub">The Step 1 Review Course walks through all major subjects in the order that reinforces retention — starting with biochemistry and building through pathology, pharmacology, and neurology. Each day is a self-contained, physician-led video lecture focused entirely on high-yield content.</p>
        </div>
        <div class="pg-feat-grid">
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="play-circle" width="20" height="20"></i></div>
              <p class="pg-feat__title">Recorded lectures</p>
              <p class="pg-feat__body">Physician-led video sessions you can watch and rewatch on your own schedule.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="list-checks" width="20" height="20"></i></div>
              <p class="pg-feat__title">High-yield only</p>
              <p class="pg-feat__body">Every concept in this course has been selected because it appears on the exam. Nothing extra, nothing missed.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="layers" width="20" height="20"></i></div>
              <p class="pg-feat__title">All 10 Step 1 subjects</p>
              <p class="pg-feat__body">Biochemistry, microbiology, pathology, pharmacology, immunology, cardiology, renal, neurology, and more — in one cohesive review.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="repeat" width="20" height="20"></i></div>
              <p class="pg-feat__title">Lifetime access</p>
              <p class="pg-feat__body">Rewatch any lecture as many times as you need, right up to exam day.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="clock" width="20" height="20"></i></div>
              <p class="pg-feat__title">Efficient format</p>
              <p class="pg-feat__body">Each day's lecture is concise and dense. Designed to cover serious ground without burning you out.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="bar-chart-2" width="20" height="20"></i></div>
              <p class="pg-feat__title">Pairs with any QBank</p>
              <p class="pg-feat__body">Use alongside UWorld or Amboss as your conceptual backbone while you push through questions.</p>
            </div>
        </div>
      </div>
    </section>
    <section class="msp-section" aria-labelledby="whyTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Why USMLE Wise</span>
          <h2 id="whyTitle" class="msp-h2">You've built the foundation. We'll help you make it stick.</h2>
        </div>
        <div class="pg-feat-grid">
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="award" width="20" height="20"></i></div>
              <p class="pg-feat__title">Taught by 260+ scorers</p>
              <p class="pg-feat__body">Every lecture is delivered by a physician who has scored at the top of Step 1 and knows which details actually move the needle.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="compass" width="20" height="20"></i></div>
              <p class="pg-feat__title">Built for IMGs</p>
              <p class="pg-feat__body">The pacing, the emphasis, the approach — all calibrated for how international medical graduates study and where they tend to struggle.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="target" width="20" height="20"></i></div>
              <p class="pg-feat__title">Review mode, not re-study</p>
              <p class="pg-feat__body">This is not a course for learning Step 1 from scratch. It's designed to consolidate what you've already built, fast.</p>
            </div>
        </div>
      </div>
    </section>
    <section class="pg-cta-dark" aria-labelledby="ctaTitle">
      <div class="msp-wrap">
        <span class="msp-eyebrow msp-eyebrow--light">Get started</span>
        <h2 id="ctaTitle" class="msp-h2">Your exam date is set. Make these 10 days count.</h2>
        <p class="msp-sub">Book a free guidance call to map out your final review window and find out if this course fits your timeline.</p>
        <div class="msp-cta-row">
          <a class="btn btn--primary btn--xl" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Free Guidance Call</a>
          <a class="btn btn--outline btn--xl" style="border-color:rgba(255,255,255,.25);color:#fff;" href="https://web.whatsapp.com/send?phone=&amp;text=Hey%2C%20I%20have%20questions%20for%20USMLEWise" target="_blank" rel="noopener noreferrer">Text Us on WhatsApp</a>
        </div>
      </div>
    </section>
    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
