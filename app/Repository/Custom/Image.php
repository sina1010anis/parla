<?php

namespace App\Repository\Custom;

use App\Http\Requests\CustomRequest;
use \Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

trait Image
{
    public $request;
    public $file;
    public $name;
    public function setRequest(CustomRequest $request)
    {
        $this->request = $request;
        return $this;
    }

    public function setFile()
    {
        $this->file = $this->request->file('image');
        return $this;
    }
    public function setName()
    {
        $this->name = rand(0, 100) . $this->file->getClientOriginalName();
        return $this;
    }

    public function setCookie()
    {
        Cookie::queue('custom_'.auth()->user()->id , 'custom' , 999999);
        return $this;
    }

    public function moveFile()
    {
        $this->file->move(public_path('/image/custom/'), $this->name);
        return $this;
    }
}
