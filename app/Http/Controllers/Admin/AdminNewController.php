<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
