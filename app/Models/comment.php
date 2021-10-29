<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user(){
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
    public function reply_commet(){
        return $this->hasMany(reply_comment::class , 'comment_id' , 'id');
    }
    public function product(){
        return $this->belongsTo(product::class , 'product_id' , 'id');
    }
}
