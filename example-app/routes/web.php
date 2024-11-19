<?php
use App\Http\Controllers\TestController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/Registration');
});

Route::get('/test', [TestController::class, 'firstAction']);

Route::get('/login',function () {
    return view('user/login');
});