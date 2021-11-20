<?php

namespace App\Repository\Admin\Delete;

class Item implements DeleteInterface
{
    public function delete($id)
    {
        return \App\Models\item::whereId($id)->delete();
    }
}
