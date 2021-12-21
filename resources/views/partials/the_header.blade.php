@php
    $route_name = Request::route()->getName();

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
                    @php
                        $prefix = explode(".", $link["route_name"])[0];
                        $active = strpos($route_name, $prefix) === 0;
                    @endphp

                <li class="d-inline-block">
                    <a href="{{route($link["route_name"])}}" class="text-decoration-none text-dark d-inline-block px-2 {{$active ? 'active' : '' }}">{{$link["text"]}}</a>
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
