<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $fillable = ['title','image'];
    protected $location = 'http://localhost/Foods-Ecommerce/public/Images/Gallery/';
    public function getImageAttribute($image){
    	return $this->location.$image;
    }
}
