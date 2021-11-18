<?php

namespace App\Repository\View\Data\admin;

use App\Models\product;
use Illuminate\View\View;

class product_all
{
    public function compose(View $view)
    {
        return $view->with('product_all_admin' , product::orderBy('id' , 'DESC')->get());
    }
}
