<?php

namespace App\Repository\Admin\Delete;

use App\Models\city;

class State implements DeleteInterface
{

    public function delete($id)
    {
        city::whereId($id)->delete();
    }
}
