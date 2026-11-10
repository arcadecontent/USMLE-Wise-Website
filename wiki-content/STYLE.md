# Wiki style guide and publishing checklist

This file is for authors and reviewers. It is not published on the site.

## File format

One Markdown file per article: `wiki-content/<section>/<slug>.md`. The folder is the section; the filename is the URL slug. Sections are registered in `data/wiki.php`.

```
---
title: USMLE Step 1: The Complete Guide for IMGs
description: One sentence, 70 to 160 characters. Shown in search results and as the page intro.
status: draft                  # draft | published
updated: 2026-11-06            # last time the CONTENT changed
reviewed_by: manik-madaan      # slug from data/team.php; required to publish
reviewed_on: 2026-11-06        # required to publish
order: 1                       # optional: position within the section
group: Core guides             # optional: heading to group under on the section page
keywords: [step 1, usmle, pass fail]
service: step-1-crash-course      # optional call to action, see usmlewise_wiki_services()
legal: true                    # optional: show the "not legal advice" note (automatic in /visas)
tool: timeline                 # optional: embed an interactive tool (partials/wiki-tool-<name>.php + js/wiki-tool-<name>.js)
related: [step-2-ck, application/eras-timeline]   # same-section slug or section/slug
key_facts:
  - Short, scannable facts shown in a box at the top.
sources:
  - USMLE Bulletin of Information | https://www.usmle.org/bulletin-information
faq:
  - q: A question people actually ask?
    a: A short, direct answer.
---
```

Do not start a `key_facts` or `sources` line with a lowercase word followed by a colon (it would be read as a field name).

## Special syntax

- `{{fact:step_exam_fee}}` inserts a value from `data/wiki-facts.php`. **Every fee, date, score cutoff and attempt limit must be a fact, never typed into the prose.** Change it once, every page updates.
- `[[eras]]` or `[[eras|the ERAS application]]` links to a glossary page and shows its definition on hover.
- Callouts: start a blockquote with `[!NOTE]`, `[!TIP]`, `[!IMG TIP]`, `[!WARNING]`, `[!CHANGED]` (recent policy changes) or `[!KEY]`.
- Internal links use full paths: `[Step 1 guide](/wiki/exams/step-1)`.

## Voice and structure

- Write for an international medical graduate who is smart, busy and probably anxious. Plain English. Short paragraphs.
- Answer the question in the first two sentences. Detail comes after.
- Use tables for comparisons. Use numbered lists for sequences.
- Say what is different for IMGs. If nothing is, say so briefly.
- Distinguish rule (what the official body requires) from practice (what usually works) from opinion (what we think). Label opinion.
- No guarantees about outcomes. Never promise a match, a score or a visa.
- **Never use em dashes.** Use a colon, comma or parentheses. The checker rejects them.
- Spell out acronyms on first use, or link them with `[[term]]`.
- At most one service call to action per page, and only where it genuinely fits.
- Aim for 900+ words for a guide, 100 to 300 for a glossary entry.

## Sourcing rules

1. Primary sources first: USMLE, NBME, ECFMG/Intealth, NRMP, AAMC/ERAS, ACGME, FSMB, US State Department, USCIS, state medical boards.
2. Every number, date, fee and policy claim must be traceable to a source listed on the page.
3. Opinion and experience (forums, social media) may inform advice but are never cited as the source of a rule.
4. If you cannot verify a figure, leave the fact's `value` empty. The page then says "check the current figure" and links the source. That is better than a wrong number.

## Review and publish checklist

1. Run `php tools/wiki-check.php`. Fix every error.
2. Reviewer opens each source link and confirms every claim against it.
3. Reviewer confirms each fact used in `data/wiki-facts.php`, sets `verified => true` and fills `checked_on`.
4. Set `status: published`, `reviewed_by`, `reviewed_on`, and update `updated`.
5. Merge. The page goes live on deploy and appears in the sitemap and search.

## Freshness

Each section has a review interval (visas 90 days, exams/ECFMG/application/interviews 180, the rest 365). Run `php tools/wiki-stale.php` to see what is due. When a rule changes, update the page, add a `[!CHANGED]` callout with the month, and bump `updated` and `reviewed_on`.
