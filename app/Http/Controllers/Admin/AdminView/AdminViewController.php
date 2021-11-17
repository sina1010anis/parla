<?php

namespace App\Http\Controllers\Admin\AdminView;

use App\Http\Controllers\Controller;
use App\Models\factor;
use App\Models\support;
use App\Models\User;
use Illuminate\Http\Request;
use \App\Repository\Admin\Factor\Factor as FactorAdmin;

class AdminViewController extends Controller
{
    public $factor;

    public function __construct(FactorAdmin $factor)
    {
        $this->factor = $factor;
    }

    public function viewUser(Request $request)
    {
        return response()->json(User::find($request->id));
    }

    public function factorUser(Request $request)
    {
        $factor = $this->factor->findFactor($request->id);
        return response()->json([
            $factor,
            'time' => j_date($factor->created_at) ,
            'address' => $this->factor->build(),
            'orders' => $this->factor->setOrder(),
            'mobile' => $this->factor->findMobile()
        ]);
    }

    public function viewSupport(Request $request)
    {
        $data = [];
        $comments = support::whereView_admin(0)->whereStatus(0)->get();
        foreach ($comments as $comment){
            $data[]=[
                'username' => $comment->user->name,
                'text' =>$comment->text,
                'data' => j_date($comment->created_at),
                'sender' => $comment->sender,
                'id' => $comment->id
            ];
        }
        return response()->json($data);
    }

    public function viewAbout()
    {
        return view('admin.page.aboutPage');
    }

    public function viewLogo()
    {
        return view('admin.page.logoPage');
    }

    public function viewMenu()
    {
        return view('admin.page.menuPage');
    }

    public function viewSubMenu()
    {
        return view('admin.page.viewSubMenu');
    }

    public function viewBannerUp()
    {
        return view('admin.page.bannerUp');
    }
    public function viewBannerSlider()
    {
        return view('admin.page.bannerSlider');
    }
    public function viewBannerCenter()
    {
        return view('admin.page.bannerCenter');
    }
    public function viewBannerEnd()
    {
        return view('admin.page.bannerEnd');
    }

    public function viewSlider()
    {
        return view('admin.page.slider');
    }
    public function viewSliderMenu()
    {
        return view('admin.page.sliderMenu');
    }

    public function viewSliderLogin()
    {
        return view('admin.page.sliderLogin');

    }
}

