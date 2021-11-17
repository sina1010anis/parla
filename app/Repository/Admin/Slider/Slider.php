<?php

namespace App\Repository\Admin\Slider;
use \App\Repository\Admin\Upload\Upload;
class Slider extends Upload
{

    public function addressFile()
    {
        return '/image/slider';
    }

    public function create()
    {
        \App\Models\slider::create([
            'name' => $this->request->name,
            'href' => $this->request->href,
            'src' => $this->name,
        ]);
        return $this;
    }
}
