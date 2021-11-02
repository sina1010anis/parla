<?php

namespace App\Repository\Card;
use App\Models\card as cardDB;
use \App\Repository\Create\Card as CardT;
use App\Repository\Tools\Message;
use Illuminate\Http\Request;

class Card
{
    use CardT , Message;
    protected $request;
    private $count;

    public function setRequest(Request $request)
    {
        $this->request = $request;
        $this->count = cardDB::where(['product_id' => $this->request->id , 'user_id' => auth()->user()->id , 'color_id' => $this->request->color ])->count();
        return $this;
    }

    public function checkCard()
    {
        if ($this->count == 0){
            $this->create();
            return $this->msgOk();
        }else{
            echo $this->createIn();
            return $this->msgOk();
        }
    }
}
