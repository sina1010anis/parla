<?php

namespace App\Repository\Comment;

use Illuminate\Http\Request;

interface CommentProductInterface
{
    public function setRequest(Request $request , $idProduct);

    public function sendComment();


}
