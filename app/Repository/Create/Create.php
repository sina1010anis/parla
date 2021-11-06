<?php

namespace App\Repository\Create;

use App\Models\support as SupportModel;
use Illuminate\Http\Request;

abstract class Create
{
    use Card;
    public function createSupport(Request $request)
    {
        SupportModel::create([
            'text' => $this->request->text,
            'sender' => auth()->user()->id,
        ]);
    }
    public function createSaveProduct()
    {
        \App\Models\save_product::create([
            'user_id' => auth()->user()->id,
            'product_id' => $this->request->product,
        ]);
    }
    public function createComment()
    {
        \App\Models\comment::create([
            'title' => $this->request->title,
            'text' => $this->request->text,
            'user_id' => auth()->user()->id,
            'product_id' => $this->id,
            'designing' => $this->request->designing,
            'possibilities' => $this->request->possibilities,
            'value' => $this->request->value,
            'quality' => $this->request->quality,
            'src_image_user' => $this->nameImage,
        ]);
    }
}
