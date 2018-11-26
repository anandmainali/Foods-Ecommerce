<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $location = '/Images/Products/';

    public function getImageAttribute($image)
    {
    	return $this->location.$image;
    }
}
