<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::middleware(['auth'])->group(function () {
    Route::resource('reviewers', \App\Http\Controllers\ReviewerController::class);
});
 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::resource('reviewers', \App\Http\Controllers\ReviewerController::class)->middleware('auth');
// routes/web.php
use App\Http\Controllers\AuditTrailController;
Route::get('/audit-trail', [AuditTrailController::class, 'index'])->name('admin.audit.index');
use App\Http\Controllers\AccreditationController;
Route::resource('accreditations', AccreditationController::class);


