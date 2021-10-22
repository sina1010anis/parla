<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider_menu extends Model
{
    use HasFactory;

    public function menu(){
        return $this->belongsTo(menu::class , 'menu_id' , 'id');
    }
}
