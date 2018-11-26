<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id','phone','address','note','total','shipping_status'];

   protected $location = '/Images/Products/';

    public function getImageAttribute($image){
    	return $this->location.$image;
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
   
   public function orderProduct(){
   		return $this->hasMany('App\OrderProduct');
   }
}
