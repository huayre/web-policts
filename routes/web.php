<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\TeamController;

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
})->name('inicio');

Route::get('home', function () {
    return view('admin.home.index');
})->name('home');
//Auth
Route::view('login','admin.auth.login');
Route::post('login',[AuthController::class,'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

//Team
Route::get('team', [TeamController::class, 'index'])->name('team');
Route::post('team', [TeamController::class, 'store'])->name('team');
