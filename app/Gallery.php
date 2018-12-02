<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $fillable = ['title','image'];
    protected $location = '/Images/Gallery/';
    public function getImageAttribute($image){
    	return $this->location.$image;
    }
}
