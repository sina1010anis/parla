<?php

namespace App\Repository\View\Data;

use App\Models\image_footer;
use Illuminate\View\View;

class logo_footer
{
    public function compose(View $view)
    {
        return $view->with('logo_footer' , image_footer::whereStatus(1)->first());
    }
}
