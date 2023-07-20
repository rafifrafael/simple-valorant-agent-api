<?php

// Get the request URI
$requestUri = $_SERVER['REQUEST_URI'];

// Remove any leading '/api/' from the request URI
$requestUri = preg_replace('/^\/api\//', '/', $requestUri);

// Include the Laravel application's entry point
require __DIR__ . '/../public/index.php';
