<?php

namespace App\Providers;
use App\Association;
use App\Category;
use App\HappyCustomer;
use App\Product;
use App\Slider;
use App\TeamMember;
use App\infos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        View::share('info', infos::first());
        View::share('sliders', Slider::all());
        View::share('testimonials',HappyCustomer::all());
        View::share('categories',Category::all());
        View::share('members',TeamMember::all());
        View::share('recommendations',Product::inRandomOrder()->take(4)->get());
        
        
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
