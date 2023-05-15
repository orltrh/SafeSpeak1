<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckMiddleware
{
    
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please login to access this page');
        }

        if (auth()->user()->is_admin == 1) {
            return $next($request);
        }

        return redirect()->route('dashboard')->with('error', 'Access Denied');
    }

}