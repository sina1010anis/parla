<?php

namespace App\Http\Controllers\Admin\AdminView;

use App\Http\Controllers\Controller;
use App\Models\menu;
use App\Repository\Delete\admin\User;
use Illuminate\Http\Request;

class AdminDeleteController extends Controller
{
    public function deleteUser(Request $request , User $user)
    {
        return $user->delete($request->id)->msgDelete();
    }

    public function deleteMenu(Request $request , \App\Repository\Admin\Delete\Menu $menu)
    {
        return $menu->delete($request->id)->msgDelete();

    }
}
