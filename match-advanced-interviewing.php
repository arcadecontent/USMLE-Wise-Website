<?php
$pageTitle = "Advanced Interviewing by Dr. Manik Madaan | USMLE Wise";
$pageDescription = "Advanced Interviewing is a course designed to transform you into an advanced interviewer for whom the residency match is inevitable. $399, one year of access.";
$canonical = "https://usmlewise.com/match-advanced-interviewing";
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
      /* ---- Advanced Interviewing page ---- */
      .ai-h2--wide { max-width: 34ch; }

      /* hero video: the shared grid reserves a narrow 3fr column sized for a 4:5 portrait photo;
         a 16:9 video in that column renders too small, so this page widens the column instead */
      .msp-hero__grid.ai-hero-grid { grid-template-columns: 5fr 6fr; gap: 6%; }
      .ai-hero__video.msp-hero__frame { aspect-ratio: 16 / 9; }
      .ai-hero__video iframe { width: 100%; height: 100%; display: block; border: 0; }
      /* facade: YouTube's raw thumbnail frame + our own play button, so no YouTube chrome shows until the visitor clicks to load the real embed */
      .yt-facade {
        width: 100%; height: 100%; border: 0; padding: 0; cursor: pointer;
        background-size: cover; background-position: center;
        display: flex; align-items: center; justify-content: center;
      }
      .yt-facade i {
        width: 68px; height: 68px; border-radius: 50%;
        background: rgba(8,17,31,.72); color: #fff;
        display: grid; place-items: center;
        transition: background 0.18s ease, transform 0.18s ease;
      }
      .yt-facade:hover i { background: rgba(8,17,31,.9); transform: scale(1.06); }
      @media (max-width: 768px) {
        .msp-hero__grid.ai-hero-grid { grid-template-columns: 1fr; }
        .msp-hero__grid.ai-hero-grid .ai-hero__video.msp-hero__frame { display: block; }
      }

      .ai-problem { background: var(--uw-surface-sunk); border-block: 1px solid var(--uw-border); }
      .ai-problem__body { max-width: 72ch; margin-inline: auto; }
      .ai-problem__body p { font-size: clamp(16px, 1.4vw, 18px); color: var(--uw-ink-700); line-height: 1.75; margin: 0 0 var(--space-4); }
      .ai-problem__body p:last-child { margin-bottom: 0; }
      .ai-problem__body strong { color: var(--uw-ink-900); }

      .ai-figure { max-width: 640px; margin: clamp(32px, 4vw, 48px) auto 0; text-align: center; }
      .ai-figure img { max-width: 100%; height: auto; border-radius: var(--r-lg); border: 1px solid var(--uw-border); background: #fff; }

      /* left/right panels — text on one side, a single figure on the other, alternating per section */
      .ai-panel { display: grid; grid-template-columns: 1fr 1fr; gap: clamp(32px, 6vw, 80px); align-items: center; }
      .ai-panel--reverse .ai-panel__copy { order: 2; }
      .ai-panel--reverse .ai-panel__figure { order: 1; }
      .ai-panel__copy { text-align: left; }
      .ai-panel__copy .msp-eyebrow { display: block; }
      .ai-panel__copy .msp-h2 { margin-top: 12px; }
      .ai-panel__copy p { font-size: clamp(15px, 1.3vw, 16.5px); color: var(--uw-ink-700); line-height: 1.75; margin: 0 0 14px; }
      .ai-panel__copy p:last-child { margin-bottom: 0; }
      .ai-panel__copy strong { color: var(--uw-ink-900); }
      .ai-panel__figure { display: flex; flex-direction: column; gap: 16px; }
      .ai-panel__figure img { width: 100%; height: auto; border-radius: var(--r-lg); border: 1px solid var(--uw-border); background: #fff; box-shadow: var(--shadow-sm); }
      /* tall/narrow diagrams (e.g. vertical flowcharts) — same square, padded card as the other panel figures, image contained inside instead of stretched */
      .ai-panel__figure--cap {
        aspect-ratio: 1 / 1;
        border-radius: var(--r-lg);
        border: 1px solid var(--uw-border);
        background: #fff;
        box-shadow: var(--shadow-sm);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: clamp(24px, 4vw, 40px);
      }
      .ai-panel__figure--cap img { width: auto; height: auto; max-width: 100%; max-height: 100%; border: 0; box-shadow: none; background: none; object-fit: contain; }
      @media (max-width: 820px) {
        .ai-panel { grid-template-columns: 1fr; }
        .ai-panel--reverse .ai-panel__copy, .ai-panel--reverse .ai-panel__figure { order: initial; }
      }

      .ai-insight {
        max-width: 820px; margin: clamp(40px, 5vw, 60px) auto 0;
        background: #08111f; border: 1px solid rgba(255,255,255,.08);
        border-radius: clamp(16px, 2vw, 24px);
        padding: clamp(28px, 3.6vw, 44px);
        text-align: center;
      }
      .ai-insight__label { font-family: var(--font-mono); font-size: 11px; letter-spacing: .14em; text-transform: uppercase; color: #7eb8f7; margin: 0 0 14px; }
      .ai-insight__text { font-family: var(--font-display); font-size: clamp(19px, 2.4vw, 26px); line-height: 1.4; color: #fff; margin: 0 0 10px; }
      .ai-insight__body { font-size: 15px; line-height: 1.7; color: rgba(255,255,255,.7); margin: 0; }
      .ai-insight__cite { font-size: 13px; color: rgba(255,255,255,.5); margin-top: 14px; }

      /* modules */
      .ai-modules { display: flex; flex-direction: column; gap: clamp(28px, 3vw, 40px); margin-top: clamp(40px, 5vw, 60px); }
      .ai-module { border: 1px solid var(--uw-border); border-radius: clamp(16px, 2vw, 22px); padding: clamp(26px, 3.2vw, 40px); background: var(--uw-surface); }
      .ai-module__head { display: flex; align-items: flex-start; gap: 16px; margin-bottom: clamp(18px, 2vw, 24px); }
      .ai-module__num { font-family: var(--font-display); font-size: 32px; color: var(--uw-blue-500); line-height: 1; flex-shrink: 0; }
      .ai-module__title { font-size: 20px; font-weight: 600; color: var(--uw-ink-900); margin: 0 0 4px; }
      .ai-module__sub { font-size: 14.5px; color: var(--uw-ink-500); margin: 0; }
      .ai-module__intro { font-size: 15px; line-height: 1.7; color: var(--uw-ink-700); margin: 0 0 22px; }
      .ai-module__diagram { max-width: 460px; margin: 0 auto 26px; }
      .ai-module__diagram img { width: 100%; height: auto; border-radius: var(--r-md); }
      .ai-topics { display: flex; flex-direction: column; gap: 16px; }
      .ai-topic-item { display: flex; gap: 12px; align-items: flex-start; }
      .ai-topic-item__icon { width: 26px; height: 26px; border-radius: 8px; background: var(--uw-blue-50); color: var(--uw-blue-600); display: grid; place-items: center; flex-shrink: 0; margin-top: 2px; }
      .ai-topic-item__title { font-size: 14.5px; font-weight: 600; color: var(--uw-ink-900); margin: 0 0 3px; }
      .ai-topic-item__body { font-size: 14px; line-height: 1.65; color: var(--uw-ink-600); margin: 0; }
      .ai-topic-item__body ul { margin: 6px 0 0; padding-left: 18px; }
      .ai-topic-item__body li { margin-bottom: 3px; }

      /* founder credibility */
      .ai-founder { display: grid; grid-template-columns: 300px 1fr; gap: clamp(28px, 4vw, 48px); align-items: stretch; max-width: 900px; margin: clamp(40px, 5vw, 60px) auto 0; }
      /* no aspect-ratio here: the card sets the row height, and align-items:stretch would
         then derive the photo's *width* from that height, overflowing the column into the card */
      .ai-founder__photo { min-width: 0; border-radius: var(--r-lg); overflow: hidden; box-shadow: var(--shadow-sm); }
      .ai-founder__photo img { width: 100%; height: 100%; object-fit: cover; display: block; }
      .ai-founder__card {
        background: var(--uw-surface);
        border: 1px solid var(--uw-border);
        border-radius: var(--r-lg);
        box-shadow: var(--shadow-sm);
        padding: clamp(26px, 3vw, 36px);
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      .ai-founder__quote { font-family: var(--font-display); font-size: 19px; color: var(--uw-ink-900); margin: 0 0 14px; line-height: 1.4; }
      .ai-founder__body p { font-size: 14.5px; color: var(--uw-ink-600); line-height: 1.7; margin: 0 0 10px; }
      .ai-founder__body p:last-child { margin-bottom: 0; }
      .ai-founder__stats { display: flex; flex-wrap: wrap; gap: 20px 32px; margin-top: 20px; padding-top: 20px; border-top: 1px solid var(--uw-border); }
      .ai-founder__stat b { display: block; font-family: var(--font-display); font-size: 22px; color: var(--uw-blue-600); }
      .ai-founder__stat span { font-size: 12.5px; color: var(--uw-ink-500); }

      /* video */
      .ai-video { max-width: 720px; margin: clamp(32px, 4vw, 48px) auto 0; text-align: center; }
      .ai-video__frame {
        aspect-ratio: 16/9; border-radius: var(--r-lg); overflow: hidden;
        background: #08111f;
        border: 1px solid var(--uw-border);
      }

      /* testimonials — screenshot masonry, same treatment as the match overview page */
      .ai-shots {
        max-width: 1040px; margin: clamp(40px, 5vw, 60px) auto 0;
        max-height: 78vh; overflow-y: auto;
        border: 1px solid var(--uw-border); border-radius: var(--r-lg);
        background: var(--uw-surface); padding: 16px;
      }
      .ai-shots__label { font-family: var(--font-mono); font-size: 11px; letter-spacing: .12em; text-transform: uppercase; color: var(--uw-ink-500); margin: 2px 0 12px; }
      .ai-shots__label--divider { margin: 0 0 12px; padding-top: 16px; border-top: 1px solid var(--uw-border); }
      .ai-shots__grid { column-count: 3; column-gap: 12px; }
      .ai-shots__grid--tight { margin-bottom: 8px; }
      .ai-shots__grid img { width: 100%; display: block; margin-bottom: 12px; border-radius: var(--r-md); break-inside: avoid; }
      @media (max-width: 820px) { .ai-shots__grid { column-count: 2; } }
      @media (max-width: 520px) { .ai-shots__grid { column-count: 1; } }

      /* pricing */
      .ai-price-wrap { max-width: 560px; margin: clamp(40px, 5vw, 60px) auto 0; }
      .ai-price-card {
        border: 1px solid var(--uw-blue-500); background: var(--uw-blue-50);
        border-radius: clamp(18px, 2.2vw, 26px);
        padding: clamp(32px, 4vw, 48px);
        text-align: center;
      }
      .ai-price-card__badge { font-family: var(--font-mono); font-size: 11px; letter-spacing: .12em; text-transform: uppercase; color: var(--uw-blue-600); margin-bottom: 10px; }
      .ai-price-card__amount { font-family: var(--font-display); font-size: clamp(40px, 6vw, 52px); color: var(--uw-ink-900); line-height: 1; }
      .ai-price-card__unit { font-size: 15px; color: var(--uw-ink-500); margin-top: 6px; }
      .ai-price-card__list { list-style: none; margin: clamp(22px, 3vw, 30px) 0; padding: 0; display: flex; flex-direction: column; gap: 10px; text-align: left; }
      .ai-price-card__list li { display: flex; gap: 10px; align-items: flex-start; font-size: 14.5px; color: var(--uw-ink-700); }
      .ai-price-card__list svg { flex-shrink: 0; margin-top: 3px; color: var(--uw-blue-600); }

      /* guarantee */
      .ai-guarantee { background: var(--uw-surface-sunk); border-block: 1px solid var(--uw-border); }
      .ai-guarantee__inner { display: grid; grid-template-columns: auto 1fr; gap: clamp(20px, 3vw, 32px); align-items: flex-start; max-width: 760px; margin: 0 auto; }
      .ai-guarantee__icon { width: 56px; height: 56px; border-radius: 14px; background: var(--uw-blue-600); color: #fff; display: grid; place-items: center; flex-shrink: 0; }
      .ai-guarantee__body p { font-size: clamp(15px, 1.3vw, 17px); line-height: 1.75; color: var(--uw-ink-700); margin: 0 0 var(--space-4); }
      .ai-guarantee__body p:last-child { margin-bottom: 0; }
      .ai-guarantee__body em { font-style: italic; color: var(--uw-ink-900); }
      .ai-guarantee__steps { list-style: none; margin: clamp(18px, 2.4vw, 26px) 0; padding: 0; display: flex; flex-direction: column; gap: 10px; }
      .ai-guarantee__steps li { display: flex; gap: 12px; font-size: 14.5px; color: var(--uw-ink-700); line-height: 1.6; }
      .ai-guarantee__steps b { flex-shrink: 0; width: 24px; height: 24px; border-radius: 50%; background: var(--uw-blue-600); color: #fff; font-size: 12px; display: grid; place-items: center; font-weight: 600; }

      .ai-cta-wrap { padding-block: clamp(72px, 9vw, 120px); }
      .ai-cta-card {
        background: #08111f; border: 1px solid rgba(255,255,255,.08);
        border-radius: clamp(20px, 2.4vw, 28px); box-shadow: var(--shadow-lg);
        padding: clamp(48px, 6vw, 80px) clamp(32px, 5vw, 72px); text-align: center;
      }
      .ai-cta-card .msp-eyebrow { display: block; text-align: center; }
      .ai-cta-card .msp-h2 { color: #fff; text-align: center; max-width: 24ch; margin-inline: auto; margin-bottom: 0; }
      .ai-cta-card .msp-sub { color: rgba(255,255,255,.65); max-width: 54ch; margin-inline: auto; margin-top: clamp(14px,2vw,20px); text-align: center; }
      .ai-cta-card .msp-cta-row { justify-content: center; margin-inline: auto; margin-top: clamp(28px,4vw,44px); }
      .ai-cta-card .btn--outline { border-color: rgba(255,255,255,.4) !important; color: #fff !important; background: transparent !important; transition: background 0.18s ease, border-color 0.18s ease, color 0.18s ease, box-shadow 0.18s ease; }
      .ai-cta-card .btn--outline:hover { background: #fff !important; border-color: #fff !important; color: #08111f !important; box-shadow: 0 8px 24px rgba(255,255,255,0.12) !important; }

      .ai-faq__accordion { max-width: 760px; margin: clamp(40px, 5vw, 60px) auto 0; }

      @media (max-width: 720px) {
        .ai-founder { grid-template-columns: 1fr; text-align: center; }
        /* stacked: rows are auto-height, so the photo needs its own ratio to size itself */
        .ai-founder__photo { margin-inline: auto; width: 100%; max-width: 260px; aspect-ratio: 4 / 5; }
        .ai-founder__stats { justify-content: center; }
        .ai-guarantee__inner { grid-template-columns: 1fr; text-align: center; }
        .ai-guarantee__icon { margin-inline: auto; }
      }
</style>

<main>

    <!-- HERO -->
    <section class="msp-hero" aria-labelledby="heroTitle">
      <div class="msp-wrap msp-hero__grid ai-hero-grid">
        <div class="msp-hero__copy reveal">
          <h1 id="heroTitle" class="msp-h1">Make Your Match Inevitable into your #1 choice of residency on your 1st and last attempt</h1>
          <p class="msp-lede">Stop leaving your future to chance. Learn how to control your residency interview and secure your spot in the program you deserve.</p>
          <div class="msp-cta-row">
            <a class="btn btn--primary btn--xl" href="https://manikmadaan.systeme.io/advancedinterviewing/orderform" target="_blank" rel="noopener noreferrer">Buy Now &mdash; $399</a>
            <a class="btn btn--outline btn--xl" href="/match">Back to Match</a>
          </div>
        </div>

        <div class="msp-hero__frame-wrap">
          <div class="ai-hero__video msp-hero__frame reveal">
            <button type="button" class="yt-facade" data-yt-facade="_ZTFOB92BIw" data-yt-title="Advanced Interviewing" style="background-image:url('https://i.ytimg.com/vi/_ZTFOB92BIw/maxresdefault.jpg')" aria-label="Play video: Advanced Interviewing">
              <i data-lucide="play" width="26" height="26"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="msp-bar msp-wrap" aria-label="Track record">
        <div class="msp-bar__inner">
          <div class="msp-stat reveal"><b data-count="97.2" data-decimal="1" data-suffix="%">97.2%</b><span>Match success rate</span></div>
          <div class="msp-divider" aria-hidden="true"></div>
          <div class="msp-stat reveal"><b data-count="2900" data-suffix="+">2,900+</b><span>Candidates trained</span></div>
          <div class="msp-divider" aria-hidden="true"></div>
          <div class="msp-stat reveal"><b data-count="340" data-suffix="+">340+</b><span>Trained individually</span></div>
          <div class="msp-divider" aria-hidden="true"></div>
          <div class="msp-stat reveal"><b data-count="920" data-suffix="+">920+</b><span>Trained in groups</span></div>
        </div>
      </div>
    </section>

    <!-- PROBLEM -->
    <section class="msp-section ai-problem" aria-labelledby="problemTitle">
      <div class="msp-wrap ai-panel">
        <div class="ai-panel__copy reveal">
          <h2 id="problemTitle" class="msp-h2 ai-h2--wide">Why Do Applicants Fail to Match Despite Great Scores &amp; CV?</h2>
          <p>Here's the truth:</p>
          <p>Residency programs spend nearly $600&ndash;$1,000 on multiple US MD's reviewing each application and then interviewing applicants.</p>
          <p>If you've been invited, that means they already like your CV and scores. But here's where many applicants go wrong: more than 50% of applicants fail to live up to every residency program's expectations in all their interviews, and hence fail to match cycle after cycle &mdash; and the reason is simple:</p>
          <p><strong style="font-size:1.15em;">THEY DON'T CONNECT</strong></p>
        </div>
        <div class="ai-panel__figure reveal">
          <img src="/assets/advanced-interviewing/problem-pitfall.png" alt="Diagram: 'Miss the Connection, Miss the Match' &mdash; poor interviewing skills leave a match applicant stuck in the gap, while strong interviewing skills carry the connection across to a match." loading="lazy">
        </div>
      </div>
    </section>

    <!-- #1 FACTOR -->
    <section class="msp-section" aria-labelledby="factorTitle">
      <div class="msp-wrap ai-panel ai-panel--reverse">
        <div class="ai-panel__copy reveal">
          <h2 id="factorTitle" class="msp-h2 ai-h2--wide">The #1 Factor That Determines Whether You Match: Your Interpersonal Skills</h2>
          <p>According to the <strong>2025 NRMP Program Director Survey</strong>, the most important factor in deciding whether or not an applicant matches is <strong>interpersonal skills</strong>.</p>
          <p>Yes, that's right! <strong>Your ability to communicate and build a connection with the interviewer matters more than your scores or your CV.</strong></p>
          <p>Residency directors already know you're smart; now they need to see how well you'll fit into their program.</p>
          <p><strong>Interpersonal skills are key</strong> to showing that you can collaborate, lead, and communicate effectively in a high-stakes environment.</p>
        </div>
        <div class="ai-panel__figure reveal">
          <img src="/assets/advanced-interviewing/nrmp-chart.png" alt="NRMP Program Director Survey chart: interpersonal skills rated the top factor at 89%, ahead of interactions with faculty during interview and visit (87%), feedback from current residents (76%), and interactions with house staff (76%) &mdash; all above every academic metric below it." loading="lazy">
        </div>
      </div>
    </section>

    <!-- MORE PREP, WORSE -->
    <section class="msp-section ai-problem" aria-labelledby="prepTitle">
      <div class="msp-wrap ai-panel">
        <div class="ai-panel__copy reveal">
          <h2 id="prepTitle" class="msp-h2 ai-h2--wide">The More You Prepare Without the Right Strategy, the Worse It Gets</h2>
          <p>Many applicants believe that more plain mock interview preparation leads to better interviews. But here's the hard truth: without the right strategy, the more you prepare, the more robotic you sound. The interview becomes a stiff question-and-answer session instead of a natural conversation.</p>
          <p>Think about it like this: imagine solving 40 USMLE questions from UWorld followed by 1 NBME practice test, and then heading straight for the USMLE. You'd get crushed, right? Why? Because without the right training, more effort doesn't equal better results.</p>
          <p>This is what happens when you rehearse without a clear understanding of how to build connection. Instead of improving, you end up going backwards.</p>
        </div>
        <div class="ai-panel__figure reveal">
          <img src="/assets/advanced-interviewing/strategy-quadrant.png" alt="Quadrant chart: interview preparation vs. strategy effectiveness &mdash; high strategy plus high preparation is optimal performance, high preparation with low strategy produces robotic responses." loading="lazy">
        </div>
      </div>
    </section>

    <!-- NOT YOUR FAULT -->
    <section class="msp-section" aria-labelledby="faultTitle">
      <div class="msp-wrap ai-panel ai-panel--reverse">
        <div class="ai-panel__copy reveal">
          <h2 id="faultTitle" class="msp-h2 ai-h2--wide">Here's Why It's Not Your Fault!</h2>
          <p>You've spent years preparing for this &mdash; working through medical school, passing your USMLE exams, and building your CV.</p>
          <p>Yet, <strong>nobody trained you</strong> for the <strong>most critical step</strong> of the process: INTERVIEWING.<br>It's not your fault that your preparation didn't include mastering this high-leverage process &mdash; the interview.</p>
          <p>But now, with <strong>Advanced Interviewing</strong>, you'll have the tools to finally take control of this step.</p>
        </div>
        <div class="ai-panel__figure ai-panel__figure--cap reveal">
          <img src="/assets/advanced-interviewing/prep-flowchart.png" alt="Flowchart: Medical School to USMLE Exams to Building CV to Interviewing, then a gap in interview training leads to failing to match." loading="lazy">
        </div>
      </div>
    </section>

    <!-- COURSE INTRO -->
    <section class="msp-section ai-problem" aria-labelledby="introTitle">
      <div class="msp-wrap ai-panel">
        <div class="ai-panel__copy reveal">
          <h2 id="introTitle" class="msp-h2 ai-h2--wide">Introducing: Advanced Interviewing</h2>
          <p style="font-family: var(--font-display); font-size: clamp(18px,2vw,22px); color: var(--uw-ink-900);">Make Interviewing Your Best Friend Rather Than Your Worst Enemy</p>
          <p>Advanced Interviewing is designed to take you from a nervous, unprepared candidate to a confident match day champion who can handle any question, connect with interviewers, and leave a lasting impression.</p>
          <p>This isn't about memorizing scripts or rehearsing until you're stiff. It's about learning how to turn your residency interview into a conversation &mdash; natural, engaging dialogue that makes you unforgettable.</p>
        </div>
        <div class="ai-panel__figure ai-panel__figure--cap reveal">
          <img src="/assets/advanced-interviewing/course-intro.png" alt="Guarantee Your Match wheel: flexible non-rigid interviewing, stand out, handle any question, connect with interviewers, make a lasting impression." loading="lazy">
        </div>
      </div>
    </section>

    <!-- MODULES -->
    <section class="msp-section" id="curriculum" aria-labelledby="curriculumTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <h2 id="curriculumTitle" class="msp-h2 ai-h2--wide">What You'll Learn in Advanced Interviewing:</h2>
        </div>
        <div class="ai-modules">

          <div class="ai-module reveal">
            <div class="ai-module__head">
              <span class="ai-module__num">01</span>
              <div>
                <h3 class="ai-module__title">Module 1: The Inner Game of Interviewing</h3>
                <p class="ai-module__sub">Building Confidence, Charisma, and Mastering Psychological Tools</p>
              </div>
            </div>
            <p class="ai-module__intro">Module 1 is about mastering the psychology of communication. It focuses on the internal strategies that allow you to walk into any interview room with unshakable confidence and the ability to connect with your interviewer on a deep, human level.</p>
            <div class="ai-module__diagram">
              <img src="/assets/advanced-interviewing/module-1.png" alt="Inner Game of Interviewing diagram: Logical Levels, Frame Control, Contextual Authenticity, Calibration, OCEAN Framework, PCM Model." loading="lazy">
            </div>
            <p class="msp-sub" style="text-align:left; margin-bottom:16px;">What you'll learn in Module 1:</p>
            <div class="ai-topics">
              <div class="ai-topic-item"><div><p class="ai-topic-item__title">1. Logical Levels</p><p class="ai-topic-item__body">Master the art of answering interview questions by engaging on multiple levels from facts to deeper values. This framework ensures your answers are both structured and impactful, leaving a lasting impression on the interviewer.</p></div></div>
              <div class="ai-topic-item"><div><p class="ai-topic-item__title">2. Frame Control</p><p class="ai-topic-item__body">Take control of the interview narrative. By learning how to reframe and preframe difficult questions, and subtly guide the conversation, you ensure the interview flows in your favor.</p></div></div>
              <div class="ai-topic-item"><div><p class="ai-topic-item__title">3. Contextual Authenticity</p><p class="ai-topic-item__body">Be yourself while adapting to the energy and style of your interviewer. This helps you stay genuine while ensuring you're aligned with the flow of the conversation, creating rapport effortlessly.</p></div></div>
              <div class="ai-topic-item"><div><p class="ai-topic-item__title">4. Calibration</p><p class="ai-topic-item__body">Master the unspoken &amp; spoken language to fine-tune your communication. Body language, eye contact, and gestures are as important as your words. Learn how to use these to project confidence, trust, and openness. Adjust your words, tonality, and expressions to match the interviewer's tone, ensuring you're always in sync and creating a comfortable dynamic.</p></div></div>
              <div class="ai-topic-item"><div><p class="ai-topic-item__title">5. The Straight Line Model</p><p class="ai-topic-item__body">Think of your interview as a straight line with a clear destination: a residency offer. Learn how to steer every question and response back to this goal, ensuring that every word you say moves the conversation forward.</p></div></div>
              <div class="ai-topic-item"><div><p class="ai-topic-item__title">6. OCEAN Framework</p><p class="ai-topic-item__body">The OCEAN Framework helps you identify their personality traits and customize your communication style to match. With the OCEAN framework, you'll learn to pick up on cues in their questions and body language, allowing you to adjust your responses to fit their personality profile seamlessly.</p></div></div>
              <div class="ai-topic-item"><div><p class="ai-topic-item__title">7. The PCM Model</p><p class="ai-topic-item__body">Here's the game changer: The PCM Model doesn't just help you read people's communication styles, it empowers you to blend them seamlessly into your answers. By skillfully weaving together elements of logic, emotion, and action, you can create responses that resonate with any interviewer, regardless of their communication style. Imagine infusing your answers with a dynamic mix of thought-provoking ideas, genuine emotions, and actionable insights &mdash; captivating your interviewer while radiating charisma, making you unforgettable from the very first question.</p></div></div>
            </div>
          </div>

          <div class="ai-module reveal">
            <div class="ai-module__head">
              <span class="ai-module__num">02</span>
              <div>
                <h3 class="ai-module__title">Module 2: The Outer Game of Interviewing</h3>
                <p class="ai-module__sub">Mastering Interview Formats, Questions, and Responses</p>
              </div>
            </div>
            <p class="ai-module__intro">Module 2 prepares you for the external aspects of the interview process. From navigating different residency interview formats to answering challenging questions with confidence, this module gives you the tools to stand out in any situation.</p>
            <div class="ai-module__diagram" style="max-width:560px;">
              <img src="/assets/advanced-interviewing/module-2.png" alt="Outer Game of Interviewing diagram: Interview Formats, Most Common Questions, Behavioral and Personality Questions, Handling Curveball Questions, Research Questions." loading="lazy">
            </div>
            <p class="msp-sub" style="text-align:left; margin-bottom:16px;">What you'll learn in Module 2:</p>
            <div class="ai-topics">
              <div class="ai-topic-item"><div><p class="ai-topic-item__title">1. Handling Different Interview Formats</p><p class="ai-topic-item__body">Residency interviews come in various formats, and each requires a unique approach. This section covers the most common formats you'll encounter:<ul><li><strong>One-on-One Interviews:</strong> Traditional direct interviews where rapport building is key.</li><li><strong>Panel Interviews:</strong> Facing multiple interviewers simultaneously. Learn how to engage each panelist and navigate group dynamics.</li><li><strong>Situational Judgment Tests (SJTs):</strong> Prepare for hypothetical scenarios designed to evaluate your decision making and ethical reasoning.</li><li><strong>Pre-Interview Formats:</strong> Casual social meetings or resident gatherings where first impressions count. Learn how to shine in informal settings.</li><li><strong>Group Interviews:</strong> In collaborative settings, balance showing leadership with being a team player.</li></ul></p></div></div>
              <div class="ai-topic-item"><div><p class="ai-topic-item__title">2. Plug-and-Play Frameworks for Most Common Questions</p><p class="ai-topic-item__body">Master key frameworks for answering essential interview questions such as &ldquo;Tell me about yourself,&rdquo; &ldquo;Why this specialty?&rdquo;, &ldquo;Why this program?&rdquo;, &ldquo;What are your strengths?&rdquo; and &ldquo;What are your weaknesses?&rdquo; These frameworks are flexible and customizable, ensuring you sound confident without being scripted.</p></div></div>
              <div class="ai-topic-item"><div><p class="ai-topic-item__title">3. STAR Framework for All Behavioral and Personality Questions</p><p class="ai-topic-item__body">Use the STAR technique (Situation, Task, Action, Result) to provide structured answers that showcase your ability to work under pressure, demonstrate problem-solving skills, and highlight your collaboration and teamwork abilities.</p></div></div>
              <div class="ai-topic-item"><div><p class="ai-topic-item__title">4. Frameworks for Handling All Curveball Questions</p><p class="ai-topic-item__body">Stay calm and confident when faced with unexpected questions. With contextual thinking and storytelling, you'll learn how to turn curveball questions into opportunities to demonstrate your strengths.</p></div></div>
              <div class="ai-topic-item"><div><p class="ai-topic-item__title">5. Frameworks for All Research Questions</p><p class="ai-topic-item__body">Research plays an important role in many residency interviews. You'll learn how to confidently answer questions about your research experience, articulate the value of your work, and explain its relevance to the residency program.</p></div></div>
              <div class="ai-topic-item"><div><p class="ai-topic-item__title">6. Frameworks for Addressing All Red Flags</p><p class="ai-topic-item__body">Learn how to address potential red flags in your application &mdash; gaps in your CV, poor test scores, lack of U.S. clinical experience. You'll master techniques to frame these issues positively, show growth, and demonstrate resilience, ensuring that you come across as a stronger, more self-aware candidate.</p></div></div>
            </div>
          </div>

          <div class="ai-module reveal">
            <div class="ai-module__head">
              <span class="ai-module__num">03</span>
              <div>
                <h3 class="ai-module__title">Module 3: Mock Interview Analysis</h3>
                <p class="ai-module__sub">Taking It From Theory to Mastery</p>
              </div>
            </div>
            <p class="ai-module__intro">Module 3 is where everything you've learned comes together. Through mock interview analysis, you'll have the chance to perfect implementation of all the strategies, frameworks, and techniques, ensuring that you walk into your actual residency interviews confident and fully prepared.</p>
            <div class="ai-module__diagram">
              <img src="/assets/advanced-interviewing/module-3.png" alt="Mock Interview Analysis gear diagram: The Perfect Mock Interview, Breaking Down Real Interview Scenarios, Key Takeaways, Deep Analysis of Inner + Outer Game of Interviewing." loading="lazy">
            </div>
            <p class="msp-sub" style="text-align:left; margin-bottom:16px;">What you'll learn in Module 3:</p>
            <div class="ai-topics">
              <div class="ai-topic-item"><div><p class="ai-topic-item__title">1. The Perfect Mock Interview</p><p class="ai-topic-item__body">Watch a demonstration of how an advanced interviewer handles even the toughest questions, implementing all the concepts from Modules 1 and 2. Using this real world example you will learn how to master the entire interview process, from basic questions to curveballs and research inquiries.</p></div></div>
              <div class="ai-topic-item"><div><p class="ai-topic-item__title">2. Breaking Down Real Interview Scenarios</p><p class="ai-topic-item__body">We'll further analyze real residency interview scenarios to show you how successful candidates respond to various situations. You'll learn from how they handle challenging moments like unexpected questions, unclear prompts, and difficult follow-ups with grace and precision.</p></div></div>
              <div class="ai-topic-item"><div><p class="ai-topic-item__title">3. Key Takeaways</p><p class="ai-topic-item__body">Learn by example: see when, where &amp; how to apply the techniques you've studied, from controlling the narrative to displaying confidence through both verbal and non-verbal communication. Observe how advanced interviewers navigate difficult moments, awkward pauses, and curveball questions with ease.</p></div></div>
              <div class="ai-topic-item"><div><p class="ai-topic-item__title">4. Deep Analysis of Inner + Outer Game of Interviewing</p><p class="ai-topic-item__body">You'll observe how advanced interviewers integrate both the inner and outer game of interviewing to dominate the interview. See how concepts like PCM, OCEAN, contextual authenticity, straight line model, frame control, calibration, and charisma are applied together with different answer frameworks to answer every question in real time.</p></div></div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- FOUNDER CREDIBILITY -->
    <section class="msp-section ai-problem" aria-labelledby="founderTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <h2 id="founderTitle" class="msp-h2 ai-h2--wide">A Complete System Developed by the Most Trusted Name in USMLE</h2>
        </div>
        <div class="ai-founder reveal">
          <div class="ai-founder__photo">
            <img src="/assets/advanced-interviewing/manik-madaan.jpeg" alt="Dr. Manik Madaan" loading="lazy">
          </div>
          <div class="ai-founder__card">
            <div class="ai-founder__body">
              <p class="ai-founder__quote">&ldquo;Hi, I'm Dr. Manik Madaan, the creator of Advanced Interviewing and a top interview coach.&rdquo;</p>
              <p>I am a resident physician in the United States and the leading authority on USMLE, Match, and Interviewing.</p>
              <p>I have individually trained 340+ and group trained 920+ candidates, achieving a 97.2% match success rate. These applicants were from all types of backgrounds who learned to ace their residency interviews and land spots in the most competitive programs.</p>
              <p>Over the years, I've discovered the best way to prepare for a residency interview. It not only works, but it's infallible if you do it right. It's a method backed up by years of academic research on the dynamics of interviewing.</p>
            </div>
            <div class="ai-founder__stats">
              <div class="ai-founder__stat"><b>97.2%</b><span>Match success rate</span></div>
              <div class="ai-founder__stat"><b>340+</b><span>Trained individually</span></div>
              <div class="ai-founder__stat"><b>920+</b><span>Trained in groups</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- VIDEO -->
    <section class="msp-section" aria-labelledby="videoTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <h2 id="videoTitle" class="msp-h2">Watch Advanced Interviewing in Action!</h2>
          <p class="msp-sub">Here's a real-life example of what Advanced Interviewing can do for you.</p>
        </div>
        <div class="ai-video reveal">
          <div class="ai-video__frame">
            <button type="button" class="yt-facade" data-yt-facade="EPct9iRMCxs" data-yt-title="Advanced Interviewing in Action" style="background-image:url('https://i.ytimg.com/vi/EPct9iRMCxs/maxresdefault.jpg')" aria-label="Play video: Advanced Interviewing in Action">
              <i data-lucide="play" width="26" height="26"></i>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="msp-section ai-problem" aria-labelledby="proofTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <h2 id="proofTitle" class="msp-h2 ai-h2--wide">Hear from our students!</h2>
          <p class="msp-sub">Unedited messages from applicants who took Advanced Interviewing.</p>
        </div>
        <div class="ai-shots reveal">
          <div class="ai-shots__label">Match day</div>
          <div class="ai-shots__grid ai-shots__grid--tight">
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
          <div class="ai-shots__label ai-shots__label--divider">In their words</div>
          <div class="ai-shots__grid">
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
            <img src="/assets/advanced-interviewing/testimonial-shot-matched.jpg" alt="USMLE Wise student match testimonial" loading="lazy">
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

    <!-- VIDEO TESTIMONIALS (ported from the home page; .msp-stories / .msp-carousel
         styles live in match.css and the carousel + lightbox JS in match.js, both
         already loaded by this page) -->
    <section class="msp-stories" id="stories" aria-labelledby="storiesTitle">
      <div class="msp-wrap">
        <div class="msp-stories__head reveal">
          <h2 id="storiesTitle" class="msp-h2 msp-h2--invert">
            Advanced Interviewing Stories
          </h2>
        </div>

        <div class="msp-carousel" aria-label="Student testimonials">
          <div class="msp-slide is-active" role="group" aria-label="Story 1 of 5">
            <button class="msp-video-trigger" data-ytid="F8E7lTvGKRU" aria-label="Watch Rana's match story video">
              <img src="https://img.youtube.com/vi/F8E7lTvGKRU/maxresdefault.jpg" alt="Rana shares how she matched Internal Medicine at a top-20 program" class="msp-video-trigger__thumb" loading="lazy" decoding="async" />
              <span class="msp-video-trigger__play" aria-hidden="true">
                <svg width="72" height="72" viewBox="0 0 72 72" fill="none"><circle cx="36" cy="36" r="36" fill="rgba(255,255,255,0.12)"/><circle cx="36" cy="36" r="30" fill="rgba(255,255,255,0.92)"/><path d="M31 26l20 10-20 10V26z" fill="#1a3a7a"/></svg>
              </span>
            </button>
            <div class="msp-slide__content">
              <p class="msp-story-feature__outcome">Matched University of Illinois, Peoria</p>
              <blockquote class="msp-story-feature__quote">
                <p>I knew I wasn't a natural speaker and needed help making my answers stand out. Dr. Madan's course and our one-on-one sessions gave me the tools to personalize my responses for each interviewer. I walked into every interview with a confidence I simply didn't have before.</p>
                <footer class="msp-story-feature__attr">
                  <cite class="msp-story-feature__cite">
                    <span>Dr. Lakshitha</span>
                    <span>University of Illinois, Peoria</span>
                  </cite>
                </footer>
              </blockquote>
            </div>
          </div>

          <div class="msp-slide" role="group" aria-label="Story 2 of 5" aria-hidden="true">
            <button class="msp-video-trigger" data-ytid="O4Gns55Brh0" aria-label="Watch Dr. Shreya Sriram's match story video">
              <img src="https://img.youtube.com/vi/O4Gns55Brh0/maxresdefault.jpg" alt="Dr. Shreya Sriram shares how she matched Family Medicine at SIU Carbondale" class="msp-video-trigger__thumb" loading="lazy" decoding="async" />
              <span class="msp-video-trigger__play" aria-hidden="true">
                <svg width="72" height="72" viewBox="0 0 72 72" fill="none"><circle cx="36" cy="36" r="36" fill="rgba(255,255,255,0.12)"/><circle cx="36" cy="36" r="30" fill="rgba(255,255,255,0.92)"/><path d="M31 26l20 10-20 10V26z" fill="#1a3a7a"/></svg>
              </span>
            </button>
            <div class="msp-slide__content">
              <p class="msp-story-feature__outcome">Matched SIU Carbondale &middot; Family Medicine</p>
              <blockquote class="msp-story-feature__quote">
                <p>I didn't match in the main cycle, didn't match in SOAP, and was financially stretched. But I kept applying every day on Dr. Madan's advice. I flew across the country for an in-person interview at a remote program just to show my commitment. That persistence, and having the right guidance, is what got me here.</p>
                <footer class="msp-story-feature__attr">
                  <cite class="msp-story-feature__cite">
                    <span>Dr. Shreya Sriram</span>
                    <span>SIU Carbondale &middot; Family Medicine</span>
                  </cite>
                </footer>
              </blockquote>
            </div>
          </div>

          <div class="msp-slide" role="group" aria-label="Story 3 of 5" aria-hidden="true">
            <button class="msp-video-trigger" data-ytid="ZynxmljOZDA" aria-label="Watch Dr. Hamit C.'s match story video">
              <img src="https://img.youtube.com/vi/ZynxmljOZDA/maxresdefault.jpg" alt="Dr. Hamit C. shares how he matched at UPMC, PA" class="msp-video-trigger__thumb" loading="lazy" decoding="async" />
              <span class="msp-video-trigger__play" aria-hidden="true">
                <svg width="72" height="72" viewBox="0 0 72 72" fill="none"><circle cx="36" cy="36" r="36" fill="rgba(255,255,255,0.12)"/><circle cx="36" cy="36" r="30" fill="rgba(255,255,255,0.92)"/><path d="M31 26l20 10-20 10V26z" fill="#1a3a7a"/></svg>
              </span>
            </button>
            <div class="msp-slide__content">
              <p class="msp-story-feature__outcome">Matched UPMC &middot; Pennsylvania</p>
              <blockquote class="msp-story-feature__quote">
                <p>I had everything ready: personal statement, LORs, a solid program list. But I knew those only get you the interview. I've seen applicants with 11 interviews who still didn't match. Dr. Madan's course prepares you for the dynamic, unexpected side of residency interviews, not just the rehearsed answers.</p>
                <footer class="msp-story-feature__attr">
                  <cite class="msp-story-feature__cite">
                    <span>Dr. Hamit C.</span>
                    <span>UPMC &middot; Pennsylvania</span>
                  </cite>
                </footer>
              </blockquote>
            </div>
          </div>

          <div class="msp-slide" role="group" aria-label="Story 4 of 5" aria-hidden="true">
            <button class="msp-video-trigger" data-ytid="IEphKQwawzA" aria-label="Watch Dr. Yash's match story video">
              <img src="https://img.youtube.com/vi/IEphKQwawzA/maxresdefault.jpg" alt="Dr. Yash shares how he matched in Los Angeles" class="msp-video-trigger__thumb" loading="lazy" decoding="async" />
              <span class="msp-video-trigger__play" aria-hidden="true">
                <svg width="72" height="72" viewBox="0 0 72 72" fill="none"><circle cx="36" cy="36" r="36" fill="rgba(255,255,255,0.12)"/><circle cx="36" cy="36" r="30" fill="rgba(255,255,255,0.92)"/><path d="M31 26l20 10-20 10V26z" fill="#1a3a7a"/></svg>
              </span>
            </button>
            <div class="msp-slide__content">
              <p class="msp-story-feature__outcome">Matched Los Angeles &middot; California</p>
              <blockquote class="msp-story-feature__quote">
                <p>This was my first time applying and I had no idea what to expect from the interview process. I came to Dr. Madan with so many questions, and he answered every single one with patience. That guidance made all the difference when it mattered most.</p>
                <footer class="msp-story-feature__attr">
                  <cite class="msp-story-feature__cite">
                    <span>Dr. Yash</span>
                    <span>Los Angeles &middot; California</span>
                  </cite>
                </footer>
              </blockquote>
            </div>
          </div>

          <div class="msp-slide" role="group" aria-label="Story 5 of 5" aria-hidden="true">
            <button class="msp-video-trigger" data-ytid="2pGb5xiKzdw" aria-label="Watch Dr. Srishti Shankar's match story video">
              <img src="https://img.youtube.com/vi/2pGb5xiKzdw/maxresdefault.jpg" alt="Dr. Srishti Shankar shares how she matched at St. Vincent, MA" class="msp-video-trigger__thumb" loading="lazy" decoding="async" />
              <span class="msp-video-trigger__play" aria-hidden="true">
                <svg width="72" height="72" viewBox="0 0 72 72" fill="none"><circle cx="36" cy="36" r="36" fill="rgba(255,255,255,0.12)"/><circle cx="36" cy="36" r="30" fill="rgba(255,255,255,0.92)"/><path d="M31 26l20 10-20 10V26z" fill="#1a3a7a"/></svg>
              </span>
            </button>
            <div class="msp-slide__content">
              <p class="msp-story-feature__outcome">Matched St. Vincent &middot; Massachusetts</p>
              <blockquote class="msp-story-feature__quote">
                <footer class="msp-story-feature__attr">
                  <cite class="msp-story-feature__cite">
                    <span>Dr. Srishti Shankar</span>
                    <span>St. Vincent &middot; Massachusetts</span>
                  </cite>
                </footer>
              </blockquote>
            </div>
          </div>
        </div>

        <div class="msp-carousel__nav">
          <button class="msp-carousel__btn" id="prevSlide" aria-label="Previous story">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M11 3.5L6 9l5 5.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
          <span class="msp-carousel__count" id="slideCount" aria-live="polite">1 / 5</span>
          <button class="msp-carousel__btn" id="nextSlide" aria-label="Next story">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M7 3.5L12 9l-5 5.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
        </div>
      </div>
    </section>

    <!-- Video lightbox -->
    <div class="msp-lightbox" id="mspLightbox" role="dialog" aria-modal="true" aria-label="Student testimonial video" hidden>
      <button class="msp-lightbox__close" aria-label="Close video">&times;</button>
      <div class="msp-lightbox__frame">
        <iframe id="mspLightboxIframe" src="" allow="autoplay; fullscreen" allowfullscreen frameborder="0" title="Student testimonial video"></iframe>
      </div>
    </div>

    <!-- PRICING -->
    <section class="msp-section" id="pricing" aria-labelledby="pricingTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <h2 id="pricingTitle" class="msp-h2 ai-h2--wide">Show All Programs How Amazing You Are!</h2>
          <p class="msp-sub">Residency programs have already invested in you, but it's up to you to make the connection that gets you matched.</p>
        </div>
        <p class="msp-h2" style="text-align:center; font-size: clamp(20px,2.4vw,26px); max-width: 30ch; margin: clamp(24px,3vw,36px) auto 0;">Join Advanced Interviewing Today and become a Match Day Champion.</p>
        <div class="ai-price-wrap">
          <div class="ai-price-card reveal">
            <p class="ai-price-card__badge">Only</p>
            <div class="ai-price-card__amount">$399</div>
            <p class="ai-price-card__unit">1 Year Full Access</p>
            <p class="msp-sub" style="text-align:left; margin: 20px 0 0;">You will get:</p>
            <ul class="ai-price-card__list">
              <li><i data-lucide="check" width="16" height="16"></i><span><strong>Master Advanced Interviewing:</strong> Turn interviews into natural, flowing conversations.</span></li>
              <li><i data-lucide="check" width="16" height="16"></i><span><strong>Master the Pre-Interview Process:</strong> Navigate social events and casual settings with confidence and professionalism.</span></li>
              <li><i data-lucide="check" width="16" height="16"></i><span><strong>Adapt to Any Interview Format:</strong> Be fully prepared for one-on-one, panel, group interviews, and SJTs.</span></li>
              <li><i data-lucide="check" width="16" height="16"></i><span><strong>Handle Curveball Questions with Ease:</strong> Confidently navigate unexpected questions.</span></li>
              <li><i data-lucide="check" width="16" height="16"></i><span><strong>Plug-and-Play Frameworks for Answers:</strong> Structure genuine responses to common questions with ease.</span></li>
              <li><i data-lucide="check" width="16" height="16"></i><span><strong>Handle Behavioral Questions:</strong> Answer tough behavioral questions with ease using structured frameworks.</span></li>
              <li><i data-lucide="check" width="16" height="16"></i><span><strong>Tailor Responses to Interviewers:</strong> Apply frameworks like PCM and OCEAN to connect with every personality type.</span></li>
            </ul>
            <a class="btn btn--primary btn--xl" href="https://manikmadaan.systeme.io/advancedinterviewing/orderform" target="_blank" rel="noopener noreferrer" style="width:100%;">Buy now!</a>
          </div>
          <p class="msp-pricing__note">Already enrolled in a Complete Match Package? Advanced Interviewing may already be included &mdash; check with your mentor before purchasing separately.</p>
        </div>
      </div>
    </section>

    <!-- GUARANTEE -->
    <section class="msp-section ai-guarantee" aria-labelledby="guaranteeTitle">
      <div class="msp-wrap">
        <div class="ai-guarantee__inner reveal">
          <div class="ai-guarantee__icon"><i data-lucide="shield-check" width="26" height="26"></i></div>
          <div class="ai-guarantee__body">
            <h2 id="guaranteeTitle" class="msp-h2 ai-h2--wide">Match Guarantee: Match or Your Money Back!</h2>
            <p>At Advanced Interviewing, we're so confident in our course that if you don't match after completing it, we'll refund your full course fee.</p>
            <p><strong>How It Works:</strong></p>
            <ul class="ai-guarantee__steps">
              <li><b>1</b><span><strong>Complete the Course:</strong> Go through every module and participate in the mock interviews.</span></li>
              <li><b>2</b><span><strong>Apply the Strategies:</strong> Use the skills you've learned in your residency interviews.</span></li>
              <li><b>3</b><span><strong>Match, or Get a Refund:</strong> If you interview and don't match, simply contact us, and we'll refund your course fee &mdash; 100% guaranteed.</span></li>
            </ul>
            <p><strong>Why are we offering this?</strong> With a 97.2% match success rate among over 2,900 trained candidates, we're confident our course works like magic. Follow our steps, and you will match or you pay nothing.</p>
            <p><em>Invest in your future with zero risk!</em></p>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="msp-section" id="faq" aria-labelledby="faqTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Frequently Asked Questions</span>
          <h2 id="faqTitle" class="msp-h2">You've got questions, we've got answers!</h2>
        </div>
        <div class="ai-faq__accordion accordion reveal">
          <div class="accordion__item">
            <button class="accordion__head" type="button">1. What makes Advanced Interviewing different from other residency interview courses?</button>
            <div class="accordion__body">Advanced Interviewing goes beyond traditional mock interviews and generic prep. We teach you how to turn your interview into a conversation, not just a Q&amp;A session, leading to a deeper connection with your interviewers, making the match more likely. Using psychological frameworks like the PCM model and OCEAN analysis, this course ensures you connect with your interviewers on multiple levels. You'll learn how to handle any question with plug-and-play formats, giving you an edge other resources just don't offer.</div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">2. What's included in the course?</button>
            <div class="accordion__body">5 hours of premium video content bundled with pre-made notes, divided into 3 modules: Module 1, The Inner Game of Interviewing &mdash; building confidence, charisma, and mental framing. Module 2, The Outer Game of Interviewing &mdash; how to structure answers, master interview formats, and respond to common, behavioral, personality, curveball and research questions. Module 3, Mock Interview Analysis &mdash; simulated real residency interviews and analysis of real-world scenarios.</div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">3. Who should sign up for Advanced Interviewing?</button>
            <div class="accordion__body">This course is for IMGs, MDs, or DOs preparing for residency interviews. Whether you've done mock interviews or are just starting, Advanced Interviewing takes your skills to the next level, helping you connect effectively with interviewers in any format.</div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">4. Are mock interviews included in the course?</button>
            <div class="accordion__body">While the course does not include personalized mock interviews, it offers in-depth analysis of mock interviews with successful residency match candidates to help you understand the nuances of advanced interviewing techniques. Learn from these real scenarios to refine your own responses effectively.</div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">5. Do you offer mock interviews separately?</button>
            <div class="accordion__body">Yes, personalized mock interviews are available but only limited to students enrolled in the Advanced Interviewing course. Interviews are held with a program director, assistant program director or a chief resident. Each session costs $249 and lasts 60 minutes, including 30 minutes of detailed feedback. To avail a mock interview, contact us at customersupport@manikmadaan.com after you've enrolled in the course.</div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">6. Why are mock interviews not available to the general public?</button>
            <div class="accordion__body">Mock interviews are only effective when you've already learned the core strategies and frameworks in the course. Without this foundation, the mock interview would not be effective and would waste your time and money. If anyone recommends doing mock interviews without learning the interview strategy, we'd advise you to run the other way.</div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">7. When is the best time to take this course?</button>
            <div class="accordion__body">The best time to take Advanced Interviewing is a few weeks before your residency interviews. This gives you time to practice techniques, participate in mock interviews, and apply feedback to feel confident on interview day.</div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">8. Are there any additional costs?</button>
            <div class="accordion__body">No, there are no hidden fees. The course price includes all video lessons, analysis of mock interviews, and downloadable resources.</div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">9. What if I need help during the course?</button>
            <div class="accordion__body">We're here to support you! You can reach out to our dedicated support team via email at customersupport@manikmadaan.com for assistance or clarification throughout the course.</div>
          </div>
          <div class="accordion__item">
            <button class="accordion__head" type="button">10. Can I access the course from any device?</button>
            <div class="accordion__body">Yes! The course platform is mobile-friendly, so you can access it from your phone, tablet, or computer, making it easy to study on the go.</div>
          </div>
        </div>
      </div>
    </section>

    <!-- FINAL CTA -->
    <section class="ai-cta-wrap">
      <div class="msp-wrap">
        <div class="ai-cta-card reveal" aria-labelledby="ctaTitle">
          <span class="msp-eyebrow msp-eyebrow--light">Get started</span>
          <h2 id="ctaTitle" class="msp-h2">Ready to become a Match Day Champion?</h2>
          <p class="msp-sub">$399 for one year of full access &mdash; match, or your money back.</p>
          <div class="msp-cta-row">
            <a class="btn btn--primary btn--xl" href="https://manikmadaan.systeme.io/advancedinterviewing/orderform" target="_blank" rel="noopener noreferrer">Buy Now &mdash; $399</a>
            <a class="btn btn--outline btn--xl" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Free Guidance Call</a>
          </div>
        </div>
      </div>
    </section>

    </main>

    <script>
      (function () {
        var facades = document.querySelectorAll('[data-yt-facade]');
        facades.forEach(function (facade) {
          facade.addEventListener('click', function () {
            var id = facade.getAttribute('data-yt-facade');
            var title = facade.getAttribute('data-yt-title') || 'Video';
            var iframe = document.createElement('iframe');
            iframe.src = 'https://www.youtube.com/embed/' + id + '?autoplay=1&rel=0';
            iframe.title = title;
            iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';
            iframe.allowFullscreen = true;
            iframe.style.width = '100%';
            iframe.style.height = '100%';
            iframe.style.border = '0';
            iframe.style.display = 'block';
            facade.replaceWith(iframe);
          });
        });
      })();
    </script>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
