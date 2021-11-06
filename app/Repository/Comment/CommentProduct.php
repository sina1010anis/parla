<?php

namespace App\Repository\Comment;

use App\Models\comment;
use App\Repository\Create\Create;
use App\Repository\Tools\Back;
use App\Repository\Tools\Check;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Repository\Create\Comment as CreateComment;

class CommentProduct extends Create implements CommentProductInterface
{
    use Check;

    protected $request = null;
    protected $nameImage = null;
    public $id = 0;

    public function setRequest(Request $request, $idProduct)
    {
        $this->request = $request;
        $this->id = $idProduct;
        return $this;
    }

    public function sendComment()
    {
        if ($this->checkProduct($this->id)) {
            $this->createComment();
            return redirect()->back()->with('success' , 'با تشکر از نظر شما بعد از تایید منتشر می شود');
        }else{
            return redirect()->back()->with('warning' , 'مشکلی پیش امده است');
        }
    }

    public function checkUploadImage()
    {
        if ($this->checkProduct($this->id)) {
            $file = ($this->request->file('image') == '') ? Null : $this->request->file('image');
            if ($file != Null) {
                $nameImage = Str::random(8) . $file->getClientOriginalName();
                $this->nameImage($nameImage);
                $file->move(public_path('/image/comment/'), $this->nameImage);
            }
        }
        return $this;
    }

    public function nameImage($name)
    {
        $this->nameImage = $name;
    }
}
