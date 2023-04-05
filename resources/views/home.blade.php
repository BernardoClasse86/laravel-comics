@extends('layouts.app')

@section('main')

<main class="main-content">

    <div class="hero"></div>

    <div class="comics-content">

        <div class="comic-series">current series</div>

        <div class="comics-container">

            <ul class="grid">

                @foreach ($comics as $comic)
                    
                <li class="comics-card">

                    <img class="comic__thumb" src="{{ $comic['thumb'] }}" alt="">
            
                    <h3 class="card__title">{{ $comic['title']}}</h3>
            
                </li>

                @endforeach

            </ul>

        </div>

        <div class="main-btn">Load More</div>

    </div>

    <div class="merch-outro">

        <div class="merch container">

            <ul class="merch-row">

                <li class="merch__item">

                    <img class="merch-item__thumb" src={{ Vite::asset('resources/img/main/buy-comics-digital-comics.png')}} alt="">
                    <p class="merch-item__text">digital comics</p>

                </li>

                <li class="merch__item">

                    <img class="merch-item__thumb" src={{ Vite::asset('resources/img/main/buy-comics-merchandise.png')}} alt="">
                    <p class="merch-item__text">dc merchandise</p>

                </li>

                <li class="merch__item">

                    <img class="merch-item__thumb" src={{ Vite::asset('resources/img/main/buy-comics-subscriptions.png')}} alt="">
                    <p class="merch-item__text">subscription</p>

                </li>

                <li class="merch__item">

                    <img class="merch-item__thumb" src={{ Vite::asset('resources/img/main/buy-comics-shop-locator.png')}} alt="">
                    <p class="merch-item__text">comic store locator</p>

                </li>

                <li class="merch__item">

                    <img class="merch-item__thumb" src={{ Vite::asset('resources/img/main/buy-dc-power-visa.svg')}} alt="">
                    <p class="merch-item__text">dc power visa</p>

                </li>

            </ul>

        </div>

    </div>

</main>

@endsection

@section('page-title', $page_title)