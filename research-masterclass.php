<?php
$pageTitle = "Research Masterclass — How to Find a Research Idea | USMLE Wise";
$pageDescription = "Learn exactly how to complete an original research study, start to finish, in just 1 month. No institutional access or approval required. $49 one-time.";
$canonical = "https://usmlewise.com/research-masterclass";
$bodyClass = "msp";
$stylesheets = [
    "/styles/research-catalyst.css",
    "/styles/research-program.css",
    "/styles/blog.css",
    "/styles/awards-carousel.css"
];
$scripts = [
    "/js/research-catalyst.js",
    "/js/awards-carousel.js"
];
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>

      <!-- ============== HERO ============== -->
      <section class="msp-hero" aria-labelledby="heroTitle">
        <div class="msp-wrap msp-hero__grid">
          <div class="msp-hero__copy reveal">
            <span class="msp-eyebrow">Research Masterclass</span>
            <h1 id="heroTitle" class="msp-h1">Find your research idea.<br><span class="msp-h1__accent">Finish it in 1 month.</span></h1>
            <p class="msp-lede">
              I&rsquo;ll show you exactly how to complete an original research study, start to
              finish, in just 1 month. No institutional access or approval required. No cold
              emails. No waiting. Just a proven system that works &mdash; $49, one-time.
            </p>
            <div class="msp-cta-row">
              <a class="btn btn--primary btn--xl" href="#fee">Buy Now &mdash; $49</a>
              <a class="btn btn--outline btn--xl" href="/research-masterclass-module-1">
                Try Module 1 free
                <i data-lucide="arrow-right" class="ic-arrow" width="16" height="16"></i>
              </a>
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

      <!-- ============== WHAT YOU'LL LEARN ============== -->
      <section class="msp-section rp-includes" id="learn" aria-labelledby="includesTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">The masterclass</span>
            <h2 id="includesTitle" class="msp-h2">What you'll learn.</h2>
            <p class="msp-lede">
              A proven system for going from no idea to a completed original study.
            </p>
          </div>
          <div class="rp-includes__grid">

            <div class="rp-include reveal">
              <div class="rp-include__icon"><i data-lucide="lightbulb" width="18" height="18"></i></div>
              <h3 class="rp-include__head">Find a research idea</h3>
              <p>How to land on a research idea you can actually complete, instead of waiting for one to be handed to you.</p>
            </div>

            <div class="rp-include reveal">
              <div class="rp-include__icon"><i data-lucide="flag" width="18" height="18"></i></div>
              <h3 class="rp-include__head">Start to finish</h3>
              <p>Exactly how to complete an original research study, every step from the first idea to the finished study.</p>
            </div>

            <div class="rp-include reveal">
              <div class="rp-include__icon"><i data-lucide="calendar-check" width="18" height="18"></i></div>
              <h3 class="rp-include__head">In just 1 month</h3>
              <p>A system built to get your study done in one month, not stretched across a year of waiting.</p>
            </div>

            <div class="rp-include reveal">
              <div class="rp-include__icon"><i data-lucide="unlock" width="18" height="18"></i></div>
              <h3 class="rp-include__head">No institutional access</h3>
              <p>No institutional access or approval required. No cold emails, and no waiting on anyone else to get started.</p>
            </div>

          </div>
        </div>
      </section>

      <!-- ============== PRICE ============== -->
      <section class="msp-section" id="fee" aria-labelledby="feeTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Price</span>
            <h2 id="feeTitle" class="msp-h2">One payment. Instant access.</h2>
          </div>
          <div class="rc-payment reveal">
            <div class="rc-payment__inner">
              <div>
                <span class="rc-sec-label">Investment</span>
                <div class="rc-payment__price">$49</div>
                <p class="rc-payment__note">One-time payment. Pay securely with Stripe; no signup needed before payment. Your course access is emailed to the address you use at checkout. See our <a href="/refund-policy">Refund &amp; Guarantee Policy</a> for how refunds are handled.</p>
              </div>
              <form action="https://mastery.usmlewise.com/api/checkout/single-course" method="post" target="_blank" rel="noopener noreferrer">
                <input type="hidden" name="courseId" value="cmvxuhfkn00u8dn45qzdv2p96">
                <button class="btn btn--primary" data-cta="checkout" type="submit">Buy Now</button>
              </form>
            </div>
          </div>
        </div>
      </section>

      <?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/awards-carousel.php'; ?>

      <!-- ============== FAQ ============== -->
      <section class="msp-section rc-faq" id="faq" aria-labelledby="faqTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">F.A.Q</span>
            <h2 id="faqTitle" class="msp-h2">Your questions, answered.</h2>
          </div>
          <div class="accordion accordion--faq rc-faq__accordion reveal">
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                How do I get access after paying?
              </button>
              <div class="accordion__body">
                Right after payment you'll receive an email at your checkout address with your login for USMLE Wise Mastery, where the masterclass lives. If you already have a Mastery account, the course is added to it.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Do I need institutional access or approval?
              </button>
              <div class="accordion__body">
                No. The masterclass shows you how to complete an original research study without institutional access or approval, and without cold emailing anyone.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                What if I want a mentor guiding my project?
              </button>
              <div class="accordion__body">
                The masterclass is the right starting point. When you want a mentor actively involved in your specific project, our mentored programs like <a href="/research-original">Original Research</a> and <a href="/research-catalyst">Research Catalyst</a> are the next step.
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============== FINAL CTA ============== -->
      <section class="rc-cta-wrap">
        <div class="msp-wrap">
          <div class="rc-cta rc-cta-card reveal">
            <h2 class="rc-cta__head">One research idea.<br>One month. Start to finish.</h2>
            <p class="rc-cta__sub">
              Get the masterclass for $49 and start your original research study today.
            </p>
            <div class="rc-cta__actions">
              <a class="btn btn--primary btn--xl" href="#fee">Buy Now &mdash; $49</a>
              <a class="btn btn--outline btn--xl rc-cta__outline" href="https://wa.me/19192015700" target="_blank" rel="noopener noreferrer">Text Us on WhatsApp</a>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
