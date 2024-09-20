<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Middlewares globales
    ];

    protected $middlewareGroups = [
        'web' => [
            // Middlewares para el grupo web
        ],
        'api' => [
            // Middlewares para el grupo api
        ],
    ];

    protected $routeMiddleware = [
        // Middlewares de ruta
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'admin.auth' => \App\Http\Middleware\AdminAuthMiddleware::class,
        'admin' => \App\Http\Middleware\AdminAuthMiddleware::class,
    ];
}