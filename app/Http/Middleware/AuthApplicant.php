<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class AuthApplicant
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
            if(Auth::user()->userType == 'applicant')
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
