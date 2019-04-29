<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uname', 'email', 'password','utype','image','status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $location = 'http://localhost/Foods-Ecommerce/public/UserImage/';

    public function getImageAttribute($image){
        if($image){
        return $this->location.$image;
    }
    }

    public function wishlist(){
        return $this->hasMany(Wishlist::class('id','user_id'));
    }
}
