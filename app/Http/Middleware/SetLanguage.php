<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLanguage
{
    public function handle($request, Closure $next)
    {
        $locale = session('locale', config('app.locale'));

        App::setLocale($locale);

        dd('Idioma actual: ' . App::getLocale()); // Esto debería mostrar el idioma seleccionado
        return $next($request);
    }
}
