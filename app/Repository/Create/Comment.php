<?php

namespace App\Repository\Create;

trait Comment
{
    public function create()
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
