<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Maincat;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
        $category = Category::all();
        view()->share('category', $category);


        $maincats = Maincat::all();
        view()->share('maincat', $maincats);
        $maincat = Maincat::all();
        view()->share('maincat', $maincat);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
