/* ============================================================
   USMLE Wise — Research Spotlight carousel
   Drives partials/research-spotlight.php.

   The track is a native scroll-snap row, so touch swipe, trackpad and
   keyboard scrolling all work before this script runs. This adds the
   arrows, the dots, and the autoplay.

   Autoplay runs on pointer devices only. It holds still whenever someone
   might be reading: pointer over the carousel, focus inside it, tab in
   the background, carousel off screen, swipe in progress. It does not run
   at all on phone widths or under prefers-reduced-motion, and any manual
   move restarts the clock rather than advancing on top of it.
   ============================================================ */
(function () {
  'use strict';

  var AUTOPLAY_MS = 4500;        // Time on each slide. One number, change at will.
  var AUTOPLAY_FROM = '(min-width: 721px)';  // Phones scroll it themselves.

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

    /* ---- Position ---- */

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

    // announce is false for autoplay: a polite region firing every eight
    // seconds talks over whatever the screen reader is actually reading.
    function render(i, announce) {
      index = i;
      dots.forEach(function (dot, d) {
        if (d === i) dot.setAttribute('aria-current', 'true');
        else dot.removeAttribute('aria-current');
      });
      if (live && announce) {
        live.textContent = 'Testimonial ' + (i + 1) + ' of ' + slides.length;
      }
    }

    // Wraps both ways, so the arrows agree with an autoplay that loops.
    function goTo(i, auto) {
      var n = slides.length;
      i = ((i % n) + n) % n;
      track.scrollTo({
        left: slides[i].offsetLeft,
        behavior: reduce ? 'auto' : 'smooth'
      });
      render(i, !auto);
      if (!auto) restart();
    }

    /* ---- Autoplay ---- */
    var timer = null;
    var onScreen = true;
    var held = false;      // pointer over, or focus inside
    var wide = window.matchMedia(AUTOPLAY_FROM);

    function canPlay() {
      return !reduce && wide.matches && !held && onScreen && !document.hidden;
    }

    function stop() {
      if (timer) { clearInterval(timer); timer = null; }
    }

    function restart() {
      stop();
      if (canPlay()) {
        timer = setInterval(function () { goTo(index + 1, true); }, AUTOPLAY_MS);
      }
    }

    // Rotating a tablet crosses the threshold, so follow the query rather
    // than reading it once at load.
    if (wide.addEventListener) wide.addEventListener('change', restart);
    else if (wide.addListener) wide.addListener(restart);

    // Holding still is not the same as being paused: these resume on their
    // own, so they never touch the visitor's own pause state.
    //
    // Hover is wired only where hovering is real. Touch browsers fire a
    // mouseenter on tap and then never fire the matching mouseleave, which
    // would silently strand autoplay off for the rest of the visit.
    if (window.matchMedia('(hover: hover)').matches) {
      root.addEventListener('mouseenter', function () { held = true; stop(); });
      root.addEventListener('mouseleave', function () { held = false; restart(); });
    }
    root.addEventListener('focusin', function () { held = true; stop(); });
    root.addEventListener('focusout', function (e) {
      if (!root.contains(e.relatedTarget)) { held = false; restart(); }
    });

    // A swipe in progress should not be interrupted by the timer firing.
    track.addEventListener('pointerdown', function () { stop(); }, { passive: true });
    track.addEventListener('pointerup', function () { restart(); }, { passive: true });
    track.addEventListener('pointercancel', function () { restart(); }, { passive: true });

    document.addEventListener('visibilitychange', function () {
      if (document.hidden) stop(); else restart();
    });

    if ('IntersectionObserver' in window) {
      new IntersectionObserver(function (entries) {
        onScreen = entries[0].isIntersecting;
        if (onScreen) restart(); else stop();
      }, { threshold: 0.25 }).observe(root);
    }

    /* ---- Manual controls ---- */
    track.addEventListener('scroll', function () {
      if (ticking) return;
      ticking = true;
      window.requestAnimationFrame(function () {
        ticking = false;
        var i = nearestIndex();
        if (i !== index) render(i, false);
      });
    }, { passive: true });

    window.addEventListener('resize', function () {
      if (ticking) return;
      ticking = true;
      window.requestAnimationFrame(function () {
        ticking = false;
        render(nearestIndex(), false);
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

    render(nearestIndex(), false);
    restart();
  }

  ready(function () {
    document.querySelectorAll('[data-rsp]').forEach(initCarousel);
  });
})();
