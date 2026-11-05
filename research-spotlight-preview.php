<?php
/**
 * Layout preview for the Research Spotlight carousel.
 *
 * Renders partials/research-spotlight.php with placeholder slides chosen to
 * stress the layout and the field contract: a real-length quote, a very short
 * one, a very long one, and one that arrives in the looser shape a CRM form
 * sends. Nothing here is a real testimonial.
 *
 * Not linked from anywhere and marked noindex. Delete it once the real
 * testimonials are in data/research-testimonials.php.
 */

$pageTitle = "Research Spotlight preview | USMLE Wise";
$pageDescription = "Internal layout preview. Placeholder content.";
$canonical = "https://usmlewise.com/research-spotlight-preview";
$metaRobots = "noindex, nofollow";
$bodyClass = "msp";
$stylesheets = [
    "/styles/research.css",
    "/styles/research-spotlight.css"
];
$scripts = [
    "/js/research.js",
    "/js/research-spotlight.js"
];
include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';

$avatar = 'data:image/svg+xml,'
    . rawurlencode('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">'
    . '<rect width="128" height="128" fill="#d8ddf2"/>'
    . '<circle cx="64" cy="49" r="21" fill="#818dd0"/>'
    . '<path d="M19 128c0-25 20-41 45-41s45 16 45 41z" fill="#818dd0"/></svg>');

$rspOverride = [

    // 1 · Real quote, kept so the proportions on screen are honest.
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

    // 2 · Shortest case, with a headshot present and no mentor credit, which
    //     is optional, so the slide has to read without it.
    [
        'name'      => 'Placeholder Name A',
        'photo'     => $avatar,
        'initials'  => 'PA',
        'status'    => 'Accepted Poster Presentation',
        'paper'     => 'A short placeholder abstract title, two lines at most',
        'event'     => 'ACP Internal Medicine Meeting 2026',
        'eventMeta' => 'April 2026 · Boston, MA',
        'quote'     => [
            'This paragraph is placeholder text standing in for a short student quote. It runs about forty words so you can see how little copy the slide can carry before the rail on the left starts to look empty next to it.',
        ],
    ],

    // 3 · Everything maximal: a long name, a long title, and a quote past
    //     the recommended length. Quotes render in full and slides are equal
    //     height, so this is the slide that sets the height of all four.
    [
        'name'      => 'Dr. Chandrasekharan Venkataraman Subramanian',
        'photo'     => $avatar,
        'status'    => 'Accepted Oral Abstract Presentation',
        'paper'     => 'A deliberately long placeholder abstract title used to check how many lines the rail can take before the record stops looking balanced, including a subtitle after the colon: Evidence From A Placeholder Cohort, 2010–2024',
        'event'     => 'Digestive Disease Week 2026',
        'eventMeta' => 'May 2026 · McCormick Place, Chicago, IL',
        'mentor'    => 'Placeholder Mentor',
        'quote'     => [
            'This is placeholder text, not a testimonial. This slide runs past the length the field contract recommends, so you can see what an over-long submission does to the height of the whole carousel.',
            'A second placeholder paragraph of roughly average length, sitting in for the part of a quote where a student usually describes what the work involved week to week and what was hard about it.',
            'A third placeholder paragraph. Three paragraphs of about this size is the length the contract is built around, and it is where most real quotes will land.',
            'A fourth placeholder paragraph, which is where it starts costing every other slide in the set. If a real quote runs this long, trim it on the way in rather than letting it set the height of the carousel.',
        ],
    ],

    // 4 · The shape a CRM form actually sends: no initials, so the monogram
    //     is derived from the name, and the quote as one textarea blob that
    //     gets split into paragraphs on blank lines.
    [
        'name'      => 'Placeholder Name C',
        'status'    => 'Accepted Poster Presentation',
        'paper'     => 'A placeholder abstract title of average length for this layout',
        'event'     => 'AHA Scientific Sessions 2026',
        'eventMeta' => 'November 2026 · New Orleans, LA',
        'mentor'    => 'Placeholder Mentor',
        'quote'     => "Placeholder text again. This entry arrived as one block of text with blank lines in it, the way a CRM textarea sends a quote, and was split into paragraphs on the way in.\n\nIts initials were not supplied either, so the monogram on the left was derived from the name. The second paragraph is here to give the column enough copy to sit against the rail at a normal height.",
    ],

];
?>
<main>

  <section class="msp-section" style="padding-block:clamp(40px,6vw,72px) 0">
    <div class="msp-wrap">
      <p style="font-family:var(--font-mono);font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:var(--uw-ink-500);margin:0 0 14px">Internal preview</p>
      <h1 class="msp-h2" style="max-width:26ch">Research Spotlight carousel, with placeholder slides.</h1>
      <p class="msp-sub" style="max-width:64ch">
        Slide 1 is Dr. Christo's real quote. Slides 2 to 4 are placeholder text
        written to stress the layout and the field contract: the shortest quote
        with the optional fields removed, a long name with a quote past the
        recommended length, and one in the looser shape a CRM form sends. This
        page is noindex and is not linked from anywhere.
      </p>
    </div>
  </section>

  <?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/research-spotlight.php'; ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
