## Design Health Score (pre-fixes)

| # | Heuristic | Score | Key Issue |
|---|-----------|-------|-----------|
| 1 | Visibility of System Status | 3/4 | Sidebar ScrollSpy not wired (script.js not linked) |
| 2 | Match System / Real World | 3/4 | Medical content samples feel authentic |
| 3 | User Control and Freedom | 2/4 | No search across 26 sections; mobile nav broken |
| 4 | Consistency and Standards | 2/4 | CTA red = danger red; side-stripe callouts |
| 5 | Error Prevention | 2/4 | Error field used check icon (bug) |
| 6 | Recognition Rather Than Recall | 3/4 | Visual examples good; no when-NOT-to-use guidance |
| 7 | Flexibility and Efficiency | 2/4 | No search, no token copy-on-click |
| 8 | Aesthetic and Minimalist Design | 3/4 | Identical card grids; side-stripe callouts |
| 9 | Error Recovery | 2/4 | Error icon bug undermines trust in examples |
| 10 | Help and Documentation | 3/4 | Solid; missing contribution guidelines |
| **Total** | | **25/40** | **Functional foundation** |

## Anti-Patterns Verdict

Side-stripe borders (border-left: 3px) found in callout component and alert card variant. ink-400 (#9a9ca8) on white = 2.7:1, failing WCAG AA. CTA red (#e32124) and danger red shared same hex.

## Priority Issues Fixed

- [P0] Callout border-left: 3px → full border + tint
- [P1] Danger tokens added (--uw-danger-500: #b91c1c), error states updated
- [P1] ink-400 text contrast fixed across nav-link__num, demo__label, logo-frame__caption, shadow-tile__val, accordion toggle icon
- [P2] Personality identical card grid broken up with accent lead card
- [P2] Error form field icon changed from check to alert-circle
- [P2] script.js wired to index.html; lucide.createIcons() added
