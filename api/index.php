<?php

header_remove('X-Powered-By');
@ini_set('expose_php', '0');

$method = strtoupper($_SERVER['REQUEST_METHOD'] ?? 'GET');
if (!in_array($method, ['GET', 'HEAD'], true)) {
    http_response_code(405);
    header('Allow: GET, HEAD');
    header('Content-Type: text/plain; charset=UTF-8');
    echo 'Method Not Allowed';
    exit;
}

$security_headers = [
    "Content-Security-Policy: default-src 'self'; style-src 'self' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data:; script-src 'self'; frame-ancestors 'self'; base-uri 'self'; object-src 'none'",
    'X-Frame-Options: DENY',
    'X-Content-Type-Options: nosniff',
    'Referrer-Policy: strict-origin-when-cross-origin',
    'Permissions-Policy: camera=(), microphone=(), geolocation=()',
];

foreach ($security_headers as $header) {
    header($header);
}

require __DIR__ . '/data.php';
require __DIR__ . '/includes/icons.php';

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$path = rtrim($path, '/') ?: '/';

$page = 'home';
$project = null;
$not_found = false;

if ($path === '/') {
    $page = 'home';
} elseif ($path === '/about') {
    $page = 'about';
} elseif ($path === '/projects') {
    $page = 'projects';
} elseif ($path === '/writing') {
    $page = 'writing';
} elseif (preg_match('#^/projects/([a-z0-9-]+)$#', $path, $m)) {
    $project = find_project($m[1]);
    if ($project === null) {
        $not_found = true;
        $page = '404';
        http_response_code(404);
    } else {
        $page = 'project';
    }
} else {
    $not_found = true;
    $page = '404';
    http_response_code(404);
}

$page_titles = [
    'home' => $profile['name'] . ' — Portfolio',
    'about' => 'About — ' . $profile['name'],
    'projects' => 'Projects — ' . $profile['name'],
    'writing' => 'Writing — ' . $profile['name'],
    'project' => ($project['title'] ?? 'Project') . ' — ' . $profile['name'],
    '404' => 'Not found — ' . $profile['name'],
];

$page_title = $page_titles[$page] ?? $page_titles['home'];
$page_description = $project['summary'] ?? ($profile['title'] . '. ' . $profile['bio']);
$current_path = $path;

require __DIR__ . '/includes/layout.php';
