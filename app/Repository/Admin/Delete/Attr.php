<?php

namespace App\Repository\Admin\Delete;

use App\Models\properties;

class Attr implements DeleteInterface
{

    public function delete($id)
    {
        return properties::whereId($id)->delete();
    }
}
