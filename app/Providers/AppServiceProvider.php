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
            return new \Ghasedak\GhasedakApi('a3a33cec8f187a50921ca972fade553ac06814f262e9a1948abebf6986fff826');
        });
    }
}
