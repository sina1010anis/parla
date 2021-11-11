<?php

namespace App\Repository\Admin\Factor\Orders;

use App\Models\product_order;

trait Orders
{
    public $orders = [];
    public $DataOrders;
    public function setOrder()
    {
        $this->DataOrders = product_order::whereFactor_id($this->data->id)->get();
        $this->setProduct();
        return $this->orders;
    }

    public function setProduct()
    {
        foreach ($this->DataOrders as $data){
            $this->orders[] ='('. $data->product->slug . ') - ' .$data->size->name . ' - ' .$data->number . ' - ' .$data->color->name;
        }
    }
}
