<?php

use App\Http\Controllers\HealthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/Registration');
    return view('test');
});

Route::get('/test', [TestController::class, 'firstAction']);

Route::view('/health','user.health' );
Route::view('/home','user.home' );
Route::view('/schedule','user.schedule' );
Route::view('/profile', 'user.profile');

Route::get('/login',function () {
    return view('user/login');
});