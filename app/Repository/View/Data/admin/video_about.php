<?php

namespace App\Repository\View\Data\admin;

use Illuminate\View\View;

class video_about
{
    public function compose(View $view)
    {
        return $view->with('video_about' , \App\Models\video_about::all());
    }
}
