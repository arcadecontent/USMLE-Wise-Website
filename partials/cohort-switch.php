<?php
/**
 * The slim strip under a crash course hero that points to the other version of
 * the same course: live pages link to the recorded course, recorded pages link
 * to the live one (with its date when one is open for enrollment).
 *
 *   $ccStep = 'step2';        // step1 | step2 | step3
 *   $ccFrom = 'live';         // the kind of page this is: 'live' or 'recorded'
 *   include $_SERVER['DOCUMENT_ROOT'] . '/partials/cohort-switch.php';
 *
 * Needs data/crash-course-cohorts.php and /styles/crash-course-brochure.css.
 */
(static function (string $step, string $from): void {
    $c = uwcc_live_cohort($step);
    if (!$c) return;
    $h = static fn($s) => htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');

    if ($from === 'live') {
        $title = 'Prefer to study on your own schedule?';
        $sub = 'The recorded ' . $c['label'] . ' course is always available, with instant access.';
        $cta = 'See the recorded course';
        $to = uwcc_page_url($step, 'recorded');
    } else {
        $title = 'Prefer live teaching with a cohort?';
        $sub = $c['state'] === 'open'
            ? 'The next live ' . $c['label'] . ' cohort runs ' . $c['range'] . ', with Q&A after every topic.'
            : 'Live ' . $c['label'] . ' cohorts run periodically. The next dates will be announced soon.';
        $cta = $c['state'] === 'open' ? 'See the live cohort' : 'See the live course';
        $to = uwcc_page_url($step, 'live');
    }
    ?>
<section class="cc-alt-wrap" aria-label="Other version of this course">
  <div class="msp-wrap">
    <div class="cc-alt reveal">
      <div class="cc-alt__text"><b><?= $h($title) ?></b><span><?= $h($sub) ?></span></div>
      <a class="btn btn--outline btn--sm" href="<?= $h($to) ?>"><?= $h($cta) ?></a>
    </div>
  </div>
</section>
<?php
})((string) ($ccStep ?? ''), (string) ($ccFrom ?? 'live'));
