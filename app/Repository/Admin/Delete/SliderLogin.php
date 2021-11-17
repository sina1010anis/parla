<?php

namespace App\Repository\Admin\Delete;
use App\Models\slider_login as SliderLoginModel;
use \App\Models\slider_menu as SliderModel;
class SliderLogin implements DeleteInterface
{

    public function delete($id)
    {
        SliderLoginModel::whereId($id)->delete();
        return $this;
    }
}
