<?php

namespace App\Repository\View\Data;

use Illuminate\View\View;

class image_product
{
    public function compose(View $view)
    {
        return $view->with('image_products' , \App\Models\image_product::all());
    }
}
