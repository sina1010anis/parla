<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_menu extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function menu(){
        return $this->belongsTo(menu::class , 'menu_id' , 'id');
    }
}
