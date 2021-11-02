<?php

namespace App\Repository\Save;

use App\Models\save_product;
use \App\Repository\Create\SaveProduct as Save;
use \App\Repository\Delete\SaveProduct as SaveDelete;
use App\Repository\Tools\Message;
use Illuminate\Http\Request;

class saveProduct
{
    use Save , SaveDelete , Message;
    protected $request;
    protected $data;
    public function setRequest(Request $request)
    {
        $this->request = $request;
        $this->data = save_product::where(['product_id'=> $this->request->product , 'user_id' => auth()->user()->id])->count();
        return $this;
    }
    public function onSave()
    {
        if ($this->data == 0){
            $this->create();
            return $this->msgCreate();
        }else{
            $this->delete();
            return $this->msgDelete();
        }
    }
    public function unSave()
    {

    }
}
