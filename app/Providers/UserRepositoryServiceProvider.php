<?php

namespace App\Providers;

use App\Repositories\User\UserRepositoryContract;
use App\Repositories\User\UserRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class UserRepositoryServiceProvider extends ServiceProvider
{
    protected $defer = true;
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(
            UserRepositoryContract::class,
            UserRepositoryEloquent::class,
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
        return [UserRepositoryContract::class];
    }
}
