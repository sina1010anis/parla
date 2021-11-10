<?php

namespace App\Repository\View\Data;

use Illuminate\View\View;
use \App\Models\support;
class count_support
{
    public function compose(View $view)
    {
        if(auth()->check())
            return $view->with('count_support' , support::whereSender(auth()->user()->id)->whereView(0)->count());
    }
}
