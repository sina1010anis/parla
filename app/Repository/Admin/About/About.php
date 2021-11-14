<?php

namespace App\Repository\Admin\About;
use App\Http\Requests\Admin\LogoRequest;
use App\Http\Requests\Admin\MenuRequest;
use App\Models\image_about;
use \App\Repository\Admin\Upload\About as AboutAB;
use App\Repository\Tools\Back;

class About extends AboutAB
{
    use Back;
    public $request;
    public function setRequest(LogoRequest $request)
    {
        $this->request = $request;
        return $this;
    }

    public function create()
    {
        image_about::create([
            'name' => $this->name,
            'src' => $this->name,
        ]);
        return $this;
    }
}
