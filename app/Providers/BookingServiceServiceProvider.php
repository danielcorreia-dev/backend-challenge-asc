<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Booking\BookingService;
use App\Services\Booking\BookingServiceContract;

class BookingServiceServiceProvider extends ServiceProvider
{
    protected $defer = true;
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(
            BookingServiceContract::class,
            BookingService::class,
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    public function provides()
    {
        return [BookingServiceContract::class];
    }
}
