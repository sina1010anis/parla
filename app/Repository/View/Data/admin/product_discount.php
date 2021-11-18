<?php
namespace App\Repository\View\Data\admin;

use App\Models\product;
use Illuminate\View\View;

class product_discount{

    public function compose(View $view)
    {
        return $view->with('product_discount' , product::where('discount' , '!=' , '0')->orderBy('id' , 'DESC')->get());
    }
}
