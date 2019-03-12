<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {  
        Paginator::defaultView('vendor.pagination.simple-bootstrap-4');
        Paginator::defaultSimpleView('vendor.pagination.simple-bootstrap-4');
        // Paginator::defaultView('view-name');
        // Paginator::defaultSimpleView('view-name');

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
