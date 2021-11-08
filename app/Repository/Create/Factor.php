<?php

namespace App\Repository\Create;
use App\Models\card as cardUser;
use \App\Models\factor as factorModel;
use App\Repository\Tools\Message;

trait Factor
{
    use Message , ProductOrder;
    protected $price = 0;
    public function total_price()
    {
        $cart = cardUser::where(['user_id' => auth()->user()->id , 'status' => 0])->get();
        foreach ($cart as $i){
            $this->price += $i->total_price;
        }
        return $this;
    }
    public function createFactor()
    {
        factorModel::create([
            'title_price' => $this->price,
            'user_id' => auth()->user()->id
        ]);
        return $this;
    }
}
