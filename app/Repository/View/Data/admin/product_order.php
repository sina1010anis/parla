<?php

namespace App\Repository\View\Data\admin;

use Illuminate\View\View;

class product_order
{
    public function compose(View $view)
    {
        return $view->with('product_orders' , \App\Models\product_order::all());
    }
}
