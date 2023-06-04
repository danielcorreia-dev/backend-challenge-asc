<?php

namespace App\Providers;

use App\Services\Property\PropertyService;
use App\Services\Property\PropertyServiceContract;
use Illuminate\Support\ServiceProvider;

class PropertyServiceServiceProvider extends ServiceProvider
{
    protected $defer = true;
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(
            PropertyServiceContract::class,
            PropertyService::class
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
        return [PropertyServiceContract::class];
    }
}
