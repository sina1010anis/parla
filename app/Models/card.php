<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class card extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user(){
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
    public function product(){
        return $this->belongsTo(product::class , 'product_id' , 'id');
    }
    protected $attributes = ['status' => 0];

    public function color()
    {
        return $this->belongsTo(color::class , 'color_id' , 'id');
    }
}

