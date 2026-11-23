/* USMLE Wise Wiki: Step 3 readiness checker.
   Pure client-side. A short questionnaire becomes one of three bands (Looks ready
   to book / Close: fix these first / Not yet: build these first), the specific items
   that are not fully met, an ordered list of up to three next actions linked to our
   free guides, and at most ONE service suggestion chosen only from a gap the answers
   revealed.

   This is NOT a score predictor. It never outputs a predicted score, a percentage or
   a pass probability: there is no defensible public data for one. Every rule lives in
   the RULES object below and the decision is a pure function, evaluate(), so it can be
   read and tested without a browser.

   Answers live in memory for this page view. They are not stored, not sent, and not
   written to the address bar. */
(function () {
  'use strict';

  var G = '/wiki/';

  /* Links: published wiki guides only. */
  var LK = {
    step3: ['Step 3 guide', G + 'exams/step-3'],
    plan: ['Step 3 study plan', G + 'exams/step-3-study-schedule'],
    elig: ['USMLE eligibility for IMGs', G + 'exams/usmle-eligibility-for-imgs'],
    when: ['When to take each Step', G + 'exams/when-to-take-each-step'],
    step2: ['Step 2 CK guide', G + 'exams/step-2-ck'],
    cert: ['Certification validity and expiry', G + 'ecfmg/certification-validity-and-expiry'],
    banks: ['Question banks compared', G + 'exams/question-banks-compared'],
    long: ['How long to study', G + 'exams/how-long-to-study'],
    nbme: ['NBME self-assessments', G + 'exams/nbme-self-assessments'],
    sched: ['Scheduling with Prometric', G + 'exams/scheduling-with-prometric'],
    day: ['Exam day rules and checklist', G + 'exams/exam-day-rules-and-checklist'],
    attempts: ['Attempt limits and retakes', G + 'exams/usmle-attempt-limits-and-retakes'],
    anxiety: ['Exam anxiety and burnout', G + 'exams/exam-anxiety-and-burnout']
  };

  /* ------------------------------------------------------------------ */
  /* RULES: everything that decides the result.                          */
  /*                                                                     */
  /* Answer option = [value, label, level, 'stop'?]                      */
  /*   level 0 = not met, 1 = partly met, 2 = met                        */
  /*   'stop'  = this answer alone puts you in the Not yet band          */
  /* Item kind: gate (eligibility), core (preparation), support          */
  /*   (planning: logistics, date rule, wellbeing).                      */
  /* priority: higher comes first among items of the same level.         */
  /* ------------------------------------------------------------------ */
  var RULES = {
    levels: [['Not met', 'warn'], ['Partly met', 'mid'], ['Met', 'ok']],

    sections: [
      ['elig', 'Eligibility'],
      ['know', 'Knowledge and practice'],
      ['ccs', 'Case simulations (CCS)'],
      ['plan', 'Timing, logistics and wellbeing']
    ],

    /* Band decision, in this order:
       1. NOT YET   if any answer carries a 'stop' flag, or if at least
                    notYetCoreGaps eligibility or core items are not met.
       2. READY     if every eligibility and core item is met, no planning item is
                    not met, and at most readyMaxSupportPartial planning items are
                    only partly met.
       3. CLOSE     everything else. */
    thresholds: { notYetCoreGaps: 2, readyMaxSupportPartial: 2 },

    maxActions: 3,

    bands: {
      ready: {
        label: 'Looks ready to book', tone: 'ok',
        summary: 'Your answers show the evidence we look for: eligibility, steady question practice, independent assessments, case simulation practice, timing and a plan. That is a reasonable basis for booking, not a guarantee. Keep a date-change rule in case your next checkpoint disappoints.'
      },
      close: {
        label: 'Close: fix these first', tone: 'mid',
        summary: 'You have most of the pieces. The items below are the ones most likely to hold you back, so fix them before you book, or before you sit if you are already booked.'
      },
      not: {
        label: 'Not yet: build these first', tone: 'warn',
        summary: 'Several things that matter are not in place yet. Attempts are limited, so it is worth building them before you book. Start with the first item below.',
        gateSummary: 'At least one eligibility requirement is not met yet, so Step 3 cannot be booked until it is. Settle that first. The rest of your preparation can run alongside.'
      }
    },

    items: [
      /* ---------------- Eligibility ---------------- */
      {
        id: 'steps', section: 'elig', kind: 'gate', priority: 100, area: 'Step 1 and Step 2 CK',
        q: 'Have you passed both Step 1 and Step 2 CK?',
        help: 'Step 3 requires both. If you are still waiting for a result, answer "not yet" until you have it.',
        options: [
          ['yes', 'Yes, both are passed', 2],
          ['no', 'Not yet: at least one is still to be passed, or its result has not come back', 0, 'stop']
        ],
        stopWhy: 'Step 3 requires Step 1 and Step 2 CK to be passed first.',
        fix: {
          gap: {
            title: 'Pass Step 1 and Step 2 CK before you plan Step 3',
            why: 'Both are required to sit Step 3, so it cannot be booked until they are passed. Put your effort into the exam that is next in line.'
          },
          links: [LK.step3, LK.when, LK.step2]
        }
      },
      {
        id: 'cert', section: 'elig', kind: 'gate', priority: 98, area: 'ECFMG Certificate',
        q: 'Where do you stand with your ECFMG Certificate?',
        help: 'Non-US graduates need a valid, unexpired ECFMG Certificate to take Step 3. USMLE and ECFMG set the rules, so confirm yours in the current Bulletin. This tool is not an eligibility ruling.',
        options: [
          ['valid', 'I hold a valid certificate and I have checked that it has not expired', 2],
          ['na', 'Not applicable: I graduated from a US MD or DO school', 2],
          ['unsure', 'I am not sure my certificate status allows Step 3', 1],
          ['none', 'I do not have a valid certificate yet, or it has expired', 0, 'stop']
        ],
        stopWhy: 'Non-US graduates need a valid, unexpired ECFMG Certificate to take Step 3.',
        fix: {
          gap: {
            title: 'Sort out your ECFMG Certificate before you plan Step 3',
            why: 'Without a valid, unexpired certificate a non-US graduate cannot take Step 3, and no amount of study changes that.'
          },
          partial: {
            title: 'Confirm your ECFMG Certificate is valid for Step 3',
            why: 'A quick check now avoids finding a problem after months of study. Use the current Bulletin, and ask the organization that handles your registration if anything is unclear.'
          },
          links: [LK.elig, LK.cert]
        }
      },

      /* ---------------- Knowledge and practice ---------------- */
      {
        id: 'qbank', section: 'know', kind: 'core', priority: 80, area: 'Question practice',
        q: 'How far through your question practice are you?',
        help: 'Count your main question resource, done in timed, mixed blocks. A complete pass is our opinion of a sensible minimum before booking. It is not a USMLE rule.',
        options: [
          ['none', 'Not started, or only a few blocks so far', 0],
          ['partway', 'Partway through my main resource', 1],
          ['done', 'I have finished my main resource, or nearly all of it, in mixed blocks', 2]
        ],
        fix: {
          gap: {
            title: 'Start structured question practice',
            why: 'Step 3 is mostly multiple-choice across both days. Timed, mixed blocks on a plan are the base everything else sits on.'
          },
          partial: {
            title: 'Finish your first pass through your main question resource',
            why: 'Stopping halfway leaves whole areas untested. A complete pass shows where you are weak, and it is something you can check off.'
          },
          links: [LK.plan, LK.banks, LK.long]
        }
      },
      {
        id: 'review', section: 'know', kind: 'core', priority: 55, area: 'Error review',
        q: 'How do you review the questions you get wrong?',
        options: [
          ['skip', 'I mostly move on to the next block', 0],
          ['read', 'I read the explanations, but I do not track patterns', 1],
          ['log', 'I keep a log of errors by cause, and I act on it', 2]
        ],
        fix: {
          gap: {
            title: 'Start an error log',
            why: 'Most of the learning is in the review. Logging each error by cause (knowledge, misread, wrong next step, timing) shows you what to change.'
          },
          partial: {
            title: 'Turn your reviews into an error log',
            why: 'Reading explanations helps, but a log by cause shows the pattern you cannot see one question at a time.'
          },
          links: [LK.plan, LK.nbme]
        },
        service: ['coaching', 'Some students want an outside view of how they review. A mentor can go through your log with you.']
      },
      {
        id: 'assess', section: 'know', kind: 'core', priority: 90, area: 'Independent self-assessments',
        q: 'How have your recent full-length self-assessments gone?',
        help: 'A comprehensive self-assessment is a full-length independent practice exam for your Step, taken under timed conditions. Judge the result by what its own report shows. Not every report states a passing level: if yours does not, use its content-area breakdown and your trend. Do not use forum conversion tables, which are not official.',
        options: [
          ['none', 'I have not taken one yet', 0],
          ['below', 'My latest result reads as below passing, or clearly weak', 0, 'stop'],
          ['unclear', 'I took one, but I cannot tell how it compares with passing', 1],
          ['near', 'My latest result is near passing, or only just adequate', 1],
          ['above', 'One result reads as clearly above passing', 1],
          ['trend', 'Two or more results, taken weeks apart, read as clearly above passing, and the trend is steady or rising', 2]
        ],
        stopWhy: 'Your latest independent result reads as below passing, so the evidence for booking is not there yet.',
        fix: {
          byValue: {
            none: {
              title: 'Take a comprehensive self-assessment to get a baseline',
              why: 'Until you have one, readiness is a guess. Take one under timed conditions, then plan around what it shows.'
            },
            below: {
              title: 'Do not book yet: close the gap to passing first',
              why: 'Your latest result says the evidence is not there yet. Study from your error log, then retest weeks later on a form you have not seen. Attempts are limited, so it is worth waiting for evidence rather than testing and hoping.'
            },
            unclear: {
              title: 'Work out how to read your assessment report',
              why: 'A result you cannot compare with passing is hard to act on. Check what your report actually states, and rely on trends across several results rather than one result.'
            },
            near: {
              title: 'Move from near passing to a clear margin',
              why: 'Near is not enough margin to book on. Use your error log to target weak areas, then retake a different form after some weeks.'
            },
            above: {
              title: 'Confirm your good result with a second assessment',
              why: 'One good result can come from luck or familiarity. A second one, weeks later on a form you have not seen, shows whether it holds.'
            }
          },
          links: [LK.nbme, LK.long, LK.plan]
        }
      },
      {
        id: 'gaps', section: 'know', kind: 'core', priority: 60, area: 'Content gaps',
        q: 'What is the state of your content gaps?',
        help: 'Step 3 leans on areas that clinical work alone may not teach well, such as biostatistics, ethics, patient safety and prevention, plus managing patients over time.',
        options: [
          ['unmapped', 'I have not mapped my weak areas', 0],
          ['known', 'I know them, but I have not closed them', 1],
          ['closing', 'I know them, I have worked on them, and my recent results in those areas are improving', 2]
        ],
        fix: {
          gap: {
            title: 'Map your weak areas from real results',
            why: 'Use your assessment report and your error log to list weak areas by name. Then you can study them on purpose instead of rereading what you already know.'
          },
          partial: {
            title: 'Close the weak areas you already know about',
            why: 'Naming a gap is half the job. Schedule time for each one, then check it again with fresh questions.'
          },
          links: [LK.plan, LK.step3]
        },
        service: ['step-3-crash-course', 'A recorded course that covers Step 3 content can give gap-filling some structure.']
      },

      /* ---------------- Case simulations ---------------- */
      {
        id: 'ccsrun', section: 'ccs', kind: 'core', priority: 85, area: 'Official CCS practice cases',
        q: 'Have you run the official Step 3 practice case simulations (CCS)?',
        help: 'USMLE provides official practice cases with feedback, and says no practice cases are available at your test appointment. The Step 3 study plan explains how to use them.',
        options: [
          ['none', 'No, I have not tried them', 0],
          ['some', 'I ran some of them, or I did not read the feedback for each', 1],
          ['all', 'Yes, I ran all of them and read the feedback for each', 2]
        ],
        fix: {
          gap: {
            title: 'Run the official CCS practice cases',
            why: 'CCS is part of the Step 3 result, the software has its own interface and clock, and no practice cases are available at your appointment. Learn it beforehand.'
          },
          partial: {
            title: 'Finish the official CCS cases and read every feedback screen',
            why: 'The feedback is where you learn which actions help and which hurt. Skipping it wastes the cases.'
          },
          links: [LK.plan, LK.step3]
        },
        service: ['step-3-crash-course', 'It includes a full module on CCS, if you want guided practice.']
      },
      {
        id: 'ccsflow', section: 'ccs', kind: 'core', priority: 84, area: 'CCS routine',
        q: 'How reliable is your routine for a CCS case?',
        help: 'CCS is a different skill from multiple-choice. You manage one simulated patient at a time, and results appear only when you advance the clock.',
        options: [
          ['none', 'I do not have one: I order things as I think of them', 0],
          ['forming', 'I have a rough structure, but it is not automatic yet', 1],
          ['steady', 'I use the same structure every time, finish inside the real-time limit and log my CCS mistakes', 2]
        ],
        fix: {
          gap: {
            title: 'Build a repeatable routine for each CCS case',
            why: 'A fixed order keeps you safe and on time: stabilize if needed, focused history and exam, key orders, advance the clock on purpose, reassess, then disposition and follow-up. The routine is our opinion. Learn how the software handles orders and time.'
          },
          partial: {
            title: 'Make your CCS routine automatic',
            why: 'Practice under the real time limits and log each CCS mistake by type. Change one habit at a time.'
          },
          links: [LK.plan, LK.step3]
        },
        service: ['step-3-crash-course', 'It includes a full module on CCS, if you want guided practice.']
      },

      /* ---------------- Timing, logistics and wellbeing ---------------- */
      {
        id: 'stamina', section: 'plan', kind: 'core', priority: 70, area: 'Timing and stamina',
        q: 'Have you practiced under real exam timing?',
        help: 'Step 3 is a two-day exam, and Day 2 is the longer one. Stamina is its own skill.',
        options: [
          ['none', 'My practice is untimed, or in short sessions', 0],
          ['blocks', 'I do timed blocks, but I have not rehearsed a full exam day', 1],
          ['mock', 'I have rehearsed a full exam day under real timing, and I know how I will rest between the two days', 2]
        ],
        fix: {
          gap: {
            title: 'Practice under timed conditions',
            why: 'Knowing the material is not enough if you run out of time or energy. Move to timed, mixed blocks now.'
          },
          partial: {
            title: 'Rehearse a full exam day',
            why: 'A mock day with the real block timing and break pattern shows what happens to your focus in the later hours. Do one for each of the two days if you can.'
          },
          links: [LK.plan, LK.long, LK.day]
        }
      },
      {
        id: 'logistics', section: 'plan', kind: 'support', priority: 50, area: 'Test logistics',
        q: 'How sorted are your test logistics: eligibility window, scheduling permit and test-center seats?',
        help: 'Step 3 is given only in the US and its territories, on two test days. If you are outside the US, travel is part of the plan.',
        options: [
          ['none', 'I have not looked into them', 0],
          ['some', 'Partly: I know some of it', 1],
          ['sorted', 'Sorted: I know my eligibility window, how booking works and what I would do if I had to reschedule', 2]
        ],
        fix: {
          gap: {
            title: 'Learn how scheduling and your eligibility window work',
            why: 'Seats are first-come, first-served and you cannot test without a scheduling permit. Learn the steps before you pick a date.'
          },
          partial: {
            title: 'Close the gaps in your booking plan',
            why: 'Check each remaining piece against the current Bulletin and Prometric before you commit money or arrange travel.'
          },
          links: [LK.sched, LK.elig]
        }
      },
      {
        id: 'daterule', section: 'plan', kind: 'support', priority: 45, area: 'Date-change rule',
        q: 'Do you have a rule for when you would move your test date?',
        options: [
          ['none', 'No, I will decide closer to the date', 0],
          ['vague', 'A rough idea in my head', 1],
          ['written', 'Yes, written down: my checkpoints, and the result that would make me move the date', 2]
        ],
        fix: {
          gap: {
            title: 'Write your date-change rule before you book',
            why: 'A rule made in advance protects you from booking after one good day, or sitting after a bad one. Attempts are limited.'
          },
          partial: {
            title: 'Write your date-change rule down',
            why: 'A rule in your head bends under pressure. Put the checkpoints and the trigger in writing.'
          },
          links: [LK.long, LK.attempts, LK.sched]
        }
      },
      {
        id: 'wellbeing', section: 'plan', kind: 'support', priority: 40, area: 'Wellbeing',
        q: 'How are you doing with sleep, workload and stress?',
        help: 'This is a planning question, not a health assessment.',
        options: [
          ['low', 'I am exhausted, anxious or burned out most days', 0],
          ['strained', 'Strained, but coping', 1],
          ['steady', 'Steady enough: I sleep, I take breaks and I have support', 2]
        ],
        fix: {
          gap: {
            title: 'Look after yourself before you add exam pressure',
            why: 'Exhaustion makes studying less effective, and a two-day exam is demanding. If this is more than exam stress, talk to someone you trust or a health professional.'
          },
          partial: {
            title: 'Protect your sleep and breaks',
            why: 'Strain you can cope with now can grow as the exam gets closer. Plan rest, and know whom you would call if it got worse.'
          },
          links: [LK.anxiety]
        }
      }
    ],

    /* Shown when the band is Ready and fewer than three items are unmet. An action is
       skipped if an unmet item for the same area is already listed. */
    readyActions: [
      {
        id: 'ready-logistics', area: 'logistics',
        title: 'Confirm your booking logistics',
        why: 'Check your eligibility window, your scheduling permit and test-center availability for both days against the current rules before you commit money or travel.',
        links: [LK.sched, LK.elig]
      },
      {
        id: 'ready-rule', area: 'daterule',
        title: 'Keep your date-change rule and one last checkpoint',
        why: 'Your evidence looks good today. A final checkpoint before the date, and a rule for what you would do if it dropped, keeps it that way.',
        links: [LK.long, LK.nbme]
      },
      {
        id: 'ready-days', area: 'stamina',
        title: 'Plan the two days, including rest',
        why: 'Read the exam-day rules, plan your sleep, food and journey to the test center, and keep the time between the two days free for rest.',
        links: [LK.day, LK.anxiety]
      }
    ]
  };

  /* ------------------------------------------------------------------ */
  /* The decision: a pure function. No DOM, no storage, no network.      */
  /*                                                                     */
  /* evaluate(answers, services)                                         */
  /*   answers  { itemId: optionValue }                                  */
  /*   services optional { key: [label, url, line] }. When given, a      */
  /*            service is suggested only if its key is in the map.      */
  /* Returns { complete: false, band: null, missing: [ids] } when any    */
  /* answer is absent or not one of the item's options; otherwise the    */
  /* full result. It never returns a score or a probability.             */
  /* ------------------------------------------------------------------ */
  function has(o, k) { return Object.prototype.hasOwnProperty.call(o, k); }

  function optionOf(item, value) {
    for (var i = 0; i < item.options.length; i++) {
      if (item.options[i][0] === value) return item.options[i];
    }
    return null;
  }

  function fixFor(row) {
    var f = row.item.fix;
    if (f.byValue && f.byValue[row.value]) return f.byValue[row.value];
    return row.level === 0 ? f.gap : (f.partial || f.gap);
  }

  function evaluate(answers, services) {
    answers = answers || {};
    var T = RULES.thresholds;
    var rows = [];
    var missing = [];

    RULES.items.forEach(function (item, idx) {
      var v = has(answers, item.id) ? answers[item.id] : undefined;
      var o = typeof v === 'string' ? optionOf(item, v) : null;
      if (!o) { missing.push(item.id); return; }
      rows.push({ item: item, idx: idx, value: o[0], answerLabel: o[1], level: o[2], stop: o[3] === 'stop' });
    });
    if (missing.length) return { complete: false, band: null, missing: missing };

    function isCore(r) { return r.item.kind !== 'support'; }
    var stops = rows.filter(function (r) { return r.stop; });
    var coreGaps = rows.filter(function (r) { return isCore(r) && r.level === 0; });
    var anyGap = rows.some(function (r) { return r.level === 0; });
    var corePartial = rows.some(function (r) { return isCore(r) && r.level === 1; });
    var supportPartial = rows.filter(function (r) { return !isCore(r) && r.level === 1; }).length;
    var gateOpen = rows.some(function (r) { return r.item.kind === 'gate' && r.level < 2; });

    var band, rule, reasons = [];
    if (stops.length) {
      band = 'not'; rule = 'stop';
      reasons = stops.map(function (r) { return r.item.stopWhy; });
    } else if (coreGaps.length >= T.notYetCoreGaps) {
      band = 'not'; rule = 'coreGaps';
      reasons = ['These core areas are not met yet: ' + coreGaps.map(function (r) { return r.item.area; }).join(', ') + '.'];
    } else if (!anyGap && !corePartial && supportPartial <= T.readyMaxSupportPartial) {
      band = 'ready'; rule = 'allMet';
      reasons = ['Every eligibility and preparation item is met, and your planning items are in place or nearly there.'];
    } else {
      band = 'close'; rule = 'someUnmet';
      reasons = ['Nothing blocks you outright, but some items are not fully met. They are listed below, most important first.'];
    }

    /* Order of the unmet items: a blocking answer first, then eligibility, then
       not met before partly met, then the item's own priority, then list order. */
    var unmet = rows.filter(function (r) { return r.level < 2; }).sort(function (x, y) {
      return (x.stop ? 0 : 1) - (y.stop ? 0 : 1) ||
        (x.item.kind === 'gate' ? 0 : 1) - (y.item.kind === 'gate' ? 0 : 1) ||
        x.level - y.level ||
        y.item.priority - x.item.priority ||
        x.idx - y.idx;
    });

    var all = unmet.map(function (r) {
      var f = fixFor(r);
      return {
        id: r.item.id, area: r.item.area, level: r.level, stop: r.stop, kind: r.item.kind,
        title: f.title, why: f.why, links: r.item.fix.links, answerLabel: r.answerLabel
      };
    });

    var actions = all.slice(0, RULES.maxActions);
    var later = all.slice(RULES.maxActions);

    if (band === 'ready') {
      var covered = {};
      all.forEach(function (a) { covered[a.id] = true; });
      RULES.readyActions.forEach(function (ra) {
        if (actions.length >= RULES.maxActions || covered[ra.area]) return;
        actions.push({ id: ra.id, area: null, level: null, stop: false, kind: 'ready', title: ra.title, why: ra.why, links: ra.links, answerLabel: '' });
      });
    }

    /* At most one service, only from an item that is in the action list, only for an
       answered gap, never while eligibility is open, and never in the Ready band. */
    var service = null;
    if (band !== 'ready' && !gateOpen) {
      for (var i = 0; i < actions.length && !service; i++) {
        var item = null;
        for (var j = 0; j < RULES.items.length; j++) { if (RULES.items[j].id === actions[i].id) item = RULES.items[j]; }
        if (item && item.service && (!services || has(services, item.service[0]))) {
          service = { key: item.service[0], because: actions[i].title, why: item.service[1], answerLabel: actions[i].answerLabel, itemId: item.id };
        }
      }
    }

    var serviceNote = null;
    if (!service && band !== 'ready' && gateOpen) {
      serviceNote = 'Nothing is suggested while an eligibility item is open. Settle that first.';
    }

    var summary = RULES.bands[band].summary;
    if (stops.some(function (r) { return r.item.kind === 'gate'; })) summary = RULES.bands.not.gateSummary;

    return {
      complete: true,
      band: band,
      label: RULES.bands[band].label,
      tone: RULES.bands[band].tone,
      summary: summary,
      rule: rule,
      reasons: reasons,
      areas: rows.map(function (r) { return { id: r.item.id, area: r.item.area, level: r.level }; }),
      strengths: rows.filter(function (r) { return r.level === 2; }).map(function (r) { return r.item.area; }),
      unmet: all,
      actions: actions,
      later: later,
      service: service,
      serviceNote: serviceNote
    };
  }

  /* Plain-text copy of a result, for the clipboard. `services` is the same map given
     to evaluate(); `origin` is optional and only used to print an absolute link. */
  function planText(res, services, origin) {
    var t = 'Step 3 readiness check (a readiness check, not a score or pass prediction)\n\n';
    t += 'Result: ' + res.label + '\n' + res.summary + '\n';
    if (res.unmet.length) {
      t += '\nNot fully met\n';
      res.unmet.forEach(function (u) { t += '- ' + u.area + ' (' + RULES.levels[u.level][0] + '): ' + u.answerLabel + '\n'; });
    }
    t += '\nDo these next\n';
    res.actions.forEach(function (a, i) { t += (i + 1) + '. ' + a.title + '\n   ' + a.why + '\n'; });
    if (res.later.length) {
      t += '\nAlso keep in mind\n';
      res.later.forEach(function (a) { t += '- ' + a.title + '\n'; });
    }
    var svc = res.service && services && services[res.service.key];
    if (svc) t += '\nA service that came up (USMLE Wise sells it; you can do every step above for free)\n- ' + svc[0] + (origin ? ': ' + origin + svc[1] : '') + '\n';
    return t;
  }

  /* Export for tests (Node). The browser has no `module`. */
  if (typeof module === 'object' && module && module.exports) {
    module.exports = { RULES: RULES, evaluate: evaluate, planText: planText };
  }
  if (typeof document === 'undefined') return;

  /* ------------------------------------------------------------------ */
  /* Interface                                                           */
  /* ------------------------------------------------------------------ */
  var root = document.querySelector('[data-wk-tool="step-3-readiness"]');
  if (!root) return;
  var app = root.querySelector('[data-s3r-app]');
  if (!app) return;

  var SERVICES = {};
  try { SERVICES = JSON.parse(root.getAttribute('data-services') || '{}'); } catch (e) { SERVICES = {}; }

  var A = {};        // answers, in memory only
  var section = 0;

  function esc(s) {
    return String(s).replace(/[&<>"']/g, function (c) {
      return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c];
    });
  }
  function qsOf(secId) { return RULES.items.filter(function (it) { return it.section === secId; }); }

  function renderQuiz() {
    var secs = RULES.sections;
    var sec = secs[section];
    var qs = qsOf(sec[0]);
    var pct = Math.round(((section + 1) / (secs.length + 1)) * 100);
    var last = section === secs.length - 1;

    var h = '<div class="wk-eval__head"><p class="wk-eval__step" tabindex="-1" data-focus>Part ' + (section + 1) + ' of ' + secs.length + ': ' + esc(sec[1]) + '</p>' +
      '<div class="wk-eval__bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="' + pct + '" aria-label="Progress"><span style="width:' + pct + '%"></span></div></div>';
    h += '<form class="wk-eval__form" novalidate>';
    qs.forEach(function (q) {
      h += '<fieldset class="wk-q" data-q="' + q.id + '"><legend>' + esc(q.q) + '</legend>';
      if (q.help) h += '<p class="wk-q__help">' + esc(q.help) + '</p>';
      h += '<div class="wk-q__opts">';
      q.options.forEach(function (o) {
        var id = 'wk-s3r-' + q.id + '-' + o[0];
        h += '<label class="wk-opt" for="' + id + '"><input type="radio" id="' + id + '" name="' + q.id + '" value="' + o[0] + '"' + (A[q.id] === o[0] ? ' checked' : '') + '><span>' + esc(o[1]) + '</span></label>';
      });
      h += '</div><p class="wk-q__err" hidden>Please choose an answer to continue.</p></fieldset>';
    });
    h += '<div class="wk-eval__nav">' +
      (section > 0 ? '<button type="button" class="btn btn--outline" data-back>Back</button>' : '<span></span>') +
      '<button type="submit" class="btn btn--primary">' + (last ? 'See my result' : 'Next') + '</button></div></form>';
    app.innerHTML = h;
  }

  function stepHtml(a, big) {
    var links = (a.links || []).map(function (l) { return '<a href="' + esc(l[1]) + '">' + esc(l[0]) + '</a>'; }).join('');
    return '<li class="wk-step' + (big ? ' wk-step--top' : '') + '"><p class="wk-step__t">' + esc(a.title) + '</p>' +
      '<p class="wk-step__w">' + esc(a.why) + '</p><p class="wk-step__l">' + links + '</p></li>';
  }

  function serviceInfo(res) {
    if (!res.service) return null;
    var svc = SERVICES[res.service.key];
    return svc ? { label: svc[0], url: svc[1], line: svc[2] } : null;
  }

  function renderResults() {
    var res = evaluate(A, SERVICES);
    if (!res.complete) { section = 0; renderQuiz(); return; }
    var svc = serviceInfo(res);

    var h = '<div class="wk-res" tabindex="-1" data-res>';
    h += '<h3 class="wk-res__h">Your readiness result</h3>';

    h += '<div class="wk-s3r-band wk-s3r-band--' + res.tone + '" role="status">' +
      '<p class="wk-s3r-band__label">' + esc(res.label) + '</p>' +
      '<p class="wk-s3r-band__sum">' + esc(res.summary) + '</p>' +
      '<ul class="wk-s3r-band__why">' + res.reasons.map(function (r) { return '<li>' + esc(r) + '</li>'; }).join('') + '</ul>' +
      '<p class="wk-s3r-band__fine">A readiness check, not a score or pass prediction. It cannot tell you whether you will pass.</p></div>';

    h += '<div class="wk-res__snap">';
    res.areas.forEach(function (a) {
      h += '<div class="wk-chip wk-chip--' + RULES.levels[a.level][1] + '"><span class="wk-chip__name">' + esc(a.area) + '</span><span class="wk-chip__lv">' + RULES.levels[a.level][0] + '</span></div>';
    });
    h += '</div>';

    if (res.unmet.length) {
      h += '<h3 class="wk-res__h2">What is not fully met</h3><ul class="wk-s3r-un">';
      res.unmet.forEach(function (u) {
        h += '<li class="wk-s3r-un__item"><p class="wk-s3r-un__a">' + esc(u.area) +
          ' <span class="wk-tool__badge ' + (u.level === 0 ? 'wk-tool__badge--past' : 'wk-tool__badge--soon') + '">' + RULES.levels[u.level][0] + '</span></p>' +
          '<p class="wk-s3r-un__s">You said: ' + esc(u.answerLabel) + '</p></li>';
      });
      h += '</ul>';
    } else {
      h += '<p class="wk-res__good"><strong>Nothing is unmet.</strong> Every item you answered is in place.</p>';
    }

    h += '<h3 class="wk-res__h2">' + (res.band === 'ready' ? 'Before you book' : 'Do these next') + '</h3>';
    h += '<ol class="wk-res__top">';
    res.actions.forEach(function (a) { h += stepHtml(a, true); });
    h += '</ol>';

    if (res.later.length) {
      h += '<details class="wk-res__more"><summary>Also keep in mind</summary><ol class="wk-res__rest">';
      res.later.forEach(function (a) { h += stepHtml(a, false); });
      h += '</ol></details>';
    }

    h += '<div class="wk-res__help"><h3 class="wk-res__h2">If you want help</h3>';
    h += '<p class="wk-res__disc">USMLE Wise sells the service below. Every step above is free to do on your own. A suggestion appears only when one of your answers shows a related gap, and never for eligibility or logistics. It is not a claim that you need it.</p>';
    if (svc) {
      h += '<ul class="wk-svc"><li class="wk-svc__item"><div><p class="wk-svc__name">' + esc(svc.label) + '</p><p class="wk-svc__line">' + esc(svc.line) + '</p>' +
        '<p class="wk-svc__why"><strong>Why it came up:</strong> you said "' + esc(res.service.answerLabel) + '". ' + esc(res.service.why) + '</p></div>' +
        '<a class="btn btn--outline" href="' + esc(svc.url) + '">See details</a></li></ul>';
    } else {
      h += '<p>' + esc(res.serviceNote || 'Nothing in your answers points to a service you would need.') + ' You can do all of the above with the free guides.</p>';
    }
    h += '</div>';

    h += '<div class="wk-tool__actions"><button type="button" class="btn btn--outline" data-copy>Copy my result as text</button>' +
      '<button type="button" class="btn btn--outline" data-print>Print</button>' +
      '<button type="button" class="btn btn--outline" data-edit>Change my answers</button>' +
      '<button type="button" class="btn btn--outline" data-restart>Start over</button>' +
      '<span class="wk-tool__copied" data-copied hidden>Copied</span></div>';
    h += '</div>';
    app.innerHTML = h;
    var el = app.querySelector('[data-res]');
    if (el) {
      el.focus();
      if (el.scrollIntoView) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  }

  function showQuiz(scroll) {
    renderQuiz();
    var f = app.querySelector('[data-focus]');
    if (f) f.focus({ preventScroll: true });
    if (scroll && root.scrollIntoView) root.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }

  app.addEventListener('change', function (e) {
    var t = e.target;
    if (!t || t.type !== 'radio') return;
    A[t.name] = t.value;
    var fs = t.closest('fieldset');
    if (fs) {
      var er = fs.querySelector('.wk-q__err');
      if (er) er.hidden = true;
      fs.classList.remove('is-invalid');
    }
  });

  app.addEventListener('submit', function (e) {
    e.preventDefault();
    var sec = RULES.sections[section];
    var firstBad = null;
    qsOf(sec[0]).forEach(function (q) {
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
    if (section < RULES.sections.length - 1) {
      section++;
      showQuiz(true);
    } else {
      renderResults();
    }
  });

  app.addEventListener('click', function (e) {
    var t = e.target;
    if (!t || !t.closest) return;
    if (t.closest('[data-back]')) {
      section = Math.max(0, section - 1);
      showQuiz(true);
    } else if (t.closest('[data-restart]')) {
      A = {}; section = 0;
      showQuiz(true);
    } else if (t.closest('[data-edit]')) {
      section = RULES.sections.length - 1;
      showQuiz(true);
    } else if (t.closest('[data-print]')) {
      window.print();
    } else if (t.closest('[data-copy]')) {
      var res = evaluate(A, SERVICES);
      if (!res.complete) return;
      var txt = planText(res, SERVICES, window.location.origin) +
        '\nGenerated at ' + window.location.origin + window.location.pathname + '\n';
      var note = app.querySelector('[data-copied]');
      var ok = function () { if (note) { note.hidden = false; setTimeout(function () { note.hidden = true; }, 2000); } };
      if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(txt).then(ok, function () { window.prompt('Copy your result:', txt); });
      } else {
        window.prompt('Copy your result:', txt);
      }
    }
  });

  renderQuiz();
})();
