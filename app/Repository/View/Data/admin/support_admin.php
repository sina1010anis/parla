<?php

namespace App\Repository\View\Data\admin;

use App\Models\support;
use Illuminate\View\View;

class support_admin
{
    public function compose(View $view)
    {
        return $view->with('support_admin' , support::query());
    }
}
