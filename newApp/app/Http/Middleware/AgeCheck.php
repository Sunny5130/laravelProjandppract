<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->age < 18) {
            die('You are not allowed. Age must be 18 or above.');
        }

        return $next($request);
    }
}
