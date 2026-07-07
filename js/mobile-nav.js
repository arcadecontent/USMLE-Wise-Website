/* ============================================================
   USMLE Wise — Mobile nav: hamburger + off-canvas drawer
   Self-contained. Works on any page with .msp-nav__inner.
   ============================================================ */
(function () {
  'use strict';

  function ready(fn) {
    if (document.readyState !== 'loading') fn();
    else document.addEventListener('DOMContentLoaded', fn);
  }

  ready(function () {
    var navInner = document.querySelector('.msp-nav__inner');
    var desktopLinks = document.querySelector('.msp-nav__links');
    if (!navInner || !desktopLinks) return;

    /* ---- Hamburger button ---- */
    var burger = document.createElement('button');
    burger.className = 'msp-nav__burger';
    burger.setAttribute('type', 'button');
    burger.setAttribute('aria-label', 'Open navigation menu');
    burger.setAttribute('aria-expanded', 'false');
    burger.setAttribute('aria-controls', 'mspMobileDrawer');
    burger.innerHTML =
      '<svg width="22" height="22" viewBox="0 0 22 22" fill="none"' +
      ' stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true">' +
      '<line x1="2" y1="5.5" x2="20" y2="5.5"/>' +
      '<line x1="2" y1="11"  x2="20" y2="11"/>' +
      '<line x1="2" y1="16.5" x2="20" y2="16.5"/>' +
      '</svg>';
    navInner.appendChild(burger);

    /* ---- Overlay ---- */
    var overlay = document.createElement('div');
    overlay.className = 'mob-nav-overlay';
    document.body.appendChild(overlay);

    /* ---- Drawer ---- */
    var drawer = document.createElement('div');
    drawer.className = 'mob-nav-drawer';
    drawer.id = 'mspMobileDrawer';
    drawer.setAttribute('role', 'dialog');
    drawer.setAttribute('aria-modal', 'true');
    drawer.setAttribute('aria-label', 'Navigation menu');

    /* Head */
    var drawerHead = document.createElement('div');
    drawerHead.className = 'mob-nav-drawer__head';

    var brand = navInner.querySelector('.msp-brand');
    if (brand) {
      var brandClone = brand.cloneNode(true);
      brandClone.removeAttribute('aria-label');
      drawerHead.appendChild(brandClone);
    }

    var closeBtn = document.createElement('button');
    closeBtn.className = 'mob-nav-drawer__close';
    closeBtn.setAttribute('type', 'button');
    closeBtn.setAttribute('aria-label', 'Close navigation menu');
    closeBtn.innerHTML =
      '<svg width="20" height="20" viewBox="0 0 20 20" fill="none"' +
      ' stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true">' +
      '<line x1="3" y1="3" x2="17" y2="17"/>' +
      '<line x1="17" y1="3" x2="3" y2="17"/>' +
      '</svg>';
    drawerHead.appendChild(closeBtn);
    drawer.appendChild(drawerHead);

    /* Body — built from desktop nav children */
    var drawerBody = document.createElement('div');
    drawerBody.className = 'mob-nav-drawer__body';

    var navChildren = desktopLinks.children;
    for (var i = 0; i < navChildren.length; i++) {
      var child = navChildren[i];

      if (child.classList.contains('msp-nav__item--has-dd')) {
        /* Expandable group */
        var mainLink = child.querySelector(':scope > a');
        var ddPanel  = child.querySelector('.msp-nav__dropdown');
        if (!mainLink || !ddPanel) continue;

        var group = document.createElement('div');
        group.className = 'mob-nav-group';

        var trigger = document.createElement('button');
        trigger.className = 'mob-nav-group__trigger';
        trigger.setAttribute('type', 'button');
        trigger.setAttribute('aria-expanded', 'false');

        trigger.innerHTML =
          '<span>' + mainLink.textContent.trim() + '</span>' +
          '<svg class="mob-nav-group__caret" width="16" height="16" viewBox="0 0 16 16"' +
          ' fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"' +
          ' stroke-linejoin="round" aria-hidden="true"><polyline points="4 6 8 10 12 6"/></svg>';

        trigger.addEventListener('click', (function (grp) {
          return function () {
            var isOpen = grp.classList.contains('is-open');
            drawerBody.querySelectorAll('.mob-nav-group').forEach(function (g) {
              g.classList.remove('is-open');
              g.querySelector('.mob-nav-group__trigger').setAttribute('aria-expanded', 'false');
            });
            if (!isOpen) {
              grp.classList.add('is-open');
              grp.querySelector('.mob-nav-group__trigger').setAttribute('aria-expanded', 'true');
            }
          };
        })(group));

        group.appendChild(trigger);

        var itemsWrap = document.createElement('div');
        itemsWrap.className = 'mob-nav-group__items';

        ddPanel.querySelectorAll('.msp-nav__dd-link').forEach(function (ddLink) {
          var a = document.createElement('a');
          a.className = 'mob-nav-group__item';
          a.href = ddLink.getAttribute('href');

          var nameEl = ddLink.querySelector('.msp-nav__dd-name');
          var metaEl = ddLink.querySelector('.msp-nav__dd-meta');

          var nameSpan = document.createElement('span');
          nameSpan.className = 'mob-nav-group__item-name';
          nameSpan.textContent = nameEl ? nameEl.textContent.trim() : '';
          a.appendChild(nameSpan);

          if (metaEl) {
            var metaSpan = document.createElement('span');
            metaSpan.className = 'mob-nav-group__item-meta';
            metaSpan.textContent = metaEl.textContent.trim();
            a.appendChild(metaSpan);
          }

          itemsWrap.appendChild(a);
        });

        group.appendChild(itemsWrap);
        drawerBody.appendChild(group);

      } else if (child.tagName === 'A') {
        /* Simple link */
        var simpleLink = document.createElement('a');
        simpleLink.className = 'mob-nav-link';
        simpleLink.href = child.getAttribute('href');
        simpleLink.textContent = child.textContent.trim();
        drawerBody.appendChild(simpleLink);
      }
    }

    drawer.appendChild(drawerBody);

    /* Foot — CTA button */
    var desktopCta = navInner.querySelector('.msp-nav__cta');
    if (desktopCta) {
      var foot = document.createElement('div');
      foot.className = 'mob-nav-drawer__foot';
      var ctaClone = desktopCta.cloneNode(true);
      foot.appendChild(ctaClone);
      drawer.appendChild(foot);
    }

    document.body.appendChild(drawer);

    /* ---- Open / close ---- */
    function openMenu() {
      drawer.classList.add('is-open');
      overlay.classList.add('is-open');
      burger.setAttribute('aria-expanded', 'true');
      document.body.style.overflow = 'hidden';
      closeBtn.focus();
    }

    function closeMenu() {
      drawer.classList.remove('is-open');
      overlay.classList.remove('is-open');
      burger.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
      burger.focus();
    }

    burger.addEventListener('click', openMenu);
    closeBtn.addEventListener('click', closeMenu);
    overlay.addEventListener('click', closeMenu);

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && drawer.classList.contains('is-open')) {
        closeMenu();
      }
    });

    /* Close on any drawer link click (navigation) */
    drawerBody.addEventListener('click', function (e) {
      if (e.target.closest('a')) closeMenu();
    });
    if (desktopCta) {
      foot.addEventListener('click', function (e) {
        if (e.target.closest('a')) closeMenu();
      });
    }
  });
}());
