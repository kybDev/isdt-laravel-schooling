<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use  Auth;
use  Redirect;

class Guest
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
        if(Auth::check()){
            return Redirect::route('dashboard');
        }
        
        return $next($request);
    }
}
