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
            if(Auth::user()->userType == 'manager' && Auth::user()->status == 'enabled')
            {
                return $next($request);
            }
            session()->flush();
            return redirect()->route('login')->with('message', 'You are not allowed to access this page, Please contact your Administrator');
        }
        session()->flush();
        return redirect()->route('login')->with('message', 'You are not allowed to access this page');
    }
}
