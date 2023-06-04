<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Booking\BookingRepositoryContract;
use App\Repositories\Booking\BookingRepositoryEloquent;

class BookingRepositoryServiceProvider extends ServiceProvider
{
    protected $defer = true;
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(
            BookingRepositoryContract::class,
            BookingRepositoryEloquent::class,
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
        return [BookingRepositoryContract::class];
    }
}
