<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function address(){
        return $this->hasMany(address::class , 'city_id' , 'id');
    }
    public function state(){
        return $this->hasMany(state::class , 'city_id' , 'id');
    }
}
