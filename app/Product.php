<?php

namespace App;

use App\OrderProduct;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
class Product extends Model
{
    use SearchableTrait;

    protected $fillable = ['category_id','subcategory_id','name','slug','discount','oldprice','newprice','unit','featured','image','description'];

    protected $searchable = [

        'columns' => [
            'products.name' => 10,
            'products.description' => 5,
            
        ],
        /*'joins' => [
            'posts' => ['users.id','posts.user_id'],
        ],*/
    ];

    protected $location = 'http://localhost/Foods-Ecommerce/public/Images/Products/';

    public function getImageAttribute($image){
        return $this->location.$image;
    }

    public function wishlist(){
    	return $this->hasMany(Wishlist::class('id','product_id'));
    }

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function subcategory(){
    	return $this->belongsTo('App\Subcategory');
    }

}
