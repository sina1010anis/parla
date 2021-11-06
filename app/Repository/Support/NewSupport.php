<?php

namespace App\Repository\Support;

use App\Models\support;
use App\Models\User;
use App\Repository\Create\Create;
use App\Repository\Tools\Message;
use Illuminate\Http\Request;
class NewSupport extends Create
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
        $this->createSupport($this->request);
        return $this->msgCreate();
    }

}
