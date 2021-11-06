<?php

namespace App\Repository\View\Data;

use Illuminate\View\View;
use \App\Models\support as SupportModel;
class support
{
    public function compose(View $view)
    {
        if(auth()->check())
            return $view->with('supports' , SupportModel::whereSender(auth()->user()->id)->get());
    }
}
