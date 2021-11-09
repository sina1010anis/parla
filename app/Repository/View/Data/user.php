<?php

namespace App\Repository\View\Data;

use Illuminate\View\View;

class user
{
    public function compose(View $view)
    {
        if (auth()->check())
            return $view->with('my' , \App\Models\User::find(auth()->user()->id));
    }
}
