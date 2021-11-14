<?php

namespace App\Repository\View\Data\admin;

use Illuminate\View\View;

class image_about
{
    public function compose(View $view)
    {
        return $view->with('image_abouts' , \App\Models\image_about::all());
    }
}
