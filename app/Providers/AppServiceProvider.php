<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Repositories\Category\CategoryRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(CategoryRepositoryInterface $categoryRepository): void
    {
        // Definitely not the cleanest of solutions, but will do the job
        // Would normally be done using Recursion on the Model and any additional filtering via a Service class
        $ancestorCategories = $categoryRepository->getAncestors();
        $mainSubCategories = [];
        $subCategories = [];
        foreach($ancestorCategories as $ancestorCategory) {
            if(!isset($mainSubCategories[$ancestorCategory->id])) $mainSubCategories[$ancestorCategory->id] = [];
            $mainSubCategories[$ancestorCategory->id] = [...$mainSubCategories[$ancestorCategory->id], ...$categoryRepository->getSubCategories($ancestorCategory)];
            
            foreach($mainSubCategories[$ancestorCategory->id] as $mainSubCategory) {
                if(!isset($subCategories[$mainSubCategory->id])) $subCategories[$mainSubCategory->id] = [];
                $subCategories[$mainSubCategory->id] = [...$subCategories[$mainSubCategory->id], ...$categoryRepository->getSubCategories($mainSubCategory)];
            }
        }

        View::share('navMainCategories', $ancestorCategories);
        View::share('navMainSubCategories', $mainSubCategories);
        View::share('navSubCategories', $subCategories);
    }
}
