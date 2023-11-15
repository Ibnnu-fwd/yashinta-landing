<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\LandingController;
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

require __DIR__ . '/auth.php';
