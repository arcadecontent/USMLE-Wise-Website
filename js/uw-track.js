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

  function send(event, extra) {
    var payload = { e: event, p: page, v: vid, s: sid };
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
    var a = el && el.closest ? el.closest('a') : null;
    if (!a) return;
    var href = a.getAttribute('href') || '';
    if (href === '#offer') {
      send('enroll_click', { m: (a.textContent || '').trim().slice(0, 80) });
    } else if (href.indexOf('nas.com/checkout') !== -1) {
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
