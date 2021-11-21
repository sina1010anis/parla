<?php

namespace App\Repository\Admin\Comment;

use App\Repository\Admin\Upload\Upload;

class Support extends Upload
{
    public function create()
    {
        \App\Models\support::create([
            'sender' => $this->request->sender,
            'text' => $this->request->text,
            'status' => 1,
            'view' => 0,
            'view_admin' => 1,
        ]);
        return $this;
    }

    public function addressFile()
    {
        // TODO: Implement addressFile() method.
    }
}
