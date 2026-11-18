<?php

use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'index']);

Route::get('/kalkulator/segitiga/{alas}/{tinggi}', [KalkulatorController::class, 'hitung'])
    ->where('alas', '[0-9]+(\.[0-9]+)?')
    ->where('tinggi', '[0-9]+(\.[0-9]+)?');
