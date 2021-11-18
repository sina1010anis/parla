<?php

namespace App\Repository\Admin\Product;
use \App\Repository\Admin\Upload\Upload;
use Illuminate\Support\Str;

class Product extends Upload
{

    public function addressFile()
    {
        return '/image/product/';
    }

    public function create()
    {
        \App\Models\product::create([
            'name' => $this->request->name,
            'price' => $this->request->price,
            'number' => $this->request->number,
            'slug' => Str::slug(($this->request->name)),
            'description' => $this->request->description,
            'description_all' => $this->request->description_all,
            'tips' => $this->request->tips,
            'status' => $this->request->status,
            'menu_id' => $this->request->menu_id,
            'discount' => $this->request->discount,
            'image' => $this->name,
        ]);
        return $this;
    }
}
