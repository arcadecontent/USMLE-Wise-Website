#!/usr/bin/env python3
"""Restore original asset paths and update code references."""

from __future__ import annotations

import re
import subprocess
from pathlib import Path
from urllib.parse import quote

ROOT = Path(__file__).resolve().parents[1]
OLD_REF = "d3e4f07"


def git_paths(prefix: str) -> list[str]:
    out = subprocess.check_output(
        ["git", "ls-tree", "-r", "--name-only", OLD_REF, prefix],
        cwd=ROOT,
        text=True,
    )
    return [line.strip() for line in out.splitlines() if line.strip()]


def build_asset_map() -> dict[str, str]:
    mapping: dict[str, str] = {}
    diff = subprocess.check_output(
        [
            "git",
            "diff",
            OLD_REF,
            "HEAD",
            "--find-renames=100",
            "-M",
            "--name-status",
            "--",
            "assets/",
        ],
        cwd=ROOT,
        text=True,
    )
    for line in diff.splitlines():
        if not line.startswith("R"):
            continue
        _, old_path, new_path = line.split("\t")
        old_web = "/" + old_path
        new_web = "/" + new_path
        mapping[new_web] = old_web
        mapping[quote(new_web, safe="/:")] = old_web
    return mapping


def css_js_map() -> dict[str, str]:
    files = [
        "case-study.css",
        "coaching.css",
        "landing.css",
        "match.css",
        "qa.css",
        "research-catalyst.css",
        "research-junior-scientist.css",
        "research-program.css",
        "research.css",
        "rotations.css",
        "testimonials.css",
        "coaching.js",
        "landing.js",
        "match.js",
        "mobile-nav.js",
        "qa.js",
        "research-catalyst.js",
        "research-junior-scientist.js",
        "research.js",
        "rotations.js",
        "testimonials.js",
    ]
    mapping: dict[str, str] = {}
    for name in files:
        if name.endswith(".css"):
            mapping[f"/assets/css/{name}"] = f"/{name}"
        else:
            mapping[f"/assets/js/{name}"] = f"/{name}"
    return mapping


def restore_files() -> None:
    restore_targets = [
        "assets/Photos",
        "assets/Testimonials",
        "assets/usmle-design-system/assets/Logo Horizontal Dark.svg",
        "assets/usmle-design-system/assets/Logo Horizontal.svg",
        "assets/usmle-design-system/assets/Logo Vertical.svg",
        "assets/usmle-design-system/uploads/USMLE Wise Emblem.svg",
        "assets/Itemized Pricing of our services - Service Package.csv",
        "assets/Rotation 01 Redesign - Download.html",
        "assets/USMLE Wise Design System.zip",
    ]
    css_js = [
        "case-study.css",
        "coaching.css",
        "coaching.js",
        "landing.css",
        "landing.js",
        "match.css",
        "match.js",
        "mobile-nav.js",
        "qa.css",
        "qa.js",
        "research-catalyst.css",
        "research-catalyst.js",
        "research-junior-scientist.css",
        "research-junior-scientist.js",
        "research-program.css",
        "research.css",
        "research.js",
        "rotations.css",
        "rotations.js",
        "testimonials.css",
        "testimonials.js",
    ]
    subprocess.check_call(["git", "checkout", OLD_REF, "--", *restore_targets, *css_js], cwd=ROOT)

    for stale in [
        ROOT / "assets/photos",
        ROOT / "assets/testimonials",
        ROOT / "assets/css",
        ROOT / "assets/js",
        ROOT / "assets/itemized-pricing-of-our-services-service-package.csv",
        ROOT / "assets/rotation-01-redesign-download.html",
        ROOT / "assets/usmle-wise-design-system.zip",
        ROOT / "assets/usmle-design-system/assets/logo-horizontal-dark.svg",
        ROOT / "assets/usmle-design-system/assets/logo-horizontal.svg",
        ROOT / "assets/usmle-design-system/assets/logo-vertical.svg",
        ROOT / "assets/usmle-design-system/uploads/usmle-wise-emblem.svg",
    ]:
        if stale.is_dir():
            import shutil

            shutil.rmtree(stale)
        elif stale.exists():
            stale.unlink()


def apply_mapping(content: str, mapping: dict[str, str]) -> str:
    updated = content
    for new, old in sorted(mapping.items(), key=lambda item: len(item[0]), reverse=True):
        updated = updated.replace(new, old)
    return updated


def main() -> None:
    restore_files()
    mapping = build_asset_map()
    mapping.update(css_js_map())

    # Fixes from original HTML references
    mapping["/assets/photos/team-members/barakat-photo.jpeg"] = (
        "/assets/Photos/Team Members/Barakat Photo.jpeg"
    )

    changed: list[Path] = []
    for pattern in ("*.php", "*.css", "*.js", "*.html", "*.md"):
        for path in ROOT.rglob(pattern):
            if ".git" in path.parts:
                continue
            text = path.read_text(encoding="utf-8", errors="replace")
            updated = apply_mapping(text, mapping)
            if updated != text:
                path.write_text(updated, encoding="utf-8")
                changed.append(path)

    print(f"Restored assets/CSS/JS from {OLD_REF}")
    print(f"Updated {len(changed)} file(s)")


if __name__ == "__main__":
    main()
