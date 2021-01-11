@extends('front.master')

@section('title')
    Software
@endsection

@section('body')
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="alert bg-dark text-white font-weight-bold">All Software</div>
            </div>
            <div class="col-lg-6">
                <form action="" method="post">
                    <input type="search" name="search" class="form-control border-radius-99" placeholder="Search Software" id="">
                </form>
            </div>
        </div>
        <div class="row">
            @foreach($softwares as $software)
            <div class="col-lg-2">
                <div class="shadow rounded border border-white p-1">
                    <div class="image">
                        <img src="{{ asset($software->image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="name bg-info text-center font-weight-bold">
                        {{ $software->name }}
                    </div>
                    <div class="download py-2">
                        <a href="{{ asset($software->software) }}" class="btn btn-primary d-block" download>Download</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="pt-3">
            {{ $softwares->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
</section>
@endsection