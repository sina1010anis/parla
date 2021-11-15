<?php

namespace App\Repository\Admin\Menu;

use App\Http\Requests\Admin\MenuRequest;
use \App\Repository\Admin\Upload\Menu as MenuTR;
use App\Repository\Admin\Upload\Upload;
use App\Repository\Tools\Back;

class Menu extends Upload
{
    use Back;

    public function addressFile()
    {
        return '/image/menu/';
    }
    public function create()
    {
        \App\Models\menu::create([
            'name' => $this->request->name,
            'image' => $this->name,
        ]);
        return $this;
    }
}
