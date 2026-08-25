<?php
$pageTitle = "Our Mastery | Full Course Library | USMLE Wise";
$pageDescription = "Every USMLE Wise course in one place: exam crash courses, research training, and application writing courses, taught by mentors who scored 260-plus.";
$canonical = "https://usmlewise.com/mastery";
$bodyClass = "msp";
$stylesheets = [
    "/styles/coaching.css"
];
$scripts = [
    "/js/coaching.js"
];
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<style>
      /* ---- Our Mastery: catalog ---- */
      .mst-catalog { background: var(--uw-surface-sunk); border-block: 1px solid var(--uw-border); }
      .mst-filters {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: clamp(32px, 4vw, 48px);
      }
      .mst-filter {
        appearance: none;
        border: 1px solid var(--uw-border-strong);
        background: var(--uw-surface);
        color: var(--uw-ink-600);
        font-family: inherit;
        font-size: 13.5px;
        font-weight: 600;
        padding: 9px 18px;
        border-radius: var(--r-pill);
        cursor: pointer;
        transition: background .15s ease, border-color .15s ease, color .15s ease;
      }
      .mst-filter:hover { border-color: var(--uw-blue-300); color: var(--uw-ink-900); }
      .mst-filter.is-active {
        background: var(--uw-blue-500);
        border-color: var(--uw-blue-500);
        color: #fff;
      }
      .mst-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: clamp(18px, 2.4vw, 28px);
      }
      .mst-card {
        display: flex;
        flex-direction: column;
        background: var(--uw-surface);
        border: 1px solid var(--uw-border);
        border-radius: var(--r-xl);
        padding: clamp(24px, 2.6vw, 30px);
        transition: box-shadow .18s ease, border-color .18s ease, transform .18s ease;
      }
      .mst-card:hover { box-shadow: var(--shadow-md); border-color: var(--uw-blue-200); transform: translateY(-2px); }
      .mst-card__top { display: flex; align-items: center; justify-content: space-between; gap: 10px; margin-bottom: 14px; }
      .mst-card__cat {
        font-size: 11.5px;
        font-weight: 700;
        letter-spacing: .04em;
        text-transform: uppercase;
        color: var(--uw-blue-500);
      }
      .mst-card__format {
        font-size: 11px;
        font-weight: 600;
        padding: 3px 10px;
        border-radius: var(--r-pill);
        background: var(--uw-ink-75);
        color: var(--uw-ink-600);
        white-space: nowrap;
      }
      .mst-card__format--live { background: var(--uw-success-50); color: var(--uw-success-700); }
      .mst-card__title { font-size: 19px; font-weight: 700; color: var(--uw-ink-900); margin: 0 0 8px; line-height: 1.3; }
      .mst-card__desc { font-size: 14.5px; color: var(--uw-ink-600); line-height: 1.6; margin: 0 0 18px; flex-grow: 1; }
      .mst-card__foot { display: flex; align-items: center; justify-content: space-between; gap: 12px; padding-top: 16px; border-top: 1px solid var(--uw-border); }
      .mst-card__price { font-size: 15px; font-weight: 700; color: var(--uw-ink-900); }
      .mst-card__price span { font-size: 12.5px; font-weight: 500; color: var(--uw-ink-500); }
      @media (max-width: 900px) { .mst-grid { grid-template-columns: 1fr 1fr; } }
      @media (max-width: 620px) { .mst-grid { grid-template-columns: 1fr; } }

      /* ---- Why one platform ---- */
      .mst-feat-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: clamp(20px, 3vw, 36px);
        margin-top: clamp(40px, 5vw, 60px);
      }
      .mst-feat { display: flex; flex-direction: column; gap: 10px; }
      .mst-feat__icon {
        width: 40px; height: 40px; border-radius: 10px;
        background: var(--uw-blue-50); display: grid; place-items: center;
        color: var(--uw-blue-600); flex-shrink: 0;
      }
      .mst-feat__title { font-size: 16px; font-weight: 600; color: var(--uw-ink-900); margin: 0; }
      .mst-feat__body { font-size: 15px; color: var(--uw-ink-600); line-height: 1.65; margin: 0; }
      @media (max-width: 640px) { .mst-feat-grid { grid-template-columns: 1fr 1fr; } }
      @media (max-width: 400px) { .mst-feat-grid { grid-template-columns: 1fr; } }

      /* ---- Final CTA card ---- */
      .mst-cta-wrap { padding-block: clamp(72px, 9vw, 120px); }
      .mst-cta-card {
        background: #08111f;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: clamp(20px, 2.4vw, 28px);
        box-shadow: var(--shadow-lg);
        padding: clamp(48px, 6vw, 80px) clamp(32px, 5vw, 72px);
        text-align: center;
      }
      .mst-cta-card .msp-eyebrow { display: block; text-align: center; }
      .mst-cta-card .msp-h2 { color: #fff; text-align: center; max-width: 22ch; margin-inline: auto; margin-bottom: 0; }
      .mst-cta-card .msp-sub { color: rgba(255,255,255,.65); max-width: 54ch; margin-inline: auto; margin-top: clamp(14px,2vw,20px); text-align: center; }
      .mst-cta-card .msp-cta-row { justify-content: center; margin-inline: auto; margin-top: clamp(28px, 4vw, 44px); }
      .mst-cta-card .btn--outline {
        border-color: rgba(255,255,255,.4) !important;
        color: #fff !important;
        background: transparent !important;
        transition: background 0.18s ease, border-color 0.18s ease, color 0.18s ease, box-shadow 0.18s ease;
      }
      .mst-cta-card .btn--outline:hover {
        background: #fff !important;
        border-color: #fff !important;
        color: #08111f !important;
        box-shadow: 0 8px 24px rgba(255,255,255,0.12) !important;
      }
    </style>

<main>
      <!-- ============== HERO ============== -->
      <section class="msp-hero" aria-labelledby="heroTitle">
        <div class="msp-wrap msp-hero__grid">
          <div class="msp-hero__copy reveal">
            <h1 id="heroTitle" class="msp-h1">
              Our Mastery: <em>every course</em>, one library
            </h1>
            <p class="msp-lede">
              Exam crash courses, research training, and application writing
              courses, all built and taught by mentors who scored 260-plus and
              matched as IMGs themselves.
            </p>
            <div class="msp-cta-row">
              <a class="btn btn--primary btn--xl" href="#catalog">Browse Courses</a>
              <a
                class="btn btn--outline btn--xl"
                href="https://team.manikmadaan.com/guidance-call/book"
                target="_blank"
                rel="noopener noreferrer"
                >Book A Free Guidance Call</a
              >
            </div>
          </div>

          <div class="msp-hero__frame-wrap">
            <div class="msp-hero__frame reveal">
              <picture>
                <source srcset="/assets/Photos/kaitlyn-baker-vZJdYl5JVXY-unsplash.webp" type="image/webp">
                <img src="/assets/Photos/kaitlyn-baker-vZJdYl5JVXY-unsplash.jpg" alt="IMG physician studying with USMLE Wise course materials" fetchpriority="high" decoding="async" />
              </picture>
            </div>
            <div class="msp-float-note" aria-hidden="true">
              <span class="msp-float-note__num">11</span>
              <span class="msp-float-note__label">Courses live</span>
              <span class="msp-float-note__sub">Exam prep &middot; Research &middot; Match</span>
            </div>
          </div>
        </div>

        <div class="msp-bar msp-wrap" aria-label="Library at a glance">
          <div class="msp-bar__inner">
            <div class="msp-stat reveal">
              <b data-count="11" data-suffix="">11</b>
              <span>Courses in the library</span>
            </div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal">
              <b data-count="3" data-suffix="">3</b>
              <span>Course tracks</span>
            </div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal">
              <b data-count="260" data-suffix="+">260+</b>
              <span>Avg. instructor score</span>
            </div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal">
              <b data-count="17000" data-suffix="+" data-comma>17,000+</b>
              <span>Students trained</span>
            </div>
          </div>
        </div>
      </section>

      <!-- ============== CATALOG ============== -->
      <section class="msp-section mst-catalog" id="catalog" aria-labelledby="catalogTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">The library</span>
            <h2 id="catalogTitle" class="msp-h2">Pick a track, or take them all</h2>
            <p class="msp-sub">
              Every course is built by a 260-plus scoring mentor and mapped to
              a specific stage of the IMG journey, from exam prep through the
              Match.
            </p>
          </div>

          <div class="mst-filters" role="tablist" aria-label="Filter courses by track">
            <button class="mst-filter is-active" type="button" data-filter="all" role="tab" aria-selected="true">All Courses</button>
            <button class="mst-filter" type="button" data-filter="exam" role="tab" aria-selected="false">USMLE Exam Prep</button>
            <button class="mst-filter" type="button" data-filter="research" role="tab" aria-selected="false">Research &amp; Publishing</button>
            <button class="mst-filter" type="button" data-filter="match" role="tab" aria-selected="false">Application &amp; Match</button>
          </div>

          <div class="mst-grid" id="mstGrid">

            <article class="mst-card reveal" data-cat="exam">
              <div class="mst-card__top">
                <span class="mst-card__cat">USMLE Exam Prep</span>
                <span class="mst-card__format">Recorded</span>
              </div>
              <h3 class="mst-card__title">Step 1 High-Yield Crash Course</h3>
              <p class="mst-card__desc">60 hours of recorded, subject-by-subject review built to refresh every high-yield Step 1 topic before your exam date.</p>
              <div class="mst-card__foot">
                <span class="mst-card__price">$200</span>
                <a href="/step-1-high-yield-crash-course" class="btn btn--ghost btn--sm">View Course <i data-lucide="arrow-right" width="14" height="14"></i></a>
              </div>
            </article>

            <article class="mst-card reveal" data-cat="exam">
              <div class="mst-card__top">
                <span class="mst-card__cat">USMLE Exam Prep</span>
                <span class="mst-card__format">Recorded</span>
              </div>
              <h3 class="mst-card__title">Step 2 CK Crash Course</h3>
              <p class="mst-card__desc">A condensed, clinically-oriented run through every Step 2 CK subject, built for students refreshing before exam day.</p>
              <div class="mst-card__foot">
                <span class="mst-card__price">$200</span>
                <a href="/coaching" class="btn btn--ghost btn--sm">View Course <i data-lucide="arrow-right" width="14" height="14"></i></a>
              </div>
            </article>

            <article class="mst-card reveal" data-cat="exam">
              <div class="mst-card__top">
                <span class="mst-card__cat">USMLE Exam Prep</span>
                <span class="mst-card__format">Recorded</span>
              </div>
              <h3 class="mst-card__title">Step 3 Crash Course</h3>
              <p class="mst-card__desc">Focused, high-yield review of Step 3 content and CCS-style case reasoning, self-paced and exam-ready.</p>
              <div class="mst-card__foot">
                <span class="mst-card__price">$200</span>
                <a href="/coaching" class="btn btn--ghost btn--sm">View Course <i data-lucide="arrow-right" width="14" height="14"></i></a>
              </div>
            </article>

            <article class="mst-card reveal" data-cat="exam">
              <div class="mst-card__top">
                <span class="mst-card__cat">USMLE Exam Prep</span>
                <span class="mst-card__format mst-card__format--live">Live</span>
              </div>
              <h3 class="mst-card__title">Step 1 Mastery with First Aid</h3>
              <p class="mst-card__desc">Live, subject-by-subject Step 1 coaching built around First Aid, with a mentor who shows you how to use the resource, not just read it.</p>
              <div class="mst-card__foot">
                <span class="mst-card__price">$899</span>
                <a href="/coaching-step1-mastery" class="btn btn--ghost btn--sm">View Course <i data-lucide="arrow-right" width="14" height="14"></i></a>
              </div>
            </article>

            <article class="mst-card reveal" data-cat="exam">
              <div class="mst-card__top">
                <span class="mst-card__cat">USMLE Exam Prep</span>
                <span class="mst-card__format mst-card__format--live">Live</span>
              </div>
              <h3 class="mst-card__title">NBME Live Coaching</h3>
              <p class="mst-card__desc">Full-syllabus live coaching with 260-plus-scoring mentors, intensive and personalized for the highest possible score on any Step exam.</p>
              <div class="mst-card__foot">
                <span class="mst-card__price"><span>from</span> $2,500</span>
                <a href="/coaching-step23-mastery" class="btn btn--ghost btn--sm">View Course <i data-lucide="arrow-right" width="14" height="14"></i></a>
              </div>
            </article>

            <article class="mst-card reveal" data-cat="research">
              <div class="mst-card__top">
                <span class="mst-card__cat">Research &amp; Publishing</span>
                <span class="mst-card__format">Recorded</span>
              </div>
              <h3 class="mst-card__title">Research Cohort Access</h3>
              <p class="mst-card__desc">Self-paced training on finding a PI, structuring a project, and publishing, built for students starting research from zero.</p>
              <div class="mst-card__foot">
                <span class="mst-card__price">Self-paced</span>
                <a href="/research-cohort" class="btn btn--ghost btn--sm">View Course <i data-lucide="arrow-right" width="14" height="14"></i></a>
              </div>
            </article>

            <article class="mst-card reveal" data-cat="research">
              <div class="mst-card__top">
                <span class="mst-card__cat">Research &amp; Publishing</span>
                <span class="mst-card__format mst-card__format--live">Live</span>
              </div>
              <h3 class="mst-card__title">Original Research Program</h3>
              <p class="mst-card__desc">Live, mentored guidance from research question to submission, built for students producing an original publication.</p>
              <div class="mst-card__foot">
                <span class="mst-card__price">Mentored</span>
                <a href="/research-original" class="btn btn--ghost btn--sm">View Course <i data-lucide="arrow-right" width="14" height="14"></i></a>
              </div>
            </article>

            <article class="mst-card reveal" data-cat="research">
              <div class="mst-card__top">
                <span class="mst-card__cat">Research &amp; Publishing</span>
                <span class="mst-card__format mst-card__format--live">Live</span>
              </div>
              <h3 class="mst-card__title">Systematic Review &amp; Meta-Analysis</h3>
              <p class="mst-card__desc">Live, mentored training on running a systematic review from protocol through submission, built for a faster, guided publication.</p>
              <div class="mst-card__foot">
                <span class="mst-card__price">Mentored</span>
                <a href="/research-review" class="btn btn--ghost btn--sm">View Course <i data-lucide="arrow-right" width="14" height="14"></i></a>
              </div>
            </article>

            <article class="mst-card reveal" data-cat="match">
              <div class="mst-card__top">
                <span class="mst-card__cat">Application &amp; Match</span>
                <span class="mst-card__format">Recorded</span>
              </div>
              <h3 class="mst-card__title">CV &amp; ERAS Writing Masterclass</h3>
              <p class="mst-card__desc">A self-paced walkthrough of building an ERAS CV that reads clearly to program directors, taught alongside our editing service.</p>
              <div class="mst-card__foot">
                <span class="mst-card__price">Self-paced</span>
                <a href="/match-eras-cv" class="btn btn--ghost btn--sm">View Course <i data-lucide="arrow-right" width="14" height="14"></i></a>
              </div>
            </article>

            <article class="mst-card reveal" data-cat="match">
              <div class="mst-card__top">
                <span class="mst-card__cat">Application &amp; Match</span>
                <span class="mst-card__format">Recorded</span>
              </div>
              <h3 class="mst-card__title">Personal Statement Writing Course</h3>
              <p class="mst-card__desc">A structured course on drafting a personal statement that sounds like you, not a template, with examples from matched IMGs.</p>
              <div class="mst-card__foot">
                <span class="mst-card__price">Self-paced</span>
                <a href="/match-ps3x" class="btn btn--ghost btn--sm">View Course <i data-lucide="arrow-right" width="14" height="14"></i></a>
              </div>
            </article>

            <article class="mst-card reveal" data-cat="match">
              <div class="mst-card__top">
                <span class="mst-card__cat">Application &amp; Match</span>
                <span class="mst-card__format mst-card__format--live">Live</span>
              </div>
              <h3 class="mst-card__title">Interview Prep Intensive</h3>
              <p class="mst-card__desc">Live mock interviews and strategy sessions with mentors who know exactly what program directors are listening for.</p>
              <div class="mst-card__foot">
                <span class="mst-card__price">Mentored</span>
                <a href="/match-interview" class="btn btn--ghost btn--sm">View Course <i data-lucide="arrow-right" width="14" height="14"></i></a>
              </div>
            </article>

          </div>
        </div>
      </section>

      <!-- ============== WHY ONE PLATFORM ============== -->
      <section class="msp-section" aria-labelledby="whyTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Why Our Mastery</span>
            <h2 id="whyTitle" class="msp-h2">One platform, every stage of the journey</h2>
            <p class="msp-sub">Most students piece together prep from scattered resources. Our Mastery keeps exam prep, research, and application training under one mentor network.</p>
          </div>
          <div class="mst-feat-grid">
            <div class="mst-feat reveal">
              <div class="mst-feat__icon"><i data-lucide="award" width="20" height="20"></i></div>
              <p class="mst-feat__title">260+ scoring instructors</p>
              <p class="mst-feat__body">Every course is built and taught by a physician who scored 260-plus on the exam you're preparing for.</p>
            </div>
            <div class="mst-feat reveal">
              <div class="mst-feat__icon"><i data-lucide="layers" width="20" height="20"></i></div>
              <p class="mst-feat__title">One account, every course</p>
              <p class="mst-feat__body">Enroll once and move between exam prep, research, and application courses as your timeline shifts.</p>
            </div>
            <div class="mst-feat reveal">
              <div class="mst-feat__icon"><i data-lucide="compass" width="20" height="20"></i></div>
              <p class="mst-feat__title">Built for IMGs specifically</p>
              <p class="mst-feat__body">Sequencing, pacing, and examples are designed around the international medical graduate timeline, not adapted from AMG material.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ============== FAQ ============== -->
      <section class="msp-section msp-faq" id="faq" aria-labelledby="faqTitle">
        <div class="msp-wrap msp-faq__grid">
          <div class="reveal">
            <span class="msp-eyebrow">Common questions</span>
            <h2 id="faqTitle" class="msp-h2">Questions about Our Mastery</h2>
            <p class="msp-sub">
              Still unsure which track to start with? The guidance call is
              free and walks through it directly.
            </p>
            <a
              class="btn btn--outline msp-faq__cta"
              href="https://team.manikmadaan.com/guidance-call/book"
              target="_blank"
              rel="noopener noreferrer"
              >Book a Free Guidance Call</a
            >
          </div>
          <div class="accordion reveal">
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Do I need to buy courses separately, or is there a bundle?
              </button>
              <div class="accordion__body">
                Courses are available individually so you only pay for what
                you need right now. Ask on your guidance call about bundling
                an exam track with a research or application course, we can
                often put together a package.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Which course should I start with?
              </button>
              <div class="accordion__body">
                It depends on where you are in the timeline. Students earlier
                in prep usually start with a crash course or Mastery track;
                students closer to ERAS usually start with research or
                application courses. The guidance call will map this out for
                free.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Are the recorded courses updated each year?
              </button>
              <div class="accordion__body">
                Yes. Recorded courses are reviewed and refreshed against the
                current exam syllabus, so you are never studying from
                outdated content.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Can I switch between courses if my timeline changes?
              </button>
              <div class="accordion__body">
                Yes. Talk to your mentor or our team if your exam date or
                Match timeline shifts, we will help you move to the course
                that fits your new plan.
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============== FINAL CTA ============== -->
      <section class="mst-cta-wrap">
        <div class="msp-wrap">
          <div class="mst-cta-card reveal" aria-labelledby="ctaTitle">
            <span class="msp-eyebrow msp-eyebrow--light">Get started</span>
            <h2 id="ctaTitle" class="msp-h2">Ready to find your course?</h2>
            <p class="msp-sub">Book a free guidance call and we'll map your timeline, then point you to exactly the right course, or combination of courses, in Our Mastery.</p>
            <div class="msp-cta-row">
              <a class="btn btn--primary btn--xl" href="https://team.manikmadaan.com/guidance-call/book" target="_blank" rel="noopener noreferrer">Book a Free Guidance Call</a>
              <a class="btn btn--outline btn--xl" href="https://wa.me/19192015700" target="_blank" rel="noopener noreferrer">Text Us on WhatsApp</a>
            </div>
          </div>
        </div>
      </section>
    </main>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var filters = document.querySelectorAll('.mst-filter');
    var cards = document.querySelectorAll('#mstGrid .mst-card');
    filters.forEach(function (btn) {
      btn.addEventListener('click', function () {
        filters.forEach(function (b) {
          b.classList.remove('is-active');
          b.setAttribute('aria-selected', 'false');
        });
        btn.classList.add('is-active');
        btn.setAttribute('aria-selected', 'true');
        var cat = btn.getAttribute('data-filter');
        cards.forEach(function (card) {
          var show = cat === 'all' || card.getAttribute('data-cat') === cat;
          card.style.display = show ? '' : 'none';
        });
      });
    });
  });
</script>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
