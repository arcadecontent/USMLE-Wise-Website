<?php
/**
 * Wiki volatile-facts registry.
 *
 * Anything that changes over time (fees, dates, passing standards, attempt
 * limits) is stored ONCE here and referenced from articles as {{fact:id}}.
 * When a number changes, edit it here and every article updates.
 *
 * Fields:
 *   value       What is printed in the article. Leave '' when it has not been
 *               confirmed yet: the article then prints "check current figure"
 *               linking to the source instead of a guess.
 *   source      Short name of the primary source.
 *   url         Primary-source URL.
 *   checked_on  ISO date a human last confirmed `value` against the source.
 *   verified    true only after a person has confirmed value against the source.
 *               tools/wiki-check.php FAILS the build when a PUBLISHED article
 *               uses a fact that is unverified or empty.
 *
 *   guard       Optional list of literal strings (e.g. '70.0%'). tools/wiki-check.php warns
 *               when one appears typed into an article, so a figure that lives here
 *               cannot quietly drift out of sync on a single page.
 *
 * Do not put an unconfirmed number in `value` and mark it verified. An empty
 * value is always better than a wrong fee or deadline on a page people use to
 * plan an immigration and exam timeline.
 */

function usmlewise_wiki_facts(): array
{
    return [

        /* ---------------- USMLE ---------------- */

        'step1_pass_fail_since' => [
            'value'      => 'January 26, 2022',
            'source'     => 'USMLE.org: Step 1 pass/fail reporting',
            'url'        => 'https://www.usmle.org/step-1-passfail-score-reporting-implementation-date',
            'checked_on' => '2026-11-06',
            'verified'   => true, // confirmed against usmle.org (search result page of the USMLE site); exams on/after this date are pass/fail only
        ],
        'step2cs_discontinued' => [
            'value'      => 'January 2021',
            'source'     => 'USMLE.org: Step 2 CS discontinuation',
            'url'        => 'https://www.usmle.org/work-restart-usmle-step-2-cs',
            'checked_on' => '',
            'verified'   => false,
        ],
        'usmle_attempts_per_step' => [
            'value'      => '4',
            'source'     => 'USMLE Bulletin of Information: eligibility and attempt limits',
            'url'        => 'https://www.usmle.org/common-questions/attempt-limit',
            'checked_on' => '2026-11-06',
            'verified'   => true, // usmle.org attempt-limit page read by a writer; also matches the 2021 Bulletin change from six to four
        ],
        'step1_passing_standard' => [
            'value'      => '',
            'source'     => 'USMLE.org: performance data and passing standards',
            'url'        => 'https://www.usmle.org/scores-transcripts',
            'checked_on' => '',
            'verified'   => false,
        ],
        'step2ck_passing_standard' => [
            'value'      => '218',
            'source'     => 'USMLE.org: examination results and scoring (Step 2 CK minimum passing score for exams on or after July 1, 2025)',
            'url'        => 'https://www.usmle.org/scores-transcripts/examination-results-and-scoring',
            'checked_on' => '2026-11-06',
            'verified'   => true, // matches a USMLE search summary and a writer's read of the usmle.org scoring page
        ],
        'step_exam_fee' => [
            'value'      => '',
            'source'     => 'NBME / USMLE: examination fees',
            'url'        => 'https://www.nbme.org/examinees/usmle-fees',
            'checked_on' => '',
            'verified'   => false,
        ],

        /* ---------------- ECFMG / Intealth ---------------- */

        'ecfmg_certification_fee' => [
            'value'      => '',
            'source'     => 'ECFMG / Intealth: fees',
            'url'        => 'https://www.ecfmg.org/fees/',
            'checked_on' => '',
            'verified'   => false,
        ],

        /* ---------------- Application cycle ---------------- */

        'eras_opening_date' => [
            'value'      => '',
            'source'     => 'AAMC: ERAS for applicants, key dates',
            'url'        => 'https://students-residents.aamc.org/applying-residency/applying-residency-eras',
            'checked_on' => '',
            'verified'   => false,
        ],
        'match_day' => [
            'value'      => '',
            'source'     => 'NRMP: Main Residency Match dates',
            'url'        => 'https://www.nrmp.org/match-data-analytics/',
            'checked_on' => '',
            'verified'   => false,
        ],

        /* ---------------- Visas ---------------- */

        'h1b_cap_exempt_note' => [
            'value'      => '',
            'source'     => 'USCIS: H-1B specialty occupations',
            'url'        => 'https://www.uscis.gov/working-in-the-united-states/h-1b-specialty-occupations',
            'checked_on' => '',
            'verified'   => false,
        ],
        'j1_visa_fee' => [
            'value'      => '',
            'source'     => 'U.S. Department of State: visa fees',
            'url'        => 'https://travel.state.gov/content/travel/en/us-visas/visa-information-resources/fees.html',
            'checked_on' => '',
            'verified'   => false,
        ],

        /* ---------------- Latest NRMP Main Residency Match results (IMGs) ---------------- */
        'nrmp_match_year' => [
            'value'      => '2026',
            'source'     => 'NRMP: Results and Data, Main Residency Match',
            'url'        => 'https://www.nrmp.org/match-data/2026/05/results-and-data-2026-main-residency-match/',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the NRMP 2026 Results and Data PDF by several writers; the figures agree and are arithmetically consistent. Update this together with the figures below each year.
        ],
        'us_img_ranked' => [
            'value'      => '4,210',
            'source'     => 'NRMP: Results and Data, Main Residency Match',
            'url'        => 'https://www.nrmp.org/match-data/2026/05/results-and-data-2026-main-residency-match/',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the NRMP 2026 Results and Data PDF by several writers; the figures agree and are arithmetically consistent
            'guard'      => ['4,210'],
        ],
        'us_img_matched' => [
            'value'      => '2,949',
            'source'     => 'NRMP: Results and Data, Main Residency Match',
            'url'        => 'https://www.nrmp.org/match-data/2026/05/results-and-data-2026-main-residency-match/',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the NRMP 2026 Results and Data PDF by several writers; the figures agree and are arithmetically consistent
            'guard'      => ['2,949'],
        ],
        'us_img_match_rate' => [
            'value'      => '70.0',
            'source'     => 'NRMP: Results and Data, Main Residency Match',
            'url'        => 'https://www.nrmp.org/match-data/2026/05/results-and-data-2026-main-residency-match/',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the NRMP 2026 Results and Data PDF by several writers; the figures agree and are arithmetically consistent (2,949 / 4,210)
            'guard'      => ['70.0%', '70.0 percent'],
        ],
        'nonus_img_ranked' => [
            'value'      => '11,944',
            'source'     => 'NRMP: Results and Data, Main Residency Match',
            'url'        => 'https://www.nrmp.org/match-data/2026/05/results-and-data-2026-main-residency-match/',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the NRMP 2026 Results and Data PDF by several writers; the figures agree and are arithmetically consistent
            'guard'      => ['11,944'],
        ],
        'nonus_img_matched' => [
            'value'      => '6,733',
            'source'     => 'NRMP: Results and Data, Main Residency Match',
            'url'        => 'https://www.nrmp.org/match-data/2026/05/results-and-data-2026-main-residency-match/',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the NRMP 2026 Results and Data PDF by several writers; the figures agree and are arithmetically consistent
            'guard'      => ['6,733'],
        ],
        'nonus_img_match_rate' => [
            'value'      => '56.4',
            'source'     => 'NRMP: Results and Data, Main Residency Match',
            'url'        => 'https://www.nrmp.org/match-data/2026/05/results-and-data-2026-main-residency-match/',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the NRMP 2026 Results and Data PDF by several writers; the figures agree and are arithmetically consistent (6,733 / 11,944)
            'guard'      => ['56.4%', '56.4 percent'],
        ],
        'img_active_applicants' => [
            'value'      => '16,154',
            'source'     => 'NRMP: Results and Data, Main Residency Match',
            'url'        => 'https://www.nrmp.org/match-data/2026/05/results-and-data-2026-main-residency-match/',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the NRMP 2026 Results and Data PDF by several writers; the figures agree and are arithmetically consistent (4,210 + 11,944)
            'guard'      => ['16,154'],
        ],

        /* ---------------- ERAS limits for the current application cycle (AAMC) ---------------- */
        'eras_cycle_year' => [
            'value'      => '2027',
            'source'     => 'AAMC: MyERAS Applicant User Guide',
            'url'        => 'https://students-residents.aamc.org/media/16871/download',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the AAMC MyERAS applicant user guide by the application writers. Update with the limits below when AAMC publishes the next cycle.
        ],
        'eras_experiences_max' => [
            'value'      => '10',
            'source'     => 'AAMC: MyERAS Applicant User Guide',
            'url'        => 'https://students-residents.aamc.org/applying-residencies-eras/publication-chapters/experience',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the AAMC MyERAS applicant user guide by the application writers
        ],
        'eras_most_meaningful_max' => [
            'value'      => '3',
            'source'     => 'AAMC: MyERAS Applicant User Guide',
            'url'        => 'https://students-residents.aamc.org/applying-residencies-eras/publication-chapters/experience',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the AAMC MyERAS applicant user guide by the application writers
        ],
        'eras_letters_per_program' => [
            'value'      => '4',
            'source'     => 'AAMC: MyERAS Applicant User Guide',
            'url'        => 'https://students-residents.aamc.org/media/16871/download',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the AAMC MyERAS applicant user guide by the application writers
        ],
        'eras_ps_char_limit' => [
            'value'      => '28,000',
            'source'     => 'AAMC: MyERAS Applicant User Guide',
            'url'        => 'https://students-residents.aamc.org/media/16871/download',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the AAMC MyERAS applicant user guide by the application writers
            'guard'      => ['28,000'],
        ],

        /* ---------------- Current USMLE exam format (Step 1 and Step 2 CK) ---------------- */
        'usmle_step1_new_format_date' => [
            'value'      => 'May 14, 2026',
            'source'     => 'USMLE.org: Step 1 exam page',
            'url'        => 'https://www.usmle.org/step-exams/step-1',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the usmle.org Step 1 and Step 2 CK pages by the exam writers
        ],
        'usmle_step2ck_new_format_date' => [
            'value'      => 'May 7, 2026',
            'source'     => 'USMLE.org: Step 2 CK exam page',
            'url'        => 'https://www.usmle.org/step-exams/step-2-ck',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the usmle.org Step 1 and Step 2 CK pages by the exam writers
        ],
        'step1_block_count' => [
            'value'      => '14',
            'source'     => 'USMLE.org: Step 1 exam page',
            'url'        => 'https://www.usmle.org/step-exams/step-1',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the usmle.org Step 1 and Step 2 CK pages by the exam writers
        ],
        'step2ck_block_count' => [
            'value'      => '16',
            'source'     => 'USMLE.org: Step 2 CK exam page',
            'url'        => 'https://www.usmle.org/step-exams/step-2-ck',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the usmle.org Step 1 and Step 2 CK pages by the exam writers
        ],
        'usmle_block_minutes' => [
            'value'      => '30',
            'source'     => 'USMLE.org: Step 1 exam page',
            'url'        => 'https://www.usmle.org/step-exams/step-1',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the usmle.org Step 1 and Step 2 CK pages by the exam writers
        ],
        'usmle_min_break_minutes' => [
            'value'      => '55',
            'source'     => 'USMLE.org: Step 1 exam page',
            'url'        => 'https://www.usmle.org/step-exams/step-1',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the usmle.org Step 1 and Step 2 CK pages by the exam writers
        ],
        'step1_session_hours' => [
            'value'      => '8',
            'source'     => 'USMLE.org: Step 1 exam page',
            'url'        => 'https://www.usmle.org/step-exams/step-1',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the usmle.org Step 1 and Step 2 CK pages by the exam writers
        ],
        'step2ck_session_hours' => [
            'value'      => '9',
            'source'     => 'USMLE.org: Step 2 CK exam page',
            'url'        => 'https://www.usmle.org/step-exams/step-2-ck',
            'checked_on' => '2026-11-06',
            'verified'   => true, // read from the usmle.org Step 1 and Step 2 CK pages by the exam writers
        ],
    ];
}
