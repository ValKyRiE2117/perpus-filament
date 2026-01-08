<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\LoansModel;
use App\Observers\LoansObserver;

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
    public function boot(): void
    {
        LoansModel::observe(LoansObserver::class);
    }
}
