@extends('front.master')

@section('title')
Welcome To Bonarpara Movie Server
@endsection

@section('css')
<link href="{{ asset("/") }}front/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300&display=swap" rel="stylesheet">
@endsection

@section('body')
<section class="home-slider">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 px-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach($sliders as $slider)
                    <div class="carousel-item {{ $slider->active }}">
                        <img class="d-block w-100" src="{{ asset($slider->slider_image) }}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $slider->title }}</h5>
                            <p>{{ $slider->short_description }}</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="ticker position-absolute w-100 font-weight-bold text-danger bangla h2">
                        <marquee behavior="" direction="rtl">সম্মানিত গ্রাহক প্রতি মাসের ১০ তারিখের মধ্যে আপনাদের বকেয়া বিল পরিশোধ করুন ।</marquee>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="new-movies pt-5">
    <div class="container">
        <div class="alert bg-dark text-white font-weight-bold">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-8 font-weight-bold">New Movies</div>
                <div class="col-lg-6 col-md-6 col-4 text-right font-weight-bold"><a
                        href="{{ route("new-movies") }}" class="text-white text-decoration-none">More <i
                            class="fas fa-angle-right"></i></a></div>
            </div>
        </div>
        <div class="slider">
            <div class="owl-carousel">
                @foreach($new_movies as $movie)
                <div class="item shadow rounded bg-white">
                    <a href="{{ route("watch-movie", ['slug'  => $movie->slug]) }}" class="text-decoration-none">
                        <div class="image img-hover-zoom ">
                            <img src="{{ asset($movie->image) }}" alt="" class="img-fluid">
                        </div>
                        <div class="title text-center text-dark font-weight-bold">
                            {{$movie->movie_name  }}
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="new-movies pt-5">
    <div class="container">
        <div class="alert bg-dark text-white font-weight-bold">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-8 font-weight-bold">Action Movies</div>
                <div class="col-lg-6 col-md-6 col-4 text-right font-weight-bold"><a
                        href="{{ route("action-movies") }}" class="text-white text-decoration-none">More <i
                            class="fas fa-angle-right"></i></a></div>
            </div>
        </div>
        <div class="slider">
            <div class="owl-carousel">
                @foreach($action_movies as $movie)
                <div class="item shadow rounded bg-white">
                    <a href="{{ route("watch-movie", ['slug'  => $movie->slug]) }}" class="text-decoration-none">
                        <div class="image img-hover-zoom ">
                            <img src="{{ asset($movie->image) }}" alt="" class="img-fluid">
                        </div>
                        <div class="title text-center text-dark font-weight-bold">
                            {{$movie->movie_name  }}
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="new-movies pt-5">
    <div class="container">
        <div class="alert bg-dark text-white font-weight-bold">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-8 font-weight-bold">Romantic Movies</div>
                <div class="col-lg-6 col-md-6 col-4 text-right font-weight-bold"><a
                        href="{{ route("romantic-movies") }}" class="text-white text-decoration-none">More <i
                            class="fas fa-angle-right"></i></a></div>
            </div>
        </div>
        <div class="slider">
            <div class="owl-carousel">
                @foreach($romance_movies as $movie)
                <div class="item shadow rounded bg-white">
                    <a href="{{ route("watch-movie", ['slug'  => $movie->slug]) }}" class="text-decoration-none">
                        <div class="image img-hover-zoom ">
                            <img src="{{ asset($movie->image) }}" alt="" class="img-fluid">
                        </div>
                        <div class="title text-center text-dark font-weight-bold">
                            {{$movie->movie_name  }}
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="new-movies pt-5">
    <div class="container">
        <div class="alert bg-dark text-white font-weight-bold">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-8 font-weight-bold">Animation Movies</div>
                <div class="col-lg-6 col-md-6 col-4 text-right font-weight-bold"><a
                        href="{{ route("movie-category", ['slug'   =>  'animation-movie']) }}" class="text-white text-decoration-none">More <i
                            class="fas fa-angle-right"></i></a></div>
            </div>
        </div>
        <div class="slider">
            <div class="owl-carousel">
                @foreach($animation_movies as $movie)
                <div class="item shadow rounded bg-white">
                    <a href="{{ route("watch-movie", ['slug'  => $movie->slug]) }}" class="text-decoration-none">
                        <div class="image img-hover-zoom ">
                            <img src="{{ asset($movie->image) }}" alt="" class="img-fluid">
                        </div>
                        <div class="title text-center text-dark font-weight-bold">
                            {{$movie->movie_name  }}
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="new-movies pt-5">
    <div class="container">
        <div class="alert bg-dark text-white font-weight-bold">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-8 font-weight-bold">Thriller Movies</div>
                <div class="col-lg-6 col-md-6 col-4 text-right font-weight-bold"><a
                        href="{{ route("thriller-movies") }}" class="text-white text-decoration-none">More <i
                            class="fas fa-angle-right"></i></a></div>
            </div>
        </div>
        <div class="slider">
            <div class="owl-carousel">
                @foreach($thriller_movies as $movie)
                <div class="item shadow rounded bg-white">
                    <a href="{{ route("watch-movie", ['slug'  => $movie->slug]) }}" class="text-decoration-none">
                        <div class="image img-hover-zoom ">
                            <img src="{{ asset($movie->image) }}" alt="" class="img-fluid">
                        </div>
                        <div class="title text-center text-dark font-weight-bold">
                            {{$movie->movie_name  }}
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="new-movies pt-5">
    <div class="container">
        <div class="alert bg-dark text-white font-weight-bold">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-8 font-weight-bold">Horror Movies</div>
                <div class="col-lg-6 col-md-6 col-4 text-right font-weight-bold"><a
                        href="{{ route("horror-movies") }}" class="text-white text-decoration-none">More <i
                            class="fas fa-angle-right"></i></a></div>
            </div>
        </div>
        <div class="slider">
            <div class="owl-carousel">
                @foreach($horror_movies as $movie)
                <div class="item shadow rounded bg-white">
                    <a href="{{ route("watch-movie", ['slug'  => $movie->slug]) }}" class="text-decoration-none">
                        <div class="image img-hover-zoom ">
                            <img src="{{ asset($movie->image) }}" alt="" class="img-fluid">
                        </div>
                        <div class="title text-center text-dark font-weight-bold">
                            {{$movie->movie_name  }}
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="new-movies pt-5">
    <div class="container">
        <div class="alert bg-dark text-white font-weight-bold">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-8 font-weight-bold">Sci-Fi Movies</div>
                <div class="col-lg-6 col-md-6 col-4 text-right font-weight-bold"><a
                        href="{{ route("scifi-movies") }}" class="text-white text-decoration-none">More <i
                            class="fas fa-angle-right"></i></a></div>
            </div>
        </div>
        <div class="slider">
            <div class="owl-carousel">
                @foreach($scifi_movies as $movie)
                <div class="item shadow rounded bg-white">
                    <a href="{{ route("watch-movie", ['slug'  => $movie->slug]) }}" class="text-decoration-none">
                        <div class="image img-hover-zoom ">
                            <img src="{{ asset($movie->image) }}" alt="" class="img-fluid">
                        </div>
                        <div class="title text-center text-dark font-weight-bold">
                            {{$movie->movie_name  }}
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="new-movies pt-5 pb-5">
    <div class="container">
        <div class="alert bg-dark text-white font-weight-bold">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-8 font-weight-bold">Comedy Movies</div>
                <div class="col-lg-6 col-md-6 col-4 text-right font-weight-bold"><a
                        href="{{ route("comedy-movies") }}" class="text-white text-decoration-none">More <i
                            class="fas fa-angle-right"></i></a></div>
            </div>
        </div>
        <div class="slider">
            <div class="owl-carousel">
                @foreach($comedy_movies as $movie)
                <div class="item shadow rounded bg-white">
                    <a href="{{ route("watch-movie", ['slug'  => $movie->slug]) }}" class="text-decoration-none">
                        <div class="image img-hover-zoom ">
                            <img src="{{ asset($movie->image) }}" alt="" class="img-fluid">
                        </div>
                        <div class="title text-center text-dark font-weight-bold">
                            {{$movie->movie_name  }}
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script src="{{ asset("/") }}front/js/owl.carousel.min.js"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 6,
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            autoHeight: false,
            autoHeightClass: 'owl-height',
            nav: false,
            dots: false,
            responsiveClass: true,

            responsive: {
                0: {
                    items: 2,
                    loop: true
                },
                768: {
                    items: 4,
                    loop: true
                },
                1000: {
                    items: 6,
                    loop: true
                },
            }

        });
    </script>
@endsection