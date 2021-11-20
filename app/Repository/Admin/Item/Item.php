<?php

namespace App\Repository\Admin\Item;

use App\Repository\Admin\Upload\Upload;

class Item extends Upload
{

    public function addressFile()
    {
        return '/image/item/';
    }

    public function create()
    {
        \App\Models\item::create([
            'title' => $this->request->title,
            'text' => $this->request->text,
            'icon' => $this->name,
        ]);
        return $this;
    }
}
