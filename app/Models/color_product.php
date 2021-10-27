<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class color_product extends Model
{
    use HasFactory;
    protected $guarded =[];
    public $timestamps = false;

    public function product(){
        return $this->belongsTo(product::class , 'product_id' , 'id');
    }
    public function color(){
        return $this->belongsTo(color::class , 'color_id' , 'id');
    }
}
