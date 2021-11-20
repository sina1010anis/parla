<?php

namespace App\Repository\Admin\Delete;

use App\Models\link_footer;

class LinkFooter implements DeleteInterface
{

    public function delete($id)
    {
        return link_footer::whereId($id)->delete();
    }
}
