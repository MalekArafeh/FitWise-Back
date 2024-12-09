<?php

use App\Http\Controllers\classesController;
use App\Http\Controllers\GymPlanController;
use App\Http\Controllers\CoachController;

use App\Http\Controllers\GymMemberController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberRegController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\user\FullSceduleController;
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

//coash:
Route::get('/admin/coaches', [CoachController::class, 'index'])->name('admin.coaches.index');
Route::put('admin/coaches/{id}', [CoachController::class, 'update'])->name('admin.coaches.update');
Route::get('/admin/coaches/{id}/edit',  [CoachController::class, 'edit'])->name('admin.coaches.edit');
Route::post('/admin/coaches', [CoachController::class, 'store'])->name('admin.add_coaches.store');
Route::delete('/admin/coaches/{id}', [CoachController::class, 'destroy'])->name('admin.coaches.destroy');

// Admin profile: 
// Route::get('/Admin_profile_page', [TestController::class, 'testAction']);

// classes: 
Route::get('/admin/classes', [classesController::class, 'index'])->name('admin.classes.index');
Route::put('/admin/classes/{id}', [classesController::class, 'update'])->name('admin.classes.update');
Route::get('/admin/classes/{id}/edit',  [classesController::class, 'edit'])->name('admin.classes.edit');
Route::post('/admin/classes', [classesController::class, 'store'])->name('admin.add_classes.store');
Route::delete('/admin/classes/{id}', [classesController::class, 'destroy'])->name('admin.classes.destroy');


// User: 
Route::Get('/', [RegistrationController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
// Route::post('/login', [LoginController::class, 'login'])->name('user.login');
Route::post('/login', [GymMemberController::class, 'postLogin'])->name('user.login');

// Route::post('/', [RegistrationController::class, 'store']);

Route::view('/health', 'user.health');
Route::view('/home/{id}', 'user.home')->name('home');
Route::get('/schedule', [FullSceduleController::class, 'index'])->name('user.schedule.index');
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile/{id}', [ProfileController::class, 'index'])->name('profile.show');
Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
