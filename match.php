<?php
/*
  Match overview (/match). Rebuilt from scratch in the site's own components
  (match.css .msp-* system + page-local .mp-* blocks). Replaced the original
  design-tool page, which is archived outside the web root.
*/
$pageTitle = "Match Support | USMLE Wise";
$pageDescription = "Done-for-you Match support from former residency selection committee members: ERAS CV, personal statement, letters, signaling, and interview prep built into one story. Three packages, money-back guaranteed.";
$canonical = "https://usmlewise.com/match";
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
    /* ---- Match Packages page ---- */
    .mp-sunk { background: var(--uw-surface-sunk); border-block: 1px solid var(--uw-border); }
    .mp-h2--wide { max-width: 30ch; }

    /* hero portrait */
    .mp-hero__frame { position: relative; }
    .mp-hero__tag {
      position: absolute; left: 16px; right: 16px; bottom: 16px;
      background: rgba(8,17,31,.82); color: #fff;
      border-radius: var(--r-xl); padding: 14px 18px;
      backdrop-filter: blur(6px); -webkit-backdrop-filter: blur(6px);
    }
    .mp-hero__tag b { display: block; font-size: var(--fs-14-5, 14.5px); font-weight: 600; }
    .mp-hero__tag span { font-size: 12.5px; color: rgba(255,255,255,.72); }

    /* matched-at strip */
    /* founder story */
    .mp-story { display: grid; grid-template-columns: minmax(0, 1.5fr) minmax(0, 1fr); gap: clamp(32px, 5vw, 80px); align-items: center; }
    .mp-story__body p { font-size: clamp(16px, 1.4vw, 18px); color: var(--uw-ink-700); line-height: 1.75; margin: 0 0 var(--space-4); }
    .mp-story__pull {
      font-family: var(--font-display); font-style: italic;
      font-size: clamp(20px, 2.2vw, 26px) !important; line-height: 1.45;
      color: var(--uw-ink-900) !important;
      border-left: 2px solid var(--uw-blue-500); padding-left: clamp(18px, 2.4vw, 28px);
    }
    .mp-story__body .mp-story__who { font-size: 13.5px; color: var(--uw-ink-500); margin: var(--space-5) 0 0; }
    .mp-story__who b { display: block; color: var(--uw-ink-900); font-size: var(--fs-base); margin-bottom: 2px; }
    .mp-story__img { border-radius: var(--r-2xl); overflow: hidden; aspect-ratio: 4 / 5; box-shadow: var(--shadow-lg); }
    .mp-story__img img { width: 100%; height: 100%; object-fit: cover; object-position: center top; display: block; }

    /* cards */
    .mp-grid { display: grid; gap: clamp(14px, 2vw, 22px); }
    .mp-grid--3 { grid-template-columns: repeat(3, 1fr); }
    .mp-card {
      display: flex; flex-direction: column; gap: 12px;
      background: var(--uw-surface); border: 1px solid var(--uw-border);
      border-radius: var(--r-xl); padding: clamp(22px, 2.6vw, 32px);
    }
    .mp-card--sunk { background: var(--uw-surface-sunk); }
    .mp-card__icon {
      width: 42px; height: 42px; border-radius: 11px; background: var(--uw-blue-50);
      display: grid; place-items: center; color: var(--uw-blue-600); flex-shrink: 0;
    }
    .mp-card__no { font-family: var(--font-mono); font-size: 10.5px; letter-spacing: .14em; text-transform: uppercase; color: var(--uw-red-500); }
    .mp-card__title { font-size: var(--fs-16-5, 16.5px); font-weight: 600; color: var(--uw-ink-900); margin: 0; letter-spacing: -.01em; }
    .mp-card__body { font-size: var(--fs-14-5, 14.5px); color: var(--uw-ink-600); line-height: 1.7; margin: 0; }
    .mp-note { margin: clamp(24px, 3vw, 36px) 0 0; font-size: var(--fs-14); color: var(--uw-ink-500); }

    /* who we help */
    .mp-who { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1px; background: var(--uw-border); border: 1px solid var(--uw-border); border-radius: var(--r-xl); overflow: hidden; }
    .mp-who__item { background: var(--uw-surface); padding: clamp(22px, 2.6vw, 32px); }
    .mp-who__item h3 { font-size: var(--fs-16-5, 16.5px); font-weight: 600; color: var(--uw-ink-900); margin: 0 0 8px; }
    .mp-who__item p { font-size: var(--fs-14-5, 14.5px); color: var(--uw-ink-600); line-height: 1.65; margin: 0; }

    /* packages: reuse .msp-tier rows */
    .mp-tier__value { font-size: 12.5px; color: var(--uw-ink-500); margin: 0; }
    .mp-tier__fit { font-size: 13.5px; color: var(--uw-ink-600); line-height: 1.5; margin: 0; }
    .mp-tier__feat-head {
      grid-column: 1 / -1; font-family: var(--font-mono); font-size: 10.5px;
      letter-spacing: .14em; text-transform: uppercase; color: var(--uw-ink-500); padding-left: 0 !important;
    }
    .mp-tier__feat-head::before { content: none !important; }
    .mp-tier__unit { font-family: var(--font-sans); font-size: var(--fs-14); font-weight: 400; letter-spacing: 0; color: var(--uw-ink-500); }
    .mp-tier__guar {
      grid-column: 1 / -1; margin-top: 4px; padding: 12px 16px; border-radius: var(--r-lg, 12px);
      background: var(--uw-blue-50); color: var(--uw-ink-800, var(--uw-ink-700)); font-weight: 500;
    }
    .mp-tier__guar::before { content: none !important; }
    .mp-tier__guar { padding-left: 16px !important; }

    /* guarantees */
    .mp-guar { display: grid; grid-template-columns: repeat(2, 1fr); gap: clamp(14px, 2vw, 22px); }

    /* stories */
    .mp-video { display: block; text-decoration: none; color: inherit; }
    .mp-video__thumb { position: relative; border-radius: var(--r-xl); overflow: hidden; aspect-ratio: 16 / 9; background: var(--uw-ink-100); }
    .mp-video__thumb img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform .4s ease; }
    .mp-video:hover .mp-video__thumb img { transform: scale(1.03); }
    .mp-video__play {
      position: absolute; inset: 0; display: grid; place-items: center;
    }
    .mp-video__play i {
      width: 56px; height: 56px; border-radius: 50%; background: rgba(8,17,31,.78);
      color: #fff; display: grid; place-items: center;
    }
    .mp-video__tag { font-family: var(--font-mono); font-size: 10.5px; letter-spacing: .12em; text-transform: uppercase; color: var(--uw-red-500); margin: 14px 0 4px; display: block; }
    .mp-video__name { font-size: var(--fs-base); font-weight: 600; color: var(--uw-ink-900); }
    .mp-video__name span { font-weight: 400; color: var(--uw-ink-500); }
    .mp-more { margin-top: clamp(28px, 4vw, 44px); }

    /* comparison */
    .mp-compare-scroll { overflow-x: auto; -webkit-overflow-scrolling: touch; }
    .mp-compare-scroll .msp-compare { display: block; min-width: 640px; margin-top: 0; }

    /* team */
    .mp-team__img { aspect-ratio: 1 / 1; border-radius: var(--r-xl); overflow: hidden; background: var(--uw-ink-100); }
    .mp-team__img img { width: 100%; height: 100%; object-fit: cover; object-position: center top; display: block; }
    .mp-team__role { font-family: var(--font-mono); font-size: 10.5px; letter-spacing: .14em; text-transform: uppercase; color: var(--uw-red-500); margin: 16px 0 4px; display: block; }
    .mp-team h3 { font-size: var(--fs-md); font-weight: 600; color: var(--uw-ink-900); margin: 0 0 6px; }
    .mp-team p { font-size: var(--fs-14-5, 14.5px); color: var(--uw-ink-600); line-height: 1.65; margin: 0; }

    /* faq + cta */
    .mp-faq { max-width: 760px; margin: 0 auto; }
    .mp-cta-wrap { padding-block: clamp(72px, 9vw, 120px); }
    .mp-cta-card {
      background: #08111f; border: 1px solid rgba(255,255,255,.08);
      border-radius: clamp(20px, 2.4vw, 28px); box-shadow: var(--shadow-lg);
      padding: clamp(48px, 6vw, 80px) clamp(32px, 5vw, 72px); text-align: center;
    }
    .mp-cta-card .msp-h2 { color: #fff; max-width: 22ch; margin-inline: auto; margin-bottom: 0; }
    .mp-cta-card .msp-sub { color: rgba(255,255,255,.65); max-width: 54ch; margin: clamp(14px,2vw,20px) auto 0; }
    .mp-cta-card .msp-cta-row { justify-content: center; margin: clamp(28px,4vw,44px) auto 0; }
    .mp-cta-card .btn--outline {
      border-color: rgba(255,255,255,.4) !important; color: #fff !important; background: transparent !important;
      transition: background .18s ease, border-color .18s ease, color .18s ease;
    }
    .mp-cta-card .btn--outline:hover { background: #fff !important; border-color: #fff !important; color: #08111f !important; }

    @media (max-width: 900px) {
      .mp-story { grid-template-columns: 1fr; }
      .mp-story__img { max-width: 360px; }
      .mp-grid--3, .mp-who { grid-template-columns: 1fr; }
      .mp-guar { grid-template-columns: 1fr; }
    }
</style>

<main>

    <!-- HERO -->
    <section class="msp-hero" aria-labelledby="heroTitle">
      <div class="msp-wrap msp-hero__grid">
        <div class="msp-hero__copy reveal">
          <h1 id="heroTitle" class="msp-h1">Match into your dream residency in <em>one attempt</em>.</h1>
          <p class="msp-lede">Done-for-you Match support from former residency selection committee members. We build your ERAS CV, personal statement, letters, signals, and interviews into one coherent story, so this is your first and last Match season.</p>
          <div class="msp-cta-row">
            <a class="btn btn--primary btn--xl" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Schedule a Free Consultation</a>
            <a class="btn btn--outline btn--xl" href="#packages">See Packages</a>
          </div>
        </div>
        <div class="msp-hero__frame-wrap reveal">
          <div class="msp-hero__frame mp-hero__frame">
            <img src="/match-media/uploads/slot-team-manik.webp" alt="Dr. Manik Madaan" width="574" height="574" />
            <div class="mp-hero__tag">
              <b>Dr. Manik Madaan</b>
              <span>4 years on a residency selection committee</span>
            </div>
          </div>
        </div>
      </div>
      <div class="msp-bar msp-wrap" aria-label="Track record">
        <div class="msp-bar__inner">
          <div class="msp-stat reveal"><b data-count="88" data-suffix="%">88%</b><span>Student match rate</span></div>
          <div class="msp-divider" aria-hidden="true"></div>
          <div class="msp-stat reveal"><b data-count="2" data-suffix="x">2x</b><span>More interviews</span></div>
          <div class="msp-divider" aria-hidden="true"></div>
          <div class="msp-stat reveal"><b data-count="220" data-suffix="+">220+</b><span>Physician advisors</span></div>
          <div class="msp-divider" aria-hidden="true"></div>
          <div class="msp-stat reveal"><b data-count="1700" data-suffix="+">1,700+</b><span>Student reviews</span></div>
        </div>
      </div>
    </section>

    <!-- MATCHED AT -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/matched-ticker.php'; ?>

    <!-- STORY -->
    <section class="msp-section mp-sunk" aria-labelledby="storyTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Why we do this</span>
          <h2 id="storyTitle" class="msp-h2 mp-h2--wide">The email no one wants to open: &ldquo;We regret to inform you, you did not match.&rdquo;</h2>
        </div>
        <div class="mp-story">
          <div class="mp-story__body reveal">
            <p>Every year, thousands of capable applicants open Match Day to that same line. They worked hard enough. Their application just never lined up with what programs actually score.</p>
            <p>I'm Dr. Manik Madaan. I spent about four years on a residency selection committee, so I know what happens on the other side. I turned what programs select for into a process, the 3X framework, and built whole applications around it. Applicants who were unmatched for years have matched since, and first-timers have landed their dream residency, even in competitive specialties.</p>
            <p class="mp-story__pull">You've done the hard part. Your application should do you justice.</p>
            <p class="mp-story__who"><b>Dr. Manik Madaan</b> Contributor, USMLE Wise &middot; 700,000+ followers &middot; close to 12,000 students mentored</p>
          </div>
          <div class="mp-story__img reveal">
            <img src="/match-media/uploads/slot-team-manik.webp" alt="Dr. Manik Madaan" width="574" height="574" loading="lazy" />
          </div>
        </div>
      </div>
    </section>

    <!-- 3X FRAMEWORK -->
    <section class="msp-section" aria-labelledby="fwTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">The 3X framework</span>
          <h2 id="fwTitle" class="msp-h2 mp-h2--wide">Every document is written to three lenses.</h2>
          <p class="msp-sub">Programs judge your whole application against a fixed set of criteria. We build each piece to all three, so a committee reads one clear, trustworthy story from your CV to your interview.</p>
        </div>
        <div class="mp-grid mp-grid--3">
          <div class="mp-card mp-card--sunk reveal">
            <div class="mp-card__icon"><i data-lucide="layers" width="21" height="21"></i></div>
            <span class="mp-card__no">01</span>
            <p class="mp-card__title">AAMC holistic review</p>
            <p class="mp-card__body">Your experiences, attributes, competencies, and metrics tied into one story that backs up the scores already on your file.</p>
          </div>
          <div class="mp-card mp-card--sunk reveal">
            <div class="mp-card__icon"><i data-lucide="message-square-heart" width="21" height="21"></i></div>
            <span class="mp-card__no">02</span>
            <p class="mp-card__title">PCM-6 communication</p>
            <p class="mp-card__body">Six things a strong application carries at once: logical clarity, emotional truth, values, imagination, momentum, and likeability.</p>
          </div>
          <div class="mp-card mp-card--sunk reveal">
            <div class="mp-card__icon"><i data-lucide="stethoscope" width="21" height="21"></i></div>
            <span class="mp-card__no">03</span>
            <p class="mp-card__title">ACGME core competencies</p>
            <p class="mp-card__body">Your CV, statement, and answers quietly show patient care, knowledge, professionalism, and teamwork, the traits every program must evaluate.</p>
          </div>
        </div>
        <p class="mp-note reveal">Result: our students match at about 88%, roughly 2.6x the average IMG rate and close to the 92% of US MDs and DOs.</p>
      </div>
    </section>

    <!-- WHO WE HELP -->
    <section class="msp-section mp-sunk" aria-labelledby="whoTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Who we help</span>
          <h2 id="whoTitle" class="msp-h2 mp-h2--wide">Wherever you are in your Match journey.</h2>
        </div>
        <div class="mp-who reveal">
          <div class="mp-who__item"><h3>First-time applicants</h3><p>Done right from the start, so this is your first and last Match.</p></div>
          <div class="mp-who__item"><h3>IMG applicants</h3><p>Your international training is an advantage, and we show programs why.</p></div>
          <div class="mp-who__item"><h3>DO applicants</h3><p>A clear COMLEX and USMLE playbook built for the DO path.</p></div>
          <div class="mp-who__item"><h3>Older graduates</h3><p>A gap since graduation, handled so programs focus on your strengths.</p></div>
          <div class="mp-who__item"><h3>Competitive specialties</h3><p>Advanced strategy for the most competitive fields.</p></div>
          <div class="mp-who__item"><h3>Reapplicants</h3><p>Your last cycle, rebuilt into a sharper, stronger application.</p></div>
        </div>
      </div>
    </section>

    <!-- PACKAGES -->
    <section class="msp-section" id="packages" aria-labelledby="pkgTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Choose your package</span>
          <h2 id="pkgTitle" class="msp-h2 mp-h2--wide">One framework. Three levels of support.</h2>
          <p class="msp-sub">Every package rebuilds your ERAS CV and personal statement to the 3X framework, with 100% human editing by physicians (no AI) and a money-back guarantee.</p>
        </div>

        <div class="msp-pricing__rows">

          <div class="msp-tier reveal">
            <div class="msp-tier__info">
              <span class="msp-tier__name">Essentials Starter</span>
              <div class="msp-tier__price">$1,749</div>
              <p class="mp-tier__fit">For a strong applicant who mainly needs sharp documents.</p>
              <a class="btn btn--outline btn--sm" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Get Started</a>
            </div>
            <ul class="msp-tier__features">
              <li>Physician advisor</li>
              <li>Up to 2 ERAS CV revisions</li>
              <li>Up to 2 personal statement revisions</li>
              <li>Live 1-hour session to build your CV and PS together</li>
              <li>1-hour mock interview</li>
              <li>Match membership: 9+ courses ($399 value)</li>
              <li>Advanced Interviewing course ($500 value)</li>
              <li>2 to 4 day turnaround</li>
            </ul>
          </div>

          <div class="msp-tier msp-tier--featured reveal">
            <div class="msp-tier__info">
              <span class="msp-tier__badge">Most popular</span>
              <span class="msp-tier__name">Match Pro</span>
              <div class="msp-tier__price">$3,999</div>
              <p class="mp-tier__fit">For most applicants who want their whole strategy handled.</p>
              <a class="btn btn--primary btn--sm" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Secure My Spot</a>
            </div>
            <ul class="msp-tier__features">
              <li class="mp-tier__feat-head">Everything in Essentials, plus:</li>
              <li>Live 2-hour session</li>
              <li>Up to 3 personal statement revisions</li>
              <li>Weekly 1:1 hour with your advisor, through Match day</li>
              <li>1 to 2 hour profile review, then your strategy</li>
              <li>Program list built with you for one specialty</li>
              <li>We do your program signaling for you</li>
              <li>Up to 2 hours of mock interviews</li>
              <li>WhatsApp access to your advisor</li>
            </ul>
          </div>

          <div class="msp-tier reveal">
            <div class="msp-tier__info">
              <span class="msp-tier__name">Match Maximizer</span>
              <div class="msp-tier__price">$6,999</div>
              <p class="mp-tier__fit">For reapplicants, applicants with red flags, or an older year of graduation.</p>
              <a class="btn btn--outline btn--sm" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Secure My Spot</a>
            </div>
            <ul class="msp-tier__features">
              <li class="mp-tier__feat-head">Everything in Pro, plus:</li>
              <li>Live 4-hour session</li>
              <li>Unlimited personal statement revisions</li>
              <li>Deep 3-hour profile review and strategy</li>
              <li>We build your full program list for you</li>
              <li>We do all your signaling, across every specialty</li>
              <li>Support across up to 2 specialties</li>
              <li>Up to 4 hours of mock interviews</li>
              <li>4 LoR revisions and 3 letters of intent</li>
              <li>Dedicated SOAP and scramble support</li>
              <li>Unlimited WhatsApp access, 24/7</li>
              <li class="mp-tier__guar">Match edit guarantee: if you don't match, we keep working with you for as many cycles as it takes.</li>
            </ul>
          </div>

        </div>
        <p class="msp-pricing__note reveal">Prefer installments? Book a free call and we'll set up a plan. We'll also help you choose the right package.</p>
      </div>
    </section>

    <!-- GUARANTEES -->
    <section class="msp-section mp-sunk" aria-labelledby="guarTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Our guarantees</span>
          <h2 id="guarTitle" class="msp-h2 mp-h2--wide">The risk is on us, not you.</h2>
        </div>
        <div class="mp-guar">
          <div class="mp-card reveal">
            <div class="mp-card__icon"><i data-lucide="shield-check" width="21" height="21"></i></div>
            <p class="mp-card__title">Money-back guarantee, on every package</p>
            <p class="mp-card__body">It starts with your first working session. If you don't feel it's right for you, tell us and we'll refund you in full.</p>
          </div>
          <div class="mp-card reveal">
            <div class="mp-card__icon"><i data-lucide="refresh-cw" width="21" height="21"></i></div>
            <p class="mp-card__title">Match edit guarantee, on Maximizer</p>
            <p class="mp-card__body">If you don't match this cycle, we keep editing and re-strategizing at no extra cost, for as many cycles as it takes. The final decision sits with programs, so we commit to the work and stay with you the whole way.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- STORIES -->
    <section class="msp-section" aria-labelledby="storiesTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">In their words</span>
          <h2 id="storiesTitle" class="msp-h2 mp-h2--wide">Old grads, low scores, second attempts. Every path, told by the doctor who walked it.</h2>
        </div>
        <div class="mp-grid mp-grid--3">
          <a class="mp-video reveal" href="https://www.youtube.com/watch?v=WDrpqKmLwLs" target="_blank" rel="noopener noreferrer">
            <div class="mp-video__thumb">
              <img src="https://img.youtube.com/vi/WDrpqKmLwLs/hqdefault.jpg" alt="" loading="lazy" />
              <span class="mp-video__play"><i data-lucide="play" width="22" height="22"></i></span>
            </div>
            <span class="mp-video__tag">Old-grad match</span>
            <span class="mp-video__name">Ali <span>&middot; Internal Medicine</span></span>
          </a>
          <a class="mp-video reveal" href="https://www.youtube.com/watch?v=HSsrZERcvbI" target="_blank" rel="noopener noreferrer">
            <div class="mp-video__thumb">
              <img src="https://img.youtube.com/vi/HSsrZERcvbI/hqdefault.jpg" alt="" loading="lazy" />
              <span class="mp-video__play"><i data-lucide="play" width="22" height="22"></i></span>
            </div>
            <span class="mp-video__tag">Matched with a 218 on Step 2</span>
            <span class="mp-video__name">Anjali <span>&middot; Internal Medicine</span></span>
          </a>
          <a class="mp-video reveal" href="https://www.youtube.com/watch?v=izwBvdQgVc8" target="_blank" rel="noopener noreferrer">
            <div class="mp-video__thumb">
              <img src="https://img.youtube.com/vi/izwBvdQgVc8/hqdefault.jpg" alt="" loading="lazy" />
              <span class="mp-video__play"><i data-lucide="play" width="22" height="22"></i></span>
            </div>
            <span class="mp-video__tag">Prestigious match &middot; Albert Einstein</span>
            <span class="mp-video__name">Dyan <span>&middot; Internal Medicine</span></span>
          </a>
        </div>
        <div class="mp-more reveal">
          <a href="/testimonials" class="btn btn--ghost btn--sm">See all testimonials <i data-lucide="arrow-right" width="14" height="14"></i></a>
        </div>
      </div>
    </section>

    <!-- COMPARISON -->
    <section class="msp-section mp-sunk" aria-labelledby="compareTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Why students choose us</span>
          <h2 id="compareTitle" class="msp-h2 mp-h2--wide">USMLE Wise vs other services.</h2>
        </div>
        <div class="mp-compare-scroll reveal">
          <div class="msp-compare">
            <table class="msp-compare__table" role="table">
              <thead>
                <tr>
                  <th class="msp-compare__feat-col" scope="col">Feature</th>
                  <th class="msp-compare__col--featured" scope="col"><span class="msp-compare__tier-name">USMLE Wise</span></th>
                  <th scope="col"><span class="msp-compare__tier-name">Other services</span></th>
                </tr>
              </thead>
              <tbody>
                <tr><td>Risk to start</td><td class="msp-compare__col--featured">A free first session, no deposit to begin</td><td>Pay upfront before you speak to anyone</td></tr>
                <tr><td>How we work</td><td class="msp-compare__col--featured">Live sessions where we build it together</td><td>You send documents and wait for edits</td></tr>
                <tr><td>Scope</td><td class="msp-compare__col--featured">CV, PS, letters, signals, and interviews as one story</td><td>Edits in fragments you stitch together</td></tr>
                <tr><td>Advisors</td><td class="msp-compare__col--featured">220+ physicians who are IMGs, US MDs, and DOs</td><td>Mostly US advisors, often not physicians</td></tr>
                <tr><td>Support</td><td class="msp-compare__col--featured">Direct WhatsApp access to your advisor</td><td>An AI chatbot or a ticket queue</td></tr>
                <tr><td>Flexibility</td><td class="msp-compare__col--featured">Change advisors, schedule across time zones, move hours</td><td>Fixed advisor, rigid packages</td></tr>
                <tr><td>Courses</td><td class="msp-compare__col--featured">9+ courses, from personal statement to research</td><td>No extras</td></tr>
                <tr><td>Guarantee</td><td class="msp-compare__col--featured">Money-back on every package, match edit guarantee on Maximizer</td><td>Often none</td></tr>
                <tr><td>Reviews</td><td class="msp-compare__col--featured">1,700+ reviews</td><td>A handful of unverified reviews</td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <!-- TEAM -->
    <section class="msp-section" aria-labelledby="teamTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Meet the team</span>
          <h2 id="teamTitle" class="msp-h2 mp-h2--wide">You work with doctors who've done it.</h2>
          <p class="msp-sub">Led by the most-followed USMLE and Match expert in the world, alongside a program director who has matched hundreds of residents and a research faculty background from Duke and UPMC.</p>
        </div>
        <div class="mp-grid mp-grid--3 mp-team">
          <div class="reveal">
            <div class="mp-team__img"><img src="/match-media/uploads/slot-team-manik.webp" alt="Dr. Manik Madaan" width="574" height="574" loading="lazy" /></div>
            <span class="mp-team__role">Contributor</span>
            <h3>Dr. Manik Madaan</h3>
            <p>A doctor in the U.S. who served 4 years on a residency selection committee.</p>
          </div>
          <div class="reveal">
            <div class="mp-team__img"><img src="/match-media/uploads/slot-team-kothari.webp" alt="Dr. Nayan K. Kothari" width="360" height="371" loading="lazy" /></div>
            <span class="mp-team__role">Overseeing committee head</span>
            <h3>Dr. Nayan K. Kothari</h3>
            <p>Program Director, Internal Medicine, Rutgers-RWJ. Chair, Dept. of Medicine, Saint Peter's (1996-2025). Reviewed thousands of CVs and matched hundreds of residents.</p>
          </div>
          <div class="reveal">
            <div class="mp-team__img"><img src="/match-media/uploads/slot-team-kaushik.webp" alt="Dr. Kaushik Sreeram" width="574" height="574" loading="lazy" /></div>
            <span class="mp-team__role">Founder</span>
            <h3>Dr. Kaushik Sreeram</h3>
            <p>Former infectious disease and opioid researcher at Duke University and UPMC.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="msp-section mp-sunk" id="faq" aria-labelledby="faqTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal" style="margin-inline:auto;text-align:center">
          <span class="msp-eyebrow">F.A.Q</span>
          <h2 id="faqTitle" class="msp-h2" style="margin-inline:auto">Questions, answered honestly.</h2>
        </div>
        <div class="mp-faq accordion accordion--faq reveal">
          <div class="accordion__item">
            <button class="accordion__head" type="button">Which package is right for me?</button>
            <div class="accordion__body">Essentials suits a strong applicant who mostly needs sharp documents. Pro fits most people who want full strategy and a weekly mentor. Maximizer is for applicants with red flags, or anyone who wants everything done end to end. Not sure? Book a free call and we'll tell you honestly.</div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">What does the money-back guarantee cover?</button>
            <div class="accordion__body">Start with your first working session. If you don't feel it's right for you, tell us and we'll refund you in full.</div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">What is the match edit guarantee?</button>
            <div class="accordion__body">On Match Maximizer, if you don't match this cycle we keep working with you at no extra cost, for as many cycles as it takes. The final Match decision sits with the programs, so we commit to the work and stay with you the whole way.</div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">Who works on my application?</button>
            <div class="accordion__body">Physicians who matched in the U.S., sat on residency selection committees, and edit to the same criteria programs score you on. Every editor is a doctor, and every edit is done by a human.</div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">How do I get started?</button>
            <div class="accordion__body">Start with a free Match consultation. We review your profile, answer your questions, and recommend the right package. No deposit is needed to book the call.</div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">Do you help with program signaling and geographic preferences?</button>
            <div class="accordion__body">Yes. Pro and Maximizer include personalized signaling, and Maximizer includes done-for-you signals.</div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">Can I pay in installments?</button>
            <div class="accordion__body">Yes. Book a free call and we'll set up a plan.</div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">Does this work for IMGs, US IMGs, MDs, and DOs?</button>
            <div class="accordion__body">Yes. We work with all four, and we tailor the strategy to your profile and your red flags.</div>
          </div>
        </div>
      </div>
    </section>

    <!-- FINAL CTA -->
    <section class="mp-cta-wrap">
      <div class="msp-wrap">
        <div class="mp-cta-card reveal" aria-labelledby="ctaTitle">
          <h2 id="ctaTitle" class="msp-h2">Make this your final Match.</h2>
          <p class="msp-sub">Your Match comes down to how well your hard work is presented. Let's engineer every piece of it. Book a free consultation and we'll give you a straight answer on your best next step.</p>
          <div class="msp-cta-row">
            <a class="btn btn--primary btn--xl" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Schedule a Free Consultation</a>
            <a class="btn btn--outline btn--xl" href="https://wa.me/19192015700" target="_blank" rel="noopener noreferrer">Chat on WhatsApp</a>
          </div>
        </div>
      </div>
    </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
