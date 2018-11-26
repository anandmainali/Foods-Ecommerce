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
 protected $location = "/Images/Customers/";

    public function getPhotoAttribute($photo){       
    	return $this->location.$photo;
    }

}
