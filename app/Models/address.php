<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function city(){
        return $this->belongsTo(city::class , 'city_id' , 'id');
    }
    public function state(){
        return $this->belongsTo(state::class , 'state_id' , 'id');
    }
    public function user(){
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
}
