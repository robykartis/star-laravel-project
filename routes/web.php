<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AuthController;
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

Route::get('/', function () {
    return view('index');
});
Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/login/proccess', [AuthController::class, 'authLogin'])->name('authLogin');
    Route::get('/register', [AuthController::class, 'index'])->name('auth.register');
    Route::get('/register/proccess', [AuthController::class, 'authRegister'])->name('authRegister');
});
Route::prefix('dashboard')->group(function () {
    Route::get('/admin', [DashboardController::class, 'admin'])->name('dashboard.admin');
});
