<?php

namespace App\Repository\View\Data;

use Illuminate\View\View;

class slider_login
{
    public function compose(View $view)
    {
        return $view->with('slider_login' , \App\Models\slider_login::all());
    }
}
