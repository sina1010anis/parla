<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class save_product extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function product(){
        return $this->belongsTo(product::class , 'product_id' , 'id');
    }
    public function user(){
        return $this->hasMany(User::class , 'user_id' , 'id');
    }
}
