<?php

namespace App\Repository\Admin\City;

use App\Models\state;
use App\Repository\Admin\Upload\Upload;

class City extends Upload
{
    public function create()
    {
        state::create([
            'name' => $this->request->name,
            'city_id' => $this->request->state_id,
        ]);
        return $this;
    }
    public function addressFile()
    {
        // TODO: Implement addressFile() method.
    }
}
