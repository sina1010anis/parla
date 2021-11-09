<?php

namespace App\Repository\Factor;

use App\Models\factor;
use App\Models\product_order;
use Illuminate\Http\Request;

abstract class Find
{
    protected $request;
    public $data;
    protected $product;
    public function setRequest(Request $request)
    {
        $this->request = $request;
        return $this;
    }
    public function findFactor()
    {
        $this->data = factor::find($this->request->id);
        return $this;
    }

    public function getProduct()
    {
        $this->product = product_order::whereFactor_id($this->data->id)->get();
        return $this;
    }
}
