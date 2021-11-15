<?php

namespace App\Repository\Admin\Factor;

use App\Repository\Admin\Factor\Address\BuildAddress;
use App\Repository\Admin\Factor\Orders\Orders;

class Factor
{
    use BuildAddress , Orders;
    public $data ;
    public function findFactor($id)
    {
        $this->data = \App\Models\factor::find($id);
        return $this->data;
    }
    public function findMobile()
    {
        return $this->data->user->mobile;
    }
}
