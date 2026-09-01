<?php
// Router for local `php -S localhost:1234 index.php` and Vercel (via api/index.php routes).
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/');
$file = __DIR__ . $uri;

if ($uri !== '/' && is_file($file) && !str_ends_with($uri, '.php')) {
    return false;
}

require __DIR__ . '/api/index.php';
