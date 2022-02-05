<?php

namespace App\Providers;

use App\View\Components\Database;
use App\View\Components\Footer;
use App\View\Components\Header;
use App\View\Components\Navbar;
use App\View\Components\Sidebar;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::component('header', Header::class);
        Blade::component('navbar', Navbar::class);
        Blade::component('footer', Footer::class);
        Blade::component('sidebar', Sidebar::class);
    }
}
