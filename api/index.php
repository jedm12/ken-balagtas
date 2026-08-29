<?php

/**
 * Forward Vercel requests to Laravel's front controller.
 */

$directories = [
    '/tmp/views',
    '/tmp/storage',
    '/tmp/storage/app',
    '/tmp/storage/app/public',
    '/tmp/storage/framework',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/logs',
];

foreach ($directories as $directory) {
    if (! is_dir($directory)) {
        mkdir($directory, 0755, true);
    }
}

/*
 * Blank values (from unset or empty dashboard variables) reach Laravel as empty
 * strings rather than null, which makes driver managers resolve an empty driver.
 */
$serverlessEnv = [
    'APP_ENV' => 'production',
    'APP_KEY' => 'base64:CTWkED3isxDBGheCVTvniEb3kczKAB+z66ItQmihhu0=',
    'APP_MAINTENANCE_DRIVER' => 'file',
    'APP_MAINTENANCE_STORE' => 'array',
    'LOG_CHANNEL' => 'stderr',
    'LOG_STACK' => 'stderr',
    'SESSION_DRIVER' => 'array',
    'CACHE_STORE' => 'array',
    'QUEUE_CONNECTION' => 'sync',
    'FILESYSTEM_DISK' => 'local',
    'BROADCAST_CONNECTION' => 'log',
    'MAIL_MAILER' => 'log',
    'DB_CONNECTION' => 'sqlite',
];

foreach ($serverlessEnv as $key => $fallback) {
    $current = $_ENV[$key] ?? $_SERVER[$key] ?? getenv($key);

    if ($current === false || $current === null || trim((string) $current) === '') {
        putenv("{$key}={$fallback}");
        $_ENV[$key] = $fallback;
        $_SERVER[$key] = $fallback;
    }
}

require __DIR__.'/../public/index.php';
