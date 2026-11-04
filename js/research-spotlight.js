/* ============================================================
   USMLE Wise — Research Spotlight carousel
   Drives partials/research-spotlight.php.

   The track is a native scroll-snap row, so touch swipe, trackpad
   and keyboard scrolling all work before this script runs. This only
   adds the arrows, the dots and the state they report.
   ============================================================ */
(function () {
  'use strict';

  function ready(fn) {
    if (document.readyState !== 'loading') fn();
    else document.addEventListener('DOMContentLoaded', fn);
  }

  function initCarousel(root) {
    var track = root.querySelector('[data-rsp-track]');
    if (!track) return;

    var slides = Array.prototype.slice.call(track.children);
    if (slides.length < 2) return;

    var prevBtn = root.querySelector('[data-rsp-prev]');
    var nextBtn = root.querySelector('[data-rsp-next]');
    var dots    = Array.prototype.slice.call(root.querySelectorAll('[data-rsp-dot]'));
    var live    = root.querySelector('[data-rsp-live]');
    var reduce  = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    var index = 0;
    var ticking = false;

    /* Nearest slide to the current scroll position. Measuring beats
       tracking our own counter: the user can swipe past us at any time. */
    function nearestIndex() {
      var x = track.scrollLeft;
      var best = 0;
      var bestGap = Infinity;
      for (var i = 0; i < slides.length; i++) {
        var gap = Math.abs(slides[i].offsetLeft - x);
        if (gap < bestGap) { bestGap = gap; best = i; }
      }
      return best;
    }

    function render(i) {
      index = i;
      if (prevBtn) prevBtn.disabled = (i === 0);
      if (nextBtn) nextBtn.disabled = (i === slides.length - 1);
      dots.forEach(function (dot, d) {
        if (d === i) dot.setAttribute('aria-current', 'true');
        else dot.removeAttribute('aria-current');
      });
      if (live) live.textContent = 'Testimonial ' + (i + 1) + ' of ' + slides.length;
    }

    function goTo(i) {
      i = Math.max(0, Math.min(slides.length - 1, i));
      track.scrollTo({
        left: slides[i].offsetLeft,
        behavior: reduce ? 'auto' : 'smooth'
      });
      render(i);
    }

    track.addEventListener('scroll', function () {
      if (ticking) return;
      ticking = true;
      window.requestAnimationFrame(function () {
        ticking = false;
        var i = nearestIndex();
        if (i !== index) render(i);
      });
    }, { passive: true });

    window.addEventListener('resize', function () {
      if (ticking) return;
      ticking = true;
      window.requestAnimationFrame(function () {
        ticking = false;
        render(nearestIndex());
      });
    }, { passive: true });

    if (prevBtn) prevBtn.addEventListener('click', function () { goTo(index - 1); });
    if (nextBtn) nextBtn.addEventListener('click', function () { goTo(index + 1); });

    dots.forEach(function (dot) {
      dot.addEventListener('click', function () {
        goTo(parseInt(dot.getAttribute('data-rsp-dot'), 10) || 0);
      });
    });

    /* Arrow keys move one slide. Handled here rather than left to the
       track's native scrolling so a keypress lands on a snap point. */
    root.addEventListener('keydown', function (e) {
      if (e.key !== 'ArrowLeft' && e.key !== 'ArrowRight') return;
      if (e.target.closest('[data-rsp-dot]')) return;
      e.preventDefault();
      goTo(index + (e.key === 'ArrowRight' ? 1 : -1));
    });

    render(nearestIndex());
  }

  ready(function () {
    document.querySelectorAll('[data-rsp]').forEach(initCarousel);
  });
})();
