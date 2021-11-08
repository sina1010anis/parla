<?php

namespace App\Repository\View;

use App\Repository\View\Data\about;
use App\Repository\View\Data\address;
use App\Repository\View\Data\address_select;
use App\Repository\View\Data\bannerCenter;
use App\Repository\View\Data\bannerEnd;
use App\Repository\View\Data\bannerTop;
use App\Repository\View\Data\card;
use App\Repository\View\Data\city;
use App\Repository\View\Data\comment;
use App\Repository\View\Data\factor;
use App\Repository\View\Data\factor_1;
use App\Repository\View\Data\factor_2;
use App\Repository\View\Data\factor_3;
use App\Repository\View\Data\factor_4;
use App\Repository\View\Data\item_footer;
use App\Repository\View\Data\itemAll;
use App\Repository\View\Data\linkFooter;
use App\Repository\View\Data\logo_footer;
use App\Repository\View\Data\menu;
use App\Repository\View\Data\namd;
use App\Repository\View\Data\products;
use App\Repository\View\Data\save;
use App\Repository\View\Data\saveProduct;
use App\Repository\View\Data\sliderAll;
use App\Repository\View\Data\subMenu;
use App\Repository\View\Data\support;
use App\Repository\View\Data\title_footer;
use App\Repository\View\Data\state;
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
        View::composer(['*'] , saveProduct::class);
        View::composer(['*'] , comment::class);
        View::composer(['*'] , card::class);
        View::composer(['*'] , about::class);
        View::composer(['*'] , logo_footer::class);
        View::composer(['*'] , namd::class);
        View::composer(['*'] , support::class);
        View::composer(['*'] , save::class);
        View::composer(['*'] , state::class);
        View::composer(['*'] , city::class);
        View::composer(['*'] , address::class);
        View::composer(['*'] , address_select::class);
        View::composer(['*'] , factor::class);
        View::composer(['*'] , factor_1::class);
        View::composer(['*'] , factor_2::class);
        View::composer(['*'] , factor_3::class);
        View::composer(['*'] , factor_4::class);
    }
}
