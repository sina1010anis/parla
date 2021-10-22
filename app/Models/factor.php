<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class factor extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
    public function product_order(){
        return $this->hasMany(product_order::class , 'factor_id' , 'id');
    }
}
