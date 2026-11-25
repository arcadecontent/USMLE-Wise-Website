<?php
/**
 * Live crash course cohorts: the one place to schedule a launch.
 *
 * Each of the three live pages (/step-1-live-high-yield-crash-course,
 * /step-2-live-crash-course, /step-3-live-crash-course) reads its dates from
 * here: the date line in the hero, the countdown, the dated Day 1..N list,
 * the time-zone table, the FAQ answer and the enroll buttons.
 *
 * TO LAUNCH A NEW COHORT, change that step's 'cohort' below:
 *
 *   'cohort' => ['start' => '2026-12-06 07:00'],
 *
 *   start         Day 1, in New York time (24-hour). Sessions run daily from
 *                 this time, for the course's 'days'.
 *   enroll_until  Optional, New York time. When enrollment closes. Leave it out
 *                 and enrollment closes the moment the cohort starts.
 *
 * Set 'cohort' => null when nothing is scheduled. The page then says the next
 * dates will be announced and swaps the enroll buttons for "notify me on
 * WhatsApp" and a link to the recorded course. It does the same on its own
 * once a cohort has started or finished, so an old date never stays on sale.
 *
 * Format facts ('days', 'hours', 'session_hours') describe the course itself.
 * The headline, hero line, curriculum title, offer list and time-zone table
 * follow them. If a launch changes the format, change them here and also edit
 * that page's day-by-day curriculum list so it has the same number of days.
 *
 * The recorded versions (/step-N-high-yield-crash-course) are always on sale
 * and do not use this file.
 *
 * This file only decides what the pages show. Prices and checkout live on
 * Mastery (js/course-pay.js), and its Step 2 and Step 3 products sell "this
 * month's live cohort" (Mastery src/lib/cohorts.ts), so keep that in step with
 * the dates here when you launch.
 */

if (!defined('UWCC_TZ')) define('UWCC_TZ', 'America/New_York');

/** The three live courses and their next cohort. */
function uwcc_courses(): array
{
    return [
        'step1' => [
            'label'         => 'Step 1',
            'days'          => 7,
            'hours'         => 70,
            'session_hours' => 10,   // longest day; sets the "Ends" column of the time-zone table
            'cohort'        => null, // the Nov 1 to 7, 2026 cohort is over; add the next start here
        ],
        'step2' => [
            'label'         => 'Step 2',
            'days'          => 8,
            'hours'         => 61,
            'session_hours' => 8,
            'cohort'        => ['start' => '2026-11-24 07:00'],
        ],
        'step3' => [
            'label'         => 'Step 3',
            'days'          => 9,
            'hours'         => 68,
            'session_hours' => 8,
            'cohort'        => ['start' => '2026-11-24 07:00'],
        ],
    ];
}

/**
 * One course with its cohort worked out for right now.
 *
 * 'state' is one of:
 *   open      enrollment is open (before the cohort starts, or until enroll_until)
 *   underway  the cohort is running and enrollment is closed
 *   none      nothing scheduled, or the last cohort has finished
 *
 * When a date is known ('open' or 'underway') the array also carries start,
 * lastDay, end, enrollEnd (DateTimeImmutable, New York time), the epoch seconds the
 * countdown aims at (countdownTo), whether the cohort has begun (started),
 * and display strings (range, startDay, startTime).
 *
 * Pass $now only to test a state. A page can also be previewed at a given
 * moment by defining UWCC_NOW (any strtotime string, New York time) before it
 * runs; production never does.
 */
function uwcc_live_cohort(string $step, ?DateTimeImmutable $now = null): ?array
{
    $courses = uwcc_courses();
    if (!isset($courses[$step])) return null;

    $course = $courses[$step];
    $tz = new DateTimeZone(UWCC_TZ);
    if (!$now) $now = new DateTimeImmutable(defined('UWCC_NOW') ? UWCC_NOW : 'now', $tz);

    $c = $course + [
        'step' => $step, 'state' => 'none', 'now' => $now,
        'start' => null, 'lastDay' => null, 'end' => null, 'enrollEnd' => null,
        'started' => false, 'countdownTo' => null,
        'range' => '', 'startDay' => '', 'startTime' => '',
    ];

    $spec = $course['cohort'] ?? null;
    if (!$spec || empty($spec['start'])) return $c;

    $start = new DateTimeImmutable($spec['start'], $tz);
    $end = $start->modify('+' . max(0, $course['days'] - 1) . ' days')
                 ->modify('+' . $course['session_hours'] . ' hours');
    $enrollEnd = !empty($spec['enroll_until']) ? new DateTimeImmutable($spec['enroll_until'], $tz) : $start;

    if ($now < $enrollEnd) $c['state'] = 'open';
    elseif ($now < $end)   $c['state'] = 'underway';
    else                   return $c;

    $lastDay = $start->modify('+' . max(0, $course['days'] - 1) . ' days');
    $c['start'] = $start;
    $c['lastDay'] = $lastDay;
    $c['end'] = $end;
    $c['enrollEnd'] = $enrollEnd;
    $c['started'] = $now >= $start;
    $c['countdownTo'] = ($c['started'] ? $enrollEnd : $start)->getTimestamp();
    $c['range'] = $start->format('Y-m') === $lastDay->format('Y-m')
        ? $start->format('M j') . ' to ' . $lastDay->format('j, Y')
        : $start->format('M j') . ' to ' . $lastDay->format('M j, Y');
    $c['startDay'] = $start->format('l, F j, Y');
    $c['startTime'] = ltrim($start->format('g:i A'), '0') . ' Eastern';
    return $c;
}

/** "Tue, Nov 24" for day $i (0-based) of a dated cohort, or '' when there is no date. */
function uwcc_day_date(array $c, int $i): string
{
    return $c['start'] ? $c['start']->modify('+' . $i . ' days')->format('D, M j') : '';
}

/** "Day 3 · Thu, Nov 26", or just "Day 3" when no date is set. */
function uwcc_day_label(array $c, int $i): string
{
    $d = uwcc_day_date($c, $i);
    return 'Day ' . ($i + 1) . ($d !== '' ? ' · ' . $d : '');
}

/**
 * Rows for the "what time is it for me" table: [place, starts, ends] in each
 * time zone, worked out from the first session so daylight saving is right.
 * Empty when no date is set.
 */
function uwcc_schedule_rows(array $c): array
{
    if (!$c['start']) return [];
    $zones = [
        ['New York', 'America/New_York', null],
        ['India', 'Asia/Kolkata', 'IST'],
        ['London', 'Europe/London', null],
        ['Dubai', 'Asia/Dubai', 'GST'],
        ['Nepal', 'Asia/Kathmandu', 'NPT'],
        ['Pakistan', 'Asia/Karachi', 'PKT'],
    ];
    $first = $c['start'];
    $last = $first->modify('+' . $c['session_hours'] . ' hours');
    $rows = [];
    foreach ($zones as [$place, $zone, $abbr]) {
        $z = new DateTimeZone($zone);
        $s = $first->setTimezone($z);
        $e = $last->setTimezone($z);
        $rows[] = [
            $place . ' (' . ($abbr ?? $s->format('T')) . ')',
            ltrim($s->format('g:i A'), '0'),
            ltrim($e->format('g:i A'), '0'),
        ];
    }
    return $rows;
}

/** wa.me link a visitor taps to be told when the next cohort opens. */
function uwcc_notify_url(string $label): string
{
    return 'https://wa.me/19192015700?text=' . rawurlencode('Please let me know when the next ' . $label . ' live crash course opens');
}

/** Where each version of a course lives. $kind is 'recorded' or 'live'. */
function uwcc_page_url(string $step, string $kind): string
{
    static $urls = [
        'step1' => ['recorded' => '/step-1-high-yield-crash-course', 'live' => '/step-1-live-high-yield-crash-course'],
        'step2' => ['recorded' => '/step-2-high-yield-crash-course', 'live' => '/step-2-live-crash-course'],
        'step3' => ['recorded' => '/step-3-high-yield-crash-course', 'live' => '/step-3-live-crash-course'],
    ];
    return $urls[$step][$kind] ?? '/coaching';
}

/** "6d 14h 22m" while a day or more remains, then "14h 22m 10s". js/cohort-countdown.js mirrors this. */
function uwcc_countdown_text(int $seconds): string
{
    $seconds = max(0, $seconds);
    $d = intdiv($seconds, 86400);
    $h = intdiv($seconds % 86400, 3600);
    $m = intdiv($seconds % 3600, 60);
    $s = $seconds % 60;
    return $d > 0 ? "{$d}d {$h}h {$m}m" : "{$h}h {$m}m {$s}s";
}
