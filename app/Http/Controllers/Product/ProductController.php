<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\product;
use App\Models\size_product;
use App\Repository\Card\Card;
use App\Repository\Comment\CommentProduct;
use App\Repository\Save\saveProduct;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function show(product $slug){
        return view('front.product.index')->with('data' , $slug);
    }

    public function sendSize(Request $request){
        $data = size_product::find($request->id);
        $product = product::find($data->product_id);
        if ($product->discount <= 0){
            return response()->json([
                'data'=>$data,
                'status' => 'off'
            ]);
        }else{
            $dic = $product->discount / 100;
            $price =$data->price - ($data->price *$dic );
            return response()->json([
                'data'=>$data,
                'price' =>$price,
                'status' => 'on'
            ]);
        }

    }

    public function saveProduct(Request $request , saveProduct $saveProduct){
        return $saveProduct->setRequest($request)->onSave();
    }

    public function saveDeleteProduct(Request $request , saveProduct $saveProduct){
        return $saveProduct->setRequest($request)->unSave();
    }

    public function saveCard(Request $request , Card $card)
    {
        return $card->setRequest($request)->checkCard();
    }
}
