<?php
/*
  HAND-EDITED, like match-membership/ and match-members/ before it — see the
  identical warning in those two files before ever re-exporting this from the
  design tool. This copy additionally swaps the page's own inline <head>/nav
  for the site's shared partials/head.php + partials/nav.php + footer.php, so
  it behaves like a normal match-*.php page (title, canonical, global nav/
  footer, GA4). match-membership/ and match-members/ are untouched on purpose
  — their links are already out in the world — this is a new, third URL.

  $uw_pixel_cta_events = false because the Meta Pixel conversion-event block
  near the end of this file already tracks WhatsApp/email as Lead/Contact;
  leaving partials/meta-pixel.php's generic CTA handler on would fire a
  second Lead for the same click. partials/head.php includes meta-pixel.php
  itself, so this only needs to be set once, before that include.
*/
$pageTitle = "Match Mentorship | USMLE Wise";
$pageDescription = "The USMLEWise Match Mentorship: recorded masterclasses on your personal statement, ERAS CV, signaling strategy, interviews, and SOAP, built on the 3X framework and backed by our 100% Match Guarantee.";
$canonical = "https://usmlewise.com/match-mentorship";
$bodyClass = "msp";
// match.css, not the global stylesheet, is what styles the shared .msp-nav/
// .msp-foot markup partials/head.php and partials/footer.php pull in — every
// other match-*.php page loads it for the same reason. The page's own inline
// styles below (the .uw-* classes and CSS custom properties in <helmet>)
// don't collide with anything in it.
$stylesheets = ["/styles/match.css"];
$uw_pixel_cta_events = false;
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<style>
  /* Undo dc-runtime's FULL_PAGE_CSS.
     /match-media/support.js appends `html,body{height:100%;margin:0}
     #dc-root,#dc-root>.sc-host{height:100%}` to <head> at boot, but only when
     the page has no `$preview` prop (see `if (!parsed.preview)` in its boot()).
     match.php dodges it by carrying a data-dc-script block with $preview; this
     page has none, so it gets the rule — and a 100%-height body caps the
     sticky #mspNav's travel to one viewport, after which the header unsticks
     and scrolls away, showing the page through where it used to be.
     Restoring auto height is the runtime's own known-good configuration: its
     built-in @media print block sets height:auto on these exact selectors.
     !important because FULL_PAGE_CSS is appended after this and would
     otherwise win on source order. Both rules are needed — releasing the body
     alone leaves #dc-root at 100% of an auto-height parent, which collapses
     the page to one screen. */
  html, body { height: auto !important; }
  #dc-root, #dc-root > .sc-host { height: auto !important; }
</style>
<script>
// .msp-nav renders transparent until JS adds .is-stuck (see styles/match.css)
// — every other page gets this from js/match.js, but that file also runs its
// own count-up animation on [data-count] elements, which would race the
// count-up script already built into this page further down. match.php hits
// the same conflict and solves it the same way: inline just the nav bit.
document.addEventListener('DOMContentLoaded', function () {
  var nav = document.getElementById('mspNav');
  if (!nav) return;
  var onScroll = function () {
    nav.classList.toggle('is-stuck', window.scrollY > 12);
  };
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });
});
</script>
<script src="/match-media/support.js"></script>
<x-dc>
<helmet>
<link rel="stylesheet" href="/match-media/_ds/usmle-wise-design-system-d852a588-293b-4391-a210-99ffdc2ba2d2/tokens/fonts.css">
<link rel="stylesheet" href="/match-media/_ds/usmle-wise-design-system-d852a588-293b-4391-a210-99ffdc2ba2d2/tokens/colors.css">
<link rel="stylesheet" href="/match-media/_ds/usmle-wise-design-system-d852a588-293b-4391-a210-99ffdc2ba2d2/tokens/typography.css">
<link rel="stylesheet" href="/match-media/_ds/usmle-wise-design-system-d852a588-293b-4391-a210-99ffdc2ba2d2/tokens/spacing.css">
<link rel="stylesheet" href="/match-media/_ds/usmle-wise-design-system-d852a588-293b-4391-a210-99ffdc2ba2d2/tokens/base.css">
<link rel="stylesheet" href="/match-media/_ds/usmle-wise-design-system-d852a588-293b-4391-a210-99ffdc2ba2d2/styles.css">
<script src="/match-media/_ds/usmle-wise-design-system-d852a588-293b-4391-a210-99ffdc2ba2d2/_ds_bundle.js"></script>
<style>
  body { margin: 0; background: var(--uw-bg); }
  a { color: var(--uw-blue-500); text-decoration: none; }
  a:hover { color: var(--uw-blue-600); text-decoration: underline; }
  .uw em { font-style: italic; color: var(--uw-red-500); }
  .uw details > summary { list-style: none; cursor: pointer; }
  .uw details > summary::-webkit-details-marker { display: none; }
  .uw details[open] .uw-plus { transform: rotate(45deg); }
  .uw-scroll { scrollbar-width: thin; scrollbar-color: var(--uw-border) transparent; }
  .uw-scroll::-webkit-scrollbar { height: 8px; width: 8px; }
  .uw-scroll::-webkit-scrollbar-track { background: transparent; }
  .uw-scroll::-webkit-scrollbar-thumb { background: var(--uw-border); border-radius: 999px; }
  @keyframes uw-marquee { from { transform: translateX(0); } to { transform: translateX(-50%); } }
  @media (max-width: 900px) {
    .uw-masonry { column-count: 2 !important; }
    .uw-g3, .uw-g2, .uw-split { grid-template-columns: 1fr !important; }
    .uw-cmp { grid-template-columns: 1fr !important; gap: 6px !important; }
    .uw-cmp-head { display: none !important; }
    .uw-sec { padding-left: 20px !important; padding-right: 20px !important; padding-top: 56px !important; padding-bottom: 56px !important; }
    .uw-nav { padding: 12px 18px !important; }
  }
  @media (max-width: 620px) {
    .uw-masonry { column-count: 1 !important; }
    .uw-hide-sm { display: none !important; }
    .uw-pricelist { grid-template-columns: 1fr !important; }
    .uw-portrait { width: 138px !important; height: 138px !important; margin-top: 28px !important; }
    .uw-scroll-box { max-height: 540px !important; padding: 16px 14px 6px !important; }
    .uw-marquee img { height: 20px !important; }
    .uw-nav-note { display: none !important; }
  }
  .uw-video-modal { position: fixed; inset: 0; z-index: 100; display: flex; align-items: center; justify-content: center; padding: 24px; }
  .uw-video-modal[hidden] { display: none; }
  .uw-video-modal__backdrop { position: absolute; inset: 0; background: rgba(10, 12, 20, .82); }
  .uw-video-modal__dialog { position: relative; width: 100%; max-width: 900px; }
  .uw-video-modal__frame { position: relative; width: 100%; aspect-ratio: 16/9; background: #000; border-radius: var(--r-lg); overflow: hidden; box-shadow: var(--shadow-lg); }
  .uw-video-modal__frame iframe { position: absolute; inset: 0; width: 100%; height: 100%; border: 0; }
  .uw-video-modal__close { position: absolute; top: -44px; right: 0; width: 36px; height: 36px; border-radius: 50%; border: 0; background: rgba(255,255,255,.14); color: #fff; font-size: 24px; line-height: 1; cursor: pointer; display: grid; place-items: center; }
  .uw-video-modal__close:hover { background: rgba(255,255,255,.26); }
  .uw-video-card:focus-visible { outline: 2px solid var(--uw-blue-500); outline-offset: 2px; }
</style>
</helmet>
<div class="uw" style="font-family:var(--font-sans);color:var(--uw-ink-800);background:var(--uw-bg);-webkit-font-smoothing:antialiased">

  <section data-screen-label="Hero" class="uw-sec" style="padding:88px 24px 0;background:radial-gradient(760px 420px at 50% -10%, var(--uw-blue-50), transparent), var(--uw-surface);border-bottom:1px solid var(--uw-border)">
    <div style="max-width:820px;margin:0 auto;text-align:center;display:flex;flex-direction:column;align-items:center">
      <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500);display:inline-flex;align-items:center;gap:8px"><span style="width:6px;height:6px;border-radius:50%;background:var(--uw-red-500)"></span>The USMLEWise Match Mentorship</div>
      <h1 id="heroTitle" style="font-family:var(--font-display);font-weight:400;font-size:clamp(38px,7.4vw,64px);line-height:1.03;letter-spacing:-0.02em;margin:20px 0 0;color:var(--uw-ink-900);text-wrap:pretty">Match on your <em>first attempt</em>.</h1>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:24px;line-height:1.3;letter-spacing:-0.015em;margin:16px 0 0;color:var(--uw-blue-500)">Backed by our 100% Match Guarantee.</h2>
      <p style="font-size:17.5px;line-height:1.55;color:var(--uw-ink-600);max-width:62ch;margin:20px 0 0;text-wrap:pretty">We teach you how to write your personal statement, build your ERAS CV, pick your programs, and answer interview questions, all built on proven frameworks that get you matched.</p>
      <p style="font-size:14px;color:var(--uw-ink-500);margin:10px 0 0">For IMGs, MDs, and DOs.</p>
      <div data-cta="pricing" style="display:flex;justify-content:center;gap:12px;margin-top:30px;cursor:pointer">
        <x-import component-from-global-scope="USMLEWiseDesignSystem_d852a5.Button" variant="primary" size="xl" hint-size="280px,56px">Enroll now →</x-import>
      </div>
      <div style="display:flex;justify-content:center;align-items:center;gap:12px;flex-wrap:wrap;margin-top:26px">
        <div style="display:flex;gap:3px;align-items:center"><svg width="17" height="17" viewBox="0 0 24 24" fill="#D69E2E" aria-hidden="true"><path d="m12 2 2.9 6.26 6.85.74-5.1 4.6 1.42 6.73L12 17l-6.07 3.33 1.42-6.73-5.1-4.6 6.85-.74z"/></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#D69E2E" aria-hidden="true"><path d="m12 2 2.9 6.26 6.85.74-5.1 4.6 1.42 6.73L12 17l-6.07 3.33 1.42-6.73-5.1-4.6 6.85-.74z"/></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#D69E2E" aria-hidden="true"><path d="m12 2 2.9 6.26 6.85.74-5.1 4.6 1.42 6.73L12 17l-6.07 3.33 1.42-6.73-5.1-4.6 6.85-.74z"/></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#D69E2E" aria-hidden="true"><path d="m12 2 2.9 6.26 6.85.74-5.1 4.6 1.42 6.73L12 17l-6.07 3.33 1.42-6.73-5.1-4.6 6.85-.74z"/></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#D69E2E" aria-hidden="true"><path d="m12 2 2.9 6.26 6.85.74-5.1 4.6 1.42 6.73L12 17l-6.07 3.33 1.42-6.73-5.1-4.6 6.85-.74z"/></svg></div>
        <span style="font-size:15px;color:var(--uw-ink-700)">Trusted by <b style="color:var(--uw-ink-900)" data-count="100000" data-suffix="+">100,000+</b> students and doctors</span>
      </div>
      <div style="width:100%;max-width:820px;margin:44px auto 0;border-radius:var(--r-lg);overflow:hidden;border:1px solid var(--uw-border);box-shadow:var(--shadow-lg);background:var(--uw-blue-500)">
        <img src="/match-membership-media/uploads/USMLE-Updates-GV-100.webp" alt="USMLEWise Match Mentorship Program" width="2731" height="1536" fetchpriority="high" decoding="async" style="width:100%;height:auto;display:block">
      </div>
    </div>
    <div style="margin-top:48px;background:var(--uw-bg)">
     <div class="msp-wrap" style="overflow:hidden;position:relative;padding:16px 0">
      <div style="text-align:center;font-family:var(--font-mono);font-size:10px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-ink-400);margin-bottom:16px">Our students have matched into top U.S. programs</div>
      <div style="display:flex;width:max-content;animation:uw-marquee 42s linear infinite">
        <div class="uw-marquee" style="display:flex;align-items:center;gap:34px;padding-right:34px;white-space:nowrap"><img src="/match-membership-media/uploads/logos/harvard.svg" alt="Harvard" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/yale.svg" alt="Yale" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/jhu.png" alt="Johns Hopkins" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/stanford.svg" alt="Stanford" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/columbia.svg" alt="Columbia" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/mayo.svg" alt="Mayo Clinic" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/cornell.svg" alt="Cornell" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/penn.svg" alt="Penn" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/mountsinai.svg" alt="Mount Sinai" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/clevelandclinic.svg" alt="Cleveland Clinic" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/ucla.svg" alt="UCLA" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/duke.svg" alt="Duke" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/brown.svg" alt="Brown" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/emory.jpg" alt="Emory" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"></div>
        <div class="uw-marquee" style="display:flex;align-items:center;gap:34px;padding-right:34px;white-space:nowrap" aria-hidden="true"><img src="/match-membership-media/uploads/logos/harvard.svg" alt="" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/yale.svg" alt="" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/jhu.png" alt="" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/stanford.svg" alt="" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/columbia.svg" alt="" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/mayo.svg" alt="" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/cornell.svg" alt="" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/penn.svg" alt="" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/mountsinai.svg" alt="" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/clevelandclinic.svg" alt="" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/ucla.svg" alt="" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/duke.svg" alt="" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/brown.svg" alt="" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"><img src="/match-membership-media/uploads/logos/emory.jpg" alt="" style="height:26px;width:auto;max-width:130px;object-fit:contain;filter:grayscale(100%);opacity:.55"></div>
      </div>
     </div>
    </div>
  </section>

  <section data-screen-label="The problem" class="uw-sec" style="padding:88px 24px;background:var(--uw-blue-700);border-bottom:1px solid var(--uw-border);position:relative;overflow:hidden">
    <div style="position:absolute;inset:0;background-image:radial-gradient(rgba(255,255,255,.10) 1px,transparent 1px);background-size:18px 18px;pointer-events:none"></div>
    <div style="position:relative;z-index:1;max-width:720px;margin:0 auto;text-align:center;display:flex;flex-direction:column;align-items:center">
      <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:rgba(255,255,255,.72)">The problem</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(30px,4.6vw,42px);line-height:1.1;letter-spacing:-0.02em;margin:18px 0 0;color:#fff">The email no one wants to open.</h2>
      <p style="font-family:var(--font-display);font-style:italic;font-size:22px;line-height:1.4;color:rgba(255,255,255,.82);margin:22px 0 0">“We regret to inform you, you did not match.”</p>
      <div style="display:flex;flex-direction:column;gap:16px;margin-top:26px;font-size:16.5px;line-height:1.6;color:rgba(255,255,255,.78);max-width:64ch">
        <p style="margin:0;text-wrap:pretty">Every year, thousands of brilliant applicants open Match Day to the same line.</p>
        <p style="margin:0;text-wrap:pretty">They were smart enough. They worked hard enough. Their application just never lined up with the criteria programs score them on, and their story didn’t add up to the people deciding.</p>
      </div>
      <img src="/match-membership-media/uploads/Profile-pic.jpeg" alt="Dr. Manik Madaan" width="1920" height="1920" loading="lazy" decoding="async" class="uw-portrait" style="width:190px;height:190px;border-radius:50%;object-fit:cover;display:block;margin:38px 0 6px;border:4px solid rgba(255,255,255,.35);box-shadow:var(--shadow-lg)">
      <div style="display:flex;flex-direction:column;gap:16px;margin-top:22px;font-size:16.5px;line-height:1.6;color:rgba(255,255,255,.78);max-width:64ch">
        <p style="margin:0;text-wrap:pretty">I’m Dr. Manik Madaan, and I’ve watched too many brilliant applicants go unmatched, some for five, six, seven seasons in a row. A capable applicant with a weak application, passed over because a program never got to see who they were. It broke my heart every time.</p>
        <p style="margin:0;text-wrap:pretty">I spent about four years serving on a residency selection committee, and I’ve worked with multiple program directors, so I know what happens on the other side. I saw exactly what they select for, and turned it into a process: the 3X framework, the criteria programs use to choose who to interview and rank.</p>
        <p style="margin:0;text-wrap:pretty">Since then, applicants who went unmatched for years have matched. First-time applicants match into their dream residency, even in highly competitive programs and specialties, on their first attempt.</p>
      </div>
      <p style="font-family:var(--font-display);font-size:26px;line-height:1.35;letter-spacing:-0.015em;color:#fff;margin:32px 0 0;max-width:30ch">You’ve done the hard part. Your application should do you justice.</p>
      <div style="margin-top:26px;display:flex;flex-direction:column;align-items:center;gap:6px">
        <div style="font-size:16px;font-weight:600;color:#fff">Dr. Manik Madaan</div>
        <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.55)">Contributor, USMLE Wise</div>
        <div style="font-size:13px;line-height:1.6;color:rgba(255,255,255,.6);max-width:52ch">World’s most-followed USMLE and Match expert · 700,000+ followers · 12,000+ students mentored to match</div>
      </div>
    </div>
  </section>

  <section data-screen-label="The 3X framework" class="uw-sec" style="padding:80px 24px;background:var(--uw-surface);border-bottom:1px solid var(--uw-border)">
    <div style="max-width:900px;margin:0 auto;text-align:center;display:flex;flex-direction:column;align-items:center">
      <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500)">The 3X framework</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(30px,4.6vw,42px);line-height:1.1;letter-spacing:-0.02em;margin:18px 0 0;color:var(--uw-ink-900);max-width:26ch;text-wrap:pretty">We build your application to the <em>3X framework</em>.</h2>
      <p style="font-size:16.5px;line-height:1.6;color:var(--uw-ink-600);max-width:62ch;margin:20px 0 0;text-wrap:pretty">Programs judge your whole application against a fixed set of criteria. We write every piece to all three lenses, so a committee reads one clear, trustworthy story across every document.</p>
      <div class="uw-g3" style="display:grid;grid-template-columns:repeat(3,1fr);gap:18px;margin-top:40px;width:100%;text-align:left">
        <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;position:relative;overflow:hidden">
          <div style="position:absolute;top:-14px;right:6px;font-family:var(--font-display);font-size:88px;line-height:1;color:var(--uw-blue-50);pointer-events:none">01</div>
          <div style="position:relative;z-index:1;display:flex;align-items:center;gap:12px"><div style="width:40px;height:40px;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-500);display:grid;place-items:center"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 2 7l10 5 10-5-10-5Z"></path><path d="m2 17 10 5 10-5"></path><path d="m2 12 10 5 10-5"></path></svg></div><span style="font-family:var(--font-mono);font-size:11px;letter-spacing:.12em;color:var(--uw-red-500)">01</span></div>
          <h4 style="position:relative;z-index:1;margin:14px 0 8px;font-size:17px;font-weight:600;color:var(--uw-ink-900)">AAMC holistic review</h4>
          <p style="position:relative;z-index:1;margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Your experiences, attributes, competencies, and metrics, tied into one story that backs up the scores already on your file. (EACM)</p>
        </div>
        <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;position:relative;overflow:hidden">
          <div style="position:absolute;top:-14px;right:6px;font-family:var(--font-display);font-size:88px;line-height:1;color:var(--uw-blue-50);pointer-events:none">02</div>
          <div style="position:relative;z-index:1;display:flex;align-items:center;gap:12px"><div style="width:40px;height:40px;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-500);display:grid;place-items:center"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path></svg></div><span style="font-family:var(--font-mono);font-size:11px;letter-spacing:.12em;color:var(--uw-red-500)">02</span></div>
          <h4 style="position:relative;z-index:1;margin:14px 0 8px;font-size:17px;font-weight:600;color:var(--uw-ink-900)">PCM-6 communication</h4>
          <p style="position:relative;z-index:1;margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Six things a strong application carries at once: logical clarity, emotional truth, values, imagination, momentum, and likeability.</p>
        </div>
        <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px;position:relative;overflow:hidden">
          <div style="position:absolute;top:-14px;right:6px;font-family:var(--font-display);font-size:88px;line-height:1;color:var(--uw-blue-50);pointer-events:none">03</div>
          <div style="position:relative;z-index:1;display:flex;align-items:center;gap:12px"><div style="width:40px;height:40px;border-radius:var(--r-md);background:var(--uw-blue-50);color:var(--uw-blue-500);display:grid;place-items:center"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg></div><span style="font-family:var(--font-mono);font-size:11px;letter-spacing:.12em;color:var(--uw-red-500)">03</span></div>
          <h4 style="position:relative;z-index:1;margin:14px 0 8px;font-size:17px;font-weight:600;color:var(--uw-ink-900)">ACGME core competencies</h4>
          <p style="position:relative;z-index:1;margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Your CV, statement, and interview answers quietly show patient care, knowledge, professionalism, and teamwork, the traits every program is required to evaluate.</p>
        </div>
      </div>
      <div data-cta="pricing" style="display:flex;justify-content:center;margin-top:30px;cursor:pointer">
        <x-import component-from-global-scope="USMLEWiseDesignSystem_d852a5.Button" variant="primary" size="lg" hint-size="280px,48px">Get access →</x-import>
      </div>
    </div>
  </section>

  <section data-screen-label="The proof" class="uw-sec" style="padding:80px 24px;background:var(--uw-bg);border-bottom:1px solid var(--uw-border)">
    <div style="max-width:860px;margin:0 auto;text-align:center;display:flex;flex-direction:column;align-items:center">
      <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-blue-500)">The proof</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(30px,4.6vw,42px);line-height:1.1;letter-spacing:-0.02em;margin:18px 0 0;color:var(--uw-ink-900);max-width:24ch;text-wrap:pretty">The numbers behind the system</h2>

      <div class="uw-split" style="display:grid;grid-template-columns:1.05fr .95fr;gap:16px;margin-top:40px;width:100%;text-align:left">
        <div style="background:var(--uw-blue-500);border-radius:var(--r-lg);padding:28px 26px;color:#fff;position:relative;overflow:hidden">
          <div style="position:absolute;inset:0;background-image:radial-gradient(rgba(255,255,255,.12) 1px,transparent 1px);background-size:16px 16px"></div>
          <div style="position:relative;z-index:1">
            <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.7)">Our students match at</div>
            <div style="margin-top:24px">
              <div style="display:flex;align-items:baseline;justify-content:space-between;gap:12px"><span style="font-family:var(--font-display);font-size:54px;line-height:1;letter-spacing:-0.02em" data-count="100" data-suffix="%">100%</span></div>
              <div style="height:8px;border-radius:999px;background:rgba(255,255,255,.2);margin-top:12px;overflow:hidden"><div style="width:100%;height:100%;background:#fff;border-radius:999px"></div></div>
              <div style="font-size:13.5px;line-height:1.55;color:rgba(255,255,255,.82);margin-top:10px">US IMGs, MDs, DOs, and non-US IMGs without significant red flags</div>
            </div>
            <div style="margin-top:26px">
              <div style="display:flex;align-items:baseline;justify-content:space-between;gap:12px"><span style="font-family:var(--font-display);font-size:54px;line-height:1;letter-spacing:-0.02em" data-count="88" data-suffix="%">88%</span></div>
              <div style="height:8px;border-radius:999px;background:rgba(255,255,255,.2);margin-top:12px;overflow:hidden"><div style="width:88%;height:100%;background:#fff;border-radius:999px"></div></div>
              <div style="font-size:13.5px;line-height:1.55;color:rgba(255,255,255,.82);margin-top:10px">Non-US IMGs with significant red flags&nbsp;</div>
            </div>
          </div>
        </div>
        <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:28px 26px">
          <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500)">Compared to national average, 2026 Match</div>
          <div style="margin-top:24px">
            <div style="font-family:var(--font-display);font-size:54px;line-height:1;letter-spacing:-0.02em;color:var(--uw-ink-400)" data-count="53.4" data-decimals="1" data-suffix="%">53.4%</div>
            <div style="height:8px;border-radius:999px;background:var(--uw-ink-75);margin-top:12px;overflow:hidden"><div style="width:53.4%;height:100%;background:var(--uw-ink-300);border-radius:999px"></div></div>
            <div style="font-size:13.5px;line-height:1.55;color:var(--uw-ink-500);margin-top:10px">US IMGs</div>
          </div>
          <div style="margin-top:26px">
            <div style="font-family:var(--font-display);font-size:54px;line-height:1;letter-spacing:-0.02em;color:var(--uw-ink-400)" data-count="46" data-decimals="1" data-suffix="%">46.0%</div>
            <div style="height:8px;border-radius:999px;background:var(--uw-ink-75);margin-top:12px;overflow:hidden"><div style="width:46%;height:100%;background:var(--uw-ink-300);border-radius:999px"></div></div>
            <div style="font-size:13.5px;line-height:1.55;color:var(--uw-ink-500);margin-top:10px">Non-US IMGs</div>
          </div>
        </div>
      </div>

      
      <blockquote style="font-family:var(--font-display);font-size:28px;line-height:1.35;letter-spacing:-0.015em;color:var(--uw-ink-900);margin:32px 0 0;max-width:26ch">“That’s not luck. That’s a system.”</blockquote>
      <div data-cta="pricing" style="display:flex;justify-content:center;margin-top:30px;cursor:pointer">
        <x-import component-from-global-scope="USMLEWiseDesignSystem_d852a5.Button" variant="primary" size="lg" hint-size="280px,48px">Get access →</x-import>
      </div>
    </div>
  </section>

  <section data-screen-label="Proof in their words" class="uw-sec" style="padding:80px 24px;background:var(--uw-surface);border-bottom:1px solid var(--uw-border)">
    <div style="max-width:1040px;margin:0 auto;text-align:center;display:flex;flex-direction:column;align-items:center">
      <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500)">What our students say</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(30px,4.6vw,42px);line-height:1.1;letter-spacing:-0.02em;margin:18px 0 0;color:var(--uw-ink-900)">Applications rebuilt. Seasons ended.</h2>
      <div class="uw-scroll uw-scroll-box" style="margin-top:30px;width:100%;max-height:760px;overflow-y:auto;border:1px solid var(--uw-border);border-radius:var(--r-lg);background:var(--uw-surface);padding:22px 22px 10px;text-align:left">
        <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500);margin-bottom:14px">Match day</div>
        <div class="uw-masonry" style="column-count:3;column-gap:12px">
        <img src="/match-media/uploads/Instagram%20Photo%20Download%20(2).jpg" alt="USMLE Wise applicant who matched" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Instagram%20Photo%20660329525.jpg" alt="USMLE Wise applicant who matched" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/656425718_17890021239448701_3488419753803306264_n.jpg" alt="USMLE Wise applicant who matched" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Instagram%20Photo%20Download%20(1).jpg" alt="USMLE Wise applicant who matched" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Instagram%20Photo%20656292960.jpg" alt="USMLE Wise applicant who matched" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/WhatsApp%20Image%20Apr%204%202026.jpeg" alt="USMLE Wise applicant who matched" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/WhatsApp%20Image%20Apr%204%202026%20(1).jpeg" alt="USMLE Wise applicant who matched" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/WhatsApp%20Image%20May%2016%202026.jpeg" alt="USMLE Wise applicant who matched" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/WhatsApp%20Image%20Apr%2015%202026.jpeg" alt="USMLE Wise applicant who matched" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Instagram%20Photo%20657845911.jpg" alt="USMLE Wise applicant who matched" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        </div>
        <div style="height:1px;background:var(--uw-border);margin:22px 0"></div>
        <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500);margin-bottom:14px">In their words</div>
        <div class="uw-masonry" style="column-count:3;column-gap:12px">
        <img src="/match-media/uploads/Zeel%20Patel.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/1.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/2.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/3.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/4.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/5.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/6.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/7.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/8.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/9.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/10.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/11.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/12.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/13.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Allegheny%20IM.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Anjali.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Ayesha%20Surgery.png" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Ayra.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Bardia.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/EM_Anniesha.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Guy%20Advanced%20Intereviewing.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Guy%20UOH.png" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Hamna.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Joycine%20matched.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Lakshita%20Advanced%20Interviewing.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Logesh.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Mounika.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Nancy.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Naz%20advanced%20interviewing.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Neuro.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Niyati%20Off%20Cycle.png" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Okkes.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Paranshi%20IM.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Pavani.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Praneet.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Psych%20match.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Rasmitha.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Ravindra.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/SOAP%201.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Saint%20Vincnent%20R.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Screenshot_20260703_032742_Instagram~2.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Shiv.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Shreya%20FM%20Match.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/SidNath.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Sinmmer.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Smit.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Sonia%201%20Advanced%20Interviewing.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Sonia%202%20Advanced%20Interviewing.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Soura%20Psych.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Swathi.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/UIC%20Peoria.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Unknown%201.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Unknown%203.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Unkown%202.jpg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/Yog%2014.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        <img src="/match-media/uploads/babitha.jpeg" alt="USMLE Wise student match testimonial" loading="lazy" style="width:100%;height:auto;display:block;margin:0 0 12px;border-radius:var(--r-xs);background:var(--uw-bg);break-inside:avoid">
        </div>
      </div>
    </div>
  </section>

  <section data-screen-label="The system" class="uw-sec" style="padding:80px 24px;background:var(--uw-bg);border-bottom:1px solid var(--uw-border)">
    <div style="max-width:900px;margin:0 auto;text-align:center;display:flex;flex-direction:column;align-items:center">
      <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-blue-500)">The system</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(30px,4.6vw,42px);line-height:1.1;letter-spacing:-0.02em;margin:18px 0 0;color:var(--uw-ink-900);max-width:26ch;text-wrap:pretty">One system. One story. Built on what programs actually score.</h2>
      <p style="font-size:16.5px;line-height:1.6;color:var(--uw-ink-600);max-width:62ch;margin:20px 0 0;text-wrap:pretty">Most applicants build their Match in pieces. One person edits the CV. Someone else touches the personal statement. A third gives interview tips. The story falls apart in the gaps. The USMLEWise Match Mentorship puts every piece in one place and teaches you to build all of it to the 3X framework.</p>

      <div class="uw-g2" style="display:grid;grid-template-columns:repeat(2,1fr);gap:18px;margin-top:40px;width:100%;text-align:left">
        <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px">
          <div style="width:38px;height:38px;background:var(--uw-blue-50);color:var(--uw-blue-500);border-radius:var(--r-md);display:grid;place-items:center;margin-bottom:14px"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 8-6 4 6 4V8Z"></path><rect width="14" height="12" x="2" y="6" rx="2"></rect></svg></div>
          <h4 style="margin:0 0 8px;font-size:17px;font-weight:600;color:var(--uw-ink-900)">Recorded masterclasses, watch anytime</h4>
          <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Every masterclass is recorded, so you go through the 3X framework on your own schedule instead of around a live call. Every recording and all materials are yours from day one. Nothing is locked away.</p>
        </div>
        <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px">
          <div style="width:38px;height:38px;background:var(--uw-blue-50);color:var(--uw-blue-500);border-radius:var(--r-md);display:grid;place-items:center;margin-bottom:14px"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="m16.24 7.76-2.12 6.36-6.36 2.12 2.12-6.36 6.36-2.12z"></path></svg></div>
          <h4 style="margin:0 0 8px;font-size:17px;font-weight:600;color:var(--uw-ink-900)">The Program Navigator</h4>
          <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">A tool that helps you build your program list and plan your signals, so you apply with data instead of a gut-feeling “apply broadly.”</p>
        </div>
        <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px">
          <div style="width:38px;height:38px;background:var(--uw-blue-50);color:var(--uw-blue-500);border-radius:var(--r-md);display:grid;place-items:center;margin-bottom:14px"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"></path></svg></div>
          <h4 style="margin:0 0 8px;font-size:17px;font-weight:600;color:var(--uw-ink-900)">One coherent story</h4>
          <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Your personal statement, CV, interviews, and strategy all built to say the same thing. A committee reads one clear, trustworthy doctor across every document.</p>
        </div>
        <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:26px">
          <div style="width:38px;height:38px;background:var(--uw-blue-50);color:var(--uw-blue-500);border-radius:var(--r-md);display:grid;place-items:center;margin-bottom:14px"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path></svg></div>
          <h4 style="margin:0 0 8px;font-size:17px;font-weight:600;color:var(--uw-ink-900)">Staff and alumni you can reach</h4>
          <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Priority access to the people who’ve helped thousands match. Ask a question, get a real answer in hours.</p>
        </div>
      </div>
      <div data-cta="pricing" style="display:flex;justify-content:center;margin-top:34px;cursor:pointer">
        <x-import component-from-global-scope="USMLEWiseDesignSystem_d852a5.Button" variant="primary" size="lg" hint-size="280px,48px">Get access →</x-import>
      </div>
    </div>
  </section>

  <section data-screen-label="What's inside" class="uw-sec" style="padding:80px 24px;background:var(--uw-surface);border-bottom:1px solid var(--uw-border)">
    <div style="max-width:760px;margin:0 auto;text-align:center;display:flex;flex-direction:column;align-items:center">
      <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-blue-500)">What’s inside</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(30px,4.6vw,42px);line-height:1.1;letter-spacing:-0.02em;margin:18px 0 0;color:var(--uw-ink-900);max-width:24ch;text-wrap:pretty">The masterclasses that teach you the whole Match.</h2>
      <p style="font-size:16.5px;line-height:1.6;color:var(--uw-ink-600);max-width:58ch;margin:20px 0 0;text-wrap:pretty">Each one teaches a piece of the 3X framework, recorded and ready to watch on your own schedule, with all the materials yours to keep.</p>

      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(min(330px,100%),1fr));gap:18px;margin-top:36px;width:100%;text-align:left">
        <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden">
          <div style="position:relative;width:100%;aspect-ratio:16/9;background:var(--uw-blue-50);background-image:radial-gradient(var(--uw-blue-100) 1px,transparent 1px);background-size:14px 14px"><img src="/match-membership-media/uploads/mc-ps.webp" alt="Personal Statement Masterclass" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block"></div>
          <div style="padding:20px">
            <div style="display:flex;justify-content:space-between;align-items:baseline;gap:12px"><h4 style="margin:0;font-size:17px;font-weight:600;color:var(--uw-ink-900)">Personal Statement Masterclass</h4><span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-ink-500)">$249</span></div>
            <p style="margin:10px 0 0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Learn how to draft a personal statement that makes a committee trust you. Built on the 3X framework, so it reads like the doctor you are.</p>
          </div>
        </div>
        <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden">
          <div style="position:relative;width:100%;aspect-ratio:16/9;background:var(--uw-blue-50);background-image:radial-gradient(var(--uw-blue-100) 1px,transparent 1px);background-size:14px 14px"><img src="/match-membership-media/uploads/mc-eras.webp" alt="ERAS Application Masterclass" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block"></div>
          <div style="padding:20px">
            <div style="display:flex;justify-content:space-between;align-items:baseline;gap:12px"><h4 style="margin:0;font-size:17px;font-weight:600;color:var(--uw-ink-900)">ERAS Application Masterclass</h4><span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-ink-500)">$499</span></div>
            <p style="margin:10px 0 0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Learn how to build an ERAS application and CV that shows a committee who you are in the few minutes they spend on your file.</p>
          </div>
        </div>
        <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden">
          <div style="position:relative;width:100%;aspect-ratio:16/9;background:var(--uw-blue-50);background-image:radial-gradient(var(--uw-blue-100) 1px,transparent 1px);background-size:14px 14px"><img src="/match-membership-media/uploads/mc-signal.webp" alt="Signaling & Application Strategy Masterclass" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block"></div>
          <div style="padding:20px">
            <div style="display:flex;justify-content:space-between;align-items:baseline;gap:12px"><h4 style="margin:0;font-size:17px;font-weight:600;color:var(--uw-ink-900)">Signaling &amp; Application Strategy Masterclass</h4><span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-ink-500)">$299</span></div>
            <p style="margin:10px 0 0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Learn how to build your program list and place your signals with data, so you apply where you’re competitive instead of applying broadly and hoping.</p>
          </div>
        </div>
        <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden">
          <div style="position:relative;width:100%;aspect-ratio:16/9;background:var(--uw-blue-50);background-image:radial-gradient(var(--uw-blue-100) 1px,transparent 1px);background-size:14px 14px"><img src="/match-membership-media/uploads/mc-interview.webp" alt="Interview Masterclass" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block"></div>
          <div style="padding:20px">
            <div style="display:flex;justify-content:space-between;align-items:baseline;gap:12px"><h4 style="margin:0;font-size:17px;font-weight:600;color:var(--uw-ink-900)">Interview Masterclass</h4><span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-ink-500)">$399</span></div>
            <p style="margin:10px 0 0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Learn how to win more interviews and turn each invite into a strong rank. Inner game, outer game, and real mock analysis.</p>
          </div>
        </div>
        <div style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden">
          <div style="position:relative;width:100%;aspect-ratio:16/9;background:var(--uw-blue-50);background-image:radial-gradient(var(--uw-blue-100) 1px,transparent 1px);background-size:14px 14px"><img src="/match-membership-media/uploads/mc-soap.webp" alt="SOAP & Scramble Masterclass" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block"></div>
          <div style="padding:20px">
            <div style="display:flex;justify-content:space-between;align-items:baseline;gap:12px"><h4 style="margin:0;font-size:17px;font-weight:600;color:var(--uw-ink-900)">SOAP &amp; Scramble Masterclass</h4><span style="font-family:var(--font-mono);font-size:12px;color:var(--uw-ink-500)">$199</span></div>
            <p style="margin:10px 0 0;font-size:14.5px;line-height:1.6;color:var(--uw-ink-600)">Learn how to work SOAP and the scramble with a clear plan, so a rough Match week doesn’t cost you a spot.</p>
          </div>
        </div>
      </div>

      <div style="font-family:var(--font-mono);font-size:10.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500);margin-top:48px">Plus these bonuses</div>
      <div style="width:100%;margin-top:18px;background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;text-align:left">
        <div style="display:flex;justify-content:space-between;gap:16px;padding:14px 22px;border-bottom:1px solid var(--uw-border);font-family:var(--font-mono);font-size:10.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--uw-ink-500);background:var(--uw-bg)"><span>Bonus</span><span>Value</span></div>
        <div style="display:flex;justify-content:space-between;gap:16px;padding:15px 22px;border-bottom:1px solid var(--uw-border);font-size:15px"><span style="color:var(--uw-ink-800)">Case Report Writing Course</span><span style="color:var(--uw-ink-500);font-variant-numeric:tabular-nums">$149</span></div>
        <div style="display:flex;justify-content:space-between;gap:16px;padding:15px 22px;border-bottom:1px solid var(--uw-border);font-size:15px"><span style="color:var(--uw-ink-800)">Systematic Reviews Course</span><span style="color:var(--uw-ink-500);font-variant-numeric:tabular-nums">$149</span></div>
        <div style="display:flex;justify-content:space-between;gap:16px;padding:15px 22px;border-bottom:1px solid var(--uw-border);font-size:15px"><span style="color:var(--uw-ink-800)">Meta-Analysis Course</span><span style="color:var(--uw-ink-500);font-variant-numeric:tabular-nums">$149</span></div>
        <div style="display:flex;justify-content:space-between;gap:16px;padding:15px 22px;border-bottom:1px solid var(--uw-border);font-size:15px"><span style="color:var(--uw-ink-800)">Original Research Course</span><span style="color:var(--uw-ink-500);font-variant-numeric:tabular-nums">$149</span></div>
        <div style="display:flex;justify-content:space-between;gap:16px;padding:15px 22px;border-bottom:1px solid var(--uw-border);font-size:15px"><span style="color:var(--uw-ink-800)">Program Navigator (program list + signaling tool)</span><span style="color:var(--uw-ink-500);font-variant-numeric:tabular-nums">$99</span></div>
        <div style="display:flex;justify-content:space-between;gap:16px;padding:15px 22px;border-bottom:1px solid var(--uw-border);font-size:15px"><span style="color:var(--uw-ink-800)">Conference Database</span><span style="color:var(--uw-ink-500);font-variant-numeric:tabular-nums">$79</span></div>
        <div style="display:flex;justify-content:space-between;gap:16px;padding:15px 22px;border-bottom:1px solid var(--uw-border);font-size:15px"><span style="color:var(--uw-ink-800)">Recorded masterclass access + all materials</span><span style="color:var(--uw-blue-500);font-weight:600">Included</span></div>
        <div style="display:flex;justify-content:space-between;gap:16px;padding:15px 22px;border-bottom:1px solid var(--uw-border);font-size:15px"><span style="color:var(--uw-ink-800)">Private WhatsApp community (staff + alumni)</span><span style="color:var(--uw-blue-500);font-weight:600">Included</span></div>
        <div style="display:flex;justify-content:space-between;gap:16px;align-items:center;padding:20px 22px;background:var(--uw-blue-50)"><span style="font-weight:600;color:var(--uw-ink-900);font-size:15.5px">Total value</span><span style="font-family:var(--font-display);font-size:30px;letter-spacing:-0.02em;color:var(--uw-blue-500)">$2,419</span></div>
      </div>
      
      
    </div>
  </section>

  <section id="pricing" data-screen-label="Pricing" class="uw-sec" style="scroll-margin-top:80px;padding:80px 24px;background:var(--uw-bg);border-bottom:1px solid var(--uw-border)">
    <div style="max-width:640px;margin:0 auto;text-align:center;display:flex;flex-direction:column;align-items:center">
      <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-blue-500)">Early-bird price</div>
      <div style="width:100%;margin-top:24px;background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-xl);box-shadow:var(--shadow-lg);overflow:hidden">
        <div style="background:var(--uw-blue-500);color:#fff;padding:18px 24px;position:relative;overflow:hidden">
          <div style="position:absolute;inset:0;background-image:radial-gradient(rgba(255,255,255,.14) 1px,transparent 1px);background-size:16px 16px"></div>
          <div style="position:relative;z-index:1;display:flex;justify-content:center;align-items:center;gap:12px;flex-wrap:wrap">
            <span style="font-family:var(--font-display);font-size:19px;letter-spacing:-0.015em">USMLEWise Match Mentorship</span>
            <span style="font-family:var(--font-mono);font-size:10px;letter-spacing:.12em;text-transform:uppercase;background:var(--uw-red-500);color:#fff;padding:4px 10px;border-radius:999px">Early bird</span>
          </div>
        </div>
        <div style="padding:40px 36px;display:flex;flex-direction:column;align-items:center">
        <div style="font-size:20px;color:var(--uw-ink-400);text-decoration:line-through">$2,419</div>
        <div style="font-family:var(--font-display);font-size:clamp(62px,11vw,88px);line-height:1;letter-spacing:-0.03em;color:var(--uw-ink-900);margin-top:6px">$349</div>
        <p style="font-size:16.5px;line-height:1.6;color:var(--uw-ink-600);max-width:44ch;margin:22px 0 0;text-wrap:pretty">Full access to every masterclass, recording, and material. Start today, prepare on your schedule.</p>
        
        <div data-cta="checkout" style="display:flex;justify-content:center;margin-top:28px;cursor:pointer">
          <x-import component-from-global-scope="USMLEWiseDesignSystem_d852a5.Button" variant="primary" size="xl" hint-size="280px,56px">Get started →</x-import>
        </div>
        <p style="font-family:var(--font-mono);font-size:11px;letter-spacing:.08em;text-transform:uppercase;color:var(--uw-red-500);margin:20px 0 0">Early-bird price. It goes back to $2,419.</p>
        <div class="uw-pricelist" style="display:grid;grid-template-columns:1fr 1fr;gap:10px 20px;margin-top:28px;padding-top:26px;border-top:1px solid var(--uw-border);width:100%;text-align:left;font-size:14px;color:var(--uw-ink-700)">
          <div style="display:flex;gap:9px;align-items:flex-start"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-blue-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex:0 0 auto;margin-top:2px"><path d="m5 12 5 5L20 7"></path></svg><span>Five recorded masterclasses</span></div>
          <div style="display:flex;gap:9px;align-items:flex-start"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-blue-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex:0 0 auto;margin-top:2px"><path d="m5 12 5 5L20 7"></path></svg><span>Every recording and all materials</span></div>
          <div style="display:flex;gap:9px;align-items:flex-start"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-blue-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex:0 0 auto;margin-top:2px"><path d="m5 12 5 5L20 7"></path></svg><span>Four research courses</span></div>
          <div style="display:flex;gap:9px;align-items:flex-start"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-blue-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex:0 0 auto;margin-top:2px"><path d="m5 12 5 5L20 7"></path></svg><span>Program Navigator + Conference Database</span></div>
          <div style="display:flex;gap:9px;align-items:flex-start"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-blue-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex:0 0 auto;margin-top:2px"><path d="m5 12 5 5L20 7"></path></svg><span>Private WhatsApp community</span></div>
          <div style="display:flex;gap:9px;align-items:flex-start"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--uw-blue-500)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex:0 0 auto;margin-top:2px"><path d="m5 12 5 5L20 7"></path></svg><span>100% Match Guarantee</span></div>
        </div>
        </div>
      </div>
    </div>
  </section>

  <section data-screen-label="The guarantee" class="uw-sec" style="padding:80px 24px;background:var(--uw-surface);border-bottom:1px solid var(--uw-border)">
    <div style="max-width:760px;margin:0 auto;text-align:center;display:flex;flex-direction:column;align-items:center">
      <div style="width:88px;height:88px;border-radius:50%;background:var(--uw-blue-500);display:grid;place-items:center;color:#fff;position:relative;overflow:hidden;margin-bottom:24px;box-shadow:var(--shadow-lg)">
        <div style="position:absolute;inset:0;background-image:radial-gradient(rgba(255,255,255,.16) 1px,transparent 1px);background-size:12px 12px"></div>
        <div style="position:absolute;inset:7px;border:1px solid rgba(255,255,255,.35);border-radius:50%"></div>
        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="position:relative;z-index:1"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
      </div>
      <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500)">The guarantee</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(30px,4.6vw,42px);line-height:1.1;letter-spacing:-0.02em;margin:18px 0 0;color:var(--uw-ink-900)">The 100% Match Guarantee.</h2>
      <p style="font-size:18px;line-height:1.6;color:var(--uw-ink-800);margin:20px 0 0">The whole risk sits with us.</p>
      <div style="display:flex;flex-direction:column;gap:14px;margin-top:22px;font-size:16.5px;line-height:1.6;color:var(--uw-ink-600);max-width:60ch">
        <p style="margin:0">Get the full Match Mentorship. Use it the way it’s built. Apply through the strategy inside it.</p>
        <p style="margin:0;text-wrap:pretty">Don’t match this cycle? <b style="color: var(--uw-ink-900);">You don’t pay again.</b> Your membership stays active, free, with every masterclass, every recording, and every update we release, until you match.</p>
      </div>
    </div>
  </section>

  <section data-screen-label="First attempt value" class="uw-sec" style="padding:80px 24px;background:var(--uw-bg);border-bottom:1px solid var(--uw-border)">
    <div style="max-width:860px;margin:0 auto;text-align:center;display:flex;flex-direction:column;align-items:center">
      <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500)">First attempt value</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(30px,4.6vw,42px);line-height:1.1;letter-spacing:-0.02em;margin:18px 0 0;color:var(--uw-ink-900);max-width:26ch;text-wrap:pretty">Matching first attempt saves you <em>$92,000</em>.</h2>
      <p style="font-size:16.5px;line-height:1.6;color:var(--uw-ink-600);max-width:60ch;margin:20px 0 0;text-wrap:pretty">The traditional applicant takes at least two Match cycles to get in. Our students match on the first, and save the cost of the extra cycle.</p>
      <div class="uw-g3" style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:36px;width:100%;text-align:left">
        <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:24px">
          <div style="font-family:var(--font-display);font-size:40px;line-height:1;letter-spacing:-0.02em;color:var(--uw-ink-900)">$19,000</div>
          <div style="font-size:13.5px;line-height:1.55;color:var(--uw-ink-600);margin-top:10px">In reapplication costs.</div>
        </div>
        <div style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:24px">
          <div style="font-family:var(--font-display);font-size:40px;line-height:1;letter-spacing:-0.02em;color:var(--uw-ink-900)">$73,000</div>
          <div style="font-size:13.5px;line-height:1.55;color:var(--uw-ink-600);margin-top:10px">In first-year residency salary.</div>
        </div>
        <div style="background:var(--uw-blue-500);border-radius:var(--r-lg);padding:24px;color:#fff;position:relative;overflow:hidden">
          <div style="position:absolute;inset:0;background-image:radial-gradient(rgba(255,255,255,.12) 1px,transparent 1px);background-size:16px 16px"></div>
          <div style="position:relative;z-index:1">
            <div style="font-family:var(--font-display);font-size:40px;line-height:1;letter-spacing:-0.02em">$92,000</div>
            <div style="font-size:13.5px;line-height:1.55;color:rgba(255,255,255,.8);margin-top:10px">In total advantage when you match the first time.</div>
          </div>
        </div>
      </div>
      <p style="font-family:var(--font-display);font-size:26px;line-height:1.3;letter-spacing:-0.015em;color:var(--uw-ink-900);margin:30px 0 0;max-width:30ch">Match the first time and you keep all of it.</p>
      <div data-cta="pricing" style="display:flex;justify-content:center;margin-top:28px;cursor:pointer">
        <x-import component-from-global-scope="USMLEWiseDesignSystem_d852a5.Button" variant="primary" size="lg" hint-size="280px,48px">Get access →</x-import>
      </div>
    </div>
  </section>

  <section data-screen-label="Testimonials" class="uw-sec" style="padding:80px 24px;background:var(--uw-surface);border-bottom:1px solid var(--uw-border)">
    <div style="max-width:1040px;margin:0 auto;text-align:center;display:flex;flex-direction:column;align-items:center">
      <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-blue-500)">In their words</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(30px,4.6vw,42px);line-height:1.1;letter-spacing:-0.02em;margin:18px 0 0;color:var(--uw-ink-900)">Hear how they got there.</h2>
      <p style="font-size:16.5px;line-height:1.6;color:var(--uw-ink-600);max-width:60ch;margin:20px 0 0;text-wrap:pretty">Old grads, low scores, second attempts, prestigious programs — every path to the Match, told by the doctors who walked it.</p>

      <div class="uw-g3" style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:36px;width:100%;text-align:left">
        <div class="uw-video-card" data-video-id="WDrpqKmLwLs" role="button" tabindex="0" aria-label="Play video" style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;text-decoration:none;color:inherit;cursor:pointer">
          <div style="position:relative;width:100%;aspect-ratio:16/9;background:var(--uw-blue-500)">
            <img src="https://img.youtube.com/vi/WDrpqKmLwLs/hqdefault.jpg" alt="Ali — USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
            <div style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:46px;height:46px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)"><svg width="18" height="18" viewBox="0 0 24 24" fill="var(--uw-red-500)" stroke="none"><path d="M8 5v14l11-7z"></path></svg></div>
          </div>
          <div style="padding:14px 16px 16px">
            <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500)">Super old-grad match</div>
            <div style="margin-top:8px;font-size:15px;font-weight:600;color:var(--uw-ink-900)">Ali <span style="font-weight:400;color:var(--uw-ink-500)">· IM</span></div>
          </div>
        </div>
        <div class="uw-video-card" data-video-id="Ea1pD2xY0_s" role="button" tabindex="0" aria-label="Play video" style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;text-decoration:none;color:inherit;cursor:pointer">
          <div style="position:relative;width:100%;aspect-ratio:16/9;background:var(--uw-blue-500)">
            <img src="https://img.youtube.com/vi/Ea1pD2xY0_s/hqdefault.jpg" alt="Hamna — USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
            <div style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:46px;height:46px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)"><svg width="18" height="18" viewBox="0 0 24 24" fill="var(--uw-red-500)" stroke="none"><path d="M8 5v14l11-7z"></path></svg></div>
          </div>
          <div style="padding:14px 16px 16px">
            <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500)">Super old-grad match</div>
            <div style="margin-top:8px;font-size:15px;font-weight:600;color:var(--uw-ink-900)">Hamna <span style="font-weight:400;color:var(--uw-ink-500)">· FM</span></div>
          </div>
        </div>
        <div class="uw-video-card" data-video-id="lmjpF2nrXOU" role="button" tabindex="0" aria-label="Play video" style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;text-decoration:none;color:inherit;cursor:pointer">
          <div style="position:relative;width:100%;aspect-ratio:16/9;background:var(--uw-blue-500)">
            <img src="https://img.youtube.com/vi/lmjpF2nrXOU/hqdefault.jpg" alt="SOAP match — USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
            <div style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:46px;height:46px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)"><svg width="18" height="18" viewBox="0 0 24 24" fill="var(--uw-red-500)" stroke="none"><path d="M8 5v14l11-7z"></path></svg></div>
          </div>
          <div style="padding:14px 16px 16px">
            <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500)">Super old-grad match</div>
            <div style="margin-top:8px;font-size:15px;font-weight:600;color:var(--uw-ink-900)">SOAP match <span style="font-weight:400;color:var(--uw-ink-500)">· SOAP</span></div>
          </div>
        </div>
        <div class="uw-video-card" data-video-id="O4Gns55Brh0" role="button" tabindex="0" aria-label="Play video" style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;text-decoration:none;color:inherit;cursor:pointer">
          <div style="position:relative;width:100%;aspect-ratio:16/9;background:var(--uw-blue-500)">
            <img src="https://img.youtube.com/vi/O4Gns55Brh0/hqdefault.jpg" alt="Shreya — USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
            <div style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:46px;height:46px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)"><svg width="18" height="18" viewBox="0 0 24 24" fill="var(--uw-red-500)" stroke="none"><path d="M8 5v14l11-7z"></path></svg></div>
          </div>
          <div style="padding:14px 16px 16px">
            <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500)">Old grad · Post-SOAP</div>
            <div style="margin-top:8px;font-size:15px;font-weight:600;color:var(--uw-ink-900)">Shreya <span style="font-weight:400;color:var(--uw-ink-500)">· FM</span></div>
          </div>
        </div>
        <div class="uw-video-card" data-video-id="bz_R34QsKjk" role="button" tabindex="0" aria-label="Play video" style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;text-decoration:none;color:inherit;cursor:pointer">
          <div style="position:relative;width:100%;aspect-ratio:16/9;background:var(--uw-blue-500)">
            <img src="https://img.youtube.com/vi/bz_R34QsKjk/hqdefault.jpg" alt="Dr. Yash — USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
            <div style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:46px;height:46px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)"><svg width="18" height="18" viewBox="0 0 24 24" fill="var(--uw-red-500)" stroke="none"><path d="M8 5v14l11-7z"></path></svg></div>
          </div>
          <div style="padding:14px 16px 16px">
            <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500)">Old grad · Post-SOAP</div>
            <div style="margin-top:8px;font-size:15px;font-weight:600;color:var(--uw-ink-900)">Dr. Yash <span style="font-weight:400;color:var(--uw-ink-500)">· IM</span></div>
          </div>
        </div>
        <div class="uw-video-card" data-video-id="64yfSkj4M_8" role="button" tabindex="0" aria-label="Play video" style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;text-decoration:none;color:inherit;cursor:pointer">
          <div style="position:relative;width:100%;aspect-ratio:16/9;background:var(--uw-blue-500)">
            <img src="https://img.youtube.com/vi/64yfSkj4M_8/hqdefault.jpg" alt="Nathan — USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
            <div style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:46px;height:46px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)"><svg width="18" height="18" viewBox="0 0 24 24" fill="var(--uw-red-500)" stroke="none"><path d="M8 5v14l11-7z"></path></svg></div>
          </div>
          <div style="padding:14px 16px 16px">
            <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500)">Old grad · 5+ years since graduation</div>
            <div style="margin-top:8px;font-size:15px;font-weight:600;color:var(--uw-ink-900)">Nathan <span style="font-weight:400;color:var(--uw-ink-500)">· IM</span></div>
          </div>
        </div>
        <div class="uw-video-card" data-video-id="HSsrZERcvbI" role="button" tabindex="0" aria-label="Play video" style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;text-decoration:none;color:inherit;cursor:pointer">
          <div style="position:relative;width:100%;aspect-ratio:16/9;background:var(--uw-blue-500)">
            <img src="https://img.youtube.com/vi/HSsrZERcvbI/hqdefault.jpg" alt="Anjali — USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
            <div style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:46px;height:46px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)"><svg width="18" height="18" viewBox="0 0 24 24" fill="var(--uw-red-500)" stroke="none"><path d="M8 5v14l11-7z"></path></svg></div>
          </div>
          <div style="padding:14px 16px 16px">
            <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500)">Matched with low scores · 218 on Step 2</div>
            <div style="margin-top:8px;font-size:15px;font-weight:600;color:var(--uw-ink-900)">Anjali <span style="font-weight:400;color:var(--uw-ink-500)">· IM</span></div>
          </div>
        </div>
        <div class="uw-video-card" data-video-id="F8E7lTvGKRU" role="button" tabindex="0" aria-label="Play video" style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;text-decoration:none;color:inherit;cursor:pointer">
          <div style="position:relative;width:100%;aspect-ratio:16/9;background:var(--uw-blue-500)">
            <img src="https://img.youtube.com/vi/F8E7lTvGKRU/hqdefault.jpg" alt="Lakshita — USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
            <div style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:46px;height:46px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)"><svg width="18" height="18" viewBox="0 0 24 24" fill="var(--uw-red-500)" stroke="none"><path d="M8 5v14l11-7z"></path></svg></div>
          </div>
          <div style="padding:14px 16px 16px">
            <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500)">Matched with low scores · 221 on Step 2</div>
            <div style="margin-top:8px;font-size:15px;font-weight:600;color:var(--uw-ink-900)">Lakshita <span style="font-weight:400;color:var(--uw-ink-500)">· IM</span></div>
          </div>
        </div>
        <div class="uw-video-card" data-video-id="LKF0UYfXyE0" role="button" tabindex="0" aria-label="Play video" style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;text-decoration:none;color:inherit;cursor:pointer">
          <div style="position:relative;width:100%;aspect-ratio:16/9;background:var(--uw-blue-500)">
            <img src="https://img.youtube.com/vi/LKF0UYfXyE0/hqdefault.jpg" alt="UK graduate — USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
            <div style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:46px;height:46px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)"><svg width="18" height="18" viewBox="0 0 24 24" fill="var(--uw-red-500)" stroke="none"><path d="M8 5v14l11-7z"></path></svg></div>
          </div>
          <div style="padding:14px 16px 16px">
            <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500)">International grad</div>
            <div style="margin-top:8px;font-size:15px;font-weight:600;color:var(--uw-ink-900)">UK graduate <span style="font-weight:400;color:var(--uw-ink-500)">· IM</span></div>
          </div>
        </div>
        <div class="uw-video-card" data-video-id="8S2q-5Pb87k" role="button" tabindex="0" aria-label="Play video" style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;text-decoration:none;color:inherit;cursor:pointer">
          <div style="position:relative;width:100%;aspect-ratio:16/9;background:var(--uw-blue-500)">
            <img src="https://img.youtube.com/vi/8S2q-5Pb87k/hqdefault.jpg" alt="Pavani — USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
            <div style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:46px;height:46px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)"><svg width="18" height="18" viewBox="0 0 24 24" fill="var(--uw-red-500)" stroke="none"><path d="M8 5v14l11-7z"></path></svg></div>
          </div>
          <div style="padding:14px 16px 16px">
            <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500)">Matched with a Step 2 attempt</div>
            <div style="margin-top:8px;font-size:15px;font-weight:600;color:var(--uw-ink-900)">Pavani <span style="font-weight:400;color:var(--uw-ink-500)">· FM</span></div>
          </div>
        </div>
        <div class="uw-video-card" data-video-id="izwBvdQgVc8" role="button" tabindex="0" aria-label="Play video" style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;text-decoration:none;color:inherit;cursor:pointer">
          <div style="position:relative;width:100%;aspect-ratio:16/9;background:var(--uw-blue-500)">
            <img src="https://img.youtube.com/vi/izwBvdQgVc8/hqdefault.jpg" alt="Dyan — USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
            <div style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:46px;height:46px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)"><svg width="18" height="18" viewBox="0 0 24 24" fill="var(--uw-red-500)" stroke="none"><path d="M8 5v14l11-7z"></path></svg></div>
          </div>
          <div style="padding:14px 16px 16px">
            <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500)">Prestigious match · Albert Einstein</div>
            <div style="margin-top:8px;font-size:15px;font-weight:600;color:var(--uw-ink-900)">Dyan <span style="font-weight:400;color:var(--uw-ink-500)">· IM</span></div>
          </div>
        </div>
        <div class="uw-video-card" data-video-id="2pGb5xiKzdw" role="button" tabindex="0" aria-label="Play video" style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;text-decoration:none;color:inherit;cursor:pointer">
          <div style="position:relative;width:100%;aspect-ratio:16/9;background:var(--uw-blue-500)">
            <img src="https://img.youtube.com/vi/2pGb5xiKzdw/hqdefault.jpg" alt="Dr. Srusti — USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
            <div style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:46px;height:46px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)"><svg width="18" height="18" viewBox="0 0 24 24" fill="var(--uw-red-500)" stroke="none"><path d="M8 5v14l11-7z"></path></svg></div>
          </div>
          <div style="padding:14px 16px 16px">
            <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500)">Stellar match · Saint Vincent</div>
            <div style="margin-top:8px;font-size:15px;font-weight:600;color:var(--uw-ink-900)">Dr. Srusti <span style="font-weight:400;color:var(--uw-ink-500)">· IM</span></div>
          </div>
        </div>
        <div class="uw-video-card" data-video-id="ZynxmljOZDA" role="button" tabindex="0" aria-label="Play video" style="background:var(--uw-surface);border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;text-decoration:none;color:inherit;cursor:pointer">
          <div style="position:relative;width:100%;aspect-ratio:16/9;background:var(--uw-blue-500)">
            <img src="https://img.youtube.com/vi/ZynxmljOZDA/hqdefault.jpg" alt="Hamit — USMLE Wise match story" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
            <div style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:46px;height:46px;border-radius:50%;background:rgba(255,255,255,.92);display:grid;place-items:center;box-shadow:var(--shadow-md)"><svg width="18" height="18" viewBox="0 0 24 24" fill="var(--uw-red-500)" stroke="none"><path d="M8 5v14l11-7z"></path></svg></div>
          </div>
          <div style="padding:14px 16px 16px">
            <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--uw-red-500)">Prestigious match · UPMC</div>
            <div style="margin-top:8px;font-size:15px;font-weight:600;color:var(--uw-ink-900)">Hamit <span style="font-weight:400;color:var(--uw-ink-500)">· IM</span></div>
          </div>
        </div>
      </div>


      <div data-cta="pricing" style="display:flex;justify-content:center;margin-top:38px;cursor:pointer">
        <x-import component-from-global-scope="USMLEWiseDesignSystem_d852a5.Button" variant="primary" size="lg" hint-size="280px,48px">Get access →</x-import>
      </div>
    </div>
  </section>

  <section data-screen-label="The difference" class="uw-sec" style="padding:80px 24px;background:var(--uw-bg);border-bottom:1px solid var(--uw-border)">
    <div style="max-width:980px;margin:0 auto;text-align:center;display:flex;flex-direction:column;align-items:center">
      <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-red-500)">The difference</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(30px,4.6vw,42px);line-height:1.1;letter-spacing:-0.02em;margin:18px 0 0;color:var(--uw-ink-900);max-width:28ch;text-wrap:pretty">Why applicants pick us over generic prep and freelancers</h2>
      <div style="width:100%;margin-top:36px;border:1px solid var(--uw-border);border-radius:var(--r-lg);overflow:hidden;background:var(--uw-bg);text-align:left">
        <div class="uw-cmp-head" style="display:grid;grid-template-columns:150px 1fr 1fr;gap:0;padding:14px 20px;background:var(--uw-blue-500);color:#fff;font-family:var(--font-mono);font-size:10.5px;letter-spacing:.12em;text-transform:uppercase"><span></span><span style="color:rgba(255,255,255,.66)">Generic prep / freelancers</span><span>USMLEWise</span></div>
        <div class="uw-cmp" style="display:grid;grid-template-columns:150px 1fr 1fr;gap:20px;padding:16px 20px;border-bottom:1px solid var(--uw-border);font-size:14.5px;line-height:1.55"><b style="color:var(--uw-ink-900)">Approach</b><span style="color:var(--uw-ink-500)">Different people for CV, PS, and interviews. The story gets lost.</span><span style="color:var(--uw-ink-800)">One system. Every piece tells the same story.</span></div>
        <div class="uw-cmp" style="display:grid;grid-template-columns:150px 1fr 1fr;gap:20px;padding:16px 20px;border-bottom:1px solid var(--uw-border);font-size:14.5px;line-height:1.55;background:var(--uw-surface)"><b style="color:var(--uw-ink-900)">Personal statement</b><span style="color:var(--uw-ink-500)">Template edits. Generic lines. No framework.</span><span style="color:var(--uw-ink-800)">PS3x, built on AAMC EACM, ACGME competencies, and PCM-6.</span></div>
        <div class="uw-cmp" style="display:grid;grid-template-columns:150px 1fr 1fr;gap:20px;padding:16px 20px;border-bottom:1px solid var(--uw-border);font-size:14.5px;line-height:1.55"><b style="color:var(--uw-ink-900)">ERAS CV</b><span style="color:var(--uw-ink-500)">Light proofreading. Basic bullets.</span><span style="color:var(--uw-ink-800)">ERAS CV 3X. Bullet-to-story method with competency mapping.</span></div>
        <div class="uw-cmp" style="display:grid;grid-template-columns:150px 1fr 1fr;gap:20px;padding:16px 20px;border-bottom:1px solid var(--uw-border);font-size:14.5px;line-height:1.55;background:var(--uw-surface)"><b style="color:var(--uw-ink-900)">Interviewing</b><span style="color:var(--uw-ink-500)">A list of questions. Mock with no strategy.</span><span style="color:var(--uw-ink-800)">Advanced Interviewing: inner game, outer game, real mock analysis.</span></div>
        <div class="uw-cmp" style="display:grid;grid-template-columns:150px 1fr 1fr;gap:20px;padding:16px 20px;border-bottom:1px solid var(--uw-border);font-size:14.5px;line-height:1.55"><b style="color:var(--uw-ink-900)">Strategy</b><span style="color:var(--uw-ink-500)">“Apply broadly.” No data.</span><span style="color:var(--uw-ink-800)">Data-driven program selection, signaling, and timeline mapping.</span></div>
        <div class="uw-cmp" style="display:grid;grid-template-columns:150px 1fr 1fr;gap:20px;padding:16px 20px;border-bottom:1px solid var(--uw-border);font-size:14.5px;line-height:1.55;background:var(--uw-surface)"><b style="color:var(--uw-ink-900)">Research</b><span style="color:var(--uw-ink-500)">Not included.</span><span style="color:var(--uw-ink-800)">4 courses: case reports, systematic reviews, meta-analysis, original research.</span></div>
        <div class="uw-cmp" style="display:grid;grid-template-columns:150px 1fr 1fr;gap:20px;padding:16px 20px;border-bottom:1px solid var(--uw-border);font-size:14.5px;line-height:1.55"><b style="color:var(--uw-ink-900)">Frameworks</b><span style="color:var(--uw-ink-500)">Gut feeling and templates.</span><span style="color:var(--uw-ink-800)">EACM, ACGME, PCM-6, OCEAN, Straight Line Model.</span></div>
        <div class="uw-cmp" style="display:grid;grid-template-columns:150px 1fr 1fr;gap:20px;padding:16px 20px;font-size:14.5px;line-height:1.55;background:var(--uw-surface)"><b style="color:var(--uw-ink-900)">Community</b><span style="color:var(--uw-ink-500)">Email. Days to hear back.</span><span style="color:var(--uw-ink-800)">Private WhatsApp. Staff and alumni. Answers in hours.</span></div>
      </div>
    </div>
  </section>

  <section data-screen-label="FAQ" class="uw-sec" style="padding:80px 24px;background:var(--uw-surface);border-bottom:1px solid var(--uw-border)">
    <div style="max-width:760px;margin:0 auto;text-align:center;display:flex;flex-direction:column;align-items:center">
      <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-blue-500)">FAQ</div>
      <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(30px,4.6vw,42px);line-height:1.1;letter-spacing:-0.02em;margin:18px 0 0;color:var(--uw-ink-900)">Questions, answered honestly.</h2>
      <div style="display:flex;flex-direction:column;gap:12px;margin-top:36px;width:100%;text-align:left">
        <details style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:18px 22px">
          <summary style="display:flex;justify-content:space-between;align-items:center;gap:16px;font-size:16.5px;font-weight:600;color:var(--uw-ink-900)">Is this done for you?<span class="uw-plus" style="font-size:20px;color:var(--uw-blue-500);transition:transform var(--dur-fast) var(--ease-out)">+</span></summary>
          <p style="margin:14px 0 0;font-size:15.5px;line-height:1.65;color:var(--uw-ink-600);text-wrap:pretty">No, and that’s the whole point. We hand you the exact frameworks program directors use, teach them across the recorded masterclasses, and show you how to build every piece. You write your own personal statement. You build your own CV. You do the work. That’s how you learn to tell your story in a way a committee trusts, and it’s why this costs $349 instead of thousands. If you’d rather we build your application with you, that’s our done-for-you Match packages, and your $349 credits fully toward them.</p>
        </details>
        <details style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:18px 22px">
          <summary style="display:flex;justify-content:space-between;align-items:center;gap:16px;font-size:16.5px;font-weight:600;color:var(--uw-ink-900)">Who is this for?<span class="uw-plus" style="font-size:20px;color:var(--uw-blue-500);transition:transform var(--dur-fast) var(--ease-out)">+</span></summary>
          <p style="margin:14px 0 0;font-size:15.5px;line-height:1.65;color:var(--uw-ink-600);text-wrap:pretty">IMGs, US IMGs, US MDs, and DOs. First-time applicants who want to get it right from the start, and reapplicants rebuilding a stronger cycle. If you’re applying to the Match, these frameworks work for you.</p>
        </details>
        <details style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:18px 22px">
          <summary style="display:flex;justify-content:space-between;align-items:center;gap:16px;font-size:16.5px;font-weight:600;color:var(--uw-ink-900)">Are the masterclasses live or recorded?<span class="uw-plus" style="font-size:20px;color:var(--uw-blue-500);transition:transform var(--dur-fast) var(--ease-out)">+</span></summary>
          <p style="margin:14px 0 0;font-size:15.5px;line-height:1.65;color:var(--uw-ink-600);text-wrap:pretty">Recorded. Every masterclass is ready to watch the moment you enroll, so you can go through the 3X framework on your own schedule instead of around a live call. You get every recording and all the materials from day one.</p>
        </details>
        <details style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:18px 22px">
          <summary style="display:flex;justify-content:space-between;align-items:center;gap:16px;font-size:16.5px;font-weight:600;color:var(--uw-ink-900)">How does the 100% Match Guarantee work?<span class="uw-plus" style="font-size:20px;color:var(--uw-blue-500);transition:transform var(--dur-fast) var(--ease-out)">+</span></summary>
          <p style="margin:14px 0 0;font-size:15.5px;line-height:1.65;color:var(--uw-ink-600);text-wrap:pretty">Get the Match Mentorship, use it, and apply through the strategy inside it. If you don’t match this cycle, you don’t pay again, and your access stays free, cycle after cycle, until you do. The programs make the final Match call, so we commit to staying with you the whole way.</p>
        </details>
        <details style="background:var(--uw-bg);border:1px solid var(--uw-border);border-radius:var(--r-lg);padding:18px 22px">
          <summary style="display:flex;justify-content:space-between;align-items:center;gap:16px;font-size:16.5px;font-weight:600;color:var(--uw-ink-900)">What if I want you to build my application for me?<span class="uw-plus" style="font-size:20px;color:var(--uw-blue-500);transition:transform var(--dur-fast) var(--ease-out)">+</span></summary>
          <p style="margin:14px 0 0;font-size:15.5px;line-height:1.65;color:var(--uw-ink-600);text-wrap:pretty">Your $349 credits 100% toward any USMLEWise service. Put it toward a done-for-you Match package, where physician advisors build your CV, personal statement, and strategy with you, or toward our personal statement editing service if that’s the piece you want handled. Whatever you pick, the full $349 comes off the price.</p>
        </details>
      </div>
    </div>
  </section>

  <section data-screen-label="Final CTA" class="uw-sec" style="padding:80px 24px;background:var(--uw-bg)">
    <div style="max-width:900px;margin:0 auto">
      <div style="background:var(--uw-blue-500);border-radius:var(--r-xl);padding:64px 40px;color:#fff;position:relative;overflow:hidden;text-align:center">
        <div style="position:absolute;inset:0;background-image:radial-gradient(rgba(255,255,255,.1) 1px,transparent 1px);background-size:18px 18px"></div>
        <div style="position:relative;z-index:1;display:flex;flex-direction:column;align-items:center">
          <h2 style="font-family:var(--font-display);font-weight:400;font-size:clamp(30px,4.8vw,44px);line-height:1.08;letter-spacing:-0.02em;margin:0;max-width:24ch;text-wrap:pretty;color:#fff">Make this your first and last Match season.</h2>
          <p style="font-size:16.5px;line-height:1.6;color:rgba(255,255,255,.8);max-width:58ch;margin:22px 0 0;text-wrap:pretty">You’ve already proven you’re a good doctor. Your Match comes down to whether a committee can see it, in one clear story, built the way they score.</p>
          <p style="font-size:16.5px;line-height:1.6;color:rgba(255,255,255,.8);max-width:58ch;margin:14px 0 0;text-wrap:pretty">That’s the whole Match Mentorship. And if it doesn’t get you there this cycle, we don’t stop until it does.</p>
          <div data-cta="pricing" style="display:flex;justify-content:center;margin-top:30px;cursor:pointer">
            <x-import component-from-global-scope="USMLEWiseDesignSystem_d852a5.Button" variant="primary" size="xl" hint-size="280px,56px">Get access →</x-import>
          </div>
          <div style="display:flex;justify-content:center;align-items:center;gap:12px;flex-wrap:wrap;margin-top:26px">
            <div style="display:flex;gap:3px;align-items:center"><svg width="17" height="17" viewBox="0 0 24 24" fill="#D69E2E" aria-hidden="true"><path d="m12 2 2.9 6.26 6.85.74-5.1 4.6 1.42 6.73L12 17l-6.07 3.33 1.42-6.73-5.1-4.6 6.85-.74z"/></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#D69E2E" aria-hidden="true"><path d="m12 2 2.9 6.26 6.85.74-5.1 4.6 1.42 6.73L12 17l-6.07 3.33 1.42-6.73-5.1-4.6 6.85-.74z"/></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#D69E2E" aria-hidden="true"><path d="m12 2 2.9 6.26 6.85.74-5.1 4.6 1.42 6.73L12 17l-6.07 3.33 1.42-6.73-5.1-4.6 6.85-.74z"/></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#D69E2E" aria-hidden="true"><path d="m12 2 2.9 6.26 6.85.74-5.1 4.6 1.42 6.73L12 17l-6.07 3.33 1.42-6.73-5.1-4.6 6.85-.74z"/></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#D69E2E" aria-hidden="true"><path d="m12 2 2.9 6.26 6.85.74-5.1 4.6 1.42 6.73L12 17l-6.07 3.33 1.42-6.73-5.1-4.6 6.85-.74z"/></svg></div>
            <span style="font-size:15px;color:rgba(255,255,255,.85)">Trusted by <b style="color:#fff" data-count="100000" data-suffix="+">100,000+</b> students and doctors</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-screen-label="Still have questions" class="uw-sec" style="padding:0 24px 88px;background:var(--uw-bg)">
    <div style="max-width:640px;margin:0 auto;text-align:center;display:flex;flex-direction:column;align-items:center">
      <div style="font-family:var(--font-mono);font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-ink-500)">Still have questions?</div>
      <h3 style="font-family:var(--font-display);font-weight:400;font-size:32px;line-height:1.15;letter-spacing:-0.02em;margin:16px 0 0;color:var(--uw-ink-900)">Reach out before you decide.</h3>
      <p style="font-size:16px;line-height:1.6;color:var(--uw-ink-600);max-width:52ch;margin:18px 0 0;text-wrap:pretty">Not sure this is right for where you are in your Match journey? Message us. We’ll give you a straight answer about your best next step, even if that answer is to wait a cycle.</p>
      <div style="display:flex;justify-content:center;margin-top:24px">
        <a href="https://wa.me/19192015700?text=I%20am%20interested%20in%20Match%20Mentorship" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:9px;padding:14px 24px;border-radius:var(--r-md);background:#25D366;color:#0B3D22;font-size:16px;font-weight:600;text-decoration:none;box-shadow:var(--shadow-sm)" style-hover="background:#1EBE5B;color:#0B3D22"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.47 14.38c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.96-.94 1.16-.17.2-.35.22-.65.07-.3-.15-1.26-.46-2.4-1.48-.89-.79-1.49-1.76-1.66-2.06-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.08-.15-.67-1.61-.92-2.2-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1.01-1.04 2.47s1.06 2.86 1.21 3.06c.15.2 2.09 3.2 5.07 4.49.71.3 1.26.49 1.69.63.71.22 1.36.19 1.87.12.57-.09 1.76-.72 2.01-1.41.25-.7.25-1.29.17-1.41-.07-.13-.27-.2-.57-.35z"></path><path d="M12.04 2C6.6 2 2.18 6.42 2.18 11.86c0 1.74.46 3.44 1.32 4.94L2 22l5.35-1.4a9.83 9.83 0 0 0 4.69 1.19h.01c5.43 0 9.85-4.42 9.85-9.86 0-2.63-1.02-5.11-2.88-6.97A9.78 9.78 0 0 0 12.04 2m0 1.85c2.14 0 4.15.83 5.66 2.35a7.94 7.94 0 0 1 2.35 5.66c0 4.42-3.6 8.01-8.02 8.01a8.2 8.2 0 0 1-4.17-1.14l-.3-.18-3.17.83.85-3.09-.2-.32a8.13 8.13 0 0 1-1.25-4.35c0-4.41 3.6-8 8.02-8"></path></svg>Chat on WhatsApp →</a>
      </div>
      <p style="font-size:14px;color:var(--uw-ink-500);margin:16px 0 0">Prefer email? Write to us at <!--email_off--><a href="mailto:support@usmlewise.com" style="color:var(--uw-blue-500);font-weight:600;text-decoration:none">support@usmlewise.com</a><!--/email_off-->.</p>
      <img src="/assets/usmle-design-system/assets/emblem.svg" alt="USMLE Wise" style="height:34px;margin-top:44px;opacity:.5">
    </div>
  </section>
</div>

</x-dc>
<!-- Kept outside <x-dc>: the dc-runtime reconciles that whole subtree as
     React (see the onclick note below), and it drops the plain boolean
     `hidden` attribute in the process — the modal rendered permanently
     visible, blocking every click on the page underneath it. Plain HTML
     out here is untouched by that runtime. -->
<div id="uwVideoModal" class="uw-video-modal" style="display:none">
  <div class="uw-video-modal__backdrop" data-video-close></div>
  <div class="uw-video-modal__dialog" role="dialog" aria-modal="true" aria-label="Match story video">
    <button type="button" class="uw-video-modal__close" data-video-close aria-label="Close video">&times;</button>
    <div class="uw-video-modal__frame"></div>
  </div>
</div>
<script>
(function () {
  // Delegated on document, not attached to the wrapper divs directly: each
  // wrapper contains an <x-import> Button that the dc-runtime (support.js)
  // mounts as a real React node, re-rendering that subtree (and possibly
  // replacing the wrapper element itself, per its own data-dc-tpl bookkeeping)
  // after this script's first pass — a listener bound straight to the div
  // would ride off with the discarded node. Delegation looks the target up
  // fresh via closest() on every click, so it survives any re-render.
  // (A literal onclick="" attribute isn't an option either: the runtime
  // forwards it verbatim as the React onClick prop, and React throws —
  // invariant #231 — because that prop must be a function, not a string.)
  document.addEventListener('click', function (e) {
    var videoCard = e.target.closest('[data-video-id]');
    if (e.target.closest('[data-cta="pricing"]')) {
      var target = document.getElementById('pricing');
      if (!target) return;
      var y = target.getBoundingClientRect().top + window.pageYOffset - 72;
      window.scrollTo({ top: y, behavior: 'smooth' });
    } else if (e.target.closest('[data-cta="checkout"]')) {
      window.open('https://buy.stripe.com/9B614o5yW4aV58IewAes02P', '_blank', 'noopener');
    } else if (videoCard) {
      openVideoModal(videoCard.getAttribute('data-video-id'));
    } else if (e.target.closest('[data-video-close]')) {
      closeVideoModal();
    }
  });
  // Cards are focusable (role="button" tabindex="0") for keyboard use — Enter/Space "click" them.
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') { closeVideoModal(); return; }
    if ((e.key === 'Enter' || e.key === ' ') && e.target.closest('[data-video-id]')) {
      e.preventDefault();
      openVideoModal(e.target.closest('[data-video-id]').getAttribute('data-video-id'));
    }
  });

  var videoModal = document.getElementById('uwVideoModal');
  var videoFrame = videoModal ? videoModal.querySelector('.uw-video-modal__frame') : null;
  function openVideoModal(id) {
    if (!videoModal || !videoFrame || !id) return;
    // referrerpolicy is required: without a Referer, YouTube refuses to play the
    // embed and shows "Error 153 - Video player configuration error".
    videoFrame.innerHTML = '<iframe src="https://www.youtube-nocookie.com/embed/' + id +
      '?autoplay=1&rel=0" title="Match story video" referrerpolicy="strict-origin-when-cross-origin" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>';
    videoModal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
  }
  function closeVideoModal() {
    if (!videoModal || !videoFrame || videoModal.style.display === 'none') return;
    videoModal.style.display = 'none';
    videoFrame.innerHTML = ''; // drop the iframe so playback actually stops
    document.body.style.overflow = '';
  }

  var els = Array.prototype.slice.call(document.querySelectorAll('[data-count]'));
  if (!els.length) return;
  function fmt(el, v) {
    var dec = parseInt(el.getAttribute('data-decimals') || '0', 10);
    var n = dec > 0 ? v.toFixed(dec) : String(Math.round(v));
    return Number(n).toLocaleString('en-US') + (el.getAttribute('data-suffix') || '');
  }
  function run(el) {
    var to = parseFloat(el.getAttribute('data-count'));
    if (!isFinite(to)) return;
    var dur = 1800, start = null;
    function tick(ts) {
      if (start === null) start = ts;
      var p = Math.min(1, (ts - start) / dur);
      var eased = 1 - Math.pow(1 - p, 3);
      el.textContent = fmt(el, to * eased);
      if (p < 1) requestAnimationFrame(tick);
      else el.textContent = fmt(el, to);
    }
    requestAnimationFrame(tick);
  }
  els.forEach(function (el) { el.textContent = fmt(el, 0); });
  if (!('IntersectionObserver' in window)) { els.forEach(run); return; }
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) { if (e.isIntersecting) { run(e.target); io.unobserve(e.target); } });
  }, { threshold: 0.4 });
  els.forEach(function (el) { io.observe(el); });
})();
</script>

<!-- Meta Pixel conversion events -->
<script>
(function () {
  if (typeof fbq !== 'function') return;

  var OFFER = { content_name: 'Match Membership', content_category: 'Match Mentorship' };
  var PRICE = 349.00, CURRENCY = 'USD'; // early-bird price shown in the pricing card

  // This page is the offer itself, so the pageview doubles as a product view.
  fbq('track', 'ViewContent', {
    content_name: OFFER.content_name,
    content_category: OFFER.content_category,
    value: PRICE,
    currency: CURRENCY
  });

  // Delegated for the same reason as the CTA handler above: the dc-runtime
  // re-renders each <x-import> Button after first paint, so a listener bound
  // straight to those nodes would be discarded with them.
  document.addEventListener('click', function (e) {
    var t = e.target;
    if (!t || !t.closest) return;

    if (t.closest('[data-cta="checkout"]')) {
      // The only button that actually opens Stripe.
      fbq('track', 'InitiateCheckout', {
        content_name: OFFER.content_name,
        value: PRICE,
        currency: CURRENCY
      });
    } else if (t.closest('[data-cta="pricing"]')) {
      // The eight "Enroll now" buttons only scroll to the pricing card, so
      // this is interest, not checkout — kept as a custom event so it cannot
      // dilute the InitiateCheckout signal Meta optimises delivery against.
      fbq('trackCustom', 'EnrollCTAClick', { content_name: OFFER.content_name });
    } else if (t.closest('a[href*="wa.me"]')) {
      fbq('track', 'Lead', { content_name: OFFER.content_name, method: 'WhatsApp' });
    } else if (t.closest('a[href^="mailto:"]')) {
      fbq('track', 'Contact', { content_name: OFFER.content_name, method: 'Email' });
    }
  });
})();
</script>
<!-- End Meta Pixel conversion events -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
