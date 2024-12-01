<?php


use App\Http\Controllers\HealthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;


use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('admin/test');
// });
// Route::get('/coach', function () {
//     return view('admin/coach');
// });
// Route::get('/Admin_profile_page', function () {
//     return view('admin/Admin_profile_page');
// });
// Route::get('/members', function () {
//     return view('admin/members');
// });
// Route::get('/plans', function () {
//     return view('admin/plans');
// });








Route::Get('/', [RegistrationController::class, 'index']);
Route::get('/', function () {
    return view('user/Registration');
});

Route::get('/Admin_profile_page', [TestController::class, 'testAction']);

Route::get('/classes', function () {
    return view('admin/classes');
});

Route::get('/dashboard', function () {
    return view('admin/Dashboard_page');
});
Route::get('/login', [LoginController::class, 'index']);

Route::post('/', [RegistrationController::class, 'store']);

Route::view('/health', 'user.health');
Route::view('/home', 'user.home');
Route::view('/schedule', 'user.schedule');
Route::view('/profile', 'user.profile');
