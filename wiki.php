<?php
/**
 * Wiki hub, served at /wiki. Sections come from data/wiki.php; the article
 * counts come from the Markdown in wiki-content/.
 */

require_once __DIR__ . '/data/wiki.php';

$sections = usmlewise_wiki_sections();
$listed   = usmlewise_wiki_listed();
$counts   = [];
foreach ($listed as $a) {
    $counts[$a['section']] = ($counts[$a['section']] ?? 0) + 1;
}

// The path strip on the hub: [section slug, short label, one-line summary].
// Labels are kept short so every step fits on one line at desktop width.
$journey = [
    ['start-here',       'Start here',  'Roadmap, cost and timing'],
    ['exams',            'USMLE exams', 'Step 1, Step 2 CK, Step 3'],
    ['ecfmg',            'ECFMG',       'Eligibility and credentials'],
    ['application',      'Application', 'ERAS, letters and signals'],
    ['interviews-match', 'The Match',   'Interviews, ranking, SOAP'],
    ['visas',            'Visas',       'J-1, H-1B and timing'],
];

$pageTitle       = 'USMLE Wise Wiki: The IMG Guide to the USMLE, ECFMG, ERAS, the Match and Visas';
$pageDescription = 'Free, sourced guides for international medical graduates: USMLE exams, ECFMG certification, the residency application, the Match, research, clinical experience and visas.';
$canonical       = 'https://usmlewise.com/wiki';
$bodyClass       = 'msp wk';
$stylesheets     = ['/styles/blog.css', '/styles/wiki.css']; // blog.css carries the shared nav and footer styles
$scripts         = ['/js/blog.js', '/js/wiki.js']; // blog.js drives the sticky nav state
if (!$listed) {
    // Nothing published yet: the wiki does not exist on the live site.
    http_response_code(404);
    require __DIR__ . '/404.php';
    exit;
}

include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>


  <section class="wk-hero">
    <div class="msp-wrap">
      <p class="wk-eyebrow">USMLE Wise Wiki</p>
      <h1 class="wk-hero__title">Everything an IMG needs to know to reach a US residency.</h1>
      <p class="wk-hero__sub">Exams, ECFMG, the application, the Match, research, clinical experience and visas. Every page is sourced to the official rule-makers, and each one shows whether an expert has reviewed it yet.</p>
      <?php $wikiSearchSize = 'lg'; include __DIR__ . '/partials/wiki-search.php'; ?>
    </div>
  </section>

  <section class="wk-journey" aria-labelledby="wk-journey-h">
    <div class="msp-wrap">
      <h2 id="wk-journey-h" class="wk-h2">The path, in order</h2>
      <ol class="wk-journey__list">
        <?php foreach ($journey as $i => [$slug, $label, $sub]): ?>
        <li class="wk-journey__step">
          <a href="/wiki/<?php echo $slug; ?>">
            <span class="wk-journey__n" aria-hidden="true"><?php echo $i + 1; ?></span>
            <span class="wk-journey__t"><?php echo htmlspecialchars($label); ?></span>
            <span class="wk-journey__s"><?php echo htmlspecialchars($sub); ?></span>
          </a>
        </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </section>

  <section class="wk-sections" aria-labelledby="wk-sections-h">
    <div class="msp-wrap">
      <h2 id="wk-sections-h" class="wk-h2">Browse by topic</h2>
      <div class="wk-grid">
        <?php foreach ($sections as $slug => $s): $n = $counts[$slug] ?? 0; ?>
          <?php if ($n > 0): ?>
          <a class="wk-card" href="/wiki/<?php echo $slug; ?>">
          <?php else: ?>
          <div class="wk-card wk-card--soon">
          <?php endif; ?>
            <i data-lucide="<?php echo htmlspecialchars($s['icon']); ?>" width="22" height="22" class="wk-card__icon" aria-hidden="true"></i>
            <h3 class="wk-card__title"><?php echo htmlspecialchars($s['title']); ?></h3>
            <p class="wk-card__blurb"><?php echo htmlspecialchars($s['blurb']); ?></p>
            <span class="wk-card__count"><?php echo $n > 0 ? $n . ' ' . ($n === 1 ? 'page' : 'pages') : 'Coming soon'; ?></span>
          <?php echo $n > 0 ? '</a>' : '</div>'; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="wk-promise">
    <div class="msp-wrap">
      <div class="wk-promise__panel">
        <h2 class="wk-h2">How we keep this accurate</h2>
        <p>Every fee, date and rule links to its primary source (USMLE, NBME, ECFMG, NRMP, AAMC, the US State Department, USCIS). Reviewed pages show who reviewed them and when, and pages are re-checked on a fixed schedule. Visa pages are information, not legal advice.</p>
      </div>
    </div>
  </section>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
