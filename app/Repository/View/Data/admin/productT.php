<?php
 namespace App\Repository\View\Data\admin;

 use App\Models\custom;
 use Illuminate\View\View;

 class productT{
     public function compose(View $view)
     {
         return $view->with('prodcutT_all' ,custom::orderBy('id' , 'DESC')->get() );
     }
 }
