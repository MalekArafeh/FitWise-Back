<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\ServiceProvider;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
    


//     'providers' => ServiceProvider::defaultProviders()->merge([
//         App\Providers\RouteServiceProvider::class ,
//         Maatwebsite\Excel\ExcelServiceProvider::class,

//     ])->toArray(), 
// 'aliases' => Facade::defaultAliases()->merge([
//     'Excel' => Maatwebsite\Excel\Facades\Excel::class,
// ])->toArray(),

