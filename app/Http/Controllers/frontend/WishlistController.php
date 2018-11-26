<?php
namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Wishlist;
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
    	return redirect()->back();
    }

    public function destroy($id)
    {
    	$item = Wishlist::findOrFail($id);
    	$item->delete($item);
    	return redirect()->back();

    }
}
