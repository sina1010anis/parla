<?php

namespace App\Repository\Admin\Delete;
use \App\Models\slider_menu as SliderModel;
class SliderMenu implements DeleteInterface
{

    public function delete($id)
    {
        SliderModel::whereId($id)->delete();
        return $this;
    }
}
