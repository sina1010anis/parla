<?php

namespace App\Repository\Admin\Product;

use App\Models\image_product;

class ImageProduct extends \App\Repository\Admin\Upload\Upload
{

    public function addressFile()
    {
        return 'image/product/';
    }
    public function create($id){
        image_product::create([
            'name' => $this->request->name,
            'src' => $this->name,
            'product_id' => $id,
        ]);
        return $this;
    }
}
