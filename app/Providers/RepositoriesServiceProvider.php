<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
    }
}
