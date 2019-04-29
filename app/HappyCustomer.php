<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HappyCustomer extends Model
{
    protected $fillable = [
    	'name',
    	'post',
    	'photo',
    	'about',
    ];
 protected $location = "http://localhost/Foods-Ecommerce/public/Images/Customers/";

    public function getPhotoAttribute($photo){       
    	return $this->location.$photo;
    }

}
