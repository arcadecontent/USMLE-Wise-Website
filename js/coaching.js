/* ============================================================
   USMLE Wise — Match Service page behavior
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

    /* ---- 1. Nav stuck state ---- */
    var nav = document.getElementById('mspNav');
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
    var firstItem = document.querySelector('.msp-faq .accordion__item');
    if (firstItem) firstItem.classList.add('is-open');

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
          el.style.transitionDelay = Math.min(idx, 5) * 90 + 'ms';
          el.classList.add('is-in');
          io.unobserve(el);
        });
      }, { rootMargin: '0px 0px -10% 0px', threshold: 0.1 });
      reveals.forEach(function (el) { io.observe(el); });
    }

    /* ---- 4. YouTube thumbnail fallback ---- */
    function fixThumb(img) {
      if (img.src.indexOf('maxresdefault') !== -1) {
        img.src = img.src.replace('maxresdefault', 'hqdefault');
      }
    }
    document.querySelectorAll('.msp-video-trigger__thumb').forEach(function (img) {
      img.addEventListener('error', function () { fixThumb(img); });
      if (img.complete && img.naturalWidth === 0) fixThumb(img);
    });

    /* ---- 4b. Testimonial carousel ---- */
    var slides = Array.prototype.slice.call(document.querySelectorAll('.msp-slide'));
    var countEl = document.getElementById('slideCount');
    var current = 0;

    function goToSlide(n) {
      slides[current].classList.remove('is-active');
      slides[current].setAttribute('aria-hidden', 'true');
      current = (n + slides.length) % slides.length;
      slides[current].classList.add('is-active');
      slides[current].removeAttribute('aria-hidden');
      if (countEl) countEl.textContent = (current + 1) + ' / ' + slides.length;
    }

    var prevBtn = document.getElementById('prevSlide');
    var nextBtn = document.getElementById('nextSlide');
    if (slides.length) {
      if (prevBtn) prevBtn.addEventListener('click', function () { goToSlide(current - 1); });
      if (nextBtn) nextBtn.addEventListener('click', function () { goToSlide(current + 1); });
    }

    /* ---- 4c. Video lightbox ---- */
    var lightbox = document.getElementById('mspLightbox');
    var lbIframe = document.getElementById('mspLightboxIframe');
    if (lightbox && lbIframe) {
      function openLightbox(ytid) {
        lbIframe.referrerPolicy = 'strict-origin-when-cross-origin';
        lbIframe.src = 'https://www.youtube.com/embed/' + ytid + '?autoplay=1&rel=0';
        lightbox.removeAttribute('hidden');
        lightbox.focus();
      }
      function closeLightbox() {
        lbIframe.src = '';
        lightbox.setAttribute('hidden', '');
      }
      document.querySelectorAll('.msp-video-trigger').forEach(function (btn) {
        btn.addEventListener('click', function () {
          openLightbox(btn.dataset.ytid);
        });
      });
      lightbox.querySelector('.msp-lightbox__close').addEventListener('click', closeLightbox);
      lightbox.addEventListener('click', function (e) {
        if (e.target === lightbox) closeLightbox();
      });
      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && !lightbox.hasAttribute('hidden')) closeLightbox();
      });
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
