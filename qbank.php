<?php
/*
 * StepNinja, the USMLE Wise Qbank. The app itself lives at
 * stepninja.usmlewise.com (a separate single-page app, not in this repo);
 * this is its marketing page. Copy and numbers come from the StepNinja
 * brochure (Nov 2026). If plans or prices change in the app, change them
 * here too, including the JSON-LD offers at the bottom.
 *
 * SEO targets: "usmle wise qbank" (title, URL) and "manik qbank" (title,
 * meta description, the advisor section and the first FAQ). Approved claim
 * (user, 2026-11-25): the Qbank was developed with Dr. Manik's help as an
 * advisor. Don't go further than that (he did not write it, it isn't his).
 *
 * The systems/subjects lists in "What's covered" are the standard Step 1
 * outline, not pulled from the app (its filters sit behind login). Keep
 * them in step with the app's own filter names.
 */
$pageTitle = "USMLE Wise Qbank: Step 1 Questions, Advised by Dr. Manik Madaan";
$pageDescription = "StepNinja is the USMLE Wise Qbank, developed with Dr. Manik Madaan as advisor: 3,800+ Step 1 questions, 4 NBME-style assessments and 5 free questions a day.";
$canonical = "https://usmlewise.com/qbank";
$bodyClass = "msp";
$stylesheets = [
    "/styles/match.css"
];
$scripts = [
    "/js/match.js"
];
$preloadImage = "/assets/stepninja/wise-tutor-explanation.webp";

$snApp = "https://stepninja.usmlewise.com/";

$snFaqs = [
    [
        'q' => "Is this Dr. Manik's Qbank?",
        'a' => 'StepNinja is the USMLE Wise Qbank, developed by the USMLE Wise team with <a href="/team/manik-madaan">Dr. Manik Madaan</a> as advisor. If you were looking for the Manik Qbank or the USMLE Wise Qbank, this is the one.',
    ],
    [
        'q' => 'What do I get for free?',
        'a' => '5 Qbank questions every day with full Wise Tutor explanations, plus NBME-style Assessment 1. Your daily questions reset at midnight (UTC), and you don\'t need a card to sign up.',
    ],
    [
        'q' => "What's the difference between Single Step and Complete?",
        'a' => 'Single Step unlocks everything for Step 1: every question, all four NBME-style Assessments and High-Yield mode. Complete includes all of that, plus Step 2 CK and Step 3 as each one launches, so one membership carries you from Step 1 to Step 3.',
    ],
    [
        'q' => 'How does billing work, and can I cancel?',
        'a' => 'You pay once for the billing period you pick, and the plan renews at the end of each period at the same price until you cancel. You can cancel any time from your membership page, and your access continues until the end of the period you\'ve paid for.',
    ],
    [
        'q' => 'Can I study on my phone?',
        'a' => 'Yes. StepNinja runs in any modern browser on laptop, tablet or phone, in light or dark mode. There\'s nothing to install.',
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<style>
      .pg-about { background: var(--uw-surface-sunk); border-block: 1px solid var(--uw-border); }

      /* hero: wider media column than the default 6fr/3fr, so the
         screenshot is large enough to read */
      .pg-hero__grid { grid-template-columns: 1.05fr 1fr; gap: clamp(40px, 6vw, 88px); }
      .pg-hero__trust { font-size: 13px; color: var(--uw-ink-500); margin: 16px 0 0; }

      .pg-shot { margin: 0; }
      .pg-shot__frame {
        background: var(--uw-surface);
        border: 1px solid var(--uw-border);
        border-radius: clamp(14px, 1.6vw, 20px);
        box-shadow: var(--shadow-lg);
        overflow: hidden;
        padding: clamp(10px, 1.2vw, 14px) clamp(10px, 1.2vw, 14px) 0;
      }
      .pg-shot__frame img {
        display: block;
        width: 100%;
        height: auto;
        /* the crop ends mid-explanation: fade it out rather than cut it */
        -webkit-mask-image: linear-gradient(to bottom, #000 78%, transparent);
                mask-image: linear-gradient(to bottom, #000 78%, transparent);
      }

      /* what's covered: label column + chips */
      .pg-topics {
        max-width: 980px;
        margin: clamp(40px, 5vw, 60px) auto 0;
        border: 1px solid var(--uw-border);
        border-radius: var(--r-xl);
        overflow: hidden;
        background: var(--uw-surface);
      }
      .pg-topics__row {
        display: grid;
        grid-template-columns: 170px 1fr;
        gap: clamp(16px, 3vw, 40px);
        padding: clamp(22px, 2.6vw, 32px) clamp(20px, 3vw, 40px);
        border-bottom: 1px solid var(--uw-border);
      }
      .pg-topics__row:last-child { border-bottom: none; }
      .pg-topics__label {
        font-family: var(--font-mono);
        font-size: 11px;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: var(--uw-ink-600);
        padding-top: 7px;
      }
      .pg-topics__label small {
        display: block;
        margin-top: 6px;
        font-family: var(--font-sans);
        font-size: 12.5px;
        letter-spacing: 0;
        text-transform: none;
        color: var(--uw-ink-400);
      }
      .pg-chips { list-style: none; margin: 0; padding: 0; display: flex; flex-wrap: wrap; gap: 8px; }
      .pg-chips li {
        font-size: var(--fs-14);
        line-height: 1.3;
        color: var(--uw-ink-800);
        background: var(--uw-surface-sunk);
        border: 1px solid var(--uw-border);
        border-radius: 999px;
        padding: 6px 13px;
      }

      /* advisor */
      .pg-advisor {
        max-width: 980px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: clamp(200px, 24vw, 280px) 1fr;
        gap: clamp(28px, 4vw, 56px);
        align-items: center;
      }
      .pg-advisor__photo {
        border-radius: clamp(16px, 2vw, 22px);
        overflow: hidden;
        box-shadow: var(--shadow-lg);
        aspect-ratio: 1;
      }
      .pg-advisor__photo img { display: block; width: 100%; height: 100%; object-fit: cover; }
      .pg-advisor .msp-h2 { margin-bottom: 18px; }
      .pg-advisor p.pg-advisor__text {
        font-size: var(--fs-md);
        line-height: 1.65;
        color: var(--uw-ink-600);
        max-width: 58ch;
        margin: 0 0 14px;
      }
      .pg-advisor__link { font-size: var(--fs-14); font-weight: 500; }

      .pg-tutor__note {
        font-size: var(--fs-14);
        line-height: 1.6;
        color: var(--uw-ink-600);
        max-width: 62ch;
        margin: clamp(24px, 3vw, 32px) auto 0;
        text-align: center;
      }

      /* pricing */
      .pg-fee { max-width: 920px; margin: clamp(40px, 5vw, 60px) auto 0; }
      .pg-tier__price-unit {
        font-family: var(--font-sans);
        font-size: var(--fs-14);
        font-weight: 400;
        letter-spacing: 0;
        color: var(--uw-ink-500);
      }
      .pg-note {
        font-size: 13px;
        line-height: 1.65;
        color: var(--uw-ink-500);
        max-width: 72ch;
        margin: clamp(20px, 3vw, 26px) auto 0;
        text-align: center;
      }

      .pg-faq__accordion { max-width: 760px; margin: clamp(40px, 5vw, 60px) auto 0; }

      /* CTA card */
      .pg-cta-wrap { padding-block: clamp(72px, 9vw, 120px); }
      .pg-cta-card {
        background: #08111f;
        border: 1px solid rgba(255,255,255,.08);
        border-radius: clamp(20px, 2.4vw, 28px);
        box-shadow: var(--shadow-lg);
        padding: clamp(48px, 6vw, 80px) clamp(32px, 5vw, 72px);
        text-align: center;
      }
      .pg-cta-card .msp-h2 { color: #fff; text-align: center; max-width: 24ch; margin-inline: auto; margin-bottom: 0; }
      .pg-cta-card .msp-sub { color: rgba(255,255,255,.65); max-width: 54ch; margin-inline: auto; margin-top: clamp(14px,2vw,20px); text-align: center; }
      .pg-cta-card .msp-cta-row { justify-content: center; margin-inline: auto; margin-top: clamp(28px,4vw,44px); }

      @media (max-width: 768px) {
        .pg-hero__grid { grid-template-columns: 1fr; }
        .pg-shot { max-width: 520px; margin-inline: auto; }
      }
      @media (max-width: 640px) {
        .pg-topics__row { grid-template-columns: 1fr; gap: 12px; }
        .pg-topics__label { padding-top: 0; }
        .pg-advisor { grid-template-columns: 1fr; }
        .pg-advisor__photo { width: 180px; }
      }
    </style>

<main>

    <!-- HERO -->
    <section class="msp-hero" aria-labelledby="heroTitle">
      <div class="msp-wrap msp-hero__grid pg-hero__grid">
        <div class="msp-hero__copy reveal">
          <h1 id="heroTitle" class="msp-h1">The Step 1 Qbank that <span class="msp-h1__accent">teaches every answer.</span></h1>
          <p class="msp-lede">Board-style questions, NBME-style assessments and a Wise Tutor explanation for every question: what each clue means, how to reason to the answer, and why every other choice is wrong.</p>
          <div class="msp-cta-row">
            <a class="btn btn--primary btn--xl" href="<?php echo $snApp; ?>" target="_blank" rel="noopener noreferrer">Start Free</a>
            <a class="btn btn--outline btn--xl" href="#pricing">See Plans</a>
          </div>
          <p class="pg-hero__trust">5 free questions a day plus Assessment 1. No card needed.</p>
        </div>
        <figure class="pg-shot reveal">
          <div class="pg-shot__frame">
            <img src="/assets/stepninja/wise-tutor-explanation.webp" width="820" height="960" alt="A Wise Tutor explanation in StepNinja: the correct answer, ABO blood group antigens, with each clue from the question stem quoted and translated, followed by step-by-step reasoning." fetchpriority="high" />
          </div>
        </figure>
      </div>
      <div class="msp-bar msp-wrap" aria-label="StepNinja at a glance">
        <div class="msp-bar__inner">
          <div class="msp-stat reveal"><b>3,800+</b><span>Step 1 questions with Wise Tutor explanations</span></div>
          <div class="msp-divider" aria-hidden="true"></div>
          <div class="msp-stat reveal"><b data-count="4">4</b><span>NBME-style Assessments, timed like the real exam</span></div>
          <div class="msp-divider" aria-hidden="true"></div>
          <div class="msp-stat reveal"><b data-count="1740" data-comma>1,740</b><span>Must-know questions in High-Yield mode</span></div>
          <div class="msp-divider" aria-hidden="true"></div>
          <div class="msp-stat reveal"><b>Free</b><span>5 questions a day, no card needed</span></div>
        </div>
      </div>
    </section>

    <!-- WISE TUTOR -->
    <section class="msp-section pg-about" aria-labelledby="tutorTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">How Wise Tutor explains</span>
          <h2 id="tutorTitle" class="msp-h2">Every question, taught the same careful way.</h2>
          <p class="msp-sub">Most Qbanks hand you a wall of text. Wise Tutor breaks every explanation into the same four parts, so you learn the reasoning, not just the answer.</p>
        </div>
        <div class="msp-services__grid">
          <div class="msp-svc reveal">
            <span class="msp-svc__no">01</span>
            <div>
              <h3>Decoding the Stem</h3>
              <p>Each clue in the vignette is quoted and paired with what it tells you, so you learn to read cases the way examiners write them.</p>
            </div>
          </div>
          <div class="msp-svc reveal">
            <span class="msp-svc__no">02</span>
            <div>
              <h3>Step-by-Step Reasoning</h3>
              <p>The path from the clues to the answer, one numbered step at a time, including the mechanism behind it.</p>
            </div>
          </div>
          <div class="msp-svc reveal">
            <span class="msp-svc__no">03</span>
            <div>
              <h3>Why Not the Others</h3>
              <p>Every wrong choice gets its own card and its own reason, plus the exam trap the question is built around.</p>
            </div>
          </div>
          <div class="msp-svc reveal">
            <span class="msp-svc__no">04</span>
            <div>
              <h3>The Bottom Line</h3>
              <p>One sentence to remember when you see this pattern again on test day.</p>
            </div>
          </div>
        </div>
        <p class="pg-tutor__note reveal">Every question also comes with a differential table comparing the look-alike diagnoses, and Ask AI for follow-up questions about that exact case.</p>
      </div>
    </section>

    <!-- WHAT'S COVERED -->
    <section class="msp-section" aria-labelledby="topicsTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">What's covered</span>
          <h2 id="topicsTitle" class="msp-h2">Every Step 1 system and subject.</h2>
          <p class="msp-sub">Every question is tagged by system and subject, so you can build a block on exactly what you need and see your accuracy broken down the same way.</p>
        </div>
        <div class="pg-topics reveal">
          <div class="pg-topics__row">
            <div class="pg-topics__label">Systems</div>
            <ul class="pg-chips">
              <li>Cardiovascular</li>
              <li>Respiratory</li>
              <li>Renal &amp; Urinary</li>
              <li>Gastrointestinal</li>
              <li>Endocrine</li>
              <li>Reproductive</li>
              <li>Nervous System &amp; Special Senses</li>
              <li>Behavioral Health</li>
              <li>Musculoskeletal</li>
              <li>Skin &amp; Subcutaneous Tissue</li>
              <li>Blood &amp; Lymphoreticular</li>
              <li>Immune System</li>
              <li>Multisystem Processes</li>
              <li>Biostatistics &amp; Epidemiology</li>
              <li>Social Sciences &amp; Ethics</li>
            </ul>
          </div>
          <div class="pg-topics__row">
            <div class="pg-topics__label">Subjects</div>
            <ul class="pg-chips">
              <li>Anatomy</li>
              <li>Physiology</li>
              <li>Biochemistry</li>
              <li>Pathology</li>
              <li>Pharmacology</li>
              <li>Microbiology</li>
              <li>Immunology</li>
              <li>Genetics</li>
              <li>Histology &amp; Cell Biology</li>
              <li>Behavioral Science</li>
            </ul>
          </div>
          <div class="pg-topics__row">
            <div class="pg-topics__label">Ways to study</div>
            <ul class="pg-chips">
              <li>Tutor mode</li>
              <li>Test mode</li>
              <li>High-Yield mode, 1,740 questions</li>
              <li>4 NBME-style Assessments</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- ADVISOR -->
    <section class="msp-section pg-about" aria-labelledby="advisorTitle">
      <div class="msp-wrap">
        <div class="pg-advisor reveal">
          <div class="pg-advisor__photo">
            <img src="/assets/stepninja/manik-madaan.webp" width="640" height="640" alt="Dr. Manik Madaan" loading="lazy" />
          </div>
          <div>
            <span class="msp-eyebrow">Our advisor</span>
            <h2 id="advisorTitle" class="msp-h2">Developed with Dr. Manik Madaan as advisor.</h2>
            <p class="pg-advisor__text">The USMLE Wise team developed this Qbank with Dr. Manik Madaan's help as an advisor. Dr. Manik is a practicing doctor in the United States who has served four years on a Residency Selection Committee, and a volunteer advisor to USMLE Wise.</p>
            <a class="pg-advisor__link" href="/team/manik-madaan">Read Dr. Manik's profile &rarr;</a>
          </div>
        </div>
      </div>
    </section>

    <!-- PRICING -->
    <section class="msp-section" id="pricing" aria-labelledby="pricingTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Pricing</span>
          <h2 id="pricingTitle" class="msp-h2">Start free. Unlock everything when you're ready.</h2>
        </div>
        <div class="pg-fee">
          <div class="msp-pricing__rows reveal">
            <div class="msp-tier">
              <div class="msp-tier__info">
                <span class="msp-tier__name">Free</span>
                <div class="msp-tier__price">$0</div>
                <p class="msp-tier__sub">For every new student. No card needed.</p>
                <a class="btn btn--outline btn--sm" href="<?php echo $snApp; ?>" target="_blank" rel="noopener noreferrer">Start Free</a>
              </div>
              <ul class="msp-tier__features">
                <li>5 Qbank questions every day</li>
                <li>Full Wise Tutor explanations</li>
                <li>NBME-style Assessment 1</li>
                <li>Daily questions reset at midnight (UTC)</li>
              </ul>
            </div>
            <div class="msp-tier msp-tier--featured">
              <div class="msp-tier__info">
                <span class="msp-tier__badge">Best for Step 1</span>
                <span class="msp-tier__name">Single Step &middot; Step 1</span>
                <div class="msp-tier__price">$16.60<span class="pg-tier__price-unit">/month</span></div>
                <p class="msp-tier__sub">$199.20 billed yearly, or $49 monthly.</p>
                <a class="btn btn--primary btn--sm" href="<?php echo $snApp; ?>" target="_blank" rel="noopener noreferrer">Get Started</a>
              </div>
              <ul class="msp-tier__features">
                <li>Every Qbank question, 3,800+</li>
                <li>All 4 NBME-style Assessments</li>
                <li>High-Yield mode, 1,740 questions</li>
                <li>Differential tables and Ask AI</li>
                <li>Tutor and Test mode, filtered by system and subject</li>
                <li>Performance reports by system and subject</li>
                <li>Notebook, highlights and strike-outs</li>
                <li>Lab values and calculator beside every question</li>
              </ul>
            </div>
            <div class="msp-tier">
              <div class="msp-tier__info">
                <span class="msp-tier__name">Complete &middot; Steps 1 to 3</span>
                <div class="msp-tier__price">$19.93<span class="pg-tier__price-unit">/month</span></div>
                <p class="msp-tier__sub">$239.20 billed yearly, or $99 monthly.</p>
                <a class="btn btn--outline btn--sm" href="<?php echo $snApp; ?>" target="_blank" rel="noopener noreferrer">Get Started</a>
              </div>
              <ul class="msp-tier__features">
                <li>Everything in Single Step</li>
                <li>Step 2 CK as it launches</li>
                <li>Step 3 as it launches</li>
                <li>One membership from Step 1 to Step 3</li>
              </ul>
            </div>
          </div>
          <p class="pg-note">Prices in US dollars. Plans also come in 6, 24 and 36-month periods, and the longer you choose, the more you save (up to 35%). You pay once for the period you choose, and the plan renews at the same price until you cancel. Cancel any time; access continues to the end of the paid period. Payments are handled securely by Stripe.</p>
          <p class="pg-note">Want live teaching too? Pair the Qbank with a <a href="/step-1-live-high-yield-crash-course">Step 1 crash course</a>, <a href="/coaching-step1-mastery">Step 1 Mastery</a> or <a href="/coaching-tutoring">1:1 tutoring</a>.</p>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="msp-section pg-about" id="faq" aria-labelledby="faqTitle">
      <div class="msp-wrap">
        <div class="msp-head reveal">
          <span class="msp-eyebrow">Questions</span>
          <h2 id="faqTitle" class="msp-h2">Before you sign up.</h2>
        </div>
        <div class="pg-faq__accordion accordion accordion--faq reveal">
          <?php foreach ($snFaqs as $faq): ?>
          <div class="accordion__item">
            <button class="accordion__head" type="button">
              <?php echo htmlspecialchars($faq['q'], ENT_QUOTES, 'UTF-8'); ?>
            </button>
            <div class="accordion__body">
              <?php echo $faq['a']; ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- FINAL CTA -->
    <section class="pg-cta-wrap">
      <div class="msp-wrap">
        <div class="pg-cta-card reveal" aria-labelledby="ctaTitle">
          <h2 id="ctaTitle" class="msp-h2">Answer your first question in minutes.</h2>
          <p class="msp-sub">Create your free account with email or Google. No card needed.</p>
          <div class="msp-cta-row">
            <a class="btn btn--primary btn--xl" href="<?php echo $snApp; ?>" target="_blank" rel="noopener noreferrer">Get Started for Free</a>
          </div>
        </div>
      </div>
    </section>

    <script type="application/ld+json">
    <?php
    $snPlain = static function (string $html): string {
        return trim(preg_replace('/\s+/', ' ', strip_tags(html_entity_decode($html, ENT_QUOTES, 'UTF-8'))));
    };
    $snOffer = static function (string $name, string $price): array {
        return ['@type' => 'Offer', 'name' => $name, 'price' => $price, 'priceCurrency' => 'USD', 'url' => 'https://stepninja.usmlewise.com/'];
    };
    echo json_encode([
        '@context' => 'https://schema.org',
        '@graph'   => [
            [
                '@type'               => 'WebApplication',
                'name'                => 'StepNinja',
                'alternateName'       => ['USMLE Wise Qbank', 'StepNinja Qbank'],
                'url'                 => 'https://usmlewise.com/qbank',
                'applicationCategory' => 'EducationalApplication',
                'operatingSystem'     => 'Any (web browser)',
                'description'         => 'Step 1 Qbank with 3,800+ questions, Wise Tutor explanations for every question, 4 NBME-style assessments and a 1,740-question High-Yield mode.',
                'publisher'           => ['@type' => 'Organization', 'name' => 'USMLE Wise', 'url' => 'https://usmlewise.com'],
                'contributor'         => ['@type' => 'Person', 'name' => 'Dr. Manik Madaan', 'url' => 'https://usmlewise.com/team/manik-madaan'],
                'offers'              => [
                    $snOffer('Free', '0'),
                    $snOffer('Single Step (Step 1), monthly', '49'),
                    $snOffer('Single Step (Step 1), 12 months', '199.20'),
                    $snOffer('Complete (Step 1, Step 2 CK and Step 3), monthly', '99'),
                    $snOffer('Complete (Step 1, Step 2 CK and Step 3), 12 months', '239.20'),
                ],
            ],
            [
                '@type'      => 'FAQPage',
                'mainEntity' => array_map(static function (array $faq) use ($snPlain): array {
                    return [
                        '@type'          => 'Question',
                        'name'           => $snPlain($faq['q']),
                        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $snPlain($faq['a'])],
                    ];
                }, $snFaqs),
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    ?>
    </script>

    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
