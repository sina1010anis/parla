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
            return new \Ghasedak\GhasedakApi('f9f94b58ff8aac57f9302deb46856a270ca9df58c350e29318bc4b492c39d5b2');
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
