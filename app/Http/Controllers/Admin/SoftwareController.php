<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Software;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class SoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['softwares']  =   Software::all();
        return view('admin.software.manage-software', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.software.add-software");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name"      => "required|unique:software,name",
            "image"      => "required",
            "software"      => "required|unique:software,software",
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile("image"))
        {
            $image      = $request->file("image");
            $directory  = "images/";
            $name       = "IMG_" . date("Ymd_his") . "." . $image->getClientOriginalExtension();
            $image->move($directory, $name);
            $imageURL   = $directory.$name;

            $software = new Software();
            $software->name  = $request->name;
            $software->image  = $imageURL;
            $software->software  = 'softwares/'.$request->software;
            $software->save();
    
            return redirect()->back()->with('message', 'Software Added');

        }
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
        $software = Software::find($id);
        File::delete($software->image);
        // File::delete($software->software);
        $software->delete($id);
        return redirect()->back()->with('message', 'Software Deleted Successfully !');
    }
}
