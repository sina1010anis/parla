<?php

namespace App\Repository\Admin\Delete;

use App\Repository\Tools\Message;

class User implements DeleteInterface
{
    use Message;
    public function delete($id)
    {
        \App\Models\User::whereId($id)->delete();
        return $this;
    }
}
