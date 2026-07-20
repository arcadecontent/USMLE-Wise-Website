<?php
/**
 * Router for the PHP built-in server (php -S does not read .htaccess).
 * Usage: php -S localhost:8080 router.php
 *
 * Mirrors production nginx behavior: real files are served directly,
 * everything else goes through index.php (whose routes.php front
 * controller resolves clean URLs, legacy redirects, and 404s).
 */
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// $uri is still percent-encoded (e.g. "%20" for a space) — decode before
// checking the filesystem, since real filenames aren't percent-encoded.
if ($uri !== '/' && is_file(__DIR__ . rawurldecode($uri))) {
    return false;
}
require __DIR__ . '/index.php';
