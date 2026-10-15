<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/world', function () {
    return view('pages.world');
});

Route::get('/foundation', function () {
    return view('pages.foundation');
});

Route::get('/preview/parchment', function () {
    return view('preview.parchment');
});
