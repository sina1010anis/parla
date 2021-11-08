<?php

namespace App\Repository\Create;

use App\Models\card as cardUser;
use App\Models\product_order;

trait ProductOrder
{
    protected $data ;
    public function selectFactor()
    {
        $data = \App\Models\factor::whereUser_id(auth()->user()->id)->orderBy('id' , 'DESC')->first();
        $this->data = $data;
        return $this;
    }
    public function createProductOrder()
    {
        $cart = cardUser::where(['user_id' => auth()->user()->id , 'status' => 0])->get();
        foreach ($cart as $i){
            product_order::create([
                'factor_id' => $this->data->id,
                'product_id' => $i->product->product->id,
                'size_id' => $i->product_id,
                'number' => $i->number,
                'color_id' => $i->color_id,
            ]);
        }
        return $this;
    }
}
