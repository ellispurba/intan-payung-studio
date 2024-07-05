<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PenjadwalanController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('landingPage.index');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
});

Route::prefix('landingPage')->group(function () {
    Route::get('/', [LandingPageController::class, 'index'])->name('landingPage.index');
});

Route::prefix('paket')->group(function () {
    Route::get('/', [PaketController::class, 'index'])->name('paket.index');
    Route::post('/store', [PaketController::class, 'store'])->name('paket.store');
    Route::get('/edit/{id}', [PaketController::class, 'edit'])->name('paket.edit');
    Route::post('/update', [PaketController::class, 'update'])->name('paket.update');
    Route::delete('/{id}', [PaketController::class, 'destroy'])->name('paket.destroy');
});

Route::prefix('penjadwalan')->group(function () {
    Route::get('/', [PenjadwalanController::class, 'index'])->name('penjadwalan.index');
});

Route::prefix('pemesanan')->group(function () {
    Route::get('/', [PemesananController::class, 'index'])->name('pemesanan.index');
});

Route::prefix('karyawan')->group(function () {
    Route::get('/', [KaryawanController::class, 'index'])->name('karyawan.index');
});