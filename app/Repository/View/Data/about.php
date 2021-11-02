<?php

namespace App\Repository\View\Data;

use Illuminate\View\View;
use \App\Models\about as aboutWe;
class about
{
    public function compose(View $view)
    {
        return $view->with('about' , aboutWe::first());
    }
}
