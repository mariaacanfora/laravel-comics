@php

    $main_links = [
        [
            "icon" => "/images/buy-comics-digital-comics.png",
            "text" => "digital comics"
        ],

        [
            "icon" => "/images/buy-comics-merchandise.png",
            "text" => "dc merchandise"
        ],

        [
            "icon" => "/images/buy-comics-subscriptions.png",
            "text" => "subscriptions"
        ],

        [
            "icon" => "/images/buy-comics-shop-locator.png",
            "text" => "comics shop locator"
        ],

        [
            "icon" => "/images/buy-dc-power-visa.svg",
            "text" => "dc power visa"
        ],
    ]
@endphp


@extends('layouts.default')

@section('page_title', 'DC Comics - Comics')

@section('main_content')
    <div class="container-fluid bg-dark">
        <div class="container pt-5">

            <div class="tag-container">
                <h3 class="series-tag text-light px-2">CURRENT SERIES</h3>
            </div>

            <div class="row row-cols-6">
                @foreach($current_series_list as $index => $serie)
                    <div class="col card-container text-light">
                        <a href="{{route('comics.novel-details', $index)}}" class="img-container d-flex">
                            <img src="{{$serie['thumb']}}" alt="{{$serie['series']}}">
                        </a>
                        <span class="d-inline-block pt-2">{{strtoupper($serie['series'])}}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container text-center pb-4">
            <button class="btn my-btn-primary rounded-0">LOAD MORE</button>
        </div>
    </div>

    <div class="container-fluid main-links-container py-5">
        <div class="container">
            <div class="row main-row-link">
                @foreach($main_links as $link)
                    <div class="col h-100 d-flex align-items-center justify-content-center">
                        @if(str_contains($link['icon'], '.svg'))
                            <img src="{{$link['icon']}}" alt="{{$link['icon']}} logo" class="main-logos-link" style="height: 80%">
                            @else
                            <img src="{{$link['icon']}}" alt="{{$link['icon']}} logo" class="main-logos-link">
                        @endif
                        <a href="#" class="text-white text-decoration-none">{{strtoupper($link['text'])}}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection