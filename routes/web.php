<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', [ProjectController::class, 'index'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [ProjectController::class, 'dashboard'])->name('dashboard');
    Route::post('/dashboard/projects', [ProjectController::class, 'store'])->name('dashboard.projects.store');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::delete('/dashboard/projects/{project}', [ProjectController::class, 'destroy'])->name('dashboard.projects.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/dashboard/projects', [ProjectController::class, 'store'])->name('dashboard.projects.store');

});

require __DIR__.'/auth.php';