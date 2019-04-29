<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class infos extends Model
{
    //
    protected $fillable = ['name','address','phone','email','logo','about'];

    protected $location = 'http://localhost/Foods-Ecommerce/public/Images/logo/';

    public function getLogoAttribute($image){
    	return $this->location.$image;
    }
}
