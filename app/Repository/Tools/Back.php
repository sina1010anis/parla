<?php

namespace App\Repository\Tools;

trait Back
{
    public function back($msg)
    {
        return back()->with('success' , $msg);
    }

    public function backD($msg)
    {
        return back()->with('warning' , $msg);
    }

    public function backTo ($msg , $route)
    {
        return redirect($route)->with('success' ,$msg);
    }
}
