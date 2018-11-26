<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use Cocur\Slugify\Slugify;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::all();
        return view('admin.subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::pluck('name','id');
        return view('admin.subcategory.addSubCategory',compact('category'));
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
            'name' => 'required'
        ]);
        $data = [
            'category_id' => $request->category_id,
            'name' => $request->name
        ];
        $slugify = new Slugify();
        $data['slug'] = $slugify->slugify($request->name);
        Subcategory::create($data);
        return redirect()->route('subcategory.index')->with('success','Subcategory Sucessfully Added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::pluck('name','id');
        $subcategory = Subcategory::findOrFail($id);
        return view('admin.subcategory.editSubCategory',compact('subcategory','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subcategory = Subcategory::findOrFail($id);
         $this->validate($request,[
            'category_id' => 'required',
            'name' => 'required'
        ]);
         $data = [
            'category_id' => $request->category_id,
            'name' => $request->name
        ];
        $slugify = new Slugify();
        $data['slug'] = $slugify->slugify($request->name);
        $subcategory->update($data);
        return redirect()->route('subcategory.index')->with('success','Subcategory Sucessfully Added.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Subcategory::findOrFail($id);
        $item->delete($item);
        return redirect()->back()->with('success','Sucessfully Deleted.');
    }
}
