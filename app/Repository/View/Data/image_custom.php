<?php

namespace App\Repository\View\Data;

use App\Models\custom;
use Illuminate\View\View;

class image_custom
{
    public function compose(View $view)
    {
        if (auth()->check())
            return $view->with('customs' , custom::whereUser_id(auth()->user()->id)->get());
    }
}
