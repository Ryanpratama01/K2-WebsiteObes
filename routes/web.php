<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebUserController;

Route::get('/about', function () {
    return view('landing_page.about');

});

Route::get('/contact', function () {
    return view('landing_page.contact');

});

Route::get('/', function () {
    return view('landing_page.index');

});

Route::get('/information', function () {
    return view('landing_page.information');

});


// Halaman Beranda
Route::get('/', function () {
    return view('web_user.beranda');
})->name('beranda');

// Halaman Kalkulator
Route::get('/kalkulator', function () {
    return view('web_user.kalkulator');
})->name('kalkulator');

// Halaman Rekomendasi
Route::get('/rekomendasi', function () {
    return view('web_user.rekomendasi');
})->name('rekomendasi');

// Halaman History
Route::get('/history', function () {
    return view('web_user.history');
})->name('history');

