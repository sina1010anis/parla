<?php

namespace App\Repository\Admin\Frame;

use App\Repository\Admin\Upload\Upload;

class Frame extends Upload
{

    public function addressFile()
    {
        return '/image/frame/';
    }

    public function create()
    {
        \App\Models\frame::create([
            'image' => $this->name,
            'code' => $this->request->code,
            'price' => $this->request->price,
        ]);
        return $this;
    }
}
