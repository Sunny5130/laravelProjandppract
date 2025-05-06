<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   echo " i m good";
        if ($request->age < 18) {
            echo "you can not access the page";
            die();
           }
           else {
            echo "Your age is $request->age";
           }
        //print_r($request);
        print_r($request->age);
        print_r($request->con);
        return $next($request);
    }

}