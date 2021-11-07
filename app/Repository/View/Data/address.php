<?php

namespace App\Repository\View\Data;

use Illuminate\View\View;
use \App\Models\address as addressModel ;
class address
{
    public function compose(View $view)
    {
        if (auth()->check())
            return $view->with('address' , addressModel::whereUser_id(auth()->user()->id)->orderBy('id' , 'DESC')->get());
    }
}
