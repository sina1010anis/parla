<?php

namespace App\Repository\View\Data;

use App\Models\image_footer;
use Illuminate\View\View;

class namd
{
    public function compose(View $view)
    {
        return $view->with('nmad' , image_footer::whereStatus(2)->get());
    }
}
