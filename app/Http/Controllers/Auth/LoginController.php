<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function username()
    {
        return 'mobile';
    }
    public function showLoginForm(){
        return view('user.form.login');
    }

    public function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|min:10|max:12',
            'password' => 'required|string',
        ],$this->message());
    }
    public function message(){
        return [
            'mobile.required' => 'وارد کردن شماره موبایل الزامی است',
            'mobile.int' => 'لطفا شماره موبایل مناسبی وارد کنید',
            'mobile.min' => 'شماره موبایل کمتر از 10 عدد مجاز نیست',
            'mobile.max' => 'شماره موبایل بیشتر از 12 عدد مجاز نیست',
            'password.required' => 'وراد کردن رمز عبور الزامی است',
            'password.string' => 'لطفا رمز عبور مناسبی وارد کنید',
        ];
    }
}
