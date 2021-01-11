<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul class="nav d-block">
    <li class="nav-link"><a href="/" class="">Home</a></li>
      <li class="nav-link movie-main-menu"><a href="#" class="">Movie</a>
        <ul class="nav movie-sub-menu font-weight-bold bg-white">
          @foreach($categories as $category)
          <li class="nav-link"><a href="{{ route("movie-category", ['slug' => $category->slug]) }}"  class=" text-decoration-none">{{ $category->name }}</a></li>
          @endforeach
        </ul>
      </li>
      <li class="nav-link"><a href="" class="">Natok</a></li>
      <li class="nav-link"><a href="{{ route("software") }}" class="">Software</a></li>
      <li class="nav-link tv-main-menu"><a href="#" class="">Live TV</a>
        <ul class="nav tv-sub-menu font-weight-bold bg-white">
        @php($i=1)
        @foreach($tvs as $tv)
          <li class="nav-link"><a href="{{ $tv->link }}" target="_blank"  class=" text-decoration-none">Live Tv{{ $i++ }}</a></li>
          @endforeach
        </ul>
      </li>
      <li class="nav-link"><a href="{{ route("game") }}" class="">Games</a></li>
      <li class="nav-link"><a href="" class="">Others</a></li>
    </ul>
</div>