<?php

use Illuminate\Support\Facades\Route;
//Admin
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\admin\FrontpageContoller;
//Web
use App\Http\Controllers\web\WebController;

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
//Image Page
Route::get('page', [FrontpageContoller::class, 'index'])->name('page');
Route::delete('page/{id}', [FrontpageContoller::class, 'delete'])->name('page');
Route::post('page', [FrontpageContoller::class, 'store'])->name('page');
//Web Page
Route::get('/', [WebController::class, 'home'])->name('home-web');
Route::get('team-web', [WebController::class, 'team'])->name('team-web');
