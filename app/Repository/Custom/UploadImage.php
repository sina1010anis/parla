<?php

namespace App\Repository\Custom;

use App\Http\Requests\CustomRequest;

abstract class UploadImage
{
    use Image;

    public function uploadImage()
    {
        $this->setRequest($this->request)->setCookie()->setFile()->setName()->moveFile();
        return $this;
    }
}
