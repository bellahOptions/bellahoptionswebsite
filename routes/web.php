<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BellahController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('home');
});

Route::get('/about-bellah-options', [BellahController::class, 'ShowAbout'])->name('about');
Route::get('/bellah-options-services', [BellahController::class, 'ShowServices'])->name('services');
Route::get('/work-with-bellah-options', [BellahController::class, 'ShowCareers'])->name('careers');
Route::get('/contact-bellah-options', [BellahController::class, 'ShowContact'])->name('contact');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
