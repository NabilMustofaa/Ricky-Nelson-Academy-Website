<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\DashboardArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardJadwalController;
use App\Http\Controllers\DashboardPesertaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\staffController;
use App\Http\Controllers\StatistikController;
use App\Models\Artikel;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\statistik;
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

Route::get('/', [BasicController::class,'home']);
Route::get('/about',[BasicController::class,'about']);
Route::get('/artikel',[BasicController::class,'artikel'] );
Route::get('/jadwal',[BasicController::class, 'jadwal']);
Route::get('/jadwal/{typeJadwal}',[BasicController::class, 'selectJadwal']);

Route::get('/login',[LoginController::class,'login'])->middleware('guest')->name('login');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('logout',[LoginController::class,'logout']);

Route::get('/beranda',[DashboardController::class, 'user'])->middleware(['auth','isAdmin:0']);

Route::get('/dashboard',[DashboardController::class, 'dashboard'])->middleware(['auth','isAdmin:1']);
Route::resource('/dashboard/artikel',DashboardArtikelController::class)->middleware(['auth','isAdmin:1']);
Route::resource('/dashboard/jadwal',DashboardJadwalController::class)->middleware(['auth','isAdmin:1']);
Route::resource('/dashboard/peserta',DashboardPesertaController::class)->middleware(['auth','isAdmin:1']);
Route::resource('/beranda/statistik',StatistikController::class)->middleware(['auth','isAdmin:0']);
Route::resource('/dashboard/staff',staffController::class)->middleware(['auth','isAdmin:1']);

