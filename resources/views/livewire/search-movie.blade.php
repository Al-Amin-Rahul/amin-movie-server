<div class="">
    <div class="search-form">
        <input wire:model="search" type="text" class="form-control border-dark border-radius-99" autocomplete="off" name="search_field" placeholder="Search Movies">
    </div>
    @if(strlen($search) >= 2)
    <div class="position-absolute">
        @if($searchResults->count() > 0)
            <ul class="list-group">
                @foreach($searchResults as $result)
                    <a href="{{ route("watch-movie", ['slug'   =>  $result->slug]) }}" class="text-decoration-none">
                        <li class="list-group-item bg-dark text-white border flex">
                            <img src="{{asset($result->image)}}" width="30" alt="Photo">
                            <span class="pl-3">{{ $result->movie_name }}</span>
                        </li>
                    </a>
                @endforeach
            </ul>
        @else
            <div class="list-group-item w-100 bg-dark text-white">No Results Found </div>
        @endif
    </div>
    @endif
</div>
