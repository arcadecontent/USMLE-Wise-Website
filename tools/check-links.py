#!/usr/bin/env python3
"""Crawl site pages and verify HTTP status + internal link integrity."""

from __future__ import annotations

import re
import sys
import xml.etree.ElementTree as ET
from collections import deque
from html.parser import HTMLParser
from pathlib import Path
from urllib.error import HTTPError, URLError
from urllib.parse import quote, urldefrag, urljoin, urlparse
from urllib.request import Request, urlopen

BASE_URL = sys.argv[1] if len(sys.argv) > 1 else "http://localhost:8080"
ROOT = Path(__file__).resolve().parents[1]
SITEMAP = ROOT / "sitemap.xml"
TIMEOUT = 15
USER_AGENT = "USMLEWise-LinkChecker/1.0"

SKIP_SCHEMES = {"mailto", "tel", "javascript", "data", "whatsapp"}


class LinkExtractor(HTMLParser):
    def __init__(self) -> None:
        super().__init__()
        self.links: set[str] = set()

    def handle_starttag(self, tag: str, attrs: list[tuple[str, str | None]]) -> None:
        attr_map = dict(attrs)
        if tag == "a" and attr_map.get("href"):
            self.links.add(attr_map["href"])
        elif tag in ("link", "script", "img", "source") and attr_map.get(
            ("href" if tag in ("link", "script") else "src")
        ):
            key = "href" if tag in ("link", "script") else "src"
            self.links.add(attr_map[key] or "")


def normalize_url(base: str, href: str) -> str | None:
    href = href.strip()
    if not href or href.startswith("#"):
        return None
    parsed = urlparse(href)
    if parsed.scheme and parsed.scheme.lower() in SKIP_SCHEMES:
        return None
    absolute = urldefrag(urljoin(base, href))[0]
    return absolute


def is_internal(url: str, base_netloc: str) -> bool:
    parsed = urlparse(url)
    if not parsed.netloc:
        return True
    return parsed.netloc == base_netloc


def safe_request_url(url: str) -> str:
    parsed = urlparse(url)
    path = quote(parsed.path, safe="/%:@&+$,;=-._~")
    if parsed.query:
        return f"{parsed.scheme}://{parsed.netloc}{path}?{parsed.query}"
    return f"{parsed.scheme}://{parsed.netloc}{path}"


def fetch(url: str) -> tuple[int, str, str | None]:
    req = Request(safe_request_url(url), headers={"User-Agent": USER_AGENT})
    try:
        with urlopen(req, timeout=TIMEOUT) as resp:
            body = resp.read().decode("utf-8", errors="replace")
            return resp.status, body, resp.geturl()
    except HTTPError as exc:
        try:
            body = exc.read().decode("utf-8", errors="replace")
        except Exception:
            body = ""
        return exc.code, body, exc.geturl()
    except URLError as exc:
        return 0, "", str(exc.reason)


def load_sitemap_urls(base_url: str) -> list[str]:
    if not SITEMAP.exists():
        return [base_url.rstrip("/") + "/"]
    tree = ET.parse(SITEMAP)
    urls: list[str] = []
    for loc in tree.findall(".//{http://www.sitemaps.org/schemas/sitemap/0.9}loc"):
        if loc.text:
            path = urlparse(loc.text.strip()).path or "/"
            urls.append(urljoin(base_url, path))
    return urls


def main() -> int:
    base_netloc = urlparse(BASE_URL).netloc
    seeds = load_sitemap_urls(BASE_URL)
    queue: deque[str] = deque(seeds)
    seen_pages: set[str] = set()
    checked_resources: dict[str, tuple[int, str | None]] = {}
    broken: list[dict[str, str]] = []
    page_results: list[dict[str, str | int]] = []

    while queue:
        page_url = queue.popleft()
        if page_url in seen_pages:
            continue
        seen_pages.add(page_url)

        status, body, final_url = fetch(page_url)
        page_results.append({"url": page_url, "status": status, "final": final_url or page_url})

        if status >= 400 or status == 0:
            broken.append(
                {
                    "source": "(seed/sitemap)",
                    "link": page_url,
                    "status": str(status),
                    "type": "page",
                }
            )
            continue

        parser = LinkExtractor()
        parser.feed(body)
        for href in parser.links:
            absolute = normalize_url(final_url or page_url, href)
            if not absolute:
                continue

            internal = is_internal(absolute, base_netloc)
            if internal:
                parsed = urlparse(absolute)
                path = parsed.path or "/"
                # HTML pages: crawl extensionless paths and index routes
                looks_like_page = (
                    not path.startswith("/assets/")
                    and not re.search(r"\.(css|js|png|jpe?g|gif|svg|webp|ico|woff2?|ttf|pdf)$", path, re.I)
                )
                if looks_like_page and absolute not in seen_pages:
                    queue.append(absolute)

            if absolute in checked_resources:
                res_status, _ = checked_resources[absolute]
                if res_status >= 400 or res_status == 0:
                    broken.append(
                        {
                            "source": page_url,
                            "link": absolute,
                            "status": str(res_status),
                            "type": "internal" if internal else "external",
                        }
                    )
                continue

            res_status, _, _ = fetch(absolute)
            checked_resources[absolute] = (res_status, page_url)
            if res_status >= 400 or res_status == 0:
                broken.append(
                    {
                        "source": page_url,
                        "link": absolute,
                        "status": str(res_status),
                        "type": "internal" if internal else "external",
                    }
                )

    print("=" * 72)
    print(f"Site link audit — {BASE_URL}")
    print("=" * 72)
    print(f"Pages crawled:     {len(seen_pages)}")
    print(f"Resources checked: {len(checked_resources)}")
    print(f"Broken links:      {len(broken)}")
    print()

    failed_pages = [p for p in page_results if int(p["status"]) >= 400 or int(p["status"]) == 0]
    if failed_pages:
        print("FAILED PAGES:")
        for p in failed_pages:
            print(f"  [{p['status']}] {p['url']}")
        print()

    if broken:
        print("BROKEN LINKS:")
        for item in broken:
            print(
                f"  [{item['status']}] {item['link']}\n"
                f"           from: {item['source']} ({item['type']})"
            )
        print()
        return 1

    print("All pages returned OK and no broken links found.")
    return 0


if __name__ == "__main__":
    raise SystemExit(main())
