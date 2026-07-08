/* ============================================================
   USMLE Wise — Landing page behavior
   Nav state, accordion, scroll-reveal, anchor offset.
   ============================================================ */
(function () {
  'use strict';

  function ready(fn) {
    if (document.readyState !== 'loading') fn();
    else document.addEventListener('DOMContentLoaded', fn);
  }

  ready(function () {
    if (window.lucide && typeof window.lucide.createIcons === 'function') {
      window.lucide.createIcons();
    }

    /* ---- 1. Nav: solid background once scrolled ---- */
    var nav = document.getElementById('lpxNav');
    if (nav) {
      var onScroll = function () {
        nav.classList.toggle('is-stuck', window.scrollY > 12);
      };
      onScroll();
      window.addEventListener('scroll', onScroll, { passive: true });
    }

    /* ---- 2. Accordion (single-open) ---- */
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
    var firstFaq = document.querySelector('.lpx-faq .accordion__item');
    if (firstFaq) firstFaq.classList.add('is-open');

    /* ---- 3. Scroll reveal with stagger ---- */
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
          el.style.transitionDelay = Math.min(idx, 5) * 80 + 'ms';
          el.classList.add('is-in');
          io.unobserve(el);
        });
      }, { rootMargin: '0px 0px -12% 0px', threshold: 0.12 });
      reveals.forEach(function (el) { io.observe(el); });
    }

    /* ---- 4. Lazy-load background images (data-bg) ---- */
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

    /* ---- 5. Anchor scroll with sticky-nav offset ---- */
    var navH = 72;
    document.querySelectorAll('a[href^="#"]').forEach(function (link) {
      link.addEventListener('click', function (e) {
        var href = link.getAttribute('href');
        if (!href || href === '#' || href.length < 2) return;
        var target = document.querySelector(href);
        if (!target) return;
        e.preventDefault();
        var y = target.getBoundingClientRect().top + window.scrollY - navH + 1;
        window.scrollTo({
          top: Math.max(0, y),
          behavior: reduce ? 'auto' : 'smooth'
        });
        history.replaceState(null, '', href);
      });
    });
  });
})();

/* ---- Count-up animation ---- */
(function () {
  var counters = Array.prototype.slice.call(document.querySelectorAll('[data-count]'));
  if (!counters.length) return;
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

  function easeOutQuart(t) { return 1 - Math.pow(1 - t, 4); }

  function runCounter(el) {
    var target = parseFloat(el.getAttribute('data-count'));
    var suffix = el.getAttribute('data-suffix') || '';
    var comma  = el.hasAttribute('data-comma');
    var dec    = el.hasAttribute('data-decimal') ? parseInt(el.getAttribute('data-decimal'), 10) : 0;
    var start  = null;

    function fmt(n) {
      if (dec > 0) return n.toFixed(dec);
      return comma ? Math.round(n).toLocaleString() : String(Math.round(n));
    }

    function tick(ts) {
      if (!start) start = ts;
      var p = Math.min((ts - start) / 1800, 1);
      el.textContent = fmt(easeOutQuart(p) * target) + suffix;
      if (p < 1) requestAnimationFrame(tick);
    }

    requestAnimationFrame(tick);
  }

  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (!e.isIntersecting || e.target.hasAttribute('data-counted')) return;
      e.target.setAttribute('data-counted', '');
      runCounter(e.target);
      io.unobserve(e.target);
    });
  }, { threshold: 0.5 });

  counters.forEach(function (el) { io.observe(el); });
}());
