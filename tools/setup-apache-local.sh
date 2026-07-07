#!/usr/bin/env bash
# Point Apache at this repo for local PHP development.
# Usage: sudo bash tools/setup-apache-local.sh
set -euo pipefail

REPO="$(cd "$(dirname "$0")/.." && pwd)"
CONF_SRC="$REPO/tools/usmlewise.apache.conf"
CONF_DEST="/etc/apache2/sites-available/usmlewise.conf"
HOSTS_LINE="127.0.0.1 usmlewise.local www.usmlewise.local"

if [[ "$(id -u)" -ne 0 ]]; then
  echo "Run with sudo: sudo bash tools/setup-apache-local.sh"
  exit 1
fi

cp "$CONF_SRC" "$CONF_DEST"
a2ensite usmlewise.conf
a2enmod rewrite
a2enmod php8.3 2>/dev/null || a2enmod php 2>/dev/null || true

if ! grep -qF "usmlewise.local" /etc/hosts; then
  echo "$HOSTS_LINE" >> /etc/hosts
  echo "Added $HOSTS_LINE to /etc/hosts"
fi

apache2ctl configtest
systemctl reload apache2

echo ""
echo "Done. Open: http://usmlewise.local/"
echo "       or:  http://usmlewise.local/coaching"
echo ""
echo "Do NOT use http://localhost/ — that is a different site (/var/www/html)."
