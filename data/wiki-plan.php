<?php
/**
 * Wiki content plan: the master list of pages we intend to write.
 *
 * Each row: [section, slug, title, phase]
 *   section  must exist in usmlewise_wiki_sections() (data/wiki.php)
 *   slug     becomes wiki-content/<section>/<slug>.md and /wiki/<section>/<slug>
 *   title    working title (the article's own `title:` is what ships)
 *   phase    1 = launch set, 2 = depth, 3 = moat (see the plan file)
 *
 * Progress is NOT stored here. tools/wiki-progress.php compares this list with
 * the files in wiki-content/ and reports: not started / draft / published.
 * Regenerate the checklist with:  php tools/wiki-progress.php --write
 *
 * To add a page: append a row. To drop one: delete the row.
 */

function usmlewise_wiki_plan(): array
{
    return [

        /* ---------------- Start here (7) ---------------- */
        ['start-here', 'imgs-roadmap',                  'The IMG Roadmap: From Medical School to US Residency, Year by Year', 1],
        ['start-here', 'total-cost-of-matching',        'How Much Does It Cost to Match as an IMG? A Full Budget', 1],
        ['start-here', 'how-long-does-it-take',         'How Long Does It Take to Become a US Resident as an IMG?', 1],
        ['start-here', 'is-the-us-right-for-you',       'Is Training in the US Right for You? Honest Pros and Cons', 2],
        ['start-here', 'img-match-statistics',          'IMG Match Statistics Explained: What the Numbers Really Say', 2],
        ['start-here', 'common-img-mistakes',           'The Most Common Mistakes IMGs Make (and How to Avoid Them)', 2],
        ['start-here', 'am-i-too-old-or-too-late',      'Am I Too Old or Too Late? Age, Graduation Year and Gaps', 2],

        /* ---------------- USMLE exams (22) ---------------- */
        ['exams', 'step-1',                             'USMLE Step 1: The Complete Guide for IMGs', 1],
        ['exams', 'step-2-ck',                          'USMLE Step 2 CK: The Complete Guide for IMGs', 1],
        ['exams', 'step-3',                             'USMLE Step 3: The Complete Guide for IMGs', 1],
        ['exams', 'when-to-take-each-step',             'When to Take Each USMLE Step: Sequencing for IMGs', 1],
        ['exams', 'usmle-eligibility-for-imgs',         'USMLE Eligibility for IMGs: Who Can Apply and When', 1],
        ['exams', 'scheduling-with-prometric',          'Scheduling Your USMLE Exam with Prometric', 1],
        ['exams', 'usmle-attempt-limits-and-retakes',   'USMLE Attempt Limits, Waiting Periods and Retakes', 1],
        ['exams', 'what-to-do-after-failing-a-step',    'What to Do After Failing a USMLE Step', 1],
        ['exams', 'nbme-self-assessments',              'NBME and UWSA Self-Assessments: How to Use and Interpret Them', 1],
        ['exams', 'step-2-ck-score-and-what-it-means',  'Step 2 CK Scores: What Programs Look For', 1],
        ['exams', 'international-test-centers',         'USMLE Test Centers Outside the US: Where and How to Book', 2],
        ['exams', 'exam-day-rules-and-checklist',       'USMLE Exam Day: Rules, ID Requirements and What to Bring', 2],
        ['exams', 'score-reports-and-transcripts',      'USMLE Score Reports and Transcripts: How They Work', 2],
        ['exams', 'question-banks-compared',            'USMLE Question Banks Compared: How to Choose', 2],
        ['exams', 'step-1-study-schedule',              'A Step 1 Study Schedule: 3, 6 and 12 Month Plans', 2],
        ['exams', 'step-2-ck-study-schedule',           'A Step 2 CK Study Schedule: Plans for Different Starting Points', 2],
        ['exams', 'step-3-study-schedule',              'A Step 3 Study Plan: Including CCS Cases', 2],
        ['exams', 'how-long-to-study',                  'How Long Should You Study? Using Data Instead of Guessing', 2],
        ['exams', 'testing-accommodations',             'USMLE Testing Accommodations: Eligibility and How to Apply', 3],
        ['exams', 'exam-anxiety-and-burnout',           'Exam Anxiety and Burnout: Staying Functional During Dedicated Study', 3],
        ['exams', 'usmle-policy-changes-tracker',       'USMLE Policy Changes Tracker: What Changed and When', 3],
        ['exams', 'step-1-resources-guide',             'Step 1 Resources: What Is Worth Your Time', 3],

        /* ---------------- ECFMG certification (13) ---------------- */
        ['ecfmg', 'ecfmg-certification-overview',       'ECFMG Certification: Requirements and How It Works', 1],
        ['ecfmg', 'myintealth-account',                 'Setting Up Your MyIntealth Account Step by Step', 1],
        ['ecfmg', 'world-directory-and-school-eligibility', 'The World Directory and Medical School Eligibility', 1],
        ['ecfmg', 'accreditation-requirement',          'The Medical School Accreditation Requirement Explained', 1],
        ['ecfmg', 'epic-credential-verification',       'EPIC: Verifying Your Medical Credentials', 1],
        ['ecfmg', 'eras-token',                         'The ERAS Token: How IMGs Get It and When', 1],
        ['ecfmg', 'ecfmg-certification-timeline',       'ECFMG Certification Timeline: From First Application to Certificate', 2],
        ['ecfmg', 'ecfmg-fees',                         'ECFMG and Intealth Fees: What You Will Pay', 2],
        ['ecfmg', 'occupational-english-test',          'The Occupational English Test (OET) for IMGs', 2],
        ['ecfmg', 'common-ecfmg-delays',                'Common ECFMG Delays and How to Avoid Them', 2],
        ['ecfmg', 'name-and-document-issues',           'Name Mismatches and Document Problems at ECFMG', 3],
        ['ecfmg', 'irregular-behavior-policy',          'ECFMG Irregular Behavior Policy: What It Covers', 3],
        ['ecfmg', 'certification-validity-and-expiry',  'How Long Is ECFMG Certification Valid? Exam Validity Periods', 3],

        /* ---------------- The application (20) ---------------- */
        ['application', 'eras-timeline',                'The ERAS Residency Application Timeline for IMGs', 1],
        ['application', 'myeras-walkthrough',           'MyERAS Walkthrough: Every Section of the Application', 1],
        ['application', 'eras-experiences-section',     'Writing the ERAS Experiences Section', 1],
        ['application', 'personal-statement-guide',     'The Residency Personal Statement: A Complete Guide for IMGs', 1],
        ['application', 'letters-of-recommendation',    'Letters of Recommendation: Who, How Many and How to Ask', 1],
        ['application', 'program-signaling-explained',  'Program Signaling Explained: How to Use Your Signals', 1],
        ['application', 'building-a-program-list',      'Building Your Program List: A Step-by-Step Method', 1],
        ['application', 'identifying-img-friendly-programs', 'How to Identify IMG-Friendly Programs', 1],
        ['application', 'how-many-programs-to-apply-to','How Many Programs Should You Apply To?', 1],
        ['application', 'program-screening-filters',    'How Programs Screen Applications: Filters IMGs Should Know', 1],
        ['application', 'reapplicant-strategy',         'Reapplying After Not Matching: What to Change', 1],
        ['application', 'mspe-and-transcripts-for-imgs','MSPE, Transcripts and Medical School Documents for IMGs', 2],
        ['application', 'gap-years-and-how-to-explain', 'Gap Years on Your Application and How to Explain Them', 2],
        ['application', 'failed-attempts-on-application','Failed Exam Attempts: How They Affect Your Application', 2],
        ['application', 'years-since-graduation',       'Years Since Graduation: Limits and How to Respond', 2],
        ['application', 'research-on-your-application', 'Presenting Research on Your ERAS Application', 2],
        ['application', 'strategy-with-lower-scores',   'Application Strategy When Your Scores Are Not Ideal', 2],
        ['application', 'preliminary-and-transitional-years', 'Preliminary and Transitional Year Applications', 2],
        ['application', 'applying-to-multiple-specialties', 'Applying to More Than One Specialty', 2],
        ['application', 'eras-and-match-costs',         'ERAS and NRMP Costs: A Budget for Application Season', 2],

        /* ---------------- Specialties (16) ---------------- */
        ['specialties', 'choosing-a-specialty',         'Choosing a Specialty as an IMG: A Decision Framework', 1],
        ['specialties', 'img-match-rates-by-specialty', 'IMG Match Rates by Specialty', 1],
        ['specialties', 'internal-medicine',            'Internal Medicine for IMGs: Competitiveness and Strategy', 1],
        ['specialties', 'family-medicine',              'Family Medicine for IMGs: Competitiveness and Strategy', 1],
        ['specialties', 'pediatrics',                   'Pediatrics for IMGs: Competitiveness and Strategy', 1],
        ['specialties', 'psychiatry',                   'Psychiatry for IMGs: Competitiveness and Strategy', 1],
        ['specialties', 'neurology',                    'Neurology for IMGs: Competitiveness and Strategy', 2],
        ['specialties', 'pathology',                    'Pathology for IMGs: Competitiveness and Strategy', 2],
        ['specialties', 'anesthesiology',               'Anesthesiology for IMGs: Competitiveness and Strategy', 2],
        ['specialties', 'emergency-medicine',           'Emergency Medicine for IMGs: Competitiveness and Strategy', 2],
        ['specialties', 'general-surgery',              'General Surgery for IMGs: Competitiveness and Strategy', 2],
        ['specialties', 'obstetrics-and-gynecology',    'OB-GYN for IMGs: Competitiveness and Strategy', 2],
        ['specialties', 'backup-specialties',           'Choosing a Backup Specialty Without Hurting Your Main Plan', 2],
        ['specialties', 'categorical-vs-preliminary',   'Categorical vs Preliminary Positions: What IMGs Should Know', 2],
        ['specialties', 'radiology',                    'Radiology for IMGs: Competitiveness and Strategy', 3],
        ['specialties', 'physical-medicine-and-rehabilitation', 'PM&R for IMGs: Competitiveness and Strategy', 3],

        /* ---------------- Interviews and the Match (16) ---------------- */
        ['interviews-match', 'interview-season-overview','Residency Interview Season: How It Works', 1],
        ['interviews-match', 'common-interview-questions','Common Residency Interview Questions and How to Answer Them', 1],
        ['interviews-match', 'rank-order-list-strategy','Building Your Rank Order List', 1],
        ['interviews-match', 'how-the-match-algorithm-works', 'How the Match Algorithm Works', 1],
        ['interviews-match', 'match-week-timeline',     'Match Week: What Happens Day by Day', 1],
        ['interviews-match', 'soap-explained',          'SOAP Explained: How Supplemental Offers Work', 1],
        ['interviews-match', 'if-you-do-not-match',     'If You Do Not Match: Your Options and Next Steps', 1],
        ['interviews-match', 'virtual-interview-setup', 'Virtual Interviews: Technology, Setting and Etiquette', 2],
        ['interviews-match', 'behavioral-interview-answers', 'Behavioral Interview Answers That Work for IMGs', 2],
        ['interviews-match', 'questions-to-ask-programs','Questions to Ask Programs During Interviews', 2],
        ['interviews-match', 'post-interview-communication', 'Post-Interview Communication: Thank-Yous and What Is Allowed', 2],
        ['interviews-match', 'nrmp-registration-and-fees','NRMP Registration and Fees for IMGs', 2],
        ['interviews-match', 'managing-interview-invitations', 'Managing Interview Invitations and Scheduling', 2],
        ['interviews-match', 'couples-match',           'The Couples Match: How It Works', 3],
        ['interviews-match', 'second-looks-and-visits', 'Second Looks and Program Visits', 3],
        ['interviews-match', 'prelim-to-categorical',   'Moving From a Preliminary to a Categorical Position', 3],

        /* ---------------- US clinical experience (10) ---------------- */
        ['clinical-experience', 'usce-explained',       'US Clinical Experience (USCE) Explained', 1],
        ['clinical-experience', 'observership-vs-externship-vs-hands-on', 'Observership vs Externship vs Hands-On Experience', 1],
        ['clinical-experience', 'how-to-get-usce',      'How to Get US Clinical Experience as an IMG', 1],
        ['clinical-experience', 'how-much-usce-programs-want', 'How Much USCE Do Programs Want?', 1],
        ['clinical-experience', 'turning-usce-into-a-letter', 'Turning US Clinical Experience Into a Strong Letter', 1],
        ['clinical-experience', 'usce-costs',           'What US Clinical Experience Costs and What You Get', 2],
        ['clinical-experience', 'b1-b2-for-observerships', 'B-1/B-2 Visas for Observerships: What Is Allowed', 2],
        ['clinical-experience', 'usce-red-flags-and-scams', 'USCE Red Flags and Scams to Avoid', 2],
        ['clinical-experience', 'telehealth-and-virtual-usce', 'Telehealth and Virtual Clinical Experience: Does It Count?', 3],
        ['clinical-experience', 'usce-vs-research',     'USCE vs Research: Where to Spend Limited Time', 3],

        /* ---------------- Research (11) ---------------- */
        ['research', 'why-research-matters-for-imgs',   'Why Research Matters for IMGs (and When It Does Not)', 1],
        ['research', 'finding-a-research-position',     'Finding a Research Position as an IMG', 1],
        ['research', 'how-programs-view-research',      'How Programs Actually View Research', 1],
        ['research', 'research-fellowships',            'Research Fellowships for IMGs: Types and Trade-Offs', 2],
        ['research', 'case-reports',                    'Writing and Publishing a Case Report', 2],
        ['research', 'how-to-publish',                  'How to Publish a Paper: From Idea to Acceptance', 2],
        ['research', 'posters-and-conferences',         'Posters and Conferences: Presenting Your Work', 2],
        ['research', 'authorship-and-author-order',     'Authorship and Author Order: What Is Ethical', 2],
        ['research', 'predatory-journals',              'Predatory Journals: How to Spot Them and Why It Matters', 2],
        ['research', 'pubmed-and-orcid-setup',          'PubMed, ORCID and Making Your Work Findable', 3],
        ['research', 'research-years-and-gaps',         'Taking a Research Year: When It Helps and When It Does Not', 3],

        /* ---------------- Visas (16) ---------------- */
        ['visas', 'j1-vs-h1b',                          'J-1 vs H-1B for Residency: Which Visa Fits Your Plan?', 1],
        ['visas', 'j1-visa-process',                    'The J-1 Visa Process for Residents, Step by Step', 1],
        ['visas', 'h1b-for-residents',                  'H-1B for Residents: Requirements and Timeline', 1],
        ['visas', 'b1-b2-for-interviews-and-exams',     'B-1/B-2 Visitor Visas for Exams and Interviews', 1],
        ['visas', 'two-year-home-residency-rule',       'The Two-Year Home Residency Requirement (212(e))', 1],
        ['visas', 'visa-timeline-after-the-match',      'Your Visa Timeline After the Match', 1],
        ['visas', 'visa-policy-changes-tracker',        'Visa Policy Changes Tracker for Physicians', 1],
        ['visas', 'step-3-and-h1b-timing',              'Step 3 and H-1B Timing: Planning Backward', 1],
        ['visas', 'visa-interview-preparation',         'Preparing for Your US Visa Interview', 2],
        ['visas', 'conrad-30-waiver',                   'The Conrad 30 Waiver Program Explained', 2],
        ['visas', 'j1-waiver-options',                  'J-1 Waiver Options: Conrad 30, Federal Agencies and More', 2],
        ['visas', 'green-card-for-physicians',          'Green Card Paths for Physicians', 2],
        ['visas', 'h1b-cap-exempt-employers',           'H-1B Cap-Exempt Employers and Why It Matters', 2],
        ['visas', 'o-1-visa-for-physicians',            'The O-1 Visa: Is It Realistic for Physicians?', 3],
        ['visas', 'dependents-j2-and-h4',               'Bringing Your Family: J-2 and H-4 Dependents', 3],
        ['visas', 'visa-delays-and-backup-plans',       'Visa Delays and Backup Plans Before Orientation', 3],

        /* ---------------- Licensure and career (7) ---------------- */
        ['licensure-career', 'state-licensure-for-imgs','State Medical Licensure for IMGs', 2],
        ['licensure-career', 'step-3-and-licensure',    'Step 3 and Licensure: What States Require', 2],
        ['licensure-career', 'alternative-licensure-pathways', 'Alternative Licensure Pathways for IMGs Without US Residency', 3],
        ['licensure-career', 'fellowship-after-residency', 'Fellowship After Residency as an IMG', 3],
        ['licensure-career', 'board-certification-for-imgs', 'Board Certification After Residency', 3],
        ['licensure-career', 'first-attending-contract','Understanding Your First Attending Contract', 3],
        ['licensure-career', 'moonlighting',            'Moonlighting During Residency: Rules and Visa Limits', 3],

        /* ---------------- Life in the US (8) ---------------- */
        ['life-in-us', 'arrival-checklist',             'Arriving in the US: Your First Two Weeks', 3],
        ['life-in-us', 'ssn-and-itin',                  'Social Security Numbers and ITINs for New Residents', 3],
        ['life-in-us', 'banking-and-credit',            'Banking and Building Credit From Zero', 3],
        ['life-in-us', 'housing-for-residents',         'Finding Housing as an Incoming Resident', 3],
        ['life-in-us', 'taxes-for-j1-and-h1b-residents','Taxes for J-1 and H-1B Residents', 3],
        ['life-in-us', 'drivers-license-and-car',       'Driver\'s License and Car Basics', 3],
        ['life-in-us', 'resident-salary-and-benefits',  'Resident Salary, Benefits and Hidden Costs', 3],
        ['life-in-us', 'culture-and-work-differences',  'Adjusting to US Hospital Culture', 3],

        /* ---------------- Country guides (10) ---------------- */
        ['countries', 'india',                          'IMGs From India: Schools, Test Centers and Visa Notes', 3],
        ['countries', 'pakistan',                       'IMGs From Pakistan: Schools, Test Centers and Visa Notes', 3],
        ['countries', 'egypt',                          'IMGs From Egypt: Schools, Test Centers and Visa Notes', 3],
        ['countries', 'nigeria',                        'IMGs From Nigeria: Schools, Test Centers and Visa Notes', 3],
        ['countries', 'philippines',                    'IMGs From the Philippines: Schools, Test Centers and Visa Notes', 3],
        ['countries', 'bangladesh',                     'IMGs From Bangladesh: Schools, Test Centers and Visa Notes', 3],
        ['countries', 'nepal',                          'IMGs From Nepal: Schools, Test Centers and Visa Notes', 3],
        ['countries', 'iran',                           'IMGs From Iran: Schools, Test Centers and Visa Notes', 3],
        ['countries', 'brazil',                         'IMGs From Brazil: Schools, Test Centers and Visa Notes', 3],
        ['countries', 'caribbean-schools',              'Caribbean Medical Schools: What IMGs Should Know', 3],

        /* ---------------- Tools (2) ---------------- */
        ['tools', 'self-evaluation',  'IMG Readiness Self-Evaluation', 3],
        ['tools', 'timeline-planner', 'IMG Application Timeline Planner', 3],

        /* ---------------- Glossary (25) ---------------- */
        ['glossary', 'eras',                'ERAS', 1],
        ['glossary', 'nrmp',                'NRMP', 1],
        ['glossary', 'ecfmg',               'ECFMG', 1],
        ['glossary', 'mspe',                'MSPE', 1],
        ['glossary', 'soap',                'SOAP', 1],
        ['glossary', 'usce',                'USCE', 1],
        ['glossary', 'observership',        'Observership', 1],
        ['glossary', 'yog',                 'YOG', 1],
        ['glossary', 'program-signaling',   'Program signaling', 1],
        ['glossary', 'rank-order-list',     'Rank order list', 1],
        ['glossary', 'img',                 'IMG', 1],
        ['glossary', 'usmle',               'USMLE', 1],
        ['glossary', 'nbme',                'NBME', 1],
        ['glossary', 'intealth',            'Intealth', 1],
        ['glossary', 'acgme',               'ACGME', 1],
        ['glossary', 'pgy',                 'PGY', 1],
        ['glossary', 'categorical',         'Categorical position', 1],
        ['glossary', 'preliminary-year',    'Preliminary year', 1],
        ['glossary', 'eras-token',          'ERAS token', 1],
        ['glossary', 'match-day',           'Match Day', 1],
        ['glossary', 'ecfmg-certificate',   'ECFMG Certificate', 1],
        ['glossary', 'ds-2019',             'DS-2019', 2],
        ['glossary', 'sevis',               'SEVIS', 2],
        ['glossary', 'uwsa',                'UWSA', 2],
        ['glossary', 'conrad-30',           'Conrad 30', 2],
    ];
}
