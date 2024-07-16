<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PenjadwalanController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GaleriController;

// Route::get('/', function () {
//     return view('landingPage.index');
// });

Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
});

Route::prefix('/')->group(function () {
    Route::get('/', [LandingPageController::class, 'index'])->name('landingPage.index');
});

Route::prefix('paket')->group(function () {
    Route::get('/', [PaketController::class, 'index'])->name('paket.index');
    Route::post('/store', [PaketController::class, 'store'])->name('paket.store');
    Route::get('/edit/{id}', [PaketController::class, 'edit'])->name('paket.edit');
    Route::post('/update', [PaketController::class, 'update'])->name('paket.update');
    Route::delete('/{id}', [PaketController::class, 'destroy'])->name('paket.destroy');
});

Route::prefix('galeri')->group(function () {
    Route::get('/', [GaleriController::class, 'index'])->name('galeri.index');
    Route::post('/store', [GaleriController::class, 'store'])->name('galeri.store');
    Route::get('/edit/{id}', [GaleriController::class, 'edit'])->name('galeri.edit');
    Route::post('/update', [GaleriController::class, 'update'])->name('galeri.update');
    Route::delete('/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');
});

Route::prefix('penjadwalan')->group(function () {
    Route::get('/', [PenjadwalanController::class, 'index'])->name('penjadwalan.index');
    Route::post('/store', [PenjadwalanController::class, 'store'])->name('penjadwalan.store');
    Route::get('/edit/{id}', [PenjadwalanController::class, 'edit'])->name('penjadwalan.edit');
    Route::post('/update', [PenjadwalanController::class, 'update'])->name('penjadwalan.update');
    Route::delete('/{id}', [PenjadwalanController::class, 'destroy'])->name('penjadwalan.destroy');
});

Route::prefix('pemesanan')->group(function () {
    Route::get('/', [PemesananController::class, 'index'])->name('pemesanan.index');
    Route::post('/store', [PemesananController::class, 'store'])->name('pemesanan.store');
    Route::get('/edit/{id}', [PemesananController::class, 'edit'])->name('pemesananan.edit');
    Route::post('/update', [PemesananController::class, 'update'])->name('pemesanan.update');
    Route::delete('/{id}', [PemesananController::class, 'destroy'])->name('pemesanan.destroy');
});

Route::prefix('karyawan')->group(function () {
    Route::get('/', [KaryawanController::class, 'index'])->name('karyawan.index');
    Route::post('/store', [KaryawanController::class, 'store'])->name('karyawan.store');
    Route::get('/edit/{id}', [KaryawanController::class, 'edit'])->name('karyawan.edit');
    Route::post('/update', [KaryawanController::class, 'update'])->name('karyawan.update');
    Route::delete('/{id}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');
});

Route::prefix('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('auth.index');
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/postRegister', [AuthController::class, 'postRegister'])->name('auth.postRegister');
    Route::post('/postLogin', [AuthController::class, 'postLogin'])->name('auth.postLogin');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});