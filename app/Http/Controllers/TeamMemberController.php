<?php

namespace App\Http\Controllers;

use App\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $members = TeamMember::all();
         return view('admin.Member.index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.Member.createMember');
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
        //return $request->photo->getClientOriginalName();
        $this->validate($request,[
            'name' => 'required',
            'post' => 'required',
            'photo' => 'required|mimes:gif,png,jpeg,tiff,bmp',
            'about' => 'required',

        ]);
        $data = [
            'name' => $request->name,
            'post' => $request->post,
            'about' => $request->about,
        ];
        $file = $request->photo;
        $name = time() . $file->getClientOriginalName();
        $file->move('Images/Members',$name);        
        $data['photo'] = $name;
        TeamMember::create($data);        
        return redirect()->route('member.index')->with('success','Member successfully added.');

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
        $member = TeamMember::findOrFail($id);
        return view('admin.Member.editMember',compact('member'));
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
        $member = TeamMember::findOrFail($id); 
         $this->validate($request,[
            'name' => 'required',
            'post' => 'required',
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
        $file->move('Images/Members',$name);
        file::delete(public_path().$member->photo);        
        $data['photo'] = $name;
        }       
        $member->update($data);        
        return redirect()->route('member.index')->with('success','Member successfully updated.');
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
        $member = TeamMember::findOrFail($id);
        $member->delete($member);
        file::delete(public_path().$member->photo);
        return redirect()->back()->with('success','Member successfully deleted.');
    }
}
