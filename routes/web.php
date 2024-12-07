<?php

use App\Http\Controllers\GymPlanController;

use App\Http\Controllers\GymMemberController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminLoginController;
use Illuminate\Support\Facades\Route;

//Admin: 

// Admin login:
Route::get('/dashboard', function () {
    return view('admin.Dashboard_page');
});
Route::get('/adminLogin', [AdminLoginController::class, 'index'])->name('admin.login.index');
Route::post('/adminLogin', [AdminLoginController::class, 'store'])->name('admin.login.store');

// members: 
Route::get('/admin/members', [GymMemberController::class, 'index'])->name('admin.members.index');
Route::put('admin/members/{id}', [GymMemberController::class, 'update'])->name('admin.members.update');
Route::get('/admin/members/{id}/edit', [GymMemberController::class, 'edit'])->name('admin.members.edit');
Route::post('/admin/members', [GymMemberController::class, 'store'])->name('admin.add_member.store');
Route::delete('/admin/members/{id}', [GymMemberController::class, 'destroy'])->name('admin.member.destroy');

// plans: 
Route::get('/admin/plan', [GymPlanController::class, 'index'])->name('admin.plan.index');
Route::put('admin/plan/{id}', [GymPlanController::class, 'update'])->name('admin.plans.update');
Route::get('/admin/plan/{id}/edit',  [GymPlanController::class, 'edit'])->name('admin.plan.edit');
Route::post('/admin/plan', [GymPlanController::class, 'store'])->name('admin.add_plan.store');
Route::delete('/admin/plan/{id}', [GymPlanController::class, 'destroy'])->name('admin.plan.destroy');

// route::put('admin/plan/{id}', [GymMemberController::class, 'update'])->name('admin.members.update');
// Route::get('/admin/mem/{id}/edit', [GymMemberController::class, 'edit'])->name('admin.members.edit');


// Admin profile: 
// Route::get('/Admin_profile_page', [TestController::class, 'testAction']);

// classes: 
Route::get('/classes', function () {
    return view('admin/classes');
});


// User: 
Route::Get('/', [RegistrationController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('user.login');
Route::get('/login/destroy', [LoginController::class, 'destroy'])->name('user.logout');
// Route::post('/login', [LoginController::class, 'login'])->name('user.login');
Route::get('/login/check', [GymMemberController::class, 'postLogin'])->name('user.login.check');

// Route::post('/', [RegistrationController::class, 'store']);

Route::view('/health', 'user.health');
// Route::view('/home/{id}', 'user.home')->name('home');
Route::get('/home/{id}', [HomeController::class, 'index'])->name('user.home');
Route::view('/schedule', 'user.schedule');
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile/{id}', [ProfileController::class, 'index'])->name('profile.show');
Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
