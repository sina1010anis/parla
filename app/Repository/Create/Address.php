<?php

namespace App\Repository\Create;

trait Address
{
    public function createAddress($data)
    {
        \App\Models\address::create([
            'city_id' => $data['state'],
            'state_id' => $data['city'],
            'address' => $data['address'],
            'user_id' => auth()->user()->id,
        ]);
    }
}
