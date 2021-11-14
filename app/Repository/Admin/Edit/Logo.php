<?php

namespace App\Repository\Admin\Edit;

use App\Models\image_footer;
use App\Repository\Tools\Back;
use Illuminate\Http\Request;
use \App\Repository\Admin\Upload\Logo as LogoTr;

class Logo extends LogoTr implements AdminEditInterface
{
    use Back;
    public $request;
    public function setRequest(Request $request)
    {
        $this->request = $request;
        return $this;
    }

    public function update()
    {
        image_footer::whereId(1)->update(['src' => $this->name]);
        return $this;
    }
}
