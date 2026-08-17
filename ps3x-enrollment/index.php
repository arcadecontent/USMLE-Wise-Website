<?php
$styles_v = @filemtime($_SERVER['DOCUMENT_ROOT'] . '/assets/usmle-design-system/styles.css') ?: '1';
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- Google tag (gtag.js) — GA4, migrated from old site -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1MMVZ5WKY2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-1MMVZ5WKY2');
</script>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/meta-pixel.php'; ?>
<title>PS3x Personal Statement Editing | USMLE Wise</title>
<meta name="description" content="PS3x is physician-led, 1:1 personal statement editing for residency applicants — mapped to the 3X framework program directors actually score. 100% money-back guarantee." />
<!-- Standalone ad/campaign landing page: kept out of the sitemap and out of the
     index so it doesn't compete with /match-ps3x in search. -->
<meta name="robots" content="noindex, follow" />
<meta property="og:type" content="website" />
<meta property="og:title" content="PS3x Personal Statement Editing | USMLE Wise" />
<meta property="og:description" content="You only get 1 page, 1 shot to be unforgettable. Physician-led personal statement editing, mapped to the 3X framework." />
<meta property="og:url" content="https://usmlewise.com/ps3x-enrollment" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Source+Serif+4:ital,opsz,wght@0,8..60,400;0,8..60,600;1,8..60,400;1,8..60,600&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet" media="print" onload="this.media='all'" />
<noscript><link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Source+Serif+4:ital,opsz,wght@0,8..60,400;0,8..60,600;1,8..60,400;1,8..60,600&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet" /></noscript>
<link rel="icon" type="image/svg+xml" href="/assets/usmle-design-system/assets/emblem.svg" />
<link rel="stylesheet" href="/assets/usmle-design-system/styles.css?v=<?php echo $styles_v; ?>" />
<link rel="stylesheet" href="/styles/match.css?v=<?php echo @filemtime($_SERVER['DOCUMENT_ROOT'] . '/styles/match.css') ?: '1'; ?>" />
<script src="https://unpkg.com/lucide@0.469.0/dist/umd/lucide.min.js" defer></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  if (window.lucide && typeof window.lucide.createIcons === 'function') {
    window.lucide.createIcons();
  }
});
</script>
<!-- mobile-nav.js is intentionally not loaded: it builds the hamburger + off-canvas
     drawer, and this landing page shows only the logo and the CTA on narrow screens. -->
<script src="/js/uw-track.js?v=<?php echo @filemtime($_SERVER['DOCUMENT_ROOT'] . '/js/uw-track.js') ?: '1'; ?>" defer></script>
<style>
  .px { font-family: var(--font-sans); color: var(--uw-ink-800); background: var(--uw-surface); -webkit-font-smoothing: antialiased; overflow-x: hidden; }
  .px em { font-style: italic; }
  .px a:not(.btn) { color: inherit; }
  .px img { max-width: 100%; }
  .px ::selection { background: var(--uw-blue-100); }
  .px { padding-bottom: 0; }
  .px-mobilebar { display: none; }
  @media (max-width: 880px) {
    .px { padding-bottom: 78px; }
    .px-mobilebar { display: flex !important; }
  }

  /* Frosted-glass header (matches the home page's scrolled state) — this page has no scroll-based toggle, so it's always on */
  .msp-nav { background: rgba(250,250,249,.92); -webkit-backdrop-filter: saturate(180%) blur(12px); backdrop-filter: saturate(180%) blur(12px); border-bottom-color: var(--uw-border); box-shadow: var(--shadow-sm); }
  /* Standalone landing page: fewer footer nav columns than the site-wide footer
     this was copied from, so space-between leaves a large gap. */
  .msp-foot__top { justify-content: flex-start; gap: clamp(48px, 8vw, 120px); }
  /* Narrow screens: no menu at all (mobile-nav.js is deliberately not loaded on this
     page), so the header is just the logo and the CTA. match.css hides .msp-nav__cta
     under 560px for the site-wide nav — here it is the only thing in the header, so
     keep it visible. The label stays full-length at every width, so the logo is the
     part that gives: it scales down rather than letting the CTA wrap or truncate. */
  @media (max-width: 560px) {
    .msp-nav__cta { display: inline-flex; flex: none; padding: 10px 14px; font-size: 13px; gap: 7px; }
    .msp-nav__inner { gap: 10px; }
    .msp-brand { min-width: 0; flex: 0 1 auto; }
    .msp-brand img { height: auto; width: 100%; max-width: 128px; }
  }

  /* Matched-at marquee */
  @keyframes px-marquee { from { transform: translateX(0); } to { transform: translateX(-50%); } }
  .px-marquee { width: 100%; overflow: hidden; -webkit-mask-image: linear-gradient(90deg, transparent, #000 10%, #000 90%, transparent); mask-image: linear-gradient(90deg, transparent, #000 10%, #000 90%, transparent); }
  .px-marquee:hover .px-track { animation-play-state: paused; }
  .px-track { display: flex; width: max-content; animation: px-marquee 46s linear infinite; }
  @media (prefers-reduced-motion: reduce) { .px-track { animation: none; } }

  /* Masonry image walls */
  .px-wall { scrollbar-width: thin; scrollbar-color: var(--uw-blue-300) var(--uw-blue-50); }
  .px-wall::-webkit-scrollbar { width: 11px; }
  .px-wall::-webkit-scrollbar-track { background: var(--uw-blue-50); border-radius: 999px; }
  .px-wall::-webkit-scrollbar-thumb { background: var(--uw-blue-300); border-radius: 999px; border: 2px solid var(--uw-blue-50); }
  .px-wall::-webkit-scrollbar-thumb:hover { background: var(--uw-blue-500); }

  .px-play { cursor: pointer; }

  /* FAQ — native <details>/<summary>, no JS required */
  .px-faq { background: var(--uw-surface); border: 1px solid var(--uw-border); border-radius: var(--r-lg); padding: 4px 20px; }
  .px-faq summary { cursor: pointer; padding: 14px 0; font-weight: 600; font-size: 15.5px; color: var(--uw-ink-900); list-style: none; }
  .px-faq summary::-webkit-details-marker { display: none; }
  .px-faq summary::after { content: '+'; float: right; font-family: var(--font-display); font-size: 20px; color: var(--uw-blue-500); }
  .px-faq[open] summary::after { content: '\2013'; }
  .px-faq p { margin: 0 0 16px; font-size: 14.5px; line-height: 1.6; color: var(--uw-ink-600); }

  @media (max-width: 640px) {
    .px-2col { grid-template-columns: 1fr !important; }
  }
</style>
</head>
<body>

<!-- ============== MINIMAL LANDING HEADER (in-page section links only — standalone page) ============== -->
<header class="msp-nav" id="pxNav">
  <div class="msp-wrap msp-nav__inner">
    <span class="msp-brand" aria-label="USMLE Wise">
      <img src="/assets/usmle-design-system/assets/Logo-Horizontal.svg" alt="USMLE Wise" height="36" />
    </span>
    <nav class="msp-nav__links" aria-label="Page sections">
      <a href="#why">Why It Works</a>
      <a href="#framework">3X Framework</a>
      <a href="#testimonials">Reviews</a>
      <a href="#packages">Pricing</a>
      <a href="#faq">FAQ</a>
    </nav>
    <a class="btn btn--primary msp-nav__cta" href="#packages">Get Started</a>
  </div>
</header>

<main id="top" class="px">

  <!-- HERO -->
  <section style="background:radial-gradient(80% 70% at 50% 0%, var(--uw-blue-50), transparent);padding:clamp(56px,7vw,76px) clamp(20px,5vw,24px) clamp(48px,6vw,64px);display:flex;flex-direction:column;align-items:center;text-align:center">
    <div style="font:500 12px var(--font-mono);letter-spacing:.14em;text-transform:uppercase;color:var(--uw-blue-500)">PS3x &middot; Residency personal statement editing</div>
    <h1 style="max-width:860px;margin:20px 0 0;font:600 clamp(34px,6vw,58px)/1.12 var(--font-display);letter-spacing:-0.018em;color:var(--uw-ink-900)">You only get 1 page. 1 shot to be <em>unforgettable.</em></h1>
    <p style="max-width:700px;margin:18px 0 0;font:400 clamp(18px,2.4vw,22px)/1.4 var(--font-display);color:var(--uw-ink-700)">Don&rsquo;t let this 1 page be what holds you back from the Match.</p>
    <p style="max-width:700px;margin:22px 0 0;font-size:18px;line-height:1.55;color:var(--uw-ink-600)">Even with perfect Step scores and glowing letters, a mediocre personal statement can quietly sabotage your entire residency application. Program directors rate it one of the most important documents they read. We craft yours, line by line, into the page a program remembers on rank day.</p>
    <div style="margin-top:32px">
      <a href="#packages" class="btn btn--primary btn--xl">Sign up for PS3x PS editing &rarr;</a>
    </div>
    <div style="margin-top:20px;font-size:14px;color:var(--uw-ink-500);display:flex;flex-wrap:wrap;justify-content:center;gap:8px">
      <span style="color:var(--uw-warning-500);letter-spacing:.1em">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
      <span>1,000+ personal statements crafted &middot; Written with you by physicians, never AI &middot; <strong style="color:var(--uw-blue-600);font-weight:600">100% money-back guarantee</strong></span>
    </div>
  </section>

  <!-- MATCHED AT -->
  <section style="padding:44px 24px 56px;border-top:1px solid var(--uw-border);display:flex;flex-direction:column;align-items:center;text-align:center">
    <div style="font:500 12px var(--font-mono);letter-spacing:.14em;text-transform:uppercase;color:var(--uw-ink-500)">Our students have matched into top U.S. programs, including</div>
    <div class="px-marquee" style="margin-top:22px">
      <div class="px-track" style="font:600 clamp(16px,2.2vw,20px) var(--font-display);color:var(--uw-ink-700);white-space:nowrap">
        <span style="display:flex;align-items:center;gap:22px;padding-right:22px"><span>Harvard</span><span style="color:var(--uw-red-500)">&middot;</span><span>Yale</span><span style="color:var(--uw-red-500)">&middot;</span><span>Johns Hopkins</span><span style="color:var(--uw-red-500)">&middot;</span><span>Stanford</span><span style="color:var(--uw-red-500)">&middot;</span><span>Columbia</span><span style="color:var(--uw-red-500)">&middot;</span><span>Mayo Clinic</span><span style="color:var(--uw-red-500)">&middot;</span><span>Cornell</span><span style="color:var(--uw-red-500)">&middot;</span><span>Penn</span><span style="color:var(--uw-red-500)">&middot;</span><span>Mount Sinai</span><span style="color:var(--uw-red-500)">&middot;</span><span>Cleveland Clinic</span><span style="color:var(--uw-red-500)">&middot;</span><span>UCLA</span><span style="color:var(--uw-red-500)">&middot;</span><span>Duke</span><span style="color:var(--uw-red-500)">&middot;</span><span>Brown</span><span style="color:var(--uw-red-500)">&middot;</span><span>Emory</span><span style="color:var(--uw-red-500)">&middot;</span></span>
        <span aria-hidden="true" style="display:flex;align-items:center;gap:22px;padding-right:22px"><span>Harvard</span><span style="color:var(--uw-red-500)">&middot;</span><span>Yale</span><span style="color:var(--uw-red-500)">&middot;</span><span>Johns Hopkins</span><span style="color:var(--uw-red-500)">&middot;</span><span>Stanford</span><span style="color:var(--uw-red-500)">&middot;</span><span>Columbia</span><span style="color:var(--uw-red-500)">&middot;</span><span>Mayo Clinic</span><span style="color:var(--uw-red-500)">&middot;</span><span>Cornell</span><span style="color:var(--uw-red-500)">&middot;</span><span>Penn</span><span style="color:var(--uw-red-500)">&middot;</span><span>Mount Sinai</span><span style="color:var(--uw-red-500)">&middot;</span><span>Cleveland Clinic</span><span style="color:var(--uw-red-500)">&middot;</span><span>UCLA</span><span style="color:var(--uw-red-500)">&middot;</span><span>Duke</span><span style="color:var(--uw-red-500)">&middot;</span><span>Brown</span><span style="color:var(--uw-red-500)">&middot;</span><span>Emory</span><span style="color:var(--uw-red-500)">&middot;</span></span>
      </div>
    </div>
  </section>

  <!-- MATCH TESTIMONIALS (IMAGES) -->
  <section style="background:var(--uw-bg);border-top:1px solid var(--uw-border);padding:76px 24px;display:flex;flex-direction:column;align-items:center;text-align:center">
    <div style="font:500 12px var(--font-mono);letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500)">Match results</div>
    <h2 style="max-width:760px;margin:18px 0 0;font:600 clamp(28px,4.5vw,42px)/1.15 var(--font-display);letter-spacing:-0.015em;color:var(--uw-ink-900)">Applications rebuilt. Seasons ended.</h2>
    <p style="max-width:640px;margin:18px 0 0;font-size:16px;line-height:1.55;color:var(--uw-ink-600)">Match-day screenshots and messages from students across every path to residency.</p>

    <div class="px-wall" style="max-width:1040px;width:100%;margin-top:36px;max-height:82vh;overflow-y:auto;border-radius:16px;border:1px solid var(--uw-border);padding:18px;background:var(--uw-surface)">
      <div style="font:500 11px var(--font-mono);letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500);text-align:left;margin:2px 0 14px">Match day</div>
      <div style="column-width:260px;column-gap:14px">
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/ig-dl-2.jpg" loading="lazy" alt="USMLE Wise applicant who matched" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/ig-660329525.jpg" loading="lazy" alt="USMLE Wise applicant who matched" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/656425718_17890021239448701_3488419753803306264_n.jpg" loading="lazy" alt="USMLE Wise applicant who matched" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/ig-dl-1.jpg" loading="lazy" alt="USMLE Wise applicant who matched" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/ig-656292960.jpg" loading="lazy" alt="USMLE Wise applicant who matched" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/wa-apr-4-2026.jpeg" loading="lazy" alt="USMLE Wise applicant who matched" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/wa-apr-4-2026-1.jpeg" loading="lazy" alt="USMLE Wise applicant who matched" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/wa-may-16-2026.jpeg" loading="lazy" alt="USMLE Wise applicant who matched" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/wa-apr-15-2026.jpeg" loading="lazy" alt="USMLE Wise applicant who matched" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/ig-657845911.jpg" loading="lazy" alt="USMLE Wise applicant who matched" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
      </div>
      <div style="font:500 11px var(--font-mono);letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500);text-align:left;margin:8px 0 14px;padding-top:18px;border-top:1px solid var(--uw-border)">In their words</div>
      <div style="column-width:260px;column-gap:14px">
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/zeel-patel.jpeg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/3.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/4.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/5.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/6.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/7.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/8.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/9.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/10.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/11.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/12.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/13.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/allegheny-im.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/Anjali.jpeg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/ayesha-surgery.png" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/Ayra.jpeg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/Bardia.jpeg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/EM_Anniesha.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/guy-advanced-interviewing.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/guy-uoh.png" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/Hamna.jpeg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/joycine-matched.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/lakshita-advanced-interviewing.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/Logesh.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/Mounika.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/Nancy.jpeg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/naz-advanced-interviewing.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/Neuro.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/niyati-off-cycle.png" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/Okkes.jpeg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/paranshi-im.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/Pavani.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/Praneet.jpeg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/psych-match.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/Rasmitha.jpeg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/Ravindra.jpeg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/soap-1.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/saint-vincent-r.jpeg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/screenshot-instagram-2.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/Shiv.jpeg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/shreya-fm-match.jpeg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/SidNath.jpeg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/Sinmmer.jpeg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/Smit.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/sonia-1-advanced-interviewing.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/sonia-2-advanced-interviewing.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/soura-psych.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/Swathi.jpeg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/uic-peoria.jpeg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/unknown-1.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/unknown-3.jpeg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/unknown-2.jpg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/yog-14.jpeg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
        <div style="break-inside:avoid;margin:0 0 14px"><img src="/assets/ps3x-enrollment/matches/babitha.jpeg" loading="lazy" alt="USMLE Wise student match testimonial" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid var(--uw-border)"></div>
      </div>
    </div>
  </section>

  <!-- WHY SKIPPED -->
  <section id="why" style="padding:76px 24px;display:flex;flex-direction:column;align-items:center;text-align:center">
    <div style="font:500 12px var(--font-mono);letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500)">The problem</div>
    <h2 style="max-width:760px;margin:18px 0 0;font:600 clamp(28px,4.5vw,42px)/1.15 var(--font-display);letter-spacing:-0.015em;color:var(--uw-ink-900)">Why 85% of personal statements get skipped</h2>
    <p style="max-width:700px;margin:20px 0 0;font-size:17px;line-height:1.55;color:var(--uw-ink-600)">Even applicants with strong scores lose interviews here. The same few problems come up again and again.</p>
    <div style="max-width:900px;margin-top:40px;display:flex;flex-wrap:wrap;justify-content:center;gap:18px;width:100%">
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:12px;padding:24px 22px;text-align:left;flex:1 1 240px;max-width:272px">
        <div style="width:42px;height:42px;border-radius:10px;background:var(--uw-surface-sunk);color:var(--uw-ink-500);display:flex;align-items:center;justify-content:center;margin-bottom:14px"><svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 6h13"></path><path d="M8 12h13"></path><path d="M8 18h13"></path><path d="M3 6h.01"></path><path d="M3 12h.01"></path><path d="M3 18h.01"></path></svg></div>
        <div style="font:600 16px var(--font-display);color:var(--uw-ink-900)">It reads like a list.</div>
        <p style="margin:8px 0 0;font-size:14.5px;line-height:1.55;color:var(--uw-ink-600)">A r&eacute;sum&eacute; in paragraph form. The reader learns what you did and never learns who you are.</p>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:12px;padding:24px 22px;text-align:left;flex:1 1 240px;max-width:272px">
        <div style="width:42px;height:42px;border-radius:10px;background:var(--uw-surface-sunk);color:var(--uw-ink-500);display:flex;align-items:center;justify-content:center;margin-bottom:14px"><svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></div>
        <div style="font:600 16px var(--font-display);color:var(--uw-ink-900)">It opens slow.</div>
        <p style="margin:8px 0 0;font-size:14.5px;line-height:1.55;color:var(--uw-ink-600)">By the third line, a reviewer on their fortieth statement of the night has moved on.</p>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:12px;padding:24px 22px;text-align:left;flex:1 1 240px;max-width:272px">
        <div style="width:42px;height:42px;border-radius:10px;background:var(--uw-surface-sunk);color:var(--uw-ink-500);display:flex;align-items:center;justify-content:center;margin-bottom:14px"><svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path></svg></div>
        <div style="font:600 16px var(--font-display);color:var(--uw-ink-900)">It could be anyone&rsquo;s.</div>
        <p style="margin:8px 0 0;font-size:14.5px;line-height:1.55;color:var(--uw-ink-600)">Swap the name and it fits a hundred other applicants.</p>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:12px;padding:24px 22px;text-align:left;flex:1 1 240px;max-width:272px">
        <div style="width:42px;height:42px;border-radius:10px;background:var(--uw-surface-sunk);color:var(--uw-ink-500);display:flex;align-items:center;justify-content:center;margin-bottom:14px"><svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="18" r="3"></circle><circle cx="6" cy="6" r="3"></circle><path d="M13 6h3a2 2 0 0 1 2 2v7"></path><path d="M11 18H8a2 2 0 0 1-2-2V9"></path></svg></div>
        <div style="font:600 16px var(--font-display);color:var(--uw-ink-900)">It fights the rest of your file.</div>
        <p style="margin:8px 0 0;font-size:14.5px;line-height:1.55;color:var(--uw-ink-600)">The statement says one thing, your CV and letters say another, and trust drops.</p>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:12px;padding:24px 22px;text-align:left;flex:1 1 240px;max-width:272px">
        <div style="width:42px;height:42px;border-radius:10px;background:var(--uw-surface-sunk);color:var(--uw-ink-500);display:flex;align-items:center;justify-content:center;margin-bottom:14px"><svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="22" x2="18" y1="12" y2="12"></line><line x1="6" x2="2" y1="12" y2="12"></line><line x1="12" x2="12" y1="6" y2="2"></line><line x1="12" x2="12" y1="22" y2="18"></line></svg></div>
        <div style="font:600 16px var(--font-display);color:var(--uw-ink-900)">It misses what programs score.</div>
        <p style="margin:8px 0 0;font-size:14.5px;line-height:1.55;color:var(--uw-ink-600)">Reviewers judge every applicant against a fixed set of criteria, the three lenses behind our 3X framework. A statement written without them can read well and still check none of the boxes a committee is trained to look for.</p>
      </div>
    </div>
  </section>

  <!-- FOUNDER NOTE -->
  <section style="background:var(--uw-surface);border-top:1px solid var(--uw-border);border-bottom:1px solid var(--uw-border);padding:76px 24px;display:flex;flex-direction:column;align-items:center;text-align:center">
    <div style="font:500 12px var(--font-mono);letter-spacing:.14em;text-transform:uppercase;color:var(--uw-blue-500)">Why I built this</div>
    <div style="width:240px;height:240px;margin-top:28px">
      <img src="/assets/ps3x-enrollment/founder.jpeg" width="1920" height="1920" alt="Dr. Manik Madaan, founder of USMLE Wise" style="display:block;width:100%;height:100%;object-fit:cover;border-radius:50%;border:1px solid var(--uw-border)">
    </div>
    <div style="max-width:700px;margin-top:26px;font:400 clamp(18px,2.6vw,22px)/1.6 var(--font-display);color:var(--uw-ink-700);display:flex;flex-direction:column;gap:18px">
      <p style="margin:0">I&rsquo;m Dr. Manik Madaan, and I&rsquo;ve read personal statements from brilliant doctors that said nothing about them. Every line was true, but every line was forgettable, and it broke my heart, because a program director would reach the end of the page and still have no idea who they were. The applicant had never worked out their story, so they never told it, and the interview never came.</p>
      <p style="margin:0">Your PS is the one page where a program director finally meets you. If your CV is the skeleton, the bare list of what you&rsquo;ve done, and your PS is the muscle that brings it to life, turning those bullet points into a person a program wants to interview and shaping the questions you get in the interview.</p>
      <p style="margin:0">I spent about 4 years serving on a residency selection committee, so I&rsquo;ve seen what makes a PD slow down, keep reading, and reach for that interview button. I turned what I saw into the 3X framework, the same criteria programs use to decide who they interview and how they rank them.</p>
      <p style="margin:0">Since then, applicants who&rsquo;d gone unmatched for multiple cycles have matched once we found their story together, and first-time applicants have matched too, with a PS that finally does their hard work justice.</p>
    </div>
    <div style="margin-top:26px;font:600 15px var(--font-sans);color:var(--uw-ink-900)">Dr. Manik Madaan</div>
    <div style="font-size:13.5px;color:var(--uw-ink-500)">Contributor, USMLE Wise</div>
    <div style="max-width:620px;margin-top:8px;font-size:13.5px;line-height:1.5;color:var(--uw-ink-500)">World&rsquo;s most-followed USMLE and Match expert &middot; 700,000+ followers &middot; close to 12,000 students mentored to match</div>
  </section>

  <!-- 3X FRAMEWORK -->
  <section id="framework" style="padding:76px 24px;display:flex;flex-direction:column;align-items:center;text-align:center">
    <div style="font:500 12px var(--font-mono);letter-spacing:.14em;text-transform:uppercase;color:var(--uw-blue-500)">The 3X framework</div>
    <h2 style="max-width:760px;margin:18px 0 0;font:600 clamp(28px,4.5vw,42px)/1.15 var(--font-display);letter-spacing:-0.015em;color:var(--uw-ink-900)">We map your story to the proprietary 3X framework</h2>
    <p style="max-width:700px;margin:20px 0 0;font-size:17px;line-height:1.55;color:var(--uw-ink-600)">It&rsquo;s built on the criteria residency committees use to judge every applicant. We write your statement to all three lenses.</p>
    <div style="max-width:1080px;margin-top:40px;display:grid;grid-template-columns:repeat(auto-fit,minmax(270px,1fr));gap:20px;width:100%">
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:12px;padding:28px 24px;text-align:left">
        <div style="display:flex;align-items:center;gap:12px"><div style="width:40px;height:40px;border-radius:10px;background:var(--uw-blue-50);color:var(--uw-blue-500);display:flex;align-items:center;justify-content:center"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path></svg></div><div style="font:500 12px var(--font-mono);letter-spacing:.12em;color:var(--uw-red-500)">1X</div></div>
        <div style="margin-top:10px;font:600 19px var(--font-display);color:var(--uw-ink-900)">PCM-6 communication</div>
        <p style="margin:10px 0 0;font-size:15px;line-height:1.55;color:var(--uw-ink-600)">A strong story carries six things at once: clarity, emotional truth, values, imagination, momentum, and likeability. We build all six into the page.</p>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:12px;padding:28px 24px;text-align:left">
        <div style="display:flex;align-items:center;gap:12px"><div style="width:40px;height:40px;border-radius:10px;background:var(--uw-blue-50);color:var(--uw-blue-500);display:flex;align-items:center;justify-content:center"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.84Z"></path><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"></path><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"></path></svg></div><div style="font:500 12px var(--font-mono);letter-spacing:.12em;color:var(--uw-red-500)">2X</div></div>
        <div style="margin-top:10px;font:600 19px var(--font-display);color:var(--uw-ink-900)">AAMC holistic review (EACM)</div>
        <p style="margin:10px 0 0;font-size:15px;line-height:1.55;color:var(--uw-ink-600)">Your experiences, attributes, competencies, and metrics, tied into one human story that backs up the scores already on your file.</p>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:12px;padding:28px 24px;text-align:left">
        <div style="display:flex;align-items:center;gap:12px"><div style="width:40px;height:40px;border-radius:10px;background:var(--uw-blue-50);color:var(--uw-blue-500);display:flex;align-items:center;justify-content:center"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 2v2"></path><path d="M5 2v2"></path><path d="M5 3H4a2 2 0 0 0-2 2v4a6 6 0 0 0 12 0V5a2 2 0 0 0-2-2h-1"></path><path d="M8 15a6 6 0 0 0 12 0v-3"></path><circle cx="20" cy="10" r="2"></circle></svg></div><div style="font:500 12px var(--font-mono);letter-spacing:.12em;color:var(--uw-red-500)">3X</div></div>
        <div style="margin-top:10px;font:600 19px var(--font-display);color:var(--uw-ink-900)">ACGME core competencies</div>
        <p style="margin:10px 0 0;font-size:15px;line-height:1.55;color:var(--uw-ink-600)">Your story quietly shows patient care, knowledge, professionalism, and teamwork, the traits every program is required to evaluate.</p>
      </div>
    </div>
    <div style="margin-top:36px"><a href="#packages" class="btn btn--primary btn--lg">Sign up for PS3x PS editing &rarr;</a></div>
  </section>

  <!-- VIDEO TESTIMONIALS -->
  <section id="videos" style="background:var(--uw-surface);border-top:1px solid var(--uw-border);padding:76px 24px;display:flex;flex-direction:column;align-items:center;text-align:center">
    <div style="font:500 12px var(--font-mono);letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500)">The magic of 3X editing</div>
    <h2 style="max-width:760px;margin:18px 0 0;font:600 clamp(28px,4.5vw,42px)/1.15 var(--font-display);letter-spacing:-0.015em;color:var(--uw-ink-900)">Hear how it transformed their application.</h2>
    <p style="max-width:640px;margin:18px 0 0;font-size:16px;line-height:1.55;color:var(--uw-ink-600)">Old grads, low scores, second attempts, prestigious programs, every path to the Match, told by the doctors who walked it.</p>

    <div style="max-width:1080px;width:100%;margin-top:44px;display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:20px;text-align:left">
<?php
$px_videos = [
  ['id' => 'WDrpqKmLwLs', 'name' => 'Ali', 'tag' => 'IM', 'label' => 'Super old-grad match'],
  ['id' => 'Ea1pD2xY0_s', 'name' => 'Hamna', 'tag' => 'FM', 'label' => 'Super old-grad match'],
  ['id' => 'lmjpF2nrXOU', 'name' => 'SOAP match', 'tag' => 'SOAP', 'label' => 'Super old-grad match'],
  ['id' => 'O4Gns55Brh0', 'name' => 'Shreya', 'tag' => 'FM', 'label' => 'Old grad &middot; Post-SOAP'],
  ['id' => 'bz_R34QsKjk', 'name' => 'Dr. Yash', 'tag' => 'IM', 'label' => 'Old grad &middot; Post-SOAP'],
  ['id' => '64yfSkj4M_8', 'name' => 'Nathan', 'tag' => 'IM', 'label' => 'Old grad &middot; 5+ years since graduation'],
  ['id' => 'HSsrZERcvbI', 'name' => 'Anjali', 'tag' => 'IM', 'label' => 'Matched with low scores &middot; 218 on Step 2'],
  ['id' => 'F8E7lTvGKRU', 'name' => 'Lakshita', 'tag' => 'IM', 'label' => 'Matched with low scores &middot; 221 on Step 2'],
  ['id' => 'LKF0UYfXyE0', 'name' => 'UK graduate', 'tag' => 'IM', 'label' => 'International grad'],
  ['id' => '8S2q-5Pb87k', 'name' => 'Pavani', 'tag' => 'FM', 'label' => 'Matched with a Step 2 attempt'],
  ['id' => 'izwBvdQgVc8', 'name' => 'Dyan', 'tag' => 'IM', 'label' => 'Prestigious match &middot; Albert Einstein'],
  ['id' => '2pGb5xiKzdw', 'name' => 'Dr. Srusti', 'tag' => 'IM', 'label' => 'Stellar match &middot; Saint Vincent'],
  ['id' => 'ZynxmljOZDA', 'name' => 'Hamit', 'tag' => 'IM', 'label' => 'Prestigious match &middot; UPMC'],
];
foreach ($px_videos as $v):
?>
      <div class="px-video" style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:12px;overflow:hidden;display:flex;flex-direction:column">
        <div class="px-play" data-vid="<?php echo htmlspecialchars($v['id']); ?>" data-title="<?php echo htmlspecialchars($v['name'] . ' — USMLE Wise match story'); ?>" style="position:relative;aspect-ratio:4/3;background:#000">
          <img src="https://img.youtube.com/vi/<?php echo htmlspecialchars($v['id']); ?>/hqdefault.jpg" loading="lazy" alt="<?php echo htmlspecialchars($v['name'] . ' — USMLE Wise match story'); ?>" style="width:100%;height:100%;object-fit:cover;display:block">
          <div style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;pointer-events:none"><div style="width:60px;height:60px;border-radius:50%;background:var(--uw-red-500);display:flex;align-items:center;justify-content:center;box-shadow:0 6px 18px rgba(0,0,0,.3)"><svg width="22" height="22" viewBox="0 0 24 24" fill="#fff" style="margin-left:3px"><path d="M8 5v14l11-7z"></path></svg></div></div>
        </div>
        <div style="padding:16px 18px 18px">
          <div style="font:500 10.5px var(--font-mono);letter-spacing:.1em;text-transform:uppercase;color:var(--uw-blue-500);margin-bottom:8px"><?php echo $v['label']; ?></div>
          <div style="font:600 18px var(--font-display);color:var(--uw-ink-900)"><?php echo htmlspecialchars($v['name']); ?> <span style="font:500 10px var(--font-mono);letter-spacing:.08em;color:var(--uw-blue-600);background:var(--uw-blue-50);border:1px solid var(--uw-blue-100);border-radius:4px;padding:2px 6px;margin-left:6px"><?php echo htmlspecialchars($v['tag']); ?></span></div>
        </div>
      </div>
<?php endforeach; ?>
    </div>
  </section>

  <!-- MATCH RATES -->
  <section style="background:var(--uw-blue-500);background-image:radial-gradient(rgba(255,255,255,0.10) 1px, transparent 1px);background-size:16px 16px;padding:76px 24px;display:flex;flex-direction:column;align-items:center;text-align:center">
    <div style="font:500 12px var(--font-mono);letter-spacing:.14em;text-transform:uppercase;color:var(--uw-blue-200)">Our outcomes</div>
    <h2 style="max-width:700px;margin:18px 0 0;font:600 clamp(28px,4.5vw,42px)/1.15 var(--font-display);letter-spacing:-0.015em;color:#fff">Physician-level guidance that takes you from anxious to ready.</h2>
    <div style="margin-top:44px;display:flex;flex-wrap:wrap;justify-content:center;gap:20px;width:100%;max-width:760px">
      <div style="flex:1 1 280px;background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.14);border-radius:12px;padding:32px 24px">
        <div style="font:600 clamp(52px,8vw,72px)/1 var(--font-display);color:#fff"><span data-count="100">0</span>%</div>
        <div style="margin-top:12px;font-size:15px;color:var(--uw-blue-100)">match rate for US MDs, DOs, US IMGs, and non-US IMGs without significant red flags</div>
      </div>
      <div style="flex:1 1 280px;background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.14);border-radius:12px;padding:32px 24px">
        <div style="font:600 clamp(52px,8vw,72px)/1 var(--font-display);color:#fff"><span data-count="88">0</span>%</div>
        <div style="margin-top:12px;font-size:15px;color:var(--uw-blue-100)">match rate for non-US IMGs<br>&nbsp;with significant red flags</div>
      </div>
    </div>
    <div style="margin-top:36px"><a href="#packages" class="btn btn--primary btn--lg">Sign up for PS3x PS editing &rarr;</a></div>
  </section>

  <!-- HOW IT WORKS -->
  <section id="process" style="padding:76px 24px;display:flex;flex-direction:column;align-items:center;text-align:center">
    <div style="font:500 12px var(--font-mono);letter-spacing:.14em;text-transform:uppercase;color:var(--uw-blue-500)">How it works</div>
    <h2 style="max-width:760px;margin:18px 0 0;font:600 clamp(28px,4.5vw,42px)/1.15 var(--font-display);letter-spacing:-0.015em;color:var(--uw-ink-900)">About an hour of your time. 12+ hours of ours.</h2>
    <p style="max-width:700px;margin:20px 0 0;font-size:17px;line-height:1.55;color:var(--uw-ink-600)">You skip the blank page, we do the heavy lifting.</p>
    <div style="max-width:1080px;margin-top:44px;display:grid;grid-template-columns:repeat(auto-fit,minmax(270px,1fr));gap:20px;width:100%">
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:12px;padding:28px 24px;text-align:left">
        <div style="display:flex;align-items:center;gap:12px"><div style="width:46px;height:46px;border-radius:11px;background:var(--uw-blue-50);color:var(--uw-blue-500);display:flex;align-items:center;justify-content:center"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92Z"></path></svg></div><div style="font:600 28px var(--font-display);color:var(--uw-ink-300)">1</div></div>
        <div style="margin-top:8px;font:600 18px var(--font-display);color:var(--uw-ink-900)">Story-mining call, about an hour</div>
        <p style="margin:10px 0 0;font-size:14.5px;line-height:1.55;color:var(--uw-ink-600)">We interview you 1:1 to find the one theme a program director will remember. Come with a draft or with nothing.</p>
        <div style="margin-top:16px;display:flex;flex-direction:column;gap:9px;font-size:14px;line-height:1.45;color:var(--uw-ink-600)">
          <div style="display:flex;gap:8px;align-items:flex-start"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>Led by an editor who has read 1,000+ personal statements</span></div>
          <div style="display:flex;gap:8px;align-items:flex-start"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>We keep the storylines that land and cut what works against you</span></div>
        </div>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:12px;padding:28px 24px;text-align:left">
        <div style="display:flex;align-items:center;gap:12px"><div style="width:46px;height:46px;border-radius:11px;background:var(--uw-blue-50);color:var(--uw-blue-500);display:flex;align-items:center;justify-content:center"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15.707 21.293a1 1 0 0 1-1.414 0l-1.586-1.586a1 1 0 0 1 0-1.414l5.586-5.586a1 1 0 0 1 1.414 0l1.586 1.586a1 1 0 0 1 0 1.414z"></path><path d="m18 13-1.375-6.874a1 1 0 0 0-.746-.776L3.235 2.028a1 1 0 0 0-1.207 1.207L5.35 15.879a1 1 0 0 0 .776.746L13 18"></path><path d="m2.3 2.3 7.286 7.286"></path><circle cx="11" cy="11" r="2"></circle></svg></div><div style="font:600 28px var(--font-display);color:var(--uw-ink-300)">2</div></div>
        <div style="margin-top:8px;font:600 18px var(--font-display);color:var(--uw-ink-900)">We write your first draft</div>
        <p style="margin:10px 0 0;font-size:14.5px;line-height:1.55;color:var(--uw-ink-600)">Our team spends 8+ hours writing it to the 3X framework, lined up with your CV and letters.</p>
        <div style="margin-top:16px;display:flex;flex-direction:column;gap:9px;font-size:14px;line-height:1.45;color:var(--uw-ink-600)">
          <div style="display:flex;gap:8px;align-items:flex-start"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>A three-act arc with a hook in the first three lines</span></div>
          <div style="display:flex;gap:8px;align-items:flex-start"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>Built around the two or three strengths that set you apart, in your voice</span></div>
        </div>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:12px;padding:28px 24px;text-align:left">
        <div style="display:flex;align-items:center;gap:12px"><div style="width:46px;height:46px;border-radius:11px;background:var(--uw-blue-50);color:var(--uw-blue-500);display:flex;align-items:center;justify-content:center"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg></div><div style="font:600 28px var(--font-display);color:var(--uw-ink-300)">3</div></div>
        <div style="margin-top:8px;font:600 18px var(--font-display);color:var(--uw-ink-900)">You review, we perfect</div>
        <p style="margin:10px 0 0;font-size:14.5px;line-height:1.55;color:var(--uw-ink-600)">Unlimited revisions for 7 days, until it sounds undeniably like you. Still not satisfied? Keep editing with a different physician editor, or take a full refund.</p>
        <div style="margin-top:16px;display:flex;flex-direction:column;gap:9px;font-size:14px;line-height:1.45;color:var(--uw-ink-600)">
          <div style="display:flex;gap:8px;align-items:flex-start"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>Every draft comes back with clear notes, and you approve each change</span></div>
          <div style="display:flex;gap:8px;align-items:flex-start"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>Feedback drawn from Match data and what program directors respond to</span></div>
        </div>
      </div>
    </div>
    <div style="margin-top:36px"><a href="#packages" class="btn btn--primary btn--lg">Sign up for PS3x PS editing &rarr;</a></div>
  </section>

  <!-- PACKAGES -->
  <section id="packages" style="background:var(--uw-surface);border-top:1px solid var(--uw-border);padding:76px 24px;display:flex;flex-direction:column;align-items:center;text-align:center">
    <div style="font:500 12px var(--font-mono);letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500)">Pricing</div>
    <h2 style="max-width:760px;margin:18px 0 0;font:600 clamp(28px,4.5vw,42px)/1.15 var(--font-display);letter-spacing:-0.015em;color:var(--uw-ink-900)">Choose your package</h2>
    <p style="max-width:700px;margin:20px 0 0;font-size:17px;line-height:1.55;color:var(--uw-ink-600)">Every package is 100% human, written with a physician. No AI, no ghostwriting. The more specialties you add, the more you save.</p>
    <div style="max-width:1080px;margin-top:44px;display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:20px;width:100%;align-items:stretch">
      <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:12px;padding:28px 24px;text-align:left;display:flex;flex-direction:column;gap:8px">
        <div style="font:600 16px var(--font-sans);color:var(--uw-ink-700)">1 specialty</div>
        <div style="font:600 40px var(--font-display);color:var(--uw-ink-900)">$299</div>
        <p style="margin:0;font-size:14px;line-height:1.5;color:var(--uw-ink-600);flex:1">A polished, program-ready statement. Formatting, structure, language, and revisions.</p>
        <a href="#contact" class="btn btn--outline" style="margin-top:14px">Get started</a>
      </div>
      <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:12px;padding:28px 24px;text-align:left;display:flex;flex-direction:column;gap:8px">
        <div style="font:600 16px var(--font-sans);color:var(--uw-ink-700)">2 specialties <span style="font:500 11px var(--font-mono);letter-spacing:.08em;color:var(--uw-success-500)">SAVE $50</span></div>
        <div style="font:600 40px var(--font-display);color:var(--uw-ink-900)">$450</div>
        <p style="margin:0;font-size:14px;line-height:1.5;color:var(--uw-ink-600);flex:1">Two specialty-focused versions that keep your core story.</p>
        <a href="#contact" class="btn btn--outline" style="margin-top:14px">Get started</a>
      </div>
      <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:12px;padding:28px 24px;text-align:left;display:flex;flex-direction:column;gap:8px">
        <div style="font:600 16px var(--font-sans);color:var(--uw-ink-700)">3 specialties <span style="font:500 11px var(--font-mono);letter-spacing:.08em;color:var(--uw-success-500)">SAVE $100</span></div>
        <div style="font:600 40px var(--font-display);color:var(--uw-ink-900)">$650</div>
        <p style="margin:0;font-size:14px;line-height:1.5;color:var(--uw-ink-600);flex:1">Three versions tailored across your specialties.</p>
        <a href="#contact" class="btn btn--outline" style="margin-top:14px">Get started</a>
      </div>
      <div style="background:var(--uw-blue-500);background-image:radial-gradient(rgba(255,255,255,0.10) 1px, transparent 1px);background-size:16px 16px;border-radius:12px;padding:28px 24px;text-align:left;display:flex;flex-direction:column;gap:8px">
        <div style="font:600 16px var(--font-sans);color:#fff">Signal-personalized <span style="font:500 11px var(--font-mono);letter-spacing:.08em;color:var(--uw-success-300)">FULL SERVICE</span></div>
        <div style="font:600 40px var(--font-display);color:#fff">$1,500</div>
        <p style="margin:0;font-size:14px;line-height:1.5;color:var(--uw-blue-100);flex:1">Written from scratch, in-depth interview, iterative revisions. A personal statement for every program you signal.</p>
        <a href="#contact" class="btn btn--primary" style="margin-top:14px">Get started</a>
      </div>
    </div>
    <p style="max-width:700px;margin:26px 0 0;font-size:14px;color:var(--uw-ink-500)">Have any questions before you proceed? <a href="#contact" style="color:var(--uw-blue-600)">Book a free strategy call</a> and we&rsquo;ll walk through it with you.</p>
  </section>

  <!-- MATCH PACKAGES -->
  <section style="padding:76px 24px;display:flex;flex-direction:column;align-items:center;text-align:center">
    <div style="font:500 12px var(--font-mono);letter-spacing:.14em;text-transform:uppercase;color:var(--uw-blue-500)">Go further</div>
    <h2 style="max-width:760px;margin:18px 0 0;font:600 clamp(28px,4.5vw,42px)/1.15 var(--font-display);letter-spacing:-0.015em;color:var(--uw-ink-900)">Want the whole application handled?</h2>
    <p style="max-width:700px;margin:20px 0 0;font-size:17px;line-height:1.55;color:var(--uw-ink-600)">Bundle your personal statement, ERAS application, letters, interviews, and Match advising into one Match package, and guarantee your match success with USMLE Wise.</p>
    <div style="margin-top:30px"><a href="/match" class="btn btn--secondary btn--lg">See our Match packages &rarr;</a></div>
    <p style="max-width:700px;margin:22px 0 0;font-size:14px;color:var(--uw-ink-500)">We&rsquo;re the most-followed name in the Match, trusted by 100,000+ students and doctors worldwide.</p>
  </section>

  <!-- GUARANTEE -->
  <section style="background:var(--uw-surface);border-top:1px solid var(--uw-border);padding:76px 24px;display:flex;flex-direction:column;align-items:center;text-align:center">
    <div style="font:500 12px var(--font-mono);letter-spacing:.14em;text-transform:uppercase;color:var(--uw-blue-500)">Our guarantee</div>
    <div style="margin-top:28px;width:116px;height:116px;border-radius:50%;background:var(--uw-surface);border:3px solid var(--uw-red-500);display:flex;flex-direction:column;align-items:center;justify-content:center;box-shadow:0 6px 20px rgba(227,33,36,0.14)">
      <div style="font:600 30px/1 var(--font-display);color:var(--uw-blue-500)">100%</div>
      <div style="margin-top:5px;font:500 9px var(--font-mono);letter-spacing:.12em;text-transform:uppercase;color:var(--uw-red-500)">Money back</div>
    </div>
    <h2 style="max-width:760px;margin:24px 0 0;font:600 clamp(28px,4.5vw,42px)/1.15 var(--font-display);letter-spacing:-0.015em;color:var(--uw-ink-900)">100% money-back guarantee</h2>
    <p style="max-width:700px;margin:20px 0 0;font-size:17px;line-height:1.55;color:var(--uw-ink-600)">If you are not satisfied with your first draft, or any draft after it, you have two choices: keep editing with a different physician editor assigned to your statement, or take a full refund, no questions asked. We are in this for your Match, not your deposit.</p>
    <p style="max-width:700px;margin:16px 0 0;font-size:15px;color:var(--uw-ink-500)">Want to guarantee your match success too? That&rsquo;s part of our full <a href="#packages" style="color:var(--uw-blue-600)">Match packages</a>.</p>
    <div style="margin-top:30px"><a href="#packages" class="btn btn--primary btn--lg">Sign up for PS3x PS editing &rarr;</a></div>
  </section>

  <!-- BEFORE / AFTER -->
  <section style="background:var(--uw-surface);border-top:1px solid var(--uw-border);padding:76px 24px;display:flex;flex-direction:column;align-items:center;text-align:center">
    <div style="font:500 12px var(--font-mono);letter-spacing:.14em;text-transform:uppercase;color:var(--uw-blue-500)">Before and after</div>
    <div class="px-2col" style="max-width:860px;margin-top:36px;display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;width:100%">
      <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:12px;padding:30px 26px;text-align:left">
        <div style="font:500 12px var(--font-mono);letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500)">Before PS3x</div>
        <p style="margin:14px 0 0;font:400 18px/1.6 var(--font-display);color:var(--uw-ink-600)">You rewrite the intro ten times. You wonder if you&rsquo;re saying anything at all. You second-guess every sentence.</p>
      </div>
      <div style="background:var(--uw-blue-500);border-radius:12px;padding:30px 26px;text-align:left">
        <div style="font:500 12px var(--font-mono);letter-spacing:.12em;text-transform:uppercase;color:var(--uw-blue-200)">After PS3x</div>
        <p style="margin:14px 0 0;font:400 18px/1.6 var(--font-display);color:#fff">You read it once and think, <em>that&rsquo;s me, said better than I could have.</em> Then you submit it and move on.</p>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section id="testimonials" style="background:var(--uw-surface);border-top:1px solid var(--uw-border);padding:76px 24px;display:flex;flex-direction:column;align-items:center;text-align:center">
    <div style="font:500 12px var(--font-mono);letter-spacing:.14em;text-transform:uppercase;color:var(--uw-blue-500)">Student voices</div>
    <h2 style="max-width:760px;margin:18px 0 0;font:600 clamp(28px,4.5vw,42px)/1.15 var(--font-display);letter-spacing:-0.015em;color:var(--uw-ink-900)">What our students say</h2>
    <p style="max-width:640px;margin:18px 0 0;font-size:16px;line-height:1.55;color:var(--uw-ink-600)">Real, unedited messages from students right after their sessions and final drafts.</p>

    <div style="width:100%;max-width:1040px;margin-top:40px;column-width:320px;column-gap:16px;text-align:left">
      <div style="break-inside:avoid;margin:0 0 16px">
        <button type="button" class="px-play" data-vid="3qVhrMYc8zg" data-title="Video review" aria-label="Play video review" style="all:unset;box-sizing:border-box;position:relative;display:block;width:100%;border:1px solid rgba(255,255,255,0.14);border-radius:14px;overflow:hidden;cursor:pointer;aspect-ratio:16/9;background:var(--uw-blue-500);background-image:radial-gradient(rgba(255,255,255,0.10) 1px, transparent 1px);background-size:16px 16px">
          <div style="position:absolute;inset:0;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:12px;padding:20px;text-align:center">
            <div style="width:56px;height:56px;border-radius:50%;background:var(--uw-red-500);display:flex;align-items:center;justify-content:center;box-shadow:0 8px 24px rgba(0,0,0,0.32)">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg>
            </div>
            <div style="font:600 16px var(--font-sans);color:#fff">Watch a video review</div>
            <div style="font:500 11px var(--font-mono);letter-spacing:.12em;text-transform:uppercase;color:var(--uw-blue-200)">Hear it in their words</div>
          </div>
        </button>
      </div>
      <div style="break-inside:avoid;margin:0 0 16px"><img src="/assets/ps3x-enrollment/reviews/review-1.jpg" loading="lazy" alt="Student message: a solid 20/10 rating for the session" style="display:block;width:100%;height:auto;border-radius:14px;border:1px solid var(--uw-border);background:var(--uw-surface)"></div>
      <div style="break-inside:avoid;margin:0 0 16px"><img src="/assets/ps3x-enrollment/reviews/review-7.jpeg" loading="lazy" alt="Student message: one of the most insightful conversations I've had in a long time" style="display:block;width:100%;height:auto;border-radius:14px;border:1px solid var(--uw-border);background:var(--uw-surface)"></div>
      <div style="break-inside:avoid;margin:0 0 16px"><img src="/assets/ps3x-enrollment/matches/1.jpg" loading="lazy" alt="Student message: thank you so much Chandni, much appreciated" style="display:block;width:100%;height:auto;border-radius:14px;border:1px solid var(--uw-border);background:var(--uw-surface)"></div>
      <div style="break-inside:avoid;margin:0 0 16px"><img src="/assets/ps3x-enrollment/matches/2.jpg" loading="lazy" alt="Student message: I don't think I would have managed this whole process the way I did without your guidance" style="display:block;width:100%;height:auto;border-radius:14px;border:1px solid var(--uw-border);background:var(--uw-surface)"></div>
      <div style="break-inside:avoid;margin:0 0 16px"><img src="/assets/ps3x-enrollment/reviews/review-3.jpg" loading="lazy" alt="Student message: I like this personal statement" style="display:block;width:100%;height:auto;border-radius:14px;border:1px solid var(--uw-border);background:var(--uw-surface)"></div>
      <div style="break-inside:avoid;margin:0 0 16px"><img src="/assets/ps3x-enrollment/reviews/review-8.jpg" loading="lazy" alt="Student message: I truly appreciate the unique imagery and the thoughtful structure you used" style="display:block;width:100%;height:auto;border-radius:14px;border:1px solid var(--uw-border);background:var(--uw-surface)"></div>
      <div style="break-inside:avoid;margin:0 0 16px"><img src="/assets/ps3x-enrollment/reviews/review-5.jpg" loading="lazy" alt="Student message: the personal statement looks great, it is ready now" style="display:block;width:100%;height:auto;border-radius:14px;border:1px solid var(--uw-border);background:var(--uw-surface)"></div>
      <div style="break-inside:avoid;margin:0 0 16px"><img src="/assets/ps3x-enrollment/reviews/review-2.jpg" loading="lazy" alt="Student message: a very productive and insightful session" style="display:block;width:100%;height:auto;border-radius:14px;border:1px solid var(--uw-border);background:var(--uw-surface)"></div>
      <div style="break-inside:avoid;margin:0 0 16px"><img src="/assets/ps3x-enrollment/reviews/review-6.jpg" loading="lazy" alt="Student message: the session was excellent, great experience overall" style="display:block;width:100%;height:auto;border-radius:14px;border:1px solid var(--uw-border);background:var(--uw-surface)"></div>
      <div style="break-inside:avoid;margin:0 0 16px"><img src="/assets/ps3x-enrollment/reviews/review-4.jpg" loading="lazy" alt="Student message: you did an excellent job" style="display:block;width:100%;height:auto;border-radius:14px;border:1px solid var(--uw-border);background:var(--uw-surface)"></div>
    </div>
  </section>

  <!-- COMPARISON -->
  <section id="compare" style="padding:76px 24px;display:flex;flex-direction:column;align-items:center;text-align:center">
    <div style="font:500 12px var(--font-mono);letter-spacing:.14em;text-transform:uppercase;color:var(--uw-blue-500)">Why students choose us</div>
    <h2 style="max-width:760px;margin:18px 0 0;font:600 clamp(28px,4.5vw,42px)/1.15 var(--font-display);letter-spacing:-0.015em;color:var(--uw-ink-900)">PS3x against typical editing services</h2>
    <div style="max-width:860px;width:100%;margin-top:40px;overflow-x:auto">
      <table style="width:100%;min-width:560px;border-collapse:separate;border-spacing:0;background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:12px;overflow:hidden;font-size:14px;line-height:1.5;text-align:left">
        <thead>
          <tr>
            <th style="padding:14px 16px;background:var(--uw-bg);border-bottom:1px solid var(--uw-border);font:500 12px var(--font-mono);letter-spacing:.1em;text-transform:uppercase;color:var(--uw-ink-500)">Feature</th>
            <th style="padding:14px 16px;background:var(--uw-blue-50);border-bottom:1px solid var(--uw-border);font:600 14px var(--font-sans);color:var(--uw-blue-500)">USMLE Wise PS3x</th>
            <th style="padding:14px 16px;background:var(--uw-bg);border-bottom:1px solid var(--uw-border);font:600 14px var(--font-sans);color:var(--uw-ink-500)">Other services</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="padding:13px 16px;border-bottom:1px solid var(--uw-ink-100);font-weight:600;color:var(--uw-ink-700);vertical-align:top">Discovery</td>
            <td style="padding:13px 16px;border-bottom:1px solid var(--uw-ink-100);background:var(--uw-blue-50);color:var(--uw-ink-700);vertical-align:top">1:1 call to mine your own stories and turning points</td>
            <td style="padding:13px 16px;border-bottom:1px solid var(--uw-ink-100);color:var(--uw-ink-500);vertical-align:top">A form to fill out, no guided storytelling</td>
          </tr>
          <tr>
            <td style="padding:13px 16px;border-bottom:1px solid var(--uw-ink-100);font-weight:600;color:var(--uw-ink-700);vertical-align:top">Story</td>
            <td style="padding:13px 16px;border-bottom:1px solid var(--uw-ink-100);background:var(--uw-blue-50);color:var(--uw-ink-700);vertical-align:top">Hook in three lines, a clear arc, a close tied to your specialty</td>
            <td style="padding:13px 16px;border-bottom:1px solid var(--uw-ink-100);color:var(--uw-ink-500);vertical-align:top">Paragraph polishing, weak momentum</td>
          </tr>
          <tr>
            <td style="padding:13px 16px;border-bottom:1px solid var(--uw-ink-100);font-weight:600;color:var(--uw-ink-700);vertical-align:top">Voice</td>
            <td style="padding:13px 16px;border-bottom:1px solid var(--uw-ink-100);background:var(--uw-blue-50);color:var(--uw-ink-700);vertical-align:top">Your voice kept, sharpened line by line</td>
            <td style="padding:13px 16px;border-bottom:1px solid var(--uw-ink-100);color:var(--uw-ink-500);vertical-align:top">Generic tone, template phrases</td>
          </tr>
          <tr>
            <td style="padding:13px 16px;border-bottom:1px solid var(--uw-ink-100);font-weight:600;color:var(--uw-ink-700);vertical-align:top">Alignment</td>
            <td style="padding:13px 16px;border-bottom:1px solid var(--uw-ink-100);background:var(--uw-blue-50);color:var(--uw-ink-700);vertical-align:top">Built to match your CV and letters</td>
            <td style="padding:13px 16px;border-bottom:1px solid var(--uw-ink-100);color:var(--uw-ink-500);vertical-align:top">Edited on its own, mixed signals left in</td>
          </tr>
          <tr>
            <td style="padding:13px 16px;border-bottom:1px solid var(--uw-ink-100);font-weight:600;color:var(--uw-ink-700);vertical-align:top">Red flags</td>
            <td style="padding:13px 16px;border-bottom:1px solid var(--uw-ink-100);background:var(--uw-blue-50);color:var(--uw-ink-700);vertical-align:top">Gaps, old graduation year, and attempts reframed into strengths</td>
            <td style="padding:13px 16px;border-bottom:1px solid var(--uw-ink-100);color:var(--uw-ink-500);vertical-align:top">Skimmed or left alone</td>
          </tr>
          <tr>
            <td style="padding:13px 16px;border-bottom:1px solid var(--uw-ink-100);font-weight:600;color:var(--uw-ink-700);vertical-align:top">Frameworks</td>
            <td style="padding:13px 16px;border-bottom:1px solid var(--uw-ink-100);background:var(--uw-blue-50);color:var(--uw-ink-700);vertical-align:top">Written to EACM, ACGME, and PCM-6</td>
            <td style="padding:13px 16px;border-bottom:1px solid var(--uw-ink-100);color:var(--uw-ink-500);vertical-align:top">No structured evaluation model</td>
          </tr>
          <tr>
            <td style="padding:13px 16px;font-weight:600;color:var(--uw-ink-700);vertical-align:top">Revisions</td>
            <td style="padding:13px 16px;background:var(--uw-blue-50);color:var(--uw-ink-700);vertical-align:top">Unlimited for 7 days, 1 to 2 day rounds</td>
            <td style="padding:13px 16px;color:var(--uw-ink-500);vertical-align:top">Limited revisions, week-long waits</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" style="padding:76px 24px;display:flex;flex-direction:column;align-items:center;text-align:center">
    <div style="font:500 12px var(--font-mono);letter-spacing:.14em;text-transform:uppercase;color:var(--uw-blue-500)">FAQ</div>
    <h2 style="max-width:760px;margin:18px 0 0;font:600 clamp(28px,4.5vw,42px)/1.15 var(--font-display);letter-spacing:-0.015em;color:var(--uw-ink-900)">Questions, answered</h2>
    <div style="max-width:760px;width:100%;margin-top:36px;display:flex;flex-direction:column;gap:10px;text-align:left">
      <details class="px-faq">
        <summary>I haven&rsquo;t written anything yet. Can I still use PS3x?</summary>
        <p>Yes. Most people start from a blank page. On the 1:1 call we pull out your experiences and build the statement from zero to submission-ready.</p>
      </details>
      <details class="px-faq">
        <summary>Who writes or edits my statement?</summary>
        <p>A physician-editor with selection-committee insight. No templates, no AI, just physician-level strategy and precision.</p>
      </details>
      <details class="px-faq">
        <summary>Is the listed price final, even for done-from-scratch?</summary>
        <p>Yes. The fee covers the whole process, the call, the drafting, and unlimited revisions in your window. No surprise add-ons.</p>
      </details>
      <details class="px-faq">
        <summary>How fast are revisions?</summary>
        <p>Unlimited during your window, usually 1 to 2 business days per round.</p>
      </details>
      <details class="px-faq">
        <summary>What if I&rsquo;m still not satisfied?</summary>
        <p>We&rsquo;ll assign a different physician editor at no extra cost and keep refining until you&rsquo;re confident.</p>
      </details>
      <details class="px-faq">
        <summary>Can you help if I have red flags, like attempts or gaps?</summary>
        <p>Yes, this is one of the biggest things we do. We reframe attempts, older graduation years, and gaps into honest points of strength.</p>
      </details>
      <details class="px-faq">
        <summary>Will it still sound like me? Is this ethical?</summary>
        <p>Yes, and it stays yours. It&rsquo;s your words and your experiences, clarified and sharpened, and you approve every line. We don&rsquo;t ghostwrite and we don&rsquo;t use AI.</p>
      </details>
      <details class="px-faq">
        <summary>Will you personalize my statement for all my program signals?</summary>
        <p>The base package builds one master statement for your specialty. For signal-specific versions, choose the Signal-personalized package.</p>
      </details>
      <details class="px-faq">
        <summary>Does PS3x include ERAS application editing or interview prep?</summary>
        <p>PS3x is the personal statement. For the ERAS application, interviews, or full strategy, bundle with our Match packages.</p>
      </details>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section style="background:var(--uw-blue-500);background-image:radial-gradient(rgba(255,255,255,0.10) 1px, transparent 1px);background-size:16px 16px;padding:84px 24px;display:flex;flex-direction:column;align-items:center;text-align:center">
    <h2 style="max-width:760px;margin:0;font:600 clamp(30px,5vw,46px)/1.15 var(--font-display);letter-spacing:-0.015em;color:#fff">The one page where a program meets <em>the person behind the scores.</em></h2>
    <p style="max-width:640px;margin:20px 0 0;font-size:17px;line-height:1.55;color:var(--uw-blue-100)">Let&rsquo;s make it the reason they call you in.</p>
    <div style="margin-top:32px"><a href="#packages" class="btn btn--primary btn--xl">Sign up for PS3x PS editing &rarr;</a></div>
  </section>

  <!-- CONTACT -->
  <section id="contact" style="background:var(--uw-surface);border-top:1px solid var(--uw-border);padding:76px 24px;display:flex;flex-direction:column;align-items:center;text-align:center">
    <div style="font:500 12px var(--font-mono);letter-spacing:.14em;text-transform:uppercase;color:var(--uw-blue-500)">Still have questions?</div>
    <h2 style="max-width:760px;margin:18px 0 0;font:600 clamp(28px,4.5vw,42px)/1.15 var(--font-display);letter-spacing:-0.015em;color:var(--uw-ink-900)">Talk to our team</h2>
    <p style="max-width:700px;margin:20px 0 0;font-size:17px;line-height:1.55;color:var(--uw-ink-600)">Get clear guidance on your statement and your Match strategy, whether that includes a program of ours or not. No sales script.</p>
    <div style="margin-top:30px">
      <a href="https://api.whatsapp.com/send/?phone=19192015700&text=I+am+interested+in+Personal+statement+editing&type=phone_number&app_absent=0" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:8px;background:#25d366;color:#0b1220;font:600 16px/1 var(--font-sans);padding:15px 30px;border-radius:8px;text-decoration:none">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.46 1.32 4.97L2 22l5.25-1.38a9.9 9.9 0 0 0 4.79 1.22h.01c5.46 0 9.91-4.45 9.91-9.91C21.96 6.45 17.5 2 12.04 2zm0 18.13h-.01a8.2 8.2 0 0 1-4.19-1.15l-.3-.18-3.11.82.83-3.04-.2-.31a8.16 8.16 0 0 1-1.26-4.36c0-4.54 3.7-8.23 8.24-8.23 4.54 0 8.23 3.7 8.23 8.24 0 4.54-3.69 8.21-8.23 8.21zm4.52-6.16c-.25-.12-1.47-.72-1.69-.8-.23-.09-.39-.13-.56.12-.16.25-.64.8-.79.97-.14.16-.29.19-.54.06-.25-.12-1.05-.39-2-1.23-.74-.66-1.24-1.47-1.38-1.72-.15-.25-.02-.39.11-.51.11-.11.25-.29.37-.44.12-.14.16-.25.25-.41.08-.16.04-.31-.02-.44-.06-.12-.56-1.35-.77-1.85-.2-.48-.41-.42-.56-.42h-.48c-.16 0-.43.06-.65.31-.23.25-.87.85-.87 2.07 0 1.22.89 2.4 1.01 2.56.12.16 1.73 2.65 4.2 3.71.59.25 1.04.4 1.4.52.59.19 1.12.16 1.55.1.47-.07 1.47-.6 1.68-1.19.21-.58.21-1.08.14-1.19-.06-.11-.22-.18-.47-.3z"></path></svg>
        <span>Chat on WhatsApp</span>
      </a>
    </div>
    <p style="margin:34px 0 0;font-size:15px;color:var(--uw-ink-500)">Prefer email? Send us a message.</p>
    <form data-uw-contact-form novalidate style="max-width:560px;width:100%;margin-top:20px;display:grid;grid-template-columns:1fr 1fr;gap:12px;text-align:left">
      <input name="name" placeholder="Full name" required maxlength="200" style="grid-column:span 1;padding:13px 14px;font:400 15px var(--font-sans);color:var(--uw-ink-900);background:var(--uw-bg);border:1px solid var(--uw-border-strong);border-radius:8px;min-width:0" />
      <input name="email" type="email" placeholder="Email" required maxlength="200" style="grid-column:span 1;padding:13px 14px;font:400 15px var(--font-sans);color:var(--uw-ink-900);background:var(--uw-bg);border:1px solid var(--uw-border-strong);border-radius:8px;min-width:0" />
      <input name="subject" placeholder="Subject" maxlength="200" style="grid-column:span 2;padding:13px 14px;font:400 15px var(--font-sans);color:var(--uw-ink-900);background:var(--uw-bg);border:1px solid var(--uw-border-strong);border-radius:8px;min-width:0" />
      <textarea name="message" placeholder="Message" rows="5" required maxlength="5000" style="grid-column:span 2;padding:13px 14px;font:400 15px var(--font-sans);color:var(--uw-ink-900);background:var(--uw-bg);border:1px solid var(--uw-border-strong);border-radius:8px;resize:vertical;min-width:0"></textarea>

      <!-- Honeypot: keep hidden and empty. Do not remove. -->
      <div style="position:absolute;left:-9999px;width:1px;height:1px;overflow:hidden" aria-hidden="true"><label>Leave this empty<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>

      <div class="cf-turnstile" style="grid-column:span 2;display:flex;justify-content:center" data-sitekey="<?php echo htmlspecialchars(getenv('TURNSTILE_SITE_KEY') ?: '0x4AAAAAAD6jImzHI3FyAiUO', ENT_QUOTES); ?>"></div>

      <div style="grid-column:span 2;display:flex;flex-direction:column;align-items:center;gap:10px">
        <button type="submit" class="btn btn--secondary btn--lg">Send message</button>
        <p data-uw-status role="status" aria-live="polite" style="margin:0;font-size:13.5px;min-height:1.2em"></p>
      </div>
    </form>
  </section>

  <div class="px-mobilebar" id="pxBar" style="position:fixed;left:0;right:0;bottom:0;z-index:50;align-items:center;justify-content:space-between;gap:14px;padding:10px 16px calc(10px + env(safe-area-inset-bottom,0px));background:rgba(250,250,249,.94);backdrop-filter:blur(14px);-webkit-backdrop-filter:blur(14px);border-top:1px solid var(--uw-border);box-shadow:0 -8px 26px rgba(15,18,51,.12)">
    <div>
      <div style="font-family:var(--font-display);font-size:19px;font-weight:600;color:var(--uw-ink-900)">From $299</div>
      <div style="font-size:11.5px;color:var(--uw-ink-500);margin-top:1px">1:1 physician editing</div>
    </div>
    <a href="#packages" class="btn btn--primary btn--lg" style="flex:none">Get Started</a>
  </div>

</main>

<script>
(function () {
  // Count-up on scroll-into-view for [data-count] stat numbers. Skips if reduced motion.
  if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  var els = document.querySelectorAll('[data-count]');
  if (els.length && 'IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        io.unobserve(entry.target);
        var el = entry.target;
        var target = parseInt(el.getAttribute('data-count'), 10) || 0;
        var dur = 1800;
        var t0 = performance.now();
        function tick(now) {
          var p = Math.min(1, (now - t0) / dur);
          var eased = 1 - Math.pow(1 - p, 3);
          el.textContent = String(Math.round(target * eased));
          if (p < 1) requestAnimationFrame(tick);
        }
        requestAnimationFrame(tick);
      });
    }, { threshold: 0.4 });
    els.forEach(function (el) { io.observe(el); });
  }

  // Click-to-play YouTube embeds — video testimonial grid + the single video review button.
  document.addEventListener('click', function (e) {
    var wrap = e.target.closest('.px-play');
    if (!wrap) return;
    var id = wrap.getAttribute('data-vid');
    var title = wrap.getAttribute('data-title') || 'USMLE Wise video';
    if (!id) return;
    var iframe = document.createElement('iframe');
    iframe.src = 'https://www.youtube.com/embed/' + id + '?autoplay=1&rel=0';
    iframe.title = title;
    iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
    iframe.allowFullscreen = true;
    iframe.style.cssText = 'position:absolute;inset:0;width:100%;height:100%;border:0;display:block';
    wrap.style.position = 'relative';
    wrap.innerHTML = '';
    wrap.appendChild(iframe);
  });
})();
</script>
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
<script src="/js/contact-form.js?v=<?php echo @filemtime($_SERVER['DOCUMENT_ROOT'] . '/js/contact-form.js') ?: '1'; ?>" defer></script>

<!-- ============== STANDALONE FOOTER (in-page links + legal only) ============== -->
<footer class="msp-foot">
  <div class="msp-wrap">
    <div class="msp-foot__top">
      <div class="msp-foot__brand-col">
        <span class="msp-brand" aria-label="USMLE Wise">
          <img src="/assets/usmle-design-system/assets/Logo-Horizontal-Dark.svg" alt="USMLE Wise" height="36" />
        </span>
        <p>Guiding international medical graduates from USMLE to Match Day.</p>
      </div>
      <nav class="msp-foot__nav" aria-label="Footer navigation">
        <div class="msp-foot__nav-group">
          <span class="msp-foot__nav-label">This Page</span>
          <a href="#why">Why It Works</a>
          <a href="#framework">3X Framework</a>
          <a href="#testimonials">Reviews</a>
          <a href="#compare">How We Compare</a>
        </div>
        <div class="msp-foot__nav-group">
          <span class="msp-foot__nav-label">&nbsp;</span>
          <a href="#packages">Pricing &amp; Guarantee</a>
          <a href="#faq">FAQ</a>
          <a href="#contact">Contact</a>
        </div>
        <div class="msp-foot__nav-group">
          <span class="msp-foot__nav-label">Legal</span>
          <a href="/legal">Legal &amp; Policies</a>
        </div>
      </nav>
    </div>
    <div class="msp-foot__bottom">
      <div class="msp-foot__social">
        <a href="https://www.instagram.com/usmle_wise/" class="msp-foot__social-link" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
          <i data-lucide="instagram" width="18" height="18"></i>
        </a>
        <a href="https://www.facebook.com/profile.php?id=61579260924818" class="msp-foot__social-link" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
          <i data-lucide="facebook" width="18" height="18"></i>
        </a>
        <a href="https://www.linkedin.com/company/usmle-wise/" class="msp-foot__social-link" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
          <i data-lucide="linkedin" width="18" height="18"></i>
        </a>
        <!--email_off--><a href="mailto:support@usmlewise.com" class="msp-foot__social-link" aria-label="Email us">
          <i data-lucide="mail" width="18" height="18"></i>
        </a><!--/email_off-->
        <a href="https://wa.me/19192015700" class="msp-foot__social-link" aria-label="WhatsApp" target="_blank" rel="noopener noreferrer">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
          </svg>
        </a>
        <a href="https://www.tiktok.com/@usmle_wise" class="msp-foot__social-link" aria-label="TikTok" target="_blank" rel="noopener noreferrer">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.19 8.19 0 004.79 1.54V6.79a4.85 4.85 0 01-1.02-.1z"/>
          </svg>
        </a>
        <a href="https://www.youtube.com/@usmlewise" class="msp-foot__social-link" aria-label="YouTube" target="_blank" rel="noopener noreferrer">
          <i data-lucide="youtube" width="18" height="18"></i>
        </a>
      </div>
      <small>&copy; 2026 USMLE Wise. All rights reserved.</small>
    </div>
  </div>
</footer>

</body>
</html>
