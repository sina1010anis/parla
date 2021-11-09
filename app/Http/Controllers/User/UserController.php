<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomRequest;
use App\Models\address;
use App\Models\factor;
use App\Models\product_order;
use App\Models\User;
use App\Repository\Custom\Custom;
use App\Repository\Tools\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \App\Repository\Create\Address as AddressRepository;
use \App\Repository\Factor\Factor as FactorRepository;

class UserController extends Controller
{
    use Message , AddressRepository;
    public function tracking()
    {
        return view('user.page.tracking');
    }

    public function cart()
    {
        return view('user.page.cart');
    }

    public function address()
    {
        return view('user.page.address');
    }

    public function custom()
    {
        return view('user.page.custom');
    }

    public function calculator()
    {
        return view('user.page.calculator');
    }

    public function support()
    {
        return view('user.page.support');
    }

    public function profile()
    {
        return view('user.page.profile');
    }

    public function save()
    {
        return view('user.page.save');
    }

    public function message()
    {
        return view('user.page.message');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('index');
    }

    public function validateEditProfile(Request $request)
    {
        if (empty($request->text)||empty($request->name)){
            return false;
        }else{
            return true;
        }
    }

    public function editProfile(Request $request)
    {
        if ($this->validateEditProfile($request)){
            if ($request->name == 'password'){
                User::whereId(auth()->user()->id)->update([$request->name => Hash::make($request->text)]);
            }else{
                User::whereId(auth()->user()->id)->update([$request->name => $request->text]);
            }
            if ($request->name == 'password' || $request->name == 'mobile'){
                auth()->logout();
            }
            return $this->msgOk();
        }else{
            return $this->msgNo();
        }
    }

    public function newAddress(Request $request)
    {
        $data = $request->data;
        if (!empty($data['state']) || !empty($data['city']) || !empty($data['address'])){
            $this->createAddress($data);
             return $this->msgSuccess();
        }else{
            return $this->msgWarning();
        }
    }

    public function editAddress(Request $request)
    {
        if (!empty($request->id)){
            User::whereId(auth()->user()->id)->update(['address_id' => $request->id]);
            return $this->msgOk();
        }else{
            return $this->msgNo();
        }
    }

    public function viewFactor(Request $request ,FactorRepository $factor)
    {
        $factor->setRequest($request)->findFactor();
        $product = $factor->getProduct()->product();
        return response()->json([
            'time' => j_date($factor->data->created_at),
            'data' => $factor->data,
            'product' => $product->productFactor
        ]);
    }

    public function newCustom(CustomRequest $request , Custom $custom)
    {
        return $custom->setRequest($request)->uploadImage()->createCustom()->backTo('با موفقیت اپلود شد منتظر پیام پشتیبان باشد با تشکر' , route('user.custom'));
    }
}
