<?php
$pageTitle = "SOAP Match Support — Real-Time Scramble Guidance | USMLE Wise";
$pageDescription = "Real-time SOAP application strategy, interview prep, and scramble support when the Match doesn't go as planned. $1,550 — live support through SOAP week.";
$canonical = "https://usmlewise.com/match-soap";
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
          <h1 id="heroTitle" class="msp-h1">The Match didn't go as planned. This is not the time to freeze.</h1>
          <p class="msp-lede">If you didn't match, you have roughly 48 hours to apply to unfilled positions before they're gone. SOAP Match Support puts a physician mentor next to you in real time — strategy, applications, and interview prep, moving as fast as SOAP does.</p>
          <div class="msp-cta-row">
            <a class="btn btn--primary btn--xl" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Free Guidance Call</a>
            <a class="btn btn--outline btn--xl" href="https://wa.me/19192015700" target="_blank" rel="noopener noreferrer">Text Us on WhatsApp</a>
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
          <span class="msp-eyebrow">SOAP week</span>
          <h2 id="problemTitle" class="msp-h2">You don't get a normal application timeline. You get about 48 hours.</h2>
          <p class="msp-sub">SOAP — the Supplemental Offer and Acceptance Program — compresses an entire application cycle into a handful of rounds over two days. Unfilled programs post, you apply within hours, and offers can appear and disappear before you've finished reading the list. There's no time to second-guess your CV or rewrite a personal statement from scratch. What you need is someone who already knows how SOAP works, sitting with you while it happens.</p>
        </div>
      </div>
    </section>

    <!-- 4 SERVICE FEATURES -->
    <section class="msp-section" aria-labelledby="featuresTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">What's included</span>
          <h2 id="featuresTitle" class="msp-h2">Everything you need for the 48 hours that matter most.</h2>
          <p class="msp-sub">SOAP Match Support is built around the four things that actually decide how your SOAP week goes.</p>
        </div>
        <div class="pg-feat-grid">
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="list-checks" width="20" height="20"></i></div>
            <p class="pg-feat__title">SOAP application strategy</p>
            <p class="pg-feat__body">The moment your eligibility is confirmed, we help you build and prioritize your list of unfilled programs — which to apply to, in what order, and why, round by round.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="video" width="20" height="20"></i></div>
            <p class="pg-feat__title">Interview preparation</p>
            <p class="pg-feat__body">Rapid, focused prep for SOAP-specific conversations — condensed to the hours you actually have, and built around explaining your cycle honestly and confidently.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="zap" width="20" height="20"></i></div>
            <p class="pg-feat__title">Real-time SOAP support</p>
            <p class="pg-feat__body">Direct access to your mentor for the duration of SOAP week — not a scheduled call, but real-time support as rounds open, offers appear, and decisions need to be made fast.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="compass" width="20" height="20"></i></div>
            <p class="pg-feat__title">Post-SOAP guidance</p>
            <p class="pg-feat__body">Whatever the outcome, we help you plan the next step immediately — evaluating and accepting a position, or, if SOAP doesn't resolve it, preparing for next cycle.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- PROGRAM FEE -->
    <section class="msp-section" aria-labelledby="feeTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Program fee</span>
          <h2 id="feeTitle" class="msp-h2">One fee, covering the full SOAP week.</h2>
        </div>
        <div class="pg-fee">
          <div class="msp-pricing__rows reveal">
            <div class="msp-tier">
              <div class="msp-tier__info">
                <span class="msp-tier__name">SOAP Match Support</span>
                <div class="msp-tier__price">$1,550</div>
                <p class="msp-tier__sub">Real-time strategy and support through SOAP week.</p>
                <a class="btn btn--primary btn--sm" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Get Started</a>
              </div>
              <ul class="msp-tier__features">
                <li>SOAP application strategy</li>
                <li>Interview preparation</li>
                <li>Real-time SOAP support</li>
                <li>Post-SOAP guidance</li>
              </ul>
            </div>
          </div>
          <p class="msp-pricing__note">See our <a href="/refund-policy">Refund &amp; Guarantee Policy</a> for how refunds are handled.</p>
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
              How fast can we start once I know I need SOAP support?
            </button>
            <div class="accordion__body">
              As soon as you reach out. Most students contact us the moment results post — reach us by WhatsApp or the guidance call link above, and we move directly into building your application list. SOAP doesn't wait, and neither do we.
            </div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">
              Do you guarantee I'll match through SOAP?
            </button>
            <div class="accordion__body">
              No. Nobody can guarantee a SOAP match — the number of unfilled positions and the competition for them are outside anyone's control. What we guarantee is that you'll have an experienced mentor building your strategy and sitting with you in real time through every round, instead of navigating it alone.
            </div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">
              What if I don't match through SOAP either?
            </button>
            <div class="accordion__body">
              We help you plan the next step immediately — that's what post-SOAP guidance covers. For most students that means a clear-eyed look at what to change and a strategy for the next cycle, including whether one of our Complete Match Packages makes sense.
            </div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">
              Is the $1,550 fee refundable?
            </button>
            <div class="accordion__body">
              Refund requests for this program are reviewed case by case — see our <a href="/refund-policy">Refund &amp; Guarantee Policy</a> for details, or contact us directly to discuss your situation.
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
          <h2 id="ctaTitle" class="msp-h2">If SOAP is happening, reach out now.</h2>
          <p class="msp-sub">Text us on WhatsApp or book a call — whichever is faster for you right now. We'll start on your application strategy immediately.</p>
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
