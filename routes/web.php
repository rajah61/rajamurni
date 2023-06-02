<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatapenyakitController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\RiwayatController;

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

Route::get('/', [DashboardController::class, 'index']);
Route::get('/diagnosis', [DiagnosisController::class, 'index']);
Route::get('/datapenyakit', [DatapenyakitController::class, 'index']);
Route::get('/riwayat', [RiwayatController::class, 'index']);
