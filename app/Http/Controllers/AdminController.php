<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use App\User;
use App\infos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{

    //
    public function index()
    {
        $orders = Order::all();
        $products = Product::all();
        $users = User::all();
        $categories = Category::all();
        return view('admin.home', compact('products', 'users', 'orders', 'categories'));
    }

    public function getInfo()
    {
        $info = infos::first();
        return view('admin.info', compact('info'));
    }

    public function updateInfo(Request $request)
    {
        $infos = infos::first();
        $data = $request->all();

        if (empty($infos)) {
            if ($request->hasfile('logo')) {
                $file = $request->logo;
                $name = time() . $file->getClientOriginalName();
                $file->move('Images/logo', $name);
                $data['logo'] = $name;
            }
            infos::create($data);
        } else {
            if ($request->hasfile('logo')) {
                $file = $request->logo;
                $name = time() . $file->getClientOriginalName();
                $file->move('Images/logo', $name);
                file::delete(public_path() . $infos->logo);
                $data['logo'] = $name;
            }
            $infos->update($data);
        }
        Toastr::success('Info Successfully Updated :)', 'Success');
        return redirect()->back();
    }


    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $this->validate($request, [
            'uname' => 'required|min:3|max:25',
            'email' => [
                'required', 'email',
                Rule::unique('users')->ignore($id),
            ],
            'image' => 'mimes:jpeg,png,gif,bmp,tiff',
        ]);
        $data = [
            'uname' => $request->uname,
            'email' => $request->email,

        ];

        if ($request->hasfile('image')) {
            $file = $request->image;
            $name = time() . $file->getClientOriginalName();
            //For Deleting file form pubic path
            //file::delete(public_path('assets/imgae/'.$user->image));
            //For uploading file in public path
            //$file->move(public_path('assets/imgae'),$name);
            //unlink(public_path().$user->image);
            $file->move('UserImage', $name);
            if ($user->image) {
                unlink(public_path() . $user->image);
            }
            $data['image'] = $name;
        }
        $user->update($data);
        Toastr::success('User Successfully Updated :)', 'Success');
        return redirect()->back();
    }

    public function updatePassword(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $this->validate($request, [
            'oldPassword' => 'required',
            'newPassword' => 'required|min:3|max:25',
            'confirmPassword' => 'required|min:3|max:25|same:newPassword',
        ]);
        $data = [
            'password' => bcrypt($request->newPassword),
        ];
        if (!Hash::check($request->oldPassword, $user->password)) {
            Toastr::error('The specified password does not match the database password', 'Error');
            return back();
        } else {
            $user->update($data);
            Toastr::success('Password Successfully Updated :)', 'Success');
            return redirect()->back();
        }
    }
}
