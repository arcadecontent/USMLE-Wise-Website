<?php
$pageTitle = "Conference Finder | USMLE Wise";
$pageDescription = "Browse actively held U.S. medical conferences by specialty, timing, and submission deadline. Find a conference to submit your research to.";
$canonical = "https://usmlewise.com/conference-finder";
$bodyClass = "msp";
$stylesheets = [
    "/styles/conferences.css"
];
$scripts = [
    "/js/conferences.js"
];

// SAMPLE data for now — see data/conferences-sample.php. Swapping this for a
// live CRM-backed source (like data/rotations.php) is a follow-up dev task.
require_once $_SERVER['DOCUMENT_ROOT'] . '/data/conferences-sample.php';
$conferencesData   = usmlewise_conferences_sample();
$conferencesList   = $conferencesData['conferences'];
$conferencesSpecs  = $conferencesData['specialties'];
$conferencesStatus = $conferencesData['statuses'];
$conferencesUpdated = $conferencesData['last_updated'];
$conferencesOpenCount = count(array_filter($conferencesList, 'usmlewise_conf_is_open'));

/**
 * Signed day count from today to an ISO (Y-m-d) date, or null if the date
 * is missing/unparseable. Computed at render time (not baked into the data)
 * so the counters on the page are never stale.
 */
function usmlewise_conf_days_until(?string $isoDate): ?int
{
    if (!$isoDate) {
        return null;
    }
    $target = DateTime::createFromFormat('Y-m-d', $isoDate);
    if (!$target) {
        return null;
    }
    $target->setTime(0, 0, 0);
    $today = new DateTime('today');
    return (int) $today->diff($target)->format('%r%a');
}

function usmlewise_conf_timing_label(?string $startIso, ?string $endIso): string
{
    $startDays = usmlewise_conf_days_until($startIso);
    if ($startDays === null) {
        return '';
    }
    if ($startDays > 1) {
        return "Starts in {$startDays} days";
    }
    if ($startDays === 1) {
        return 'Starts tomorrow';
    }
    if ($startDays === 0) {
        return 'Starts today';
    }
    $endDays = usmlewise_conf_days_until($endIso);
    if ($endDays !== null && $endDays >= 0) {
        return 'Happening now';
    }
    return 'Concluded';
}

function usmlewise_conf_deadline_timing(?string $deadlineIso): string
{
    $days = usmlewise_conf_days_until($deadlineIso);
    if ($days === null) {
        return '';
    }
    if ($days > 1) {
        return "Closes in {$days} days";
    }
    if ($days === 1) {
        return 'Closes tomorrow';
    }
    if ($days === 0) {
        return 'Closes today';
    }
    return 'Deadline passed';
}

/**
 * Whether a conference's abstract deadline is still open, checked live
 * against today when a real deadline_date exists rather than trusted from
 * the sheet's Oct-3 snapshot flag (so this self-corrects as deadlines pass).
 */
function usmlewise_conf_is_open(array $c): bool
{
    $deadlineDateIso = $c['deadline_date'] ?? null;
    if ($deadlineDateIso) {
        $days = usmlewise_conf_days_until($deadlineDateIso);
        return $days !== null && $days >= 0;
    }
    return !empty($c['deadline_open']);
}

function usmlewise_render_conf_filter_options(string $filter, array $options): string
{
    $attr = static function ($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); };
    $esc  = static function ($v) { return htmlspecialchars((string) $v, ENT_NOQUOTES, 'UTF-8'); };
    $lines = [];
    foreach ($options as $opt) {
        $lines[] = '                  <li><button class="conf-sidebar__opt" type="button" data-filter="'
            . $attr($filter) . '" data-value="' . $attr($opt['value'] ?? '') . '">'
            . $esc($opt['label'] ?? '') . '</button></li>';
    }
    return implode("\n", $lines);
}

function usmlewise_render_conf_card(array $c): string
{
    $esc  = static function ($v) { return htmlspecialchars((string) $v, ENT_NOQUOTES, 'UTF-8'); };
    $attr = static function ($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); };

    $deadlineOpen = usmlewise_conf_is_open($c);
    $statusValue  = $attr($c['status_value'] ?? '');

    $searchText = strtolower(implode(' ', array_filter([
        $c['name'] ?? '',
        $c['specialty'] ?? '',
        $c['city'] ?? '',
        $c['state'] ?? '',
    ])));

    // ---- Facts grid: timing, abstract deadline, registration, fee, publish status ----
    $timingLabel = usmlewise_conf_timing_label($c['start_date'] ?? null, $c['end_date'] ?? null);

    $deadlineDays = usmlewise_conf_deadline_timing($c['deadline_date'] ?? null);
    if ($deadlineDays !== '') {
        // We have a real date: lead with the day count, keep the sheet's
        // original note (exact time, fee mentions, etc.) alongside it.
        $deadlineValue = $deadlineDays . ' — ' . ($c['deadline_label'] ?? '');
        $deadlineTbd = false;
    } else {
        // No parseable date yet -- fall back to the sheet's own free-text
        // status (already reads like "Not yet published", "Not an abstract
        // venue", etc.), which doubles as our TBD state for this field.
        $deadlineValue = $c['deadline_label'] ?? 'Not yet published';
        $deadlineTbd = true;
    }

    $fee = $c['submission_fee'] ?? null;
    $feeValue = $fee !== null && $fee !== '' ? $fee : 'To be announced';
    $feeTbd = ($fee === null || $fee === '');

    $publishes = $c['publishes_abstract'] ?? null;
    $publishesValue = $publishes !== null && $publishes !== '' ? $publishes : 'To be decided';
    $publishesTbd = ($publishes === null || $publishes === '');

    $regDeadline = $c['registration_deadline_date'] ?? null;
    $regValue = 'Stay tuned';
    $regTbd = true;
    if ($regDeadline) {
        $regDays = usmlewise_conf_days_until($regDeadline);
        if ($regDays !== null) {
            $regValue = ($regDays > 0 ? "Closes in {$regDays} days" : ($regDays === 0 ? 'Closes today' : 'Deadline passed'));
            $regTbd = false;
        }
    }

    $factRow = static function (string $label, string $value, bool $tbd) use ($esc) {
        return '                <div class="conf-fact' . ($tbd ? ' conf-fact--tbd' : '') . '">' . "\n" .
            '                  <span class="conf-fact__label">' . $esc($label) . '</span>' . "\n" .
            '                  <span class="conf-fact__value">' . $esc($value) . '</span>' . "\n" .
            '                </div>';
    };

    $factsHtml = implode("\n", [
        $factRow('Conference', $timingLabel !== '' ? $timingLabel : 'Dates TBD', $timingLabel === ''),
        $factRow('Abstract deadline', $deadlineValue, $deadlineTbd),
        $factRow('Registration deadline', $regValue, $regTbd),
        $factRow('Submission fee', $feeValue, $feeTbd),
        $factRow('Publishes abstract', $publishesValue, $publishesTbd),
    ]);

    return
        '            <article class="conf-card reveal' . ($deadlineOpen ? ' is-deadline-open' : '') . '"' . "\n" .
        '                     data-specialty="' . $attr($c['specialty_value'] ?? '') . '"' . "\n" .
        '                     data-status="' . $statusValue . '"' . "\n" .
        '                     data-deadline="' . ($deadlineOpen ? 'open' : '') . '"' . "\n" .
        '                     data-search="' . $attr($searchText) . '">' . "\n" .
        '              <div class="conf-card__top">' . "\n" .
        '                <div class="conf-card__badges">' . "\n" .
        '                  <span class="conf-badge conf-badge--specialty">' . $esc($c['specialty'] ?? '') . '</span>' . "\n" .
        '                  <span class="conf-badge conf-badge--' . $statusValue . '">' . $esc($c['status'] ?? '') . '</span>' . "\n" .
        '                </div>' . "\n" .
        '                <span class="conf-card__loc"><i data-lucide="map-pin" width="11" height="11"></i>' . $esc(($c['city'] ?? '') . ', ' . ($c['state'] ?? '')) . '</span>' . "\n" .
        '              </div>' . "\n" .
        '              <div class="conf-card__mid">' . "\n" .
        '                <h3 class="conf-card__title">' . $esc($c['name'] ?? '') . '</h3>' . "\n" .
        '                <span class="conf-card__dates">' . $esc($c['date_range'] ?? '') . '</span>' . "\n" .
        '              </div>' . "\n" .
        '              <div class="conf-card__facts">' . "\n" .
        $factsHtml . "\n" .
        '              </div>' . "\n" .
        '              <a href="' . $attr($c['link'] ?? '#') . '" class="btn btn--outline btn--sm conf-card__cta" target="_blank" rel="noopener noreferrer">' . "\n" .
        '                Visit site <i data-lucide="arrow-up-right" width="13" height="13"></i>' . "\n" .
        '              </a>' . "\n" .
        '            </article>';
}

include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
?>
<main>
      <!-- ============== CONFERENCE FINDER ============== -->
      <section class="msp-section conf-browse" id="conferences" aria-labelledby="confTitle">
        <div class="msp-wrap">

          <div class="msp-head reveal">
            <span class="msp-eyebrow">Research Guidance</span>
            <h2 id="confTitle" class="msp-h2">Find a conference to submit to</h2>
            <p class="msp-sub">Actively held U.S. conferences, filterable by specialty and timing, so you always know what's open and worth submitting to.</p>
          </div>

          <div class="conf-summary reveal">
            <span><strong><?php echo count($conferencesList); ?></strong> conferences</span>
            <span><strong><?php echo $conferencesOpenCount; ?></strong> open deadlines</span>
            <span><strong><?php echo count($conferencesSpecs); ?></strong> specialties</span>
            <span>Last updated <?php echo htmlspecialchars($conferencesUpdated, ENT_QUOTES, 'UTF-8'); ?></span>
          </div>

          <!-- Search bar -->
          <div class="conf-search">
            <i data-lucide="search" width="16" height="16" class="conf-search__icon" aria-hidden="true"></i>
            <input
              type="search"
              id="confSearchInput"
              class="conf-search__input"
              placeholder="Search by conference, specialty, or city..."
              aria-label="Search conferences"
              autocomplete="off"
            />
            <button class="conf-search__clear" id="confSearchClear" type="button" aria-label="Clear search" hidden>
              <i data-lucide="x" width="14" height="14"></i>
            </button>
          </div>

          <!-- Mobile filter toggle -->
          <button class="conf-filter-toggle" id="confFilterToggle" aria-expanded="false" aria-controls="confSidebar">
            <i data-lucide="sliders-horizontal" width="14" height="14"></i>
            Filters
            <span class="conf-filter-toggle__count" id="confFilterCount" aria-live="polite" hidden></span>
          </button>

          <!-- Browse layout: sidebar + grid -->
          <div class="conf-browse-layout">

            <!-- Sidebar -->
            <aside class="conf-sidebar" id="confSidebar" aria-label="Filter conferences">
              <div class="conf-sidebar__hd">
                <span class="conf-sidebar__title">Filter</span>
                <button class="conf-sidebar__reset" id="confReset" type="button">Clear all</button>
              </div>

              <div class="conf-sidebar__group is-open">
                <button class="conf-sidebar__gh" type="button" aria-expanded="true">
                  <span>Deadline</span>
                  <i data-lucide="chevron-down" width="14" height="14"></i>
                </button>
                <ul class="conf-sidebar__opts">
                  <li><button class="conf-sidebar__opt" type="button" data-filter="deadline" data-value="open">Submission still open</button></li>
                </ul>
              </div>

              <div class="conf-sidebar__group is-open">
                <button class="conf-sidebar__gh" type="button" aria-expanded="true">
                  <span>Timing</span>
                  <i data-lucide="chevron-down" width="14" height="14"></i>
                </button>
                <ul class="conf-sidebar__opts">
<?php echo usmlewise_render_conf_filter_options('status', $conferencesStatus) . "\n"; ?>
                </ul>
              </div>

              <div class="conf-sidebar__group is-open">
                <button class="conf-sidebar__gh" type="button" aria-expanded="true">
                  <span>Specialty</span>
                  <i data-lucide="chevron-down" width="14" height="14"></i>
                </button>
                <ul class="conf-sidebar__opts conf-sidebar__opts--scroll">
<?php echo usmlewise_render_conf_filter_options('specialty', $conferencesSpecs) . "\n"; ?>
                </ul>
              </div>
            </aside>

            <!-- Main: card grid -->
            <div class="conf-browse-main">
              <div class="conf-grid" id="confGrid">

<?php foreach ($conferencesList as $conferenceCard): ?>
<?php echo usmlewise_render_conf_card($conferenceCard) . "\n"; ?>

<?php endforeach; ?>
              </div><!-- /.conf-grid -->

              <p class="conf-empty" id="confEmpty" hidden>
                No conferences match your filters.
                <button class="conf-reset-inline" id="confResetInline" type="button">Reset filters</button>
              </p>

            </div><!-- /.conf-browse-main -->
          </div><!-- /.conf-browse-layout -->

        </div>
      </section>
    </main>

    <!-- ============== FOOTER ============== -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
