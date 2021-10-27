<?php

namespace App\Repository\View\Data;

use App\Models\item_footer as IT;
use Illuminate\View\View;

class item_footer
{
    public function compose(View $viwe)
    {
        return $viwe->with('item_footer' , IT::all());
    }
}
