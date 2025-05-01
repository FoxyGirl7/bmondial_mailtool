<?php

return [
    'paths' => ['api/*', 'sanctum/*'], // Include Sanctum routes
    'allowed_methods' => ['*'],
    'allowed_origins' => [
        'http://localhost:8000',
        'http://127.0.0.1:8000', // Add this for your frontend
        'http://127.0.0.1:5173', // Vite dev server
    ],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true, // Set to true for Sanctum
];
