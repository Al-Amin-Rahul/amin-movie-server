@extends('front.master')

@section('title')
    Movie Category
@endsection

@section('body')
<section class="pt-5 pb-5">
    <div class="container">
        @foreach($movies as $movieCat)
        <div class="alert bg-dark text-white font-weight-bold">{{ $movieCat->name }}</div>
        <div class="row">
            @foreach($movieCat->movies as $movie)
            <div class="col-lg-2">
                <div class="item shadow rounded bg-white">
                    <a href="{{ route("watch-movie", ['slug'  => $movie->slug]) }}" class="text-decoration-none">
                        <div class="image img-hover-zoom ">
                            <img src="{{ asset($movie->image) }}" alt="" class="img-fluid">
                        </div>
                        <div class="title text-center text-dark font-weight-bold">
                            {{ $movie->movie_name }}
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</section>
@endsection