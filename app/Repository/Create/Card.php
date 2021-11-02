<?php

namespace App\Repository\Create;
use \App\Models\card as cardDB;
use App\Models\product;
use App\Models\size_product;
use Illuminate\Support\Facades\DB;

trait Card
{
    protected $price;
    public function totalPrice(){
        $data = size_product::find($this->request->id);
        if ($data->count() != 0){
            $dic = $data->product;
            if ($dic->discount <= 0){
                return (int)$data->price;
            }else{
                $discount = $dic->discount / 100;
                $price =$data->price - ($data->price * $discount );
                return (int)$price;
            }
        }
    }
    public function create()
    {
        cardDB::create([
            'product_id' => $this->request->id,
            'color_id' => $this->request->color,
            'user_id' => auth()->user()->id,
            'total_price' => $this->totalPrice(),
            'number' => 1,
        ]);
    }

    public function createIn()
    {
        $card = cardDB::query()->where(['product_id' => $this->request->id , 'user_id' => auth()->user()->id , 'color_id' => $this->request->color ]);
        $card->increment('number' , 1);
        $card->increment('total_price' , $this->totalPrice());
    }
}
