<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PrivacyMiddleware
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
        if( env('PRIVACY') == true){
            return 'Your accessing private route';
        }
        return $next($request);
    }
}
