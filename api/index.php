<?php

// Get the request URI
$requestUri = $_SERVER['REQUEST_URI'];

// Define the base URI for your API
$baseUri = '/api';

// Check if the request URI starts with the base URI
if (strpos($requestUri, $baseUri) === 0) {
    // Remove the base URI from the request URI
    $requestUri = substr($requestUri, strlen($baseUri));
}

// Include the Laravel application's entry point
require __DIR__ . '/../public/index.php';
