<?php

namespace App\Http\Controllers\Admin\AdminView;

use App\Http\Controllers\Controller;
use App\Models\factor;
use App\Models\User;
use Illuminate\Http\Request;
use \App\Repository\Admin\Factor\Factor as FactorAdmin;

class AdminViewController extends Controller
{
    public $factor;

    public function __construct(FactorAdmin $factor)
    {
        $this->factor = $factor;
    }

    public function viewUser(Request $request)
    {
        return response()->json(User::find($request->id));
    }

    public function factorUser(Request $request)
    {
        $factor = $this->factor->findFactor($request->id);
        return response()->json([
            $factor,
            'time' => j_date($factor->created_at) ,
            'address' => $this->factor->build(),
            'orders' => $this->factor->setOrder()
        ]);
    }
}
