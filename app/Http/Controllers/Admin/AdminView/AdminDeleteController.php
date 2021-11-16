<?php

namespace App\Http\Controllers\Admin\AdminView;

use App\Http\Controllers\Controller;
use App\Repository\Admin\Delete\BannerCenter;
use App\Repository\Admin\Delete\Delete;
use App\Repository\Admin\Delete\SubMenu;
use App\Repository\Admin\Delete\User;
use App\Repository\Tools\Message;
use Illuminate\Http\Request;
use \App\Repository\Admin\Delete\Menu;

class AdminDeleteController extends Controller
{
    use Message;
    public function deleteUser(Request $request)
    {
        new Delete(new User() , $request->id);
        return $this->msgDelete();
    }

    public function deleteMenu(Request $request)
    {
        new Delete(new Menu() , $request->id);
        return $this->msgDelete();
    }

    public function deleteSubMenu(Request $request)
    {
        new Delete(new SubMenu() , $request->id);
        return $this->msgDelete();
    }

    public function deleteImageBannerCenter(Request $request)
    {
        new Delete(new BannerCenter() , $request->id);
        return $this->msgDelete();
    }
}
