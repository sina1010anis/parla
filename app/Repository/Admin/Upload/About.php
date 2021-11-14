<?php

namespace App\Repository\Admin\Upload;

abstract class About extends Upload
{
    public function addressFile()
    {
        return '/image/about/';
    }
}
