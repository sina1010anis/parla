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
            return new \Ghasedak\GhasedakApi('f46fa86f6f2919872569eec116ed173a1f7fbca51fefba8171ce3ccb3227f9ce');
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
