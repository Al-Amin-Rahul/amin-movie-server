<section class="bg-yellow py-3 sticky-top d-sm-block d-none">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <a href="/" class="text-dark text-decoration-none"><img src="{{ asset("/") }}front/images/logo.png" alt=""></a>
      </div>
      <div class="col-lg-9">
        <div class="menu">
          <ul class="nav justify-content-between font-weight-bold">
              <li class="nav-link"><a href="/" class="text-dark"><i class="fas fa-home"></i></a></li>
              <li class="nav-link movie-main-menu"><a href="" class="text-dark">Movie</a>
                <ul class="nav position-absolute movie-sub-menu font-weight-bold bg-white">
                  @foreach($categories as $category)
                  <li class="nav-link"><a href="{{ route("movie-category", ['slug' => $category->slug]) }}"  class="text-dark text-decoration-none">{{ $category->name }}</a></li>
                  @endforeach
                </ul>
              </li>
              <li class="nav-link"><a href="" class="text-dark">Series</a></li>
              <li class="nav-link"><a href="{{ route("software") }}" class="text-dark">Software</a></li>
              <li class="nav-link tv-main-menu"><a href="#" class="text-dark">Live TV</a>
                <ul class="nav position-absolute tv-sub-menu font-weight-bold bg-white">
                  @php($i=1)
                  @foreach($tvs as $tv)
                  <li class="nav-link"><a href="{{ $tv->link }}" target="_blank"  class="text-dark text-decoration-none">Live Tv{{ $i++ }}</a></li>
                  @endforeach
                </ul>
              </li>
              <li class="nav-link"><a href="{{ route("game") }}" class="text-dark">Games</a></li>
              <li class="nav-link"><a href="{{ route("more-ftp") }}" class="text-dark">More FTP</a></li>
              <li class="nav-link pr-0">
                <livewire:search-movie/>
              </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-yellow sticky-top py-2 d-sm-none d-block">
  <div class="container">
    <div class="row">
      <div class="col-6"><img src="{{ asset("/") }}front/images/logo.png" alt=""></div>
      <div class="col-6">
      <ul class="nav justify-content-end pt-1">
          <li class="nav-link btn bg-dark" onclick="openNav()" id="sideMenuBtn"><a class="text-white"><i class="fas fa-bars"></i></a></li>
      </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 py-2">
      <livewire:search-movie/>
      </div>
    </div>
  </div>
</section>