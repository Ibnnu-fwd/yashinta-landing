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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
