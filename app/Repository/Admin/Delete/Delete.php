<?php

namespace App\Repository\Admin\Delete;

use App\Repository\Tools\Message;

class Delete
{

    public function __construct(DeleteInterface $delete , $id)
    {
        return $delete->delete($id);
    }
}
