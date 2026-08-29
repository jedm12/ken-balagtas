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

// Force serverless-safe env (empty Vercel dashboard values would otherwise break managers).
$forcedEnv = [
    'APP_ENV' => 'production',
    'APP_DEBUG' => 'true',
    'APP_KEY' => 'base64:CTWkED3isxDBGheCVTvniEb3kczKAB+z66ItQmihhu0=',
    'LOG_CHANNEL' => 'stderr',
    'LOG_STACK' => 'stderr',
    'SESSION_DRIVER' => 'array',
    'CACHE_STORE' => 'array',
    'QUEUE_CONNECTION' => 'sync',
    'MAIL_MAILER' => 'log',
    'FILESYSTEM_DISK' => 'local',
    'BROADCAST_CONNECTION' => 'log',
];

foreach ($forcedEnv as $key => $value) {
    $current = $_ENV[$key] ?? $_SERVER[$key] ?? getenv($key);
    if ($current === false || $current === null || $current === '') {
        putenv("{$key}={$value}");
        $_ENV[$key] = $value;
        $_SERVER[$key] = $value;
    }
}

// Always force these on Vercel — empty dashboard overrides cause Manager::createDriver() errors.
foreach (['SESSION_DRIVER' => 'array', 'CACHE_STORE' => 'array', 'LOG_CHANNEL' => 'stderr', 'LOG_STACK' => 'stderr'] as $key => $value) {
    putenv("{$key}={$value}");
    $_ENV[$key] = $value;
    $_SERVER[$key] = $value;
}

require __DIR__.'/../public/index.php';
