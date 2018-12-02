<?php

namespace App\Http\Controllers\frontend;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('project.pages.index',compact('products'));
    }

    public function about(){
        return view('project.pages.aboutus');
    }

    public function shop(){
        $products = Product::paginate(9);
        if(request()->category){
            $category = Category::where('slug','=',request()->category)->get();
            $products = Product::where('category_id','=',$category[0]->id)->paginate(9);
        }
        return view('project.pages.shop',compact('products'));
    }

    public function shop_detail($id){
        $product = Product::findOrFail($id);
        return view('project.pages.shop-detail',compact('product'));
    }

    public function shopping_cart(){
        return view('project.pages.shopping-cart');
    }

    public function checkout(){
        return view('project.pages.checkout');
    }

    public function confirmation(){
        
        return view('project.pages.confirmation');
    }

    public function signin(){
        return view('project.pages.signin');
    }
    public function signup(){
        return view('project.pages.signup');
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required',
        ]);
        $query = $request->input('query');
        $products = Product::search($query)->paginate(12);
        $total = count(Product::search($query)->get());
        return view('project.pages.search',compact('products'));
    }

    /*public function search($query){
        $products = Product::search($query)->get();        
    }*/

    public function our_team(){
        return view('project.pages.our-team');
    }

    public function gallery(){
        return view('project.pages.gallery');
    }

    public function contact(){
        return view('project.pages.contact');
    }

}
