<?php

namespace App\Unit\Auth\Http\Middleware;

use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (\Auth::user()->role != 'admin') {
            return redirect('/');
        }

        return $next($request);
    }
}
