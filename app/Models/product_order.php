<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_order extends Model
{
    use HasFactory;
    public function factor(){
        return $this->belongsTo(factor::class , 'factor_id' , 'id');
    }
    public function product(){
        return $this->belongsTo(product::class , 'product_id' , 'id');
    }
}
