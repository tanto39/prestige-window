<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class admin
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
        // Check is admin
        if ( Auth::check() && Auth::user()->isAdmin()==true ) {
            return $next($request);
        }
        return redirect('/login');
    }
}
