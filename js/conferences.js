/* ============================================================
   USMLE Wise — Conference Finder page behavior
   Nav state, scroll-reveal, sidebar filters + search, mobile drawer.
   Adapted from js/rotations.js (same interaction pattern, no price slider).
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

    /* ---- Sidebar filters ---- */
    (function () {
      var activeFilters = { specialty: [], status: [], deadline: [], participating: [] };
      var searchQuery = '';

      var cards       = Array.prototype.slice.call(document.querySelectorAll('.conf-card'));
      var emptyEl     = document.getElementById('confEmpty');
      var resetBtn    = document.getElementById('confReset');
      var resetInline = document.getElementById('confResetInline');
      var countEl     = document.getElementById('confFilterCount');
      var toggleBtn   = document.getElementById('confFilterToggle');
      var sidebar     = document.getElementById('confSidebar');
      var searchInput = document.getElementById('confSearchInput');
      var searchClear = document.getElementById('confSearchClear');
      if (!cards.length) return;

      var scrim = document.createElement('div');
      scrim.className = 'conf-sidebar-scrim';
      document.body.appendChild(scrim);

      function getTotalActive() {
        return Object.keys(activeFilters).reduce(function (acc, k) { return acc + activeFilters[k].length; }, 0);
      }

      function applyFilters() {
        var visible = 0;
        cards.forEach(function (card) {
          var show = Object.keys(activeFilters).every(function (key) {
            var sel = activeFilters[key];
            return sel.length === 0 || sel.indexOf(card.getAttribute('data-' + key)) !== -1;
          });
          if (show && searchQuery) {
            var haystack = card.getAttribute('data-search') || '';
            show = haystack.indexOf(searchQuery) !== -1;
          }
          card.classList.toggle('is-hidden', !show);
          if (show) visible++;
        });
        if (emptyEl) emptyEl.hidden = visible > 0;
        var total = getTotalActive();
        if (resetBtn) resetBtn.classList.toggle('is-visible', total > 0);
        if (countEl)  { countEl.textContent = total > 0 ? total : ''; countEl.hidden = total === 0; }
      }

      function resetAll() {
        Object.keys(activeFilters).forEach(function (k) { activeFilters[k] = []; });
        document.querySelectorAll('.conf-sidebar__opt').forEach(function (o) { o.classList.remove('is-active'); });
        searchQuery = '';
        if (searchInput) searchInput.value = '';
        if (searchClear) searchClear.hidden = true;
        applyFilters();
      }

      function closeSidebar() {
        if (!sidebar) return;
        sidebar.classList.remove('is-open');
        scrim.classList.remove('is-visible');
        if (toggleBtn) { toggleBtn.setAttribute('aria-expanded', 'false'); toggleBtn.classList.remove('is-active'); }
      }

      /* Option buttons (specialty, status, deadline, participating) */
      document.querySelectorAll('.conf-sidebar__opt').forEach(function (opt) {
        opt.addEventListener('click', function () {
          var group = opt.getAttribute('data-filter');
          var value = opt.getAttribute('data-value');
          var arr = activeFilters[group];
          if (!arr) return;
          var idx = arr.indexOf(value);
          if (idx === -1) { arr.push(value); opt.classList.add('is-active'); }
          else            { arr.splice(idx, 1); opt.classList.remove('is-active'); }
          applyFilters();
        });
      });

      /* Reset buttons */
      if (resetBtn)    resetBtn.addEventListener('click', resetAll);
      if (resetInline) resetInline.addEventListener('click', resetAll);

      /* Search input */
      if (searchInput) {
        searchInput.addEventListener('input', function () {
          searchQuery = searchInput.value.trim().toLowerCase();
          if (searchClear) searchClear.hidden = searchQuery.length === 0;
          applyFilters();
        });
      }
      if (searchClear) {
        searchClear.addEventListener('click', function () {
          searchQuery = '';
          if (searchInput) { searchInput.value = ''; searchInput.focus(); }
          searchClear.hidden = true;
          applyFilters();
        });
      }

      /* Accordion: group collapse/expand */
      document.querySelectorAll('.conf-sidebar__gh').forEach(function (btn) {
        btn.addEventListener('click', function () {
          var group = btn.parentElement;
          var open = group.classList.toggle('is-open');
          btn.setAttribute('aria-expanded', open);
        });
      });

      /* Mobile: drawer open/close */
      if (toggleBtn && sidebar) {
        toggleBtn.addEventListener('click', function () {
          var opening = !sidebar.classList.contains('is-open');
          sidebar.classList.toggle('is-open', opening);
          scrim.classList.toggle('is-visible', opening);
          toggleBtn.setAttribute('aria-expanded', opening);
          toggleBtn.classList.toggle('is-active', opening);
        });
        scrim.addEventListener('click', closeSidebar);
      }
    }());

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
        window.scrollTo({
          top: Math.max(0, y),
          behavior: reduce ? 'auto' : 'smooth'
        });
        history.replaceState(null, '', href);
      });
    });

  });
})();
