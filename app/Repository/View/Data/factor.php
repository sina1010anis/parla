<?php

namespace App\Repository\View\Data;

use Illuminate\View\View;
use \App\Models\factor as factorModel;
class factor
{
    public function compose(View $view)
    {
        if (auth()->check())
            return $view->with('factors' , factorModel::whereUser_id(auth()->user()->id)->whereStatus_buy(400)->get());
    }
}
