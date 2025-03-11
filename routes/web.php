<?php

use App\Http\Controllers\PageMover;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [PageMover::class, 'home'])->name('page.home');

Route::get('/officials', [PageMover::class, 'officials'])->name('page.officials');

Route::get('/reports', [PageMover::class, 'reports'])->name('page.reports');

Route::get('/documents', [PageMover::class, 'documents'])->name('page.documents');

Route::get('/visionmission', [PageMover::class, 'visionmission'])->name('page.visionmission');

Route::get('/settings', [PageMover::class, 'settings'])->name('page.settings');

Route::get('/residents', [PageMover::class, 'residents'])->name('page.residents');

Route::get('/addResident', [PageMover::class, 'addResident'])->name('page.addResident');
Route::post('/addResident', [PageMover::class, 'storeResident'])->name('page.storeResident');
Route::delete('/destroyResident/{resident}', [PageMover::class, 'destroyResident'])->name('page.destroyResident');

Route::get('/addBlotter', [PageMover::class, 'addBlotter'])->name('page.addBlotter');
Route::post('/addBlotter', [PageMover::class, 'storeBlotter'])->name('page.storeBlotter');
Route::delete('/destroyBlotter/{blotter}', [PageMover::class, 'destroyBlotter'])->name('page.destroyBlotter');

Route::get('/addDocument', [PageMover::class, 'addDocument'])->name('page.addDocument');
Route::post('/addDocument', [PageMover::class, 'storeDocument'])->name('page.storeDocument');
Route::delete('/destroyDocument/{document}', [PageMover::class, 'destroyDocument'])->name('page.destroyDocument');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
