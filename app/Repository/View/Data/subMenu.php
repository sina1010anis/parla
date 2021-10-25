<?php

namespace App\Repository\View\Data;

use App\Models\sub_menu;
use Illuminate\View\View;

class subMenu
{
    public function compose(View $view)
    {
        return $view->with('sub_menus' , sub_menu::all());
    }
}
