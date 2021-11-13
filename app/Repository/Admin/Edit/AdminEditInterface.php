<?php

namespace App\Repository\Admin\Edit;

use Illuminate\Http\Request;

interface AdminEditInterface
{
    public function setRequest(Request $request);
    public function update();
}
