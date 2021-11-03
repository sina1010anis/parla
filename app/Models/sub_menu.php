<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_menu extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function menu(){
        return $this->belongsTo(menu::class , 'menu_id' , 'id');
    }
    public function products(){
        return $this->hasMany(product::class , 'menu_id' , 'id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
