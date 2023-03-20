<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin;

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
    return view('welcome');
});

Route::prefix('admin')-> group(function(){
    Route::get('/', [Admin\Auth\LoginController::class, 'loginForm']);
    Route::get('/login', [Admin\Auth\LoginController::class, 'loginForm'])->name('admin.login');
    Route::post('/login',[Admin\Auth\LoginController::class, 'login'])->name('admin.login');
    Route::get('/home', [Admin\HomeController::class, 'index'])->name('admin.home');
    Route::get('/logout',[Admin\Auth\LoginController::class, 'logout'])->name('admin.logout');
});

Route::get('/input', function (){
     return view('/inc.inpt');
     });
