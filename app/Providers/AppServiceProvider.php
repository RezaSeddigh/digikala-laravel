<?php

namespace App\Providers;

use App\Repository\admin\country\AdminCountryRepository;
use App\Repository\admin\country\AdminCountryRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(AdminCountryRepositoryInterface::class, AdminCountryRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
