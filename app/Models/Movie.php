<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\Category;

class Movie extends Model
{
    use HasFactory;
    public function insertMovie($request){

        $movie = new Movie();
        if ($request->hasFile("image"))
        {
            $image      = $request->file("image");
            $directory  = "images/";
            $name       = "IMG_" . date("Ymd_his") . "." . $image->getClientOriginalExtension();
            $image->move($directory, $name);
            $imageURL   = $directory.$name;

            $movie->movie_name      = $request->movie_name;
            $movie->movie_year      = $request->movie_year;
            $movie->slug            = Str::slug($request->movie_name);
            $movie->category        = $request->category;
            $movie->image           = $imageURL;
            $movie->video           = 'videos/'.$request->video;
            $movie->new_movie       = $request->new_movie;
            $movie->action_movie    = $request->action_movie;
            $movie->horror_movie    = $request->horror_movie;
            $movie->animation_movie = $request->animation_movie;
            $movie->thriller_movie  = $request->thriller_movie;
            $movie->comedy_movie    = $request->comedy_movie;
            $movie->romance_movie   = $request->romance_movie;
            $movie->scifi_movie     = $request->scifi_movie;
            
            $movie->save();
            
            return;
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }
}
