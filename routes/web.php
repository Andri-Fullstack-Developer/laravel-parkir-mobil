<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin;
use App\Http\Controllers\ParkirController;

use App\Http\Controllers\ParkirmobilController;

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
    return view('/welcome');
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

//Route::get('/out.store', [ParkirController::class, 'out.store'])->name('out.store');
Route::post('/out', [ParkirController::class, 'store'])->name('out.store');
Route::get('/welcome', [ParkirController::class, 'index'])->name('welcome');


//Route::get('/form', [Parkir\ParkirmobilController::class, 'index']);
//Route::post('/simpan-data', [Parkir\ParkirmobilController::class, 'submit']);