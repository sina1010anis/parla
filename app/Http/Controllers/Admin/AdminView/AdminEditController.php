<?php

namespace App\Http\Controllers\Admin\AdminView;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutPage;
use App\Http\Requests\Admin\LogoRequest;
use App\Http\Requests\Admin\MenuNameRequest;
use App\Models\factor;
use App\Models\menu;
use App\Models\sub_menu;
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

    public function editMenu(Request $request)
    {
        $data = menu::find($request->id);
        return response()->json($data);
    }

    public function editSubMenu(Request $request)
    {
        $data = sub_menu::find($request->id);
        return response()->json([
            'data' => $data , 'menu' => $data->menu
        ]);
    }

    public function editMenuName(MenuNameRequest $request)
    {
        menu::whereId($request->id)->update(['name' => $request->text]);
        return $this->msgOk();
    }

    public function editSubMenuName(Request $request)
    {
        sub_menu::whereId($request->id)->update(['name' => $request->text]);
        return $this->msgOk();
    }
}
