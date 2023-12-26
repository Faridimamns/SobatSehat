<?php

use App\Http\Controllers\KlinikController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\JadwalController;



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
    return view('content.LandingPages.index');
});

Route::get('/JadwalAdmin', [JadwalController::class, 'index']);
Route::get('/JadwalAdmin/create', [JadwalController::class, 'create']);
Route::get('/JadwalAdmin/edit', [JadwalController::class, 'edit']);

Route::get('/databerita', [BeritaController::class, 'index']);
Route::get('/databerita/create', [BeritaController::class, 'create']);
Route::get('/databerita/edit', [BeritaController::class, 'edit']);

