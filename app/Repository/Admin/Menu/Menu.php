<?php

namespace App\Repository\Admin\Menu;

use App\Http\Requests\Admin\MenuRequest;
use \App\Repository\Admin\Upload\Menu as MenuTR;
use App\Repository\Tools\Back;

class Menu extends MenuTR
{
    use Back;
    public $request;
    public function setRequest(MenuRequest $request)
    {
        $this->request = $request;
        return $this;
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
