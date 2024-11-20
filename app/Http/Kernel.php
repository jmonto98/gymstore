<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     */

    protected $middlewareGroups = [
        'web' => [
            // Otros middlewares...
            \App\Http\Middleware\SetLanguage::class,
        ],
    ];
}
