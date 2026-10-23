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

// Data comes from the CRM feed (see data/conferences.php); edit conferences at
// https://team.manikmadaan.com/admin/conferences.
require_once $_SERVER['DOCUMENT_ROOT'] . '/data/conferences.php';
$conferencesData   = usmlewise_conferences_payload();
$conferencesList   = $conferencesData['conferences'];
$conferencesSpecs  = $conferencesData['specialties'];
$conferencesSpecGroups = usmlewise_conference_specialty_groups();
$conferencesStatus = $conferencesData['statuses'];
$conferencesUpdated = $conferencesData['last_updated'];
$conferencesOpenCount = count(array_filter($conferencesList, 'usmlewise_conf_is_open'));
$conferencesUwCount = count(array_filter($conferencesList, 'usmlewise_conf_is_participating'));

// Sidebar facet counts: whole-dataset totals, so they don't move as filters
// are applied -- they're there to show which buckets are worth opening.
$conferencesStatusCounts = [];
foreach ($conferencesList as $conferenceRow) {
    $statusKey = $conferenceRow['status_value'] ?? '';
    $conferencesStatusCounts[$statusKey] = ($conferencesStatusCounts[$statusKey] ?? 0) + 1;
}

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

/**
 * Whether USMLE Wise is attending the conference. Tri-state in the data:
 * true (confirmed), false (not attending) and null (under consideration,
 * renders as "To be confirmed"); only true drives the badge and the filter.
 */
function usmlewise_conf_is_participating(array $c): bool
{
    return ($c['usmlewise_participating'] ?? null) === true;
}

/**
 * Flat option list for the single-level filter groups. $counts is an optional
 * value => total map; every group in the sidebar shows counts, so leaving it
 * out should be a deliberate choice rather than an oversight.
 */
function usmlewise_render_conf_filter_options(string $filter, array $options, array $counts = []): string
{
    $attr = static function ($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); };
    $esc  = static function ($v) { return htmlspecialchars((string) $v, ENT_NOQUOTES, 'UTF-8'); };
    $lines = [];
    foreach ($options as $opt) {
        $value = $opt['value'] ?? '';
        $count = array_key_exists($value, $counts)
            ? '<span class="conf-sidebar__count">' . (int) $counts[$value] . '</span>'
            : '';
        $lines[] = '                  <li><button class="conf-sidebar__opt" type="button" data-filter="'
            . $attr($filter) . '" data-value="' . $attr($value) . '">'
            . '<span class="conf-sidebar__opt-label">' . $esc($opt['label'] ?? '') . '</span>'
            . $count . '</button></li>';
    }
    return implode("\n", $lines);
}

/**
 * Parent Match specialty for a sheet-level specialty_value, falling back to
 * the leaf itself so an untaxonomised tag still filters as its own group.
 */
function usmlewise_conf_specialty_group(string $leaf): string
{
    static $map = null;
    if ($map === null) {
        $map = [];
        foreach (usmlewise_conference_specialty_groups() as $groupValue => $group) {
            foreach ($group['children'] as $child) {
                $map[$child] = $groupValue;
            }
        }
    }
    return $map[$leaf] ?? $leaf;
}

/**
 * Sidebar Specialty list: one row per parent specialty, with the IM-style
 * clusters tucked behind a caret. Counts are whole-dataset totals (they do
 * not react to the other filter groups), there to show up front which
 * buckets are big rather than to track the current result set.
 */
function usmlewise_render_conf_specialty_filter(array $groups, array $specialties, array $conferences): string
{
    $attr = static function ($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); };
    $esc  = static function ($v) { return htmlspecialchars((string) $v, ENT_NOQUOTES, 'UTF-8'); };

    // Leaf label lookup + per-leaf conference counts
    $labels = [];
    foreach ($specialties as $spec) {
        $labels[$spec['value']] = $spec['label'];
    }
    $leafCounts = [];
    foreach ($conferences as $c) {
        $leaf = $c['specialty_value'] ?? '';
        $leafCounts[$leaf] = ($leafCounts[$leaf] ?? 0) + 1;
    }

    $countEl = static function (int $n) {
        return '<span class="conf-sidebar__count">' . $n . '</span>';
    };

    $lines = [];
    $covered = [];

    foreach ($groups as $groupValue => $group) {
        $children = $group['children'];
        $childLabels = $group['child_labels'] ?? [];
        $covered = array_merge($covered, $children);

        $groupCount = 0;
        foreach ($children as $child) {
            $groupCount += $leafCounts[$child] ?? 0;
        }

        // A single-child group is just a plain row -- nothing to expand into.
        $hasSubs = count($children) > 1;

        $row = '                  <li class="conf-sidebar__parent">' . "\n"
            . '                    <div class="conf-sidebar__row">' . "\n"
            . '                      <button class="conf-sidebar__opt" type="button" data-filter="specialty-group" data-value="'
            . $attr($groupValue) . '"><span class="conf-sidebar__opt-label">' . $esc($group['label']) . '</span>'
            . $countEl($groupCount) . '</button>' . "\n";

        if ($hasSubs) {
            $row .= '                      <button class="conf-sidebar__sub-toggle" type="button" aria-expanded="false" aria-label="'
                . $attr('Show ' . $group['label'] . ' subspecialties') . '">' . "\n"
                . '                        <i data-lucide="chevron-down" width="12" height="12"></i>' . "\n"
                . '                      </button>' . "\n";
        }

        $row .= '                    </div>' . "\n";

        if ($hasSubs) {
            $row .= '                    <ul class="conf-sidebar__subopts">' . "\n";
            foreach ($children as $child) {
                $label = $childLabels[$child] ?? ($labels[$child] ?? $child);
                $row .= '                      <li><button class="conf-sidebar__opt conf-sidebar__opt--sub" type="button" data-filter="specialty" data-value="'
                    . $attr($child) . '"><span class="conf-sidebar__opt-label">' . $esc($label) . '</span>'
                    . $countEl($leafCounts[$child] ?? 0) . '</button></li>' . "\n";
            }
            $row .= '                    </ul>' . "\n";
        }

        $row .= '                  </li>';
        $lines[] = $row;
    }

    // Safety net: a specialty the taxonomy forgot still gets a filter row.
    foreach ($specialties as $spec) {
        if (in_array($spec['value'], $covered, true)) {
            continue;
        }
        $lines[] = '                  <li class="conf-sidebar__parent">' . "\n"
            . '                    <div class="conf-sidebar__row">' . "\n"
            . '                      <button class="conf-sidebar__opt" type="button" data-filter="specialty" data-value="'
            . $attr($spec['value']) . '"><span class="conf-sidebar__opt-label">' . $esc($spec['label']) . '</span>'
            . $countEl($leafCounts[$spec['value']] ?? 0) . '</button>' . "\n"
            . '                    </div>' . "\n"
            . '                  </li>';
    }

    return implode("\n", $lines);
}

function usmlewise_render_conf_card(array $c): string
{
    $esc  = static function ($v) { return htmlspecialchars((string) $v, ENT_NOQUOTES, 'UTF-8'); };
    $attr = static function ($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); };

    $deadlineOpen  = usmlewise_conf_is_open($c);
    $participating = usmlewise_conf_is_participating($c);
    $statusValue   = $attr($c['status_value'] ?? '');

    $searchText = strtolower(implode(' ', array_filter([
        $c['name'] ?? '',
        $c['specialty'] ?? '',
        $c['city'] ?? '',
        $c['state'] ?? '',
        // so typing "usmle wise" surfaces the conferences we're at
        $participating ? 'USMLE Wise attending' : '',
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

    // Tri-state: true = confirmed, false = not attending, null = undecided.
    $uwRaw = $c['usmlewise_participating'] ?? null;
    $uwValue = $participating ? 'Attending' : ($uwRaw === null ? 'To be confirmed' : 'Not attending');
    $uwTbd = ($uwRaw === null);

    $factRow = static function (string $label, string $value, bool $tbd, string $mod = '') use ($esc) {
        return '                <div class="conf-fact' . ($tbd ? ' conf-fact--tbd' : '') . ($mod !== '' ? ' ' . $mod : '') . '">' . "\n" .
            '                  <span class="conf-fact__label">' . $esc($label) . '</span>' . "\n" .
            '                  <span class="conf-fact__value">' . $esc($value) . '</span>' . "\n" .
            '                </div>';
    };

    // Keep the new row last: .is-deadline-open styling targets :nth-child(2).
    $factsHtml = implode("\n", [
        $factRow('Conference', $timingLabel !== '' ? $timingLabel : 'Dates TBD', $timingLabel === ''),
        $factRow('Abstract deadline', $deadlineValue, $deadlineTbd),
        $factRow('Registration deadline', $regValue, $regTbd),
        $factRow('Submission fee', $feeValue, $feeTbd),
        $factRow('Publishes abstract', $publishesValue, $publishesTbd),
        $factRow('USMLE Wise', $uwValue, $uwTbd, $participating ? 'conf-fact--uw-yes' : ''),
    ]);

    return
        '            <article class="conf-card reveal' . ($deadlineOpen ? ' is-deadline-open' : '') . ($participating ? ' is-uw-attending' : '') . '"' . "\n" .
        '                     data-specialty="' . $attr($c['specialty_value'] ?? '') . '"' . "\n" .
        '                     data-specialty-group="' . $attr(usmlewise_conf_specialty_group($c['specialty_value'] ?? '')) . '"' . "\n" .
        '                     data-status="' . $statusValue . '"' . "\n" .
        '                     data-deadline="' . ($deadlineOpen ? 'open' : '') . '"' . "\n" .
        '                     data-participating="' . ($participating ? 'yes' : '') . '"' . "\n" .
        '                     data-search="' . $attr($searchText) . '">' . "\n" .
        '              <div class="conf-card__top">' . "\n" .
        '                <div class="conf-card__badges">' . "\n" .
        '                  <span class="conf-badge conf-badge--specialty">' . $esc($c['specialty'] ?? '') . '</span>' . "\n" .
        '                  <span class="conf-badge conf-badge--' . $statusValue . '">' . $esc($c['status'] ?? '') . '</span>' . "\n" .
        ($participating
            ? '                  <span class="conf-badge conf-badge--uw"><i data-lucide="badge-check" width="10" height="10"></i>USMLE Wise attending</span>' . "\n"
            : '') .
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
<?php if ($conferencesUwCount > 0): ?>
            <span><strong><?php echo $conferencesUwCount; ?></strong> we're attending</span>
<?php endif; ?>
            <span><strong><?php echo count($conferencesSpecGroups); ?></strong> specialties</span>
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
                  <span>USMLE Wise</span>
                  <i data-lucide="chevron-down" width="14" height="14"></i>
                </button>
                <ul class="conf-sidebar__opts">
                  <li><button class="conf-sidebar__opt" type="button" data-filter="participating" data-value="yes"><span class="conf-sidebar__opt-label">We're attending</span><span class="conf-sidebar__count"><?php echo $conferencesUwCount; ?></span></button></li>
                </ul>
              </div>

              <div class="conf-sidebar__group is-open">
                <button class="conf-sidebar__gh" type="button" aria-expanded="true">
                  <span>Deadline</span>
                  <i data-lucide="chevron-down" width="14" height="14"></i>
                </button>
                <ul class="conf-sidebar__opts">
                  <li><button class="conf-sidebar__opt" type="button" data-filter="deadline" data-value="open"><span class="conf-sidebar__opt-label">Submission still open</span><span class="conf-sidebar__count"><?php echo $conferencesOpenCount; ?></span></button></li>
                </ul>
              </div>

              <div class="conf-sidebar__group is-open">
                <button class="conf-sidebar__gh" type="button" aria-expanded="true">
                  <span>Timing</span>
                  <i data-lucide="chevron-down" width="14" height="14"></i>
                </button>
                <ul class="conf-sidebar__opts">
<?php echo usmlewise_render_conf_filter_options('status', $conferencesStatus, $conferencesStatusCounts) . "\n"; ?>
                </ul>
              </div>

              <div class="conf-sidebar__group is-open">
                <button class="conf-sidebar__gh" type="button" aria-expanded="true">
                  <span>Specialty</span>
                  <i data-lucide="chevron-down" width="14" height="14"></i>
                </button>
                <ul class="conf-sidebar__opts conf-sidebar__opts--tree">
<?php echo usmlewise_render_conf_specialty_filter($conferencesSpecGroups, $conferencesSpecs, $conferencesList) . "\n"; ?>
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
