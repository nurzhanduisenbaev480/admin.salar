<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::middleware('auth')->group(function (){
    /** ================= Auth =====================*/
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');


    /** ================= USER (Пользователь) =====================*/
    Route::get('/', [UserController::class, 'profile'])->name('user.profile');

});


