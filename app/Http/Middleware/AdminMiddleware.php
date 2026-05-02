<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
{
    // Check if user is logged in
    if (!Auth::check()) {
        return redirect('/login');
    }

    // Check if user is admin
    if (Auth::user()->email !== 'admin@gmail.com') {
        return redirect()->route('home')
                         ->with('error', 'Access denied! Only admin can access dashboard.');
    }

    return $next($request);
}
}