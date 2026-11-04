<?php
/**
 * Research Spotlight testimonials.
 *
 * Powers the carousel rendered by partials/research-spotlight.php. This is the
 * web version of the "Research Spotlight" social cards: one accepted abstract
 * per slide, with the student's own words about the mentorship.
 *
 * Each entry:
 *   name       Student's name as they want it credited. Required.
 *   photo      Site-absolute path to a headshot. Optional: when the file is
 *              missing the partial falls back to the initials monogram.
 *   initials   Monogram fallback, 2 letters. Required.
 *   status     Acceptance line, e.g. "Accepted Electronic Poster Presentation".
 *   paper      Abstract/poster title, verbatim.
 *   event      Conference name.
 *   eventMeta  Dates and venue, one line.
 *   pull       A short phrase lifted VERBATIM from the quote. It is rendered
 *              inside the blockquote as the scannable line. Never paraphrase.
 *   quote      Array of paragraphs, verbatim. Plain text, escaped on output.
 *   mentor     Mentor credited in the attribution line. Optional.
 *
 * Nothing here is marketing copy we write. Only paste what the student
 * actually sent, with their permission to publish it.
 */

function usmlewise_research_testimonials(): array
{
    return [

        [
            'name'      => 'Dr. Dhanish Christo',
            'photo'     => '/assets/Testimonials/Research/dhanish-christo.jpg',
            'initials'  => 'DC',
            'status'    => 'Accepted Electronic Poster Presentation',
            'paper'     => 'Divergent trends in Early-Onset and Late-Onset Colorectal Cancer Incidence Across Urban and Rural United States Populations, 1999–2020',
            'event'     => 'ACG 2026 Annual Scientific Meeting',
            'eventMeta' => 'October 9–14, 2026 · Music City Center, Nashville, TN',
            'pull'      => 'Immensely understanding and patient.',
            'mentor'    => 'Muhammad Barakat',
            'quote'     => [
                'I cannot thank Muhammad Barakat enough for his incredible mentorship throughout the research process.',
                'Balancing a tight schedule was challenging for me, especially doing research along with Step-2, Clinical rotations and documentation. Still Muhammad was immensely understanding and patient, always giving me the time I needed, even when I couldn\'t follow-up right away.',
                'He showed genuine kindness and dedication to the project. His constant availability and unwavering support truly made a world of difference. I deeply appreciate all his help.',
            ],
        ],

        /* ------------------------------------------------------------------
           Add the next student by copying the block above. Keep the quote
           verbatim and keep 'pull' a phrase that actually appears in it.

        [
            'name'      => '',
            'photo'     => '/assets/Testimonials/Research/.jpg',
            'initials'  => '',
            'status'    => 'Accepted Poster Presentation',
            'paper'     => '',
            'event'     => '',
            'eventMeta' => '',
            'pull'      => '',
            'mentor'    => '',
            'quote'     => [
                '',
            ],
        ],

        ------------------------------------------------------------------ */

    ];
}
