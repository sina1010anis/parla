<?php

namespace App\Http\Controllers\Admin\AdminView;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutPage;
use App\Http\Requests\Admin\BannerUpRequest;
use App\Http\Requests\Admin\EditProductRequest;
use App\Http\Requests\Admin\LogoRequest;
use App\Http\Requests\Admin\MenuNameRequest;
use App\Models\comment;
use App\Models\custom;
use App\Models\factor;
use App\Models\menu;
use App\Models\product;
use App\Models\reply_comment;
use App\Models\sub_menu;
use App\Repository\Admin\Banner\BannerUp;
use App\Repository\Tools\Back;
use Ghasedak\GhasedakApi;
use App\Repository\Admin\Edit\About;
use App\Repository\Admin\Edit\Logo;
use App\Repository\Tools\Message;
use Illuminate\Http\Request;

class AdminEditController extends Controller
{
    use Message , Back;
    public function editStatusOrder(Request $request , GhasedakApi $ghasedakApi)
    {
        factor::whereId($request->id)->update(['status_order' => $request->code]);
        $factor = factor::find($request->id);
        $ghasedakApi->SendSimple($factor->user->mobile , 'وضعیت سفارش شما تغییر کرد برای برسی به پنل خود و پیگیری سفارشات مراجعه کنید . با احترام تیم Parla' ,env('GHASEDAKAPI_LINENUMBER', '30005006006771'));
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

    public function editBannerUp(Request $request , BannerUp $bannerUp , $model , $target)
    {
        if ($model == 'all'){
            if ($target == 'up'){
                return $bannerUp->setRequest($request)->update($target)->back('با موفقیت ویرایش شد');
            }else{
                return $bannerUp->setRequest($request)->move()->update($target)->back('با موفقیت ویرایش شد');
            }
        }elseif ($model == 'status'){
            $bannerUp->editStatus();
            return $this->back('وضعیت تغییر کرد');
        }
    }

    public function editStatusProduct(Request $request)
    {
        $data = product::whereId($request->id)->first();
        if ($data->status == 1){
            $data->update(['status' => 0]);
            return $this->msgOk();
        }else{
            $data->update(['status' => 1]);
            return $this->msgNo();
        }
    }

    public function editProductAll(product $id)
    {
        return view('admin.page.product')->with(['edit' => true , 'product' => $id]);
    }

    public function editProduct(EditProductRequest $request , \App\Repository\Admin\Edit\Product $product , $id)
    {
        return $product->setRequest($request)->setId($id)->update()->backTo('با موفقیت ویرایش شد' , 'admin/view/product');
    }

    public function editStatusProductT(Request $request , GhasedakApi $ghasedakApi)
    {
        custom::whereId($request->id)->update(['status' => $request->code]);
        $product = custom::find($request->id);
        $ghasedakApi->SendSimple($product->user->mobile , 'وضعیت محصول خاص شما تغییر کرده است با احترام تیم parla' , env('GHASEDAKAPI_LINENUMBER' , '30005006006771'));
        return $this->msgSuccess();
    }

    public function editStatusComment(Request $request)
    {
        if ($request->model == 'comment'){
            $comment = comment::find($request->id);
            if ($comment->status == 1){
                comment::whereId($request->id)->update(['status' => 0]);
                return $this->msgOk();
            }else{
                comment::whereId($request->id)->update(['status' => 1]);
                return $this->msgNo();
            }
        }else{
            $comment = reply_comment::find($request->id);
            if ($comment->status == 1){
                $comment->whereId($request->id)->update(['status' => 0]);
                return $this->msgOk();
            }else{
                $comment->whereId($request->id)->update(['status' => 1]);
                return $this->msgNo();
            }
        }

    }
}
