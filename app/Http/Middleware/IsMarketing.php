<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsMarketing
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check() || auth()->user()->role !== "marketing") {
            abort(403);
            // auth()->user()->role;
        }

        return $next($request);
    }
}
