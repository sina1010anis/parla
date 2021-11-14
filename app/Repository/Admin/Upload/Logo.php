<?php

namespace App\Repository\Admin\Upload;

abstract class Logo extends Upload
{
    public function addressFile()
    {
        return '/image/logo/';
    }
}
