<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(\App\Interfaces\ProfileInterface::class, \App\Repositories\ProfileRepository::class);
        $this->app->bind(\App\Interfaces\CommitmentInterface::class, \App\Repositories\CommitmentRepository::class);
        $this->app->bind(\App\Interfaces\GalleryInterface::class, \App\Repositories\GalleryRepository::class);
        $this->app->bind(\App\Interfaces\NewsInterface::class, \App\Repositories\NewsRepository::class);
        $this->app->bind(\App\Interfaces\AspirationInterface::class, \App\Repositories\AspirationRepository::class);
        $this->app->bind(\App\Interfaces\SocialMediaInterface::class, \App\Repositories\SocialMediaRepository::class);
        $this->app->bind(\App\Interfaces\FaqInterface::class, \App\Repositories\FaqRepository::class);
        $this->app->bind(\App\Interfaces\EducationsInterface::class, \App\Repositories\EducationsRepository::class);
        $this->app->bind(\App\Interfaces\ExperiencesInterface::class, \App\Repositories\ExperiencesRepository::class);
        $this->app->bind(\App\Interfaces\OrganizationsInterface::class, \App\Repositories\OrganizationsRepository::class);
        $this->app->bind(\App\Interfaces\SocialActivityInterface::class, \App\Repositories\SocialActivityRepository::class);
        $this->app->bind(\App\Interfaces\TestimonialInterface::class, \App\Repositories\TestimonialRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
