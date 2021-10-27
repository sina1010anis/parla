<?php

namespace App\Repository\View\Data;

use App\Models\link_footer;
use Illuminate\View\View;

class linkFooter
{
    public function compose(View $view){
        $view->with('link_footer' , link_footer::all());
    }
}
