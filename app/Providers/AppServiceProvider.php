<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Tv;

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
        Schema::defaultStringLength(191);
        if (Schema::hasTable("categories")) {
            $categories = Category::orderBy("id", "desc")->get();
            View::share('categories',$categories);
        }
        if (Schema::hasTable("tvs")) {
            $tvs = Tv::orderBy("id", "desc")->get();
            View::share('tvs',$tvs);
        }
    }
}
