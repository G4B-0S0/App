<?php
header('Content-Type: application/json');
echo json_encode([
    'status' => 'success',
    'message' => 'PHP en Vercel funciona',
    'environment' => $_ENV['VERCEL_ENV'] ?? 'development',
    'php_version' => phpversion(),
    'features' => [
        'database' => isset($_ENV['DATABASE_URL']),
        'tmp_writable' => is_writable('/tmp')
    ]
], JSON_PRETTY_PRINT);