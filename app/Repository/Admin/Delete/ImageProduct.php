<?php

namespace App\Repository\Admin\Delete;

class ImageProduct implements DeleteInterface
{

    public function delete($id)
    {
        return \App\Models\image_product::whereId($id)->delete();
    }
}
