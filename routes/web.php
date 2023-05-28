<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
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
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::middleware('auth')->group(function (){

    /** ================= Dashboard =====================*/
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    /** ================= USER (Пользователь) =====================*/
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');

    /** =================  Order (Заявки, Накладные) =====================*/
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');

});


