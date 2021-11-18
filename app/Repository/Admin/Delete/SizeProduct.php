<?php

namespace App\Repository\Admin\Delete;

use App\Models\size_product;

class SizeProduct implements DeleteInterface
{

    public function delete($id)
    {
        return size_product::whereId($id)->delete();
    }
}
