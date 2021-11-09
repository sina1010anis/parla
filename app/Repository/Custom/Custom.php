<?php

namespace App\Repository\Custom;
use \App\Repository\Create\Custom as CustomTrait;
use App\Repository\Tools\Back;
use Illuminate\Http\Request;

class Custom extends UploadImage
{
    use CustomTrait , Back;
    public function createCustom()
    {
        $this->create($this->request , $this->name);
        return $this;
    }
}
