@extends('layout.app')
@section('main-content')
<section class="first-section">
    <span class="series">CURRENT SERIES</span>
    <div class="container">
        <div class="flex">
            @foreach ($comics_array as $comics)
                <div class="card">
                    <a href="{{route("comics", [
                        "id" => $comics["id"]
                    ])}}">
                        <div class="card-image">
                            <img src="{{$comics["thumb"]}}" alt="{{$comics["title"]}}">
                        </div>
                        <div class="card-text">
                            <h2>{{$comics["series"]}}</h2>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <a href="#" class="btn full-blue">LOAD MORE</a>
</section>
<section class="second-section">
    <div class="container">
        <div class="merch">
            <ul class="flex">
                <li>
                    <a href="#">
                        <img src="{{asset('./images/buy-comics-digital-comics.png')}}" alt="">
                        <span>DIGITAL COMICS</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('./images/buy-comics-merchandise.png')}}" alt="">
                        <span>DC MERCHANDISE</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('./images/buy-comics-subscriptions.png')}}" alt="">
                        <span>SUBSCRIPTION</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('./images/buy-comics-shop-locator.png')}}" alt="">
                        <span>COMIC SHOP LOCATOR</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('./images/buy-dc-power-visa.svg')}}" alt="">
                        <span>DC POWER VISA</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection