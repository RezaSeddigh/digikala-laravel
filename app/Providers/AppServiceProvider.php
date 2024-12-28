<?php

namespace App\Providers;

use App\Repository\admin\city\AdminCityRepository;
use App\Repository\admin\city\AdminCityRepositoryInterface;
use App\Repository\admin\country\AdminCountryRepository;
use App\Repository\admin\country\AdminCountryRepositoryInterface;
use App\Repository\admin\state\AdminStateRepository;
use App\Repository\admin\state\AdminStateRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(AdminCountryRepositoryInterface::class, AdminCountryRepository::class);
        $this->app->singleton(AdminStateRepositoryInterface::class, AdminStateRepository::class);
        $this->app->singleton(AdminCityRepositoryInterface::class, AdminCityRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
