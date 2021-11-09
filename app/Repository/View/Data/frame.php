<?php

namespace App\Repository\View\Data;

use Illuminate\View\View;

class frame
{
    public function compose(View $view)
    {
        return $view->with('frames' , \App\Models\frame::all());
    }
}
