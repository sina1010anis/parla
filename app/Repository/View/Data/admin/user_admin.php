<?php

namespace App\Repository\View\Data\admin;

use App\Models\User;
use Illuminate\View\View;

class user_admin
{
    public function compose(View $view)
    {
        return $view->with('user_admin' , User::all());
    }
}
