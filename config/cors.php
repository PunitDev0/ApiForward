<?php

return [

    'paths' => ['api/*'], // Make sure to include your custom path

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'], // Or ['http://127.0.0.1:8001'] if you want to be strict

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
