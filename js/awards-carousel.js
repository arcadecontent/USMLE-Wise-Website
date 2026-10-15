/* ============================================================
   USMLE Wise — Awards carousel behavior
   Prev/next buttons scroll the track; native scroll-snap handles the
   rest. Buttons disable at the scroll extremes.
   ============================================================ */
(function () {
  'use strict';

  function ready(fn) {
    if (document.readyState !== 'loading') fn();
    else document.addEventListener('DOMContentLoaded', fn);
  }

  ready(function () {
    var track = document.getElementById('awardsTrack');
    if (!track) return;

    var prevBtn = document.querySelector('.awd-carousel__btn--prev');
    var nextBtn = document.querySelector('.awd-carousel__btn--next');
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function updateButtons() {
      if (prevBtn) prevBtn.disabled = track.scrollLeft <= 0;
      if (nextBtn) nextBtn.disabled = track.scrollLeft + track.clientWidth >= track.scrollWidth - 1;
    }

    function scrollByCard(dir) {
      track.scrollBy({
        left: dir * track.clientWidth * 0.9,
        behavior: reduce ? 'auto' : 'smooth'
      });
    }

    if (prevBtn) prevBtn.addEventListener('click', function () { scrollByCard(-1); });
    if (nextBtn) nextBtn.addEventListener('click', function () { scrollByCard(1); });

    var ticking = false;
    track.addEventListener('scroll', function () {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(function () {
        updateButtons();
        ticking = false;
      });
    }, { passive: true });

    updateButtons();
  });
})();
