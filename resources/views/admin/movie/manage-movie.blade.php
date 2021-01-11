@extends('admin.master')

@section('body')
<div class="container">
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Manage Movie</li>
</ol>
@include('message.message')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-lg-6">
                <h6 class="m-0 font-weight-bold text-primary">Manage Movie</h6>
            </div>
        </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="bg-primary text-white">
            <tr>
              <th>No</th>
              <th>Movie Name</th>
              <th>Movie Year</th>
              <th>Movie Category</th>
              <th>Video Path</th>
              <th>New Movie</th>
              <th>Action Movie</th>
              <th>Horror Movie</th>
              <th>Animation Movie</th>
              <th>Thriller Movie</th>
              <th>Comedy Movie</th>
              <th>Romance Movie</th>
              <th>Sci-Fi Movie</th>
              <th>Image</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Movie Name</th>
              <th>Movie Year</th>
              <th>Movie Category</th>
              <th>Video Path</th>
              <th>New Movie</th>
              <th>Action Movie</th>
              <th>Horror Movie</th>
              <th>Animation Movie</th>
              <th>Thriller Movie</th>
              <th>Comedy Movie</th>
              <th>Romance Movie</th>
              <th>Sci-Fi Movie</th>
              <th>Image</th>
            </tr>
          </tfoot>
          <tbody>
          @php($i = 1)
          @foreach($movies as $movie)
            <tr>
              <td>{{ $i++ }}</td>
              <td>{{ $movie->movie_name }}</td>
              <td>{{ $movie->movie_year }}</td>
              <td>{{ $movie->category }}</td>
              <td>{{ $movie->video }}</td>
              <td>{{ $movie->new_movie }}</td>
              <td>{{ $movie->action_movie }}</td>
              <td>{{ $movie->horror_movie }}</td>
              <td>{{ $movie->animation_movie }}</td>
              <td>{{ $movie->thriller_movie }}</td>
              <td>{{ $movie->comedy_movie }}</td>
              <td>{{ $movie->romance_movie }}</td>
              <td>{{ $movie->scifi_movie }}</td>
              <td>
                  <form action="{{route("admin.movie.destroy",['movie' => $movie->id])}}" method="post">
                      @csrf
                      @method("DELETE")
                      <button class="btn-circle btn-danger" type="submit" onclick="return confirm('Are your sure')"><span class="fa fa-trash"></span></button>
                  </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection