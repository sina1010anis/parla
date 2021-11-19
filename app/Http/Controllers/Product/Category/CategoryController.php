<?php

namespace App\Http\Controllers\Product\Category;

use App\Http\Controllers\Controller;
use App\Models\product;
use App\Models\sub_menu;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(sub_menu $slug)
    {
        $data = product::whereMenu_id($slug->id)->where('status' , '!=' , 0)->paginate(20);
        return view('front.product.menu' , compact('data' , 'slug'));
    }
}
