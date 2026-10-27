<?php
/**
 * Team roster — single source of truth for /team and every /team/<slug> page.
 *
 * Adding a member: append an entry here. The card on /team and the detail page
 * at /team/<slug> both render from this array, and routes.php resolves the slug
 * against it, so no new file or routing change is needed.
 *
 * Fields:
 *   group        'leadership' | 'research' | 'match' | 'coaching' | 'marketing'
 *                | 'sales' | 'operations' | 'tech' | 'admin' — which section
 *                the card appears in
 *   name         Full display name
 *   role         Eyebrow above the name (detail page) and role line (card)
 *   sub          Secondary line under the name on the detail page
 *   photo        Absolute path under /assets, or null when no photo is on
 *                file yet — templates fall back to an initials avatar
 *   photo_position  Optional CSS object-position override (e.g. 'right top')
 *                for source photos where the subject isn't centered; falls
 *                back to the default 'center top' crop
 *   card_line    One-line credential summary shown on the card
 *   card_bio     Optional short blurb for the leadership card; falls back to
 *                bio[0], which can read as repetitive next to the role label
 *   bio          Array of paragraphs for the detail page
 *   affiliations Optional array of ['role' => ..., 'org' => ...]
 *
 * Bios are drawn from each member's own submitted profile; keep claims to what
 * they supplied rather than paraphrasing upward.
 */

function usmlewise_team_members(): array
{
    return [

        /* ---------------- Leadership ---------------- */

        'manik-madaan' => [
            'group'     => 'leadership',
            'name'      => 'Dr. Manik Madaan',
            'role'      => 'Co-Founder',
            'sub'       => "The world's most-followed USMLE and Match expert",
            'photo'     => '/assets/Photos/Team-Members/Manik.jpg',
            'card_line' => 'Practicing U.S. physician &middot; 4 years on a Residency Selection Committee',
            'card_bio'  => "A practicing doctor in the U.S. who has served 4 years on a Residency Selection Committee, reviewing applications from the other side of the table.",
            'bio'       => [
                "Dr. Manik Madaan is a co-founder of USMLE Wise and a practicing doctor in the United States. He has served four years on a Residency Selection Committee, reviewing applications from the other side of the table.",
                "That experience shapes how USMLE Wise advises applicants: not on what candidates assume programs want, but on what selection committees actually read, weigh, and remember.",
            ],
            'affiliations' => [
                ['role' => 'Co-Founder', 'org' => 'USMLE Wise'],
                ['role' => 'Residency Selection Committee (4 years)', 'org' => 'United States'],
            ],
        ],

        'kaushik-sreerama-reddy' => [
            'group'     => 'leadership',
            'name'      => 'Dr. Kaushik Sreerama Reddy, MBBS',
            'role'      => 'Co-Founder &amp; Chief Scientific Officer',
            'sub'       => 'CRIST Project Lead, USMLE Wise Research',
            'photo'     => '/assets/Photos/Team-Members/Kaushik-Sreeram-Headshot.webp',
            'card_line' => 'Former Duke &amp; UPMC researcher &middot; Lead Investigator, Myositis Clinical Trials Consortium',
            'card_bio'  => "Former Infectious Disease and opioid researcher at Duke University and UPMC. Lead Investigator, Myositis Clinical Trials Consortium, and Study Lead on the MyPACER Study.",
            'bio'       => [
                "Dr. Kaushik Sreerama Reddy is a co-founder of USMLE Wise and its Chief Scientific Officer, leading the CRIST project within USMLE Wise Research.",
                "He was previously an Infectious Disease and opioid researcher at Duke University and UPMC. He serves as Lead Investigator for the Myositis Clinical Trials Consortium and as Study Lead on the MyPACER Study.",
            ],
            'affiliations' => [
                ['role' => 'Co-Founder &amp; Chief Scientific Officer', 'org' => 'USMLE Wise'],
                ['role' => 'CRIST Project Lead', 'org' => 'USMLE Wise Research'],
                ['role' => 'Lead Investigator', 'org' => 'Myositis Clinical Trials Consortium'],
                ['role' => 'Study Lead', 'org' => 'MyPACER Study'],
            ],
        ],

        /* ---------------- Research team ---------------- */

        'muhammad-barakat' => [
            'group'     => 'research',
            'name'      => 'Muhammad Ahmad Barakat',
            'role'      => 'Lead Principal Research Fellow',
            'sub'       => 'Data Analyst, Epidemiologist &amp; Statistician &middot; USMLE Wise Research',
            'photo'     => '/assets/Photos/Team-Members/Muhammad-Barakat-Headshot.png',
            'card_line' => '9 published papers &middot; 5 conference papers &middot; 15 senior-author posters',
            'bio'       => [
                "Muhammad is a fifth-year medical student in the six-year MD program at Caucasus International University in Georgia, and the Lead Principal Research Fellow at USMLE Wise, where he manages the research department's daily operations, mentor and fellow development, project completion, and education quality.",
                "He also serves as Founder &amp; Director of MEDMARK, the Medical Faculty Dean's own team at Caucasus International University, which organizes academic ceremonies and research initiatives to broaden international medical graduates' access to research in Georgia &mdash; supporting students from India, Lebanon, Sri Lanka, Jordan, Pakistan, and beyond.",
                "He is Head of the Advisory Council at MEDICA Research Investigation in Lebanon, and has guided more than 200 students to a publication credit across the MEDICA SRA and MEDMARK MRMS programs.",
            ],
            'affiliations' => [
                ['role' => 'Lead Principal Research Fellow', 'org' => 'USMLE Wise'],
                ['role' => 'Founder &amp; Director', 'org' => 'MEDMARK'],
                ['role' => 'Head of Advisory Council', 'org' => 'MEDICA Research Investigation, Lebanon'],
                ['role' => 'Associate Member', 'org' => 'INSPECT-LB'],
            ],
        ],

        'shivani-ravipati' => [
            'group'     => 'research',
            'also_in'   => ['coaching'],
            'name'      => 'Dr. Shivani Ravipati',
            'role'      => 'Research Mentor &amp; Coaching Operations',
            'sub'       => 'Research &amp; Publications Mentor',
            'photo'     => '/assets/Photos/Team-Members/shivani.jpeg',
            'card_line' => 'Research mentor, case studies &middot; Coaching operations &amp; QA',
            'bio'       => [
                "Dr. Shivani Ravipati is a volunteer Research and Publications Mentor at USMLE Wise, with five first-author publications, an AHA poster presentation, and more than eight co-authored papers.",
                "She leads an IRB-approved clinical trial in PRP research, and actively guides international medical graduates through research, Step preparation, and their ERAS applications.",
                "Within Research, she mentors case-study manuscripts specifically, and she also supports the Coaching team with day-to-day operations and quality assurance.",
            ],
            'affiliations' => [
                ['role' => 'Research &amp; Publications Mentor', 'org' => 'USMLE Wise'],
                ['role' => 'Clinical Trial Lead (IRB-approved)', 'org' => 'PRP Research'],
                ['role' => 'Operations &amp; QA', 'org' => 'USMLE Wise Coaching'],
            ],
        ],

        'shelja-sharma' => [
            'group'     => 'research',
            'name'      => 'Dr. Shelja Sharma',
            'role'      => 'Research Mentor',
            'sub'       => 'Research &amp; Publications Mentor',
            'photo'     => '/assets/Photos/Team-Members/Shelja-Sharma.jpg',
            'card_line' => '7 published papers &middot; 15 students mentored to publication',
            'bio'       => [
                "Dr. Shelja Sharma is a volunteer Research and Publications Mentor at USMLE Wise, with seven published papers and six co-authored poster presentations.",
                "She has mentored fifteen students to a publication credit of their own.",
            ],
            'affiliations' => [
                ['role' => 'Research &amp; Publications Mentor', 'org' => 'USMLE Wise'],
            ],
        ],

        'aisha-rizwan-ahmed' => [
            'group'     => 'research',
            'name'      => 'Aisha Rizwan Ahmed',
            'role'      => 'Associate Research Fellow',
            'sub'       => 'Medical Graduate &middot; Clinical Researcher &middot; Scientific Educator',
            'photo'     => '/assets/Photos/Team-Members/Aisha-Rizwan-Ahmed.jpg',
            'card_line' => 'AHA Paul Dudley White International Scholar (2025) &middot; Multiple peer-reviewed publications',
            'bio'       => [
                "Aisha Rizwan Ahmed is a medical graduate of Jinnah Medical and Dental College, Pakistan. Her research experience spans advanced biostatistical analysis in R, systematic reviews, and meta-analyses, with multiple peer-reviewed publications and presentations at international scientific conferences.",
                "As an Associate Research Fellow at USMLE Wise, she has contributed to research abstracts submitted to major conferences including PANOS and ACG, and has delivered peer-learning sessions on the CDC WONDER database to help researchers build practical epidemiological data skills.",
                "She also teaches scientific visualization: she has run a session on building publication-quality central illustrations, designed the central illustrations for PANOS abstracts, and guided students creating their own for ACG submissions. She authored an academic e-book chapter on Statistical Analysis for the Meta-Analysis Academy.",
            ],
            'affiliations' => [
                ['role' => 'Associate Research Fellow', 'org' => 'USMLE Wise'],
                ['role' => 'Paul Dudley White International Scholar (2025)', 'org' => 'American Heart Association'],
                ['role' => 'Best Abstract Award (2025)', 'org' => 'Mission: BRAIN Global Neurosurgery Symposium'],
                ['role' => 'Chapter Author, Statistical Analysis', 'org' => 'Meta-Analysis Academy'],
            ],
        ],

        'meenakshi-ashok' => [
            'group'     => 'research',
            'name'      => 'Meenakshi Ashok',
            'role'      => 'Research Associate Fellow',
            'sub'       => 'Doctor of Medicine Graduate',
            'photo'     => '/assets/Photos/Team-Members/Meenakshi-Ashok.jpg',
            'card_line' => 'MD, Tbilisi State Medical University &middot; PROSPERO-registered systematic review contributor',
            'bio'       => [
                "Meenakshi Ashok is a Doctor of Medicine graduate of Tbilisi State Medical University, Georgia (2019&ndash;2025), and a Research Associate Fellow at USMLE Wise.",
                "She contributed to a PROSPERO-registered systematic review on dietary fructose restriction in paediatric Non-alcoholic Fatty Liver Disease, and has presented academic work on Alzheimer's therapeutics, tuberculosis screening technology, and nanoparticle-based cancer treatment.",
                "Outside her research, she serves as Social Media Coordinator for Doctors For A Cause, a healthcare-focused NGO, and holds BLS/CPR certification from the American Heart Association alongside a DHA certification.",
            ],
            'affiliations' => [
                ['role' => 'Research Associate Fellow', 'org' => 'USMLE Wise'],
                ['role' => 'Social Media Coordinator', 'org' => 'Doctors For A Cause'],
                ['role' => 'Doctor of Medicine (2019&ndash;2025)', 'org' => 'Tbilisi State Medical University, Georgia'],
            ],
        ],

        'pavani-kolluru' => [
            'group'     => 'research',
            'name'      => 'Pavani Durga Kolluru',
            'role'      => 'Research Associate Fellow',
            'sub'       => 'Medical Graduate &middot; Research Support &amp; Academic Writing',
            'photo'     => '/assets/Photos/Team-Members/Pavani-Kolluru.jpg',
            'card_line' => 'Harvard Medical School FCR alumna &middot; Manuscript &amp; abstract development',
            'bio'       => [
                "Pavani Durga Kolluru is a medical graduate of Shri B. M. Patil Medical College, BLDE University, with primary interests in Internal Medicine and Neurology.",
                "Through her research work at USMLE Wise she has gained hands-on experience in literature and data compilation, manuscript development and editing, abstract writing, and research coordination, contributing to multiple projects and helping prepare papers for submission.",
                "She has completed USMLE Step 1 and is preparing for Step 2 CK. She is a Harvard Associate Alumna, having completed a Harvard Medical School&ndash;associated FCR course and CME programs.",
            ],
            'affiliations' => [
                ['role' => 'Research Associate Fellow', 'org' => 'USMLE Wise'],
                ['role' => 'Associate Alumna', 'org' => 'Harvard Medical School (FCR course)'],
            ],
        ],

        'punya-kavitha' => [
            'group'     => 'research',
            'name'      => 'Punya Kavitha',
            'role'      => 'Research Associate Fellow',
            'sub'       => 'Fourth-Year Medical Student, Mysore Medical College and Research Institute',
            'photo'     => '/assets/Photos/Team-Members/Punya-Kavitha.png',
            'card_line' => 'USMLE Step 1 passed (Oct 2025) &middot; MAA Short-Term Studentship grant awardee',
            'bio'       => [
                "Punya Kavitha is a fourth-year medical student at Mysore Medical College and Research Institute, with a strong interest in clinical medicine, research, and evidence-based healthcare. She passed USMLE Step 1 in October 2025 and is AHA-certified in Basic Life Support.",
                "She is a grant awardee of the MAA Short-Term Studentship, and the lead investigator and author of a research project on discordance between FIB-4 and FIB-5 scores compared with the TyG index in MASLD patients. Through USMLE Wise she contributed to the Polio CRIST research project, which was accepted by the American Medical Association and ranked among the top 65.",
                "She has presented a clinical case at Connaissance, a national conference at JIPMER, Puducherry. She volunteers with the American College of Physicians and the American College of Rheumatology, and with the SVYM Palliative Care NGO.",
            ],
            'affiliations' => [
                ['role' => 'Research Associate Fellow', 'org' => 'USMLE Wise'],
                ['role' => 'Short-Term Studentship Grant Awardee', 'org' => 'MAA'],
                ['role' => 'Volunteer', 'org' => 'American College of Physicians &amp; American College of Rheumatology'],
                ['role' => 'Student Volunteer', 'org' => 'SVYM Palliative Care'],
            ],
        ],

        'nandini-nayak' => [
            'group'     => 'research',
            'name'      => 'Nandini Nayak',
            'role'      => 'Research Liaison',
            'sub'       => 'Third-Year Medical Student',
            'photo'     => '/assets/Photos/Team-Members/Nandini-Nayak.jpg',
            'card_line' => 'Coordination across Stroke, Cardiothoracic &amp; CRIST projects &middot; Student Research Award',
            'bio'       => [
                "Nandini Nayak is a third-year medical student and the Research Liaison at USMLE Wise, interested in clinical research, medical education, and emerging healthcare technologies. Her clinical interests include paediatrics, emergency medicine, and internal medicine.",
                "At USMLE Wise she has contributed to the Stroke, Cardiothoracic, and CRIST projects, primarily through research coordination and academic support. She also serves as Research Manager at MEDMARK CIU, and teaches students AI-assisted research workflows and reference management using Zotero.",
                "Her work outside USMLE Wise includes ecological retrospective research using ARIMA-based predictive modelling, conference abstracts and poster presentations, and ongoing systematic review and meta-analysis work in areas including Zika virus and the link between air pollution and cardiovascular disease. She received a Student Research Award at her medical university.",
            ],
            'affiliations' => [
                ['role' => 'Research Liaison', 'org' => 'USMLE Wise'],
                ['role' => 'Research Manager', 'org' => 'MEDMARK CIU'],
            ],
        ],

        'agrima-singh' => [
            'group'     => 'research',
            'name'      => 'Agrima Singh',
            'role'      => 'Research Associate',
            'sub'       => 'Third-Year MBBS Student',
            'photo'     => '/assets/Photos/Team-Members/Agrima-Singh.jpg',
            'card_line' => 'NMO India member &middot; Conference host &amp; academic seminar presenter',
            'bio'       => [
                "Agrima Singh is a third-year medical student at Punyashloka Lokmata Devi Ahilya Bai Holkar Autonomous State Medical College in Auraiya, Uttar Pradesh, and a Research Associate at USMLE Wise, with interests in evidence-based medicine, medical research, and volunteering.",
                "She has organised and anchored college and district-level events over the past two years, and contributed to public health awareness programmes on road safety, burn safety, and cadaver body donation. Through the National Medical Organisation of India she has taken part in conferences and community medical camps.",
                "Academically, she has conducted seminars across subjects including Anatomy and Pathology, competed in inter-college and intra-college debate and speech competitions, and hosted conferences at her own college.",
            ],
            'affiliations' => [
                ['role' => 'Research Associate', 'org' => 'USMLE Wise'],
                ['role' => 'Member', 'org' => 'National Medical Organisation of India (NMO)'],
            ],
        ],

        'anjana-bhoju' => [
            'group'     => 'research',
            'name'      => 'Anjana Bhoju',
            'role'      => 'Medical Officer &middot; USMLE Pathway',
            'sub'       => 'Medical Graduate, Nepal',
            'photo'     => '/assets/Photos/Team-Members/Anjana-Bhoju.jpg',
            'card_line' => 'Clinical practice in Nepal &middot; Pursuing USMLE pathway to U.S. residency',
            'bio'       => [
                "Anjana Bhoju is a medical graduate from Nepal, currently practising as a Medical Officer while preparing for the USMLE pathway toward residency training in the United States.",
                "Her clinical experience covers patient assessment and evaluation, management of diverse medical conditions, emergency care and timely decision-making, and interdisciplinary collaboration, with a consistent commitment to evidence-based, patient-centered practice.",
                "She is academically motivated, with an interest in clinical research, scientific writing, and the ability to critically interpret and communicate scientific evidence.",
            ],
            'affiliations' => [
                ['role' => 'Medical Officer', 'org' => 'Nepal'],
            ],
        ],

        'gayathri-mohan' => [
            'group'     => 'research',
            'name'      => 'Gayathri Mohan',
            'role'      => 'House Surgeon &middot; USMLE Aspirant',
            'sub'       => 'Vels Medical College and Hospital, Chennai',
            'photo'     => '/assets/Photos/Team-Members/Gayathri-Mohan.jpg',
            'card_line' => 'AI-assisted systematic reviews &amp; network meta-analysis &middot; Aspiring surgical resident',
            'bio'       => [
                "Gayathri Mohan is a medical intern and USMLE aspirant at Vels Medical College and Hospital in Chennai, Tamil Nadu. As a non-US international medical graduate, she is focused on strengthening her clinical foundation and preparing for a career in academic and surgical medicine.",
                "Her research interests include evidence synthesis, with exposure to AI-assisted systematic reviews and meta-analyses and to network meta-analysis. She is also involved in medical content creation and initiatives supporting aspiring international medical graduates.",
                "Her broader interests span surgery, pharmacovigilance, medical robotics, and medical education, alongside mental health advocacy. Her long-term goal is a postdoctoral fellowship followed by surgical residency training in the United States.",
            ],
            'affiliations' => [
                ['role' => 'House Surgeon', 'org' => 'Vels Medical College and Hospital, Chennai'],
            ],
        ],

        'sarjan-kc' => [
            'group'     => 'research',
            'name'      => 'Dr. Sarjan K. C.',
            'role'      => 'Medical Officer &middot; USMLE Pathway',
            'sub'       => 'Medical Graduate, Nepal',
            'photo'     => '/assets/Photos/Team-Members/Sarjan-KC.jpg',
            'card_line' => '4 case reports &amp; 1 original research article published',
            'bio'       => [
                "Dr. Sarjan K. C. is a medical graduate from Nepal, working as a Medical Officer while pursuing the USMLE pathway toward continued medical training in the United States.",
                "He has published four case reports and one original research article to date, with experience in clinical assessment, patient management, emergency care, and multidisciplinary teamwork.",
                "At USMLE Wise he supported the submission of two systematic review and meta-analysis manuscripts: one comparing acute arthroplasty with internal fixation for acetabular fractures in older adults, and a network meta-analysis of five fixation strategies for native distal femur fractures.",
            ],
            'affiliations' => [
                ['role' => 'Medical Officer', 'org' => 'Nepal'],
            ],
        ],

        /* ---------------- Sales &amp; Customer Success ---------------- */

        'aya-jabeur' => [
            'group'     => 'sales',
            'name'      => 'Aya Jabeur',
            'role'      => 'Sales Manager',
            'sub'       => 'Sales, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Aya-Jabeur.webp',
            'card_line' => 'First call for prospective students &middot; Runs discovery calls &amp; enrollment',
            'bio'       => [
                "Aya Jabeur is Sales Manager at USMLE Wise, and the first real conversation a prospective student has with the team.",
                "She qualifies inbound leads, runs discovery calls, presents the right program with honest expectations, handles objections, and closes enrollments, then hands new students to Customer Success and reports weekly on pipeline and conversion.",
            ],
            'affiliations' => [
                ['role' => 'Sales Manager', 'org' => 'USMLE Wise'],
            ],
        ],

        'kanika-chopra' => [
            'group'     => 'sales',
            'name'      => 'Kanika Chopra',
            'role'      => 'Sales Executive',
            'sub'       => 'Sales, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Kanika-Chopra.webp',
            'card_line' => 'Converts inbound leads into enrolled students &middot; Discovery &amp; closing calls',
            'bio'       => [
                "Kanika Chopra is a Sales Executive at USMLE Wise, converting inbound leads into enrolled students by matching each prospect to the right program and closing with integrity.",
                "She responds to leads quickly, runs discovery and closing calls, logs everything in the CRM, hands students to Customer Success, and reports pipeline weekly.",
            ],
            'affiliations' => [
                ['role' => 'Sales Executive', 'org' => 'USMLE Wise'],
            ],
        ],

        'khadija-grati' => [
            'group'     => 'sales',
            'name'      => 'Khadija Grati',
            'role'      => 'Sales &amp; Customer Success Executive',
            'sub'       => 'Sales, Post-Sales, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Khadija-Grati.webp',
            'card_line' => 'One point of contact from enrollment to Match Day &middot; 48-hour onboarding',
            'bio'       => [
                "Khadija Grati is Sales and Customer Success Executive at USMLE Wise, owning the full student lifecycle from first contact to Match Day so each student has one consistent point of contact.",
                "She closes enrollments, onboards new students within 48 hours, answers ongoing questions, escalates payment and refund cases, and keeps CRM records current.",
            ],
            'affiliations' => [
                ['role' => 'Sales &amp; Customer Success Executive', 'org' => 'USMLE Wise'],
            ],
        ],

        'eman-fatima' => [
            'group'     => 'sales',
            'name'      => 'Eman Fatima',
            'role'      => 'Sales Intern',
            'sub'       => 'Sales, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Eman-Fatima.webp',
            'photo_position' => 'right top',
            'card_line' => 'First-touch lead engagement &middot; CRM &amp; pipeline upkeep',
            'bio'       => [
                "Eman Fatima is a Sales Intern at USMLE Wise, supporting the Sales team on first-touch engagement and pipeline upkeep.",
                "She triages and tags new leads, updates the CRM, sends follow-up templates, helps book calls, and shadows sales calls to take notes, as a learning track into a full sales career.",
            ],
            'affiliations' => [
                ['role' => 'Sales Intern', 'org' => 'USMLE Wise'],
            ],
        ],

        /* ---------------- Marketing, Content &amp; Outreach ---------------- */

        'abhishek-dinesh' => [
            'group'     => 'marketing',
            'name'      => 'Abhishek Dinesh',
            'role'      => 'Video Editor &amp; Content Creator',
            'sub'       => 'Marketing, Sales, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Abhishek-Dinesh.webp',
            'card_line' => 'Owns content from script to published video &middot; Reels, YouTube &amp; carousels',
            'bio'       => [
                "Abhishek Dinesh is Video Editor and Content Creator at USMLE Wise, owning content from idea to published video.",
                "He writes scripts for Reels, YouTube, and carousels on medical education and Match topics, checks medical accuracy, edits to a publish-ready standard, and reports weekly on views and engagement. He also supports outbound sales.",
            ],
            'affiliations' => [
                ['role' => 'Video Editor &amp; Content Creator', 'org' => 'USMLE Wise'],
            ],
        ],

        'mohamed-samir-bacha' => [
            'group'     => 'marketing',
            'name'      => 'Mohamed Samir Bacha',
            'role'      => 'Content Creator',
            'sub'       => 'Sales, Marketing, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Mohamed-Samir-Bacha.webp',
            'card_line' => 'Scripts, posts &amp; videos tied to the Step and Match calendar',
            'bio'       => [
                "Mohamed Samir Bacha is a Content Creator at USMLE Wise, turning complex medical and process knowledge into scripts, posts, and videos for Instagram, YouTube, and other channels.",
                "He keeps a content calendar tied to launches and the Step and Match seasons, writes ad and landing page copy, and reports weekly on what works.",
            ],
            'affiliations' => [
                ['role' => 'Content Creator', 'org' => 'USMLE Wise'],
            ],
        ],

        'leesarena-kani' => [
            'group'     => 'marketing',
            'name'      => 'Leesarena Kani',
            'role'      => 'Outreach Executive',
            'sub'       => 'Outreach, Marketing, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Leesarena-Kani.webp',
            'card_line' => 'Builds relationships with institutions, influencers &amp; partners',
            'bio'       => [
                "Leesarena Kani is Outreach Executive at USMLE Wise, building relationships with institutions, influencers, collaborators, and potential partners.",
                "She researches targets, sends personalized outreach, follows up to a clear next step, coordinates agreed collaborations, and reports weekly on response rate and collaborations closed.",
            ],
            'affiliations' => [
                ['role' => 'Outreach Executive', 'org' => 'USMLE Wise'],
            ],
        ],

        'chrisann' => [
            'group'     => 'marketing',
            'name'      => 'Chrisann',
            'role'      => 'Social Media Manager &amp; Match Coordinator',
            'sub'       => 'Marketing, Match, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Chrisann.webp',
            'card_line' => 'Leads the social media team &middot; Coordinates Match-team scheduling &amp; documents',
            'bio'       => [
                "Chrisann is Social Media Manager, Team Leader, and Match Coordinator at USMLE Wise.",
                "Chrisann leads the social media team and manages the company's social presence, with the content creators working within the team. Chrisann also coordinates scheduling and document logistics for the Match team.",
            ],
            'affiliations' => [
                ['role' => 'Social Media Manager, Team Leader &amp; Match Coordinator', 'org' => 'USMLE Wise'],
            ],
        ],

        'shrunga' => [
            'group'     => 'marketing',
            'name'      => 'Shrunga',
            'role'      => 'Content Creator',
            'sub'       => 'Marketing, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Shrunga.webp',
            'card_line' => 'Educational &amp; promotional content for Instagram, YouTube &amp; beyond',
            'bio'       => [
                "Shrunga is a Content Creator at USMLE Wise, producing the educational and promotional content that attracts and converts its audience of IMGs: scripts, posts, and videos for Instagram, YouTube, and other channels.",
                "The work runs on accurate medical content, a content calendar, supporting ad and landing page copy, and weekly performance reporting.",
            ],
            'affiliations' => [
                ['role' => 'Content Creator', 'org' => 'USMLE Wise'],
            ],
        ],

        'pratyusha' => [
            'group'     => 'marketing',
            'name'      => 'Pratyusha',
            'role'      => 'Content Creator',
            'sub'       => 'Marketing, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Pratyusha.webp',
            'card_line' => 'Educational &amp; promotional content for Instagram, YouTube &amp; beyond',
            'bio'       => [
                "Pratyusha is a Content Creator at USMLE Wise, producing the educational and promotional content that attracts and converts its audience of IMGs: scripts, posts, and videos for Instagram, YouTube, and other channels.",
                "The work runs on accurate medical content, a content calendar, supporting ad and landing page copy, and weekly performance reporting.",
            ],
            'affiliations' => [
                ['role' => 'Content Creator', 'org' => 'USMLE Wise'],
            ],
        ],

        'uzair' => [
            'group'     => 'marketing',
            'name'      => 'Uzair',
            'role'      => 'Content Creator',
            'sub'       => 'Marketing, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Uzair.webp',
            'card_line' => 'Educational &amp; promotional content for Instagram, YouTube &amp; beyond',
            'bio'       => [
                "Uzair is a Content Creator at USMLE Wise, producing the educational and promotional content that attracts and converts its audience of IMGs: scripts, posts, and videos for Instagram, YouTube, and other channels.",
                "The work runs on accurate medical content, a content calendar, supporting ad and landing page copy, and weekly performance reporting.",
            ],
            'affiliations' => [
                ['role' => 'Content Creator', 'org' => 'USMLE Wise'],
            ],
        ],

        /* ---------------- Research (cont.) ---------------- */

        'meghana-reddy' => [
            'group'     => 'research',
            'name'      => 'Meghana Reddy',
            'role'      => 'Research Coordinator',
            'sub'       => 'Research Coordinator, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Meghana-Reddy.webp',
            'card_line' => 'Keeps every research project on schedule across the team',
            'bio'       => [
                "Meghana Reddy is Research Coordinator at USMLE Wise, keeping every student's research project on schedule by handling the logistics behind the mentorship.",
                "Meghana schedules sessions, tracks journal and conference deadlines, organizes drafts and approvals, flags missing materials, and maintains the CRM, aiming for zero coordination-related missed deadlines.",
            ],
            'affiliations' => [
                ['role' => 'Research Coordinator', 'org' => 'USMLE Wise'],
            ],
        ],

        'nikita-tompe' => [
            'group'     => 'research',
            'name'      => 'Nikita Tompe',
            'role'      => 'Research Intern',
            'sub'       => 'Research Intern (Projects), USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Nikita-Tompe.webp',
            'card_line' => 'Literature searches, data organization &amp; reference management',
            'bio'       => [
                "Nikita Tompe is a Research Intern at USMLE Wise, supporting the Research Lead, mentors, and students with literature searches and summaries, data organization, reference management, formatting, and proofreading.",
                "Nikita also tracks deadlines across projects, as a path toward Research Coordinator or Research Mentor.",
            ],
            'affiliations' => [
                ['role' => 'Research Intern (Projects)', 'org' => 'USMLE Wise'],
            ],
        ],

        'vidhi-dhaduk' => [
            'group'     => 'research',
            'name'      => 'Vidhi Dhaduk',
            'role'      => 'Research Intern',
            'sub'       => 'Research Intern (Projects), USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Vidhi-Dhaduk.webp',
            'card_line' => 'Literature searches, data organization &amp; reference management',
            'bio'       => [
                "Vidhi Dhaduk is a Research Intern at USMLE Wise, supporting the Research Lead, mentors, and students with literature searches and summaries, data organization, reference management, formatting, and proofreading.",
                "Vidhi also tracks deadlines across projects, as a path toward Research Coordinator or Research Mentor.",
            ],
            'affiliations' => [
                ['role' => 'Research Intern (Projects)', 'org' => 'USMLE Wise'],
            ],
        ],

        'malihaa-tabassum' => [
            'group'     => 'research',
            'name'      => 'Malihaa Tabassum',
            'role'      => 'Research Intern',
            'sub'       => 'Research Intern (Projects), USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Malihaa-Tabassum.webp',
            'card_line' => 'Literature searches, data organization &amp; reference management',
            'bio'       => [
                "Malihaa Tabassum is a Research Intern at USMLE Wise, supporting the Research Lead, mentors, and students with literature searches and summaries, data organization, reference management, formatting, and proofreading.",
                "Malihaa also tracks deadlines across projects, as a path toward Research Coordinator or Research Mentor.",
            ],
            'affiliations' => [
                ['role' => 'Research Intern (Projects)', 'org' => 'USMLE Wise'],
            ],
        ],

        /* ---------------- Match Services ---------------- */

        'roohi' => [
            'group'     => 'match',
            'name'      => 'Roohi',
            'role'      => 'Match Lead',
            'sub'       => 'Match, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Roohi.webp',
            'card_line' => 'Owns Match strategy &amp; delivery for every applicant',
            'bio'       => [
                "Roohi is Match Lead at USMLE Wise, owning Match strategy and delivery for applicants and setting the playbook that mentors and coordinators follow.",
                "Roohi approves high-stakes client strategies, assigns clients to mentors, audits quality, keeps the team on ERAS and NRMP deadlines, and mentors on personal statements.",
            ],
            'affiliations' => [
                ['role' => 'Match Lead', 'org' => 'USMLE Wise'],
            ],
        ],

        'tanishq' => [
            'group'     => 'match',
            'name'      => 'Dr. Tanishq',
            'role'      => 'Match Mentor',
            'sub'       => 'Match Mentor, ERAS CVs &amp; Program Signaling, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Tanishq.webp',
            'card_line' => 'Primary strategist for an assigned roster of applicants',
            'bio'       => [
                "Dr. Tanishq is a volunteer Match Mentor at USMLE Wise focused on ERAS CVs and program signaling.",
                "Dr. Tanishq is the primary strategist for an assigned roster of residency applicants: running strategy calls, building program lists, keeping each client's portfolio current, and handing applicants to Interview Coaches when interview season starts.",
            ],
            'affiliations' => [
                ['role' => 'Match Mentor', 'org' => 'USMLE Wise'],
            ],
        ],

        'meher' => [
            'group'     => 'match',
            'name'      => 'Dr. Meher',
            'role'      => 'Match Mentor',
            'sub'       => 'Match, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Meher.webp',
            'card_line' => 'Primary strategist for an assigned roster of applicants',
            'bio'       => [
                "Dr. Meher is a volunteer Match Mentor at USMLE Wise.",
                "Dr. Meher is the primary strategist for an assigned roster of residency applicants: running strategy calls, building program lists, keeping each client's portfolio current, and handing applicants to Interview Coaches when interview season starts.",
            ],
            'affiliations' => [
                ['role' => 'Match Mentor', 'org' => 'USMLE Wise'],
            ],
        ],

        'saket' => [
            'group'     => 'match',
            'name'      => 'Dr. Saket',
            'role'      => 'Match Mentor',
            'sub'       => 'Match, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Saket.webp',
            'card_line' => 'Primary strategist for an assigned roster of applicants',
            'bio'       => [
                "Dr. Saket is a volunteer Match Mentor at USMLE Wise.",
                "Dr. Saket is the primary strategist for an assigned roster of residency applicants: running strategy calls, building program lists, keeping each client's portfolio current, and handing applicants to Interview Coaches when interview season starts.",
            ],
            'affiliations' => [
                ['role' => 'Match Mentor', 'org' => 'USMLE Wise'],
            ],
        ],

        /* ---------------- Coaching ---------------- */

        'shashank-choti' => [
            'group'     => 'coaching',
            'name'      => 'Shashank Choti',
            'role'      => 'Coaching Manager',
            'sub'       => 'Coaching, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Shashank-Choti.webp',
            'photo_position' => 'right top',
            'card_line' => 'Owns quality &amp; consistency of all coaching delivered to students',
            'bio'       => [
                "Shashank Choti is Coaching Manager at USMLE Wise, owning the quality and consistency of all coaching delivered to students.",
                "Shashank recruits and trains coaches, assigns students, maintains coaching frameworks, monitors outcomes, steps in on high-risk cases, and oversees coach scheduling.",
            ],
            'affiliations' => [
                ['role' => 'Coaching Manager', 'org' => 'USMLE Wise'],
            ],
        ],

        'vanshitha' => [
            'group'     => 'coaching',
            'name'      => 'Vanshitha',
            'role'      => 'Coaching Coordinator &amp; Content Creator',
            'sub'       => 'Coaching, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Vanshitha.webp',
            'card_line' => 'Keeps the coaching program on schedule for every student',
            'bio'       => [
                "Vanshitha is Coaching Coordinator and Content Creator at USMLE Wise, keeping the coaching program on schedule for every student and coach.",
                "Vanshitha schedules sessions, monitors attendance and no-shows, tracks session counts and renewals, keeps CRM logs current, sends reminders, and contributes content.",
            ],
            'affiliations' => [
                ['role' => 'Coaching Coordinator &amp; Content Creator', 'org' => 'USMLE Wise'],
            ],
        ],

        'darshan' => [
            'group'     => 'marketing',
            'name'      => 'Darshan',
            'role'      => 'Content Creator',
            'sub'       => 'Marketing, Coaching, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Darshan.webp',
            'card_line' => 'Social &amp; content production, carousels',
            'bio'       => [
                "Darshan is a Content Creator at USMLE Wise, producing carousels, and is also a member of the coaching team.",
            ],
            'affiliations' => [
                ['role' => 'Content Creator', 'org' => 'USMLE Wise'],
            ],
        ],

        /* ---------------- Tech ---------------- */

        'syed-hassam' => [
            'group'     => 'tech',
            'name'      => 'Syed Hassam',
            'role'      => 'Developer',
            'sub'       => 'Tech, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Syed-Hassam.webp',
            'card_line' => 'Primary developer on the CRM &amp; USMLE Wise platforms',
            'bio'       => [
                "Syed Hassam is Developer at USMLE Wise, building and maintaining its interconnected platforms: the CRM, WhatsApp AI bot infrastructure, Matchmaker, the Mastery and Q Bank learning platform, and the CRIST app.",
                "Hassam is the primary developer on the CRM architecture and builds features, automations, and lead routing flows.",
            ],
            'affiliations' => [
                ['role' => 'Developer', 'org' => 'USMLE Wise'],
            ],
        ],

        /* ---------------- Admin ---------------- */

        'harshitha' => [
            'group'     => 'admin',
            'name'      => 'Harshitha',
            'role'      => 'Admin',
            'sub'       => 'Admin, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Harshitha.webp',
            'card_line' => 'Keeps the administrative backbone of USMLE Wise running',
            'bio'       => [
                "Harshitha is Admin at USMLE Wise, keeping the administrative backbone of the company running: shared calendars and scheduling, general inboxes, internal documents and records, trackers, CRM data cleanup, and SOP upkeep, so other teams can focus on their core work.",
            ],
            'affiliations' => [
                ['role' => 'Admin', 'org' => 'USMLE Wise'],
            ],
        ],

        'divya' => [
            'group'     => 'admin',
            'name'      => 'Divya',
            'role'      => 'Admin',
            'sub'       => 'Admin, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Divya.webp',
            'card_line' => 'Keeps the administrative backbone of USMLE Wise running',
            'bio'       => [
                "Divya is Admin at USMLE Wise, keeping the administrative backbone of the company running: shared calendars and scheduling, general inboxes, internal documents and records, trackers, CRM data cleanup, and SOP upkeep, so other teams can focus on their core work.",
            ],
            'affiliations' => [
                ['role' => 'Admin', 'org' => 'USMLE Wise'],
            ],
        ],

        /* ---------------- Operations ---------------- */

        'mohamed-regaieg' => [
            'group'     => 'operations',
            'name'      => 'Mohamed Regaieg',
            'role'      => 'General Manager &amp; UX/UI Designer',
            'sub'       => 'Operations &amp; Product, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Mohamed-Regaieg.webp',
            'card_line' => 'Runs day-to-day operations across every team &middot; Owns UX/UI across all USMLE Wise products',
            'bio'       => [
                "Mohamed Regaieg is General Manager and UX/UI Designer at USMLE Wise.",
                "He keeps daily operations running across every team at USMLE Wise, and owns the look, feel, and usability of its digital products, so operational decisions and product design come from the same person.",
            ],
            'affiliations' => [
                ['role' => 'General Manager &amp; UX/UI Designer', 'org' => 'USMLE Wise'],
            ],
        ],

        'sharvesh-rajesh' => [
            'group'     => 'operations',
            'name'      => 'Sharvesh Rajesh',
            'role'      => 'Operations Lead',
            'sub'       => 'Operations, USMLE Wise',
            'photo'     => '/assets/Photos/Team-Members/Sharvesh-Rajesh.webp',
            'card_line' => 'Runs marketing, outreach &amp; the sales pipeline as one system',
            'bio'       => [
                "Sharvesh Rajesh is Operations Lead at USMLE Wise, overseeing marketing, social media, outreach, customer satisfaction, product development, and the sales pipeline so every part of the student journey runs as one connected system.",
                "Sharvesh builds lead campaigns, shapes lead conversion, develops new programs such as Research Wise, and tracks each student from sale to completion.",
            ],
            'affiliations' => [
                ['role' => 'Operations Lead', 'org' => 'USMLE Wise'],
            ],
        ],

    ];
}

/**
 * Look up one member by slug. Returns null when the slug is unknown, which
 * routes.php treats as "redirect back to /team".
 */
function usmlewise_find_team_member(string $slug): ?array
{
    $members = usmlewise_team_members();
    if (!isset($members[$slug])) {
        return null;
    }
    $member = $members[$slug];
    $member['slug'] = $slug;
    return $member;
}

/**
 * Up to two initials for the no-photo avatar fallback used on both the
 * roster cards and the detail-page hero.
 */
function usmlewise_team_initials(string $name): string
{
    $name = preg_replace('/^(Dr\.?|Mr\.?|Ms\.?|Mrs\.?)\s+/i', '', trim($name));
    $words = preg_split('/\s+/', $name);
    $initials = '';
    foreach (array_slice($words, 0, 2) as $word) {
        $initials .= mb_strtoupper(mb_substr($word, 0, 1));
    }
    return $initials;
}

/**
 * Deterministic gradient variant (blue/red/green/purple) for the no-photo
 * avatar, keyed on slug so a given member always gets the same color.
 */
function usmlewise_team_ava_class(string $slug): string
{
    $variants = ['team-ava--blue', 'team-ava--red', 'team-ava--green', 'team-ava--purple'];
    $index = crc32($slug) % count($variants);
    return $variants[$index];
}

/**
 * True if a member belongs to any of the given section groups, counting both
 * their primary 'group' and any cross-listed 'also_in' groups (e.g. a
 * research mentor who also does coaching operations shows up on both
 * sections without duplicating their profile).
 */
function usmlewise_team_in_groups(array $member, array $groups): bool
{
    if (in_array($member['group'], $groups, true)) {
        return true;
    }
    return !empty($member['also_in']) && array_intersect($member['also_in'], $groups);
}
