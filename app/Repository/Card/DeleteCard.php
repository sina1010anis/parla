<?php

namespace App\Repository\Card;

use \App\Models\card;
use App\Repository\Delete\DeleteItemCard;
use App\Repository\Tools\Message;
use Illuminate\Http\Request;

class DeleteCard
{
    use Message , DeleteItemCard;
    protected $request;
    protected $count;
    private $status = false;
    public function setRequest(Request $request){
        $this->request = $request;
        $this->count = card::whereId($request->id)->count();
        return $this;
    }

    public function checkCard()
    {
        if ($this->count != 0){
            $this->status = true;
        }else{
            $this->status = false;
        }
        return $this;
    }

    public function deleteCard()
    {
        if ($this->status){
            $this->delete();
            return $this->msgDelete();
        }else{
            return $this->msgNo();
        }

    }
}
