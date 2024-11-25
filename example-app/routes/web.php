<?php
use App\Http\Controllers\TestController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;



use Illuminate\Support\Facades\Route;





Route::Get('/',[RegistrationController::class, 'index']);

Route::get('/login',[LoginController::class,'index']);


