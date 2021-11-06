<?php

namespace App\Repository\View\Data;

use App\Models\save_product;
use Illuminate\View\View;

class save
{
    public function compose(View $view)
    {
        if (auth()->check())
            return $view->with('save_products' , save_product::whereUser_id(auth()->user()->id)->get());
    }
}
