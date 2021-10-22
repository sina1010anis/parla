<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function sub_menu(){
        return $this->hasMany(sub_menu::class , 'menu_id' , 'id');
    }
    public function slider_menu(){
        return $this->hasMany(slider_menu::class , 'menu_id' , 'id');
    }
}
