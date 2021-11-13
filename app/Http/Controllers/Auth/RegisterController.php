<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'g-recaptcha-response' => 'recaptcha',
            'name' => ['required', 'string', 'max:20'],
            'email' => [ 'max:255'],
            'mobile' => ['required', 'min:10','max:12' , 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],$this->message());
    }
    public function message(){
        return [
            'name.required' => 'وارد کردن نام الزامی می باشد',
            'mobile.required' => 'وارد کردن شماره موبایل الزامی می باشد',
            'password.required' => 'وارد کردن رمز عبور الزامی می باشد',
            'name.string' => 'لطفا یک نام مناسب انتخاب کنید',
            'name.max' => 'نام کاربری بیشتر از 20 کلمه امکان پذیر نیست',
            'email.email' => 'فرمت ایمیل نادرست است',
            'email.max' => 'ایمیل بیشتر از 255 کلمه امکان پذیر نیست',
            'email.unique' => 'این ایمیل عضو است',
            'mobile.int' => 'لطفا شماره موبایل مناسبی وارد کنید',
            'mobile.min' => 'شماره موبایل کمتر از 10 عدد مجاز نیست',
            'mobile.max' => 'شماره موبایل بیشتر از 12 عدد مجاز نیست',
            'mobile.unique' => 'این شماره موبایل عضو می باشد',
            'password.string' => 'لطفا یک پسورد مناسب انتخاب کنید',
            'password.min' => 'رمز عبور کمتر از 8 کلمه مجاز نیست',
            'password.confirmed' => 'رمز عبور مطابقت ندارد',
        ];
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function showRegistrationForm()
    {
        return view('user.form.register');
    }
}
