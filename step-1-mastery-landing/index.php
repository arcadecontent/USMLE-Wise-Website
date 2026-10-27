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
<title>USMLE Step 1 Mastery: 6-Month Live Course | USMLE Wise</title>
<meta name="description" content="A live, 6-month course that walks you through every page of First Aid, rebuilt for the new Step 1 syllabus and taught by doctors who scored 270+ on Step 2. If you don't pass, you get your money back." />
<!-- Standalone ad/campaign landing page: kept out of the sitemap and out of the
     index so it doesn't compete with other Step 1 pages in search. -->
<meta name="robots" content="noindex, follow" />
<meta property="og:type" content="website" />
<meta property="og:title" content="USMLE Step 1 Mastery: 6-Month Live Course | USMLE Wise" />
<meta property="og:description" content="Master USMLE Step 1 from basics in just 6 months, with a pass guarantee." />
<meta property="og:url" content="https://usmlewise.com/step-1-mastery-landing" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@300;400;500;600;700&family=Source+Serif+4:ital,opsz,wght@0,8..60,400;0,8..60,600;1,8..60,400&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" media="print" onload="this.media='all'" />
<noscript><link href="https://fonts.googleapis.com/css2?family=Geist:wght@300;400;500;600;700&family=Source+Serif+4:ital,opsz,wght@0,8..60,400;0,8..60,600;1,8..60,400&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" /></noscript>
<link rel="preload" as="image" href="/assets/step1-mastery/step1-mastery-hero.jpg" fetchpriority="high" />
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

  .cc { font-family: var(--font-sans); color: var(--uw-ink-800); background: var(--uw-surface); -webkit-font-smoothing: antialiased; }
  .cc em { font-style: italic; color: var(--uw-red-500); }
  .cc a { color: inherit; text-decoration: none; }
  .cc img { max-width: 100%; }
  .cc ::selection { background: var(--uw-blue-100); }
  .cc .dot-tex { background-image: radial-gradient(rgba(255,255,255,.10) 1px, transparent 1px); background-size: 18px 18px; }
  .cc { overflow-x: hidden; }
  .cc-mobilebar { display: none; }
  @media (max-width: 1024px) {
    .cc-results { grid-template-columns: repeat(2,1fr) !important; }
  }
  @media (max-width: 880px) {
    .cc-hero, .cc-story, .cc-contact, .cc-curric, .cc-duality { grid-template-columns: 1fr !important; }
    .cc-3 { grid-template-columns: repeat(2,1fr) !important; }
    .cc-story-photo { position: static !important; max-width: 420px; }
    .cc { padding-bottom: 78px; }
    .cc-mobilebar { display: flex !important; }
  }
  @media (max-width: 560px) {
    .cc-3 { grid-template-columns: 1fr !important; }
    .cc-results { grid-template-columns: repeat(2,1fr) !important; }
    .cc-formrow { grid-template-columns: 1fr !important; }
    .cc-hero { gap: 26px !important; }
    .cc-meta { flex-wrap: wrap !important; padding: 10px 14px !important; font-size: 13px !important; gap: 10px !important; }
    .cc-offer-price b { font-size: 44px !important; }
  }
  @keyframes cc-marquee { from { transform: translateX(0); } to { transform: translateX(-50%); } }
  .cc-marquee-track { display: flex; gap: 18px; width: max-content; animation: cc-marquee 60s linear infinite; }
  .cc-marquee-mask:hover .cc-marquee-track { animation-play-state: paused; }
  @media (prefers-reduced-motion: reduce) { .cc-marquee-track { animation: none; } }
  @media (max-width: 700px) { .cc-marquee-track { animation-duration: 42s; } }
  .cc-wall { scrollbar-width: thin; scrollbar-color: var(--uw-blue-300) var(--uw-blue-50); }
  .cc-wall::-webkit-scrollbar { width: 11px; }
  .cc-wall::-webkit-scrollbar-track { background: var(--uw-blue-50); border-radius: 999px; }
  .cc-wall::-webkit-scrollbar-thumb { background: var(--uw-blue-300); border-radius: 999px; border: 2px solid var(--uw-blue-50); }
  .cc-wall::-webkit-scrollbar-thumb:hover { background: var(--uw-blue-500); }
  @media (max-width: 880px) { .cc-wall-grid { columns: 2 !important; } }
  @media (max-width: 560px) { .cc-wall-grid { columns: 1 !important; } }
  .cc-videos { display: grid; grid-template-columns: 0.92fr 1.4fr; gap: 18px; align-items: stretch; }
  @media (max-width: 820px) { .cc-videos { grid-template-columns: 1fr !important; } .cc-short-wrap { max-width: 340px; margin: 0 auto; } }
  /* Video review lightbox. Thumbnails are real links to youtube.com, so clicking
     one used to leave the page; they now play in this modal (see bottom script). */
  .cc-video-modal { position: fixed; inset: 0; z-index: 1000; display: flex; align-items: center; justify-content: center; padding: 24px; }
  .cc-video-modal[hidden] { display: none; }
  .cc-video-modal__backdrop { position: absolute; inset: 0; background: rgba(10, 12, 20, .82); }
  .cc-video-modal__dialog { position: relative; width: 100%; max-width: 900px; }
  .cc-video-modal__frame { position: relative; width: 100%; aspect-ratio: 16/9; background: #000; border-radius: var(--r-lg); overflow: hidden; box-shadow: var(--shadow-lg); }
  .cc-video-modal__frame iframe { position: absolute; inset: 0; width: 100%; height: 100%; border: 0; }
  .cc-video-modal--portrait .cc-video-modal__dialog { max-width: min(420px, calc((100vh - 120px) * 9 / 16)); }
  .cc-video-modal--portrait .cc-video-modal__frame { aspect-ratio: 9/16; }
  .cc-video-modal__close { position: absolute; top: -44px; right: 0; width: 36px; height: 36px; border-radius: 50%; border: 0; background: rgba(255,255,255,.14); color: #fff; font-size: 24px; line-height: 1; cursor: pointer; display: grid; place-items: center; }
  .cc-video-modal__close:hover { background: rgba(255,255,255,.26); }
  .cc-cmp-cards { display: none; }
  @media (max-width: 760px) {
    .cc-cmp-table { display: none !important; }
    .cc-cmp-cards { display: flex !important; }
  }

.ccx-h1:hover { transform:translateY(-3px);box-shadow:var(--shadow-md) }
.ccx-h2:hover { background:var(--uw-red-600) }
.ccx-f1:focus { border-color:var(--uw-blue-400);box-shadow:0 0 0 3px var(--uw-blue-100) }
.cc-faq-btn:hover { background: var(--uw-ink-75); }
/* Frosted-glass header (matches the home page's scrolled state) — this page has no scroll-based toggle, so it's always on */
.msp-nav { background: rgba(252,252,251,.9); -webkit-backdrop-filter: saturate(180%) blur(12px); backdrop-filter: saturate(180%) blur(12px); border-bottom-color: var(--uw-border); box-shadow: var(--shadow-sm); }
/* Standalone landing page: fewer footer nav columns than the site-wide footer
   this was copied from, so space-between leaves a large gap. */
.msp-foot__top { justify-content: flex-start; gap: clamp(48px, 8vw, 120px); }
/* WhatsApp header CTA */
.cc-wa-btn { background: #25D366; color: #fff; font-weight: 600; box-shadow: var(--shadow-sm); }
.cc-wa-btn:hover, .cc-wa-btn:focus-visible { background: #1EBE5A; color: #fff; box-shadow: var(--shadow-md); }
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
</style>
</head>
<body>

<!-- announcement -->
<div style="background:var(--uw-blue-900);color:#fff;text-align:center;font-size:13px;letter-spacing:.01em;padding:9px 16px">
  <span style="opacity:.7">Today —</span>&nbsp; Reserve your spot for <b style="color:var(--uw-success-300)">$99</b> <span style="opacity:.7">· full tuition</span> <s style="opacity:.5">$3,499</s> <b style="color:var(--uw-success-300)">$899</b>
</div>

<!-- ============== MINIMAL LANDING HEADER (in-page section links only — standalone page) ============== -->
<header class="msp-nav" id="mspNav">
  <div class="msp-wrap msp-nav__inner">
    <span class="msp-brand" aria-label="USMLE Wise">
      <img src="/assets/usmle-design-system/assets/Logo-Horizontal.svg" alt="USMLE Wise" height="36" />
    </span>
    <nav class="msp-nav__links" aria-label="Page sections">
      <a href="#curriculum">Curriculum</a>
      <a href="#why">What's different</a>
      <a href="#compare">Compare</a>
      <a href="#faq">FAQ</a>
    </nav>
    <a class="btn msp-nav__cta cc-wa-btn" href="https://wa.me/19192015700?text=Send%20me%20a%20free%20sample%20lesson%20of%20Step%201%20Mastery%20Course" target="_blank" rel="noopener noreferrer">
      <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" style="flex:none"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38c1.45.79 3.08 1.21 4.79 1.21 5.46 0 9.91-4.45 9.91-9.91C21.95 6.45 17.5 2 12.04 2zm0 18.15c-1.52 0-3.01-.41-4.31-1.18l-.31-.18-3.12.82.83-3.04-.2-.31a8.21 8.21 0 0 1-1.26-4.35c0-4.54 3.7-8.23 8.24-8.23 4.54 0 8.23 3.69 8.23 8.23 0 4.54-3.69 8.24-8.23 8.24zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81-.23-.08-.39-.12-.56.12-.16.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.12-1.05-.39-1.99-1.23-.74-.66-1.23-1.47-1.38-1.72-.14-.25-.01-.38.11-.51.11-.11.25-.29.37-.43.12-.14.16-.25.25-.41.08-.17.04-.31-.02-.43-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.42-.14-.01-.31-.01-.48-.01-.16 0-.43.06-.66.31-.23.25-.86.85-.86 2.07 0 1.22.89 2.4 1.01 2.56.12.17 1.75 2.67 4.23 3.74.59.26 1.05.41 1.41.52.59.19 1.13.16 1.56.1.48-.07 1.47-.6 1.67-1.18.21-.58.21-1.07.14-1.18-.06-.1-.22-.16-.47-.28z"></path></svg>
      Request Free Preview
    </a>
  </div>
</header>

<main id="top" class="cc">

  <!-- HERO -->
  <header style="position:relative;overflow:hidden;background:radial-gradient(1000px 520px at 88% -8%, var(--uw-blue-50), transparent), var(--uw-surface)">
    <section class="cc-hero" style="max-width:920px;margin:0 auto;display:flex;flex-direction:column;align-items:center;text-align:center;padding:clamp(44px,6vw,84px) clamp(20px,5vw,48px)">
      <div style="font-family:var(--font-mono);font-size:12px;font-weight:500;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-blue-500);margin-bottom:14px">USMLE Step&nbsp;1 6-Month Live Mastery Course</div>

      <h1 style="font-family:var(--font-display);font-weight:400;font-size:clamp(34px,4.6vw,58px);line-height:1.14;letter-spacing:-0.015em;margin:0 auto;color:var(--uw-ink-900);max-width:13em;text-wrap:balance"><span style="display:block">Master USMLE Step&nbsp;1</span><span style="display:block">from basics in just <em>6&nbsp;months</em>,</span><span style="display:block;color:var(--uw-blue-500)">with a pass guarantee.</span></h1>

      <p style="font-size:clamp(17px,1.55vw,20px);line-height:1.6;color:var(--uw-ink-600);max-width:58ch;margin:22px auto 0">A live course that walks you through every page of First Aid, from the foundations up, rebuilt for the new Step&nbsp;1 syllabus and taught by doctors who scored 270+ on Step&nbsp;2. If you don't pass, you get your money back.</p>

      <!-- hero image -->
      <div style="position:relative;width:100%;max-width:720px;margin:clamp(34px,4vw,48px) auto 0">
        <a href="#offer" style="display:block;position:relative;border-radius:var(--r-xl);overflow:hidden;box-shadow:var(--shadow-xl);aspect-ratio:16/9;border:1px solid var(--uw-border)">
          <img src="/assets/step1-mastery/step1-mastery-hero.jpg" alt="USMLE Step 1 Mastery live course" style="width:100%;height:100%;object-fit:cover;display:block">
          <span style="position:absolute;inset:0;background:linear-gradient(180deg,rgba(15,18,51,0) 45%,rgba(15,18,51,.4))"></span>
        </a>
        <div style="position:absolute;right:-12px;top:-18px;width:94px;height:94px;border-radius:50%;background:var(--uw-surface);box-shadow:var(--shadow-lg);display:grid;place-items:center;text-align:center;border:1px solid var(--uw-border);transform:rotate(8deg)">
          <div style="line-height:1.1">
            <div style="font-family:var(--font-display);font-weight:600;font-size:20px;color:var(--uw-red-500)">100%</div>
            <div style="font-size:9px;letter-spacing:.08em;text-transform:uppercase;font-family:var(--font-mono);color:var(--uw-ink-600)">Pass<br>guarantee</div>
          </div>
        </div>
      </div>

      <div class="cc-meta" style="display:inline-flex;align-items:center;justify-content:center;flex-wrap:wrap;gap:12px 20px;margin:clamp(32px,4vw,44px) 0 22px;padding:12px 24px;background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:999px;box-shadow:var(--shadow-sm);font-size:15px;color:var(--uw-ink-800)">
        <span style="display:inline-flex;align-items:center;gap:9px;white-space:nowrap"><svg style="flex:none" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-blue-500)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"></rect><path d="M16 2v4"></path><path d="M8 2v4"></path><path d="M3 10h18"></path></svg>6 months</span>
        <span style="width:1px;height:20px;background:var(--uw-border)"></span>
        <span style="display:inline-flex;align-items:center;gap:9px;white-space:nowrap"><svg style="flex:none" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-blue-500)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"></path><rect x="2" y="6" width="14" height="12" rx="2"></rect></svg>Live on Zoom</span>
        <span style="width:1px;height:20px;background:var(--uw-border)"></span>
        <span style="display:inline-flex;align-items:center;gap:9px;white-space:nowrap"><svg style="flex:none" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-blue-500)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 17 2 2 4-4"></path><path d="m3 7 2 2 4-4"></path><path d="M13 6h8"></path><path d="M13 12h8"></path><path d="M13 18h8"></path></svg>111 sessions</span>
      </div>

      <a href="#offer"><span class="btn btn--primary btn--xl">Enroll Now</span></a>
    </section>
  </header>

  <!-- RESULTS BAR -->
  <section style="background:var(--uw-blue-700);color:#fff;position:relative;overflow:hidden">
    <div class="dot-tex" style="position:absolute;inset:0;opacity:.8"></div>
    <div class="cc-results" style="position:relative;z-index:1;max-width:1180px;margin:0 auto;padding:clamp(36px,4vw,52px) clamp(20px,5vw,48px);display:grid;grid-template-columns:repeat(4,1fr);gap:32px 24px">
      <div style="text-align:center"><div style="display:flex;justify-content:center;margin-bottom:12px"><span style="width:38px;height:38px;border-radius:11px;background:rgba(255,255,255,.1);display:grid;place-items:center"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-300)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path></svg></span></div><div style="font-family:var(--font-display);font-weight:600;font-size:clamp(28px,3vw,40px);line-height:1;color:var(--uw-success-300)">99.3%</div><div style="font-size:12px;color:rgba(255,255,255,.7);margin-top:8px;line-height:1.4">First-attempt pass rate</div></div>
      <div style="text-align:center"><div style="display:flex;justify-content:center;margin-bottom:12px"><span style="width:38px;height:38px;border-radius:11px;background:rgba(255,255,255,.1);display:grid;place-items:center"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></span></div><div style="font-family:var(--font-display);font-weight:600;font-size:clamp(28px,3vw,40px);line-height:1">17,000+</div><div style="font-size:12px;color:rgba(255,255,255,.7);margin-top:8px;line-height:1.4">Students trained</div></div>
      <div style="text-align:center"><div style="display:flex;justify-content:center;margin-bottom:12px"><span style="width:38px;height:38px;border-radius:11px;background:rgba(255,255,255,.1);display:grid;place-items:center"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"></path><rect x="2" y="6" width="14" height="12" rx="2"></rect></svg></span></div><div style="font-family:var(--font-display);font-weight:600;font-size:clamp(28px,3vw,40px);line-height:1">111</div><div style="font-size:12px;color:rgba(255,255,255,.7);margin-top:8px;line-height:1.4">Live sessions</div></div>
      <div style="text-align:center"><div style="display:flex;justify-content:center;margin-bottom:12px"><span style="width:38px;height:38px;border-radius:11px;background:rgba(255,255,255,.1);display:grid;place-items:center"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg></span></div><div style="font-family:var(--font-display);font-weight:600;font-size:clamp(28px,3vw,40px);line-height:1">270+</div><div style="font-size:12px;color:rgba(255,255,255,.7);margin-top:8px;line-height:1.4">Instructor Step 2 scores</div></div>
    </div>
  </section>

  <!-- PROBLEM -->
  <section id="problem" style="background:var(--uw-surface);padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px)">
    <div style="max-width:1080px;margin:0 auto">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px;text-align:center">The real problem</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,44px);line-height:1.12;letter-spacing:-0.02em;margin:0 auto 24px;color:var(--uw-ink-900);max-width:26ch;text-align:center">The new Step&nbsp;1 is not the exam your seniors took two or three years ago.</h2>
      <p style="max-width:64ch;margin:0 auto;font-size:17px;line-height:1.65;color:var(--uw-ink-600);text-align:center"><strong style="color:var(--uw-ink-900);font-weight:600">The syllabus changed. The questions changed.</strong> The nutrition update added a whole new set of high-yield topics most courses haven't covered yet. And the resources you're spending months on were <strong style="color:var(--uw-ink-900);font-weight:600">built for an older version of the test.</strong></p>
      <p style="max-width:48ch;margin:18px auto 0;font-size:17px;line-height:1.6;color:var(--uw-ink-800);font-weight:500;text-align:center">Here's what's different on the new exam.</p>
      <div class="cc-3" style="display:grid;grid-template-columns:repeat(3,1fr);gap:18px;margin-top:40px">
        <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:24px">
          <div style="display:flex;align-items:center;gap:12px;margin-bottom:12px"><span style="width:38px;height:38px;flex:none;border-radius:var(--r-md);background:var(--uw-red-50);color:var(--uw-red-500);display:grid;place-items:center"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M16 13H8"></path><path d="M16 17H8"></path><path d="M10 9H8"></path></svg></span><span style="font-size:16.5px;font-weight:600;line-height:1.3;color:var(--uw-ink-900)">Long, chart-style stems</span></div>
          <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-700)">Stems are much longer. You'll see <strong style="color:var(--uw-ink-900);font-weight:600">SOAP notes and patient charts</strong> packed with extra detail you have to filter through.</p>
        </div>
        <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:24px">
          <div style="display:flex;align-items:center;gap:12px;margin-bottom:12px"><span style="width:38px;height:38px;flex:none;border-radius:var(--r-md);background:var(--uw-red-50);color:var(--uw-red-500);display:grid;place-items:center"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path><path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path><path d="M7 21h10"></path><path d="M12 3v18"></path><path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"></path></svg></span><span style="font-size:16.5px;font-weight:600;line-height:1.3;color:var(--uw-ink-900)">Ethics surged</span></div>
          <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-700)">Ethics and communication questions surged. Expect <strong style="color:var(--uw-ink-900);font-weight:600">6 to 15 of them per block.</strong></p>
        </div>
        <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:24px">
          <div style="display:flex;align-items:center;gap:12px;margin-bottom:12px"><span style="width:38px;height:38px;flex:none;border-radius:var(--r-md);background:var(--uw-red-50);color:var(--uw-red-500);display:grid;place-items:center"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg></span><span style="font-size:16.5px;font-weight:600;line-height:1.3;color:var(--uw-ink-900)">Mechanism over memory</span></div>
          <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-700)">Pathophysiology is tested more than memorization. The exam wants you to <strong style="color:var(--uw-ink-900);font-weight:600">think through a mechanism,</strong> not recite a fact.</p>
        </div>
        <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:24px">
          <div style="display:flex;align-items:center;gap:12px;margin-bottom:12px"><span style="width:38px;height:38px;flex:none;border-radius:var(--r-md);background:var(--uw-red-50);color:var(--uw-red-500);display:grid;place-items:center"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"></path><path d="M18 17V9"></path><path d="M13 17V5"></path><path d="M8 17v-3"></path></svg></span><span style="font-size:16.5px;font-weight:600;line-height:1.3;color:var(--uw-ink-900)">Biostats is woven in</span></div>
          <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-700)">Biostats is no longer a separate section. It's <strong style="color:var(--uw-ink-900);font-weight:600">woven into clinical questions</strong> everywhere.</p>
        </div>
        <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:24px">
          <div style="display:flex;align-items:center;gap:12px;margin-bottom:12px"><span style="width:38px;height:38px;flex:none;border-radius:var(--r-md);background:var(--uw-red-50);color:var(--uw-red-500);display:grid;place-items:center"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20.94c1.5 0 2.75 1.06 4 1.06 3 0 6-8 6-12.22A4.91 4.91 0 0 0 17 5c-2.22 0-4 1.44-5 2-1-.56-2.78-2-5-2a4.9 4.9 0 0 0-5 4.78C2 14 5 22 8 22c1.25 0 2.5-1.06 4-1.06Z"></path><path d="M10 2c1 .5 2 2 2 5"></path></svg></span><span style="font-size:16.5px;font-weight:600;line-height:1.3;color:var(--uw-ink-900)">The nutrition update</span></div>
          <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-700)">The nutrition update added <strong style="color:var(--uw-ink-900);font-weight:600">new high-yield topics</strong> that most courses haven't covered yet.</p>
        </div>
        <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:24px">
          <div style="display:flex;align-items:center;gap:12px;margin-bottom:12px"><span style="width:38px;height:38px;flex:none;border-radius:var(--r-md);background:var(--uw-red-50);color:var(--uw-red-500);display:grid;place-items:center"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="21" x2="14" y1="4" y2="4"></line><line x1="10" x2="3" y1="4" y2="4"></line><line x1="21" x2="12" y1="12" y2="12"></line><line x1="8" x2="3" y1="12" y2="12"></line><line x1="21" x2="16" y1="20" y2="20"></line><line x1="12" x2="3" y1="20" y2="20"></line><line x1="14" x2="14" y1="2" y2="6"></line><line x1="8" x2="8" y1="10" y2="14"></line><line x1="16" x2="16" y1="18" y2="22"></line></svg></span><span style="font-size:16.5px;font-weight:600;line-height:1.3;color:var(--uw-ink-900)">Reweighted sciences</span></div>
          <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-700)"><strong style="color:var(--uw-ink-900);font-weight:600">Immunology and microbiology are weighted higher.</strong> Pure biochemistry recall is weighted lower.</p>
        </div>
      </div>
      <p style="font-family:var(--font-display);font-size:clamp(21px,2.4vw,28px);line-height:1.35;letter-spacing:-0.01em;color:var(--uw-ink-900);max-width:30ch;margin:48px auto 0;text-align:center;text-wrap:balance">If your prep doesn't reflect any of this, <em>you're studying for an exam that no longer exists.</em></p>
    </div>
  </section>

  <!-- WHY COURSES FAIL -->
  <section style="background:var(--uw-blue-800);color:#fff;position:relative;overflow:hidden;padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px)">
    <div class="dot-tex" style="position:absolute;inset:0;opacity:.6"></div>
    <div style="position:relative;z-index:1;max-width:880px;margin:0 auto;text-align:center">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-300);margin-bottom:14px">Why most courses fail</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,44px);line-height:1.15;letter-spacing:-0.02em;margin:0 auto 28px;max-width:24ch;color:#fff;text-wrap:balance">Students walk in <em style="color:var(--uw-red-300)">over-prepared on what isn't tested</em> and under-prepared on what is.</h2>
      <p style="max-width:62ch;margin:0 auto;font-size:17px;line-height:1.65;color:rgba(255,255,255,.82)">Most courses were built three to five years ago. They've been patched, not rebuilt. New slides bolted onto an old structure, question banks updated cosmetically, nutrition barely covered. So students fail or score low, not because they didn't work hard, but because they worked hard on the wrong material.</p>
      <div style="display:inline-flex;align-items:center;gap:10px;margin-top:30px;padding:10px 20px;border:1px solid rgba(255,255,255,.2);border-radius:999px;background:rgba(255,255,255,.06);font-family:var(--font-display);font-style:italic;font-size:18px;color:#fff">This is not your fault.</div>
    </div>
  </section>

  <!-- STORY -->
  <section style="background:var(--uw-bg);border-top:1px solid var(--uw-border);padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px)">
    <div class="cc-story" style="max-width:1080px;margin:0 auto;display:grid;grid-template-columns:.82fr 1.18fr;gap:clamp(32px,5vw,64px);align-items:start">
      <div class="cc-story-photo" style="position:sticky;top:88px">
        <div style="position:relative;border-radius:var(--r-xl);overflow:hidden;box-shadow:var(--shadow-lg);border:1px solid var(--uw-border)">
          <img src="/assets/step1-crash-course/step1-crash-course-picture.jpg" alt="Dr. Manik Madaan" style="width:100%;display:block;aspect-ratio:1/1;object-fit:cover">
        </div>
        <div style="margin-top:16px">
          <div style="font-family:var(--font-display);font-size:19px;font-weight:600;color:var(--uw-ink-900)">Dr. Manik Madaan</div>
          <div style="font-size:13px;color:var(--uw-ink-500);margin-top:2px">260 on Step 1, 271 on Step 2 · 800,000+ followers · 17,000+ students taught</div>
          <div style="display:flex;gap:8px;margin-top:14px;flex-wrap:wrap">
            <span style="display:inline-flex;align-items:center;gap:6px;font-size:11.5px;font-family:var(--font-mono);letter-spacing:.04em;background:var(--uw-blue-50);color:var(--uw-blue-600);padding:5px 11px;border-radius:999px"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.4 9.4 8 11 4.6-1.6 8-6 8-11V5z"></path></svg>World's most-followed USMLE expert</span>
          </div>
        </div>
      </div>
      <div>
        <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px">Who teaches</div>
        <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(26px,3vw,38px);letter-spacing:-0.01em;line-height:1.25;margin:0 0 22px;color:var(--uw-ink-900)">Learn from doctors who just beat the exam you're about to sit.</h2>
        <div style="font-size:16.5px;line-height:1.6;color:var(--uw-ink-700);max-width:54ch">
          <p style="margin:0 0 20px">The program is led by <strong style="color:var(--uw-ink-900);font-weight:600">Dr. Manik Madaan.</strong> He scored <strong style="color:var(--uw-ink-900);font-weight:600">260 on Step 1 and 271 on Step 2,</strong> and he's the world's most-followed USMLE expert, with 800,000+ followers and 17,000+ students taught.</p>
          <p style="margin:0 0 20px">The 111 live sessions are taught by his <strong style="color:var(--uw-ink-900);font-weight:600">hand-picked instructor team.</strong> Every instructor <strong style="color:var(--uw-ink-900);font-weight:600">scored 270+ on Step 2,</strong> passed Step 1 on their first attempt, and sat the most recent USMLE.</p>
          <p style="font-family:var(--font-display);font-weight:600;font-size:clamp(20px,2.1vw,25px);line-height:1.3;letter-spacing:-0.01em;color:var(--uw-blue-700);margin:26px 0 24px;max-width:30ch">You learn from doctors who beat the version of the exam you're about to sit.</p>
          <p style="margin:0">Not from people who took the test five years ago and haven't seen the new format.</p>
        </div>
        <div style="margin-top:28px"><a href="#offer"><span class="btn btn--primary btn--lg">Save my seat</span></a></div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS row 2 -->
  <section style="background:var(--uw-surface);padding:clamp(48px,6vw,80px) 0;border-top:1px solid var(--uw-border);overflow:hidden">
    <div style="max-width:1080px;margin:0 auto;padding:0 clamp(20px,5vw,48px) 38px;text-align:center">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px">From our students</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(26px,3.2vw,40px);letter-spacing:-0.02em;margin:0 auto 8px;color:var(--uw-ink-900);max-width:22ch">Hear what our students are saying.</h2>
      <p style="margin:10px auto 0;max-width:50ch;font-size:15.5px;line-height:1.6;color:var(--uw-ink-500)">Screenshots from students the week they found out they passed. Hover to pause.</p>
    </div>
    <div class="cc-marquee-mask" style="position:relative;-webkit-mask-image:linear-gradient(90deg,transparent,#000 4%,#000 96%,transparent);mask-image:linear-gradient(90deg,transparent,#000 4%,#000 96%,transparent)">
      <div class="cc-marquee-track">
        <?php
        $marqueeTestimonials = ['t06','t14','t03','t04','t05','t15','t27','t28','t31','t32','t60','t82','t83','t16','t76','t52','t89','t11','t12','t38','t95','t17','t20','t90','t96'];
        $marqueeLoop = array_merge($marqueeTestimonials, $marqueeTestimonials);
        foreach ($marqueeLoop as $t) {
            echo '<div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-mastery/testimonials/' . $t . '.webp" alt="Student testimonial screenshot" style="height:340px;width:auto;display:block"></div>';
        }
        ?>
      </div>
    </div>
  </section>

  <!-- WHY IT WORKS -->
  <section id="why" style="background:var(--uw-bg);padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px);border-top:1px solid var(--uw-border)">
    <div style="max-width:1180px;margin:0 auto">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px;text-align:center">What makes it different</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,44px);letter-spacing:-0.02em;margin:0 0 36px;color:var(--uw-ink-900);text-align:center;max-width:26ch;margin-left:auto;margin-right:auto">111 live sessions. Every page of First Aid. No gaps.</h2>
      <div class="cc-3" style="display:grid;grid-template-columns:repeat(3,1fr);gap:18px">
        <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;transition:transform var(--dur-med) var(--ease-out),box-shadow var(--dur-med)" class="ccx-h1">
          <div style="width:42px;height:42px;background:var(--uw-blue-50);color:var(--uw-blue-500);border-radius:var(--r-md);display:grid;place-items:center;margin-bottom:16px"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 2v6h6"></path><path d="M21 12A9 9 0 0 0 6 5.3L3 8"></path><path d="M21 22v-6h-6"></path><path d="M3 12a9 9 0 0 0 15 6.7l3-2.7"></path></svg></div>
          <h4 style="margin:0 0 8px;font-size:16.5px;font-weight:600;color:var(--uw-ink-900)">Rebuilt for the new Step 1 syllabus.</h4>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--uw-ink-600)">Long chart-style questions, the nutrition update, ethics frameworks, biostats integration, and pathophysiology-first teaching.</p>
        </div>
        <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;transition:transform var(--dur-med) var(--ease-out),box-shadow var(--dur-med)" class="ccx-h1">
          <div style="width:42px;height:42px;background:var(--uw-blue-50);color:var(--uw-blue-500);border-radius:var(--r-md);display:grid;place-items:center;margin-bottom:16px"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg></div>
          <h4 style="margin:0 0 8px;font-size:16.5px;font-weight:600;color:var(--uw-ink-900)">Basics taught from the ground up.</h4>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--uw-ink-600)">Every foundational concept is covered, so weak basics get stronger before we layer the high-yield on top.</p>
        </div>
        <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;transition:transform var(--dur-med) var(--ease-out),box-shadow var(--dur-med)" class="ccx-h1">
          <div style="width:42px;height:42px;background:var(--uw-blue-50);color:var(--uw-blue-500);border-radius:var(--r-md);display:grid;place-items:center;margin-bottom:16px"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"></path></svg></div>
          <h4 style="margin:0 0 8px;font-size:16.5px;font-weight:600;color:var(--uw-ink-900)">Instructors who just sat the new exam.</h4>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--uw-ink-600)">Every instructor scored 270+ on Step 2 and passed Step 1 on their first attempt.</p>
        </div>
        <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;transition:transform var(--dur-med) var(--ease-out),box-shadow var(--dur-med)" class="ccx-h1">
          <div style="width:42px;height:42px;background:var(--uw-blue-50);color:var(--uw-blue-500);border-radius:var(--r-md);display:grid;place-items:center;margin-bottom:16px"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polygon points="10 8 16 12 10 16 10 8"></polygon></svg></div>
          <h4 style="margin:0 0 8px;font-size:16.5px;font-weight:600;color:var(--uw-ink-900)">Live sessions, plus recordings.</h4>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--uw-ink-600)">Join live, Monday to Thursday, for Q&amp;A. If you miss a session, the recording is in your portal the same day.</p>
        </div>
        <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;transition:transform var(--dur-med) var(--ease-out),box-shadow var(--dur-med)" class="ccx-h1">
          <div style="width:42px;height:42px;background:var(--uw-blue-50);color:var(--uw-blue-500);border-radius:var(--r-md);display:grid;place-items:center;margin-bottom:16px"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><path d="M12 17h.01"></path><circle cx="12" cy="12" r="10"></circle></svg></div>
          <h4 style="margin:0 0 8px;font-size:16.5px;font-weight:600;color:var(--uw-ink-900)">Question solving in every session.</h4>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--uw-ink-600)">Learn to reach the right answer even when you don't know the content cold, by ruling out the wrong choices.</p>
        </div>
        <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;transition:transform var(--dur-med) var(--ease-out),box-shadow var(--dur-med)" class="ccx-h1">
          <div style="width:42px;height:42px;background:var(--uw-blue-50);color:var(--uw-blue-500);border-radius:var(--r-md);display:grid;place-items:center;margin-bottom:16px"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 7v14"></path><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path></svg></div>
          <h4 style="margin:0 0 8px;font-size:16.5px;font-weight:600;color:var(--uw-ink-900)">Comprehensive notes included.</h4>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--uw-ink-600)">Pre-built and continuously updated, so you study what matters instead of rebuilding the wheel.</p>
        </div>
      </div>
      <div style="margin-top:28px;text-align:center"><a href="#offer"><span class="btn btn--primary btn--lg">Enroll Now</span></a></div>
    </div>
  </section>

  <!-- STAGES -->
  <section style="background:var(--uw-surface);padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px);border-top:1px solid var(--uw-border)">
    <div style="max-width:1080px;margin:0 auto">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px;text-align:center">Who it's for</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,44px);letter-spacing:-0.02em;margin:0 auto 36px;color:var(--uw-ink-900);max-width:26ch;text-align:center">Built around the syllabus, not your stage.</h2>
      <div class="cc-3" style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px">
        <div style="border-top:3px solid var(--uw-blue-500);background:var(--uw-bg);border-radius:0 0 var(--r-lg) var(--r-lg);padding:26px">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px"><span style="width:34px;height:34px;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-600);display:grid;place-items:center"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"></path></svg></span><span style="font-size:12px;font-family:var(--font-mono);letter-spacing:.06em;text-transform:uppercase;color:var(--uw-blue-600)">Med students</span></div>
          <p style="margin:0;font-size:14.5px;line-height:1.65;color:var(--uw-ink-700)">Build Step 1 alongside your coursework, one system at a time, with every foundational concept taught from scratch.</p>
        </div>
        <div style="border-top:3px solid var(--uw-blue-500);background:var(--uw-bg);border-radius:0 0 var(--r-lg) var(--r-lg);padding:26px">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px"><span style="width:34px;height:34px;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-600);display:grid;place-items:center"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M2 12h20"></path><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg></span><span style="font-size:12px;font-family:var(--font-mono);letter-spacing:.06em;text-transform:uppercase;color:var(--uw-blue-600)">IMGs and graduates</span></div>
          <p style="margin:0;font-size:14.5px;line-height:1.65;color:var(--uw-ink-700)">Sessions are scheduled for a global audience, and every recording is in your portal the same day.</p>
        </div>
        <div style="border-top:3px solid var(--uw-blue-500);background:var(--uw-bg);border-radius:0 0 var(--r-lg) var(--r-lg);padding:26px">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px"><span style="width:34px;height:34px;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-600);display:grid;place-items:center"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg></span><span style="font-size:12px;font-family:var(--font-mono);letter-spacing:.06em;text-transform:uppercase;color:var(--uw-blue-600)">Weak basics</span></div>
          <p style="margin:0;font-size:14.5px;line-height:1.65;color:var(--uw-ink-700)">If your foundations are shaky or you're coming back after a gap, we rebuild them first, then layer the high-yield on top.</p>
        </div>
      </div>
      <div style="margin-top:40px;text-align:center"><a href="#offer"><span class="btn btn--primary btn--lg">Save my seat</span></a></div>
    </div>
  </section>

  <!-- CURRICULUM -->
  <section id="curriculum" style="background:var(--uw-blue-800);color:#fff;position:relative;overflow:hidden;padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px)">
    <div class="dot-tex" style="position:absolute;inset:0;opacity:.7"></div>
    <div style="position:relative;z-index:1;max-width:1080px;margin:0 auto">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-300);margin-bottom:14px;text-align:center">How we work</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,44px);letter-spacing:-0.02em;margin:0 0 20px;color:#fff;text-align:center">Every Step&nbsp;1 system, block by block. <em style="color:var(--uw-red-300)">No gaps.</em></h2>
      <p style="text-align:center;max-width:62ch;margin:0 auto 36px;font-size:16px;line-height:1.6;color:rgba(255,255,255,.75)">111 live sessions, one block at a time. We start with general pathology in November and cycle through every system from there.</p>
      <div class="cc-curric" style="display:grid;grid-template-columns:1fr 1fr;gap:12px 20px">
        <div style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);border-radius:var(--r-md);padding:16px 20px">
          <div style="display:flex;align-items:baseline;gap:12px;margin-bottom:6px"><span style="font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--uw-success-300)">01</span><span style="font-family:var(--font-mono);font-size:12px;letter-spacing:.06em;text-transform:uppercase;color:rgba(255,255,255,.6)">November 2026</span></div>
          <div style="font-size:15.5px;line-height:1.5">General pathology; miscellaneous high-yield topics</div>
        </div>
        <div style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);border-radius:var(--r-md);padding:16px 20px">
          <div style="display:flex;align-items:baseline;gap:12px;margin-bottom:6px"><span style="font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--uw-success-300)">02</span><span style="font-family:var(--font-mono);font-size:12px;letter-spacing:.06em;text-transform:uppercase;color:rgba(255,255,255,.6)">December 2026</span></div>
          <div style="font-size:15.5px;line-height:1.5">Cardiovascular</div>
        </div>
        <div style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);border-radius:var(--r-md);padding:16px 20px">
          <div style="display:flex;align-items:baseline;gap:12px;margin-bottom:6px"><span style="font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--uw-success-300)">03</span><span style="font-family:var(--font-mono);font-size:12px;letter-spacing:.06em;text-transform:uppercase;color:rgba(255,255,255,.6)">January 2027</span></div>
          <div style="font-size:15.5px;line-height:1.5">Gastrointestinal; renal; endocrine; reproductive</div>
        </div>
        <div style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);border-radius:var(--r-md);padding:16px 20px">
          <div style="display:flex;align-items:baseline;gap:12px;margin-bottom:6px"><span style="font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--uw-success-300)">04</span><span style="font-family:var(--font-mono);font-size:12px;letter-spacing:.06em;text-transform:uppercase;color:rgba(255,255,255,.6)">February 2027</span></div>
          <div style="font-size:15.5px;line-height:1.5">Immunology; hematology and oncology; neurology <span style="display:inline-flex;align-items:center;font-size:10px;font-family:var(--font-mono);letter-spacing:.04em;text-transform:uppercase;background:rgba(74,222,128,.15);color:var(--uw-success-300);padding:2px 7px;border-radius:999px;margin-left:4px">begins</span></div>
        </div>
        <div style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);border-radius:var(--r-md);padding:16px 20px">
          <div style="display:flex;align-items:baseline;gap:12px;margin-bottom:6px"><span style="font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--uw-success-300)">05</span><span style="font-family:var(--font-mono);font-size:12px;letter-spacing:.06em;text-transform:uppercase;color:rgba(255,255,255,.6)">March 2027</span></div>
          <div style="font-size:15.5px;line-height:1.5">Neurology <span style="display:inline-flex;align-items:center;font-size:10px;font-family:var(--font-mono);letter-spacing:.04em;text-transform:uppercase;background:rgba(255,255,255,.12);color:rgba(255,255,255,.75);padding:2px 7px;border-radius:999px;margin-right:4px">completed</span>; psychiatry; musculoskeletal; dermatology <span style="display:inline-flex;align-items:center;font-size:10px;font-family:var(--font-mono);letter-spacing:.04em;text-transform:uppercase;background:rgba(74,222,128,.15);color:var(--uw-success-300);padding:2px 7px;border-radius:999px;margin-left:4px">begins</span></div>
        </div>
        <div style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);border-radius:var(--r-md);padding:16px 20px">
          <div style="display:flex;align-items:baseline;gap:12px;margin-bottom:6px"><span style="font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--uw-success-300)">06</span><span style="font-family:var(--font-mono);font-size:12px;letter-spacing:.06em;text-transform:uppercase;color:rgba(255,255,255,.6)">April 2027</span></div>
          <div style="font-size:15.5px;line-height:1.5">Dermatology; biostatistics; ethics; microbiology <span style="display:inline-flex;align-items:center;font-size:10px;font-family:var(--font-mono);letter-spacing:.04em;text-transform:uppercase;background:rgba(74,222,128,.15);color:var(--uw-success-300);padding:2px 7px;border-radius:999px;margin-left:4px">begins</span></div>
        </div>
        <div style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);border-radius:var(--r-md);padding:16px 20px">
          <div style="display:flex;align-items:baseline;gap:12px;margin-bottom:6px"><span style="font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--uw-success-300)">07</span><span style="font-family:var(--font-mono);font-size:12px;letter-spacing:.06em;text-transform:uppercase;color:rgba(255,255,255,.6)">May 2027</span></div>
          <div style="font-size:15.5px;line-height:1.5">Microbiology <span style="display:inline-flex;align-items:center;font-size:10px;font-family:var(--font-mono);letter-spacing:.04em;text-transform:uppercase;background:rgba(255,255,255,.12);color:rgba(255,255,255,.75);padding:2px 7px;border-radius:999px;margin-right:4px">completed</span>; biochemistry; general pharmacology</div>
        </div>
      </div>
      <div style="display:flex;align-items:center;justify-content:center;gap:10px;margin-top:28px;font-size:14px;color:rgba(255,255,255,.8)"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-300)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><path d="M20 6 9 17l-5-5"></path></svg>Every session is recorded and in your portal the same day.</div>
      <div style="margin-top:28px;text-align:center"><a href="#offer"><span class="btn btn--primary btn--lg">Save my seat</span></a></div>
    </div>
  </section>

  <!-- VIDEO REVIEWS -->
  <section id="reviews" style="background:var(--uw-bg);border-top:1px solid var(--uw-border);padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px)">
    <div style="max-width:1080px;margin:0 auto">
      <div style="display:flex;justify-content:center;align-items:center;gap:9px;font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>Watch their stories</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,44px);letter-spacing:-0.02em;margin:0 auto 8px;color:var(--uw-ink-900);text-align:center;max-width:22ch">Hear it from students who passed.</h2>
      <p style="text-align:center;max-width:54ch;margin:0 auto 40px;font-size:16px;line-height:1.6;color:var(--uw-ink-500)">Tap to play</p>
      <div class="cc-videos">
        <div class="cc-short-wrap" style="display:flex">
          <a href="https://www.youtube.com/shorts/pcQuFkFmnAE" target="_blank" rel="noopener" data-video="short" style="position:relative;width:100%;border:1px solid var(--uw-border);border-radius:var(--r-xl);overflow:hidden;box-shadow:var(--shadow-md);background:#000;aspect-ratio:9/16;cursor:pointer;display:block;text-decoration:none">
              <img src="https://i.ytimg.com/vi/pcQuFkFmnAE/hqdefault.jpg" alt="Student video review" loading="lazy" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block">
              <div style="position:absolute;inset:0;background:linear-gradient(180deg,rgba(0,0,0,.12),rgba(0,0,0,.42))"></div>
              <div style="position:absolute;left:14px;bottom:14px;display:flex;align-items:center;gap:8px;font-family:var(--font-mono);font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:#fff;background:rgba(0,0,0,.4);padding:5px 10px;border-radius:999px;backdrop-filter:blur(4px)"><span style="width:6px;height:6px;border-radius:50%;background:var(--uw-red-400)"></span>Short</div>
              <div style="position:absolute;inset:0;display:grid;place-items:center"><span style="width:66px;height:46px;background:#E32124;border-radius:12px;display:grid;place-items:center;box-shadow:0 6px 20px rgba(0,0,0,.35)"><svg width="22" height="22" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg></span></div>
          </a>
        </div>
        <div style="display:flex;flex-direction:column;gap:18px">
          <a href="https://www.youtube.com/watch?v=5qnypeUipdE" target="_blank" rel="noopener" data-video="va" style="position:relative;border:1px solid var(--uw-border);border-radius:var(--r-xl);overflow:hidden;box-shadow:var(--shadow-md);background:#000;aspect-ratio:16/9;cursor:pointer;display:block;text-decoration:none">
              <img src="https://i.ytimg.com/vi/5qnypeUipdE/hqdefault.jpg" alt="Student video review" loading="lazy" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block">
              <div style="position:absolute;inset:0;background:linear-gradient(180deg,rgba(0,0,0,.08),rgba(0,0,0,.34))"></div>
              <div style="position:absolute;inset:0;display:grid;place-items:center"><span style="width:66px;height:46px;background:#E32124;border-radius:12px;display:grid;place-items:center;box-shadow:0 6px 20px rgba(0,0,0,.35)"><svg width="22" height="22" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg></span></div>
          </a>
          <a href="https://www.youtube.com/watch?v=yljBSeYYx6s" target="_blank" rel="noopener" data-video="vb" style="position:relative;border:1px solid var(--uw-border);border-radius:var(--r-xl);overflow:hidden;box-shadow:var(--shadow-md);background:#000;aspect-ratio:16/9;cursor:pointer;display:block;text-decoration:none">
              <img src="https://i.ytimg.com/vi/yljBSeYYx6s/hqdefault.jpg" alt="Student video review" loading="lazy" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block">
              <div style="position:absolute;inset:0;background:linear-gradient(180deg,rgba(0,0,0,.08),rgba(0,0,0,.34))"></div>
              <div style="position:absolute;inset:0;display:grid;place-items:center"><span style="width:66px;height:46px;background:#E32124;border-radius:12px;display:grid;place-items:center;box-shadow:0 6px 20px rgba(0,0,0,.35)"><svg width="22" height="22" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"></path></svg></span></div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- COMPARE -->
  <section id="compare" style="background:var(--uw-surface);padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px)">
    <div style="max-width:1080px;margin:0 auto">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px;text-align:center">How we compare</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,44px);letter-spacing:-0.02em;margin:0 0 36px;color:var(--uw-ink-900);text-align:center">One rebuilt for the new Step&nbsp;1. One still living in 2021.</h2>
      <div class="cc-cmp-table" style="overflow-x:auto;border:1px solid var(--uw-border);border-radius:var(--r-lg)">
        <table style="width:100%;border-collapse:collapse;min-width:680px;font-size:14px">
          <thead>
            <tr>
              <th style="text-align:left;padding:18px 20px;background:var(--uw-bg);color:var(--uw-ink-500);font-weight:500;font-size:12px;letter-spacing:.06em;text-transform:uppercase;border-bottom:1px solid var(--uw-border);width:24%">Feature</th>
              <th style="text-align:left;padding:18px 20px;background:var(--uw-blue-500);color:#fff;border-bottom:1px solid var(--uw-border);width:42%"><b style="font-size:15px;font-weight:600">USMLE Step 1 Mastery</b></th>
              <th style="text-align:left;padding:18px 20px;background:var(--uw-bg);color:var(--uw-ink-600);font-weight:600;border-bottom:1px solid var(--uw-border)">Other Step 1 courses</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $compareRows = [
                ['Format', 'Live cohort on Zoom, Monday to Thursday, with recordings', 'Pre-recorded videos only'],
                ['Live Q&A', 'Ask questions and clear doubts in real time, every session', 'None, pre-recorded only'],
                ['New Step 1 syllabus alignment', 'Rebuilt line by line for the new syllabus, with the nutrition update fully integrated', 'Often reuses older decks with no updates'],
                ['Basics', 'Every foundational concept taught from the ground up', 'Assumes you already know the basics'],
                ['Instructors', 'Every instructor scored 270+ on Step 2 and sat the most recent USMLE', 'Often years removed from sitting the exam'],
                ['Question solving', 'Frameworks built into every session', 'Video content alone, if at all'],
                ['Notes', 'Comprehensive notes, updated for the new syllabus', 'Slide PDFs or handouts only'],
                ['Cohort size', 'Capped to keep live interaction personal', 'Open enrollment, no interaction'],
                ['Step 2 foundation', 'Primes you for 260+ on Step 2', 'Sold separately'],
                ['Pass guarantee', "<b style=\"color:var(--uw-success-700)\">Don't pass, get your money back</b>", 'No guarantee, or store credit only'],
            ];
            $lastIdx = count($compareRows) - 1;
            foreach ($compareRows as $i => $row) {
                $borderStyle = $i === $lastIdx ? '' : 'border-bottom:1px solid var(--uw-border);';
                echo '<tr>';
                echo '<td style="padding:16px 20px;font-weight:600;color:var(--uw-ink-900);' . $borderStyle . 'vertical-align:top">' . $row[0] . '</td>';
                echo '<td style="padding:16px 20px;color:var(--uw-ink-800);background:var(--uw-blue-50);' . $borderStyle . 'vertical-align:top"><div style="display:flex;gap:10px"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:1px"><path d="M20 6 9 17l-5-5"></path></svg><span>' . $row[1] . '</span></div></td>';
                echo '<td style="padding:16px 20px;color:var(--uw-ink-500);' . $borderStyle . 'vertical-align:top">' . $row[2] . '</td>';
                echo '</tr>';
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="cc-cmp-cards" style="flex-direction:column;gap:16px">
        <?php foreach ($compareRows as $row) { ?>
            <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);box-shadow:var(--shadow-xs);padding:22px 22px 24px">
              <h3 style="font-family:var(--font-display);font-weight:600;font-size:21px;letter-spacing:-0.01em;line-height:1.2;margin:0 0 16px;color:var(--uw-ink-900)"><?php echo $row[0]; ?></h3>
              <div style="display:flex;gap:9px;align-items:flex-start;margin-bottom:5px">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg>
                <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500);font-weight:700">Us</div>
              </div>
              <p style="margin:0 0 18px;padding-left:26px;font-size:15px;line-height:1.5;color:var(--uw-ink-900)"><?php echo $row[1]; ?></p>
              <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-ink-400);font-weight:700;margin-bottom:5px">Others</div>
              <p style="margin:0;font-size:15px;line-height:1.5;color:var(--uw-ink-500);font-style:italic"><?php echo $row[2]; ?></p>
            </div>
        <?php } ?>
      </div>
      <div style="margin-top:40px;text-align:center"><a href="#offer"><span class="btn btn--primary btn--lg">Enroll Now</span></a></div>
    </div>
  </section>

  <!-- OFFER -->
  <section id="offer" style="background:var(--uw-bg);border-top:1px solid var(--uw-border);padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px)">
    <div style="max-width:760px;margin:0 auto;text-align:center">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px">Offer &amp; guarantee</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,44px);letter-spacing:-0.02em;margin:0 0 32px;color:var(--uw-ink-900)">Everything you get today</h2>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-xl);box-shadow:var(--shadow-lg);overflow:hidden;text-align:left">
        <div style="padding:clamp(24px,4vw,36px)">
          <div style="display:flex;justify-content:space-between;align-items:baseline;gap:16px;padding:14px 0;border-bottom:1px solid var(--uw-border)">
            <span style="display:flex;flex-direction:column;gap:3px"><span style="font-size:15px;color:var(--uw-ink-800)">USMLE Step 1 Mastery</span><span style="font-size:12.5px;color:var(--uw-ink-500)">6 months · 111 live sessions · Monday to Thursday · every page of First Aid · recordings the same day</span></span>
            <span style="font-family:var(--font-mono);color:var(--uw-ink-500);white-space:nowrap">$3,499</span>
          </div>
          <div style="display:flex;justify-content:space-between;align-items:baseline;gap:16px;padding:14px 0;border-bottom:1px solid var(--uw-border)">
            <span style="display:flex;flex-direction:column;gap:3px"><span style="font-size:15px;color:var(--uw-ink-800)"><span style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.06em;text-transform:uppercase;color:var(--uw-blue-600);background:var(--uw-blue-50);padding:2px 7px;border-radius:999px;margin-right:7px">Bonus</span>3,800-question Step 1 High-Yield QBank</span><span style="font-size:12.5px;color:var(--uw-ink-500)">1-year subscription</span></span>
            <span style="white-space:nowrap"><s style="font-family:var(--font-mono);color:var(--uw-ink-400)">$349</s> <b style="color:var(--uw-success-600)">Free</b></span>
          </div>
          <div style="display:flex;justify-content:space-between;align-items:baseline;gap:16px;padding:14px 0;border-bottom:1px solid var(--uw-border)">
            <span style="display:flex;flex-direction:column;gap:3px"><span style="font-size:15px;color:var(--uw-ink-800)"><span style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.06em;text-transform:uppercase;color:var(--uw-blue-600);background:var(--uw-blue-50);padding:2px 7px;border-radius:999px;margin-right:7px">Bonus</span>4 Step 1 self-assessments</span><span style="font-size:12.5px;color:var(--uw-ink-500)">Full-length practice exams</span></span>
            <span style="white-space:nowrap"><s style="font-family:var(--font-mono);color:var(--uw-ink-400)">$99</s> <b style="color:var(--uw-success-600)">Free</b></span>
          </div>
          <div style="display:flex;justify-content:space-between;align-items:baseline;gap:16px;padding:14px 0;border-bottom:1px solid var(--uw-border)">
            <span style="display:flex;flex-direction:column;gap:3px"><span style="font-size:15px;color:var(--uw-ink-800)"><span style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.06em;text-transform:uppercase;color:var(--uw-blue-600);background:var(--uw-blue-50);padding:2px 7px;border-radius:999px;margin-right:7px">Bonus</span>Comprehensive notes</span><span style="font-size:12.5px;color:var(--uw-ink-500)">New Step 1 syllabus</span></span>
            <span style="white-space:nowrap"><s style="font-family:var(--font-mono);color:var(--uw-ink-400)">$99</s> <b style="color:var(--uw-success-600)">Free</b></span>
          </div>
          <div style="display:flex;justify-content:space-between;align-items:baseline;gap:16px;padding:14px 0 0">
            <span style="font-size:15px;color:var(--uw-ink-800)">Pass guarantee</span>
            <span style="font-size:13px;font-weight:600;color:var(--uw-success-600)">Included</span>
          </div>
          <div style="display:flex;justify-content:space-between;align-items:baseline;gap:16px;padding:16px 0 0;border-top:2px solid var(--uw-ink-900);margin-top:6px"><span style="font-size:15px;font-weight:600;color:var(--uw-ink-900)">Total value</span><s style="font-family:var(--font-display);font-size:24px;color:var(--uw-ink-400)">$4,046</s></div>
        </div>
        <div class="cc-offer-pay" style="background:var(--uw-blue-500);color:#fff;padding:clamp(24px,4vw,36px);position:relative;overflow:hidden">
          <div class="dot-tex" style="position:absolute;inset:0"></div>
          <div style="position:relative;z-index:1;text-align:center">
            <div class="cc-offer-eyebrow" style="font-size:13px;color:rgba(255,255,255,.7);text-transform:uppercase;letter-spacing:.1em;font-family:var(--font-mono);margin-bottom:8px">Yours today</div>
            <div class="cc-offer-price" style="display:flex;align-items:baseline;justify-content:center;gap:14px;margin-bottom:6px"><s style="font-family:var(--font-display);font-size:30px;color:rgba(255,255,255,.5)">$4,046</s><b style="font-family:var(--font-display);font-size:clamp(52px,8vw,72px);font-weight:600;line-height:.9">$899</b></div>
            <div style="display:inline-flex;align-items:center;gap:6px;font-size:12px;font-family:var(--font-mono);letter-spacing:.04em;text-transform:uppercase;background:rgba(74,222,128,.18);color:var(--uw-success-300);padding:4px 11px;border-radius:999px;margin-bottom:18px">You save $3,147</div>
            <div style="display:flex;flex-direction:column;align-items:stretch;gap:12px;max-width:340px;margin:0 auto">
              <a href="https://buy.stripe.com/bJe5kEgdAdLvgRqagkes01z" target="_blank" rel="noopener noreferrer" style="display:block"><span class="btn btn--primary btn--xl" style="width:100%">Reserve my spot with $99</span></a>
              <div style="font-size:12.5px;color:rgba(255,255,255,.75);display:flex;align-items:center;justify-content:center;gap:6px"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><rect x="3" y="11" width="18" height="11" rx="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>Hold your spot for $99 today. Full tuition $899.</div>
            </div>
          </div>
        </div>
      </div>
      <div style="display:flex;align-items:flex-start;gap:14px;text-align:left;background:var(--uw-success-50);border:1px solid var(--uw-success-300);border-radius:var(--r-lg);padding:20px 22px;margin-top:24px" class="cc-guar">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:1px"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
        <div>
          <div style="font-family:var(--font-display);font-size:17px;color:var(--uw-ink-900);margin-bottom:4px">The pass guarantee</div>
          <p style="margin:0;font-size:14.5px;line-height:1.65;color:var(--uw-ink-700)">Complete the program and sit your exam. If you don't pass, send us your score report and <strong style="color:var(--uw-ink-900);font-weight:600">you get your money back.</strong> Zero risk. Pure results.</p>
        </div>
      </div>
      <div style="margin-top:28px"><a href="#offer"><span class="btn btn--primary btn--lg">Reserve my spot</span></a></div>
    </div>
  </section>

  <!-- TESTIMONIAL WALL -->
  <section style="background:var(--uw-bg);border-top:1px solid var(--uw-border);padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px)">
    <div style="max-width:1080px;margin:0 auto">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px;text-align:center">In their own words</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(26px,3.2vw,40px);letter-spacing:-0.02em;margin:0 auto 8px;color:var(--uw-ink-900);text-align:center;max-width:24ch">We'll let the students talk.</h2>
      <p style="text-align:center;max-width:54ch;margin:0 auto 32px;font-size:16px;line-height:1.6;color:var(--uw-ink-500)">Sent to us after results day. Scroll to read them all.</p>
      <div class="cc-wall" style="max-height:660px;overflow-y:scroll;padding:20px 22px;border:1px solid var(--uw-border);border-radius:var(--r-xl);background:var(--uw-surface);box-shadow:var(--shadow-sm) inset">
        <div class="cc-wall-grid" style="columns:3;column-gap:14px">
          <?php
          $wallTestimonials = [
              't06','t14','t03','t04','t05','t15','t27','t28','t30','t31','t32','t60','t82','t83',
              't01','t02','t07','t10','t16','t26','t42','t47','t48','t50','t52','t53','t56','t76',
              't78','t81','t88','t89','t91','t08','t09','t11','t12','t13','t18','t21','t38','t40',
              't41','t66','t95','t98','t17','t19','t20','t22','t33','t37','t39','t43','t44','t45',
              't90','t96','t99',
          ];
          foreach ($wallTestimonials as $t) {
              echo '<div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-mastery/testimonials/' . $t . '.webp" alt="Student testimonial screenshot" loading="lazy" style="width:100%;display:block"></div>';
          }
          ?>
        </div>
      </div>
    </div>
  </section>

  <!-- SIX MONTHS FROM NOW -->
  <section style="background:var(--uw-surface);border-top:1px solid var(--uw-border);padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px)">
    <div style="max-width:1080px;margin:0 auto">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px;text-align:center">Six months from now</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.4vw,44px);letter-spacing:-0.02em;margin:0 0 clamp(34px,4vw,52px);color:var(--uw-ink-900);text-align:center">You're going to spend them either way.</h2>
      <div class="cc-duality" style="display:grid;grid-template-columns:1fr 1fr;gap:clamp(16px,2.5vw,28px)">
        <div style="background:var(--uw-red-50);border:1px solid var(--uw-red-100);border-radius:var(--r-lg);padding:clamp(24px,3vw,34px)">
          <div style="font-size:17px;font-weight:600;color:var(--uw-red-600);margin-bottom:20px">Without this course</div>
          <ul style="list-style:none;margin:0;padding:0;display:flex;flex-direction:column;gap:16px">
            <li style="display:flex;gap:12px;align-items:flex-start"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-red-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg><span style="font-size:15px;line-height:1.5;color:var(--uw-ink-700)">Six months on resources built for an exam that no longer exists.</span></li>
            <li style="display:flex;gap:12px;align-items:flex-start"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-red-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg><span style="font-size:15px;line-height:1.5;color:var(--uw-ink-700)">Over-prepared on what isn't tested, under-prepared on what is.</span></li>
            <li style="display:flex;gap:12px;align-items:flex-start"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-red-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg><span style="font-size:15px;line-height:1.5;color:var(--uw-ink-700)">Shaky basics you never had time to rebuild.</span></li>
            <li style="display:flex;gap:12px;align-items:flex-start"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-red-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg><span style="font-size:15px;line-height:1.5;color:var(--uw-ink-700)">Walking in hoping you studied the right things.</span></li>
          </ul>
        </div>
        <div style="background:var(--uw-blue-50);border:1px solid var(--uw-blue-100);border-radius:var(--r-lg);padding:clamp(24px,3vw,34px)">
          <div style="font-size:17px;font-weight:600;color:var(--uw-blue-700);margin-bottom:20px">With this course</div>
          <ul style="list-style:none;margin:0;padding:0;display:flex;flex-direction:column;gap:16px">
            <li style="display:flex;gap:12px;align-items:flex-start"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span style="font-size:15px;line-height:1.5;color:var(--uw-ink-700)">Every page of First Aid covered, block by block, with no gaps.</span></li>
            <li style="display:flex;gap:12px;align-items:flex-start"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span style="font-size:15px;line-height:1.5;color:var(--uw-ink-700)">Basics rebuilt from the ground up, then layered with high-yield.</span></li>
            <li style="display:flex;gap:12px;align-items:flex-start"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span style="font-size:15px;line-height:1.5;color:var(--uw-ink-700)">Question-solving frameworks drilled in every session.</span></li>
            <li style="display:flex;gap:12px;align-items:flex-start"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span style="font-size:15px;line-height:1.5;color:var(--uw-ink-700)">Walking in knowing what's coming, and passing.</span></li>
          </ul>
        </div>
      </div>
      <div style="display:flex;justify-content:center;margin-top:clamp(32px,4vw,44px)">
        <a href="#offer"><span class="btn btn--primary btn--xl">Save my seat</span></a>
      </div>
    </div>
  </section>

  <!-- SAMPLE LESSON -->
  <section id="sample" style="background:var(--uw-bg);border-top:1px solid var(--uw-border);padding:clamp(56px,7vw,88px) clamp(20px,5vw,48px)">
    <div style="max-width:620px;margin:0 auto;text-align:center">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px">Free sample lesson</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(26px,3.2vw,38px);letter-spacing:-0.02em;margin:0 0 16px;color:var(--uw-ink-900)">See how we teach before you enroll.</h2>
      <p style="font-size:16px;line-height:1.6;color:var(--uw-ink-600);margin:0 0 28px">See one of our 270+ Step 2 mentors teach a Step 1 topic. You'll see how every lesson weaves USMLE-style questions and content together, from the first minute.</p>
      <a href="https://wa.me/19192015700?text=Send%20me%20a%20free%20sample%20lesson%20of%20Step%201%20Mastery%20Course" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:10px;background:#25D366;color:#fff;font-weight:600;font-size:16px;line-height:1;padding:16px 28px;border-radius:var(--r-md);box-shadow:var(--shadow-sm)">
        <svg width="19" height="19" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" style="flex:none"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38c1.45.79 3.08 1.21 4.79 1.21 5.46 0 9.91-4.45 9.91-9.91C21.95 6.45 17.5 2 12.04 2zm0 18.15c-1.52 0-3.01-.41-4.31-1.18l-.31-.18-3.12.82.83-3.04-.2-.31a8.21 8.21 0 0 1-1.26-4.35c0-4.54 3.7-8.23 8.24-8.23 4.54 0 8.23 3.69 8.23 8.23 0 4.54-3.69 8.24-8.23 8.24zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81-.23-.08-.39-.12-.56.12-.16.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.12-1.05-.39-1.99-1.23-.74-.66-1.23-1.47-1.38-1.72-.14-.25-.01-.38.11-.51.11-.11.25-.29.37-.43.12-.14.16-.25.25-.41.08-.17.04-.31-.02-.43-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.42-.14-.01-.31-.01-.48-.01-.16 0-.43.06-.66.31-.23.25-.86.85-.86 2.07 0 1.22.89 2.4 1.01 2.56.12.17 1.75 2.67 4.23 3.74.59.26 1.05.41 1.41.52.59.19 1.13.16 1.56.1.48-.07 1.47-.6 1.67-1.18.21-.58.21-1.07.14-1.18-.06-.1-.22-.16-.47-.28z"></path></svg>
        Request a free sample lesson
      </a>
      <div style="font-size:13px;color:var(--uw-ink-500);margin-top:12px">We'll send it to you on WhatsApp.</div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" style="background:var(--uw-bg);border-top:1px solid var(--uw-border);padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px)">
    <div style="max-width:840px;margin:0 auto">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px;text-align:center">Questions, answered</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.4vw,44px);letter-spacing:-0.02em;margin:0 0 clamp(34px,4vw,52px);color:var(--uw-ink-900);text-align:center">Frequently asked questions</h2>

      <div style="margin-bottom:34px">
        <div style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500);margin-bottom:13px">Fit</div>
        <div style="display:flex;flex-direction:column;gap:10px">
          <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
            <button type="button" class="cc-faq-btn is-open" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
              <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">I'm still in med school. Is this for me?</span>
              <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">&ndash;</span>
            </button>
            <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch">Yes. The program is built around the syllabus, not your stage. Med students and graduates are both in the cohort.</div>
          </div>
          <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
            <button type="button" class="cc-faq-btn" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
              <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">I'm an IMG. Will the session times work for me?</span>
              <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
            </button>
            <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">Yes. Sessions are scheduled for a global IMG audience, and recordings are in your portal the same day.</div>
          </div>
          <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
            <button type="button" class="cc-faq-btn" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
              <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">My basics are weak. Can I keep up?</span>
              <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
            </button>
            <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">Yes. Every foundational concept is taught from the ground up, so weak basics get stronger before we layer the high-yield on top.</div>
          </div>
          <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
            <button type="button" class="cc-faq-btn" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
              <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">I already use First Aid and UWorld. Will this fit?</span>
              <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
            </button>
            <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">Yes. This program is the structured walkthrough that ties them together for the new exam. UWorld and First Aid are tools. This is the system that uses them in the right order.</div>
          </div>
          <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
            <button type="button" class="cc-faq-btn" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
              <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">Will this help me prepare for the CBSE?</span>
              <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
            </button>
            <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">Yes. The NBME builds the CBSE from the same basic science content as Step 1, so there's a big overlap. If your school requires a CBSE pass before you can sit Step 1, you're preparing for both exams at once.</div>
          </div>
        </div>
      </div>

      <div style="margin-bottom:34px">
        <div style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500);margin-bottom:13px">Format and access</div>
        <div style="display:flex;flex-direction:column;gap:10px">
          <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
            <button type="button" class="cc-faq-btn" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
              <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">Is this live or recorded?</span>
              <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
            </button>
            <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">Both. It's 111 live sessions on Zoom, Monday through Thursday, where you can ask questions in real time. Every session is recorded and in your portal the same day.</div>
          </div>
          <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
            <button type="button" class="cc-faq-btn" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
              <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">What if I miss sessions because of rotations or work?</span>
              <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
            </button>
            <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">Every session is recorded and uploaded to your portal the same day. The 6-month length is designed so life can happen.</div>
          </div>
          <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
            <button type="button" class="cc-faq-btn" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
              <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">How is this different from your 7-day crash course?</span>
              <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
            </button>
            <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">The crash course is a high-yield sprint right before your exam. USMLE Step 1 Mastery is the full 6-month foundation that walks you through every page of First Aid, from the basics up.</div>
          </div>
        </div>
      </div>

      <div style="margin-bottom:34px">
        <div style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500);margin-bottom:13px">The new Step 1</div>
        <div style="display:flex;flex-direction:column;gap:10px">
          <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
            <button type="button" class="cc-faq-btn" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
              <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">What actually changed on the new Step 1?</span>
              <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
            </button>
            <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">Longer chart and SOAP-style stems, a surge in ethics and communication, biostats woven into clinical questions, immunology and micro weighted higher while pure biochem recall is lower, and pathophysiology over trivia.</div>
          </div>
          <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
            <button type="button" class="cc-faq-btn" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
              <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">Does this cover the nutrition update?</span>
              <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
            </button>
            <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">Yes. The nutrition update is fully integrated into the course, so you get focused time on it instead of a few slides.</div>
          </div>
        </div>
      </div>

      <div style="margin-bottom:34px">
        <div style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500);margin-bottom:13px">Instructors and guarantee</div>
        <div style="display:flex;flex-direction:column;gap:10px">
          <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
            <button type="button" class="cc-faq-btn" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
              <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">Who teaches this?</span>
              <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
            </button>
            <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">The program is led by Dr. Manik Madaan (260 on Step 1, 271 on Step 2). The live sessions are taught by his hand-picked team, and every instructor scored 270+ on Step 2, passed Step 1 on their first attempt, and sat the most recent USMLE.</div>
          </div>
          <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
            <button type="button" class="cc-faq-btn" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
              <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">What happens if I don't pass?</span>
              <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
            </button>
            <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">You get your money back. Send us your score report and we refund you in full.</div>
          </div>
          <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
            <button type="button" class="cc-faq-btn" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
              <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">How does enrollment work?</span>
              <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
            </button>
            <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">Reserve your spot today with a $99 deposit. The course is normally $3,499, and your discounted tuition is $899. It also includes a 1-year subscription to our 3,800-question Step 1 High-Yield QBank, 4 self-assessments, and our comprehensive notes.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- URGENCY -->
  <section style="background:var(--uw-blue-800);color:#fff;position:relative;overflow:hidden;padding:clamp(56px,7vw,88px) clamp(20px,5vw,48px)">
    <div class="dot-tex" style="position:absolute;inset:0;opacity:.6"></div>
    <div style="position:relative;z-index:1;max-width:760px;margin:0 auto;text-align:center">
      <p style="font-family:var(--font-display);font-weight:400;font-size:clamp(22px,2.7vw,32px);line-height:1.4;letter-spacing:-0.015em;margin:0">You can spend six more months on resources built for an exam that no longer exists. Or you can spend those same six months walking through <span style="font-style:italic;color:var(--uw-blue-100)">the real new syllabus,</span> with doctors who just sat it.</p>
      <div style="display:flex;flex-wrap:wrap;justify-content:center;align-items:center;gap:14px;margin-top:clamp(28px,3.5vw,40px)">
        <a href="#offer"><span class="btn btn--primary btn--xl">Enroll Now</span></a>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" style="background:var(--uw-surface);padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px);border-top:1px solid var(--uw-border)">
    <div class="cc-contact" style="max-width:1080px;margin:0 auto;display:grid;grid-template-columns:.9fr 1.1fr;gap:clamp(32px,5vw,64px);align-items:start">
      <div>
        <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px">Contact</div>
        <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(26px,3.2vw,40px);letter-spacing:-0.02em;margin:0 0 14px;color:var(--uw-ink-900)">Not sure what the right next step is?</h2>
        <p style="font-size:15.5px;line-height:1.6;color:var(--uw-ink-600);max-width:42ch;margin:0 0 8px">Speak directly with our team and get clear guidance on your exams, applications, or match strategy.</p>
        <p style="font-size:15.5px;line-height:1.6;color:var(--uw-ink-600);max-width:42ch;margin:0 0 24px">Prefer email? Send us a message.</p>
        <a href="https://wa.me/19192015700" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:10px;background:#25D366;color:#fff;font-weight:600;font-size:15px;padding:13px 22px;border-radius:var(--r-md);box-shadow:var(--shadow-sm)">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38c1.45.79 3.08 1.21 4.79 1.21 5.46 0 9.91-4.45 9.91-9.91C21.95 6.45 17.5 2 12.04 2zm0 18.15c-1.52 0-3.01-.41-4.31-1.18l-.31-.18-3.12.82.83-3.04-.2-.31a8.21 8.21 0 0 1-1.26-4.35c0-4.54 3.7-8.23 8.24-8.23 4.54 0 8.23 3.69 8.23 8.23 0 4.54-3.69 8.24-8.23 8.24zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81-.23-.08-.39-.12-.56.12-.16.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.12-1.05-.39-1.99-1.23-.74-.66-1.23-1.47-1.38-1.72-.14-.25-.01-.38.11-.51.11-.11.25-.29.37-.43.12-.14.16-.25.25-.41.08-.17.04-.31-.02-.43-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.42-.14-.01-.31-.01-.48-.01-.16 0-.43.06-.66.31-.23.25-.86.85-.86 2.07 0 1.22.89 2.4 1.01 2.56.12.17 1.75 2.67 4.23 3.74.59.26 1.05.41 1.41.52.59.19 1.13.16 1.56.1.48-.07 1.47-.6 1.67-1.18.21-.58.21-1.07.14-1.18-.06-.1-.22-.16-.47-.28z"></path></svg>
          Chat on WhatsApp
        </a>
      </div>
      <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:clamp(24px,4vw,32px)">
        <div id="ccSent" style="display:none">
          <div style="display:flex;flex-direction:column;align-items:center;text-align:center;gap:14px;padding:24px 0">
            <span style="width:52px;height:52px;border-radius:50%;background:var(--uw-success-50);display:grid;place-items:center"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"></path></svg></span>
            <div><div style="font-family:var(--font-display);font-size:22px;color:var(--uw-ink-900)">Message sent.</div><p style="margin:6px 0 0;font-size:14px;color:var(--uw-ink-600)">Our team will get back to you shortly.</p></div>
          </div>
        </div>
        <div id="ccFormWrap">
          <form id="ccContactForm" novalidate style="display:flex;flex-direction:column;gap:16px">
            <div class="cc-formrow" style="display:grid;grid-template-columns:1fr 1fr;gap:16px">
              <label style="display:flex;flex-direction:column;gap:6px;font-size:13px;color:var(--uw-ink-700);font-weight:500">Full name<input name="name" required maxlength="200" type="text" placeholder="Your name" style="font-family:var(--font-sans);font-size:14px;padding:11px 13px;border:1px solid var(--uw-border-strong);border-radius:var(--r-md);background:var(--uw-surface);color:var(--uw-ink-900);outline:none" class="ccx-f1"></label>
              <label style="display:flex;flex-direction:column;gap:6px;font-size:13px;color:var(--uw-ink-700);font-weight:500">Email<input name="email" required maxlength="200" type="email" placeholder="you@email.com" style="font-family:var(--font-sans);font-size:14px;padding:11px 13px;border:1px solid var(--uw-border-strong);border-radius:var(--r-md);background:var(--uw-surface);color:var(--uw-ink-900);outline:none" class="ccx-f1"></label>
            </div>
            <label style="display:flex;flex-direction:column;gap:6px;font-size:13px;color:var(--uw-ink-700);font-weight:500">Subject<input name="subject" maxlength="200" type="text" placeholder="What's this about?" style="font-family:var(--font-sans);font-size:14px;padding:11px 13px;border:1px solid var(--uw-border-strong);border-radius:var(--r-md);background:var(--uw-surface);color:var(--uw-ink-900);outline:none" class="ccx-f1"></label>
            <label style="display:flex;flex-direction:column;gap:6px;font-size:13px;color:var(--uw-ink-700);font-weight:500">Message<textarea name="message" required maxlength="5000" rows="4" placeholder="Tell us where you are in your prep…" style="font-family:var(--font-sans);font-size:14px;padding:11px 13px;border:1px solid var(--uw-border-strong);border-radius:var(--r-md);background:var(--uw-surface);color:var(--uw-ink-900);outline:none;resize:vertical" class="ccx-f1"></textarea></label>
            <!-- Honeypot: keep hidden and empty. Do not remove. -->
            <div style="position:absolute;left:-9999px" aria-hidden="true"><label>Leave this empty<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
            <!-- Cloudflare Turnstile — replace data-sitekey with your real site key (or set TURNSTILE_SITE_KEY env var). -->
            <div class="cf-turnstile" data-sitekey="<?php echo htmlspecialchars(getenv('TURNSTILE_SITE_KEY') ?: '0x4AAAAAAD6jImzHI3FyAiUO', ENT_QUOTES); ?>"></div>
            <button type="submit" style="all:unset;box-sizing:border-box;text-align:center;background:var(--uw-red-500);color:#fff;font-weight:500;font-size:15px;padding:14px;border-radius:var(--r-md);cursor:pointer;transition:background var(--dur-fast)" class="ccx-h2">Send message</button>
            <p id="ccError" role="status" aria-live="polite" style="display:none;margin:0;font-size:13.5px;color:var(--uw-red-600,#c0392b)"></p>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- STICKY MOBILE CTA BAR -->
  <div class="cc-mobilebar" id="ccBar" style="position:fixed;left:0;right:0;bottom:0;z-index:50;align-items:center;justify-content:space-between;gap:14px;padding:10px 16px calc(10px + env(safe-area-inset-bottom,0px));background:rgba(255,255,255,.94);backdrop-filter:blur(14px);-webkit-backdrop-filter:blur(14px);border-top:1px solid var(--uw-border);box-shadow:0 -8px 26px rgba(15,18,51,.12)">
    <div style="line-height:1.12">
      <div style="display:flex;align-items:baseline;gap:8px">
        <s style="font-size:14px;color:var(--uw-ink-400);text-decoration-thickness:1.5px">$3,499</s>
        <span style="font-family:var(--font-display);font-size:26px;font-weight:600;color:var(--uw-ink-900)">$899</span>
        <span style="font-size:11px;font-family:var(--font-mono);letter-spacing:.04em;color:var(--uw-success-700);background:var(--uw-success-50);padding:2px 7px;border-radius:999px">$99 deposit</span>
      </div>
      <div style="font-size:11.5px;color:var(--uw-ink-500);margin-top:1px">Full tuition $899 · pass guarantee</div>
    </div>
    <a href="#offer" style="flex:none"><span class="btn btn--primary btn--lg">Enroll Now</span></a>
  </div>

</main>
<!-- Video review lightbox — the student reviews play here, on the page. -->
<div id="ccVideoModal" class="cc-video-modal" hidden>
  <div class="cc-video-modal__backdrop" data-video-close></div>
  <div class="cc-video-modal__dialog" role="dialog" aria-modal="true" aria-label="Student video review">
    <button type="button" class="cc-video-modal__close" data-video-close aria-label="Close video">&times;</button>
    <div class="cc-video-modal__frame"></div>
  </div>
</div>
<script>
(function () {
  // The student review thumbnails are real links to youtube.com, so clicking one
  // used to leave the page and open a new tab. Play them in the lightbox instead.
  // The href stays put, so cmd/ctrl/middle-click and no-JS visitors still get
  // the YouTube page as before.
  var modal = document.getElementById('ccVideoModal');
  var frame = modal ? modal.querySelector('.cc-video-modal__frame') : null;
  if (!modal || !frame) return;

  // Handles /watch?v=ID, /shorts/ID, /embed/ID, /live/ID and youtu.be/ID.
  function videoId(href) {
    var m = /[?&]v=([\w-]{6,})/.exec(href) ||
            /(?:youtu\.be|\/shorts|\/embed|\/live)\/([\w-]{6,})/.exec(href);
    return m ? m[1] : null;
  }

  function openVideo(id, portrait) {
    // referrerpolicy is required: the server sends Referrer-Policy: same-origin,
    // which strips the Referer on cross-origin requests and makes YouTube fail
    // with error 153.
    frame.innerHTML = '<iframe src="https://www.youtube-nocookie.com/embed/' + id +
      '?autoplay=1&rel=0" title="Student video review" referrerpolicy="strict-origin-when-cross-origin"' +
      ' allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>';
    modal.classList.toggle('cc-video-modal--portrait', !!portrait);
    modal.hidden = false;
    document.body.style.overflow = 'hidden';
  }

  function closeVideo() {
    frame.innerHTML = '';
    modal.hidden = true;
    document.body.style.overflow = '';
  }

  document.querySelectorAll('.cc-videos a[data-video]').forEach(function (link) {
    link.addEventListener('click', function (e) {
      // Leave modified clicks alone so "open in new tab" keeps working.
      if (e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) return;
      var id = videoId(link.getAttribute('href') || '');
      if (!id) return;
      e.preventDefault();
      openVideo(id, link.getAttribute('data-video') === 'short');
    });
  });

  modal.addEventListener('click', function (e) {
    if (e.target.hasAttribute('data-video-close')) closeVideo();
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && !modal.hidden) closeVideo();
  });
})();
</script>
<script>
(function () {
  // FAQ accordion — one open at a time, +/– sign
  var btns = document.querySelectorAll('.cc-faq-btn');
  btns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var wasOpen = btn.classList.contains('is-open');
      btns.forEach(function (b) {
        b.classList.remove('is-open');
        b.querySelector('.cc-faq-sign').innerHTML = '+';
        var a = b.parentElement.querySelector('.cc-faq-a');
        if (a) a.style.display = 'none';
      });
      if (!wasOpen) {
        btn.classList.add('is-open');
        btn.querySelector('.cc-faq-sign').innerHTML = '–';
        var ans = btn.parentElement.querySelector('.cc-faq-a');
        if (ans) ans.style.display = '';
      }
    });
  });
  // Contact form — submit to WiseCRM intake with Turnstile + honeypot.
  var form = document.getElementById('ccContactForm');
  if (form) form.addEventListener('submit', function (e) {
    e.preventDefault();
    var errEl = document.getElementById('ccError');
    var btn = form.querySelector('[type="submit"]');
    function fail(msg) { if (errEl) { errEl.textContent = msg; errEl.style.display = ''; } }
    if (errEl) errEl.style.display = 'none';

    var tokenEl = form.querySelector('[name="cf-turnstile-response"]');
    var payload = {
      name: (form.querySelector('[name="name"]') || {}).value || '',
      email: (form.querySelector('[name="email"]') || {}).value || '',
      subject: (form.querySelector('[name="subject"]') || {}).value || '',
      message: (form.querySelector('[name="message"]') || {}).value || '',
      website: (form.querySelector('[name="website"]') || {}).value || '',
      source_page: window.location.href,
      'cf-turnstile-response': tokenEl ? tokenEl.value : ''
    };
    if (!payload.name || !payload.email || !payload.message) {
      fail('Please add your name, email, and a message.');
      return;
    }
    if (btn) btn.disabled = true;
    fetch('https://team.manikmadaan.com/api/web-form/submit', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload)
    })
      .then(function (r) { return r.json().then(function (j) { return { ok: r.ok, j: j }; }); })
      .then(function (res) {
        if (res.ok && res.j.success) {
          document.getElementById('ccFormWrap').style.display = 'none';
          document.getElementById('ccSent').style.display = '';
        } else {
          fail((res.j && res.j.error) || 'Something went wrong. Please try again.');
        }
      })
      .catch(function () { fail('Network error. Please try again.'); })
      .finally(function () { if (btn) btn.disabled = false; });
  });
})();
</script>
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

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
          <a href="#curriculum">Curriculum</a>
          <a href="#why">What's Different</a>
          <a href="#compare">How We Compare</a>
          <a href="#reviews">Reviews</a>
        </div>
        <div class="msp-foot__nav-group">
          <span class="msp-foot__nav-label">&nbsp;</span>
          <a href="#offer">Pricing &amp; Guarantee</a>
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

<?php $whatsappMessage = 'I have a question about the USMLE Step 1 Mastery course.'; include $_SERVER['DOCUMENT_ROOT'] . '/partials/whatsapp-float.php'; ?>

</body>
</html>
