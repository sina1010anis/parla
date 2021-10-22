<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\address;
use App\Models\city;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('front.index');
    }
}
