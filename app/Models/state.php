<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function city(){
        return $this->hasMany(city::class , 'city_id' , 'id');
    }
}
