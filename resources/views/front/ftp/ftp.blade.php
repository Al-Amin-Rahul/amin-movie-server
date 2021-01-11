@extends('front.master')

@section('title')
    More FTP
@endsection

@section('body')
<section class="pt-5 pb-5">
    <div class="container">
    <div class="alert bg-dark text-white font-weight-bold">More FTP</div>
        <div class="row">
            @foreach($ftps as $ftp)
            <div class="col-lg-2">
                <div class="item shadow rounded bg-white p-3">
                    <a href="{{ $ftp->link }}" target="_blank" class="text-decoration-none">{{ $ftp->name }}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection