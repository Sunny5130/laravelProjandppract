<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountryCheck
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->country != 'india') {
            die('You cannot access this website outside India.');
        }

        return $next($request);
    }
}
