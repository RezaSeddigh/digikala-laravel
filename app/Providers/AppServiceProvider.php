<?php

namespace App\Providers;

use App\Repository\admin\category\AdminCategoryRepository;
use App\Repository\admin\category\AdminCategoryRepositoryInterface;
use App\Repository\admin\city\AdminCityRepository;
use App\Repository\admin\city\AdminCityRepositoryInterface;
use App\Repository\admin\country\AdminCountryRepository;
use App\Repository\admin\country\AdminCountryRepositoryInterface;
use App\Repository\admin\delivery\AdminDeliveryRepository;
use App\Repository\admin\delivery\AdminDeliveryRepositoryInterface;
use App\Repository\admin\payment\AdminPaymentRepository;
use App\Repository\admin\payment\AdminPaymentRepositoryInterface;
use App\Repository\admin\product\AdminProductRepository;
use App\Repository\admin\product\AdminProductRepositoryInterface;
use App\Repository\admin\slider\AdminSliderRepository;
use App\Repository\admin\slider\AdminSliderRepositoryInterface;
use App\Repository\admin\state\AdminStateRepository;
use App\Repository\admin\state\AdminStateRepositoryInterface;
use App\Repository\admin\story\AdminStoryRepository;
use App\Repository\admin\story\AdminStoryRepositoryInterface;
use App\Repository\client\auth\ClientAuthRepository;
use App\Repository\client\auth\ClientAuthRepositoryInterface;
use App\Repository\client\offer\ClientOfferRepository;
use App\Repository\client\offer\ClientOfferRepositoryInterface;
use App\Repository\client\product\ClientProductRepository;
use App\Repository\client\product\ClientProductRepositoryInterface;
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
        $this->app->singleton(AdminCategoryRepositoryInterface::class, AdminCategoryRepository::class);
        $this->app->singleton(AdminProductRepositoryInterface::class, AdminProductRepository::class);
        $this->app->singleton(AdminDeliveryRepositoryInterface::class, AdminDeliveryRepository::class);
        $this->app->singleton(AdminPaymentRepositoryInterface::class, AdminPaymentRepository::class);
        $this->app->singleton(AdminStoryRepositoryInterface::class, AdminStoryRepository::class);
        $this->app->singleton(AdminSliderRepositoryInterface::class, AdminSliderRepository::class);

        $this->app->singleton(ClientAuthRepositoryInterface::class, ClientAuthRepository::class);
        $this->app->singleton(ClientOfferRepositoryInterface::class, ClientOfferRepository::class);
        $this->app->singleton(ClientProductRepositoryInterface::class, ClientProductRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
