<?php

namespace App\Http\Middleware;

use Closure;

class AfterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, Closure $callback)
    {
        $res = $next($request);
        $callback->call($request);
        return $res;
    }
}
