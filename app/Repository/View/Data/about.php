<?php

namespace App\Repository\View\Data;

use App\Models\about_page;
use Illuminate\View\View;
class about
{
    public function compose(View $view)
    {
        return $view->with('about' , about_page::first());
    }
}
