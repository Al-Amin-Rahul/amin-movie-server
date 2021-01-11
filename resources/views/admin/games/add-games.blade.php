@extends('admin.master')
@section('body')
    <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Add Games</li>
            </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="row col-md-6 offset-md-2">
                    <h2></h2>
                </div>
                @include('message.message')
                <form action="{{ route("admin.games.store")}}" method="post" class="shadow p-5 rounded" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Games Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-4 col-form-label">Games Image</label>
                        <div class="col-sm-8">
                            <input type="file" name="image" class="form-control" id="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Games" class="col-sm-4 col-form-label">Games Path</label>
                        <div class="col-sm-8">
                            <input type="text" name="games" class="form-control" id="Games">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 offset-md-8 text-right">
                            <input type="submit" name="addGames" value="Add Games" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
