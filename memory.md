# USMLE Wise — Project Memory

> Institutional knowledge for agents and developers. Update this file when you learn something that would save the next person an hour of debugging.

---

## Project Snapshot

| Field | Value |
|-------|-------|
| Repo | `github.com/arcadecontent/USMLE-Wise-Website` |
| Branch | `main` (auto-deploys on push) |
| Live URL | https://usmlewise.com |
| Hosting | Hostinger VPS, user `usmlewise` |
| Deploy path | `/home/usmlewise/htdocs/usmlewise.com` |
| CDN | Cloudflare (check cache when CSS/JS looks stale) |
| Stack | Static HTML/CSS/JS — no bundler, no framework, no npm |

---

## Deployment

### How it works

```
git push main
  → GitHub Actions (.github/workflows/deploy.yml)
    → SSH to Hostinger
      → cd /home/usmlewise/htdocs/usmlewise.com
      → dploy deploy main
      → post-deploy verification (styles.css must contain mob-nav-drawer)
```

`dploy` deploys into `releases/` and symlinks `current/` — do not edit files directly on the server outside this flow.

### Known deploy failure (Jul 2026) — RESOLVED

**Symptom:** Mobile CSS broken on production. Desktop sometimes showed stray nav block at page bottom.

**Root cause:** `mobile-nav.js` deployed but `assets/usmle-design-system/styles.css` did not. The old folder name `USMLE Wise Design System` (with spaces) caused `dploy` to skip the assets directory. JS injected unstyled drawer DOM; page CSS hid desktop nav at ≤940px → no usable navigation on mobile.

**Fix applied:**
1. Renamed `assets/USMLE Wise Design System/` → `assets/usmle-design-system/`
2. Updated all HTML `href`/`src` references
3. Added post-deploy grep check in `deploy.yml` for `mob-nav-drawer` in styles.css

**Verify after any deploy:**
```bash
curl -sI "https://usmlewise.com/assets/usmle-design-system/styles.css" | grep -i last-modified
# Should be recent; file size ~64 KB (not ~59 KB)

curl -sL "https://usmlewise.com/assets/usmle-design-system/styles.css" | grep -c mob-nav-drawer
# Should return 1+
```

### Deploy gotchas

- Purge Cloudflare cache if HTML updates but CSS appears old
- Root-level files (`.html`, `.js`, root `.css`) deploy reliably; always verify `assets/` subtree
- Never commit test artifacts after `</html>` — see "Auto Deploy Test" incident below
- Do not save HTML with UTF-8 BOM — live `index.html` had `EF BB BF` prefix (minor, but avoid)

---

## Incidents Log

### Auto Deploy Test garbage in index.html (Jul 5, 2026)

Test commits appended `<h1>Auto Deploy Test - …</h1>` after `</html>`, rendering visible junk at page bottom. Fixed in commit `a014c37`. **Lesson:** Never use production HTML for deploy pipeline testing.

### Partial deploy: JS without CSS (Jul 5–6, 2026)

`mobile-nav.js` (root) updated; `styles.css` (assets subfolder) stuck at Jul 4 timestamp. **Lesson:** Always verify asset subdirectory timestamps match root files after deploy.

---

## Codebase Conventions

### No templating engine

Navigation HTML is **copy-pasted across every `.html` file** (~48 pages). Adding a nav item means editing all of them. There is no SSI, no Jekyll, no Eleventy.

**Future improvement:** Extract nav to a build step or server-side include. Until then, use global search-replace carefully.

### CSS layering

1. `assets/usmle-design-system/styles.css` — always first
2. One page CSS file — vertical-specific
3. Exception: `index.html` loads both `landing.css` + `match.css` (legacy; homepage uses `msp-nav` not `lpx-nav`)

### Class prefix map

| Prefix | File | Notes |
|--------|------|-------|
| `msp-` | `match.css` (+ copied to coaching, rotations, research, qa, testimonials) | Shared service page layout |
| `lpx-` | `landing.css` | Homepage-only sections |
| `rp-` | `research-program.css` | Research product pages |
| `rc-` | `research-catalyst.css` | Catalyst-specific |
| `jsp-` | `research-junior-scientist.css` | Junior scientist page |
| `mob-nav-` | `styles.css` | Mobile drawer (do not move to page CSS) |

### JavaScript

| File | Purpose |
|------|---------|
| `mobile-nav.js` | Hamburger + off-canvas drawer; required on every page |
| `landing.js` | Homepage scroll reveals, sticky nav |
| `match.js` | Match page interactions |
| `rotations.js` | Rotation filters, price sliders |
| `research.js` | Research page accordions/reveals |
| Page `*.js` | Loaded per vertical; all use `defer` |

### External dependencies (CDN)

- Google Fonts: Geist, Source Serif 4, JetBrains Mono
- Lucide icons: `unpkg.com/lucide@0.469.0`
- Booking CTA: `team.manikmadaan.com/guidance-call/book`

---

## CSS Debugging Checklist

When layout breaks on mobile or desktop:

1. **Check live `styles.css` size** — must include mobile nav block (~64 KB)
2. **Confirm `mobile-nav.js` loads** — view source, check Network tab
3. **Inspect injected DOM** — look for `.mob-nav-drawer` at end of `<body>`; if unstyled, it's a deploy issue
4. **Check 940px breakpoint** — desktop nav hidden + burger must appear together
5. **Look for duplicate CSS** — `index.html` loads two page stylesheets
6. **Check horizontal overflow** — tables with `min-width: 680px` inside `.overflow-x: auto` are intentional
7. **Cloudflare cache** — hard refresh or purge if timestamps look stale

---

## File Locations

| What | Where |
|------|-------|
| Design tokens + components | `assets/usmle-design-system/styles.css` |
| Component gallery | `assets/usmle-design-system/index.html` |
| Pricing source data | `assets/Itemized Pricing of our services - Service Package.csv` |
| Deploy workflow | `.github/workflows/deploy.yml` |
| Product definition | `product.md` |
| Design spec | `design.md` |
| Brand principles (original) | `PRODUCT.md` |

---

## Pages Not Yet Built

Referenced in nav but no HTML file exists yet:

- `match-loi.html` — Letter of Interest / Intent
- `match-membership.html` — Match Membership DIY
- `match-packages.html` — Done-for-you packages

Links to these will 404 until pages are created.

---

## Git Conventions

- Commit messages are short and informal (`mobile menu`, `glomp`, `fixing garbage "Auto Deploy Test"`)
- `main` is the only deploy branch
- No pre-commit hooks observed
- Do not force-push `main`

---

## Agent Instructions

When working on this repo:

1. Read `product.md` for what the site sells and who it serves
2. Read `design.md` before changing any CSS or adding pages
3. Check `memory.md` (this file) before debugging deploy or mobile issues
4. After CSS changes to `styles.css`, verify deploy includes `assets/usmle-design-system/`
5. Minimize scope — no framework migrations unless explicitly requested
6. Match existing `msp-`/`lpx-` patterns; don't introduce new abstractions for one-off needs
7. If editing nav, grep all `.html` files — it's duplicated everywhere

---

## Open Questions

- [ ] Should `PRODUCT.md` be merged into `product.md` and deleted? (Both exist; content overlaps)
- [ ] Extract shared nav into a build script or PHP include?
- [ ] Add visual regression tests for 375px / 1280px breakpoints?
- [ ] Build missing match pages (`match-loi`, `match-membership`, `match-packages`)?

---

*Last updated: Jul 6, 2026 — after mobile CSS deploy investigation and assets folder rename.*
