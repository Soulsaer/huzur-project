<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        $formatTreeCategory = \App\Models\Category::tree();
        $subChieldcategory = \App\Models\Chieldcategory::where('status', 1)->get();
        $international_shop = \App\Models\Shop::all();

        view()->share(compact('formatTreeCategory', 'subChieldcategory', 'international_shop'));
    }
}
