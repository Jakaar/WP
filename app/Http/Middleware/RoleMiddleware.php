<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware extends GuardMiddleware
{
    /**
     * Handle incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Closure $next
     * @param  string  $roles
     * @param  string|null  $team
     * @param  string|null  $options
     * @return mixed
     */

    public function handle($request, Closure $next, $roles, $team = null, $options = '')
    {
        if (!$this->authorization('roles', $roles, $team, $options)) {
            return $this->unauthorized();
        }

        return $next($request);
    }
}
