<?php

namespace App\Repository\Create;

use App\Models\support as SupportModel;
use Illuminate\Http\Request;

trait Support
{
    public function createSupport(Request $request)
    {
        SupportModel::create([
            'text' => $request->text,
            'sender' =>(isset($request->id)) ? $request->id : auth()->user()->id,
            'status' =>(isset($request->id)) ? 1 : 0,
            'view_admin' =>(isset($request->id)) ? 0 : 1,
        ]);
        return $this;
    }
}
