/* ============================================================
   USMLE Wise — Junior Scientist Program
   Marquee duplication + stat count-up
   Nav, reveal, and anchor scroll are handled by research-catalyst.js
   ============================================================ */
(function () {
  'use strict';

  function ready(fn) {
    if (document.readyState !== 'loading') fn();
    else document.addEventListener('DOMContentLoaded', fn);
  }

  ready(function () {
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ---- Duplicate marquee track for seamless loop ---- */
    var track = document.getElementById('jspMarqTrack');
    if (track) { track.innerHTML += track.innerHTML; }

    /* ---- Stat count-up ---- */
    function ease(t) { return 1 - Math.pow(1 - t, 3); }

    function runCounter(el) {
      if (el._done) return;
      el._done = true;
      var to  = parseFloat(el.dataset.to);
      var to2 = el.dataset.to2 ? parseFloat(el.dataset.to2) : null;
      var suf = el.dataset.suf  || '';
      var sep = el.dataset.sep  || '';
      if (reduce) {
        el.textContent = to + (to2 != null ? sep + to2 : '') + suf;
        return;
      }
      var dur = 1400, start = performance.now();
      function tick(now) {
        var p = Math.min((now - start) / dur, 1);
        var e = ease(p);
        var out = String(Math.round(to * e));
        if (to2 != null) out += sep + Math.round(to2 * e);
        el.textContent = out + suf;
        if (p < 1) requestAnimationFrame(tick);
        else el.textContent = to + (to2 != null ? sep + to2 : '') + suf;
      }
      requestAnimationFrame(tick);
    }

    var nums = document.querySelectorAll('.rc-stat b[data-to]');
    if ('IntersectionObserver' in window) {
      var sio = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
          if (e.isIntersecting) { runCounter(e.target); sio.unobserve(e.target); }
        });
      }, { threshold: 0.5 });
      nums.forEach(function (el) { sio.observe(el); });
    } else {
      nums.forEach(runCounter);
    }
  });
})();
