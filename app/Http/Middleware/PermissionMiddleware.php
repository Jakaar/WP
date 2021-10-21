<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PermissionMiddleware
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
        if (Auth::user()) {
            $user = \App\User::where('id', Auth::user()->id)->first();

            foreach ($user->allPermissions() as $per) {
                if ($per->url == $request->path()) {
                    return $next($request);
                }
            }
        }
        else{
            return redirect('/');
        }


        

        // return $next($request);

    }
}
