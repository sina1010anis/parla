<?php

namespace App\Repository\Delete;

use App\Models\card;

trait DeleteItemCard
{
    public function delete()
    {
        card::where('id' , $this->request->id)->delete();
    }
}
