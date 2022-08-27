<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\Http\Controllers\dashboardAdminContoller;
use App\Http\Controllers\dashboardUser;
use App\Http\Controllers\detailPemesananControllerAdmin;
use App\Http\Controllers\detailPemesananControllerUser;
use App\Http\Controllers\detailPemesananUser;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\jadwalContoller;
use App\Http\Controllers\laporanContoller;
use App\Http\Controllers\paketControllerAdmin;
use App\Http\Controllers\paketControllerUser;
use App\Http\Controllers\userController;
use App\Http\Controllers\login;
use App\Http\Controllers\pemesananUserController;
use App\Http\Controllers\registerControllerAll;

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

/////ADMIN
Route::middleware(['admin'])->group(function () {
    Route::resource('/user', userController::class);
    Route::resource('/paket', paketControllerAdmin::class);
    Route::resource('/pemesanan', detailPemesananControllerAdmin::class);
    Route::resource('/laporan', laporanContoller::class);
    Route::resource('/dashboardAdmin', dashboardAdminContoller::class);
});
/////USER
Route::middleware(['user'])->group(function () {
    Route::resource('/pemesananUser', pemesananUserController::class);
    Route::resource('/detailPemesananUser', detailPemesananControllerUser::class);
    Route::post('/lempar', [detailPemesananControllerUser::class, 'lempar'])->name('lempar');
});
/////ALL
Route::resource('/login', login::class);
Route::get('/logout', [login::class, 'logout']);
Route::resource('/jadwal', jadwalContoller::class);
Route::resource('/dashboardUser', dashboardUser::class);
Route::resource('/paketUser', paketControllerUser::class);
Route::resource('/register', registerControllerAll::class);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('user.index');
});
Route::get('/sk', function () {
    return view('user.SK.index');
})->name('sk');
