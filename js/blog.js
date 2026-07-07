/* ============================================================
   USMLE Wise — Blog listing behavior
   Nav state, scroll-reveal, category filtering.
   ============================================================ */
(function () {
  'use strict';

  function ready(fn) {
    if (document.readyState !== 'loading') fn();
    else document.addEventListener('DOMContentLoaded', fn);
  }

  ready(function () {

    /* ---- Lucide icons ---- */
    if (window.lucide && typeof window.lucide.createIcons === 'function') {
      window.lucide.createIcons();
    }

    /* ---- Nav stuck state ---- */
    var nav = document.getElementById('mspNav');
    if (nav) {
      var onScroll = function () {
        nav.classList.toggle('is-stuck', window.scrollY > 12);
      };
      onScroll();
      window.addEventListener('scroll', onScroll, { passive: true });
    }

    /* ---- Scroll reveal with stagger ---- */
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var reveals = Array.prototype.slice.call(document.querySelectorAll('.reveal'));

    if (reduce || !('IntersectionObserver' in window)) {
      reveals.forEach(function (el) { el.classList.add('is-in'); });
    } else {
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          var el = entry.target;
          var siblings = Array.prototype.slice.call(
            el.parentElement.querySelectorAll(':scope > .reveal')
          );
          var idx = Math.max(0, siblings.indexOf(el));
          el.style.transitionDelay = Math.min(idx, 5) * 90 + 'ms';
          el.classList.add('is-in');
          io.unobserve(el);
        });
      }, { rootMargin: '0px 0px -10% 0px', threshold: 0.1 });
      reveals.forEach(function (el) { io.observe(el); });
    }

    /* ---- Category filter ---- */
    var chips = Array.prototype.slice.call(document.querySelectorAll('.blog-filter__chip'));
    var cards = Array.prototype.slice.call(document.querySelectorAll('#blogGrid .blog-card'));
    var emptyMsg = document.getElementById('blogEmpty');

    function applyFilter(filter) {
      var visible = 0;
      cards.forEach(function (card) {
        var match = filter === 'all' || card.getAttribute('data-category') === filter;
        card.classList.toggle('is-hidden', !match);
        if (match) visible++;
      });
      if (emptyMsg) emptyMsg.hidden = visible !== 0;
    }

    chips.forEach(function (chip) {
      chip.addEventListener('click', function () {
        chips.forEach(function (c) { c.classList.remove('is-active'); });
        chip.classList.add('is-active');
        applyFilter(chip.getAttribute('data-filter'));
      });
    });

  });
})();
