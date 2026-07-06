<?php
$pageTitle = "LOR Editing &mdash; Letters of Recommendation | USMLE Wise";
$pageDescription = "Strategic editing and review of Letters of Recommendation for IMG residency applicants. Strengthen your LORs before submission.";
$canonical = "https://usmlewise.com/match/lor-editing";
$bodyClass = "msp";
$stylesheets = [
    "/match.css"
];
$scripts = [
    "/match.js"
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
      @media (max-width: 400px) { .pg-feat-grid { grid-template-columns: 1fr; } }
    </style>

<main>
    <section class="msp-hero" aria-labelledby="heroTitle">
      <div class="msp-wrap msp-hero__grid">
        <div class="msp-hero__copy reveal">
                    <h1 id="heroTitle" class="msp-h1">Your letters of recommendation, strengthened before they reach the programme director.</h1>
          <p class="msp-lede">Strategic editing and review of your Letters of Recommendation — so the people advocating for you do it as effectively as possible.</p>
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
    <section class="msp-section pg-about" aria-labelledby="aboutTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">The service</span>
          <h2 id="aboutTitle" class="msp-h2">Strong LORs don't write themselves. We help.</h2>
          <p class="msp-sub">Most physicians who write LORs are excellent doctors — not experienced application writers. LOR Editing works with what your referee has written and elevates it: tightening the language, sharpening the specificity, and ensuring the letter does the strategic job it needs to do for your target specialty.</p>
        </div>
        <div class="pg-feat-grid">
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="edit-3" width="20" height="20"></i></div>
              <p class="pg-feat__title">Full letter review</p>
              <p class="pg-feat__body">We read the letter in full and assess it for strength, specificity, and strategic alignment with your application narrative.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="edit-3" width="20" height="20"></i></div>
              <p class="pg-feat__title">Line-by-line editing</p>
              <p class="pg-feat__body">Language, tone, structure, and formatting — every element reviewed and refined.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="target" width="20" height="20"></i></div>
              <p class="pg-feat__title">Specialty-specific focus</p>
              <p class="pg-feat__body">We edit with your target programme and specialty in mind. Generic LORs rarely help IMG applications.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="user-check" width="20" height="20"></i></div>
              <p class="pg-feat__title">IMG-specific expertise</p>
              <p class="pg-feat__body">We understand what programme directors look for in IMG LORs and how to frame an international reference effectively.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="clock" width="20" height="20"></i></div>
              <p class="pg-feat__title">Fast turnaround</p>
              <p class="pg-feat__body">We know application deadlines don't wait. Our team turns around LOR edits promptly.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="file-text" width="20" height="20"></i></div>
              <p class="pg-feat__title">Multiple letters</p>
              <p class="pg-feat__body">Applying to multiple specialties or programmes? We can edit all your letters with consistent positioning across them.</p>
            </div>
        </div>
      </div>
    </section>
    <section class="msp-section" aria-labelledby="whyTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Why USMLE Wise</span>
          <h2 id="whyTitle" class="msp-h2">A good letter from a great referee. That's the goal.</h2>
        </div>
        <div class="pg-feat-grid">
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="award" width="20" height="20"></i></div>
              <p class="pg-feat__title">Application specialists</p>
              <p class="pg-feat__body">Our team has reviewed matched applications across dozens of specialties and knows what a strong LOR actually looks like.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="compass" width="20" height="20"></i></div>
              <p class="pg-feat__title">IMG-aware editing</p>
              <p class="pg-feat__body">Letters for IMG applicants require specific framing. We know how to position international references for a US programme director.</p>
            </div>
            <div class="pg-feat reveal">
              <div class="pg-feat__icon"><i data-lucide="zap" width="20" height="20"></i></div>
              <p class="pg-feat__title">Discrete and professional</p>
              <p class="pg-feat__body">Your referee doesn't need to know we helped. We send edits to you, and you manage the rest.</p>
            </div>
        </div>
      </div>
    </section>
    <section class="pg-cta-wrap">
      <div class="msp-wrap">
        <div class="pg-cta-card reveal" aria-labelledby="ctaTitle">
          <span class="msp-eyebrow msp-eyebrow--light">Get started</span>
          <h2 id="ctaTitle" class="msp-h2">Your LORs can be stronger. Let's make them stronger.</h2>
          <p class="msp-sub">Book a free guidance call or reach out directly to get started with LOR Editing before your deadline.</p>
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
