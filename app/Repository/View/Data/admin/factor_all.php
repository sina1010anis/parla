<?php

namespace App\Repository\View\Data\admin;

use Illuminate\View\View;

class factor_all
{
    public function compose(View $view)
    {
        return $view->with('factor_all' , \App\Models\factor::all());
    }
}
