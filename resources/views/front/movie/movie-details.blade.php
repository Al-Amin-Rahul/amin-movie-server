@extends('front.master')

@section('title')
    Movie Details
@endsection

@section('body')
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="shadow rounded image">
                    <img src="{{ asset($movie->image) }}" class="img-fluid w-100" alt="">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="shadow rounded bg-dark p-5 text-white">
                    <div class=" h2 font-weight-bold ">
                        {{ $movie->movie_name }}
                    </div>
                    <div class="upload">
                        <small>Upload - {{ $movie->created_at }}</small>
                    </div>
                </div>
                <div class="download pt-3">
                    <a href="{{ asset($movie->video) }}" class="btn btn-primary" download>Download</a>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-12">
                <video controls poster="{{ asset($movie->image) }}" class="w-100 h-50 border border-danger" src="{{ asset($movie->video) }}"></video>
            </div>
        </div>
    </div>
</section>
@endsection