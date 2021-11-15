<?php

namespace App\Repository\Admin\Edit;

use App\Models\image_footer;
use App\Repository\Admin\Upload\Upload;
use App\Repository\Tools\Back;
use Illuminate\Http\Request;
use \App\Repository\Admin\Upload\Logo as LogoTr;

class Logo extends Upload
{
    use Back;

    public function addressFile()
    {
        return '/image/logo/';
    }

    public function update()
    {
        image_footer::whereId(1)->update(['src' => $this->name]);
        return $this;
    }
}
