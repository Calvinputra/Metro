<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Voyager;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema; 
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Voyager::addAction(\App\Actions\TransactionDetailAction::class);
        Voyager::addAction(\App\Actions\ShippingAction::class);
        Voyager::addAction(\App\Actions\FinishAction::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        Schema::defaultStringLength(191);
    }
}
