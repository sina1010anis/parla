<?php

namespace App\Repository\Admin\Delete;

use App\Models\color_product;

class ColorProduct implements DeleteInterface
{

    public function delete($id)
    {
        return color_product::whereId($id)->delete();
    }
}
