<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Add your middleware here

        // Custom middleware
        $middleware->alias([

            // Users must have verified email to access these routes
            // 'verified' => \App\Http\Middleware\EnsureEmailIsVerified::class,

            // Comment this when using spatie permission
            // 'admin' => AdminMiddleware::class,
            // 'user-role' => \App\Http\Middleware\UserRoleMiddleware::class,

            // This is for laravel spatie/laravel-permission
            'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
            'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
            'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
