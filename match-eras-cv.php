<?php
$pageTitle = "ERAS CV &mdash; CV Overhaul | USMLE Wise";
$pageDescription = "Complete ERAS CV overhaul for IMG residency applicants. Strengthen your application narrative and presentation.";
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
    .ec-problem { background: var(--uw-surface-sunk); border-block: 1px solid var(--uw-border); }
    .ec-problem__body { max-width: 72ch; }
    .ec-problem__body p { font-size: clamp(16px, 1.4vw, 18px); color: var(--uw-ink-700); line-height: 1.75; margin: 0 0 var(--space-4); }
    .ec-problem__body p:last-child { margin-bottom: 0; }

    .ec-approach-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: clamp(24px, 3vw, 40px);
      margin-top: clamp(44px, 5vw, 64px);
    }
    .ec-feat {
      display: flex;
      flex-direction: column;
      gap: 12px;
      background: var(--uw-surface-sunk);
      border: 1px solid var(--uw-border);
      border-radius: var(--r-xl);
      padding: clamp(24px, 3vw, 36px);
    }
    .ec-feat__icon {
      width: 44px; height: 44px; border-radius: 12px;
      background: var(--uw-blue-50); display: grid; place-items: center;
      color: var(--uw-blue-600); flex-shrink: 0;
    }
    .ec-feat__title { font-size: 17px; font-weight: 600; color: var(--uw-ink-900); margin: 0; }
    .ec-feat__body { font-size: 15px; color: var(--uw-ink-600); line-height: 1.7; margin: 0; }

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
    .ec-cta-card .msp-h2 { color: #fff; text-align: center; max-width: 22ch; margin-inline: auto; margin-bottom: 0; }
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

    @media (max-width: 760px) {
      .ec-approach-grid { grid-template-columns: 1fr; }
    }
  </style>

<main>

      <!-- HERO -->
      <section class="msp-hero" aria-labelledby="heroTitle">
        <div class="msp-wrap msp-hero__grid">
          <div class="msp-hero__copy reveal">
                        <h1 id="heroTitle" class="msp-h1">Your ERAS CV isn't a résumé. It's your case for belonging.</h1>
            <p class="msp-lede">We look past the rigid bullet points to help you build a structured, high-impact narrative that proves you belong in your top-choice residency program.</p>
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
      <section class="msp-section ec-problem" aria-labelledby="problemTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">The real problem</span>
            <h2 id="problemTitle" class="msp-h2">The most crucial — and most misunderstood — document in your application.</h2>
          </div>
          <div class="ec-problem__body reveal">
            <p>Many applicants treat the ERAS CV as a standard resume or a dry list of academic achievements. In reality, it is a comprehensive compilation of your entire professional journey. It shouldn't just state where you went and what you did — it must seamlessly connect your achievements to demonstrate the exact trajectory of who you are as a physician.</p>
            <p>A poorly formatted or generic CV risks burying your greatest achievements beneath a wall of undifferentiated bullet points. Programme directors reviewing hundreds of applications will move on quickly. The window to make an impression is narrow, and most CVs waste it.</p>
            <p>At USMLE Wise, we work with you to break down your experiences piece by piece, reconstruct them with precision, and present a professional profile that commands attention.</p>
          </div>
        </div>
      </section>

      <!-- OUR APPROACH -->
      <section class="msp-section" aria-labelledby="approachTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Our approach</span>
            <h2 id="approachTitle" class="msp-h2">Every entry, rebuilt with strategic intent.</h2>
            <p class="msp-sub">We don't hand you a template. We work through your CV with you, line by line, until every experience carries strategic weight.</p>
          </div>
          <div class="ec-approach-grid">
            <div class="ec-feat reveal">
              <div class="ec-feat__icon"><i data-lucide="user-check" width="22" height="22"></i></div>
              <p class="ec-feat__title">1-on-1 dedicated mentorship</p>
              <p class="ec-feat__body">You work one-on-one with an experienced mentor who understands the specific landscape of the residency match. Together you analyse your clinical, research, and volunteer experiences to ensure every entry carries strategic weight — no generic templates, no computerised checklists.</p>
            </div>
            <div class="ec-feat reveal">
              <div class="ec-feat__icon"><i data-lucide="trending-up" width="22" height="22"></i></div>
              <p class="ec-feat__title">Strategic impact — making achievements stand out</p>
              <p class="ec-feat__body">Every rotation, research project, and volunteer experience has hidden depth. We don't just list your duties; we elevate them. By reframing passive tasks into high-impact accomplishments, we ensure your hard work looks distinctly impressive, highly relevant, and uniquely compelling to competitive programs.</p>
            </div>
            <div class="ec-feat reveal">
              <div class="ec-feat__icon"><i data-lucide="edit-3" width="22" height="22"></i></div>
              <p class="ec-feat__title">Meticulous, respectful revisions</p>
              <p class="ec-feat__body">Your medical journey matters, and we treat it as such. Every update, edit, and revision is handled with the utmost respect and attention to detail. We do not rush the process or cut corners — we polish every line until it perfectly reflects your professional identity.</p>
            </div>
            <div class="ec-feat reveal">
              <div class="ec-feat__icon"><i data-lucide="git-branch" width="22" height="22"></i></div>
              <p class="ec-feat__title">A journey, not just a list</p>
              <p class="ec-feat__body">Every description, hobby, and publication in your ERAS application should serve a purpose. We help you connect the dots of your career so far, turning isolated bullet points into a cohesive story of growth, resilience, and readiness for residency.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- FINAL CTA -->
      <section class="ec-cta-wrap">
        <div class="msp-wrap">
          <div class="ec-cta-card reveal" aria-labelledby="ctaTitle">
            <span class="msp-eyebrow msp-eyebrow--light">Get started</span>
            <h2 id="ctaTitle" class="msp-h2">Your CV should open doors, not close them.</h2>
            <p class="msp-sub">Book a free guidance call and we'll walk through your current CV, identify what's holding it back, and map out exactly how the ERAS CV process works.</p>
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
