<?php

namespace App\Repository\View;

use App\Repository\View\Data\bannerCenter;
use App\Repository\View\Data\bannerEnd;
use App\Repository\View\Data\bannerTop;
use App\Repository\View\Data\item_footer;
use App\Repository\View\Data\itemAll;
use App\Repository\View\Data\linkFooter;
use App\Repository\View\Data\menu;
use App\Repository\View\Data\products;
use App\Repository\View\Data\sliderAll;
use App\Repository\View\Data\subMenu;
use App\Repository\View\Data\title_footer;
use Illuminate\Support\Facades\View;

class viewAll
{
    public function handle()
    {
        View::composer(['*'] , menu::class);
        View::composer(['*'] , subMenu::class);
        View::composer(['*'] , sliderAll::class);
        View::composer(['*'] , bannerTop::class);
        View::composer(['*'] , bannerCenter::class);
        View::composer(['*'] , bannerEnd::class);
        View::composer(['*'] , itemAll::class);
        View::composer(['*'] , products::class);
        View::composer(['*'] , item_footer::class);
        View::composer(['*'] , title_footer::class);
        View::composer(['*'] , linkFooter::class);
    }
}
