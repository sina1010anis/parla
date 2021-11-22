<?php

namespace App\Repository\Admin\Delete;

class City implements DeleteInterface
{

    public function delete($id)
    {
        return \App\Models\state::whereId($id)->delete();
    }
}
