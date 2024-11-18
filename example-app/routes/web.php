<?php
use App\Http\Controllers\TestController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/login');
});

Route::get('/test', [TestController::class, 'firstAction']);

