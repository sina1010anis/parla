<?php

namespace App\Repository\Create;

use Illuminate\Http\Request;
use \App\Models\custom as customModel;
trait Custom
{
    public function create(Request $request , $name)
    {
        customModel::create([
            'image' => $name,
            'text' => $request->text,
            'user_id' => auth()->user()->id
        ]);
    }
}
