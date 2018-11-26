<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
    protected $path = '/Images/Slider/';
    protected $fillable = [
    	'image',
    ];

    public function getImageAttribute($image){
    	return $this->path.$image;
    }
}
