<?php

namespace App\Repository\View\Data;

use Illuminate\View\View;
use \App\Models\title_footer as TF;
class title_footer
{
    public function compose(View $viwe)
    {
        return $viwe->with('title_footers' , TF::all());
    }
}
