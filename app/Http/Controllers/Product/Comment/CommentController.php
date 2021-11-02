<?php

namespace App\Http\Controllers\Product\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentReplyRequset;
use App\Http\Requests\CommentRequest;
use App\Repository\Comment\CommentProduct;
use App\Repository\CommentReply\commentReply;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function newComment(CommentRequest $request , $idProduct , CommentProduct $commentProduct)
    {
        return $commentProduct
            ->setRequest($request , $idProduct)
            ->checkUploadImage()
            ->sendComment();
    }

    public function newCommentReply(CommentReplyRequset $request , commentReply $commentReply)
    {
        return $commentReply->setRequest($request)->sendComment();
    }
}
