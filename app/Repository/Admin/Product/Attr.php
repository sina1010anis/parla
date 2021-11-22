<?php

namespace App\Repository\Admin\Product;

use App\Models\properties;
use App\Repository\Admin\Upload\Upload;

class Attr extends Upload
{

    public function create()
    {
        properties::create([
            'title'=> $this->request->title,
            'name'=> $this->request->name,
            'product_id'=> $this->request->id,
        ]);
        return $this;
    }

    public function addressFile()
    {
        // TODO: Implement addressFile() method.
    }
}
