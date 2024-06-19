<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage.index');
});

Route::get('/master', function () {
    return view('layouts.master');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/paketFoto', function () {
    return view('admin.paketFoto');
});

Route::get('/dataPenjadwalan', function () {
    return view('admin.dataPenjadwalan');
});

Route::get('/dataPemesanan', function () {
    return view('admin.dataPemesanan');
});

Route::get('/dataKaryawan', function () {
    return view('admin.dataKaryawan');
});
