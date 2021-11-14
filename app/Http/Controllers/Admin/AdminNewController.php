<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MenuRequest;
use App\Repository\Admin\Menu\Menu;
use App\Repository\Create\Card;
use App\Repository\Create\Create;
use App\Repository\Create\Support;
use App\Repository\Tools\Message;
use Illuminate\Http\Request;

class AdminNewController extends Controller
{
    use Support,Message;
    public function newSupport(Request $request)
    {
        return $this->createSupport($request)->msgCreate();
    }

    public function newMenu(MenuRequest $request , Menu $menu)
    {
        return $menu->setRequest($request)->move()->create()->back('با موفقیت اپلود شد');
    }
}
