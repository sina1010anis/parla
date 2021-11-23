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
        $this->app->bind(\Ghasedak\GhasedakApi::class , function (){
            return new \Ghasedak\GhasedakApi('07761cd3c2c3898e2f122e1d687b2f265b04c934b39e6623e781604eebcc406a');
        });
    }
}
