<?php

namespace App\Repository\Create;

use App\Repository\Admin\Upload\Upload;
use App\Repository\Tools\Message;

class SupportFile extends Upload
{
    use Message;
    public function addressFile()
    {
        return '/image/support/';
    }

    public function create(){
        \App\Models\support::create([
            'sender' => auth()->user()->id,
            'text' => ($this->request->text != '') ? $this->request->text : Null,
            'mode' => 1,
            'file' => $this->name,
            'status' => 0,
            'view' => 1,
            'view_admin' => 0,
        ]);
        return $this;
    }
}
