<?php

namespace LocaleEdu;

use Closure;
use Illuminate\Http\Request;
use LocaleEdu\Locale\Locale;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        \Illuminate\Support\Facades\App::setLocale(LocaleService::getLocale());
        return $next($request);
    }
}
