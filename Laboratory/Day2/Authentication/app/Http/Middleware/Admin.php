<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use  Auth;
use  Redirect;

class Admin
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
        if(!Auth::check()){
            return Redirect::route('login');
        }
        return $next($request); 
    }
}
