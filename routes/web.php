<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Auth\Admin\RegisterController;
use App\Http\Controllers\Auth\Admin\LoginController;

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

// Frontend routes
Route::get('/', [HomeController::class, 'index'])->name('index');

//User Route
Route::get('token/{token}', [UserController::class,'verify'])->name('user.verification');

//Backend Routes
Route::prefix('admin')->group(function(){
	Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');




	//Admin Auth
	Route::get('/login', [LoginController::class, 'login'])->name('admin.login');
	Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('admin.register');
	Route::post('/register', [RegisterController::class, 'register'])->name('admin.register');
	
});

Auth::routes();
