<?php

namespace App\Repository\View;

use App\Repository\View\Data\menu;
use App\Repository\View\Data\subMenu;
use Illuminate\Support\Facades\View;

class viewAll
{
    public function handle()
    {
        View::composer(['*'] , menu::class);
        View::composer(['*'] , subMenu::class);
    }
}
