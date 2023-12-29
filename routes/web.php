<?php

use App\Http\Controllers\KlinikController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'klinik']);
Route::get('/home/berita', [HomeController::class, 'berita']);
Route::get('/home/jadwal', [HomeController::class, 'jadwal']);

Route::get('/jadwal', [JadwalController::class, 'index']);
Route::get('/jadwal/create', [JadwalController::class, 'create']);
Route::get('/jadwal/edit', [JadwalController::class, 'edit']);

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/create', [BeritaController::class, 'create']);
Route::get('/berita/edit/{id}', [BeritaController::class, 'edit']);
Route::get('/berita/delete/{id}', [BeritaController::class, 'destroy']);
Route::post('/berita', [BeritaController::class, 'store']);
Route::put('/berita/{id}', [BeritaController::class, 'update']);

Route::get('/klinik', [KlinikController::class, 'index']);
Route::get('/klinik/create', [KlinikController::class, 'create']);
Route::get('/klinik/edit', [KlinikController::class, 'edit']);