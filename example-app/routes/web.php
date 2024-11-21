<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Admin_profile_page', [TestController::class , 'testAction'] );

Route::get('/classes', function () {
    return view('admin/classes');
});

Route::get('/dashboard', function () {
    return view('admin/Dashboard_page');
});

