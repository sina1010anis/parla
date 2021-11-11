<?php

namespace App\Repository\View\Data\admin;

use App\Models\product;
use Illuminate\View\View;

class product_view_admin
{
    public function compose(View $view)
    {
        return $view->with('sum_product' , product::sum('view'));
    }
}
