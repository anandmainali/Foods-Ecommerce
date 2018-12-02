<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = ['category_id','name','slug'];

    public function product(){
    	return $this->hasMany('App\Product');
    }

    public function category(){
    	return $this->belongsTo('App\Category');
    }
}
