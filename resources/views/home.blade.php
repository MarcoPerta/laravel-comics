@extends('layout.app')
@section('page-title', 'Home DC-comics')

@section('main')

    <div class="section">
        <div class="container py-5">

            <div class="d-flex flex-wrap">

                @foreach ($comics as $elem)
                    <div class="card-container d-flex flex-column">
                        <div class="card-image"><img class="image-comic" src="{{ $elem['thumb'] }}" alt=""></div>
                        <div class="card-text text-white mb-4">{{ $elem['title'] }}</div>
                    </div>
                @endforeach

            </div>

        </div>

        <div class="text-center ">
            <button class="bg-primary text-white p-3 border-0">LOAD MORE</button>
        </div>

        <div class="container-icons-blue bg-primary">
            <div class="icons-blue w-75 m-auto d-flex p-4 justify-content-between">
                <div>
                    <a href="" class="d-flex p-3">
                        <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="" class="img-comics">
                        <h4 class="text-comics">DIGITAL COMICS</h4>
                    </a>
                </div>
                <div>
                    <a href="" class="d-flex p-3"> 
                        <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="" class="img-comics">
                        <h4 class="text-comics">DC MERCHANDISE</h4>
                    </a>
                </div>
                <div>
                    <a href="" class="d-flex p-3">
                        <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="" class="img-comics">
                        <h4 class="text-comics">SUBSCRIPTION</h4>
                    </a>
                </div>
                <div>
                    <a href="" class="d-flex p-3">
                        <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="" class="img-comics">
                        <h4 class="text-comics">COMIC SHOP LOCATION</h4>
                    </a>
                </div>
                <div>
                    <a href="" class="d-flex p-3">
                        <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="" class="img-comics">
                        <h4 class="text-comics">DC POWER VISA</h4>
                    </a>
                </div>
            </div>

        </div>

    @endsection
