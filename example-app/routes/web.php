<?php

use App\Http\Controllers\HealthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;



use Illuminate\Support\Facades\Route;





Route::Get('/', [RegistrationController::class, 'index']);
Route::get('/', function () {
    return view('user/Registration');
});

Route::get('/login', [LoginController::class, 'index']);

Route::post('/', [RegistrationController::class, 'store']);
