<?php
namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Wishlist;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
	public function index(){
		$wishlists = Wishlist::where('user_id','=',auth()->user()->id)->get();
        /*
        $wishlist = Product::where('id',$wishlists->id);*/
		return view('project.pages.wishlist',compact('wishlists'));
	}

    public function store(Request $request){
    	$datas = [
    		'user_id' => $request->user_id,
    		'product_id' => $request->product_id
    	];
    	
    	Wishlist::create($datas);
        Toastr::success('Added to Wishlist. :)','Success');
    	return redirect()->back();
    }

    public function destroy($id)
    {
    	$item = Wishlist::findOrFail($id);
    	$item->delete($item);
        Toastr::success('Removed from Wishlist. :)','Success');
    	return redirect()->back();

    }
}
