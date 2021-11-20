<?php

namespace App\Repository\Admin\Delete;

use App\Models\title_footer;

class BoxFooter implements DeleteInterface
{

    public function delete($id)
    {
        return title_footer::whereId($id)->delete();
    }
}
