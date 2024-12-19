<?php

use App\Http\Controllers\Admin\WorkController as WorkControllerAlias;
use App\Http\Controllers\App\ContactController;
use App\Http\Controllers\App\FaqController;
use App\Http\Controllers\App\IndexController;
use App\Http\Controllers\App\PolicyController;
use App\Http\Controllers\App\PostController;
use App\Http\Controllers\App\PriceController;
use App\Http\Controllers\App\ServiceController;
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
    Route::get('/tarifs', [PriceController::class, 'index'])->name('price');
    Route::prefix('/services')->name('service.')->group(function () {
        Route::get('/branding-et-direction-artistique', [ServiceController::class, 'branding'])->name('branding');
        Route::get('/webdesign-et-design-digital', [ServiceController::class, 'webdesign'])->name('webdesign');
        Route::get('/sites-sur-mesure', [ServiceController::class, 'website'])->name('website');
    });
    Route::name('policy.')->group(function () {
        Route::get('/mentions-legales', [PolicyController::class, 'term_of_use'])->name('term_of_use');
        Route::get('/politique-de-confidentialite', [PolicyController::class, 'privacy_policy'])->name('privacy_policy');
        Route::get('/cookies', [PolicyController::class, 'cookies'])->name('cookies');
    });
});


Route::prefix('/dashboard')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('works', WorkControllerAlias::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
