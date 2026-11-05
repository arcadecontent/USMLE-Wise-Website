<?php
$pageTitle = "Research for USMLE: Start Research With No Experience | Research Wise";
$pageDescription = "Three live Sundays to your first case report, study or review. Notes, PPTs and a certificate included. Built for medical students and IMGs who have never done research.";
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

/* ---------------------------------------------------------------------------
   FAQ — one source of truth for the accordion and the FAQPage structured data
   further down, so the two can never drift apart. Answers may carry links.
   --------------------------------------------------------------------------- */
$rwFaqs = [
    [
        'q' => 'What do I get?',
        'a' => 'A live 3-hour mentor session every Sunday, structured notes and PPTs, a certificate of completion, a WhatsApp group and a concrete next step.',
    ],
    [
        'q' => 'How long is each session?',
        'a' => 'Three hours, live, on Sundays at 10 AM EST (19:00 Tbilisi).',
    ],
    [
        'q' => 'Do I need any research experience to join?',
        'a' => "No. Research Wise is built specifically for medical students and graduates who have never done research and don't know where to start. Come with a topic you're curious about; you don't need a plan yet.",
    ],
    [
        'q' => 'Will I get a certificate?',
        'a' => 'Yes, when you finish all three sessions.',
    ],
    [
        'q' => 'Does this guarantee a publication?',
        'a' => 'No. You leave with the skills and a clear next step, and acceptance depends on the journal.',
    ],
    [
        'q' => 'Is research important for USMLE?',
        'a' => "Research strengthens an IMG's residency application, and starting early gives you more time to finish a project.",
    ],
    [
        'q' => 'How do I publish a case report as a medical student?',
        'a' => 'You choose a case, outline it and submit it to a journal. Session 1 walks you through it step by step.',
    ],
    [
        'q' => 'What does it cost?',
        'a' => '$49, one-time, for all three live Sunday sessions. See our <a href="/refund-policy">Refund &amp; Guarantee Policy</a> for how refunds are handled.',
    ],
    [
        'q' => 'How is this different from Research Cohort Access?',
        'a' => 'Research Wise is the live starting point for people who haven\'t done research before. <a href="/research-cohort">Research Cohort Access</a> is a self-paced library for once you already understand the basics and are working on a real project.',
    ],
    [
        'q' => 'Can I join if I already have a research project running?',
        'a' => "Research Wise is built for people who haven't started yet. If you already have a project running, <a href=\"/research-original\">Original Research</a> or <a href=\"/research-catalyst\">Research Catalyst</a> put a mentor directly on that work.",
    ],
];

/* ---------------------------------------------------------------------------
   Testimonials — layout from Chrisann, content from Barakat.

   Both lists are empty until that content lands, and the whole section is
   skipped while they are, so the page is safe to ship in the meantime.

   Screenshots: drop the cropped images (no phone numbers, emails or other
   private details) into /assets/Testimonials/Photos/Research-Wise/ and add a
   row each. 'cap' is the caption shown under the tile: first name or initials,
   university or country, and one true line on what the student did.

       ['img' => '/assets/Testimonials/Photos/Research-Wise/01.webp',
        'alt' => 'WhatsApp message from a Research Wise student',
        'cap' => 'A. R., Georgia — wrote her first case report'],

   Videos: 30 to 60 seconds, the student's face and voice, captioned, uploaded
   to YouTube. 'yt' is the 11-character video id, 'thumb' a face thumbnail.

       ['yt' => 'xxxxxxxxxxx', 'thumb' => '/assets/.../01-face.webp',
        'name' => 'A. R.', 'line' => 'Wrote her first case report'],

   Consent: every testimonial here needs a written message from the student
   allowing their words, name or initials and photo on the page, kept in the
   shared folder. Remove a testimonial the same day consent is withdrawn.
   --------------------------------------------------------------------------- */
$rwShots  = [];
$rwVideos = [];

/* Award carousel renders nothing when the CRM has no published awards; this
   keeps the "Reserve your spot" button that follows it from being stranded. */
require_once $_SERVER['DOCUMENT_ROOT'] . '/data/posts.php';
$rwHasAwards = !empty(usmlewise_crm_award_posts());

include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>

      <!-- ============== HERO ============== -->
      <section class="msp-hero" aria-labelledby="heroTitle">
        <div class="msp-wrap msp-hero__grid">
          <div class="msp-hero__copy reveal">
            <h1 id="heroTitle" class="msp-h1">Master case reports, original studies, systematic reviews and meta-analyses <span class="msp-h1__accent">in just 3 days of live training.</span></h1>
            <p class="msp-lede">
              A 9-hour live workshop taught from the basics by mentors who
              publish. One 3-hour session every Sunday for 3 weeks.
            </p>
            <div class="msp-cta-row">
              <a
                class="btn btn--primary btn--xl"
                href="#reserve"
                data-rw-reserve
                >Reserve Your Spot</a
              >
              <a class="btn btn--outline btn--xl" href="https://wa.me/19192015700" target="_blank" rel="noopener noreferrer">Text Us on WhatsApp</a>
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

      <!-- ============== WHAT YOU GET ============== -->
      <section class="msp-section rw-get" id="what-you-get" aria-labelledby="getTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Included with your spot</span>
            <h2 id="getTitle" class="msp-h2">What you get.</h2>
          </div>

          <div class="rw-get__grid">
            <div class="rw-get-card reveal">
              <span class="rw-get-card__icon"><i data-lucide="video" width="18" height="18"></i></span>
              <h3 class="rw-get-card__head">Live 3-hour mentor session</h3>
              <p>Every Sunday, with a mentor who has done the work.</p>
            </div>
            <div class="rw-get-card reveal">
              <span class="rw-get-card__icon"><i data-lucide="file-text" width="18" height="18"></i></span>
              <h3 class="rw-get-card__head">Structured notes</h3>
              <p>Clear notes for every session to come back to.</p>
            </div>
            <div class="rw-get-card reveal">
              <span class="rw-get-card__icon"><i data-lucide="presentation" width="18" height="18"></i></span>
              <h3 class="rw-get-card__head">Structured PPTs</h3>
              <p>The slides from every session.</p>
            </div>
            <div class="rw-get-card reveal">
              <span class="rw-get-card__icon"><i data-lucide="award" width="18" height="18"></i></span>
              <h3 class="rw-get-card__head">Certificate of completion</h3>
              <p>For finishing all three sessions.</p>
            </div>
            <div class="rw-get-card reveal">
              <span class="rw-get-card__icon"><i data-lucide="message-circle" width="18" height="18"></i></span>
              <h3 class="rw-get-card__head">WhatsApp group</h3>
              <p>Ask questions and stay in touch with other first-time researchers.</p>
            </div>
            <div class="rw-get-card reveal">
              <span class="rw-get-card__icon"><i data-lucide="target" width="18" height="18"></i></span>
              <h3 class="rw-get-card__head">A concrete next step</h3>
              <p>You leave knowing what to do next toward your first publication.</p>
            </div>
          </div>

          <div class="rw-cta-row reveal">
            <a class="btn btn--primary btn--lg" href="#reserve" data-rw-reserve>Reserve your spot</a>
          </div>
        </div>
      </section>

      <!-- ============== CURRICULUM: WHAT HAPPENS EACH DAY ============== -->
      <section class="msp-section rc-curriculum" id="curriculum" aria-labelledby="curriculumTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">What happens each day</span>
            <h2 id="curriculumTitle" class="msp-h2">3 Sundays. 3 types of paper. 9 live hours.</h2>
          </div>

          <!-- The three sessions -->
          <div class="rc-pub-types reveal">
            <div class="rc-pub-types__grid">
              <div class="rc-pub-type rc-pub-type--blue">
                <div class="rc-pub-type__icon-wrap">
                  <i data-lucide="file-text" width="18" height="18"></i>
                </div>
                <span class="rw-session__meta">Day 1 &middot; Sun, Nov 15<br>10 AM to 1 PM EST</span>
                <h3 class="rc-pub-type__head">Master case reports and case series</h3>
                <p class="rw-session__with">With Dr. Shivani Ravipati</p>
                <p>Go from zero to your first case report, including how a case report is built section by section.</p>
                <p class="rw-session__leave"><strong>You leave with:</strong> the step-by-step process to publish your first case report.</p>
              </div>
              <div class="rc-pub-type rc-pub-type--emerald">
                <div class="rc-pub-type__icon-wrap">
                  <i data-lucide="flask-conical" width="18" height="18"></i>
                </div>
                <span class="rw-session__meta">Day 2 &middot; Sun, Nov 22<br>10 AM to 1 PM EST</span>
                <h3 class="rc-pub-type__head">Master original studies</h3>
                <p class="rw-session__with">With Dr. Shivani Ravipati and Dr. Kaushik Sreeram</p>
                <p>Design your first original study from scratch, using data you can actually get as a student.</p>
                <p class="rw-session__leave"><strong>You leave with:</strong> a first study design you can run with data you can easily reach.</p>
              </div>
              <div class="rc-pub-type rc-pub-type--violet">
                <div class="rc-pub-type__icon-wrap">
                  <i data-lucide="list-checks" width="18" height="18"></i>
                </div>
                <span class="rw-session__meta">Day 3 &middot; Sun, Nov 29<br>10 AM to 1 PM EST</span>
                <h3 class="rc-pub-type__head">Master systematic reviews and meta-analyses</h3>
                <p class="rw-session__with">With Muhammad Ahmad Barakat</p>
                <p>Go from a review question to a finished systematic review and meta-analysis.</p>
                <p class="rw-session__leave"><strong>You leave with:</strong> the step-by-step plan to publish your first systematic review and meta-analysis.</p>
              </div>
            </div>
            <p class="rw-next-note">Every day ends with live Q&amp;A.</p>
          </div>

          <div class="rw-cta-row reveal">
            <a class="btn btn--primary btn--lg" href="#reserve" data-rw-reserve>Reserve my spot &middot; $49</a>
          </div>

        </div>
      </section>

      <!-- ============== WORKSHOP DETAILS ============== -->
      <section class="msp-section rw-details" id="details" aria-labelledby="detailsTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Workshop details</span>
            <h2 id="detailsTitle" class="msp-h2">Sessions start at 10 AM Eastern, every Sunday.</h2>
          </div>

          <dl class="rw-facts reveal">
            <div class="rw-fact">
              <dt>Dates</dt>
              <dd>3 Sundays in a row: November 15, November 22 and November 29, 2026</dd>
            </div>
            <div class="rw-fact">
              <dt>Time</dt>
              <dd>10 AM to 1 PM EST, each Sunday</dd>
            </div>
            <div class="rw-fact">
              <dt>Total</dt>
              <dd>9 hours of live teaching</dd>
            </div>
            <div class="rw-fact">
              <dt>Platform</dt>
              <dd>Live on Zoom</dd>
            </div>
          </dl>

          <div class="rw-tz reveal">
            <table class="rw-tz__table">
              <caption class="rw-tz__cap">Session times in your city</caption>
              <thead>
                <tr><th scope="col">Your city</th><th scope="col">Starts</th><th scope="col">Ends</th></tr>
              </thead>
              <tbody>
                <tr><th scope="row">New York (EST)</th><td>10:00 AM</td><td>1:00 PM</td></tr>
                <tr><th scope="row">London (GMT)</th><td>3:00 PM</td><td>6:00 PM</td></tr>
                <tr><th scope="row">Dubai (GST)</th><td>7:00 PM</td><td>10:00 PM</td></tr>
                <tr><th scope="row">Tbilisi (GET)</th><td>7:00 PM</td><td>10:00 PM</td></tr>
                <tr><th scope="row">Pakistan (PKT)</th><td>8:00 PM</td><td>11:00 PM</td></tr>
                <tr><th scope="row">India (IST)</th><td>8:30 PM</td><td>11:30 PM</td></tr>
                <tr><th scope="row">Nepal (NPT)</th><td>8:45 PM</td><td>11:45 PM</td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>

      <!-- ============== WHO'S TEACHING: HOST + MENTORS ============== -->
      <section class="msp-section rc-mentors" id="mentors" aria-labelledby="mentorsTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal" style="text-align:center;margin-inline:auto">
            <span class="msp-eyebrow" style="justify-content:center">Who's teaching</span>
            <h2 id="mentorsTitle" class="msp-h2" style="margin-inline:auto">Research for USMLE and residency, taught by the people who publish.</h2>
          </div>

          <!-- Host -->
          <div class="rw-host reveal">
            <div class="rw-host__photo">
              <img src="/assets/Photos/Team-Members/Kaushik-Sreeram-Headshot.webp"
                   alt="Dr. Kaushik Sreerama Reddy, Co-Founder and Chief Scientific Officer at USMLE Wise"
                   width="320" height="320" loading="lazy" decoding="async" />
            </div>
            <div class="rw-host__name">Dr. Kaushik Sreerama Reddy, MBBS</div>
            <div class="rw-host__role">Co-Founder &amp; Chief Scientific Officer, USMLE Wise</div>

            <ul class="rw-host__creds">
              <li>
                <span class="rw-host__cred-role">Co-Founder &amp; Chief Scientific Officer</span>
                <span class="rw-host__cred-org">USMLE Wise</span>
              </li>
              <li>
                <span class="rw-host__cred-role">CRIST Project Lead</span>
                <span class="rw-host__cred-org">USMLE Wise Research</span>
              </li>
              <li>
                <span class="rw-host__cred-role">Lead Investigator</span>
                <span class="rw-host__cred-org">Myositis Clinical Trials Consortium</span>
              </li>
              <li>
                <span class="rw-host__cred-role">Study Lead</span>
                <span class="rw-host__cred-org">MyPACER Study</span>
              </li>
            </ul>

            <blockquote class="rw-host__note">
              <p>Most students are told to do research and never shown where to begin. I built Research Wise for that moment. Over three Sundays we take you from a blank page to a case report, a study design or a review question, and you leave knowing exactly what to do next. If you have never done research, this is the place to start.</p>
            </blockquote>

            <div class="rw-cta-row">
              <a class="btn btn--primary btn--lg" href="#reserve" data-rw-reserve>Reserve your spot</a>
            </div>
          </div>

          <!-- The mentors teaching the sessions -->
          <h3 class="rw-mtr-sub reveal">Teaching the sessions</h3>
          <div class="rc-mtr-list">

            <article class="rc-mtr reveal">
              <div class="rc-mtr__photo">
                <img src="/assets/Photos/Team-Members/shivani.jpeg" alt="Shivani Ravipati, Research and Publications Mentor at USMLE Wise" loading="lazy" decoding="async" />
              </div>
              <div class="rc-mtr__body">
                <div class="rc-mtr__header">
                  <span class="rc-mtr__role">Beginner Series &middot; Case Reports &amp; Case Series</span>
                  <h4 class="rc-mtr__name">Shivani Ravipati</h4>
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
                <img src="/assets/Photos/Team-Members/Muhammad-Barakat-Headshot.png" alt="Muhammad Ahmad Barakat, Lead Principal Research Fellow at USMLE Wise" loading="lazy" decoding="async" />
              </div>
              <div class="rc-mtr__body">
                <div class="rc-mtr__header">
                  <span class="rc-mtr__role">Beginner Series &middot; Original Studies, Reviews &amp; Meta-Analyses</span>
                  <h4 class="rc-mtr__name">Muhammad Ahmad Barakat</h4>
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

      <!-- ============== RECOGNITION ============== -->
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/awards-carousel.php'; ?>
      <?php if ($rwHasAwards): ?>
      <div class="msp-wrap">
        <div class="rw-cta-row rw-cta-row--tight reveal">
          <a class="btn btn--primary btn--lg" href="#reserve" data-rw-reserve>Reserve your spot</a>
        </div>
      </div>
      <?php endif; ?>

      <?php if ($rwShots || $rwVideos): ?>
      <!-- ============== TESTIMONIALS ============== -->
      <section class="msp-section rw-tst" id="testimonials" aria-labelledby="tstTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal" style="text-align:center;margin-inline:auto">
            <span class="msp-eyebrow" style="justify-content:center">Student stories</span>
            <h2 id="tstTitle" class="msp-h2" style="margin-inline:auto">Research for IMGs: what our students say.</h2>
            <p class="rw-tst__by">Mentored by Dr. Kaushik Sreerama Reddy.</p>
          </div>

          <?php if ($rwShots): ?>
          <ul class="rw-tst__wall reveal">
            <?php foreach ($rwShots as $shot): ?>
            <li class="rw-tst__tile">
              <img src="<?php echo htmlspecialchars($shot['img']); ?>"
                   alt="<?php echo htmlspecialchars($shot['alt']); ?>"
                   loading="lazy" decoding="async" />
              <p class="rw-tst__cap"><?php echo htmlspecialchars($shot['cap']); ?></p>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>

          <?php if ($rwVideos): ?>
          <h3 class="rw-tst__vid-head reveal">Hear it from them</h3>
          <ul class="rw-tst__vids reveal">
            <?php foreach ($rwVideos as $vid): ?>
            <li class="rw-vid">
              <button type="button" class="rw-vid__play" data-rw-yt="<?php echo htmlspecialchars($vid['yt']); ?>"
                      aria-label="Play the video testimonial from <?php echo htmlspecialchars($vid['name']); ?>">
                <img src="<?php echo htmlspecialchars($vid['thumb']); ?>"
                     alt="<?php echo htmlspecialchars($vid['name']); ?>"
                     loading="lazy" decoding="async" />
                <span class="rw-vid__icon" aria-hidden="true">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                </span>
              </button>
              <p class="rw-vid__cap"><strong><?php echo htmlspecialchars($vid['name']); ?></strong><?php echo htmlspecialchars($vid['line']); ?></p>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>

          <div class="rw-cta-row reveal">
            <a class="btn btn--primary btn--lg" href="#reserve" data-rw-reserve>Reserve your spot</a>
          </div>
        </div>
      </section>
      <?php endif; ?>

      <!-- ============== WHO IT'S FOR ============== -->
      <section class="msp-section rc-for-whom" aria-labelledby="forWhomTitle">
        <div class="msp-wrap">
          <div class="rc-for-whom__inner">
            <div class="rc-for-whom__copy reveal">
              <span class="msp-eyebrow">Built for</span>
              <h2 id="forWhomTitle" class="msp-h2">Your very first step into research, not your tenth.</h2>
              <p class="msp-lede">
                Research opportunities for IMGs are hard to take up when you have
                never published, so Research Wise is the on-ramp. If you already
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

      <!-- ============== INVESTMENT ============== -->
      <section class="msp-section rw-invest" id="investment" aria-labelledby="investTitle">
        <div class="msp-wrap">
          <div class="msp-head reveal">
            <span class="msp-eyebrow">Investment</span>
            <h2 id="investTitle" class="msp-h2">Our first 100 members get a special price: $49, one time.</h2>
            <p class="msp-sub">We want as many first-time researchers in the room as we can, so we are giving back to the community.</p>
          </div>

          <div class="rc-payment reveal">
            <div class="rw-invest__inner">
              <div class="rw-invest__price-col">
                <div class="rc-payment__price">$49</div>
                <p class="rc-payment__note">One-time payment for all three live Sunday sessions. See our <a href="/refund-policy">Refund &amp; Guarantee Policy</a> for how refunds are handled.</p>
                <a class="btn btn--primary btn--lg rw-invest__btn" href="#reserve" data-rw-reserve>Reserve your spot</a>
              </div>
              <ul class="rw-ticks">
                <li>Three live 3-hour sessions</li>
                <li>Structured notes</li>
                <li>Structured PPTs</li>
                <li>Certificate of completion</li>
                <li>WhatsApp group</li>
                <li>A concrete next step</li>
              </ul>
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
          <div class="accordion accordion--faq rc-faq__accordion reveal">
            <?php foreach ($rwFaqs as $faq): ?>
            <div class="accordion__item">
              <button class="accordion__head" type="button">
                <?php echo $faq['q']; ?>
              </button>
              <div class="accordion__body">
                <?php echo $faq['a']; ?>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
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
