<?php

namespace App\Repository\View\Data;

use Illuminate\View\View;

class slider_register
{
    public function compose(View $view)
    {
        return $view->with('slider_register' , \App\Models\slider_login::whereLocation(0)->get());
    }
}
