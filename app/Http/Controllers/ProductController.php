<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use App\Subcategory;
use Cocur\Slugify\Slugify;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$products = Product::all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::pluck('name','id');
        $subcategory = Subcategory::pluck('name','id');
        return view('admin.product.createProduct',compact('category','subcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'category_id' => 'required',
    		'subcategory_id' => '',
    		'name' => 'required',
    		'discount' => 'nullable|numeric',
    		'oldprice' => 'nullable|numeric',
    		'newprice' => 'required|numeric',
    		'unit' => 'nullable',
    		'featured' => '',
    		'image' => 'required|image',
    		'description' => 'required',
     	]);


    	$slugify = new Slugify();
    	$slug = $slugify->slugify($request->name);
    	if($request->featured == 1){
    		$featured = true;
    	}else{
    		$featured = false;
    	}
    	if($request->image){
        $file = $request->image;
        $image = time() . $file->getClientOriginalName();
        $file->move('Images/Products',$image);        
        
        }
        $data = [
        	'category_id' => $request->category_id,
        	'subcategory_id' => $request->subcategory_id,
        	'name' => $request->name,
        	'slug' => $slug,
        	'discount' => $request->discount,
        	'oldprice' => $request->oldprice,
        	'newprice' => $request->newprice,
        	'unit' => $request->unit,
        	'featured' => $featured,
        	'image' => $image,
        	'description' => $request->description
        ];
        Product::create($data);
        Toastr::success('Product Successfully Created :)','Success');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::pluck('name','id');
        $subcategory = Subcategory::pluck('name','id');
        $product = Product::findOrFail($id);
        return view('admin.product.editProduct',compact('product','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $this->validate($request,[
            'category_id' => 'required',
            'subcategory_id' => '',
            'name' => 'required',
            'discount' => 'nullable|numeric',
            'oldprice' => 'nullable|numeric',
            'newprice' => 'required|numeric',
            'unit' => 'nullable',
            'featured' => '',
            'image' => 'image',
            'description' => 'required',
        ]);


        $slugify = new Slugify();
        $slug = $slugify->slugify($request->name);
        if($request->featured == 1){
            $featured = true;
        }else{
            $featured = false;
        }
       
        if($request->hasfile('image')){
            $file = $request->image;
            $image = time() . $file->getClientOriginalName();
            $file->move('Images/Products',$image);
            unlink(public_path().$product->image); 
            $data['image'] = $image;
            $product->update($data);           
        }    
        $data = [
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'name' => $request->name,
            'slug' => $slug,
            'discount' => $request->discount,
            'oldprice' => $request->oldprice,
            'newprice' => $request->newprice,
            'unit' => $request->unit,
            'featured' => $featured,            
            'description' => $request->description
        ];
        $product->update($data);
        Toastr::success('Product Successfully Updated :)','Success');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);        
        $product->delete($product);
        unlink(public_path().$product->image);
        Toastr::success('Product Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
