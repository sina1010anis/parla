<?php

namespace App\Repository\View\Data;

use App\Models\slider;
use Illuminate\View\View;

class sliderAll
{
    public function compose(View $view)
    {
        return $view->with('sliders' , slider::all());
    }
}
