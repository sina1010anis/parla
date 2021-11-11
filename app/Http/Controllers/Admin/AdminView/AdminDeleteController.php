<?php

namespace App\Http\Controllers\Admin\AdminView;

use App\Http\Controllers\Controller;
use App\Repository\Delete\admin\User;
use Illuminate\Http\Request;

class AdminDeleteController extends Controller
{
    public function deleteUser(Request $request , User $user)
    {
        return $user->delete($request->id)->msgDelete();
    }
}
