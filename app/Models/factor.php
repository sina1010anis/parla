<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class factor extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user(){
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
    public function product_order(){
        return $this->hasMany(product_order::class , 'factor_id' , 'id');
    }
    protected $attributes = ['status_buy' => 0 , 'status_order' => 0 , 'transaction_code' => 0];
}
