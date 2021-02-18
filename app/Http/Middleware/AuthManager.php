<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class AuthManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
    // The user is logged in...
            if(Auth::user()->userType == 'manager')
            {
                return $next($request);
            }
            session()->flush();
            return redirect()->route('login');
        }
        session()->flush();
        return redirect()->route('login');
    }
}
