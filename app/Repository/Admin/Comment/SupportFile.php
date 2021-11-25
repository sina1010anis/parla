<?php

namespace App\Repository\Admin\Comment;

use App\Repository\Admin\Upload\Upload;

class SupportFile extends Upload
{

    public function addressFile()
    {
        return '/image/support/';
    }

    public function create()
    {
        \App\Models\support::create([
            'sender' => auth()->user()->id,
            'text' => ($this->request->text != '') ? $this->request->text : Null,
            'mode' => 1,
            'file' => $this->name,
            'status' => 1,
            'view' => 0,
            'view_admin' => 1,
        ]);
        return $this;
    }
}
