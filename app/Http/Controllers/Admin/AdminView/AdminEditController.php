<?php

namespace App\Http\Controllers\Admin\AdminView;

use App\Http\Controllers\Controller;
use App\Models\factor;
use App\Repository\Tools\Message;
use Illuminate\Http\Request;

class AdminEditController extends Controller
{
    use Message;
    public function editStatusOrder(Request $request)
    {
        factor::whereId($request->id)->update(['status_order' => $request->code]);
        return $this->msgOk();
    }
}
