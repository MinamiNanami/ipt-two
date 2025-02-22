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

Route::get('/test', [PageMover::class, 'test'])->name('page.test');

Route::get('/test2', [PageMover::class, 'test2'])->name('page.test2');

Route::get('/officialstwo', [PageMover::class, 'officialstwo'])->name('page.officialstwo');

Route::get('/documentstwo', [PageMover::class, 'documentstwo'])->name('page.documentstwo');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
