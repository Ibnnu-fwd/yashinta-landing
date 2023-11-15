<?php

use App\Http\Controllers\User\LandingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
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
Route::get('faq', [LandingController::class, 'faq'])->name('user.landing.faq');
Route::get('gallery', [LandingController::class, 'gallery'])->name('user.landing.gallery');

// Admin
Route::group(['prefix'=> 'admin', 'middleware' => ['auth']], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard.index');

    Route::group(['prefix'=> 'profile'], function(){
        Route::get('/', [ProfileController::class, 'index'])->name('admin.profile.index');
        Route::post('/update', [ProfileController::class, 'update'])->name('admin.profile.update');
    });
});

require __DIR__ . '/auth.php';
