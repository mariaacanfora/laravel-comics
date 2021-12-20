@php
$nav_links = [
[
"text" => "CHARACTERS",
"route_name" => "characters.index"
],

[
"text" => "COMICS",
"route_name" => "comics.index"
],

[
"text" => "MOVIES",
"route_name" => "movies.index"
],

[
"text" => "TV",
"route_name" => "tv.index"
],

[
"text" => "GAMES",
"route_name" => "games.index"
],

[
"text" => "COLLECTIBLES",
"route_name" => "collectibles.index"
],

[
"text" => "VIDEOS",
"route_name" => "videos.index"
],

[
"text" => "FANS",
"route_name" => "fans.index"
],

[
"text" => "NEWS",
"route_name" => "news.index"
],

[
"text" => "SHOP",
"route_name" => "shop.index"
],
]


@endphp

<header>
    <div class="before-navbar text-end">
        <div class="container">
            <a href="#" class="mx-4 text-light text-decoration-none">DC POWER VISA</a>
            <a href="#" class="mx-4 text-light text-decoration-none">ADDITIONAL DC SITES</a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light py-3 align-items-center">
        <div class="container">

            <img src="/images/dc-logo.png" alt="dc-logo">

            <ul class="m-0">
                @foreach($nav_links as $link)
                <li class="d-inline-block">
                    <a href="{{route($link["route_name"])}}" class="text-decoration-none text-dark d-inline-block px-2">{{$link["text"]}}</a>
                </li>
                @endforeach
            </ul>

            <div class="d-flex align-items-center search-container">

                
                <input type="search" class="h-100 flex-grow-1 border-0 w-100"
                placeholder="Search" style="padding: 5px 0; text-align: right;">
                
                <i class="fas fa-search search-txt px-3 text-center"></i>
            </div>
        </div>
        </div>
    </nav>
    </div>
</header>
