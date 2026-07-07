<?php
/**
 * Router for PHP built-in server (php -S does not read .htaccess).
 * Usage: php -S localhost:8080 router.php
 */
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$root = __DIR__;
$path = $root . $uri;

// Serve existing files (css, js, images, assets)
if ($uri !== '/' && is_file($path)) {
    return false;
}

// Directory index
if (is_dir($path) && is_file($path . '/index.php')) {
    require $path . '/index.php';
    return true;
}

// Extensionless .php mapping: /coaching-step1-crash-course -> coaching/step-1-crash-course.php
$phpPath = $root . $uri . '.php';
if (is_file($phpPath)) {
    require $phpPath;
    return true;
}

// Homepage
if ($uri === '/' && is_file($root . '/index.php')) {
    require $root . '/index.php';
    return true;
}

http_response_code(404);
require $root . '/404.php';
return true;
