<?php

namespace App\Providers;

use App\Repository\View\viewAll;
use App\Service\GhasedakApi;
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
        $this->app->bind(\Ghasedak\GhasedakApi::class , function (){
            return new \Ghasedak\GhasedakApi('fe16b04ac30294ed0834f232fe2691edf568e47888c3cbd85510b3c7d1180396');
        });
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
