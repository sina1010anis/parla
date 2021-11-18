<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ImageProductRequest;
use App\Http\Requests\Admin\LogoRequest;
use App\Http\Requests\Admin\MenuRequest;
use App\Http\Requests\Admin\ProductRequest;
use App\Http\Requests\Admin\SizeProductRequest;
use App\Http\Requests\Admin\SliderLoginRequest;
use App\Http\Requests\Admin\SliderMenuRequest;
use App\Http\Requests\Admin\SliderRequest;
use App\Repository\Admin\About\About;
use App\Repository\Admin\Banner\BannerCenter;
use App\Repository\Admin\Menu\Menu;
use App\Repository\Admin\Product\ImageProduct;
use App\Repository\Admin\Product\Product;
use App\Repository\Admin\Product\SizeProduct;
use App\Repository\Admin\Slider\Slider;
use App\Repository\Admin\Slider\SliderLogin;
use App\Repository\Admin\Slider\SliderMenu;
use App\Repository\Admin\SubMenu\SubMenu;
use App\Repository\Create\Card;
use App\Repository\Create\Create;
use App\Repository\Create\Support;
use App\Repository\Tools\Message;
use Ghasedak\GhasedakApi;
use Illuminate\Http\Request;

class AdminNewController extends Controller
{
    use Support,Message;
    public function newSupport(Request $request , GhasedakApi $ghasedakApi)
    {
        return $this->createSupport($request)->sendSMS($ghasedakApi)->msgCreate();
    }

    public function newMenu(MenuRequest $request , Menu $menu)
    {
        return $menu->setRequest($request)->move()->create()->back('با موفقیت اپلود شد');
    }

    public function newImageAbout(LogoRequest $request , About $about)
    {
        return $about->setRequest($request)->move()->create()->back('با موفقیت اپلود شد');
    }

    public function newSubMenu(MenuRequest $request , SubMenu $subMenu)
    {
        return $subMenu->setRequest($request)->move()->create()->back('با موفقیت ساخته شد');
    }

    public function newBanner(MenuRequest $request  , BannerCenter $bannerCenter)
    {
        return $bannerCenter->setRequest($request)->move()->create()->back('با موفقیت ساخته شد');
    }

    public function newSlider(SliderRequest $request , Slider $slider)
    {
        return $slider->setRequest($request)->move()->create()->back('با موفقیت ساخته شد');
    }

    public function newSliderMenu(SliderMenuRequest $request , SliderMenu $sliderMenu)
    {
        return $sliderMenu->setRequest($request)->move()->create()->back('با موفقیت ساخته شد');
    }

    public function newSliderLogin(SliderLoginRequest $request , SliderLogin $sliderLogin)
    {
        return $sliderLogin->setRequest($request)->move()->create()->back('با موفقیت ساخته شد');
    }

    public function newProduct(ProductRequest $request , Product $product)
    {
        return $product->setRequest($request)->move()->create()->back('با موفقیت ساخته شد');
    }

    public function newSize(SizeProductRequest $request , SizeProduct $sizeProduct)
    {
        return $sizeProduct->setRequest($request)->create()->msgCreate();
    }

    public function newImage(ImageProductRequest $request , ImageProduct $imageProduct)
    {
        return $imageProduct->setRequest($request)->move()->create()->back('با موفقیت ساخته شد');
    }
}
