<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\address;
use App\Models\city;
use App\Models\menu;
use App\Models\sub_menu;
use Ghasedak\GhasedakApi;
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

    public function tt()
    {
        $api = new GhasedakApi('c9500f25ff780726ac0f2cf09eb565ad3615f6093455b19b9e3d7e2269ff638a');
        $api->SendSimple('09395231890' , 'سلام' , '10008566');
    }
}
