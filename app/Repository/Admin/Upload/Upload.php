<?php

namespace App\Repository\Admin\Upload;

abstract class Upload
{
    public $file;
    public $name;
    public $address;
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
