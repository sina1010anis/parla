<?php

namespace App\Repository\View\Data;

use Illuminate\View\View;

class factor_1
{
    public function compose(View $view)
    {
        if (auth()->check())
            return $view->with('factor_1' , \App\Models\factor::whereUser_id(auth()->user()->id)->whereStatus_order(100)->count());
    }
}
