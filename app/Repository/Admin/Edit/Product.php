<?php

namespace App\Repository\Admin\Edit;

use App\Repository\Tools\Back;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Product implements AdminEditInterface
{
    use Back;
    public $request;
    public $id;
    public function setRequest(Request $request)
    {
        $this->request = $request;
        return $this;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function update()
    {
        \App\Models\product::whereId($this->id)->update([
            'name' => $this->request->name,
            'slug' => Str::slug($this->request->name),
            'price' => $this->request->price,
            'number' => $this->request->number,
            'description' => $this->request->description,
            'description_all' => $this->request->description_all,
            'tips' => $this->request->tips,
            'status' => $this->request->status,
            'menu_id' => $this->request->menu_id,
            'discount' => $this->request->discount,
        ]);
        return $this;
    }
}
