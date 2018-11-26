<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
   protected $fillable = [
   		'order_id','product_id','quantity'
   ];
   

   public function product(){
   		return $this->belongsTo('App\Product');
   }

   public function order(){
   	return $this->belongsTo('App\Order');
   }
}
