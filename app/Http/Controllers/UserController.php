<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::where('id','<>',Auth()->id())->get();
        //$users = User::paginate(4);
        return view('admin.Users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.Users.createUser');
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
        $this->validate($request, [
           'uname' => 'required|min:3|max:25',
           'email' => 'required|email|unique:users',
            'utype' => 'required',
            'status' => 'required',
            'image' => 'required|mimes:jpeg,png,gif,bmp,tiff',
            'password' => 'required|min:3|max:25',
            'cpass' => 'required|min:3|max:25|same:password',

        ]);
        $data = [
            'uname' => $request->uname,
            'email' => $request->email,
            'role' => $request->role,
            'utype' => $request->utype,
            'password' => bcrypt($request->password),
        ];
        if(!empty($file = $request->file('image'))){
            $name = time() . $file->getClientOriginalName();
            /*$img = Image::make($)
            $img->resize(300, 200);*/

            $file->move('UserImage',$name);
            $data['image'] = $name;
        }
        User::create($data);
        return redirect()->route('user.index')->with('success','User is successfully created.');
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
        $user = User::findOrFail($id);
        return view('admin.Users.editUser',compact('user'));
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
        $user = User::findOrFail($id);
        $this->validate($request, [
            'uname' => 'required|min:3|max:25',
            'email' => ['required','email',
                        Rule::unique('users')->ignore($id),],
            'utype' => 'required',
            'status' => 'required',
            'image' => 'mimes:jpeg,png,gif,bmp,tiff',
            'password' => 'nullable|min:3|max:25',
            'cpass' => 'same:password',

        ]);
        $data = [
            'uname' => $request->uname,
            'email' => $request->email,
            'status' => $request->status,
            'utype' => $request->utype,
            
        ];
        if($request->hasfile('image')){
            $file = $request->image;
            $name = time() . $file->getClientOriginalName();
            $file->move('UserImage',$name);
            file::delete(public_path().$user->image);
            $data['image'] = $name;
        }    
        if ($request->filled('password')) $data['password'] = bcrypt($request->input('password'));    
        $user->update($data);
        return redirect()->route('user.index')->with('success','User successfully updated.');
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
        $users = User::findOrFail($id);
        unlink(public_path().$users->image);
        $users->delete($users);
        return redirect()->back()->with('success','User successfully deleted.');
    }



}
