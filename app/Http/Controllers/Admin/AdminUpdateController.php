<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\support;
use Illuminate\Http\Request;

class AdminUpdateController extends Controller
{
    public function updateSupport(Request $request)
    {
        (!isset($request->id)) ? support::whereId($request->id)->update(['view_admin' => 1]) :  false;
    }
}
