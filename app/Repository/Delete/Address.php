<?php

namespace App\Repository\Delete;

use App\Repository\Tools\Message;

class Address
{
    use Message;
    public function delete($id)
    {
        \App\Models\address::whereId($id)->delete();
        return $this;
    }
}
