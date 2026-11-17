<?php
/**
 * Buttons that replace "Enroll Now" on a live page when enrollment is not open
 * (no date announced, or the cohort has started): tell me on WhatsApp, or go
 * to the recorded course.
 *
 *   $ccCohort  = uwcc_live_cohort('step2');
 *   $ccVariant = 'row';     // buttons side by side in a .msp-cta-row (default)
 *   $ccVariant = 'block';   // full-width, stacked, for the offer card
 *   include $_SERVER['DOCUMENT_ROOT'] . '/partials/cohort-cta.php';
 */
(static function (array $c, string $variant): void {
    $notify = uwcc_notify_url($c['label']);
    $recorded = uwcc_page_url($c['step'], 'recorded');
    $wide = $variant === 'block' ? ' style="width:100%"' : '';
    if ($variant === 'block') echo '<div class="cc-stack">';
    ?>
<a class="btn btn--primary btn--xl" href="<?= htmlspecialchars($notify, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer"<?= $wide ?>>Notify me on WhatsApp</a>
<a class="btn btn--outline btn--xl" href="<?= htmlspecialchars($recorded, ENT_QUOTES, 'UTF-8') ?>"<?= $wide ?>>Start the recorded course</a>
<?php
    if ($variant === 'block') echo '</div>';
})($ccCohort, (string) ($ccVariant ?? 'row'));
