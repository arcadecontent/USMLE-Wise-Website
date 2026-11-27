<?php
/**
 * Past events we've organized. /events shows one big card per event; each card
 * links to its own page at /events/<slug>, rendered by event-detail.php.
 *
 * Adding an event: append an entry below and drop its photos in
 * /assets/events/<slug>/. The card, the page, the route and the sitemap entry
 * all come from this array (routes.php resolves /events/<slug> against it).
 * /events lists newest first, so order here doesn't matter.
 *
 * Photos: for each one, <file>.webp (about 2000px, opened in the lightbox) and
 * <file>-sm.webp (about 800px, the grid thumbnail). 'w'/'h' are the pixel size
 * of the thumbnail, so the grid doesn't jump while images load. 'cover' is a
 * single wide image (about 1600px) used on the card and at the top of the page;
 * 'og' is a 1200x630 JPG used as the link-preview image when the page is shared.
 *
 * Fields per event:
 *   slug      URL slug (/events/<slug>) and the folder name under /assets/events
 *   title, date (Y-m-d), venue, city, country, format (pill label), partner
 *   blurb     one or two sentences for the card on /events
 *   summary   the opening paragraph on the event page
 *   program   ordered sessions: ['title', 'session' (optional name), 'text']
 *   speakers  ['team' => slug in data/team.php, 'photo' => avatar file, 'topic' => what they did here]
 *   closing   the wrap-up line under the program
 *   cover     ['file', 'w', 'h', 'alt']
 *   photos    ['file', 'w', 'h', 'alt', 'caption'], in the order they show
 */
function usmlewise_past_events(): array
{
    return [

        'ciu-tbilisi-2026' => [
            'slug'    => 'ciu-tbilisi-2026',
            'title'   => 'Residency and Research Workshop at Caucasus International University',
            'date'    => '2026-11-22',
            'venue'   => 'Caucasus International University',
            'city'    => 'Tbilisi',
            'country' => 'Georgia',
            'format'  => 'Workshop',
            'partner' => 'MEDMARK',
            'blurb'   => 'Residency orientation, a hands-on research workshop, a networking break and a live Q&A with our mentors, hosted with MEDMARK for aspiring medical students.',
            'summary' => 'USMLE Wise and the MEDMARK team hosted an interactive academic event at Caucasus International University (CIU) in Tbilisi, bringing together aspiring medical students to demystify the pathway to U.S. medical residency and clinical research.',
            'program' => [
                [
                    'title'   => 'Welcome and orientation',
                    'session' => 'Medical School to U.S. Residency',
                    'text'    => 'The event opened with a warm welcome and team orientation, introducing students to USMLE Wise and our mission to support international medical graduates. The opening session broke down the core components of the USMLE journey, timeline planning, and what it takes to move from medical school into the U.S. healthcare system.',
                ],
                [
                    'title'   => 'Research workshop',
                    'session' => 'From Zero to Protocol',
                    'text'    => 'Led by Muhammad Barakat and designed for students looking to launch their first original study, this hands-on training guided participants through the foundations of clinical research, from formulating a viable research question to structuring a complete study protocol from scratch.',
                ],
                [
                    'title'   => 'Coffee and networking',
                    'session' => '',
                    'text'    => 'Midway through, students and organizers stepped away for a casual break. It gave attendees a chance to connect directly with the USMLE Wise team, talk through their individual academic goals, and meet peers in a relaxed setting.',
                ],
                [
                    'title'   => 'Live online Q&A',
                    'session' => 'Ask our mentors',
                    'text'    => 'The event closed with a live online Q&A, where our mentors gave candid, practical advice tailored to students\' questions. Dr. Roohi Khan (Match Lead and Match Mentor) covered the residency Match: building a competitive application, standing out as an international applicant, and preparing for interviews. Meghana Reddy took questions on medical research: getting involved in projects, navigating publications, and using research experience to strengthen a residency profile.',
                ],
            ],
            'speakers' => [
                ['team' => 'muhammad-barakat', 'photo' => 'speaker-barakat.webp', 'topic' => 'Led the research workshop'],
                ['team' => 'roohi',            'photo' => 'speaker-roohi.webp',    'topic' => 'Live Q&A: the residency Match'],
                ['team' => 'meghana-reddy',    'photo' => 'speaker-meghana.webp',  'topic' => 'Live Q&A: medical research'],
            ],
            'closing' => 'Through practical workshops and direct mentorship, the event equipped students in Tbilisi with actionable steps for both their research and their future U.S. residency applications.',
            'og'      => 'og.jpg',
            'cover'   => ['file' => 'cover.webp', 'w' => 1600, 'h' => 1067, 'alt' => 'A USMLE Wise presenter pointing to the "Let\'s Talk" slide in front of a seated audience, between the MEDMARK and USMLE Wise banners'],
            'photos'  => [
                ['file' => '01-welcome-orientation',     'w' => 800, 'h' => 533, 'alt' => 'The USMLE Orientation slide on screen beside the MEDMARK and USMLE Wise banners', 'caption' => 'The USMLE Orientation session opens.'],
                ['file' => '02-orientation-talk',        'w' => 533, 'h' => 800, 'alt' => 'A USMLE Wise presenter with a microphone in front of a slide listing USMLE, ERAS, The Match and SOAP', 'caption' => 'Orientation: the USMLE, ERAS, the Match and SOAP, explained.'],
                ['file' => '03-ecfmg-slide',             'w' => 533, 'h' => 800, 'alt' => 'A presenter at the front of the room beside a slide on what ECFMG certification needs', 'caption' => 'What ECFMG certification needs.'],
                ['file' => '04-full-room',               'w' => 800, 'h' => 533, 'alt' => 'Students filling the room at Caucasus International University as the orientation ends on a "Let\'s Talk" slide', 'caption' => 'A full room at Caucasus International University.'],
                ['file' => '05-research-workshop-slide', 'w' => 800, 'h' => 533, 'alt' => 'A presenter beside a slide titled "Eight steps, any design" during the research workshop', 'caption' => 'From Zero to Protocol: eight steps, any study design.'],
                ['file' => '06-research-workshop',       'w' => 800, 'h' => 533, 'alt' => 'A presenter speaking to students with a slide asking which feasible design fits the question', 'caption' => 'Choosing a feasible design for the research question.'],
                ['file' => '07-students-classroom',      'w' => 800, 'h' => 533, 'alt' => 'Students seated at desks following the workshop', 'caption' => 'Students follow along at their desks.'],
                ['file' => '08-students-listening',      'w' => 800, 'h' => 533, 'alt' => 'Students listening closely to a session', 'caption' => 'Full attention in the room.'],
                ['file' => '09-audience-mural',          'w' => 800, 'h' => 533, 'alt' => 'A packed audience of students seated in rows in front of a colorful wall mural', 'caption' => 'A packed audience.'],
                ['file' => '10-audience-ciu-wall',       'w' => 800, 'h' => 533, 'alt' => 'Students listening with a red CIU backdrop behind them', 'caption' => 'Students listening in front of the CIU backdrop.'],
                ['file' => '11-audience-group',          'w' => 800, 'h' => 533, 'alt' => 'A group of students sitting together in the audience', 'caption' => 'Aspiring medical students in the audience.'],
                ['file' => '12-networking-backdrop',     'w' => 800, 'h' => 533, 'alt' => 'Three attendees smiling at the camera in front of a red backdrop', 'caption' => 'Meeting between sessions.'],
                ['file' => '13-networking-table',        'w' => 800, 'h' => 533, 'alt' => 'Two attendees at a desk during the networking break, one giving a thumbs up', 'caption' => 'Good energy during the coffee and networking break.'],
                ['file' => '14-qa-host',                 'w' => 800, 'h' => 450, 'alt' => 'A host with a microphone introducing the live Q&A while team members stand beside the banners', 'caption' => 'Introducing the live Q&A.'],
                ['file' => '15-qa-online-mentor',        'w' => 800, 'h' => 450, 'alt' => 'Dr. Roohi Khan, Match Lead, on the projector screen as a host listens with a microphone', 'caption' => 'Dr. Roohi Khan, Match Lead, joins the live Q&A online.'],
                ['file' => '16-qa-room',                 'w' => 800, 'h' => 533, 'alt' => 'The room watching two mentors on a projector screen during the live online Q&A', 'caption' => 'The whole room joins the live online Q&A.'],
                ['file' => '17-qa-mentors-screen',       'w' => 800, 'h' => 533, 'alt' => 'Two mentors on a split-screen video call between the MEDMARK and USMLE Wise banners', 'caption' => 'Dr. Roohi Khan and Meghana Reddy answer questions live.'],
                ['file' => '18-student-question-1',      'w' => 800, 'h' => 533, 'alt' => 'A student asking a question into a microphone while the audience listens', 'caption' => 'A question for the mentors.'],
                ['file' => '19-student-question-2',      'w' => 533, 'h' => 800, 'alt' => 'A student with a microphone asking a question during the Q&A', 'caption' => 'Another question from the floor.'],
                ['file' => '20-student-question-3',      'w' => 533, 'h' => 800, 'alt' => 'A student asking a question into a microphone in front of a colorful mural', 'caption' => 'Questions kept coming.'],
            ],
        ],

    ];
}

/**
 * One event by slug, or null. routes.php uses this to resolve /events/<slug>.
 */
function usmlewise_find_past_event(string $slug): ?array
{
    $events = usmlewise_past_events();
    return $events[$slug] ?? null;
}
