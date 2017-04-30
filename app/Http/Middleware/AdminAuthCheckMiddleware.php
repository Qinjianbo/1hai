<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuthCheckMiddleware
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
        if (!$request->session()->get('username')) {
            return redirect('/Admin');
        }

        return $next($request);
    }
}
