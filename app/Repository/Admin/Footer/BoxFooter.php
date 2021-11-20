<?php

namespace App\Repository\Admin\Footer;

use App\Models\title_footer;
use App\Repository\Admin\Upload\Upload;

class BoxFooter extends Upload
{
    public function create()
    {
        title_footer::create([
            'name' => $this->request->name
        ]);
        return $this;
    }
    public function addressFile()
    {
        // TODO: Implement addressFile() method.
    }
}
