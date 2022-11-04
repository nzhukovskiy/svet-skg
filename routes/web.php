<?php

use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/about_us', [HomeController::class, 'about_us'])->name("about_us");
Route::get('/login', [AuthorizationController::class, 'show_login'])->name("show_login");
Route::post('/login', [AuthorizationController::class, 'login'])->name("login");
Route::get('/register', [AuthorizationController::class, 'show_register'])->name("show_register");
Route::post('/register', [AuthorizationController::class, 'register'])->name("register");
Route::get('/admin_panel', [UserController::class, 'show_admin_panel'])->name("admin_panel");
Route::resource('photos', PhotoController::class);
Route::resource('products', ProductController::class);
