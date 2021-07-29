<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login', [MainController::class,'login'])->name('auth.login');
Route::get('/auth/register', [MainController::class,'register'])->name('auth.register');
Route::post('/auth/save', [MainController::class,'save'])->name('auth.save');
Route::post('/auth/check', [MainController::class,'check'])->name('auth.check');
Route::get('/admin/logout', [MainController::class,'logout'])->name('auth.logout');
Route::get('/admin/dashboard', [MainController::class,'dashboard'])->name('auth.dashboard');

