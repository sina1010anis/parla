<?php

namespace App\Repository\View\Data\admin;

use App\Models\User;
use Illuminate\View\View;

class users{
    public function compose(View $view)
    {
        return $view->with('users_admin' , User::all());
    }
}
