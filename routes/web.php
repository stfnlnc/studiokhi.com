<?php

use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\PostController as PostControllerAlias;
use App\Http\Controllers\Admin\TagController;
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
use App\Http\Controllers\SitemapController;
use App\Http\Resources\WorkResource;
use App\Models\Work;
use Illuminate\Support\Facades\Route;




Route::prefix('')->name('app.')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/studio', [StudioController::class, 'index'])->name('studio');
    Route::get('/realisations', [WorkController::class, 'index'])->name('work');
    Route::get('/realisations/{slug}', [WorkController::class, 'show'])->name('work.show');
    Route::get('/faq', [FaqController::class, 'index'])->name('faq');
    Route::get('/articles', [PostController::class, 'index'])->name('posts');
    Route::get('/articles/{slug}', [PostController::class, 'show'])->name('post.show');
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

Route::get('/api/works', function () {
    return WorkResource::collection(Work::orderBy('order')->get());
});


Route::prefix('/dashboard')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('works', WorkControllerAlias::class);
    Route::patch('works/up/{work}', [WorkControllerAlias::class, 'up'])->name('works.up');
    Route::patch('works/down/{work}', [WorkControllerAlias::class, 'down'])->name('works.down');
    Route::delete('/works/{work}/image', [WorkControllerAlias::class, 'destroyImage'])->name('works.destroyImage');
    Route::delete('/images/{image}/image', [WorkControllerAlias::class, 'destroyImages'])->name('works.destroyImages');
    Route::patch('images/up/{image}', [WorkControllerAlias::class, 'upImage'])->name('images.up');
    Route::patch('images/down/{image}', [WorkControllerAlias::class, 'downImage'])->name('images.down');
    Route::post('/tags/store', [TagController::class, 'store'])->name('tags.store');
    Route::delete('/tags/delete/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');
    Route::resource('posts', PostControllerAlias::class);
    Route::delete('/posts/{post}/image', [PostControllerAlias::class, 'destroyImage'])->name('posts.destroyImage');
    Route::get('/images', [ImageController::class, 'index'])->name('images.index');
    Route::patch('/images/updateorcreate', [ImageController::class, 'updateOrCreate'])->name('images.updateorcreate');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::fallback(function () {
    return view('errors.404');
});

require __DIR__ . '/auth.php';
