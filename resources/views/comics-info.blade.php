@extends('layout.app')
@section('main-content')
    <section class="single-comics">
        <div>
            <div class="container small">
                <div class="img-wrapper">
                    <img class="comics-cover" src="{{$single_comics["thumb"]}}" alt="">
                    <span>COMIC BOOK</span>
                    <span>VIEW GALLERY</span>
                </div>
            </div>
        </div>
        <div class="container small">
            <span class="adv">ADVERTISEMENT</span>
            <div class="flex">
                <div class="single-comics-text">
                    <h1>
                        {{$single_comics["title"]}}
                    </h1>
                    <div class="comics-price flex">
                        <div class="comics-price-left flex">
                            <span>
                                U.S. Price:
                                <span class="price-tag">
                                    {{$single_comics["price"]}}
                                </span>
                            </span>
                            <span>AVAILABLE</span>
                        </div>
                        <div class="comics-price-right">
                            Check Avaliability
                        </div>
                    </div>
                    <div class="comics-description">
                        <p>
                            {{$single_comics["description"]}}
                        </p>
                    </div>
                </div>
                <div class="single-comics-banner">
                    <img src="{{asset("images/adv.jpg")}}" alt="">
                </div>
            </div>
        </div>
        <div class="single-comics-info">
            <div class="container small">
                <div class="flex">
                    <div class="single-comics-talent">
                        <h3>Talent</h3>
                        <div class="flex">
                            <div>Art by:</div>
                            <div>
                                @foreach ($single_comics["artists"] as $artist)
                                    <a href="#">{{$artist}}</a>
                                    @if(!$loop->last)
                                        {{", "}}
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="flex">
                            <div>Written by:</div>
                            <div>
                                @foreach ($single_comics["writers"] as $writer)
                                    <a href="#">{{$writer}}</a>
                                    @if(!$loop->last)
                                        {{", "}}
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="single-comics-specs">
                        <h3>Specs</h3>
                        <div class="flex">
                            <div>Series:</div>
                            <div class="single-comics-specs-series">
                                <a href="#">{{$single_comics["series"]}}</a>
                            </div>
                        </div>
                        <div class="flex">
                            <div>U.S. Price:</div>
                            <div>
                                {{$single_comics["price"]}}
                            </div>
                        </div>
                        <div class="flex">
                            <div>On Sale Date:</div>
                            <div>
                                {{$single_comics["sale_date"]}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-comics-more-info">
            <div class="container small">
                <div class="flex">
                    <div class="more-info-card flex">
                        <div>
                            DIGITAL COMICS
                        </div>
                    </div>
                    <div class="more-info-card flex">
                        <div>
                            SHOP DC
                        </div>
                    </div>
                    <div class="more-info-card flex">
                        <div>
                            COMIC SHOP LOCATOR
                        </div>
                    </div>
                    <div class="more-info-card flex">
                        <div>
                            SUBSCRIPTIONS
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection