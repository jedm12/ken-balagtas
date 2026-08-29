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

// Force serverless-safe logging before Laravel boots.
putenv('LOG_CHANNEL=stderr');
$_ENV['LOG_CHANNEL'] = 'stderr';
$_SERVER['LOG_CHANNEL'] = 'stderr';
putenv('LOG_STACK=stderr');
$_ENV['LOG_STACK'] = 'stderr';
$_SERVER['LOG_STACK'] = 'stderr';

require __DIR__.'/../public/index.php';
