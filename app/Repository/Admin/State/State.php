<?php

namespace App\Repository\Admin\State;
use \App\Repository\Admin\Upload\Upload;
class State extends Upload
{
    public function create()
    {
        \App\Models\city::create([
            'name' => $this->request->name,
            'price_post' => $this->request->price,
        ]);
        return $this;
    }
    public function addressFile()
    {
        // TODO: Implement addressFile() method.
    }
}
