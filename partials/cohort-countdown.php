<?php
/**
 * Live cohort countdown, or the "next dates soon" card when there is no date.
 *
 *   $ccCohort  = uwcc_live_cohort('step2');   // data/crash-course-cohorts.php
 *   $ccVariant = 'hero';                      // or 'line'
 *   include $_SERVER['DOCUMENT_ROOT'] . '/partials/cohort-countdown.php';
 *
 * 'hero' is the big timer under the hero copy (or the card that replaces it
 * when enrollment is not open). 'line' is a single "Starts in 6d 14h 22m" line
 * for the offer card and the closing card, and prints nothing unless
 * enrollment is open. The including page must load /js/cohort-countdown.js and
 * data/crash-course-cohorts.php.
 *
 * The numbers are filled in here, on the server, so there is no empty flash;
 * the script then ticks them from the server's clock.
 */
(static function (array $c, string $variant): void {
    $h = static fn($s) => htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
    $nowTs = $c['now']->getTimestamp();
    $open = $c['state'] === 'open';
    $left = $open ? max(0, $c['countdownTo'] - $nowTs) : 0;

    if ($variant === 'line') {
        if (!$open) return;
        ?>
<p class="cc-cd-line" data-cc-countdown data-target="<?= (int) $c['countdownTo'] ?>" data-now="<?= (int) $nowTs ?>" data-done="Starting now">
  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
  <span><?= $c['started'] ? 'Enrollment closes in' : 'Next cohort starts in' ?> <b data-cc-text><?= $h(uwcc_countdown_text($left)) ?></b></span>
</p>
<?php
        return;
    }

    if (!$open) {
        $underway = $c['state'] === 'underway';
        ?>
<div class="cc-cd cc-cd--tba">
  <p class="cc-cd__eyebrow"><?= $underway ? 'Live cohort in progress' : 'Live cohorts run periodically' ?></p>
  <p class="cc-cd__tba-title"><?= $underway ? 'The ' . $h($c['range']) . ' cohort is underway' : 'Next cohort dates to be announced' ?></p>
  <p class="cc-cd__tba-sub">Get a WhatsApp message the moment enrollment opens for the next <?= $h($c['label']) ?> live cohort, or start the recorded course today.</p>
</div>
<?php
        return;
    }

    $d = intdiv($left, 86400);
    $hr = intdiv($left % 86400, 3600);
    $mn = intdiv($left % 3600, 60);
    $sc = $left % 60;
    $units = [['days', $d, 'Days'], ['hours', $hr, 'Hours'], ['minutes', $mn, 'Minutes'], ['seconds', $sc, 'Seconds']];
    ?>
<div class="cc-cd" data-cc-countdown data-target="<?= (int) $c['countdownTo'] ?>" data-now="<?= (int) $nowTs ?>" data-done="Starting now">
  <p class="cc-cd__eyebrow"><span class="cc-cd__dot" aria-hidden="true"></span><?= $c['started'] ? 'Enrollment closes in' : 'Next live cohort starts in' ?></p>
  <div class="cc-cd__grid" role="timer" aria-label="<?= $c['started'] ? 'Time left to enroll' : 'Time until the live cohort starts' ?>">
    <?php foreach ($units as [$key, $val, $label]): ?>
    <div class="cc-cd__cell"><b data-cc-unit="<?= $key ?>"><?= str_pad((string) $val, 2, '0', STR_PAD_LEFT) ?></b><span><?= $label ?></span></div>
    <?php endforeach; ?>
  </div>
  <p class="cc-cd__when"><strong><?= $h($c['range']) ?></strong> &middot; <time datetime="<?= $h($c['start']->format('c')) ?>">Starts <?= $h($c['startDay']) ?> at <?= $h($c['startTime']) ?></time></p>
</div>
<?php
})($ccCohort, (string) ($ccVariant ?? 'hero'));
