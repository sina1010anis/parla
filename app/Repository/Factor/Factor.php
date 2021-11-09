<?php

namespace App\Repository\Factor;

class Factor extends Find
{
    public $productFactor =[];

    public function product()
    {
        foreach ($this->product as $i){
            $this->productFactor[]='نام  :' . $i->product->name . '  - تعداد : ' . $i->number . ' - رنگ : ' . $i->color->name;
        }
        return $this;
    }
}
