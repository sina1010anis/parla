<?php

namespace App\Repository\Tools;

use App\Models\product;

trait Check
{
    public function checkProduct($id){
        $data = product::find($id);
        return ($data != '') ? true : false;
    }
}
