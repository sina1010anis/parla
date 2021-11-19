<?php

namespace App\Repository\Admin\Delete;

class Color implements DeleteInterface
{

    public function delete($id)
    {
        return \App\Models\color::whereId($id)->delete();
    }
}
