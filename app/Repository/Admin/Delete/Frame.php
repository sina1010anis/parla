<?php

namespace App\Repository\Admin\Delete;

class Frame implements DeleteInterface
{

    public function delete($id)
    {
        return \App\Models\frame::whereId($id)->delete();
    }
}
