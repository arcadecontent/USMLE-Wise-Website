/* USMLE Wise Wiki: IMG readiness self-evaluation.
   Pure client-side. A short questionnaire turns into (1) a snapshot by area,
   (2) a ranked list of free next steps linked to our guides, and (3) a few
   service suggestions chosen ONLY from the gaps the answers reveal.
   Answers live in memory for this page view. They are not stored, not sent, and
   not written to the address bar. */
(function () {
  'use strict';

  var root = document.querySelector('[data-wk-tool="evaluation"]');
  if (!root) return;
  var app = root.querySelector('[data-eval-app]');

  var SERVICES = {};
  try { SERVICES = JSON.parse(root.getAttribute('data-services') || '{}'); } catch (e) { SERVICES = {}; }
  var CALL_URL = 'https://team.manikmadaan.com/guidance-call/book';

  var A = {};          // answers
  var section = 0;     // index into the currently visible sections
  var phase = 'quiz';  // 'quiz' | 'results'
  var renderedIds = '';

  function esc(s) {
    return String(s).replace(/[&<>"']/g, function (c) {
      return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c];
    });
  }
  function inList(v, list) { return list.indexOf(v) !== -1; }

  /* ------------------------------------------------------------------ */
  /* Questions                                                           */
  /* option = [value, label, level]; level 0 needs attention, 1 in       */
  /* progress, 2 on track. level may be a function of the answers.       */
  /* ------------------------------------------------------------------ */
  var EARLY = ['prep', 'build'];
  var NOT_MATCHED = ['prep', 'build', 'interview', 'unmatched'];

  var SECTIONS = [
    ['about', 'About you'],
    ['exams', 'Exams'],
    ['elig', 'School and ECFMG'],
    ['exp', 'Experience and background'],
    ['app', 'Application and interviews'],
    ['visa', 'Visa']
  ];

  var AREAS = {
    elig: 'School and ECFMG',
    exams: 'Exams',
    time: 'Time since graduation',
    exp: 'US experience and letters',
    research: 'Research',
    app: 'Application materials',
    int: 'Interviews',
    visa: 'Visa planning'
  };

  var Q = [
    {
      id: 'stage', section: 'about',
      text: 'Where are you right now?',
      options: [
        ['prep', 'Preparing for USMLE exams, or planning early'],
        ['build', 'Exams are mostly done and I am building my application'],
        ['interview', 'I have applied this season and am interviewing'],
        ['unmatched', 'I did not match, or did not fully match'],
        ['matched', 'I matched and am preparing to start']
      ]
    },
    {
      id: 'soapnow', section: 'about',
      show: function (a) { return a.stage === 'unmatched'; },
      text: 'Is it Match Week (the SOAP period) right now?',
      help: 'This decides whether SOAP help is relevant to you or whether you are planning a reapplication.',
      options: [
        ['yes', 'Yes, SOAP is happening now'],
        ['no', 'No, the Match is over and I am planning ahead']
      ]
    },
    {
      id: 'grad', section: 'about', area: 'time',
      text: 'When did you graduate from medical school?',
      options: [
        ['student', 'I have not graduated yet', 2],
        ['recent', 'Within the last 2 years', 2],
        ['mid', '3 to 5 years ago', 2],
        ['long', '6 to 9 years ago', 1],
        ['vlong', '10 or more years ago', 1]
      ]
    },
    {
      id: 'visa', section: 'about',
      text: 'Will you need a visa to train in the US?',
      help: 'You do not if you are a US citizen or permanent resident.',
      options: [['yes', 'Yes'], ['no', 'No']]
    },

    {
      id: 'step1', section: 'exams', area: 'exams',
      show: function (a) { return a.stage !== 'matched'; },
      text: 'USMLE Step 1',
      options: [
        ['passed', 'Passed', 2],
        ['none', 'Not passed yet', function (a) { return a.stage === 'prep' ? 1 : 0; }],
        ['failed', 'Failed at least once and not passed yet', 0]
      ]
    },
    {
      id: 'step2', section: 'exams', area: 'exams',
      show: function (a) { return a.stage !== 'matched'; },
      text: 'USMLE Step 2 CK',
      options: [
        ['passed', 'Passed', 2],
        ['none', 'Not passed yet', function (a) { return a.stage === 'prep' ? 1 : 0; }],
        ['failed', 'Failed at least once and not passed yet', 0]
      ]
    },
    {
      id: 'step3', section: 'exams',
      show: function (a) { return a.visa === 'yes' && a.stage !== 'matched' && a.step1 === 'passed' && a.step2 === 'passed'; },
      text: 'USMLE Step 3',
      help: 'Shown because it matters for the H-1B.',
      options: [['passed', 'Passed'], ['none', 'Not taken yet'], ['failed', 'Failed at least once and not passed yet']]
    },
    {
      id: 'assess', section: 'exams', area: 'exams',
      show: function (a) { return inList(a.stage, EARLY) && (a.step1 !== 'passed' || a.step2 !== 'passed'); },
      text: 'For the exam you are preparing for now: how do your recent independent practice assessments compare with your goal?',
      options: [
        ['none', 'I have not taken any yet', 0],
        ['below', 'Below my goal', 0],
        ['near', 'Close to my goal', 1],
        ['at', 'At or above my goal', 2]
      ]
    },

    {
      id: 'school', section: 'elig', area: 'elig',
      show: function (a) { return inList(a.stage, EARLY); },
      text: 'Have you checked that your medical school and graduation year are eligible for ECFMG certification?',
      options: [
        ['eligible', 'Yes, and it looks eligible', 2],
        ['unchecked', 'Not yet', 0],
        ['unsure', 'I found a possible problem, or I am not sure', 0]
      ]
    },
    {
      id: 'ecfmg', section: 'elig', area: 'elig',
      show: function (a) { return inList(a.stage, EARLY); },
      text: 'Where are you with ECFMG credential verification?',
      options: [
        ['done', 'Done, or nearly done', 2],
        ['progress', 'Started', 1],
        ['none', 'Not started', 0]
      ]
    },

    {
      id: 'usce', section: 'exp', area: 'exp',
      show: function (a) { return inList(a.stage, ['prep', 'build', 'unmatched']); },
      text: 'US clinical experience',
      options: [
        ['none', 'None yet', 0],
        ['observer', 'Observerships only', 1],
        ['substantial', 'Substantial, including recent experience', 2]
      ]
    },
    {
      id: 'letters', section: 'exp', area: 'exp',
      show: function (a) { return inList(a.stage, ['prep', 'build', 'unmatched']); },
      text: 'Letters of recommendation',
      options: [
        ['none', 'None lined up', 0],
        ['some', 'Some, but not from the US or not enough', 1],
        ['ready', 'Three or more, including at least one US letter', 2]
      ]
    },
    {
      id: 'research', section: 'exp', area: 'research',
      show: function (a) { return inList(a.stage, ['prep', 'build', 'unmatched']); },
      text: 'Research',
      options: [
        ['none', 'Nothing to list yet', 1],
        ['some', 'Work in progress, posters or abstracts', 1],
        ['pubs', 'At least one publication', 2]
      ]
    },
    {
      id: 'activity', section: 'exp', area: 'time',
      show: function (a) { return a.stage !== 'matched' && inList(a.grad, ['mid', 'long', 'vlong']); },
      text: 'Since graduating, which best describes your time?',
      options: [
        ['continuous', 'Continuous clinical, academic or research activity', 2],
        ['partial', 'Some activity with some gaps', 1],
        ['gap', 'Mostly a gap', 0]
      ]
    },

    {
      id: 'drafts', section: 'app', area: 'app',
      show: function (a) { return inList(a.stage, ['build', 'unmatched']); },
      text: 'Your ERAS experiences and personal statement',
      options: [
        ['none', 'Not started', 0],
        ['drafted', 'Drafted', 1],
        ['polished', 'Polished and reviewed by someone experienced', 2]
      ]
    },
    {
      id: 'list', section: 'app', area: 'app',
      show: function (a) { return inList(a.stage, ['build', 'unmatched']); },
      text: 'Your program list and signaling plan',
      options: [
        ['none', 'No plan yet', 0],
        ['rough', 'A rough list', 1],
        ['researched', 'Researched, with each program\'s IMG, exam and visa requirements checked', 2]
      ]
    },
    {
      id: 'interview', section: 'app', area: 'int',
      show: function (a) { return inList(a.stage, ['build', 'interview', 'unmatched']); },
      text: 'Interview preparation',
      options: [
        ['none', 'Not practiced yet', 0],
        ['some', 'Some practice on my own', 1],
        ['mock', 'Mock interviews with feedback', 2]
      ]
    },

    {
      id: 'visaPlan', section: 'visa', area: 'visa',
      show: function (a) { return a.visa === 'yes'; },
      text: 'Your visa plan',
      options: [
        ['none', 'I have not looked into it yet', 0],
        ['basic', 'I know the basics of J-1 and H-1B', 1],
        ['informed', 'I know what my target programs sponsor and when they file', 2]
      ]
    }
  ];

  function qById(id) { for (var i = 0; i < Q.length; i++) { if (Q[i].id === id) return Q[i]; } return null; }
  function visible(q) { return !q.show || q.show(A); }
  function visibleQs(secId) { return Q.filter(function (q) { return q.section === secId && visible(q); }); }
  function visibleSections() { return SECTIONS.filter(function (s) { return visibleQs(s[0]).length > 0; }); }

  /* ------------------------------------------------------------------ */
  /* Rules: each triggered rule is a "next step". Services are attached   */
  /* only where a real gap makes them relevant.                          */
  /* ------------------------------------------------------------------ */
  function pr(map, def) { return function (a) { return map[a.stage] !== undefined ? map[a.stage] : def; }; }
  function early(a) { return inList(a.stage, EARLY); }
  function notMatched(a) { return inList(a.stage, NOT_MATCHED); }
  function stepService(a) { return a.step1 !== 'passed' ? 'step-1-crash-course' : 'step-2-crash-course'; }

  var G = '/wiki/';
  var RULES = [
    {
      id: 'school', when: function (a) { return early(a) && (a.school === 'unchecked' || a.school === 'unsure'); }, priority: 100,
      title: 'Confirm your school and graduation year are eligible',
      why: function (a) { return a.school === 'unsure' ? 'You flagged a possible problem. Eligibility cannot be fixed with exam scores, so settle it first and contact ECFMG about anything unclear.' : 'Eligibility cannot be fixed with exam scores, so check it before you invest in anything else.'; },
      links: [['World Directory and school eligibility', G + 'ecfmg/world-directory-and-school-eligibility'], ['The accreditation requirement', G + 'ecfmg/accreditation-requirement']]
    },
    {
      id: 'ecfmg', when: function (a) { return early(a) && a.ecfmg === 'none'; }, priority: 90,
      title: 'Open your ECFMG account and start credential verification',
      why: 'Verification involves your medical school and is often the slowest step in certification.',
      links: [['MyIntealth account', G + 'ecfmg/myintealth-account'], ['EPIC verification', G + 'ecfmg/epic-credential-verification'], ['Certification timeline', G + 'ecfmg/ecfmg-certification-timeline']]
    },
    {
      id: 'soap', when: function (a) { return a.stage === 'unmatched' && a.soapnow === 'yes'; }, priority: 100,
      title: 'Act on SOAP now',
      why: 'SOAP moves within days and an accepted offer is a binding commitment. Have your documents and program list ready, and follow the official NRMP schedule exactly.',
      links: [['SOAP explained', G + 'interviews-match/soap-explained'], ['Match Week day by day', G + 'interviews-match/match-week-timeline'], ['If you do not match', G + 'interviews-match/if-you-do-not-match']],
      services: ['match-soap'],
      serviceWhy: 'SOAP support is real-time, which is what this week needs.'
    },
    {
      id: 'reapply', when: function (a) { return a.stage === 'unmatched'; }, priority: function (a) { return a.soapnow === 'yes' ? 90 : 99; },
      title: 'Work out what to change before you reapply',
      why: 'Repeating the same application usually repeats the result. Look honestly at exams, experience, letters and program choice.',
      links: [['Reapplicant strategy', G + 'application/reapplicant-strategy'], ['Strategy with lower scores', G + 'application/strategy-with-lower-scores'], ['Failed attempts on your application', G + 'application/failed-attempts-on-application']],
      services: ['match'],
      serviceWhy: 'Match Support covers a full reapplication.'
    },
    {
      id: 'step1failed', when: function (a) { return a.stage !== 'matched' && a.step1 === 'failed'; }, priority: 99,
      title: 'Plan your Step 1 retake before you book it',
      why: 'Attempts are limited and every one is visible to programs. Use your score report and honest practice assessments to decide when you are ready.',
      links: [['What to do after failing a Step', G + 'exams/what-to-do-after-failing-a-step'], ['Attempt limits and retakes', G + 'exams/usmle-attempt-limits-and-retakes'], ['Step 1 study schedule', G + 'exams/step-1-study-schedule']],
      services: ['step-1-crash-course', 'coaching'],
      serviceWhy: 'For a retake, some students want a structured course or a mentor to review how they study.'
    },
    {
      id: 'step1', when: function (a) { return notMatched(a) && a.step1 === 'none'; }, priority: pr({ prep: 95, build: 97, interview: 90, unmatched: 90 }, 90),
      title: 'Pass Step 1, starting from an honest baseline',
      why: 'Step 1 is pass/fail. Take a baseline assessment, then plan backward from your exam date.',
      links: [['Step 1 guide', G + 'exams/step-1'], ['Step 1 study schedule', G + 'exams/step-1-study-schedule'], ['NBME and UWSA self-assessments', G + 'exams/nbme-self-assessments']],
      services: ['step-1-crash-course'],
      serviceWhy: 'A recorded course covering the high-yield subjects can give a study plan some structure.'
    },
    {
      id: 'step2failed', when: function (a) { return a.stage !== 'matched' && a.step2 === 'failed'; }, priority: 98,
      title: 'Plan your Step 2 CK retake before you book it',
      why: 'Step 2 CK reports a score programs can see, so a retake needs a clear plan and real practice-assessment evidence.',
      links: [['What to do after failing a Step', G + 'exams/what-to-do-after-failing-a-step'], ['Attempt limits and retakes', G + 'exams/usmle-attempt-limits-and-retakes'], ['Step 2 CK study schedule', G + 'exams/step-2-ck-study-schedule']],
      services: ['step-2-crash-course', 'coaching'],
      serviceWhy: 'For a retake, some students want a structured course or a mentor to review how they study.'
    },
    {
      id: 'step2', when: function (a) { return notMatched(a) && a.step2 === 'none'; }, priority: pr({ prep: 80, build: 96, interview: 88, unmatched: 92 }, 80),
      title: 'Take Step 2 CK on a plan',
      why: 'Step 2 CK reports a three-digit score that programs can see, so it carries real weight.',
      links: [['Step 2 CK guide', G + 'exams/step-2-ck'], ['Step 2 CK study schedule', G + 'exams/step-2-ck-study-schedule'], ['What the score means', G + 'exams/step-2-ck-score-and-what-it-means']],
      services: ['step-2-crash-course'],
      serviceWhy: 'A recorded course covering the high-yield subjects can give a study plan some structure.'
    },
    {
      id: 'assess', when: function (a) { return early(a) && (a.step1 !== 'passed' || a.step2 !== 'passed') && (a.assess === 'none' || a.assess === 'below'); }, priority: 85,
      title: function (a) { return a.assess === 'none' ? 'Take an independent practice assessment to find your baseline' : 'Close the gap between your practice assessments and your goal'; },
      why: function (a) { return a.assess === 'none' ? 'Without a baseline you cannot tell how long you need. Take a recognised assessment, then plan from the result.' : 'Booking before your assessments reach your goal risks an attempt you cannot take back.'; },
      links: [['NBME and UWSA self-assessments', G + 'exams/nbme-self-assessments'], ['How long to study', G + 'exams/how-long-to-study'], ['Question banks compared', G + 'exams/question-banks-compared']],
      services: function (a) { return [stepService(a), 'coaching']; },
      serviceWhy: 'A course or coaching can add structure and outside feedback while you close the gap.'
    },
    {
      id: 'step3failed', when: function (a) { return a.stage !== 'matched' && a.step3 === 'failed'; }, priority: 70,
      title: 'Plan your Step 3 retake',
      why: 'Resident H-1Bs generally depend on Step 3, and attempts are limited, so a retake needs a clear plan.',
      links: [['What to do after failing a Step', G + 'exams/what-to-do-after-failing-a-step'], ['Step 3 and H-1B timing', G + 'visas/step-3-and-h1b-timing']],
      services: ['step-3-crash-course'],
      serviceWhy: 'A recorded Step 3 course that includes CCS.'
    },
    {
      id: 'step3', when: function (a) { return a.stage !== 'matched' && a.visa === 'yes' && a.step1 === 'passed' && a.step2 === 'passed' && a.step3 === 'none'; }, priority: 58,
      title: 'Decide when to take Step 3 (it matters for the H-1B)',
      why: 'Resident H-1Bs generally require Step 3. If you expect to need one, plan it early. If you will only use a J-1, it can usually wait.',
      links: [['Step 3 guide', G + 'exams/step-3'], ['Step 3 and H-1B timing', G + 'visas/step-3-and-h1b-timing'], ['J-1 vs H-1B', G + 'visas/j1-vs-h1b']],
      services: ['step-3-crash-course'],
      serviceWhy: 'When you are ready to prepare, this covers the exam including CCS.'
    },
    {
      id: 'yog', when: function (a) { return notMatched(a) && (a.grad === 'long' || a.grad === 'vlong'); }, priority: pr({ prep: 60, build: 76, interview: 50, unmatched: 70 }, 60),
      title: 'Plan for how programs read time since graduation',
      why: 'Many programs set limits on years since graduation and some filter on them, so recent activity and a well-chosen program list matter more for you.',
      links: [['Years since graduation', G + 'application/years-since-graduation'], ['How programs screen applications', G + 'application/program-screening-filters'], ['Identifying IMG-friendly programs', G + 'application/identifying-img-friendly-programs']],
      services: ['match-maker', 'match'],
      serviceWhy: 'Program limits vary, so a list built around your profile saves applications.'
    },
    {
      id: 'activity', when: function (a) { return a.stage !== 'matched' && (a.activity === 'partial' || a.activity === 'gap'); }, priority: function (a) { return a.activity === 'gap' ? 68 : 58; },
      title: 'Rebuild recent activity and explain the gap',
      why: 'Programs ask what you did since graduating. Recent clinical, research or work activity gives you something concrete to point to.',
      links: [['Gap years and how to explain them', G + 'application/gap-years-and-how-to-explain'], ['Strategy with lower scores', G + 'application/strategy-with-lower-scores'], ['How to get US clinical experience', G + 'clinical-experience/how-to-get-usce']],
      services: ['clinical-rotations'],
      serviceWhy: 'Recent US clinical experience is one way to show current activity.'
    },
    {
      id: 'usce0', when: function (a) { return inList(a.stage, ['prep', 'build', 'unmatched']) && a.usce === 'none'; }, priority: pr({ prep: 62, build: 80, unmatched: 78 }, 62),
      title: 'Get US clinical experience, and the letters that come with it',
      why: 'It takes the longest to arrange and is how most IMGs earn US letters. Verify any placement before you pay.',
      links: [['US clinical experience explained', G + 'clinical-experience/usce-explained'], ['How to get USCE', G + 'clinical-experience/how-to-get-usce'], ['Red flags and scams', G + 'clinical-experience/usce-red-flags-and-scams']],
      services: ['clinical-rotations'],
      serviceWhy: 'Browse placements by specialty, state, price and setting.'
    },
    {
      id: 'usce1', when: function (a) { return inList(a.stage, ['prep', 'build', 'unmatched']) && a.usce === 'observer'; }, priority: pr({ prep: 36, build: 48, unmatched: 48 }, 36),
      title: 'Consider deeper or more recent US experience',
      why: 'Observerships help, but programs read hands-on and recent experience differently. Check what your target programs say.',
      links: [['Observership vs externship vs hands-on', G + 'clinical-experience/observership-vs-externship-vs-hands-on'], ['How much USCE programs want', G + 'clinical-experience/how-much-usce-programs-want']],
      services: ['clinical-rotations'],
      serviceWhy: 'Browse placements by specialty, state, price and setting.'
    },
    {
      id: 'letters0', when: function (a) { return inList(a.stage, ['prep', 'build', 'unmatched']) && a.letters === 'none'; }, priority: pr({ prep: 55, build: 82, unmatched: 80 }, 55),
      title: 'Line up your letters of recommendation',
      why: 'Writers need weeks and upload letters themselves. Strong letters usually come from supervised work, so this ties to your experience plan.',
      links: [['Letters of recommendation', G + 'application/letters-of-recommendation'], ['Turning USCE into a letter', G + 'clinical-experience/turning-usce-into-a-letter']]
    },
    {
      id: 'letters1', when: function (a) { return inList(a.stage, ['prep', 'build', 'unmatched']) && a.letters === 'some'; }, priority: 52,
      title: 'Strengthen the letters you have, and add a US letter',
      why: 'Programs weigh specific letters from people who supervised you closely. Aim for letters that describe your work in detail.',
      links: [['Letters of recommendation', G + 'application/letters-of-recommendation'], ['Turning USCE into a letter', G + 'clinical-experience/turning-usce-into-a-letter']],
      services: ['match-lor'],
      serviceWhy: 'Letter editing is most useful once you have letters or drafts in hand.'
    },
    {
      id: 'research0', when: function (a) { return inList(a.stage, ['prep', 'build', 'unmatched']) && a.research === 'none'; }, priority: pr({ prep: 40, build: 54, unmatched: 54 }, 40),
      title: 'Decide whether and how to add research',
      why: 'Research helps most when it is real and you can describe your role. It is optional for many specialties, so weigh it against exams and experience.',
      links: [['Why research matters for IMGs', G + 'research/why-research-matters-for-imgs'], ['Finding a research position', G + 'research/finding-a-research-position'], ['How programs view research', G + 'research/how-programs-view-research']],
      services: ['research-wise', 'research-cohort'],
      serviceWhy: 'Both are built for people starting research from scratch.'
    },
    {
      id: 'research1', when: function (a) { return inList(a.stage, ['prep', 'build', 'unmatched']) && a.research === 'some'; }, priority: 45,
      title: 'Turn research in progress into work you can list',
      why: 'Finished, citable work is easier for programs to credit than work in progress.',
      links: [['How to publish', G + 'research/how-to-publish'], ['Case reports', G + 'research/case-reports'], ['Predatory journals', G + 'research/predatory-journals']],
      services: ['research-coauthor', 'research-original'],
      serviceWhy: 'Both are mentored routes to a completed case report or paper.'
    },
    {
      id: 'drafts', when: function (a) { return inList(a.stage, ['build', 'unmatched']) && (a.drafts === 'none' || a.drafts === 'drafted'); }, priority: function (a) { return a.drafts === 'none' ? (a.stage === 'build' ? 88 : 84) : 62; },
      title: function (a) { return a.drafts === 'none' ? 'Draft your ERAS experiences and personal statement' : 'Get your drafts reviewed by someone who has read many applications'; },
      why: function (a) { return a.drafts === 'none' ? 'Both take several drafts, so start early. Specific, honest detail beats generic claims.' : 'Experienced eyes catch what you can no longer see yourself.'; },
      links: [['ERAS experiences section', G + 'application/eras-experiences-section'], ['Personal statement guide', G + 'application/personal-statement-guide'], ['MyERAS walkthrough', G + 'application/myeras-walkthrough']],
      services: ['match-eras-cv', 'match-ps3x'],
      serviceWhy: 'Physician-led work on the CV and the personal statement.'
    },
    {
      id: 'list', when: function (a) { return inList(a.stage, ['build', 'unmatched']) && (a.list === 'none' || a.list === 'rough'); }, priority: function (a) { return a.list === 'none' ? 86 : 60; },
      title: function (a) { return a.list === 'none' ? 'Build a researched program list and plan your signals' : 'Test your program list against each program\'s real requirements'; },
      why: function (a) { return a.list === 'none' ? 'Check each program\'s IMG, exam and visa requirements on its own website, then decide how many to apply to.' : 'A list is only as good as the requirements you have checked.'; },
      links: [['Building a program list', G + 'application/building-a-program-list'], ['Identifying IMG-friendly programs', G + 'application/identifying-img-friendly-programs'], ['Program signaling', G + 'application/program-signaling-explained'], ['How many programs to apply to', G + 'application/how-many-programs-to-apply-to']],
      services: ['match-maker', 'match-signaling'],
      serviceWhy: 'Match Maker is the self-serve option; Program Signaling Strategy is advisor-led.'
    },
    {
      id: 'interview', when: function (a) { return inList(a.stage, ['build', 'interview', 'unmatched']) && (a.interview === 'none' || a.interview === 'some'); },
      priority: function (a) { var none = a.interview === 'none'; if (a.stage === 'interview') return none ? 92 : 66; if (a.stage === 'build') return none ? 70 : 44; return none ? 60 : 40; },
      title: function (a) { return a.interview === 'none' ? 'Start interview practice now' : 'Add realistic mock interviews with feedback'; },
      why: function (a) { return a.interview === 'none' ? 'Invitations arrive quickly. Practice out loud, on camera, before the first one.' : 'Practice that includes honest feedback improves faster than practice alone.'; },
      links: [['Interview season overview', G + 'interviews-match/interview-season-overview'], ['Common interview questions', G + 'interviews-match/common-interview-questions'], ['Behavioral answers', G + 'interviews-match/behavioral-interview-answers'], ['Virtual interview setup', G + 'interviews-match/virtual-interview-setup']],
      services: ['match-interview'],
      serviceWhy: 'Mock interviews and a large question bank.'
    },
    {
      id: 'visa0', when: function (a) { return a.stage !== 'matched' && a.visa === 'yes' && a.visaPlan === 'none'; }, priority: pr({ prep: 40, build: 62, interview: 72, unmatched: 55 }, 40),
      title: 'Learn the visa options before programs ask',
      why: 'Visa rules decide which programs you can train at, and they change often. Ask each program what it sponsors and when it files.',
      links: [['J-1 vs H-1B', G + 'visas/j1-vs-h1b'], ['Visa timeline after the Match', G + 'visas/visa-timeline-after-the-match'], ['Visa policy changes tracker', G + 'visas/visa-policy-changes-tracker']]
    },
    {
      id: 'visa1', when: function (a) { return a.stage !== 'matched' && a.visa === 'yes' && a.visaPlan === 'basic'; }, priority: 30,
      title: 'Turn your visa basics into a program-by-program plan',
      why: 'The details that matter are which programs sponsor which visa, and when they file.',
      links: [['Visa delays and backup plans', G + 'visas/visa-delays-and-backup-plans'], ['Visa policy changes tracker', G + 'visas/visa-policy-changes-tracker']]
    },
    {
      id: 'm-visa', when: function (a) { return a.stage === 'matched' && a.visa === 'yes'; }, priority: 95,
      title: 'Start your visa process now',
      why: 'Visa steps have long lead times. Ask your program what it sponsors and what it needs from you.',
      links: [['Visa timeline after the Match', G + 'visas/visa-timeline-after-the-match'], ['J-1 visa process', G + 'visas/j1-visa-process'], ['H-1B for residents', G + 'visas/h1b-for-residents'], ['Delays and backup plans', G + 'visas/visa-delays-and-backup-plans']]
    },
    {
      id: 'm-move', when: function (a) { return a.stage === 'matched'; }, priority: 90,
      title: 'Plan your move before your first day',
      why: 'The gap between arrival and your first paycheck is where new residents get caught out.',
      links: [['Arrival checklist', G + 'life-in-us/arrival-checklist'], ['Housing for residents', G + 'life-in-us/housing-for-residents'], ['SSN and ITIN', G + 'life-in-us/ssn-and-itin'], ['Banking and credit', G + 'life-in-us/banking-and-credit']]
    },
    {
      id: 'm-pay', when: function (a) { return a.stage === 'matched'; }, priority: 70,
      title: 'Understand your pay, benefits and taxes',
      why: 'Know what to expect before your first paycheck, including how taxes work for your visa.',
      links: [['Resident salary and benefits', G + 'life-in-us/resident-salary-and-benefits'], ['Taxes for J-1 and H-1B residents', G + 'life-in-us/taxes-for-j1-and-h1b-residents']]
    },
    {
      id: 'timeline', when: function (a) { return early(a); }, priority: 30,
      title: 'Put dates on your plan',
      why: 'The timeline planner shows how much time each step really has before the application season.',
      links: [['Timeline planner', G + 'tools/timeline-planner']]
    }
  ];

  function val(x, a) { return typeof x === 'function' ? x(a) : x; }

  function triggered(a) {
    return RULES.filter(function (r) { return r.when(a); })
      .map(function (r) { return { r: r, p: val(r.priority, a) }; })
      .sort(function (x, y) { return y.p - x.p; });
  }

  function pickServices(list, a) {
    var out = [], seen = {};
    list.forEach(function (t) {
      var keys = val(t.r.services, a) || [];
      keys.forEach(function (k) {
        if (out.length >= 3 || seen[k] || !SERVICES[k]) return;
        seen[k] = true;
        out.push({ key: k, svc: SERVICES[k], because: val(t.r.title, a), why: t.r.serviceWhy || '' });
      });
    });
    return out;
  }

  /* ------------------------------------------------------------------ */
  /* Snapshot by area                                                    */
  /* ------------------------------------------------------------------ */
  function snapshot(a) {
    var levels = {};
    Q.forEach(function (q) {
      if (!q.area || !visible(q) || a[q.id] === undefined) return;
      var o = null;
      for (var i = 0; i < q.options.length; i++) { if (q.options[i][0] === a[q.id]) o = q.options[i]; }
      if (!o || o[2] === undefined) return;
      var lv = typeof o[2] === 'function' ? o[2](a) : o[2];
      levels[q.area] = levels[q.area] === undefined ? lv : Math.min(levels[q.area], lv);
    });
    // Once matched, time since graduation no longer matters, so do not report on it.
    if (a.stage === 'matched') delete levels.time;
    return Object.keys(AREAS).filter(function (k) { return levels[k] !== undefined; })
      .map(function (k) { return { key: k, name: AREAS[k], level: levels[k] }; });
  }
  var LEVEL = [['Needs attention', 'warn'], ['In progress', 'mid'], ['On track', 'ok']];

  /* ------------------------------------------------------------------ */
  /* Rendering                                                           */
  /* ------------------------------------------------------------------ */
  function renderQuiz(focusId) {
    var secs = visibleSections();
    if (section >= secs.length) section = secs.length - 1;
    var sec = secs[section];
    var qs = visibleQs(sec[0]);
    renderedIds = qs.map(function (q) { return q.id; }).join(',');
    var pct = Math.round(((section + 1) / (secs.length + 1)) * 100);
    var last = section === secs.length - 1;

    // The number of steps depends on the stage, so do not promise a total before it is chosen.
    var known = A.stage !== undefined;
    var label = known ? 'Step ' + (section + 1) + ' of ' + secs.length + ': ' + sec[1] : 'Start here: ' + sec[1];
    var width = known ? pct : 8;
    var h = '<div class="wk-eval__head"><p class="wk-eval__step">' + esc(label) + '</p>' +
      '<div class="wk-eval__bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="' + width + '" aria-label="Progress"><span style="width:' + width + '%"></span></div></div>';
    h += '<form class="wk-eval__form" novalidate>';
    qs.forEach(function (q) {
      h += '<fieldset class="wk-q" data-q="' + q.id + '"><legend>' + esc(q.text) + '</legend>';
      if (q.help) h += '<p class="wk-q__help">' + esc(q.help) + '</p>';
      h += '<div class="wk-q__opts">';
      q.options.forEach(function (o) {
        var id = 'wk-q-' + q.id + '-' + o[0];
        h += '<label class="wk-opt" for="' + id + '"><input type="radio" id="' + id + '" name="' + q.id + '" value="' + o[0] + '"' + (A[q.id] === o[0] ? ' checked' : '') + '><span>' + esc(o[1]) + '</span></label>';
      });
      h += '</div><p class="wk-q__err" hidden>Please choose an answer to continue.</p></fieldset>';
    });
    h += '<div class="wk-eval__nav">' +
      (section > 0 ? '<button type="button" class="btn btn--outline" data-back>Back</button>' : '<span></span>') +
      '<button type="submit" class="btn btn--primary">' + (last ? 'See my plan' : 'Next') + '</button></div></form>';
    app.innerHTML = h;
    if (focusId) {
      var el = document.getElementById(focusId);
      if (el) el.focus();
    }
  }

  function renderResults() {
    var a = A;
    var list = triggered(a);
    var top = list.slice(0, 3);
    var more = list.slice(3);
    var snap = snapshot(a);
    var svcs = pickServices(list.slice(0, 6), a);
    var strengths = snap.filter(function (s) { return s.level === 2; });

    var h = '<div class="wk-res" tabindex="-1" data-res>';
    h += '<h3 class="wk-res__h">Your plan</h3>';

    if (snap.length) {
      h += '<div class="wk-res__snap">';
      snap.forEach(function (s) {
        h += '<div class="wk-chip wk-chip--' + LEVEL[s.level][1] + '"><span class="wk-chip__name">' + esc(s.name) + '</span><span class="wk-chip__lv">' + LEVEL[s.level][0] + '</span></div>';
      });
      h += '</div>';
    }

    if (strengths.length) {
      h += '<p class="wk-res__good"><strong>Already on track:</strong> ' + strengths.map(function (s) { return esc(s.name); }).join(', ') + '. Keep it that way, and put your energy elsewhere.</p>';
    }

    h += '<h3 class="wk-res__h2">Do these next</h3>';
    if (!top.length) {
      h += '<p>Nothing urgent came up from your answers. Use the <a href="' + G + 'start-here/imgs-roadmap">IMG roadmap</a> to check the stages ahead.</p>';
    } else {
      h += '<ol class="wk-res__top">';
      top.forEach(function (t) { h += stepHtml(t, a, true); });
      h += '</ol>';
    }

    if (more.length) {
      h += '<details class="wk-res__more"><summary>' + more.length + ' more to keep in mind</summary><ol class="wk-res__rest">';
      more.forEach(function (t) { h += stepHtml(t, a, false); });
      h += '</ol></details>';
    }

    h += '<div class="wk-res__help"><h3 class="wk-res__h2">If you want help</h3>';
    h += '<p class="wk-res__disc">USMLE Wise sells the services below. Every step above is free to do on your own. These suggestions come only from the gaps in your answers: they are not a claim that you need them.</p>';
    if (svcs.length) {
      h += '<ul class="wk-svc">';
      svcs.forEach(function (s) {
        h += '<li class="wk-svc__item"><div><p class="wk-svc__name">' + esc(s.svc[0]) + '</p><p class="wk-svc__line">' + esc(s.svc[2]) + '</p>' +
          '<p class="wk-svc__why"><strong>Why it came up:</strong> ' + esc(s.because) + '.' + (s.why ? ' ' + esc(s.why) : '') + '</p></div>' +
          '<a class="btn btn--outline" href="' + esc(s.svc[1]) + '">See details</a></li>';
      });
      h += '</ul>';
    } else {
      h += '<p>Nothing in your answers points to a service you would need. You can do all of the above with the free guides.</p>';
    }
    h += '<p class="wk-res__call">Not sure how to prioritize? <a href="' + CALL_URL + '" target="_blank" rel="noopener noreferrer">Book a Guidance Call</a> and talk it through with our team.</p></div>';

    h += '<div class="wk-tool__actions"><button type="button" class="btn btn--outline" data-copy>Copy my plan as text</button>' +
      '<button type="button" class="btn btn--outline" data-print>Print</button>' +
      '<button type="button" class="btn btn--outline" data-restart>Start over</button>' +
      '<span class="wk-tool__copied" data-copied hidden>Copied</span></div>';
    h += '</div>';
    app.innerHTML = h;
    var res = app.querySelector('[data-res]');
    if (res) res.focus();
    res && res.scrollIntoView && res.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }

  function stepHtml(t, a, big) {
    var r = t.r;
    var links = (r.links || []).map(function (l) { return '<a href="' + esc(l[1]) + '">' + esc(l[0]) + '</a>'; }).join('');
    return '<li class="wk-step' + (big ? ' wk-step--top' : '') + '"><p class="wk-step__t">' + esc(val(r.title, a)) + '</p>' +
      '<p class="wk-step__w">' + esc(val(r.why, a)) + '</p><p class="wk-step__l">' + links + '</p></li>';
  }

  function planText() {
    var a = A, list = triggered(a), snap = snapshot(a), svcs = pickServices(list.slice(0, 6), a);
    var t = 'IMG readiness self-evaluation\n\nSnapshot\n';
    snap.forEach(function (s) { t += '- ' + s.name + ': ' + LEVEL[s.level][0] + '\n'; });
    t += '\nDo these next\n';
    list.slice(0, 3).forEach(function (x, i) { t += (i + 1) + '. ' + val(x.r.title, a) + '\n   ' + val(x.r.why, a) + '\n'; });
    if (list.length > 3) {
      t += '\nAlso keep in mind\n';
      list.slice(3).forEach(function (x) { t += '- ' + val(x.r.title, a) + '\n'; });
    }
    if (svcs.length) {
      t += '\nServices that came up (USMLE Wise sells these; you can do every step above for free)\n';
      svcs.forEach(function (s) { t += '- ' + s.svc[0] + ': ' + window.location.origin + s.svc[1] + '\n'; });
    }
    t += '\nGenerated at ' + window.location.origin + window.location.pathname + '\n';
    return t;
  }

  /* ------------------------------------------------------------------ */
  /* Events                                                              */
  /* ------------------------------------------------------------------ */
  app.addEventListener('change', function (e) {
    var t = e.target;
    if (!t || t.type !== 'radio') return;
    A[t.name] = t.value;
    var fs = t.closest('fieldset');
    if (fs) { var er = fs.querySelector('.wk-q__err'); if (er) er.hidden = true; fs.classList.remove('is-invalid'); }
    // Answers can reveal or hide other questions: re-render only when the visible set changed.
    var secs = visibleSections();
    var sec = secs[Math.min(section, secs.length - 1)];
    var ids = visibleQs(sec[0]).map(function (q) { return q.id; }).join(',');
    if (ids !== renderedIds) renderQuiz(t.id);
  });

  app.addEventListener('submit', function (e) {
    e.preventDefault();
    var secs = visibleSections();
    var sec = secs[section];
    var firstBad = null;
    visibleQs(sec[0]).forEach(function (q) {
      var fs = app.querySelector('[data-q="' + q.id + '"]');
      if (A[q.id] === undefined) {
        if (fs) { fs.classList.add('is-invalid'); fs.querySelector('.wk-q__err').hidden = false; }
        if (!firstBad) firstBad = fs;
      }
    });
    if (firstBad) {
      var inp = firstBad.querySelector('input');
      if (inp) inp.focus();
      return;
    }
    if (section < secs.length - 1) {
      section++;
      renderQuiz();
      root.scrollIntoView({ behavior: 'smooth', block: 'start' });
    } else {
      phase = 'results';
      renderResults();
    }
  });

  app.addEventListener('click', function (e) {
    var t = e.target;
    if (!t || !t.closest) return;
    if (t.closest('[data-back]')) {
      section = Math.max(0, section - 1);
      renderQuiz();
      root.scrollIntoView({ behavior: 'smooth', block: 'start' });
    } else if (t.closest('[data-restart]')) {
      A = {}; section = 0; phase = 'quiz';
      renderQuiz();
      root.scrollIntoView({ behavior: 'smooth', block: 'start' });
    } else if (t.closest('[data-print]')) {
      window.print();
    } else if (t.closest('[data-copy]')) {
      var txt = planText();
      var note = app.querySelector('[data-copied]');
      var ok = function () { if (note) { note.hidden = false; setTimeout(function () { note.hidden = true; }, 2000); } };
      if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(txt).then(ok, function () { window.prompt('Copy your plan:', txt); });
      } else {
        window.prompt('Copy your plan:', txt);
      }
    }
  });

  renderQuiz();
})();
