<?php

namespace App\Repository\Admin\About;

use App\Models\video_about;
use App\Repository\Admin\Upload\Upload;

class VideoAbout extends Upload
{

    public function addressFile()
    {
        return '/image/about/video/';
    }

    public function create()
    {
        video_about::create([
            'src' => $this->name,
            'name' => $this->name
        ]);
        return $this;
    }
}
