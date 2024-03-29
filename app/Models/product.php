<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $attributes = ['view' => 0];
    public function product_order(){
        return $this->hasMany(product_order::class , 'product_id' , 'id');
    }
    public function property(){
        return $this->hasMany(properties::class , 'product_id' , 'id');
    }
    public function image_product(){
        return $this->hasMany(image_product::class , 'product_id' , 'id');
    }
    public function size(){
        return $this->hasMany(size_product::class , 'product_id' , 'id');
    }
    public function color(){
        return $this->hasMany(color_product::class , 'product_id' , 'id');
    }
    public function sub_menu(){
        return $this->belongsTo(sub_menu::class , 'menu_id' ,'id');
    }
    public function comments(){
        return $this->hasMany(comment::class , 'product_id' , 'id');
    }
    public function save_product(){
        return $this->hasMany(save_product::class , 'product_id' , 'id');
    }
    public function getRouteKeyName(){
        return 'slug';
    }
}
