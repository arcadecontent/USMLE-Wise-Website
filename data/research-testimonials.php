<?php
/**
 * Research Spotlight testimonials.
 *
 * Powers the carousel rendered by partials/research-spotlight.php. This is the
 * web version of the "Research Spotlight" social cards: one accepted abstract
 * per slide, with the student's own words about the mentorship.
 *
 * ---------------------------------------------------------------------------
 * FIELD CONTRACT
 *
 * This is the shape the CRM feed must produce. Every field is a plain string
 * except `quote`. Run anything from the CRM through
 * usmlewise_research_testimonial_normalize() before rendering: it fills the
 * derivable fields and accepts the looser shapes a form tends to send.
 *
 *   key        req  type      recommended max   notes
 *   ---------  ---  --------  ----------------  --------------------------------
 *   name       yes  string    60 chars          Credited exactly as given.
 *   initials   no   string    2 chars           Derived from `name` if absent.
 *   photo      no   string    -                 Site path, https URL or data URI.
 *                                               Square, 256px or larger. Falls
 *                                               back to the initials monogram.
 *   status     no   string    48 chars          "Accepted Poster Presentation".
 *   paper      no   string    260 chars         Abstract title, verbatim.
 *   event      no   string    60 chars          Meeting name.
 *   eventMeta  no   string    90 chars          Dates and venue, one line.
 *   quote      yes  string[]  1200 chars total  Paragraphs, verbatim. A single
 *                                               string is split on blank lines.
 *   mentor     no   string    60 chars          Credited in the footer line.
 *
 * The quote maximum is the one worth enforcing on the CRM form. Quotes render
 * in full and every slide is as tall as the tallest, so one long entry sets
 * the height of the whole carousel. Around 1200 characters is three healthy
 * paragraphs; past that, trim before publishing rather than after.
 *
 * Nothing here is marketing copy we write. Only publish what the student
 * actually sent, with their permission.
 * ---------------------------------------------------------------------------
 */

/**
 * Fill the derivable fields and accept the looser shapes a CRM form sends.
 * Returns null for an entry too incomplete to render.
 */
function usmlewise_research_testimonial_normalize($t): ?array
{
    if (!is_array($t)) {
        return null;
    }

    $str = static function ($v): string {
        return is_scalar($v) ? trim((string) $v) : '';
    };

    $out = [
        'name'      => $str($t['name'] ?? ''),
        'photo'     => $str($t['photo'] ?? ''),
        'initials'  => strtoupper($str($t['initials'] ?? '')),
        'status'    => $str($t['status'] ?? ''),
        'paper'     => $str($t['paper'] ?? ''),
        'event'     => $str($t['event'] ?? ''),
        'eventMeta' => $str($t['eventMeta'] ?? ''),
        'mentor'    => $str($t['mentor'] ?? ''),
        'quote'     => [],
    ];

    // A textarea sends one blob. Split it on blank lines so it still renders
    // as paragraphs rather than one wall of text.
    $quote = $t['quote'] ?? [];
    if (is_string($quote)) {
        $quote = preg_split('/\R\s*\R/', $quote) ?: [];
    }
    if (is_array($quote)) {
        foreach ($quote as $para) {
            $para = $str($para);
            if ($para !== '') {
                $out['quote'][] = $para;
            }
        }
    }

    if ($out['name'] === '' || empty($out['quote'])) {
        return null;
    }

    // Monogram fallback for a student who has not sent a headshot.
    if ($out['initials'] === '') {
        $words = preg_split('/\s+/', preg_replace('/^(Dr|Mr|Ms|Mrs|Prof)\.?\s+/i', '', $out['name'])) ?: [];
        $words = array_values(array_filter($words));
        $first = $words[0] ?? $out['name'];
        $last  = count($words) > 1 ? end($words) : '';
        $out['initials'] = strtoupper(mb_substr($first, 0, 1) . mb_substr($last, 0, 1));
    }
    $out['initials'] = mb_substr($out['initials'], 0, 2);

    return $out;
}

function usmlewise_research_testimonials(): array
{
    $items = [

        [
            'name'      => 'Dr. Dhanish Christo',
            'photo'     => '/assets/Testimonials/Research/dhanish-christo.webp',
            'initials'  => 'DC',
            'status'    => 'Accepted Electronic Poster Presentation',
            'paper'     => 'Divergent trends in Early-Onset and Late-Onset Colorectal Cancer Incidence Across Urban and Rural United States Populations, 1999–2020',
            'event'     => 'ACG 2026 Annual Scientific Meeting & Postgraduate Course',
            'eventMeta' => 'October 9–14, 2026 · Music City Center, Nashville, TN',
            'mentor'    => 'Muhammad Barakat',
            'quote'     => [
                'I cannot thank Muhammad Barakat enough for his incredible mentorship throughout the research process.',
                'Balancing a tight schedule was challenging for me, especially doing research along with Step-2, Clinical rotations and documentation. Still Muhammad was immensely understanding and patient, always giving me the time I needed, even when I couldn\'t follow-up right away.',
                'He showed genuine kindness and dedication to the project. His constant availability and unwavering support truly made a world of difference. I deeply appreciate all his help.',
            ],
        ],

        [
            'name'      => 'Dr. Pravalika Deshpande',
            'photo'     => '/assets/Testimonials/Research/pravalika-deshpande.webp',
            'initials'  => 'PD',
            'status'    => 'Accepted Electronic Poster Presentation',
            'paper'     => 'Temporal Trends in Pancreatitis Mortality Among Native Americans in the United States: A CDC WONDER Analysis, 2018–2024',
            'event'     => 'ACG 2026 Annual Scientific Meeting & Postgraduate Course',
            'eventMeta' => 'October 9–14, 2026 · Music City Center, Nashville, TN',
            'mentor'    => 'Muhammad Barakat',
            'quote'     => [
                'A few months ago, I joined USMLEWise as a research intern with very little understanding of research. Initially, the whole process felt unfamiliar and even a little intimidating. But with the constant guidance and encouragement of my mentor, Mr. Barakat, I gradually started understanding research better and, more importantly, began genuinely enjoying the process. Under his mentorship, my poster was accepted for presentation at the American College of Gastroenterology (ACG) conference. Being part of such a prestigious conference feels incredibly exciting and meaningful, especially when I think about how unsure I was when I first started.',
                'I am truly grateful to Mr. Barakat for bringing out the best in each of us. This experience has not only taught me research, but has also given me the confidence to explore and contribute more in the future.',
            ],
        ],

        /* ------------------------------------------------------------------
           Add the next student by copying the block above, or let the CRM
           feed supply entries in the same shape. See the field contract at
           the top of this file.
           ------------------------------------------------------------------ */

    ];

    return array_values(array_filter(array_map('usmlewise_research_testimonial_normalize', $items)));
}
