<?php

namespace App\Repository\View\Data\admin;

use Illuminate\View\View;
use phpDocumentor\Reflection\Utils;

class slider_menu
{
    public function compose(View $view)
    {
        return $view->with('sliders_menu' , \App\Models\slider_menu::all());
    }
}
