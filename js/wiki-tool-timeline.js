/* USMLE Wise Wiki: application timeline planner.
   Pure client-side. Reads the form, works backward from the residency start,
   and renders a dated checklist. State is mirrored into the URL query string so
   a plan can be shared or bookmarked. No data leaves the browser. */
(function () {
  'use strict';

  var root = document.querySelector('[data-wk-tool="timeline"]');
  if (!root) return;

  var form = root.querySelector('form');
  var out = root.querySelector('[data-out]');
  var actions = root.querySelector('[data-actions]');
  var startSel = root.querySelector('[data-start]');
  var prefField = root.querySelector('[data-pref-field]');
  var MONTHS = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
  var DAY = 86400000;

  function d(y, m, day) { return new Date(y, m, day || 1); }
  function addMonths(date, n) { return new Date(date.getFullYear(), date.getMonth() + n, date.getDate()); }
  function fmt(date) { return MONTHS[date.getMonth()] + ' ' + date.getFullYear(); }
  function esc(s) {
    return String(s).replace(/[&<>"']/g, function (c) {
      return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c];
    });
  }

  /* ---- Start-year options: July of each of the next five years ---- */
  var thisYear = new Date().getFullYear();
  for (var y = thisYear + 1; y <= thisYear + 5; y++) {
    var o = document.createElement('option');
    o.value = String(y);
    o.textContent = 'July ' + y;
    startSel.appendChild(o);
  }

  /* ---- Checklist definition ----
     c = { season: application-season year (start - 1), start: residency start year }
     `assumed` marks planning buffers that are our own judgment, not an official rule. */
  var PHASES = [
    ['foundation', 'Foundations'],
    ['exams', 'Exams'],
    ['experience', 'Experience and letters'],
    ['application', 'The application'],
    ['season', 'Interviews and the Match'],
    ['after', 'After the Match']
  ];

  function submit(c) { return d(c.season, 8, 1); }           // early September of the season year (typical)

  var ITEMS = [
    {
      id: 'eligibility', phase: 'foundation', critical: true, assumed: true,
      title: 'Check that your school and graduation year are eligible',
      when: function (c) { return addMonths(submit(c), -9); },
      show: function (s) { return s.ecfmg === 'none'; },
      why: 'An ineligible school or year cannot be fixed with exam scores, so check this before anything else. Leave several months before you apply.',
      links: [['World Directory and eligibility', '/wiki/ecfmg/world-directory-and-school-eligibility'], ['Accreditation requirement', '/wiki/ecfmg/accreditation-requirement']]
    },
    {
      id: 'epic', phase: 'foundation', critical: true, assumed: true,
      title: 'Open your ECFMG account and start credential verification',
      when: function (c) { return addMonths(submit(c), -9); },
      show: function (s) { return s.ecfmg === 'none'; },
      why: 'Verification involves your medical school and is often the slowest step in certification.',
      links: [['MyIntealth account', '/wiki/ecfmg/myintealth-account'], ['EPIC verification', '/wiki/ecfmg/epic-credential-verification'], ['Certification timeline', '/wiki/ecfmg/ecfmg-certification-timeline']]
    },
    {
      id: 'step1', phase: 'exams', critical: true, assumed: true,
      title: 'Pass Step 1',
      when: function (c) { return addMonths(submit(c), -9); },
      show: function (s) { return s.step1 === 'none'; },
      why: 'Step 1 is pass/fail. Leave room for a retake: every attempt is visible to programs and counts toward the attempt limit.',
      links: [['Step 1 guide', '/wiki/exams/step-1'], ['Eligibility for IMGs', '/wiki/exams/usmle-eligibility-for-imgs'], ['Attempt limits', '/wiki/exams/usmle-attempt-limits-and-retakes']]
    },
    {
      id: 'step2', phase: 'exams', critical: true, assumed: true,
      title: 'Take Step 2 CK',
      when: function (c) { return d(c.season, 5, 1); },
      show: function (s) { return s.step2 === 'none'; },
      why: 'Step 2 CK still reports a three-digit score that programs can see. Aim to have the result before programs begin reviewing applications.',
      links: [['Step 2 CK guide', '/wiki/exams/step-2-ck'], ['When to take each Step', '/wiki/exams/when-to-take-each-step'], ['What the score means', '/wiki/exams/step-2-ck-score-and-what-it-means']]
    },
    {
      id: 'step3', phase: 'exams', critical: false, assumed: true,
      title: 'Plan Step 3 if you want H-1B to stay open',
      when: function (c) { return d(c.season, 11, 1); },
      show: function (s) { return s.step3 === 'none' && s.visa === 'visa' && s.pref !== 'j1'; },
      why: 'In practice, resident H-1Bs generally require Step 3, and some programs want it passed before they file. If you will only use a J-1, Step 3 can usually wait.',
      links: [['Step 3 guide', '/wiki/exams/step-3'], ['Step 3 and H-1B timing', '/wiki/visas/step-3-and-h1b-timing'], ['H-1B for residents', '/wiki/visas/h1b-for-residents']]
    },
    {
      id: 'usce', phase: 'experience', critical: false, assumed: true,
      title: function (s) { return s.usce === 'none' ? 'Secure and complete US clinical experience' : 'Finish or add US clinical experience'; },
      when: function (c) { return d(c.season, 5, 1); },
      show: function (s) { return s.usce !== 'enough'; },
      why: 'Experience takes the longest to arrange, and it is how most IMGs earn US letters. Verify any placement carefully before paying.',
      links: [['USCE explained', '/wiki/clinical-experience/usce-explained'], ['How to get USCE', '/wiki/clinical-experience/how-to-get-usce'], ['Red flags and scams', '/wiki/clinical-experience/usce-red-flags-and-scams']]
    },
    {
      id: 'letters', phase: 'experience', critical: false, assumed: true,
      title: 'Line up your letters of recommendation',
      when: function (c) { return d(c.season, 5, 15); },
      show: function (s) { return s.letters !== 'ready'; },
      why: 'Writers need weeks, and they upload letters themselves. Ask early and give them what they need to be specific.',
      links: [['Letters of recommendation', '/wiki/application/letters-of-recommendation'], ['Turning USCE into a letter', '/wiki/clinical-experience/turning-usce-into-a-letter']]
    },
    {
      id: 'research', phase: 'experience', critical: false, assumed: true,
      title: 'Have any research ready to list (optional)',
      when: function (c) { return d(c.season, 7, 1); },
      show: function (s) { return s.research === 'none'; },
      why: 'Research helps most when it is real and you can describe your role. List work honestly, and never pay for authorship.',
      links: [['Why research matters', '/wiki/research/why-research-matters-for-imgs'], ['How programs view research', '/wiki/research/how-programs-view-research']]
    },
    {
      id: 'token', phase: 'application', critical: false, whenLabel: 'Late spring or early summer (typical)',
      title: 'Request your ERAS token and register in MyERAS',
      when: function (c) { return d(c.season, 5, 1); },
      show: function () { return true; },
      why: 'IMGs cannot register in MyERAS without a token from ECFMG. Check ECFMG for when requests open.',
      links: [['ERAS token', '/wiki/ecfmg/eras-token'], ['MyERAS walkthrough', '/wiki/application/myeras-walkthrough']]
    },
    {
      id: 'statement', phase: 'application', critical: false, assumed: true,
      title: 'Draft your personal statement and experiences',
      when: function (c) { return d(c.season, 7, 1); },
      show: function () { return true; },
      why: 'Both take several drafts. Finish early enough for feedback.',
      links: [['Personal statement', '/wiki/application/personal-statement-guide'], ['Experiences section', '/wiki/application/eras-experiences-section']]
    },
    {
      id: 'list', phase: 'application', critical: false, assumed: true,
      title: 'Build your program list and decide how to use signals',
      when: function (c) { return d(c.season, 7, 15); },
      show: function () { return true; },
      why: 'Check each program\'s IMG, exam and visa requirements on its own website. Emergency Medicine and OB-GYN may use a different application service, so confirm yours.',
      links: [['Building a program list', '/wiki/application/building-a-program-list'], ['Program signaling', '/wiki/application/program-signaling-explained'], ['How many programs', '/wiki/application/how-many-programs-to-apply-to']]
    },
    {
      id: 'submit', phase: 'application', critical: true, whenLabel: 'Early autumn (typical)',
      title: 'Submit your ERAS application',
      when: function (c) { return submit(c); },
      show: function () { return true; },
      why: 'Programs review applications from a fixed release date. Being ready on day one matters, but a rushed application is worse than one a few days later.',
      links: [['ERAS timeline', '/wiki/application/eras-timeline'], ['MyERAS walkthrough', '/wiki/application/myeras-walkthrough']]
    },
    {
      id: 'interviews', phase: 'season', critical: false, whenLabel: 'Autumn into winter (typical)',
      title: 'Interview season',
      when: function (c) { return d(c.season, 9, 1); },
      show: function () { return true; },
      why: 'Invitations arrive over several weeks and slots fill quickly. Test your technology before the first interview.',
      links: [['Interview season overview', '/wiki/interviews-match/interview-season-overview'], ['Virtual interview setup', '/wiki/interviews-match/virtual-interview-setup'], ['Common questions', '/wiki/interviews-match/common-interview-questions']]
    },
    {
      id: 'rank', phase: 'season', critical: false, whenLabel: 'Winter (typical)',
      title: 'Build and certify your rank order list',
      when: function (c) { return d(c.start, 1, 1); },
      show: function () { return true; },
      why: 'Rank programs in your true order of preference, and only programs you would attend.',
      links: [['Rank order list strategy', '/wiki/interviews-match/rank-order-list-strategy'], ['How the algorithm works', '/wiki/interviews-match/how-the-match-algorithm-works']]
    },
    {
      id: 'match', phase: 'season', critical: false, whenLabel: 'March (typical)',
      title: 'Match Week and Match Day',
      when: function (c) { return d(c.start, 2, 1); },
      show: function () { return true; },
      why: 'If you do not match, SOAP begins the same week. Have your documents and a plan ready before the week starts.',
      links: [['Match Week timeline', '/wiki/interviews-match/match-week-timeline'], ['SOAP explained', '/wiki/interviews-match/soap-explained'], ['If you do not match', '/wiki/interviews-match/if-you-do-not-match']]
    },
    {
      id: 'visa', phase: 'after', critical: false, whenLabel: 'Right after the Match',
      title: 'Start your visa process',
      when: function (c) { return d(c.start, 2, 20); },
      show: function (s) { return s.visa === 'visa'; },
      why: 'Visa steps have long lead times and fast-moving rules. Ask the program what it sponsors and when it files.',
      links: function (s) {
        var l = [['Visa timeline after the Match', '/wiki/visas/visa-timeline-after-the-match']];
        if (s.pref !== 'h1b') l.push(['J-1 process', '/wiki/visas/j1-visa-process']);
        if (s.pref !== 'j1') l.push(['H-1B for residents', '/wiki/visas/h1b-for-residents']);
        l.push(['Delays and backup plans', '/wiki/visas/visa-delays-and-backup-plans']);
        return l;
      }
    },
    {
      id: 'start', phase: 'after', critical: false, whenLabel: 'Late June or July (typical)',
      title: 'Residency starts',
      when: function (c) { return d(c.start, 6, 1); },
      show: function () { return true; },
      why: 'Plan your move, housing and first paycheck gap early.',
      links: [['Arrival checklist', '/wiki/life-in-us/arrival-checklist'], ['Housing', '/wiki/life-in-us/housing-for-residents']]
    }
  ];

  /* ---- State <-> form <-> URL ---- */
  var KEYS = ['start', 'ecfmg', 'step1', 'step2', 'step3', 'visa', 'pref', 'usce', 'letters', 'research'];

  function readForm() {
    var s = {};
    KEYS.forEach(function (k) { s[k] = form.elements[k].value; });
    return s;
  }

  function applyParams() {
    var q = new URLSearchParams(window.location.search);
    KEYS.forEach(function (k) {
      var v = q.get(k);
      if (v === null) return;
      var el = form.elements[k];
      for (var i = 0; i < el.options.length; i++) {
        if (el.options[i].value === v) { el.value = v; break; }
      }
    });
    return KEYS.some(function (k) { return q.get(k) !== null; });
  }

  function writeUrl(s) {
    var q = new URLSearchParams();
    KEYS.forEach(function (k) { q.set(k, s[k]); });
    try { history.replaceState(null, '', window.location.pathname + '?' + q.toString()); } catch (e) { /* ignore */ }
  }

  function statusOf(due, now) {
    var diff = due.getTime() - now.getTime();
    if (diff < 0) return ['past', 'Date has passed'];
    if (diff < 90 * DAY) return ['soon', 'Coming up'];
    return ['later', 'Later'];
  }

  function render(first) {
    var s = readForm();
    prefField.hidden = s.visa !== 'visa';
    var start = parseInt(s.start, 10);
    var c = { season: start - 1, start: start };
    var now = new Date();

    var shown = ITEMS.filter(function (it) { return it.show(s); });
    var done = ITEMS.length - shown.length;
    var pastCritical = shown.filter(function (it) { return it.critical && it.when(c) < now; });
    var windowClosed = submit(c) < now;

    var html = '';
    if (windowClosed) {
      html += '<div class="wk-tool__alert wk-tool__alert--warn"><strong>Heads up:</strong> ERAS submission for a July ' + start +
        ' start is a September ' + c.season + ' event, and that has already passed. If you are not already in the process, ' +
        '<button type="button" class="wk-tool__link" data-next>try July ' + (start + 1) + '</button> instead.</div>';
    } else if (pastCritical.length) {
      html += '<div class="wk-tool__alert wk-tool__alert--warn"><strong>Heads up:</strong> ' + pastCritical.length +
        ' critical step' + (pastCritical.length > 1 ? 's are' : ' is') + ' already past its planning date for a July ' + start +
        ' start. A later cycle is often more realistic. <button type="button" class="wk-tool__link" data-next>Try July ' + (start + 1) + '</button>.</div>';
    } else {
      html += '<div class="wk-tool__alert wk-tool__alert--ok">No critical step is past its planning date for a July ' + start + ' start. Dates marked "Later" still need a plan.</div>';
    }

    PHASES.forEach(function (ph) {
      var rows = shown.filter(function (it) { return it.phase === ph[0]; })
        .map(function (it) { return { it: it, due: it.when(c) }; })
        .sort(function (a, b) { return a.due - b.due; });
      if (!rows.length) return;
      html += '<h3 class="wk-tool__phase">' + esc(ph[1]) + '</h3><ol class="wk-tool__list">';
      rows.forEach(function (r) {
        var it = r.it;
        var st = statusOf(r.due, now);
        var title = typeof it.title === 'function' ? it.title(s) : it.title;
        var links = typeof it.links === 'function' ? it.links(s) : it.links;
        html += '<li class="wk-tool__item wk-tool__item--' + st[0] + (it.critical ? ' is-critical' : '') + '">' +
          '<div class="wk-tool__when"><strong>' + esc(it.whenLabel ? it.whenLabel : fmt(r.due)) + '</strong>' +
          (it.whenLabel ? '<span>' + esc(fmt(r.due)) + '</span>' : '') + '</div>' +
          '<div class="wk-tool__body"><p class="wk-tool__title">' + esc(title) +
          '<span class="wk-tool__badge wk-tool__badge--' + st[0] + '">' + esc(st[1]) + '</span>' +
          (it.assumed ? '<span class="wk-tool__badge wk-tool__badge--assumed" title="A planning buffer chosen by USMLE Wise, not an official rule">Planning buffer</span>' : '') +
          '</p><p class="wk-tool__why">' + esc(it.why) + '</p><p class="wk-tool__links">' +
          links.map(function (l) { return '<a href="' + esc(l[1]) + '">' + esc(l[0]) + '</a>'; }).join('') +
          '</p></div></li>';
      });
      html += '</ol>';
    });

    if (done) {
      html += '<p class="wk-tool__done">' + done + ' step' + (done > 1 ? 's' : '') + ' left out because your answers say they are done or not needed.</p>';
    }

    out.innerHTML = html;
    actions.hidden = false;
    if (!first) writeUrl(s);
  }

  /* ---- Events ---- */
  form.addEventListener('change', function () { render(false); });
  form.addEventListener('submit', function (e) { e.preventDefault(); });

  out.addEventListener('click', function (e) {
    var t = e.target;
    if (t && t.hasAttribute && t.hasAttribute('data-next')) {
      var next = String(parseInt(form.elements.start.value, 10) + 1);
      var opt = Array.prototype.filter.call(startSel.options, function (o) { return o.value === next; });
      if (opt.length) { startSel.value = next; render(false); }
    }
  });

  var copyBtn = root.querySelector('[data-copy]');
  var copied = root.querySelector('[data-copied]');
  copyBtn.addEventListener('click', function () {
    writeUrl(readForm());
    var url = window.location.href;
    var done = function () { copied.hidden = false; setTimeout(function () { copied.hidden = true; }, 2000); };
    if (navigator.clipboard && navigator.clipboard.writeText) {
      navigator.clipboard.writeText(url).then(done, function () { window.prompt('Copy this link:', url); });
    } else {
      window.prompt('Copy this link:', url);
    }
  });
  root.querySelector('[data-print]').addEventListener('click', function () { window.print(); });

  /* Default to the next July that is still ahead of the current season, then render. */
  var pre = applyParams();
  if (!pre) {
    var now = new Date();
    var defaultStart = now.getMonth() >= 8 ? now.getFullYear() + 2 : now.getFullYear() + 1;
    var have = Array.prototype.some.call(startSel.options, function (o) { return o.value === String(defaultStart); });
    startSel.value = have ? String(defaultStart) : startSel.options[0].value;
  }
  render(true);
})();
