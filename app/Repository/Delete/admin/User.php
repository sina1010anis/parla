<?php

namespace App\Repository\Delete\admin;

use App\Repository\Tools\Message;

class User
{
    use Message;
    public function delete($id)
    {
        \App\Models\User::whereId($id)->delete();
        return $this;
    }
}
