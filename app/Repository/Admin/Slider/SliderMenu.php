<?php

namespace App\Repository\Admin\Slider;

use App\Repository\Admin\Upload\Upload;

class SliderMenu extends Upload
{

    public function addressFile()
    {
        return '/image/slider/';
    }

    public function create()
    {
        \App\Models\slider_menu::create([
            'name' => $this->request->name,
            'href' => $this->request->href,
            'src' => $this->name,
            'menu_id' => $this->request->menu_id,
        ]);
        return $this;
    }
}
