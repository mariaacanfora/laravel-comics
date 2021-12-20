@php
    
    $footer_links = [
        [
            "title" => "dc comics",
            "links" => [
                "Characters", 
                "Comics",
                "Movies",
                "TV",
                "Games",
                "Videos",
                "News"
            ]
        ],
        
        [
            "title" => "dc",
            "links" => [
                "Terms Of Use", 
                "Privacy policy (New)",
                "Ad choices",
                "Advertising",
                "Jobs",
                "Subscription",
                "Talent Workshops",
                "CPSC Certificates",
                "Ratings",
                "Shop Help",
                "Contact Us",
            ]
        ],

        [
            "title" => "sites",
            "links" => [
                "DC", 
                "MAD Magazine", 
                "DC Kids", 
                "DC Universe", 
                "DC Power Visa", 
            ]
        ],

        [
            "title" => "shop",
            "links" => [
                "Shop DC", 
                "Shop DC Collectibles",
            ]
        ],



    ];

    $social_links = [
        "/images/footer-facebook.png",
        "/images/footer-twitter.png",
        "/images/footer-youtube.png",
        "/images/footer-pinterest.png",
        "/images/footer-periscope.png",
    ]

@endphp


<footer>
    <div class="container-fluid py-5">
        <div class="container relative">
            <div class="row">
                <div class="col-6">
                    <div class="row row-cols-3">
                        @foreach($footer_links as $link_section)
                            <div class="d-flex flex-column">
                                <h3 class="text-white">{{strtoupper($link_section['title'])}}</h3>
                                @foreach($link_section['links'] as $link)
                                   <a href="#" class="text-secondary text-decoration-none">{{$link}}</a>
                                @endforeach
                            </div>
                        @endforeach
                    </div>

                    <span class="fs-6 text-secondary pt-4 d-inline-block">
                        All Site Content TM and © 2020 DC Entertainment, unless otherwise <a href="#" class="text-decoration-none">noted here</a>. All rights reserved.
                        <a href="#" class="text-decoration-none">Cookies Settings</a>
                    </span>
                </div>
            </div>

            <div class="dc-logo-container">
                <img src="/images/dc-logo-bg.png" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid after-footer py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <button class="btn-footer text-light">SIGN-UP NOW!</button>

            <div class="d-flex align-items-center social-container">
                <h3 class="d-inline-block pe-4 mb-0">FOLLOW US</h3>
                @foreach($social_links as $social)
                    <a href="#" class="d-inline-block pe-3"><img src="{{$social}}" alt="social logo"></a>
                @endforeach
            </div>
        </div>
    </div>
</footer>