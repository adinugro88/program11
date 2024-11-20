<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Karyawan\Index as Karyawan;
use App\Livewire\Karyawan\Create as KaryawanCreate;
use App\Livewire\Karyawan\Edit as KaryawanEdit;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',
])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/karyawan', function () {return view('pages.karyawan');})->name('karyawan');
    Route::get('/karyawan/create', KaryawanCreate::class)->name('karyawan.create');
    Route::get('/karyawan/edit/{id}', KaryawanIndex::class)->name('karyawanedit');
});
