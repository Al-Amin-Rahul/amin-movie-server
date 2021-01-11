@extends('front.master')

@section('title')
    New Movies
@endsection

@section('body')
<section class="pt-5 pb-5">
    <div class="container">
    <div class="alert bg-dark text-white font-weight-bold">New Movies</div>
        <div class="row">
            @foreach($movies as $movie)
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
        <div class="pt-3">
            {{ $movies->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
</section>
@endsection