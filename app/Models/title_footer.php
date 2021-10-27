<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class title_footer extends Model
{
    use HasFactory;
    protected $guarded =[];
    public $timestamps = false;
    public function item_footer(){
        return $this->hasMany(item_footer::class , 'title_footer_id' , 'id');
    }
}
