<?php

namespace App\Repository\View\Data;

use Illuminate\View\View;
use \App\Models\address as addressModel;
class address_select
{
    public function compose(View $view)
    {
        return $view->with('address_select' , addressModel::find(auth()->user()->address_id));
    }
}
