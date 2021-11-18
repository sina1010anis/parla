<?php

namespace App\Repository\Admin\Product;

use App\Models\size_product;
use App\Repository\Admin\Upload\Upload;

class SizeProduct extends Upload
{

    public function addressFile()
    {
        return false;
    }

    public function create()
    {
        size_product::create([
            'name' => $this->request->name,
            'price' => $this->request->price,
            'product_id' => $this->request->id,
        ]);
        return $this;
    }
}
