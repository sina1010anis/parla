<?php

namespace App\Repository\View\Data;

use Illuminate\View\View;
use \App\Models\menu as menuAll;
class menu
{
    public function compose(View $view)
    {
        return $view->with('menus' , menuAll::latest('id')->get());
    }
}
