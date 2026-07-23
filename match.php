<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<base href="/match-media/">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/svg+xml" href="/assets/usmle-design-system/assets/emblem.svg" />
<link rel="stylesheet" href="/assets/usmle-design-system/styles.css">
<link rel="stylesheet" href="/styles/match.css">
<script src="https://unpkg.com/lucide@0.469.0/dist/umd/lucide.min.js" defer></script>
<script src="/js/mobile-nav.js" defer></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  if (window.lucide && typeof window.lucide.createIcons === 'function') {
    window.lucide.createIcons();
  }
  var nav = document.getElementById('mspNav');
  if (nav) {
    var onScroll = function () {
      nav.classList.toggle('is-stuck', window.scrollY > 12);
    };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
  }
});
</script>
<script src="./support.js"></script>
</head>
<body>
<!-- ============== SITE NAV ============== -->
<header class="msp-nav" id="mspNav">
  <div class="msp-wrap msp-nav__inner">
    <a class="msp-brand" href="/" aria-label="USMLE Wise home">
      <img src="/assets/usmle-design-system/assets/Logo-Horizontal.svg" alt="USMLE Wise" height="36" />
    </a>
    <nav class="msp-nav__links" aria-label="Primary">
      <a href="/">Home</a>
      <div class="msp-nav__item msp-nav__item--has-dd">
        <a href="/coaching">Coaching <i data-lucide="chevron-down" width="12" height="12" class="msp-nav__dd-caret"></i></a>
        <div class="msp-nav__dropdown">
          <a href="/coaching" class="msp-nav__dd-link">
            <span class="msp-nav__dd-name">Coaching Overview</span>
            <span class="msp-nav__dd-meta">Step 1, Step 2 CK &amp; Step 3</span>
          </a>
          <a href="/step-1-high-yield-crash-course" class="msp-nav__dd-link">
            <span class="msp-nav__dd-name">Step 1 High Yield Crash Course</span>
            <span class="msp-nav__dd-meta">Recorded &middot; 10-day</span>
          </a>
          <a href="/coaching-step1-mastery" class="msp-nav__dd-link">
            <span class="msp-nav__dd-name">Step 1 Mastery</span>
            <span class="msp-nav__dd-meta">6-month &middot; From the basics</span>
          </a>
          <a href="/coaching-step23-mastery" class="msp-nav__dd-link">
            <span class="msp-nav__dd-name">NBME Style Coaching</span>
            <span class="msp-nav__dd-meta">NBME &middot; Step 1 &amp; Step 2</span>
          </a>
          <a href="/coaching-tutoring" class="msp-nav__dd-link">
            <span class="msp-nav__dd-name">1:1 Tutoring</span>
            <span class="msp-nav__dd-meta">Done-with-you</span>
          </a>
        </div>
      </div>
      <div class="msp-nav__item msp-nav__item--has-dd">
            <a href="/rotations">Rotations <i data-lucide="chevron-down" width="12" height="12" class="msp-nav__dd-caret"></i></a>
            <div class="msp-nav__dropdown">
              <a href="/rotations" class="msp-nav__dd-link">
                <span class="msp-nav__dd-name">Rotations Overview</span>
                <span class="msp-nav__dd-meta">Placements, LORs &amp; USCE</span>
              </a>
              <a href="/clinical-rotations" class="msp-nav__dd-link">
                <span class="msp-nav__dd-name">Clinical Rotations</span>
                <span class="msp-nav__dd-meta">Browse all placements</span>
              </a>
            </div>
          </div>
      <div class="msp-nav__item msp-nav__item--has-dd">
        <a href="/research">Research <i data-lucide="chevron-down" width="12" height="12" class="msp-nav__dd-caret"></i></a>
        <div class="msp-nav__dropdown">
          <a href="/research" class="msp-nav__dd-link">
            <span class="msp-nav__dd-name">Research Overview</span>
            <span class="msp-nav__dd-meta">All programs &amp; services</span>
          </a>
          <a href="/research-catalyst" class="msp-nav__dd-link">
            <span class="msp-nav__dd-name">Research Catalyst</span>
            <span class="msp-nav__dd-meta">Flagship &middot; 12-month program</span>
          </a>
          <a href="/research-original" class="msp-nav__dd-link">
            <span class="msp-nav__dd-name">Original Research</span>
            <span class="msp-nav__dd-meta">Live &middot; Mentored</span>
          </a>
          <a href="/research-review" class="msp-nav__dd-link">
            <span class="msp-nav__dd-name">Systematic Review / Meta-Analysis</span>
            <span class="msp-nav__dd-meta">Live &middot; Mentored</span>
          </a>
          <a href="/research-masterclass" class="msp-nav__dd-link">
            <span class="msp-nav__dd-name">Research Masterclass</span>
            <span class="msp-nav__dd-meta">Recorded &middot; Self-paced</span>
          </a>
          <a href="/research-junior-scientist" class="msp-nav__dd-link">
            <span class="msp-nav__dd-name">Junior Scientist Program</span>
            <span class="msp-nav__dd-meta">Live &middot; Mentored</span>
          </a>
        </div>
      </div>
      <div class="msp-nav__item msp-nav__item--has-dd">
        <a href="/match">Match <i data-lucide="chevron-down" width="12" height="12" class="msp-nav__dd-caret"></i></a>
        <div class="msp-nav__dropdown">
          <a href="/match" class="msp-nav__dd-link">
            <span class="msp-nav__dd-name">Match Overview</span>
            <span class="msp-nav__dd-meta">End-to-end residency support</span>
          </a>
          <a href="/match-lor" class="msp-nav__dd-link">
            <span class="msp-nav__dd-name">LOR Editing</span>
            <span class="msp-nav__dd-meta">Letters of Recommendation</span>
          </a>
          <a href="/match-eras-cv" class="msp-nav__dd-link">
            <span class="msp-nav__dd-name">ERAS CV</span>
            <span class="msp-nav__dd-meta">CV overhaul</span>
          </a>
          <a href="/match-ps3x" class="msp-nav__dd-link">
            <span class="msp-nav__dd-name">Personal Statement</span>
            <span class="msp-nav__dd-meta">PS3X</span>
          </a>
          <a href="/match-interview" class="msp-nav__dd-link">
            <span class="msp-nav__dd-name">Interview Preparation</span>
            <span class="msp-nav__dd-meta">Mock interviews &middot; Strategy</span>
          </a>
        </div>
      </div>
      <a href="/testimonials">Stories</a>
      <a href="/blog">Blog</a>
      <a href="/qa">FAQ</a>
    </nav>
    <a class="btn btn--primary msp-nav__cta" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Guidance Call</a>
  </div>
</header>
<x-dc>
<helmet>
<link rel="stylesheet" href="_ds/usmle-wise-design-system-d852a588-293b-4391-a210-99ffdc2ba2d2/tokens/fonts.css">
<link rel="stylesheet" href="_ds/usmle-wise-design-system-d852a588-293b-4391-a210-99ffdc2ba2d2/tokens/colors.css">
<link rel="stylesheet" href="_ds/usmle-wise-design-system-d852a588-293b-4391-a210-99ffdc2ba2d2/tokens/typography.css">
<link rel="stylesheet" href="_ds/usmle-wise-design-system-d852a588-293b-4391-a210-99ffdc2ba2d2/tokens/spacing.css">
<link rel="stylesheet" href="_ds/usmle-wise-design-system-d852a588-293b-4391-a210-99ffdc2ba2d2/tokens/base.css">
<link rel="stylesheet" href="_ds/usmle-wise-design-system-d852a588-293b-4391-a210-99ffdc2ba2d2/styles.css">
<script src="_ds/usmle-wise-design-system-d852a588-293b-4391-a210-99ffdc2ba2d2/_ds_bundle.js"></script>
<style>
  body{margin:0}
  .mp{font-family:var(--font-sans);color:var(--uw-ink-800);background:var(--uw-surface);overflow-x:hidden}
  .mp a{color:var(--uw-blue-600);text-decoration:none}
  .mp a:hover{color:var(--uw-red-500)}
  .mp em{font-style:italic;color:var(--uw-red-500)}
  .mp details>summary{list-style:none;cursor:pointer}
  .mp details>summary::-webkit-details-marker{display:none}
  .mp input,.mp textarea{font-family:var(--font-sans)}
  .mp input::placeholder,.mp textarea::placeholder{color:var(--uw-ink-400)}
  .mp details[open] .mp-faq-icon{transform:rotate(45deg)}
  @keyframes mpFade{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:none}}
  @keyframes mpMarquee{from{transform:translateX(0)}to{transform:translateX(-50%)}}
  .mp-marquee{overflow:hidden;-webkit-mask-image:linear-gradient(90deg,transparent,#000 8%,#000 92%,transparent);mask-image:linear-gradient(90deg,transparent,#000 8%,#000 92%,transparent)}
  .mp-marquee-track{display:flex;width:max-content;animation:mpMarquee 32s linear infinite}
  .mp-marquee:hover .mp-marquee-track{animation-play-state:paused}
  .mp-testi-grid{column-count:3;column-gap:12px}
  @media(max-width:820px){.mp-testi-grid{column-count:2}}
  @media(max-width:520px){.mp-testi-grid{column-count:1}}
  .mp-cmp{max-width:920px;margin:0 auto;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;display:grid;grid-template-columns:minmax(110px,.7fr) 1fr 1fr}
  .mp-cmp-head,.mp-cmp-row{display:contents}
  .mp-cmp-hcell{padding:14px 18px;background:var(--uw-bg);border-bottom:1px solid var(--uw-border);font-family:var(--font-display);font-weight:600;font-size:16px;color:var(--uw-ink-600)}
  .mp-cmp-hcell.wise{background:var(--uw-blue-50);color:var(--uw-blue-700)}
  .mp-cmp-hcell.feat{font-family:var(--font-mono);font-size:11px;letter-spacing:.08em;text-transform:uppercase;color:var(--uw-ink-500);font-weight:400;display:flex;align-items:center}
  .mp-cmp-feat{font-family:var(--font-mono);font-size:11px;letter-spacing:.08em;text-transform:uppercase;color:var(--uw-ink-500);display:flex;align-items:center;padding:16px 18px;border-top:1px solid var(--uw-border)}
  .mp-cmp-wise{display:flex;gap:9px;align-items:flex-start;padding:16px 18px;background:var(--uw-blue-50);font-size:14px;line-height:1.45;color:var(--uw-ink-800);border-top:1px solid var(--uw-border)}
  .mp-cmp-other{display:flex;gap:9px;align-items:flex-start;padding:16px 18px;font-size:14px;line-height:1.45;color:var(--uw-ink-500);border-top:1px solid var(--uw-border)}
  .mp-cmp-cell{display:flex;gap:9px;align-items:flex-start}
  .mp-cmp-minilabel{display:none}
  @media(max-width:640px){
    .mp-cmp{display:block;border:none;border-radius:0;max-width:440px}
    .mp-cmp-head{display:none}
    .mp-cmp-row{display:block;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;margin-bottom:14px}
    .mp-cmp-feat{border-top:none;background:var(--uw-blue-700);color:#fff;font-size:12px;letter-spacing:.1em;padding:12px 16px}
    .mp-cmp-wise,.mp-cmp-other{border-top:1px solid var(--uw-border);flex-direction:column;gap:7px;padding:14px 16px;font-size:14.5px}
    .mp-cmp-minilabel{display:block;font-family:var(--font-mono);font-size:10px;letter-spacing:.09em;text-transform:uppercase;font-weight:600}
    .mp-cmp-wise .mp-cmp-minilabel{color:var(--uw-blue-700)}
    .mp-cmp-other .mp-cmp-minilabel{color:var(--uw-ink-500)}
  }
</style>
</helmet>
<div class="mp">

  <!-- ============ HERO ============ -->
  <section style="padding:clamp(52px,8vw,92px) 20px clamp(40px,6vw,64px);background:radial-gradient(760px 420px at 50% -8%, var(--uw-blue-50), transparent), var(--uw-surface)">
    <div style="max-width:820px;margin:0 auto;text-align:center;animation:mpFade .5s var(--ease-out) both">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.16em;text-transform:uppercase;color:var(--uw-red-500);display:inline-flex;align-items:center;gap:8px;margin-bottom:20px"><span style="width:7px;height:7px;border-radius:50%;background:var(--uw-red-500)"></span>USMLE Wise Match Packages</div>
      <h1 style="font-family:var(--font-display);font-weight:400;font-size:clamp(42px,7vw,60px);line-height:1.06;letter-spacing:-0.02em;margin:0 auto;color:var(--uw-ink-900);max-width:16ch">Match into your dream residency in just&nbsp;<em>one attempt</em>.</h1>
      <p style="font-size:clamp(15px,2.4vw,18px);line-height:1.6;color:var(--uw-ink-600);max-width:60ch;margin:22px auto 0">Done-for-you Match support, built by former program directors and residency selection committee members. We engineer every piece of your application, ERAS, personal statement, letters, signals, and interviews, into one coherent story. Make this your first and last Match season.</p>
      <div style="display:flex;justify-content:center;margin-top:30px">
        <a href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer" style="text-decoration:none"><x-import component-from-global-scope="USMLEWiseDesignSystem_d852a5.Button" variant="primary" size="lg" hint-size="300px,52px">Schedule my free Match consultation →</x-import></a>
      </div>
      <div style="display:flex;flex-direction:column;align-items:center;gap:8px;margin-top:26px">
        <sc-if value="{{ showStars }}" hint-placeholder-val="{{ true }}">
        <div style="display:flex;align-items:center;justify-content:center;flex-wrap:wrap;gap:4px 8px;color:var(--uw-ink-700);font-size:13.5px;text-align:center">
          <span style="display:inline-flex;color:var(--uw-warning-500)" aria-label="5 out of 5 stars">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.8 5.9 20.4l1.4-6.8L2.2 9l6.9-.7z"></path></svg>
            <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.8 5.9 20.4l1.4-6.8L2.2 9l6.9-.7z"></path></svg>
            <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.8 5.9 20.4l1.4-6.8L2.2 9l6.9-.7z"></path></svg>
            <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.8 5.9 20.4l1.4-6.8L2.2 9l6.9-.7z"></path></svg>
            <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.8 5.9 20.4l1.4-6.8L2.2 9l6.9-.7z"></path></svg>
          </span>
          <span>Trusted by <b style="color:var(--uw-ink-900)"><span data-count="100000" data-suffix="+">100,000+</span></b> students and doctors</span>
        </div>
        </sc-if>
        <div style="font-size:12.5px;color:var(--uw-ink-500)">Every package is money-back guaranteed</div>
      </div>
    </div>
  </section>

  <!-- ============ MATCHED AT ============ -->
  <section style="padding:clamp(40px,6vw,60px) 20px;background:var(--uw-bg);border-top:1px solid var(--uw-border)">
    <div style="max-width:900px;margin:0 auto;text-align:center">
      <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.16em;text-transform:uppercase;color:var(--uw-ink-500);margin-bottom:22px">Our students have matched into top U.S. programs</div>
      <div class="mp-marquee">
        <div class="mp-marquee-track" style="font-family:var(--font-display);font-size:clamp(16px,2.4vw,21px);color:var(--uw-ink-700);letter-spacing:-0.01em">
          <span style="display:flex;align-items:center;gap:12px;padding-right:12px"><span>Harvard</span><span style="color:var(--uw-red-500)">&bull;</span><span>Yale</span><span style="color:var(--uw-red-500)">&bull;</span><span>Johns Hopkins</span><span style="color:var(--uw-red-500)">&bull;</span><span>Stanford</span><span style="color:var(--uw-red-500)">&bull;</span><span>Columbia</span><span style="color:var(--uw-red-500)">&bull;</span><span>Mayo Clinic</span><span style="color:var(--uw-red-500)">&bull;</span><span>Cornell</span><span style="color:var(--uw-red-500)">&bull;</span><span>Penn</span><span style="color:var(--uw-red-500)">&bull;</span><span>Mount Sinai</span><span style="color:var(--uw-red-500)">&bull;</span><span>Cleveland Clinic</span><span style="color:var(--uw-red-500)">&bull;</span><span>UCLA</span><span style="color:var(--uw-red-500)">&bull;</span><span>Duke</span><span style="color:var(--uw-red-500)">&bull;</span><span>Brown</span><span style="color:var(--uw-red-500)">&bull;</span><span>Emory</span><span style="color:var(--uw-red-500)">&bull;</span></span>
          <span style="display:flex;align-items:center;gap:12px;padding-right:12px" aria-hidden="true"><span>Harvard</span><span style="color:var(--uw-red-500)">&bull;</span><span>Yale</span><span style="color:var(--uw-red-500)">&bull;</span><span>Johns Hopkins</span><span style="color:var(--uw-red-500)">&bull;</span><span>Stanford</span><span style="color:var(--uw-red-500)">&bull;</span><span>Columbia</span><span style="color:var(--uw-red-500)">&bull;</span><span>Mayo Clinic</span><span style="color:var(--uw-red-500)">&bull;</span><span>Cornell</span><span style="color:var(--uw-red-500)">&bull;</span><span>Penn</span><span style="color:var(--uw-red-500)">&bull;</span><span>Mount Sinai</span><span style="color:var(--uw-red-500)">&bull;</span><span>Cleveland Clinic</span><span style="color:var(--uw-red-500)">&bull;</span><span>UCLA</span><span style="color:var(--uw-red-500)">&bull;</span><span>Duke</span><span style="color:var(--uw-red-500)">&bull;</span><span>Brown</span><span style="color:var(--uw-red-500)">&bull;</span><span>Emory</span><span style="color:var(--uw-red-500)">&bull;</span></span>
      </div>
    </div>
  </section>

  <!-- ============ THE EMAIL / FOUNDER ============ -->
  <section style="padding:clamp(56px,8vw,96px) 20px;background:var(--uw-blue-800);color:#fff;position:relative;overflow:hidden">
    <div style="position:absolute;inset:0;background-image:radial-gradient(rgba(255,255,255,.09) 1px,transparent 1px);background-size:18px 18px;pointer-events:none"></div>
    <div style="max-width:760px;margin:0 auto;text-align:center;position:relative;z-index:1">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.16em;text-transform:uppercase;color:var(--uw-red-300);margin-bottom:18px">The email no one wants to open</div>
      <h2 style="font-family: var(--font-display); font-weight: 400; font-size: clamp(28px,4.6vw,44px); line-height: 1.1; letter-spacing: -0.02em; margin: 0 0 22px; color: var(--uw-bg)">"We regret to inform you, you did not match."</h2>
      <p style="font-size:clamp(15px,2.4vw,18px);line-height:1.65;color:rgba(255,255,255,.82);max-width:58ch;margin:0 auto 16px">Every year, thousands of brilliant applicants open Match Day to the same line.</p>
      <p style="font-size:clamp(15px,2.4vw,18px);line-height:1.65;color:rgba(255,255,255,.82);max-width:58ch;margin:0 auto 34px">They were smart enough. They worked hard enough. Their application just never lined up with the criteria programs score them on, and their story didn't add up to the people deciding.</p>

      <div style="width:188px;height:188px;margin:0 auto 24px;border-radius:50%;overflow:hidden;box-shadow:var(--shadow-lg);border:4px solid rgba(255,255,255,.25)">
        <x-import component-from-global-scope="image-slot" from="./match-packages/image-slot.js" id="founder" shape="circle" placeholder="Drop founder photo" hint-size="188px,188px"></x-import>
      </div>
      <div style="font-size:clamp(15px,2.4vw,18px);line-height:1.7;color:rgba(255,255,255,.82);max-width:60ch;margin:0 auto;display:flex;flex-direction:column;gap:18px;text-align:left">
        <p style="margin:0;text-align:center">I'm Dr. Manik Madaan, and I've watched too many brilliant applicants go unmatched, some for five, six, seven seasons in a row. A capable applicant with a weak application, passed over because a program never got to see who they were. It broke my heart every time.</p>
        <p style="margin:0;text-align:center">I spent about four years serving on a residency selection committee, and I've worked with multiple program directors, so I know what happens on the other side. I saw exactly what they select for, and turned it into a process: the 3X framework, the criteria programs use to choose who to interview and rank. Then I started crafting whole applications around it, in one place.</p>
        <div style="margin:0;text-align:center"><div>Since then, applicants who went unmatched for years have matched. First-time applicants match into their dream residency, even in highly competitive programs and specialties, on their first attempt.</div></div>
        <div style="margin:0;color:#fff;font-family:var(--font-display);font-size:clamp(18px,2.8vw,22px);line-height:1.5;text-align:center"><div>You've done the hard part. Your application should do you justice.</div></div>
      </div>
      <div style="margin-top:22px;font-size:14px;color:rgba(255,255,255,.7)">
        <div style="font-weight:600;color:#fff">Dr. Manik Madaan</div>
        <div>Contributor, USMLE Wise</div>
        <div style="margin-top:2px;color:rgba(255,255,255,.55)">World's most-followed USMLE and Match expert · 700,000+ followers · close to 12,000 students mentored to match</div>
      </div>
      <div style="display:flex;justify-content:center;margin-top:30px">
        <a href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer" style="text-decoration:none"><x-import component-from-global-scope="USMLEWiseDesignSystem_d852a5.Button" variant="primary" size="lg" hint-size="300px,52px">Schedule my free Match consultation →</x-import></a>
      </div>
    </div>
  </section>

  <!-- ============ 3X FRAMEWORK ============ -->
  <section style="padding:clamp(56px,8vw,96px) 20px;background:var(--uw-bg);border-top:1px solid var(--uw-border)">
    <div style="max-width:760px;margin:0 auto 44px;text-align:center">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.16em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:16px">The 3X framework</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,4.6vw,44px);line-height:1.1;letter-spacing:-0.02em;margin:0 0 20px;color:var(--uw-ink-900)">We build your application to the 3X framework</h2>
      <p style="font-size:clamp(15px,2.4vw,18px);line-height:1.6;color:var(--uw-ink-600);max-width:58ch;margin:0 auto">Programs judge your whole application against a fixed set of criteria. We write every piece to all three lenses, so a committee reads one clear, trustworthy story across every document.</p>
    </div>
    <div style="max-width:1040px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:20px">
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:28px;text-align:left">
        <div style="width:44px;height:44px;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-500);display:grid;place-items:center;margin-bottom:16px"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"></path><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"></path><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"></path></svg></div>
        <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.12em;color:var(--uw-blue-500);margin-bottom:12px">01</div>
        <h3 style="font-family:var(--font-display);font-weight:600;font-size:20px;margin:0 0 10px;color:var(--uw-ink-900)">AAMC holistic review</h3>
        <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Your experiences, attributes, competencies, and metrics, tied into one story that backs up the scores already on your file. <span style="color:var(--uw-ink-400)">(EACM)</span></p>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:28px;text-align:left">
        <div style="width:44px;height:44px;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-500);display:grid;place-items:center;margin-bottom:16px"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path></svg></div>
        <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.12em;color:var(--uw-blue-500);margin-bottom:12px">02</div>
        <h3 style="font-family:var(--font-display);font-weight:600;font-size:20px;margin:0 0 10px;color:var(--uw-ink-900)">PCM-6 communication</h3>
        <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Six things a strong application carries at once: logical clarity, emotional truth, values, imagination, momentum, and likeability.</p>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:28px;text-align:left">
        <div style="width:44px;height:44px;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-500);display:grid;place-items:center;margin-bottom:16px"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 2v2"></path><path d="M5 2v2"></path><path d="M5 3H4a2 2 0 0 0-2 2v4a6 6 0 0 0 12 0V5a2 2 0 0 0-2-2h-1"></path><path d="M8 15a6 6 0 0 0 12 0v-3"></path><circle cx="20" cy="10" r="2"></circle></svg></div>
        <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.12em;color:var(--uw-blue-500);margin-bottom:12px">03</div>
        <h3 style="font-family:var(--font-display);font-weight:600;font-size:20px;margin:0 0 10px;color:var(--uw-ink-900)">ACGME core competencies</h3>
        <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Your CV, statement, and interview answers quietly show patient care, knowledge, professionalism, and teamwork, the traits every program is required to evaluate.</p>
      </div>
    </div>
    <div style="display:flex;justify-content:center;margin-top:34px">
      <a href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer" style="text-decoration:none"><x-import component-from-global-scope="USMLEWiseDesignSystem_d852a5.Button" variant="primary" size="lg" hint-size="300px,52px">Schedule my free Match consultation →</x-import></a>
    </div>
  </section>

  <!-- ============ OUTCOMES ============ -->
  <section style="padding:clamp(56px,8vw,96px) 20px;background:var(--uw-surface)">
    <div style="max-width:760px;margin:0 auto 40px;text-align:center">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.16em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:16px">The outcomes</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,4.6vw,44px);line-height:1.1;letter-spacing:-0.02em;margin:0;color:var(--uw-ink-900)">Physician-level guidance that takes you from anxious to ready.</h2>
    </div>
    <div style="max-width:900px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:20px">
      <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:32px 24px;text-align:center">
        <div style="font-family:var(--font-display);font-size:clamp(44px,7vw,60px);line-height:1;color:var(--uw-blue-500);letter-spacing:-0.02em"><span data-count="2" data-suffix="x">2x</span></div>
        <div style="font-weight:600;font-size:16px;color:var(--uw-ink-900);margin-top:10px">your interviews</div>
        <p style="margin:8px 0 0;font-size:14px;line-height:1.55;color:var(--uw-ink-600)">Invites from programs our students had written off.</p>
      </div>
      <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:32px 24px;text-align:center">
        <div style="font-family:var(--font-display);font-size:clamp(44px,7vw,60px);line-height:1;color:var(--uw-blue-500);letter-spacing:-0.02em"><span data-count="88" data-suffix="%">88%</span></div>
        <div style="font-weight:600;font-size:16px;color:var(--uw-ink-900);margin-top:10px">2.6x the match odds</div>
        <p style="margin:8px 0 0;font-size:14px;line-height:1.55;color:var(--uw-ink-600)">Our students match at about 88%, roughly 2.6x the average IMG match rate, and close to the 92% that US MDs and DOs see.</p>
      </div>
    </div>
    <div style="display:flex;justify-content:center;margin-top:34px">
      <a href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer" style="text-decoration:none"><x-import component-from-global-scope="USMLEWiseDesignSystem_d852a5.Button" variant="primary" size="lg" hint-size="300px,52px">Schedule my free Match consultation →</x-import></a>
    </div>
  </section>

  <!-- ============ TESTIMONIALS ============ -->
  <section style="padding:clamp(56px,8vw,96px) 20px;background:var(--uw-bg);border-top:1px solid var(--uw-border)">
    <div style="max-width:760px;margin:0 auto 44px;text-align:center">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.16em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:16px">What our students say</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,4.6vw,44px);line-height:1.1;letter-spacing:-0.02em;margin:0;color:var(--uw-ink-900)">Applications rebuilt. Seasons ended.</h2>
    </div>
    <div style="max-width:1040px;margin:0 auto;max-height:78vh;overflow-y:auto;border-radius:var(--r-lg);border:1px solid var(--uw-border);padding:16px;background:var(--uw-surface)">
      <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500);margin:2px 0 12px">Match day</div>
      <div class="mp-testi-grid" style="margin-bottom:8px">
        <img src="uploads/Instagram%20Photo%20Download%20(2).jpg" alt="USMLE Wise applicant who matched" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Instagram%20Photo%20660329525.jpg" alt="USMLE Wise applicant who matched" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/656425718_17890021239448701_3488419753803306264_n.jpg" alt="USMLE Wise applicant who matched" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Instagram%20Photo%20Download%20(1).jpg" alt="USMLE Wise applicant who matched" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Instagram%20Photo%20656292960.jpg" alt="USMLE Wise applicant who matched" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/WhatsApp%20Image%20Apr%204%202026.jpeg" alt="USMLE Wise applicant who matched" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/WhatsApp%20Image%20Apr%204%202026%20(1).jpeg" alt="USMLE Wise applicant who matched" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/WhatsApp%20Image%20May%2016%202026.jpeg" alt="USMLE Wise applicant who matched" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/WhatsApp%20Image%20Apr%2015%202026.jpeg" alt="USMLE Wise applicant who matched" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Instagram%20Photo%20657845911.jpg" alt="USMLE Wise applicant who matched" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
      </div>
      <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500);margin:0 0 12px;padding-top:16px;border-top:1px solid var(--uw-border)">In their words</div>
      <div class="mp-testi-grid">
        <img src="uploads/Zeel%20Patel.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/1.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/2.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/3.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/4.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/5.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/6.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/7.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/8.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/9.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/10.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/11.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/12.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/13.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Allegheny%20IM.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Anjali.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Ayesha%20Surgery.png" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Ayra.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Bardia.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/EM_Anniesha.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Guy%20Advanced%20Intereviewing.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Guy%20UOH.png" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Hamna.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Joycine%20matched.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Lakshita%20Advanced%20Interviewing.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Logesh.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Mounika.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Nancy.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Naz%20advanced%20interviewing.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Neuro.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Niyati%20Off%20Cycle.png" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Okkes.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Paranshi%20IM.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Pavani.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Praneet.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Psych%20match.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Rasmitha.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Ravindra.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/SOAP%201.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Saint%20Vincnent%20R.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Screenshot_20260703_032742_Instagram~2.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Shiv.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Shreya%20FM%20Match.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/SidNath.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Sinmmer.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Smit.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Sonia%201%20Advanced%20Interviewing.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Sonia%202%20Advanced%20Interviewing.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Soura%20Psych.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Swathi.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/UIC%20Peoria.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Unknown%201.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Unknown%203.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Unkown%202.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/Yog%2014.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
        <img src="uploads/babitha.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;display:block;margin-bottom:12px;border-radius:var(--r-md);break-inside:avoid">
      </div>
    </div>
    <div style="display:flex;justify-content:center;margin-top:34px">
      <a href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer" style="text-decoration:none"><x-import component-from-global-scope="USMLEWiseDesignSystem_d852a5.Button" variant="primary" size="lg" hint-size="300px,52px">Schedule my free Match consultation →</x-import></a>
    </div>
  </section>

  <!-- ============ WHO WE HELP ============ -->
  <section style="padding:clamp(56px,8vw,96px) 20px;background:var(--uw-surface)">
    <div style="max-width:720px;margin:0 auto 44px;text-align:center">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.16em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:16px">Who we help</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,4.6vw,44px);line-height:1.1;letter-spacing:-0.02em;margin:0;color:var(--uw-ink-900)">No matter where you are in your Match journey, we can help.</h2>
    </div>
    <div style="max-width:1040px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:20px">
      <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;text-align:left">
        <div style="width:42px;height:42px;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-500);display:grid;place-items:center;margin-bottom:14px"><svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10 12 5 2 10l10 5 10-5Z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg></div>
        <h3 style="font-family:var(--font-display);font-weight:600;font-size:18px;margin:0 0 8px;color:var(--uw-ink-900)">First-time applicants</h3>
        <p style="margin:0;font-size:14px;line-height:1.55;color:var(--uw-ink-600)">Make this your first and last Match, done right from the start.</p>
      </div>
      <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;text-align:left">
        <div style="width:42px;height:42px;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-500);display:grid;place-items:center;margin-bottom:14px"><svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M2 12h20"></path><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10Z"></path></svg></div>
        <h3 style="font-family:var(--font-display);font-weight:600;font-size:18px;margin:0 0 8px;color:var(--uw-ink-900)">IMG applicants</h3>
        <p style="margin:0;font-size:14px;line-height:1.55;color:var(--uw-ink-600)">Your international training is an advantage, and we show programs why.</p>
      </div>
      <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;text-align:left">
        <div style="width:42px;height:42px;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-500);display:grid;place-items:center;margin-bottom:14px"><svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 2v2"></path><path d="M5 10a7 7 0 0 0 14 0V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2Z"></path><circle cx="18" cy="16" r="3"></circle></svg></div>
        <h3 style="font-family:var(--font-display);font-weight:600;font-size:18px;margin:0 0 8px;color:var(--uw-ink-900)">DO applicants</h3>
        <p style="margin:0;font-size:14px;line-height:1.55;color:var(--uw-ink-600)">A clear COMLEX and USMLE playbook, built for the DO path.</p>
      </div>
      <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;text-align:left">
        <div style="width:42px;height:42px;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-500);display:grid;place-items:center;margin-bottom:14px"><svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></div>
        <h3 style="font-family:var(--font-display);font-weight:600;font-size:18px;margin:0 0 8px;color:var(--uw-ink-900)">Older graduates</h3>
        <p style="margin:0;font-size:14px;line-height:1.55;color:var(--uw-ink-600)">A gap since graduation, handled so programs stay focused on your strengths.</p>
      </div>
      <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;text-align:left">
        <div style="width:42px;height:42px;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-500);display:grid;place-items:center;margin-bottom:14px"><svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><path d="M8.21 13.89 7 23l5-3 5 3-1.21-9.11"></path></svg></div>
        <h3 style="font-family:var(--font-display);font-weight:600;font-size:18px;margin:0 0 8px;color:var(--uw-ink-900)">Competitive specialties</h3>
        <p style="margin:0;font-size:14px;line-height:1.55;color:var(--uw-ink-600)">Advanced strategy for the most competitive fields.</p>
      </div>
      <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;text-align:left">
        <div style="width:42px;height:42px;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-500);display:grid;place-items:center;margin-bottom:14px"><svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-6.74L3 8"></path><polyline points="3 3 3 8 8 8"></polyline></svg></div>
        <h3 style="font-family:var(--font-display);font-weight:600;font-size:18px;margin:0 0 8px;color:var(--uw-ink-900)">Reapplicants</h3>
        <p style="margin:0;font-size:14px;line-height:1.55;color:var(--uw-ink-600)">Your last cycle, rebuilt into a sharper, stronger application.</p>
      </div>
    </div>
    <div style="display:flex;justify-content:center;margin-top:34px">
      <a href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer" style="text-decoration:none"><x-import component-from-global-scope="USMLEWiseDesignSystem_d852a5.Button" variant="primary" size="lg" hint-size="300px,52px">Schedule my free Match consultation →</x-import></a>
    </div>
  </section>

  <!-- ============ PRICING ============ -->
  <section id="pricing" style="padding:clamp(56px,8vw,96px) 20px;background:var(--uw-surface)">
    <div style="max-width:760px;margin:0 auto 44px;text-align:center">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.16em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:16px">Choose your package</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,4.6vw,44px);line-height:1.1;letter-spacing:-0.02em;margin:0 0 20px;color:var(--uw-ink-900)">One framework. Three levels of support.</h2>
      <p style="font-size:clamp(15px,2.4vw,18px);line-height:1.6;color:var(--uw-ink-600);max-width:60ch;margin:0 auto">Every package rebuilds your ERAS CV and personal statement to the 3X framework, aligns your letters and signals, and preps you for interviews. Every one includes 100% human editing by physicians, no AI, and a money-back guarantee.</p>
    </div>
    <div style="max-width:1080px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(290px,1fr));gap:22px;align-items:stretch">

      <!-- Maximizer (left) -->
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:30px 26px;text-align:left;display:flex;flex-direction:column">
        <div style="font-weight:600;font-size:14px;letter-spacing:.02em;color:var(--uw-ink-700)">USMLE Match Maximizer</div>
        <div style="font-family:var(--font-display);font-size:40px;color:var(--uw-ink-900);margin:8px 0 2px;letter-spacing:-0.02em">$6,999</div>
        <div style="font-size:13.5px;color:var(--uw-ink-500);min-height:52px">Best for reapplicants, applicants with red flags, or an older year of graduation.</div>
        <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-400);margin:20px 0 12px;padding-bottom:8px;border-bottom:1px solid var(--uw-border)">What's included</div>
        <ul style="list-style:none;padding:0;margin:0 0 24px;display:flex;flex-direction:column;gap:9px;flex:1">
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>100% human editing by physicians, no AI</span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>Physician advisor</span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>Unlimited ERAS CV revisions</b></span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>Unlimited personal statement revisions</b></span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>Live 4-hour session</b> - your editor builds your CV and statement with you</span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>Match membership</b> - all 9+ courses ($399 value), including the <b>Ultimate Guide to Signaling &amp; Program List Creation</b>, interview prep, and research placement</span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>Up to <b>4 hours of mock interviews</b></span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>Advanced Interviewing course ($399 value)</span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>Weekly 1:1 hour with your advisor, through Match day</b></span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>Deep 3-hour</b> profile review and strategy</span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>We build your full program list for you</b></span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>We do all your signaling for you, across every specialty</b></span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>Support across up to 2 specialties</b></span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>4 LoR revisions</b> and <b>3 letters of intent</b></span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>Dedicated SOAP and scramble support</b></span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>Unlimited WhatsApp access, 24/7 support</b></span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>2 to 4 day turnaround</span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-900);background:var(--uw-red-50);border-radius:var(--r-sm);padding:9px 10px;margin-top:4px"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-red-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>Match edit guarantee:</b> if you don't match, we keep working with you for as many cycles as it takes, until you do</span></li>
        </ul>
        <a href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer" style="text-decoration:none"><x-import component-from-global-scope="USMLEWiseDesignSystem_d852a5.Button" variant="outline" size="lg" full-width="{{ true }}" hint-size="100%,52px">Secure my residency spot →</x-import></a>
      </div>

      <!-- Pro (highlighted, center) -->
      <div style="background:var(--uw-blue-500);border-radius:var(--r-lg);padding:30px 26px;text-align:left;display:flex;flex-direction:column;color:#fff;position:relative;overflow:hidden;box-shadow:var(--shadow-xl)">
        <div style="position:absolute;inset:0;background-image:radial-gradient(rgba(255,255,255,.1) 1px,transparent 1px);background-size:16px 16px;pointer-events:none"></div>
        <div style="position:relative;z-index:1;display:flex;flex-direction:column;height:100%">
          <div style="display:flex;align-items:center;justify-content:space-between;gap:8px">
            <div style="font-weight:600;font-size:14px;letter-spacing:.02em;color:#fff">USMLE Match Pro</div>
            <span style="background:var(--uw-red-500);color:#fff;font-family:var(--font-mono);font-size:10px;letter-spacing:.1em;text-transform:uppercase;padding:5px 9px;border-radius:999px">Most popular</span>
          </div>
          <div style="font-family:var(--font-display);font-size:40px;color:#fff;margin:8px 0 2px;letter-spacing:-0.02em">$3,999</div>
          <div style="font-size:13.5px;color:rgba(255,255,255,.72);min-height:52px">Best for most applicants who want their whole strategy handled.</div>
          <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.6);margin:20px 0 12px;padding-bottom:8px;border-bottom:1px solid rgba(255,255,255,.2)">What's included</div>
          <ul style="list-style:none;padding:0;margin:0 0 24px;display:flex;flex-direction:column;gap:9px;flex:1">
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:rgba(255,255,255,.92)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-300)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>100% human editing by physicians, no AI</span></li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:rgba(255,255,255,.92)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-300)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>Physician advisor</span></li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:rgba(255,255,255,.92)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-300)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>Up to 3 ERAS CV revisions</b></span></li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:rgba(255,255,255,.92)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-300)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>Up to 3 personal statement revisions</b></span></li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:rgba(255,255,255,.92)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-300)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>Live 2-hour session</b> - your editor builds your documents with you</span></li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:rgba(255,255,255,.92)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-300)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>Match membership</b> - all 9+ courses ($399 value), including the <b>Ultimate Guide to Signaling &amp; Program List Creation</b>, interview prep, and research placement</span></li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:rgba(255,255,255,.92)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-300)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>Up to 2 hours of mock interviews</span></li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:rgba(255,255,255,.92)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-300)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>Advanced Interviewing course ($399 value)</span></li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:rgba(255,255,255,.92)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-300)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>Weekly 1:1 hour with your advisor, through Match day</b></span></li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:rgba(255,255,255,.92)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-300)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>1 to 2 hour profile review, then your strategy</span></li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:rgba(255,255,255,.92)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-300)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>We build your program list for one specialty, with you</b></span></li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:rgba(255,255,255,.92)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-300)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>We do your program signaling for you</b></span></li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:rgba(255,255,255,.92)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-300)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>WhatsApp access to your advisor</span></li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:rgba(255,255,255,.92)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-300)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>2 to 4 day turnaround</span></li>
          </ul>
          <a href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer" style="text-decoration:none"><x-import component-from-global-scope="USMLEWiseDesignSystem_d852a5.Button" variant="primary" size="lg" full-width="{{ true }}" hint-size="100%,52px">Secure my residency spot →</x-import></a>
        </div>
      </div>

      <!-- Essentials (right) -->
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:30px 26px;text-align:left;display:flex;flex-direction:column">
        <div style="font-weight:600;font-size:14px;letter-spacing:.02em;color:var(--uw-ink-700)">Essentials Starter</div>
        <div style="font-family:var(--font-display);font-size:40px;color:var(--uw-ink-900);margin:8px 0 2px;letter-spacing:-0.02em">$1,749</div>
        <div style="font-size:13.5px;color:var(--uw-ink-500);min-height:52px">Best for a strong applicant who mainly needs sharp documents.</div>
        <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-400);margin:20px 0 12px;padding-bottom:8px;border-bottom:1px solid var(--uw-border)">What's included</div>
        <ul style="list-style:none;padding:0;margin:0 0 24px;display:flex;flex-direction:column;gap:9px;flex:1">
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>100% human editing by physicians, no AI</span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>Physician advisor</span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>Up to 2 ERAS CV revisions</b></span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>Up to 2 personal statement revisions</b></span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>Live 1-hour session</b> - minimum - your editor builds your CV and PS with you</span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span><b>Match membership</b> - all 9+ courses ($399 value), including the <b>Ultimate Guide to Signaling &amp; Program List Creation</b>, interview prep, and research placement</span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>1-hour mock interview</span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>Advanced Interviewing course ($399 value)</span></li>
          <li style="display:flex;gap:9px;align-items:flex-start;font-size:13.5px;line-height:1.4;color:var(--uw-ink-700)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>2 to 4 day turnaround</span></li>
        </ul>
        <a href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer" style="text-decoration:none"><x-import component-from-global-scope="USMLEWiseDesignSystem_d852a5.Button" variant="secondary" size="lg" full-width="{{ true }}" hint-size="100%,52px">Secure my residency spot →</x-import></a>
      </div>
    </div>
    <p style="text-align:center;font-size:14px;color:var(--uw-ink-500);margin:26px auto 0;max-width:50ch">Prefer to pay in installments? Book a free call and we'll set up a plan. Start with a free consultation, and we'll help you choose the right one.</p>
  </section>

  <!-- ============ GUARANTEES ============ -->
  <section style="padding:clamp(56px,8vw,96px) 20px;background:var(--uw-bg);border-top:1px solid var(--uw-border)">
    <div style="max-width:760px;margin:0 auto 40px;text-align:center">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.16em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:16px">Our guarantees</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,4.6vw,44px);line-height:1.1;letter-spacing:-0.02em;margin:0;color:var(--uw-ink-900)">The risk is on us, not you.</h2>
    </div>
    <div style="max-width:880px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px">
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:28px;text-align:left">
        <div style="width:42px;height:42px;border-radius:var(--r-md);background:var(--uw-success-50);color:var(--uw-success-500);display:grid;place-items:center;margin-bottom:16px"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3 style="font-family:var(--font-display);font-weight:600;font-size:19px;margin:0 0 10px;color:var(--uw-ink-900)">Money-back guarantee, on every package</h3>
        <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">It starts with your first working session. If you don't feel it's right for you, tell us and we'll refund you in full.</p>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:28px;text-align:left">
        <div style="width:42px;height:42px;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-500);display:grid;place-items:center;margin-bottom:16px"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg></div>
        <h3 style="font-family:var(--font-display);font-weight:600;font-size:19px;margin:0 0 10px;color:var(--uw-ink-900)">Match edit guarantee, on Maximizer</h3>
        <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">If you don't match this cycle, we keep working with you at no extra cost, editing and re-strategizing for as many cycles as it takes, until you match. The final Match decision sits with the programs, so we commit to the work and stay with you the whole way.</p>
      </div>
    </div>
  </section>

  <!-- ============ VIDEO STORIES ============ -->
  <section style="padding:clamp(56px,8vw,96px) 20px;background:var(--uw-surface)">
    <div style="max-width:760px;margin:0 auto 48px;text-align:center">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.16em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:16px">In their words</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,4.6vw,44px);line-height:1.1;letter-spacing:-0.02em;margin:0 0 18px;color:var(--uw-ink-900)">Hear how they got there.</h2>
      <p style="font-size:clamp(15px,2.4vw,18px);line-height:1.6;color:var(--uw-ink-600);max-width:58ch;margin:0 auto">Old grads, low scores, second attempts, prestigious programs - every path to the Match, told by the doctors who walked it.</p>
    </div>
    <div style="max-width:1080px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));gap:22px">
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;display:flex;flex-direction:column">
        <div data-vid="WDrpqKmLwLs" onClick="{{ playVideo }}" style="position:relative;cursor:pointer;aspect-ratio:4/3;background:#000">
          <img src="https://img.youtube.com/vi/WDrpqKmLwLs/hqdefault.jpg" alt="Ali - USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
          <div style="position:absolute;inset:0;display:grid;place-items:center;pointer-events:none">
            <div style="width:64px;height:64px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="var(--uw-blue-600)" style="margin-left:3px"><path d="M8 5v14l11-7z"></path></svg>
            </div>
          </div>
        </div>
        <div style="padding:18px 20px 20px">
          <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-blue-500);margin-bottom:8px">Super old-grad match</div>
          <div style="font-family:var(--font-display);font-weight:600;font-size:19px;color:var(--uw-ink-900)">Ali <span style="display:inline-block;font-family:var(--font-mono);font-size:10px;letter-spacing:.08em;color:var(--uw-blue-600);background:var(--uw-blue-50);border:1px solid var(--uw-blue-100);border-radius:var(--r-xs);padding:2px 6px;vertical-align:middle;margin-left:6px">IM</span></div>
        </div>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;display:flex;flex-direction:column">
        <div data-vid="Ea1pD2xY0_s" onClick="{{ playVideo }}" style="position:relative;cursor:pointer;aspect-ratio:4/3;background:#000">
          <img src="https://img.youtube.com/vi/Ea1pD2xY0_s/hqdefault.jpg" alt="Hamna - USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
          <div style="position:absolute;inset:0;display:grid;place-items:center;pointer-events:none">
            <div style="width:64px;height:64px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="var(--uw-blue-600)" style="margin-left:3px"><path d="M8 5v14l11-7z"></path></svg>
            </div>
          </div>
        </div>
        <div style="padding:18px 20px 20px">
          <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-blue-500);margin-bottom:8px">Super old-grad match</div>
          <div style="font-family:var(--font-display);font-weight:600;font-size:19px;color:var(--uw-ink-900)">Hamna <span style="display:inline-block;font-family:var(--font-mono);font-size:10px;letter-spacing:.08em;color:var(--uw-blue-600);background:var(--uw-blue-50);border:1px solid var(--uw-blue-100);border-radius:var(--r-xs);padding:2px 6px;vertical-align:middle;margin-left:6px">FM</span></div>
        </div>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;display:flex;flex-direction:column">
        <div data-vid="lmjpF2nrXOU" onClick="{{ playVideo }}" style="position:relative;cursor:pointer;aspect-ratio:4/3;background:#000">
          <img src="https://img.youtube.com/vi/lmjpF2nrXOU/hqdefault.jpg" alt="SOAP match - USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
          <div style="position:absolute;inset:0;display:grid;place-items:center;pointer-events:none">
            <div style="width:64px;height:64px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="var(--uw-blue-600)" style="margin-left:3px"><path d="M8 5v14l11-7z"></path></svg>
            </div>
          </div>
        </div>
        <div style="padding:18px 20px 20px">
          <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-blue-500);margin-bottom:8px">Super old-grad match</div>
          <div style="font-family:var(--font-display);font-weight:600;font-size:19px;color:var(--uw-ink-900)">SOAP match <span style="display:inline-block;font-family:var(--font-mono);font-size:10px;letter-spacing:.08em;color:var(--uw-blue-600);background:var(--uw-blue-50);border:1px solid var(--uw-blue-100);border-radius:var(--r-xs);padding:2px 6px;vertical-align:middle;margin-left:6px">SOAP</span></div>
        </div>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;display:flex;flex-direction:column">
        <div data-vid="O4Gns55Brh0" onClick="{{ playVideo }}" style="position:relative;cursor:pointer;aspect-ratio:4/3;background:#000">
          <img src="https://img.youtube.com/vi/O4Gns55Brh0/hqdefault.jpg" alt="Shreya - USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
          <div style="position:absolute;inset:0;display:grid;place-items:center;pointer-events:none">
            <div style="width:64px;height:64px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="var(--uw-blue-600)" style="margin-left:3px"><path d="M8 5v14l11-7z"></path></svg>
            </div>
          </div>
        </div>
        <div style="padding:18px 20px 20px">
          <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-blue-500);margin-bottom:8px">Old grad · Post-SOAP</div>
          <div style="font-family:var(--font-display);font-weight:600;font-size:19px;color:var(--uw-ink-900)">Shreya <span style="display:inline-block;font-family:var(--font-mono);font-size:10px;letter-spacing:.08em;color:var(--uw-blue-600);background:var(--uw-blue-50);border:1px solid var(--uw-blue-100);border-radius:var(--r-xs);padding:2px 6px;vertical-align:middle;margin-left:6px">FM</span></div>
        </div>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;display:flex;flex-direction:column">
        <div data-vid="bz_R34QsKjk" onClick="{{ playVideo }}" style="position:relative;cursor:pointer;aspect-ratio:4/3;background:#000">
          <img src="https://img.youtube.com/vi/bz_R34QsKjk/hqdefault.jpg" alt="Dr. Yash - USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
          <div style="position:absolute;inset:0;display:grid;place-items:center;pointer-events:none">
            <div style="width:64px;height:64px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="var(--uw-blue-600)" style="margin-left:3px"><path d="M8 5v14l11-7z"></path></svg>
            </div>
          </div>
        </div>
        <div style="padding:18px 20px 20px">
          <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-blue-500);margin-bottom:8px">Old grad · Post-SOAP</div>
          <div style="font-family:var(--font-display);font-weight:600;font-size:19px;color:var(--uw-ink-900)">Dr. Yash <span style="display:inline-block;font-family:var(--font-mono);font-size:10px;letter-spacing:.08em;color:var(--uw-blue-600);background:var(--uw-blue-50);border:1px solid var(--uw-blue-100);border-radius:var(--r-xs);padding:2px 6px;vertical-align:middle;margin-left:6px">IM</span></div>
        </div>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;display:flex;flex-direction:column">
        <div data-vid="64yfSkj4M_8" onClick="{{ playVideo }}" style="position:relative;cursor:pointer;aspect-ratio:4/3;background:#000">
          <img src="https://img.youtube.com/vi/64yfSkj4M_8/hqdefault.jpg" alt="Nathan - USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
          <div style="position:absolute;inset:0;display:grid;place-items:center;pointer-events:none">
            <div style="width:64px;height:64px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="var(--uw-blue-600)" style="margin-left:3px"><path d="M8 5v14l11-7z"></path></svg>
            </div>
          </div>
        </div>
        <div style="padding:18px 20px 20px">
          <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-blue-500);margin-bottom:8px">Old grad · 5+ years since graduation</div>
          <div style="font-family:var(--font-display);font-weight:600;font-size:19px;color:var(--uw-ink-900)">Nathan <span style="display:inline-block;font-family:var(--font-mono);font-size:10px;letter-spacing:.08em;color:var(--uw-blue-600);background:var(--uw-blue-50);border:1px solid var(--uw-blue-100);border-radius:var(--r-xs);padding:2px 6px;vertical-align:middle;margin-left:6px">IM</span></div>
        </div>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;display:flex;flex-direction:column">
        <div data-vid="HSsrZERcvbI" onClick="{{ playVideo }}" style="position:relative;cursor:pointer;aspect-ratio:4/3;background:#000">
          <img src="https://img.youtube.com/vi/HSsrZERcvbI/hqdefault.jpg" alt="Anjali - USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
          <div style="position:absolute;inset:0;display:grid;place-items:center;pointer-events:none">
            <div style="width:64px;height:64px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="var(--uw-blue-600)" style="margin-left:3px"><path d="M8 5v14l11-7z"></path></svg>
            </div>
          </div>
        </div>
        <div style="padding:18px 20px 20px">
          <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-blue-500);margin-bottom:8px">Matched with low scores · 218 on Step 2</div>
          <div style="font-family:var(--font-display);font-weight:600;font-size:19px;color:var(--uw-ink-900)">Anjali <span style="display:inline-block;font-family:var(--font-mono);font-size:10px;letter-spacing:.08em;color:var(--uw-blue-600);background:var(--uw-blue-50);border:1px solid var(--uw-blue-100);border-radius:var(--r-xs);padding:2px 6px;vertical-align:middle;margin-left:6px">IM</span></div>
        </div>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;display:flex;flex-direction:column">
        <div data-vid="F8E7lTvGKRU" onClick="{{ playVideo }}" style="position:relative;cursor:pointer;aspect-ratio:4/3;background:#000">
          <img src="https://img.youtube.com/vi/F8E7lTvGKRU/hqdefault.jpg" alt="Lakshita - USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
          <div style="position:absolute;inset:0;display:grid;place-items:center;pointer-events:none">
            <div style="width:64px;height:64px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="var(--uw-blue-600)" style="margin-left:3px"><path d="M8 5v14l11-7z"></path></svg>
            </div>
          </div>
        </div>
        <div style="padding:18px 20px 20px">
          <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-blue-500);margin-bottom:8px">Matched with low scores · 221 on Step 2</div>
          <div style="font-family:var(--font-display);font-weight:600;font-size:19px;color:var(--uw-ink-900)">Lakshita <span style="display:inline-block;font-family:var(--font-mono);font-size:10px;letter-spacing:.08em;color:var(--uw-blue-600);background:var(--uw-blue-50);border:1px solid var(--uw-blue-100);border-radius:var(--r-xs);padding:2px 6px;vertical-align:middle;margin-left:6px">IM</span></div>
        </div>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;display:flex;flex-direction:column">
        <div data-vid="LKF0UYfXyE0" onClick="{{ playVideo }}" style="position:relative;cursor:pointer;aspect-ratio:4/3;background:#000">
          <img src="https://img.youtube.com/vi/LKF0UYfXyE0/hqdefault.jpg" alt="UK graduate - USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
          <div style="position:absolute;inset:0;display:grid;place-items:center;pointer-events:none">
            <div style="width:64px;height:64px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="var(--uw-blue-600)" style="margin-left:3px"><path d="M8 5v14l11-7z"></path></svg>
            </div>
          </div>
        </div>
        <div style="padding:18px 20px 20px">
          <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-blue-500);margin-bottom:8px">International grad</div>
          <div style="font-family:var(--font-display);font-weight:600;font-size:19px;color:var(--uw-ink-900)">UK graduate <span style="display:inline-block;font-family:var(--font-mono);font-size:10px;letter-spacing:.08em;color:var(--uw-blue-600);background:var(--uw-blue-50);border:1px solid var(--uw-blue-100);border-radius:var(--r-xs);padding:2px 6px;vertical-align:middle;margin-left:6px">IM</span></div>
        </div>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;display:flex;flex-direction:column">
        <div data-vid="8S2q-5Pb87k" onClick="{{ playVideo }}" style="position:relative;cursor:pointer;aspect-ratio:4/3;background:#000">
          <img src="https://img.youtube.com/vi/8S2q-5Pb87k/hqdefault.jpg" alt="Pavani - USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
          <div style="position:absolute;inset:0;display:grid;place-items:center;pointer-events:none">
            <div style="width:64px;height:64px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="var(--uw-blue-600)" style="margin-left:3px"><path d="M8 5v14l11-7z"></path></svg>
            </div>
          </div>
        </div>
        <div style="padding:18px 20px 20px">
          <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-blue-500);margin-bottom:8px">Matched with a Step 2 attempt</div>
          <div style="font-family:var(--font-display);font-weight:600;font-size:19px;color:var(--uw-ink-900)">Pavani <span style="display:inline-block;font-family:var(--font-mono);font-size:10px;letter-spacing:.08em;color:var(--uw-blue-600);background:var(--uw-blue-50);border:1px solid var(--uw-blue-100);border-radius:var(--r-xs);padding:2px 6px;vertical-align:middle;margin-left:6px">FM</span></div>
        </div>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;display:flex;flex-direction:column">
        <div data-vid="izwBvdQgVc8" onClick="{{ playVideo }}" style="position:relative;cursor:pointer;aspect-ratio:4/3;background:#000">
          <img src="https://img.youtube.com/vi/izwBvdQgVc8/hqdefault.jpg" alt="Dyan - USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
          <div style="position:absolute;inset:0;display:grid;place-items:center;pointer-events:none">
            <div style="width:64px;height:64px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="var(--uw-blue-600)" style="margin-left:3px"><path d="M8 5v14l11-7z"></path></svg>
            </div>
          </div>
        </div>
        <div style="padding:18px 20px 20px">
          <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-blue-500);margin-bottom:8px">Prestigious match · Albert Einstein</div>
          <div style="font-family:var(--font-display);font-weight:600;font-size:19px;color:var(--uw-ink-900)">Dyan <span style="display:inline-block;font-family:var(--font-mono);font-size:10px;letter-spacing:.08em;color:var(--uw-blue-600);background:var(--uw-blue-50);border:1px solid var(--uw-blue-100);border-radius:var(--r-xs);padding:2px 6px;vertical-align:middle;margin-left:6px">IM</span></div>
        </div>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;display:flex;flex-direction:column">
        <div data-vid="2pGb5xiKzdw" onClick="{{ playVideo }}" style="position:relative;cursor:pointer;aspect-ratio:4/3;background:#000">
          <img src="https://img.youtube.com/vi/2pGb5xiKzdw/hqdefault.jpg" alt="Dr. Srusti - USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
          <div style="position:absolute;inset:0;display:grid;place-items:center;pointer-events:none">
            <div style="width:64px;height:64px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="var(--uw-blue-600)" style="margin-left:3px"><path d="M8 5v14l11-7z"></path></svg>
            </div>
          </div>
        </div>
        <div style="padding:18px 20px 20px">
          <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-blue-500);margin-bottom:8px">STELLAR MATCH · SAINT VINCENT</div>
          <div style="font-family:var(--font-display);font-weight:600;font-size:19px;color:var(--uw-ink-900)">Dr. Srusti <span style="display:inline-block;font-family:var(--font-mono);font-size:10px;letter-spacing:.08em;color:var(--uw-blue-600);background:var(--uw-blue-50);border:1px solid var(--uw-blue-100);border-radius:var(--r-xs);padding:2px 6px;vertical-align:middle;margin-left:6px">IM</span></div>
        </div>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;display:flex;flex-direction:column">
        <div data-vid="ZynxmljOZDA" onClick="{{ playVideo }}" style="position:relative;cursor:pointer;aspect-ratio:4/3;background:#000">
          <img src="https://img.youtube.com/vi/ZynxmljOZDA/hqdefault.jpg" alt="Hamit - USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
          <div style="position:absolute;inset:0;display:grid;place-items:center;pointer-events:none">
            <div style="width:64px;height:64px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="var(--uw-blue-600)" style="margin-left:3px"><path d="M8 5v14l11-7z"></path></svg>
            </div>
          </div>
        </div>
        <div style="padding:18px 20px 20px">
          <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-blue-500);margin-bottom:8px">Prestigious match&nbsp;<span style="letter-spacing: 1.05px;">· UPMC</span></div>
          <div style="font-family:var(--font-display);font-weight:600;font-size:19px;color:var(--uw-ink-900)">Hamit<span style="display:inline-block;font-family:var(--font-mono);font-size:10px;letter-spacing:.08em;color:var(--uw-blue-600);background:var(--uw-blue-50);border:1px solid var(--uw-blue-100);border-radius:var(--r-xs);padding:2px 6px;vertical-align:middle;margin-left:6px">IM</span></div>
        </div>
      </div>
    </div>
    <div style="display:flex;justify-content:center;margin-top:38px">
      <a href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer" style="text-decoration:none"><x-import component-from-global-scope="USMLEWiseDesignSystem_d852a5.Button" variant="primary" size="lg" hint-size="300px,52px">Schedule my free Match consultation →</x-import></a>
    </div>
  </section>

  <!-- ============ COMPARE ============ -->
  <section style="padding:clamp(56px,8vw,96px) 20px;background:var(--uw-surface)">
    <div style="max-width:760px;margin:0 auto 40px;text-align:center">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.16em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:16px"><div>Why Students Choose Us</div></div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,4.6vw,44px);line-height:1.1;letter-spacing:-0.02em;margin:0;color:var(--uw-ink-900)">USMLE Wise vs other services</h2>
    </div>
    <div class="mp-cmp">
        <div class="mp-cmp-head">
          <div class="mp-cmp-hcell feat">Features</div>
          <div class="mp-cmp-hcell wise">USMLE Wise</div>
          <div class="mp-cmp-hcell">Other services</div>
        </div>
        <div class="mp-cmp-row">
          <div class="mp-cmp-feat">Risk to start</div>
          <div class="mp-cmp-wise"><span class="mp-cmp-minilabel">USMLE Wise</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>A free first session, with no deposit to begin</span></span></div>
          <div class="mp-cmp-other"><span class="mp-cmp-minilabel">Other services</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-ink-400)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M18 6 6 18M6 6l12 12"></path></svg><span>Pay upfront before you speak to anyone</span></span></div>
        </div>
        <div class="mp-cmp-row">
          <div class="mp-cmp-feat">How we work</div>
          <div class="mp-cmp-wise"><span class="mp-cmp-minilabel">USMLE Wise</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>Live, done-with-you sessions where we build your application together</span></span></div>
          <div class="mp-cmp-other"><span class="mp-cmp-minilabel">Other services</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-ink-400)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M18 6 6 18M6 6l12 12"></path></svg><span>You send documents and wait for edits</span></span></div>
        </div>
        <div class="mp-cmp-row">
          <div class="mp-cmp-feat">Scope</div>
          <div class="mp-cmp-wise"><span class="mp-cmp-minilabel">USMLE Wise</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>Every piece engineered into one story: CV, PS, letters, signals, interviews</span></span></div>
          <div class="mp-cmp-other"><span class="mp-cmp-minilabel">Other services</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-ink-400)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M18 6 6 18M6 6l12 12"></path></svg><span>Edits in fragments you stitch together</span></span></div>
        </div>
        <div class="mp-cmp-row">
          <div class="mp-cmp-feat">Built by</div>
          <div class="mp-cmp-wise"><span class="mp-cmp-minilabel">USMLE Wise</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>The world's most-followed USMLE and Match expert</span></span></div>
          <div class="mp-cmp-other"><span class="mp-cmp-minilabel">Other services</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-ink-400)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M18 6 6 18M6 6l12 12"></path></svg><span>Often limited hands-on Match experience</span></span></div>
        </div>
        <div class="mp-cmp-row">
          <div class="mp-cmp-feat">Advisors</div>
          <div class="mp-cmp-wise"><span class="mp-cmp-minilabel">USMLE Wise</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>220+ physician advisors who are IMGs, US MDs, and DOs</span></span></div>
          <div class="mp-cmp-other"><span class="mp-cmp-minilabel">Other services</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-ink-400)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M18 6 6 18M6 6l12 12"></path></svg><span>Mostly US advisors, often not physicians</span></span></div>
        </div>
        <div class="mp-cmp-row">
          <div class="mp-cmp-feat">Support</div>
          <div class="mp-cmp-wise"><span class="mp-cmp-minilabel">USMLE Wise</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>Direct WhatsApp support from your advisor</span></span></div>
          <div class="mp-cmp-other"><span class="mp-cmp-minilabel">Other services</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-ink-400)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M18 6 6 18M6 6l12 12"></path></svg><span>An AI chatbot or a ticket queue</span></span></div>
        </div>
        <div class="mp-cmp-row">
          <div class="mp-cmp-feat">Flexibility</div>
          <div class="mp-cmp-wise"><span class="mp-cmp-minilabel">USMLE Wise</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>Change advisors any time, schedule across time zones, move hours as needed</span></span></div>
          <div class="mp-cmp-other"><span class="mp-cmp-minilabel">Other services</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-ink-400)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M18 6 6 18M6 6l12 12"></path></svg><span>Fixed advisor, rigid packages, set hours</span></span></div>
        </div>
        <div class="mp-cmp-row">
          <div class="mp-cmp-feat">Courses</div>
          <div class="mp-cmp-wise"><span class="mp-cmp-minilabel">USMLE Wise</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>Access to 9+ courses, from personal statement and ERAS to research</span></span></div>
          <div class="mp-cmp-other"><span class="mp-cmp-minilabel">Other services</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-ink-400)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M18 6 6 18M6 6l12 12"></path></svg><span>No extras</span></span></div>
        </div>
        <div class="mp-cmp-row">
          <div class="mp-cmp-feat">Match guarantee</div>
          <div class="mp-cmp-wise"><span class="mp-cmp-minilabel">USMLE Wise</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>Backed by our match edit guarantee on Maximizer</span></span></div>
          <div class="mp-cmp-other"><span class="mp-cmp-minilabel">Other services</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-ink-400)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M18 6 6 18M6 6l12 12"></path></svg><span>Often none</span></span></div>
        </div>
        <div class="mp-cmp-row">
          <div class="mp-cmp-feat">Money back</div>
          <div class="mp-cmp-wise"><span class="mp-cmp-minilabel">USMLE Wise</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>100% money-back guarantee after your first session</span></span></div>
          <div class="mp-cmp-other"><span class="mp-cmp-minilabel">Other services</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-ink-400)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M18 6 6 18M6 6l12 12"></path></svg><span>No guarantee</span></span></div>
        </div>
        <div class="mp-cmp-row">
          <div class="mp-cmp-feat">Reviews</div>
          <div class="mp-cmp-wise"><span class="mp-cmp-minilabel">USMLE Wise</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-success-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M20 6 9 17l-5-5"></path></svg><span>1,700+ reviews</span></span></div>
          <div class="mp-cmp-other"><span class="mp-cmp-minilabel">Other services</span><span class="mp-cmp-cell"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--uw-ink-400)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px"><path d="M18 6 6 18M6 6l12 12"></path></svg><span>A handful of unverified reviews</span></span></div>
        </div>
      </div>
  </section>

  <!-- ============ MEET THE TEAM ============ -->
  <section style="padding:clamp(56px,8vw,96px) 20px;background:var(--uw-bg);border-top:1px solid var(--uw-border)">
    <div style="max-width:760px;margin:0 auto 44px;text-align:center">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.16em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:16px">Meet the team</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,4.6vw,44px);line-height:1.1;letter-spacing:-0.02em;margin:0 0 18px;color:var(--uw-ink-900)">You work with doctors who've done it.</h2>
      <p style="font-size:clamp(15px,2vw,17px);line-height:1.55;color:var(--uw-ink-700);margin:0">Led by the world's most-followed USMLE and Match expert, alongside a program director who has matched hundreds of residents and a research faculty background from Duke and UPMC.</p>
    </div>
    <div style="max-width:1080px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:22px">
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:28px">
        <div style="width:100%;height:280px;margin-bottom:22px;border-radius:var(--r-md);overflow:hidden;background:var(--uw-bg)"><x-import component-from-global-scope="image-slot" from="./image-slot.js" id="team-manik" shape="rounded" radius="8" placeholder="Drop or click to upload Dr. Madaan's photo" hint-size="100%,100%"><img src="./profile-pic-mrebpmf0.jpeg" alt="profile-pic" style="max-width: 100%; height: auto; display: block; object-fit: cover"></x-import></div>
        <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:10px">Contributor</div>
        <h3 style="font-family:var(--font-display);font-weight:400;font-size:23px;line-height:1.15;letter-spacing:-0.01em;margin:0 0 12px;color:var(--uw-ink-900)"><b>Dr. Manik Madaan</b></h3>
        <p style="font-size:14.5px;line-height:1.55;color:var(--uw-ink-700);margin:0">The world's most-followed USMLE and Match expert, and a doctor in the U.S. <br>Served 4 Years In Residency Selection Committee</p>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:28px">
        <div style="width:100%;height:280px;margin-bottom:22px;border-radius:var(--r-md);overflow:hidden;background:var(--uw-bg)"><x-import component-from-global-scope="image-slot" from="./image-slot.js" id="team-kothari" shape="rounded" radius="8" placeholder="Drop or click to upload Dr. Kothari's photo" hint-size="100%,100%"></x-import></div>
        <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:10px">Overseeing committee head</div>
        <h3 style="font-family:var(--font-display);font-weight:400;font-size:23px;line-height:1.15;letter-spacing:-0.01em;margin:0 0 12px;color:var(--uw-ink-900)"><b>Dr. Nayan K. Kothari</b></h3>
        <p style="font-size:14.5px;line-height:1.55;color:var(--uw-ink-700);margin:0">Program Director, Internal Medicine, Rutgers-RWJ Medical School. Chair, Dept. of Medicine, Saint Peter's (1996-2025). Reviewed thousands of CVs and matched hundreds of residents.</p>
      </div>
      <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:28px">
        <div style="width:100%;height:280px;margin-bottom:22px;border-radius:var(--r-md);overflow:hidden;background:var(--uw-bg)"><x-import component-from-global-scope="image-slot" from="./image-slot.js" id="team-kaushik" shape="rounded" radius="8" placeholder="Drop or click to upload Dr. Sreeram's photo" hint-size="100%,100%"></x-import></div>
        <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:10px">Founder</div>
        <h3 style="font-family:var(--font-display);font-weight:400;font-size:23px;line-height:1.15;letter-spacing:-0.01em;margin:0 0 12px;color:var(--uw-ink-900)"><b>Dr. Kaushik Sreeram</b></h3>
        <p style="font-size:14.5px;line-height:1.55;color:var(--uw-ink-700);margin:0">Former Infectious Disease and opioid researcher at Duke University and UPMC.</p>
      </div>
    </div>
  </section>

  <!-- ============ FAQ ============ -->
  <section style="padding:clamp(56px,8vw,96px) 20px;background:var(--uw-bg);border-top:1px solid var(--uw-border)">
    <div style="max-width:720px;margin:0 auto 40px;text-align:center">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.16em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:16px">FAQ</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,4.6vw,44px);line-height:1.1;letter-spacing:-0.02em;margin:0;color:var(--uw-ink-900)">Questions, answered honestly.</h2>
    </div>
    <div style="max-width:760px;margin:0 auto;display:flex;flex-direction:column;gap:12px">
      <details style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:0 20px">
        <summary style="display:flex;justify-content:space-between;align-items:center;gap:16px;padding:18px 0;font-size:16px;font-weight:600;color:var(--uw-ink-900)"><span>Which package is right for me?</span><span class="mp-faq-icon" style="flex-shrink:0;color:var(--uw-blue-500);transition:transform .2s var(--ease-out);font-size:22px;line-height:1;font-weight:400">+</span></summary>
        <div style="padding:0 0 20px;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Essentials suits a strong applicant who mostly needs sharp documents. Pro fits most people who want full strategy and a weekly mentor. Maximizer is for applicants with red flags or those who want everything done end to end. Not sure? Book a free call and we'll tell you honestly.</div>
      </details>
      <details style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:0 20px">
        <summary style="display:flex;justify-content:space-between;align-items:center;gap:16px;padding:18px 0;font-size:16px;font-weight:600;color:var(--uw-ink-900)"><span>What does the money-back guarantee cover?</span><span class="mp-faq-icon" style="flex-shrink:0;color:var(--uw-blue-500);transition:transform .2s var(--ease-out);font-size:22px;line-height:1;font-weight:400">+</span></summary>
        <div style="padding:0 0 20px;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Start with your first working session. If you don't feel it's right for you, tell us and we'll refund you in full.</div>
      </details>
      <details style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:0 20px">
        <summary style="display:flex;justify-content:space-between;align-items:center;gap:16px;padding:18px 0;font-size:16px;font-weight:600;color:var(--uw-ink-900)"><span>What is the match edit guarantee?</span><span class="mp-faq-icon" style="flex-shrink:0;color:var(--uw-blue-500);transition:transform .2s var(--ease-out);font-size:22px;line-height:1;font-weight:400">+</span></summary>
        <div style="padding:0 0 20px;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">On Match Maximizer, if you don't match this cycle we keep working with you at no extra cost, for as many cycles as it takes, until you match. The final Match decision sits with the programs, so we commit to the work and stay with you the whole way.</div>
      </details>
      <details style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:0 20px">
        <summary style="display:flex;justify-content:space-between;align-items:center;gap:16px;padding:18px 0;font-size:16px;font-weight:600;color:var(--uw-ink-900)"><span>Who works on my application?</span><span class="mp-faq-icon" style="flex-shrink:0;color:var(--uw-blue-500);transition:transform .2s var(--ease-out);font-size:22px;line-height:1;font-weight:400">+</span></summary>
        <div style="padding:0 0 20px;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Physicians who matched in the U.S., sat on residency selection committees, and edit to the same criteria programs score you on. Every editor is a doctor, and every edit is done by a human.</div>
      </details>
      <details style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:0 20px">
        <summary style="display:flex;justify-content:space-between;align-items:center;gap:16px;padding:18px 0;font-size:16px;font-weight:600;color:var(--uw-ink-900)"><span>How do I get started?</span><span class="mp-faq-icon" style="flex-shrink:0;color:var(--uw-blue-500);transition:transform .2s var(--ease-out);font-size:22px;line-height:1;font-weight:400">+</span></summary>
        <div style="padding:0 0 20px;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Start with a free Match consultation. We review your profile, answer your questions, and recommend the right package. No deposit to book the call.</div>
      </details>
      <details style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:0 20px">
        <summary style="display:flex;justify-content:space-between;align-items:center;gap:16px;padding:18px 0;font-size:16px;font-weight:600;color:var(--uw-ink-900)"><span>Do you help with program signaling and geographic preferences?</span><span class="mp-faq-icon" style="flex-shrink:0;color:var(--uw-blue-500);transition:transform .2s var(--ease-out);font-size:22px;line-height:1;font-weight:400">+</span></summary>
        <div style="padding:0 0 20px;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Yes. Pro and Maximizer include personalized signaling, and Maximizer includes done-for-you signals.</div>
      </details>
      <details style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:0 20px">
        <summary style="display:flex;justify-content:space-between;align-items:center;gap:16px;padding:18px 0;font-size:16px;font-weight:600;color:var(--uw-ink-900)"><span>Can I pay in installments?</span><span class="mp-faq-icon" style="flex-shrink:0;color:var(--uw-blue-500);transition:transform .2s var(--ease-out);font-size:22px;line-height:1;font-weight:400">+</span></summary>
        <div style="padding:0 0 20px;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Yes. Book a free call and we'll set up a plan.</div>
      </details>
      <details style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:0 20px">
        <summary style="display:flex;justify-content:space-between;align-items:center;gap:16px;padding:18px 0;font-size:16px;font-weight:600;color:var(--uw-ink-900)"><span>Does this work for IMGs, US IMGs, MDs, and DOs?</span><span class="mp-faq-icon" style="flex-shrink:0;color:var(--uw-blue-500);transition:transform .2s var(--ease-out);font-size:22px;line-height:1;font-weight:400">+</span></summary>
        <div style="padding:0 0 20px;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Yes. We work with all four, and we tailor the strategy to your profile and your red flags.</div>
      </details>
    </div>
  </section>

  <!-- ============ FINAL CTA ============ -->
  <section id="consult" style="padding:clamp(56px,8vw,96px) 20px;background:var(--uw-blue-500);color:#fff;position:relative;overflow:hidden">
    <div style="position:absolute;inset:0;background-image:radial-gradient(rgba(255,255,255,.1) 1px,transparent 1px);background-size:18px 18px;pointer-events:none"></div>
    <div style="max-width:720px;margin:0 auto;text-align:center;position:relative;z-index:1">
      <h2 style="font-family: var(--font-display); font-weight: 400; font-size: clamp(30px,5vw,48px); line-height: 1.08; letter-spacing: -0.02em; margin: 0 0 18px; color: var(--surface-card)">Make this your final match.</h2>
      <p style="font-size:clamp(15px,2.4vw,18px);line-height:1.6;color:rgba(255,255,255,.82);max-width:52ch;margin:0 auto 30px">Your Match comes down to how well your hard work is presented. Let's engineer every piece of it.</p>
      <div style="display:flex;justify-content:center">
        <a href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer" style="text-decoration:none"><x-import component-from-global-scope="USMLEWiseDesignSystem_d852a5.Button" variant="primary" size="xl" hint-size="320px,56px">Schedule my free Match consultation →</x-import></a>
      </div>
    </div>
  </section>

  <!-- ============ CONTACT ============ -->
  <section id="contact" style="padding:clamp(56px,8vw,96px) 20px;background:var(--uw-surface)">
    <div style="max-width:640px;margin:0 auto;text-align:center">
      <div style="font-family:var(--font-mono);font-size:12px;letter-spacing:.16em;text-transform:uppercase;color:var(--uw-red-500);margin-bottom:16px">Still have questions?</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(28px,4.6vw,44px);line-height:1.1;letter-spacing:-0.02em;margin:0 0 18px;color:var(--uw-ink-900)">Talk to our team.</h2>
      <p style="font-size:clamp(15px,2.4vw,18px);line-height:1.6;color:var(--uw-ink-600);max-width:50ch;margin:0 auto 26px">Honest guidance on your application and your Match strategy. We'll give you a straight answer about your best next step.</p>
      <div style="display:flex;justify-content:center;margin-bottom:14px">
        <a href="https://web.whatsapp.com/send?phone=19192015700&text=Hey%2C%20I%20have%20questions%20regarding%20Match%20Package%20%2F%20USMLE%20Wise" target="_blank" rel="noopener" style="text-decoration:none"><x-import component-from-global-scope="USMLEWiseDesignSystem_d852a5.Button" variant="secondary" size="lg" hint-size="220px,52px">Chat on WhatsApp</x-import></a>
      </div>
      <div style="font-size:13.5px;color:var(--uw-ink-500);margin-bottom:34px">Prefer email? Send us a message below.</div>

      <form onsubmit="{{ onSubmit }}" style="text-align:left;display:flex;flex-direction:column;gap:14px;background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:clamp(22px,4vw,32px)">
        <label style="display:flex;flex-direction:column;gap:6px;font-size:13px;color:var(--uw-ink-700)">Full name
          <input type="text" name="name" required="" placeholder="Your full name" style="border:1px solid var(--uw-border-strong);border-radius:var(--r-md);padding:11px 13px;font-size:15px;color:var(--uw-ink-900);background:var(--uw-surface);outline:none">
        </label>
        <label style="display:flex;flex-direction:column;gap:6px;font-size:13px;color:var(--uw-ink-700)">Email
          <input type="email" name="email" required="" placeholder="you@email.com" style="border:1px solid var(--uw-border-strong);border-radius:var(--r-md);padding:11px 13px;font-size:15px;color:var(--uw-ink-900);background:var(--uw-surface);outline:none">
        </label>
        <label style="display:flex;flex-direction:column;gap:6px;font-size:13px;color:var(--uw-ink-700)">Subject
          <input type="text" name="subject" placeholder="What's this about?" style="border:1px solid var(--uw-border-strong);border-radius:var(--r-md);padding:11px 13px;font-size:15px;color:var(--uw-ink-900);background:var(--uw-surface);outline:none">
        </label>
        <label style="display:flex;flex-direction:column;gap:6px;font-size:13px;color:var(--uw-ink-700)">Message
          <textarea name="message" rows="4" placeholder="Tell us about your profile and where you are in the process" style="border:1px solid var(--uw-border-strong);border-radius:var(--r-md);padding:11px 13px;font-size:15px;color:var(--uw-ink-900);background:var(--uw-surface);outline:none;resize:vertical"></textarea>
        </label>
        <button type="submit" style="margin-top:4px;background:var(--uw-red-500);color:#fff;border:none;border-radius:var(--r-md);padding:13px 20px;font-size:15px;font-weight:600;font-family:var(--font-sans);cursor:pointer">Send message</button>
        <div style="font-size:12.5px;color:var(--uw-success-500);min-height:16px">{{ formMsg }}</div>
      </form>
    </div>
  </section>

</div>
</x-dc>
<script type="text/x-dc" data-dc-script data-props="{
  &quot;$preview&quot;: { &quot;width&quot;: 1200, &quot;height&quot;: 3600 },
  &quot;bookingUrl&quot;: { &quot;editor&quot;: &quot;text&quot;, &quot;default&quot;: &quot;#contact&quot;, &quot;tsType&quot;: &quot;string&quot;, &quot;section&quot;: &quot;Links&quot;, &quot;label&quot;: &quot;Consultation CTA link&quot; },
  &quot;whatsappUrl&quot;: { &quot;editor&quot;: &quot;text&quot;, &quot;default&quot;: &quot;https://wa.me/&quot;, &quot;tsType&quot;: &quot;string&quot;, &quot;section&quot;: &quot;Links&quot;, &quot;label&quot;: &quot;WhatsApp link&quot; },
  &quot;showStarRating&quot;: { &quot;editor&quot;: &quot;boolean&quot;, &quot;default&quot;: true, &quot;tsType&quot;: &quot;boolean&quot;, &quot;section&quot;: &quot;Hero&quot;, &quot;label&quot;: &quot;Show star rating line&quot; }
}">
class Component extends DCLogic {
  state = { formMsg: "" };

  renderVals() {
    return {
      bookingUrl: this.props.bookingUrl ?? "#contact",
      whatsappUrl: this.props.whatsappUrl ?? "https://wa.me/",
      showStars: this.props.showStarRating ?? true,
      formMsg: this.state.formMsg,
      playVideo: (e) => {
        const w = e.currentTarget.closest("[data-vid]");
        if (!w) return;
        const id = w.getAttribute("data-vid");
        w.innerHTML = '<iframe src="https://www.youtube.com/embed/' + id + '?autoplay=1&rel=0" title="USMLE Wise match story" referrerpolicy="strict-origin-when-cross-origin" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width:100%;height:100%;border:0;display:block"></iframe>';
      },
      onSubmit: (e) => {
        e.preventDefault();
        this.setState({ formMsg: "Thanks - we'll be in touch within one business day." });
        try { e.target.reset(); } catch (_) {}
      },
    };
  }

  componentDidMount() {
    this.initCountUp();
  }

  initCountUp() {
    const els = Array.from(document.querySelectorAll("[data-count]"));
    if (!els.length) return;
    const fmt = (n) => Math.round(n).toLocaleString("en-US");
    const run = (el) => {
      const to = parseFloat(el.dataset.count);
      const suf = el.dataset.suffix || "";
      const dur = 1700, start = performance.now();
      const ease = (t) => 1 - Math.pow(1 - t, 3);
      const tick = (now) => {
        const p = Math.min(1, (now - start) / dur);
        el.textContent = fmt(to * ease(p)) + suf;
        if (p < 1) requestAnimationFrame(tick);
        else el.textContent = fmt(to) + suf;
      };
      requestAnimationFrame(tick);
    };
    els.forEach((el) => { el.textContent = "0" + (el.dataset.suffix || ""); });
    if (!("IntersectionObserver" in window)) { els.forEach(run); return; }
    const io = new IntersectionObserver((ents) => {
      ents.forEach((e) => { if (e.isIntersecting) { run(e.target); io.unobserve(e.target); } });
    }, { threshold: 0.5 });
    els.forEach((el) => io.observe(el));
  }
}
</script>

<!-- ============== SITE FOOTER ============== -->
<footer class="msp-foot">
  <div class="msp-wrap">
    <div class="msp-foot__top">
      <div class="msp-foot__brand-col">
        <a class="msp-brand" href="/" aria-label="USMLE Wise home">
          <img src="/assets/usmle-design-system/assets/Logo-Horizontal-Dark.svg" alt="USMLE Wise" height="36" />
        </a>
        <p>Guiding international medical graduates from USMLE to Match Day.</p>
      </div>
      <nav class="msp-foot__nav" aria-label="Footer navigation">
        <div class="msp-foot__nav-group">
          <span class="msp-foot__nav-label">Coaching</span>
          <a href="/coaching">Coaching Overview</a>
          <a href="/step-1-high-yield-crash-course">Step 1 High Yield Crash Course</a>
          <a href="/coaching-step1-mastery">Step 1 Mastery</a>
          <a href="/coaching-step23-mastery">NBME Style Coaching (Step 1 and Step 2)</a>
          <a href="/coaching-tutoring">1:1 Tutoring</a>
        </div>
        <div class="msp-foot__nav-group">
          <span class="msp-foot__nav-label">Research</span>
          <a href="/research">Research Overview</a>
          <a href="/research-catalyst">Research Catalyst</a>
          <a href="/research-original">Original Research</a>
          <a href="/research-review">Systematic Review / Meta-Analysis</a>
          <a href="/research-masterclass">Research Masterclass</a>
          <a href="/research-junior-scientist">Junior Scientist Program</a>
        </div>
        <div class="msp-foot__nav-group">
          <span class="msp-foot__nav-label">Match</span>
          <a href="/match">Match Overview</a>
          <a href="/match-lor">LOR Editing</a>
          <a href="/match-eras-cv">ERAS CV</a>
          <a href="/match-ps3x">Personal Statement</a>
          <a href="/match-interview">Interview Preparation</a>
        </div>
        <div class="msp-foot__nav-group">
          <span class="msp-foot__nav-label">Site</span>
          <a href="/">Home</a>
          <a href="/rotations">Rotations</a>
          <a href="/testimonials">Stories</a>
          <a href="/blog">Blog</a>
          <a href="/qa">FAQ</a>
          <a href="/policy">Privacy Policy</a>
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
        <a href="mailto:hello@usmle-wise.com" class="msp-foot__social-link" aria-label="Email us">
          <i data-lucide="mail" width="18" height="18"></i>
        </a>
        <a href="https://web.whatsapp.com/send?phone=19192015700&text=Hey%2C%20I%20have%20questions%20for%20USMLEWise" class="msp-foot__social-link" aria-label="WhatsApp" target="_blank" rel="noopener noreferrer">
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
