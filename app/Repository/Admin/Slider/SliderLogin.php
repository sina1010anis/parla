<?php

namespace App\Repository\Admin\Slider;

use App\Models\slider_login;
use App\Repository\Admin\Upload\Upload;


class SliderLogin extends Upload
{

    public function addressFile()
    {
        return '/image/slider/sliderLoginRegister';
    }

    public function create()
    {
        slider_login::create([
            'name' => $this->request->name,
            'src' => $this->name,
            'location' => $this->request->location,
        ]);
        return $this;
    }
}
