<?php

namespace App\Http\Controllers;

use App\Slider;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sliders = Slider::all();
        return view('admin.Slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.Slider.createSlider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'image' => 'required|mimes:jpeg,png,gif,bmp,tiff',
        ]);       
        if(!empty($file = $request->file('image'))){
        $name = time() . $file->getClientOriginalName();
        $file->move('Images/Slider',$name);
         Slider::create(['image'=>$name]);  
         Toastr::success('Slider Successfully Created :)','Success');      
        }

        return redirect()->route('slider.index');      
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $slider = Slider::findOrFail($id);        
        $slider->delete($slider);
        unlink(public_path($slider->image));
        Toastr::success('Slider Successfully Deleted :)','Success');
        return redirect()->back();

    }
}
