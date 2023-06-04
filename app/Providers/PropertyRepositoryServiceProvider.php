<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Property\PropertyRepositoryContract;
use App\Repositories\Property\PropertyRepositoryEloquent;

class PropertyRepositoryServiceProvider extends ServiceProvider
{
    protected $defer = true;
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(
            PropertyRepositoryContract::class,
            PropertyRepositoryEloquent::class,
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
        return [PropertyRepositoryContract::class];
    }
}
