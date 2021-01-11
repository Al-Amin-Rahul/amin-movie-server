<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Movie;

class SearchMovie extends Component
{
    public $search = '';

    public function render()
    {
        $searchResults  =   [];

        if(strlen($this->search) >= 2)
        {
            $searchResults  =   Movie::select("movie_name", "slug", "image")->where("movie_name", "Like", "%".$this->search."%")->get();
        }
        return view('livewire.search-movie', [
            'searchResults' => collect($searchResults)->take(7)
        ]);
    }
}
