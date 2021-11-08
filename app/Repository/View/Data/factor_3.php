<?php

namespace App\Repository\View\Data;

use Illuminate\View\View;

class factor_3
{
    public function compose(View $view)
    {
        if (auth()->check())
            return $view->with('factor_3' , \App\Models\factor::whereUser_id(auth()->user()->id)->whereStatus_buy(300)->count());
    }
}
