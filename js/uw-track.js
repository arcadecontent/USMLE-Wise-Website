/* ============================================================
   USMLE Wise — first-party analytics beacon
   Sends pageview, CTA click, and time-on-page events to
   /api/track.php. No cookies, no third parties; visitor and
   session ids are random values in local/sessionStorage.
   ============================================================ */
(function () {
  'use strict';

  if (/bot|crawl|spider|headless|lighthouse|pingdom|gtmetrix/i.test(navigator.userAgent)) return;
  if (!window.localStorage || !window.sessionStorage) return;

  function rid() {
    return Math.random().toString(36).slice(2, 10) + Date.now().toString(36);
  }
  function stored(store, key) {
    try {
      var v = store.getItem(key);
      if (!v) { v = rid(); store.setItem(key, v); }
      return v;
    } catch (e) { return rid(); }
  }

  var vid = stored(localStorage, 'uw_vid');
  var sid = stored(sessionStorage, 'uw_sid');
  var page = location.pathname;

  /* UTM capture — first touch wins for the session, so every event in
     the session (clicks, time) stays attributed to the campaign. */
  var utm = null;
  try {
    var qs = new URLSearchParams(location.search);
    var u = {};
    ['source', 'medium', 'campaign', 'content', 'term'].forEach(function (k) {
      var v = qs.get('utm_' + k);
      if (v) u[k] = v.slice(0, 100);
    });
    if (u.source && !sessionStorage.getItem('uw_utm')) {
      sessionStorage.setItem('uw_utm', JSON.stringify(u));
    }
    utm = JSON.parse(sessionStorage.getItem('uw_utm') || 'null');
  } catch (e) { /* no UTM support, fine */ }

  function send(event, extra) {
    var payload = { e: event, p: page, v: vid, s: sid };
    if (utm) payload.u = utm;
    if (extra) for (var k in extra) payload[k] = extra[k];
    var body = JSON.stringify(payload);
    try {
      if (navigator.sendBeacon) {
        navigator.sendBeacon('/api/track.php', new Blob([body], { type: 'text/plain' }));
      } else {
        var x = new XMLHttpRequest();
        x.open('POST', '/api/track.php', true);
        x.send(body);
      }
    } catch (e) { /* never break the page over analytics */ }
  }

  /* ---- Pageview ---- */
  send('pageview', { r: (document.referrer || '').slice(0, 300) });

  /* ---- CTA clicks ---- */
  document.addEventListener('click', function (ev) {
    var el = ev.target;
    if (!el || !el.closest) return;

    /* Match Membership's CTAs are <div data-cta="..."> rather than links — the
       "Get started" button opens Stripe from JS, and "Enroll now" only scrolls
       to the pricing card. Checked before the <a> lookup below, because these
       never match closest('a') and were invisible to the admin panel. */
    var cta = el.closest('[data-cta]');
    if (cta) {
      var kind = cta.getAttribute('data-cta');
      var label = (cta.textContent || '').trim().slice(0, 80);
      if (kind === 'checkout') { send('checkout_click', { m: label }); return; }
      if (kind === 'pricing') { send('enroll_click', { m: label }); return; }
    }

    var a = el.closest('a');
    if (!a) return;
    var href = a.getAttribute('href') || '';
    if (href === '#offer') {
      send('enroll_click', { m: (a.textContent || '').trim().slice(0, 80) });
    } else if (href.indexOf('nas.com/checkout') !== -1 || href.indexOf('buy.stripe.com') !== -1) {
      send('checkout_click', { m: (a.textContent || '').trim().slice(0, 80) });
    } else if (href.indexOf('guidance-call') !== -1) {
      var loc = a.closest('header') ? 'header' : (a.closest('footer') ? 'footer' : 'body');
      send('guidance_click', { m: loc + ': ' + (a.textContent || '').trim().slice(0, 60) });
    }
  }, true);

  /* ---- Time on page (visible time only) ---- */
  var visStart = document.visibilityState === 'visible' ? Date.now() : null;
  var acc = 0;

  function flush() {
    if (visStart) { acc += Date.now() - visStart; visStart = null; }
    var secs = Math.round(acc / 1000);
    if (secs >= 1) {
      send('time', { d: Math.min(secs, 7200) });
      acc = 0;
    }
  }

  document.addEventListener('visibilitychange', function () {
    if (document.visibilityState === 'hidden') flush();
    else if (!visStart) visStart = Date.now();
  });
  window.addEventListener('pagehide', flush);
})();
