<?php

use App\Http\Controllers\PageMover;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PageMover::class, 'home'])->name('page.home');

Route::get('/officials', [PageMover::class, 'officials'])->name('page.officials');

Route::get('/reports', [PageMover::class, 'reports'])->name('page.reports');

Route::get('/documents', [PageMover::class, 'documents'])->name('page.documents');

Route::get('/visionmission', [PageMover::class, 'visionmission'])->name('page.visionmission');

Route::get('/settings', [PageMover::class, 'settings'])->name('page.settings');

Route::get('/residents', [PageMover::class, 'residents'])->name('page.residents');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
