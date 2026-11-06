<?php
$pageTitle = "Research for USMLE: Start Research With No Experience | Research Wise";
$pageDescription = "A 9-hour live workshop over 3 Sundays: master case reports, original studies, systematic reviews and meta-analyses. Built for absolute beginners.";
$canonical = "https://usmlewise.com/research-wise";
$bodyClass = "msp";
$stylesheets = [
    "/styles/research-catalyst.css",
    "/styles/research-wise.css",
    "/styles/blog.css"
];
$scripts = [
    "/js/research-catalyst.js"
];

/* FAQ: one source for the accordion and the FAQPage structured data. */
$rwFaqs = [
    [
        'q' => 'Do I need any research experience?',
        'a' => 'No. The workshop is built for absolute beginners. You don\'t need a research idea, institutional access, IRB approval or professor connections to join.',
    ],
    [
        'q' => 'Are the sessions recorded?',
        'a' => 'Yes. Every session is recorded, so if you can\'t attend live, you still get full access to the recordings.',
    ],
    [
        'q' => 'Does this guarantee a publication?',
        'a' => 'No. You leave with the skills, a real first project, and a clear next step. Acceptance depends on the journal.',
    ],
    [
        'q' => 'Will research help my residency application?',
        'a' => 'Yes. Programs look at research when they review applications, especially for IMGs. Starting early gives you more time to finish a project before you apply.',
    ],
    [
        'q' => 'Will I get a certificate?',
        'a' => 'Yes, when you finish all 3 days.',
    ],
    [
        'q' => 'I already have a project running. Is this for me?',
        'a' => 'Research Wise is for your first project. If you\'re already working on one, Original Research or Research Catalyst puts a mentor directly on your work.',
    ],
    [
        'q' => 'How is this different from Research Cohort Access?',
        'a' => 'Research Wise is the live starting point. Research Cohort Access is a self-paced library for once you know the basics and have a project underway.',
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>

<div class="rw">

  

  <!-- HERO -->
  <section class="rw-hero" style="position:relative;overflow:hidden;isolation:isolate;padding:clamp(48px,7vw,88px) clamp(20px,5vw,48px) clamp(56px,7vw,88px);background:radial-gradient(1000px 520px at 88% -8%, var(--uw-blue-50), transparent), radial-gradient(700px 420px at 0% 30%, var(--uw-red-50), transparent 70%), var(--uw-surface)">
    <div aria-hidden="true" style="position:absolute;inset:0;z-index:-1;pointer-events:none;overflow:hidden">
      <div class="rw-wall" style="position:absolute;left:50%;top:50%;width:150%;transform:translate(-50%,-50%) rotate(-8deg);display:grid;grid-template-columns:repeat(5,1fr);gap:18px;opacity:.22;filter:saturate(.7)"><img src="/assets/research-wise/award-1.webp" alt="" loading="eager" decoding="async" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:10px;display:block;box-shadow:0 6px 20px rgba(24,28,77,.18)"><img src="/assets/research-wise/award-2.webp" alt="" loading="eager" decoding="async" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:10px;display:block;box-shadow:0 6px 20px rgba(24,28,77,.18)"><img src="/assets/research-wise/award-3.webp" alt="" loading="eager" decoding="async" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:10px;display:block;box-shadow:0 6px 20px rgba(24,28,77,.18)"><img src="/assets/research-wise/award-4.webp" alt="" loading="eager" decoding="async" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:10px;display:block;box-shadow:0 6px 20px rgba(24,28,77,.18)"><img src="/assets/research-wise/award-5.webp" alt="" loading="eager" decoding="async" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:10px;display:block;box-shadow:0 6px 20px rgba(24,28,77,.18)"><img src="/assets/research-wise/award-5.webp" alt="" loading="eager" decoding="async" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:10px;display:block;box-shadow:0 6px 20px rgba(24,28,77,.18)"><img src="/assets/research-wise/award-4.webp" alt="" loading="eager" decoding="async" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:10px;display:block;box-shadow:0 6px 20px rgba(24,28,77,.18)"><img src="/assets/research-wise/award-1.webp" alt="" loading="eager" decoding="async" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:10px;display:block;box-shadow:0 6px 20px rgba(24,28,77,.18)"><img src="/assets/research-wise/award-3.webp" alt="" loading="eager" decoding="async" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:10px;display:block;box-shadow:0 6px 20px rgba(24,28,77,.18)"><img src="/assets/research-wise/award-2.webp" alt="" loading="eager" decoding="async" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:10px;display:block;box-shadow:0 6px 20px rgba(24,28,77,.18)"><img src="/assets/research-wise/award-2.webp" alt="" loading="eager" decoding="async" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:10px;display:block;box-shadow:0 6px 20px rgba(24,28,77,.18)"><img src="/assets/research-wise/award-3.webp" alt="" loading="eager" decoding="async" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:10px;display:block;box-shadow:0 6px 20px rgba(24,28,77,.18)"><img src="/assets/research-wise/award-1.webp" alt="" loading="eager" decoding="async" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:10px;display:block;box-shadow:0 6px 20px rgba(24,28,77,.18)"><img src="/assets/research-wise/award-5.webp" alt="" loading="eager" decoding="async" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:10px;display:block;box-shadow:0 6px 20px rgba(24,28,77,.18)"><img src="/assets/research-wise/award-4.webp" alt="" loading="eager" decoding="async" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:10px;display:block;box-shadow:0 6px 20px rgba(24,28,77,.18)"></div>
      <div style="position:absolute;inset:0;background:radial-gradient(ellipse 62% 58% at 50% 42%, rgba(255,255,255,.97) 35%, rgba(255,255,255,.82) 62%, rgba(255,255,255,.45) 100%)"></div>
      <div style="position:absolute;left:0;right:0;bottom:0;height:160px;background:linear-gradient(to bottom, rgba(255,255,255,0), #fff)"></div>
      <div style="position:absolute;left:0;right:0;top:0;height:6px;background:linear-gradient(90deg,var(--uw-blue-500) 0 70%,var(--uw-red-500) 70% 100%)"></div>
    </div>
    <div style="max-width:960px;margin:0 auto;text-align:center;display:flex;flex-direction:column;align-items:center">
      <div class="rw-lbl" style="display:inline-flex;align-items:center;gap:12px;margin-bottom:24px;padding:6px 6px 6px 18px;border-radius:999px;background:#fff;border:1px solid var(--uw-blue-100);box-shadow:var(--shadow-md);font-family:var(--font-mono);font-size:12.5px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;white-space:nowrap"><span style="color:var(--uw-blue-600)">Basics of Research</span><span style="padding:6px 12px;border-radius:999px;background:var(--uw-blue-500);color:#fff;letter-spacing:.1em">Level 1 Workshop</span></div>
      <h1 style="font-family:var(--font-display);font-weight:400;font-size:clamp(32px,5vw,56px);line-height:1.12;letter-spacing:-0.015em;color:var(--uw-ink-900);margin:0;max-width:900px;text-wrap:balance">Master case reports, original studies, systematic reviews and meta-analyses <span style="color:var(--uw-blue-500)">in just <em style="color:var(--uw-red-500);font-style:italic">3&nbsp;days</em> of live training.</span></h1>
      <p style="margin:20px 0 0;max-width:640px;font-size:clamp(16px,1.6vw,18.5px);line-height:1.6;color:var(--uw-ink-600);text-wrap:pretty">A 9-hour live workshop taught from the basics by mentors who publish. One 3-hour session every Sunday for 3 weeks.</p>
      <div style="margin-top:22px;max-width:640px;padding:14px 20px;border-radius:var(--r-lg);background:#fff;border:1px solid var(--uw-border);box-shadow:var(--shadow-sm);font-size:15.5px;line-height:1.55;color:var(--uw-ink-700);text-wrap:pretty"><strong style="font-weight:600;color:var(--uw-blue-600)">Built for absolute beginners.</strong> No research idea, institutional access, IRB approval or professor connections needed.</div>

      <a class="rwh1" href="#reserve" data-rw-reserve style="margin-top:28px;display:inline-flex;align-items:center;justify-content:center;gap:10px;height:56px;padding:0 34px;border-radius:var(--r-md);background:var(--uw-red-500);color:#fff;font-size:17px;font-weight:600;box-shadow:0 10px 24px rgba(227,33,36,.22)">Reserve my spot · $49</a>
      <div style="margin-top:16px;display:flex;align-items:flex-start;justify-content:center;gap:8px;max-width:560px;font-size:14.5px;line-height:1.5;color:var(--uw-ink-700);text-wrap:pretty">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
        <span>100% money-back satisfaction guarantee. If you're not satisfied, you get your money back.</span>
      </div>
      <div style="position:relative;width:100%;max-width:880px;margin-top:40px">
        <div class="rw-3" style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));background:#fff;border:1px solid var(--uw-border);border-top:4px solid var(--uw-blue-500);border-radius:var(--r-lg);box-shadow:var(--shadow-lg);overflow:hidden;text-align:left">
          <div class="rw-dc-col" style="padding:24px 26px;display:flex;flex-direction:column;gap:6px">
            <span style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.14em;color:var(--uw-red-500);font-weight:600">DAY 1</span>
            <span style="font-family:var(--font-display);font-size:24px;line-height:1.2;color:var(--uw-blue-500)">Sunday, Nov 15</span>
            <span style="font-size:15px;line-height:1.4;color:var(--uw-ink-800);font-weight:500">Master case reports and case series</span>
            <span style="font-size:13.5px;color:var(--uw-ink-500)">10 AM to 1 PM EST</span>
          </div>
          <div class="rw-dc-col" style="padding:24px 26px;display:flex;flex-direction:column;gap:6px;border-left:1px solid var(--uw-border)">
            <span style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.14em;color:var(--uw-red-500);font-weight:600">DAY 2</span>
            <span style="font-family:var(--font-display);font-size:24px;line-height:1.2;color:var(--uw-blue-500)">Sunday, Nov 22</span>
            <span style="font-size:15px;line-height:1.4;color:var(--uw-ink-800);font-weight:500">Master original studies</span>
            <span style="font-size:13.5px;color:var(--uw-ink-500)">10 AM to 1 PM EST</span>
          </div>
          <div class="rw-dc-col" style="padding:24px 26px;display:flex;flex-direction:column;gap:6px;border-left:1px solid var(--uw-border)">
            <span style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.14em;color:var(--uw-red-500);font-weight:600">DAY 3</span>
            <span style="font-family:var(--font-display);font-size:24px;line-height:1.2;color:var(--uw-blue-500)">Sunday, Nov 29</span>
            <span style="font-size:15px;line-height:1.4;color:var(--uw-ink-800);font-weight:500">Master systematic reviews and meta-analyses</span>
            <span style="font-size:13.5px;color:var(--uw-ink-500)">10 AM to 1 PM EST</span>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- STATS -->
  <section style="background:var(--uw-surface);border-top:1px solid var(--uw-border);border-bottom:1px solid var(--uw-border);padding:clamp(44px,6vw,72px) clamp(20px,5vw,48px)">
    <div class="rw-stats" style="max-width:1080px;margin:0 auto;display:grid;grid-template-columns:repeat(4,minmax(0,1fr));text-align:center;align-items:center">
      <div style="display:flex;flex-direction:column;align-items:center;gap:10px;padding:0 16px;" class="rw-stat"><span style="font-family:var(--font-display);font-weight:600;font-size:clamp(40px,5vw,60px);line-height:1;letter-spacing:-0.02em;color:var(--uw-blue-500);font-variant-numeric:tabular-nums"><span data-rw-count="90">90</span>+</span><span style="font-size:15px;line-height:1.45;color:var(--uw-ink-500);max-width:16ch;text-wrap:balance">Students &amp; professionals guided</span></div>
      <div style="display:flex;flex-direction:column;align-items:center;gap:10px;padding:0 16px;border-left:1px solid var(--uw-border);" class="rw-stat"><span style="font-family:var(--font-display);font-weight:600;font-size:clamp(40px,5vw,60px);line-height:1;letter-spacing:-0.02em;color:var(--uw-blue-500);font-variant-numeric:tabular-nums"><span data-rw-count="30">30</span>+</span><span style="font-size:15px;line-height:1.45;color:var(--uw-ink-500);max-width:16ch;text-wrap:balance">Publications &amp; presentations</span></div>
      <div style="display:flex;flex-direction:column;align-items:center;gap:10px;padding:0 16px;border-left:1px solid var(--uw-border);" class="rw-stat"><span style="font-family:var(--font-display);font-weight:600;font-size:clamp(40px,5vw,60px);line-height:1;letter-spacing:-0.02em;color:var(--uw-blue-500);font-variant-numeric:tabular-nums"><span data-rw-count="10">10</span>+</span><span style="font-size:15px;line-height:1.45;color:var(--uw-ink-500);max-width:16ch;text-wrap:balance">Active projects running</span></div>
      <div style="display:flex;flex-direction:column;align-items:center;gap:10px;padding:0 16px;border-left:1px solid var(--uw-border);" class="rw-stat"><span style="font-family:var(--font-display);font-weight:600;font-size:clamp(40px,5vw,60px);line-height:1;letter-spacing:-0.02em;color:var(--uw-blue-500);font-variant-numeric:tabular-nums"><span data-rw-count="65">65</span>+</span><span style="font-size:15px;line-height:1.45;color:var(--uw-ink-500);max-width:16ch;text-wrap:balance">Projects mentored</span></div>
    </div>
  </section>

  <!-- PROOF -->
  <section id="results" style="scroll-margin-top:64px;padding:clamp(64px,8vw,96px) clamp(20px,5vw,48px);background:#fff;border-top:1px solid var(--uw-border)">
    <div style="max-width:1000px;margin:0 auto">
      <div style="text-align:center">
        <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px">From our students</div>
        <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,42px);line-height:1.15;letter-spacing:-0.02em;color:var(--uw-ink-900);margin:0;text-wrap:balance">From students <em style="font-style:italic;color:var(--uw-blue-500)">who started here.</em></h2>
      </div>
      <div style="margin-top:40px;display:flex;justify-content:space-between;align-items:baseline;gap:16px;flex-wrap:wrap">
        <span style="font-family:var(--font-display);font-size:22px;color:var(--uw-blue-600)">Awards our students won this year</span>
        <a class="rwh2" href="/research-awards" style="display:inline-flex;align-items:center;gap:6px;font-size:14.5px;font-weight:600;color:var(--uw-blue-500)">See all research awards<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"></path></svg></a>
      </div>
      <div class="rw-aw-row" style="margin:20px calc(-1 * clamp(20px,5vw,48px)) 0;padding:4px clamp(20px,5vw,48px) 16px;display:flex;gap:16px;overflow-x:auto;scroll-snap-type:x mandatory;scroll-padding-left:clamp(20px,5vw,48px);-webkit-overflow-scrolling:touch">
        <div class="rwh3 rw-aw" style="flex:none;width:300px;scroll-snap-align:start;display:flex;flex-direction:column;background:#fff;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden">
          <div style="position:relative;width:100%;aspect-ratio:4/3;background:var(--uw-blue-50)"><img src="/assets/research-wise/award-1.webp" alt="" loading="lazy" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:top;display:block">
            <span style="position:absolute;top:12px;left:12px;padding:4px 10px;border-radius:999px;background:var(--uw-blue-500);color:#fff;font-size:12px;font-weight:600;pointer-events:none">Top 65 of 1,300 posters</span></div>
          <div style="padding:18px 20px 20px;display:flex;flex-direction:column;gap:8px;flex:1">
            <span style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500)">AMA Research Challenge 2026</span>
            <span style="font-family:var(--font-display);font-size:19px;line-height:1.25;color:var(--uw-ink-900)">Diarrhoea Screening at the Doorstep</span>
            <span style="font-size:14px;line-height:1.5;color:var(--uw-ink-600);text-wrap:pretty">A field study of WHO-defined diarrhoea screening during India's Pulse Polio campaign.</span>
            <a class="rwh2" href="/research-awards/ama-research-challenge-2026-diarrhoea-doorstep-screening" style="margin-top:auto;padding-top:8px;display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:600;color:var(--uw-blue-500)">Read more<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"></path></svg></a>
          </div>
        </div>
        <div class="rwh3 rw-aw" style="flex:none;width:300px;scroll-snap-align:start;display:flex;flex-direction:column;background:#fff;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden">
          <div style="position:relative;width:100%;aspect-ratio:4/3;background:var(--uw-blue-50)"><img src="/assets/research-wise/award-2.webp" alt="" loading="lazy" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:top;display:block">
            <span style="position:absolute;top:12px;left:12px;padding:4px 10px;border-radius:999px;background:var(--uw-blue-500);color:#fff;font-size:12px;font-weight:600;pointer-events:none">Presidential Award</span></div>
          <div style="padding:18px 20px 20px;display:flex;flex-direction:column;gap:8px;flex:1">
            <span style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500)">ACG 2026 Annual Scientific Meeting</span>
            <span style="font-family:var(--font-display);font-size:19px;line-height:1.25;color:var(--uw-ink-900)">Early Microbiota Restoration for C. difficile Infection</span>
            <span style="font-size:14px;line-height:1.5;color:var(--uw-ink-600);text-wrap:pretty">A systematic review and meta-analysis on early gut microbiota restoration for C. diff infection.</span>
            <a class="rwh2" href="/research-awards/acg-presidential-award-microbiota-restoration" style="margin-top:auto;padding-top:8px;display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:600;color:var(--uw-blue-500)">Read more<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"></path></svg></a>
          </div>
        </div>
        <div class="rwh3 rw-aw" style="flex:none;width:300px;scroll-snap-align:start;display:flex;flex-direction:column;background:#fff;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden">
          <div style="position:relative;width:100%;aspect-ratio:4/3;background:var(--uw-blue-50)"><img src="/assets/research-wise/award-3.webp" alt="" loading="lazy" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:top;display:block">
            <span style="position:absolute;top:12px;left:12px;padding:4px 10px;border-radius:999px;background:var(--uw-blue-500);color:#fff;font-size:12px;font-weight:600;pointer-events:none">Best Poster Presentation</span></div>
          <div style="padding:18px 20px 20px;display:flex;flex-direction:column;gap:8px;flex:1">
            <span style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500)">AACP 2026</span>
            <span style="font-family:var(--font-display);font-size:19px;line-height:1.25;color:var(--uw-ink-900)">LGBTQIA+ Mental Health in Delhi</span>
            <span style="font-size:14px;line-height:1.5;color:var(--uw-ink-600);text-wrap:pretty">A cross-sectional study of depression, suicidal ideation, and perceived discrimination.</span>
            <a class="rwh2" href="/research-awards/aacp-2026-best-poster-lgbtq-mental-health-delhi" style="margin-top:auto;padding-top:8px;display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:600;color:var(--uw-blue-500)">Read more<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"></path></svg></a>
          </div>
        </div>
        <div class="rwh3 rw-aw" style="flex:none;width:300px;scroll-snap-align:start;display:flex;flex-direction:column;background:#fff;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden">
          <div style="position:relative;width:100%;aspect-ratio:4/3;background:var(--uw-blue-50)"><img src="/assets/research-wise/award-4.webp" alt="" loading="lazy" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:top;display:block">
            <span style="position:absolute;top:12px;left:12px;padding:4px 10px;border-radius:999px;background:var(--uw-blue-500);color:#fff;font-size:12px;font-weight:600;pointer-events:none">Second Prize</span></div>
          <div style="padding:18px 20px 20px;display:flex;flex-direction:column;gap:8px;flex:1">
            <span style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500)">7th Annual Neuro-Oncology Symposium 2026</span>
            <span style="font-family:var(--font-display);font-size:19px;line-height:1.25;color:var(--uw-ink-900)">Place of Death Among US Brain Tumour Decedents</span>
            <span style="font-size:14px;line-height:1.5;color:var(--uw-ink-600);text-wrap:pretty">A CDC WONDER joinpoint analysis of where US brain tumour patients die.</span>
            <a class="rwh2" href="/research-awards/7anos-2026-second-prize-place-of-death-brain-tumour" style="margin-top:auto;padding-top:8px;display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:600;color:var(--uw-blue-500)">Read more<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"></path></svg></a>
          </div>
        </div>
        <div class="rwh3 rw-aw" style="flex:none;width:300px;scroll-snap-align:start;display:flex;flex-direction:column;background:#fff;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden">
          <div style="position:relative;width:100%;aspect-ratio:4/3;background:var(--uw-blue-50)"><img src="/assets/research-wise/award-5.webp" alt="" loading="lazy" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:top;display:block">
            <span style="position:absolute;top:12px;left:12px;padding:4px 10px;border-radius:999px;background:var(--uw-blue-500);color:#fff;font-size:12px;font-weight:600;pointer-events:none">Second Place</span></div>
          <div style="padding:18px 20px 20px;display:flex;flex-direction:column;gap:8px;flex:1">
            <span style="font-family:var(--font-mono);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500)">ACP Illinois Chapter 2026</span>
            <span style="font-family:var(--font-display);font-size:19px;line-height:1.25;color:var(--uw-ink-900)">Heparin Resistance in Cardiac Surgery</span>
            <span style="font-size:14px;line-height:1.5;color:var(--uw-ink-600);text-wrap:pretty">A systematic review and proportion meta-analysis of heparin resistance during cardiopulmonary bypass.</span>
            <a class="rwh2" href="/research-awards/acp-illinois-2026-second-place-heparin-resistance" style="margin-top:auto;padding-top:8px;display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:600;color:var(--uw-blue-500)">Read more<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"></path></svg></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROBLEM -->
  <section style="padding:clamp(64px,8vw,96px) clamp(20px,5vw,48px);background:#fff">
    <div style="max-width:1000px;margin:0 auto;text-align:center">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px">The problem</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,42px);line-height:1.15;letter-spacing:-0.02em;color:var(--uw-ink-900);margin:0 auto;max-width:760px;text-wrap:balance">Residency programs want research. <span style="color:var(--uw-blue-500)">Nobody shows you how to start.</span></h2>
      <div class="rw-3" style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:16px;margin-top:40px;text-align:left">
        <div style="display:flex;gap:12px;align-items:flex-start;padding:22px;border-radius:var(--r-lg);background:var(--uw-red-50);border:1px solid var(--uw-red-100)"><span style="flex:none;width:28px;height:28px;border-radius:50%;background:#fff;display:flex;align-items:center;justify-content:center"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="var(--uw-red-500)" stroke-width="2.5" stroke-linecap="round"><path d="M18 6 6 18M6 6l12 12"></path></svg></span><span style="font-size:15.5px;line-height:1.5;color:var(--uw-ink-800);text-wrap:pretty">You don't know whether your first paper should be a case report, a study, or a review.</span></div>
        <div style="display:flex;gap:12px;align-items:flex-start;padding:22px;border-radius:var(--r-lg);background:var(--uw-red-50);border:1px solid var(--uw-red-100)"><span style="flex:none;width:28px;height:28px;border-radius:50%;background:#fff;display:flex;align-items:center;justify-content:center"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="var(--uw-red-500)" stroke-width="2.5" stroke-linecap="round"><path d="M18 6 6 18M6 6l12 12"></path></svg></span><span style="font-size:15.5px;line-height:1.5;color:var(--uw-ink-800);text-wrap:pretty">You don't have a lab, a mentor, or a dataset.</span></div>
        <div style="display:flex;gap:12px;align-items:flex-start;padding:22px;border-radius:var(--r-lg);background:var(--uw-red-50);border:1px solid var(--uw-red-100)"><span style="flex:none;width:28px;height:28px;border-radius:50%;background:#fff;display:flex;align-items:center;justify-content:center"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="var(--uw-red-500)" stroke-width="2.5" stroke-linecap="round"><path d="M18 6 6 18M6 6l12 12"></path></svg></span><span style="font-size:15.5px;line-height:1.5;color:var(--uw-ink-800);text-wrap:pretty">Months pass, and the research section of your CV is still empty.</span></div>
      </div>
      <div class="dot-tex" style="margin-top:28px;padding:clamp(28px,4vw,40px) clamp(20px,4vw,40px);border-radius:var(--r-lg);background-color:var(--uw-blue-500);display:flex;flex-direction:column;gap:8px">
        <span style="font-family:var(--font-display);font-size:clamp(22px,2.6vw,30px);line-height:1.25;color:#fff;text-wrap:balance">Every researcher started with one first project.</span>
        <span style="font-family:var(--font-display);font-style:italic;font-size:clamp(22px,2.6vw,30px);line-height:1.25;color:var(--uw-success-300)">In 3 days, you'll have yours.</span>
      </div>
    </div>
  </section>

  <!-- EACH DAY -->
  <section id="days" style="scroll-margin-top:64px;padding:clamp(64px,8vw,96px) clamp(20px,5vw,48px);background:var(--uw-blue-50);border-top:1px solid var(--uw-blue-100)">
    <div style="max-width:960px;margin:0 auto">
      <div style="text-align:center">
        <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px">What happens each day</div>
        <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,42px);line-height:1.15;letter-spacing:-0.02em;color:var(--uw-ink-900);margin:0;text-wrap:balance">3 Sundays. 3 types of paper. <em style="font-style:italic;color:var(--uw-red-500)">9 live hours.</em></h2>
      </div>
      <div style="display:flex;flex-direction:column;gap:16px;margin-top:40px">
        <div class="rw-day" style="display:grid;grid-template-columns:200px minmax(0,1fr);padding:0;overflow:hidden;background:#fff;border:1px solid var(--uw-border);border-radius:var(--r-lg)">
          <div class="rw-day-left" style="display:flex;flex-direction:column;justify-content:center;gap:6px;padding:28px 24px;background:var(--uw-blue-50);border-right:1px solid var(--uw-blue-100)">
            <span style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.14em;color:var(--uw-red-500);font-weight:600">DAY 1</span>
            <span style="font-family:var(--font-display);font-size:24px;line-height:1.2;color:var(--uw-blue-500)">Sun, Nov 15</span>
            <span style="font-size:13.5px;color:var(--uw-ink-500)">10 AM to 1 PM EST</span>
          </div>
          <div class="rw-day-right" style="padding:28px;display:flex;flex-direction:column;gap:8px">
            <h3 style="font-family:var(--font-display);font-weight:400;font-size:clamp(22px,2.4vw,26px);line-height:1.2;color:var(--uw-ink-900);margin:0">Master case reports and case series</h3>
            <span style="font-size:14px;color:var(--uw-ink-500)">With Shivani Ravipati</span>
            <p style="margin:4px 0 0;font-size:15.5px;line-height:1.6;color:var(--uw-ink-700);text-wrap:pretty">Go from zero to your first case report, including how a case report is built section by section.</p>
            <div style="margin-top:8px;padding:12px 16px;border-radius:var(--r-md);background:var(--uw-blue-50);font-size:14.5px;line-height:1.5;color:var(--uw-blue-700)"><strong style="font-weight:600">You leave with:</strong> the step-by-step process to publish your first case report.</div>
          </div>
        </div>
        <div class="rw-day" style="display:grid;grid-template-columns:200px minmax(0,1fr);padding:0;overflow:hidden;background:#fff;border:1px solid var(--uw-border);border-radius:var(--r-lg)">
          <div class="rw-day-left" style="display:flex;flex-direction:column;justify-content:center;gap:6px;padding:28px 24px;background:var(--uw-blue-50);border-right:1px solid var(--uw-blue-100)">
            <span style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.14em;color:var(--uw-red-500);font-weight:600">DAY 2</span>
            <span style="font-family:var(--font-display);font-size:24px;line-height:1.2;color:var(--uw-blue-500)">Sun, Nov 22</span>
            <span style="font-size:13.5px;color:var(--uw-ink-500)">10 AM to 1 PM EST</span>
          </div>
          <div class="rw-day-right" style="padding:28px;display:flex;flex-direction:column;gap:8px">
            <h3 style="font-family:var(--font-display);font-weight:400;font-size:clamp(22px,2.4vw,26px);line-height:1.2;color:var(--uw-ink-900);margin:0">Master original studies</h3>
            <span style="font-size:14px;color:var(--uw-ink-500)">With Muhammad Ahmad Barakat</span>
            <p style="margin:4px 0 0;font-size:15.5px;line-height:1.6;color:var(--uw-ink-700);text-wrap:pretty">Design your first original study from scratch, using data you can actually get as a student.</p>
            <div style="margin-top:8px;padding:12px 16px;border-radius:var(--r-md);background:var(--uw-blue-50);font-size:14.5px;line-height:1.5;color:var(--uw-blue-700)"><strong style="font-weight:600">You leave with:</strong> a first study design you can run with data you can easily reach.</div>
          </div>
        </div>
        <div class="rw-day" style="display:grid;grid-template-columns:200px minmax(0,1fr);padding:0;overflow:hidden;background:#fff;border:1px solid var(--uw-border);border-radius:var(--r-lg)">
          <div class="rw-day-left" style="display:flex;flex-direction:column;justify-content:center;gap:6px;padding:28px 24px;background:var(--uw-blue-50);border-right:1px solid var(--uw-blue-100)">
            <span style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.14em;color:var(--uw-red-500);font-weight:600">DAY 3</span>
            <span style="font-family:var(--font-display);font-size:24px;line-height:1.2;color:var(--uw-blue-500)">Sun, Nov 29</span>
            <span style="font-size:13.5px;color:var(--uw-ink-500)">10 AM to 1 PM EST</span>
          </div>
          <div class="rw-day-right" style="padding:28px;display:flex;flex-direction:column;gap:8px">
            <h3 style="font-family:var(--font-display);font-weight:400;font-size:clamp(22px,2.4vw,26px);line-height:1.2;color:var(--uw-ink-900);margin:0">Master systematic reviews and meta-analyses</h3>
            <span style="font-size:14px;color:var(--uw-ink-500)">With Muhammad Ahmad Barakat</span>
            <p style="margin:4px 0 0;font-size:15.5px;line-height:1.6;color:var(--uw-ink-700);text-wrap:pretty">Go from a review question to a finished systematic review and meta-analysis.</p>
            <div style="margin-top:8px;padding:12px 16px;border-radius:var(--r-md);background:var(--uw-blue-50);font-size:14.5px;line-height:1.5;color:var(--uw-blue-700)"><strong style="font-weight:600">You leave with:</strong> the step-by-step plan to publish your first systematic review and meta-analysis.</div>
          </div>
        </div>
      </div>
      <div style="margin-top:22px;text-align:center;display:flex;flex-direction:column;align-items:center;gap:22px">
        <span style="font-size:14px;color:var(--uw-ink-500)">Every day ends with live Q&amp;A.</span>
        <a class="rwh1" href="#reserve" data-rw-reserve style="display:inline-flex;align-items:center;height:52px;padding:0 30px;border-radius:var(--r-md);background:var(--uw-red-500);color:#fff;font-size:16px;font-weight:600">Reserve my spot · $49</a>
      </div>
    </div>
  </section>

  <!-- DETAILS -->
  <section id="details" style="scroll-margin-top:64px;padding:clamp(64px,8vw,96px) clamp(20px,5vw,48px);background:#fff;border-top:1px solid var(--uw-border)">
    <div style="max-width:1000px;margin:0 auto">
      <div style="text-align:center">
        <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px">Workshop details</div>
        <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,42px);line-height:1.15;letter-spacing:-0.02em;color:var(--uw-ink-900);margin:0;text-wrap:balance">Sessions start at 10 AM Eastern, every Sunday.</h2>
      </div>
      <div class="rw-2" style="display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1.15fr);gap:clamp(28px,4vw,56px);margin-top:44px;align-items:start">
        <div style="display:flex;flex-direction:column;gap:22px">
          <div style="padding-left:16px;border-left:3px solid var(--uw-blue-500);display:flex;flex-direction:column;gap:4px"><span style="font-size:12.5px;color:var(--uw-ink-500)">Dates</span><span style="font-size:16.5px;font-weight:600;line-height:1.45;color:var(--uw-ink-900)">3 Sundays in a row: November 15, November 22 and November 29, 2026</span></div>
          <div style="padding-left:16px;border-left:3px solid var(--uw-blue-500);display:flex;flex-direction:column;gap:4px"><span style="font-size:12.5px;color:var(--uw-ink-500)">Time</span><span style="font-size:16.5px;font-weight:600;line-height:1.45;color:var(--uw-ink-900)">10 AM to 1 PM EST, each Sunday</span></div>
          <div style="padding-left:16px;border-left:3px solid var(--uw-blue-500);display:flex;flex-direction:column;gap:4px"><span style="font-size:12.5px;color:var(--uw-ink-500)">Total</span><span style="font-size:16.5px;font-weight:600;line-height:1.45;color:var(--uw-ink-900)">9 hours of live teaching</span></div>
          <div style="padding-left:16px;border-left:3px solid var(--uw-blue-500);display:flex;flex-direction:column;gap:4px"><span style="font-size:12.5px;color:var(--uw-ink-500)">Platform</span><span style="font-size:16.5px;font-weight:600;line-height:1.45;color:var(--uw-ink-900)">Live on Zoom</span></div>
        </div>
        <div style="border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden">
          <table class="rw-tz" style="width:100%;border-collapse:collapse;font-size:15px">
            <thead><tr style="background:var(--uw-blue-50)"><th style="text-align:left;padding:13px 18px;font-weight:600;font-size:13px;color:var(--uw-blue-700)">Your city</th><th style="text-align:left;padding:13px 18px;font-weight:600;font-size:13px;color:var(--uw-blue-700)">Starts</th><th style="text-align:left;padding:13px 18px;font-weight:600;font-size:13px;color:var(--uw-blue-700)">Ends</th></tr></thead>
            <tbody>
              <tr><td style="padding:13px 18px;border-top:1px solid var(--uw-border);font-weight:600;color:var(--uw-ink-900)">New York (EST)</td><td style="padding:13px 18px;border-top:1px solid var(--uw-border);font-variant-numeric:tabular-nums">10:00 AM</td><td style="padding:13px 18px;border-top:1px solid var(--uw-border);font-variant-numeric:tabular-nums">1:00 PM</td></tr>
              <tr><td style="padding:13px 18px;border-top:1px solid var(--uw-border)">London (GMT)</td><td style="padding:13px 18px;border-top:1px solid var(--uw-border);font-variant-numeric:tabular-nums">3:00 PM</td><td style="padding:13px 18px;border-top:1px solid var(--uw-border);font-variant-numeric:tabular-nums">6:00 PM</td></tr>
              <tr><td style="padding:13px 18px;border-top:1px solid var(--uw-border)">Dubai (GST)</td><td style="padding:13px 18px;border-top:1px solid var(--uw-border);font-variant-numeric:tabular-nums">7:00 PM</td><td style="padding:13px 18px;border-top:1px solid var(--uw-border);font-variant-numeric:tabular-nums">10:00 PM</td></tr>
              <tr><td style="padding:13px 18px;border-top:1px solid var(--uw-border)">Tbilisi (GET)</td><td style="padding:13px 18px;border-top:1px solid var(--uw-border);font-variant-numeric:tabular-nums">7:00 PM</td><td style="padding:13px 18px;border-top:1px solid var(--uw-border);font-variant-numeric:tabular-nums">10:00 PM</td></tr>
              <tr><td style="padding:13px 18px;border-top:1px solid var(--uw-border)">Pakistan (PKT)</td><td style="padding:13px 18px;border-top:1px solid var(--uw-border);font-variant-numeric:tabular-nums">8:00 PM</td><td style="padding:13px 18px;border-top:1px solid var(--uw-border);font-variant-numeric:tabular-nums">11:00 PM</td></tr>
              <tr><td style="padding:13px 18px;border-top:1px solid var(--uw-border)">India (IST)</td><td style="padding:13px 18px;border-top:1px solid var(--uw-border);font-variant-numeric:tabular-nums">8:30 PM</td><td style="padding:13px 18px;border-top:1px solid var(--uw-border);font-variant-numeric:tabular-nums">11:30 PM</td></tr>
              <tr><td style="padding:13px 18px;border-top:1px solid var(--uw-border)">Nepal (NPT)</td><td style="padding:13px 18px;border-top:1px solid var(--uw-border);font-variant-numeric:tabular-nums">8:45 PM</td><td style="padding:13px 18px;border-top:1px solid var(--uw-border);font-variant-numeric:tabular-nums">11:45 PM</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- TEACHING -->
  <section id="mentors" style="scroll-margin-top:64px;padding:clamp(64px,8vw,96px) clamp(20px,5vw,48px);background:var(--uw-blue-50);border-top:1px solid var(--uw-blue-100)">
    <div style="max-width:1000px;margin:0 auto">
      <div style="text-align:center">
        <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px">Who's teaching</div>
        <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,42px);line-height:1.15;letter-spacing:-0.02em;color:var(--uw-ink-900);margin:0;text-wrap:balance">Taught by researchers <em style="font-style:italic;color:var(--uw-blue-500)">who publish.</em></h2>
      </div>
      <div class="rw-founder" style="margin-top:40px;display:grid;grid-template-columns:auto minmax(0,1fr);gap:clamp(20px,3vw,36px);align-items:center;padding:clamp(22px,3vw,36px);background:#fff;border:1px solid var(--uw-border);border-top:3px solid var(--uw-blue-500);border-radius:var(--r-lg);box-shadow:var(--shadow-sm)">
        <img src="/assets/research-wise/kaushik.webp" alt="Dr. Kaushik Sreerama Reddy" style="width:180px;height:180px;object-fit:cover;object-position:top;border-radius:var(--r-lg);display:block;background:var(--uw-blue-50)">
        <div style="display:flex;flex-direction:column;gap:8px">
          <span style="font-size:20px;font-weight:600;color:var(--uw-ink-900)">Dr. Kaushik Sreerama Reddy</span>
          <span style="font-size:14px;line-height:1.55;color:var(--uw-ink-500);text-wrap:pretty">Co-Founder and Chief Scientific Officer, USMLE Wise · Lead Investigator, Myositis Clinical Trials Consortium · Study Lead, MyPACER Study</span>
          <p style="margin:10px 0 0;font-family:var(--font-display);font-size:clamp(18px,1.9vw,21px);line-height:1.5;color:var(--uw-blue-600);text-wrap:pretty">"Most students are told to do research and never shown where to begin. I built Research Wise for that moment. Over 3 days, you go from a blank page to a real first project, and you leave knowing exactly what to do next."</p>
        </div>
      </div>
      <div class="rw-mentors" style="margin-top:16px;display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px">
        <div style="display:flex;gap:20px;align-items:flex-start;padding:24px;background:#fff;border:1px solid var(--uw-border);border-radius:var(--r-lg)">
          <img src="/assets/research-wise/mentor-2.webp" alt="Shivani Ravipati" style="flex:none;width:104px;height:104px;object-fit:cover;object-position:top;border-radius:var(--r-md);display:block;background:var(--uw-blue-50)">
          <div style="display:flex;flex-direction:column;gap:8px;min-width:0">
            <span style="font-size:18px;font-weight:600;color:var(--uw-ink-900)">Shivani Ravipati</span>
            <span style="align-self:flex-start;padding:3px 10px;border-radius:999px;background:var(--uw-blue-50);color:var(--uw-blue-600);font-size:12.5px;font-weight:600">Teaches Day 1</span>
            <ul style="margin:6px 0 0;padding:0 0 0 18px;display:flex;flex-direction:column;gap:5px;font-size:14.5px;line-height:1.45;color:var(--uw-ink-700)">
              <li>5 first-author publications</li><li>8+ co-authored papers</li><li>1 AHA poster presentation</li><li>IRB-approved clinical trial lead for PRP research</li><li>Actively guiding IMGs through research, Steps and ERAS applications</li>
            </ul>
          </div>
        </div>
        <div style="display:flex;gap:20px;align-items:flex-start;padding:24px;background:#fff;border:1px solid var(--uw-border);border-radius:var(--r-lg)">
          <img src="/assets/research-wise/mentor-3.webp" alt="Muhammad Ahmad Barakat" style="flex:none;width:104px;height:104px;object-fit:cover;object-position:top;border-radius:var(--r-md);display:block;background:var(--uw-blue-50)">
          <div style="display:flex;flex-direction:column;gap:8px;min-width:0">
            <span style="font-size:18px;font-weight:600;color:var(--uw-ink-900)">Muhammad Ahmad Barakat</span>
            <span style="align-self:flex-start;padding:3px 10px;border-radius:999px;background:var(--uw-blue-50);color:var(--uw-blue-600);font-size:12.5px;font-weight:600">Teaches Days 2 and 3</span>
            <ul style="margin:6px 0 0;padding:0 0 0 18px;display:flex;flex-direction:column;gap:5px;font-size:14.5px;line-height:1.45;color:var(--uw-ink-700)">
              <li>7 published papers</li><li>2 conference papers</li><li>7 co-author posters</li><li>200+ students guided to publication across MEDICA SRA &amp; MEDMARK MRMS programs</li><li>APA PsychSIGN International Student Liaison Research Chair 2026-2027</li>
            </ul>
          </div>
        </div>
      </div>
      <div style="margin-top:36px;text-align:center"><a class="rwh1" href="#reserve" data-rw-reserve style="display:inline-flex;align-items:center;height:52px;padding:0 30px;border-radius:var(--r-md);background:var(--uw-red-500);color:#fff;font-size:16px;font-weight:600">Reserve my spot · $49</a></div>
    </div>
  </section>

  <!-- OFFER -->
  <section id="reserve" class="rw-offer" style="scroll-margin-top:64px;padding:clamp(64px,8vw,96px) clamp(20px,5vw,48px);background:var(--uw-blue-50);border-top:1px solid var(--uw-blue-100)">
    <div style="max-width:640px;margin:0 auto">
      <div style="text-align:center">
        <div id="offer-top" class="rw-offer-eb" style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px">What you get</div>
        <h2 class="rw-offer-h" style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,42px);line-height:1.15;letter-spacing:-0.02em;color:var(--uw-ink-900);margin:0;text-wrap:balance">Inside the <em style="font-style:italic;color:var(--uw-blue-500)">Basics of Research</em> Level 1 Workshop</h2>
      </div>
      <div class="rw-offer-card" style="margin-top:36px;border-radius:var(--r-lg);overflow:hidden;box-shadow:var(--shadow-lg);border:1px solid var(--uw-border)">
        <div style="background:#fff;padding:8px clamp(20px,4vw,32px)">
          <div class="rw-chk" style="display:flex;gap:12px;align-items:flex-start;padding:15px 0;border-bottom:1px solid var(--uw-border)"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:1px"><path d="M20 6 9 17l-5-5"></path></svg><span style="font-size:15.5px;line-height:1.5;color:var(--uw-ink-800)">9 hours of live teaching across 3 days, with Q&amp;A at the end of each day, plus recordings of every session</span></div>
          <div class="rw-chk" style="display:flex;gap:12px;align-items:flex-start;padding:15px 0;border-bottom:1px solid var(--uw-border)"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:1px"><path d="M20 6 9 17l-5-5"></path></svg><span style="font-size:15.5px;line-height:1.5;color:var(--uw-ink-800)"><strong style="font-weight:600;color:var(--uw-ink-900)">Master 3 types of studies:</strong> case reports and case series, original studies, and systematic reviews and meta-analyses</span></div>
          <div class="rw-chk" style="display:flex;gap:12px;align-items:flex-start;padding:15px 0;border-bottom:1px solid var(--uw-border)"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:1px"><path d="M20 6 9 17l-5-5"></path></svg><span style="font-size:15.5px;line-height:1.5;color:var(--uw-ink-800)">Structured notes, so you can follow every step again when you sit down to write</span></div>
          <div class="rw-chk" style="display:flex;gap:12px;align-items:flex-start;padding:15px 0;border-bottom:1px solid var(--uw-border)"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:1px"><path d="M20 6 9 17l-5-5"></path></svg><span style="font-size:15.5px;line-height:1.5;color:var(--uw-ink-800)">A certificate of completion for finishing all 3 days</span></div>
          <div class="rw-chk" style="display:flex;gap:12px;align-items:flex-start;padding:15px 0"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:1px"><path d="M20 6 9 17l-5-5"></path></svg><span style="font-size:15.5px;line-height:1.5;color:var(--uw-ink-800)">A WhatsApp group of first-time researchers, where you can ask any question</span></div>
        </div>
        <div id="checkout" class="dot-tex" style="scroll-margin-top:90px;background-color:var(--uw-blue-500);padding:clamp(28px,4vw,40px) clamp(20px,4vw,36px);text-align:center;display:flex;flex-direction:column;align-items:center">
          <span class="rw-pl" style="font-family:var(--font-mono);font-size:11.5px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-success-300)">Launch price for our first 100 members</span>
          <span class="rw-price" style="margin-top:10px;font-family:var(--font-display);font-size:clamp(64px,9vw,88px);line-height:1;color:#fff;letter-spacing:-0.02em">$49</span>
          <span class="rw-once" style="margin-top:8px;font-size:14px;color:var(--uw-blue-100)">One time, for all 3 days</span>
          <a class="rwh1" id="checkout-btn" href="#reserve" data-rw-reserve style="margin-top:22px;width:100%;box-sizing:border-box;display:flex;align-items:center;justify-content:center;height:56px;border-radius:var(--r-md);background:var(--uw-red-500);color:#fff;font-size:17px;font-weight:600">Reserve my spot · $49</a>
          <span style="margin-top:12px;font-size:13px;line-height:1.5;color:var(--uw-blue-100);text-wrap:pretty">After checkout, we'll email your receipt and add you to the platform and the WhatsApp group.</span>
        </div>
      </div>
      <div class="rw-guar" style="margin-top:20px;display:flex;gap:20px;align-items:center;padding:22px 24px;background:#fff;border:1.5px solid var(--uw-success-400);border-radius:var(--r-lg)">
        <span style="flex:none;width:76px;height:76px;border-radius:50%;background:var(--uw-blue-500);color:#fff;display:flex;align-items:center;justify-content:center;font-family:var(--font-display);font-size:22px">100%</span>
        <div style="display:flex;flex-direction:column;gap:6px">
          <span style="font-size:17px;font-weight:600;color:var(--uw-ink-900)">The satisfaction guarantee</span>
          <span style="font-size:14.5px;line-height:1.55;color:var(--uw-ink-600);text-wrap:pretty">Attend the first day. If you're not satisfied, email us within 24 hours of attending and get your money back.</span>
        </div>
      </div>    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" style="scroll-margin-top:64px;padding:clamp(64px,8vw,96px) clamp(20px,5vw,48px);background:#fff;border-top:1px solid var(--uw-border)">
    <div style="max-width:760px;margin:0 auto">
      <div style="text-align:center">
        <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:14px">FAQ</div>
        <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,3.6vw,42px);line-height:1.15;letter-spacing:-0.02em;color:var(--uw-ink-900);margin:0">Your questions, answered.</h2>
      </div>
      <div style="margin-top:36px;border-top:1px solid var(--uw-border)">
        <?php foreach ($rwFaqs as $i => $faq): $open = ($i === 0); ?>
          <div class="rw-faq" style="border-bottom:1px solid var(--uw-border)">
            <button type="button" class="rw-faq__btn" aria-expanded="<?php echo $open ? 'true' : 'false'; ?>" aria-controls="rwFaq<?php echo $i; ?>" style="width:100%;display:flex;justify-content:space-between;align-items:center;gap:16px;padding:20px 0;background:none;border:0;cursor:pointer;text-align:left;font:inherit;font-size:16.5px;font-weight:600;color:var(--uw-ink-900)">
              <span><?php echo $faq['q']; ?></span>
              <span class="rw-faq__sign" aria-hidden="true" style="flex:none;width:28px;height:28px;border-radius:50%;border:1px solid var(--uw-border);display:flex;align-items:center;justify-content:center;color:var(--uw-blue-500);font-size:18px;line-height:1;font-weight:400"><?php echo $open ? '&minus;' : '+'; ?></span>
            </button>
            <p id="rwFaq<?php echo $i; ?>" class="rw-faq__a" <?php echo $open ? '' : 'hidden'; ?> style="margin:0;padding:0 44px 22px 0;font-size:15.5px;line-height:1.6;color:var(--uw-ink-600);text-wrap:pretty"><?php echo $faq['a']; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="dot-tex" style="background-color:var(--uw-blue-800);padding:clamp(72px,9vw,112px) clamp(20px,5vw,48px);text-align:center">
    <div style="max-width:760px;margin:0 auto;display:flex;flex-direction:column;align-items:center">
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(30px,4.2vw,48px);line-height:1.15;letter-spacing:-0.02em;color:#fff;margin:0;text-wrap:balance">Day 1 starts Sunday, November 15, 2026.</h2>
      <p style="margin:14px 0 0;font-size:17px;color:var(--uw-blue-100)">Then Sunday, November 22, and Sunday, November 29.</p>
      <p style="margin:14px 0 0;max-width:560px;font-size:16px;line-height:1.6;color:#fff;text-wrap:pretty">3 Sundays from now, you'll have your first research project underway. $49, with a full refund if you're not satisfied.</p>
      <div style="margin-top:32px;display:flex;flex-wrap:wrap;justify-content:center;gap:12px">
        <a class="rwh1" href="#reserve" data-rw-reserve style="display:inline-flex;align-items:center;height:54px;padding:0 30px;border-radius:var(--r-md);background:var(--uw-red-500);color:#fff;font-size:16.5px;font-weight:600">Reserve my spot · $49</a>
        <a class="rwh4" href="https://wa.me/19192015700" style="display:inline-flex;align-items:center;gap:8px;height:54px;padding:0 26px;border-radius:var(--r-md);border:1.5px solid rgba(255,255,255,.7);color:#fff;font-size:16.5px;font-weight:600">Text us a question</a>
      </div>
    </div>
  </section>

  </div>
      <script type="application/ld+json">
      <?php
      echo json_encode([
          '@context'   => 'https://schema.org',
          '@type'      => 'FAQPage',
          'mainEntity' => array_map(static function (array $faq): array {
              $plain = static function (string $html): string {
                  return trim(preg_replace('/\s+/', ' ', strip_tags(html_entity_decode($html, ENT_QUOTES, 'UTF-8'))));
              };
              return [
                  '@type'          => 'Question',
                  'name'           => $plain($faq['q']),
                  'acceptedAnswer' => ['@type' => 'Answer', 'text' => $plain($faq['a'])],
              ];
          }, $rwFaqs),
      ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
      ?>
      </script>


      <script>
      (function () {
        document.querySelectorAll('.rw-faq__btn').forEach(function (btn) {
          btn.addEventListener('click', function () {
            var open = btn.getAttribute('aria-expanded') === 'true';
            document.querySelectorAll('.rw-faq__btn').forEach(function (b) {
              b.setAttribute('aria-expanded', 'false');
              b.querySelector('.rw-faq__sign').innerHTML = '+';
              document.getElementById(b.getAttribute('aria-controls')).hidden = true;
            });
            if (!open) {
              btn.setAttribute('aria-expanded', 'true');
              btn.querySelector('.rw-faq__sign').innerHTML = '&minus;';
              document.getElementById(btn.getAttribute('aria-controls')).hidden = false;
            }
          });
        });
        var nums = document.querySelectorAll('[data-rw-count]');
        if (!nums.length) return;
        function run() {
          var t0 = null;
          function step(ts) {
            if (t0 === null) t0 = ts;
            var p = Math.min((ts - t0) / 1400, 1), e = 1 - Math.pow(1 - p, 3);
            nums.forEach(function (n) { n.textContent = Math.round(+n.dataset.rwCount * e); });
            if (p < 1) requestAnimationFrame(step);
          }
          requestAnimationFrame(step);
        }
        var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (reduce || !('IntersectionObserver' in window)) return;
        var io = new IntersectionObserver(function (es) {
          if (es.some(function (x) { return x.isIntersecting; })) { io.disconnect(); run(); }
        }, { threshold: 0.35 });
        io.observe(nums[0].closest('section') || nums[0]);
      })();
      </script>

    </main>

    <!-- ============== MOBILE STICKY CTA ============== -->
    <div class="rw-sticky" id="rwSticky">
      <a class="btn btn--primary" href="#reserve" data-rw-reserve>Reserve your spot &middot; $49</a>
    </div>

    <!-- ============== RESERVE POPUP (on-page payment: our fields + Stripe's card field, via mastery.usmlewise.com) ============== -->
    <div class="rw-pay" id="rwPay" role="dialog" aria-modal="true" aria-labelledby="rwPayTitle" hidden>
      <div class="rw-pay__backdrop" data-rw-close></div>
      <div class="rw-pay__panel">
        <div class="rw-pay__head">
          <div>
            <span class="rw-pay__eyebrow">Research Wise</span>
            <h2 id="rwPayTitle" class="rw-pay__title">Reserve your spot</h2>
          </div>
          <button type="button" class="rw-pay__close" data-rw-close aria-label="Close">&times;</button>
        </div>

        <div class="rw-pay__summary">
          <div><strong>3 live Sunday sessions</strong><span>November 15, 22 &amp; 29 &middot; one-time payment</span></div>
          <b>$49</b>
        </div>

        <form id="rwPayForm" novalidate>
          <div class="rw-field">
            <label for="rwName">Full name</label>
            <input id="rwName" name="name" type="text" autocomplete="name" required>
          </div>
          <div class="rw-field">
            <label for="rwEmail">Email</label>
            <input id="rwEmail" name="email" type="email" autocomplete="email" inputmode="email" required>
            <small>Your receipt and the WhatsApp group link are sent here.</small>
          </div>
          <div class="rw-field">
            <label for="rwPhone">WhatsApp number</label>
            <input id="rwPhone" name="phone" type="tel" autocomplete="tel" inputmode="tel" placeholder="+1 555 123 4567" required>
          </div>
          <div class="rw-field">
            <span class="rw-label" id="rwCardNumberLabel">Card number</span>
            <div id="rwCardNumber" class="rw-sel" aria-labelledby="rwCardNumberLabel"></div>
          </div>
          <div class="rw-row">
            <div class="rw-field">
              <span class="rw-label" id="rwCardExpiryLabel">Expiry date</span>
              <div id="rwCardExpiry" class="rw-sel" aria-labelledby="rwCardExpiryLabel"></div>
            </div>
            <div class="rw-field">
              <span class="rw-label" id="rwCardCvcLabel">Security code</span>
              <div id="rwCardCvc" class="rw-sel" aria-labelledby="rwCardCvcLabel"></div>
            </div>
          </div>
          <p class="rw-pay__error" id="rwPayError" role="alert" aria-live="polite"></p>
          <button class="btn btn--primary rw-pay__submit" id="rwPaySubmit" type="submit">Pay $49</button>
          <p class="rw-pay__secure"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="4" y="11" width="16" height="10" rx="2"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/></svg> Secure payment by Stripe. Your card details never touch our servers.</p>
        </form>

        <div class="rw-pay__done" id="rwPayDone" hidden>
          <div class="rw-pay__tick" aria-hidden="true">&#10003;</div>
          <h3>You're in. Thank you!</h3>
          <p id="rwPayDoneText">Your payment is confirmed. We've emailed your receipt and the WhatsApp group link.</p>
          <a class="btn btn--primary" id="rwPayGroup" href="#" target="_blank" rel="noopener noreferrer" hidden>Join the WhatsApp group</a>
          <p class="rw-pay__fine">Session links and reminders are shared in the group. Sunday, November 15, 22 and 29.</p>
        </div>
      </div>
    </div>
    <style>
      /* The popup stays light in dark mode so it matches Stripe's card field. */
      .rw-pay{position:fixed;inset:0;z-index:1000;display:flex;align-items:center;justify-content:center;padding:16px;color-scheme:light}
      .rw-pay[hidden]{display:none}
      .rw-pay__backdrop{position:absolute;inset:0;background:rgba(20,21,28,.55)}
      .rw-pay__panel{position:relative;width:100%;max-width:480px;max-height:calc(100vh - 32px);overflow:auto;background:#fff;color:#14151c;border-radius:16px;padding:24px;box-shadow:0 24px 60px rgba(20,21,28,.3);font-family:var(--font-sans)}
      .rw-pay__head{display:flex;align-items:flex-start;justify-content:space-between;gap:12px;margin-bottom:16px}
      .rw-pay__eyebrow{font-family:var(--font-mono);font-size:12px;letter-spacing:.08em;text-transform:uppercase;color:#e32124}
      .rw-pay__title{font-family:var(--font-display);font-size:28px;line-height:1.15;margin:4px 0 0;color:#14151c}
      .rw-pay__close{border:0;background:#f5f5f7;color:#14151c;width:36px;height:36px;border-radius:50%;font-size:22px;line-height:1;cursor:pointer;flex:none}
      .rw-pay__summary{display:flex;align-items:center;justify-content:space-between;gap:12px;background:#f5f5f7;border-radius:10px;padding:12px 14px;margin-bottom:18px}
      .rw-pay__summary strong{display:block;font-size:15px;color:#14151c}
      .rw-pay__summary span{font-size:13px;color:#6d7080}
      .rw-pay__summary b{font-family:var(--font-display);font-size:26px;font-weight:600;color:#14151c}
      .rw-field{margin-bottom:12px}
      .rw-field label{display:block;font-size:14px;font-weight:500;color:#32343f;margin-bottom:6px}
      .rw-field input{width:100%;box-sizing:border-box;font:inherit;font-size:15px;color:#14151c;background:#fff;border:1px solid #d4d4cf;border-radius:8px;padding:11px 12px;transition:border-color .15s,box-shadow .15s}
      .rw-field input::placeholder{color:#9a9ca8}
      .rw-field input:focus{outline:none;border-color:#2c3386;box-shadow:0 0 0 3px rgba(44,51,134,.18)}
      .rw-field input[aria-invalid="true"]{border-color:#e32124;box-shadow:0 0 0 3px rgba(227,33,36,.12)}
      .rw-field small{display:block;margin-top:5px;font-size:12.5px;color:#6d7080}
      .rw-label{display:block;font-size:14px;font-weight:500;color:#32343f;margin-bottom:6px}
      .rw-sel{box-sizing:border-box;min-height:45px;background:#fff;border:1px solid #d4d4cf;border-radius:8px;padding:12px;transition:border-color .15s,box-shadow .15s}
      .rw-sel.StripeElement--focus{border-color:#2c3386;box-shadow:0 0 0 3px rgba(44,51,134,.18)}
      .rw-sel.StripeElement--invalid{border-color:#e32124;box-shadow:0 0 0 3px rgba(227,33,36,.12)}
      .rw-row{display:grid;grid-template-columns:1fr 1fr;gap:12px}
      .rw-pay__error{min-height:0;margin:4px 0 10px;font-size:14px;color:#a01517}
      .rw-pay__error:empty{display:none}
      .rw-pay__submit{width:100%;justify-content:center;font-size:16px;padding:14px 18px;margin-top:4px}
      .rw-pay__submit[disabled]{opacity:.65;cursor:progress}
      .rw-pay__secure{display:flex;align-items:center;justify-content:center;gap:6px;margin:12px 0 0;font-size:12.5px;color:#6d7080;text-align:center}
      .rw-pay__done{text-align:center;padding:8px 4px 4px}
      .rw-pay__tick{width:56px;height:56px;border-radius:50%;background:#2f8a5a;color:#fff;font-size:30px;line-height:56px;margin:0 auto 12px}
      .rw-pay__done h3{font-family:var(--font-display);font-size:26px;margin:0 0 8px;color:#14151c}
      .rw-pay__done p{color:#32343f;margin:0 0 16px}
      .rw-pay__fine{font-size:14px;margin-top:14px!important}
      body.rw-pay-open{overflow:hidden}
      @media (max-width:480px){.rw-pay{padding:0;align-items:flex-end}.rw-pay__panel{border-radius:16px 16px 0 0;max-height:94vh;padding:20px 16px}}
    </style>
    <script>
    (function () {
      var API = 'https://mastery.usmlewise.com/api/research-wise';
      // Publishable keys are public by design; this one belongs to the Stripe account Mastery charges.
      var STRIPE_KEY = 'pk_live_51QP4cwJDyWnuZEnfkf8zIUSEIgSpPgUPMyrg4m8UIeinhWBSeM0Do5lwYvffKwsjVj7DGUeJwLNUPKRiCD5yUd5P00yYL7zDFz';
      var CARD_STYLE = {
        base: { fontFamily: 'Geist, Inter, system-ui, sans-serif', fontSize: '15px', color: '#14151c', '::placeholder': { color: '#9a9ca8' } },
        invalid: { color: '#a01517', iconColor: '#a01517' }
      };

      var dlg = document.getElementById('rwPay');
      var form = document.getElementById('rwPayForm');
      var errorEl = document.getElementById('rwPayError');
      var submitBtn = document.getElementById('rwPaySubmit');
      var done = document.getElementById('rwPayDone');
      var stripe = null, cardNumber = null, ready = null, lastFocus = null, cardErrors = {};

      // Stripe's script and card field load in the background as soon as the
      // page is idle, so the popup is ready the moment someone clicks.
      function prepare() {
        if (ready) return ready;
        ready = new Promise(function (resolve, reject) {
          if (window.Stripe) return resolve();
          var s = document.createElement('script');
          s.src = 'https://js.stripe.com/v3/';
          s.onload = resolve;
          s.onerror = function () { reject(new Error('Secure checkout could not load. Please check your connection and try again.')); };
          document.head.appendChild(s);
        }).then(function () {
          stripe = window.Stripe(STRIPE_KEY);
          var elements = stripe.elements({ fonts: [{ cssSrc: 'https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600&display=swap' }] });
          cardNumber = elements.create('cardNumber', { style: CARD_STYLE, showIcon: true, disableLink: true, placeholder: '1234 1234 1234 1234' });
          var parts = [[cardNumber, '#rwCardNumber'], [elements.create('cardExpiry', { style: CARD_STYLE }), '#rwCardExpiry'], [elements.create('cardCvc', { style: CARD_STYLE }), '#rwCardCvc']];
          parts.forEach(function (p) {
            p[0].mount(p[1]);
            p[0].on('change', function (ev) {
              cardErrors[p[1]] = ev.error ? ev.error.message : '';
              showError(cardErrors['#rwCardNumber'] || cardErrors['#rwCardExpiry'] || cardErrors['#rwCardCvc'] || '');
            });
          });
        });
        ready.catch(function () { ready = null; });
        return ready;
      }
      if ('requestIdleCallback' in window) window.requestIdleCallback(function () { prepare().catch(function () {}); }, { timeout: 2500 });
      else setTimeout(function () { prepare().catch(function () {}); }, 1200);

      function showError(text) { errorEl.textContent = text || ''; }
      function setBusy(busy) { submitBtn.disabled = busy; submitBtn.textContent = busy ? 'Processing…' : 'Pay $49'; }

      function openDialog(e) {
        if (e) e.preventDefault();
        lastFocus = document.activeElement;
        dlg.hidden = false;
        document.body.classList.add('rw-pay-open');
        if (done.hidden) document.getElementById('rwName').focus();
        prepare().catch(function (err) { showError(err.message + ' You can also message us on WhatsApp at +1 919 201 5700.'); });
      }
      function closeDialog() {
        dlg.hidden = true;
        document.body.classList.remove('rw-pay-open');
        if (lastFocus) lastFocus.focus();
      }

      function field(id) { return document.getElementById(id); }
      function validate() {
        var name = field('rwName'), email = field('rwEmail'), phone = field('rwPhone');
        var checks = [
          [name, name.value.trim().length >= 2, 'Please enter your full name.'],
          [email, /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim()), 'Please enter a valid email address.'],
          [phone, phone.value.replace(/\D/g, '').length >= 7, 'Please enter your WhatsApp number, including country code.']
        ];
        for (var i = 0; i < checks.length; i++) {
          checks[i][0].setAttribute('aria-invalid', checks[i][1] ? 'false' : 'true');
          if (!checks[i][1]) { checks[i][0].focus(); return checks[i][2]; }
        }
        return '';
      }

      function finish(intentId) {
        form.hidden = true;
        done.hidden = false;
        fetch(API + '/confirm', { method: 'POST', headers: { 'Content-Type': 'text/plain' }, body: JSON.stringify({ paymentIntentId: intentId }) })
          .then(function (r) { return r.json(); })
          .then(function (d) {
            if (!d.paid) return;
            if (d.email) field('rwPayDoneText').textContent = 'Your payment is confirmed. We’ve emailed your receipt and the WhatsApp group link to ' + d.email + '.';
            if (d.groupUrl) { var g = field('rwPayGroup'); g.href = d.groupUrl; g.hidden = false; }
          })
          .catch(function () { /* the email still goes out from the server's 15-minute check */ });
      }

      form.addEventListener('submit', function (e) {
        e.preventDefault();
        showError('');
        var problem = validate();
        if (problem) return showError(problem);
        setBusy(true);
        var billing = { name: field('rwName').value.trim(), email: field('rwEmail').value.trim(), phone: field('rwPhone').value.trim() };
        prepare()
          .then(function () {
            return fetch(API + '/intent', { method: 'POST' }).then(function (r) {
              return r.json().then(function (d) { if (!r.ok) throw new Error(d.error || 'Checkout is unavailable right now.'); return d; });
            });
          })
          .then(function (d) {
            return stripe.confirmCardPayment(d.clientSecret, { payment_method: { card: cardNumber, billing_details: billing } });
          })
          .then(function (res) {
            if (res.error) throw res.error;
            var pi = res.paymentIntent;
            if (pi && (pi.status === 'succeeded' || pi.status === 'processing')) finish(pi.id);
            else throw new Error('The payment was not completed. Please try again.');
          })
          .catch(function (err) { showError((err && err.message) || 'Something went wrong. Please try again.'); setBusy(false); });
      });

      document.querySelectorAll('[data-rw-reserve]').forEach(function (a) { a.addEventListener('click', openDialog); });
      dlg.querySelectorAll('[data-rw-close]').forEach(function (el) { el.addEventListener('click', closeDialog); });
      document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && !dlg.hidden) closeDialog(); });

      // Mobile sticky CTA: slides up once the hero's own buttons have scrolled
      // past, so it never sits on top of the button it duplicates.
      var sticky = document.getElementById('rwSticky');
      var heroCta = document.querySelector('.msp-hero .msp-cta-row');
      if (sticky && heroCta && 'IntersectionObserver' in window) {
        new IntersectionObserver(function (entries) {
          var en = entries[0];
          sticky.classList.toggle('is-on', !en.isIntersecting && en.boundingClientRect.top < 0);
        }, { threshold: 0 }).observe(heroCta);
      } else if (sticky) {
        sticky.classList.add('is-on');
      }

      // Video testimonials: the YouTube player only loads on click.
      document.querySelectorAll('[data-rw-yt]').forEach(function (btn) {
        btn.addEventListener('click', function () {
          var frame = document.createElement('iframe');
          frame.src = 'https://www.youtube-nocookie.com/embed/' + btn.getAttribute('data-rw-yt') + '?autoplay=1&rel=0';
          frame.title = btn.getAttribute('aria-label') || 'Video testimonial';
          frame.allow = 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture';
          frame.allowFullscreen = true;
          frame.className = 'rw-vid__frame';
          btn.replaceWith(frame);
        });
      });

      // Back from a bank's verification page.
      var params = new URLSearchParams(location.search);
      if (params.get('payment_intent') && params.get('redirect_status') === 'succeeded') {
        openDialog();
        finish(params.get('payment_intent'));
        history.replaceState(null, '', location.pathname);
      } else if (location.hash === '#reserve') {
        openDialog();
      }
    })();
    </script>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
