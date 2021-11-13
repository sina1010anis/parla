<?php

namespace App\Repository\Delete;

use App\Models\save_product;

trait SaveProduct
{
    public function delete()
    {
        return save_product::where(['product_id'=> $this->request->product , 'user_id' => auth()->user()->id])->delete();
    }
}
