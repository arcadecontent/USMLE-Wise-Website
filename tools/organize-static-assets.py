#!/usr/bin/env python3
"""Update references after moving page CSS/JS into styles/ and js/."""

from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]
CSS_DIR = ROOT / "styles"
JS_DIR = ROOT / "js"

CSS_MAP = {f"/{name}": f"/styles/{name}" for name in sorted(p.name for p in CSS_DIR.glob("*.css"))}
JS_MAP = {f"/{name}": f"/js/{name}" for name in sorted(p.name for p in JS_DIR.glob("*.js"))}
MAP = {**CSS_MAP, **JS_MAP}


def apply(text: str) -> str:
    updated = text
    for old, new in sorted(MAP.items(), key=lambda item: len(item[0]), reverse=True):
        updated = updated.replace(old, new)
    return updated


def main() -> None:
    changed: list[Path] = []
    for path in ROOT.rglob("*.php"):
        if "tools/" in path.parts:
            continue
        text = path.read_text(encoding="utf-8", errors="replace")
        updated = apply(text)
        if updated != text:
            path.write_text(updated, encoding="utf-8")
            changed.append(path)
    print(f"Updated {len(changed)} PHP file(s)")
    for css in CSS_MAP.values():
        print(f"  {css}")
    for js in JS_MAP.values():
        print(f"  {js}")


if __name__ == "__main__":
    main()
