<?php

namespace App\Repository\Admin\About;
use App\Http\Requests\Admin\LogoRequest;
use App\Http\Requests\Admin\MenuRequest;
use App\Models\image_about;
use \App\Repository\Admin\Upload\About as AboutAB;
use App\Repository\Admin\Upload\Upload;
use App\Repository\Tools\Back;

class About extends Upload
{
    use Back;

    public function addressFile()
    {
        return '/image/about/';
    }
    public function create()
    {
        image_about::create([
            'name' => $this->name,
            'src' => $this->name,
        ]);
        return $this;
    }
}
