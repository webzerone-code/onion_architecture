<?php

namespace App\Providers;

use App\architecture\onion\application\services\factories\ShippingFactory;
use App\architecture\onion\application\services\factories\ShippingFactoryInterface;
use App\architecture\onion\domain\repository\ProductRepositoryInterface;
use App\architecture\onion\domain\sevice\product\ProductService;
use App\architecture\onion\domain\sevice\product\ProductServiceInterface;
use App\infrastructure\persistence\ProductRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(ProductServiceInterface::class, ProductService::class);
        $this->app->bind(ShippingFactoryInterface::class, ShippingFactory::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
