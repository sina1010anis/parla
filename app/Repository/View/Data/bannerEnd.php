<?php

namespace App\Repository\View\Data;

use App\Models\banner;
use Illuminate\View\View;

class bannerEnd{

    public function compose(View $view)
    {
        return $view->with('banner_end' , banner::whereLocation(3)->first());
    }
}
