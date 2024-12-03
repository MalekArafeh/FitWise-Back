<?php

use App\Http\Controllers\GymMemberController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberRegController;
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

// Route::get('/admin/members', [MemberRegController::class, 'index'])->name('admin.members.index');
Route::get('/admin/members', [GymMemberController::class, 'index'])->name('admin.members.index');
route::put('admin/members/{id}',[GymMemberController::class, 'update'])->name('admin.members.update');
Route::get('/admin/members/{id}/edit',[GymMemberController::class, 'edit'])->name('admin.members.edit');
Route::post('/admin/members', [MemberRegController::class, 'store'])->name('admin.members.store');
Route::post('/admin/members', [GymMemberController::class, 'store'])->name('admin.add_member.store');








Route::Get('/', [RegistrationController::class, 'index']);

Route::get('/Admin_profile_page', [TestController::class, 'testAction']);

Route::get('/classes', function () {
    return view('admin/classes');
});

Route::get('/dashboard', function () {
    return view('admin/Dashboard_page');
});
Route::get('/login', [LoginController::class, 'index']);
// Route::post('/login', [LoginController::class, 'login'])->name('user.login');
Route::post('/login', [GymMemberController::class, 'postLogin'])->name('user.login');

// Route::post('/', [RegistrationController::class, 'store']);

Route::view('/health', 'user.health');
Route::view('/home/{id}', 'user.home')->name('home');
Route::view('/schedule', 'user.schedule');
Route::get('/profile', [ProfileController::class,'index']);
Route::get('/profile/{id}', [ProfileController::class, 'index'])->name('profile.show');
Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');


