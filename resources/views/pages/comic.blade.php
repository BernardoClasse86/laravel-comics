@extends('layouts.app')

@section('main')

<main>

    <div class="hero"></div>

    <div class="blu-banner">

        <div class="banner comic">

            <div class="comic-card">

                <div class="comic-card-content">

                    <span class="product-type">comic book</span>

                    <img class="comic-cover" src="{{ $comics[0]['thumb']}}" alt="">

                    <div class="comic-gallery">view gallery</div>

                </div>

            </div>

        </div>

    </div>

    <div class="comic-container">

        <div class="row">

            <div class="col-8">

                <h1 class="comic-title">{{ $comics[0]['title']}}</h1>

                <div class="row price-banner">

                    <div class="col-9 row">

                        <p>U.S Price: <span class="price-tag">{{$comics[0]['price']}}</span></p>

                        <p class="availability">available</p>

                    </div>

                    <div class="col-3">

                        <p class="availability-check">check availability &#9660</p>

                    </div>

                </div>

                <div class="comic-desc">

                    <p>{{$comics[0]['description']}}</p>

                </div>
                
            </div>

            <div class="col-4">
            
                <p class="text">advertisement</p>
                
                <div class="adv-spec">
                    <img class="adv-thumb" src={{ Vite::asset('resources/img/main/adv.jpg')}} alt="">
                </div>
                
            </div>

        </div>

    </div>

    <div class="spec-bg">

        <div class="spec-container">
    
            <div class="spec-row">
    
                <div class="col-6">
    
                    <h3 class="desc-title">Talent</h3>
    
                    <div class="row-talent">
                        <h5 class="talent-title">Art by:</h5>
                        <ul class="row-talent-name">
                            @foreach ($comics[0]['artists'] as $artist)
                                <li class="talent-name">{{$artist}},</li>
                            @endforeach
                        </ul>
                    </div>
    
                    <div class="row-talent">
                        <h5 class="talent-title">Written by:</h5>
                        <ul class="row-talent-name">
                            @foreach ($comics[0]['writers'] as $writer)
                                <li class="talent-name">{{$writer}},</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
    
                <div class="col-6">
                    <h3 class="desc-title">Specs</h3>

                    <div class="row-spec">
                        <h5 class="spec-title">Series: </h5>
                        <p class="spec-comic type">{{$comics[0]['series']}}</p>
                    </div>

                    <div class="row-spec">
                        <h5 class="spec-title">U.S. Price: </h5>
                        <p class="spec-comic">{{$comics[0]['price']}}</p>
                    </div>

                    <div class="row-spec">
                        <h5 class="spec-title">On Sale Date: </h5>
                        <p class="spec-comic">{{$comics[0]['sale_date']}}</p>
                    </div>
                </div>
            </div>
    
        </div>

    </div>

    <div class="merch-banner">

        <div class="merch-container">

            <div class="merch-row">

                <div class="merch-col-3 border-right">
                    <div class="merch-item">
                        digital comics
                    </div>

                    <div>
                        <img class="merch-thumb" src={{ Vite::asset('resources/img/main/buy-comics-digital-comics.png')}} alt="">
                    </div>
                </div>

                <div class="merch-col-3 border-right">
                    <div class="merch-item">
                        shop dc
                    </div>

                    <div>
                        <img class="merch-thumb" src={{ Vite::asset('resources/img/main/buy-comics-merchandise.png')}} alt="">
                    </div>
                </div>

                <div class="merch-col-3 border-right">
                    <div class="merch-item">
                        comic shop locator
                    </div>

                    <div>
                        <img class="merch-thumb" src={{ Vite::asset('resources/img/main/buy-comics-shop-locator.png')}} alt="">
                    </div>
                </div>

                <div class="merch-col-3">
                    <div class="merch-item">
                        subscriptions
                    </div>

                    <div>
                        <img class="merch-thumb" src={{ Vite::asset('resources/img/main/buy-comics-subscriptions.png')}} alt="">
                    </div>
                </div>

            </div>

        </div>
        
    </div>


</main>

@endsection

@section('page-title', $page_title)