<?php

namespace App\Repository\Admin\Footer;

use App\Models\item_footer;
use App\Repository\Admin\Upload\Upload;

class ItemFooter extends Upload
{
    public function create()
    {
        item_footer::create([
            'name' => $this->request->name,
            'like' => $this->request->link,
            'title_footer_id' => $this->request->title_footer_id,
        ]);
        return $this;
    }

    public function addressFile()
    {
        // TODO: Implement addressFile() method.
    }
}
