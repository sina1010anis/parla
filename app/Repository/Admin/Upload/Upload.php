<?php

namespace App\Repository\Admin\Upload;

use App\Http\Requests\Admin\LogoRequest;
use App\Repository\Tools\Back;
use App\Repository\Tools\Message;
use Illuminate\Http\Request;

abstract class Upload
{
    use Back , Message;
    public $file;
    public $name;
    public $address;
    public $request;
    public function setRequest(Request $request)
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
        $this->name = $this->file->getClientOriginalName();
        return $this;
    }
    public function moveFile()
    {
        $this->file->move(public_path($this->addressFile()), $this->name);
        return $this;
    }

    public abstract function addressFile();

    public function move()
    {
        $this->setFile()->setName()->moveFile();
        return $this;
    }
}
