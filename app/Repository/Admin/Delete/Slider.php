<?php

namespace App\Repository\Admin\Delete;
use \App\Models\slider as SliderModel;
class Slider implements DeleteInterface
{

    public function delete($id)
    {
        SliderModel::whereId($id)->delete();
        return $this;
    }
}
