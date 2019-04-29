<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $location = 'http://localhost/Foods-Ecommerce/public/Images/Products/';

    public function getImageAttribute($image)
    {
    	return $this->location.$image;
    }
}
