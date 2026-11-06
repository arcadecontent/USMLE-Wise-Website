/* USMLE Wise Wiki: search over /wiki/search-index.json and TOC scroll-spy.
   No dependencies. Everything degrades gracefully: without JS the search form
   submits to a Google site search and the TOC is a plain anchor list. */
(function () {
  'use strict';

  var indexPromise = null;
  function loadIndex() {
    if (!indexPromise) {
      indexPromise = fetch('/wiki/search-index.json', { credentials: 'same-origin' })
        .then(function (r) { return r.ok ? r.json() : []; })
        .catch(function () { return []; });
    }
    return indexPromise;
  }

  function tokens(q) {
    return q.toLowerCase().split(/[^a-z0-9]+/).filter(Boolean);
  }

  function score(item, toks) {
    var title = item.t.toLowerCase();
    var keys = (item.k || '').toLowerCase();
    var desc = (item.d || '').toLowerCase();
    var total = 0;
    for (var i = 0; i < toks.length; i++) {
      var t = toks[i], hit = 0;
      if (title.indexOf(t) === 0) hit = 8;
      else if (title.indexOf(t) > -1) hit = 6;
      else if (keys.indexOf(t) > -1) hit = 4;
      else if (desc.indexOf(t) > -1) hit = 2;
      if (!hit) return 0; // every word must match somewhere
      total += hit;
    }
    return total;
  }

  function esc(s) {
    return String(s).replace(/[&<>"']/g, function (c) {
      return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c];
    });
  }

  function initSearch(form) {
    var input = form.querySelector('.wk-search__input');
    var box = form.querySelector('[data-wiki-results]');
    if (!input || !box) return;

    function render(items, q) {
      if (!q) { box.hidden = true; box.innerHTML = ''; return; }
      if (!items.length) {
        box.innerHTML = '<div class="wk-search__empty">No pages match "' + esc(q) + '" yet.</div>';
      } else {
        box.innerHTML = items.map(function (it) {
          return '<a class="wk-search__item" href="' + esc(it.u) + '"><b>' + esc(it.t) +
            '</b><small>' + esc(it.s) + '</small></a>';
        }).join('');
      }
      box.hidden = false;
    }

    function run() {
      var q = input.value.trim();
      var toks = tokens(q);
      if (!toks.length) { render([], ''); return; }
      loadIndex().then(function (idx) {
        var out = [];
        for (var i = 0; i < idx.length; i++) {
          var s = score(idx[i], toks);
          if (s) out.push({ s: s, it: idx[i] });
        }
        out.sort(function (a, b) { return b.s - a.s; });
        render(out.slice(0, 8).map(function (o) { return o.it; }), q);
      });
    }

    input.addEventListener('focus', loadIndex);
    input.addEventListener('input', run);
    input.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') { box.hidden = true; }
      if (e.key === 'ArrowDown') {
        var first = box.querySelector('a');
        if (first) { e.preventDefault(); first.focus(); }
      }
    });
    box.addEventListener('keydown', function (e) {
      var cur = document.activeElement;
      if (e.key === 'ArrowDown' && cur.nextElementSibling) { e.preventDefault(); cur.nextElementSibling.focus(); }
      if (e.key === 'ArrowUp') { e.preventDefault(); (cur.previousElementSibling || input).focus(); }
      if (e.key === 'Escape') { box.hidden = true; input.focus(); }
    });
    document.addEventListener('click', function (e) {
      if (!form.contains(e.target)) box.hidden = true;
    });
    // With JS on, Enter opens the best match instead of leaving for Google.
    form.addEventListener('submit', function (e) {
      var first = box.querySelector('a');
      if (first) { e.preventDefault(); window.location.href = first.getAttribute('href'); }
    });
  }

  function initToc() {
    var links = document.querySelectorAll('.wk-toc a[href^="#"]');
    if (!links.length || !('IntersectionObserver' in window)) return;
    var map = {};
    links.forEach(function (a) { map[a.getAttribute('href').slice(1)] = a; });
    var heads = Array.prototype.slice.call(document.querySelectorAll('.wk-prose h2[id], .wk-prose h3[id]'));
    var current = null;
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (en.isIntersecting) {
          if (current) current.classList.remove('is-active');
          current = map[en.target.id] || null;
          if (current) current.classList.add('is-active');
        }
      });
    }, { rootMargin: '-96px 0px -70% 0px', threshold: 0 });
    heads.forEach(function (h) { io.observe(h); });
  }

  function init() {
    document.querySelectorAll('[data-wiki-search]').forEach(initSearch);
    initToc();
    if (window.lucide && window.lucide.createIcons) window.lucide.createIcons();
  }

  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init);
  else init();
})();
