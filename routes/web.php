<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('kategori', [KategoriController::class, 'index'])->name('kategori.index');

Route::view('tampilan', 'template.app');
