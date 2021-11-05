<?php

namespace App\Repository\Card;

use App\Models\card as cardDB;
use \App\Repository\Create\Card as CardT;
use App\Repository\Tools\Message;
use Illuminate\Http\Request;

class Card
{
    use CardT, Message;

    protected $request;
    private $count;
    private $status;

    public function setRequest(Request $request)
    {
        $this->request = $request;
        if (auth()->check()) {
            $this->count = cardDB::where(['product_id' => $this->request->id, 'user_id' => auth()->user()->id, 'color_id' => $this->request->color])->count();
            $this->status = true;
        } else {
            $this->status = false;
        }
        return $this;
    }

    public function checkCard()
    {
        if ($this->status) {
            if ($this->count == 0) {
                $this->create();
                return $this->msgOk();
            } else {
                $this->createIn();
                return $this->msgOk();
            }
        }else{
            return $this->msgNo();
        }
    }
}
