<?php
 
return [
    /*
    |--------------------------------------------------------------------------
    | Laravel CORS Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | Reference: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */
 
    'paths' => ['*'], // Allow API requests
 
    'allowed_methods' => ['*'], // Allow all HTTP methods (GET, POST, PUT, DELETE, etc.)
 
    'allowed_origins' => ['*'], // Allow requests from any origin (frontend domains)
 
    'allowed_origins_patterns' => [], // You can define regex patterns if needed
 
    'allowed_headers' => ['*'], // Allow all headers (Authorization, Content-Type, etc.)
 
    'exposed_headers' => [], // No custom headers exposed
 
    'max_age' => 0, // How long the response should be cached (0 = no cache)
 
    'supports_credentials' => false, // Set to `true` if you need cookies in requests (e.g., Laravel Sanctum)
];