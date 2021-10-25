<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function product_order(){
        return $this->hasMany(product_order::class , 'product_id' , 'id');
    }
    public function property(){
        return $this->hasMany(properties::class , 'product_id' , 'id');
    }
    public function image_product(){
        return $this->hasMany(image_product::class , 'product_id' , 'id');
    }
}
