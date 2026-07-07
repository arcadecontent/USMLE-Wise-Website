# USMLE Wise — Product

> Marketing site + future product app for International Medical Graduates (IMGs) pursuing U.S. residency.
> Live: [usmlewise.com](https://usmlewise.com) · Repo: `arcadecontent/USMLE-Wise-Website`

---

## Register

**Brand:** USMLE Wise

**Domain:** usmlewise.com (Hostinger, Cloudflare CDN)

**Primary CTA:** [Book a Guidance Call](https://team.manikmadaan.com/guidance-call/book) — external booking via Manik Madaan team calendar

**Secondary CTAs:** Service-specific inquiry forms, WhatsApp/social links in footer

---

## Users

International Medical Graduates (IMGs) pursuing U.S. residency. They are trained physicians — often years into a demanding process — who feel overwhelmed navigating a system that was not built with them in mind.

**Where they are in the journey:**

| Stage | Needs |
|-------|-------|
| MS1 / pre-clinical | Step 1 prep, early research exposure, pathway clarity |
| Step 2 / clinical years | NBME-style coaching, rotations planning, CV building |
| Match applicant | ERAS, PS, LORs, program list, interview prep |
| Post-application | Signaling, thank-you letters, SOAP/scramble support |

**Emotional state on arrival:** Equal parts hopeful and exhausted. Highly educated but operating without a map.

**Future product users:** Same IMGs once they become active clients — progress tracking, mentor access, personalized roadmap (planned app, not yet built).

---

## Product Purpose

USMLE Wise helps IMGs move from confusion to matched residency through expert mentorship, a personalized roadmap, and end-to-end support across exams, rotations, ERAS applications, and interview prep.

**Why it exists:** The U.S. residency system is opaque and unforgiving. Most IMGs navigate it alone.

**Success metric:** An IMG feels confident they have a clear plan and a knowledgeable partner who has done this before.

---

## Brand Personality

Warm, precise, trustworthy. The voice of a senior attending who has been through the Match — respects your intelligence, tells you exactly what to do, genuinely wants you to succeed.

**Not:** A salesperson. Not a hospital. Not a SaaS tool.

### Anti-references

- **Overly corporate** — navy-and-gold consulting, stiff hierarchy, impersonal copy (McKinsey, not mentor)
- **Old-school medical** — white-and-teal, stock-photo doctors, dated hospital formality
- **Generic SaaS blue** — HubSpot/Intercom rounded-card feel, feature grids, tech-blue reflexes

### Design principles

1. **Earned authority** — Trust through specificity: real names, real Step scores, real match stories
2. **Clarity under pressure** — Reduce cognitive load; one clear next action per section
3. **The mentor's voice** — Guidance from someone who knows the path, not a pitch
4. **One continuous journey** — Marketing site and future app share one visual system
5. **Show, don't assure** — Real outcomes over vague adjectives

---

## Service Catalog

Four verticals. Each has an overview page plus service-specific landing pages.

### 1. Coaching (`coaching.html`)

USMLE exam preparation and mentorship.

| Page | Service | Format |
|------|---------|--------|
| `coaching-step1-crash-course.html` | Step 1 Crash Course | Recorded · 10-day |
| `coaching-step1-mastery.html` | Step 1 Mastery | 6-month · from basics |
| `coaching-step23-mastery.html` | NBME Style Coaching | Step 1 & Step 2 |
| `coaching-step1-review.html` | Step 1 Review | — |
| `coaching-tutoring.html` | 1:1 Tutoring | Done-with-you |

**Price range (from internal CSV):** $19 guidance call → $2,500 live coaching packages

### 2. Rotations (`rotations.html`)

U.S. clinical rotation placements for USCE and LORs.

| Page | Notes |
|------|-------|
| `clinical-rotations.html` | Browse/filter all placements |
| `rotation-*.html` (25 pages) | Individual hospital/program pages |

**Specialties covered:** Family medicine, pediatrics, psychiatry, surgery, internal medicine variants across NY, NJ, FL, TX, MD, WI, AR, etc.

**Price range:** ~$1,900–$4,500 per rotation (varies by program)

### 3. Research (`research.html`)

Academic profile building for residency applications.

| Page | Service | Format |
|------|---------|--------|
| `research-catalyst.html` | Research Catalyst | Flagship · 12-month |
| `research-original.html` | Original Research | Live · mentored |
| `research-review.html` | Review Paper & Abstract | Live · mentored |
| `research-masterclass.html` | Research Masterclass | Recorded · self-paced |
| `research-junior-scientist.html` | Junior Scientist Program | Live · mentored |

**Price range:** $19 masterclass → $3,500 catalyst program

### 4. Match (`match.html`)

End-to-end residency application support.

| Page | Service |
|------|---------|
| `match-ps3x.html` | Personal Statement (PS3X™) |
| `match-eras-cv.html` | ERAS CV Overhaul |
| `match-lor.html` | Letters of Recommendation editing |
| `match-interview.html` | Interview coaching |
| `match-loi.html` | Letter of Interest / Intent *(planned)* |
| `match-membership.html` | Match Membership DIY *(planned)* |
| `match-packages.html` | Done-for-you packages *(planned)* |

**Price range:** $150 LOR edits → $5,999 interview training packages

### Supporting pages

| Page | Purpose |
|------|---------|
| `index.html` | Homepage — full IMG roadmap positioning |
| `testimonials.html` | Social proof / success stories |
| `case-study-ahmed.html` | Deep-dive match story (Internal Medicine) |
| `qa.html` | FAQ |
| `policy.html` | Legal / privacy |

---

## Site Architecture

```
Static HTML site (no build step, no framework)
├── assets/usmle-design-system/   ← tokens, components, nav, mobile drawer
│   ├── styles.css                  ← design system (load on every page)
│   ├── assets/                     ← logos, emblem SVGs
│   └── index.html                  ← living style guide / component gallery
├── Page CSS (one per vertical)
│   ├── landing.css                 ← homepage-specific (lpx- prefix)
│   ├── match.css                   ← match pages (msp- prefix)
│   ├── coaching.css
│   ├── rotations.css
│   ├── research.css
│   ├── research-catalyst.css
│   ├── research-program.css
│   ├── research-junior-scientist.css
│   ├── testimonials.css
│   ├── case-study.css
│   └── qa.css
├── Page JS (scroll reveals, filters, accordions)
│   ├── landing.js, match.js, coaching.js, rotations.js, research.js, …
│   └── mobile-nav.js               ← hamburger + off-canvas drawer (all pages)
└── .github/workflows/deploy.yml    ← auto-deploy on push to main
```

**Tech stack:** Plain HTML/CSS/JS · Google Fonts (Geist, Source Serif 4, JetBrains Mono) · Lucide icons (CDN) · Hostinger hosting · Cloudflare CDN · GitHub Actions + `dploy` deploy tool

---

## Navigation Structure

Shared header on all pages (`msp-nav`):

```
Home
├── Coaching ▾
│   ├── Coaching Overview
│   ├── Step 1 Crash Course
│   ├── Step 1 Mastery
│   ├── NBME Style Coaching
│   └── 1:1 Tutoring
├── Rotations ▾
│   ├── Rotations Overview
│   └── Clinical Rotations (browse)
├── Research ▾
│   ├── Research Overview
│   ├── Research Catalyst
│   ├── Original Research
│   ├── Review Paper & Abstract
│   ├── Research Masterclass
│   └── Junior Scientist Program
├── Match ▾
│   ├── Match Overview
│   ├── LOR Editing
│   ├── ERAS CV
│   ├── Letter of Interest / Intent
│   ├── Match Membership
│   ├── Match Packages
│   └── Personal Statement (PS3X)
├── Stories
└── FAQ

[Book a Guidance Call]  ← primary CTA button
```

**Mobile (≤940px):** Desktop nav hidden; hamburger opens off-canvas drawer (injected by `mobile-nav.js`, styled in `styles.css`).

---

## Conversion Funnel

```
Awareness (SEO, social, referrals)
  → Homepage / vertical overview page
    → Service detail page
      → Book a Guidance Call (primary)
      → Footer social / WhatsApp (secondary)
```

**Key proof points on site:** Mentor credentials, Step score improvements, match outcomes, screenshot testimonials, case studies.

---

## Content & Copy Guidelines

- Address the reader as a physician peer, not a student customer
- Use specific numbers (scores, interview counts, specialty names) over superlatives
- Explain IMG-specific pain points (USCE gaps, visa, LOR sourcing, SOAP)
- Every service page: what it is → who it's for → what's included → price signal → CTA
- Avoid AI-generated-sounding filler; PS/LOR services explicitly market human-written work

---

## Accessibility & Inclusion

Best-effort WCAG 2.1 AA. Audience spans many languages and backgrounds.

- Clear reading level; explain U.S.-specific jargon (ERAS, NRMP, USCE, SOAP)
- Sufficient color contrast on all text (tokens designed for this)
- `prefers-reduced-motion` respected across all page CSS — preserve in future work
- Touch targets ≥44px on mobile nav drawer items

---

## Roadmap (Inferred)

| Status | Item |
|--------|------|
| Live | Marketing site, 48+ HTML pages, mobile nav |
| In nav, page TBD | `match-loi.html`, `match-membership.html`, `match-packages.html` |
| Planned | Client-facing product app (roadmap, mentor chat, progress tracking) |
| Planned | Unified nav component (currently duplicated across every HTML file) |

---

## Key Files for Product Changes

| Change type | Files to touch |
|-------------|----------------|
| New service page | Copy nearest sibling `.html`, its `.css` section, add to nav in all pages |
| Pricing update | Page HTML + `assets/Itemized Pricing of our services - Service Package.csv` |
| CTA link change | Search all HTML for `manikmadaan.com` |
| Nav item add/remove | Every `.html` file (no shared template yet) |
