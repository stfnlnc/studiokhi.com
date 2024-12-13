<?php

use App\Http\Controllers\App\ContactController;
use App\Http\Controllers\App\FaqController;
use App\Http\Controllers\App\IndexController;
use App\Http\Controllers\App\PostController;
use App\Http\Controllers\App\StudioController;
use App\Http\Controllers\App\WorkController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::prefix('')->name('app.')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/studio', [StudioController::class, 'index'])->name('studio');
    Route::get('/realisations', [WorkController::class, 'index'])->name('work');
    Route::get('/faq', [FaqController::class, 'index'])->name('faq');
    Route::get('/articles', [PostController::class, 'index'])->name('posts');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
