<?php

namespace App\Repository\View\Data;

use Illuminate\View\View;

class free_send
{
    public function compose(View $view)
    {
        return $view->with('free_send' , \App\Models\free_send::first('price'));
    }
}
