<?php

namespace App\Repository\Admin\Banner;

use App\Models\banner;
use App\Repository\Admin\Upload\Upload;

class BannerCenter extends Upload
{
    public function addressFile()
    {
        return '/image/banner';
    }

    public function create()
    {
        banner::create([
            'name' => $this->request->name,
            'src' => $this->name,
            'href' => $this->request->href,
            'location' => 2,
        ]);
        return $this;
    }
}
