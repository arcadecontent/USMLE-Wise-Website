/* ============================================================
   USMLE Wise — Research Catalyst page behavior
   Nav state, accordion, scroll-reveal, anchor offset.
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

    /* ---- Accordion (single-open) ---- */
    document.querySelectorAll('.accordion__item').forEach(function (item) {
      var head = item.querySelector('.accordion__head');
      if (!head) return;
      head.addEventListener('click', function () {
        var parent = item.parentElement;
        var isOpen = item.classList.contains('is-open');
        parent.querySelectorAll('.accordion__item').forEach(function (o) {
          o.classList.remove('is-open');
        });
        if (!isOpen) item.classList.add('is-open');
      });
    });
    var firstItem = document.querySelector('.rc-faq .accordion__item');
    if (firstItem) firstItem.classList.add('is-open');

    /* ---- Scroll reveal with stagger ---- */
    var reveals = Array.prototype.slice.call(document.querySelectorAll('.reveal'));
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

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

    /* ---- Count-up animation for stat numbers ---- */
    (function () {
      var counters = Array.prototype.slice.call(document.querySelectorAll('[data-count]'));
      if (!counters.length || reduce) return;

      function easeOutQuart(t) { return 1 - Math.pow(1 - t, 4); }

      function runCounter(el) {
        var target   = parseInt(el.getAttribute('data-count'), 10);
        var suffix   = el.getAttribute('data-suffix') || '';
        var comma    = el.hasAttribute('data-comma');
        var duration = 1800;
        var start    = null;

        function fmt(n) { return comma ? n.toLocaleString() : String(n); }

        function tick(ts) {
          if (!start) start = ts;
          var progress = Math.min((ts - start) / duration, 1);
          el.textContent = fmt(Math.round(easeOutQuart(progress) * target)) + suffix;
          if (progress < 1) requestAnimationFrame(tick);
        }
        requestAnimationFrame(tick);
      }

      var co = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          runCounter(entry.target);
          co.unobserve(entry.target);
        });
      }, { threshold: 0.5 });

      counters.forEach(function (el) { co.observe(el); });
    }());

    /* ---- Lazy-load background images (data-bg) ---- */
    var bgEls = Array.prototype.slice.call(document.querySelectorAll('[data-bg]'));
    if (bgEls.length) {
      if ('IntersectionObserver' in window) {
        var bgIo = new IntersectionObserver(function (entries) {
          entries.forEach(function (entry) {
            if (!entry.isIntersecting) return;
            entry.target.style.backgroundImage = entry.target.getAttribute('data-bg');
            bgIo.unobserve(entry.target);
          });
        }, { rootMargin: '200px 0px' });
        bgEls.forEach(function (el) { bgIo.observe(el); });
      } else {
        bgEls.forEach(function (el) { el.style.backgroundImage = el.getAttribute('data-bg'); });
      }
    }

    /* ---- Anchor scroll with sticky-nav offset ---- */
    var navH = 72;
    document.querySelectorAll('a[href^="#"]').forEach(function (link) {
      link.addEventListener('click', function (e) {
        var href = link.getAttribute('href');
        if (!href || href === '#' || href.length < 2) return;
        var target = document.querySelector(href);
        if (!target) return;
        e.preventDefault();
        var y = target.getBoundingClientRect().top + window.scrollY - navH + 1;
        window.scrollTo({ top: Math.max(0, y), behavior: reduce ? 'auto' : 'smooth' });
        history.replaceState(null, '', href);
      });
    });

  });
})();
