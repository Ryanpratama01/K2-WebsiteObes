<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing_page.index');

});

Route::get('/home', function () {
    return view('landing_page.index');
});

Route::get('/informasi', function () {
    return redirect('/home#information');
});

Route::get('/about', function () {
    return redirect('/home#about');
});

Route::get('/contact', function () {
    return redirect('/home#contact');
});
Route::get('/login', function () {
    return view('landing_page.login');

});
Route::get('/register', function () {
    return view('landing_page.register');

});