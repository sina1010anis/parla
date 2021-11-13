<?php

namespace App\Repository\Admin\Upload;

trait Logo
{
    public $file;
    public $name;

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
        $this->file->move(public_path('/image/logo/'), $this->name);
        return $this;
    }
    public function move()
    {
        $this->setFile()->setName()->moveFile();
        return $this;
    }
}
