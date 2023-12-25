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
    return view('content.LandingPages.index');
});

Route::get('/berita', function () {
    return view('content.LandingPages.berita');
});


Route::get('/navbar', function () {
    return view('partials.dashboard.navbar');
});
Route::get('/side', function () {
    return view('partials.dashboard.sidebar');
});
Route::get('/main', function () {
    return view('partials.dashboard.main');
});

Route::get('/home', function () {
    return view('partials.landingPages.main');
});
Route::get('/home/nav', function () {
    return view('partials.landingPages.navbar');
});
Route::get('/home/foot', function () {
    return view('partials.landingPages.footer');
});



Route::get('/klinik', function () {
    return view('content.klinik.index');
});