<?php

namespace App\Repository\Admin\Delete;

use App\Models\item_footer;

class ItemFooter implements DeleteInterface
{
    public function delete($id)
    {
        return item_footer::whereId($id)->delete();
    }
}
