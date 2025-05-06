<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\Test1Middleware;
use App\Http\Middleware\Test2Middleware;
use App\Http\Middleware\CheckAge;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        //  
        $middleware->alias([
            'Test1' => Test1Middleware::class,
            'Test2' => Test2Middleware::class
        ]);   

        $middleware->group('midgroup', [
            'Test1',
            'Test2'
        ]);
        
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
