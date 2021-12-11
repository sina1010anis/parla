<?php

namespace App\Repository\Admin\Delete;

use App\Models\card;

class Cart implements DeleteInterface
{
    public function delete($id)
    {
        card::whereStatus(0)->update(['status' => 900]);
        return card::whereStatus(900)->delete();
    }
}
