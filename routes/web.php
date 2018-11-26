<?php


/*
Route::get('/', 'HomeController@index')->name('home');*/

Auth::routes();
Route::get('/logout',function(){
    Auth::logout();
    return redirect()->route('index');
});
Route::group(['middleware'=>'admin'], function() {
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::get('/admin/info', 'AdminController@getInfo')->name('admin.info');
    Route::patch('/admin/info', 'AdminController@updateInfo')->name('admin.info');
    //Happy Customer route
    Route::resource('/admin/customer', 'HappyCustomerController');
    Route::resource('/admin/slider', 'SliderController');
    Route::resource('/admin/member', 'TeamMemberController');
    Route::resource('/admin/comment', 'CommentController'); 
    Route::resource('/admin/category', 'CategoryController'); 
    Route::resource('/admin/subcategory', 'SubcategoryController'); 
    Route::resource('/admin/product', 'ProductController'); 
    Route::resource('/admin/user', 'UserController'); 
     Route::resource('/admin/order', 'AdminOrderController');

    //User Profile Setting   
    Route::get('/admin/profile',function(){        
        return view('admin.profile');
    })->name('profile');
    Route::get('/admin/setting',function(){        
        return view('admin.setting');
    })->name('setting');
     Route::patch('/admin/updateUser/{id}', 'AdminController@updateUser')->name('updateUser');
      Route::post('/admin/updatePassword/{id}', 'AdminController@updatePassword')->name('updatePassword');
});

//..................frontend.......................
Route::group(['namespace'=>'frontend'],function() {
    Route::get('/','frontController@index')->name('index');
    Route::get('/about-us','frontController@about')->name('about');
    Route::get('/shop','frontController@shop')->name('shop');
    Route::get('/shop-detail/{id}','frontController@shop_detail')->name('shop_detail');
    Route::get('/shopping-cart','frontController@shopping_cart')->name('shopping_cart');
    
    Route::get('/confirmation','frontController@confirmation')->name('confirmation')->middleware('auth');
    Route::get('/signin','frontController@signin')->name('signin');
    Route::get('/signup','frontController@signup')->name('signup');
    Route::get('/search','frontController@search')->name('search');
    Route::get('/our-team','frontController@our_team')->name('our-team');
    Route::get('/gallery','frontController@gallery')->name('gallery');
    Route::get('/contact','frontController@contact')->name('contact');
    //Cart
    Route::get('/cart','CartController@index')->name('cart.index');
    Route::get('/cart-update','CartController@update')->name('cart.update');
    Route::get('/cart/destroy','CartController@destroy')->name('cart.destroy');
    Route::post('/cart','CartController@store')->name('cart.store');
    Route::post('/cart/{id}','CartController@remove')->name('cart.remove');

    //Checkout
    Route::get('/checkout','CheckoutController@index')->name('checkout.index')->middleware('auth');

    //Order
    Route::get('/order','OrderController@index')->name('order.index')->middleware('auth');
    Route::post('/order','OrderController@store')->name('order.store')->middleware('auth');
    
    //Wishlist
    Route::get('/wishlist','WishlistController@index')->name('wishlist.index')->middleware('auth');
    Route::post('/wishlist','WishlistController@store')->name('wishlist.store')->middleware('auth');
    Route::get('/wishlist/destroy/{id}','WishlistController@destroy')->name('wishlist.destroy')->middleware('auth');
});
