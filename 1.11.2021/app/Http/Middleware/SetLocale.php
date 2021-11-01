<?php

namespace App\Http\Middleware;

use App\Services\Locale;
use Closure;
use Illuminate\Http\Request;

class SetLocale
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

        \Illuminate\Support\Facades\App::setLocale(Locale::getLocale());
        return $next($request);
    }
}
