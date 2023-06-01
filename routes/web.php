<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/metode', function () {
    return view('metode');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/datapenyakit', function () {
    return view('datapenyakit');
});
Route::get('/diagnosis', function () {
    return view('diagnosis');
});
Route::get('/riwayat', function () {
    return view('riwayat');
});
