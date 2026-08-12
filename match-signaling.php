<?php
$pageTitle = "Program Signaling Strategy — Gold & Silver Signal Planning | USMLE Wise";
$pageDescription = "Personalized program selection, geographic and competitiveness planning, and a strategy session to allocate your Gold and Silver signals where they'll actually move the needle. $800/specialty.";
$canonical = "https://usmlewise.com/match-signaling";
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
        grid-template-columns: repeat(2, 1fr);
        gap: clamp(20px, 3vw, 36px);
        margin-top: clamp(40px, 5vw, 60px);
      }
      .pg-feat {
        display: flex; flex-direction: column; gap: 10px;
        border: 1px solid var(--uw-border);
        border-radius: clamp(14px, 1.8vw, 20px);
        padding: clamp(24px, 3vw, 36px);
      }
      .pg-feat__icon {
        width: 40px; height: 40px; border-radius: 10px;
        background: var(--uw-blue-50); display: grid; place-items: center;
        color: var(--uw-blue-600); flex-shrink: 0;
      }
      .pg-feat__title { font-size: 16px; font-weight: 600; color: var(--uw-ink-900); margin: 0; }
      .pg-feat__body { font-size: 15px; color: var(--uw-ink-600); line-height: 1.65; margin: 0; }
      /* pricing — single-row .msp-tier, reused from the ERAS CV package table */
      .pg-fee { max-width: 860px; margin: clamp(40px, 5vw, 60px) auto 0; }
      .pg-tier__price-unit {
        font-family: var(--font-sans);
        font-size: 14px;
        font-weight: 400;
        letter-spacing: 0;
        color: var(--uw-ink-500);
      }
      /* FAQ */
      .pg-faq__accordion { max-width: 760px; margin: clamp(40px, 5vw, 60px) auto 0; }
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
      @media (max-width: 640px) { .pg-feat-grid { grid-template-columns: 1fr; } }
    </style>

<main>

    <!-- HERO -->
    <section class="msp-hero" aria-labelledby="heroTitle">
      <div class="msp-wrap msp-hero__grid">
        <div class="msp-hero__copy reveal">
          <h1 id="heroTitle" class="msp-h1">Your signals are limited. Spend them like it.</h1>
          <p class="msp-lede">ERAS gives every applicant a limited number of Gold and Silver signals to tell programs you're seriously interested — and IMG applicants can't afford to waste one on a program that was never in reach, or a program you were always going to interview at anyway. We build your signal strategy around your actual competitiveness, not a guess.</p>
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
          <h2 id="problemTitle" class="msp-h2">Not every signal is worth the same — and most applicants aren't told which is which.</h2>
          <p class="msp-sub">Program directors read signals as a filter, not a courtesy. Spend a Gold signal on a reach program with no realistic shot at your profile, and it's gone with nothing to show for it. Spend all of them on "safe" programs, and you've told the selective ones you were never serious about them. Getting this allocation right takes an honest, outside read of your own competitiveness — the one thing that's hardest to get looking at your own file.</p>
        </div>
      </div>
    </section>

    <!-- 4 SERVICE FEATURES -->
    <section class="msp-section" aria-labelledby="featuresTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">What's included</span>
          <h2 id="featuresTitle" class="msp-h2">A signal plan built on your actual profile, not a template.</h2>
          <p class="msp-sub">Program Signaling Strategy is built around the four things that determine whether your signals actually earn interviews.</p>
        </div>
        <div class="pg-feat-grid">
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="target" width="20" height="20"></i></div>
            <p class="pg-feat__title">Gold &amp; Silver signal strategy</p>
            <p class="pg-feat__body">We map your Gold and Silver signals against your specialty and profile, then optimize the allocation so each one lands on a program where it can genuinely change the outcome.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="map-pin" width="20" height="20"></i></div>
            <p class="pg-feat__title">Program selection &amp; geography</p>
            <p class="pg-feat__body">Personalized program selection combined with geographic preference planning, so your list reflects both where you're competitive and where you actually want to train.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="bar-chart-2" width="20" height="20"></i></div>
            <p class="pg-feat__title">Competitiveness assessment &amp; advisor call</p>
            <p class="pg-feat__body">An honest read of your Step scores, USCE, research, and background against real program-match data, plus a 1:1 call with a senior advisor to walk through the results and finalize your list.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="search" width="20" height="20"></i></div>
            <p class="pg-feat__title">The Matchmaker tool</p>
            <p class="pg-feat__body">Self-serve access to the Matchmaker tool our advisors built in-house — a searchable database of IMG-friendly programs with match history and stats, profile-to-program matching, and a signal allocation calculator that shows exactly where each Gold and Silver signal should go.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- PROGRAM FEE -->
    <section class="msp-section" aria-labelledby="feeTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Program fee</span>
          <h2 id="feeTitle" class="msp-h2">One strategy session, priced per specialty.</h2>
        </div>
        <div class="pg-fee">
          <div class="msp-pricing__rows reveal">
            <div class="msp-tier">
              <div class="msp-tier__info">
                <span class="msp-tier__name">Program Signaling Strategy</span>
                <div class="msp-tier__price">$800<span class="pg-tier__price-unit">/specialty</span></div>
                <p class="msp-tier__sub">A full signal allocation and program strategy session for one specialty.</p>
                <a class="btn btn--primary btn--sm" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Get Started</a>
              </div>
              <ul class="msp-tier__features">
                <li>Gold &amp; Silver signaling strategy</li>
                <li>Personalized program selection</li>
                <li>Geographic preference planning</li>
                <li>Competitiveness assessment</li>
                <li>Signal optimization</li>
                <li>Call with a senior advisor</li>
                <li>Self-serve access to the Matchmaker tool</li>
              </ul>
            </div>
          </div>
          <p class="msp-pricing__note">Applying to more than one specialty? Signaling strategy is priced per specialty — <a href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">book a call</a> and we'll scope a plan that covers all of them. See our <a href="/refund-policy">Refund &amp; Guarantee Policy</a> for how refunds are handled.</p>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="msp-section pg-about" id="faq" aria-labelledby="faqTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">F.A.Q</span>
          <h2 id="faqTitle" class="msp-h2">Your questions, answered.</h2>
        </div>
        <div class="pg-faq__accordion accordion reveal">
          <div class="accordion__item">
            <button class="accordion__head" type="button">
              How many Gold and Silver signals do I actually get?
            </button>
            <div class="accordion__body">
              The exact count varies by specialty and can change from cycle to cycle, since AAMC sets it as part of the ERAS Supplemental Application each year. We'll confirm the current allocation for your target specialty on your strategy call and build your plan around it.
            </div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">
              What if I'm applying to more than one specialty?
            </button>
            <div class="accordion__body">
              Program Signaling Strategy is priced per specialty, since a competitive signal strategy for one rarely transfers directly to another. Book a call and we'll scope a plan that covers every specialty you're applying to.
            </div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">
              Does signaling guarantee me an interview?
            </button>
            <div class="accordion__body">
              No. A signal tells a program you're seriously interested — it doesn't override your file. What it does is remove one common reason a competitive application gets passed over: a program reading it as a low-intent application and moving on.
            </div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">
              What is the Matchmaker tool?
            </button>
            <div class="accordion__body">
              It's a tool our advisors built in-house: a searchable database of IMG-friendly programs with match history and stats, a profile-matching engine that shortlists realistic programs from your Step scores, specialty, and background, and a signal allocation calculator to help you decide exactly where each Gold and Silver signal should go. Access is self-serve — you get your own login and can keep using it as your list evolves, not just during your strategy call.
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
          <h2 id="ctaTitle" class="msp-h2">Spend every signal like it matters.</h2>
          <p class="msp-sub">Book a free guidance call and we'll map your specialty, your competitiveness, and exactly how your signals should be allocated.</p>
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
