<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Test1Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {    
        echo "This is a test middleware 1==$request->num<br>";
        if($request->num <= 18 )
        {
            echo "i m good";

        }
        else
        {
            echo "i am bad";
        }
        return $next($request);
        
    }
}
