<?php

namespace App\Providers;

use App\Repository\View\viewAll;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use function Ramsey\Uuid\v6;

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
        resolve(viewAll::class)->handle();
        Paginator::useBootstrap();
    }
}
