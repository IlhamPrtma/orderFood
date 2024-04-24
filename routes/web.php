<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Public\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

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
// Route::get('/', [HomeController::class, 'index'])->name('guest.menu')->middleware('guest');
// Route::get('/', [Controller::class, 'index'] )-> name('Home');
Route::get('/', [HomeController::class, 'index'] )-> name('Home');
// Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/layout', [AdminController::class, 'layout'])->name('layout.dashboard');
Route::get('/order', [AdminController::class, 'order'])->name('order.dashboard');


// Login
Route::get('/login', [UserController::class, 'login'] )-> name('login.admin')->middleware('guest');;
Route::post('/login', [UserController::class, 'authenticate'])->name('login.admin.auth');

// Logout
Route::get('logout', [UserController::class, 'logout'])->name('admin.logout');

Route::middleware('auth')->group(function () {
    // Route::get('/home', [AdminController::class, 'home'])->name('home.dashboard');
    Route::get('/menu', [AdminController::class, 'menu'])->name('menu.dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});