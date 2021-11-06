<?php

namespace App\Repository\Support;

use App\Models\support;
use App\Models\User;
use App\Repository\Tools\Message;
use Illuminate\Http\Request;

class NewSupport
{
    use Message;

    protected $request;

    public function setRequest(Request $request)
    {
        $this->request = $request;
        return $this;
    }

    public function newComment()
    {
        support::create([
            'text' => $this->request->text,
            'sender' => auth()->user()->id,
        ]);
        return $this->msgCreate();
    }

}
