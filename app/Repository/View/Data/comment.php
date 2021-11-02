<?php

namespace App\Repository\View\Data;

use Illuminate\View\View;

class comment
{
    public function compose(View $view)
    {
        return $view->with('comment_all' , \App\Models\comment::where('status',1)->get());
    }
}
