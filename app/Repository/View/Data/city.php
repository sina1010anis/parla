<?php

namespace App\Repository\View\Data;

use Illuminate\View\View;
use \App\Models\city as cityModel;
class city
{
    public function compose(View $view)
    {
        return $view->with('state' , cityModel::all());
    }
}
