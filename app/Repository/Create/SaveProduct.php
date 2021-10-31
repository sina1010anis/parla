<?php

namespace App\Repository\Create;

trait SaveProduct
{
    public function create()
    {
        \App\Models\save_product::create([
            'user_id' => auth()->user()->id,
            'product_id' => $this->request->product,
        ]);
    }
}
