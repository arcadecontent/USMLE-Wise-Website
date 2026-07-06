# USMLE Wise — Design System

> Visual language, tokens, components, and CSS architecture for usmlewise.com.
> Living reference: `assets/usmle-design-system/index.html`

---

## Identity

| Element | Value |
|---------|-------|
| Primary blue | `#2C3386` (`--uw-blue-500`) |
| Accent red | `#E32124` (`--uw-red-500`) — CTAs, urgency, action |
| Background | `#FAFAF9` (`--uw-bg`) — warm paper |
| Display font | Source Serif 4 — headlines, editorial feel |
| Sans font | Geist — UI, body, nav |
| Mono font | JetBrains Mono — eyebrows, metadata, labels |

**Tone:** Editorial medical mentorship. Serif headlines + clean sans body. Not corporate, not clinical-white.

---

## File Architecture

Every page loads in this order:

```html
<link rel="stylesheet" href="assets/usmle-design-system/styles.css" />
<link rel="stylesheet" href="{page}.css" />   <!-- optional second sheet -->
<script src="mobile-nav.js" defer></script>   <!-- all pages -->
```

| Layer | File | Responsibility |
|-------|------|----------------|
| Foundation | `assets/usmle-design-system/styles.css` | Tokens, reset, buttons, cards, nav dropdown, mobile drawer, doc-site components |
| Page | `landing.css`, `match.css`, etc. | Page layout, sections, vertical-specific components |
| Behavior | `mobile-nav.js`, page `*.js` | Drawer injection, scroll reveals, filters, accordions |

**Rule:** Use design tokens (`var(--uw-*)`) in page CSS. Never hardcode hex in page stylesheets.

**Rule:** Shared components (buttons, nav, badges) live in `styles.css`. Page-specific sections use prefixed class names.

---

## CSS Class Prefixes

| Prefix | Scope | Body class |
|--------|-------|------------|
| *(none)* | Design system primitives | — |
| `msp-` | Match / shared service pages | `class="msp"` |
| `lpx-` | Landing page (homepage) | `class="lpx"` |
| `rp-` | Research program pages | — |
| `rc-` | Research Catalyst page | — |
| `jsp-` | Junior Scientist Program | — |
| `tsm-` | Testimonials | — |
| `mob-nav-` | Mobile drawer (in `styles.css`) | — |

**Note:** `index.html` uses `lpx` body class but `msp-nav` header classes and loads both `landing.css` + `match.css`. Prefer `msp-` nav everywhere; `lpx-nav` rules in `landing.css` are legacy/unused on homepage.

---

## Design Tokens

All defined in `:root` inside `styles.css`. Dark mode overrides via `[data-theme="dark"]`.

### Color

```
Blue scale:  --uw-blue-50 … --uw-blue-900   (primary brand)
Red scale:   --uw-red-50 … --uw-red-800      (accent / CTA)
Ink scale:   --uw-ink-50 … --uw-ink-900     (neutral text/surfaces)
Semantic:    --uw-success-*, --uw-warning-*, --uw-info-*, --uw-danger-*
Surfaces:    --uw-bg, --uw-surface, --uw-surface-sunk, --uw-border
```

**Key pairs:**
- Body text: `--uw-ink-800` on `--uw-bg`
- Muted text: `--uw-ink-500`, `--uw-ink-600`
- Hover backgrounds: `--uw-ink-75`
- Links: `--uw-blue-600` → hover `--uw-blue-500`
- Primary button: `--uw-red-500` background

### Typography

```
--font-sans     Geist           UI, body, buttons
--font-display  Source Serif 4  h1, h2, editorial headlines
--font-mono     JetBrains Mono  eyebrows, badges, metadata

Scale: --fs-xs (12px) → --fs-6xl (84px), modular ~1.25
Line heights: --lh-tight, --lh-snug, --lh-base, --lh-loose
```

**Headline pattern:**
```css
.msp-h1 {
  font-family: var(--font-display);
  font-weight: 400;
  font-size: clamp(36px, 5vw, 62px);
  line-height: 1.07;
  letter-spacing: -0.025em;
}
.msp-h1 em { font-style: italic; color: var(--uw-blue-500); }
```

**Eyebrow / kicker pattern:**
```css
.msp-eyebrow {
  font-family: var(--font-mono);
  font-size: 11px;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: var(--uw-blue-600);
}
```

### Spacing

4px base grid: `--space-1` (4px) through `--space-24` (96px).

Section padding: `clamp(64px, 9vw, 140px)` (vertical rhythm scales with viewport).

### Radius

`--r-xs` (4px) → `--r-2xl` (24px), `--r-pill` (999px).

Cards and panels: `--r-xl` or `--r-2xl`. Buttons: `--r-sm` or `--r-md`.

### Elevation

`--shadow-xs` → `--shadow-xl`, plus `--shadow-blue` and `--shadow-red` for branded CTAs.

### Motion

```
--ease-out:    cubic-bezier(0.16, 1, 0.3, 1)
--dur-fast:    140ms
--dur-med:     240ms
--dur-slow:    420ms
```

Always gate animations:
```css
@media (prefers-reduced-motion: reduce) {
  *, *::before, *::after {
    animation-duration: 0.01ms !important;
    transition-duration: 0.01ms !important;
  }
}
```

### Layout

```
--sidebar-w:    268px    (design system doc site only)
--content-max:  1080px   (product reading column)
Page wrap:      max-width 1180px, padding-inline clamp(20px, 5vw, 56px)
```

---

## Breakpoints

Content-driven, not device-specific. Used consistently across page CSS:

| Token | Width | Behavior |
|-------|-------|----------|
| `xs` | 0 | Single column, full-width CTAs |
| `sm` | 480–560px | Nav CTA hidden, tighter grids |
| `md` | 640–720px | 1-column grids, float notes hidden |
| `tablet` | 768–820px | Hero stacks, 2-col → 1-col |
| `nav` | **940px** | Desktop nav hidden, hamburger shown |
| `lg` | 960–1024px | Full multi-column layouts |
| `xl` | 1200px+ | Marketing canvas, hover states |

**Critical breakpoint: 940px** — desktop nav (`msp-nav__links`) hides; mobile burger (`msp-nav__burger`) shows. Both rules must stay in sync across `styles.css` and page CSS files.

---

## Components

### Buttons (`styles.css`)

```html
<a class="btn btn--primary" href="…">Book a Guidance Call</a>
<a class="btn btn--secondary" href="…">Learn more</a>
<a class="btn btn--outline" href="…">…</a>
<a class="btn btn--ghost" href="…">…</a>
```

- **Primary:** red fill (`--uw-red-500`), white text — main conversion action
- **Secondary:** blue fill — secondary actions
- **Outline / Ghost:** bordered or transparent — tertiary

### Navigation

**Desktop header** (sticky, blur on scroll via `.msp-nav.is-stuck`):

```html
<header class="msp-nav" id="mspNav">
  <div class="msp-wrap msp-nav__inner">
    <a class="msp-brand" href="index.html">…</a>
    <nav class="msp-nav__links">…</nav>
    <a class="btn btn--primary msp-nav__cta" href="…">Book a Guidance Call</a>
  </div>
</header>
```

**Dropdown items:**
```html
<div class="msp-nav__item msp-nav__item--has-dd">
  <a href="…">Label <i data-lucide="chevron-down" class="msp-nav__dd-caret"></i></a>
  <div class="msp-nav__dropdown">
    <a href="…" class="msp-nav__dd-link">
      <span class="msp-nav__dd-name">Service Name</span>
      <span class="msp-nav__dd-meta">Format · duration</span>
    </a>
  </div>
</div>
```

Dropdowns open on `:hover` and `:focus-within`. Do not rely on hover alone for critical functionality.

### Mobile Navigation

Injected by `mobile-nav.js` at runtime. CSS in `styles.css` (lines ~1819–2000):

| Class | Role |
|-------|------|
| `.msp-nav__burger` | Hamburger button (hidden >940px) |
| `.mob-nav-overlay` | Dimmed backdrop |
| `.mob-nav-drawer` | Off-canvas panel (slides from right) |
| `.mob-nav-link` | Top-level drawer link |
| `.mob-nav-group` | Expandable dropdown section |
| `.mob-nav-group__item` | Nested service link |

**Dependency:** `mobile-nav.js` and mobile nav CSS in `styles.css` must deploy together. JS without CSS breaks layout on all viewports.

### Cards, badges, accordions

Defined in `styles.css`. See `assets/usmle-design-system/index.html` for full component gallery including:
- `.card`, `.badge`, `.accordion`, `.callout`
- `.mentor`, `.course`, `.tabs`, `.pagination`
- Form inputs, alerts, tables

### Icons

[Lucide](https://lucide.dev) via CDN. Initialize after DOM ready:

```html
<i data-lucide="chevron-down" width="12" height="12"></i>
<script src="https://unpkg.com/lucide@0.469.0/dist/umd/lucide.min.js" defer></script>
<!-- in page JS: lucide.createIcons(); -->
```

---

## Page Layout Patterns

### Service page template (`msp-` pages)

```
[Sticky nav]
[Hero — h1 + lede + CTA row + optional image frame]
[Metrics bar — stat counters]
[Problem / why section]
[How it works — numbered steps]
[Mentors / team strip]
[Pricing tiers or packages]
[FAQ accordion]
[Final CTA band]
[Footer — brand col + link columns + social + copyright]
```

### Homepage (`index.html`)

Uses `msp-hero`, `lpx-` section classes from `landing.css` for homepage-specific blocks (services grid, comparison table, case studies).

### Rotation detail pages

`rotations.css` + hospital-specific content blocks. Filter/browse logic in `rotations.js` on `clinical-rotations.html`.

---

## Grid System

12-column responsive grid (documented in design system index):

| Breakpoint | Min width | Columns | Gutter | Margin |
|------------|-----------|---------|--------|--------|
| xs | 0 | 4 | 12px | 16px |
| sm | 640px | 8 | 16px | 24px |
| md | 900px | 12 | 16px | 32px |
| lg | 1200px | 12 | 24px | 48px |
| xl | 1440px | 12 | 24px | auto |

Marketing pages use full 1180px canvas. Use `clamp()` for fluid sizing without extra breakpoints.

---

## Responsive Rules

1. **Mobile-first values, `max-width` overrides** — current convention in page CSS
2. **No horizontal overflow** — wrap wide tables in `.overflow-x: auto` containers (see `.jsp-compare`)
3. **Hide decorative elements on small screens** — e.g. `.msp-float-note { display: none }` at 640px
4. **Full-width CTAs on mobile** — buttons stretch in drawer footer and hero CTA rows
5. **Touch targets** — mobile nav links use 14px vertical padding minimum; increase for coarse pointers if needed

---

## Assets

| Asset | Path |
|-------|------|
| Logo (horizontal) | `assets/usmle-design-system/assets/logo-horizontal.svg` |
| Logo (horizontal dark) | `assets/usmle-design-system/assets/logo-horizontal-dark.svg` |
| Logo (vertical) | `assets/usmle-design-system/assets/logo-vertical.svg` |
| Emblem / favicon | `assets/usmle-design-system/assets/emblem.svg` |

**Path convention:** `assets/usmle-design-system/` — no spaces (renamed from `USMLE Wise Design System` to fix deploy issues).

---

## Do / Don't

| Do | Don't |
|----|-------|
| Use `var(--uw-*)` tokens | Hardcode `#2C3386` in page CSS |
| Add shared components to `styles.css` | Duplicate button/nav styles in page CSS |
| Match existing `msp-` / `lpx-` naming | Invent new prefix per page |
| Test at 375px, 768px, 1280px | Assume desktop-only hover works on tablets |
| Keep `mobile-nav.js` + nav CSS in sync | Deploy JS without matching `styles.css` |
| Use `clamp()` for fluid type/spacing | Fixed `px` font sizes without responsive fallback |

---

## Adding a New Page — Design Checklist

- [ ] Load `styles.css` + appropriate page CSS
- [ ] Include `mobile-nav.js`
- [ ] Use `msp-nav` header markup (copy from `match.html`)
- [ ] Set body class (`msp`, `lpx`, etc.)
- [ ] Use `.msp-wrap` for content width containment
- [ ] Headlines: Source Serif 4, `clamp()` sizing
- [ ] Primary CTA: `btn btn--primary`
- [ ] Add `prefers-reduced-motion` block if page has animations
- [ ] Verify at ≤940px (mobile nav) and ≥1280px (desktop dropdowns)
