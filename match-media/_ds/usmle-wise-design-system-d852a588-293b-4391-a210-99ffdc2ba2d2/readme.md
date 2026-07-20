# USMLE Wise — Design System

The source of truth for the USMLE Wise brand, interface, and product. This system lets design agents build well-branded screens, decks, and assets against the real USMLE Wise visual language.

---

## What is USMLE Wise?

USMLE Wise is a guided pathway that helps **international medical graduates (IMGs)** — and US MD/DO students — navigate the USMLE exam sequence and the residency **Match**: the long, ambiguous journey of becoming a practicing US physician. The brand exists to make that journey *knowable*.

**What it makes:**
- **USMLE Prep** — physician-led preparation for Step 1, Step 2 CK, Step 3 (QBank, video lessons, practice tests).
- **Match Coaching** — strategy, ERAS applications, interview prep, rank-list mentorship.
- **Pathway Guidance** — ECFMG certification, clinical experience (USCE), visas — the full US medical pathway in one place.
- **Mentorship** — 1:1 matching with US physician mentors, cohort study groups, an active student community.

**Products / surfaces in this system:**
- **Marketing site** — public landing/marketing pages → `ui_kits/marketing/`
- **Student app** — the logged-in web app (dashboard, QBank, mentors) → `ui_kits/student_app/`

### Sources
- **Uploaded reference build:** a complete documentation site (`uploads/index.html`, `uploads/styles.css`, `uploads/script.js`) authored as "USMLE Wise — Design System v1.2" (May 2026). This design system is a restructured, compiler-readable extraction of that build.
- **Brand assets:** `uploads/*.svg` (emblem + horizontal/vertical/dark logo lockups), copied into `assets/`.
- No external Figma or GitHub repo was provided. If one exists, store its link here for future reference.

---

## CONTENT FUNDAMENTALS — how USMLE Wise writes

**Vibe — "Calm confidence."** The brand voice is the senior physician sitting across the desk who has done this 100 times before: patient, prepared, and certain you'll get there. We never amplify anxiety.

**Voice attributes:**
- **Certain & competent** — we speak with the authority of physicians who have actually walked this path. No hedging on what matters; no arrogance about what doesn't.
- **Friendly & welcoming** — we greet students the way a good attending greets a new resident.
- **Clear & structured** — ambiguity becomes checklists, milestones, next steps.
- **Human & calm** — measured, encouraging, never urgent without reason.
- **Academic & precise** — when discussing content we are exact: sources cited, ranges given, edge cases noted.
- **Motivational & patient** — progress over pressure. A student who needed two attempts is not a failure — they are a physician who learned to persist.

**Person & address:** First person plural for the brand ("**We** know the process"), second person for the student ("**Your** mentor will help recalibrate"). The relationship is *we will walk through it together*.

**Casing:** Sentence case for headlines, UI, and buttons ("Start your USMLE plan", not "Start Your USMLE Plan"). UPPERCASE only for mono eyebrows/overlines and short labels, always letter-spaced. Step names keep their official casing: "Step 1", "Step 2 CK", "the Match", "ECFMG", "ERAS".

**Emoji:** **None.** Emoji read as hype and undercut the calm-clinical tone.

**Punctuation & numbers:** Em dashes for asides. Exact figures ("94% Match rate", "2,140 questions"), never vague hype. No exclamation stacking, no ALL-CAPS shouting.

**Do / Don't (verbatim brand examples):**
- ✅ *Do — "We know the process."* → "Step 1 is changing in 2027. Here's what stays the same and what your study plan should adjust — we'll walk through it together."
- ❌ *Don't — "We're disruptive."* → "Crush Step 1 with our AI-powered next-gen revolutionary platform 🚀 — students are LOVING it!!!"

**Audience:** Primary = the IMG (ages 23–32, often outside the US, balancing study with work/family/visa timelines, overwhelmed by ambiguity more than by content). Secondary = US MD/DO students (time-poor, score-anxious, evidence-driven). Influencers = physician mentors and family.

---

## VISUAL FOUNDATIONS

**The three-color anchor.** Everything is built on three colors: **USMLE Blue `#2C3386`** (primary — trust, stability, intelligence), **Wise Red `#E32124`** (accent — energy, action), and **white**. Every other color is a tint/shade of those or a calm neutral that gets out of the way.

- **60·30·10 rule:** ~60% neutral surfaces (white, paper `#FAFAF9`, ink-75) · ~30% USMLE Blue for structure and trust · ~10% Wise Red, exclusively for CTAs and energy moments.
- **Red is precious.** Never a large background, body color, or routine UI chrome. One red accent moment per screen — the primary CTA, a key statistic. In the product-preview panels Wise Red is deliberately held back so blue carries the structure.
- **Danger ≠ Wise Red.** CTAs use Wise Red `#E32124`; errors/destructive states use Danger `#B91C1C`. Never share a hex between these roles — it trains users to distrust the interface.

**Typography — a two-family system.**
- **Source Serif 4** (display serif, 400/600 + italic) for moments that should feel human, warm, earned: hero headlines, section titles, big numbers/KPIs, pull quotes. The italic is the signature ("Wise", "*US doctor*").
- **Geist** (sans, 300–700) for everything functional: UI, body, data, captions.
- **JetBrains Mono** for eyebrows/overlines, code, tokens, metadata — always letter-spaced and uppercased when used as a label.
- Display tracking is tight (−0.015em to −0.02em). Body line-height 1.55.

**Spacing & layout.** 4px base grid; eight named tokens (`--space-1`…`--space-24`). Section-level breathers are 64–96px. Content max-width ~1080px. Layouts are calm grids, not dense dashboards-for-the-sake-of-it.

**Corners & cards.** Radii: inputs/tags 4px (`--r-xs`), buttons/fields 8px (`--r-md`), cards/modals 12px (`--r-lg`), badges/avatars pill. Default card = white surface, 1px `--uw-border` (`#E6E6E2`), 12px radius, **no shadow at rest**. Variants: `elevated` (soft shadow, no border), `flat`, `accent` (USMLE Blue fill, white text). Hover cards lift `translateY(-2px)` and gain `--shadow-md`.

**Shadows.** Soft, low-contrast, layered (`--shadow-xs`…`--shadow-xl`). Two brand glows: `--shadow-blue` and `--shadow-red` appear only on their respective CTAs/surfaces on hover.

**Backgrounds.** Mostly clean paper (`#FAFAF9`) and white. Accent surfaces use solid USMLE Blue, often with a subtle radial dot texture (`radial-gradient(rgba(255,255,255,.12) 1px, transparent 1px)`, 16px grid). One soft radial blue wash behind heroes (`radial-gradient(...var(--uw-blue-50), transparent)`). **No** loud full-bleed photography, **no** purple gradients, **no** hand-drawn illustration. Glassmorphism (`backdrop-filter: blur`) appears only for cards floating on the blue panels and the sticky nav.

**Motion.** Restrained and quick. `--ease-out` `cubic-bezier(0.16,1,0.3,1)` for most transitions; durations `--dur-fast 140ms` / `--dur-med 240ms` / `--dur-slow 420ms`. Progress bars ease over 600ms. No bounces, no infinite decorative loops.

**States.**
- *Hover:* buttons darken one step (red-500→600, blue-500→600) and gain the brand glow; ghost/outline fill with `--uw-ink-75`; cards lift.
- *Press:* `translateY(1px)`.
- *Focus:* 2–3px ring in USMLE Blue (`--uw-blue-100` / `--uw-blue-300`); error focus uses Danger tints.

**Imagery vibe.** Avatars use brand-gradient initials (blue/red/green) with an optional green online dot. Course covers use diagonal brand gradients with the dot texture. Cool, clinical, professional — never warm-grainy or playful.

---

## ICONOGRAPHY

USMLE Wise uses **[Lucide](https://lucide.dev)** (MIT) as its single icon system — clean 2px stroke, 24×24, rounded caps/joins, `currentColor`. No filled icon sets, no emoji-as-icon, no Unicode glyph icons.

- **In the reference build** Lucide is loaded from CDN (`lucide@0.469.0`) and rendered via `<i data-lucide="…">` + `lucide.createIcons()`.
- **In this system** the icons used across the UI kits are inlined as lightweight React components in **`ui_kits/icons.js`** (`window.UWIcons`) — the exact Lucide path data, so there is no runtime CDN dependency and icons compose cleanly into React. Common names: `LayoutGrid`, `BookOpen`, `Target`, `Flame`, `User`, `MessageCircle`, `Calendar`, `Search`, `Bell`, `Settings`, `ArrowRight`, `Check`, `Star`, `Globe`, `Clock`, `Play`, `TrendingUp`, `Award`, `Stethoscope`, `GraduationCap`, `Quote`.
- **To add an icon:** copy its node data from lucide.dev into `icons.js` (or load Lucide from CDN for static HTML). Keep stroke 2, size 13–20 in UI.

Icons sit in small rounded "chips" in navigation (22px square, `--r-sm`), inline with labels (gap 4–6px), and as feature glyphs in blue-tinted 38px tiles.

### Logo & emblem
The **emblem** is a US physician (stethoscope, mask) inside a circle of the US flag in brand blue/red. The wordmark pairs geometric sans **USMLE** with editorial italic serif **Wise** — competence meeting wisdom. Assets in `assets/`:
- `Logo Horizontal.svg` — primary lockup. `Logo Horizontal Dark.svg` — for dark UI. `Logo Vertical.svg` — stacked/square. `emblem.svg` (= `USMLE Wise Emblem.svg`) — icon/favicon/app.
- Minimum clear space = height of the lowercase "e" in the wordmark. Reproduce in vector; never stretch, recolor, or rotate. On blue/red surfaces use the monochrome (white) emblem.

---

## File index (root manifest)

| Path | What |
|---|---|
| `styles.css` | **Entry point** — `@import`s only. Link this one file. |
| `tokens/colors.css` | Brand, neutral, semantic colors + aliases + dark mode. |
| `tokens/typography.css` | Font families, type scale, line-heights. |
| `tokens/spacing.css` | Spacing, radius, elevation, motion, layout. |
| `tokens/fonts.css` | Google Fonts `@import` (Geist, Source Serif 4, JetBrains Mono). |
| `tokens/base.css` | Element resets / global defaults. |
| `guidelines/*.html` | Foundation specimen cards (Colors, Type, Spacing, Brand). |
| `assets/*.svg` | Logos + emblem. |
| `components/actions/` | `Button`, `IconButton`. |
| `components/forms/` | `Input`, `Field`, `Checkbox`, `Switch`. |
| `components/display/` | `Card`, `Badge`, `Avatar`, `ProgressBar`. |
| `components/feedback/` | `Callout`, `Alert`, `Tabs`. |
| `ui_kits/icons.js` | Shared Lucide icon set (`window.UWIcons`). |
| `ui_kits/marketing/` | Marketing landing page UI kit. |
| `ui_kits/student_app/` | Student web-app UI kit (dashboard, QBank, mentors). |
| `SKILL.md` | Agent-skill entry for downloadable use. |

**Components** (read via `const { Button } = window.USMLEWiseDesignSystem_d852a5` after loading `_ds_bundle.js`): Button, IconButton, Input, Field, Checkbox, Switch, Card, Badge, Avatar, ProgressBar, Callout, Alert, Tabs.

---

## Using this system

1. Link the single entry stylesheet: `<link rel="stylesheet" href="styles.css">`.
2. For components, load the compiled bundle (`_ds_bundle.js`) and read from `window.USMLEWiseDesignSystem_d852a5`.
3. Style with the CSS custom properties (`var(--uw-blue-500)`, `var(--space-4)`, `var(--r-lg)`, …) — don't hard-code hexes.
4. Follow the 60·30·10 rule and keep Wise Red for the one key action per view.
