/* ============================================================
   USMLE Wise: cookie consent.

   Loaded synchronously from partials/head.php, before any tracker.
   Analytics (Google Analytics, js/uw-track.js) and advertising (Meta
   Pixels) are controlled here. Nothing else on the site depends on this
   file, and if it fails to load nothing tracks.

   MODE (see OPT_IN below): the site currently runs OPT-OUT. No popup is
   shown and tracking is on by default; the footer "Cookie settings" link
   still lets a visitor turn it off. Set OPT_IN = true to go back to the
   opt-in banner (nothing tracks until the visitor accepts).

   API (window.uwConsent):
     onGrant(category, fn)  run fn once the category is allowed; runs right
                            away for a returning visitor who already allowed
                            it. Categories: "analytics", "advertising".
     onRevoke(category, fn) run fn when the visitor turns a category off while
                            its trackers are running, just before the page
                            reloads without them (use it to tell a tracker to
                            stop sending anything more).
     has(category)          true if the category is currently allowed.
     open()                 show the banner with the settings panel open.
     status()               { analytics: bool, advertising: bool } or null
                            while the visitor has not chosen yet.

   The choice is kept in one first-party cookie, uw_consent, for 180 days.
   Bump VERSION to ask every visitor again (for example after a new
   tracker is added).
   ============================================================ */
(function () {
  'use strict';
  if (window.uwConsent) return;

  var COOKIE = 'uw_consent';
  var VERSION = 1;
  var MAX_AGE_DAYS = 180;
  var CATEGORIES = ['analytics', 'advertising'];

  /* false: no popup, tracking on by default, visitors can opt out from the
     footer. true: show the banner and track only after the visitor accepts. */
  var OPT_IN = false;

  /* What each category leaves behind in the browser, so it can be removed
     when the visitor says no (including leftovers from visits made before
     this banner existed). */
  var CLEANUP = {
    analytics: {
      cookies: [/^_ga$/, /^_ga_/, /^_gid$/, /^_gat/],
      local: ['uw_vid'],
      session: ['uw_sid', 'uw_utm']
    },
    advertising: {
      cookies: [/^_fbp$/, /^_fbc$/],
      local: [],
      session: []
    }
  };

  /* ---------------------------------------------------------- storage */
  function readCookie(name) {
    try {
      var parts = document.cookie ? document.cookie.split('; ') : [];
      for (var i = 0; i < parts.length; i++) {
        var eq = parts[i].indexOf('=');
        if (eq > -1 && parts[i].slice(0, eq) === name) return parts[i].slice(eq + 1);
      }
    } catch (e) { /* cookies blocked */ }
    return '';
  }

  function parse(value) {
    var m = /^v(\d+)\.analytics=([01])\.advertising=([01])$/.exec(value || '');
    if (!m || parseInt(m[1], 10) !== VERSION) return null;
    return { analytics: m[2] === '1', advertising: m[3] === '1' };
  }

  function writeCookie(choice) {
    var value = 'v' + VERSION + '.analytics=' + (choice.analytics ? 1 : 0) +
                '.advertising=' + (choice.advertising ? 1 : 0);
    try {
      document.cookie = COOKIE + '=' + value + '; max-age=' + (MAX_AGE_DAYS * 86400) +
        '; path=/; SameSite=Lax' + (location.protocol === 'https:' ? '; Secure' : '');
    } catch (e) { /* cookies blocked: the banner will simply ask again */ }
  }

  function expireCookies(patterns) {
    var names = [];
    try {
      names = document.cookie ? document.cookie.split(';') : [];
    } catch (e) { return; }
    var host = location.hostname;
    var bits = host.split('.');
    var domains = [null, host];
    for (var i = 0; i < bits.length - 1; i++) domains.push('.' + bits.slice(i).join('.'));
    names.forEach(function (pair) {
      var name = pair.split('=')[0].replace(/^\s+/, '');
      var hit = patterns.some(function (p) { return p.test(name); });
      if (!hit) return;
      domains.forEach(function (d) {
        document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/' +
          (d ? '; domain=' + d : '');
      });
    });
  }

  function clearCategory(cat) {
    var c = CLEANUP[cat];
    expireCookies(c.cookies);
    try { c.local.forEach(function (k) { localStorage.removeItem(k); }); } catch (e) { /* storage blocked */ }
    try { c.session.forEach(function (k) { sessionStorage.removeItem(k); }); } catch (e) { /* storage blocked */ }
  }

  /* ------------------------------------------------------------ state */
  var state = parse(readCookie(COOKIE));      // null until the visitor chooses
  if (!state && !OPT_IN) state = { analytics: true, advertising: true };   // default on; nothing is stored until they choose
  var ran = { analytics: false, advertising: false };
  var waiting = { analytics: [], advertising: [] };
  var revokers = { analytics: [], advertising: [] };

  function allowed(cat) { return !!(state && state[cat]); }

  function runNow(cat, fn) {
    ran[cat] = true;
    try { fn(); } catch (e) { /* a tracker failing must never break the page */ }
  }

  function onGrant(cat, fn) {
    if (!waiting[cat] || typeof fn !== 'function') return;
    if (allowed(cat)) runNow(cat, fn);
    else waiting[cat].push(fn);
  }

  function onRevoke(cat, fn) {
    if (revokers[cat] && typeof fn === 'function') revokers[cat].push(fn);
  }

  function set(next) {
    var prev = state || { analytics: false, advertising: false };
    state = { analytics: !!next.analytics, advertising: !!next.advertising };
    writeCookie(state);

    var reload = false;
    CATEGORIES.forEach(function (cat) {
      if (state[cat]) {
        if (!prev[cat]) {
          var queue = waiting[cat];
          waiting[cat] = [];
          queue.forEach(function (fn) { runNow(cat, fn); });
        }
      } else {
        if (ran[cat]) {
          // A tracker already running on this page cannot be unloaded, so
          // tell it to stop sending and start over without it.
          revokers[cat].forEach(function (fn) { try { fn(); } catch (e) { /* ignore */ } });
          reload = true;
        }
        clearCategory(cat);
      }
    });

    try {
      document.dispatchEvent(new CustomEvent('uw:consent', { detail: { analytics: state.analytics, advertising: state.advertising } }));
    } catch (e) { /* old browser, nothing listens anyway */ }

    hide();
    if (reload) location.reload();
  }

  /* Anything the visitor has not allowed should not be lying around from an
     earlier visit. */
  CATEGORIES.forEach(function (cat) { if (!allowed(cat)) clearCategory(cat); });

  /* --------------------------------------------------------------- UI */
  var root = null;
  var lastTrigger = null;

  function row(label, text, cat) {
    var input = cat
      ? '<input type="checkbox" class="uw-consent__switch" data-uw-cat="' + cat + '" aria-label="' + label + '">'
      : '<input type="checkbox" class="uw-consent__switch" checked disabled aria-label="' + label + ' (always on)">';
    return '<label class="uw-consent__row">' +
             '<span class="uw-consent__rowtext"><strong>' + label + '</strong><span>' + text + '</span></span>' +
             input +
           '</label>';
  }

  var TEMPLATE =
    '<div class="uw-consent__card" role="dialog" aria-modal="false" aria-labelledby="uw-consent-title" tabindex="-1">' +
      '<div class="uw-consent__head">' +
        '<h2 class="uw-consent__title" id="uw-consent-title">Your privacy choices</h2>' +
        '<button type="button" class="uw-consent__close" data-uw-act="close" aria-label="Close cookie settings" hidden>' +
          '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M6 6l12 12M18 6L6 18"/></svg>' +
        '</button>' +
      '</div>' +
      '<p class="uw-consent__text">We use cookies and similar technologies to understand how our site is used and to measure our ads. ' + (OPT_IN ? 'Analytics and advertising stay off unless you allow them' : 'Analytics and advertising are on by default and you can turn them off here') + ', and you can change your mind any time with Cookie settings in the footer. See our <a href="/cookie-policy">Cookie Policy</a>.</p>' +
      '<div class="uw-consent__panel" id="uw-consent-panel" hidden>' +
        row('Necessary', 'Remembers this choice, keeps payments secure and filters out spam. Always on.', null) +
        row('Analytics', 'Google Analytics and our own analytics show us which pages and buttons people use.', 'analytics') +
        row('Advertising', 'Meta Pixels help us measure our ads and show relevant ads to people who have visited us.', 'advertising') +
      '</div>' +
      '<div class="uw-consent__actions">' +
        '<button type="button" class="uw-consent__btn uw-consent__btn--outline" data-uw-act="reject">Reject all</button>' +
        '<button type="button" class="uw-consent__btn uw-consent__btn--solid" data-uw-act="accept">Accept all</button>' +
      '</div>' +
      '<button type="button" class="uw-consent__btn uw-consent__btn--outline uw-consent__save" data-uw-act="save" hidden>Save my choices</button>' +
      '<button type="button" class="uw-consent__link" data-uw-act="customize" aria-expanded="false" aria-controls="uw-consent-panel">Customize</button>' +
    '</div>';

  function $(sel) { return root.querySelector(sel); }

  function build() {
    root = document.createElement('div');
    root.className = 'uw-consent';
    root.hidden = true;
    root.innerHTML = TEMPLATE;
    document.body.appendChild(root);
    root.addEventListener('click', onClick);
    root.addEventListener('keydown', onKey);
  }

  function showPanel(open) {
    $('#uw-consent-panel').hidden = !open;
    $('[data-uw-act="save"]').hidden = !open;
    var more = $('[data-uw-act="customize"]');
    more.hidden = open;
    more.setAttribute('aria-expanded', open ? 'true' : 'false');
  }

  function syncToggles() {
    var inputs = root.querySelectorAll('[data-uw-cat]');
    for (var i = 0; i < inputs.length; i++) {
      inputs[i].checked = allowed(inputs[i].getAttribute('data-uw-cat'));
    }
  }

  function show(expand, focusIt) {
    if (!document.body) {
      document.addEventListener('DOMContentLoaded', function () { show(expand, focusIt); });
      return;
    }
    if (!root) build();
    syncToggles();
    $('[data-uw-act="close"]').hidden = !state;   // can only dismiss once a choice exists
    showPanel(!!expand);
    root.hidden = false;
    if (focusIt) $('.uw-consent__card').focus();
  }

  function hide() {
    if (!root || root.hidden) return;
    root.hidden = true;
    if (lastTrigger && document.body.contains(lastTrigger)) lastTrigger.focus();
    lastTrigger = null;
  }

  function onClick(e) {
    var btn = e.target.closest ? e.target.closest('[data-uw-act]') : null;
    if (!btn) return;
    var act = btn.getAttribute('data-uw-act');
    if (act === 'accept') set({ analytics: true, advertising: true });
    else if (act === 'reject') set({ analytics: false, advertising: false });
    else if (act === 'customize') { syncToggles(); showPanel(true); }
    else if (act === 'save') {
      var next = { analytics: false, advertising: false };
      var inputs = root.querySelectorAll('[data-uw-cat]');
      for (var i = 0; i < inputs.length; i++) {
        next[inputs[i].getAttribute('data-uw-cat')] = inputs[i].checked;
      }
      set(next);
    }
    else if (act === 'close') hide();
  }

  function onKey(e) {
    if (e.key !== 'Escape') return;
    if (state) hide();
    else showPanel(false);
  }

  function open() { show(true, true); }

  /* "Cookie settings" links (the footer button): bound by delegation so any
     page can add one with the data-uw-consent-open attribute. */
  document.addEventListener('click', function (e) {
    var t = e.target.closest ? e.target.closest('[data-uw-consent-open]') : null;
    if (!t) return;
    e.preventDefault();
    lastTrigger = t;
    open();
  });

  function init() {
    var links = document.querySelectorAll('[data-uw-consent-open]');
    for (var i = 0; i < links.length; i++) links[i].hidden = false;
    if (!state) show(false, false);
  }
  /* Run as soon as the HTML is parsed ("interactive"), not at DOMContentLoaded:
     that event also waits for every deferred script, so a slow CDN would
     otherwise hold the banner back. */
  function whenParsed(fn) {
    if (document.readyState !== 'loading') { fn(); return; }
    document.addEventListener('readystatechange', function onChange() {
      if (document.readyState === 'loading') return;
      document.removeEventListener('readystatechange', onChange);
      fn();
    });
  }
  whenParsed(init);

  window.uwConsent = {
    onGrant: onGrant,
    onRevoke: onRevoke,
    has: allowed,
    open: open,
    status: function () { return state ? { analytics: state.analytics, advertising: state.advertising } : null; }
  };
})();
