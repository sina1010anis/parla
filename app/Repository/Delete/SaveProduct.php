<?php

namespace App\Repository\Delete;

use App\Models\save_product;

trait saveProduct
{
    public function delete()
    {
        return save_product::query()->where(['product_id'=> $this->request->product , 'user_id' => auth()->user()->id])->delete();
    }
}
