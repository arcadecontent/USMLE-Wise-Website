<?php
$pageTitle = "NBME Style Coaching (Step 1 and Step 2) | USMLE Wise";
$pageDescription = "USMLE NBME Style Coaching (Step 1 and Step 2). Coming soon.";
$canonical = "https://usmlewise.com/coaching-step23-mastery";
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
                    <h1 id="heroTitle" class="msp-h1">Practice in the exact format you'll be tested&nbsp;on.</h1>
          <p class="msp-lede">Interactive group classes built around NBME-style questions — so by the time you sit the exam, the format is already familiar and the strategies are second nature.</p>
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
          <div class="msp-stat reveal"><b>Step 1 &amp; Step 2</b><span>Both exams covered</span></div>
          <div class="msp-divider" aria-hidden="true"></div>
          <div class="msp-stat reveal"><b>Live &amp; interactive</b><span>Group classes, not lectures</span></div>
          <div class="msp-divider" aria-hidden="true"></div>
          <div class="msp-stat reveal"><b>IMG-focused</b><span>Built for international graduates</span></div>
        </div>
      </div>
    </section>

    <!-- WHAT IT IS -->
    <section class="msp-section pg-about" aria-labelledby="aboutTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">The format</span>
          <h2 id="aboutTitle" class="msp-h2">Exam simulation from day one. Live, collaborative, and strategic.</h2>
          <p class="msp-sub">Our NBME Style Teaching sessions replicate the exact format and feel of the questions you'll face on your final exams. Conducted in interactive group classes, each session is built around active participation — you solve questions live, debate answers, and learn from both instructors and peers in real time.</p>
        </div>
        <div class="pg-feat-grid">
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="file-question" width="20" height="20"></i></div>
            <p class="pg-feat__title">NBME-format questions throughout</p>
            <p class="pg-feat__body">Every class is built around NBME-style questions, so you're training in the same format you'll be tested on from your very first session.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="users" width="20" height="20"></i></div>
            <p class="pg-feat__title">Interactive group learning</p>
            <p class="pg-feat__body">You don't just watch — you solve questions live, debate answers, and learn from peers and instructors working through problems together.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="target" width="20" height="20"></i></div>
            <p class="pg-feat__title">Strategy and content in one</p>
            <p class="pg-feat__body">We teach not only the facts but also the exam tactics: how to read stems, eliminate traps, spot key clues, and manage time under pressure.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="zap" width="20" height="20"></i></div>
            <p class="pg-feat__title">Immediate feedback loop</p>
            <p class="pg-feat__body">Every answer is explained and every mistake corrected in the session — so you learn faster and don't carry wrong reasoning into the exam.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="shield-check" width="20" height="20"></i></div>
            <p class="pg-feat__title">Confidence through repetition</p>
            <p class="pg-feat__body">By the time you sit for the exam, NBME questions feel familiar. You've already solved hundreds under guidance — the format holds no surprises.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="message-circle" width="20" height="20"></i></div>
            <p class="pg-feat__title">Community and accountability</p>
            <p class="pg-feat__body">Group sessions build accountability and motivation, making preparation less isolating and more engaging than studying alone.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- WHY IT WORKS -->
    <section class="msp-section" aria-labelledby="whyTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Why it works</span>
          <h2 id="whyTitle" class="msp-h2">Most students study content. We train you to take the exam.</h2>
          <p class="msp-sub">Knowing the material is only half the battle. NBME exams are designed to test clinical reasoning — how you apply what you know under pressure, in ambiguous scenarios, against carefully constructed distractors. Our sessions close that gap.</p>
        </div>
        <div class="pg-feat-grid">
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="brain" width="20" height="20"></i></div>
            <p class="pg-feat__title">Reasoning, not memorisation</p>
            <p class="pg-feat__body">We train you to analyse a question stem the way the NBME intends — identifying the key clue, ignoring the distractor, arriving at the answer through logic rather than guessing.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="repeat" width="20" height="20"></i></div>
            <p class="pg-feat__title">Simulated exam pressure</p>
            <p class="pg-feat__body">Practising in a live group creates low-stakes pressure that mirrors the real exam — reducing anxiety and building the mental stamina you need on test day.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="compass" width="20" height="20"></i></div>
            <p class="pg-feat__title">Built for IMGs</p>
            <p class="pg-feat__body">The coaching accounts for how IMGs typically approach NBME questions — and specifically addresses the patterns and traps that catch international graduates most often.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- FINAL CTA -->
    <section class="pg-cta-wrap">
      <div class="msp-wrap">
        <div class="pg-cta-card reveal" aria-labelledby="ctaTitle">
          <span class="msp-eyebrow msp-eyebrow--light">Get started</span>
          <h2 id="ctaTitle" class="msp-h2">Stop practising in isolation. Start training the way the exam tests.</h2>
          <p class="msp-sub">Book a free guidance call and we'll walk you through the session format, the schedule, and whether NBME Style Coaching is the right fit for where you are in your prep.</p>
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
