<?php

declare(strict_types=1);

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

if (str_starts_with($path, '/api/')) {
    require __DIR__ . '/api.php';
    return true;
}

$publicRoot = __DIR__ . '/public';
$requestedFile = realpath($publicRoot . $path);

if ($path !== '/' && $requestedFile !== false && str_starts_with($requestedFile, $publicRoot) && is_file($requestedFile)) {
    $types = ['css' => 'text/css', 'js' => 'text/javascript', 'html' => 'text/html'];
    $extension = pathinfo($requestedFile, PATHINFO_EXTENSION);
    header('Content-Type: ' . ($types[$extension] ?? 'application/octet-stream'));
    readfile($requestedFile);
    return true;
}

require $publicRoot . '/index.html';
return true;
