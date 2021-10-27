<?php

namespace App\Repository\View\Data;

use App\Models\banner;
use Illuminate\View\View;

class bannerCenter{

    public function compose(View $view)
    {
        return $view->with('banner_center' , banner::whereLocation(2)->get());
    }
}
