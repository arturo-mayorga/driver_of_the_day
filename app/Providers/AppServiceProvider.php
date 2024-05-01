<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL; // Import the URL facade
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (env('APP_ENV') !== 'local') {
            // Instantiate the URL facade
            $url = URL::getInstance();

            // Use forceScheme method to force HTTPS
            $url->forceScheme('https');
        }
    }
}
