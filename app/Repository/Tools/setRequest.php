<?php

namespace App\Repository\Tools;

use Illuminate\Http\Request;

abstract class setRequest
{
    protected $request;
    public function setRequest(Request $request)
    {
        $this->request = $request;
        return $this;
    }
}
