@extends('admin.master')
@section('body')
    <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Add Movie</li>
            </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="row col-md-6 offset-md-2">
                    <h2></h2>
                </div>
                @include('message.message')
                <form action="{{ route("admin.movie.store")}}" method="post" class="shadow p-5 rounded" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="movie" class="col-sm-4 col-form-label">Movie Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="movie_name" class="form-control" id="movie">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="movie_year" class="col-sm-4 col-form-label">Movie Year</label>
                        <div class="col-sm-8">
                            <input type="text" name="movie_year" class="form-control" id="movie_year">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-4 col-form-label">Movie Category</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="sel1" name="category">
                                    <option>Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-4 col-form-label">Image</label>
                        <div class="col-sm-8">
                            <input type="file" name="image" class="form-control" id="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="video" class="col-sm-4 col-form-label">Video</label>
                        <div class="col-sm-8">
                            <input type="text" name="video" class="form-control" id="video">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-4" for="">New Movie</label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input type="radio" name="new_movie" value="1" checked>Yes
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="new_movie" value="0">No
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-4" for="">Action Movie</label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input type="radio" name="action_movie" value="1">Yes
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="action_movie" value="0" checked>No
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-4" for="">Horror Movie</label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input type="radio" name="horror_movie" value="1">Yes
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="horror_movie" value="0" checked>No
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-4" for="">Animation Movie</label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input type="radio" name="animation_movie" value="1">Yes
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="animation_movie" value="0" checked>No
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-4" for="">Thriller Movie</label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input type="radio" name="thriller_movie" value="1">Yes
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="thriller_movie" value="0" checked>No
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-4" for="">Comedy Movie</label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input type="radio" name="comedy_movie" value="1">Yes
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="comedy_movie" value="0" checked>No
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-4" for="">Romance Movie</label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input type="radio" name="romance_movie" value="1">Yes
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="romance_movie" value="0" checked>No
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-4" for="">Sci-Fi Movie</label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input type="radio" name="scifi_movie" value="1">Yes
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="scifi_movie" value="0" checked>No
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 offset-md-8 text-right">
                            <input type="submit" name="addMovie" value="Add Movie" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
