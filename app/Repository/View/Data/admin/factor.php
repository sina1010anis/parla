<?php

namespace App\Repository\View\Data\admin;

use Illuminate\View\View;

class factor
{
    public function compose(View $view)
    {
        return $view->with('factor_admin' , \App\Models\factor::whereStatus_buy(200)->orderBy('id' , 'DESC')->get());
    }
}
