<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Admin_profile_page', function () {
    return view('admin/Admin_profile_page');
});

Route::get('/classes', function () {
    return view('admin/classes');
});

Route::get('/dashboard', function () {
    return view('admin/Dashboard_page');
});

