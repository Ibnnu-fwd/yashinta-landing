<?php

use App\Http\Controllers\Admin\CommitmentController;
use App\Http\Controllers\User\LandingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\GalleryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingController::class, 'index'])->name('user.landing.index');
Route::get('profile', [LandingController::class, 'profile'])->name('user.landing.profile');
Route::get('news', [LandingController::class, 'news'])->name('user.landing.news');
Route::get('news/{slug}', [LandingController::class, 'newsDetail'])->name('user.landing.news.detail');
Route::get('faq', [LandingController::class, 'faq'])->name('user.landing.faq');
Route::get('gallery', [LandingController::class, 'gallery'])->name('user.landing.gallery');

// Admin
Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard.index');

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', [ProfileController::class, 'index'])->name('admin.profile.index');
        Route::post('/update', [ProfileController::class, 'update'])->name('admin.profile.update');
    });

    // News
    Route::group(['prefix' => 'news'], function () {
        Route::get('/', [AdminNewsController::class, 'index'])->name('admin.news.index');
        Route::get('/create', [NewsController::class, 'create'])->name('admin.news.create');
        Route::post('/store', [NewsController::class, 'store'])->name('admin.news.store');
        Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('admin.news.edit');
        Route::post('/update/{id}', [NewsController::class, 'update'])->name('admin.news.update');
        Route::post('/destroy/{id}', [NewsController::class, 'destroy'])->name('admin.news.destroy');
    });

    // Commitment
    Route::group(['prefix' => 'commitment'], function () {
        Route::get('/', [CommitmentController::class, 'index'])->name('admin.commitment.index');
        Route::get('/create', [CommitmentController::class, 'create'])->name('admin.commitment.create');
        Route::post('/store', [CommitmentController::class, 'store'])->name('admin.commitment.store');
        Route::get('/edit/{id}', [CommitmentController::class, 'edit'])->name('admin.commitment.edit');
        Route::post('/update/{id}', [CommitmentController::class, 'update'])->name('admin.commitment.update');
        Route::post('/destroy/{id}', [CommitmentController::class, 'destroy'])->name('admin.commitment.destroy');
    });

    //Gallery
    Route::group(['prefix' => 'gallery'], function () {
        Route::get('/', [GalleryController::class, 'index'])->name('admin.gallery.index');
        Route::get('/create', [GalleryController::class, 'create'])->name('admin.gallery.create');
        Route::post('/store', [GalleryController::class, 'store'])->name('admin.gallery.store');
        Route::get('/edit/{id}', [GalleryController::class, 'edit'])->name('admin.gallery.edit');
        Route::post('/update/{id}', [GalleryController::class, 'update'])->name('admin.gallery.update');
        Route::post('/destroy/{id}', [GalleryController::class, 'destroy'])->name('admin.gallery.destroy');
    });
});

require __DIR__ . '/auth.php';
