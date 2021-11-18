<?php

namespace App\Repository\View\Data;

use App\Models\product;
use Illuminate\View\View;

class products_2
{
    public function compose(View $view)
    {
        return $view->with('products_2' , product::where('number' , '!=' , 0)->whereStatus(1));
    }
}
