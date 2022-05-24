<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\DashboardArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardJadwalController;
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

Route::get('/login',[BasicController::class,'login'] );
Route::get('/about',[BasicController::class,'about'] );
Route::get('/artikel',[BasicController::class,'artikel'] );

Route::get('/jadwal',[BasicController::class, 'jadwal']);
Route::get('/jadwal/{typeJadwal}',[BasicController::class, 'selectJadwal']);

Route::get('/dashboard',[DashboardController::class, 'dashboard']);


Route::resource('/dashboard/artikel',DashboardArtikelController::class);
Route::get('/dashboard/artikel/checkSlug',[DashboardArtikelController::class,'checkSlug']);

Route::resource('/dashboard/jadwal',DashboardJadwalController::class);



