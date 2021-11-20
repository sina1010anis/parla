<?php

namespace App\Http\Controllers\Admin\AdminView;

use App\Http\Controllers\Controller;
use App\Repository\Admin\Delete\BannerCenter;
use App\Repository\Admin\Delete\BoxFooter;
use App\Repository\Admin\Delete\Color;
use App\Repository\Admin\Delete\ColorProduct;
use App\Repository\Admin\Delete\Delete;
use App\Repository\Admin\Delete\ImageProduct;
use App\Repository\Admin\Delete\Item;
use App\Repository\Admin\Delete\ItemFooter;
use App\Repository\Admin\Delete\LinkFooter;
use App\Repository\Admin\Delete\Product;
use App\Repository\Admin\Delete\SizeProduct;
use App\Repository\Admin\Delete\Slider;
use App\Repository\Admin\Delete\SliderLogin;
use App\Repository\Admin\Delete\SliderMenu;
use App\Repository\Admin\Delete\SubMenu;
use App\Repository\Admin\Delete\User;
use App\Repository\Tools\Message;
use Illuminate\Http\Request;
use \App\Repository\Admin\Delete\Menu;

class AdminDeleteController extends Controller
{
    use Message;

    public function deleteUser(Request $request)
    {
        new Delete(new User() , $request->id);
        return $this->msgDelete();
    }

    public function deleteMenu(Request $request)
    {
        new Delete(new Menu() , $request->id);
        return $this->msgDelete();
    }

    public function deleteSubMenu(Request $request)
    {
        new Delete(new SubMenu() , $request->id);
        return $this->msgDelete();
    }

    public function deleteImageBannerCenter(Request $request)
    {
        new Delete(new BannerCenter() , $request->id);
        return $this->msgDelete();
    }

    public function deleteSlider(Request $request)
    {
        new Delete(new Slider() , $request->id);
        return $this->msgDelete();
    }

    public function deleteSliderMenu(Request $request)
    {
        new Delete(new SliderMenu() , $request->id);
        return $this->msgDelete();
    }

    public function deleteSliderLogin(Request $request)
    {
        new Delete(new SliderLogin() , $request->id);
        return $this->msgDelete();
    }

    public function deleteProduct(Request $request)
    {
        new Delete(new Product() , $request->id);
        return $this->msgDelete();
    }

    public function deleteSize(Request $request)
    {
        new Delete(new SizeProduct() , $request->id);
        return $this->msgDelete();
    }

    public function deleteImage(Request $request)
    {
        new Delete(new ImageProduct() , $request->id);
        return $this->msgDelete();
    }

    public function deleteColorProduct(Request $request)
    {
        new Delete(new ColorProduct() , $request->id);
        return $this->msgDelete();
    }

    public function deleteColor(Request $request)
    {
        new Delete(new Color() , $request->id);
        return $this->msgDelete();
    }

    public function deleteItem(Request $request)
    {
        new Delete(new Item() , $request->id);
        return $this->msgDelete();
    }

    public function deleteBoxFooter(Request $request)
    {
        new Delete(new BoxFooter() , $request->id);
        return $this->msgDelete();
    }

    public function deleteLinkFooter(Request $request)
    {
        new Delete(new LinkFooter() , $request->id);
        return $this->msgDelete();
    }

    public function deleteItemFooter(Request $request)
    {
        new Delete(new ItemFooter() , $request->id);
        return $this->msgDelete();
    }
}
