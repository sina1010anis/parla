<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $attributes = [
        'address_id' => 0,
        'status' => 1,
        'email' => Null,
        'verify_mobile' => 0
    ];
    public function comment(){
        return $this->hasMany(comment::class , 'user_id' , 'id');
    }
    public function card(){
        return $this->hasMany(card::class , 'user_id' , 'id');
    }
    public function save_product(){
        return $this->hasMany(save_product::class , 'user_id' , 'id');
    }
    public function reply_comment(){
        return $this->hasMany(reply_comment::class , 'user_id' , 'id');
    }
    public function supoort(){
        return $this->hasMany(support::class , 'sender' , 'id');
    }
    public function custom()
    {
        return $this->hasMany(custom::class , 'user_id' , 'id');
    }
    public function address()
    {
        return $this->belongsTo(address::class , 'address_id' , 'id');
    }
}
