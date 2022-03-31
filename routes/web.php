<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\DashboardController;
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

Route::get('/dashboard',[DashboardController::class, 'index']);

