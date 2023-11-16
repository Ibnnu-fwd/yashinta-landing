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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
