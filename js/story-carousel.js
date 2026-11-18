/* Student story carousel (markup: partials/story-carousel.php) for pages that
   run neither js/match.js nor js/coaching.js, which already carry this same
   behavior: the Step crash course pages. Do not load it next to those two
   scripts or every click would be handled twice.

   - Each .msp-carousel runs on its own; its prev / count / next controls are
     the .msp-carousel__nav beside it.
   - A slide's poster waits in data-src until the slide or a neighbour is
     about to be shown.
   - Clicking a poster opens the shared #mspLightbox. Only triggers inside a
     .msp-stories band are handled, so a page's own video buttons (the crash
     course "watch their stories" bento) keep their own lightbox. */
(function () {
  'use strict';

  function ready(fn) {
    if (document.readyState !== 'loading') fn();
    else document.addEventListener('DOMContentLoaded', fn);
  }

  ready(function () {
    /* ---- Poster fallback: not every video has a max-resolution thumbnail ---- */
    function fixThumb(img) {
      if (img.src.indexOf('maxresdefault') !== -1) img.src = img.src.replace('maxresdefault', 'hqdefault');
    }
    document.querySelectorAll('.msp-stories .msp-video-trigger__thumb').forEach(function (img) {
      img.addEventListener('error', function () { fixThumb(img); });
      if (img.complete && img.naturalWidth === 0) fixThumb(img);
    });

    /* ---- Carousels ---- */
    document.querySelectorAll('.msp-stories .msp-carousel').forEach(function (carousel) {
      var slides = Array.prototype.slice.call(carousel.querySelectorAll(':scope > .msp-slide'));
      var nav = carousel.parentElement.querySelector('.msp-carousel__nav');
      if (!slides.length || !nav) return;

      var buttons = nav.querySelectorAll('.msp-carousel__btn');
      var prevBtn = buttons[0];
      var nextBtn = buttons[1];
      var countEl = nav.querySelector('.msp-carousel__count');
      var current = 0;

      function primeSlide(n) {
        var slide = slides[(n + slides.length) % slides.length];
        slide.querySelectorAll('img[data-src]').forEach(function (img) {
          img.src = img.getAttribute('data-src');
          img.removeAttribute('data-src');
        });
      }
      primeSlide(1);
      primeSlide(-1);

      function goToSlide(n) {
        slides[current].classList.remove('is-active');
        slides[current].setAttribute('aria-hidden', 'true');
        current = (n + slides.length) % slides.length;
        slides[current].classList.add('is-active');
        slides[current].removeAttribute('aria-hidden');
        primeSlide(current);
        primeSlide(current + 1);
        primeSlide(current - 1);
        if (countEl) countEl.textContent = (current + 1) + ' / ' + slides.length;
      }

      if (prevBtn) prevBtn.addEventListener('click', function () { goToSlide(current - 1); });
      if (nextBtn) nextBtn.addEventListener('click', function () { goToSlide(current + 1); });
    });

    /* ---- Video lightbox ---- */
    var lightbox = document.getElementById('mspLightbox');
    var iframe = document.getElementById('mspLightboxIframe');
    if (!lightbox || !iframe) return;

    function open(ytid) {
      iframe.referrerPolicy = 'strict-origin-when-cross-origin';
      iframe.src = 'https://www.youtube.com/embed/' + ytid + '?autoplay=1&rel=0';
      lightbox.removeAttribute('hidden');
      lightbox.focus();
    }
    function close() {
      iframe.src = '';
      lightbox.setAttribute('hidden', '');
    }
    document.querySelectorAll('.msp-stories .msp-video-trigger').forEach(function (btn) {
      btn.addEventListener('click', function () { open(btn.dataset.ytid); });
    });
    lightbox.querySelector('.msp-lightbox__close').addEventListener('click', close);
    lightbox.addEventListener('click', function (e) { if (e.target === lightbox) close(); });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && !lightbox.hasAttribute('hidden')) close();
    });
  });
})();
