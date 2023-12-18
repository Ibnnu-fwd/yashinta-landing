<?php

use App\Http\Controllers\Admin\CommitmentController;
use App\Http\Controllers\User\LandingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\AspirationController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\EducationsController;
use App\Http\Controllers\Admin\ExperiencesController;
use App\Http\Controllers\Admin\OrganizationsController;
use App\Http\Controllers\Admin\SocialActivityController;
use App\Http\Controllers\Admin\TestimonialController;
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

// User
Route::get('/', [LandingController::class, 'index'])->name('user.landing.index');
Route::post('/store-aspiration', [LandingController::class, 'storeAspiration'])->name('user.aspiration.store');
Route::get('profile', [LandingController::class, 'profile'])->name('user.landing.profile');
Route::get('news', [LandingController::class, 'news'])->name('user.landing.news');
Route::get('news/{slug}', [LandingController::class, 'newsDetail'])->name('user.landing.news.detail');
Route::get('faq', [LandingController::class, 'faq'])->name('user.landing.faq');
Route::get('gallery', [LandingController::class, 'gallery'])->name('user.landing.gallery');
Route::get('commitment', [LandingController::class, 'commitment'])->name('user.landing.commitment');
Route::get('commitment/{slug}', [LandingController::class, 'commitmentDetail'])->name('user.landing.commitment.detail');

// Admin
Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard.index');

    // Profile
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', [ProfileController::class, 'index'])->name('admin.profile.index');
        Route::post('/update', [ProfileController::class, 'update'])->name('admin.profile.update');
    });

    // News
    Route::group(['prefix' => 'news'], function () {
        Route::get('/', [NewsController::class, 'index'])->name('admin.news.index');
        Route::get('/create', [NewsController::class, 'create'])->name('admin.news.create');
        Route::post('/store', [NewsController::class, 'store'])->name('admin.news.store');
        Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('admin.news.edit');
        Route::post('/update/{id}', [NewsController::class, 'update'])->name('admin.news.update');
        Route::delete('/destroy/{id}', [NewsController::class, 'destroy'])->name('admin.news.destroy');
    });

    // Commitment
    Route::group(['prefix' => 'commitment'], function () {
        Route::get('/', [CommitmentController::class, 'index'])->name('admin.commitment.index');
        Route::get('/create', [CommitmentController::class, 'create'])->name('admin.commitment.create');
        Route::post('/store', [CommitmentController::class, 'store'])->name('admin.commitment.store');
        Route::get('/edit/{id}', [CommitmentController::class, 'edit'])->name('admin.commitment.edit');
        Route::post('/update/{id}', [CommitmentController::class, 'update'])->name('admin.commitment.update');
        Route::delete('/destroy/{id}', [CommitmentController::class, 'destroy'])->name('admin.commitment.destroy');
    });

    // Gallery
    Route::group(['prefix' => 'gallery'], function () {
        Route::get('/', [GalleryController::class, 'index'])->name('admin.gallery.index');
        Route::get('/create', [GalleryController::class, 'create'])->name('admin.gallery.create');
        Route::post('/store', [GalleryController::class, 'store'])->name('admin.gallery.store');
        Route::get('/edit/{id}', [GalleryController::class, 'edit'])->name('admin.gallery.edit');
        Route::post('/update/{id}', [GalleryController::class, 'update'])->name('admin.gallery.update');
        Route::delete('/destroy/{id}', [GalleryController::class, 'destroy'])->name('admin.gallery.destroy');
    });

    // Aspiration
    Route::group(['prefix' => 'aspiration'], function () {
        Route::get('/', [AspirationController::class, 'index'])->name('admin.aspiration.index');
        Route::get('/show/{id}', [AspirationController::class, 'show'])->name('admin.aspiration.show');
    });

    // Social Media
    Route::group(['prefix' => 'social-media'], function () {
        Route::get('/', [SocialMediaController::class, 'index'])->name('admin.social-media.index');
        Route::get('/create', [SocialMediaController::class, 'create'])->name('admin.social-media.create');
        Route::post('/store', [SocialMediaController::class, 'store'])->name('admin.social-media.store');
        Route::get('/edit/{id}', [SocialMediaController::class, 'edit'])->name('admin.social-media.edit');
        Route::post('/update/{id}', [SocialMediaController::class, 'update'])->name('admin.social-media.update');
        Route::delete('/destroy/{id}', [SocialMediaController::class, 'destroy'])->name('admin.social-media.destroy');
    });

    // Faq
    Route::group(['prefix' => 'faq'], function () {
        Route::get('/', [FaqController::class, 'index'])->name('admin.faq.index');
        Route::get('/create', [FaqController::class, 'create'])->name('admin.faq.create');
        Route::post('/store', [FaqController::class, 'store'])->name('admin.faq.store');
        Route::get('/edit/{id}', [FaqController::class, 'edit'])->name('admin.faq.edit');
        Route::post('/update/{id}', [FaqController::class, 'update'])->name('admin.faq.update');
        Route::delete('/destroy/{id}', [FaqController::class, 'destroy'])->name('admin.faq.destroy');
    });

    // Educations
    Route::group(['prefix' => 'educations'], function () {
        Route::get('/', [EducationsController::class, 'index'])->name('admin.educations.index');
        Route::get('/create', [EducationsController::class, 'create'])->name('admin.educations.create');
        Route::post('/store', [EducationsController::class, 'store'])->name('admin.educations.store');
        Route::get('/edit/{id}', [EducationsController::class, 'edit'])->name('admin.educations.edit');
        Route::post('/update/{id}', [EducationsController::class, 'update'])->name('admin.educations.update');
        Route::delete('/destroy/{id}', [EducationsController::class, 'destroy'])->name('admin.educations.destroy');
    });

    // Experiences
    Route::group(['prefix' => 'experiences'], function () {
        Route::get('/', [ExperiencesController::class, 'index'])->name('admin.experiences.index');
        Route::get('/create', [ExperiencesController::class, 'create'])->name('admin.experiences.create');
        Route::post('/store', [ExperiencesController::class, 'store'])->name('admin.experiences.store');
        Route::get('/edit/{id}', [ExperiencesController::class, 'edit'])->name('admin.experiences.edit');
        Route::post('/update/{id}', [ExperiencesController::class, 'update'])->name('admin.experiences.update');
        Route::delete('/destroy/{id}', [ExperiencesController::class, 'destroy'])->name('admin.experiences.destroy');
    });

    // Organizations
    Route::group(['prefix' => 'organizations'], function () {
        Route::get('/', [OrganizationsController::class, 'index'])->name('admin.organizations.index');
        Route::get('/create', [OrganizationsController::class, 'create'])->name('admin.organizations.create');
        Route::post('/store', [OrganizationsController::class, 'store'])->name('admin.organizations.store');
        Route::get('/edit/{id}', [OrganizationsController::class, 'edit'])->name('admin.organizations.edit');
        Route::post('/update/{id}', [OrganizationsController::class, 'update'])->name('admin.organizations.update');
        Route::delete('/destroy/{id}', [OrganizationsController::class, 'destroy'])->name('admin.organizations.destroy');
    });

    // Social Activity
    Route::group(['prefix' => 'social-activity'], function () {
        Route::get('/', [SocialActivityController::class, 'index'])->name('admin.social-activity.index');
        Route::get('/create', [SocialActivityController::class, 'create'])->name('admin.social-activity.create');
        Route::post('/store', [SocialActivityController::class, 'store'])->name('admin.social-activity.store');
        Route::get('/edit/{id}', [SocialActivityController::class, 'edit'])->name('admin.social-activity.edit');
        Route::post('/update/{id}', [SocialActivityController::class, 'update'])->name('admin.social-activity.update');
        Route::delete('/destroy/{id}', [SocialActivityController::class, 'destroy'])->name('admin.social-activity.destroy');
    });

    // Testimonial
    Route::group(['prefix' => 'testimonial'], function () {
        Route::get('/', [TestimonialController::class, 'index'])->name('admin.testimonial.index');
        Route::get('/create', [TestimonialController::class, 'create'])->name('admin.testimonial.create');
        Route::post('/store', [TestimonialController::class, 'store'])->name('admin.testimonial.store');
        Route::get('/edit/{id}', [TestimonialController::class, 'edit'])->name('admin.testimonial.edit');
        Route::post('/update/{id}', [TestimonialController::class, 'update'])->name('admin.testimonial.update');
        Route::delete('/destroy/{id}', [TestimonialController::class, 'destroy'])->name('admin.testimonial.destroy');
    });
});

require __DIR__ . '/auth.php';
