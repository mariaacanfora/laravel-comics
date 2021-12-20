@php
    $current_series_list = [
  [
    "thumb"=> "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX",
    "price"=>"$19.99",
    "series"=> "Action Comics",
    "type"=> "comic book"
  ],
  [
    "thumb"=> "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01",
    "price"=> "$3.99",
    "series"=> "American Vampire 1976",
    "type"=> "comic book"
  ],
  [
    "thumb"=> "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2018/08/AQMv4_UW_153-001_HD_5b7efa1745a9b8.08589135.jpg?itok=HPTtnrsb",
    "price"=> "$16.99",
    "series"=> "Aquaman",
    "type"=> "graphic novel"
  ],
  [
    "thumb"=> "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/06/batgirl_v5_1_5b23e1f1124941.50950783.jpg?itok=VnrJah76",
    "price"=> "$2.99",
    "series"=> "Batgirl",
    "type"=> "comic book"
  ],
  [
    "thumb"=> "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ",
    "price"=> "$3.99",
    "series"=> "Batman",
    "type"=> "comic book"
  ],
  [
    "thumb"=> "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ",
    "price"=> "$2.99",
    "series"=> "Batman Beyond",
    "type"=> "comic book"
  ],
  [
    "thumb"=> "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2019/08/BMSM_5d4361b7116261.74371456.jpg?itok=kEDR2OL8",
    "price"=> "$3.99",
    "series"=> "Batman/Superman",
    "type"=> "comic book"
  ],
  [
    "thumb"=> "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=azz5sfGk",
    "price"=> "$4.99",
    "series"=> "Batman/Superman Annual",
    "type"=> "comic book"
  ],
  [
    "thumb"=> "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMTJWZ_01_300-001_HD_5f5ff2307dcb37.34652945.jpg?itok=VswVjLR8",
    "price"=> "$5.99",
    "series"=> "Batman: The Joker War Zone",
    "type"=> "comic book"
  ],
  [
    "thumb"=> "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=ImNM2QBY",
    "price"=> "$6.99",
    "series"=> "Batman: Three Jokers",
    "type"=> "comic book"
  ],
  [
    "thumb"=> "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=sVwALbUX",
    "price"=> "$4.99",
    "series"=> "Batman: White Knight Presents: Harley Quinn",
    "type"=> "comic book"
  ],
  [
    "thumb"=> "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq",
    "price"=> "$16.99",
    "series"=> "Catwoman",
    "type"=> "graphic novel"
  ]
];

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

@section('page_title', 'DC Comics - Homepage')

@section('main_content')
    <div class="container-fluid hero"></div>

    <div class="container-fluid bg-dark">
        <div class="container pt-5">
            <div class="row row-cols-6">
                @foreach($current_series_list as $serie)
                    <div class="col card-container text-light">
                        <div class="img-container">
                            <img src="{{$serie['thumb']}}" alt="{{$serie['series']}}">
                        </div>
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