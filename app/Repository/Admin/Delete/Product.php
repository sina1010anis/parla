<?php

namespace App\Repository\Admin\Delete;

use App\Models\banner;

class Product implements DeleteInterface
{
    public function delete($id)
    {
        return \App\Models\product::whereId($id)->delete();
    }
}
