/* Live cohort countdown (markup: partials/cohort-countdown.php).
   Every [data-cc-countdown] counts down to its data-target (epoch seconds).
   data-now is the server's clock when the page was built, so a wrong device
   clock or time zone cannot move the countdown. At zero the page reloads once
   so the server can switch it to the "underway / next dates soon" state. */
(function () {
  'use strict';
  var els = document.querySelectorAll('[data-cc-countdown]');
  if (!els.length) return;

  var serverNow = parseInt(els[0].getAttribute('data-now'), 10) * 1000;
  var offset = isFinite(serverNow) ? serverNow - Date.now() : 0;
  var timer = null;

  function pad(n) { return n < 10 ? '0' + n : String(n); }

  // Same wording as uwcc_countdown_text() in data/crash-course-cohorts.php.
  function text(d, h, m, s) { return d > 0 ? d + 'd ' + h + 'h ' + m + 'm' : h + 'h ' + m + 'm ' + s + 's'; }

  function reloadOnce(target) {
    var key = 'cc-reloaded-' + target;
    try {
      if (sessionStorage.getItem(key)) return;
      sessionStorage.setItem(key, '1');
    } catch (e) { /* storage blocked: reload at most once per page load below */ }
    window.location.reload();
  }

  function tick() {
    var now = Date.now() + offset;
    var running = false;
    var lastTarget = 0;
    Array.prototype.forEach.call(els, function (el) {
      var target = parseInt(el.getAttribute('data-target'), 10);
      var left = Math.max(0, Math.floor((target * 1000 - now) / 1000));
      var d = Math.floor(left / 86400);
      var h = Math.floor((left % 86400) / 3600);
      var m = Math.floor((left % 3600) / 60);
      var s = left % 60;
      var units = { days: d, hours: h, minutes: m, seconds: s };
      Array.prototype.forEach.call(el.querySelectorAll('[data-cc-unit]'), function (u) {
        u.textContent = pad(units[u.getAttribute('data-cc-unit')]);
      });
      var line = el.querySelector('[data-cc-text]');
      if (line) line.textContent = left > 0 ? text(d, h, m, s) : (el.getAttribute('data-done') || 'Starting now');
      if (left > 0) running = true;
      lastTarget = target;
    });
    if (!running) {
      clearInterval(timer);
      reloadOnce(lastTarget);
    }
  }

  tick();
  timer = setInterval(tick, 1000);
  // Background tabs throttle timers; catch up as soon as the tab is visible again.
  document.addEventListener('visibilitychange', function () { if (!document.hidden) tick(); });
})();
