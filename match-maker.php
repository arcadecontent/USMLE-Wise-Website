<?php
$pageTitle = "Match Maker: Residency Program List & Signal Planner | USMLE Wise";
$pageDescription = "Match Maker scores every active residency program against your profile, estimates your real interview odds, and places every Gold and Silver signal. Built on five years of match data. Free program list, $100 for the personalized one.";
$canonical = "https://usmlewise.com/match-maker";
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

      /* hero sample card */
      .pg-sample {
        position: relative;
        background: var(--uw-surface);
        border: 1px solid var(--uw-border);
        border-radius: clamp(16px, 2vw, 22px);
        box-shadow: var(--shadow-lg);
        padding: clamp(22px, 2.4vw, 28px);
      }
      .pg-sample__tag {
        display: inline-block;
        font-family: var(--font-mono);
        font-size: 9px;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: var(--uw-ink-400);
        background: var(--uw-ink-100);
        padding: 4px 9px;
        border-radius: 4px;
        margin-bottom: 16px;
      }
      .pg-sample__spec {
        display: block;
        font-family: var(--font-mono);
        font-size: 10.5px;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: var(--uw-blue-600);
        margin-bottom: 7px;
      }
      .pg-sample__name {
        font-size: var(--fs-md); font-weight: 600; color: var(--uw-ink-900);
        margin: 0 0 3px; line-height: 1.3;
      }
      .pg-sample__loc { font-size: 13px; color: var(--uw-ink-500); margin: 0; }
      .pg-sample__odds {
        display: flex; align-items: baseline; gap: 10px;
        margin: 20px 0 18px; padding-top: 18px;
        border-top: 1px solid var(--uw-border);
      }
      .pg-sample__odds b {
        font-family: var(--font-display);
        font-size: 44px; font-weight: 600; line-height: 1;
        letter-spacing: -0.03em; color: var(--uw-blue-500);
      }
      .pg-sample__odds b small { font-size: 0.55em; }
      .pg-sample__odds span {
        font-family: var(--font-mono);
        font-size: 10px; letter-spacing: 0.12em;
        text-transform: uppercase; color: var(--uw-ink-500);
      }
      .pg-sample__checks { list-style: none; margin: 0; padding: 0; display: grid; gap: 9px; }
      .pg-sample__checks li {
        display: flex; align-items: flex-start; gap: 8px;
        font-size: 13px; line-height: 1.4; color: var(--uw-ink-700);
      }
      .pg-sample__checks svg { flex-shrink: 0; margin-top: 2px; color: var(--uw-success-500); }
      .pg-sample__rec {
        margin-top: 18px; padding: 12px 14px;
        background: var(--uw-blue-50);
        border-radius: var(--r-md);
        font-size: 13px; line-height: 1.45; color: var(--uw-blue-800);
      }
      .pg-sample__rec b { font-weight: 600; }

      /* signal budget table */
      .pg-budget {
        max-width: 860px;
        margin: clamp(40px, 5vw, 60px) auto 0;
        border: 1px solid var(--uw-border);
        border-radius: var(--r-xl);
        overflow: hidden;
      }
      .pg-budget__head,
      .pg-budget__row {
        display: grid;
        grid-template-columns: 1fr auto auto;
        gap: clamp(12px, 2vw, 28px);
        align-items: center;
        padding: 14px clamp(18px, 2.5vw, 28px);
      }
      .pg-budget__head {
        background: var(--uw-surface-sunk);
        border-bottom: 1px solid var(--uw-border);
        font-family: var(--font-mono);
        font-size: 10px;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: var(--uw-ink-500);
      }
      .pg-budget__head span:not(:first-child),
      .pg-budget__row span:not(:first-child) { text-align: right; min-width: 5.5ch; }
      .pg-budget__row { border-bottom: 1px solid var(--uw-border); font-size: var(--fs-14-5); color: var(--uw-ink-800); }
      .pg-budget__row:last-child { border-bottom: none; }
      .pg-budget__row b { font-family: var(--font-mono); font-weight: 500; color: var(--uw-blue-600); }
      .pg-budget__row i { font-style: normal; color: var(--uw-ink-300); }
      .pg-budget__note {
        font-size: 13px;
        line-height: 1.6;
        color: var(--uw-ink-500);
        max-width: 860px;
        margin: 18px auto 0;
        text-align: center;
      }

      /* pricing: single-row .msp-tier, reused from the signaling package table */
      .pg-fee { max-width: 860px; margin: clamp(40px, 5vw, 60px) auto 0; }
      .pg-tier__price-unit {
        font-family: var(--font-sans);
        font-size: var(--fs-14);
        font-weight: 400;
        letter-spacing: 0;
        color: var(--uw-ink-500);
      }
      .pg-tier__was {
        display: inline-block;
        font-family: var(--font-sans);
        font-size: var(--fs-14);
        font-weight: 400;
        letter-spacing: 0;
        color: var(--uw-ink-400);
        text-decoration: line-through;
        margin-right: 8px;
      }
      .pg-disclaimer {
        font-size: 12.5px;
        line-height: 1.65;
        color: var(--uw-ink-400);
        max-width: 860px;
        margin: clamp(24px, 3vw, 32px) auto 0;
        text-align: center;
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
      .pg-cta-card .msp-h2 { color: #fff; text-align: center; max-width: 24ch; margin-inline: auto; margin-bottom: 0; }
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

      .pg-hero__trust {
        font-size: 13px;
        color: var(--uw-ink-500);
        margin: 16px 0 0;
      }

      @media (max-width: 768px) { .pg-sample { margin-top: 40px; } }
      @media (max-width: 520px) {
        .pg-budget__head, .pg-budget__row { grid-template-columns: 1fr auto; }
        .pg-budget__head span:nth-child(2), .pg-budget__row span:nth-child(2) { display: none; }
      }
    </style>

<main>

    <!-- HERO -->
    <section class="msp-hero" aria-labelledby="heroTitle">
      <div class="msp-wrap msp-hero__grid">
        <div class="msp-hero__copy reveal">
          <h1 id="heroTitle" class="msp-h1">Apply to fewer programs. <span class="msp-h1__accent">Hear back from more.</span></h1>
          <p class="msp-lede">Most of what an IMG spends on ERAS goes to programs that were never going to call. Match Maker scores every active residency program against your actual profile, shows you where your odds are real, and places each signal where it moves them the most.</p>
          <div class="msp-cta-row">
            <a class="btn btn--primary btn--xl" href="https://matchmaker.usmlewise.com/signup" target="_blank" rel="noopener noreferrer">Build My Free Program List</a>
            <a class="btn btn--outline btn--xl" href="#how">See How It Works</a>
          </div>
          <p class="pg-hero__trust">The program list is free. No card required.</p>
        </div>
        <div class="pg-sample reveal" aria-label="Sample scored program">
          <span class="pg-sample__tag">Illustrative sample</span>
          <span class="pg-sample__spec">Internal Medicine</span>
          <p class="pg-sample__name">University-affiliated program</p>
          <p class="pg-sample__loc">Northeast &middot; 48 positions</p>
          <div class="pg-sample__odds">
            <b>15<small>%</small></b>
            <span>Interview odds</span>
          </div>
          <ul class="pg-sample__checks">
            <li><i data-lucide="check" width="15" height="15"></i>Sponsors J-1 visa</li>
            <li><i data-lucide="check" width="15" height="15"></i>Has matched IMGs each of the last 5 years</li>
            <li><i data-lucide="check" width="15" height="15"></i>Your Step 2 is inside their matched range</li>
            <li><i data-lucide="check" width="15" height="15"></i>Your graduation gap is within their limit</li>
          </ul>
          <div class="pg-sample__rec"><b>Spend a Gold signal here.</b> Largest projected lift of any program on your list.</div>
        </div>
      </div>
      <div class="msp-bar msp-wrap" aria-label="Match Maker at a glance">
        <div class="msp-bar__inner">
          <div class="msp-stat reveal"><b data-count="7127" data-comma>7,127</b><span>Active programs scored</span></div>
          <div class="msp-divider" aria-hidden="true"></div>
          <div class="msp-stat reveal"><b data-count="5">5</b><span>Years of match data behind every score</span></div>
          <div class="msp-divider" aria-hidden="true"></div>
          <div class="msp-stat reveal"><b data-count="2.3" data-decimal="1" data-suffix="&times;">2.3&times;</b><span>More interviews on the personalized list</span></div>
          <div class="msp-divider" aria-hidden="true"></div>
          <div class="msp-stat reveal"><b>$100</b><span>One price, every specialty</span></div>
        </div>
      </div>
    </section>

    <!-- PROBLEM FRAMING -->
    <section class="msp-section pg-about" aria-labelledby="problemTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">The problem</span>
          <h2 id="problemTitle" class="msp-h2">Applying broadly is expensive, and most of that money is wasted.</h2>
          <p class="msp-sub">You pay a fee to a program that screens out your visa before a human opens your file. You spend a signal on a program that was flooded with them and never read yours. You skip a program that would have interviewed you because it looked out of reach. Every one of those mistakes is quiet, costs real money, and stays invisible until March. The usual fix is to apply to more programs, which costs more and changes nothing: a wider list made of the same guesses is still the same guesses.</p>
        </div>
      </div>
    </section>

    <!-- WHAT THE TOOL DOES -->
    <section class="msp-section" aria-labelledby="featuresTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">What it does</span>
          <h2 id="featuresTitle" class="msp-h2">What five years of match data knows that the filters don't.</h2>
          <p class="msp-sub">Published program filters tell you who a program will consider. Match Maker is built on what each program actually did.</p>
        </div>
        <div class="msp-services__grid">
          <div class="msp-svc reveal">
            <span class="msp-svc__no">01</span>
            <div>
              <h3>Who actually got interviewed</h3>
              <p>The free list applies the filters programs publish. The personalized list goes further: it pulls five years of match data, finds applicants whose credentials look like yours, and scores each program on what happened to them.</p>
            </div>
          </div>
          <div class="msp-svc reveal">
            <span class="msp-svc__no">02</span>
            <div>
              <h3>Signal graveyards</h3>
              <p>Some programs collect far more signals every cycle than they can act on, so yours is spent the moment it lands. Match Maker flags those programs and keeps your signals off them.</p>
            </div>
          </div>
          <div class="msp-svc reveal">
            <span class="msp-svc__no">03</span>
            <div>
              <h3>The screens that cut you before anyone reads</h3>
              <p>Visa sponsorship, years since graduation, Step attempts, minimum US clinical experience: the hard filters that disqualify an application before a human sees it. Every program is checked against your profile, so a program you can't be considered for never reaches your list.</p>
            </div>
          </div>
          <div class="msp-svc reveal">
            <span class="msp-svc__no">04</span>
            <div>
              <h3>Your list, built and signaled</h3>
              <p>You finish with a ranked list sorted into Reach, Target, and Likely, with every Gold and Silver signal already placed where it lifts your odds the most. Unlimited specialties on one price.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PROCESS -->
    <section class="msp-process" id="how" aria-labelledby="processTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">How it works</span>
          <h2 id="processTitle" class="msp-h2">From a blank profile to a signaled list.</h2>
        </div>
        <ol class="msp-steps">
          <li class="msp-step reveal">
            <div class="msp-step__marker" aria-hidden="true"></div>
            <div class="msp-step__content">
              <span class="msp-step__ghost" aria-hidden="true">01</span>
              <span class="msp-step__label">Step 01</span>
              <h3>Build your profile</h3>
              <p>A few minutes of input: specialty, Step scores and attempts, graduation year, visa need, US clinical experience, research.</p>
            </div>
          </li>
          <li class="msp-step reveal">
            <div class="msp-step__marker" aria-hidden="true"></div>
            <div class="msp-step__content">
              <span class="msp-step__ghost" aria-hidden="true">02</span>
              <span class="msp-step__label">Step 02</span>
              <h3>Get your free program list</h3>
              <p>Every program you are genuinely eligible for, screened on the hard filters. Free, and no card required to see it.</p>
            </div>
          </li>
          <li class="msp-step reveal">
            <div class="msp-step__marker" aria-hidden="true"></div>
            <div class="msp-step__content">
              <span class="msp-step__ghost" aria-hidden="true">03</span>
              <span class="msp-step__label">Step 03</span>
              <h3>Unlock the personalized list</h3>
              <p>Each program re-scored against five years of outcomes for applicants like you, sorted into Reach, Target, and Likely, with an interview-odds estimate on every line.</p>
            </div>
          </li>
          <li class="msp-step reveal">
            <div class="msp-step__marker" aria-hidden="true"></div>
            <div class="msp-step__content">
              <span class="msp-step__ghost" aria-hidden="true">04</span>
              <span class="msp-step__label">Step 04</span>
              <h3>Place your signals, then keep it current</h3>
              <p>Your Gold and Silver allocation laid out program by program. Add a Step 2 score or a publication and the whole list re-scores around it.</p>
            </div>
          </li>
        </ol>
      </div>
    </section>

    <!-- SIGNAL BUDGET -->
    <section class="msp-section pg-about" aria-labelledby="signalsTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Signal planning</span>
          <h2 id="signalsTitle" class="msp-h2">Signals are scarce. Match Maker makes each one count.</h2>
          <p class="msp-sub">Every specialty hands you a different budget: Gold and Silver tiers in Internal Medicine, a flat handful in Family Medicine, thirty in Orthopaedics. Match Maker places each one where the projected lift is largest, rather than spreading them evenly across a list.</p>
        </div>
        <div class="pg-budget reveal" role="table" aria-label="Signal budget by specialty">
          <div class="pg-budget__head" role="row">
            <span role="columnheader">Specialty</span>
            <span role="columnheader">Gold</span>
            <span role="columnheader">Silver</span>
          </div>
          <div class="pg-budget__row" role="row"><span role="cell">Internal Medicine</span><span role="cell"><b>3</b></span><span role="cell"><b>12</b></span></div>
          <div class="pg-budget__row" role="row"><span role="cell">Anesthesiology</span><span role="cell"><b>5</b></span><span role="cell"><b>10</b></span></div>
          <div class="pg-budget__row" role="row"><span role="cell">Dermatology</span><span role="cell"><b>3</b></span><span role="cell"><b>25</b></span></div>
          <div class="pg-budget__row" role="row"><span role="cell">Family Medicine</span><span role="cell"><i aria-label="not applicable">&ndash;</i></span><span role="cell"><b>5</b></span></div>
          <div class="pg-budget__row" role="row"><span role="cell">Psychiatry</span><span role="cell"><i aria-label="not applicable">&ndash;</i></span><span role="cell"><b>10</b></span></div>
          <div class="pg-budget__row" role="row"><span role="cell">General Surgery</span><span role="cell"><i aria-label="not applicable">&ndash;</i></span><span role="cell"><b>15</b></span></div>
          <div class="pg-budget__row" role="row"><span role="cell">Orthopaedic Surgery</span><span role="cell"><i aria-label="not applicable">&ndash;</i></span><span role="cell"><b>30</b></span></div>
          <div class="pg-budget__row" role="row"><span role="cell">Neurology</span><span role="cell"><i aria-label="not applicable">&ndash;</i></span><span role="cell"><b>8</b></span></div>
        </div>
        <p class="pg-budget__note">Signal allocations are set by the AAMC as part of the ERAS Supplemental Application and can change from cycle to cycle. Match Maker confirms the current counts for your specialty at the start of your application year.</p>
      </div>
    </section>

    <!-- PRICING -->
    <section class="msp-section" aria-labelledby="feeTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Pricing</span>
          <h2 id="feeTitle" class="msp-h2">One price, every specialty, one full match cycle.</h2>
        </div>
        <div class="pg-fee">
          <div class="msp-pricing__rows reveal">
            <div class="msp-tier">
              <div class="msp-tier__info">
                <span class="msp-tier__name">Match Maker</span>
                <div class="msp-tier__price"><span class="pg-tier__was">$150</span>$100<span class="pg-tier__price-unit">/cycle</span></div>
                <p class="msp-tier__sub">Launch price. A one-time payment that covers your full application cycle, across every specialty you apply to.</p>
                <a class="btn btn--primary btn--sm" href="https://matchmaker.usmlewise.com/signup" target="_blank" rel="noopener noreferrer">Start Free</a>
              </div>
              <ul class="msp-tier__features">
                <li>Free program list on every program you're eligible for</li>
                <li>Personalized list with interview-odds estimates</li>
                <li>Reach, Target, and Likely sorting</li>
                <li>Gold and Silver signal allocation</li>
                <li>Hard-filter screening on visa, graduation year, Step attempts, and USCE</li>
                <li>Live re-scoring whenever your profile changes</li>
                <li>Unlimited specialties</li>
              </ul>
            </div>
          </div>
          <p class="msp-pricing__note">Match Maker is the self-serve version. If you'd rather have a senior advisor build and defend the list with you, <a href="/match-signaling">Program Signaling Strategy</a> adds a competitiveness assessment and a 1:1 strategy call, and includes Match Maker access. See our <a href="/refund-policy">Refund &amp; Guarantee Policy</a> for how refunds are handled.</p>
          <p class="pg-disclaimer">Interview-odds figures are estimates generated from historical match data, not guarantees. USMLE Wise is an independent planning tool and is not affiliated with the AAMC, ERAS, or the NRMP.</p>
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
              What do I actually get for free?
            </button>
            <div class="accordion__body">
              Build your profile and you get the free program list: every active residency program you are genuinely eligible for, screened against the hard filters that would otherwise disqualify you (visa sponsorship, years since graduation, Step attempts, minimum US clinical experience). No card is required for that. The $100 upgrade is what adds the interview-odds estimates, the Reach / Target / Likely sorting, and the signal allocation.
            </div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">
              Is the $100 per specialty?
            </button>
            <div class="accordion__body">
              No. One payment covers every specialty you apply to for the full cycle, which matters if you're running a dual application. This is the one place Match Maker is priced differently from our advisor-led services: Program Signaling Strategy is priced per specialty because the work is done by a person.
            </div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">
              How accurate are the interview-odds estimates?
            </button>
            <div class="accordion__body">
              They are estimates, not predictions, and we'd rather be straight about that. Each one is the historical rate at which a program interviewed applicants whose credentials resemble yours, over five cycles of match data. That is a far better starting point than prestige rankings or a guess, but it cannot account for a program changing its leadership, its funding, or its appetite for IMGs this year. Use the numbers to rank and compare programs against each other, not as a promise about any single one.
            </div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">
              Where does the data come from?
            </button>
            <div class="accordion__body">
              Five years of match outcomes, program-published eligibility requirements, and the ERAS fields every program lists for itself, refreshed each cycle. Programs change visa policies and graduation-year limits more often than their websites suggest, so anything we can verify directly gets verified before it reaches your list.
            </div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">
              Do I still need Program Signaling Strategy?
            </button>
            <div class="accordion__body">
              Not necessarily. Match Maker gives you the list and the signal plan on your own. <a href="/match-signaling">Program Signaling Strategy</a> is for applicants who want a senior advisor to pressure-test it: an honest outside read of your competitiveness, a 1:1 call to work through the trade-offs, and geographic planning around where you actually want to train. Match Maker access is included in it, so you aren't paying twice.
            </div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">
              Does it work if I'm a US MD or DO applicant?
            </button>
            <div class="accordion__body">
              Yes. The scoring runs on the same five years of match data regardless of your pathway. The visa and graduation-gap screens simply stop applying to you, and the odds estimates compare you against applicants on your own pathway rather than against IMGs.
            </div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">
              When in the cycle should I start?
            </button>
            <div class="accordion__body">
              As early as you have a Step 1 result and a specialty in mind. The list re-scores every time your profile changes, so starting early means you can see what a Step 2 score or a publication would actually do to your odds while there's still time to act on it. Most applicants finalize their list and signal plan in the weeks before ERAS opens.
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
          <h2 id="ctaTitle" class="msp-h2">See your real odds before you spend a dollar on ERAS.</h2>
          <p class="msp-sub">Build your profile in a few minutes and get the free program list. Upgrade to the personalized list whenever you're ready.</p>
          <div class="msp-cta-row">
            <a class="btn btn--primary btn--xl" href="https://matchmaker.usmlewise.com/signup" target="_blank" rel="noopener noreferrer">Build My Free Program List</a>
            <a class="btn btn--outline btn--xl" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Free Guidance Call</a>
          </div>
        </div>
      </div>
    </section>

    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
