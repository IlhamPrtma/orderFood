<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Public\PublicController;
use App\Http\Controllers\AdminController;

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
Route::get('/loginpage', [HomeController::class, 'loginpage'] )-> name('login.admin');
Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/layout', [AdminController::class, 'layout'])->name('layout.dashboard');
Route::get('/order', [AdminController::class, 'order'])->name('order.dashboard');
Route::get('/login', [HomeController::class, 'login'] )-> name('login.admin');
Route::get('/home', [AdminController::class, 'home'])->name('home.dashboard');
Route::get('/menu', [AdminController::class, 'menu'])->name('menu.dashboard');