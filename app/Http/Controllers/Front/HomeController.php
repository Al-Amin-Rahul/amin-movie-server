<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Software;
use App\Models\Games;
use App\Models\Category;
use App\Models\Ftp;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['new_movies'] =   Movie::select(['movie_name', 'image', 'slug'])->where('new_movie', 1)->orderBy('id', 'desc')->take(10)->get();
        $data['action_movies'] =   Movie::select(['movie_name', 'image', 'slug'])->where('action_movie', 1)->orderBy('id', 'desc')->take(10)->get();
        $data['romance_movies'] =   Movie::select(['movie_name', 'image', 'slug'])->where('romance_movie', 1)->orderBy('id', 'desc')->take(10)->get();
        $data['animation_movies'] =   Movie::select(['movie_name', 'image', 'slug'])->where('animation_movie', 1)->orderBy('id', 'desc')->take(10)->get();
        $data['thriller_movies'] =   Movie::select(['movie_name', 'image', 'slug'])->where('thriller_movie', 1)->orderBy('id', 'desc')->take(10)->get();
        $data['horror_movies'] =   Movie::select(['movie_name', 'image', 'slug'])->where('horror_movie', 1)->orderBy('id', 'desc')->take(10)->get();
        $data['scifi_movies'] =   Movie::select(['movie_name', 'image', 'slug'])->where('scifi_movie', 1)->orderBy('id', 'desc')->take(10)->get();
        $data['comedy_movies'] =   Movie::select(['movie_name', 'image', 'slug'])->where('comedy_movie', 1)->orderBy('id', 'desc')->take(10)->get();
        $data['sliders']    =   Slider::orderBy('id', 'desc')->get();
        return view('front.home.home', $data);
    }
    public function movieCategory($slug)
    {
        $data['movies']   =   Category::with('movies')->where('slug', $slug)->orderBy('id', 'desc')->get();
        return view('front.movie.movie-category', $data);
    }
    public function movieDetails($slug)
    {
        $data['movie']   =   Movie::where('slug', $slug)->first();
        return view('front.movie.movie-details', $data);
    }
    public function software()
    {
        $data['softwares']  =   Software::paginate(30);
        return view('front.software.software', $data);
    }
    public function games()
    {
        $data['games']  =   Games::paginate(30);
        return view('front.game.game', $data);
    }
    public function newMovies()
    {
        $data['movies'] =   Movie::select(['movie_name', 'image', 'slug'])->where('new_movie', 1)->orderBy('id', 'desc')->paginate(30);        
        return view('front.movie.new-movie', $data);
    }
    public function actionMovies()
    {
        $data['movies'] =   Movie::select(['movie_name', 'image', 'slug'])->where('action_movie', 1)->orderBy('id', 'desc')->paginate(30);        
        return view('front.movie.action-movie', $data);
    }
    public function romanticMovies()
    {
        $data['movies'] =   Movie::select(['movie_name', 'image', 'slug'])->where('romance_movie', 1)->orderBy('id', 'desc')->paginate(30);        
        return view('front.movie.romance-movie', $data);
    }
    public function thrillerMovies()
    {
        $data['movies'] =   Movie::select(['movie_name', 'image', 'slug'])->where('thriller_movie', 1)->orderBy('id', 'desc')->paginate(30);        
        return view('front.movie.thriller-movie', $data);
    }
    public function horrorMovies()
    {
        $data['movies'] =   Movie::select(['movie_name', 'image', 'slug'])->where('horror_movie', 1)->orderBy('id', 'desc')->paginate(30);        
        return view('front.movie.horror-movie', $data);
    }
    public function scifiMovies()
    {
        $data['movies'] =   Movie::select(['movie_name', 'image', 'slug'])->where('scifi_movie', 1)->orderBy('id', 'desc')->paginate(30);        
        return view('front.movie.scifi-movie', $data);
    }
    public function comedyMovies()
    {
        $data['movies'] =   Movie::select(['movie_name', 'image', 'slug'])->where('comedy_movie', 1)->orderBy('id', 'desc')->paginate(30);        
        return view('front.movie.comedy-movie', $data);
    }
    public function moreFtp()
    {
        $data['ftps'] =   Ftp::all();
        return view('front.ftp.ftp', $data);
    }
}
