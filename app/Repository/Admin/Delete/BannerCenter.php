<?php

namespace App\Repository\Admin\Delete;

use App\Models\banner;

class BannerCenter implements DeleteInterface
{

    public function delete($id)
    {
        return banner::whereId($id)->delete();
    }
}
