<?php

namespace App\Repository\CommentReply;

use App\Models\reply_comment;
use App\Repository\Tools\Message;
use App\Repository\Tools\setRequest;

class commentReply extends setRequest
{
    use Message;
    public function sendComment(){
        reply_comment::create([
            'text' => $this->request->text,
            'user_id' => auth()->user()->id,
            'comment_id' => $this->request->id,
        ]);
        return $this->msgOk();
    }
}
