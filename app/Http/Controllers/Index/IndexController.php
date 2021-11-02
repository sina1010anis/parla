<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\address;
use App\Models\city;
use App\Models\menu;
use App\Models\sub_menu;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('front.section.index');
    }
    public function searchHeaderMenu(Request $request){
        if ($request->ajax()){
            $menus = sub_menu::whereMenuId($request->id)->get();
            return response()->json($menus);
        }
    }

    public function aboutWe(){
        return view('front.singel_page.about');
    }

    public function contact()
    {
        return view('front.singel_page.contact');
    }
}
