<?php

namespace App\Repository\Admin\SubMenu;

use App\Models\sub_menu;
use App\Repository\Admin\Upload\Upload;
use App\Repository\Tools\Back;
use Illuminate\Support\Str;

class SubMenu extends Upload
{
    use Back;
    public function addressFile()
    {
        return '/image/menu/';
    }

    public function create()
    {
        sub_menu::create([
            'name'=> $this->request->name,
            'slug'=> Str::slug($this->request->name),
            'menu_id'=> $this->request->menu_id,
            'image'=> $this->name,
        ]);
        return $this;
    }
}
