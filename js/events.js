/* ============================================================
   USMLE Wise: event pages (/events/<slug>)
   Photo gallery lightbox with previous / next, keyboard and swipe.
   ============================================================ */
(function () {
  'use strict';

  function ready(fn) {
    if (document.readyState !== 'loading') fn();
    else document.addEventListener('DOMContentLoaded', fn);
  }

  ready(function () {
    var lb = document.getElementById('evLightbox');
    var buttons = Array.prototype.slice.call(document.querySelectorAll('.ed-photo__btn'));
    if (!lb || !buttons.length) return;

    var img = document.getElementById('evLightboxImg');
    var capText = document.getElementById('evLightboxCap');
    var capCount = document.getElementById('evLightboxCount');
    var btnClose = lb.querySelector('.ev-lb__close');
    var btnPrev = lb.querySelector('.ev-lb__prev');
    var btnNext = lb.querySelector('.ev-lb__next');

    var index = 0;
    var opener = null; // returns focus here on close

    function show(i) {
      index = (i + buttons.length) % buttons.length;
      var btn = buttons[index];
      var thumb = btn.querySelector('img');
      lb.classList.add('is-loading');
      img.onload = img.onerror = function () { lb.classList.remove('is-loading'); };
      img.src = btn.getAttribute('data-full');
      img.alt = thumb ? thumb.alt : '';
      capText.textContent = btn.getAttribute('data-caption') || '';
      capCount.textContent = (index + 1) + ' / ' + buttons.length;
      // warm the neighbours so next / previous feels instant
      [index + 1, index - 1].forEach(function (n) {
        var nb = buttons[(n + buttons.length) % buttons.length];
        if (nb) new Image().src = nb.getAttribute('data-full');
      });
    }

    function open(i, from) {
      opener = from;
      lb.removeAttribute('hidden');
      document.body.classList.add('ev-lb-open');
      show(i);
      btnClose.focus();
    }

    function close() {
      lb.setAttribute('hidden', '');
      document.body.classList.remove('ev-lb-open');
      img.removeAttribute('src');
      if (opener && opener.focus) opener.focus();
    }

    buttons.forEach(function (btn, i) {
      btn.addEventListener('click', function () { open(i, btn); });
    });

    btnClose.addEventListener('click', close);
    btnPrev.addEventListener('click', function () { show(index - 1); });
    btnNext.addEventListener('click', function () { show(index + 1); });

    // A click on the dark backdrop (not the photo or its controls) closes.
    lb.addEventListener('click', function (e) {
      if (e.target === lb || e.target.classList.contains('ev-lb__fig')) close();
    });

    document.addEventListener('keydown', function (e) {
      if (lb.hasAttribute('hidden')) return;
      if (e.key === 'Escape') { close(); return; }
      if (e.key === 'ArrowLeft') { show(index - 1); return; }
      if (e.key === 'ArrowRight') { show(index + 1); return; }
      if (e.key === 'Tab') {
        // keep focus inside the dialog
        var order = [btnClose, btnPrev, btnNext];
        var at = order.indexOf(document.activeElement);
        e.preventDefault();
        order[(at + (e.shiftKey ? -1 : 1) + order.length) % order.length].focus();
      }
    });

    // Swipe left / right on touch screens.
    var startX = null, startY = null;
    lb.addEventListener('touchstart', function (e) {
      if (e.touches.length !== 1) return;
      startX = e.touches[0].clientX;
      startY = e.touches[0].clientY;
    }, { passive: true });
    lb.addEventListener('touchend', function (e) {
      if (startX === null) return;
      var dx = e.changedTouches[0].clientX - startX;
      var dy = e.changedTouches[0].clientY - startY;
      startX = startY = null;
      if (Math.abs(dx) > 50 && Math.abs(dx) > Math.abs(dy) * 1.5) show(index + (dx < 0 ? 1 : -1));
    }, { passive: true });
  });
})();
