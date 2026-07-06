#!/usr/bin/env python3
"""Rename asset files/dirs with spaces or special chars; update code references."""

from __future__ import annotations

import re
import unicodedata
from pathlib import Path
from urllib.parse import unquote, quote

ROOT = Path(__file__).resolve().parents[1]
ASSETS = ROOT / "assets"
TEXT_GLOBS = ("*.php", "*.css", "*.js", "*.html", "*.md")

UNSAFE = re.compile(r"[^a-zA-Z0-9._/-]")


def slugify_component(name: str) -> str:
    stem = name
    suffix = ""
    if "." in name and not name.startswith("."):
        stem, dot, ext = name.rpartition(".")
        suffix = dot + ext.lower()

    stem = unicodedata.normalize("NFKD", stem)
    stem = stem.replace("\u202f", " ").replace("\u00a0", " ")
    stem = stem.lower()
    stem = re.sub(r"[^a-z0-9]+", "-", stem)
    stem = re.sub(r"-+", "-", stem).strip("-")
    if not stem:
        stem = "file"
    return stem + suffix


def needs_sanitize(name: str) -> bool:
    if re.search(r"[\s()%]", name):
        return True
    if unicodedata.normalize("NFKD", name) != name:
        return True
    return bool(re.search(r"[^a-zA-Z0-9._-]", name))


def web_path(rel: Path) -> str:
    return "/assets/" + "/".join(slugify_component(p) if needs_sanitize(p) else p for p in rel.parts)


def collect_renames() -> list[tuple[Path, Path]]:
    moves: list[tuple[Path, Path]] = []
    seen_targets: set[Path] = set()

    # Deepest paths first so directory renames happen after file moves inside them.
    all_paths = sorted(ASSETS.rglob("*"), key=lambda p: len(p.parts), reverse=True)
    path_map: dict[Path, Path] = {ASSETS: ASSETS}

    for src in all_paths:
        parent = path_map.get(src.parent, src.parent)
        new_name = slugify_component(src.name) if needs_sanitize(src.name) else src.name
        dst = parent / new_name
        if dst != src:
            while dst in seen_targets or (dst.exists() and dst != src):
                stem, dot, ext = new_name.rpartition(".") if "." in new_name else (new_name, "", "")
                new_name = f"{stem}-dup{dot}{ext}" if dot else f"{new_name}-dup"
                dst = parent / new_name
            moves.append((src, dst))
        path_map[src] = dst
        seen_targets.add(dst)

    return moves


def build_url_map(moves: list[tuple[Path, Path]]) -> dict[str, str]:
    mapping: dict[str, str] = {}
    for src, dst in moves:
        old_rel = src.relative_to(ROOT)
        new_rel = dst.relative_to(ROOT)
        old_web = "/" + old_rel.as_posix()
        new_web = "/" + new_rel.as_posix()
        mapping[old_web] = new_web
        mapping[quote(old_web, safe="/:")] = new_web
        mapping[unquote(old_web)] = new_web
    return mapping


def apply_replacements(content: str, url_map: dict[str, str]) -> str:
    updated = content
    for old, new in sorted(url_map.items(), key=lambda x: len(x[0]), reverse=True):
        updated = updated.replace(old, new)
    # Common encoded variants used in HTML
    for old, new in url_map.items():
        if "%" in old:
            continue
        encoded = quote(old, safe="/:")
        if encoded != old:
            updated = updated.replace(encoded, new)
    return updated


def main() -> None:
    moves = collect_renames()
    if not moves:
        print("No asset renames needed.")
        return

    print(f"Renaming {len(moves)} asset path(s)...")
    # Rename files before parent dirs; moves list is deepest-first.
    for src, dst in moves:
        dst.parent.mkdir(parents=True, exist_ok=True)
        src.rename(dst)
        print(f"  {src.relative_to(ROOT)} -> {dst.relative_to(ROOT)}")

    url_map = build_url_map(moves)

    changed_files: list[Path] = []
    for pattern in TEXT_GLOBS:
        for path in ROOT.rglob(pattern):
            if "node_modules" in path.parts or path.parts[-1].startswith("."):
                continue
            text = path.read_text(encoding="utf-8", errors="replace")
            updated = apply_replacements(text, url_map)
            if updated != text:
                path.write_text(updated, encoding="utf-8")
                changed_files.append(path)

    print(f"\nUpdated {len(changed_files)} file(s):")
    for p in changed_files:
        print(f"  {p.relative_to(ROOT)}")


if __name__ == "__main__":
    main()
