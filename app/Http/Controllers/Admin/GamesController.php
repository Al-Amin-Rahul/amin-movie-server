<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Games;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['games']  =   Games::all();
        return view('admin.games.manage-games', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.games.add-games");
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
            "name"      => "required|unique:games,name",
            "image"      => "required",
            "games"      => "required|unique:games,games",
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

            $games = new Games();
            $games->name  = $request->name;
            $games->image  = $imageURL;
            $games->games  = 'games/'.$request->games;
            $games->save();
    
            return redirect()->back()->with('message', 'Games Added');

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
        $games = Games::find($id);
        File::delete($games->image);
        // File::delete($games->games);
        $games->delete($id);
        return redirect()->back()->with('message', 'Games Deleted Successfully !');
    }
}
