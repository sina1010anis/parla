<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\VerifyMobileRequest;
use App\Models\product;
use App\Models\size_product;
use App\Models\User;
use App\Repository\Card\Card;
use App\Repository\Comment\CommentProduct;
use App\Repository\Save\saveProduct;
use App\Repository\Tools\Back;
use Carbon\Carbon;
use Ghasedak\GhasedakApi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    use Back;
    public function show(product $slug){
        product::where('id', $slug->id)->increment('view' , 1);
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
            $price = dic($data->price , $product->discount);
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

    public function searchProduct(Request $request){
        $data = product::where('name' , 'LIKE' , '%'.$request->text.'%')->where('status' , '!=' , 0)->get();
        return response()->json($data);
    }

    public function verifyMobile(GhasedakApi $ghasedakApi)
    {
        $number = rand(23457,99999);
        session()->put('number' , $number);
        $text = 'با تشکر از ثبت نام شما کد تایید : '.$number.' با احترام تیم Parla' ;
        $ghasedakApi->SendSimple(auth()->user()->mobile , $text , env('GHASEDAKAPI_LINENUMBER', '30005006006771'));
        return view('front.section.verify_mobile');
    }

    public function verifyMobileCheck(VerifyMobileRequest $request)
    {
        if ($request->code == session()->get('number')){
            User::whereId(auth()->user()->id)->update(['verify_mobile' => 1]);
            return redirect()->route('home');
        }else{
            return $this->backD('کد تایید نادرست است (کد تایید مجدد ارسال شد)');
        }
    }
}
