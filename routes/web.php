<?php

use Illuminate\Support\Facades\Route;

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
