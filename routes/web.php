<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.frontend.home.index');
});

Route::get('/about', function () {
    return view('page.frontend.about.index');
});

Route::get('/news', function () {
    return view('page.frontend.news.index');
});
