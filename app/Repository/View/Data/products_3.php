<?php

namespace App\Repository\View\Data;

use App\Models\product;
use Illuminate\View\View;

class products_3
{
    public function compose(View $view)
    {
        return $view->with('products_3' , product::where('number' , '!=' , 0));
    }
}
