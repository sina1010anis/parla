<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\sub_menu;
use Ghasedak\GhasedakApi;
use GuzzleHttp\Client;
use http\Message\Body;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('front.section.index');
    }

    public function searchHeaderMenu(Request $request)
    {
        if ($request->ajax()) {
            $menus = sub_menu::whereMenuId($request->id)->get();
            return response()->json($menus);
        }
    }

    public function aboutWe()
    {
        return view('front.singel_page.about');
    }

    public function contact()
    {
        return view('front.singel_page.contact');
    }

    public function test(GhasedakApi $api)
    {
        $api->Verify('09395231890' , '1' , 'codeVerify' ,'55555');
    }
}
