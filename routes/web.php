<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Project', function () {
    return view('project');
});

Route::get('/siswa/{nama}', function ($nama) {
    return "Nama siswa: " . $nama;
});

Route::get('/product', [ProductController::class, 'index']);