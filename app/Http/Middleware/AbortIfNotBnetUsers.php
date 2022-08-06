<?php

namespace App\Http\Middleware;

use Auth, Closure;

class AbortIfNotUsers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && strcasecmp(explode('@', Auth::user()->email)[1], 'gmail.com') != 0) {
            Auth::logout();

            return abort(404);
        }

        return $next($request);
    }
}
