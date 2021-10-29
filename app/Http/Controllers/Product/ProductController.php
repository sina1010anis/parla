<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(product $slug){
        return view('front.product.index')->with('data' , $slug);
    }
}
