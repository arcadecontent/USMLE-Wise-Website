<?php
$pageTitle = "Interview Preparation | USMLE Wise";
$pageDescription = "Mock interviews, peer buddy sessions, and a 1,200+ question bank to prepare IMG residency applicants for ranking season.";
$canonical = "https://usmlewise.com/match-interview";
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
      /* authenticity section */
      .ip-auth {
        background: var(--uw-surface-sunk); border-block: 1px solid var(--uw-border);
      }
      .ip-auth-inner {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: clamp(40px, 6vw, 80px);
        align-items: center;
      }
      .ip-auth-badge {
        background: #08111f;
        border: 1px solid rgba(255,255,255,.08);
        border-radius: clamp(16px, 2vw, 24px);
        padding: clamp(32px, 4vw, 52px);
        display: flex; flex-direction: column; gap: 20px;
      }
      .ip-auth-badge__item {
        display: flex; gap: 14px; align-items: flex-start;
      }
      .ip-auth-badge__icon {
        width: 36px; height: 36px; border-radius: 9px; flex-shrink: 0;
        background: rgba(255,255,255,.06); border: 1px solid rgba(255,255,255,.08);
        display: grid; place-items: center; color: rgba(255,255,255,.7);
      }
      .ip-auth-badge__text { font-size: 15px; color: rgba(255,255,255,.75); line-height: 1.6; margin: 0; padding-top: 6px; }
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
      @media (max-width: 768px) { .ip-auth-inner { grid-template-columns: 1fr; } }
      @media (max-width: 640px) { .pg-feat-grid { grid-template-columns: 1fr; } }
    </style>

<main>

    <!-- HERO -->
    <section class="msp-hero" aria-labelledby="heroTitle">
      <div class="msp-wrap msp-hero__grid">
        <div class="msp-hero__copy reveal">
                    <h1 id="heroTitle" class="msp-h1">Your CV gets you in the door. Your interview skills make you&nbsp;stay.</h1>
          <p class="msp-lede">Getting an interview invite is only half the battle. How you show up in that room — or on that screen — determines where you match. We prepare you to walk in confident, composed, and completely yourself.</p>
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
          <h2 id="problemTitle" class="msp-h2">Paper credentials don't speak for themselves in the room.</h2>
          <p class="msp-sub">Most IMG applicants arrive at interviews having spent months on their application — and almost no time on the interview itself. The gap between how strong your application looks and how confidently you perform live can cost you a rank. You need more than knowledge of your own CV; you need the ability to articulate your journey, handle curveball questions, and connect authentically with Program Directors under pressure.</p>
        </div>
      </div>
    </section>

    <!-- 4 SERVICE FEATURES -->
    <section class="msp-section" aria-labelledby="featuresTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">What we offer</span>
          <h2 id="featuresTitle" class="msp-h2">Everything you need to own the interview season.</h2>
          <p class="msp-sub">Our interview preparation program is built around four pillars — each one targeting a specific gap we've seen hold back IMG applicants across five match cycles.</p>
        </div>
        <div class="pg-feat-grid">
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="video" width="20" height="20"></i></div>
            <p class="pg-feat__title">Specialty-specific mock interviews</p>
            <p class="pg-feat__body">Simulated interviews tailored to your target specialty, run by mentors with firsthand knowledge of what programs in that field actually look for. You get feedback on content, delivery, body language, and pacing — not generic interview tips.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="users" width="20" height="20"></i></div>
            <p class="pg-feat__title">Peer buddy sessions</p>
            <p class="pg-feat__body">Practice with peers who are also in the thick of interview season. These structured peer-to-peer sessions build the repetition and comfort you need to show up relaxed on the real day — because the more you rehearse, the less it feels like performing.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="database" width="20" height="20"></i></div>
            <p class="pg-feat__title">1,200+ question bank</p>
            <p class="pg-feat__body">Five match cycles of real interview questions, organized by specialty, question type, and difficulty. From classic openers like "Tell me about yourself" to deeply specialty-specific clinical scenarios — you'll have seen it before it ever comes up in a real interview.</p>
          </div>
          <div class="pg-feat reveal">
            <div class="pg-feat__icon"><i data-lucide="compass" width="20" height="20"></i></div>
            <p class="pg-feat__title">Behavioral &amp; communication strategy</p>
            <p class="pg-feat__body">We teach you how to structure answers, navigate sensitive questions about your IMG background, and tell your story in a way that is memorable and honest. No rehearsed monologues. No cookie-cutter STAR frameworks that make every answer sound the same.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- AUTHENTICITY SECTION -->
    <section class="msp-section ip-auth" aria-labelledby="authTitle">
      <div class="msp-wrap">
        <div class="ip-auth-inner">
          <div class="msp-head reveal" style="text-align: left;">
            <span class="msp-eyebrow">Our philosophy</span>
            <h2 id="authTitle" class="msp-h2" style="max-width: 18ch;">Authenticity, not templates.</h2>
            <p class="msp-sub">The best interviews don't feel like performances. Program Directors are not looking for the most polished candidate — they're looking for someone they can work with, trust, and train. We help you show up as your most confident, genuine self, with the tools to handle anything the interview throws at you.</p>
          </div>
          <div class="ip-auth-badge reveal">
            <div class="ip-auth-badge__item">
              <div class="ip-auth-badge__icon"><i data-lucide="shield-check" width="16" height="16"></i></div>
              <p class="ip-auth-badge__text">No generic scripts — every answer is crafted around your actual background and story.</p>
            </div>
            <div class="ip-auth-badge__item">
              <div class="ip-auth-badge__icon"><i data-lucide="target" width="16" height="16"></i></div>
              <p class="ip-auth-badge__text">Specialty-aware prep so you speak the language of the field you're entering.</p>
            </div>
            <div class="ip-auth-badge__item">
              <div class="ip-auth-badge__icon"><i data-lucide="refresh-cw" width="16" height="16"></i></div>
              <p class="ip-auth-badge__text">Iterative practice until your responses feel natural, not rehearsed.</p>
            </div>
            <div class="ip-auth-badge__item">
              <div class="ip-auth-badge__icon"><i data-lucide="heart" width="16" height="16"></i></div>
              <p class="ip-auth-badge__text">IMG-centered strategy that turns your international background into an asset, not a liability.</p>
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
          <h2 id="ctaTitle" class="msp-h2">Approach ranking season with absolute confidence.</h2>
          <p class="msp-sub">Book a free guidance call and we'll map out exactly what your interview preparation should look like — based on your specialty, your timeline, and where you need the most work.</p>
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
