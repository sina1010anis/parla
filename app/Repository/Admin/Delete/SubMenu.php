<?php

namespace App\Repository\Admin\Delete;
use \App\Models\sub_menu as SubMenuModel;
class SubMenu implements DeleteInterface
{

    public function delete($id)
    {
        SubMenuModel::whereId($id)->delete();
        return $this;
    }
}
