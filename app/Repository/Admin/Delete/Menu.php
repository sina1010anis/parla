<?php

namespace App\Repository\Admin\Delete;

use App\Repository\Tools\Message;

class Menu
{
    use Message;
    public function delete($id)
    {
        \App\Models\menu::whereId($id)->delete();
        return $this;
    }
}
