<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item_footer extends Model
{
    use HasFactory;
    protected $guarded =[];
    public $timestamps = false;

    public function title_footer(){
        return $this->belongsTo(title_footer::class , 'title_footer_id' , 'id');
    }
}
