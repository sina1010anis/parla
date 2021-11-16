<?php

namespace App\Repository\Admin\Banner;

use App\Http\Requests\Admin\BannerUpRequest;
use App\Models\banner;
use App\Repository\Admin\Upload\Upload;
use App\Repository\Tools\Back;
use Illuminate\Http\Request;

class BannerUp extends Upload
{
    use Back;

    public function update($target)
    {
        if ($target == 'up')
            banner::whereId(9)->update(['name' => $this->request->name , 'src' => $this->request->src, 'href' => $this->request->href]);
        if ($target == 'slider')
            banner::whereLocation(1)->update(['name' => $this->request->name , 'src' => $this->name, 'href' => $this->request->href]);
        if ($target == 'end')
            banner::whereLocation(3)->update(['name' => $this->request->name , 'src' => $this->name, 'href' => $this->request->href]);
        return $this;
    }
    public function editStatus()
    {
        $data = banner::find(9);
        return ($data->location == 4) ? $data->update(['location' => 0]) : $data->update(['location' => 4]);
    }

    public function addressFile()
    {
        return '/image/banner/';
    }
}
