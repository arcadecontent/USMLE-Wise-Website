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

    <!-- ============== RESERVE POPUP (Stripe embedded checkout via mastery.usmlewise.com) ============== -->
    <div class="rw-pay" id="rwPay" role="dialog" aria-modal="true" aria-labelledby="rwPayTitle" hidden>
      <div class="rw-pay__backdrop" data-rw-close></div>
      <div class="rw-pay__panel">
        <div class="rw-pay__head">
          <div>
            <span class="rw-pay__eyebrow">Research Wise &middot; $49 one-time</span>
            <h2 id="rwPayTitle" class="rw-pay__title">Reserve your spot</h2>
          </div>
          <button type="button" class="rw-pay__close" data-rw-close aria-label="Close">&times;</button>
        </div>
        <p class="rw-pay__status" id="rwPayStatus" aria-live="polite"></p>
        <div id="rwPayMount"></div>
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
      .rw-pay{position:fixed;inset:0;z-index:1000;display:flex;align-items:center;justify-content:center;padding:16px}
      .rw-pay[hidden]{display:none}
      .rw-pay__backdrop{position:absolute;inset:0;background:rgba(15,18,40,.55)}
      .rw-pay__panel{position:relative;width:100%;max-width:560px;max-height:calc(100vh - 32px);overflow:auto;background:var(--uw-surface,#fff);border-radius:16px;padding:22px 22px 18px;box-shadow:0 24px 60px rgba(15,18,40,.3)}
      .rw-pay__head{display:flex;align-items:flex-start;justify-content:space-between;gap:12px;margin-bottom:12px}
      .rw-pay__eyebrow{font-family:var(--font-mono);font-size:12px;letter-spacing:.08em;text-transform:uppercase;color:var(--uw-red-500)}
      .rw-pay__title{font-family:var(--font-display);font-size:28px;line-height:1.15;margin:4px 0 0;color:var(--uw-ink-900)}
      .rw-pay__close{border:0;background:var(--uw-ink-75,#f1f2f6);color:var(--uw-ink-900);width:36px;height:36px;border-radius:50%;font-size:22px;line-height:1;cursor:pointer;flex:none}
      .rw-pay__status{margin:0 0 8px;color:var(--uw-ink-600);font-size:15px}
      .rw-pay__status:empty{display:none}
      .rw-pay__status.is-error{color:var(--uw-red-700)}
      .rw-pay__done{text-align:center;padding:12px 4px 6px}
      .rw-pay__tick{width:56px;height:56px;border-radius:50%;background:var(--uw-success-500,#1f7a5a);color:#fff;font-size:30px;line-height:56px;margin:0 auto 12px}
      .rw-pay__done h3{font-family:var(--font-display);font-size:26px;margin:0 0 8px;color:var(--uw-ink-900)}
      .rw-pay__done p{color:var(--uw-ink-700);margin:0 0 16px}
      .rw-pay__fine{font-size:14px;margin-top:14px!important}
      body.rw-pay-open{overflow:hidden}
    </style>
    <script>
    (function () {
      var API = 'https://mastery.usmlewise.com/api/research-wise';
      var dlg = document.getElementById('rwPay');
      var statusEl = document.getElementById('rwPayStatus');
      var mount = document.getElementById('rwPayMount');
      var done = document.getElementById('rwPayDone');
      var checkout = null, loading = false, lastFocus = null;

      function setStatus(text, isError) {
        statusEl.textContent = text || '';
        statusEl.classList.toggle('is-error', !!isError);
      }
      function loadStripe() {
        return new Promise(function (resolve, reject) {
          if (window.Stripe) return resolve();
          var s = document.createElement('script');
          s.src = 'https://js.stripe.com/v3/';
          s.onload = resolve;
          s.onerror = function () { reject(new Error('Secure checkout could not load. Please check your connection and try again.')); };
          document.head.appendChild(s);
        });
      }
      function openDialog(e) {
        e.preventDefault();
        lastFocus = document.activeElement;
        dlg.hidden = false;
        document.body.classList.add('rw-pay-open');
        dlg.querySelector('.rw-pay__close').focus();
        if (checkout || loading || !done.hidden) return;
        loading = true;
        setStatus('Loading secure checkout…');
        fetch(API + '/session', { method: 'POST' })
          .then(function (r) { return r.json().then(function (d) { if (!r.ok) throw new Error(d.error || 'Checkout is unavailable right now.'); return d; }); })
          .then(function (d) {
            return loadStripe().then(function () {
              var sessionId = String(d.clientSecret).split('_secret_')[0];
              return window.Stripe(d.publishableKey).initEmbeddedCheckout({
                fetchClientSecret: function () { return Promise.resolve(d.clientSecret); },
                onComplete: function () { finish(sessionId); }
              });
            });
          })
          .then(function (c) { checkout = c; checkout.mount('#rwPayMount'); setStatus(''); })
          .catch(function (err) { setStatus(err.message + ' You can also message us on WhatsApp at +1 919 201 5700.', true); })
          .then(function () { loading = false; });
      }
      function finish(sessionId) {
        if (checkout) { checkout.destroy(); checkout = null; }
        mount.innerHTML = '';
        done.hidden = false;
        setStatus('');
        fetch(API + '/confirm', { method: 'POST', headers: { 'Content-Type': 'text/plain' }, body: JSON.stringify({ sessionId: sessionId }) })
          .then(function (r) { return r.json(); })
          .then(function (d) {
            if (!d.paid) return;
            if (d.email) document.getElementById('rwPayDoneText').textContent = 'Your payment is confirmed. We’ve emailed your receipt and the WhatsApp group link to ' + d.email + '.';
            if (d.groupUrl) { var g = document.getElementById('rwPayGroup'); g.href = d.groupUrl; g.hidden = false; }
          })
          .catch(function () { /* the email still arrives via Stripe's webhook */ });
      }
      function closeDialog() {
        dlg.hidden = true;
        document.body.classList.remove('rw-pay-open');
        if (lastFocus) lastFocus.focus();
      }
      document.querySelectorAll('[data-rw-reserve]').forEach(function (a) { a.addEventListener('click', openDialog); });
      dlg.querySelectorAll('[data-rw-close]').forEach(function (el) { el.addEventListener('click', closeDialog); });
      document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && !dlg.hidden) closeDialog(); });
      if (location.hash === '#reserve') document.querySelector('[data-rw-reserve]').click();
    })();
    </script>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
