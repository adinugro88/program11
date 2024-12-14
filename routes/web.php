<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GajianController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DetailGajiController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',
])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::resource('karyawan', KaryawanController::class);
});

Route::resource('gajian', GajianController::class);

Route::resource('detail-gaji', DetailGajiController::class);