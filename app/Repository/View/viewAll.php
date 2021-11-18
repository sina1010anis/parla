<?php

namespace App\Repository\View;

use App\Repository\View\Data\about;
use App\Repository\View\Data\address;
use App\Repository\View\Data\address_select;
use App\Repository\View\Data\admin\bank;
use App\Repository\View\Data\admin\image_about;
use App\Repository\View\Data\admin\product_all;
use App\Repository\View\Data\admin\product_discount;
use App\Repository\View\Data\admin\product_order;
use App\Repository\View\Data\admin\product_view_admin;
use App\Repository\View\Data\admin\slider_menu;
use App\Repository\View\Data\admin\support_admin;
use App\Repository\View\Data\admin\user_admin;
use App\Repository\View\Data\banner_up;
use App\Repository\View\Data\bannerCenter;
use App\Repository\View\Data\bannerEnd;
use App\Repository\View\Data\bannerTop;
use App\Repository\View\Data\card;
use App\Repository\View\Data\city;
use App\Repository\View\Data\comment;
use App\Repository\View\Data\count_support;
use App\Repository\View\Data\factor;
use App\Repository\View\Data\factor_1;
use App\Repository\View\Data\factor_2;
use App\Repository\View\Data\factor_3;
use App\Repository\View\Data\factor_4;
use App\Repository\View\Data\frame;
use App\Repository\View\Data\free_send;
use App\Repository\View\Data\image_custom;
use App\Repository\View\Data\item_footer;
use App\Repository\View\Data\itemAll;
use App\Repository\View\Data\linkFooter;
use App\Repository\View\Data\logo_footer;
use App\Repository\View\Data\menu;
use App\Repository\View\Data\namd;
use App\Repository\View\Data\products;
use App\Repository\View\Data\products_2;
use App\Repository\View\Data\products_3;
use App\Repository\View\Data\save;
use App\Repository\View\Data\saveProduct;
use App\Repository\View\Data\slider_login;
use App\Repository\View\Data\sliderAll;
use App\Repository\View\Data\subMenu;
use App\Repository\View\Data\support;
use App\Repository\View\Data\title_footer;
use App\Repository\View\Data\state;
use App\Repository\View\Data\user;
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
        View::composer(['*'] , image_custom::class);
        View::composer(['*'] , frame::class);
        View::composer(['*'] , user::class);
        View::composer(['*'] , free_send::class);
        View::composer(['*'] , count_support::class);
        View::composer(['*'] , products_2::class);
        View::composer(['*'] , products_3::class);
        View::composer(['*'] , banner_up::class);
        View::composer(['*'] , slider_login::class);
        // Admin
        View::composer(['*'] , \App\Repository\View\Data\admin\factor::class);
        View::composer(['*'] , user_admin::class);
        View::composer(['*'] , product_view_admin::class);
        View::composer(['*'] , bank::class);
        View::composer(['*'] , product_order::class);
        View::composer(['*'] , support_admin::class);
        View::composer(['*'] , image_about::class);
        View::composer(['*'] , slider_menu::class);
        View::composer(['*'] , product_all::class);
        View::composer(['*'] , product_discount::class);
        // End Admin
    }
}
