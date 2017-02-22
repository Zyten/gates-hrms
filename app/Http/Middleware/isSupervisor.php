<?php

namespace App\Http\Middleware;

use Closure;

class isSupervisor
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
        if(auth()->check() && auth()-> user()->role ==2) return $next($request);
        else
            abort(503);
    }
}
