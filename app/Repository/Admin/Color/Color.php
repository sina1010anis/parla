<?php

namespace App\Repository\Admin\Color;

use App\Repository\Admin\Upload\Upload;

class Color extends Upload
{
    public function create()
    {
        \App\Models\color::create([
            'name' => $this->request->name,
            'code' => $this->name,
        ]);
        return $this;
    }
    public function addressFile()
    {
        return '/image/color/';
    }
}
