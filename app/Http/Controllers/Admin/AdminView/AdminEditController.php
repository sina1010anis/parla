<?php

namespace App\Http\Controllers\Admin\AdminView;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutPage;
use App\Http\Requests\Admin\LogoRequest;
use App\Models\factor;
use App\Repository\Admin\Edit\About;
use App\Repository\Admin\Edit\Logo;
use App\Repository\Tools\Message;
use Illuminate\Http\Request;

class AdminEditController extends Controller
{
    use Message;
    public function editStatusOrder(Request $request)
    {
        factor::whereId($request->id)->update(['status_order' => $request->code]);
        return $this->msgOk();
    }

    public function editAbout(AboutPage $request , About $about)
    {
        return $about->setRequest($request)->update()->back('با موفقیت ویرایش شد');
    }

    public function editLogo(LogoRequest $request , Logo $logo)
    {
        return $logo->setRequest($request)->move()->update()->back('با موفقیت اپلود شد');
    }
}
