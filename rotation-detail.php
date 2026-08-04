<?php
/**
 * Dynamic rotation detail page — rendered by routes.php for /rotation-<slug>
 * when the CRM has detail-page content for that rotation ($rotationEntry is
 * set by the router). Content is managed from the CRM Rotations page; the
 * markup mirrors the original static rotation-*.php pages exactly.
 */

if (!isset($rotationEntry) || empty($rotationEntry['detail'])) {
    http_response_code(404);
    require $_SERVER['DOCUMENT_ROOT'] . '/404.php';
    exit;
}

$rd     = $rotationEntry['detail'];
$rdSlug = (string) $rotationEntry['slug'];

$rdEsc = static function ($v) { return htmlspecialchars((string) $v, ENT_NOQUOTES, 'UTF-8'); };
$rdAttr = static function ($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); };
// Fragments come sanitized from the CRM (only simple emphasis tags); the
// whitelist here is defense in depth.
$rdFrag = static function ($v) { return strip_tags((string) $v, '<strong><em><b><i>'); };
$rdParts = static function (string $v, string $sep) use ($rdEsc): string {
    $parts = array_filter(array_map('trim', explode('·', $v)), 'strlen');
    return implode($sep, array_map($rdEsc, $parts));
};

$rdHeading = implode('<br>', array_map($rdEsc, array_filter(
    array_map('trim', preg_split('/\r\n|\r|\n/', (string) ($rd['heading'] ?? ''))), 'strlen'
)));
$rdNumber = trim((string) ($rd['number_text'] ?? ''));
if ($rdNumber === '') {
    $rdNumber = sprintf('Rotation %02d', (int) ($rotationEntry['position'] ?? 0));
}
$rdPrice = '$' . number_format((float) ($rotationEntry['price'] ?? 0));
$rdCtaHref = (string) ($rd['cta_href'] ?? '') ?: 'https://team.manikmadaan.com/guidance-call/book';
$rdCtaLabel = (string) ($rd['cta_label'] ?? '') ?: 'Book a Call';

$pageTitle = (string) ($rd['page_title'] ?? '') ?: ($rotationEntry['title'] . ' | USMLE Wise');
$pageDescription = (string) ($rd['page_description'] ?? '');
$canonical = 'https://usmlewise.com/rotation-' . $rdSlug;
$bodyClass = "msp";
$stylesheets = [
    "/styles/rotations.css"
];
$scripts = [
    "/js/rotations.js"
];
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>

      <!-- Breadcrumb -->
      <div class="msp-wrap" style="padding-top: clamp(24px, 3vw, 36px); padding-bottom: 0;">
        <a href="/rotations" style="display: inline-flex; align-items: center; gap: 6px; font-family: var(--font-mono); font-size: 11px; letter-spacing: 0.1em; text-transform: uppercase; color: var(--uw-ink-500); text-decoration: none;">
          <i data-lucide="arrow-left" width="12" height="12"></i>
          All Rotations
        </a>
      </div>

      <!-- Rotation detail -->
      <section class="rot-feature" id="rotation-detail">
        <div class="msp-wrap">

          <div class="rot-feature__top reveal">
            <span class="rot-feature__num-badge"><?php echo $rdEsc($rdNumber); ?></span>
            <span class="rot-feature__top-loc">
              <i data-lucide="map-pin" width="11" height="11"></i>
              <?php echo $rdEsc(($rotationEntry['city'] ?? '') . ', ' . ($rotationEntry['state'] ?? '')); ?>
            </span>
            <span class="rot-feature__top-sep" aria-hidden="true">·</span>
            <span class="rot-feature__top-specialty"><?php echo $rdParts((string) (($rd['top_specialty_text'] ?? '') ?: ($rotationEntry['specialty'] ?? '')), ' &middot; '); ?></span>
          </div>

          <div class="rot-feature__header reveal">
            <div class="rot-feature__header-copy">
              <h1 class="rot-feature__heading"><?php echo $rdHeading; ?></h1>
              <p class="rot-feature__hospital"><?php echo $rdEsc($rd['hospital_line'] ?? ''); ?></p>
              <span class="rot-feature__setting-badge"><?php echo $rdParts((string) ($rd['setting_badge'] ?? ''), ' &nbsp;&middot;&nbsp; '); ?></span>
            </div>
            <div class="rot-feature__price-card">
              <div class="rot-feature__price"><?php echo $rdPrice; ?></div>
              <p class="rot-feature__deposit"><?php echo $rdParts((string) ($rd['deposit_line'] ?? ''), ' &middot; '); ?></p>
              <a class="btn btn--primary" href="<?php echo $rdAttr($rdCtaHref); ?>" target="_blank" rel="noopener noreferrer"><?php echo $rdEsc($rdCtaLabel); ?></a>
            </div>
          </div>

<?php if (!empty($rd['stats'])): ?>
          <div class="rot-feature__stats-bar reveal">
<?php foreach ($rd['stats'] as $rdStat): ?>
            <div class="rot-feature__stat-col">
              <strong><?php echo $rdEsc($rdStat['value'] ?? ''); ?></strong>
              <span><?php echo $rdEsc($rdStat['label'] ?? ''); ?></span>
            </div>
<?php endforeach; ?>
          </div>
<?php endif; ?>

          <div class="rot-feature__body reveal">
            <div class="rot-feature__content">
<?php foreach ($rd['sections'] ?? [] as $rdSection): ?>
              <div class="rot-feature__section">
                <span class="rot-feature__section-label"><?php echo $rdEsc($rdSection['label'] ?? ''); ?></span>
                <ul class="rot-feature__list">
<?php foreach ($rdSection['items'] ?? [] as $rdItem): ?>
                  <li><?php echo $rdFrag($rdItem); ?></li>
<?php endforeach; ?>
                </ul>
              </div>
<?php endforeach; ?>
            </div>
            <div class="rot-feature__lor-panel">
              <span class="rot-feature__section-label"><?php echo $rdEsc(($rd['lor_label'] ?? '') ?: 'Letter of recommendation'); ?></span>
              <p class="rot-feature__text"><?php echo $rdFrag($rd['lor_text'] ?? ''); ?></p>
<?php if (!empty($rd['required_documents'])): ?>
              <div class="rot-feature__section">
                <span class="rot-feature__section-label"><?php echo $rdEsc(($rd['docs_label'] ?? '') ?: 'Required documents'); ?></span>
                <ul class="rot-feature__list">
<?php foreach ($rd['required_documents'] as $rdDoc): ?>
                  <li><?php echo $rdFrag($rdDoc); ?></li>
<?php endforeach; ?>
                </ul>
              </div>
<?php endif; ?>
            </div>
          </div>

<?php if (!empty($rd['tags'])): ?>
          <div class="rot-feature__footer reveal">
<?php foreach ($rd['tags'] as $rdTag): ?>
            <span class="rot-dtag"><?php echo $rdFrag($rdTag); ?></span>
<?php endforeach; ?>
          </div>
<?php endif; ?>

        </div>
      </section>

      <!-- CTA -->
      <section class="msp-section msp-cta-wrap" id="book" aria-labelledby="ctaTitle">
        <div class="msp-wrap">
          <div class="msp-cta-a reveal">
            <div class="msp-cta-a__stat">
              <div class="msp-cta-a__num">88<span>%</span></div>
              <p class="msp-cta-a__stat-line">Match rate across 300+ students</p>
              <p class="msp-cta-a__stat-sub">10+ specialties &middot; 4.9 avg mentor rating</p>
            </div>
            <div class="msp-cta-a__content">
              <span class="msp-eyebrow msp-eyebrow--light">Enrollment open</span>
              <h2 id="ctaTitle" class="msp-h2 msp-h2--invert">
                Rotations are currently<br /><em>open for enrollment.</em>
              </h2>
              <p class="msp-cta__sub">
                Book a free guidance call. We will match you to the right rotation type, site, and timeline for your application and reserve your spot.
              </p>
              <!--email_off--><a class="btn btn--primary btn--xl" href="mailto:support@usmlewise.com?subject=Clinical%20Rotation%20Inquiry">
                Reserve Your Spot
              </a><!--/email_off-->
              <p class="msp-cta__trust">No commitment. No sales pitch. Just a clear plan.</p>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
