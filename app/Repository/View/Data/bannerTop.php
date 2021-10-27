<?php

namespace App\Repository\View\Data;

use App\Models\banner;
use Illuminate\View\View;

class bannerTop
{
    public function compose(View $view)
    {
        return $view->with('banner_top' , banner::whereLocation(1)->first());
    }
}
