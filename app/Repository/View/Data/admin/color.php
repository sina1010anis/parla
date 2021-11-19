<?php

namespace App\Repository\View\Data\admin;

use Illuminate\View\View;

class color
{
    public function compose(View $view)
    {
        return $view->with('color_all' , \App\Models\color::all());
    }
}
