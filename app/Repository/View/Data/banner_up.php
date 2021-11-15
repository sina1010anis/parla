<?php

namespace App\Repository\View\Data;

use App\Models\banner;
use Illuminate\View\View;

class banner_up
{
    public function compose(View $view)
    {
        return $view->with('banners_up' , banner::whereLocation(4)->get());
    }
}
