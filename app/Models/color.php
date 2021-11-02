<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    use HasFactory;
    protected $guarded =[];
    public $timestamps = false;
    public function card()
    {
        return $this->hasMany(card::class , 'color_id' , 'id');
    }
}
