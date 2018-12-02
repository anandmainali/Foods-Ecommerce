<?php

namespace App\Http\Controllers;
use App\HappyCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;
class HappyCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = HappyCustomer::all();
         return view('admin.customer.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer.createCustomer');
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
            'name' => 'required',
            'post' => '',
            'photo' => 'mimes:gif,png,jpeg,tiff,bmp',
            'about' => 'required',

        ]);
        $data = [
            'name' => $request->name,
            'post' => $request->post,
            'about' => $request->about,
        ];
        if($request->photo){
        $file = $request->photo;
        $name = time() . $file->getClientOriginalName();
        $file->move('Images/Customers',$name);        
        $data['photo'] = $name;
        }
        HappyCustomer::create($data);        
        Toastr::success('Customer Successfully Created :)','Success');
        return redirect()->route('customer.index');
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
         $customer = HappyCustomer::findOrFail($id);
        return view('admin.customer.editCustomer',compact('customer'));
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
        $customer = HappyCustomer::findOrFail($id); 
         $this->validate($request,[
            'name' => 'required',
            'post' => '',
            'photo' => 'mimes:gif,png,jpeg,tiff,bmp',
            'about' => 'required',

        ]);
        $data = [
            'name' => $request->name,
            'post' => $request->post,
            'about' => $request->about,
        ];
        
        if($request->hasfile('photo')){
        $file = $request->photo;
        $name = time() . $file->getClientOriginalName();
        $file->move('Images/Customers',$name);
        file::delete(public_path().$customer->photo);        
        $data['photo'] = $name;
        }       
        $customer->update($data);        
        Toastr::success('Customer Successfully Updated :)','Success');
        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = HappyCustomer::findOrFail($id);        
        $customer->delete($customer);
        file::delete(public_path().$customer->photo);
        Toastr::success('Customer Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
