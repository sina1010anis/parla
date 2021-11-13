<?php

namespace App\Repository\Admin\Edit;

use App\Models\about_page;
use App\Repository\Tools\Back;
use Illuminate\Http\Request;


class About implements AdminEditInterface
{
    use Back;
    public $request;
    public function setRequest(Request $request)
    {
        $this->request = $request;
        return $this;
    }

    public function update()
    {
        about_page::where('id' , 1)->update(['text' => $this->request->text , 'title' => $this->request->title]);
        return $this;
    }
}
