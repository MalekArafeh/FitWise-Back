<?php

use App\Http\Controllers\classesController;
use App\Http\Controllers\GymPlanController;
use App\Http\Controllers\CoachController;

use App\Http\Controllers\GymMemberController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\user\FullSceduleController;
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
Route::post('/admin/members', [GymMemberController::class, 'importExcelData'])->name('importExcelData.index');
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
Route::get('/plan/{id}', [GymPlanController::class, 'show'])->name('admin.plan.show');

//coash:
Route::get('/admin/coaches', [CoachController::class, 'index'])->name('admin.coaches.index');
Route::put('admin/coaches/{id}', [CoachController::class, 'update'])->name('admin.coaches.update');
Route::get('/admin/coaches/{id}/edit',  [CoachController::class, 'edit'])->name('admin.coaches.edit');
Route::post('/admin/coaches', [CoachController::class, 'store'])->name('admin.add_coaches.store');
Route::delete('/admin/coaches/{id}', [CoachController::class, 'destroy'])->name('admin.coaches.destroy');

// Admin profile: 
Route::get('/admin/profile', [AdminProfileController::class, 'index'])->name('admin.profile.index');
Route::put('/admin/profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');

// classes: 
Route::get('/admin/classes', [classesController::class, 'index'])->name('admin.classes.index');
Route::put('/admin/classes/{id}', [classesController::class, 'update'])->name('admin.classes.update');
Route::get('/admin/classes/{id}/edit',  [classesController::class, 'edit'])->name('admin.classes.edit');
Route::post('/admin/classes', [classesController::class, 'store'])->name('admin.add_classes.store');
Route::delete('/admin/classes/{id}', [classesController::class, 'destroy'])->name('admin.classes.destroy');

// dashboard: 
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');



// User: 
Route::Get('/', [RegistrationController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('user.login');
Route::get('/login/destroy', [LoginController::class, 'destroy'])->name('user.logout');
// Route::post('/login', [LoginController::class, 'login'])->name('user.login');
Route::get('/login/check', [GymMemberController::class, 'postLogin'])->name('user.login.check');

// Route::post('/', [RegistrationController::class, 'store']);

// Route::view('/health/{id}','user.health')->name('health');
Route::get('/health/{id}', [HealthController::class, 'index'])->name('health');

Route::get('/home/{id}', [HomeController::class, 'index'])->name('home');
Route::get('/schedule', [FullSceduleController::class, 'index'])->name('user.schedule.index');
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile/{id}', [ProfileController::class, 'index'])->name('profile.show');
Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
