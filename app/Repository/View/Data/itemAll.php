<?php

namespace App\Repository\View\Data;

use App\Models\item;
use Illuminate\View\View;

class itemAll
{
    public function compose(View $view){
        return $view->with('items' , item::take(4)->orderBy('id' , 'DESC')->get());
    }
}
