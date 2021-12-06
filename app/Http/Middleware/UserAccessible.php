<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserAccessible
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

        $user = \App\User::where('id',Auth::user()->id)->first();

        if($user->user_type == null){
            return $next($request);
        }
        else{
//            return response()->json(['msg' => 'Auth failed'],403);
            return response()->view('client.auth.error');
        }
    }
}
