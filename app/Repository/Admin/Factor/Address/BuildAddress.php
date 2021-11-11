<?php

namespace App\Repository\Admin\Factor\Address;

trait BuildAddress
{
    public $address;
    public function build()
    {
        $this->address = $this->data->user->address->city->name . ' - ' . $this->data->user->address->state->name . ' - ' . $this->data->user->address->address;
        return $this->address;
    }
}
