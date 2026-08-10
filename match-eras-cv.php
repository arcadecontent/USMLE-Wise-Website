<?php
$pageTitle = "ERAS CV 3X: Turn Your CV Into an Interview Magnet | USMLE Wise";
$pageDescription = "A live, line-by-line ERAS CV rebuild with a physician who has sat on residency selection committees. Built on the 3X Model. Submission-ready in 48 hours.";
$canonical = "https://usmlewise.com/match-eras-cv";
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
    /* ---- ERAS CV page ---- */
    .ec-h2--wide { max-width: 30ch; }

    /* problem block */
    .ec-problem { background: var(--uw-surface-sunk); border-block: 1px solid var(--uw-border); }
    .ec-problem__body { max-width: 72ch; }
    .ec-problem__body p { font-size: clamp(16px, 1.4vw, 18px); color: var(--uw-ink-700); line-height: 1.75; margin: 0 0 var(--space-4); }
    .ec-problem__body p:last-child { margin-bottom: 0; }
    .ec-problem__pull {
      font-family: var(--font-display);
      font-style: italic;
      font-size: clamp(20px, 2.4vw, 28px) !important;
      line-height: 1.45;
      color: var(--uw-ink-900) !important;
      border-left: 2px solid var(--uw-blue-500);
      padding-left: clamp(18px, 2.4vw, 28px);
      margin: clamp(28px, 3.5vw, 40px) 0 0 !important;
      max-width: 34ch;
    }

    /* generic card grids */
    .ec-grid { display: grid; gap: clamp(18px, 2.4vw, 28px); margin-top: clamp(40px, 5vw, 60px); }
    .ec-grid--4 { grid-template-columns: repeat(4, 1fr); }
    .ec-grid--3 { grid-template-columns: repeat(3, 1fr); }

    .ec-card {
      display: flex;
      flex-direction: column;
      gap: 12px;
      background: var(--uw-surface);
      border: 1px solid var(--uw-border);
      border-radius: var(--r-xl);
      padding: clamp(22px, 2.6vw, 32px);
    }
    .ec-card--sunk { background: var(--uw-surface-sunk); }
    .ec-card__icon {
      width: 42px; height: 42px; border-radius: 11px;
      background: var(--uw-blue-50); display: grid; place-items: center;
      color: var(--uw-blue-600); flex-shrink: 0;
    }
    .ec-card__no {
      font-family: var(--font-mono);
      font-size: 10.5px;
      letter-spacing: .14em;
      text-transform: uppercase;
      color: var(--uw-red-500);
    }
    .ec-card__title { font-size: 16.5px; font-weight: 600; color: var(--uw-ink-900); margin: 0; letter-spacing: -.01em; }
    .ec-card__body { font-size: 14.5px; color: var(--uw-ink-600); line-height: 1.7; margin: 0; }
    .ec-card__body em { font-style: italic; color: var(--uw-ink-500); }

    /* kicker line under a section */
    .ec-kicker {
      margin: clamp(28px, 3.5vw, 40px) 0 0;
      font-family: var(--font-display);
      font-size: clamp(19px, 2vw, 24px);
      line-height: 1.4;
      color: var(--uw-ink-900);
      max-width: 34ch;
    }
    .ec-kicker span { color: var(--uw-ink-400); }

    /* before / after */
    .ec-ba { display: grid; grid-template-columns: 1fr 1fr; gap: clamp(18px, 2.4vw, 28px); margin-top: clamp(40px, 5vw, 60px); }
    .ec-ba__col { border-radius: var(--r-xl); padding: clamp(26px, 3.2vw, 40px); border: 1px solid var(--uw-border); }
    .ec-ba__col--before { background: var(--uw-surface-sunk); }
    .ec-ba__col--after { background: #08111f; border-color: rgba(255,255,255,.08); }
    .ec-ba__label {
      font-family: var(--font-mono); font-size: 10.5px; letter-spacing: .14em;
      text-transform: uppercase; margin: 0 0 14px;
    }
    .ec-ba__col--before .ec-ba__label { color: var(--uw-ink-400); }
    .ec-ba__col--after .ec-ba__label { color: #7eb8f7; }
    .ec-ba__text { font-size: 15.5px; line-height: 1.75; margin: 0; }
    .ec-ba__col--before .ec-ba__text { color: var(--uw-ink-600); }
    .ec-ba__col--after .ec-ba__text { color: rgba(255,255,255,.78); }

    /* comparison: the shared .msp-compare hides itself under 820px, so
       re-show it here inside a horizontal scroller rather than leaving
       mobile with no table at all. */
    .ec-compare-scroll { width: 100%; }
    @media (max-width: 820px) {
      .ec-compare-scroll { overflow-x: auto; -webkit-overflow-scrolling: touch; }
      .ec-compare-scroll .msp-compare { display: block; min-width: 660px; }
    }
    .ec-compare-us { color: var(--uw-ink-900) !important; font-weight: 600; }
    .ec-compare-them { color: var(--uw-ink-400) !important; }

    /* pricing */
    .ec-price-note {
      font-family: var(--font-display);
      font-size: clamp(19px, 2vw, 24px);
      line-height: 1.4;
      color: var(--uw-ink-900);
      margin: 0 0 clamp(28px, 3.5vw, 40px);
      max-width: 30ch;
    }

    /* All four tiers share the .msp-tier row geometry so they line up as one
       continuous list. Overrides are scoped to #pricing so the shared
       component is untouched for the other pages that use it. */
    #pricing .msp-pricing__rows {
      background: transparent;
      border: 0;
      border-radius: 0;
      overflow: visible;
      display: flex;
      flex-direction: column;
      gap: clamp(16px, 2vw, 22px);
    }
    #pricing .msp-tier {
      align-items: stretch;
      gap: clamp(28px, 4.5vw, 72px);
      background: var(--uw-surface);
      border: 1px solid var(--uw-border);
      border-radius: var(--r-xl);
      box-shadow: var(--shadow-sm);
      transition: box-shadow var(--dur-med) var(--ease-out), border-color var(--dur-med);
    }
    #pricing .msp-tier:hover { box-shadow: var(--shadow-md); }
    #pricing .msp-tier__info { gap: 10px; }
    #pricing .msp-tier__sub { flex: none; margin-bottom: 2px; }
    #pricing .ec-tier-cta {
      margin-top: auto;
      align-self: stretch;
      text-align: center;
    }

    /* checkmarks read as "included", the bare dot didn't */
    #pricing .msp-tier__features {
      align-content: center;
      gap: 13px 36px;
    }
    #pricing .msp-tier__features li {
      font-size: 14px;
      line-height: 1.55;
      padding-left: 24px;
    }
    #pricing .msp-tier__features li::before {
      content: "\2713";
      font-size: 12px;
      font-weight: 700;
      top: 3px;
    }

    /* featured tier: blue wash + blue border beats the flat grey. The cards
       are separated now, so the border carries the emphasis on its own and
       the old inset accent rail would just be noise. */
    #pricing .msp-tier--featured {
      background: var(--uw-blue-50);
      border-color: var(--uw-blue-500);
      box-shadow: var(--shadow-md);
    }

    /* Dr. Madaan: the dark card that caps the list */
    #pricing .ec-tier--premium {
      background: #08111f;
      border-color: rgba(255,255,255,.12);
      box-shadow: var(--shadow-lg);
    }
    #pricing .ec-tier--premium:hover { box-shadow: var(--shadow-lg); }
    #pricing .ec-tier--premium .msp-tier__name {
      font-family: var(--font-display);
      font-size: 20px;
      font-weight: 600;
      letter-spacing: -.01em;
      text-transform: none;
      color: #fff;
    }
    #pricing .ec-tier--premium .msp-tier__price { color: #fff; }
    #pricing .ec-tier--premium .msp-tier__sub { color: rgba(255,255,255,.55); }
    #pricing .ec-tier--premium .msp-tier__features li { color: rgba(255,255,255,.82); }
    #pricing .ec-tier--premium .msp-tier__features li::before { color: #D69E2E; }
    #pricing .ec-tier--premium .btn--outline {
      border-color: rgba(255,255,255,.38) !important;
      color: #fff !important;
      background: transparent !important;
      transition: background .18s ease, border-color .18s ease, color .18s ease;
    }
    #pricing .ec-tier--premium .btn--outline:hover {
      background: #fff !important;
      border-color: #fff !important;
      color: #08111f !important;
    }

    .ec-tier__ident { display: flex; align-items: center; gap: 14px; margin-bottom: 4px; }
    .ec-tier__ident-text { display: flex; flex-direction: column; align-items: flex-start; gap: 7px; }
    .ec-tier__photo {
      width: 60px; height: 60px;
      border-radius: 50%;
      overflow: hidden;
      flex-shrink: 0;
      border: 2px solid rgba(255,255,255,.2);
    }
    .ec-tier__photo img { width: 100%; height: 100%; object-fit: cover; display: block; }
    .ec-tier__badge-gold {
      font-family: var(--font-mono);
      font-size: 9.5px;
      letter-spacing: .13em;
      text-transform: uppercase;
      background: #D69E2E;
      color: #08111f;
      padding: 4px 10px;
      border-radius: 999px;
      white-space: nowrap;
    }
    .ec-tier__price-unit {
      font-family: var(--font-sans);
      font-size: 14px;
      font-weight: 400;
      letter-spacing: 0;
      color: rgba(255,255,255,.42);
    }
    .ec-tier__detail {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 18px;
    }
    #pricing .ec-tier__detail .msp-tier__features { flex: none; }
    .ec-tier__note {
      font-size: 12.5px;
      line-height: 1.6;
      color: rgba(255,255,255,.42);
      margin: 0;
      padding-top: 16px;
      border-top: 1px solid rgba(255,255,255,.1);
    }

    @media (max-width: 820px) {
      #pricing .ec-tier-cta { align-self: stretch; }
      .ec-tier__detail { gap: 16px; }
    }

    /* testimonials — scrollable proof box, ported from the Match overview page */
    .ec-proof {
      max-width: 1040px;
      margin-inline: auto;
      max-height: 78vh;
      overflow-y: auto;
      border: 1px solid var(--uw-border);
      border-radius: var(--r-lg);
      background: var(--uw-surface);
      padding: 16px;
      scrollbar-width: thin;
      scrollbar-color: var(--uw-border) transparent;
    }
    .ec-proof::-webkit-scrollbar { width: 8px; }
    .ec-proof::-webkit-scrollbar-track { background: transparent; }
    .ec-proof::-webkit-scrollbar-thumb { background: var(--uw-border); border-radius: 999px; }
    .ec-proof__label {
      font-family: var(--font-mono);
      font-size: 11px;
      letter-spacing: .12em;
      text-transform: uppercase;
      color: var(--uw-ink-500);
      margin: 2px 0 12px;
    }
    .ec-proof__label--divided {
      margin-top: 8px;
      padding-top: 16px;
      border-top: 1px solid var(--uw-border);
    }
    .ec-proof__grid { column-count: 3; column-gap: 12px; }
    .ec-proof__grid img {
      width: 100%;
      display: block;
      margin-bottom: 12px;
      border-radius: var(--r-md);
      break-inside: avoid;
      background: var(--uw-bg);
    }
    @media (max-width: 820px) { .ec-proof__grid { column-count: 2; } }
    @media (max-width: 520px) { .ec-proof__grid { column-count: 1; } }

    /* guarantee */
    .ec-guarantee { background: var(--uw-surface-sunk); border-block: 1px solid var(--uw-border); }
    .ec-guarantee__inner {
      display: grid; grid-template-columns: 64px 1fr; gap: clamp(20px, 3vw, 32px);
      align-items: start; max-width: 76ch;
    }
    .ec-guarantee__icon {
      width: 64px; height: 64px; border-radius: 16px;
      background: var(--uw-blue-50); color: var(--uw-blue-600);
      display: grid; place-items: center;
    }
    .ec-guarantee__body p { font-size: clamp(15px, 1.3vw, 17px); line-height: 1.75; color: var(--uw-ink-700); margin: 0 0 var(--space-4); }
    .ec-guarantee__body p:last-child { margin-bottom: 0; }
    .ec-guarantee__body em { font-style: italic; color: var(--uw-ink-900); }

    /* contained CTA card */
    .ec-cta-wrap { padding-block: clamp(72px, 9vw, 120px); }
    .ec-cta-card {
      background: #08111f;
      border: 1px solid rgba(255,255,255,.08);
      border-radius: clamp(20px, 2.4vw, 28px);
      box-shadow: var(--shadow-lg);
      padding: clamp(48px, 6vw, 80px) clamp(32px, 5vw, 72px);
      text-align: center;
    }
    .ec-cta-card .msp-eyebrow { display: block; text-align: center; }
    .ec-cta-card .msp-h2 { color: #fff; text-align: center; max-width: 26ch; margin-inline: auto; margin-bottom: 0; }
    .ec-cta-card .msp-sub { color: rgba(255,255,255,.65); max-width: 54ch; margin-inline: auto; margin-top: clamp(14px,2vw,20px); text-align: center; }
    .ec-cta-card .msp-cta-row { justify-content: center; margin-inline: auto; margin-top: clamp(28px,4vw,44px); }
    .ec-cta-card .btn--outline {
      border-color: rgba(255,255,255,.4) !important; color: #fff !important; background: transparent !important;
      transition: background 0.18s ease, border-color 0.18s ease, color 0.18s ease, box-shadow 0.18s ease;
    }
    .ec-cta-card .btn--outline:hover {
      background: #fff !important; border-color: #fff !important; color: #08111f !important;
      box-shadow: 0 8px 24px rgba(255,255,255,0.12) !important;
    }
    .ec-cta-card__trust {
      margin: clamp(20px,3vw,28px) 0 0;
      font-family: var(--font-mono); font-size: 10.5px; letter-spacing: .12em;
      text-transform: uppercase; color: rgba(255,255,255,.35);
    }

    @media (max-width: 980px) {
      .ec-grid--4 { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 760px) {
      .ec-grid--3 { grid-template-columns: 1fr; }
      .ec-ba { grid-template-columns: 1fr; }
      .ec-guarantee__inner { grid-template-columns: 1fr; }
    }
    @media (max-width: 520px) {
      .ec-grid--4 { grid-template-columns: 1fr; }
    }
  </style>

<main>

      <!-- HERO -->
      <section class="msp-hero" aria-labelledby="heroTitle">
        <div class="msp-wrap msp-hero__grid">
          <div class="msp-hero__copy reveal">
            <h1 id="heroTitle" class="msp-h1">Turn your ERAS CV from a checklist into an <em>interview magnet</em>.</h1>
            <p class="msp-lede">Most CVs get skimmed and forgotten. We rebuild yours line by line, live, on a call, with a physician who has sat on residency selection committees. Submission-ready in 48 hours.</p>
            <div class="msp-cta-row">
              <a class="btn btn--primary btn--xl" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Start My ERAS CV 3X</a>
              <a class="btn btn--outline btn--xl" href="#pricing">See Packages</a>
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

      <!-- PROBLEM -->
      <section class="msp-section ec-problem" aria-labelledby="problemTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">The real problem</span>
            <h2 id="problemTitle" class="msp-h2 ec-h2--wide">Programs don't interview lists. They interview people.</h2>
          </div>
          <div class="ec-problem__body reveal">
            <p>A program director opens your CV. They read a few lines. Then they decide.</p>
            <p>If those lines sound like every other applicant's, they move on. Not because you're not good enough, but because nothing on the page told them otherwise.</p>
            <p>Done wrong, your CV makes you look flat. Done right, it makes a program director stop and think:</p>
            <p class="ec-problem__pull">&ldquo;This one feels different. I want to meet them.&rdquo;</p>
          </div>
        </div>
      </section>

      <!-- WHY CVs FAIL -->
      <section class="msp-section" aria-labelledby="failTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Why most ERAS CVs fail</span>
            <h2 id="failTitle" class="msp-h2 ec-h2--wide">Four reasons good applicants get passed over.</h2>
          </div>
          <div class="ec-grid ec-grid--4">
            <div class="ec-card ec-card--sunk reveal">
              <div class="ec-card__icon"><i data-lucide="eye-off" width="21" height="21"></i></div>
              <span class="ec-card__no">01</span>
              <p class="ec-card__title">Generic language</p>
              <p class="ec-card__body">&ldquo;Assisted in research.&rdquo; &ldquo;Volunteered in clinics.&rdquo; These phrases are on every CV in the stack. They hide your impact instead of showing it.</p>
            </div>
            <div class="ec-card ec-card--sunk reveal">
              <div class="ec-card__icon"><i data-lucide="trending-down" width="21" height="21"></i></div>
              <span class="ec-card__no">02</span>
              <p class="ec-card__title">No growth story</p>
              <p class="ec-card__body">A list of experiences with no thread running through it reads flat. Programs want to see who you became, not just where you were.</p>
            </div>
            <div class="ec-card ec-card--sunk reveal">
              <div class="ec-card__icon"><i data-lucide="scissors" width="21" height="21"></i></div>
              <span class="ec-card__no">03</span>
              <p class="ec-card__title">Weak, padded bullets</p>
              <p class="ec-card__body">Filler is obvious to anyone who reads CVs for a living. It signals you didn't have anything stronger to say.</p>
            </div>
            <div class="ec-card ec-card--sunk reveal">
              <div class="ec-card__icon"><i data-lucide="unlink" width="21" height="21"></i></div>
              <span class="ec-card__no">04</span>
              <p class="ec-card__title">Narrative friction</p>
              <p class="ec-card__body">When your CV, personal statement, and letters don't line up, it creates doubt. Doubt costs you interviews.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- THE 3X MODEL -->
      <section class="msp-section ec-problem" aria-labelledby="modelTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">The 3X Model&trade;</span>
            <h2 id="modelTitle" class="msp-h2 ec-h2--wide">We don't proofread your CV. We rebuild it against the exact criteria PDs use.</h2>
            <p class="msp-sub">Three frameworks, applied to every line of your CV.</p>
          </div>
          <div class="ec-grid ec-grid--3">
            <div class="ec-card reveal">
              <div class="ec-card__icon"><i data-lucide="layers" width="21" height="21"></i></div>
              <p class="ec-card__title">AAMC EACM holistic review</p>
              <p class="ec-card__body">Your CV stops being a list of tasks and starts proving something: your Experiences, Attributes, Competencies, and Metrics, tied into one story.</p>
            </div>
            <div class="ec-card reveal">
              <div class="ec-card__icon"><i data-lucide="shield-check" width="21" height="21"></i></div>
              <p class="ec-card__title">ACGME core competencies</p>
              <p class="ec-card__body">We map your bullets to the checklist programs are required to evaluate you on: patient care, medical knowledge, professionalism, systems awareness. The result is a CV that's hard to dismiss.</p>
            </div>
            <div class="ec-card reveal">
              <div class="ec-card__icon"><i data-lucide="message-circle" width="21" height="21"></i></div>
              <p class="ec-card__title">PCM-6 communication model</p>
              <p class="ec-card__body">Six layers of communication built into every bullet: clarity, truth, values, momentum, likeability, emotion. This is the difference between being read and being remembered.</p>
            </div>
          </div>
          <p class="ec-kicker reveal"><span>No templates. No AI fluff.</span> Just precision writing built to win interviews.</p>
        </div>
      </section>

      <!-- WHAT YOU GET -->
      <section class="msp-section" aria-labelledby="getTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">What you get</span>
            <h2 id="getTitle" class="msp-h2 ec-h2--wide">Everything included, in every package.</h2>
          </div>
          <div class="ec-grid ec-grid--3">
            <div class="ec-card ec-card--sunk reveal">
              <div class="ec-card__icon"><i data-lucide="video" width="21" height="21"></i></div>
              <p class="ec-card__title">Live 1:1 CV Surgery&trade;</p>
              <p class="ec-card__body">You rebuild your CV on a call with a physician mentor who has reviewed 1,000+ ERAS applications. Not a document you email in and wait on.</p>
            </div>
            <div class="ec-card ec-card--sunk reveal">
              <div class="ec-card__icon"><i data-lucide="edit-3" width="21" height="21"></i></div>
              <p class="ec-card__title">Precision language upgrades</p>
              <p class="ec-card__body">We sharpen the tone, rhythm, and phrasing of every bullet until it reads crisp and professional.</p>
            </div>
            <div class="ec-card ec-card--sunk reveal">
              <div class="ec-card__icon"><i data-lucide="star" width="21" height="21"></i></div>
              <p class="ec-card__title">&ldquo;Most meaningful&rdquo; guidance</p>
              <p class="ec-card__body">We review up to 15 of your experiences, narrow them to the 10 that carry weight, then pick the 3 to flag as most meaningful. You make the final call, with insider guidance behind it.</p>
            </div>
            <div class="ec-card ec-card--sunk reveal">
              <div class="ec-card__icon"><i data-lucide="shield" width="21" height="21"></i></div>
              <p class="ec-card__title">Red flag reframing</p>
              <p class="ec-card__body">Old graduation year. Exam attempts. Gaps. We don't hide them. We reframe them as evidence of resilience and growth.</p>
            </div>
            <div class="ec-card ec-card--sunk reveal">
              <div class="ec-card__icon"><i data-lucide="git-merge" width="21" height="21"></i></div>
              <p class="ec-card__title">PS + LOR alignment check</p>
              <p class="ec-card__body">We make sure your CV, personal statement, and letters all tell the same story. One clear person, across every document.</p>
            </div>
            <div class="ec-card ec-card--sunk reveal">
              <div class="ec-card__icon"><i data-lucide="refresh-cw" width="21" height="21"></i></div>
              <p class="ec-card__title">Unlimited revisions for 7 days</p>
              <p class="ec-card__body">Send tweaks. We turn each round around in 1&ndash;2 business days until it's right. <em>(Signature and above.)</em></p>
            </div>
          </div>
        </div>
      </section>

      <!-- PROCESS -->
      <section class="msp-process" aria-labelledby="processTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">How it works</span>
            <h2 id="processTitle" class="msp-h2 ec-h2--wide">Submission-ready in 48 hours.</h2>
          </div>
          <ol class="msp-steps">
            <li class="msp-step reveal">
              <div class="msp-step__marker" aria-hidden="true"></div>
              <div class="msp-step__content">
                <span class="msp-step__ghost" aria-hidden="true">01</span>
                <span class="msp-step__label">Step 01</span>
                <h3>Strategy audit</h3>
                <p>A quick intake call. We find your specialty fit, your red flags, and the themes worth building around.</p>
              </div>
            </li>
            <li class="msp-step reveal">
              <div class="msp-step__marker" aria-hidden="true"></div>
              <div class="msp-step__content">
                <span class="msp-step__ghost" aria-hidden="true">02</span>
                <span class="msp-step__label">Step 02</span>
                <h3>Live CV surgery</h3>
                <p>A 2&ndash;3 hour Zoom session where we rebuild your bullets into impact-driven lines, together.</p>
              </div>
            </li>
            <li class="msp-step reveal">
              <div class="msp-step__marker" aria-hidden="true"></div>
              <div class="msp-step__content">
                <span class="msp-step__ghost" aria-hidden="true">03</span>
                <span class="msp-step__label">Step 03</span>
                <h3>Polished draft</h3>
                <p>Within 24 hours you get a submission-ready CV. Not a rough cut.</p>
              </div>
            </li>
            <li class="msp-step reveal">
              <div class="msp-step__marker" aria-hidden="true"></div>
              <div class="msp-step__content">
                <span class="msp-step__ghost" aria-hidden="true">04</span>
                <span class="msp-step__label">Step 04</span>
                <h3>Refinement</h3>
                <p>For 7 days, send us tweaks. We refine until it sounds like you, just sharper.</p>
              </div>
            </li>
          </ol>
        </div>
      </section>

      <!-- BEFORE / AFTER -->
      <section class="msp-section ec-problem" aria-labelledby="baTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">The transformation</span>
            <h2 id="baTitle" class="msp-h2 ec-h2--wide">From second-guessing to submitting with confidence.</h2>
          </div>
          <div class="ec-ba">
            <div class="ec-ba__col ec-ba__col--before reveal">
              <p class="ec-ba__label">Before</p>
              <p class="ec-ba__text">You doubt every bullet. You worry you sound average. Your story feels disconnected and you're not sure you're highlighting the right things. Your CV is just a list.</p>
            </div>
            <div class="ec-ba__col ec-ba__col--after reveal">
              <p class="ec-ba__label">After</p>
              <p class="ec-ba__text">Your CV speaks for you. Every line is clear, specific, and yours. Program directors finish reading and want to meet you.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- COMPARISON -->
      <section class="msp-section" aria-labelledby="compareTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Compare</span>
            <h2 id="compareTitle" class="msp-h2 ec-h2--wide">Why this isn't the same as sending your CV to an editor.</h2>
          </div>
          <div class="ec-compare-scroll reveal">
            <div class="msp-compare">
              <table class="msp-compare__table" role="table">
                <thead>
                  <tr>
                    <th class="msp-compare__feat-col" scope="col">Feature</th>
                    <th class="msp-compare__col--featured" scope="col">
                      <span class="msp-compare__tier-name">ERAS CV 3X&trade;</span>
                    </th>
                    <th scope="col">
                      <span class="msp-compare__tier-name">Other services</span>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Who edits it</td>
                    <td class="msp-compare__col--featured ec-compare-us">Physician-editors with residency selection committee experience</td>
                    <td class="ec-compare-them">Freelancers, or doctors with no admissions background</td>
                  </tr>
                  <tr>
                    <td>Method</td>
                    <td class="msp-compare__col--featured ec-compare-us">Proprietary 3X Model&trade; (EACM, ACGME, PCM-6)</td>
                    <td class="ec-compare-them">No evaluation framework</td>
                  </tr>
                  <tr>
                    <td>Process</td>
                    <td class="msp-compare__col--featured ec-compare-us">Live 2&ndash;3 hour Zoom rebuild, with you</td>
                    <td class="ec-compare-them">Send it, wait, get static edits back</td>
                  </tr>
                  <tr>
                    <td>Turnaround</td>
                    <td class="msp-compare__col--featured ec-compare-us">48 hours</td>
                    <td class="ec-compare-them">7 days or longer</td>
                  </tr>
                  <tr>
                    <td>Alignment</td>
                    <td class="msp-compare__col--featured ec-compare-us">CV matched to your PS and LORs</td>
                    <td class="ec-compare-them">Treated as a standalone document</td>
                  </tr>
                  <tr>
                    <td>Red flags</td>
                    <td class="msp-compare__col--featured ec-compare-us">Gaps, YOG, attempts reframed as strengths</td>
                    <td class="ec-compare-them">Ignored</td>
                  </tr>
                  <tr>
                    <td>Guarantee</td>
                    <td class="msp-compare__col--featured ec-compare-us">Unlimited revisions (7 days) + satisfaction guarantee</td>
                    <td class="ec-compare-them">Limited revisions, no protection</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>

      <!-- PRICING -->
      <section class="msp-section ec-problem" id="pricing" aria-labelledby="pricingTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Packages</span>
            <h2 id="pricingTitle" class="msp-h2 ec-h2--wide">Pick your package.</h2>
          </div>
          <p class="ec-price-note reveal">Reapplying costs you a year. This costs you a weekend.</p>

          <!-- NOTE: these CTAs point at the guidance-call booking link because
               there is no Stripe/checkout URL for the ERAS CV packages yet.
               Swap the hrefs for the real checkout links (and relabel to
               "Buy Now") once they exist. uw-track.js already logs
               buy.stripe.com clicks as checkout_click automatically. -->
          <div class="msp-pricing__rows">

            <div class="msp-tier reveal">
              <div class="msp-tier__info">
                <span class="msp-tier__name">Lite Edit</span>
                <div class="msp-tier__price">$499</div>
                <p class="msp-tier__sub">A fast, expert tune-up.</p>
                <a class="btn btn--outline btn--sm ec-tier-cta" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Get Started</a>
              </div>
              <ul class="msp-tier__features">
                <li>Live CV Surgery&trade; (2 hours)</li>
                <li>Full 3X Model&trade; integration</li>
                <li>&ldquo;Most meaningful&rdquo; guidance</li>
                <li>1 revision included</li>
                <li>48-hour turnaround</li>
              </ul>
            </div>

            <div class="msp-tier msp-tier--featured reveal">
              <div class="msp-tier__info">
                <span class="msp-tier__badge">Most popular</span>
                <span class="msp-tier__name">Signature Surgery</span>
                <div class="msp-tier__price">$899</div>
                <p class="msp-tier__sub">The complete rebuild.</p>
                <a class="btn btn--primary btn--sm ec-tier-cta" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Get Started</a>
              </div>
              <ul class="msp-tier__features">
                <li>Live CV Surgery&trade; (3 hours)</li>
                <li>Full 3X Model&trade; integration</li>
                <li>Application coherence check (CV + PS + LORs)</li>
                <li>&ldquo;Most meaningful&rdquo; guidance</li>
                <li>Unlimited revisions for 7 days</li>
                <li>48-hour turnaround</li>
              </ul>
            </div>

            <div class="msp-tier reveal">
              <div class="msp-tier__info">
                <span class="msp-tier__name">Strategic Surgery</span>
                <div class="msp-tier__price">$1,199</div>
                <p class="msp-tier__sub">Everything, plus program signaling.</p>
                <a class="btn btn--outline btn--sm ec-tier-cta" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Get Started</a>
              </div>
              <ul class="msp-tier__features">
                <li>Everything in Signature, plus:</li>
                <li>Program signaling strategy: which programs to signal, and why</li>
                <li>Priority support until you submit</li>
              </ul>
            </div>

            <div class="msp-tier ec-tier--premium reveal">
              <div class="msp-tier__info">
                <div class="ec-tier__ident">
                  <div class="ec-tier__photo">
                    <img src="/match-membership-media/uploads/Profile-pic.jpeg" alt="Dr. Manik Madaan" loading="lazy">
                  </div>
                  <div class="ec-tier__ident-text">
                    <span class="ec-tier__badge-gold">With Dr. Madaan</span>
                    <span class="msp-tier__name">Dr. Manik Madaan</span>
                  </div>
                </div>
                <div class="msp-tier__price">$1,500<span class="ec-tier__price-unit">/session</span></div>
                <p class="msp-tier__sub">The founder, personally. Limited seats, serious applicants only.</p>
                <a class="btn btn--outline btn--sm ec-tier-cta" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Request a Seat</a>
              </div>
              <div class="ec-tier__detail">
                <ul class="msp-tier__features">
                  <li>A private 1:1 session with Dr. Manik Madaan himself</li>
                  <li>Application questions, red flags, and strategy, addressed directly with him</li>
                  <li>A complete ERAS CV overhaul with his personal guidance</li>
                  <li>Best in the industry</li>
                </ul>
                <p class="ec-tier__note">Covers your ERAS CV only. Personal statement and letters are not included.</p>
              </div>
            </div>

          </div>

          <p class="msp-pricing__note reveal">Not sure which one fits? Book a free guidance call and we'll tell you straight.</p>
        </div>
      </section>

      <!-- GUARANTEE -->
      <section class="msp-section ec-guarantee" aria-labelledby="guaranteeTitle">
        <div class="msp-wrap">
          <div class="ec-guarantee__inner reveal">
            <div class="ec-guarantee__icon"><i data-lucide="shield-check" width="30" height="30"></i></div>
            <div class="ec-guarantee__body">
              <span class="msp-eyebrow">Our guarantee</span>
              <h2 id="guaranteeTitle" class="msp-h2 ec-h2--wide">You don't carry the risk. We do.</h2>
              <p>If the fit with your editor isn't right, ask for a different physician editor. No extra cost, no argument.</p>
              <p>And on Signature and above, revisions are unlimited for 7 days. We don't stop until you read your CV and think: <em>yes, this is me.</em></p>
            </div>
          </div>
        </div>
      </section>

      <!-- TESTIMONIALS -->
      <section class="msp-section" aria-labelledby="proofTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">What our students say</span>
            <h2 id="proofTitle" class="msp-h2 ec-h2--wide">Applications rebuilt. Seasons ended.</h2>
          </div>
          <div class="ec-proof reveal">
            <p class="ec-proof__label">Match day</p>
            <div class="ec-proof__grid">
              <img src="/match-media/uploads/Instagram%20Photo%20Download%20(2).jpg" alt="USMLE Wise applicant who matched" loading="lazy">
              <img src="/match-media/uploads/Instagram%20Photo%20660329525.jpg" alt="USMLE Wise applicant who matched" loading="lazy">
              <img src="/match-media/uploads/656425718_17890021239448701_3488419753803306264_n.jpg" alt="USMLE Wise applicant who matched" loading="lazy">
              <img src="/match-media/uploads/Instagram%20Photo%20Download%20(1).jpg" alt="USMLE Wise applicant who matched" loading="lazy">
              <img src="/match-media/uploads/Instagram%20Photo%20656292960.jpg" alt="USMLE Wise applicant who matched" loading="lazy">
              <img src="/match-media/uploads/WhatsApp%20Image%20Apr%204%202026.jpeg" alt="USMLE Wise applicant who matched" loading="lazy">
              <img src="/match-media/uploads/WhatsApp%20Image%20Apr%204%202026%20(1).jpeg" alt="USMLE Wise applicant who matched" loading="lazy">
              <img src="/match-media/uploads/WhatsApp%20Image%20May%2016%202026.jpeg" alt="USMLE Wise applicant who matched" loading="lazy">
              <img src="/match-media/uploads/WhatsApp%20Image%20Apr%2015%202026.jpeg" alt="USMLE Wise applicant who matched" loading="lazy">
              <img src="/match-media/uploads/Instagram%20Photo%20657845911.jpg" alt="USMLE Wise applicant who matched" loading="lazy">
            </div>

            <p class="ec-proof__label ec-proof__label--divided">In their words</p>
            <div class="ec-proof__grid">
              <img src="/match-media/uploads/Zeel%20Patel.jpeg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/1.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/2.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/3.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/4.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/5.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/6.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/7.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/8.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/9.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/10.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/11.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/12.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/13.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Allegheny%20IM.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Anjali.jpeg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Ayesha%20Surgery.png" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Ayra.jpeg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Bardia.jpeg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/EM_Anniesha.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Guy%20Advanced%20Intereviewing.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Guy%20UOH.png" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Hamna.jpeg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Joycine%20matched.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Lakshita%20Advanced%20Interviewing.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Logesh.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Mounika.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Nancy.jpeg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Naz%20advanced%20interviewing.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Neuro.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Niyati%20Off%20Cycle.png" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Okkes.jpeg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Paranshi%20IM.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Pavani.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Praneet.jpeg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Psych%20match.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Rasmitha.jpeg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Ravindra.jpeg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/SOAP%201.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Saint%20Vincnent%20R.jpeg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Screenshot_20260703_032742_Instagram~2.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Shiv.jpeg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Shreya%20FM%20Match.jpeg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/SidNath.jpeg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Sinmmer.jpeg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Smit.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Sonia%201%20Advanced%20Interviewing.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Sonia%202%20Advanced%20Interviewing.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Soura%20Psych.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Swathi.jpeg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/UIC%20Peoria.jpeg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Unknown%201.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Unknown%203.jpeg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Unkown%202.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/Yog%2014.jpeg" alt="USMLE Wise student match testimonial" loading="lazy">
              <img src="/match-media/uploads/babitha.jpeg" alt="USMLE Wise student match testimonial" loading="lazy">
            </div>
          </div>
        </div>
      </section>

      <!-- FAQ -->
      <section class="msp-section msp-faq ec-problem" id="faq" aria-labelledby="faqTitle">
        <div class="msp-wrap msp-faq__grid">
          <div class="reveal">
            <span class="msp-eyebrow">Common questions</span>
            <h2 id="faqTitle" class="msp-h2">Questions, answered.</h2>
            <p class="msp-sub">Still unsure? The guidance call is free and covers your specific situation.</p>
            <a class="btn btn--outline msp-faq__cta" href="https://wa.me/19192015700" target="_blank" rel="noopener noreferrer">Get Your Questions Answered</a>
          </div>
          <div class="accordion reveal">
            <div class="accordion__item">
              <button class="accordion__head" type="button">I haven't written anything yet. Can I still use this?</button>
              <div class="accordion__body">Yes, and honestly, it's easier. Starting from blank means no bad habits to undo. In the strategy audit and live surgery we pull your experiences out of you and build the CV from scratch.</div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">I already finished my CV. Do I still need this?</button>
              <div class="accordion__body">Most likely yes. Even good drafts usually have weak bullets, generic phrasing, or quiet misalignment with your personal statement and letters. This isn't grammar cleanup. It's a rebuild into something programs respond to.</div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">Who actually edits my CV?</button>
              <div class="accordion__body">A physician-editor who has sat on residency selection committees and reviewed thousands of applications. No freelancers. No AI templates.</div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">How do you help me pick my &ldquo;most meaningful&rdquo; experiences?</button>
              <div class="accordion__body">We review up to 15 experiences together, narrow to the 10 that add the most value, then identify the 3 to highlight. You make the final choice, with insider-level guidance behind it.</div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">Do you help with geographic and setting preferences?</button>
              <div class="accordion__body">Yes. Regional ties, IMG-friendly states, and urban, suburban, or rural preferences are all covered. We help you phrase them so they strengthen your chances instead of limiting them.</div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">What about program signaling?</button>
              <div class="accordion__body">Included in Strategic Surgery. We help you decide which programs are worth a signal and line those choices up with your overall story.</div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">I have red flags: old YOG, exam attempts, gaps. Can you help?</button>
              <div class="accordion__body">That's a specialty of ours. We reframe red flags into stories of resilience and growth. Plenty of our clients with older graduation years or multiple attempts have matched because of it.</div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">How fast are revisions?</button>
              <div class="accordion__body">Signature and above get unlimited revisions for 7 days. Each round comes back in 1&ndash;2 business days.</div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">How fast is the whole thing?</button>
              <div class="accordion__body">Typically 48 hours: intake call, live surgery, polished draft, and revisions.</div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">What if I don't click with my editor?</button>
              <div class="accordion__body">Request a different physician editor at no extra cost. That's our satisfaction guarantee.</div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">Does this include personal statement editing or interview prep?</button>
              <div class="accordion__body">No. This is CV-only, by design. For the full application (CV, personal statement, signals, interview prep, and strategy), look at our Match packages. Many applicants add <a href="/match-ps3x">PS3X</a> to keep everything aligned.</div>
            </div>
          </div>
        </div>
      </section>

      <!-- FINAL CTA -->
      <section class="ec-cta-wrap">
        <div class="msp-wrap">
          <div class="ec-cta-card reveal" aria-labelledby="ctaTitle">
            <span class="msp-eyebrow msp-eyebrow--light">Get started</span>
            <h2 id="ctaTitle" class="msp-h2">Your CV is the first thing they read. Make it the reason they call you.</h2>
            <p class="msp-sub">48 hours. One live session. A CV that finally sounds like the doctor you actually are.</p>
            <div class="msp-cta-row">
              <a class="btn btn--primary btn--xl" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Start My ERAS CV 3X</a>
              <a class="btn btn--outline btn--xl" href="https://wa.me/19192015700" target="_blank" rel="noopener noreferrer">Text Us on WhatsApp</a>
            </div>
            <p class="ec-cta-card__trust">Satisfaction guarantee &middot; Unlimited revisions for 7 days</p>
          </div>
        </div>
      </section>

    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
