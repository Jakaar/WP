<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Session()->has('locale')) {
            App::setLocale(Session()->get('locale'));
        }
        else { // This is optional as Laravel will automatically set the fallback language if there is none specified
            App::setLocale(config('app.fallback_locale'));

        }
        return $next($request);
    }
}
