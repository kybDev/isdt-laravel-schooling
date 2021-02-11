<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ContentMiddleware
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
        $age = 15;

        if($age < 16){
            return 'Your age does not allow you to visit this site';
        };

        return $next($request);
    }
}
