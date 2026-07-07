<?php
/**
 * Blog post data source.
 * No database — posts are defined here as a plain PHP array.
 *
 * To add a post: copy a block, give it a unique `slug`, and fill in the fields.
 * `date` is ISO (YYYY-MM-DD). `category` must match one of $blogCategories below.
 * `image` is optional — when empty, the listing renders a category-colored cover.
 *
 * Returned to the page as $blogPosts (already sorted newest-first).
 */

$blogCategories = [
    'usmle'     => 'USMLE Prep',
    'match'     => 'Residency Match',
    'research'  => 'Research',
    'rotations' => 'Clinical Rotations',
    'img-life'  => 'IMG Life',
];

$blogPosts = [
    // Uncomment posts below as articles are written and ready to publish.

    // [
    //     ‘slug’     => ‘step-1-pass-fail-what-changed’,
    //     ‘title’    => ‘Step 1 Went Pass/Fail. Here’s What Actually Matters Now.’,
    //     ‘excerpt’  => ‘With a numeric score off the table, program directors lean harder on Step 2 CK, research, and US clinical experience. A clear-eyed look at where IMGs should put their energy.’,
    //     ‘category’ => ‘usmle’,
    //     ‘date’     => ‘2026-06-24’,
    //     ‘read’     => 7,
    //     ‘author’   => ‘Dr. Manik Madaan’,
    //     ‘featured’ => true,
    //     ‘image’    => ‘’,
    // ],
    // [
    //     ‘slug’     => ‘building-an-eras-cv-that-gets-interviews’,
    //     ‘title’    => ‘Building an ERAS CV That Actually Gets Interviews’,
    //     ‘excerpt’  => ‘Most IMG applications are rejected in the first 20 seconds of a skim. The fix is structure, not more content. Here is the section-by-section approach we use.’,
    //     ‘category’ => ‘match’,
    //     ‘date’     => ‘2026-06-10’,
    //     ‘read’     => 9,
    //     ‘author’   => ‘USMLE Wise Team’,
    //     ‘featured’ => false,
    //     ‘image’    => ‘’,
    // ],
    // [
    //     ‘slug’     => ‘first-research-paper-as-an-img’,
    //     ‘title’    => ‘How to Get Your First Research Paper Published as an IMG’,
    //     ‘excerpt’  => ‘You don’t need a lab or a US affiliation to publish. Case reports, review papers, and systematic reviews are all within reach — if you pick the right project first.’,
    //     ‘category’ => ‘research’,
    //     ‘date’     => ‘2026-05-28’,
    //     ‘read’     => 8,
    //     ‘author’   => ‘Dr. Manik Madaan’,
    //     ‘featured’ => false,
    //     ‘image’    => ‘’,
    // ],
    // [
    //     ‘slug’     => ‘us-clinical-experience-usce-guide’,
    //     ‘title’    => ‘US Clinical Experience (USCE): What Counts and What Doesn’t’,
    //     ‘excerpt’  => ‘Observerships, externships, hands-on rotations — not all USCE is weighed equally. A practical guide to choosing experiences that produce strong letters.’,
    //     ‘category’ => ‘rotations’,
    //     ‘date’     => ‘2026-05-15’,
    //     ‘read’     => 6,
    //     ‘author’   => ‘USMLE Wise Team’,
    //     ‘featured’ => false,
    //     ‘image’    => ‘’,
    // ],
    // [
    //     ‘slug’     => ‘strong-letters-of-recommendation’,
    //     ‘title’    => ‘What Separates a Strong LOR From a Generic One’,
    //     ‘excerpt’  => ‘A great letter tells a specific story about how you think and work. Here’s how to set your attendings up to write one — and what to do when you only have a few weeks.’,
    //     ‘category’ => ‘match’,
    //     ‘date’     => ‘2026-04-30’,
    //     ‘read’     => 5,
    //     ‘author’   => ‘Dr. Manik Madaan’,
    //     ‘featured’ => false,
    //     ‘image’    => ‘’,
    // ],
    // [
    //     ‘slug’     => ‘surviving-the-match-timeline-as-an-img’,
    //     ‘title’    => ‘The IMG Match Timeline, Month by Month’,
    //     ‘excerpt’  => ‘From ECFMG certification to rank-order lists, the residency application calendar is unforgiving. Here is a realistic 12-month plan that keeps you ahead of every deadline.’,
    //     ‘category’ => ‘img-life’,
    //     ‘date’     => ‘2026-04-12’,
    //     ‘read’     => 10,
    //     ‘author’   => ‘USMLE Wise Team’,
    //     ‘featured’ => false,
    //     ‘image’    => ‘’,
    // ],
];

// Newest first.
usort($blogPosts, function ($a, $b) {
    return strcmp($b['date'], $a['date']);
});
