/* ============================================================
   USMLE Wise: Our Events page
   Photo gallery for past events: "show all" toggle and a lightbox with
   previous / next, keyboard and swipe. Each gallery is its own set, so a
   page can hold several events.
   ============================================================ */
(function () {
  'use strict';

  function ready(fn) {
    if (document.readyState !== 'loading') fn();
    else document.addEventListener('DOMContentLoaded', fn);
  }

  ready(function () {
    var lb = document.getElementById('evLightbox');
    if (!lb) return;

    var img = document.getElementById('evLightboxImg');
    var capText = document.getElementById('evLightboxCap');
    var capCount = document.getElementById('evLightboxCount');
    var btnClose = lb.querySelector('.ev-lb__close');
    var btnPrev = lb.querySelector('.ev-lb__prev');
    var btnNext = lb.querySelector('.ev-lb__next');

    var items = [];      // the open gallery's thumbnail buttons
    var index = 0;
    var opener = null;   // returns focus here on close

    function show(i) {
      index = (i + items.length) % items.length;
      var btn = items[index];
      var thumb = btn.querySelector('img');
      lb.classList.add('is-loading');
      img.onload = img.onerror = function () { lb.classList.remove('is-loading'); };
      img.src = btn.getAttribute('data-full');
      img.alt = thumb ? thumb.alt : '';
      capText.textContent = btn.getAttribute('data-caption') || '';
      capCount.textContent = (index + 1) + ' / ' + items.length;
      // warm the neighbours so next / previous feels instant
      [index + 1, index - 1].forEach(function (n) {
        var nb = items[(n + items.length) % items.length];
        if (nb) new Image().src = nb.getAttribute('data-full');
      });
    }

    function open(list, i, from) {
      items = list;
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

    // Wire up every gallery on the page.
    document.querySelectorAll('[data-gallery]').forEach(function (gallery) {
      var buttons = Array.prototype.slice.call(gallery.querySelectorAll('.pe-grid__btn'));
      buttons.forEach(function (btn, i) {
        btn.addEventListener('click', function () { open(buttons, i, btn); });
      });

      var more = gallery.querySelector('[data-gallery-more]');
      if (more) {
        more.addEventListener('click', function () {
          gallery.classList.remove('is-collapsed');
          more.closest('.pe-gal__more').setAttribute('hidden', '');
        });
      }
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
