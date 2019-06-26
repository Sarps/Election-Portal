<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class VerifyVoter
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
        if(Auth::guard('voter')->check())
            return $next($request);
        \abort(401);
        return $next($request);
    }
}
