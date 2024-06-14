<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('LandingPage.index');
});

Route::get('/dashboard', function () {
    return view('Layouts.master');
});
