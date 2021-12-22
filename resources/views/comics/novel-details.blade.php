@extends('layouts.default')

@section('main_content')
    <div class="container-fluid my-bg-primary py-5"></div>

    <div class="container px-0">
        <div class="img-novel-container">
            <img src="{{$novel["thumb"]}}" alt="novel poster">
            <span class="series-tag text-light px-2">{{strtoupper($novel["series"])}}</span>
            <span class="gallery-tag text-light px-2 w-100 text-center">VIEW GALLERY</span>
        </div>

        


        <div class="row my-5">
            <div class="col-9 pe-5">
                <h2 class="pb-3">ACTION COMICS #1000: THE DELUXE EDITION</h2>

                <div class="d-flex bg-green border-bottom">
                    <div class="text-start p-3"><span style="color: lightgray">U.S. Price:</span> <span style="color: white">{{$novel["price"]}}</span></div>
                    <div class="ms-auto text-end p-3"><span style="color: lightgray">AVAILABLE</span></div>
                    <div class="text-center border-start p-3"><a href="#" class="text-light text-decoration-none">Check Availability</a></div>
                </div>

                <p>{{$novel["description"]}}</p>
            </div>

            <div class="col-3">
                <p class="text-end mb-0">ADVERTISMENT</p>
                <img src="/images/adv.jpg" alt="adv image">
            </div>
        </div>
    </div>

    <div class="container-fluid details-container py-5">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <h3 class="pb-4 border-bottom">Talent</h3>
                    <div class="d-flex justify-content-between border-bottom">
                        <span class="me-auto">Art by:</span>
                        <div class="w-75">
                            @foreach($novel["artists"] as $key => $artist)
                                <a href="#">{{$artist}}</a>
                            @endforeach
                        </div>
                    </div>

                    <div class="d-flex justify-content-between border-bottom">
                        <span class="me-auto">Written by:</span>
                        <div class="w-75">
                            @foreach($novel["writers"] as $key => $writer)
                                <a href="#">{{$writer}}</a>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="col-5">
                    <h3 class="pb-4 border-bottom">Talent</h3>
                    <div class="d-flex justify-content-between border-bottom align-items-center">
                        <span class="me-auto">Series:</span>
                        <a href="#" class="w-50 m-0 py-2 d-inline-block text-decoration-none">{{strtoupper($novel["series"])}}</a>
                    </div>

                    <div class="d-flex justify-content-between border-bottom align-items-center">
                        <span class="me-auto">Price:</span>
                        <p class="w-50 m-0 py-2">{{$novel["price"]}}</p>
                    </div>

                    <div class="d-flex justify-content-between border-bottom align-items-center">
                        <span class="me-auto">On Sale Date:</span>
                        @php
                            $date = date_create($novel["sale_date"]);
                            //var_dump(date_format($date,"M d Y"))
                        @endphp
                        <p class="w-50 m-0 py-2">{{date_format($date,"M d Y")}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection