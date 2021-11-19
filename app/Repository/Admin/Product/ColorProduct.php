<?php

namespace App\Repository\Admin\Product;

use App\Models\color_product;
use App\Repository\Admin\Upload\Upload;

class ColorProduct extends Upload
{

    public function addressFile()
    {
        // TODO: Implement addressFile() method.
    }

    public function create()
    {
        color_product::create([
            'product_id' => $this->request->product_id,
            'color_id' => $this->request->color,
        ]);
        return $this;
    }
}
