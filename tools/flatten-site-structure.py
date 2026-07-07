#!/usr/bin/env python3
"""Move pages to site root and hyphenate spaces in asset paths only."""

from __future__ import annotations

import re
import shutil
import unicodedata
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]

PAGE_MOVES: dict[str, str] = {
    "coaching/index.php": "coaching.php",
    "coaching/step-1-crash-course.php": "coaching-step-1-crash-course.php",
    "coaching/step-1-mastery.php": "coaching-step-1-mastery.php",
    "coaching/step-1-review.php": "coaching-step-1-review.php",
    "coaching/nbme-style-coaching.php": "coaching-nbme-style-coaching.php",
    "coaching/tutoring.php": "coaching-tutoring.php",
    "match/index.php": "match.php",
    "match/lor-editing.php": "match-lor-editing.php",
    "match/eras-cv.php": "match-eras-cv.php",
    "match/personal-statement.php": "match-personal-statement.php",
    "match/interview-prep.php": "match-interview-prep.php",
    "research/index.php": "research.php",
    "research/catalyst.php": "research-catalyst.php",
    "research/original-research.php": "research-original-research.php",
    "research/review-paper.php": "research-review-paper.php",
    "research/masterclass.php": "research-masterclass.php",
    "research/junior-scientist.php": "research-junior-scientist.php",
    "rotations/index.php": "rotations.php",
    "rotations/browse.php": "clinical-rotations.php",
    "testimonials/index.php": "testimonials.php",
    "faq/index.php": "faq.php",
    "privacy-policy/index.php": "privacy-policy.php",
    "case-studies/ahmed.php": "case-study-ahmed.php",
}

URL_MAP: dict[str, str] = {
    "/coaching/step-1-crash-course": "/coaching-step-1-crash-course",
    "/coaching/step-1-mastery": "/coaching-step-1-mastery",
    "/coaching/step-1-review": "/coaching-step-1-review",
    "/coaching/nbme-style-coaching": "/coaching-nbme-style-coaching",
    "/coaching/tutoring": "/coaching-tutoring",
    "/match/lor-editing": "/match-lor-editing",
    "/match/eras-cv": "/match-eras-cv",
    "/match/personal-statement": "/match-personal-statement",
    "/match/interview-prep": "/match-interview-prep",
    "/research/catalyst": "/research-catalyst",
    "/research/original-research": "/research-original-research",
    "/research/review-paper": "/research-review-paper",
    "/research/masterclass": "/research-masterclass",
    "/research/junior-scientist": "/research-junior-scientist",
    "/rotations/browse": "/clinical-rotations",
    "/case-studies/ahmed": "/case-study-ahmed",
}

TEXT_GLOBS = ("*.php", "*.css", "*.js", "*.xml", ".htaccess")


def hyphenate(name: str) -> str:
    name = unicodedata.normalize("NFKD", name)
    name = name.replace("\u202f", " ").replace("\u00a0", " ")
    return re.sub(r" +", "-", name.strip())


def needs_hyphen(name: str) -> bool:
    return " " in name or "\u202f" in name or "\u00a0" in name


def collect_asset_renames() -> list[tuple[Path, Path]]:
    assets = ROOT / "assets"
    moves: list[tuple[Path, Path]] = []
    path_map: dict[Path, Path] = {assets: assets}

    for src in sorted(assets.rglob("*"), key=lambda p: len(p.parts), reverse=True):
        parent = path_map.get(src.parent, src.parent)
        new_name = hyphenate(src.name) if needs_hyphen(src.name) else src.name
        dst = parent / new_name
        if dst != src:
            moves.append((src, dst))
        path_map[src] = dst
    return moves


def build_asset_url_map(moves: list[tuple[Path, Path]]) -> dict[str, str]:
    mapping: dict[str, str] = {}
    for src, dst in moves:
        old_web = "/" + src.relative_to(ROOT).as_posix()
        new_web = "/" + dst.relative_to(ROOT).as_posix()
        mapping[old_web] = new_web
    return mapping


def move_pages() -> None:
    rotation_dir = ROOT / "rotations"
    for src in sorted(rotation_dir.glob("*.php")):
        if src.name in ("index.php", "browse.php"):
            continue
        PAGE_MOVES[f"rotations/{src.name}"] = f"rotation-{src.name}"

    for old, new in PAGE_MOVES.items():
        src = ROOT / old
        dst = ROOT / new
        if not src.is_file():
            continue
        slug = new.removesuffix(".php")
        if slug.startswith("rotation-"):
            URL_MAP[f"/rotations/{slug.removeprefix('rotation-')}"] = f"/{slug}"
        dst.parent.mkdir(parents=True, exist_ok=True)
        if dst.exists():
            dst.unlink()
        shutil.move(str(src), str(dst))

    for folder in ("coaching", "match", "research", "rotations", "testimonials", "faq", "privacy-policy", "case-studies"):
        folder_path = ROOT / folder
        if folder_path.is_dir() and not any(folder_path.iterdir()):
            folder_path.rmdir()


def apply_replacements(content: str, mapping: dict[str, str]) -> str:
    updated = content
    for old, new in sorted(mapping.items(), key=lambda item: len(item[0]), reverse=True):
        updated = updated.replace(old, new)
    return updated


def update_sitemap() -> None:
    path = ROOT / "sitemap.xml"
    text = path.read_text(encoding="utf-8")
    for old, new in sorted(URL_MAP.items(), key=lambda item: len(item[0]), reverse=True):
        text = text.replace(f"https://usmlewise.com{old}", f"https://usmlewise.com{new}")
    path.write_text(text, encoding="utf-8")


def update_htaccess() -> None:
    path = ROOT / ".htaccess"
    text = path.read_text(encoding="utf-8")
    replacements = {
        "/coaching/step-1-crash-course": "/coaching-step-1-crash-course",
        "/coaching/step-1-mastery": "/coaching-step-1-mastery",
        "/coaching/step-1-review": "/coaching-step-1-review",
        "/coaching/nbme-style-coaching": "/coaching-nbme-style-coaching",
        "/coaching/tutoring": "/coaching-tutoring",
        "/match/lor-editing": "/match-lor-editing",
        "/match/eras-cv": "/match-eras-cv",
        "/match/personal-statement": "/match-personal-statement",
        "/match/interview-prep": "/match-interview-prep",
        "/research/catalyst": "/research-catalyst",
        "/research/original-research": "/research-original-research",
        "/research/review-paper": "/research-review-paper",
        "/research/masterclass": "/research-masterclass",
        "/research/junior-scientist": "/research-junior-scientist",
        "/rotations/browse": "/clinical-rotations",
        "/case-studies/ahmed": "/case-study-ahmed",
    }
    for old_html, old_path, new_path in [
        ("coaching-step1-crash-course", "/coaching/step-1-crash-course", "/coaching-step-1-crash-course"),
        ("coaching-step1-mastery", "/coaching/step-1-mastery", "/coaching-step-1-mastery"),
        ("coaching-step1-review", "/coaching/step-1-review", "/coaching-step-1-review"),
        ("coaching-step23-mastery", "/coaching/nbme-style-coaching", "/coaching-nbme-style-coaching"),
        ("coaching-tutoring", "/coaching/tutoring", "/coaching-tutoring"),
        ("match-lor", "/match/lor-editing", "/match-lor-editing"),
        ("match-eras-cv", "/match/eras-cv", "/match-eras-cv"),
        ("match-ps3x", "/match/personal-statement", "/match-personal-statement"),
        ("match-interview", "/match/interview-prep", "/match-interview-prep"),
        ("research-catalyst", "/research/catalyst", "/research-catalyst"),
        ("research-original", "/research/original-research", "/research-original-research"),
        ("research-review", "/research/review-paper", "/research-review-paper"),
        ("research-masterclass", "/research/masterclass", "/research-masterclass"),
        ("research-junior-scientist", "/research/junior-scientist", "/research-junior-scientist"),
        ("clinical-rotations", "/rotations/browse", "/clinical-rotations"),
        ("case-study-ahmed", "/case-studies/ahmed", "/case-study-ahmed"),
    ]:
        text = text.replace(f"RewriteRule ^{old_html}\\.html$ {old_path} ", f"RewriteRule ^{old_html}\\.html$ {new_path} ")
        text = text.replace(f"RewriteRule ^rotation-(.+)\\.html$ /rotations/$1 ", "RewriteRule ^rotation-(.+)\\.html$ /rotation-$1 ")

    for old, new in replacements.items():
        text = text.replace(old, new)

    extra = """
# --- 4. Redirect old nested clean URLs to flat root pages ---
"""
    for old, new in sorted(replacements.items(), key=lambda item: len(item[0]), reverse=True):
        old_slug = old.lstrip("/")
        new_slug = new.lstrip("/")
        extra += f"RewriteRule ^{re.escape(old_slug)}/?$ {new} [R=301,L]\n"

    if "# --- 4. Redirect old nested" not in text:
        text = text.replace("ErrorDocument 404 /404.php", extra + "\nErrorDocument 404 /404.php")

    path.write_text(text, encoding="utf-8")


def main() -> None:
    asset_moves = collect_asset_renames()
    for src, dst in asset_moves:
        dst.parent.mkdir(parents=True, exist_ok=True)
        src.rename(dst)

    move_pages()

    mapping = build_asset_url_map(asset_moves)
    mapping.update(URL_MAP)

    changed: list[Path] = []
    for pattern in TEXT_GLOBS:
        if pattern == ".htaccess":
            paths = [ROOT / ".htaccess"]
        else:
            paths = list(ROOT.rglob(pattern))
        for path in paths:
            if "tools/" in str(path) or path.name.startswith("."):
                continue
            text = path.read_text(encoding="utf-8", errors="replace")
            updated = apply_replacements(text, mapping)
            if updated != text:
                path.write_text(updated, encoding="utf-8")
                changed.append(path)

    update_sitemap()
    update_htaccess()

    print(f"Hyphenated {len(asset_moves)} asset path(s)")
    print(f"Moved {len(PAGE_MOVES)} page(s) to site root")
    print(f"Updated {len(changed)} reference file(s)")


if __name__ == "__main__":
    main()
