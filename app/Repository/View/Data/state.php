<?php

namespace App\Repository\View\Data;

use Illuminate\View\View;
use \App\Models\state as stateModel;
class state
{
    public function compose(View $view)
    {
        return $view->with('city' , stateModel::all());
    }
}
