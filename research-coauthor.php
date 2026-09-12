<?php
$pageTitle = "Get Your Research Paper Published — Co-Author to Lead Author | USMLE Wise";
$pageDescription = "Get published as a co-author or lead author on a mentor-run research project, with an optional conference presentation. PubMed-indexed target. $300 to $1,500.";
$canonical = "https://usmlewise.com/research-coauthor";
$bodyClass = "msp";
$stylesheets = [
    "/styles/research-catalyst.css",
    "/styles/research-program.css"
];
$scripts = [
    "/js/research-catalyst.js"
];
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>

<!-- ============== HERO ============== -->
      <section class="msp-hero" aria-labelledby="heroTitle">
        <div class="msp-wrap msp-hero__grid">
          <div class="msp-hero__copy reveal">
            <h1 id="heroTitle" class="msp-h1">Get published.<br><span class="msp-h1__accent">Pick your role.</span></h1>
            <p class="msp-lede">
              Get listed as an author on a paper submitted to a PubMed-indexed journal,
              matched to a research project and mentor. Choose how much of the manuscript
              you own: a defined contribution as co-author, the lead-author role, or lead
              author plus a conference presentation.
            </p>
            <div class="msp-cta-row">
              <a
                class="btn btn--primary btn--xl"
                href="https://team.manikmadaan.com/guidance-call/book"
                target="_blank"
                rel="noopener noreferrer"
                >Book a Free Call</a
              >
              <a class="btn btn--outline btn--xl" href="#tiers">
                Compare the tiers
                <i data-lucide="arrow-down" class="ic-arrow" width="16" height="16"></i>
              </a>
            </div>
          </div>

          <div class="msp-hero__frame-wrap">
            <div class="msp-hero__frame reveal">
              <picture>
                <source srcset="/assets/Photos/doctors-day-cute-young-handsome-man-lab-coat-glasses-writing-notebook.webp" type="image/webp">
                <img src="/assets/Photos/doctors-day-cute-young-handsome-man-lab-coat-glasses-writing-notebook.jpg" alt="Physician in lab coat writing in a notebook" fetchpriority="high" decoding="async" />
              </picture>
            </div>
            <div class="msp-float-note" aria-hidden="true">
              <span class="msp-float-note__num">95<small>%</small></span>
              <span class="msp-float-note__label">Match rate</span>
              <span class="msp-float-note__sub">340+ students &middot; 4.9 rating</span>
            </div>
          </div>

        </div>

        <div class="msp-bar msp-wrap" aria-label="Track record">
          <div class="msp-bar__inner">
            <div class="msp-stat reveal">
              <b data-count="90" data-suffix="+">90+</b>
              <span>Students &amp; professionals guided</span>
            </div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal">
              <b data-count="30" data-suffix="+">30+</b>
              <span>Publications &amp; presentations</span>
            </div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal">
              <b data-count="10" data-suffix="+">10+</b>
              <span>Active projects running</span>
            </div>
            <div class="msp-divider" aria-hidden="true"></div>
            <div class="msp-stat reveal">
              <b data-count="65" data-suffix="+">65+</b>
              <span>Projects mentored</span>
            </div>
          </div>
        </div>
      </section>

      <!-- ============== WHAT'S THE SAME ============== -->
      <section class="msp-section rp-includes" id="includes" aria-labelledby="includesTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Every tier</span>
            <h2 id="includesTitle" class="msp-h2">What's the same across every role.</h2>
            <p class="msp-lede">
              The role and the fee change. These three don't.
            </p>
          </div>
          <div class="rp-includes__grid">

            <div class="rp-include reveal">
              <div class="rp-include__icon"><i data-lucide="users" width="18" height="18"></i></div>
              <h3 class="rp-include__head">Matched to a Research Project</h3>
              <p>You're matched to a research project and mentor instead of having to find your own topic and dataset.</p>
            </div>

            <div class="rp-include reveal">
              <div class="rp-include__icon"><i data-lucide="user-check" width="18" height="18"></i></div>
              <h3 class="rp-include__head">Mentor-Guided Work</h3>
              <p>Your mentor reviews your work, gives feedback, and keeps you on schedule with the rest of the project.</p>
            </div>

            <div class="rp-include reveal">
              <div class="rp-include__icon"><i data-lucide="book-open" width="18" height="18"></i></div>
              <h3 class="rp-include__head">PubMed-Indexed Target</h3>
              <p>Every project targets a PubMed-indexed journal from the start, not a predatory or pay-to-publish outlet.</p>
            </div>

          </div>
        </div>
      </section>

      <!-- ============== TIERS ============== -->
      <section class="msp-section" id="tiers" aria-labelledby="tiersTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Pick your role</span>
            <h2 id="tiersTitle" class="msp-h2">Three ways to get published.</h2>
            <p class="msp-lede">
              Your author position is agreed upfront, before you start, so there's no
              ambiguity about what you're earning.
            </p>
          </div>
          <div class="rc-tiers">

            <div class="rc-tier reveal">
              <span class="rc-tier__name">Co-Author</span>
              <div class="rc-tier__price">$300</div>
              <p class="rc-tier__desc">A defined piece of a research project, scoped to earn a real co-authorship.</p>
              <ul class="rc-tier__list">
                <li>A specific, meaningful contribution: data extraction, part of the literature review, or a results section</li>
                <li>Assigned and agreed before you start</li>
                <li>12&ndash;16 weeks</li>
              </ul>
              <a href="https://team.manikmadaan.com/guidance-call/book" class="btn btn--outline btn--sm" target="_blank" rel="noopener noreferrer">Book a Free Call</a>
            </div>

            <div class="rc-tier rc-tier--featured reveal">
              <span class="rc-tier__badge">Most ownership</span>
              <span class="rc-tier__name">Lead Author</span>
              <div class="rc-tier__price">$800</div>
              <p class="rc-tier__desc">Real ownership of the manuscript, without having to originate the topic or dataset yourself.</p>
              <ul class="rc-tier__list">
                <li>Write the majority of the manuscript yourself</li>
                <li>Coordinate with any co-authors on the project</li>
                <li>More 1:1 mentor time than Co-Author</li>
                <li>12&ndash;16 weeks</li>
              </ul>
              <a href="https://team.manikmadaan.com/guidance-call/book" class="btn btn--primary btn--sm" target="_blank" rel="noopener noreferrer">Book a Free Call</a>
            </div>

            <div class="rc-tier reveal">
              <span class="rc-tier__name">Lead Author + Conference</span>
              <div class="rc-tier__price">$1,500</div>
              <p class="rc-tier__desc">Everything in Lead Author, with the same project also adapted into a conference abstract.</p>
              <ul class="rc-tier__list">
                <li>Everything in Lead Author</li>
                <li>Conference abstract preparation and submission</li>
                <li>Presentation coaching if your abstract is accepted</li>
                <li>12&ndash;16 weeks, plus the conference cycle</li>
              </ul>
              <a href="https://team.manikmadaan.com/guidance-call/book" class="btn btn--outline btn--sm" target="_blank" rel="noopener noreferrer">Book a Free Call</a>
            </div>

          </div>
        </div>
      </section>

      <!-- ============== FAQ ============== -->
      <section class="msp-section rc-faq" id="faq" aria-labelledby="faqTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">F.A.Q</span>
            <h2 id="faqTitle" class="msp-h2">Your questions, answered.</h2>
          </div>
          <div class="accordion rc-faq__accordion reveal">
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Am I just paying to have my name added to a paper?
              </button>
              <div class="accordion__body">
                No. Every role on our projects, at every tier, does real, substantive work; the fee covers your placement on the project and your mentor's guidance through it, not the byline itself. We structure every position to meet ICMJE authorship standards. You earn the credit by doing the work.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Which journals do these papers go to?
              </button>
              <div class="accordion__body">
                Every project targets a PubMed-indexed journal appropriate to the study type and specialty. We do not use predatory or pay-to-publish outlets.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                How is this different from Original Research?
              </button>
              <div class="accordion__body">
                <a href="/research-original">Original Research</a> builds a project around your own idea, from concept to publication, with you as first author. All three roles here match you to a project instead: a faster, lower-cost way to add a genuine publication line.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                What if I'd rather write my own systematic review or meta-analysis instead of being matched to a project?
              </button>
              <div class="accordion__body">
                That's a different path from the roles on this page; it means originating your own topic instead of being matched to one. Raise it with your mentor on the guidance call and they'll advise on the best fit for your timeline and goals.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Is the conference guaranteed to accept my abstract?
              </button>
              <div class="accordion__body">
                This applies to the Lead Author + Conference tier. No conference guarantees acceptance of any submission, and we won't tell you otherwise. What we guarantee is the work: a properly prepared abstract submitted to a conference genuinely relevant to your project. If it isn't accepted at the first venue, your mentor will help you target another within your program timeline.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Do I have to travel to present?
              </button>
              <div class="accordion__body">
                Most conferences require you to attend in person to present, though some accept virtual or e-poster formats. Travel and registration costs aren't included in the Lead Author + Conference fee; your mentor will tell you what to expect for the specific conference once your abstract is accepted.
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============== FINAL CTA ============== -->
      <section class="rc-cta-wrap">
        <div class="msp-wrap">
          <div class="rc-cta reveal">
            <span class="msp-eyebrow msp-eyebrow--light">Start your publication line</span>
            <h2 class="rc-cta__head">Your published paper<br>starts with one call.</h2>
            <p class="rc-cta__sub">
              Book a free 30-minute session. We'll match you to a project, walk
              through the tiers, and set expectations before you commit.
            </p>
            <div class="rc-cta__actions">
              <a
                class="btn btn--primary btn--lg"
                href="https://team.manikmadaan.com/guidance-call/book"
                target="_blank"
                rel="noopener noreferrer"
                >Book a Free Guidance Call</a
              >
              <a class="btn--outline-light btn--lg" href="/research">Back to Research</a>
            </div>
            <p class="rc-cta__trust">Free 30-minute call. No commitment.</p>
          </div>
        </div>
      </section>

    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
