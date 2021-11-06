<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function tracking()
    {
        return view('user.page.tracking');
    }
    public function cart(){
        return view('user.page.cart');
    }
    public function address(){
        return view('user.page.address');
    }
    public function custom(){
        return view('user.page.custom');
    }
    public function calculator(){
        return view('user.page.calculator');
    }
    public function support(){
        return view('user.page.support');
    }
    public function profile(){
        return view('user.page.profile');
    }
    public function save(){
        return view('user.page.save');
    }
    public function message(){
        return view('user.page.message');
    }
}
