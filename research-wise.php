<?php
$pageTitle = "Research Wise — Live Sessions for First-Time Researchers | USMLE Wise";
$pageDescription = "Your first step into research. Three live Sunday sessions covering case reports and case series, original studies, and systematic reviews and meta-analyses, for $49, one-time.";
$canonical = "https://usmlewise.com/research-wise";
$bodyClass = "msp";
$stylesheets = [
    "/styles/research-catalyst.css",
    "/styles/research-wise.css",
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
            <span class="rc-hero__badge">Live &middot; 3 Sunday Sessions</span>
            <h1 id="heroTitle" class="msp-h1">Never done research?<br>This is <span class="msp-h1__accent">where you start.</span></h1>
            <p class="msp-lede">
              Three live Sunday sessions for medical students and graduates who
              have never done research and don't know where to begin: case
              reports and case series, original studies, and systematic reviews
              and meta-analyses. $49, one-time, for all three.
            </p>
            <div class="msp-cta-row">
              <a
                class="btn btn--primary btn--xl"
                href="#reserve"
                data-rw-reserve
                >Reserve Your Spot</a
              >
              <a class="btn btn--outline btn--xl" href="#curriculum">
                See what's covered
                <i data-lucide="arrow-down" class="ic-arrow" width="16" height="16"></i>
              </a>
            </div>
            <p class="rw-free-module"><a href="/research-masterclass-module-1">Not sure yet? Try Module 1 free <span aria-hidden="true">&rarr;</span></a></p>
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

      <!-- ============== CURRICULUM: THREE LIVE SESSIONS ============== -->
      <section class="msp-section rc-curriculum" id="curriculum" aria-labelledby="curriculumTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Live &middot; 3 Sunday sessions</span>
            <h2 id="curriculumTitle" class="msp-h2">Everything you need to start, in three sessions.</h2>
            <p class="msp-sub">Each session is taught live by a mentor who has done it, built to leave you with a concrete next step toward your first publication.</p>
          </div>

          <!-- The three sessions -->
          <div class="rc-pub-types reveal">
            <div class="rc-pub-types__grid">
              <div class="rc-pub-type rc-pub-type--blue">
                <div class="rc-pub-type__icon-wrap">
                  <i data-lucide="file-text" width="18" height="18"></i>
                </div>
                <h3 class="rc-pub-type__head">Case Reports &amp; Case Series</h3>
                <p>With Shivani Ravipati. Learn to spot a publishable case, build it from what you already have access to, and get it ready to submit.</p>
              </div>
              <div class="rc-pub-type rc-pub-type--emerald">
                <div class="rc-pub-type__icon-wrap">
                  <i data-lucide="flask-conical" width="18" height="18"></i>
                </div>
                <h3 class="rc-pub-type__head">Original Studies</h3>
                <p>With Muhammad Ahmad Barakat. Design and run a first original study, including how to work with the data you can realistically access as a student.</p>
              </div>
              <div class="rc-pub-type rc-pub-type--violet">
                <div class="rc-pub-type__icon-wrap">
                  <i data-lucide="list-checks" width="18" height="18"></i>
                </div>
                <h3 class="rc-pub-type__head">Systematic Reviews &amp; Meta-Analyses</h3>
                <p>With Muhammad Ahmad Barakat. Pool existing evidence into a rigorous review, a strong first publication that needs no new data collection.</p>
              </div>
            </div>
            <p class="rw-next-note">Sunday, November 15, 22, and 29. Enrollment is open to everyone.</p>
          </div>

          <!-- Price -->
          <div class="rc-payment reveal">
            <div class="rc-payment__inner">
              <div>
                <span class="rc-sec-label">Investment</span>
                <div class="rc-payment__price">$49</div>
                <p class="rc-payment__note">One-time payment for all three live Sunday sessions. See our <a href="/refund-policy">Refund &amp; Guarantee Policy</a> for how refunds are handled.</p>
              </div>
              <a
                class="btn btn--primary"
                href="#reserve"
                data-rw-reserve
                >Reserve Your Spot</a
              >
            </div>
          </div>

        </div>
      </section>

      <!-- ============== WHO IT'S FOR ============== -->
      <section class="msp-section rc-for-whom" aria-labelledby="forWhomTitle">
        <div class="msp-wrap">
          <div class="rc-for-whom__inner">
            <div class="rc-for-whom__copy reveal">
              <span class="msp-eyebrow">Built for</span>
              <h2 id="forWhomTitle" class="msp-h2">Your very first step into research, not your tenth.</h2>
              <p class="msp-lede">
                Research Wise is for people who haven't started yet. If you already
                have a project running, our mentored programs like
                <a href="/research-original">Original Research</a> or
                <a href="/research-catalyst">Research Catalyst</a> are built for that stage.
              </p>
            </div>
            <ol class="rc-for-whom__list">
              <li class="reveal">
                <span class="rc-whom-num">01</span>
                <span class="rc-whom-item">You've never done research and don't know where to begin</span>
              </li>
              <li class="reveal">
                <span class="rc-whom-num">02</span>
                <span class="rc-whom-item">You want live teaching from someone who's done it, not a recorded course</span>
              </li>
              <li class="reveal">
                <span class="rc-whom-num">03</span>
                <span class="rc-whom-item">You don't have a lab, a mentor, or a dataset, and that's fine</span>
              </li>
              <li class="reveal">
                <span class="rc-whom-num">04</span>
                <span class="rc-whom-item">You want one clear next step, not a pile of unconnected videos</span>
              </li>
            </ol>
          </div>
        </div>
      </section>

      <!-- ============== MENTORS ============== -->
      <section class="msp-section rc-mentors" id="mentors" aria-labelledby="mentorsTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Who's teaching</span>
            <h2 id="mentorsTitle" class="msp-h2">Researchers who've published. Now helping you do the same.</h2>
          </div>
          <div class="rc-mtr-list">

            <article class="rc-mtr reveal">
              <div class="rc-mtr__photo">
                <img src="/assets/Photos/Team-Members/Kaushik-Sreeram.webp" alt="Kaushik Sreeram" loading="lazy" decoding="async" />
              </div>
              <div class="rc-mtr__body">
                <div class="rc-mtr__header">
                  <span class="rc-mtr__role">Research Head</span>
                  <h3 class="rc-mtr__name">Dr. Kaushik Sreerama Reddy, MBBS</h3>
                  <span class="rc-mtr__prog">Chief Scientific Officer &amp; CRIST Project Lead &middot; USMLE Wise Research</span>
                </div>
                <ul class="rc-mtr__creds">
                  <li>Chief Scientific Officer &amp; CRIST Project Lead, USMLE Wise Research</li>
                  <li>Lead Investigator, Myositis Clinical Trials Consortium</li>
                  <li>Study Lead, MyPACER Study</li>
                </ul>
              </div>
            </article>

            <article class="rc-mtr reveal">
              <div class="rc-mtr__photo">
                <img src="/assets/Photos/Team-Members/shivani.jpeg" alt="Shivani Ravipati" loading="lazy" decoding="async" />
              </div>
              <div class="rc-mtr__body">
                <div class="rc-mtr__header">
                  <span class="rc-mtr__role">Beginner Series &middot; Case Reports &amp; Case Series</span>
                  <h3 class="rc-mtr__name">Shivani Ravipati</h3>
                  <span class="rc-mtr__prog">Research &amp; Publications Mentor</span>
                </div>
                <ul class="rc-mtr__creds">
                  <li>5 first-author publications &middot; 1 AHA poster presentation &middot; 8+ co-authored papers</li>
                  <li>IRB-approved clinical trial lead for PRP research</li>
                  <li>Actively guiding IMGs through research, steps and ERAS applications</li>
                </ul>
              </div>
            </article>

            <article class="rc-mtr reveal">
              <div class="rc-mtr__photo">
                <img src="/assets/Photos/Team-Members/Muhammad-Barakat-Headshot.png" alt="Muhammad Ahmad Barakat" loading="lazy" decoding="async" />
              </div>
              <div class="rc-mtr__body">
                <div class="rc-mtr__header">
                  <span class="rc-mtr__role">Beginner Series &middot; Original Studies, Reviews &amp; Meta-Analyses</span>
                  <h3 class="rc-mtr__name">Muhammad Ahmad Barakat</h3>
                  <span class="rc-mtr__prog">Medical Student, Caucasus International University</span>
                </div>
                <ul class="rc-mtr__creds">
                  <li>7 published papers &middot; 2 conference papers &middot; 7 co-author posters</li>
                  <li>200+ students guided to publication across MEDICA SRA &amp; MEDMARK MRMS programs</li>
                  <li>APA PsychSIGN International Student Liaison Research Chair 2026&ndash;2027</li>
                </ul>
              </div>
            </article>

          </div>
        </div>
      </section>

      <!-- ============== FAQ ============== -->
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/awards-carousel.php'; ?>

      <section class="msp-section rc-faq" id="faq" aria-labelledby="faqTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">F.A.Q</span>
            <h2 id="faqTitle" class="msp-h2">Your questions, answered.</h2>
          </div>
          <div class="accordion accordion--faq rc-faq__accordion reveal">
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Do I need any research experience to join?
              </button>
              <div class="accordion__body">
                No. Research Wise is built specifically for medical students and graduates who have never done research and don't know where to start. Come with a topic you're curious about; you don't need a plan yet.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                What does it cost?
              </button>
              <div class="accordion__body">
                $49, one-time, for all three live Sunday sessions. See our <a href="/refund-policy">Refund &amp; Guarantee Policy</a> for how refunds are handled.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                How is this different from Research Cohort Access?
              </button>
              <div class="accordion__body">
                Research Wise is the live starting point for people who haven't done research before. <a href="/research-cohort">Research Cohort Access</a> is a self-paced library for once you already understand the basics and are working on a real project.
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                Can I join if I already have a research project running?
              </button>
              <div class="accordion__body">
                Research Wise is built for people who haven't started yet. If you already have a project running, <a href="/research-original">Original Research</a> or <a href="/research-catalyst">Research Catalyst</a> put a mentor directly on that work.
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============== FINAL CTA ============== -->
      <section class="rc-cta-wrap">
        <div class="msp-wrap">
          <div class="rc-cta rc-cta-card reveal">
            <h2 class="rc-cta__head">Your first step into research<br>starts this November.</h2>
            <p class="rc-cta__sub">
              Reserve your spot in three live Sunday sessions starting November
              15. No research experience needed, just a willingness to start.
            </p>
            <div class="rc-cta__actions">
              <a
                class="btn btn--primary btn--xl"
                href="#reserve"
                data-rw-reserve
                >Reserve Your Spot</a
              >
              <a class="btn btn--outline btn--xl rc-cta__outline" href="https://wa.me/19192015700" target="_blank" rel="noopener noreferrer">Text Us on WhatsApp</a>
            </div>
          </div>
        </div>
      </section>

    </main>

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
      .rw-free-module{margin:14px 0 0;font-size:15px}
      .rw-free-module a{color:var(--uw-blue-600);font-weight:600;text-decoration:none}
      .rw-free-module a:hover{text-decoration:underline}
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
          cardNumber = elements.create('cardNumber', { style: CARD_STYLE, showIcon: true, placeholder: '1234 1234 1234 1234' });
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
