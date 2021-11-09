<?php

namespace App\Repository\View\Data;

use App\Models\product;
use Illuminate\View\View;

class products
{
    public function compose(View $view)
    {
        return $view->with('products' , product::query()->where('number' , '!=' , 0));
    }
}
