<?php
/**
 * Rotations browse section — search bar, filter sidebar, and card grid.
 *
 * Shared by /rotations (below its hero) and /clinical-rotations (the whole
 * page). Every card and filter option comes from the CRM feed
 * (data/rotations.php), so a placement added at
 * team.manikmadaan.com/admin/rotations shows up in both catalogues with no
 * code change. Do not hand-write cards here.
 *
 * Optional variables, set before including:
 *   $rotBrowseEyebrow, $rotBrowseTitle, $rotBrowseSub
 *
 * The including page must load /styles/rotations.css and /js/rotations.js.
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/data/rotations.php';

$rotationsData    = usmlewise_rotations_payload();
$rotationsList    = $rotationsData['rotations'];
$rotationsFilters = $rotationsData['filters'];

// Price slider range follows the rotations actually shown (rounded outward to
// the nearest $100); falls back to $1,000-$5,000 when there are no prices.
$rotPrices = [];
foreach ($rotationsList as $rotRow) {
    if (is_array($rotRow) && isset($rotRow['price']) && is_numeric($rotRow['price']) && (float) $rotRow['price'] > 0) {
        $rotPrices[] = (float) $rotRow['price'];
    }
}
if ($rotPrices) {
    $priceSliderMin = (int) (floor(min($rotPrices) / 100) * 100);
    $priceSliderMax = (int) (ceil(max($rotPrices) / 100) * 100);
    if ($priceSliderMax <= $priceSliderMin) {
        $priceSliderMax = $priceSliderMin + 100;
    }
} else {
    $priceSliderMin = 1000;
    $priceSliderMax = 5000;
}

$rotRenderFilterOptions = static function (string $filter, array $options): string {
    $attr = static function ($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); };
    $esc  = static function ($v) { return htmlspecialchars((string) $v, ENT_NOQUOTES, 'UTF-8'); };
    $lines = [];
    foreach ($options as $opt) {
        $lines[] = '                  <li><button class="rot-sidebar__opt" type="button" data-filter="'
            . $attr($filter) . '" data-value="' . $attr($opt['value'] ?? '') . '">'
            . $esc($opt['label'] ?? '') . '</button></li>';
    }
    return implode("\n", $lines);
};

$rotRenderCard = static function (array $r): string {
    $esc  = static function ($v) { return htmlspecialchars((string) $v, ENT_NOQUOTES, 'UTF-8'); };
    $attr = static function ($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); };
    $sep  = ' &nbsp;&middot;&nbsp; ';

    $badges = ['<span class="rot-pg-badge rot-pg-badge--specialty">' . $esc($r['specialty'] ?? '') . '</span>'];
    if (!empty($r['lor_included'])) {
        $badges[] = '<span class="rot-pg-badge rot-pg-badge--lor">LOR Included</span>';
    }
    if (!empty($r['housing_included'])) {
        $badges[] = '<span class="rot-pg-badge rot-pg-badge--housing">Housing Included</span>';
    }
    $badgesHtml = implode("\n                  ", $badges);

    $metaParts = array_filter(array_map('trim', explode('·', (string) ($r['meta_text'] ?? ''))), 'strlen');
    $metaHtml  = implode($sep, array_map($esc, $metaParts));

    $settingHtml = $esc($r['setting_text'] ?? '');
    if (!empty($r['duration_text'])) {
        $settingHtml .= $sep . $esc($r['duration_text']);
    }

    $price = '$' . number_format((float) ($r['price'] ?? 0));

    $searchText = strtolower(implode(' ', array_filter([
        $r['title'] ?? '',
        $r['hospital'] ?? '',
        $r['city'] ?? '',
        $r['state'] ?? '',
        $r['specialty'] ?? '',
    ])));

    return
        '            <article class="rot-pg-card reveal"' . "\n" .
        '                     data-specialty="' . $attr($r['specialty_value'] ?? '') . '"' . "\n" .
        '                     data-state="' . $attr($r['state_value'] ?? '') . '"' . "\n" .
        '                     data-price="' . $attr($r['price_bucket'] ?? '') . '"' . "\n" .
        '                     data-setting="' . $attr($r['setting_filter'] ?? '') . '"' . "\n" .
        '                     data-search="' . $attr($searchText) . '">' . "\n" .
        '              <div class="rot-pg-card__top">' . "\n" .
        '                <div class="rot-pg-card__badges">' . "\n" .
        '                  ' . $badgesHtml . "\n" .
        '                </div>' . "\n" .
        '                <span class="rot-pg-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>' . $esc(($r['city'] ?? '') . ', ' . ($r['state'] ?? '')) . '</span>' . "\n" .
        '              </div>' . "\n" .
        '              <div class="rot-pg-card__mid">' . "\n" .
        '                <h3 class="rot-pg-card__title">' . $esc($r['title'] ?? '') . '</h3>' . "\n" .
        '                <p class="rot-pg-card__hospital">' . $esc($r['hospital'] ?? '') . '</p>' . "\n" .
        '                <span class="rot-pg-card__setting">' . $settingHtml . '</span>' . "\n" .
        '              </div>' . "\n" .
        '              <div class="rot-pg-card__price-row">' . "\n" .
        '                <span class="rot-pg-card__price">' . $price . '</span>' . "\n" .
        '                <span class="rot-pg-card__meta">' . $metaHtml . '</span>' . "\n" .
        '              </div>' . "\n" .
        '              <a href="' . $attr($r['detail_url'] ?? '#') . '" class="btn btn--outline rot-pg-card__cta">' . "\n" .
        '                View Rotation <i data-lucide="arrow-right" width="14" height="14"></i>' . "\n" .
        '              </a>' . "\n" .
        '            </article>';
};

$rotHeadEsc = static function ($v) { return htmlspecialchars((string) $v, ENT_NOQUOTES, 'UTF-8'); };
?>
      <!-- ============== ROTATIONS BROWSE ============== -->
      <section class="msp-section rot-browse" id="rotations" aria-labelledby="rotTitle">
        <div class="msp-wrap">

          <div class="msp-head reveal">
            <span class="msp-eyebrow"><?php echo $rotHeadEsc($rotBrowseEyebrow ?? 'Available placements'); ?></span>
            <h2 id="rotTitle" class="msp-h2"><?php echo $rotHeadEsc($rotBrowseTitle ?? 'Rotations that open doors. Not just fill weeks.'); ?></h2>
            <p class="msp-sub"><?php echo $rotHeadEsc($rotBrowseSub ?? 'IMG-friendly placements with hospital letterhead LORs, monthly starts, and full clinical exposure.'); ?></p>
          </div>

          <!-- Search bar -->
          <div class="rot-search">
            <i data-lucide="search" width="16" height="16" class="rot-search__icon" aria-hidden="true"></i>
            <input
              type="search"
              id="rotSearchInput"
              class="rot-search__input"
              placeholder="Search by specialty, hospital, or city..."
              aria-label="Search rotations"
              autocomplete="off"
            />
            <button class="rot-search__clear" id="rotSearchClear" type="button" aria-label="Clear search" hidden>
              <i data-lucide="x" width="14" height="14"></i>
            </button>
          </div>

          <!-- Mobile filter toggle -->
          <button class="rot-filter-toggle" id="rotFilterToggle" aria-expanded="false" aria-controls="rotSidebar">
            <i data-lucide="sliders-horizontal" width="14" height="14"></i>
            Filters
            <span class="rot-filter-toggle__count" id="rotFilterCount" aria-live="polite" hidden></span>
          </button>

          <!-- Browse layout: sidebar + grid -->
          <div class="rot-browse-layout">

            <!-- Sidebar -->
            <aside class="rot-sidebar" id="rotSidebar" aria-label="Filter rotations">
              <div class="rot-sidebar__hd">
                <span class="rot-sidebar__title">Filter</span>
                <button class="rot-sidebar__reset" id="rotReset" type="button">Clear all</button>
              </div>

              <div class="rot-sidebar__group is-open">
                <button class="rot-sidebar__gh" type="button" aria-expanded="true">
                  <span>Specialty</span>
                  <i data-lucide="chevron-down" width="14" height="14"></i>
                </button>
                <ul class="rot-sidebar__opts">
<?php echo $rotRenderFilterOptions('specialty', $rotationsFilters['specialties'] ?? []) . "\n"; ?>
                </ul>
              </div>

              <div class="rot-sidebar__group is-open">
                <button class="rot-sidebar__gh" type="button" aria-expanded="true">
                  <span>State</span>
                  <i data-lucide="chevron-down" width="14" height="14"></i>
                </button>
                <ul class="rot-sidebar__opts">
<?php echo $rotRenderFilterOptions('state', $rotationsFilters['states'] ?? []) . "\n"; ?>
                </ul>
              </div>

              <div class="rot-sidebar__group is-open">
                <button class="rot-sidebar__gh" type="button" aria-expanded="true">
                  <span>Price</span>
                  <i data-lucide="chevron-down" width="14" height="14"></i>
                </button>
                <div class="rot-price-slider">
                  <div class="rot-price-slider__labels">
                    <span id="priceMinLabel">$<?php echo number_format($priceSliderMin); ?></span>
                    <span id="priceMaxLabel">$<?php echo number_format($priceSliderMax); ?>+</span>
                  </div>
                  <div class="rot-price-slider__track-wrap">
                    <div class="rot-price-slider__track"></div>
                    <div class="rot-price-slider__fill" id="priceFill"></div>
                    <input type="range" id="priceSliderMin" class="rot-price-slider__thumb"
                           min="<?php echo $priceSliderMin; ?>" max="<?php echo $priceSliderMax; ?>" step="50" value="<?php echo $priceSliderMin; ?>" aria-label="Minimum price">
                    <input type="range" id="priceSliderMax" class="rot-price-slider__thumb"
                           min="<?php echo $priceSliderMin; ?>" max="<?php echo $priceSliderMax; ?>" step="50" value="<?php echo $priceSliderMax; ?>" aria-label="Maximum price">
                  </div>
                </div>
              </div>

              <div class="rot-sidebar__group is-open">
                <button class="rot-sidebar__gh" type="button" aria-expanded="true">
                  <span>Setting</span>
                  <i data-lucide="chevron-down" width="14" height="14"></i>
                </button>
                <ul class="rot-sidebar__opts">
<?php echo $rotRenderFilterOptions('setting', $rotationsFilters['settings'] ?? []) . "\n"; ?>
                </ul>
              </div>
            </aside>

            <!-- Main: card grid -->
            <div class="rot-browse-main">
              <div class="rot-pg-grid" id="rotGrid">

<?php foreach ($rotationsList as $rotationCard): ?>
<?php echo $rotRenderCard($rotationCard) . "\n"; ?>

<?php endforeach; ?>
              </div><!-- /.rot-pg-grid -->

              <p class="rot-pg-empty" id="rotEmpty" hidden>
                No rotations match your filters.
                <button class="rot-pg-reset" id="rotResetInline" type="button">Reset filters</button>
              </p>

            </div><!-- /.rot-browse-main -->
          </div><!-- /.rot-browse-layout -->

        </div>
      </section>
