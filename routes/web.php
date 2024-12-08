<?php

use App\Http\Controllers\GymPlanController;

use App\Http\Controllers\GymMemberController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberRegController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

//Admin: 

// Admin login:
// Route::get('/dashboard', function () {
//     return view('admin.dashboard.index');
// });
Route::get('/adminLogin', [AdminLoginController::class, 'index'])->name('admin.login.index');
Route::post('/adminLogin', [AdminLoginController::class, 'store'])->name('admin.login.store');
Route::get('/adminLogin/destroy', [AdminLoginController::class, 'destroy'])->name('admin.login.destroy');


// members: 
Route::get('/admin/members', [GymMemberController::class, 'index'])->name('admin.members.index');
Route::put('admin/members/{id}', [GymMemberController::class, 'update'])->name('admin.members.update');
Route::get('/admin/members/{id}/edit', [GymMemberController::class, 'edit'])->name('admin.members.edit');
Route::post('/admin/members', [GymMemberController::class, 'store'])->name('admin.add_member.store');
Route::delete('/admin/members/{id}', [GymMemberController::class, 'destroy'])->name('admin.member.destroy');

// plans: 
Route::get('/admin/plan', [GymPlanController::class, 'index'])->name('admin.plan.index');
route::put('admin/plan/{id}', [GymMemberController::class, 'update'])->name('admin.members.update');
Route::get('/admin/mem/{id}/edit', [GymMemberController::class, 'edit'])->name('admin.members.edit');


// Admin profile: 
Route::get('/admin/profile', [AdminProfileController::class, 'index'])->name('admin.profile.index');
Route::put('/admin/profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');

// classes: 
Route::get('/classes', function () {
    return view('admin/classes');
});

// dashboard: 
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');



// User: 
Route::Get('/', [RegistrationController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
// Route::post('/login', [LoginController::class, 'login'])->name('user.login');
Route::post('/login', [GymMemberController::class, 'postLogin'])->name('user.login');

// Route::post('/', [RegistrationController::class, 'store']);

Route::view('/health', 'user.health');
Route::view('/home/{id}', 'user.home')->name('home');
Route::view('/schedule', 'user.schedule');
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile/{id}', [ProfileController::class, 'index'])->name('profile.show');
Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
