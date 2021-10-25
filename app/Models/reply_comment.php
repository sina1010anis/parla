<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reply_comment extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function comment(){
        return $this->belongsTo(comment::class , 'comment_id' , 'id');
    }
}
