<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
class LanguageSwitcher
{
    public function handle($request, Closure $next)
    {
        $locale = Session::get('locale', 'en');
        
        if (! in_array($locale, ['en', 'es'])) {
            $locale = 'en';
        }
        
        App::setLocale($locale);
        
        return $next($request);
    }
}
