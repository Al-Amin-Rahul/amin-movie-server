@extends('admin.master')
@section('body')
    <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Add Tv Link</li>
            </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="row col-md-6 offset-md-2">
                    <h2></h2>
                </div>
                @include('message.message')
                <form action="{{ route("admin.tv.store")}}" method="post" class="shadow p-5 rounded" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="link" class="col-sm-4 col-form-label">Tv Link</label>
                        <div class="col-sm-8">
                            <input type="text" name="link" class="form-control" id="link">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 offset-md-8 text-right">
                            <input type="submit" name="addLink" value="Add Tv Link" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
