<?php

use App\Http\Controllers\KlinikController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LandingPageController;

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

Route::get('/successregister', function () {
    return view('auth.success');
});

Route::get('/', [LandingPageController::class, 'klinik']);
Route::get('/page/berita', [LandingPageController::class, 'berita']);
Route::get('/page/jadwal', [LandingPageController::class, 'jadwal']);

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


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
