<?php

namespace App\Repository\View\Data\admin;

use App\Models\product;
use Illuminate\View\View;

class bank
{
    public function compose(View $view)
    {
        return $view->with('sum_total_price' , \App\Models\factor::sum('title_price'));
    }
}
