<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('landing_page.about');

});

Route::get('/blog', function () {
    return view('landing_page.blog');

});

Route::get('/contact', function () {
    return view('landing_page.contact');

});

Route::get('/', function () {
    return view('landing_page.index');

});

Route::get('/models', function () {
    return view('landing_page.models');

});
