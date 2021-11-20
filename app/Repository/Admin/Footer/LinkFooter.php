<?php

namespace App\Repository\Admin\Footer;

use App\Models\link_footer;
use App\Repository\Admin\Upload\Upload;

class LinkFooter extends Upload
{
    public function create()
    {
        link_footer::create([
            'name' => $this->request->name,
            'like' => $this->request->link,
            'icon' => $this->request->icon,
        ]);
        return $this;
    }
    public function addressFile()
    {
        // TODO: Implement addressFile() method.
    }
}
