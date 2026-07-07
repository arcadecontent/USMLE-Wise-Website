#!/usr/bin/env python3
"""Restore HTML-era PHP filenames and URL slugs."""

from __future__ import annotations

import shutil
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]

FILE_RENAMES: dict[str, str] = {
    "coaching-step-1-crash-course.php": "coaching-step1-crash-course.php",
    "coaching-step-1-mastery.php": "coaching-step1-mastery.php",
    "coaching-step-1-review.php": "coaching-step1-review.php",
    "coaching-nbme-style-coaching.php": "coaching-step23-mastery.php",
    "match-lor-editing.php": "match-lor.php",
    "match-personal-statement.php": "match-ps3x.php",
    "match-interview-prep.php": "match-interview.php",
    "research-original-research.php": "research-original.php",
    "research-review-paper.php": "research-review.php",
    "faq.php": "qa.php",
    "privacy-policy.php": "policy.php",
}

URL_MAP: dict[str, str] = {
    "/coaching-step-1-crash-course": "/coaching-step1-crash-course",
    "/coaching-step-1-mastery": "/coaching-step1-mastery",
    "/coaching-step-1-review": "/coaching-step1-review",
    "/coaching-nbme-style-coaching": "/coaching-step23-mastery",
    "/match-lor-editing": "/match-lor",
    "/match-personal-statement": "/match-ps3x",
    "/match-interview-prep": "/match-interview",
    "/research-original-research": "/research-original",
    "/research-review-paper": "/research-review",
    "/faq": "/qa",
    "/privacy-policy": "/policy",
    "https://usmlewise.com/faq": "https://usmlewise.com/qa",
    "https://usmlewise.com/privacy-policy": "https://usmlewise.com/policy",
}

HTACCESS = """RewriteEngine On
Options -MultiViews
DirectoryIndex index.php

# --- 1. 301 redirects: legacy .html URLs -> extensionless PHP routes ---
RewriteRule ^index\\.html$ / [R=301,L]
RewriteRule ^coaching\\.html$ /coaching [R=301,L]
RewriteRule ^coaching-step1-crash-course\\.html$ /coaching-step1-crash-course [R=301,L]
RewriteRule ^coaching-step1-mastery\\.html$ /coaching-step1-mastery [R=301,L]
RewriteRule ^coaching-step1-review\\.html$ /coaching-step1-review [R=301,L]
RewriteRule ^coaching-step23-mastery\\.html$ /coaching-step23-mastery [R=301,L]
RewriteRule ^coaching-tutoring\\.html$ /coaching-tutoring [R=301,L]
RewriteRule ^match\\.html$ /match [R=301,L]
RewriteRule ^match-lor\\.html$ /match-lor [R=301,L]
RewriteRule ^match-eras-cv\\.html$ /match-eras-cv [R=301,L]
RewriteRule ^match-ps3x\\.html$ /match-ps3x [R=301,L]
RewriteRule ^match-interview\\.html$ /match-interview [R=301,L]
RewriteRule ^research\\.html$ /research [R=301,L]
RewriteRule ^research-catalyst\\.html$ /research-catalyst [R=301,L]
RewriteRule ^research-original\\.html$ /research-original [R=301,L]
RewriteRule ^research-review\\.html$ /research-review [R=301,L]
RewriteRule ^research-masterclass\\.html$ /research-masterclass [R=301,L]
RewriteRule ^research-junior-scientist\\.html$ /research-junior-scientist [R=301,L]
RewriteRule ^rotations\\.html$ /rotations [R=301,L]
RewriteRule ^clinical-rotations\\.html$ /clinical-rotations [R=301,L]
RewriteRule ^rotation-(.+)\\.html$ /rotation-$1 [R=301,L]
RewriteRule ^testimonials\\.html$ /testimonials [R=301,L]
RewriteRule ^qa\\.html$ /qa [R=301,L]
RewriteRule ^policy\\.html$ /policy [R=301,L]
RewriteRule ^case-study-ahmed\\.html$ /case-study-ahmed [R=301,L]

# --- 2. Serve extensionless URLs from matching .php file ---
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME}\\.php -f
RewriteRule ^(.+?)/?$ $1.php [L]

# --- 3. If someone requests the raw .php, 301 to the clean URL ---
RewriteCond %{THE_REQUEST} \\s/(.+?)\\.php[\\s?] [NC]
RewriteRule ^ /%1 [R=301,L]

# --- 4. Redirect newer nested/alternate URLs to HTML-era slugs ---
RewriteRule ^coaching/step-1-crash-course/?$ /coaching-step1-crash-course [R=301,L]
RewriteRule ^coaching-step-1-crash-course/?$ /coaching-step1-crash-course [R=301,L]
RewriteRule ^coaching/step-1-mastery/?$ /coaching-step1-mastery [R=301,L]
RewriteRule ^coaching-step-1-mastery/?$ /coaching-step1-mastery [R=301,L]
RewriteRule ^coaching/step-1-review/?$ /coaching-step1-review [R=301,L]
RewriteRule ^coaching-step-1-review/?$ /coaching-step1-review [R=301,L]
RewriteRule ^coaching/nbme-style-coaching/?$ /coaching-step23-mastery [R=301,L]
RewriteRule ^coaching-nbme-style-coaching/?$ /coaching-step23-mastery [R=301,L]
RewriteRule ^coaching/tutoring/?$ /coaching-tutoring [R=301,L]
RewriteRule ^match/lor-editing/?$ /match-lor [R=301,L]
RewriteRule ^match-lor-editing/?$ /match-lor [R=301,L]
RewriteRule ^match/personal-statement/?$ /match-ps3x [R=301,L]
RewriteRule ^match-personal-statement/?$ /match-ps3x [R=301,L]
RewriteRule ^match/interview-prep/?$ /match-interview [R=301,L]
RewriteRule ^match-interview-prep/?$ /match-interview [R=301,L]
RewriteRule ^match/eras-cv/?$ /match-eras-cv [R=301,L]
RewriteRule ^research/catalyst/?$ /research-catalyst [R=301,L]
RewriteRule ^research/original-research/?$ /research-original [R=301,L]
RewriteRule ^research-original-research/?$ /research-original [R=301,L]
RewriteRule ^research/review-paper/?$ /research-review [R=301,L]
RewriteRule ^research-review-paper/?$ /research-review [R=301,L]
RewriteRule ^research/masterclass/?$ /research-masterclass [R=301,L]
RewriteRule ^research/junior-scientist/?$ /research-junior-scientist [R=301,L]
RewriteRule ^rotations/browse/?$ /clinical-rotations [R=301,L]
RewriteRule ^rotations/(.+?)/?$ /rotation-$1 [R=301,L]
RewriteRule ^case-studies/ahmed/?$ /case-study-ahmed [R=301,L]
RewriteRule ^faq/?$ /qa [R=301,L]
RewriteRule ^privacy-policy/?$ /policy [R=301,L]

ErrorDocument 404 /404.php
"""


def apply_replacements(content: str) -> str:
    updated = content
    for old, new in sorted(URL_MAP.items(), key=lambda item: len(item[0]), reverse=True):
        updated = updated.replace(old, new)
    return updated


def main() -> None:
    for old, new in FILE_RENAMES.items():
        src = ROOT / old
        dst = ROOT / new
        if src.is_file():
            if dst.exists():
                dst.unlink()
            shutil.move(str(src), str(dst))

    changed: list[Path] = []
    for pattern in ("*.php", "*.xml", "*.md"):
        for path in ROOT.rglob(pattern):
            if "tools/" in path.parts:
                continue
            text = path.read_text(encoding="utf-8", errors="replace")
            updated = apply_replacements(text)
            if updated != text:
                path.write_text(updated, encoding="utf-8")
                changed.append(path)

    (ROOT / ".htaccess").write_text(HTACCESS, encoding="utf-8")
    print(f"Renamed {len(FILE_RENAMES)} page file(s) to HTML-era names")
    print(f"Updated {len(changed)} reference file(s)")


if __name__ == "__main__":
    main()
