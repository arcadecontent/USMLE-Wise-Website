/* ============================================================
   USMLE Wise — Design System docs
   Vanilla JS: scroll-spy, smooth nav, accordion, tab toggle
   ============================================================ */

(function () {
  'use strict';

  // Initialize Lucide icons
  if (window.lucide && typeof window.lucide.createIcons === 'function') {
    window.lucide.createIcons();
  }

  // ---------- 1. Scroll-spy: active sidebar link based on viewport ----------
  const links = document.querySelectorAll('.nav-link');
  const sections = Array.from(document.querySelectorAll('main .section, main .hero'));

  function setActive(id) {
    links.forEach((l) => {
      const isMatch = l.getAttribute('href') === '#' + id;
      l.classList.toggle('is-active', isMatch);
    });
  }

  if ('IntersectionObserver' in window && sections.length) {
    const io = new IntersectionObserver(
      (entries) => {
        // Pick the entry closest to the top that's intersecting
        const visible = entries
          .filter((e) => e.isIntersecting)
          .sort((a, b) => a.boundingClientRect.top - b.boundingClientRect.top);
        if (visible[0]) {
          const id = visible[0].target.id;
          if (id) setActive(id);
        }
      },
      { rootMargin: '-20% 0px -60% 0px', threshold: 0 }
    );
    sections.forEach((s) => io.observe(s));
  }

  // Mark first section active on load
  if (sections[0] && sections[0].id) setActive(sections[0].id);

  // ---------- 2. Smooth-scroll for sidebar links (older browsers) ----------
  links.forEach((link) => {
    link.addEventListener('click', (e) => {
      const href = link.getAttribute('href');
      if (!href || !href.startsWith('#')) return;
      const target = document.querySelector(href);
      if (!target) return;
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      history.replaceState(null, '', href);
    });
  });

  // ---------- 3. Accordion ----------
  document.querySelectorAll('.accordion__item').forEach((item) => {
    const head = item.querySelector('.accordion__head');
    if (!head) return;
    head.addEventListener('click', () => {
      // Close siblings within the same accordion
      const parent = item.parentElement;
      parent.querySelectorAll('.accordion__item').forEach((other) => {
        if (other !== item) other.classList.remove('is-open');
      });
      item.classList.toggle('is-open');
    });
  });

  // ---------- 4. Tab toggles (visual only) ----------
  document.querySelectorAll('.tabs').forEach((group) => {
    const btns = group.querySelectorAll('.tabs__btn');
    btns.forEach((b) => {
      b.addEventListener('click', () => {
        btns.forEach((x) => x.classList.remove('is-active'));
        b.classList.add('is-active');
      });
    });
  });

  // ---------- 5. Pagination toggles (visual only) ----------
  document.querySelectorAll('.pagination').forEach((p) => {
    const btns = p.querySelectorAll('.pagination__btn');
    btns.forEach((b) => {
      // Only number buttons toggle (skip ‹ ›)
      if (!/^\d+$/.test(b.textContent.trim())) return;
      b.addEventListener('click', () => {
        btns.forEach((x) => x.classList.remove('is-active'));
        b.classList.add('is-active');
      });
    });
  });

  // ---------- 6. Topnav link toggles (visual only) ----------
  document.querySelectorAll('.topnav__links, .lp__nav-links').forEach((g) => {
    g.querySelectorAll('a').forEach((a) => {
      a.addEventListener('click', (e) => {
        e.preventDefault();
        g.querySelectorAll('a').forEach((x) => x.classList.remove('is-active'));
        a.classList.add('is-active');
      });
    });
  });

  // ---------- 7. App side rail toggles (visual only) ----------
  document.querySelectorAll('.appside').forEach((g) => {
    g.querySelectorAll('.appside__item').forEach((a) => {
      a.addEventListener('click', (e) => {
        e.preventDefault();
        g.querySelectorAll('.appside__item').forEach((x) => x.classList.remove('is-active'));
        a.classList.add('is-active');
      });
    });
  });

  // ---------- 8. Auto-open the first accordion item on docs load ----------
  const firstAcc = document.querySelector('.accordion .accordion__item');
  if (firstAcc) firstAcc.classList.add('is-open');

  // Dark mode toggle is handled by inline onclick → window.uwToggleTheme()
  // defined in <head> of index.html. No JS hookup needed here.
})();
