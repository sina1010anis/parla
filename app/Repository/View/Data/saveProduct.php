<?php

namespace App\Repository\View\Data;

use App\Models\save_product;
use Illuminate\View\View;

class saveProduct
{
    public function compose(View $view)
    {
        if (auth()->check()){
            return $view->with('save_product' , save_product::get());
        }
    }
}
