<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateUser
{
    public function handle($request, Closure $next)
    {
        if (!auth()->check()) {
            return redirect()->route('login'); // Redirect to login page if user is not logged in
        }
    
        return $next($request);
    }
    
}
