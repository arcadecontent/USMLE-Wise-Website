<?php
$styles_v = @filemtime($_SERVER['DOCUMENT_ROOT'] . '/assets/usmle-design-system/styles.css') ?: '1';
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- Google tag (gtag.js), GA4 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1MMVZ5WKY2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-1MMVZ5WKY2');
</script>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/meta-pixel.php'; ?>
<title>Step 1 Ultra High-Yield Live Crash Course | USMLE Wise</title>
<meta name="description" content="The live USMLE Step 1 Ultra High-Yield Crash Course: 7 days, 70 live hours on Zoom, rebuilt for the new Step 1 syllabus and taught by 270+ Step 2 scorers. Pass guarantee." />
<!-- Standalone ad/campaign landing page, kept out of the sitemap and out of the
     index so it doesn't compete with the self-paced crash course pages in search. -->
<meta name="robots" content="noindex, follow" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Step 1 Ultra High-Yield Live Crash Course | USMLE Wise" />
<meta property="og:description" content="Pass Step 1 in just 7 days of live high-yield training, or your money back." />
<meta property="og:url" content="https://usmlewise.com/step-1-live-crash-course" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@300;400;500;600;700&family=Source+Serif+4:ital,opsz,wght@0,8..60,400;0,8..60,600;1,8..60,400&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" media="print" onload="this.media='all'" />
<noscript><link href="https://fonts.googleapis.com/css2?family=Geist:wght@300;400;500;600;700&family=Source+Serif+4:ital,opsz,wght@0,8..60,400;0,8..60,600;1,8..60,400&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" /></noscript>
<link rel="preload" as="image" href="/assets/step1-crash-course/step1-live-crash-course-image.jpg" fetchpriority="high" />
<link rel="icon" type="image/svg+xml" href="/assets/usmle-design-system/assets/emblem.svg" />
<link rel="stylesheet" href="/assets/usmle-design-system/styles.css?v=<?php echo $styles_v; ?>" />
<!-- No match.css and no lucide.js on this page: the design uses its own inline
     nav and footer rather than the site-wide .msp-* shell, and every icon in it
     is already an inline SVG. -->
<script src="/js/uw-track.js?v=<?php echo @filemtime($_SERVER['DOCUMENT_ROOT'] . '/js/uw-track.js') ?: '1'; ?>" defer></script>
<style>
/* ===== Verbatim from the design's <helmet> block ===== */
  .cc { font-family: var(--font-sans); color: var(--uw-ink-800); background: var(--uw-surface); -webkit-font-smoothing: antialiased; }
  .cc em { font-style: italic; color: var(--uw-red-500); }
  .cc a { color: inherit; text-decoration: none; }
  .cc img { max-width: 100%; }
  .cc ::selection { background: var(--uw-blue-100); }
  .cc .dot-tex { background-image: radial-gradient(rgba(255,255,255,.10) 1px, transparent 1px); background-size: 18px 18px; }
  .cc { overflow-x: clip; }
  @media (max-width: 1024px) {
    .cc-results { grid-template-columns: repeat(2,1fr) !important; }
  }
  @media (max-width: 880px) {
    .cc-hero, .cc-story, .cc-contact, .cc-2, .cc-curric, .cc-duality { grid-template-columns: 1fr !important; }
    .cc-3 { grid-template-columns: repeat(2,1fr) !important; }
    .cc-wa { columns: 2 !important; }
    .cc-nav-links { display: none !important; }
    .cc-story-photo { position: static !important; max-width: 420px; }
  }
  @media (max-width: 560px) {
    .cc-3 { grid-template-columns: 1fr !important; }
    .cc-results { grid-template-columns: repeat(2,1fr) !important; }
    .cc-wa { columns: 1 !important; }
    .cc-formrow { grid-template-columns: 1fr !important; }
    .cc-hero { gap: 0 !important; }
    .cc-h1 { font-size: min(32px, 7.4vw) !important; line-height: 1.2 !important; letter-spacing: -0.02em !important; max-width: 100% !important; word-spacing: normal; }
    .cc-hero > p { font-size: 16.5px !important; margin-top: 16px !important; }
    .cc-hero-img { margin-top: 24px !important; }
    .cc-hero-img > div { width: 80px !important; height: 80px !important; top: -14px !important; right: -8px !important; }
    .cc-nav { padding-top: 10px !important; padding-bottom: 10px !important; }
    .cc-date-long { display: none !important; }
    .cc-date-short { display: inline !important; }
    .cc-hide-sm { display: none !important; }
    .cc-logo { height: 26px !important; }
    .cc-eyebrow { font-size: 11px !important; letter-spacing: .08em !important; margin-bottom: 10px !important; }
    .cc-seat { text-align: center !important; }
    .cc-meta { flex-wrap: nowrap !important; padding: 10px 14px !important; font-size: 13px !important; gap: 10px !important; margin: 20px 0 16px !important; }
    .cc-meta svg { width: 15px !important; height: 15px !important; }
    .cc-meta > span { gap: 6px !important; }
    .cc-chip { white-space: normal !important; }
    .cc-day { grid-template-columns: 1fr !important; padding: 16px !important; gap: 12px !important; }
    .cc-day > div:first-child { flex-direction: row !important; align-items: baseline !important; gap: 10px !important; }
  }
  .cc-offer-cta button, .cc-offer-cta > * { width: 100% !important; }
  .cc-promo input::placeholder { color: rgba(255,255,255,.65); text-transform: none; letter-spacing: 0; }
  @media (max-width: 560px) {
    .cc-offer { padding-top: 18px !important; padding-left: 14px !important; padding-right: 14px !important; scroll-margin-top: 56px !important; }
    .cc-offer-eyebrow { margin-bottom: 6px !important; font-size: 11px !important; }
    .cc-offer-h { font-size: 26px !important; line-height: 1.2 !important; margin-bottom: 14px !important; }
    .cc-offer-list { padding: 2px 16px !important; }
    .cc-row { padding: 12px 0 !important; gap: 12px !important; }
    .cc-row > div > div:first-child { font-size: 14.5px !important; }
    .cc-offer-pay { padding: 16px 16px 16px !important; }
    .cc-offer-pay > div { gap: 10px !important; }
    .cc-offer-price { margin-bottom: 2px !important; }
    .cc-offer-price b { font-size: 44px !important; }
    .cc-offer-wa a { height: 48px !important; font-size: 15px !important; }
    .cc-promo { margin-top: 0 !important; height: 44px !important; }
    .cc-guar { margin-top: 14px !important; padding: 18px 16px 20px !important; }
    .cc-guar > div:first-child { margin-bottom: 14px !important; }
  }
  @media (min-width: 561px) {
    .cc-hero { padding-top: clamp(14px,2.5vh,48px) !important; }
    .cc-hero > p { margin-top: 14px !important; }
    .cc-hero-img { margin-top: 20px !important; }
    .cc-meta { margin-top: 16px !important; margin-bottom: 12px !important; }
  }
  @keyframes cc-marquee { from { transform: translateX(0); } to { transform: translateX(-50%); } }
  .cc-marquee-track { display: flex; gap: 18px; width: max-content; animation: cc-marquee 60s linear infinite; animation-play-state: paused; }
  .cc-marquee-mask.cc-run .cc-marquee-track { animation-play-state: running; }
  .cc-marquee-mask.cc-run:hover .cc-marquee-track { animation-play-state: paused; }
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
  @media (max-width: 820px) { .cc-videos { grid-template-columns: 1fr !important; } .cc-short-wrap { display: block !important; width: 100%; max-width: 340px; margin: 0 auto; } }
  .cc-cmp-cards { display: none; }
  @media (max-width: 760px) {
    .cc-cmp-table { display: none !important; }
    .cc-cmp-cards { display: flex !important; }
  }

/* ===== The runtime's style-hover / style-focus attributes, as real CSS ===== */
.ccx-h1:hover { background:#1EBE5A }
.ccx-h2:hover { transform:translateY(-3px);box-shadow:var(--shadow-md) }
.ccx-h3:hover { background:var(--uw-blue-50) }
.ccx-h4:hover { background:var(--uw-ink-75) }
.ccx-h5:hover { background:var(--uw-red-600) }
.ccx-f1:focus { border-color:var(--uw-blue-400);box-shadow:0 0 0 3px var(--uw-blue-100) }
</style>
</head>
<body>
<div class="cc">

  <!-- nav -->
  <nav class="cc-nav" style="display:flex;justify-content:space-between;align-items:center;gap:16px;padding:14px clamp(20px,5vw,48px);border-bottom:1px solid var(--uw-border);position:sticky;top:0;background:rgba(255,255,255,.82);backdrop-filter:blur(10px);z-index:40">
    <a href="#top" style="display:flex;align-items:center"><img src="/assets/usmle-design-system/assets/Logo-Horizontal.svg" alt="USMLE Wise" class="cc-logo" style="height:30px;display:block"></a>
    <div class="cc-nav-links" style="display:flex;gap:2px;align-items:center;font-size:13.5px;color:var(--uw-ink-700)">
      <a href="#curriculum" style="padding:8px 12px;border-radius:6px;white-space:nowrap">Curriculum</a>
      <a href="#why" style="padding:8px 12px;border-radius:6px;white-space:nowrap">Why it works</a>
      <a href="#compare" style="padding:8px 12px;border-radius:6px">Compare</a>
      <a href="#faq" style="padding:8px 12px;border-radius:6px">FAQ</a>
    </div>
    <div style="display:flex;align-items:center;gap:10px;flex:none">
      <a class="ccx-h1" href="#contact" style="display:inline-flex;align-items:center;gap:7px;height:36px;padding:0 14px;border-radius:999px;background:#25D366;color:#fff;font-size:13px;font-weight:600;white-space:nowrap;box-shadow:var(--shadow-xs)"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="flex:none"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38c1.45.79 3.08 1.21 4.79 1.21 5.46 0 9.91-4.45 9.91-9.91C21.95 6.45 17.5 2 12.04 2zm0 18.150c-1.52 0-3.01-.41-4.31-1.18l-.31-.18-3.12.82.83-3.04-.2-.31a8.21 8.21 0 0 1-1.26-4.35c0-4.54 3.7-8.23 8.24-8.23 4.54 0 8.23 3.69 8.23 8.23 0 4.54-3.69 8.24-8.23 8.240zm4.52-6.160c-.25-.12-1.47-.72-1.690-.81-.23-.08-.39-.12-.56.12-.16.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.12-1.05-.39-1.990-1.23-.74-.66-1.230-1.47-1.38-1.72-.14-.25-.01-.38.11-.51.11-.11.25-.29.37-.43.12-.14.16-.25.25-.41.08-.17.04-.31-.02-.43-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.42-.14-.01-.31-.01-.48-.01-.16 0-.43.06-.66.31-.23.25-.86.85-.86 2.07 0 1.22.89 2.4 1.01 2.56.12.17 1.75 2.67 4.23 3.74.59.26 1.05.41 1.41.52.59.19 1.13.16 1.56.1.48-.07 1.47-.6 1.67-1.180.21-.58.21-1.07.14-1.18-.06-.1-.22-.16-.47-.28z"></path></svg>Request free preview</a>
      <a href="#offer" class="cc-hide-sm"><span class="btn btn--primary btn--sm">Enroll Now</span></a>
    </div>
  </nav>

  <!-- HERO -->
  

  <!-- RESULTS BAR -->
  <header id="top" style="position:relative;overflow:hidden;background:radial-gradient(1000px 520px at 88% -8%, var(--uw-blue-50), transparent), var(--uw-surface)">
    <section class="cc-hero" style="max-width:920px;margin:0 auto;display:flex;flex-direction:column;align-items:center;text-align:center;padding:clamp(44px,6vw,84px) clamp(20px,5vw,48px)">
      

      <div class="cc-eyebrow" style="font-family:var(--font-mono);font-size:12px;font-weight:500;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-blue-500);margin-bottom:14px;white-space:nowrap">USMLE Step&nbsp;1 7-Day High-Yield Course</div>
      <h1 class="cc-h1" style="font-family:var(--font-display);font-weight:400;font-size:clamp(34px,4.6vw,58px);line-height:1.14;letter-spacing:-0.015em;margin:0 auto;color:var(--uw-ink-900);max-width:13em;text-wrap:balance"><span style="display:block;white-space:nowrap">Pass Step&nbsp;1 in just <em style="color:var(--uw-red-500);font-style:italic;font-weight:400">7&nbsp;days</em></span><span style="display:block;white-space:nowrap">of live high&#8209;yield training,</span><span style="display:block;white-space:nowrap;color:var(--uw-blue-500)">or your money back.</span></h1>

      <p style="font-size:clamp(17px,1.55vw,20px);line-height:1.6;color:var(--uw-ink-600);max-width:58ch;margin:22px auto 0">You'll learn only what the USMLE tests, from doctors who scored 270+ on Step&nbsp;2, in a course rebuilt for the new Step&nbsp;1 syllabus. Finish the course, and if you don't pass, you get a full refund.</p>

      <!-- VSL video -->
      <div class="cc-hero-img" style="position:relative;width:100%;max-width:720px;margin:clamp(34px,4vw,48px) auto 0">
        <a href="#offer" style="display:block;position:relative;border-radius:var(--r-xl);overflow:hidden;box-shadow:var(--shadow-xl);aspect-ratio:16/9;border:1px solid var(--uw-border)">
          <img src="/assets/step1-crash-course/step1-live-crash-course-image.jpg" alt="USMLE Step 1 Live Ultra High-Yield Crash Course" style="width:100%;height:100%;object-fit:cover;display:block">
          <span style="position:absolute;inset:0;background:linear-gradient(180deg,rgba(15,18,51,0) 45%,rgba(15,18,51,.4))"></span>
        </a>
        <div style="position:absolute;right:-12px;top:-18px;width:94px;height:94px;border-radius:50%;background:var(--uw-surface);box-shadow:var(--shadow-lg);display:grid;place-items:center;text-align:center;border:1px solid var(--uw-border);transform:rotate(8deg)">
          <div style="line-height:1.1">
            <div style="font-family:var(--font-display);font-weight:600;font-size:20px;color:var(--uw-red-500)">100%</div>
            <div style="font-size:9px;letter-spacing:.08em;text-transform:uppercase;font-family:var(--font-mono);color:var(--uw-ink-600)">Pass<br>guarantee</div>
          </div>
        </div>
      </div>

      <div class="cc-meta" style="display:inline-flex;align-items:center;justify-content:center;flex-wrap:wrap;gap:12px 20px;margin:clamp(32px,4vw,44px) 0 22px;padding:12px 24px;background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:999px;box-shadow:var(--shadow-sm);font-size:15px;color:var(--uw-ink-800)"><span style="display:inline-flex;align-items:center;gap:9px;white-space:nowrap"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-blue-500)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><rect x="3" y="4" width="18" height="18" rx="2"></rect><path d="M16 2v4"></path><path d="M8 2v4"></path><path d="M3 10h18"></path></svg><span class="cc-date-long">Sunday, Nov 1 → Saturday, Nov 7, 2026</span><span class="cc-date-short" style="display:none">Nov 1 – 7, 2026</span></span><span class="cc-meta-sep" style="width:1px;height:20px;background:var(--uw-border)"></span><span style="display:inline-flex;align-items:center;gap:9px;white-space:nowrap"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-blue-500)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"></path><rect x="2" y="6" width="14" height="12" rx="2"></rect></svg>Live on Zoom</span><span class="cc-meta-sep" style="width:1px;height:20px;background:var(--uw-border)"></span><span style="display:inline-flex;align-items:center;gap:9px;white-space:nowrap"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-blue-500)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>70 hours</span></div>

      <a href="#offer"><span class="btn btn--primary btn--xl">Enroll Now</span></a>
    </section>
  </header><section style="background:var(--uw-blue-700);color:#fff;position:relative;overflow:hidden">
    <div class="dot-tex" style="position:absolute;inset:0;opacity:.8"></div>
    <div class="cc-results" style="position:relative;z-index:1;max-width:1180px;margin:0 auto;padding:clamp(36px,4vw,52px) clamp(20px,5vw,48px);display:grid;grid-template-columns:repeat(4,1fr);gap:32px 24px">
      <div style="text-align:center"><div style="display:flex;justify-content:center;margin-bottom:12px"><span style="width:38px;height:38px;border-radius:11px;background:rgba(255,255,255,.1);display:grid;place-items:center"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-300)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path></svg></span></div><div style="font-family:var(--font-display);font-weight:600;font-size:clamp(28px,3vw,40px);line-height:1;color:var(--uw-success-300)" class="cc-stat-num" data-cu-to="99.3" data-cu-dec="1" data-cu-suf="%">99.3%</div><div style="font-size:12px;color:rgba(255,255,255,.7);margin-top:8px;line-height:1.4">Pass rate</div></div>
      <div style="text-align:center"><div style="display:flex;justify-content:center;margin-bottom:12px"><span style="width:38px;height:38px;border-radius:11px;background:rgba(255,255,255,.1);display:grid;place-items:center"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></span></div><div style="font-family:var(--font-display);font-weight:600;font-size:clamp(28px,3vw,40px);line-height:1" class="cc-stat-num" data-cu-to="17000" data-cu-comma="1" data-cu-suf="+">17,000+</div><div style="font-size:12px;color:rgba(255,255,255,.7);margin-top:8px;line-height:1.4">Students trained</div></div>
      <div style="text-align:center"><div style="display:flex;justify-content:center;margin-bottom:12px"><span style="width:38px;height:38px;border-radius:11px;background:rgba(255,255,255,.1);display:grid;place-items:center"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg></span></div><div style="font-family:var(--font-display);font-weight:600;font-size:clamp(28px,3vw,40px);line-height:1" class="cc-stat-num" data-cu-to="20" data-cu-to2="40" data-cu-sep="–">20–40</div><div style="font-size:12px;color:rgba(255,255,255,.7);margin-top:8px;line-height:1.4">Point jumps on practice NBMEs</div></div>
      <div style="text-align:center"><div style="display:flex;justify-content:center;margin-bottom:12px"><span style="width:38px;height:38px;border-radius:11px;background:rgba(255,255,255,.1);display:grid;place-items:center"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polyline></svg></span></div><div style="font-family:var(--font-display);font-weight:600;font-size:clamp(28px,3vw,40px);line-height:1" class="cc-stat-num" data-cu-to="2" data-cu-dec="1" data-cu-suf="x" data-cu-final="2x">2x</div><div style="font-size:12px;color:rgba(255,255,255,.7);margin-top:8px;line-height:1.4">Faster score gains vs. months of self-study</div></div>
    </div>
  </section>

  <!-- PROBLEM -->
  <section style="background:var(--uw-surface);padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px)">
    <div style="max-width:1080px;margin:0 auto">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px;text-align:center">The real problem</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,44px);line-height:1.1;letter-spacing:-0.02em;margin:0 auto 24px;color:var(--uw-ink-900);max-width:26ch;text-align:center">Every year, brilliant med students fail Step&nbsp;1, and it's usually not because they didn't work hard.</h2>
      
      <p style="max-width:64ch;margin:0 auto;font-size:17px;line-height:1.65;color:var(--uw-ink-600);text-align:center">They <strong style="color:var(--uw-ink-900);font-weight:600">grind through UWorld, memorize First Aid cover to cover,</strong> and <strong style="color:var(--uw-ink-900);font-weight:600">drown in Anki decks</strong> and random PDFs.&nbsp;Then test day comes. They <strong style="color:var(--uw-ink-900);font-weight:600">can't recall the facts</strong> they crammed for weeks. The <strong style="color:var(--uw-ink-900);font-weight:600">look-alike answer choices blur</strong> into each other. And <strong style="color:var(--uw-ink-900);font-weight:600">biostats and ethics</strong> quietly take the points they can't afford to lose.</p><p style="max-width:48ch;margin:18px auto 0;font-size:17px;line-height:1.6;color:var(--uw-ink-800);font-weight:500;text-align:center">So what's actually going wrong? Honestly, it usually comes down to <strong style="color:var(--uw-ink-900);font-weight:600">three things</strong>.</p>
      <div class="cc-3" style="display:grid;grid-template-columns:repeat(3,1fr);gap:18px;margin-top:40px">
        <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:24px">
          <div style="display:flex;align-items:center;gap:12px;margin-bottom:14px"><span style="width:38px;height:38px;border-radius:var(--r-md);background:var(--uw-red-50);color:var(--uw-red-500);display:grid;place-items:center"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span><span style="font-family:var(--font-display);font-size:26px;color:var(--uw-red-300);line-height:1">01</span></div>
          <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-700)">They've poured <strong style="color:var(--uw-ink-900);font-weight:600">hundreds of hours into low-yield material</strong> while <strong style="color:var(--uw-ink-900);font-weight:600">missing what the USMLE really tests</strong>.</p>
        </div>
        <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:24px">
          <div style="display:flex;align-items:center;gap:12px;margin-bottom:14px"><span style="width:38px;height:38px;border-radius:var(--r-md);background:var(--uw-red-50);color:var(--uw-red-500);display:grid;place-items:center"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg></span><span style="font-family:var(--font-display);font-size:26px;color:var(--uw-red-300);line-height:1">02</span></div>
          <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-700)">They've <strong style="color:var(--uw-ink-900);font-weight:600">memorized everything</strong> but <strong style="color:var(--uw-ink-900);font-weight:600">never learned the test-taking skills</strong> that help you rule out the wrong answers to reach the right ones in time.</p>
        </div>
        <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:24px">
          <div style="display:flex;align-items:center;gap:12px;margin-bottom:14px"><span style="width:38px;height:38px;border-radius:var(--r-md);background:var(--uw-red-50);color:var(--uw-red-500);display:grid;place-items:center"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 2v6h6"></path><path d="M21 12A9 9 0 0 0 6 5.3L3 8"></path><path d="M21 22v-6h-6"></path><path d="M3 12a9 9 0 0 0 15 6.7l3-2.7"></path></svg></span><span style="font-family:var(--font-display);font-size:26px;color:var(--uw-red-300);line-height:1">03</span></div>
          <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-700)">And the resources they're studying from were <strong style="color:var(--uw-ink-900);font-weight:600">built for the old Step 1</strong>, before the post-2022 surge in <strong style="color:var(--uw-ink-900);font-weight:600">ethics, nutrition,&nbsp;biostatistics</strong>, and the <strong style="color:var(--uw-ink-900);font-weight:600">longer second-order vignettes</strong> the current USMLE favors.</p>
        </div>
      </div>
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
        <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px">My story</div>
        <p style="font-family:var(--font-display);font-size:clamp(20px,2.2vw,26px);line-height:1.4;color:var(--uw-ink-900);margin:0 0 22px;letter-spacing:-0.01em">Dear future resident,</p>
        <div style="font-size:16.5px;line-height:1.6;color:var(--uw-ink-700);max-width:54ch">
          <p style="margin:0 0 20px">I'm Dr. Manik Madaan. I teach Step&nbsp;1 this way because <strong style="color:var(--uw-ink-900);font-weight:600">I had to learn it the hard way first.</strong></p>
          <p style="margin:0 0 20px">When I was preparing, the content was <strong style="color:var(--uw-ink-900);font-weight:600">completely overwhelming.</strong></p>
          <p style="margin:0 0 20px">Resource stacked on resource. Every one of them labeled “high-yield.” And <strong style="color:var(--uw-ink-900);font-weight:600">not one of them telling me what actually mattered.</strong></p>
          <p style="margin:0 0 20px">Then I sat all three USMLE exams, and <strong style="color:var(--uw-ink-900);font-weight:600">it hit me.</strong></p>
          <p style="font-family:var(--font-display);font-weight:600;font-size:clamp(21px,2.3vw,27px);line-height:1.28;letter-spacing:-0.01em;color:var(--uw-blue-700);margin:26px 0 24px;max-width:28ch">Only about 20% of what’s in the traditional resources actually moves the needle.</p>
          <p style="margin:0 0 20px"><strong style="color:var(--uw-ink-900);font-weight:600">The other 80% is outdated fluff.</strong> And all it does is slow you down.</p>
          <p style="margin:0 0 20px">Here’s why that matters so much.</p>
          <p style="margin:0 0 20px">Step&nbsp;1 hands you hard questions, with very little time to answer them.</p>
          <p style="margin:0 0 20px">So every minute you spend digging for some low-yield fact is <strong style="color:var(--uw-ink-900);font-weight:600">a minute you don’t have for the question right in front of you.</strong></p>
          <p style="margin:0 0 20px">So I built the ultimate resource I wish someone had handed me, <strong style="color: var(--uw-ink-900); font-weight: 600;">the USMLE Step&nbsp;1 Ultra High-Yield Crash Course.</strong></p>
          <p style="margin:0 0 20px"><strong style="color:var(--uw-ink-900);font-weight:600">Seven days.</strong> Only what the USMLE actually tests.</p>
          <p style="margin:0 0 20px">No low-yield noise to sort through, just <strong style="color:var(--uw-ink-900);font-weight:600">the 20% that gets you a confident pass.</strong></p>
          <p style="margin:0 0 20px"><strong style="color:var(--uw-ink-900);font-weight:600">Then I watched it work.</strong></p>
          <p style="margin:0 0 20px">Students who were sure a crash course couldn't be enough? <strong style="color:var(--uw-ink-900);font-weight:600">They passed.</strong></p>
          <p style="margin:0 0 20px">People who'd already failed once, and were terrified to sit again? <strong style="color:var(--uw-ink-900);font-weight:600">They passed too.</strong></p>
          <p style="margin:0 0 20px">And since Step&nbsp;1 is pass/fail, <strong style="color:var(--uw-ink-900);font-weight:600">a clean pass is the whole win.</strong></p>
          <p style="margin:0">Every week you save here goes straight into Step&nbsp;2, which is the exam programs actually rank you on.</p>
        </div>
        
        <div class="cc-seat" style="margin-top:28px"><a href="#offer"><span class="btn btn--primary btn--lg">Save my seat</span></a></div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS row 2 -->
  <section style="background:var(--uw-surface);padding:clamp(48px,6vw,80px) 0;border-top:1px solid var(--uw-border);overflow:hidden">
    <div style="max-width:1080px;margin:0 auto;padding:0 clamp(20px,5vw,48px) 38px;text-align:center">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px">From our students</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(26px,3.2vw,40px);letter-spacing:-0.02em;margin:0 auto 8px;color:var(--uw-ink-900);max-width:22ch">Hear what our students are saying.</h2>
    </div>
    <div class="cc-marquee-mask" style="position:relative;-webkit-mask-image:linear-gradient(90deg,transparent,#000 4%,#000 96%,transparent);mask-image:linear-gradient(90deg,transparent,#000 4%,#000 96%,transparent)">
        <div class="cc-marquee-track"><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t06.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t14.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t03.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t04.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t05.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t15.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t27.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t28.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t31.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t32.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t60.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t82.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t83.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t16.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t76.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t52.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t89.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t11.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t12.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t38.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t95.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t17.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t20.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t90.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t96.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t06.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t14.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t03.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t04.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t05.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t15.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t27.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t28.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t31.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t32.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t60.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t82.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t83.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t16.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t76.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t52.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t89.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t11.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t12.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t38.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t95.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t17.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t20.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t90.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div><div style="flex:0 0 auto;height:340px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t96.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" style="height:340px;width:auto;display:block"></div></div>
      </div>
  </section>

  <!-- WHY IT WORKS -->
  <section id="why" style="background:var(--uw-bg);padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px);border-top:1px solid var(--uw-border)">
    <div style="max-width:1180px;margin:0 auto">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px;text-align:center">Why this course works</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,44px);letter-spacing:-0.02em;margin:0 0 36px;color:var(--uw-ink-900);text-align:center">(when others don't)</h2>
      <div class="cc-3" style="display:grid;grid-template-columns:repeat(3,1fr);gap:18px">
        <div class="ccx-h2" style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;transition:transform var(--dur-med) var(--ease-out),box-shadow var(--dur-med)">
          <div style="width:42px;height:42px;background:var(--uw-blue-50);color:var(--uw-blue-500);border-radius:var(--r-md);display:grid;place-items:center;margin-bottom:16px"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg></div>
          <h4 style="margin:0 0 8px;font-size:16.5px;font-weight:600;color:var(--uw-ink-900)">7 live days, 70 hours, zero fluff.</h4>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--uw-ink-600)">Every session targets what the USMLE tests most. If it's not high-yield, it's not in.</p>
        </div>
        <div class="ccx-h2" style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;transition:transform var(--dur-med) var(--ease-out),box-shadow var(--dur-med)">
          <div style="width:42px;height:42px;background:var(--uw-blue-50);color:var(--uw-blue-500);border-radius:var(--r-md);display:grid;place-items:center;margin-bottom:16px"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 2v6h6"></path><path d="M21 12A9 9 0 0 0 6 5.3L3 8"></path><path d="M21 22v-6h-6"></path><path d="M3 12a9 9 0 0 0 15 6.7l3-2.7"></path></svg></div>
          <h4 style="margin:0 0 8px;font-size:16.5px;font-weight:600;color:var(--uw-ink-900)">Rebuilt for the new Step 1 syllabus.</h4>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--uw-ink-600)">We rebuilt it line by line for the latest Step 1 updates &amp; trends.</p>
        </div>
        <div class="ccx-h2" style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;transition:transform var(--dur-med) var(--ease-out),box-shadow var(--dur-med)">
          <div style="width:42px;height:42px;background:var(--uw-blue-50);color:var(--uw-blue-500);border-radius:var(--r-md);display:grid;place-items:center;margin-bottom:16px"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><path d="M12 17h.01"></path><circle cx="12" cy="12" r="10"></circle></svg></div>
          <h4 style="margin:0 0 8px;font-size:16.5px;font-weight:600;color:var(--uw-ink-900)">Question-powered teaching.</h4>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--uw-ink-600)">Integrated USMLE-style vignettes from minute one, so you train your knowledge and your test-taking at the same time.</p>
        </div>
        <div class="ccx-h2" style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;transition:transform var(--dur-med) var(--ease-out),box-shadow var(--dur-med)">
          <div style="width:42px;height:42px;background:var(--uw-blue-50);color:var(--uw-blue-500);border-radius:var(--r-md);display:grid;place-items:center;margin-bottom:16px"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg></div>
          <h4 style="margin:0 0 8px;font-size:16.5px;font-weight:600;color:var(--uw-ink-900)">The N+1 method.</h4>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--uw-ink-600)">We engineer retention, stacking each concept on the last so it sticks for good and bridges into Step 2.</p>
        </div>
        <div class="ccx-h2" style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;transition:transform var(--dur-med) var(--ease-out),box-shadow var(--dur-med)">
          <div style="width:42px;height:42px;background:var(--uw-blue-50);color:var(--uw-blue-500);border-radius:var(--r-md);display:grid;place-items:center;margin-bottom:16px"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg></div>
          <h4 style="margin:0 0 8px;font-size:16.5px;font-weight:600;color:var(--uw-ink-900)">Teachers who scored 270+ on Step 2.</h4>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--uw-ink-600)">You learn from doctors who beat this exam, sat it themselves, and reverse-engineered exactly how it's built.</p>
        </div>
        <div class="ccx-h2" style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;transition:transform var(--dur-med) var(--ease-out),box-shadow var(--dur-med)">
          <div style="width:42px;height:42px;background:var(--uw-blue-50);color:var(--uw-blue-500);border-radius:var(--r-md);display:grid;place-items:center;margin-bottom:16px"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polygon points="10 8 16 12 10 16 10 8"></polygon></svg></div>
          <h4 style="margin:0 0 8px;font-size:16.5px;font-weight:600;color:var(--uw-ink-900)">Live. Interactive. No black boxes.</h4>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--uw-ink-600)">Every doubt cleared, every question answered live. You stay locked in, accountable, and coached every day of the course.</p>
        </div>
      </div>
      <div style="margin-top:28px;text-align:center"><a href="#offer"><span class="btn btn--primary btn--lg">Enroll Now</span></a></div>
    </div>
  </section>

  <!-- STAGES -->
  <section style="background:var(--uw-surface);padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px);border-top:1px solid var(--uw-border)">
    <div style="max-width:1080px;margin:0 auto">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px;text-align:center">Fits any stage of prep</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,44px);letter-spacing:-0.02em;margin:0 auto 36px;color:var(--uw-ink-900);max-width:26ch;text-align:center">It fits any stage of prep, and the way you use it just shifts.</h2>
      <div class="cc-3" style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px">
        <div style="border-top:3px solid var(--uw-blue-500);background:var(--uw-bg);border-radius:0 0 var(--r-lg) var(--r-lg);padding:26px">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px"><span style="width:34px;height:34px;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-600);display:grid;place-items:center"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="3 6 9 3 15 6 21 3 21 18 15 21 9 18 3 21"></polygon><line x1="9" y1="3" x2="9" y2="18"></line><line x1="15" y1="6" x2="15" y2="21"></line></svg></span><span style="font-size:12px;font-family:var(--font-mono);letter-spacing:.06em;text-transform:uppercase;color:var(--uw-blue-600)">Early prep: your map</span></div>
          <p style="margin:0;font-size:14.5px;line-height:1.65;color:var(--uw-ink-700)">Use it as your map. You see what's high-yield from day one, so when you open UWorld, First Aid, or Anki, you know exactly where to focus and what to skip.</p>
        </div>
        <div style="border-top:3px solid var(--uw-blue-500);background:var(--uw-bg);border-radius:0 0 var(--r-lg) var(--r-lg);padding:26px">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px"><span style="width:34px;height:34px;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-600);display:grid;place-items:center"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle><line x1="20" y1="4" x2="8.12" y2="15.88"></line><line x1="14.47" y1="14.48" x2="20" y2="20"></line><line x1="8.12" y1="8.12" x2="12" y2="12"></line></svg></span><span style="font-size:12px;font-family:var(--font-mono);letter-spacing:.06em;text-transform:uppercase;color:var(--uw-blue-600)">Mid-prep: your cut</span></div>
          <p style="margin:0;font-size:14.5px;line-height:1.65;color:var(--uw-ink-700)">Use it as your cut. Stop spreading thin across resources and concentrate on the 20% that's actually moving the needle.</p>
        </div>
        <div style="border-top:3px solid var(--uw-blue-500);background:var(--uw-bg);border-radius:0 0 var(--r-lg) var(--r-lg);padding:26px">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px"><span style="width:34px;height:34px;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-600);display:grid;place-items:center"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg></span><span style="font-size:12px;font-family:var(--font-mono);letter-spacing:.06em;text-transform:uppercase;color:var(--uw-blue-600)">Final stretch: your revision</span></div>
          <p style="margin:0;font-size:14.5px;line-height:1.65;color:var(--uw-ink-700)">Use it as your high-yield revision. 70 hours to consolidate what matters and walk in sharp.</p>
        </div>
      </div>
      <div style="margin-top:40px;text-align:center"><a href="#offer"><span class="btn btn--primary btn--lg">Save my seat</span></a></div>
    </div>
  </section>

  <!-- VIDEO REVIEWS -->
  <section style="background:var(--uw-bg);border-top:1px solid var(--uw-border);padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px)">
    <div style="max-width:1080px;margin:0 auto">
      <div style="display:flex;justify-content:center;align-items:center;gap:9px;font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>Watch their stories</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,44px);letter-spacing:-0.02em;margin:0 auto 8px;color:var(--uw-ink-900);text-align:center;max-width:22ch">Hear it from students who passed.</h2>
      <p style="text-align:center;max-width:54ch;margin:0 auto 40px;font-size:16px;line-height:1.6;color:var(--uw-ink-500)">Tap to play</p>
      <div class="cc-videos">
        <div class="cc-short-wrap" style="display:flex">
          <a href="https://www.youtube.com/shorts/pcQuFkFmnAE" target="_blank" rel="noopener" data-video="short" style="position:relative;width:100%;border:1px solid var(--uw-border);border-radius:var(--r-xl);overflow:hidden;box-shadow:var(--shadow-md);background:#000;aspect-ratio:9/16;cursor:pointer;display:block;text-decoration:none">
              <img src="https://i.ytimg.com/vi/pcQuFkFmnAE/oardefault.jpg" alt="Student video review" loading="lazy" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block">
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
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,44px);letter-spacing:-0.02em;margin:0 0 36px;color:var(--uw-ink-900);text-align:center">Side by side, here's what actually sets this apart.</h2>
      <div class="cc-cmp-table" style="overflow-x:auto;border:1px solid var(--uw-border);border-radius:var(--r-lg)">
        <table style="width:100%;border-collapse:collapse;min-width:680px;font-size:14px">
          <thead>
            <tr>
              <th style="text-align:left;padding:18px 20px;background:var(--uw-bg);color:var(--uw-ink-500);font-weight:500;font-size:12px;letter-spacing:.06em;text-transform:uppercase;border-bottom:1px solid var(--uw-border);width:24%">Feature</th>
              <th style="text-align:left;padding:18px 20px;background:var(--uw-blue-500);color:#fff;border-bottom:1px solid var(--uw-border);width:42%"><b style="font-size:15px;font-weight:600">Our 7-day live Step 1 crash course</b></th>
              <th style="text-align:left;padding:18px 20px;background:var(--uw-bg);color:var(--uw-ink-600);font-weight:600;border-bottom:1px solid var(--uw-border)">Other crash courses</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="padding:16px 20px;font-weight:600;color:var(--uw-ink-900);border-bottom:1px solid var(--uw-border);vertical-align:top">New Step 1 syllabus alignment</td>
              <td style="padding:16px 20px;color:var(--uw-ink-800);background:var(--uw-blue-50);border-bottom:1px solid var(--uw-border);vertical-align:top"><div style="display:flex;gap:10px"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:1px"><path d="M20 6 9 17l-5-5"></path></svg><span>Rebuilt line by line for the new 2026 step 1 updated syllabus with nutrition and ethics surge covered in depth</span></div></td>
              <td style="padding:16px 20px;color:var(--uw-ink-500);border-bottom:1px solid var(--uw-border);vertical-align:top">Often reuses older decks with no updates</td>
            </tr>
            <tr>
              <td style="padding:16px 20px;font-weight:600;color:var(--uw-ink-900);border-bottom:1px solid var(--uw-border);vertical-align:top">Focus</td>
              <td style="padding:16px 20px;color:var(--uw-ink-800);background:var(--uw-blue-50);border-bottom:1px solid var(--uw-border);vertical-align:top"><div style="display:flex;gap:10px"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:1px"><path d="M20 6 9 17l-5-5"></path></svg><span>70 live hours, zero fluff, only what the USMLE repeatedly tests</span></div></td>
              <td style="padding:16px 20px;color:var(--uw-ink-500);border-bottom:1px solid var(--uw-border);vertical-align:top">Broad sweep, mixed yield, time dilution</td>
            </tr>
            <tr>
              <td style="padding:16px 20px;font-weight:600;color:var(--uw-ink-900);border-bottom:1px solid var(--uw-border);vertical-align:top">Teaching engine</td>
              <td style="padding:16px 20px;color:var(--uw-ink-800);background:var(--uw-blue-50);border-bottom:1px solid var(--uw-border);vertical-align:top"><div style="display:flex;gap:10px"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:1px"><path d="M20 6 9 17l-5-5"></path></svg><span>Question-powered. USMLE-style vignettes train knowledge and test-taking together</span></div></td>
              <td style="padding:16px 20px;color:var(--uw-ink-500);border-bottom:1px solid var(--uw-border);vertical-align:top">Lecture-heavy, QBank left for homework</td>
            </tr>
            <tr>
              <td style="padding:16px 20px;font-weight:600;color:var(--uw-ink-900);border-bottom:1px solid var(--uw-border);vertical-align:top">Instructors</td>
              <td style="padding:16px 20px;color:var(--uw-ink-800);background:var(--uw-blue-50);border-bottom:1px solid var(--uw-border);vertical-align:top"><div style="display:flex;gap:10px"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:1px"><path d="M20 6 9 17l-5-5"></path></svg><span>270+ Step 2 scorers who reverse-engineered the patterns</span></div></td>
              <td style="padding:16px 20px;color:var(--uw-ink-500);border-bottom:1px solid var(--uw-border);vertical-align:top">Limited experience and credentials</td>
            </tr>
            <tr>
              <td style="padding:16px 20px;font-weight:600;color:var(--uw-ink-900);border-bottom:1px solid var(--uw-border);vertical-align:top">Accountability</td>
              <td style="padding:16px 20px;color:var(--uw-ink-800);background:var(--uw-blue-50);border-bottom:1px solid var(--uw-border);vertical-align:top"><div style="display:flex;gap:10px"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:1px"><path d="M20 6 9 17l-5-5"></path></svg><span>Built-in daily question drills that make you apply each lesson</span></div></td>
              <td style="padding:16px 20px;color:var(--uw-ink-500);border-bottom:1px solid var(--uw-border);vertical-align:top">Passive watching, little pressure to execute</td>
            </tr>
            <tr>
              <td style="padding:16px 20px;font-weight:600;color:var(--uw-ink-900);border-bottom:1px solid var(--uw-border);vertical-align:top">Pass guarantee</td>
              <td style="padding:16px 20px;color:var(--uw-ink-800);background:var(--uw-blue-50);border-bottom:1px solid var(--uw-border);vertical-align:top"><div style="display:flex;gap:10px"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:1px"><path d="M20 6 9 17l-5-5"></path></svg><span><b style="color:var(--uw-success-700)">Finish the course and drills, don't pass, full refund</b></span></div></td>
              <td style="padding:16px 20px;color:var(--uw-ink-500);border-bottom:1px solid var(--uw-border);vertical-align:top">No guarantee, or store credit only</td>
            </tr>
            <tr>
              <td style="padding:16px 20px;font-weight:600;color:var(--uw-ink-900);border-bottom:1px solid var(--uw-border);vertical-align:top">Reported outcomes</td>
              <td style="padding:16px 20px;color:var(--uw-ink-800);background:var(--uw-blue-50);border-bottom:1px solid var(--uw-border);vertical-align:top"><div style="display:flex;gap:10px"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:1px"><path d="M20 6 9 17l-5-5"></path></svg><span>20 to 40 point jumps on practice NBMEs, roughly 2x faster score gain than solo study</span></div></td>
              <td style="padding:16px 20px;color:var(--uw-ink-500);border-bottom:1px solid var(--uw-border);vertical-align:top">Modest gains over months</td>
            </tr>
            <tr>
              <td style="padding:16px 20px;font-weight:600;color:var(--uw-ink-900);vertical-align:top">Step 2 bridge</td>
              <td style="padding:16px 20px;color:var(--uw-ink-800);background:var(--uw-blue-50);vertical-align:top"><div style="display:flex;gap:10px"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:1px"><path d="M20 6 9 17l-5-5"></path></svg><span>N+1 consolidation leaves you with a ready Step 2 launchpad</span></div></td>
              <td style="padding:16px 20px;color:var(--uw-ink-500);vertical-align:top">No structured bridge beyond Step 1</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="cc-cmp-cards" style="flex-direction:column;gap:16px">
                    <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);box-shadow:var(--shadow-xs);padding:22px 22px 24px">
              <h3 style="font-family:var(--font-display);font-weight:600;font-size:21px;letter-spacing:-0.01em;line-height:1.2;margin:0 0 16px;color:var(--uw-ink-900)">New Step 1 syllabus alignment</h3>
              <div style="display:flex;gap:9px;align-items:flex-start;margin-bottom:5px">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg>
                <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500);font-weight:700">Us</div>
              </div>
              <p style="margin:0 0 18px;padding-left:26px;font-size:15px;line-height:1.5;color:var(--uw-ink-900)">Rebuilt line by line for the new 2026 step 1 updated syllabus with nutrition and ethics surge covered in depth</p>
              <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-ink-400);font-weight:700;margin-bottom:5px">Others</div>
              <p style="margin:0;font-size:15px;line-height:1.5;color:var(--uw-ink-500);font-style:italic">Often reuses older decks with no updates</p>
            </div>
        
            <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);box-shadow:var(--shadow-xs);padding:22px 22px 24px">
              <h3 style="font-family:var(--font-display);font-weight:600;font-size:21px;letter-spacing:-0.01em;line-height:1.2;margin:0 0 16px;color:var(--uw-ink-900)">Focus</h3>
              <div style="display:flex;gap:9px;align-items:flex-start;margin-bottom:5px">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg>
                <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500);font-weight:700">Us</div>
              </div>
              <p style="margin:0 0 18px;padding-left:26px;font-size:15px;line-height:1.5;color:var(--uw-ink-900)">70 live hours, zero fluff, only what the USMLE repeatedly tests</p>
              <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-ink-400);font-weight:700;margin-bottom:5px">Others</div>
              <p style="margin:0;font-size:15px;line-height:1.5;color:var(--uw-ink-500);font-style:italic">Broad sweep, mixed yield, time dilution</p>
            </div>
        
            <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);box-shadow:var(--shadow-xs);padding:22px 22px 24px">
              <h3 style="font-family:var(--font-display);font-weight:600;font-size:21px;letter-spacing:-0.01em;line-height:1.2;margin:0 0 16px;color:var(--uw-ink-900)">Teaching engine</h3>
              <div style="display:flex;gap:9px;align-items:flex-start;margin-bottom:5px">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg>
                <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500);font-weight:700">Us</div>
              </div>
              <p style="margin:0 0 18px;padding-left:26px;font-size:15px;line-height:1.5;color:var(--uw-ink-900)">Question-powered. USMLE-style vignettes train knowledge and test-taking together</p>
              <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-ink-400);font-weight:700;margin-bottom:5px">Others</div>
              <p style="margin:0;font-size:15px;line-height:1.5;color:var(--uw-ink-500);font-style:italic">Lecture-heavy, QBank left for homework</p>
            </div>
        
            <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);box-shadow:var(--shadow-xs);padding:22px 22px 24px">
              <h3 style="font-family:var(--font-display);font-weight:600;font-size:21px;letter-spacing:-0.01em;line-height:1.2;margin:0 0 16px;color:var(--uw-ink-900)">Instructors</h3>
              <div style="display:flex;gap:9px;align-items:flex-start;margin-bottom:5px">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg>
                <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500);font-weight:700">Us</div>
              </div>
              <p style="margin:0 0 18px;padding-left:26px;font-size:15px;line-height:1.5;color:var(--uw-ink-900)">270+ Step 2 scorers who reverse-engineered the patterns</p>
              <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-ink-400);font-weight:700;margin-bottom:5px">Others</div>
              <p style="margin:0;font-size:15px;line-height:1.5;color:var(--uw-ink-500);font-style:italic">Limited experience and credentials</p>
            </div>
        
            <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);box-shadow:var(--shadow-xs);padding:22px 22px 24px">
              <h3 style="font-family:var(--font-display);font-weight:600;font-size:21px;letter-spacing:-0.01em;line-height:1.2;margin:0 0 16px;color:var(--uw-ink-900)">Accountability</h3>
              <div style="display:flex;gap:9px;align-items:flex-start;margin-bottom:5px">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg>
                <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500);font-weight:700">Us</div>
              </div>
              <p style="margin:0 0 18px;padding-left:26px;font-size:15px;line-height:1.5;color:var(--uw-ink-900)">Built-in daily question drills that make you apply each lesson</p>
              <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-ink-400);font-weight:700;margin-bottom:5px">Others</div>
              <p style="margin:0;font-size:15px;line-height:1.5;color:var(--uw-ink-500);font-style:italic">Passive watching, little pressure to execute</p>
            </div>
        
            <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);box-shadow:var(--shadow-xs);padding:22px 22px 24px">
              <h3 style="font-family:var(--font-display);font-weight:600;font-size:21px;letter-spacing:-0.01em;line-height:1.2;margin:0 0 16px;color:var(--uw-ink-900)">Pass guarantee</h3>
              <div style="display:flex;gap:9px;align-items:flex-start;margin-bottom:5px">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg>
                <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500);font-weight:700">Us</div>
              </div>
              <p style="margin:0 0 18px;padding-left:26px;font-size:15px;line-height:1.5;color:var(--uw-ink-900)">Finish the course and drills, don't pass, full refund</p>
              <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-ink-400);font-weight:700;margin-bottom:5px">Others</div>
              <p style="margin:0;font-size:15px;line-height:1.5;color:var(--uw-ink-500);font-style:italic">No guarantee, or store credit only</p>
            </div>
        
            <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);box-shadow:var(--shadow-xs);padding:22px 22px 24px">
              <h3 style="font-family:var(--font-display);font-weight:600;font-size:21px;letter-spacing:-0.01em;line-height:1.2;margin:0 0 16px;color:var(--uw-ink-900)">Reported outcomes</h3>
              <div style="display:flex;gap:9px;align-items:flex-start;margin-bottom:5px">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg>
                <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500);font-weight:700">Us</div>
              </div>
              <p style="margin:0 0 18px;padding-left:26px;font-size:15px;line-height:1.5;color:var(--uw-ink-900)">20 to 40 point jumps on practice NBMEs, roughly 2x faster score gain than solo study</p>
              <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-ink-400);font-weight:700;margin-bottom:5px">Others</div>
              <p style="margin:0;font-size:15px;line-height:1.5;color:var(--uw-ink-500);font-style:italic">Modest gains over months</p>
            </div>
        
            <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);box-shadow:var(--shadow-xs);padding:22px 22px 24px">
              <h3 style="font-family:var(--font-display);font-weight:600;font-size:21px;letter-spacing:-0.01em;line-height:1.2;margin:0 0 16px;color:var(--uw-ink-900)">Step 2 bridge</h3>
              <div style="display:flex;gap:9px;align-items:flex-start;margin-bottom:5px">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg>
                <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500);font-weight:700">Us</div>
              </div>
              <p style="margin:0 0 18px;padding-left:26px;font-size:15px;line-height:1.5;color:var(--uw-ink-900)">N+1 consolidation leaves you with a ready Step 2 launchpad</p>
              <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-ink-400);font-weight:700;margin-bottom:5px">Others</div>
              <p style="margin:0;font-size:15px;line-height:1.5;color:var(--uw-ink-500);font-style:italic">No structured bridge beyond Step 1</p>
            </div>
        
      </div>
      <div style="margin-top:40px;text-align:center"><a href="#offer"><span class="btn btn--primary btn--lg">Enroll Now</span></a></div>
    </div>
  </section>

  <!-- OFFER -->
  <section id="offer" class="cc-offer" style="scroll-margin-top:60px;background:var(--uw-bg);border-top:1px solid var(--uw-border);padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px)">
    <div style="max-width:760px;margin:0 auto;text-align:center">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px" class="cc-offer-eyebrow">Offer &amp; guarantee</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,44px);letter-spacing:-0.02em;margin:0 0 32px;color:var(--uw-ink-900)" class="cc-offer-h">Everything you get today</h2>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-xl);box-shadow:var(--shadow-lg);overflow:hidden;text-align:left">
        <div class="cc-offer-list" style="padding:clamp(8px,2vw,16px) clamp(20px,4vw,36px)">
          <div class="cc-row" style="display:flex;align-items:flex-start;gap:14px;padding:16px 0;border-bottom:1px solid var(--uw-border)"><span style="width:36px;height:36px;flex:none;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-500);display:grid;place-items:center"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="m10 9 5 3-5 3z"></path></svg></span><div style="flex:1;min-width:0"><div style="font-size:15.5px;font-weight:600;line-height:1.3;color:var(--uw-ink-900)">Live Step 1 Crash Course</div><div style="font-size:13px;line-height:1.5;margin-top:3px;color:var(--uw-ink-500)"><span style="white-space:nowrap">Nov 1–7, 2026 ·</span> <span style="white-space:nowrap">7 days ·</span> <span style="white-space:nowrap">70 live hours ·</span> <span style="white-space:nowrap">Q&amp;A after every topic ·</span> <span style="white-space:nowrap">Lifetime access to recordings</span></div></div><span style="flex:none;font-family:var(--font-mono);font-size:14px;color:var(--uw-ink-700);padding-top:2px">$999</span></div>
          <div class="cc-row" style="display:flex;align-items:flex-start;gap:14px;padding:16px 0;border-bottom:1px solid var(--uw-border)"><span style="width:36px;height:36px;flex:none;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-500);display:grid;place-items:center"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 17 2 2 4-4"></path><path d="m3 7 2 2 4-4"></path><path d="M13 6h8"></path><path d="M13 12h8"></path><path d="M13 18h8"></path></svg></span><div style="flex:1;min-width:0"><div style="font-size:15.5px;font-weight:600;line-height:1.3;color:var(--uw-ink-900)">1,400-question Ultra High-Yield Step 1 2026 QBank</div><div style="font-size:13px;line-height:1.4;margin-top:3px;color:var(--uw-success-700)"><b style="display:inline-block;font-family:var(--font-mono);font-size:10px;font-weight:600;letter-spacing:.1em;text-transform:uppercase;background:var(--uw-success-50);border:1px solid var(--uw-success-300);border-radius:4px;padding:1px 6px;margin-right:6px;vertical-align:1px">Bonus</b>90-day free access</div></div><span style="display:flex;flex-direction:column;align-items:flex-end;gap:2px;padding-top:2px;flex:none"><s style="font-family:var(--font-mono);font-size:13px;color:var(--uw-ink-400)">$299</s><b style="font-size:12px;font-weight:600;letter-spacing:.06em;text-transform:uppercase;color:var(--uw-success-700)">Free</b></span></div>
          <div class="cc-row" style="display:flex;align-items:flex-start;gap:14px;padding:16px 0;border-bottom:1px solid var(--uw-border)"><span style="width:36px;height:36px;flex:none;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-500);display:grid;place-items:center"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg></span><div style="flex:1;min-width:0"><div style="font-size:15.5px;font-weight:600;line-height:1.3;color:var(--uw-ink-900)">Step 1 2026 Rapid Review + Comprehensive Notes</div><div style="font-size:13px;line-height:1.4;margin-top:3px;color:var(--uw-success-700)"><b style="display:inline-block;font-family:var(--font-mono);font-size:10px;font-weight:600;letter-spacing:.1em;text-transform:uppercase;background:var(--uw-success-50);border:1px solid var(--uw-success-300);border-radius:4px;padding:1px 6px;margin-right:6px;vertical-align:1px">Bonus</b>yours to keep</div></div><span style="display:flex;flex-direction:column;align-items:flex-end;gap:2px;padding-top:2px;flex:none"><s style="font-family:var(--font-mono);font-size:13px;color:var(--uw-ink-400)">$99</s><b style="font-size:12px;font-weight:600;letter-spacing:.06em;text-transform:uppercase;color:var(--uw-success-700)">Free</b></span></div>
          <div class="cc-row" style="display:flex;align-items:flex-start;gap:14px;padding:16px 0;"><span style="width:36px;height:36px;flex:none;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-500);display:grid;place-items:center"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></span><div style="flex:1;min-width:0"><div style="font-size:15.5px;font-weight:600;line-height:1.3;color:var(--uw-ink-900)">Private WhatsApp community</div><div style="font-size:13px;line-height:1.4;margin-top:3px;color:var(--uw-ink-500)">24/7 access to your cohort and mentors</div></div><b style="flex:none;padding-top:2px;font-size:12px;font-weight:600;letter-spacing:.06em;text-transform:uppercase;color:var(--uw-success-700)">Included</b></div>
        </div>
        <div class="cc-offer-pay" style="background:var(--uw-blue-500);color:#fff;padding:clamp(22px,4vw,36px);position:relative;overflow:hidden">
          <div class="dot-tex" style="position:absolute;inset:0"></div>
          <div style="position:relative;z-index:1;max-width:380px;margin:0 auto;display:flex;flex-direction:column;gap:12px">
            <div class="cc-offer-price" style="display:flex;align-items:flex-end;justify-content:space-between;gap:12px;margin-bottom:6px">
              <div style="display:flex;flex-direction:column;gap:6px;text-align:left">
                <span style="font-family:var(--font-mono);font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.75)">Yours today</span>
                <b style="font-family:var(--font-display);font-size:clamp(46px,7vw,64px);font-weight:600;line-height:.9">$499</b>
              </div>
              <div style="display:flex;flex-direction:column;align-items:flex-end;gap:8px;padding-bottom:4px">
                <s style="font-family:var(--font-display);font-size:20px;line-height:1;color:rgba(255,255,255,.65)">$1,397</s>
                <span style="font-size:12.5px;font-weight:600;color:var(--uw-ink-900);background:var(--uw-success-300);border-radius:999px;padding:5px 11px;white-space:nowrap">You save $898</span>
              </div>
            </div>
            <a href="#contact" class="cc-offer-cta" style="display:block"><span class="btn btn--primary btn--xl">Get Access Now</span></a>
            <div class="cc-promo" style="display:flex;align-items:center;height:46px;margin-top:4px;padding:4px 4px 4px 14px;box-sizing:border-box;border-radius:var(--r-md);border:1px solid rgba(255,255,255,.35);background:rgba(255,255,255,.08)">
              <input id="ccPromo" type="text" placeholder="Promo code" aria-label="Promo code" style="flex:1;min-width:0;height:100%;border:0;background:transparent;color:#fff;font:inherit;font-size:14.5px;outline:none;text-transform:uppercase;letter-spacing:.04em">
              <button class="ccx-h3" style="flex:none;height:100%;padding:0 16px;border-radius:6px;border:0;background:#fff;color:var(--uw-blue-700);font:inherit;font-size:14px;font-weight:600;cursor:pointer">Apply</button>
            </div>
            <div style="display:flex;align-items:center;justify-content:center;gap:7px;margin-top:-2px;font-size:13px;line-height:1.3;color:rgba(255,255,255,.85);white-space:nowrap"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-300)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"></path><circle cx="7.5" cy="7.5" r=".5" fill="currentColor"></circle></svg><span>First 200 students: <b style="color:var(--uw-success-300);font-weight:600">$100 off</b> with <b style="font-family:var(--font-mono);font-weight:600;color:#fff;letter-spacing:.04em">STEP100</b></span></div>
          </div>
        </div>
      </div>
      <div class="cc-guar" style="background:var(--uw-success-50);border:1px solid var(--uw-success-300);border-radius:var(--r-xl);padding:clamp(24px,4vw,36px);margin-top:24px;text-align:center">
        <div style="display:flex;align-items:center;justify-content:center;gap:10px;margin-bottom:22px">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
          <span style="font-family:var(--font-display);font-size:clamp(24px,2.8vw,30px);font-weight:600;letter-spacing:-0.015em;color:var(--uw-ink-900)">The 2X guarantee</span>
        </div>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(min(100%,260px),1fr));gap:14px;text-align:left">
          <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:22px">
            <div style="display:flex;align-items:center;gap:12px;margin-bottom:10px"><span style="width:32px;height:32px;border-radius:50%;background:var(--uw-success-500);color:#fff;display:grid;place-items:center;font-family:var(--font-display);font-weight:600;font-size:17px;flex:none">1</span><span style="font-size:16px;font-weight:600;color:var(--uw-ink-900)">Decide after day 1 guarantee</span></div>
            <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-700)">Sit the first day. If you're not satisfied, email us and get your money back.</p>
          </div>
          <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:22px">
            <div style="display:flex;align-items:center;gap:12px;margin-bottom:10px"><span style="width:32px;height:32px;border-radius:50%;background:var(--uw-success-500);color:#fff;display:grid;place-items:center;font-family:var(--font-display);font-weight:600;font-size:17px;flex:none">2</span><span style="font-size:16px;font-weight:600;color:var(--uw-ink-900)">Pass, or your money back guarantee</span></div>
            <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-700)">Finish the course, sit your exam, and if you don't pass, send us your score report. We refund you in full.</p>
          </div>
        </div>
        <div style="font-family:var(--font-display);font-style:italic;font-size:20px;color:var(--uw-success-700);margin:22px 0 18px">Zero risk. Pure results.</div>
        <a href="#offer"><span class="btn btn--primary btn--lg">Start risk-free</span></a>
      </div>
    </div>
  </section>

  <!-- CURRICULUM -->
  <section id="curriculum" style="background:var(--uw-blue-800);color:#fff;position:relative;overflow:hidden;padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px)">
    <div class="dot-tex" style="position:absolute;inset:0;opacity:.7"></div>
    <div style="position:relative;z-index:1;max-width:1080px;margin:0 auto">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-300);margin-bottom:14px;text-align:center">Curriculum</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,44px);letter-spacing:-0.02em;margin:0 0 10px;color:#fff;text-align:center">7 days. All 21 Step&nbsp;1 subjects covered.</h2>
      <p style="text-align:center;font-family:var(--font-mono);font-size:12px;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.7);margin:0 0 36px">70 hours of live teaching, including Q&amp;A</p>
      <div style="display:flex;flex-direction:column;gap:12px;max-width:1000px;margin:0 auto">
        <div class="cc-day" style="display:grid;grid-template-columns:150px minmax(0,1fr);align-items:center;gap:16px 24px;padding:20px 24px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.12);border-radius:var(--r-lg)">
          <div style="display:flex;flex-direction:column;gap:4px"><span style="font-family:var(--font-display);font-size:22px;font-weight:600;line-height:1;color:#fff">Day 1</span><span style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.65)">Sun, Nov 1</span></div>
          <div style="display:flex;flex-wrap:wrap;gap:10px"><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">General pathology<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">2.5h</span></span><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">General pharmacology<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">2h</span></span><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">Cardiovascular<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">5h</span></span></div>
        </div>
        <div class="cc-day" style="display:grid;grid-template-columns:150px minmax(0,1fr);align-items:center;gap:16px 24px;padding:20px 24px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.12);border-radius:var(--r-lg)">
          <div style="display:flex;flex-direction:column;gap:4px"><span style="font-family:var(--font-display);font-size:22px;font-weight:600;line-height:1;color:#fff">Day 2</span><span style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.65)">Mon, Nov 2</span></div>
          <div style="display:flex;flex-wrap:wrap;gap:10px"><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">Biostatistics and epidemiology<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">3h</span></span><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">Respiratory<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">3.5h</span></span><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">Renal<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">3.5h</span></span></div>
        </div>
        <div class="cc-day" style="display:grid;grid-template-columns:150px minmax(0,1fr);align-items:center;gap:16px 24px;padding:20px 24px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.12);border-radius:var(--r-lg)">
          <div style="display:flex;flex-direction:column;gap:4px"><span style="font-family:var(--font-display);font-size:22px;font-weight:600;line-height:1;color:#fff">Day 3</span><span style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.65)">Tue, Nov 3</span></div>
          <div style="display:flex;flex-wrap:wrap;gap:10px"><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">Endocrine<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">3.5h</span></span><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">Neurology<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">4.5h</span></span></div>
        </div>
        <div class="cc-day" style="display:grid;grid-template-columns:150px minmax(0,1fr);align-items:center;gap:16px 24px;padding:20px 24px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.12);border-radius:var(--r-lg)">
          <div style="display:flex;flex-direction:column;gap:4px"><span style="font-family:var(--font-display);font-size:22px;font-weight:600;line-height:1;color:#fff">Day 4</span><span style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.65)">Wed, Nov 4</span></div>
          <div style="display:flex;flex-wrap:wrap;gap:10px"><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">Immunology<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">3h</span></span><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">Genetics, cell and molecular biology<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">2.5h</span></span><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">Hematology and oncology<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">3.5h</span></span></div>
        </div>
        <div class="cc-day" style="display:grid;grid-template-columns:150px minmax(0,1fr);align-items:center;gap:16px 24px;padding:20px 24px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.12);border-radius:var(--r-lg)">
          <div style="display:flex;flex-direction:column;gap:4px"><span style="font-family:var(--font-display);font-size:22px;font-weight:600;line-height:1;color:#fff">Day 5</span><span style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.65)">Thu, Nov 5</span></div>
          <div style="display:flex;flex-wrap:wrap;gap:10px"><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">Biochemistry and nutrition<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">3.5h</span></span><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">Bacteriology<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">2.5h</span></span><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">Virology, mycology and parasitology<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">2h</span></span><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">Infectious disease pharmacology<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">1.5h</span></span></div>
        </div>
        <div class="cc-day" style="display:grid;grid-template-columns:150px minmax(0,1fr);align-items:center;gap:16px 24px;padding:20px 24px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.12);border-radius:var(--r-lg)">
          <div style="display:flex;flex-direction:column;gap:4px"><span style="font-family:var(--font-display);font-size:22px;font-weight:600;line-height:1;color:#fff">Day 6</span><span style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.65)">Fri, Nov 6</span></div>
          <div style="display:flex;flex-wrap:wrap;gap:10px"><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">Reproductive<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">4h</span></span><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">Psychiatry<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">2.5h</span></span><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">Ethics and communication<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">3h</span></span></div>
        </div>
        <div class="cc-day" style="display:grid;grid-template-columns:150px minmax(0,1fr);align-items:center;gap:16px 24px;padding:20px 24px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.12);border-radius:var(--r-lg)">
          <div style="display:flex;flex-direction:column;gap:4px"><span style="font-family:var(--font-display);font-size:22px;font-weight:600;line-height:1;color:#fff">Day 7</span><span style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.65)">Sat, Nov 7</span></div>
          <div style="display:flex;flex-wrap:wrap;gap:10px"><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">Dermatology<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">1.5h</span></span><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">Gastrointestinal<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">4h</span></span><span class="cc-chip" style="display:inline-flex;align-items:center;gap:10px;flex:none;max-width:100%;white-space:nowrap;padding:9px 14px;border-radius:999px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);font-size:14.5px;line-height:1.2;color:#fff">Musculoskeletal<span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-success-300)">3.5h</span></span></div>
        </div>
      </div>
      <div style="display:flex;align-items:center;justify-content:center;gap:10px;margin-top:28px;font-size:15px;color:rgba(255,255,255,.85);text-align:center"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-300)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>Every session is recorded, with lifetime access.</div>
      <div style="margin:clamp(48px,6vw,72px) auto 0;max-width:640px;display:flex;flex-direction:column;gap:24px">
        <div style="text-align:center">
          <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-300);margin-bottom:12px">Your timing</div>
          <h3 style="font-family:var(--font-display);font-weight:400;font-size:clamp(24px,2.6vw,32px);letter-spacing:-0.015em;line-height:1.2;margin:0 auto;max-width:16em;color:#fff;text-wrap:balance">Sessions start at 7:00 AM Eastern, every day.</h3>
        </div>
        <div style="border:1px solid rgba(255,255,255,.14);border-radius:var(--r-lg);overflow:hidden">
          <div style="display:grid;grid-template-columns:1.4fr 1fr 1fr;gap:12px;padding:12px 18px;background:rgba(255,255,255,.08);font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.7)"><span></span><span>Starts</span><span>Ends</span></div>
          <div style="display:grid;grid-template-columns:1.4fr 1fr 1fr;gap:12px;padding:12px 18px;font-size:14.5px;color:#fff"><span style="color:rgba(255,255,255,.85)">New York (EST)</span><span>7:00 AM</span><span>5:00 PM</span></div>
          <div style="display:grid;grid-template-columns:1.4fr 1fr 1fr;gap:12px;padding:12px 18px;font-size:14.5px;border-top:1px solid rgba(255,255,255,.1);color:#fff"><span style="color:rgba(255,255,255,.85)">India (IST)</span><span>5:30 PM</span><span>3:30 AM</span></div>
          <div style="display:grid;grid-template-columns:1.4fr 1fr 1fr;gap:12px;padding:12px 18px;font-size:14.5px;border-top:1px solid rgba(255,255,255,.1);color:#fff"><span style="color:rgba(255,255,255,.85)">London (GMT)</span><span>12:00 PM</span><span>10:00 PM</span></div>
          <div style="display:grid;grid-template-columns:1.4fr 1fr 1fr;gap:12px;padding:12px 18px;font-size:14.5px;border-top:1px solid rgba(255,255,255,.1);color:#fff"><span style="color:rgba(255,255,255,.85)">Dubai (GST)</span><span>4:00 PM</span><span>2:00 AM</span></div>
          <div style="display:grid;grid-template-columns:1.4fr 1fr 1fr;gap:12px;padding:12px 18px;font-size:14.5px;border-top:1px solid rgba(255,255,255,.1);color:#fff"><span style="color:rgba(255,255,255,.85)">Nepal (NPT)</span><span>5:45 PM</span><span>3:45 AM</span></div>
          <div style="display:grid;grid-template-columns:1.4fr 1fr 1fr;gap:12px;padding:12px 18px;font-size:14.5px;border-top:1px solid rgba(255,255,255,.1);color:#fff"><span style="color:rgba(255,255,255,.85)">Pakistan (PKT)</span><span>5:00 PM</span><span>3:00 AM</span></div>
        </div>
      </div>
      <div style="margin-top:40px;text-align:center"><a href="#offer"><span class="btn btn--primary btn--lg">Save my seat</span></a></div>
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
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t06.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t14.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t03.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t04.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t05.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t15.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t27.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t28.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t30.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t31.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t32.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t60.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t82.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t83.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t01.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t02.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t07.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t10.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t16.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t26.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t42.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t47.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t48.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t50.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t52.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t53.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t56.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t76.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t78.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t81.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t88.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t89.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t91.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t08.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t09.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t11.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t12.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t13.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t18.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t21.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t38.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t40.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t41.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t66.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t95.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t98.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t17.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t19.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t20.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t22.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t33.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t37.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t39.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t43.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t44.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t45.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t90.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t96.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
          <div style="break-inside:avoid;margin-bottom:14px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-xs);background:var(--uw-surface)"><img src="/assets/step1-crash-course/testimonials/t99.webp" alt="Student testimonial screenshot" loading="lazy" decoding="async" loading="lazy" style="width:100%;display:block"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7 DAYS FROM NOW -->
  <section style="background:var(--uw-surface);border-top:1px solid var(--uw-border);padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px)">
    <div style="max-width:1080px;margin:0 auto">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px;text-align:center">7 days from now</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.4vw,44px);letter-spacing:-0.02em;margin:0 0 clamp(34px,4vw,52px);color:var(--uw-ink-900);text-align:center">You're going to spend them either way.</h2>
      <div class="cc-duality" style="display:grid;grid-template-columns:1fr 1fr;gap:clamp(16px,2.5vw,28px)">
        <div style="background:var(--uw-red-50);border:1px solid var(--uw-red-100);border-radius:var(--r-lg);padding:clamp(24px,3vw,34px)">
          <div style="font-size:17px;font-weight:600;color:var(--uw-red-600);margin-bottom:20px">Without this course</div>
          <ul style="list-style:none;margin:0;padding:0;display:flex;flex-direction:column;gap:16px">
            <li style="display:flex;gap:12px;align-items:flex-start"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-red-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg><span style="font-size:15px;line-height:1.5;color:var(--uw-ink-700)">Still grinding broad, still unsure what actually matters.</span></li>
            <li style="display:flex;gap:12px;align-items:flex-start"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-red-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg><span style="font-size:15px;line-height:1.5;color:var(--uw-ink-700)">Another weekend lost to low-yield material that won't show up.</span></li>
            <li style="display:flex;gap:12px;align-items:flex-start"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-red-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg><span style="font-size:15px;line-height:1.5;color:var(--uw-ink-700)">That same quiet worry every time you open a practice block.</span></li>
            <li style="display:flex;gap:12px;align-items:flex-start"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-red-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg><span style="font-size:15px;line-height:1.5;color:var(--uw-ink-700)">Walking in hoping you studied the right things.</span></li>
          </ul>
        </div>
        <div style="background:var(--uw-blue-50);border:1px solid var(--uw-blue-100);border-radius:var(--r-lg);padding:clamp(24px,3vw,34px)">
          <div style="font-size:17px;font-weight:600;color:var(--uw-blue-700);margin-bottom:20px">With this course</div>
          <ul style="list-style:none;margin:0;padding:0;display:flex;flex-direction:column;gap:16px">
            <li style="display:flex;gap:12px;align-items:flex-start"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span style="font-size:15px;line-height:1.5;color:var(--uw-ink-700)">Studying with a map, clear on exactly what to focus on and what to skip.</span></li>
            <li style="display:flex;gap:12px;align-items:flex-start"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span style="font-size:15px;line-height:1.5;color:var(--uw-ink-700)">70 live hours spent only on what the USMLE actually tests.</span></li>
            <li style="display:flex;gap:12px;align-items:flex-start"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span style="font-size:15px;line-height:1.5;color:var(--uw-ink-700)">Calm, steady focus from the first question to the last.</span></li>
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
  <section id="sample" style="background:var(--uw-surface);border-top:1px solid var(--uw-border);padding:clamp(56px,7vw,88px) clamp(20px,5vw,48px)">
    <div style="max-width:640px;margin:0 auto;text-align:center">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px">Free sample lesson</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.4vw,40px);letter-spacing:-0.02em;line-height:1.15;margin:0 0 14px;color:var(--uw-ink-900);text-wrap:balance">See how we teach before you enroll.</h2>
      <p style="margin:0 auto;max-width:52ch;font-size:16px;line-height:1.6;color:var(--uw-ink-600);text-wrap:pretty">See one of our 270+ Step&nbsp;2 mentors teach a high-yield Step&nbsp;1 topic. You'll see how every lesson works USMLE-style questions and content together, from the first minute.</p>
      <div style="display:flex;flex-direction:column;align-items:center;gap:10px;margin-top:26px">
        <a class="ccx-h1" href="#contact" style="display:inline-flex;align-items:center;justify-content:center;gap:10px;height:52px;padding:0 26px;box-sizing:border-box;border-radius:999px;background:#25D366;color:#fff;font-size:16px;font-weight:600;white-space:nowrap;box-shadow:var(--shadow-sm)"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" style="flex:none"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38c1.45.79 3.08 1.21 4.79 1.21 5.46 0 9.91-4.45 9.91-9.91C21.95 6.45 17.5 2 12.04 2zm0 18.150c-1.52 0-3.01-.41-4.31-1.18l-.31-.18-3.12.82.83-3.04-.2-.31a8.21 8.21 0 0 1-1.26-4.35c0-4.54 3.7-8.23 8.24-8.23 4.54 0 8.23 3.69 8.23 8.23 0 4.54-3.69 8.24-8.23 8.240zm4.52-6.160c-.25-.12-1.47-.72-1.690-.81-.23-.08-.39-.12-.56.12-.16.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.12-1.05-.39-1.990-1.23-.74-.66-1.230-1.47-1.38-1.72-.14-.25-.01-.38.11-.51.11-.11.25-.29.37-.43.12-.14.16-.25.25-.41.08-.17.04-.31-.02-.43-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.42-.14-.01-.31-.01-.48-.01-.16 0-.43.06-.66.31-.23.25-.86.85-.86 2.07 0 1.22.89 2.4 1.01 2.56.12.17 1.75 2.67 4.23 3.74.59.26 1.05.41 1.41.52.59.19 1.13.16 1.56.1.48-.07 1.47-.6 1.67-1.180.21-.58.21-1.07.14-1.18-.06-.1-.22-.16-.47-.28z"></path></svg>Request a free sample lesson</a>
        <span style="font-size:13px;color:var(--uw-ink-500)">We'll send it to you on WhatsApp.</span>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" style="background:var(--uw-bg);border-top:1px solid var(--uw-border);padding:clamp(56px,7vw,96px) clamp(20px,5vw,48px)">
    <div style="max-width:840px;margin:0 auto">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px;text-align:center">Questions, answered</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.4vw,44px);letter-spacing:-0.02em;margin:0 0 clamp(34px,4vw,52px);color:var(--uw-ink-900);text-align:center">Frequently asked questions</h2>
              <div style="margin-bottom:34px">
          <div style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500);margin-bottom:13px">Format and access</div>
          <div style="display:flex;flex-direction:column;gap:10px">
            
              <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
                <button type="button" class="cc-faq-btn ccx-h4" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
                  <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">Is this live or self-paced?</span>
                  <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
                </button>
                <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">It's live on Zoom, Sunday, November 1 to Saturday, November 7. Sessions start at 7:00 AM Eastern every day, and you can ask questions in real time as we teach.</div>
              </div>
            
          </div>
        </div>
      
        <div style="margin-bottom:34px">
          <div style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500);margin-bottom:13px">Fit and outcomes</div>
          <div style="display:flex;flex-direction:column;gap:10px">
            
              <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
                <button type="button" class="cc-faq-btn is-open ccx-h4" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
                  <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">Is a 7-day live crash course really worth it for 2026?</span>
                  <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">–</span>
                </button>
                <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch">Yes. The 2026 blueprint rewards pattern recognition, ethics and communication, biostats, and chart-style stems, and our 70 live hours go straight at what actually shows up. So you close the highest-yield gaps fast and walk in confident.</div>
              </div>
            
              <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
                <button type="button" class="cc-faq-btn ccx-h4" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
                  <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">Can a crash course really move my readiness that much?</span>
                  <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
                </button>
                <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">For most people, yes. Students routinely report 20 to 40 point jumps on their practice NBMEs within two weeks, roughly twice the progress of studying solo. Your results depend on where you start and the work you put in.</div>
              </div>
            
              <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
                <button type="button" class="cc-faq-btn ccx-h4" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
                  <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">Is this better for first-timers or retakers?</span>
                  <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
                </button>
                <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">Honestly, both. If it's your first time, you get a clean high-yield map. And if you're retaking, it resets the usual leak points, which are timing, reasoning, and ethics.</div>
              </div>
            
              <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
                <button type="button" class="cc-faq-btn ccx-h4" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
                  <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">What do students actually walk away with?</span>
                  <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
                </button>
                <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">Faster reading, sharper elimination, fewer careless errors, and a calmer test day.</div>
              </div>
            
              <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
                <button type="button" class="cc-faq-btn ccx-h4" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
                  <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">Does it help with anxiety, timing, and decision-making?</span>
                  <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
                </button>
                <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">It does. We drill pacing and indentation so you finish on time, and you practice a fixed decision tree for the tie-breaker items that usually eat your clock.</div>
              </div>
            
              <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
                <button type="button" class="cc-faq-btn ccx-h4" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
                  <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">Will this help me prepare for the CBSE?</span>
                  <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
                </button>
                <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">Yes. The NBME builds the CBSE from the same basic science content as Step 1, so there's a big overlap. Several of our students have used this course to pass their CBSE. And if your school requires a CBSE pass before you can sit Step 1, you're preparing for both exams at once.</div>
              </div>
            
          </div>
        </div>
      
        <div style="margin-bottom:34px">
          <div style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500);margin-bottom:13px">What changed in 2026, and how we handle it</div>
          <div style="display:flex;flex-direction:column;gap:10px">
            
              <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
                <button type="button" class="cc-faq-btn ccx-h4" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
                  <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">What actually changed on Step 1 in 2026?</span>
                  <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
                </button>
                <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">A few things. Longer chart and SOAP-style stems with distracting detail, more ethics and communication, immunology and micro up while pure biochem is down, and pathophysiology over trivia.</div>
              </div>
            
              <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
                <button type="button" class="cc-faq-btn ccx-h4" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
                  <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">Does this cover nutrition topics?</span>
                  <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
                </button>
                <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">Yes. Nutrition has its own dedicated section, taught on Day 5 alongside biochemistry. The current Step 1 tests nutrition more than older resources expect, so we give it focused time instead of a few slides.</div>
              </div>
            
          </div>
        </div>
      
        <div style="margin-bottom:34px">
          <div style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500);margin-bottom:13px">Teaching engine and method</div>
          <div style="display:flex;flex-direction:column;gap:10px">
            
              <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
                <button type="button" class="cc-faq-btn ccx-h4" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
                  <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">How does question-powered teaching work?</span>
                  <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
                </button>
                <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">We teach through USMLE-style vignettes from minute one. You learn the idea, solve a question, then take apart the logic and drill the variations until it sticks.</div>
              </div>
            
              <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
                <button type="button" class="cc-faq-btn ccx-h4" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
                  <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">What's the N+1 method?</span>
                  <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
                </button>
                <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">You never learn a topic just once. You stack a slightly harder layer on top of what you just mastered, so recall stays active and moves into long-term memory.</div>
              </div>
            
              <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
                <button type="button" class="cc-faq-btn ccx-h4" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
                  <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">What frameworks do you teach for the tough items?</span>
                  <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
                </button>
                <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">The Elimination Blueprint, the Clue-net, and tie-breakers, plus short contrast tables and break-the-tie clues like onset, the key lab, and one physical finding.</div>
              </div>
            
              <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
                <button type="button" class="cc-faq-btn ccx-h4" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
                  <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">How do you keep it from leaking back out of my head?</span>
                  <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
                </button>
                <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">Stacked repetition, mixed-topic mini-sets, and periodic refresh prompts keep everything active, and you build your own one-page frameworks as you work through the lessons.</div>
              </div>
            
          </div>
        </div>
      
        <div style="margin-bottom:34px">
          <div style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500);margin-bottom:13px">Instructors, materials, and access</div>
          <div style="display:flex;flex-direction:column;gap:10px">
            
              <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
                <button type="button" class="cc-faq-btn ccx-h4" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
                  <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">Who teaches this, and what are their scores?</span>
                  <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
                </button>
                <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">Sessions are led by 270+ Step 2 scorers and experienced Step 1 instructors, coordinated by Dr. Manik Madaan (271 Step 2). The team reverse-engineered USMLE patterns across thousands of items.</div>
              </div>
            
              <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
                <button type="button" class="cc-faq-btn ccx-h4" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
                  <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">Do I get recordings and downloadable materials?</span>
                  <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
                </button>
                <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">Yes. You get lifetime access to every session recording. You also keep the USMLE Wise Step 1 2026 Rapid Review + Comprehensive Notes, and get complimentary 3-month access to our 1,400-question Step 1 QBank.</div>
              </div>
            
              <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
                <button type="button" class="cc-faq-btn ccx-h4" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
                  <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">Do I need any other resources?</span>
                  <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
                </button>
                <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">Just a notebook. Your enrollment includes 3 months of our 1,400-question Step 1 QBank, and you can keep any QBank you already like alongside it.</div>
              </div>
            
          </div>
        </div>
      
        <div style="margin-bottom:34px">
          <div style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500);margin-bottom:13px">Logistics</div>
          <div style="display:flex;flex-direction:column;gap:10px">
            
              <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
                <button type="button" class="cc-faq-btn ccx-h4" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
                  <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">What's the guarantee?</span>
                  <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
                </button>
                <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">Finish the sessions and the required drills, sit your exam, and if you don't pass, you get a full refund within 14 days of your score report.</div>
              </div>
            
              <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
                <button type="button" class="cc-faq-btn ccx-h4" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
                  <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">Is this good for nontraditional students or a different background?</span>
                  <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
                </button>
                <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">Yes. The course assumes varied backgrounds and centers on USMLE logic, not on any one set of course notes.</div>
              </div>
            
          </div>
        </div>
      
        <div style="margin-bottom:34px">
          <div style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500);margin-bottom:13px">Beyond Step 1</div>
          <div style="display:flex;flex-direction:column;gap:10px">
            
              <div style="border:1px solid var(--uw-border);border-radius:var(--r-md);background:var(--uw-surface);overflow:hidden">
                <button type="button" class="cc-faq-btn ccx-h4" style="all:unset;box-sizing:border-box;width:100%;display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding:17px 20px;cursor:pointer">
                  <span style="font-size:15.5px;font-weight:500;color:var(--uw-ink-900);line-height:1.45">Will this carry over to Step 2?</span>
                  <span class="cc-faq-sign" style="flex:none;font-family:var(--font-display);font-size:22px;line-height:1;color:var(--uw-blue-500);width:22px;text-align:center;margin-top:1px">+</span>
                </button>
                <div class="cc-faq-a" style="padding:0 20px 18px;font-size:14.5px;line-height:1.62;color:var(--uw-ink-600);max-width:66ch;display:none">Yes. The N+1 method and the decision frameworks are built to carry forward, so your Step 1 base becomes a launchpad and your Step 2 prep starts easier.</div>
              </div>
            
          </div>
        </div>
      
    </div>
  </section>

  <!-- URGENCY -->
  <section style="background:var(--uw-blue-800);color:#fff;position:relative;overflow:hidden;padding:clamp(56px,7vw,88px) clamp(20px,5vw,48px)">
    <div class="dot-tex" style="position:absolute;inset:0;opacity:.6"></div>
    <div style="position:relative;z-index:1;max-width:760px;margin:0 auto;text-align:center">
      <p style="font-family:var(--font-display);font-weight:400;font-size:clamp(22px,2.7vw,32px);line-height:1.4;letter-spacing:-0.015em;margin:0">The 2026 Step 1 format is already live. Every week spent on old prep is a week training for an exam that <span style="font-style:italic;color:var(--uw-blue-100)">no longer exists.</span> The sooner you align to the current blueprint, the more of your study time actually counts.</p>
      <div style="display:flex;justify-content:center;margin-top:clamp(28px,3.5vw,40px)">
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
        <a href="https://wa.me/19192015700?text=I%20am%20interested%20in%20the%20Step%201%20live%20crash%20course" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:10px;background:#25D366;color:#fff;font-weight:600;font-size:15px;padding:13px 22px;border-radius:var(--r-md);box-shadow:var(--shadow-sm)">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" style="flex:none"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38c1.45.79 3.08 1.21 4.79 1.21 5.46 0 9.91-4.45 9.91-9.91C21.95 6.45 17.5 2 12.04 2zm0 18.15c-1.52 0-3.01-.41-4.31-1.18l-.31-.18-3.12.82.83-3.04-.2-.31a8.21 8.21 0 0 1-1.26-4.35c0-4.54 3.7-8.23 8.24-8.23 4.54 0 8.23 3.69 8.23 8.23 0 4.54-3.69 8.24-8.23 8.24zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81-.23-.08-.39-.12-.56.12-.16.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.12-1.05-.39-1.99-1.23-.74-.66-1.23-1.47-1.38-1.72-.14-.25-.01-.38.11-.51.11-.11.25-.29.37-.43.12-.14.16-.25.25-.41.08-.17.04-.31-.02-.43-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.42-.14-.01-.31-.01-.48-.01-.16 0-.43.06-.66.31-.23.25-.86.85-.86 2.07 0 1.22.89 2.4 1.01 2.56.12.17 1.75 2.67 4.23 3.74.59.26 1.05.41 1.41.52.59.19 1.13.16 1.56.1.48-.07 1.47-.6 1.67-1.18.21-.58.21-1.07.14-1.18-.06-.1-.22-.16-.47-.28z"></path></svg>
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
              <label style="display:flex;flex-direction:column;gap:6px;font-size:13px;color:var(--uw-ink-700);font-weight:500">Full name<input class="ccx-f1" required="" type="text" name="name" placeholder="Your name" style="font-family:var(--font-sans);font-size:14px;padding:11px 13px;border:1px solid var(--uw-border-strong);border-radius:var(--r-md);background:var(--uw-surface);color:var(--uw-ink-900);outline:none"></label>
              <label style="display:flex;flex-direction:column;gap:6px;font-size:13px;color:var(--uw-ink-700);font-weight:500">Email<input class="ccx-f1" required="" type="email" name="email" placeholder="you@email.com" style="font-family:var(--font-sans);font-size:14px;padding:11px 13px;border:1px solid var(--uw-border-strong);border-radius:var(--r-md);background:var(--uw-surface);color:var(--uw-ink-900);outline:none"></label>
            </div>
            <label style="display:flex;flex-direction:column;gap:6px;font-size:13px;color:var(--uw-ink-700);font-weight:500">Subject<input class="ccx-f1" type="text" name="subject" placeholder="What's this about?" style="font-family:var(--font-sans);font-size:14px;padding:11px 13px;border:1px solid var(--uw-border-strong);border-radius:var(--r-md);background:var(--uw-surface);color:var(--uw-ink-900);outline:none"></label>
            <label style="display:flex;flex-direction:column;gap:6px;font-size:13px;color:var(--uw-ink-700);font-weight:500">Message<textarea class="ccx-f1" required="" name="message" rows="4" placeholder="Tell us where you are in your prep…" style="font-family:var(--font-sans);font-size:14px;padding:11px 13px;border:1px solid var(--uw-border-strong);border-radius:var(--r-md);background:var(--uw-surface);color:var(--uw-ink-900);outline:none;resize:vertical"></textarea></label>
            <div style="position:absolute;left:-9999px" aria-hidden="true"><label>Leave this empty<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
            <div class="cf-turnstile" data-sitekey="<?php echo htmlspecialchars(getenv('TURNSTILE_SITE_KEY') ?: '0x4AAAAAAD6jImzHI3FyAiUO', ENT_QUOTES); ?>"></div>
            <p id="ccError" role="status" aria-live="polite" style="display:none;margin:0;font-size:13.5px;color:var(--uw-red-600,#c0392b)"></p>
            <button class="ccx-h5" type="submit" style="all:unset;box-sizing:border-box;text-align:center;background:var(--uw-red-500);color:#fff;font-weight:500;font-size:15px;padding:14px;border-radius:var(--r-md);cursor:pointer;transition:background var(--dur-fast)">Send message</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer style="background:var(--uw-blue-900);color:rgba(255,255,255,.7);padding:clamp(40px,5vw,56px) clamp(20px,5vw,48px)">
    <div style="max-width:1080px;margin:0 auto;display:flex;justify-content:space-between;align-items:center;gap:24px;flex-wrap:wrap">
      <div style="display:flex;flex-direction:column;gap:12px">
        <img src="/assets/usmle-design-system/assets/Logo-Horizontal-Dark.svg" alt="USMLE Wise" style="height:30px">
        <span style="font-size:12.5px;max-width:40ch;line-height:1.5">USMLE Step 1 Ultra High-Yield Live Crash Course — 7 days, 70 hours, zero fluff.</span>
      </div>
      <div style="font-size:12px;color:rgba(255,255,255,.5)">© 2026 USMLE Wise. All rights reserved.</div>
    </div>
  </footer>




</div>
<script>
(function () {
  // Stat count-up, ported from the design's animateStats(): seed a zero state so
  // the real number never flashes before animating, then ease 0 to the value when
  // the stat row scrolls into view. The final numbers live in the HTML, so with
  // JS off or on a reduced-motion setting the row simply reads correctly.
  var nums = document.querySelectorAll('.cc-stat-num');
  if (!nums.length) return;
  if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

  var ease = function (t) { return 1 - Math.pow(1 - t, 3); };
  function fmt(v, dec, comma) {
    var s = v.toFixed(dec);
    if (comma) s = Number(s).toLocaleString('en-US');
    return s;
  }

  function run(el) {
    if (el._cuDone) return;
    el._cuDone = true;
    var to = parseFloat(el.dataset.cuTo);
    var to2 = el.dataset.cuTo2 ? parseFloat(el.dataset.cuTo2) : null;
    var dec = parseInt(el.dataset.cuDec || '0', 10);
    var suf = el.dataset.cuSuf || '';
    var sep = el.dataset.cuSep || '';
    var comma = el.dataset.cuComma === '1';
    var finalTxt = el.dataset.cuFinal || null;
    var dur = 1500;
    var start = performance.now();
    function tick(now) {
      var p = Math.min((now - start) / dur, 1);
      var e = ease(p);
      var out = fmt(to * e, dec, comma);
      if (to2 != null) out += sep + fmt(to2 * e, dec, comma);
      el.textContent = (p >= 1 && finalTxt != null) ? finalTxt : out + suf;
      if (p < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
  }

  nums.forEach(function (el) {
    var dec = parseInt(el.dataset.cuDec || '0', 10);
    var comma = el.dataset.cuComma === '1';
    var z = fmt(0, dec, comma);
    if (el.dataset.cuTo2) z += (el.dataset.cuSep || '') + fmt(0, dec, comma);
    el.textContent = z + (el.dataset.cuSuf || '');
  });

  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (en) {
      if (en.isIntersecting) { run(en.target); io.unobserve(en.target); }
    });
  }, { threshold: 0.5 });
  nums.forEach(function (n) { io.observe(n); });
})();
</script>
<script>
(function () {
  // Marquee: ported from the design's componentDidMount(). The CSS keeps the
  // track's animation paused until a ".cc-run" class lands on the mask, so it
  // only starts once the row actually scrolls into view (same behavior the
  // React component produced via its own IntersectionObserver).
  function startMarquee(tries) {
    tries = tries || 0;
    var mq = document.querySelector('.cc-marquee-mask');
    if (!mq) { if (tries < 100) setTimeout(function () { startMarquee(tries + 1); }, 100); return; }
    if (!('IntersectionObserver' in window)) { mq.classList.add('cc-run'); return; }
    var io = new IntersectionObserver(function (es) {
      if (es.some(function (e) { return e.isIntersecting; })) { mq.classList.add('cc-run'); io.disconnect(); }
    }, { threshold: 0.2 });
    io.observe(mq);
  }
  startMarquee();

  // Hero image autosize: ported from the design's _fitHero(). On wide screens
  // the hero photo targets 720px, but shrinks itself so the Enroll button
  // below it never gets pushed past the first viewport.
  function fitHero() {
    var img = document.querySelector('.cc-hero-img');
    var hero = document.querySelector('.cc-hero');
    if (!img || !hero) return;
    var btn = hero.lastElementChild;
    if (window.innerWidth <= 560) { img.style.maxWidth = ''; return; }
    img.style.maxWidth = '720px';
    var imgH = img.getBoundingClientRect().height;
    var btnBottom = btn.getBoundingClientRect().bottom + window.scrollY;
    var target = window.innerHeight - 28;
    var over = btnBottom - target;
    if (over > 0) img.style.maxWidth = Math.max(260, Math.min(720, (imgH - over) * 16 / 9)) + 'px';
  }
  function fitLater(n) {
    n = n || 0;
    if (!document.querySelector('.cc-hero-img')) { if (n < 100) setTimeout(function () { fitLater(n + 1); }, 100); return; }
    fitHero();
    setTimeout(fitHero, 400);
  }
  fitLater();
  window.addEventListener('resize', fitHero);
})();
</script>
<script>
(function () {
  // FAQ accordion, one open at a time with a +/- sign. Mirrors the design's
  // toggle(id) reducer, which kept a single openId in state.
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
        btn.querySelector('.cc-faq-sign').innerHTML = '\u2013';
        var ans = btn.parentElement.querySelector('.cc-faq-a');
        if (ans) ans.style.display = '';
      }
    });
  });

  // Promo code field: decorative in the design (no onClick wired at all), so
  // it stays a plain text input + Apply button with no-op JS rather than a
  // silently broken "working" field.
  var applyBtn = document.querySelector('.cc-promo button');
  if (applyBtn) applyBtn.setAttribute('type', 'button');

  // Contact form. The design's submit only flipped a `sent` flag, so it is wired
  // to the WiseCRM intake here with Turnstile + honeypot, same as the sibling
  // Step 1 landing pages.
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
</body>
</html>
