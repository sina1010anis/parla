<?php

namespace App\Repository\View\Data;

use Illuminate\View\View;
use \App\Models\card as cardUser;
class card
{
    public function compose(View $view)
    {
        return $view->with('card_user' , cardUser::where(['user_id' => auth()->user()->id , 'status' => 0])->get());
    }
}
